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
