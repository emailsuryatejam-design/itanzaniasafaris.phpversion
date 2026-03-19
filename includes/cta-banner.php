<!-- CTA Banner -->
<section class="cta-banner">
  <div class="cta-bg" style="background-image: url('/images/cta-bg.jpg')"></div>
  <div class="cta-overlay"></div>
  <div class="cta-banner-content reveal">
    <span class="cta-badge"><?php echo t('cta.badge'); ?></span>
    <h2><?php echo t('cta.title'); ?></h2>
    <p><?php echo t('cta.desc'); ?></p>
    <div class="flex items-center justify-center gap-4" style="flex-wrap:wrap;">
      <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-primary btn-lg"><?php echo t('cta.button'); ?></a>
      <span class="cta-response"><?php echo t('cta.response'); ?></span>
    </div>
  </div>
</section>
