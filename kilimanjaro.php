<?php
include_once 'includes/lang.php';
$page_title = t('seo.kilimanjaro.title');
$page_description = t('seo.kilimanjaro.description');
$kili_faq_schema = [
  '@context' => 'https://schema.org',
  '@type' => 'FAQPage',
  'mainEntity' => [
    ['@type'=>'Question','name'=>'How long does it take to climb Kilimanjaro?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Most Kilimanjaro climbs take 6–9 days depending on the route. The Marangu route is 6 days, Machame 7 days, and Lemosho 8 days. Longer routes offer better acclimatization and higher summit success rates. iTanzania Safaris recommends a minimum of 7 days for the best chance of reaching Uhuru Peak (5,895m).']],
    ['@type'=>'Question','name'=>'What is the success rate for climbing Kilimanjaro?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Overall Kilimanjaro success rates range from 45–85% depending on the route and operator. iTanzania Safaris achieves a 90%+ summit success rate thanks to our KINAPA-certified guides, proper acclimatization schedules, and individualized pace management. The Lemosho and Northern Circuit routes have the highest success rates.']],
    ['@type'=>'Question','name'=>'How much does Kilimanjaro climbing cost?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Kilimanjaro climbing packages at iTanzania Safaris start from $2,100 per person for the 6-day Marangu route, up to $3,800+ for the 9-day Northern Circuit. The price includes park fees (approximately $700), all camping equipment, meals, guides, porters, and rescue fees. International flights are not included.']],
    ['@type'=>'Question','name'=>'What is the best route to climb Kilimanjaro?','acceptedAnswer'=>['@type'=>'Answer','text'=>'The Lemosho route (8 days) is considered the best overall route — excellent scenery, good acclimatization, and moderate crowds. The Machame route (7 days) is the most popular, offering great scenery and good success rates. The Marangu route (6 days) is the only route with hut accommodation.']],
    ['@type'=>'Question','name'=>'Do you need experience to climb Kilimanjaro?','acceptedAnswer'=>['@type'=>'Answer','text'=>'No technical climbing experience is required for Kilimanjaro. It is a trekking peak, not a technical climb. However, good cardiovascular fitness is essential. We recommend starting a 3–4 month training program focusing on hiking, cardio, and leg strength before your climb.']],
    ['@type'=>'Question','name'=>'What is the best time to climb Kilimanjaro?','acceptedAnswer'=>['@type'=>'Answer','text'=>'The best times to climb Kilimanjaro are January–March and June–October when conditions are driest. December and January are particularly popular. The rainy seasons (April–May and November) bring more challenging conditions but fewer crowds and lower prices.']],
  ]
];
$kili_attraction_schema = [
  '@context' => 'https://schema.org',
  '@type' => 'TouristAttraction',
  'name' => 'Mount Kilimanjaro Climbing — iTanzania Safaris',
  'url' => 'https://itanzaniasafaris.com/kilimanjaro',
  'description' => 'Climb Africa\'s highest peak (5,895m) with KINAPA-certified guides. 90%+ summit success rate on Machame, Lemosho, and Marangu routes.',
  'image' => 'https://itanzaniasafaris.com/images/machame.jpg',
  'geo' => ['@type' => 'GeoCoordinates', 'latitude' => -3.0674, 'longitude' => 37.3556],
  'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Moshi', 'addressRegion' => 'Kilimanjaro Region', 'addressCountry' => 'TZ'],
  'touristType' => ['Adventure Trekkers', 'Summit Seekers', 'Experienced Hikers'],
  'offers' => [
    ['@type' => 'Offer', 'name' => 'Machame Route — 7 Days', 'price' => '2400', 'priceCurrency' => 'USD', 'availability' => 'https://schema.org/InStock'],
    ['@type' => 'Offer', 'name' => 'Lemosho Route — 8 Days', 'price' => '2800', 'priceCurrency' => 'USD', 'availability' => 'https://schema.org/InStock'],
    ['@type' => 'Offer', 'name' => 'Marangu Route — 6 Days', 'price' => '2100', 'priceCurrency' => 'USD', 'availability' => 'https://schema.org/InStock'],
  ],
  'aggregateRating' => ['@type' => 'AggregateRating', 'ratingValue' => '4.9', 'reviewCount' => '127', 'bestRating' => '5'],
];
$extra_head = (isset($extra_head) ? $extra_head : '') . '<script type="application/ld+json">' . json_encode($kili_attraction_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
$extra_head .= '<script type="application/ld+json">' . json_encode($kili_faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
include 'includes/header.php';
include 'includes/tours-data.php';
?>

<!-- Hero -->
<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('/images/machame.jpg')"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle"><?php echo t('kili.hero_subtitle'); ?></span>
    <h1><?php echo t('kili.hero_title'); ?></h1>
    <p><?php echo t('kili.hero_desc'); ?></p>
  </div>
</section>

<!-- Route Comparison -->
<section class="py-16 bg-white">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('kili.routes_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('kili.routes_title'); ?></h2>
      <p class="section-desc"><?php echo t('kili.routes_desc'); ?></p>
    </div>
    <div class="reveal" style="overflow-x:auto;">
      <table class="comparison-table">
        <thead>
          <tr>
            <th style="text-align:left;"><?php echo t('kili.feature'); ?></th>
            <th><?php echo t('kili.machame'); ?></th>
            <th><?php echo t('kili.lemosho'); ?></th>
            <th><?php echo t('kili.marangu'); ?></th>
          </tr>
        </thead>
        <tbody>
          <tr><td><?php echo t('kili.duration'); ?></td><td><?php echo t('kili.days_7'); ?></td><td><?php echo t('kili.days_8'); ?></td><td><?php echo t('kili.days_6'); ?></td></tr>
          <tr><td><?php echo t('kili.difficulty'); ?></td><td><?php echo t('kili.mod_hard'); ?></td><td><?php echo t('kili.moderate'); ?></td><td><?php echo t('kili.moderate'); ?></td></tr>
          <tr><td><?php echo t('kili.success_rate'); ?></td><td class="highlight">90%+</td><td class="highlight">95%+</td><td>80%+</td></tr>
          <tr><td><?php echo t('kili.scenery'); ?></td><td><?php echo t('kili.excellent'); ?></td><td><?php echo t('kili.best'); ?></td><td><?php echo t('kili.good'); ?></td></tr>
          <tr><td><?php echo t('kili.accommodation'); ?></td><td><?php echo t('kili.camping'); ?></td><td><?php echo t('kili.camping'); ?></td><td><?php echo t('kili.huts'); ?></td></tr>
          <tr><td><?php echo t('kili.crowding'); ?></td><td><?php echo t('kili.medium'); ?></td><td><?php echo t('kili.low'); ?></td><td><?php echo t('kili.high'); ?></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Contact CTA -->
<section class="py-20 bg-sand">
  <div class="container-md" style="text-align:center;">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('kili.ready_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('kili.ready_title'); ?></h2>
      <p class="section-desc"><?php echo t('kili.ready_desc'); ?></p>
    </div>
    <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-primary btn-lg"><?php echo t('kili.get_quote'); ?></a>
  </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-white">
  <div class="container-sm">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('kili.faq_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('kili.faq_title'); ?></h2>
      <p class="section-desc"><?php echo t('kili.faq_desc'); ?></p>
    </div>
    <div class="reveal">
      <details class="faq-item">
        <summary>
          <h3><?php echo t('kili.faq1_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('kili.faq1_a'); ?></div>
      </details>
      <details class="faq-item">
        <summary>
          <h3><?php echo t('kili.faq2_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('kili.faq2_a'); ?></div>
      </details>
      <details class="faq-item">
        <summary>
          <h3><?php echo t('kili.faq3_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('kili.faq3_a'); ?></div>
      </details>
      <details class="faq-item">
        <summary>
          <h3><?php echo t('kili.faq4_q'); ?></h3>
          <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </summary>
        <div class="faq-answer"><?php echo t('kili.faq4_a'); ?></div>
      </details>
    </div>
  </div>
</section>

<?php include_once 'includes/blog-data.php'; ?>
<?php
$kili_posts = array_values(array_slice(array_filter(array_map(fn($p) => localizePost($p, $current_lang), $blogPosts), fn($p) => strpos($p['slug'], 'kilimanjaro') !== false || strpos($p['slug'], 'packing') !== false || strpos($p['slug'], 'visa') !== false), 0, 3));
if (empty($kili_posts)) $kili_posts = array_slice(array_map(fn($p) => localizePost($p, $current_lang), $blogPosts), 0, 3);
?>
<section class="py-20 bg-sand">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('blog.hero_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('blog.featured_title'); ?></h2>
    </div>
    <div class="blog-grid reveal">
      <?php foreach (array_slice($kili_posts, 0, 3) as $post_k): ?>
      <a href="<?php echo lang_url('blog-post.php?slug=' . $post_k['slug']); ?>" class="blog-card">
        <div class="blog-card-img">
          <img src="<?php echo $post_k['image']; ?>" alt="<?php echo htmlspecialchars($post_k['title']); ?>" loading="lazy">
          <span class="blog-card-cat"><?php echo htmlspecialchars($post_k['category']); ?></span>
        </div>
        <div class="blog-card-body">
          <div class="blog-card-meta">
            <span><?php echo date('M j, Y', strtotime($post_k['date'])); ?></span>
            <span class="blog-meta-dot"></span>
            <span><?php echo $post_k['read_time']; ?></span>
          </div>
          <h3><?php echo htmlspecialchars($post_k['title']); ?></h3>
          <p><?php echo htmlspecialchars($post_k['excerpt']); ?></p>
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

<!-- FAQ Section -->
<section class="py-20 bg-sand">
  <div class="container-sm">
    <div class="section-heading reveal">
      <span class="section-subtitle">FREQUENTLY ASKED QUESTIONS</span>
      <h2 class="section-title">Kilimanjaro Climbing FAQ</h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          How long does it take to climb Kilimanjaro?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>Most Kilimanjaro climbs take <strong>6–9 days</strong> depending on the route. The Marangu route is 6 days, Machame 7 days, and Lemosho 8 days. Longer routes offer better acclimatization and higher summit success rates. We recommend a minimum of 7 days for the best chance of reaching Uhuru Peak (5,895m).</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          What is the success rate for climbing Kilimanjaro?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>iTanzania Safaris achieves a <strong>90%+ summit success rate</strong> thanks to our KINAPA-certified guides, proper acclimatization schedules, and individualized pace management. Overall rates across the mountain range from 45–85% depending on route and operator.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          How much does Kilimanjaro climbing cost?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>Packages start from <strong>$2,100 per person</strong> for the 6-day Marangu route, up to $3,800+ for the 9-day Northern Circuit. Price includes park fees (~$700), all camping equipment, meals, guides, porters, and rescue fees. International flights are not included.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          What is the best route to climb Kilimanjaro?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>The <strong>Lemosho route (8 days)</strong> is considered the best overall — excellent scenery, good acclimatization, and moderate crowds. The Machame route (7 days) is the most popular. The Marangu route (6 days) is the only route with hut accommodation.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          Do you need experience to climb Kilimanjaro?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p><strong>No technical climbing experience is required.</strong> Kilimanjaro is a trekking peak. However, good cardiovascular fitness is essential — we recommend a 3–4 month training program focusing on hiking, cardio, and leg strength before your climb.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          What is the best time to climb Kilimanjaro?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>The best times are <strong>January–March and June–October</strong> when conditions are driest. The rainy seasons (April–May and November) bring more challenging conditions but fewer crowds and lower prices.</p></div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
