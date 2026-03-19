<?php
include_once 'includes/lang.php';
$page_title = t('seo.accommodations.title');
$page_description = t('seo.accommodations.description');
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('/images/serengeti.jpg')"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle"><?php echo t('accommodations.hero_subtitle'); ?></span>
    <h1><?php echo t('accommodations.hero_title'); ?></h1>
    <p><?php echo t('accommodations.hero_desc'); ?></p>
  </div>
</section>

<section class="py-20 bg-sand">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('accommodations.partners_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('accommodations.partners_title'); ?></h2>
      <p class="section-desc"><?php echo t('accommodations.partners_desc'); ?></p>
    </div>

    <div style="display:flex;flex-direction:column;gap:4rem;">
      <!-- Karibu Camps -->
      <div class="partner-card reveal">
        <div class="partner-card-grid">
          <div class="partner-image" style="background-image: url('/images/serengeti.jpg')"></div>
          <div class="partner-content">
            <span class="partner-type"><?php echo t('accommodations.camps_type'); ?></span>
            <h2><?php echo t('accommodations.camps_name'); ?></h2>
            <p class="partner-desc"><?php echo t('accommodations.camps_desc'); ?></p>
            <div class="partner-locations">
              <h3><?php echo t('accommodations.locations'); ?></h3>
              <ul>
                <li><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Lion's Paw Camp — Ngorongoro Crater Rim</li>
                <li><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Woodlands Camp — Southern Serengeti</li>
                <li><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Sametu Camp — Central Serengeti</li>
                <li><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Mara River Camp — Northern Serengeti</li>
                <li><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Elephant Springs — Tarangire</li>
              </ul>
            </div>
            <div class="partner-highlights"><h3><?php echo t('accommodations.highlights'); ?></h3><div class="partner-tags"><span class="partner-tag">Luxury tented camps in prime wildlife areas</span><span class="partner-tag">Personalized safari experiences</span><span class="partner-tag">Hot air balloon safaris available</span><span class="partner-tag">Maasai cultural experiences</span></div></div>
            <div class="partner-actions">
              <a href="https://karibucamps.com" target="_blank" rel="noopener noreferrer" class="partner-website"><?php echo t('accommodations.visit_website'); ?> <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg></a>
              <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-primary btn-sm"><?php echo t('accommodations.book_partner'); ?></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Four Points -->
      <div class="partner-card reveal reveal-delay-1">
        <div class="partner-card-grid">
          <div class="partner-image" style="background-image: url('/images/about-story.jpg')"></div>
          <div class="partner-content">
            <span class="partner-type"><?php echo t('accommodations.hotel_type'); ?></span>
            <h2><?php echo t('accommodations.hotel_name'); ?></h2>
            <p class="partner-desc"><?php echo t('accommodations.hotel_desc'); ?></p>
            <div class="partner-locations">
              <h3><?php echo t('accommodations.locations'); ?></h3>
              <ul>
                <li><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Arusha City Centre, Tanzania</li>
              </ul>
            </div>
            <div class="partner-highlights"><h3><?php echo t('accommodations.highlights'); ?></h3><div class="partner-tags"><span class="partner-tag">114 stylish rooms with modern African decor</span><span class="partner-tag">Parachichi Restaurant & Hatari Bar</span><span class="partner-tag">Outdoor swimming pool & fitness centre</span><span class="partner-tag">Ideal pre/post-safari stopover in Arusha</span></div></div>
            <div class="partner-actions">
              <a href="https://www.marriott.com/en-us/hotels/jrofp-four-points-arusha-the-arusha-hotel/overview/" target="_blank" rel="noopener noreferrer" class="partner-website"><?php echo t('accommodations.visit_website'); ?> <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg></a>
              <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-primary btn-sm"><?php echo t('accommodations.book_partner'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Info -->
<section class="py-16 bg-white">
  <div class="container-sm text-center">
    <div class="reveal">
      <h2 style="font-size:1.5rem;font-weight:700;color:var(--charcoal);margin-bottom:1rem;"><?php echo t('accommodations.info_title'); ?></h2>
      <p style="color:rgba(51,51,51,0.7);line-height:1.75;margin-bottom:2rem;"><?php echo t('accommodations.info_desc'); ?></p>
      <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-primary btn-lg"><?php echo t('common.get_quote'); ?></a>
    </div>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
