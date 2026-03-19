<?php
include_once 'includes/lang.php';
$page_title = t('seo.kilimanjaro.title');
$page_description = t('seo.kilimanjaro.description');
include 'includes/header.php';
include 'includes/tours-data.php';
?>

<!-- Hero -->
<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('/images/machame.jpg')"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle"><?php echo t('kili.hero_subtitle'); ?></span>
    <h1><?php echo t('kili.hero_title'); ?></h1>
    <p><?php echo t('kili.hero_desc'); ?></p>
  </div>
</section>

<!-- Route Comparison -->
<section class="py-16 bg-white">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('kili.routes_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('kili.routes_title'); ?></h2>
      <p class="section-desc"><?php echo t('kili.routes_desc'); ?></p>
    </div>
    <div class="reveal" style="overflow-x:auto;">
      <table class="comparison-table">
        <thead>
          <tr>
            <th style="text-align:left;"><?php echo t('kili.feature'); ?></th>
            <th><?php echo t('kili.machame'); ?></th>
            <th><?php echo t('kili.lemosho'); ?></th>
            <th><?php echo t('kili.marangu'); ?></th>
          </tr>
        </thead>
        <tbody>
          <tr><td><?php echo t('kili.duration'); ?></td><td><?php echo t('kili.days_7'); ?></td><td><?php echo t('kili.days_8'); ?></td><td><?php echo t('kili.days_6'); ?></td></tr>
          <tr><td><?php echo t('kili.difficulty'); ?></td><td><?php echo t('kili.mod_hard'); ?></td><td><?php echo t('kili.moderate'); ?></td><td><?php echo t('kili.moderate'); ?></td></tr>
          <tr><td><?php echo t('kili.success_rate'); ?></td><td class="highlight">90%+</td><td class="highlight">95%+</td><td>80%+</td></tr>
          <tr><td><?php echo t('kili.scenery'); ?></td><td><?php echo t('kili.excellent'); ?></td><td><?php echo t('kili.best'); ?></td><td><?php echo t('kili.good'); ?></td></tr>
          <tr><td><?php echo t('kili.accommodation'); ?></td><td><?php echo t('kili.camping'); ?></td><td><?php echo t('kili.camping'); ?></td><td><?php echo t('kili.huts'); ?></td></tr>
          <tr><td><?php echo t('kili.crowding'); ?></td><td><?php echo t('kili.medium'); ?></td><td><?php echo t('kili.low'); ?></td><td><?php echo t('kili.high'); ?></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Contact CTA -->
<section class="py-20 bg-sand">
  <div class="container-md" style="text-align:center;">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('kili.ready_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('kili.ready_title'); ?></h2>
      <p class="section-desc"><?php echo t('kili.ready_desc'); ?></p>
    </div>
    <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-primary btn-lg"><?php echo t('kili.get_quote'); ?></a>
  </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-white">
  <div class="container-sm">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('kili.faq_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('kili.faq_title'); ?></h2>
      <p class="section-desc"><?php echo t('kili.faq_desc'); ?></p>
    </div>
    <div class="reveal">
      <details class="faq-item">
        <summary>
          <h3><?php echo t('kili.faq1_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('kili.faq1_a'); ?></div>
      </details>
      <details class="faq-item">
        <summary>
          <h3><?php echo t('kili.faq2_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('kili.faq2_a'); ?></div>
      </details>
      <details class="faq-item">
        <summary>
          <h3><?php echo t('kili.faq3_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('kili.faq3_a'); ?></div>
      </details>
      <details class="faq-item">
        <summary>
          <h3><?php echo t('kili.faq4_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('kili.faq4_a'); ?></div>
      </details>
    </div>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
