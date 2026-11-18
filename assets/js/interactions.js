// Light interactions: back-to-top, process timeline, gentle fade-in of content blocks.
(function () {
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Back-to-top button, shown once the visitor has scrolled a screen.
  var top = document.createElement('button');
  top.type = 'button';
  top.className = 'back-to-top';
  top.setAttribute('aria-label', 'Back to top');
  top.innerHTML = '&uarr;';
  top.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }); });
  document.body.appendChild(top);
  function onScroll() { top.classList.toggle('is-shown', scrollY > innerHeight); }
  addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // Process timeline: the line fills and the steps light up one after another once the section is in view.
  var timelineIO = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-active');
      timelineIO.unobserve(entry.target);
    });
  }, { threshold: 0.3 });
  document.querySelectorAll('.process--v2').forEach(function (section) {
    section.querySelectorAll('.process-step').forEach(function (step, i) {
      step.style.setProperty('--step-delay', reduce ? '0ms' : i * 300 + 'ms');
    });
    timelineIO.observe(section);
  });

  if (reduce) return;

  // Fade-in for content blocks the original script.js does not animate.
  var revealSel = [
    '.section-heading', '.overview-content', '.overview-image', '.included-card', '.why-service-card',
    '.about-work-card', '.values-list article', '.about-stats > div', '.faq-card', '.deliverables-content',
    '.deliverables-image', '.blog-card', '.platform-badge', '.books-v2-art', '.books-v2-copy', '.about-blurb-inner', '.cta-content', '.contact-info-panel'
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
})();
