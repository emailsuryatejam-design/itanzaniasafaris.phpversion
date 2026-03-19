<?php
include_once __DIR__ . '/lang.php';
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? $page_title . ' | iTanzania Safaris' : t('seo.default_title'); ?></title>
  <meta name="description" content="<?php echo isset($page_description) ? $page_description : t('seo.default_description'); ?>">
  <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' | iTanzania Safaris' : t('seo.default_title'); ?>">
  <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : t('seo.default_description'); ?>">
  <meta property="og:image" content="<?php echo isset($og_image) ? $og_image : 'https://itanzaniasafaris.com/images/og-image.jpg'; ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="iTanzania Safaris">
  <meta property="og:locale" content="<?php echo $current_lang === 'zh' ? 'zh_CN' : ($current_lang === 'de' ? 'de_DE' : ($current_lang === 'es' ? 'es_ES' : ($current_lang === 'tr' ? 'tr_TR' : 'en_US'))); ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title . ' | iTanzania Safaris' : t('seo.default_title'); ?>">
  <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : t('seo.default_description'); ?>">
  <meta name="twitter:image" content="<?php echo isset($og_image) ? $og_image : 'https://itanzaniasafaris.com/images/og-image.jpg'; ?>">
  <link rel="canonical" href="<?php echo get_canonical_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo get_canonical_url('en'); ?>">
  <link rel="alternate" hreflang="de" href="<?php echo get_canonical_url('de'); ?>">
  <link rel="alternate" hreflang="es" href="<?php echo get_canonical_url('es'); ?>">
  <link rel="alternate" hreflang="zh" href="<?php echo get_canonical_url('zh'); ?>">
  <link rel="alternate" hreflang="tr" href="<?php echo get_canonical_url('tr'); ?>">
  <link rel="alternate" hreflang="x-default" href="<?php echo get_canonical_url('en'); ?>">
  <link rel="icon" type="image/png" href="/images/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/styles.css?v=20260319">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TT57GCJT');</script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-RY4C6XBE9S"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-RY4C6XBE9S');
  </script>
  <?php if (isset($extra_head)) echo $extra_head; ?>
</head>
<body<?php if($current_page=='blog-post') echo ' class="blog-page"'; ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TT57GCJT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- Header -->
<header class="site-header" id="site-header">
  <nav class="header-nav">
    <!-- Logo -->
    <a href="<?php echo lang_url('index.php'); ?>" class="header-logo" style="z-index:1001;flex-shrink:0;">
      <img src="/images/logo.png" alt="iTanzania Safaris">
    </a>

    <!-- Desktop Navigation -->
    <div class="desktop-nav">
      <a href="<?php echo lang_url('index.php'); ?>" <?php if($current_page=='index') echo 'style="color:var(--secondary)"'; ?>><?php echo t('nav.home'); ?></a>
      <a href="<?php echo lang_url('safaris.php'); ?>" <?php if($current_page=='safaris') echo 'style="color:var(--secondary)"'; ?>><?php echo t('nav.safaris'); ?></a>
      <a href="<?php echo lang_url('kilimanjaro.php'); ?>" <?php if($current_page=='kilimanjaro') echo 'style="color:var(--secondary)"'; ?>><?php echo t('nav.kilimanjaro'); ?></a>
      <a href="<?php echo lang_url('zanzibar.php'); ?>" <?php if($current_page=='zanzibar') echo 'style="color:var(--secondary)"'; ?>><?php echo t('nav.zanzibar'); ?></a>
      <a href="<?php echo lang_url('accommodations.php'); ?>" <?php if($current_page=='accommodations') echo 'style="color:var(--secondary)"'; ?>><?php echo t('nav.accommodations'); ?></a>
      <a href="<?php echo lang_url('about.php'); ?>" <?php if($current_page=='about') echo 'style="color:var(--secondary)"'; ?>><?php echo t('nav.about'); ?></a>
      <a href="<?php echo lang_url('blog.php'); ?>" <?php if($current_page=='blog' || $current_page=='blog-post') echo 'style="color:var(--secondary)"'; ?>><?php echo t('nav.blog'); ?></a>
      <a href="<?php echo lang_url('contact.php'); ?>" <?php if($current_page=='contact') echo 'style="color:var(--secondary)"'; ?>><?php echo t('nav.contact'); ?></a>
      <div class="lang-switcher" style="position:relative;">
        <button class="lang-toggle" style="background:none;border:1px solid rgba(255,255,255,0.3);color:inherit;padding:4px 10px;border-radius:6px;cursor:pointer;font-size:0.8rem;font-weight:600;text-transform:uppercase;display:flex;align-items:center;gap:4px;">
          <?php echo strtoupper($current_lang); ?>
          <svg width="10" height="10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="lang-dropdown" style="display:none;position:absolute;top:100%;right:0;margin-top:6px;background:#fff;border-radius:8px;box-shadow:0 4px 12px rgba(0,0,0,0.15);overflow:hidden;min-width:130px;z-index:1002;">
          <a href="<?php echo get_lang_switch_url('en'); ?>" style="display:block;padding:8px 14px;color:#333;text-decoration:none;font-size:0.85rem;<?php if($current_lang==='en') echo 'font-weight:700;background:#f5f5f5;'; ?>">🇬🇧 English</a>
          <a href="<?php echo get_lang_switch_url('de'); ?>" style="display:block;padding:8px 14px;color:#333;text-decoration:none;font-size:0.85rem;<?php if($current_lang==='de') echo 'font-weight:700;background:#f5f5f5;'; ?>">🇩🇪 Deutsch</a>
          <a href="<?php echo get_lang_switch_url('es'); ?>" style="display:block;padding:8px 14px;color:#333;text-decoration:none;font-size:0.85rem;<?php if($current_lang==='es') echo 'font-weight:700;background:#f5f5f5;'; ?>">🇪🇸 Español</a>
          <a href="<?php echo get_lang_switch_url('zh'); ?>" style="display:block;padding:8px 14px;color:#333;text-decoration:none;font-size:0.85rem;<?php if($current_lang==='zh') echo 'font-weight:700;background:#f5f5f5;'; ?>">🇨🇳 中文</a>
          <a href="<?php echo get_lang_switch_url('tr'); ?>" style="display:block;padding:8px 14px;color:#333;text-decoration:none;font-size:0.85rem;<?php if($current_lang==='tr') echo 'font-weight:700;background:#f5f5f5;'; ?>">🇹🇷 Türkçe</a>
        </div>
      </div>
      <a href="<?php echo lang_url('contact.php'); ?>" class="nav-cta"><?php echo t('nav.plan_safari'); ?></a>
    </div>

    <!-- Mobile Menu Button -->
    <button class="mobile-menu-btn" aria-label="Toggle menu">
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
  </nav>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobile-menu">
  <img src="/images/logo.png" alt="iTanzania Safaris" class="mobile-logo" style="border-radius:50%;">
  <a href="<?php echo lang_url('index.php'); ?>"><?php echo t('nav.home'); ?></a>
  <a href="<?php echo lang_url('safaris.php'); ?>"><?php echo t('nav.safaris'); ?></a>
  <a href="<?php echo lang_url('kilimanjaro.php'); ?>"><?php echo t('nav.kilimanjaro'); ?></a>
  <a href="<?php echo lang_url('zanzibar.php'); ?>"><?php echo t('nav.zanzibar'); ?></a>
  <a href="<?php echo lang_url('accommodations.php'); ?>"><?php echo t('nav.accommodations'); ?></a>
  <a href="<?php echo lang_url('about.php'); ?>"><?php echo t('nav.about'); ?></a>
  <a href="<?php echo lang_url('blog.php'); ?>"><?php echo t('nav.blog'); ?></a>
  <a href="<?php echo lang_url('contact.php'); ?>"><?php echo t('nav.contact'); ?></a>
  <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:6px;margin-top:0.5rem;">
    <a href="<?php echo get_lang_switch_url('en'); ?>" style="text-align:center;padding:7px 4px;border-radius:6px;font-size:0.78rem;font-weight:600;<?php echo $current_lang==='en' ? 'background:var(--secondary);color:#fff;' : 'background:rgba(255,255,255,0.1);color:#fff;'; ?>">🇬🇧 EN</a>
    <a href="<?php echo get_lang_switch_url('de'); ?>" style="text-align:center;padding:7px 4px;border-radius:6px;font-size:0.78rem;font-weight:600;<?php echo $current_lang==='de' ? 'background:var(--secondary);color:#fff;' : 'background:rgba(255,255,255,0.1);color:#fff;'; ?>">🇩🇪 DE</a>
    <a href="<?php echo get_lang_switch_url('es'); ?>" style="text-align:center;padding:7px 4px;border-radius:6px;font-size:0.78rem;font-weight:600;<?php echo $current_lang==='es' ? 'background:var(--secondary);color:#fff;' : 'background:rgba(255,255,255,0.1);color:#fff;'; ?>">🇪🇸 ES</a>
    <a href="<?php echo get_lang_switch_url('zh'); ?>" style="text-align:center;padding:7px 4px;border-radius:6px;font-size:0.78rem;font-weight:600;<?php echo $current_lang==='zh' ? 'background:var(--secondary);color:#fff;' : 'background:rgba(255,255,255,0.1);color:#fff;'; ?>">🇨🇳 中文</a>
    <a href="<?php echo get_lang_switch_url('tr'); ?>" style="text-align:center;padding:7px 4px;border-radius:6px;font-size:0.78rem;font-weight:600;<?php echo $current_lang==='tr' ? 'background:var(--secondary);color:#fff;' : 'background:rgba(255,255,255,0.1);color:#fff;'; ?>">🇹🇷 TR</a>
  </div>
  <a href="<?php echo lang_url('contact.php'); ?>" class="nav-cta" style="margin-top:1rem;"><?php echo t('nav.plan_safari'); ?></a>
</div>

<main>
