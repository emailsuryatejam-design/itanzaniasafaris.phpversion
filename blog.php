<?php
$page_title = 'Tanzania Safari Blog | Travel Tips, Guides & Wildlife Stories';
$page_description = 'Expert Tanzania safari guides, travel tips, wildlife stories, and planning advice from local safari specialists in Arusha. Plan your dream African adventure.';
include 'includes/header.php';
include 'includes/blog-data.php';
$featured = array_values(getFeaturedPosts());
?>

<!-- Hero -->
<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('images/serengeti.jpg')"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle">Safari Journal</span>
    <h1>Tanzania Safari Blog</h1>
    <p>Expert guides, travel tips, and insider knowledge from our team in Arusha. Everything you need to plan your dream Tanzania adventure.</p>
  </div>
</section>

<!-- Featured Posts -->
<?php if (!empty($featured)): ?>
<section class="py-20 bg-white">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle">Must Read</span>
      <h2 class="section-title">Featured Articles</h2>
    </div>
    <div class="blog-featured-grid reveal">
      <?php foreach (array_slice($featured, 0, 3) as $i => $post): ?>
      <a href="blog-post.php?slug=<?php echo $post['slug']; ?>" class="blog-featured-card <?php echo $i === 0 ? 'blog-featured-main' : ''; ?>">
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
      <span class="section-subtitle">All Articles</span>
      <h2 class="section-title">Safari Guides & Travel Tips</h2>
      <p class="section-desc">Browse our complete collection of Tanzania travel guides, safari tips, and destination insights.</p>
    </div>
    <div class="blog-grid reveal">
      <?php foreach ($blogPosts as $post): ?>
      <a href="blog-post.php?slug=<?php echo $post['slug']; ?>" class="blog-card">
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
          <span class="blog-read-more">Read Article <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
