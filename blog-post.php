<?php
include_once 'includes/lang.php';
include 'includes/blog-data.php';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$post = getBlogBySlug($slug);
if (!$post) { header('Location: ' . lang_url('blog.php')); exit; }
$post = localizePost($post, $current_lang);

$page_title = $post['title'];
$page_description = $post['meta_description'];
$og_title = $post['title'] . ' | iTanzania Safaris';
$og_description = $post['meta_description'];
$og_image = $post['image'];

// BlogPosting schema JSON-LD (rich result eligible)
// Use clean slug-based canonical URL (not ?slug= query parameter)
$canonical_url = 'https://itanzaniasafaris.com/' . $post['slug'];
$image_url = (strpos($post['image'], 'http') === 0) ? $post['image'] : 'https://itanzaniasafaris.com' . $post['image'];
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'BlogPosting',
  'headline' => $post['title'],
  'description' => $post['meta_description'],
  'image' => [
    '@type' => 'ImageObject',
    'url' => $image_url,
    'width' => 1200,
    'height' => 630
  ],
  'inLanguage' => $current_lang,
  'keywords' => isset($post['keywords']) ? $post['keywords'] : 'Tanzania safari, Africa safari',
  'articleSection' => $post['category'],
  'author' => [
    '@type' => 'Person',
    'name' => 'Safari Expert Team — iTanzania Safaris',
    'url' => 'https://itanzaniasafaris.com/about',
    'worksFor' => ['@type' => 'Organization', 'name' => 'iTanzania Safaris', 'url' => 'https://itanzaniasafaris.com'],
    'knowsAbout' => ['Tanzania Safari', 'Great Migration', 'Serengeti', 'Ngorongoro Crater', 'Kilimanjaro', 'East Africa Wildlife'],
    'jobTitle' => 'Tanzania Safari Guides & Experts',
  ],
  'publisher' => [
    '@type' => 'Organization',
    'name' => 'iTanzania Safaris',
    'url' => 'https://itanzaniasafaris.com',
    'logo' => ['@type' => 'ImageObject', 'url' => 'https://itanzaniasafaris.com/images/logo.png', 'width' => 200, 'height' => 200]
  ],
  'datePublished' => $post['date'],
  'dateModified' => isset($post['date_modified']) ? $post['date_modified'] : $post['date'],
  'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $canonical_url],
  'url' => $canonical_url,
  'isPartOf' => [
    '@type' => 'Blog',
    '@id' => 'https://itanzaniasafaris.com/blog',
    'name' => 'iTanzania Safaris Blog',
    'publisher' => ['@type' => 'Organization', 'name' => 'iTanzania Safaris']
  ]
];

// BreadcrumbList schema
$breadcrumb = [
  '@context' => 'https://schema.org',
  '@type' => 'BreadcrumbList',
  'itemListElement' => [
    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://itanzaniasafaris.com/'],
    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => 'https://itanzaniasafaris.com/blog'],
    ['@type' => 'ListItem', 'position' => 3, 'name' => $post['title'], 'item' => $canonical_url],
  ]
];

$extra_head  = '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
$extra_head .= '<script type="application/ld+json">' . json_encode($breadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

// VideoObject schema — added when post has youtube_id
if (!empty($post['youtube_id'])) {
  $video_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'VideoObject',
    'name' => isset($post['youtube_title']) ? $post['youtube_title'] : $post['title'],
    'description' => isset($post['youtube_description']) ? $post['youtube_description'] : $post['meta_description'],
    'thumbnailUrl' => 'https://img.youtube.com/vi/' . $post['youtube_id'] . '/maxresdefault.jpg',
    'uploadDate' => isset($post['youtube_date']) ? $post['youtube_date'] : $post['date'],
    'embedUrl' => 'https://www.youtube.com/embed/' . $post['youtube_id'],
    'contentUrl' => 'https://www.youtube.com/watch?v=' . $post['youtube_id'],
  ];
  $extra_head .= '<script type="application/ld+json">' . json_encode($video_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}

// FAQPage schema — added when post has faq_items
if (!empty($post['faq_items'])) {
  $faq_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(fn($item) => [
      '@type' => 'Question',
      'name' => $item['q'],
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item['a']],
    ], $post['faq_items']),
  ];
  $extra_head .= '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}

include 'includes/header.php';
$related = array_map(fn($p) => localizePost($p, $current_lang), getRelatedPosts($post['slug'], $post['category']));
?>

<article class="blog-article">
  <!-- Breadcrumb -->
  <nav class="blog-breadcrumb" aria-label="Breadcrumb">
    <div class="container-sm">
      <a href="<?php echo lang_url('index.php'); ?>"><?php echo t('blog_post.breadcrumb_home'); ?></a>
      <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      <a href="<?php echo lang_url('blog.php'); ?>"><?php echo t('blog_post.breadcrumb_blog'); ?></a>
      <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      <span><?php echo htmlspecialchars($post['title']); ?></span>
    </div>
  </nav>

  <!-- Header -->
  <header class="blog-header">
    <div class="container-sm">
      <span class="blog-card-cat"><?php echo htmlspecialchars($post['category']); ?></span>
      <h1><?php echo htmlspecialchars($post['title']); ?></h1>
      <div class="blog-article-meta">
        <div class="blog-author-row">
          <img src="/images/logo.png" alt="iTanzania Safaris" class="blog-author-avatar">
          <div>
            <strong><?php echo $post['author']; ?></strong>
            <span><?php echo t('blog_post.safari_experts'); ?></span>
          </div>
        </div>
        <div class="blog-date-row">
          <span><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> <?php echo date('F j, Y', strtotime($post['date'])); ?></span>
          <span><svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> <?php echo $post['read_time']; ?></span>
        </div>
      </div>
    </div>
  </header>

  <!-- Featured Image -->
  <div class="blog-hero-img">
    <div class="container-sm">
      <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
    </div>
  </div>

  <!-- Content -->
  <div class="blog-content">
    <div class="container-sm">
      <?php
      $lang_content_file = 'includes/blog-content/' . $post['slug'] . '.' . $current_lang . '.php';
      $default_content_file = 'includes/blog-content/' . $post['slug'] . '.php';
      if ($current_lang !== 'en' && file_exists($lang_content_file)) {
        include $lang_content_file;
      } elseif (file_exists($default_content_file)) {
        include $default_content_file;
      } else {
        echo '<p>' . htmlspecialchars($post['excerpt']) . '</p>';
      }
      ?>

      <!-- YouTube Video Embed -->
      <?php if (!empty($post['youtube_id'])): ?>
      <div class="blog-video-embed" style="margin:2.5rem 0;">
        <h2 style="font-size:1.35rem;margin-bottom:1rem;"><?php echo htmlspecialchars(isset($post['youtube_title']) ? $post['youtube_title'] : 'Watch: ' . $post['title']); ?></h2>
        <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;border-radius:12px;">
          <iframe
            src="https://www.youtube.com/embed/<?php echo htmlspecialchars($post['youtube_id']); ?>?rel=0"
            title="<?php echo htmlspecialchars(isset($post['youtube_title']) ? $post['youtube_title'] : $post['title']); ?>"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            loading="lazy"
            style="position:absolute;top:0;left:0;width:100%;height:100%;">
          </iframe>
        </div>
      </div>
      <?php endif; ?>

      <!-- CTA Box -->
      <div class="blog-cta-box">
        <h3><?php echo t('blog_post.cta_title'); ?></h3>
        <p><?php echo t('blog_post.cta_desc'); ?></p>
        <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-primary btn-md"><?php echo t('blog_post.get_quote'); ?></a>
      </div>

      <!-- Share -->
      <div class="blog-share">
        <span><?php echo t('blog_post.share'); ?></span>
        <div class="blog-share-links">
          <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($post['title']); ?>&url=<?php echo urlencode(get_canonical_url()); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on Twitter">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_canonical_url()); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
          </a>
          <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_canonical_url()); ?>&title=<?php echo urlencode($post['title']); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Author Bio -->
  <div class="blog-author-bio" style="background:#f8f6f1;border-radius:12px;padding:1.8rem 2rem;margin:2rem auto;max-width:780px;display:flex;gap:1.5rem;align-items:flex-start;">
    <img src="/images/logo.png" alt="iTanzania Safaris Guide Team" style="width:64px;height:64px;border-radius:50%;object-fit:cover;flex-shrink:0;">
    <div>
      <p style="margin:0 0 0.3rem;font-weight:700;font-size:1rem;color:#2c2c2c;">Safari Expert Team — iTanzania Safaris</p>
      <p style="margin:0 0 0.5rem;font-size:0.82rem;color:#c9a84c;font-weight:600;">Tanzania-Based Safari Guides & Operators</p>
      <p style="margin:0;font-size:0.9rem;color:#555;line-height:1.6;">Our guides have collectively led hundreds of safaris across the Serengeti, Ngorongoro, Tarangire, and Kilimanjaro. Based in Arusha, we combine on-the-ground expertise with real-time field knowledge — so every guide we publish is grounded in firsthand experience, not theory. <a href="/about" style="color:#c9a84c;">Meet our team →</a></p>
    </div>
  </div>
</article>

<!-- Related Posts -->
<?php if (!empty($related)): ?>
<section class="py-20 bg-sand">
  <div class="container-md">
    <div class="section-heading">
      <span class="section-subtitle"><?php echo t('blog_post.related_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('blog_post.related_title'); ?></h2>
    </div>
    <div class="blog-grid" style="grid-template-columns:repeat(3,1fr);">
      <?php foreach ($related as $rp): ?>
      <a href="<?php echo lang_url('blog-post.php?slug=' . $rp['slug']); ?>" class="blog-card">
        <div class="blog-card-img">
          <img src="<?php echo $rp['image']; ?>" alt="<?php echo htmlspecialchars($rp['title']); ?>" loading="lazy">
          <span class="blog-card-cat"><?php echo htmlspecialchars($rp['category']); ?></span>
        </div>
        <div class="blog-card-body">
          <div class="blog-card-meta">
            <span><?php echo date('M j, Y', strtotime($rp['date'])); ?></span>
            <span class="blog-meta-dot"></span>
            <span><?php echo $rp['read_time']; ?></span>
          </div>
          <h3><?php echo htmlspecialchars($rp['title']); ?></h3>
          <span class="blog-read-more"><?php echo t('blog.read_article'); ?> <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
