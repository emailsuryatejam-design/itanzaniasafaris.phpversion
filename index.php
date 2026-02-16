<?php
$page_title = 'Authentic Tanzania Safari Adventures';
$page_description = 'Premium Tanzania safari operator specializing in wildlife safaris, Kilimanjaro climbing, and Zanzibar beach holidays. Locally owned DMC based in Arusha.';
include 'includes/header.php';
?>

<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section class="hero">
  <!-- Slide 1 -->
  <div class="hero-slide active">
    <div class="hero-bg" style="background-image: url('images/hero-serengeti.jpg')"></div>
    <div class="hero-overlay"></div>
  </div>
  <!-- Slide 2 -->
  <div class="hero-slide">
    <div class="hero-bg" style="background-image: url('images/hero-kilimanjaro.jpg')"></div>
    <div class="hero-overlay"></div>
  </div>
  <!-- Slide 3 -->
  <div class="hero-slide">
    <div class="hero-bg" style="background-image: url('images/hero-zanzibar.jpg')"></div>
    <div class="hero-overlay"></div>
  </div>

  <!-- Content -->
  <div class="hero-content">
    <div class="hero-text">
      <span class="hero-subtitle">Unforgettable Tanzania Safari Adventures</span>
      <h1 class="hero-title">Experience the Wild Heart of Africa</h1>
      <p class="hero-desc">Discover Tanzania with our expert local guides. From the Serengeti to Kilimanjaro to Zanzibar &mdash; your dream adventure starts here.</p>
      <div class="hero-buttons">
        <a href="contact.php" class="btn btn-primary btn-lg">Plan Your Safari</a>
        <a href="safaris.php" class="btn btn-outline btn-lg">Explore Packages</a>
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
    <span><strong>Locally Owned</strong> &amp; Operated</span>
    <span class="divider">|</span>
    <span><strong>Licensed</strong> Tour Operator</span>
    <span class="divider">|</span>
    <span><strong>Based in</strong> Arusha, Tanzania</span>
  </div>
</section>

<!-- ============================================================
     SEASONAL DEAL BANNER
     ============================================================ -->
<section style="padding:3rem 0;background:var(--primary);">
  <div class="container">
    <a href="feb-march-2026-safari.php" style="display:flex;align-items:center;justify-content:space-between;gap:2rem;text-decoration:none;color:#fff;flex-wrap:wrap;">
      <div style="display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;">
        <span style="background:var(--secondary);color:#fff;padding:8px 20px;border-radius:24px;font-weight:700;font-size:0.85rem;letter-spacing:0.5px;white-space:nowrap;">LIMITED TIME</span>
        <div>
          <h3 style="font-size:1.35rem;font-weight:700;margin:0;color:#fff;">Feb & March 2026 Safari Package — 5N/6D from $1,476pp</h3>
          <p style="margin:4px 0 0;opacity:0.85;font-size:0.95rem;">Tarangire, Serengeti & Ngorongoro Crater · 4 accommodation options</p>
        </div>
      </div>
      <span style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.15);padding:10px 24px;border-radius:8px;font-weight:600;font-size:0.95rem;white-space:nowrap;transition:background 0.3s;">View Itinerary <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
    </a>
  </div>
</section>

<!-- ============================================================
     FEATURED TOURS
     ============================================================ -->
<section class="py-20 bg-white">
  <div class="container">
    <div class="section-heading reveal">
      <span class="section-subtitle">Our Top Experiences</span>
      <h2 class="section-title">Handpicked Safari Adventures</h2>
      <p class="section-desc">From thrilling wildlife encounters to luxury beach escapes, discover our most sought-after Tanzania experiences.</p>
    </div>

    <div class="grid grid-1 md-grid-3 gap-8 mb-12">
      <!-- Card 1: Big Five Luxury Safari -->
      <div class="reveal reveal-delay-1">
        <a href="safaris.php" class="tour-card">
          <div class="tour-card-image">
            <div class="card-bg" style="background-image: url('images/big-five.jpg')"></div>
            <div class="card-gradient"></div>
            <span class="card-badge">Premium</span>
            <div class="card-duration">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              6 Days / 5 Nights
            </div>
          </div>
          <div class="tour-card-content">
            <h3>Big Five Luxury Safari</h3>
            <p class="card-desc">An exclusive luxury safari experience with premium lodges, private game drives, and intimate wildlife encounters in the finest parks.</p>
            <div class="tour-card-footer">
              <div>
                <div class="card-price-label">From</div>
                <div class="card-price">
                  <span class="current">$5,800</span>
                </div>
                <div class="card-price-per">per person</div>
              </div>
              <span class="card-view-details">View Details <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 2: Great Migration Safari -->
      <div class="reveal reveal-delay-2">
        <a href="safaris.php" class="tour-card">
          <div class="tour-card-image">
            <div class="card-bg" style="background-image: url('images/serengeti.jpg')"></div>
            <div class="card-gradient"></div>
            <span class="card-badge">Most Popular</span>
            <span class="card-spots">Only 4 spots left</span>
            <div class="card-duration">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              8 Days / 7 Nights
            </div>
          </div>
          <div class="tour-card-content">
            <h3>Great Migration Safari</h3>
            <p class="card-desc">Witness the greatest wildlife spectacle on Earth. Follow millions of wildebeest across the Serengeti in this once-in-a-lifetime safari.</p>
            <div class="tour-card-footer">
              <div>
                <div class="card-price-label">From</div>
                <div class="card-price">
                  <span class="current">$4,500</span>
                  <span class="original">$5,500</span>
                </div>
                <div class="card-price-per">per person</div>
              </div>
              <span class="card-view-details">View Details <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 3: Safari & Beach Combo -->
      <div class="reveal reveal-delay-3">
        <a href="zanzibar.php" class="tour-card">
          <div class="tour-card-image">
            <div class="card-bg" style="background-image: url('images/safari-beach.jpg')"></div>
            <div class="card-gradient"></div>
            <span class="card-badge">Best of Both</span>
            <span class="card-spots">Only 3 spots left</span>
            <div class="card-duration">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              10 Days / 9 Nights
            </div>
          </div>
          <div class="tour-card-content">
            <h3>Safari &amp; Beach Combo</h3>
            <p class="card-desc">The ultimate Tanzania experience combining world-class Serengeti safaris with Zanzibar beach relaxation.</p>
            <div class="tour-card-footer">
              <div>
                <div class="card-price-label">From</div>
                <div class="card-price">
                  <span class="current">$5,200</span>
                  <span class="original">$6,000</span>
                </div>
                <div class="card-price-per">per person</div>
              </div>
              <span class="card-view-details">View Details <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="text-center">
      <a href="safaris.php" class="btn btn-secondary btn-lg">View All Packages</a>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY CHOOSE US
     ============================================================ -->
<section class="py-20 bg-sand">
  <div class="container">
    <div class="section-heading reveal">
      <span class="section-subtitle">Why iTanzania Safaris</span>
      <h2 class="section-title">Your Trusted Safari Partner</h2>
      <p class="section-desc">Locally owned and operated from Arusha, we bring deep local knowledge and genuine passion to every safari we craft.</p>
    </div>

    <div class="grid grid-1 sm-grid-2 lg-grid-4 gap-8">
      <div class="reveal reveal-delay-1">
        <div class="why-card">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3>Licensed &amp; Certified</h3>
          <p>Fully licensed tour operator with comprehensive insurance and safety protocols.</p>
        </div>
      </div>
      <div class="reveal reveal-delay-2">
        <div class="why-card">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <h3>Local Expertise</h3>
          <p>Born and raised in Tanzania, our guides bring intimate knowledge of wildlife, culture, and hidden gems.</p>
        </div>
      </div>
      <div class="reveal reveal-delay-3">
        <div class="why-card">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </div>
          <h3>Tailor-Made Trips</h3>
          <p>Every itinerary is customized to your preferences, pace, and budget. No cookie-cutter tours here.</p>
        </div>
      </div>
      <div class="reveal reveal-delay-4">
        <div class="why-card">
          <div class="why-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3>Fair &amp; Transparent Pricing</h3>
          <p>No hidden costs or surprise charges. What we quote is what you pay, with everything clearly itemized.</p>
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
      <div class="stat-label">Happy Travelers</div>
    </div>
    <div class="stat-item reveal reveal-delay-1">
      <div class="stat-value" data-target="850" data-suffix="+">0</div>
      <div class="stat-label">Safari Tours Completed</div>
    </div>
    <div class="stat-item reveal reveal-delay-2">
      <div class="stat-value" data-target="420" data-suffix="+">0</div>
      <div class="stat-label">Kilimanjaro Summits</div>
    </div>
    <div class="stat-item reveal reveal-delay-3">
      <div class="stat-value" data-target="12" data-suffix="+">0</div>
      <div class="stat-label">Years of Experience</div>
    </div>
  </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section class="py-20 bg-white">
  <div class="container">
    <div class="section-heading reveal">
      <span class="section-subtitle">Traveler Stories</span>
      <h2 class="section-title">What Our Guests Say</h2>
      <p class="section-desc">Real experiences from real travelers. See why our guests rate us 4.9 out of 5 stars.</p>
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
      <span class="section-subtitle">Safari Journal</span>
      <h2 class="section-title">Travel Tips & Guides</h2>
      <p class="section-desc">Expert advice and insider knowledge to help you plan the perfect Tanzania adventure.</p>
    </div>
    <?php include 'includes/blog-data.php'; ?>
    <div class="blog-home-grid reveal">
      <?php foreach (array_slice($blogPosts, 0, 3) as $post): ?>
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
    <div class="text-center" style="margin-top:2.5rem;">
      <a href="blog.php" class="btn btn-secondary btn-lg">View All Articles</a>
    </div>
  </div>
</section>

<!-- ============================================================
     CTA BANNER
     ============================================================ -->
<?php include 'includes/cta-banner.php'; ?>

<?php include 'includes/footer.php'; ?>
