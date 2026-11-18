// Interactive layer: scroll progress, staggered reveal, card spotlight, hero tilt, back-to-top.
// Everything is decoration on top of working markup; with reduced motion only the progress bar and back-to-top run.
(function () {
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Reading progress bar along the top of the page.
  var bar = document.createElement('div');
  bar.className = 'scroll-progress';
  bar.setAttribute('aria-hidden', 'true');
  document.body.appendChild(bar);

  // Back-to-top button, shown once the visitor has scrolled a screen.
  var top = document.createElement('button');
  top.type = 'button';
  top.className = 'back-to-top';
  top.setAttribute('aria-label', 'Back to top');
  top.innerHTML = '&uarr;';
  top.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }); });
  document.body.appendChild(top);

  var ticking = false;
  function onScroll() {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(function () {
      var max = document.documentElement.scrollHeight - innerHeight;
      bar.style.transform = 'scaleX(' + (max > 0 ? scrollY / max : 0) + ')';
      top.classList.toggle('is-shown', scrollY > innerHeight);
      ticking = false;
    });
  }
  addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  if (reduce) return;

  // Staggered reveal for content blocks the original script.js does not animate.
  var revealSel = [
    '.section-heading', '.overview-content', '.overview-image', '.included-card', '.why-service-card',
    '.about-work-card', '.values-list article', '.about-stats > div', '.faq-card', '.deliverables-content',
    '.deliverables-image', '.blog-card', '.platform-badge', '.about-blurb-inner', '.cta-content', '.contact-info-panel'
  ].join(',');
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-in');
      io.unobserve(entry.target);
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  document.querySelectorAll(revealSel).forEach(function (el) {
    var siblings = el.parentElement ? Array.prototype.indexOf.call(el.parentElement.children, el) : 0;
    el.style.setProperty('--reveal-delay', (siblings % 6) * 80 + 'ms');
    el.classList.add('reveal');
    io.observe(el);
  });

  // Cursor spotlight on cards (position is read by CSS as --mx / --my).
  var cardSel = '.service-card, .included-card, .why-service-card, .about-work-card, .blog-card, .feature-item, .values-list article, .review-card';
  document.querySelectorAll(cardSel).forEach(function (card) {
    card.classList.add('has-spotlight');
    card.addEventListener('pointermove', function (e) {
      var r = card.getBoundingClientRect();
      card.style.setProperty('--mx', (e.clientX - r.left) + 'px');
      card.style.setProperty('--my', (e.clientY - r.top) + 'px');
    });
  });

  // Gentle tilt of the hero artwork following the pointer.
  var heroArt = document.querySelector('.hero-art img');
  var hero = document.querySelector('.hero');
  if (heroArt && hero && matchMedia('(hover: hover)').matches) {
    hero.addEventListener('pointermove', function (e) {
      var r = hero.getBoundingClientRect();
      var x = (e.clientX - r.left) / r.width - 0.5;
      var y = (e.clientY - r.top) / r.height - 0.5;
      heroArt.style.transform = 'perspective(900px) rotateY(' + (x * 6) + 'deg) rotateX(' + (-y * 6) + 'deg) scale(1.02)';
    });
    hero.addEventListener('pointerleave', function () { heroArt.style.transform = ''; });
  }
})();
