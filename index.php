<?php require_once __DIR__ . '/includes/helpers.php'; ?>
<?php include __DIR__ . '/includes/layout/header.php'; ?>


<main>
  <?php include __DIR__ . '/includes/sections/hero.php'; ?>
  <?php include __DIR__ . '/includes/sections/features.php'; ?>
  <?php include __DIR__ . '/includes/sections/services-carousel.php'; ?>
  <?php include __DIR__ . '/includes/sections/books.php'; ?>
  <?php include __DIR__ . '/includes/sections/process.php'; ?>
  
  <section class="book-showcase-section section-border" id="books">
  <div class="container">

    <div class="section-heading center">
      <p class="eyebrow gold">Featured Books</p>
      <h2>Stories Crafted to Leave a Lasting Impression.</h2>
      <p>
        Explore a selection of beautifully designed books across fiction, inspiration,
        romance, mystery, thriller, and faith-based storytelling.
      </p>
    </div>

    <div class="book-carousel-wrap">
      <div class="swiper book-showcase-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <a href="https://www.amazon.com/dp/B0H9BVPHQC" class="book-slide-card">
              <img src="assets/images/Mockup 4/2ws-removebg-preview.webp" alt="The Last Draft book mockup">
            </a>
          </div>

          <div class="swiper-slide">
            <a href="https://www.amazon.com/dp/B0H893VZQ9" class="book-slide-card">
              <img src="assets/images/Mockup 4/33-removebg-preview.webp" alt="Her Gentle Rise book mockup">
            </a>
          </div>

          <div class="swiper-slide">
            <a href="https://www.amazon.com/dp/B0H7Z2XMQC" class="book-slide-card">
              <img src="assets/images/Mockup 4/44-removebg-preview.webp" alt="The Quiet Comeback book mockup">
            </a>
          </div>

          <div class="swiper-slide">
            <a href="https://www.amazon.com/dp/B0H7KXLFL9" class="book-slide-card">
              <img src="assets/images/Mockup 4/66-removebg-preview.webp" alt="The Light of Galilee book mockup">
            </a>
          </div>

          <div class="swiper-slide">
            <a href="book-publishing.php" class="book-slide-card">
              <img src="assets/images/Mockup 4/88-removebg-preview.webp" alt="The Lavender Letters book mockup">
            </a>
          </div>

          <div class="swiper-slide">
            <a href="https://www.amazon.com/dp/B0H3T58Y8C" class="book-slide-card">
              <img src="assets/images/Mockup 4/99-removebg-preview.webp" alt="The Silent Trial book mockup">
            </a>
          </div>

          <div class="swiper-slide">
            <a href="https://www.amazon.com/dp/B0H7T9Q9YF" class="book-slide-card">
              <img src="assets/images/Mockup 4/555-removebg-preview.webp" alt="The Scone Cold Secret book mockup">
            </a>
          </div>

          <div class="swiper-slide">
            <a href="book-publishing.php" class="book-slide-card">
              <img src="assets/images/Mockup 4/Mockup_4-removebg-preview.webp" alt="The Stolen Hour book mockup">
            </a>
          </div>

          <!--<div class="swiper-slide">-->
          <!--  <a href="book-publishing.php" class="book-slide-card">-->
          <!--    <img src="assets/images/Mockup 4/2ws-removebg-preview.webp" alt="The Firefly Promise book mockup">-->
          <!--  </a>-->
          <!--</div>-->

        </div>
      </div>

      <div class="book-carousel-controls">
        <button class="book-prev" type="button" aria-label="Previous book">&larr;</button>
        <div class="book-pagination"></div>
        <button class="book-next" type="button" aria-label="Next book">&rarr;</button>
      </div>
    </div>

  </div>
</section>
  
  
  
  <?php include __DIR__ . '/includes/sections/reviews.php'; ?>
  <?php include __DIR__ . '/includes/sections/trustindex.php'; ?>
  <?php include __DIR__ . '/includes/sections/cta.php'; ?>
</main>

<?php include __DIR__ . '/includes/layout/footer.php'; ?>
