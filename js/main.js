/* ============================================================
   iTanzania Safaris - Main JavaScript
   ============================================================ */

document.addEventListener('DOMContentLoaded', function() {

  // ============================================================
  // HEADER - Scroll Effect & Mobile Menu
  // ============================================================
  const header = document.querySelector('.site-header');
  const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
  const mobileMenu = document.querySelector('.mobile-menu');

  if (header) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
    // Trigger on load
    if (window.scrollY > 50) header.classList.add('scrolled');
  }

  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', function() {
      mobileMenuBtn.classList.toggle('active');
      mobileMenu.classList.toggle('active');
      document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    });

    // Close mobile menu when clicking a link
    mobileMenu.querySelectorAll('a').forEach(function(link) {
      link.addEventListener('click', function() {
        mobileMenuBtn.classList.remove('active');
        mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
      });
    });
  }

  // ============================================================
  // HERO CAROUSEL
  // ============================================================
  const heroSlides = document.querySelectorAll('.hero-slide');
  const heroIndicators = document.querySelectorAll('.hero-indicators button');
  let currentSlide = 0;
  let heroInterval;

  function showSlide(index) {
    heroSlides.forEach(function(slide, i) {
      slide.classList.toggle('active', i === index);
    });
    heroIndicators.forEach(function(btn, i) {
      btn.classList.toggle('active', i === index);
    });
    currentSlide = index;
  }

  function nextSlide() {
    showSlide((currentSlide + 1) % heroSlides.length);
  }

  if (heroSlides.length > 0) {
    heroInterval = setInterval(nextSlide, 6000);
    heroIndicators.forEach(function(btn, i) {
      btn.addEventListener('click', function() {
        clearInterval(heroInterval);
        showSlide(i);
        heroInterval = setInterval(nextSlide, 6000);
      });
    });
  }

  // ============================================================
  // SCROLL REVEAL
  // ============================================================
  const revealElements = document.querySelectorAll('.reveal');

  function checkReveal() {
    revealElements.forEach(function(el) {
      const rect = el.getBoundingClientRect();
      const windowHeight = window.innerHeight;
      if (rect.top < windowHeight * 0.85) {
        el.classList.add('visible');
      }
    });
  }

  if (revealElements.length > 0) {
    window.addEventListener('scroll', checkReveal);
    window.addEventListener('resize', checkReveal);
    checkReveal(); // Check on load
  }

  // ============================================================
  // STATS COUNTER
  // ============================================================
  const statsSection = document.querySelector('.stats-section');
  let statsAnimated = false;

  function animateCounters() {
    if (statsAnimated) return;
    const counters = document.querySelectorAll('.stat-value');
    if (counters.length === 0) return;

    const rect = statsSection.getBoundingClientRect();
    if (rect.top < window.innerHeight * 0.8) {
      statsAnimated = true;
      counters.forEach(function(counter) {
        const target = parseInt(counter.getAttribute('data-target'));
        const suffix = counter.getAttribute('data-suffix') || '';
        const duration = 2000;
        let startTime = null;

        function animate(currentTime) {
          if (!startTime) startTime = currentTime;
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          const eased = 1 - Math.pow(1 - progress, 3);
          const current = Math.floor(eased * target);
          counter.textContent = current.toLocaleString() + suffix;
          if (progress < 1) {
            requestAnimationFrame(animate);
          }
        }

        requestAnimationFrame(animate);
      });
    }
  }

  if (statsSection) {
    window.addEventListener('scroll', animateCounters);
    animateCounters();
  }

  // ============================================================
  // TESTIMONIALS CAROUSEL
  // ============================================================
  const testimonialItems = document.querySelectorAll('.testimonial-item');
  const testimonialDots = document.querySelectorAll('.testimonial-dots button');
  const prevBtn = document.querySelector('.testimonial-prev');
  const nextBtn = document.querySelector('.testimonial-next');
  let activeTestimonial = 0;

  function showTestimonial(index) {
    testimonialItems.forEach(function(item, i) {
      item.style.display = i === index ? 'block' : 'none';
      item.style.opacity = i === index ? '1' : '0';
    });
    testimonialDots.forEach(function(dot, i) {
      dot.classList.toggle('active', i === index);
    });
    activeTestimonial = index;
  }

  if (testimonialItems.length > 0) {
    showTestimonial(0);

    if (prevBtn) {
      prevBtn.addEventListener('click', function() {
        showTestimonial((activeTestimonial - 1 + testimonialItems.length) % testimonialItems.length);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function() {
        showTestimonial((activeTestimonial + 1) % testimonialItems.length);
      });
    }

    testimonialDots.forEach(function(dot, i) {
      dot.addEventListener('click', function() {
        showTestimonial(i);
      });
    });
  }

  // ============================================================
  // TOUR DETAIL TABS
  // ============================================================
  document.querySelectorAll('.detail-tabs').forEach(function(tabGroup) {
    const tabs = tabGroup.querySelectorAll('button');
    const parent = tabGroup.closest('.tour-detail');
    const contents = parent.querySelectorAll('.tab-content');

    tabs.forEach(function(tab) {
      tab.addEventListener('click', function() {
        const target = this.getAttribute('data-tab');
        tabs.forEach(function(t) { t.classList.remove('active'); });
        this.classList.add('active');
        contents.forEach(function(c) {
          c.classList.toggle('active', c.getAttribute('data-tab') === target);
        });
      });
    });
  });

  // ============================================================
  // MULTI-STEP INQUIRY FORM
  // ============================================================
  const formSteps = document.querySelectorAll('.form-step');
  const stepCircles = document.querySelectorAll('.step-circle');
  const stepLines = document.querySelectorAll('.step-line');
  let currentStep = 1;

  const formData = {
    tripType: '', travelDates: '', groupSize: '',
    budget: '', name: '', email: '', phone: '', message: ''
  };

  function updateStep(step) {
    currentStep = step;
    formSteps.forEach(function(s) {
      s.classList.toggle('active', parseInt(s.getAttribute('data-step')) === step);
    });
    stepCircles.forEach(function(circle, i) {
      const s = i + 1;
      circle.classList.toggle('active', s <= step);
      if (s < step) {
        circle.innerHTML = '<svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>';
      } else {
        circle.textContent = s;
      }
    });
    stepLines.forEach(function(line, i) {
      line.classList.toggle('active', (i + 1) < step);
    });
    // Update step indicator text
    const stepText = document.querySelector('.step-indicator');
    if (stepText) stepText.textContent = 'Step ' + step + ' of 3';
  }

  // Selection buttons
  document.querySelectorAll('.selection-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      const field = this.getAttribute('data-field');
      const value = this.getAttribute('data-value');
      formData[field] = value;

      // Deselect siblings
      this.closest('.selection-grid').querySelectorAll('.selection-btn').forEach(function(b) {
        b.classList.remove('selected');
      });
      this.classList.add('selected');
    });
  });

  // Navigation buttons
  document.querySelectorAll('.form-next').forEach(function(btn) {
    btn.addEventListener('click', function() {
      const nextStep = parseInt(this.getAttribute('data-next'));
      // Collect input values before moving on
      collectInputs();
      updateStep(nextStep);
    });
  });

  document.querySelectorAll('.form-back').forEach(function(btn) {
    btn.addEventListener('click', function() {
      const prevStep = parseInt(this.getAttribute('data-prev'));
      updateStep(prevStep);
    });
  });

  function collectInputs() {
    const dateInput = document.querySelector('#travel-dates');
    if (dateInput) formData.travelDates = dateInput.value;
    const nameInput = document.querySelector('#contact-name');
    if (nameInput) formData.name = nameInput.value;
    const emailInput = document.querySelector('#contact-email');
    if (emailInput) formData.email = emailInput.value;
    const phoneInput = document.querySelector('#contact-phone');
    if (phoneInput) formData.phone = phoneInput.value;
    const msgInput = document.querySelector('#contact-message');
    if (msgInput) formData.message = msgInput.value;
  }

  // Form submit
  const submitBtn = document.querySelector('.form-submit');
  if (submitBtn) {
    submitBtn.addEventListener('click', function(e) {
      e.preventDefault();
      collectInputs();

      if (!formData.name || !formData.email) {
        const errorEl = document.querySelector('.form-error');
        if (errorEl) { errorEl.style.display = 'block'; errorEl.textContent = 'Please fill in your name and email.'; }
        return;
      }

      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending...';

      // Send via EmailJS
      if (typeof emailjs !== 'undefined') {
        emailjs.send('service_nzowy4s', 'template_hb2abwl', {
          to_email: 'hello@itanzaniasafaris.com',
          from_name: formData.name,
          from_email: formData.email,
          phone: formData.phone,
          trip_type: formData.tripType,
          travel_dates: formData.travelDates,
          group_size: formData.groupSize,
          budget: formData.budget,
          message: formData.message
        }).then(function() {
          // Send auto-reply
          emailjs.send('service_nzowy4s', 'template_2mbuzdj', {
            to_name: formData.name,
            to_email: formData.email,
            from_name: formData.name,
            from_email: formData.email,
            trip_type: formData.tripType,
            travel_dates: formData.travelDates,
            group_size: formData.groupSize,
            budget: formData.budget,
            message: formData.message
          }).catch(function() {});
          showFormSuccess();
        }).catch(function() {
          submitBtn.disabled = false;
          submitBtn.textContent = 'Send My Inquiry';
          const errorEl = document.querySelector('.form-error');
          if (errorEl) {
            errorEl.style.display = 'block';
            errorEl.textContent = 'Something went wrong. Please try again or email us at hello@itanzaniasafaris.com';
          }
        });
      } else {
        // Fallback: just show success
        showFormSuccess();
      }
    });
  }

  function showFormSuccess() {
    const formContainer = document.querySelector('.inquiry-form');
    const successContainer = document.querySelector('.form-success');
    if (formContainer && successContainer) {
      formContainer.style.display = 'none';
      successContainer.style.display = 'block';
      // Insert name
      const nameSpan = successContainer.querySelector('.success-name');
      if (nameSpan) nameSpan.textContent = formData.name;
    }
  }

  // ============================================================
  // SMOOTH SCROLL for anchor links
  // ============================================================
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

});
