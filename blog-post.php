<?php
include 'includes/blog-data.php';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$post = getBlogBySlug($slug);
if (!$post) { header('Location: blog.php'); exit; }

$page_title = $post['title'];
$page_description = $post['meta_description'];
$og_title = $post['title'] . ' | iTanzania Safaris';
$og_description = $post['meta_description'];
$og_image = $post['image'];

// Article schema JSON-LD
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'Article',
  'headline' => $post['title'],
  'description' => $post['meta_description'],
  'image' => 'https://itanzaniasafaris.com/' . $post['image'],
  'author' => ['@type' => 'Organization', 'name' => 'iTanzania Safaris'],
  'publisher' => [
    '@type' => 'Organization',
    'name' => 'iTanzania Safaris',
    'logo' => ['@type' => 'ImageObject', 'url' => 'https://itanzaniasafaris.com/images/logo.png']
  ],
  'datePublished' => $post['date'],
  'dateModified' => $post['date'],
  'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://itanzaniasafaris.com/blog-post.php?slug=' . $post['slug']]
];
$extra_head = '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>';
$extra_head .= '<link rel="canonical" href="https://itanzaniasafaris.com/blog-post.php?slug=' . $post['slug'] . '">';

include 'includes/header.php';
$related = getRelatedPosts($post['slug'], $post['category']);
?>

<article class="blog-article">
  <!-- Breadcrumb -->
  <nav class="blog-breadcrumb" aria-label="Breadcrumb">
    <div class="container-sm">
      <a href="index.php">Home</a>
      <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      <a href="blog.php">Blog</a>
      <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      <span><?php echo htmlspecialchars($post['title']); ?></span>
    </div>
  </nav>

  <!-- Header -->
  <header class="blog-header">
    <div class="container-sm">
      <span class="blog-card-cat"><?php echo $post['category']; ?></span>
      <h1><?php echo htmlspecialchars($post['title']); ?></h1>
      <div class="blog-article-meta">
        <div class="blog-author-row">
          <img src="images/logo.png" alt="iTanzania Safaris" class="blog-author-avatar">
          <div>
            <strong><?php echo $post['author']; ?></strong>
            <span>Safari Experts &middot; Arusha, Tanzania</span>
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
      $content_file = 'includes/blog-content/' . $post['slug'] . '.php';
      if (file_exists($content_file)) {
        include $content_file;
      } else {
        echo '<p>' . htmlspecialchars($post['excerpt']) . '</p>';
      }
      ?>

      <!-- CTA Box -->
      <div class="blog-cta-box">
        <h3>Ready to Plan Your Tanzania Adventure?</h3>
        <p>Our local safari experts in Arusha will craft a personalized itinerary just for you. No obligation, free consultation.</p>
        <a href="contact.php" class="btn btn-primary btn-md">Get Your Free Quote</a>
      </div>

      <!-- Share -->
      <div class="blog-share">
        <span>Share this article:</span>
        <div class="blog-share-links">
          <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($post['title']); ?>&url=<?php echo urlencode('https://itanzaniasafaris.com/blog-post.php?slug=' . $post['slug']); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on Twitter">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://itanzaniasafaris.com/blog-post.php?slug=' . $post['slug']); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
          </a>
          <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode('https://itanzaniasafaris.com/blog-post.php?slug=' . $post['slug']); ?>&title=<?php echo urlencode($post['title']); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</article>

<!-- Related Posts -->
<?php if (!empty($related)): ?>
<section class="py-20 bg-sand">
  <div class="container-md">
    <div class="section-heading">
      <span class="section-subtitle">Keep Reading</span>
      <h2 class="section-title">Related Articles</h2>
    </div>
    <div class="blog-grid" style="grid-template-columns:repeat(3,1fr);">
      <?php foreach ($related as $rp): ?>
      <a href="blog-post.php?slug=<?php echo $rp['slug']; ?>" class="blog-card">
        <div class="blog-card-img">
          <img src="<?php echo $rp['image']; ?>" alt="<?php echo htmlspecialchars($rp['title']); ?>" loading="lazy">
          <span class="blog-card-cat"><?php echo $rp['category']; ?></span>
        </div>
        <div class="blog-card-body">
          <div class="blog-card-meta">
            <span><?php echo date('M j, Y', strtotime($rp['date'])); ?></span>
            <span class="blog-meta-dot"></span>
            <span><?php echo $rp['read_time']; ?></span>
          </div>
          <h3><?php echo htmlspecialchars($rp['title']); ?></h3>
          <span class="blog-read-more">Read Article <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
