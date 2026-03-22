<?php
include_once 'includes/lang.php';
$page_title = t('seo.zanzibar.title');
$page_description = t('seo.zanzibar.description');
$zanzibar_schema = [
  '@context' => 'https://schema.org',
  '@type' => 'TouristDestination',
  'name' => 'Zanzibar Beach Holiday',
  'url' => 'https://itanzaniasafaris.com/zanzibar',
  'description' => 'Zanzibar beach holidays combined with Tanzania safari. White sand beaches, turquoise waters, UNESCO Stone Town, and world-class snorkelling.',
  'image' => 'https://itanzaniasafaris.com/images/zanzibar-beach.jpg',
  'touristType' => ['Beach Travelers', 'Honeymooners', 'Safari & Beach Combo Seekers'],
  'geo' => ['@type' => 'GeoCoordinates', 'latitude' => -6.1659, 'longitude' => 39.2026],
  'includesAttraction' => [
    ['@type' => 'TouristAttraction', 'name' => 'Stone Town Zanzibar', 'description' => 'UNESCO World Heritage Site with Swahili, Arab and colonial architecture.'],
    ['@type' => 'TouristAttraction', 'name' => 'Nungwi Beach', 'description' => 'White sand beach in northern Zanzibar, ideal for snorkelling and diving.'],
    ['@type' => 'TouristAttraction', 'name' => 'Kendwa Beach', 'description' => 'Pristine beach with calm waters perfect for swimming at low tide.'],
  ],
  'offers' => ['@type' => 'Offer', 'name' => '7N/8D Safari + Zanzibar Beach Holiday', 'price' => '2417', 'priceCurrency' => 'USD', 'availability' => 'https://schema.org/InStock', 'url' => 'https://itanzaniasafaris.com/zanzibar'],
];
$extra_head = (isset($extra_head) ? $extra_head : '') . '<script type="application/ld+json">' . json_encode($zanzibar_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
include 'includes/header.php';
include 'includes/tours-data.php';
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('/images/zanzibar-beach.jpg')"></div>
  <div class="page-hero-overlay" style="background:rgba(0,0,0,0.4)"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle"><?php echo t('zanzibar.hero_subtitle'); ?></span>
    <h1><?php echo t('zanzibar.hero_title'); ?></h1>
    <p><?php echo t('zanzibar.hero_desc'); ?></p>
  </div>
</section>

<!-- Highlights -->
<section class="py-16 bg-white">
  <div class="container">
    <div class="grid grid-1 md-grid-3 gap-8 reveal">
      <div class="zanzibar-highlight">
        <div class="zanzibar-highlight-icon" style="background:#EFF6FF;color:#3B82F6;">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3><?php echo t('zanzibar.beaches_title'); ?></h3>
        <p><?php echo t('zanzibar.beaches_desc'); ?></p>
      </div>
      <div class="zanzibar-highlight">
        <div class="zanzibar-highlight-icon" style="background:#FFFBEB;color:#F59E0B;">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
        </div>
        <h3><?php echo t('zanzibar.stonetown_title'); ?></h3>
        <p><?php echo t('zanzibar.stonetown_desc'); ?></p>
      </div>
      <div class="zanzibar-highlight">
        <div class="zanzibar-highlight-icon" style="background:#F0FDF4;color:#22C55E;">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </div>
        <h3><?php echo t('zanzibar.marine_title'); ?></h3>
        <p><?php echo t('zanzibar.marine_desc'); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Featured Safari+Zanzibar Package -->
<section class="py-20 bg-sand">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('zanzibar.combo_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('zanzibar.combo_title'); ?></h2>
      <p class="section-desc"><?php echo t('zanzibar.combo_desc'); ?></p>
    </div>
    <a href="<?php echo lang_url('mar-april-2026-safari-zanzibar.php'); ?>" class="featured-package-card reveal" style="display:grid;grid-template-columns:1fr 1fr;gap:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.10);text-decoration:none;color:inherit;transition:transform 0.3s,box-shadow 0.3s;">
      <div style="position:relative;overflow:hidden;min-height:300px;">
        <img src="/images/safari-beach.jpg" alt="Safari and Zanzibar Beach" style="width:100%;height:100%;object-fit:cover;">
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

<!-- Upsell -->
<section class="py-16 bg-white">
  <div class="container" style="max-width:896px;">
    <div class="text-center reveal">
      <span style="color:var(--secondary);font-weight:600;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.1em;"><?php echo t('zanzibar.upsell_label'); ?></span>
      <h2 style="font-size:2.25rem;font-weight:700;color:var(--charcoal);margin-top:0.5rem;margin-bottom:1rem;"><?php echo t('zanzibar.upsell_title'); ?></h2>
      <p style="color:rgba(51,51,51,0.7);font-size:1.125rem;max-width:672px;margin:0 auto 2rem;"><?php echo t('zanzibar.upsell_desc'); ?></p>
      <div style="display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:1rem;">
        <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-primary btn-lg"><?php echo t('zanzibar.plan_combo'); ?></a>
        <a href="<?php echo lang_url('safaris.php'); ?>" style="color:var(--primary);font-weight:600;"><?php echo t('zanzibar.browse_packages'); ?></a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
