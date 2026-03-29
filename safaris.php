<?php
include_once 'includes/lang.php';
$page_title = t('seo.safaris.title');
$page_description = t('seo.safaris.description');
$faq_schema = [
  '@context' => 'https://schema.org',
  '@type' => 'FAQPage',
  'mainEntity' => [
    ['@type'=>'Question','name'=>'How much does a Tanzania safari cost?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Tanzania safari packages at iTanzania Safaris start from $1,476 per person for a 5-night/6-day Northern Circuit safari covering Tarangire, Serengeti and Ngorongoro Crater. Luxury lodge safaris range from $4,000–$8,000+ per person. The cost depends on accommodation tier, duration, and parks visited.']],
    ['@type'=>'Question','name'=>'What is the best time to go on safari in Tanzania?','acceptedAnswer'=>['@type'=>'Answer','text'=>'The best time for Tanzania safari is the dry season from June to October, when animals concentrate around water sources and vegetation is sparse for easy viewing. The Great Migration river crossings happen July–October in the northern Serengeti. The green season (November–May) offers lush scenery, newborn animals, and lower prices.']],
    ['@type'=>'Question','name'=>'What animals will I see on a Tanzania safari?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Tanzania is home to the Big Five — lion, leopard, elephant, buffalo and rhino — plus cheetah, giraffe, zebra, hippo, crocodile, wildebeest and over 500 bird species. The Serengeti has the largest lion population in Africa (~3,000) and the Ngorongoro Crater offers the highest density of wildlife anywhere on Earth.']],
    ['@type'=>'Question','name'=>'How many days do I need for a Tanzania safari?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A minimum of 5 nights/6 days is recommended to cover the Northern Circuit (Tarangire, Serengeti, Ngorongoro). For a more relaxed pace with better wildlife viewing, 7–10 days is ideal. Adding Zanzibar beach extends the trip by 3–5 days.']],
    ['@type'=>'Question','name'=>'Is Tanzania safe for tourists?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Tanzania is one of the safest safari destinations in Africa. The national parks and tourist areas have strong security. iTanzania Safaris guides are TATO-registered professionals who maintain radio contact with park authorities throughout all game drives.']],
    ['@type'=>'Question','name'=>'Do I need vaccinations for Tanzania?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Yellow fever vaccination is mandatory if arriving from a yellow fever endemic country. Recommended vaccinations include hepatitis A, typhoid, and tetanus. Malaria prophylaxis is strongly advised. Consult your doctor 6–8 weeks before travel.']],
  ]
];
$safari_package_schema = [
  '@context' => 'https://schema.org',
  '@type' => 'ItemList',
  'name' => 'Tanzania Safari Packages',
  'url' => 'https://itanzaniasafaris.com/safaris',
  'description' => 'Expert-guided Tanzania safari packages covering Serengeti, Ngorongoro Crater, and Tarangire National Park. Group sizes 2–12. All-inclusive from $1,476 per person.',
  'numberOfItems' => 3,
  'itemListElement' => [
    [
      '@type' => 'ListItem',
      'position' => 1,
      'item' => [
        '@type' => 'TouristTrip',
        'name' => '5N/6D Tanzania Wildlife Safari — Tarangire, Serengeti & Ngorongoro',
        'url' => 'https://itanzaniasafaris.com/feb-march-2026-safari',
        'description' => 'Witness the Great Migration, explore Ngorongoro Crater and encounter elephant herds in Tarangire. 4 accommodation tiers: budget, mid-range, comfort, and premium.',
        'image' => 'https://itanzaniasafaris.com/images/itinerary-serengeti.jpg',
        'touristType' => ['Wildlife Enthusiasts', 'First-time Safari Goers', 'Couples', 'Families'],
        'itinerary' => ['@type' => 'ItemList', 'numberOfItems' => 6],
        'offers' => ['@type' => 'Offer', 'price' => '1476', 'priceCurrency' => 'USD', 'availability' => 'https://schema.org/InStock'],
      ],
    ],
    [
      '@type' => 'ListItem',
      'position' => 2,
      'item' => [
        '@type' => 'TouristTrip',
        'name' => '7N/8D Safari + Zanzibar Beach Holiday',
        'url' => 'https://itanzaniasafaris.com/mar-april-2026-safari-zanzibar',
        'description' => 'Combine a 5-day Northern Circuit safari with a 3-night all-inclusive Zanzibar beach holiday. Domestic flight included.',
        'image' => 'https://itanzaniasafaris.com/images/safari-beach.jpg',
        'touristType' => ['Beach & Safari Combo Seekers', 'Honeymooners', 'Couples'],
        'itinerary' => ['@type' => 'ItemList', 'numberOfItems' => 8],
        'offers' => ['@type' => 'Offer', 'price' => '2417', 'priceCurrency' => 'USD', 'availability' => 'https://schema.org/InStock'],
      ],
    ],
    [
      '@type' => 'ListItem',
      'position' => 3,
      'item' => [
        '@type' => 'TouristTrip',
        'name' => '9N/10D Northern Circuit Safari + Kilimanjaro Cultural Tour',
        'url' => 'https://itanzaniasafaris.com/10-day-northern-circuit-safari',
        'description' => 'Complete 10-day Tanzania safari: Tarangire, 3 nights Serengeti, Ngorongoro Crater, Arusha cultural tour, and a full-day Marangu Cultural Tour on the slopes of Kilimanjaro. 4 accommodation options, all-season pricing.',
        'image' => 'https://itanzaniasafaris.com/images/marangu.jpg',
        'touristType' => ['Wildlife Enthusiasts', 'Culture Travellers', 'Couples', 'Small Groups'],
        'itinerary' => ['@type' => 'ItemList', 'numberOfItems' => 10],
        'offers' => ['@type' => 'Offer', 'price' => '2508', 'priceCurrency' => 'USD', 'availability' => 'https://schema.org/InStock'],
      ],
    ],
  ],
];
$extra_head = (isset($extra_head) ? $extra_head : '') . '<script type="application/ld+json">' . json_encode($safari_package_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
$extra_head .= '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
include 'includes/header.php';
?>

<!-- Hero -->
<section class="page-hero">
  <div class="page-hero-bg" style="background-image: url('/images/serengeti.jpg')"></div>
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
        <img src="/images/itinerary-serengeti.jpg" alt="Serengeti Safari" style="width:100%;height:100%;object-fit:cover;">
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
    <a href="<?php echo lang_url('mar-april-2026-safari-zanzibar.php'); ?>" class="featured-package-card reveal" style="display:grid;grid-template-columns:1fr 1fr;gap:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.10);text-decoration:none;color:inherit;transition:transform 0.3s,box-shadow 0.3s;margin-bottom:2.5rem;">
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

    <!-- Featured Package 3: 10-Day Northern Circuit + Kilimanjaro Cultural -->
    <a href="<?php echo lang_url('10-day-northern-circuit-safari.php'); ?>" class="featured-package-card reveal" style="display:grid;grid-template-columns:1fr 1fr;gap:0;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.10);text-decoration:none;color:inherit;transition:transform 0.3s,box-shadow 0.3s;">
      <div style="position:relative;overflow:hidden;min-height:300px;">
        <img src="/images/marangu.jpg" alt="10-day Tanzania Northern Circuit safari Kilimanjaro Marangu cultural tour" style="width:100%;height:100%;object-fit:cover;">
        <span style="position:absolute;top:16px;left:16px;background:var(--secondary);color:#fff;padding:6px 16px;border-radius:20px;font-size:0.85rem;font-weight:600;">All Seasons 2026</span>
      </div>
      <div style="padding:2.5rem;display:flex;flex-direction:column;justify-content:center;">
        <span style="color:var(--primary);font-weight:600;font-size:0.85rem;text-transform:uppercase;letter-spacing:1px;">9 Nights / 10 Days</span>
        <h3 style="font-size:1.6rem;margin:0.5rem 0;color:#1a1a1a;">Northern Circuit + Kilimanjaro Cultural Tour</h3>
        <p style="color:#666;line-height:1.7;margin-bottom:1.5rem;">The most complete Tanzania safari: Tarangire, 3 nights Serengeti, Ngorongoro Crater, Arusha cultural tour, and a full day on the slopes of Kilimanjaro in Marangu village. 4 accommodation tiers.</p>
        <div style="display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;">
          <span style="font-size:1.3rem;font-weight:700;color:var(--primary);"><?php echo t('home.from'); ?> $2,508 <span style="font-size:0.85rem;font-weight:400;color:#999;"><?php echo t('home.per_person'); ?></span></span>
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

<?php include_once 'includes/blog-data.php'; ?>
<?php
$safari_posts = array_slice(array_filter(array_map(fn($p) => localizePost($p, $current_lang), $blogPosts), fn($p) => in_array($p['category'], ['Planning', 'Destinations'])), 0, 3);
$safari_posts = array_values($safari_posts);
?>
<section class="py-20 bg-sand">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle"><?php echo t('blog.hero_subtitle'); ?></span>
      <h2 class="section-title"><?php echo t('blog.featured_title'); ?></h2>
    </div>
    <div class="blog-grid reveal">
      <?php foreach (array_slice($safari_posts, 0, 3) as $post_s): ?>
      <a href="<?php echo lang_url('blog-post.php?slug=' . $post_s['slug']); ?>" class="blog-card">
        <div class="blog-card-img">
          <img src="<?php echo $post_s['image']; ?>" alt="<?php echo htmlspecialchars($post_s['title']); ?>" loading="lazy">
          <span class="blog-card-cat"><?php echo htmlspecialchars($post_s['category']); ?></span>
        </div>
        <div class="blog-card-body">
          <div class="blog-card-meta">
            <span><?php echo date('M j, Y', strtotime($post_s['date'])); ?></span>
            <span class="blog-meta-dot"></span>
            <span><?php echo $post_s['read_time']; ?></span>
          </div>
          <h3><?php echo htmlspecialchars($post_s['title']); ?></h3>
          <p><?php echo htmlspecialchars($post_s['excerpt']); ?></p>
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
<section class="py-20 bg-white">
  <div class="container-sm">
    <div class="section-heading reveal">
      <span class="section-subtitle">FREQUENTLY ASKED QUESTIONS</span>
      <h2 class="section-title">Tanzania Safari FAQ</h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          How much does a Tanzania safari cost?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>Tanzania safari packages at iTanzania Safaris start from <strong>$1,476 per person</strong> for a 5-night/6-day Northern Circuit safari covering Tarangire, Serengeti and Ngorongoro Crater. Luxury lodge safaris range from $4,000–$8,000+ per person. The cost depends on accommodation tier, duration, and parks visited.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          What is the best time to go on safari in Tanzania?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>The best time is the <strong>dry season June–October</strong>, when wildlife concentrates around water and vegetation is sparse. Great Migration river crossings peak July–October. The green season (November–May) offers lower prices and newborn animals.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          What animals will I see on a Tanzania safari?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>Tanzania is home to the <strong>Big Five</strong> — lion, leopard, elephant, buffalo and rhino — plus cheetah, giraffe, zebra, wildebeest and 500+ bird species. The Serengeti has Africa's largest lion population (~3,000) and Ngorongoro Crater the highest wildlife density on Earth.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          How many days do I need for a Tanzania safari?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>A minimum of <strong>5 nights/6 days</strong> covers the Northern Circuit (Tarangire, Serengeti, Ngorongoro). For a relaxed pace, 7–10 days is ideal. Add 3–5 days for Zanzibar beach.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          Is Tanzania safe for tourists?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>Tanzania is one of the <strong>safest safari destinations in Africa</strong>. iTanzania Safaris guides are TATO-registered and maintain radio contact with park authorities throughout all game drives.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          Do I need vaccinations for Tanzania?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p><strong>Yellow fever certificate is mandatory</strong> if arriving from an endemic country. Recommended: hepatitis A, typhoid, tetanus. Malaria prophylaxis is strongly advised. See your doctor 6–8 weeks before travel.</p></div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
