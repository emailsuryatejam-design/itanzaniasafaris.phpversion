<?php
/**
 * Language Detection & Translation System
 * - Auto-detects language from browser Accept-Language header
 * - Respects explicit lang param and persistent cookie
 * - Supports: en, de, es, zh, tr
 */

$available_langs = ['en', 'de', 'es', 'zh', 'tr'];
$default_lang    = 'en';

// Slug mappings: page identifier => localized slug per language
$slug_map = [
    'index'          => ['en' => '',                'de' => '',               'es' => '',               'zh' => '',               'tr' => ''],
    'safaris'        => ['en' => 'safaris',          'de' => 'safaris',        'es' => 'safaris',        'zh' => 'safaris',        'tr' => 'safariler'],
    'kilimanjaro'    => ['en' => 'kilimanjaro',      'de' => 'kilimanjaro',    'es' => 'kilimanjaro',    'zh' => 'kilimanjaro',    'tr' => 'kilimanjaro'],
    'zanzibar'       => ['en' => 'zanzibar',         'de' => 'sansibar',       'es' => 'zanzibar',       'zh' => 'zanzibar',       'tr' => 'zanzibar'],
    'accommodations' => ['en' => 'accommodations',   'de' => 'unterkuenfte',   'es' => 'alojamientos',   'zh' => 'accommodations', 'tr' => 'konaklamalar'],
    'about'          => ['en' => 'about',            'de' => 'ueber-uns',      'es' => 'sobre-nosotros', 'zh' => 'about',          'tr' => 'hakkimizda'],
    'blog'           => ['en' => 'blog',             'de' => 'blog',           'es' => 'blog',           'zh' => 'blog',           'tr' => 'blog'],
    'blog-post'      => ['en' => 'blog-post',        'de' => 'blog-post',      'es' => 'blog-post',      'zh' => 'blog-post',      'tr' => 'blog-yazisi'],
    'contact'        => ['en' => 'contact',          'de' => 'kontakt',        'es' => 'contacto',       'zh' => 'contact',        'tr' => 'iletisim'],
    '10-day-northern-circuit-safari' => ['en' => '10-day-northern-circuit-safari', 'de' => '10-day-northern-circuit-safari', 'es' => '10-day-northern-circuit-safari', 'zh' => '10-day-northern-circuit-safari', 'tr' => '10-day-northern-circuit-safari'],
    'feb-march-2026-safari'          => ['en' => 'feb-march-2026-safari',          'de' => 'feb-march-2026-safari',          'es' => 'feb-march-2026-safari',          'zh' => 'feb-march-2026-safari',          'tr' => 'feb-march-2026-safari'],
    'mar-april-2026-safari-zanzibar' => ['en' => 'mar-april-2026-safari-zanzibar', 'de' => 'mar-april-2026-safari-zanzibar', 'es' => 'mar-april-2026-safari-zanzibar', 'zh' => 'mar-april-2026-safari-zanzibar', 'tr' => 'mar-april-2026-safari-zanzibar'],
];

/**
 * Detect preferred language from Accept-Language header.
 */
function detect_browser_lang($accept_header, $available_langs, $default) {
    if (empty($accept_header)) return $default;

    $lang_map = [
        'en' => 'en',
        'de' => 'de',
        'es' => 'es',
        'ca' => 'es', // Catalan -> Spanish fallback
        'zh' => 'zh',
        'tr' => 'tr',
    ];

    $langs = [];
    preg_match_all(
        '/([a-z]{1,8}(?:-[a-z]{1,8})*)\s*(?:;\s*q\s*=\s*(1(?:\.0{0,3})?|0(?:\.[0-9]{0,3})?))?/i',
        $accept_header,
        $matches
    );
    if (!empty($matches[1])) {
        foreach ($matches[1] as $i => $lang) {
            $q = (isset($matches[2][$i]) && $matches[2][$i] !== '') ? (float)$matches[2][$i] : 1.0;
            $langs[strtolower($lang)] = $q;
        }
        arsort($langs);
    }

    foreach ($langs as $tag => $q) {
        $primary = explode('-', $tag)[0];
        if (isset($lang_map[$primary]) && in_array($lang_map[$primary], $available_langs)) {
            return $lang_map[$primary];
        }
    }
    return $default;
}

// Priority 1: Explicit ?lang= parameter (set cookie & use)
if (isset($_GET['lang']) && in_array($_GET['lang'], $available_langs)) {
    $current_lang = $_GET['lang'];
    setcookie('preferred_lang', $current_lang, time() + 60 * 60 * 24 * 365, '/');

// Priority 2: Persistent cookie (user previously chose a language)
} elseif (isset($_COOKIE['preferred_lang']) && in_array($_COOKIE['preferred_lang'], $available_langs)) {
    $current_lang = $_COOKIE['preferred_lang'];

// Priority 3: Browser Accept-Language auto-detection
} else {
    $accept_header = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : '';
    $current_lang  = detect_browser_lang($accept_header, $available_langs, $default_lang);
}

// Load language file
$lang_file = __DIR__ . '/../lang/' . $current_lang . '.php';
if (file_exists($lang_file)) {
    $translations = include $lang_file;
} else {
    $translations = include __DIR__ . '/../lang/en.php';
    $current_lang = 'en';
}

/**
 * Get a translated string by dot-notation key.
 * e.g. t('nav.home')
 */
function t($key, $fallback = null) {
    global $translations;
    $keys  = explode('.', $key);
    $value = $translations;
    foreach ($keys as $k) {
        if (is_array($value) && isset($value[$k])) {
            $value = $value[$k];
        } else {
            return $fallback !== null ? $fallback : $key;
        }
    }
    return $value;
}

/**
 * Generate a URL with the correct language prefix.
 */
function lang_url($path) {
    global $current_lang, $slug_map;

    $query = '';
    if (strpos($path, '?') !== false) {
        list($path, $query) = explode('?', $path, 2);
        $query = '?' . $query;
    }

    $page = basename($path, '.php');

    if (!isset($slug_map[$page])) {
        if ($current_lang === 'en') return $path . $query;
        $sep = $query ? '&' : '?';
        return $path . $query . $sep . 'lang=' . $current_lang;
    }

    if ($current_lang === 'en') {
        return $page === 'index' ? '/' . ltrim($query, '') : $page . '.php' . $query;
    }

    $slug = isset($slug_map[$page][$current_lang]) ? $slug_map[$page][$current_lang] : $page;
    if ($slug === '') return '/' . $current_lang . '/' . ltrim($query, '');
    return '/' . $current_lang . '/' . $slug . $query;
}

/**
 * Get the URL for the same page in a different language (language switcher).
 */
function get_lang_switch_url($target_lang) {
    global $slug_map;

    $current_page = basename($_SERVER['PHP_SELF'], '.php');
    $params = $_GET;
    unset($params['lang']);
    // Always include lang param so the cookie gets updated on every language switch
    $params['lang'] = $target_lang;
    $query = '?' . http_build_query($params);

    if ($target_lang === 'en') {
        return $current_page === 'index' ? '/' . $query : '/' . $current_page . '.php' . $query;
    }

    $slug = isset($slug_map[$current_page][$target_lang]) ? $slug_map[$current_page][$target_lang] : $current_page;
    if ($slug === '') return '/' . $target_lang . '/' . $query;
    return '/' . $target_lang . '/' . $slug . $query;
}

/**
 * Get the full canonical URL for a page in a given language.
 */
function get_canonical_url($lang = null) {
    global $current_lang, $slug_map;
    if ($lang === null) $lang = $current_lang;

    $base         = 'https://itanzaniasafaris.com';
    $current_page = basename($_SERVER['PHP_SELF'], '.php');
    $params       = $_GET;
    unset($params['lang']);
    $query = !empty($params) ? '?' . http_build_query($params) : '';

    if ($lang === 'en') {
        return $current_page === 'index'
            ? $base . '/' . ltrim($query, '')
            : $base . '/' . $current_page . '.php' . $query;
    }

    $slug = isset($slug_map[$current_page][$lang]) ? $slug_map[$current_page][$lang] : $current_page;
    if ($slug === '') return $base . '/' . $lang . '/' . ltrim($query, '');
    return $base . '/' . $lang . '/' . $slug . $query;
}
