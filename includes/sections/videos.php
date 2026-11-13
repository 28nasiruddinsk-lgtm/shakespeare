<section class="video-section section-border">
  <div class="container video-grid">
    <div class="section-intro boxed-left compact">
      <p class="eyebrow gold">Video Testimonials</p>
      <h2>Hear From<br>Our Authors</h2>
      <p>Real stories. Real results. From authors just like you.</p>
      <a class="btn btn-dark" href="https://www.youtube.com/watch?v=2s1f_6UgUm4" target="_blank" rel="noopener noreferrer">
        View All Stories <span>&rarr;</span>
      </a>
    </div>

    <div class="video-carousel-wrap">
      <div class="swiper video-testimonials-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <button class="video-testimonial-card"
                    type="button"
                    data-youtube-url="https://www.youtube.com/embed/2s1f_6UgUm4?autoplay=1&rel=0"
                    aria-label="Play video testimonial from our author">
              <img src="assets/images/video-test (1).webp" alt="Author video testimonial thumbnail">
              <span class="play-btn" aria-hidden="true">&#9658;</span>
              <span class="video-meta">
                <strong>Latest News</strong>
                <small>Shakespearepublishing House</small>
              </span>
            </button>
          </div>

          <div class="swiper-slide">
            <button class="video-testimonial-card"
                    type="button"
                    data-youtube-url="https://www.youtube.com/embed/-2Ywi1mfuhY?autoplay=1&rel=0"
                    aria-label="Play video testimonial from our author">
              <img src="assets/images/video-test (2).webp" alt="Author video testimonial thumbnail">
              <span class="play-btn" aria-hidden="true">&#9658;</span>
              <span class="video-meta">
                <strong>2025 Best Brand in USA</strong>
                <small>Shakespearepublishing House</small>
              </span>
            </button>
          </div>

        </div>
      </div>

      <div class="video-carousel-controls">
        <button class="video-prev" type="button" aria-label="Previous video">&larr;</button>
        <button class="video-next" type="button" aria-label="Next video">&rarr;</button>
      </div>
    </div>
  </div>

  <div class="container platform-carousel" aria-label="Publishing platform logos">
    <div class="platform-track">
      <?php for ($i = 0; $i < 2; $i++): ?>
        <div class="platform-logo"><img src="assets/images/carousel-logo/amazon.webp" alt="Amazon publishing platform"></div>
        <div class="platform-logo"><img src="assets/images/carousel-logo/barnes.webp" alt="Barnes and Noble publishing platform"></div>
        <div class="platform-logo"><img src="assets/images/carousel-logo/lulu.webp" alt="Lulu publishing platform"></div>
        <div class="platform-logo"><img src="assets/images/carousel-logo/apple.webp" alt="Apple Books publishing platform"></div>
      <?php endfor; ?>
    </div>
  </div>

  <div class="video-lightbox" aria-hidden="true">
    <div class="video-lightbox__overlay" data-video-close></div>

    <div class="video-lightbox__dialog" role="dialog" aria-modal="true" aria-label="Video testimonial player">
      <button class="video-lightbox__close" type="button" data-video-close aria-label="Close video">&times;</button>

      <iframe
        title="Video testimonial"
        src=""
        allow="autoplay; encrypted-media; picture-in-picture"
        allowfullscreen>
      </iframe>
    </div>
  </div>
</section>