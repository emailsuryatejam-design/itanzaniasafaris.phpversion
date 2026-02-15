<?php
$page_title = 'Tanzania Safari Packages | Wildlife Game Drives & Luxury Safaris';
$page_description = 'Explore our handcrafted Tanzania safari packages. From the Great Migration in the Serengeti to Big Five encounters in Ngorongoro Crater.';
include 'includes/header.php';
include 'includes/tours-data.php';
?>

<!-- Hero -->
<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('images/serengeti.jpg')"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle">Wildlife Adventures</span>
    <h1>Tanzania Safari Packages</h1>
    <p>From the endless plains of the Serengeti to the depths of the Ngorongoro Crater, discover Tanzania's incredible wildlife.</p>
  </div>
</section>

<!-- Featured Seasonal Package -->
<section class="py-20 bg-white">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle">Featured Package</span>
      <h2 class="section-title">Seasonal Safari Deals</h2>
      <p class="section-desc">Limited-time safari packages at special rates. Book early to secure your spot.</p>
    </div>
    <a href="feb-march-2026-safari.php" class="featured-package-card reveal" style="display:grid;grid-template-columns:1fr 1fr;gap:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.10);text-decoration:none;color:inherit;transition:transform 0.3s,box-shadow 0.3s;">
      <div style="position:relative;overflow:hidden;min-height:300px;">
        <img src="images/itinerary-serengeti.jpg" alt="Serengeti Safari" style="width:100%;height:100%;object-fit:cover;">
        <span style="position:absolute;top:16px;left:16px;background:var(--secondary);color:#fff;padding:6px 16px;border-radius:20px;font-size:0.85rem;font-weight:600;">Feb & March 2026</span>
      </div>
      <div style="padding:2.5rem;display:flex;flex-direction:column;justify-content:center;">
        <span style="color:var(--primary);font-weight:600;font-size:0.85rem;text-transform:uppercase;letter-spacing:1px;">5 Nights / 6 Days</span>
        <h3 style="font-size:1.6rem;margin:0.5rem 0;color:#1a1a1a;">Tarangire, Serengeti & Ngorongoro Crater</h3>
        <p style="color:#666;line-height:1.7;margin-bottom:1.5rem;">Experience the best of Northern Tanzania's wildlife circuit. Witness the Great Migration, explore the Ngorongoro Crater, and encounter elephants in Tarangire — with 4 accommodation options from Budget to Premium.</p>
        <div style="display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;">
          <span style="font-size:1.3rem;font-weight:700;color:var(--primary);">From $1,476 <span style="font-size:0.85rem;font-weight:400;color:#999;">per person</span></span>
          <span style="display:inline-flex;align-items:center;gap:6px;color:var(--secondary);font-weight:600;font-size:0.95rem;">View Itinerary <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
        </div>
      </div>
    </a>
  </div>
</section>

<!-- Tour Listings -->
<section class="py-20 bg-sand">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle">Our Safari Experiences</span>
      <h2 class="section-title">Choose Your Adventure</h2>
      <p class="section-desc">Each safari is fully customizable. Prices shown are starting points — we'll tailor everything to your preferences.</p>
    </div>
    <?php foreach ($safariTours as $tour): ?>
      <?php include 'includes/tour-detail.php'; ?>
    <?php endforeach; ?>
  </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-white">
  <div class="container-sm">
    <div class="section-heading reveal">
      <span class="section-subtitle">Common Questions</span>
      <h2 class="section-title">Safari FAQ</h2>
      <p class="section-desc">Everything you need to know before booking your Tanzania safari.</p>
    </div>
    <div class="reveal">
      <details class="faq-item">
        <summary>
          <h3>When is the best time to go on safari in Tanzania?</h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer">The best time for Tanzania safaris is during the dry season (June-October) for prime wildlife viewing. The Great Migration river crossings happen July-September. The green season (November-May) offers lush landscapes, fewer crowds, and lower prices.</div>
      </details>
      <details class="faq-item">
        <summary>
          <h3>What animals will I see on a Tanzania safari?</h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer">Tanzania is home to the Big Five (lion, leopard, elephant, buffalo, rhino) plus cheetah, giraffe, zebra, wildebeest, hippo, and over 500 bird species. The Serengeti and Ngorongoro Crater offer the highest concentration of wildlife.</div>
      </details>
      <details class="faq-item">
        <summary>
          <h3>Are Tanzania safaris safe?</h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer">Tanzania is one of the safest safari destinations in Africa. Our guides are highly trained professionals, vehicles are equipped with safety gear, and we maintain radio contact with park authorities at all times.</div>
      </details>
      <details class="faq-item">
        <summary>
          <h3>What should I pack for a Tanzania safari?</h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer">Pack neutral-colored clothing (khaki, green, brown), comfortable walking shoes, sun protection, binoculars, camera with zoom lens, and layers for cool mornings. We provide a detailed packing list upon booking.</div>
      </details>
    </div>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
