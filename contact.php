<?php
$page_title = 'Contact Us | Get a Free Safari Quote';
$page_description = 'Plan your dream Tanzania safari with iTanzania Safaris. Get a free, personalized quote. Response within 24 hours.';
include 'includes/header.php';
?>

<section class="page-hero short overlay-primary">
  <div class="page-hero-bg" style="background-image: url('images/cta-bg.jpg')"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <span class="hero-subtitle">Start Planning</span>
    <h1>Let's Plan Your Safari</h1>
    <p>Tell us about your dream trip and our experts will create a personalized itinerary — completely free, no obligation.</p>
  </div>
</section>

<section class="py-20 bg-sand">
  <div class="container-lg">
    <div class="contact-layout">
      <!-- Form -->
      <div class="reveal">
        <!-- Inquiry Form -->
        <div class="inquiry-form" id="inquiry-form">
          <!-- Progress Bar -->
          <div class="progress-bar">
            <div class="progress-step"><div class="step-circle active">1</div><div class="step-line"></div></div>
            <div class="progress-step"><div class="step-circle">2</div><div class="step-line"></div></div>
            <div class="progress-step"><div class="step-circle">3</div></div>
          </div>
          <div class="step-indicator" style="font-size:0.875rem;color:rgba(51,51,51,0.5);margin-bottom:0.25rem;">Step 1 of 3</div>

          <!-- Step 1 -->
          <div class="form-step active" data-step="1">
            <h3>Tell Us About Your Dream Trip</h3>
            <div style="display:flex;flex-direction:column;gap:1.5rem;">
              <div>
                <label>What type of experience are you looking for?</label>
                <div class="selection-grid">
                  <button class="selection-btn" data-field="tripType" data-value="Wildlife Safari">Wildlife Safari</button>
                  <button class="selection-btn" data-field="tripType" data-value="Kilimanjaro Climbing">Kilimanjaro Climbing</button>
                  <button class="selection-btn" data-field="tripType" data-value="Zanzibar Beach Holiday">Zanzibar Beach Holiday</button>
                  <button class="selection-btn" data-field="tripType" data-value="Safari & Beach Combo">Safari & Beach Combo</button>
                  <button class="selection-btn" data-field="tripType" data-value="Honeymoon Package">Honeymoon Package</button>
                  <button class="selection-btn" data-field="tripType" data-value="Family Safari">Family Safari</button>
                  <button class="selection-btn" data-field="tripType" data-value="Custom Trip" style="grid-column:span 2;">Custom Trip</button>
                </div>
              </div>
              <div>
                <label for="travel-dates">When would you like to travel?</label>
                <input type="text" id="travel-dates" class="form-input" placeholder="e.g., July 2026, or Flexible">
              </div>
              <button class="btn btn-primary btn-lg w-full form-next" data-next="2">Continue</button>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="form-step" data-step="2">
            <h3>Group Size & Budget</h3>
            <div style="display:flex;flex-direction:column;gap:1.5rem;">
              <div>
                <label>How many travelers?</label>
                <div class="selection-grid selection-grid-3">
                  <button class="selection-btn center" data-field="groupSize" data-value="Solo">Solo</button>
                  <button class="selection-btn center" data-field="groupSize" data-value="2 (Couple)">2 (Couple)</button>
                  <button class="selection-btn center" data-field="groupSize" data-value="3-4">3-4</button>
                  <button class="selection-btn center" data-field="groupSize" data-value="5-6">5-6</button>
                  <button class="selection-btn center" data-field="groupSize" data-value="7-10">7-10</button>
                  <button class="selection-btn center" data-field="groupSize" data-value="10+">10+</button>
                </div>
              </div>
              <div>
                <label>Budget per person (USD)</label>
                <div class="selection-grid">
                  <button class="selection-btn center" data-field="budget" data-value="Under $2,000">Under $2,000</button>
                  <button class="selection-btn center" data-field="budget" data-value="$2,000 - $4,000">$2,000 - $4,000</button>
                  <button class="selection-btn center" data-field="budget" data-value="$4,000 - $6,000">$4,000 - $6,000</button>
                  <button class="selection-btn center" data-field="budget" data-value="$6,000 - $10,000">$6,000 - $10,000</button>
                  <button class="selection-btn center" data-field="budget" data-value="$10,000+" style="grid-column:span 2;">$10,000+</button>
                </div>
              </div>
              <div class="form-buttons">
                <button class="btn-back form-back" data-prev="1">Back</button>
                <button class="btn btn-primary btn-lg flex-1 form-next" data-next="3">Continue</button>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="form-step" data-step="3">
            <h3>Almost There! Your Contact Details</h3>
            <div style="display:flex;flex-direction:column;gap:1rem;">
              <div><label for="contact-name">Full Name *</label><input type="text" id="contact-name" class="form-input" placeholder="Your full name"></div>
              <div><label for="contact-email">Email Address *</label><input type="email" id="contact-email" class="form-input" placeholder="your.email@example.com"></div>
              <div><label for="contact-phone">Phone Number (optional)</label><input type="tel" id="contact-phone" class="form-input" placeholder="+1 234 567 8900"></div>
              <div><label for="contact-message">Anything else you'd like us to know? (optional)</label><textarea id="contact-message" class="form-input" rows="3" placeholder="Special requests, dietary needs, accessibility requirements..."></textarea></div>
              <div class="form-error" style="display:none;"></div>
              <div class="form-buttons">
                <button class="btn-back form-back" data-prev="2">Back</button>
                <button class="btn btn-primary btn-lg flex-1 form-submit">Send My Inquiry</button>
              </div>
              <p class="form-privacy">We respect your privacy. Your information is never shared with third parties.</p>
            </div>
          </div>
        </div>

        <!-- Success State -->
        <div class="form-success" style="display:none;">
          <div class="text-center mb-8">
            <div class="success-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></div>
            <h3 style="font-size:1.5rem;font-weight:700;color:var(--charcoal);margin-bottom:0.5rem;">Asante Sana, <span class="success-name"></span>!</h3>
            <p style="color:rgba(51,51,51,0.7);max-width:448px;margin:0 auto;">Your safari inquiry has been received. Our team will craft a personalized itinerary and get back to you within 24 hours.</p>
          </div>
          <div class="success-steps">
            <h4 style="font-weight:600;color:var(--charcoal);margin-bottom:1rem;text-align:center;">What Happens Next?</h4>
            <div style="display:flex;flex-direction:column;gap:0.75rem;">
              <div class="success-step"><span class="success-step-number">1</span><span style="font-size:0.875rem;color:rgba(51,51,51,0.7);"><strong style="color:var(--charcoal);">Review</strong> — We review your preferences and craft a custom itinerary</span></div>
              <div class="success-step"><span class="success-step-number">2</span><span style="font-size:0.875rem;color:rgba(51,51,51,0.7);"><strong style="color:var(--charcoal);">Proposal</strong> — A safari expert emails you with tailored options and pricing</span></div>
              <div class="success-step"><span class="success-step-number gold">3</span><span style="font-size:0.875rem;color:rgba(51,51,51,0.7);"><strong style="color:var(--charcoal);">Perfect It</strong> — We refine the plan together until it is exactly right for you</span></div>
            </div>
          </div>
          <div class="mb-6">
            <h4 style="font-weight:600;color:var(--charcoal);margin-bottom:1rem;text-align:center;">While You Wait, Explore Tanzania</h4>
            <div class="explore-grid">
              <a href="safaris.php" class="explore-link"><div class="explore-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></div><div><span style="font-size:0.875rem;font-weight:600;color:var(--charcoal);">Wildlife Safaris</span><p style="font-size:0.75rem;color:rgba(51,51,51,0.5);">Serengeti, Ngorongoro & more</p></div></a>
              <a href="kilimanjaro.php" class="explore-link"><div class="explore-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 21l6-6m0 0l4-8 4 8m-8 0h8m-4-8V3"/></svg></div><div><span style="font-size:0.875rem;font-weight:600;color:var(--charcoal);">Kilimanjaro Climbing</span><p style="font-size:0.75rem;color:rgba(51,51,51,0.5);">Machame, Lemosho & Marangu</p></div></a>
              <a href="zanzibar.php" class="explore-link"><div class="explore-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><span style="font-size:0.875rem;font-weight:600;color:var(--charcoal);">Zanzibar Beach</span><p style="font-size:0.75rem;color:rgba(51,51,51,0.5);">Tropical island paradise</p></div></a>
              <a href="accommodations.php" class="explore-link"><div class="explore-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg></div><div><span style="font-size:0.875rem;font-weight:600;color:var(--charcoal);">Where You'll Stay</span><p style="font-size:0.75rem;color:rgba(51,51,51,0.5);">Our accommodation partners</p></div></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div style="display:flex;flex-direction:column;gap:2rem;">
        <div class="sidebar-card reveal reveal-delay-2">
          <h3>Why Contact Us?</h3>
          <div style="display:flex;flex-direction:column;gap:0.75rem;">
            <div class="sidebar-item"><svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg><div><span class="item-title">Free Custom Itinerary</span><p class="item-desc">Receive a detailed, personalized trip plan at no cost</p></div></div>
            <div class="sidebar-item"><svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg><div><span class="item-title">Expert Advice</span><p class="item-desc">Chat directly with local safari specialists</p></div></div>
            <div class="sidebar-item"><svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg><div><span class="item-title">No Obligation</span><p class="item-desc">Get a quote with zero pressure to book</p></div></div>
            <div class="sidebar-item"><svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg><div><span class="item-title">Fast Response</span><p class="item-desc">We respond to all inquiries within 24 hours</p></div></div>
          </div>
        </div>

        <div class="sidebar-card reveal reveal-delay-3">
          <h3>Prefer Direct Contact?</h3>
          <div style="display:flex;flex-direction:column;gap:1rem;">
            <a href="mailto:hello@itanzaniasafaris.com" class="contact-link"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg><span>hello@itanzaniasafaris.com</span></a>
            <a href="https://wa.me/255XXXXXXXXX" target="_blank" rel="noopener noreferrer" class="contact-link"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg><span>WhatsApp Us</span></a>
            <div class="contact-link" style="cursor:default;"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg><span>Arusha, Tanzania<br><span style="font-size:0.75rem;color:rgba(51,51,51,0.5);">The Safari Capital of East Africa</span></span></div>
          </div>
        </div>

        <div class="trust-badge-card reveal reveal-delay-4">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          <p class="badge-title">Licensed & Certified</p>
          <p class="badge-sub">Licensed tour operator</p>
          <p class="badge-micro">Locally owned & operated from Arusha</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
