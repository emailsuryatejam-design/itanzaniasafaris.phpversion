<?php
include_once 'includes/lang.php';
$page_title = t('seo.about.title');
$page_description = t('seo.about.description');
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('/images/team.jpg')"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle"><?php echo t('about.hero_subtitle'); ?></span>
    <h1><?php echo t('about.hero_title'); ?></h1>
    <p><?php echo t('about.hero_desc'); ?></p>
  </div>
</section>

<!-- Story -->
<section class="py-20 bg-white">
  <div class="container" style="max-width:896px;">
    <div class="about-story-grid reveal">
      <div>
        <span style="color:var(--secondary);font-weight:600;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.1em;"><?php echo t('about.mission_label'); ?></span>
        <h2 style="font-size:2.25rem;font-weight:700;color:var(--charcoal);margin-top:0.5rem;margin-bottom:1.5rem;"><?php echo t('about.mission_title'); ?></h2>
        <p style="color:rgba(51,51,51,0.7);line-height:1.75;margin-bottom:1rem;"><?php echo t('about.mission_p1'); ?></p>
        <p style="color:rgba(51,51,51,0.7);line-height:1.75;margin-bottom:1rem;"><?php echo t('about.mission_p2'); ?></p>
        <p style="color:rgba(51,51,51,0.7);line-height:1.75;"><?php echo t('about.mission_p3'); ?></p>
      </div>
      <div class="about-story-image">
        <div class="story-img" style="background-image: url('/images/about-story.jpg')"></div>
        <div class="story-badge">
          <div class="badge-value">100%</div>
          <div class="badge-label"><?php echo t('about.locally_owned'); ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Values -->
<section class="py-20 bg-sand">
  <div class="container">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('about.values_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('about.values_title'); ?></h2>
    </div>
    <div class="values-grid">
      <div class="value-card reveal"><h3><?php echo t('about.value_authentic_title'); ?></h3><p><?php echo t('about.value_authentic_desc'); ?></p></div>
      <div class="value-card reveal reveal-delay-1"><h3><?php echo t('about.value_safety_title'); ?></h3><p><?php echo t('about.value_safety_desc'); ?></p></div>
      <div class="value-card reveal reveal-delay-2"><h3><?php echo t('about.value_sustainable_title'); ?></h3><p><?php echo t('about.value_sustainable_desc'); ?></p></div>
      <div class="value-card reveal reveal-delay-3"><h3><?php echo t('about.value_personal_title'); ?></h3><p><?php echo t('about.value_personal_desc'); ?></p></div>
    </div>
  </div>
</section>

<!-- Team -->
<section id="team" class="py-20 bg-white">
  <div class="container">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('about.team_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('about.team_title'); ?></h2>
      <p class="section-desc"><?php echo t('about.team_desc'); ?></p>
    </div>
    <div class="team-grid">
      <div class="team-card reveal">
        <div class="team-card-image" style="background-image: url('/images/team-1.jpg')"></div>
        <div class="team-card-info">
          <h3><?php echo t('about.guide1_name'); ?></h3>
          <p class="team-role"><?php echo t('about.guide1_role'); ?></p>
          <p><?php echo t('about.guide1_desc'); ?></p>
        </div>
      </div>
      <div class="team-card reveal reveal-delay-1">
        <div class="team-card-image" style="background-image: url('/images/team-2.jpg')"></div>
        <div class="team-card-info">
          <h3><?php echo t('about.guide2_name'); ?></h3>
          <p class="team-role"><?php echo t('about.guide2_role'); ?></p>
          <p><?php echo t('about.guide2_desc'); ?></p>
        </div>
      </div>
      <div class="team-card reveal reveal-delay-2">
        <div class="team-card-image" style="background-image: url('/images/team-3.jpg')"></div>
        <div class="team-card-info">
          <h3><?php echo t('about.guide3_name'); ?></h3>
          <p class="team-role"><?php echo t('about.guide3_role'); ?></p>
          <p><?php echo t('about.guide3_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
