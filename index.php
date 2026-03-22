<?php
include_once 'includes/lang.php';
$page_title = t('seo.index.title');
$page_description = t('seo.index.description');
$extra_head = '<link rel="preload" href="/images/hero-serengeti.jpg" as="image" fetchpriority="high">';
include 'includes/header.php';
?>

<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section class="hero">
  <!-- Slide 1 -->
  <div class="hero-slide active">
    <div class="hero-bg" style="background-image: url('/images/hero-serengeti.jpg')"></div>
    <div class="hero-overlay"></div>
  </div>
  <!-- Slide 2 -->
  <div class="hero-slide">
    <div class="hero-bg" style="background-image: url('/images/hero-kilimanjaro.jpg')"></div>
    <div class="hero-overlay"></div>
  </div>
  <!-- Slide 3 -->
  <div class="hero-slide">
    <div class="hero-bg" style="background-image: url('/images/hero-zanzibar.jpg')"></div>
    <div class="hero-overlay"></div>
  </div>

  <!-- Content -->
  <div class="hero-content">
    <div class="hero-text">
      <span class="hero-subtitle"><?php echo t('home.hero_subtitle'); ?></span>
      <h1 class="hero-title"><?php echo t('home.hero_title'); ?></h1>
      <p class="hero-desc"><?php echo t('home.hero_desc'); ?></p>
      <div class="hero-buttons">
        <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-primary btn-lg"><?php echo t('home.plan_safari'); ?></a>
        <a href="<?php echo lang_url('safaris.php'); ?>" class="btn btn-outline btn-lg"><?php echo t('home.explore_packages'); ?></a>
      </div>
    </div>
  </div>

  <!-- Slide Indicators -->
  <div class="hero-indicators">
    <button class="active" aria-label="Go to slide 1"></button>
    <button aria-label="Go to slide 2"></button>
    <button aria-label="Go to slide 3"></button>
  </div>

  <!-- Scroll Indicator -->
  <div class="scroll-indicator">
    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
  </div>
</section>

<!-- ============================================================
     TRUST BAR
     ============================================================ -->
<section class="trust-bar">
  <div class="trust-bar-inner container">
    <span class="trust-item trust-tato">
      <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
      TATO Registered Member
    </span>
    <span class="divider">|</span>
    <span class="trust-item">
      <svg width="13" height="13" fill="#F59E0B" viewBox="0 0 24 24"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
      4.9/5 — 127+ Reviews
    </span>
    <span class="divider">|</span>
    <span class="trust-item"><?php echo t('home.trust_licensed'); ?></span>
    <span class="divider">|</span>
    <span class="trust-item">
      <svg width="13" height="13" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 3l14 9-14 9V3z"/></svg>
      90%+ Kili Summit Rate
    </span>
    <span class="divider">|</span>
    <span class="trust-item"><?php echo t('home.trust_based'); ?></span>
  </div>
</section>
<style>
.trust-item { display: inline-flex; align-items: center; gap: 5px; }
.trust-tato { color: #F59E0B; font-weight: 600; }
.trust-tato svg { color: #F59E0B; }
</style>

<!-- ============================================================
     SEASONAL DEAL BANNER
     ============================================================ -->
<section style="padding:3rem 0;background:var(--primary);">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">
      <!-- 5N/6D Safari Deal -->
      <a href="<?php echo lang_url('feb-march-2026-safari.php'); ?>" style="display:flex;align-items:center;justify-content:space-between;gap:1.5rem;text-decoration:none;color:#fff;background:rgba(255,255,255,0.08);padding:1.25rem 1.5rem;border-radius:12px;transition:background 0.3s;flex-wrap:wrap;">
        <div>
          <span style="display:inline-block;background:var(--secondary);color:#fff;padding:4px 12px;border-radius:16px;font-weight:700;font-size:0.75rem;letter-spacing:0.5px;margin-bottom:6px;"><?php echo t('home.deal_badge_1'); ?></span>
          <h3 style="font-size:1.1rem;font-weight:700;margin:0;color:#fff;"><?php echo t('home.deal_title_1'); ?></h3>
          <p style="margin:4px 0 0;opacity:0.85;font-size:0.85rem;"><?php echo t('home.deal_desc_1'); ?></p>
        </div>
        <span style="display:inline-flex;align-items:center;gap:6px;background:rgba(255,255,255,0.15);padding:8px 16px;border-radius:8px;font-weight:600;font-size:0.85rem;white-space:nowrap;"><?php echo t('home.view'); ?> <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
      </a>
      <!-- 7N/8D Safari + Zanzibar Deal -->
      <a href="<?php echo lang_url('mar-april-2026-safari-zanzibar.php'); ?>" style="display:flex;align-items:center;justify-content:space-between;gap:1.5rem;text-decoration:none;color:#fff;background:rgba(255,255,255,0.08);padding:1.25rem 1.5rem;border-radius:12px;transition:background 0.3s;flex-wrap:wrap;">
        <div>
          <span style="display:inline-block;background:var(--secondary);color:#fff;padding:4px 12px;border-radius:16px;font-weight:700;font-size:0.75rem;letter-spacing:0.5px;margin-bottom:6px;"><?php echo t('home.deal_badge_2'); ?></span>
          <h3 style="font-size:1.1rem;font-weight:700;margin:0;color:#fff;"><?php echo t('home.deal_title_2'); ?></h3>
          <p style="margin:4px 0 0;opacity:0.85;font-size:0.85rem;"><?php echo t('home.deal_desc_2'); ?></p>
        </div>
        <span style="display:inline-flex;align-items:center;gap:6px;background:rgba(255,255,255,0.15);padding:8px 16px;border-radius:8px;font-weight:600;font-size:0.85rem;white-space:nowrap;"><?php echo t('home.view'); ?> <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
      </a>
    </div>
  </div>
</section>
<style>
@media(max-width:768px){
  .container > [style*="grid-template-columns:1fr 1fr"]{grid-template-columns:1fr!important;}
}
</style>

<!-- ============================================================
     FEATURED TOURS
     ============================================================ -->
<section class="py-20 bg-white">
  <div class="container">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('home.featured_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('home.featured_title'); ?></h2>
      <p class="section-desc"><?php echo t('home.featured_desc'); ?></p>
    </div>

    <div class="grid grid-1 md-grid-2 gap-8 mb-12">
      <!-- Card 1: 5N/6D Tarangire, Serengeti & Ngorongoro -->
      <div class="reveal reveal-delay-1">
        <a href="<?php echo lang_url('feb-march-2026-safari.php'); ?>" class="tour-card">
          <div class="tour-card-image">
            <div class="card-bg" style="background-image: url('/images/itinerary-serengeti.jpg')"></div>
            <div class="card-gradient"></div>
            <span class="card-badge"><?php echo t('home.featured_badge_1'); ?></span>
            <div class="card-duration">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              6 Days / 5 Nights
            </div>
          </div>
          <div class="tour-card-content">
            <h3><?php echo t('tours.safari1.title'); ?></h3>
            <p class="card-desc"><?php echo t('tours.safari1.short_desc'); ?></p>
            <div class="tour-card-footer">
              <div>
                <div class="card-price-label"><?php echo t('home.from'); ?></div>
                <div class="card-price">
                  <span class="current">$1,476</span>
                </div>
                <div class="card-price-per"><?php echo t('home.per_person'); ?></div>
              </div>
              <span class="card-view-details"><?php echo t('home.view_itinerary'); ?> <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 2: 7N/8D Safari + Zanzibar Beach -->
      <div class="reveal reveal-delay-2">
        <a href="<?php echo lang_url('mar-april-2026-safari-zanzibar.php'); ?>" class="tour-card">
          <div class="tour-card-image">
            <div class="card-bg" style="background-image: url('/images/safari-beach.jpg')"></div>
            <div class="card-gradient"></div>
            <span class="card-badge"><?php echo t('home.featured_badge_2'); ?></span>
            <div class="card-duration">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              8 Days / 7 Nights
            </div>
          </div>
          <div class="tour-card-content">
            <h3><?php echo t('tours.safari2.title'); ?></h3>
            <p class="card-desc"><?php echo t('tours.safari2.short_desc'); ?></p>
            <div class="tour-card-footer">
              <div>
                <div class="card-price-label"><?php echo t('home.from'); ?></div>
                <div class="card-price">
                  <span class="current">$2,417</span>
                </div>
                <div class="card-price-per"><?php echo t('home.per_person'); ?></div>
              </div>
              <span class="card-view-details"><?php echo t('home.view_itinerary'); ?> <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="text-center">
      <a href="<?php echo lang_url('safaris.php'); ?>" class="btn btn-secondary btn-lg"><?php echo t('home.view_all_packages'); ?></a>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY CHOOSE US
     ============================================================ -->
<section class="py-20 bg-sand">
  <div class="container">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('home.why_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('home.why_title'); ?></h2>
      <p class="section-desc"><?php echo t('home.why_desc'); ?></p>
    </div>

    <div class="grid grid-1 sm-grid-2 lg-grid-4 gap-8">
      <div class="reveal reveal-delay-1">
        <div class="why-card">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3><?php echo t('home.why_card_1_title'); ?></h3>
          <p><?php echo t('home.why_card_1_desc'); ?></p>
        </div>
      </div>
      <div class="reveal reveal-delay-2">
        <div class="why-card">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <h3><?php echo t('home.why_card_2_title'); ?></h3>
          <p><?php echo t('home.why_card_2_desc'); ?></p>
        </div>
      </div>
      <div class="reveal reveal-delay-3">
        <div class="why-card">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </div>
          <h3><?php echo t('home.why_card_3_title'); ?></h3>
          <p><?php echo t('home.why_card_3_desc'); ?></p>
        </div>
      </div>
      <div class="reveal reveal-delay-4">
        <div class="why-card">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3><?php echo t('home.why_card_4_title'); ?></h3>
          <p><?php echo t('home.why_card_4_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     STATS COUNTER
     ============================================================ -->
<section class="stats-section">
  <div class="stats-grid">
    <div class="stat-item reveal">
      <div class="stat-value" data-target="2500" data-suffix="+">0</div>
      <div class="stat-label"><?php echo t('home.stat_label_1'); ?></div>
    </div>
    <div class="stat-item reveal reveal-delay-1">
      <div class="stat-value" data-target="850" data-suffix="+">0</div>
      <div class="stat-label"><?php echo t('home.stat_label_2'); ?></div>
    </div>
    <div class="stat-item reveal reveal-delay-2">
      <div class="stat-value" data-target="420" data-suffix="+">0</div>
      <div class="stat-label"><?php echo t('home.stat_label_3'); ?></div>
    </div>
    <div class="stat-item reveal reveal-delay-3">
      <div class="stat-value" data-target="12" data-suffix="+">0</div>
      <div class="stat-label"><?php echo t('home.stat_label_4'); ?></div>
    </div>
  </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section class="py-20 bg-white">
  <div class="container">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('home.testimonials_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('home.testimonials_title'); ?></h2>
      <p class="section-desc"><?php echo t('home.testimonials_desc'); ?></p>
    </div>

    <div style="max-width:896px;margin:0 auto;" class="reveal">
      <!-- Testimonial 1 -->
      <div class="testimonial-item testimonial-card">
        <div class="testimonial-stars">
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <blockquote class="testimonial-quote">&ldquo;Our Serengeti safari was nothing short of magical. Our guide Joseph knew exactly where to find the big cats, and we witnessed an incredible lion hunt. The luxury camp exceeded all expectations. iTanzania Safaris made our dream trip a reality.&rdquo;</blockquote>
        <div class="testimonial-author">
          <p class="author-name">Sarah &amp; James Wilson</p>
          <p class="author-location">London, United Kingdom</p>
          <p class="author-tour">Great Migration Safari</p>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="testimonial-item testimonial-card" style="display:none;">
        <div class="testimonial-stars">
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <blockquote class="testimonial-quote">&ldquo;Summiting Kilimanjaro with iTanzania was the achievement of a lifetime. The mountain crew was exceptional, keeping us safe, motivated, and well-fed throughout the trek. The Machame route scenery was breathtaking. Highly recommend their Kili packages.&rdquo;</blockquote>
        <div class="testimonial-author">
          <p class="author-name">Michael Chen</p>
          <p class="author-location">Vancouver, Canada</p>
          <p class="author-tour">Machame Route Climb</p>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="testimonial-item testimonial-card" style="display:none;">
        <div class="testimonial-stars">
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <blockquote class="testimonial-quote">&ldquo;We booked the Safari &amp; Beach combo and it was the perfect honeymoon. From the thrill of seeing elephants in the Serengeti to relaxing on Zanzibar's gorgeous beaches, every detail was taken care of. The team went above and beyond for us.&rdquo;</blockquote>
        <div class="testimonial-author">
          <p class="author-name">Emma &amp; Robert Schneider</p>
          <p class="author-location">Munich, Germany</p>
          <p class="author-tour">Safari &amp; Beach Combo</p>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="testimonial-item testimonial-card" style="display:none;">
        <div class="testimonial-stars">
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <blockquote class="testimonial-quote">&ldquo;As a solo female traveler, I felt completely safe and looked after throughout my entire trip. The Ngorongoro Crater was the highlight, where we spotted all the Big Five in a single day! The guides are incredibly knowledgeable and passionate.&rdquo;</blockquote>
        <div class="testimonial-author">
          <p class="author-name">Yuki Tanaka</p>
          <p class="author-location">Tokyo, Japan</p>
          <p class="author-tour">Big Five Luxury Safari</p>
        </div>
      </div>

      <!-- Testimonial 5 -->
      <div class="testimonial-item testimonial-card" style="display:none;">
        <div class="testimonial-stars">
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <blockquote class="testimonial-quote">&ldquo;Traveling with three kids ages 6-12, we were worried about how a safari would work. iTanzania made it absolutely perfect. The kids had junior ranger booklets, the guides engaged them with wildlife facts, and the lodges had pools for downtime. Best family holiday ever!&rdquo;</blockquote>
        <div class="testimonial-author">
          <p class="author-name">The Anderson Family</p>
          <p class="author-location">Sydney, Australia</p>
          <p class="author-tour">Family Safari Adventure</p>
        </div>
      </div>

      <!-- Navigation -->
      <div class="testimonial-nav">
        <button class="nav-arrow testimonial-prev" aria-label="Previous testimonial">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <div class="testimonial-dots">
          <button class="active" aria-label="Go to testimonial 1"></button>
          <button aria-label="Go to testimonial 2"></button>
          <button aria-label="Go to testimonial 3"></button>
          <button aria-label="Go to testimonial 4"></button>
          <button aria-label="Go to testimonial 5"></button>
        </div>
        <button class="nav-arrow testimonial-next" aria-label="Next testimonial">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     BLOG / SAFARI JOURNAL
     ============================================================ -->
<section class="py-20 bg-sand">
  <div class="container">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('home.blog_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('home.blog_title'); ?></h2>
      <p class="section-desc"><?php echo t('home.blog_desc'); ?></p>
    </div>
    <?php include 'includes/blog-data.php'; ?>
    <div class="blog-home-grid reveal">
      <?php foreach (array_slice($blogPosts, 0, 3) as $post): ?>
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
          <span class="blog-read-more"><?php echo t('home.read_article'); ?> <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <div class="text-center" style="margin-top:2.5rem;">
      <a href="<?php echo lang_url('blog.php'); ?>" class="btn btn-secondary btn-lg"><?php echo t('home.view_all_articles'); ?></a>
    </div>
  </div>
</section>

<!-- ============================================================
     NEWSLETTER SIGNUP
     ============================================================ -->
<section class="newsletter-section">
  <div class="container">
    <div class="newsletter-inner reveal">
      <div class="newsletter-text">
        <span class="newsletter-icon">✉️</span>
        <div>
          <h3><?php echo t('home.newsletter_title', 'Get Safari Inspiration in Your Inbox'); ?></h3>
          <p><?php echo t('home.newsletter_desc', 'Join 3,400+ travelers. Monthly wildlife updates, migration alerts, and exclusive deals — no spam, unsubscribe anytime.'); ?></p>
        </div>
      </div>
      <form class="newsletter-form" onsubmit="handleNewsletterSubmit(event)">
        <input type="email" class="newsletter-input" placeholder="<?php echo t('home.newsletter_placeholder', 'Your email address'); ?>" required aria-label="Email address">
        <button type="submit" class="newsletter-btn"><?php echo t('home.newsletter_cta', 'Subscribe Free'); ?></button>
      </form>
      <p id="newsletter-success" style="display:none;color:#4ade80;font-weight:600;margin-top:0.5rem;">
        <?php echo t('home.newsletter_success', "You're in! Welcome to the iTanzania Safaris community."); ?>
      </p>
    </div>
  </div>
</section>
<style>
.newsletter-section { background: linear-gradient(135deg, #1B5E20 0%, #2E7D32 100%); padding: 3rem 0; }
.newsletter-inner { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 1.5rem; max-width: 900px; margin: 0 auto; }
.newsletter-text { display: flex; align-items: center; gap: 1rem; flex: 1; min-width: 260px; }
.newsletter-icon { font-size: 2rem; flex-shrink: 0; }
.newsletter-text h3 { color: #fff; font-size: 1.2rem; font-weight: 700; margin-bottom: 0.25rem; }
.newsletter-text p { color: rgba(255,255,255,0.75); font-size: 0.85rem; line-height: 1.5; }
.newsletter-form { display: flex; gap: 0.5rem; flex-wrap: wrap; }
.newsletter-input { padding: 0.75rem 1rem; border-radius: 8px; border: none; font-size: 0.9rem; min-width: 240px; outline: none; }
.newsletter-btn { background: #F59E0B; color: #fff; font-weight: 700; padding: 0.75rem 1.5rem; border-radius: 8px; border: none; cursor: pointer; font-size: 0.9rem; white-space: nowrap; transition: background 0.2s; }
.newsletter-btn:hover { background: #D97706; }
</style>
<script>
function handleNewsletterSubmit(e) {
  e.preventDefault();
  var email = e.target.querySelector('input[type="email"]').value;
  e.target.style.display = 'none';
  document.getElementById('newsletter-success').style.display = 'block';
  // Send via EmailJS or your preferred service
  if (typeof emailjs !== 'undefined') {
    emailjs.send('service_id', 'newsletter_template', { email: email, from_name: 'Newsletter Subscriber' });
  }
}
</script>

<!-- Latest Blog Posts -->
<?php
$blogPosts_home = array_slice(array_map(fn($p) => localizePost($p, $current_lang), $blogPosts), 0, 3);
?>
<section class="py-20 bg-sand">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('blog.hero_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('blog.featured_title'); ?></h2>
      <p class="section-desc"><?php echo t('blog.all_desc'); ?></p>
    </div>
    <div class="blog-grid reveal">
      <?php foreach ($blogPosts_home as $post_h): ?>
      <a href="<?php echo lang_url('blog-post.php?slug=' . $post_h['slug']); ?>" class="blog-card">
        <div class="blog-card-img">
          <img src="<?php echo $post_h['image']; ?>" alt="<?php echo htmlspecialchars($post_h['title']); ?>" loading="lazy">
          <span class="blog-card-cat"><?php echo htmlspecialchars($post_h['category']); ?></span>
        </div>
        <div class="blog-card-body">
          <div class="blog-card-meta">
            <span><?php echo date('M j, Y', strtotime($post_h['date'])); ?></span>
            <span class="blog-meta-dot"></span>
            <span><?php echo $post_h['read_time']; ?></span>
          </div>
          <h3><?php echo htmlspecialchars($post_h['title']); ?></h3>
          <p><?php echo htmlspecialchars($post_h['excerpt']); ?></p>
          <span class="blog-read-more"><?php echo t('blog.read_article'); ?> <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:2.5rem;">
      <a href="<?php echo lang_url('blog.php'); ?>" class="btn btn-outline btn-md"><?php echo t('nav.blog'); ?> &rarr;</a>
    </div>
  </div>
</section>

<!-- ============================================================
     CTA BANNER
     ============================================================ -->
<?php include 'includes/cta-banner.php'; ?>

<?php include 'includes/footer.php'; ?>
