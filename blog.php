<?php
include_once 'includes/lang.php';
$page_title = t('seo.blog.title');
$page_description = t('seo.blog.description');
$blog_schema = [
  '@context' => 'https://schema.org',
  '@type' => 'Blog',
  'name' => 'iTanzania Safaris Blog — Tanzania Safari & Travel Guides',
  'url' => 'https://itanzaniasafaris.com/blog',
  'description' => 'Expert guides on Tanzania safaris, Kilimanjaro climbing, Zanzibar travel, best time to visit, packing lists, costs and more.',
  'inLanguage' => 'en',
  'publisher' => ['@type' => 'Organization', 'name' => 'iTanzania Safaris', 'url' => 'https://itanzaniasafaris.com', 'logo' => ['@type' => 'ImageObject', 'url' => 'https://itanzaniasafaris.com/images/logo.png']],
];
$extra_head = (isset($extra_head) ? $extra_head : '') . '<script type="application/ld+json">' . json_encode($blog_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
include 'includes/header.php';
include 'includes/blog-data.php';
$featured = array_values(array_map(fn($p) => localizePost($p, $current_lang), getFeaturedPosts()));
$blogPosts = array_map(fn($p) => localizePost($p, $current_lang), $blogPosts);
?>

<!-- Hero -->
<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('/images/serengeti.jpg')"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle"><?php echo t('blog.hero_subtitle'); ?></span>
    <h1><?php echo t('blog.hero_title'); ?></h1>
    <p><?php echo t('blog.hero_desc'); ?></p>
  </div>
</section>

<!-- Featured Posts -->
<?php if (!empty($featured)): ?>
<section class="py-20 bg-white">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('blog.featured_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('blog.featured_title'); ?></h2>
    </div>
    <div class="blog-featured-grid reveal">
      <?php foreach (array_slice($featured, 0, 3) as $i => $post): ?>
      <a href="<?php echo lang_url('blog-post.php?slug=' . $post['slug']); ?>" class="blog-featured-card <?php echo $i === 0 ? 'blog-featured-main' : ''; ?>">
        <div class="blog-featured-img">
          <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" loading="lazy">
          <span class="blog-card-cat"><?php echo $post['category']; ?></span>
        </div>
        <div class="blog-featured-body">
          <div class="blog-card-meta">
            <span><?php echo date('M j, Y', strtotime($post['date'])); ?></span>
            <span class="blog-meta-dot"></span>
            <span><?php echo $post['read_time']; ?></span>
          </div>
          <h3><?php echo htmlspecialchars($post['title']); ?></h3>
          <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- All Posts -->
<section class="py-20 bg-sand">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('blog.all_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('blog.all_title'); ?></h2>
      <p class="section-desc"><?php echo t('blog.all_desc'); ?></p>
    </div>
    <div class="blog-grid reveal">
      <?php foreach ($blogPosts as $post): ?>
      <a href="<?php echo lang_url('blog-post.php?slug=' . $post['slug']); ?>" class="blog-card">
        <div class="blog-card-img">
          <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" loading="lazy">
          <span class="blog-card-cat"><?php echo $post['category']; ?></span>
        </div>
        <div class="blog-card-body">
          <div class="blog-card-meta">
            <span><?php echo date('M j, Y', strtotime($post['date'])); ?></span>
            <span class="blog-meta-dot"></span>
            <span><?php echo $post['read_time']; ?></span>
          </div>
          <h3><?php echo htmlspecialchars($post['title']); ?></h3>
          <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
          <span class="blog-read-more"><?php echo t('blog.read_article'); ?> <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
