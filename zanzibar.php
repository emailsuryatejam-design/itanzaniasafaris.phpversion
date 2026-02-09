<?php
$page_title = 'Zanzibar Beach Holidays | Tropical Escapes & Honeymoon Packages';
$page_description = 'Discover Zanzibar pristine beaches, historic Stone Town, and crystal-clear waters. Beach escapes, romantic honeymoons, and safari & beach combo packages.';
include 'includes/header.php';
include 'includes/tours-data.php';
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('images/zanzibar-beach.jpg')"></div>
  <div class="page-hero-overlay" style="background:rgba(0,0,0,0.4)"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle">Tropical Paradise</span>
    <h1>Zanzibar Beach Holidays</h1>
    <p>White sandy beaches, turquoise waters, and the enchanting spice island. The perfect addition to your Tanzania adventure.</p>
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
        <h3>Pristine Beaches</h3>
        <p>Powder-white sand beaches and crystal-clear Indian Ocean waters along both the east and west coasts.</p>
      </div>
      <div class="zanzibar-highlight">
        <div class="zanzibar-highlight-icon" style="background:#FFFBEB;color:#F59E0B;">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
        </div>
        <h3>Historic Stone Town</h3>
        <p>UNESCO World Heritage Site with winding alleys, ornate doors, bustling markets, and rich Swahili culture.</p>
      </div>
      <div class="zanzibar-highlight">
        <div class="zanzibar-highlight-icon" style="background:#F0FDF4;color:#22C55E;">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </div>
        <h3>Marine Adventures</h3>
        <p>Snorkeling at Mnemba Atoll, swimming with dolphins, sunset dhow cruises, and world-class diving.</p>
      </div>
    </div>
  </div>
</section>

<!-- Tour Listings -->
<section class="py-20 bg-sand">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle">Beach Packages</span>
      <h2 class="section-title">Zanzibar Holiday Options</h2>
      <p class="section-desc">Whether you're looking for a romantic honeymoon, a beach escape, or the ultimate safari-beach combo, we have the perfect package.</p>
    </div>
    <?php foreach ($zanzibarTours as $tour): ?>
      <?php include 'includes/tour-detail.php'; ?>
    <?php endforeach; ?>
  </div>
</section>

<!-- Upsell -->
<section class="py-16 bg-white">
  <div class="container" style="max-width:896px;">
    <div class="text-center reveal">
      <span style="color:var(--secondary);font-weight:600;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.1em;">Enhance Your Trip</span>
      <h2 style="font-size:2.25rem;font-weight:700;color:var(--charcoal);margin-top:0.5rem;margin-bottom:1rem;">Add Zanzibar to Your Safari</h2>
      <p style="color:rgba(51,51,51,0.7);font-size:1.125rem;max-width:672px;margin:0 auto 2rem;">Combine any safari package with a Zanzibar beach extension. Fly directly from the Serengeti to Zanzibar and enjoy the best of both worlds. Most guests add 3-5 beach days after their safari.</p>
      <div style="display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:1rem;">
        <a href="contact.php" class="btn btn-primary btn-lg">Plan a Safari + Beach Combo</a>
        <a href="safaris.php" style="color:var(--primary);font-weight:600;">Browse Safari Packages</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
