<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? $page_title . ' | iTanzania Safaris' : 'iTanzania Safaris - Authentic Tanzania Safari Adventures'; ?></title>
  <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Premium Tanzania safari operator specializing in wildlife safaris, Kilimanjaro climbing, and Zanzibar beach holidays. Locally owned DMC based in Arusha.'; ?>">
  <meta property="og:title" content="<?php echo isset($og_title) ? $og_title : 'iTanzania Safaris'; ?>">
  <meta property="og:description" content="<?php echo isset($og_description) ? $og_description : 'Authentic Tanzania Safari Adventures'; ?>">
  <meta property="og:image" content="<?php echo isset($og_image) ? $og_image : 'images/og-image.jpg'; ?>">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="icon" type="image/png" href="images/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css?v=20260216">
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
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TT57GCJT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- Header -->
<header class="site-header" id="site-header">
  <nav class="header-nav">
    <!-- Logo -->
    <a href="index.php" class="header-logo" style="z-index:1001;flex-shrink:0;">
      <img src="images/logo.png" alt="iTanzania Safaris">
    </a>

    <!-- Desktop Navigation -->
    <div class="desktop-nav">
      <a href="index.php" <?php if($current_page=='index') echo 'style="color:var(--secondary)"'; ?>>Home</a>
      <a href="safaris.php" <?php if($current_page=='safaris') echo 'style="color:var(--secondary)"'; ?>>Safaris</a>
      <a href="kilimanjaro.php" <?php if($current_page=='kilimanjaro') echo 'style="color:var(--secondary)"'; ?>>Kilimanjaro</a>
      <a href="zanzibar.php" <?php if($current_page=='zanzibar') echo 'style="color:var(--secondary)"'; ?>>Zanzibar</a>
      <a href="accommodations.php" <?php if($current_page=='accommodations') echo 'style="color:var(--secondary)"'; ?>>Accommodations</a>
      <a href="about.php" <?php if($current_page=='about') echo 'style="color:var(--secondary)"'; ?>>About</a>
      <a href="contact.php" <?php if($current_page=='contact') echo 'style="color:var(--secondary)"'; ?>>Contact</a>
      <a href="contact.php" class="nav-cta">Plan Your Safari</a>
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
  <img src="images/logo.png" alt="iTanzania Safaris" class="mobile-logo" style="border-radius:50%;">
  <a href="index.php">Home</a>
  <a href="safaris.php">Safaris</a>
  <a href="kilimanjaro.php">Kilimanjaro</a>
  <a href="zanzibar.php">Zanzibar</a>
  <a href="accommodations.php">Accommodations</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>
  <a href="contact.php" class="nav-cta" style="margin-top:1rem;">Plan Your Safari</a>
</div>

<main>
