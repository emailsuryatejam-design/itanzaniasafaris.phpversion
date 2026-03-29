<?php
include_once 'includes/lang.php';
$page_title = '10-Day Tanzania Northern Circuit Safari + Kilimanjaro Cultural Tour | From $2,508pp';
$page_description = 'Complete 10-day Tanzania safari: Tarangire, 3 nights Serengeti, Ngorongoro Crater, Arusha cultural tour & Marangu Kilimanjaro slopes. 4 accommodation tiers, all-season pricing from $2,508 per person.';

$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'TouristTrip',
  'name' => '10-Day Tanzania Northern Circuit Safari + Marangu Kilimanjaro Cultural Tour',
  'url' => 'https://itanzaniasafaris.com/10-day-northern-circuit-safari',
  'description' => 'Complete 10-day Tanzania safari covering Tarangire, Serengeti (3 nights), Ngorongoro Crater, Arusha cultural tour, and Marangu Kilimanjaro slopes. 4 accommodation options, all-season pricing.',
  'image' => 'https://itanzaniasafaris.com/images/marangu.jpg',
  'provider' => ['@type' => 'TravelAgency', 'name' => 'iTanzania Safaris', 'url' => 'https://itanzaniasafaris.com'],
  'touristType' => ['Wildlife Enthusiasts', 'Culture Travellers', 'Couples', 'Small Groups', 'First-time Safari Goers'],
  'offers' => ['@type' => 'Offer', 'name' => '10-Day Tanzania Safari from $2,508pp', 'price' => '2508', 'priceCurrency' => 'USD', 'availability' => 'https://schema.org/InStock', 'validFrom' => '2026-01-01', 'validThrough' => '2026-12-31'],
  'itinerary' => [
    '@type' => 'ItemList',
    'name' => '10-Day Safari Itinerary',
    'numberOfItems' => 10,
    'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1,  'name' => 'Day 1: Arrive Arusha'],
      ['@type' => 'ListItem', 'position' => 2,  'name' => 'Day 2: Tarangire National Park'],
      ['@type' => 'ListItem', 'position' => 3,  'name' => 'Day 3: Karatu to Serengeti'],
      ['@type' => 'ListItem', 'position' => 4,  'name' => 'Day 4: Full Day Serengeti'],
      ['@type' => 'ListItem', 'position' => 5,  'name' => 'Day 5: Serengeti (Optional Balloon Safari)'],
      ['@type' => 'ListItem', 'position' => 6,  'name' => 'Day 6: Serengeti to Ngorongoro'],
      ['@type' => 'ListItem', 'position' => 7,  'name' => 'Day 7: Ngorongoro Crater & Arusha'],
      ['@type' => 'ListItem', 'position' => 8,  'name' => 'Day 8: Arusha Cultural Tour'],
      ['@type' => 'ListItem', 'position' => 9,  'name' => 'Day 9: Marangu / Kilimanjaro Slopes'],
      ['@type' => 'ListItem', 'position' => 10, 'name' => 'Day 10: Departure'],
    ],
  ],
];

$breadcrumb = [
  '@context' => 'https://schema.org',
  '@type' => 'BreadcrumbList',
  'itemListElement' => [
    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',    'item' => 'https://itanzaniasafaris.com/'],
    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Safaris', 'item' => 'https://itanzaniasafaris.com/safaris'],
    ['@type' => 'ListItem', 'position' => 3, 'name' => '10-Day Northern Circuit Safari', 'item' => 'https://itanzaniasafaris.com/10-day-northern-circuit-safari'],
  ],
];

$faq_schema = [
  '@context' => 'https://schema.org',
  '@type' => 'FAQPage',
  'mainEntity' => [
    ['@type'=>'Question','name'=>'How many days is the Northern Circuit Tanzania safari?','acceptedAnswer'=>['@type'=>'Answer','text'=>'This Northern Circuit safari is 10 days / 9 nights. It covers Tarangire National Park (1 day), Serengeti (3 nights), Ngorongoro Crater (1 day), an Arusha cultural tour, and a full-day Marangu Cultural Tour on the lower slopes of Kilimanjaro — the most comprehensive Northern Circuit itinerary available.']],
    ['@type'=>'Question','name'=>'What is included in the 10-day Tanzania safari?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Inclusions: all park & concession fees (including Ngorongoro Crater fee), private 4x4 safari vehicle, experienced English-speaking driver-guide, all accommodation per selected tier, all meals (fullboard on safari days), Serval Wildlife visit, Marangu/Kilimanjaro slopes day excursion, airport transfers. Exclusions: flights, visa, travel insurance, tips, balloon safari ($500pp), holiday surcharges.']],
    ['@type'=>'Question','name'=>'How much does a 10-day Tanzania safari cost?','acceptedAnswer'=>['@type'=>'Answer','text'=>'The 10-day Tanzania Northern Circuit safari starts from $2,508 per person (budget option, low season, 6 passengers). Budget peak-season rates start at $2,712pp. Mid-range rates start from $2,922pp. Premium lodge options start from $4,047pp. All prices are per person based on double occupancy.']],
    ['@type'=>'Question','name'=>'What is the Marangu Cultural Tour on this safari?','acceptedAnswer'=>['@type'=>'Answer','text'=>'The Marangu Cultural Tour is a full-day excursion on the lower slopes of Mount Kilimanjaro. You visit Marangu village, swim at Materuni Waterfalls, explore the Chagga Museum and underground WWII tunnels, browse the largest banana market in Tanzania, visit a coffee farm to learn bean-to-cup preparation, and sample traditional Chagga food and banana wine.']],
    ['@type'=>'Question','name'=>'When is the best time for the 10-day Northern Circuit safari?','acceptedAnswer'=>['@type'=>'Answer','text'=>'The 10-day Northern Circuit safari runs year-round. Peak season (January–February, June–October, 16–31 December) offers Great Migration river crossings (July–October) and excellent dry-season game viewing. High season (March, November 1 – December 15) has lush green landscapes and fewer crowds. Low season (April–May) gives the best prices with still-good wildlife sightings.']],
    ['@type'=>'Question','name'=>'Is a hot air balloon safari included in the 10-day package?','acceptedAnswer'=>['@type'=>'Answer','text'=>'The hot air balloon safari over the Serengeti is optional, priced at $500 per person. It is not included in the base price. If you wish to book it, let us know when enquiring and we will arrange it for Day 5 of your itinerary.']],
  ],
];

$extra_head  = '<link rel="preload" href="/images/marangu.jpg" as="image" fetchpriority="high">';
$extra_head .= '<script type="application/ld+json">' . json_encode($schema,    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
$extra_head .= '<script type="application/ld+json">' . json_encode($breadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
$extra_head .= '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="itn-hero">
  <div class="itn-hero-bg" style="background-image: url('/images/marangu.jpg')"></div>
  <div class="itn-hero-overlay"></div>
  <div class="itn-hero-content">
    <span class="itn-hero-badge">All Seasons 2026</span>
    <h1>10-Day Northern Circuit Safari</h1>
    <p class="itn-hero-route">Tarangire &bull; Serengeti &bull; Ngorongoro &bull; Kilimanjaro Slopes</p>
    <div class="itn-hero-meta">
      <span><svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> 9 Nights / 10 Days</span>
      <span><svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg> 2–6 Travelers</span>
      <span><svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Year-Round</span>
    </div>
    <div class="itn-hero-quote">
      <em>&ldquo;There is something about safari life that makes you forget all your sorrows and feel as if you had drunk half a bottle of champagne.&rdquo;</em>
      <span>&mdash; Karen Blixen</span>
    </div>
  </div>
</section>

<!-- Overview Strip -->
<section style="background:#1a5c38;padding:1.25rem 0;">
  <div class="container-md" style="display:flex;flex-wrap:wrap;gap:1.5rem;justify-content:center;align-items:center;">
    <span style="color:#fff;font-size:0.95rem;"><strong>From $2,508</strong> per person</span>
    <span style="color:#e8c96e;font-size:1rem;">|</span>
    <span style="color:#fff;font-size:0.95rem;">9 Nights / 10 Days</span>
    <span style="color:#e8c96e;font-size:1rem;">|</span>
    <span style="color:#fff;font-size:0.95rem;">4 Accommodation Options</span>
    <span style="color:#e8c96e;font-size:1rem;">|</span>
    <span style="color:#fff;font-size:0.95rem;">Peak / High / Low Season Rates</span>
    <span style="color:#e8c96e;font-size:1rem;">|</span>
    <a href="<?php echo lang_url('contact.php'); ?>" style="background:#e8c96e;color:#1a1a1a;padding:8px 20px;border-radius:20px;font-weight:600;font-size:0.9rem;text-decoration:none;">Get a Quote</a>
  </div>
</section>

<!-- Itinerary Timeline -->
<section class="itn-timeline-section">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle">Day by Day</span>
      <h2 class="section-title">10-Day Safari Itinerary</h2>
      <p class="section-desc">From Tarangire elephants to Serengeti lion prides, Ngorongoro rhinos, and Kilimanjaro cultural immersion — the complete Tanzania experience.</p>
    </div>
  </div>

  <!-- Day 1 -->
  <div class="itn-day reveal" id="day-1">
    <div class="itn-day-image">
      <img src="/images/itinerary-arusha.jpg" alt="Arrival in Arusha Tanzania" loading="lazy">
    </div>
    <div class="itn-day-content">
      <div class="itn-day-badge">Day 1</div>
      <h3>Arrival in Arusha</h3>
      <p>Upon arrival at Kilimanjaro International Airport, you will be warmly welcomed by your professional driver-guide and transferred to your hotel in Arusha town. Check in on a bed-and-breakfast basis. The rest of the day is at leisure — rest, explore Arusha town, and prepare for the exciting 10-day safari ahead.</p>
      <div class="itn-day-details">
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
          <span>Meals: No Meals</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          <span>Accommodation: Bed &amp; Breakfast in Arusha</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>Drive: Kilimanjaro Airport → Arusha Town | 1 hour</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Day 2 -->
  <div class="itn-day itn-day-reverse reveal" id="day-2">
    <div class="itn-day-image">
      <img src="/images/itinerary-tarangire.jpg" alt="Tarangire National Park elephant herd safari Tanzania" loading="lazy">
    </div>
    <div class="itn-day-content">
      <div class="itn-day-badge">Day 2</div>
      <h3>Tarangire National Park</h3>
      <p>After breakfast, depart for <strong>Tarangire National Park</strong> — Tanzania's hidden gem, famous for Africa's highest concentration of elephants outside Amboseli, ancient baobab trees thousands of years old, and exceptional year-round wildlife including lions, leopards, buffalo, and over 550 bird species. Enjoy a full-day game drive with a packed picnic lunch in the bush. In the afternoon, drive to Karatu for dinner and overnight.</p>
      <div class="itn-day-details">
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
          <span>Meals: Breakfast, Lunch (packed), Dinner</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          <span>Accommodation: Lodge in Karatu (Fullboard)</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>Drive: Full-day game drive | Tarangire → Karatu 2 hrs</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Day 3 -->
  <div class="itn-day reveal" id="day-3">
    <div class="itn-day-image">
      <img src="/images/itinerary-serengeti.jpg" alt="Serengeti National Park Tanzania safari game drive" loading="lazy">
    </div>
    <div class="itn-day-content">
      <div class="itn-day-badge">Day 3</div>
      <h3>Karatu to Serengeti via Ngorongoro Highlands</h3>
      <p>After breakfast, begin the scenic drive through the <strong>Ngorongoro Conservation Area highlands</strong> — lush montane forests, Maasai pasturelands, and panoramic crater rim views — before descending onto the vast Serengeti plains. Game viewing along the route with packed lunches. Afternoon game drive in the central Serengeti upon arrival. Dinner and overnight at your camp or lodge, surrounded by the sounds of the African wilderness.</p>
      <div class="itn-day-details">
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
          <span>Meals: Breakfast, Lunch (packed), Dinner</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          <span>Accommodation: Serengeti Camp/Lodge (Fullboard)</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>Drive: Karatu → Ngorongoro gate 45 min | → Serengeti 4 hrs</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Day 4 -->
  <div class="itn-day itn-day-reverse reveal" id="day-4">
    <div class="itn-day-image">
      <img src="/images/itinerary-game-drive.jpg" alt="Serengeti game drive lion cheetah safari Tanzania" loading="lazy">
    </div>
    <div class="itn-day-content">
      <div class="itn-day-badge">Day 4</div>
      <h3>Full Day in the Serengeti</h3>
      <p>A full day of thrilling game drives across the <strong>Serengeti</strong> — the world's greatest wildlife spectacle. Search the vast savannahs for the Big Five, cheetah sprints, leopard in acacia trees, and the Great Migration herds. With 3 nights in the Serengeti, you have far more time than standard 1–2 night itineraries to explore different zones and witness predator-prey encounters at dawn and dusk.</p>
      <div class="itn-day-details">
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
          <span>Meals: Breakfast, Lunch (packed), Dinner</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          <span>Accommodation: Serengeti Camp/Lodge (Fullboard)</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>Drive: Full-day game drive in Serengeti (flexible)</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Day 5 -->
  <div class="itn-day reveal" id="day-5">
    <div class="itn-day-image">
      <img src="/images/itinerary-serengeti.jpg" alt="Serengeti hot air balloon safari optional Tanzania" loading="lazy">
    </div>
    <div class="itn-day-content">
      <div class="itn-day-badge">Day 5</div>
      <h3>Serengeti — Optional Hot Air Balloon Safari</h3>
      <p>Wake before dawn for an optional <strong>hot air balloon safari over the Serengeti</strong> ($500 per person). Drift silently above the endless plains as the sun rises, spotting lions, elephant herds, and wildebeest from above — an unforgettable perspective. After the balloon flight, enjoy a champagne bush breakfast in the field. The rest of the day continues with more game drives, giving you yet another full day exploring the Serengeti.</p>
      <div class="itn-day-details">
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
          <span>Meals: Breakfast, Lunch (packed), Dinner</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          <span>Accommodation: Serengeti Camp/Lodge (Fullboard)</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
          <span>Optional: Hot Air Balloon Safari — $500 per person (not included)</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Day 6 -->
  <div class="itn-day itn-day-reverse reveal" id="day-6">
    <div class="itn-day-image">
      <img src="/images/itinerary-ngorongoro.jpg" alt="Ngorongoro Conservation Area crater rim Tanzania" loading="lazy">
    </div>
    <div class="itn-day-content">
      <div class="itn-day-badge">Day 6</div>
      <h3>Serengeti to Ngorongoro Conservation Area</h3>
      <p>After breakfast, enjoy a final half-day morning game drive in the Serengeti before heading east toward the <strong>Ngorongoro Conservation Area</strong>. The afternoon drive passes through Maasai grazing lands and the striking Ngorongoro highlands. Check in at your lodge or camp perched on the crater rim, with dramatic sunset views over the caldera. Dinner and overnight on the rim.</p>
      <div class="itn-day-details">
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
          <span>Meals: Breakfast, Lunch (packed), Dinner</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          <span>Accommodation: Ngorongoro Rim Lodge/Camp (Fullboard)</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>Drive: Serengeti → Ngorongoro gate 3 hrs</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Day 7 -->
  <div class="itn-day reveal" id="day-7">
    <div class="itn-day-image">
      <img src="/images/itinerary-ngorongoro.jpg" alt="Ngorongoro Crater game drive Big Five Tanzania" loading="lazy">
    </div>
    <div class="itn-day-content">
      <div class="itn-day-badge">Day 7</div>
      <h3>Ngorongoro Crater &amp; Return to Arusha</h3>
      <p>An early start for the descent into the <strong>Ngorongoro Crater</strong> — the world's largest intact volcanic caldera and a UNESCO World Heritage Site. This extraordinary ecosystem shelters Africa's densest concentration of wildlife: lions, leopards, elephants, black rhinos (critically endangered), hippos, zebras, wildebeest, and thousands of flamingos on Lake Magadi. Enjoy a picnic lunch on the crater floor. In the late afternoon, ascend and drive back to Arusha town for dinner and overnight.</p>
      <div class="itn-day-details">
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
          <span>Meals: Breakfast, Lunch (packed), Dinner</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          <span>Accommodation: Hotel in Arusha (Fullboard)</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>Drive: Lodge → Crater floor 1 hr | Ngorongoro gate → Arusha 3 hrs</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Day 8 -->
  <div class="itn-day itn-day-reverse reveal" id="day-8">
    <div class="itn-day-image">
      <img src="/images/itinerary-arusha.jpg" alt="Arusha cultural tour Shanga Serval Wildlife Tanzania" loading="lazy">
    </div>
    <div class="itn-day-content">
      <div class="itn-day-badge">Day 8</div>
      <h3>Arusha Cultural Tour &amp; Transfer to Moshi</h3>
      <p>A unique cultural day exploring the best of Arusha. Visit the <strong>Tanzanite Museum</strong> to learn about this rare gemstone found only near Kilimanjaro. Then explore <strong>Shanga River House</strong> — a remarkable social enterprise employing people with disabilities to create stunning handmade jewellery, glassware, and homeware from recycled materials. Afternoon visit to <strong>Serval Wildlife Centre</strong>, where you can touch and feed rescued African wildlife up close. Transfer to Moshi Town for dinner and overnight.</p>
      <div class="itn-day-details">
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
          <span>Meals: Breakfast, Dinner (lunch at own cost)</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          <span>Accommodation: Lodge in Moshi Town (Fullboard)</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>Drive: Arusha city tour | Arusha → Serval Wildlife 1 hr | → Moshi 1.5 hrs</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Day 9 -->
  <div class="itn-day reveal" id="day-9">
    <div class="itn-day-image">
      <img src="/images/marangu.jpg" alt="Marangu Cultural Tour Kilimanjaro slopes Chagga village Tanzania" loading="lazy">
    </div>
    <div class="itn-day-content">
      <div class="itn-day-badge">Day 9</div>
      <h3>Marangu Cultural Tour — Slopes of Kilimanjaro</h3>
      <p>A full-day immersion into <strong>Chagga culture on the lower slopes of Mount Kilimanjaro</strong>. Your local Marangu village guide will lead you through:</p>
      <ul style="margin:0.75rem 0 0.75rem 1.25rem;line-height:2;">
        <li><strong>Materuni Waterfalls</strong> — swim in the cool mountain waters with stunning Kilimanjaro views</li>
        <li><strong>Chagga Museum</strong> — reconstructed traditional thatched homestead with cultural exhibitions</li>
        <li><strong>Underground Chagga Tunnels</strong> — the WWII-era tunnels used during clan wars</li>
        <li><strong>Marangu Market</strong> — Tanzania's largest banana market, drawing buyers from across the country</li>
        <li><strong>Coffee &amp; Banana Farm</strong> — learn the traditional bean-to-cup coffee process; sample local dishes</li>
        <li><strong>Local Chagga Bar</strong> — taste traditional <em>mbege</em>, banana wine brewed from millet</li>
      </ul>
      <p>Return to Moshi for dinner. <em>Note: this excursion is strenuous — bring comfortable shoes and a swimsuit.</em></p>
      <div class="itn-day-details">
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
          <span>Meals: Breakfast, Lunch (packed), Dinner</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          <span>Accommodation: Lodge in Moshi Town (Fullboard)</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>Drive: Moshi → Kilimanjaro slopes 1.5 hrs | Full-day excursion</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Day 10 -->
  <div class="itn-day itn-day-reverse reveal" id="day-10">
    <div class="itn-day-image">
      <img src="/images/itinerary-departure.jpg" alt="Kilimanjaro Airport departure Tanzania safari" loading="lazy">
    </div>
    <div class="itn-day-content">
      <div class="itn-day-badge">Day 10</div>
      <h3>Departure from Kilimanjaro</h3>
      <p>After breakfast, check out from your lodge and transfer to <strong>Kilimanjaro International Airport</strong> for your onward flight home. As your 10-day Tanzania safari comes to an end, we bid you farewell with wonderful memories of Africa's landscapes, wildlife, and warm Tanzanian hospitality — until we meet again!</p>
      <div class="itn-day-details">
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
          <span>Meals: Breakfast, Lunch (packed)</span>
        </div>
        <div class="itn-detail-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span>Drive: Moshi Town → Kilimanjaro Airport 1.5 hrs</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="py-20 bg-sand" id="pricing">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle">Transparent Pricing</span>
      <h2 class="section-title">10-Day Safari Rates 2026</h2>
      <p class="section-desc">All prices are per person (USD) based on double-room sharing. Choose your accommodation tier and travel season.</p>
    </div>

    <div class="reveal" style="overflow-x:auto;margin-bottom:2rem;">
      <p style="margin-bottom:1rem;color:#555;font-size:0.95rem;"><strong>Season Guide:</strong> &nbsp;
        <span style="color:#c0392b;font-weight:600;">PEAK</span> — Jan, Feb, Jun–Oct, 16–31 Dec &nbsp;|&nbsp;
        <span style="color:#e67e22;font-weight:600;">HIGH</span> — Mar, 1 Nov–15 Dec &nbsp;|&nbsp;
        <span style="color:#27ae60;font-weight:600;">LOW</span> — Apr &amp; May
      </p>

      <table style="width:100%;border-collapse:collapse;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 2px 16px rgba(0,0,0,0.08);">
        <thead>
          <tr style="background:#1a5c38;color:#fff;">
            <th style="padding:14px 18px;text-align:left;font-size:0.9rem;">Accommodation Option</th>
            <th style="padding:14px 12px;text-align:center;font-size:0.85rem;">Season</th>
            <th style="padding:14px 12px;text-align:center;font-size:0.85rem;">2 Pax / pp</th>
            <th style="padding:14px 12px;text-align:center;font-size:0.85rem;">4 Pax / pp</th>
            <th style="padding:14px 12px;text-align:center;font-size:0.85rem;">6 Pax / pp</th>
          </tr>
        </thead>
        <tbody>
          <!-- Option 04: Budget -->
          <tr style="background:#f9f9f9;border-bottom:1px solid #eee;">
            <td rowspan="3" style="padding:14px 18px;font-weight:600;vertical-align:middle;border-right:1px solid #eee;">
              <span style="display:block;font-size:1rem;color:#1a5c38;">Budget</span>
              <span style="font-size:0.8rem;font-weight:400;color:#888;">Venus Hotel &bull; Marera Valley Lodge &bull; Tukaone Tented Camp &bull; Ngorongoro Angata Camp &bull; Weru Weru River Lodge</span>
            </td>
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#c0392b;font-size:0.85rem;">PEAK</td>
            <td style="padding:10px 12px;text-align:center;font-weight:700;">$3,620</td>
            <td style="padding:10px 12px;text-align:center;font-weight:700;">$2,939</td>
            <td style="padding:10px 12px;text-align:center;font-weight:700;">$2,712</td>
          </tr>
          <tr style="background:#f9f9f9;border-bottom:1px solid #eee;">
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#e67e22;font-size:0.85rem;">HIGH</td>
            <td style="padding:10px 12px;text-align:center;font-weight:700;">$3,620</td>
            <td style="padding:10px 12px;text-align:center;font-weight:700;">$2,939</td>
            <td style="padding:10px 12px;text-align:center;font-weight:700;">$2,712</td>
          </tr>
          <tr style="background:#f9f9f9;border-bottom:2px solid #ddd;">
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#27ae60;font-size:0.85rem;">LOW</td>
            <td style="padding:10px 12px;text-align:center;font-weight:700;color:#27ae60;">$3,418</td>
            <td style="padding:10px 12px;text-align:center;font-weight:700;color:#27ae60;">$2,736</td>
            <td style="padding:10px 12px;text-align:center;font-weight:700;color:#27ae60;">$2,508</td>
          </tr>
          <!-- Option 03: Mid-range -->
          <tr style="border-bottom:1px solid #eee;">
            <td rowspan="3" style="padding:14px 18px;font-weight:600;vertical-align:middle;border-right:1px solid #eee;">
              <span style="display:block;font-size:1rem;color:#1a5c38;">Mid-Range</span>
              <span style="font-size:0.8rem;font-weight:400;color:#888;">Venus Hotel &bull; Marera Valley Lodge &bull; Hippo Trails Tented Camp &bull; Ngorongoro Angata Camp &bull; Weru Weru River Lodge</span>
            </td>
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#c0392b;font-size:0.85rem;">PEAK</td>
            <td style="padding:10px 12px;text-align:center;">$3,831</td>
            <td style="padding:10px 12px;text-align:center;">$3,150</td>
            <td style="padding:10px 12px;text-align:center;">$2,922</td>
          </tr>
          <tr style="border-bottom:1px solid #eee;">
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#e67e22;font-size:0.85rem;">HIGH</td>
            <td style="padding:10px 12px;text-align:center;">$3,831</td>
            <td style="padding:10px 12px;text-align:center;">$3,150</td>
            <td style="padding:10px 12px;text-align:center;">$2,922</td>
          </tr>
          <tr style="border-bottom:2px solid #ddd;">
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#27ae60;font-size:0.85rem;">LOW</td>
            <td style="padding:10px 12px;text-align:center;color:#27ae60;">$3,652</td>
            <td style="padding:10px 12px;text-align:center;color:#27ae60;">$2,971</td>
            <td style="padding:10px 12px;text-align:center;color:#27ae60;">$2,744</td>
          </tr>
          <!-- Option 02: Serena -->
          <tr style="background:#f9f9f9;border-bottom:1px solid #eee;">
            <td rowspan="3" style="padding:14px 18px;font-weight:600;vertical-align:middle;border-right:1px solid #eee;">
              <span style="display:block;font-size:1rem;color:#1a5c38;">High-End (Serena)</span>
              <span style="font-size:0.8rem;font-weight:400;color:#888;">Four Points Sheraton &bull; Lake Manyara Serena Lodge &bull; Serengeti Serena Lodge &bull; Ngorongoro Serena Lodge &bull; Arusha Serena Hotel &bull; Weru Weru River Lodge</span>
            </td>
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#c0392b;font-size:0.85rem;">PEAK</td>
            <td style="padding:10px 12px;text-align:center;">$4,855</td>
            <td style="padding:10px 12px;text-align:center;">$4,175</td>
            <td style="padding:10px 12px;text-align:center;">$3,948</td>
          </tr>
          <tr style="background:#f9f9f9;border-bottom:1px solid #eee;">
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#e67e22;font-size:0.85rem;">HIGH</td>
            <td style="padding:10px 12px;text-align:center;">$4,038</td>
            <td style="padding:10px 12px;text-align:center;">$3,355</td>
            <td style="padding:10px 12px;text-align:center;">$3,128</td>
          </tr>
          <tr style="background:#f9f9f9;border-bottom:2px solid #ddd;">
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#27ae60;font-size:0.85rem;">LOW</td>
            <td style="padding:10px 12px;text-align:center;color:#27ae60;">$3,978</td>
            <td style="padding:10px 12px;text-align:center;color:#27ae60;">$3,298</td>
            <td style="padding:10px 12px;text-align:center;color:#27ae60;">$3,070</td>
          </tr>
          <!-- Option 01: Premium -->
          <tr style="border-bottom:1px solid #eee;">
            <td rowspan="3" style="padding:14px 18px;font-weight:600;vertical-align:middle;border-right:1px solid #eee;">
              <span style="display:block;font-size:1rem;color:#c9a227;">Premium</span>
              <span style="font-size:0.8rem;font-weight:400;color:#888;">Four Points Sheraton &bull; The Retreat at Ngorongoro &bull; Kubu Kubu Tented Lodge &bull; Ngorongoro Lion's Paw Camp &bull; Mt. Meru Hotel &bull; Weru Weru River Lodge</span>
            </td>
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#c0392b;font-size:0.85rem;">PEAK</td>
            <td style="padding:10px 12px;text-align:center;">$4,955</td>
            <td style="padding:10px 12px;text-align:center;">$4,274</td>
            <td style="padding:10px 12px;text-align:center;">$4,047</td>
          </tr>
          <tr style="border-bottom:1px solid #eee;">
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#e67e22;font-size:0.85rem;">HIGH</td>
            <td style="padding:10px 12px;text-align:center;">$4,780</td>
            <td style="padding:10px 12px;text-align:center;">$4,099</td>
            <td style="padding:10px 12px;text-align:center;">$3,872</td>
          </tr>
          <tr>
            <td style="padding:10px 12px;text-align:center;font-weight:600;color:#27ae60;font-size:0.85rem;">LOW</td>
            <td style="padding:10px 12px;text-align:center;color:#27ae60;">$4,296</td>
            <td style="padding:10px 12px;text-align:center;color:#27ae60;">$3,616</td>
            <td style="padding:10px 12px;text-align:center;color:#27ae60;">$3,389</td>
          </tr>
        </tbody>
      </table>
      <p style="font-size:0.82rem;color:#999;margin-top:0.75rem;">* Prices are per person in USD based on double occupancy. Holiday surcharges apply 24, 25, 26 &amp; 31 December 2026. Easter supplements apply.</p>
    </div>

    <div style="text-align:center;margin-top:1.5rem;">
      <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-primary btn-lg">Get Your Custom Quote</a>
    </div>
  </div>
</section>

<!-- Included / Excluded -->
<section class="py-20 bg-white">
  <div class="container-md">
    <div class="section-heading reveal">
      <span class="section-subtitle">What's Covered</span>
      <h2 class="section-title">Inclusions &amp; Exclusions</h2>
    </div>
    <div class="reveal" style="display:grid;grid-template-columns:1fr 1fr;gap:2.5rem;">
      <div style="background:#f0faf4;border-radius:12px;padding:2rem;">
        <h3 style="color:#1a5c38;margin-bottom:1.25rem;font-size:1.15rem;">&#10003; What's Included</h3>
        <ul style="list-style:none;padding:0;margin:0;line-height:2.2;">
          <li>&#10003; &nbsp; All national park &amp; concession fees + Ngorongoro Crater fee</li>
          <li>&#10003; &nbsp; Professional English-speaking driver-guide</li>
          <li>&#10003; &nbsp; Private 4x4 non-AC safari vehicle</li>
          <li>&#10003; &nbsp; All accommodation as per selected option</li>
          <li>&#10003; &nbsp; All meals as per itinerary (fullboard on safari days)</li>
          <li>&#10003; &nbsp; Serval Wildlife Centre visit</li>
          <li>&#10003; &nbsp; Slope of Kilimanjaro / Marangu Cultural Tour</li>
          <li>&#10003; &nbsp; Airport pickup &amp; drop-off (Arusha or Kilimanjaro Airport)</li>
        </ul>
      </div>
      <div style="background:#fff5f5;border-radius:12px;padding:2rem;">
        <h3 style="color:#c0392b;margin-bottom:1.25rem;font-size:1.15rem;">&#10007; Not Included</h3>
        <ul style="list-style:none;padding:0;margin:0;line-height:2.2;">
          <li>&#10007; &nbsp; International flights</li>
          <li>&#10007; &nbsp; Tanzania visa fees (~$50)</li>
          <li>&#10007; &nbsp; Travel &amp; medical insurance</li>
          <li>&#10007; &nbsp; Tips &amp; gratuities for guide and staff</li>
          <li>&#10007; &nbsp; Optional hot air balloon safari ($500pp)</li>
          <li>&#10007; &nbsp; Easter / holiday surcharges (24, 25, 26, 31 Dec)</li>
          <li>&#10007; &nbsp; Bar accounts and personal expenses</li>
          <li>&#10007; &nbsp; Lunch on Day 8 (at own cost in Arusha)</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-sand">
  <div class="container-sm">
    <div class="section-heading reveal">
      <span class="section-subtitle">Common Questions</span>
      <h2 class="section-title">10-Day Safari FAQ</h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          How many days is the Northern Circuit Tanzania safari?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>This Northern Circuit safari is <strong>10 days / 9 nights</strong>. It covers Tarangire (1 day), Serengeti (3 nights — the most of any package we offer), Ngorongoro Crater, an Arusha cultural day, and a Marangu Cultural Tour on the lower slopes of Kilimanjaro.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          How much does the 10-day Tanzania safari cost?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>Prices start from <strong>$2,508 per person</strong> (budget option, low season, 6 passengers). Budget peak-season rates start at $2,712pp. Mid-range from $2,922pp. Serena chain from $3,128pp. Premium lodges (Kubu Kubu, Lion's Paw) from $3,389pp. All prices are per person based on double occupancy.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          What is the Marangu Cultural Tour?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>A full-day cultural excursion on the <strong>lower slopes of Mount Kilimanjaro</strong> in Marangu village. Highlights include: Materuni Waterfalls (swim in mountain water), Chagga Museum with underground WWII tunnels, Tanzania's largest banana market, coffee &amp; banana farm (learn the bean-to-cup process), and a taste of traditional Chagga <em>mbege</em> banana wine. Bring comfortable shoes and a swimsuit.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          When is the best time for a 10-day Northern Circuit safari?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>This itinerary runs <strong>year-round</strong>. Peak season (Jan–Feb, Jun–Oct) offers Great Migration river crossings (Jul–Oct) and dry-season game viewing. March and Nov–Dec offer lush landscapes and fewer crowds. April–May (low season) offers the best prices with good wildlife sightings and greener scenery.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          Is the hot air balloon safari included?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>No — the <strong>Serengeti hot air balloon safari is optional at $500 per person</strong> and not included in the base package price. It takes place on Day 5 of the itinerary (early morning departure, ~4:00am). Let us know when enquiring and we will arrange it.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
          What is included in the safari price?
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer"><p>Included: all park fees (including Ngorongoro Crater fee), private 4x4 safari vehicle, professional English-speaking driver-guide, all accommodation (per selected tier), all meals as per itinerary, Serval Wildlife visit, Marangu/Kilimanjaro Cultural Tour, and airport transfers. <em>Not included:</em> flights, visa, travel insurance, tips, balloon safari, holiday surcharges.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-20 bg-white">
  <div class="container-sm" style="text-align:center;">
    <span class="section-subtitle">Ready to Go?</span>
    <h2 class="section-title" style="margin-bottom:1rem;">Book Your 10-Day Tanzania Safari</h2>
    <p style="color:#555;margin-bottom:2rem;max-width:600px;margin-left:auto;margin-right:auto;">Send us your travel dates and group size — we'll confirm availability and send a personalised quote within 24 hours.</p>
    <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-primary btn-lg">Get a Free Quote</a>
    &nbsp;&nbsp;
    <a href="<?php echo lang_url('safaris.php'); ?>" class="btn btn-outline btn-lg">View All Safaris</a>
  </div>
</section>

<?php include 'includes/cta-banner.php'; ?>
<?php include 'includes/footer.php'; ?>
