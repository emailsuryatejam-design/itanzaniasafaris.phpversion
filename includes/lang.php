<?php
/**
 * Language Detection & Translation System
 * Detects language from URL prefix, loads translations, provides t() and lang_url() helpers.
 */

// Available languages
$available_langs = ['en', 'de'];
$default_lang = 'en';

// Slug mappings: page identifier => localized slug per language
$slug_map = [
    'index'          => ['en' => '',               'de' => ''],
    'safaris'        => ['en' => 'safaris',        'de' => 'safaris'],
    'kilimanjaro'    => ['en' => 'kilimanjaro',    'de' => 'kilimanjaro'],
    'zanzibar'       => ['en' => 'zanzibar',       'de' => 'sansibar'],
    'accommodations' => ['en' => 'accommodations', 'de' => 'unterkuenfte'],
    'about'          => ['en' => 'about',          'de' => 'ueber-uns'],
    'blog'           => ['en' => 'blog',           'de' => 'blog'],
    'blog-post'      => ['en' => 'blog-post',      'de' => 'blog-post'],
    'contact'        => ['en' => 'contact',        'de' => 'kontakt'],
];

// Detect language from query parameter (set by .htaccess rewrite) or URL
if (isset($_GET['lang']) && in_array($_GET['lang'], $available_langs)) {
    $current_lang = $_GET['lang'];
} else {
    $current_lang = $default_lang;
}

// Load language file
$lang_file = __DIR__ . '/../lang/' . $current_lang . '.php';
if (file_exists($lang_file)) {
    $translations = include $lang_file;
} else {
    // Fallback to English
    $translations = include __DIR__ . '/../lang/en.php';
    $current_lang = 'en';
}

/**
 * Get a translated string by dot-notation key.
 * e.g. t('nav.home') returns $translations['nav']['home']
 */
function t($key, $fallback = null) {
    global $translations;
    $keys = explode('.', $key);
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
 * For English (default), no prefix is added.
 * For other languages, the prefix is prepended.
 *
 * Usage: lang_url('contact.php') => '/de/kontakt' (if German)
 *        lang_url('contact.php') => 'contact.php' (if English)
 *        lang_url('blog-post.php?slug=xyz') => '/de/blog-post?slug=xyz' (if German)
 */
function lang_url($path) {
    global $current_lang, $slug_map;

    // Parse query string if present
    $query = '';
    if (strpos($path, '?') !== false) {
        list($path, $query) = explode('?', $path, 2);
        $query = '?' . $query;
    }

    // Extract page name from path (remove .php extension)
    $page = basename($path, '.php');

    // For special landing pages, keep them as-is with lang param
    if (!isset($slug_map[$page])) {
        if ($current_lang === 'en') {
            return $path . $query;
        }
        $sep = $query ? '&' : '?';
        return $path . $query . $sep . 'lang=' . $current_lang;
    }

    if ($current_lang === 'en') {
        // English: keep original file-based URLs
        if ($page === 'index') {
            return '/' . ltrim($query, '');
        }
        return $page . '.php' . $query;
    }

    // Other languages: use localized slug with prefix
    $slug = isset($slug_map[$page][$current_lang]) ? $slug_map[$page][$current_lang] : $page;

    if ($slug === '') {
        // Home page
        return '/' . $current_lang . '/' . ltrim($query, '');
    }

    return '/' . $current_lang . '/' . $slug . $query;
}

/**
 * Get the URL for the same page in a different language.
 * Used by the language switcher.
 */
function get_lang_switch_url($target_lang) {
    global $current_lang, $slug_map;

    // Determine current page
    $current_page = basename($_SERVER['PHP_SELF'], '.php');

    // Get query string (minus 'lang' parameter)
    $params = $_GET;
    unset($params['lang']);
    $query = !empty($params) ? '?' . http_build_query($params) : '';

    if ($target_lang === 'en') {
        // English URLs: no prefix, use .php extension
        if ($current_page === 'index') {
            return '/' . ltrim($query, '');
        }
        return '/' . $current_page . '.php' . $query;
    }

    // Target language URL with prefix and localized slug
    $slug = isset($slug_map[$current_page][$target_lang]) ? $slug_map[$current_page][$target_lang] : $current_page;

    if ($slug === '') {
        return '/' . $target_lang . '/' . ltrim($query, '');
    }

    return '/' . $target_lang . '/' . $slug . $query;
}

/**
 * Get the full canonical URL for a page in a given language.
 */
function get_canonical_url($lang = null) {
    global $current_lang, $slug_map;
    if ($lang === null) $lang = $current_lang;

    $base = 'https://itanzaniasafaris.com';
    $current_page = basename($_SERVER['PHP_SELF'], '.php');

    $params = $_GET;
    unset($params['lang']);
    $query = !empty($params) ? '?' . http_build_query($params) : '';

    if ($lang === 'en') {
        if ($current_page === 'index') {
            return $base . '/' . ltrim($query, '');
        }
        return $base . '/' . $current_page . '.php' . $query;
    }

    $slug = isset($slug_map[$current_page][$lang]) ? $slug_map[$current_page][$lang] : $current_page;
    if ($slug === '') {
        return $base . '/' . $lang . '/' . ltrim($query, '');
    }
    return $base . '/' . $lang . '/' . $slug . $query;
}
