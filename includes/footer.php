</main>

<!-- Footer CTA Strip -->
<div class="footer-cta-strip">
  <div class="footer-cta-inner">
    <div>
      <h3><?php echo t('footer.cta_title'); ?></h3>
      <p><?php echo t('footer.cta_desc'); ?></p>
    </div>
    <a href="<?php echo lang_url('contact.php'); ?>" class="btn btn-white btn-md"><?php echo t('footer.cta_button'); ?></a>
  </div>
</div>

<!-- Footer -->
<footer class="site-footer">
  <div class="footer-grid">
    <!-- Brand -->
    <div class="footer-brand">
      <div class="footer-brand-header">
        <img src="images/logo.png" alt="iTanzania Safaris">
        <div>
          <span class="footer-brand-name">iTanzania <span class="safaris">Safaris</span></span>
        </div>
      </div>
      <p><?php echo t('footer.brand_desc'); ?></p>
      <div class="social-links">
        <a href="https://www.facebook.com/share/181WegW4kF/" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Facebook">
          <svg fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
        </a>
        <a href="https://www.instagram.com/itanzania.safaris" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Instagram">
          <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </a>
        <a href="https://wa.me/13177601338" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="WhatsApp">
          <svg fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </a>
      </div>
    </div>

    <!-- Link Columns -->
    <div class="footer-links">
      <h4><?php echo t('footer.safari_experiences'); ?></h4>
      <ul>
        <li><a href="<?php echo lang_url('safaris.php'); ?>"><?php echo t('footer.wildlife_safaris'); ?></a></li>
        <li><a href="<?php echo lang_url('kilimanjaro.php'); ?>"><?php echo t('footer.kili_climbing'); ?></a></li>
        <li><a href="<?php echo lang_url('zanzibar.php'); ?>"><?php echo t('footer.zanzibar_beach'); ?></a></li>
        <li><a href="<?php echo lang_url('accommodations.php'); ?>"><?php echo t('footer.accommodations'); ?></a></li>
      </ul>
    </div>
    <div class="footer-links">
      <h4><?php echo t('footer.company'); ?></h4>
      <ul>
        <li><a href="<?php echo lang_url('about.php'); ?>"><?php echo t('footer.about_us'); ?></a></li>
        <li><a href="<?php echo lang_url('about.php'); ?>#team"><?php echo t('footer.our_guides'); ?></a></li>
        <li><a href="<?php echo lang_url('contact.php'); ?>"><?php echo t('footer.contact_us'); ?></a></li>
      </ul>
    </div>
    <div class="footer-links">
      <h4><?php echo t('footer.plan_trip'); ?></h4>
      <ul>
        <li><a href="<?php echo lang_url('contact.php'); ?>"><?php echo t('footer.free_quote'); ?></a></li>
        <li><a href="<?php echo lang_url('safaris.php'); ?>"><?php echo t('footer.browse_packages'); ?></a></li>
        <li><a href="<?php echo lang_url('blog.php'); ?>"><?php echo t('footer.safari_blog'); ?></a></li>
        <li><a href="<?php echo lang_url('contact.php'); ?>"><?php echo t('footer.group_bookings'); ?></a></li>
      </ul>
    </div>
  </div>

  <!-- Contact Info -->
  <div class="footer-contact">
    <div class="footer-contact-grid">
      <div class="footer-contact-item">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        <a href="mailto:hello@itanzaniasafaris.com">hello@itanzaniasafaris.com</a>
      </div>
      <div class="footer-contact-item">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        <span>Arusha, Tanzania</span>
      </div>
      <div class="footer-contact-item">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <span><?php echo t('footer.hours'); ?></span>
      </div>
    </div>
  </div>

  <!-- Bottom -->
  <div class="footer-bottom">
    <div class="footer-badges">
      <span><?php echo t('footer.licensed'); ?></span>
      <span><?php echo t('footer.based_in'); ?></span>
    </div>
    <p class="footer-copyright"><?php echo sprintf(t('footer.copyright'), date('Y')); ?></p>
    <p class="footer-powered" style="margin-top:6px;font-size:0.75rem;opacity:0.5;letter-spacing:0.3px;">Powered by <a href="https://vyomaai.com" target="_blank" rel="noopener noreferrer" style="color:inherit;text-decoration:underline;text-underline-offset:2px;">VyomaAI Studios</a></p>
  </div>
</footer>

<!-- EmailJS SDK -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
  (function() { emailjs.init('oPxbBuq6UYgBmcfU6'); })();
</script>

<!-- Floating WhatsApp Widget -->
<a href="https://wa.me/13177601338?text=Hi%20iTanzania%20Safaris!%20I'm%20interested%20in%20booking%20a%20safari." target="_blank" rel="noopener noreferrer" class="whatsapp-float" aria-label="Chat on WhatsApp">
  <svg fill="currentColor" viewBox="0 0 24 24" width="28" height="28"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<style>
.whatsapp-float{position:fixed;bottom:24px;right:24px;z-index:9999;width:56px;height:56px;background:#25D366;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;box-shadow:0 4px 12px rgba(37,211,102,0.4);transition:transform 0.3s,box-shadow 0.3s;text-decoration:none;}
.whatsapp-float:hover{transform:scale(1.1);box-shadow:0 6px 20px rgba(37,211,102,0.5);}
</style>

<!-- JSON-LD Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "iTanzania Safaris",
  "url": "https://itanzaniasafaris.com",
  "logo": "https://itanzaniasafaris.com/images/logo.png",
  "image": "https://itanzaniasafaris.com/images/og-image.jpg",
  "description": "<?php echo t('seo.default_description'); ?>",
  "inLanguage": "<?php echo $current_lang; ?>",
  "telephone": "+13177601338",
  "email": "hello@itanzaniasafaris.com",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Arusha",
    "addressCountry": "TZ"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -3.3869,
    "longitude": 36.6830
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "08:00",
    "closes": "20:00"
  },
  "sameAs": [
    "https://www.facebook.com/share/181WegW4kF/",
    "https://www.instagram.com/itanzania.safaris"
  ],
  "priceRange": "$1,476 - $4,865",
  "areaServed": {
    "@type": "Country",
    "name": "Tanzania"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "iTanzania Safaris",
  "url": "https://itanzaniasafaris.com",
  "inLanguage": "<?php echo $current_lang; ?>",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://itanzaniasafaris.com/blog.php?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<!-- Language Switcher JS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  var toggle = document.querySelector('.lang-toggle');
  var dropdown = document.querySelector('.lang-dropdown');
  if (toggle && dropdown) {
    toggle.addEventListener('click', function(e) {
      e.stopPropagation();
      dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
    });
    document.addEventListener('click', function() { dropdown.style.display = 'none'; });
  }
});
</script>

<!-- Main JS -->
<script src="js/main.js"></script>
</body>
</html>
