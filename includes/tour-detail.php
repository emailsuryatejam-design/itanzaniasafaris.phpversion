<?php
/**
 * Reusable Tour Detail Section
 * Usage: $tour = [...]; include 'includes/tour-detail.php';
 */
$tour_id = $tour['id'];
?>
<div class="tour-detail reveal" id="<?php echo $tour_id; ?>">
  <!-- Header -->
  <div class="tour-detail-header">
    <div class="detail-bg" style="background-image: url('<?php echo $tour['image']; ?>')"></div>
    <div class="detail-gradient"></div>
    <div class="detail-info">
      <div class="detail-badges">
        <?php if (!empty($tour['badge'])): ?>
          <span class="badge-secondary"><?php echo $tour['badge']; ?></span>
        <?php endif; ?>
        <?php if (!empty($tour['spotsLeft']) && $tour['spotsLeft'] <= 6): ?>
          <span class="badge-red">Only <?php echo $tour['spotsLeft']; ?> spots left</span>
        <?php endif; ?>
      </div>
      <h3><?php echo $tour['title']; ?></h3>
      <div class="detail-meta">
        <span>
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <?php echo $tour['duration']; ?>
        </span>
        <span>
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          <?php echo $tour['groupSize']; ?>
        </span>
      </div>
    </div>
  </div>

  <!-- Body -->
  <div class="tour-detail-body">
    <p class="detail-desc"><?php echo $tour['description']; ?></p>

    <!-- Highlights -->
    <div class="mb-8">
      <h4 style="font-size:1.125rem;font-weight:700;color:var(--charcoal);margin-bottom:1rem;">Highlights</h4>
      <div class="highlights-grid">
        <?php foreach ($tour['highlights'] as $highlight): ?>
          <div class="highlight-item">
            <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            <span><?php echo $highlight; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Tabs -->
    <div class="detail-tabs">
      <button class="active" data-tab="itinerary-<?php echo $tour_id; ?>">Itinerary</button>
      <button data-tab="included-<?php echo $tour_id; ?>">What's Included</button>
      <button data-tab="excluded-<?php echo $tour_id; ?>">Not Included</button>
    </div>

    <!-- Itinerary Tab -->
    <div class="tab-content active" data-tab="itinerary-<?php echo $tour_id; ?>">
      <div class="itinerary-timeline">
        <?php foreach ($tour['itinerary'] as $i => $item): ?>
          <div class="itinerary-item">
            <div class="itinerary-marker">
              <div class="itinerary-dot"><?php echo str_replace('Day ', 'D', $item['day']); ?></div>
              <?php if ($i < count($tour['itinerary']) - 1): ?>
                <div class="itinerary-line"></div>
              <?php endif; ?>
            </div>
            <div class="itinerary-content">
              <h5><?php echo $item['title']; ?></h5>
              <p><?php echo $item['description']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Included Tab -->
    <div class="tab-content" data-tab="included-<?php echo $tour_id; ?>">
      <ul class="included-list">
        <?php foreach ($tour['included'] as $item): ?>
          <li>
            <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            <span><?php echo $item; ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Excluded Tab -->
    <div class="tab-content" data-tab="excluded-<?php echo $tour_id; ?>">
      <ul class="excluded-list">
        <?php foreach ($tour['excluded'] as $item): ?>
          <li>
            <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
            <span><?php echo $item; ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Price & CTA -->
    <div class="tour-price-cta">
      <div class="price-block">
        <div class="price-from">From</div>
        <div class="price-amount">
          <span class="price-current">$<?php echo number_format($tour['price']); ?></span>
          <?php if (!empty($tour['originalPrice'])): ?>
            <span class="price-original">$<?php echo number_format($tour['originalPrice']); ?></span>
          <?php endif; ?>
        </div>
        <div class="price-per">per person</div>
      </div>
      <a href="contact.php" class="btn btn-primary btn-lg">Inquire About This Tour</a>
    </div>
  </div>
</div>
