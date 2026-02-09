<?php
$page_title = 'Kilimanjaro Climbing Tours | Guided Treks to the Roof of Africa';
$page_description = 'Climb Mount Kilimanjaro with experienced local guides. Machame, Lemosho, and Marangu routes available. 90%+ summit success rate.';
include 'includes/header.php';
include 'includes/tours-data.php';
?>

<!-- Hero -->
<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('images/machame.jpg')"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle">The Roof of Africa</span>
    <h1>Kilimanjaro Climbing Tours</h1>
    <p>Stand on the summit of Africa's highest peak at 5,895m. Professional guides, quality equipment, and an experience you'll never forget.</p>
  </div>
</section>

<!-- Route Comparison -->
<section class="py-16 bg-white">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle">Compare Routes</span>
      <h2 class="section-title">Find Your Path to the Summit</h2>
      <p class="section-desc">Each route offers a unique experience. Choose based on your fitness level, time, and the scenery you prefer.</p>
    </div>
    <div class="reveal" style="overflow-x:auto;">
      <table class="comparison-table">
        <thead>
          <tr>
            <th style="text-align:left;">Feature</th>
            <th>Machame</th>
            <th>Lemosho</th>
            <th>Marangu</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Duration</td><td>7 Days</td><td>8 Days</td><td>6 Days</td></tr>
          <tr><td>Difficulty</td><td>Moderate-Hard</td><td>Moderate</td><td>Moderate</td></tr>
          <tr><td>Success Rate</td><td class="highlight">90%+</td><td class="highlight">95%+</td><td>80%+</td></tr>
          <tr><td>Scenery</td><td>Excellent</td><td>Best</td><td>Good</td></tr>
          <tr><td>Accommodation</td><td>Camping</td><td>Camping</td><td>Huts</td></tr>
          <tr><td>Crowding</td><td>Medium</td><td>Low</td><td>High</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Tour Listings -->
<section class="py-20 bg-sand">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle">Our Climbing Packages</span>
      <h2 class="section-title">Detailed Route Itineraries</h2>
      <p class="section-desc">All packages include KINAPA-certified guides, quality equipment, and comprehensive safety measures.</p>
    </div>
    <?php foreach ($kilimanjaroTours as $tour): ?>
      <?php include 'includes/tour-detail.php'; ?>
    <?php endforeach; ?>
  </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-white">
  <div class="container-sm">
    <div class="section-heading reveal">
      <span class="section-subtitle">Common Questions</span>
      <h2 class="section-title">Kilimanjaro FAQ</h2>
      <p class="section-desc">Important answers for planning your Kilimanjaro climb.</p>
    </div>
    <div class="reveal">
      <details class="faq-item">
        <summary>
          <h3>How fit do I need to be to climb Kilimanjaro?</h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer">Kilimanjaro doesn't require technical climbing skills, but good general fitness is essential. We recommend starting a training program 3-4 months before your climb, focusing on cardio and hiking with a loaded pack.</div>
      </details>
      <details class="faq-item">
        <summary>
          <h3>Which Kilimanjaro route has the highest success rate?</h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer">The Lemosho 8-day route has the highest summit success rate at 95%+ due to its excellent acclimatization profile. The 7-day Machame route also has a high success rate of 90%+.</div>
      </details>
      <details class="faq-item">
        <summary>
          <h3>What is the best time to climb Kilimanjaro?</h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer">The best months to climb are January-March and June-October. January-March offers clearer skies on the summit, while June-October is the driest period.</div>
      </details>
      <details class="faq-item">
        <summary>
          <h3>Is altitude sickness a concern on Kilimanjaro?</h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer">Altitude sickness can affect anyone regardless of fitness level. Our guides are trained in altitude illness recognition and management. We use pulse oximeters to monitor your health.</div>
      </details>
    </div>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
