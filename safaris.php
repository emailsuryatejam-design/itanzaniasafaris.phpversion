<?php
include_once 'includes/lang.php';
$page_title = t('seo.safaris.title');
$page_description = t('seo.safaris.description');
include 'includes/header.php';
?>

<!-- Hero -->
<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('images/serengeti.jpg')"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle"><?php echo t('safaris.hero_subtitle'); ?></span>
    <h1><?php echo t('safaris.hero_title'); ?></h1>
    <p><?php echo t('safaris.hero_desc'); ?></p>
  </div>
</section>

<!-- Featured Package 1: 5N/6D Safari -->
<section class="py-20 bg-white">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('safaris.featured_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('safaris.featured_title'); ?></h2>
      <p class="section-desc"><?php echo t('safaris.featured_desc'); ?></p>
    </div>
    <a href="<?php echo lang_url('feb-march-2026-safari.php'); ?>" class="featured-package-card reveal" style="display:grid;grid-template-columns:1fr 1fr;gap:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.10);text-decoration:none;color:inherit;transition:transform 0.3s,box-shadow 0.3s;margin-bottom:2.5rem;">
      <div style="position:relative;overflow:hidden;min-height:300px;">
        <img src="images/itinerary-serengeti.jpg" alt="Serengeti Safari" style="width:100%;height:100%;object-fit:cover;">
        <span style="position:absolute;top:16px;left:16px;background:var(--secondary);color:#fff;padding:6px 16px;border-radius:20px;font-size:0.85rem;font-weight:600;">Feb & March 2026</span>
      </div>
      <div style="padding:2.5rem;display:flex;flex-direction:column;justify-content:center;">
        <span style="color:var(--primary);font-weight:600;font-size:0.85rem;text-transform:uppercase;letter-spacing:1px;">5 Nights / 6 Days</span>
        <h3 style="font-size:1.6rem;margin:0.5rem 0;color:#1a1a1a;"><?php echo t('tours.safari1.title'); ?></h3>
        <p style="color:#666;line-height:1.7;margin-bottom:1.5rem;"><?php echo t('tours.safari1.short_desc'); ?></p>
        <div style="display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;">
          <span style="font-size:1.3rem;font-weight:700;color:var(--primary);"><?php echo t('home.from'); ?> $1,476 <span style="font-size:0.85rem;font-weight:400;color:#999;"><?php echo t('home.per_person'); ?></span></span>
          <span style="display:inline-flex;align-items:center;gap:6px;color:var(--secondary);font-weight:600;font-size:0.95rem;"><?php echo t('home.view_itinerary'); ?> <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
        </div>
      </div>
    </a>

    <!-- Featured Package 2: 7N/8D Safari + Zanzibar -->
    <a href="<?php echo lang_url('mar-april-2026-safari-zanzibar.php'); ?>" class="featured-package-card reveal" style="display:grid;grid-template-columns:1fr 1fr;gap:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.10);text-decoration:none;color:inherit;transition:transform 0.3s,box-shadow 0.3s;">
      <div style="position:relative;overflow:hidden;min-height:300px;">
        <img src="images/safari-beach.jpg" alt="Safari and Zanzibar Beach" style="width:100%;height:100%;object-fit:cover;">
        <span style="position:absolute;top:16px;left:16px;background:var(--secondary);color:#fff;padding:6px 16px;border-radius:20px;font-size:0.85rem;font-weight:600;">Mar & April 2026</span>
      </div>
      <div style="padding:2.5rem;display:flex;flex-direction:column;justify-content:center;">
        <span style="color:var(--primary);font-weight:600;font-size:0.85rem;text-transform:uppercase;letter-spacing:1px;">7 Nights / 8 Days</span>
        <h3 style="font-size:1.6rem;margin:0.5rem 0;color:#1a1a1a;"><?php echo t('tours.safari2.title'); ?></h3>
        <p style="color:#666;line-height:1.7;margin-bottom:1.5rem;"><?php echo t('tours.safari2.short_desc'); ?></p>
        <div style="display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;">
          <span style="font-size:1.3rem;font-weight:700;color:var(--primary);"><?php echo t('home.from'); ?> $2,417 <span style="font-size:0.85rem;font-weight:400;color:#999;"><?php echo t('home.per_person'); ?></span></span>
          <span style="display:inline-flex;align-items:center;gap:6px;color:var(--secondary);font-weight:600;font-size:0.95rem;"><?php echo t('home.view_itinerary'); ?> <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
        </div>
      </div>
    </a>
  </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-sand">
  <div class="container-sm">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('safaris.faq_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('safaris.faq_title'); ?></h2>
      <p class="section-desc"><?php echo t('safaris.faq_desc'); ?></p>
    </div>
    <div class="reveal">
      <details class="faq-item">
        <summary>
          <h3><?php echo t('safaris.faq1_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('safaris.faq1_a'); ?></div>
      </details>
      <details class="faq-item">
        <summary>
          <h3><?php echo t('safaris.faq2_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('safaris.faq2_a'); ?></div>
      </details>
      <details class="faq-item">
        <summary>
          <h3><?php echo t('safaris.faq3_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('safaris.faq3_a'); ?></div>
      </details>
      <details class="faq-item">
        <summary>
          <h3><?php echo t('safaris.faq4_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('safaris.faq4_a'); ?></div>
      </details>
    </div>
  </div>
</section>

<!-- FAQ Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "<?php echo htmlspecialchars(t('safaris.faq1_q'), ENT_QUOTES, 'UTF-8'); ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo htmlspecialchars(t('safaris.faq1_a'), ENT_QUOTES, 'UTF-8'); ?>"
      }
    },
    {
      "@type": "Question",
      "name": "<?php echo htmlspecialchars(t('safaris.faq2_q'), ENT_QUOTES, 'UTF-8'); ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo htmlspecialchars(t('safaris.faq2_a'), ENT_QUOTES, 'UTF-8'); ?>"
      }
    },
    {
      "@type": "Question",
      "name": "<?php echo htmlspecialchars(t('safaris.faq3_q'), ENT_QUOTES, 'UTF-8'); ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo htmlspecialchars(t('safaris.faq3_a'), ENT_QUOTES, 'UTF-8'); ?>"
      }
    },
    {
      "@type": "Question",
      "name": "<?php echo htmlspecialchars(t('safaris.faq4_q'), ENT_QUOTES, 'UTF-8'); ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo htmlspecialchars(t('safaris.faq4_a'), ENT_QUOTES, 'UTF-8'); ?>"
      }
    }
  ]
}
</script>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
