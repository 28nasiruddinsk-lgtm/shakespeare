<?php
$page_title = 'Book Publishing Company in New York | Shakespeare';
$page_description = 'New York book publishing company offering ghostwriting, editing, cover design, ebook writing, formatting and book marketing. Book a consultation.';

require_once __DIR__ . '/includes/helpers.php';
include __DIR__ . '/includes/layout/header.php';
?>


<main>
  <?php include __DIR__ . '/includes/sections/hero.php'; ?>
  <?php include __DIR__ . '/includes/sections/features.php'; ?>
  <?php include __DIR__ . '/includes/sections/services-carousel.php'; ?>
  <?php include __DIR__ . '/includes/sections/process.php'; ?>

  <section class="book-showcase-section section-border" id="books">
  <div class="container">

    <div class="section-heading center">
      <p class="eyebrow gold">Featured Books</p>
      <h2>Published Books by Our Authors</h2>
      <p>
        A selection of books we have edited, designed and published across fiction, inspiration,
        romance, mystery, thriller and faith-based storytelling.
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

  <section class="about-blurb section-border">
    <div class="container about-blurb-inner">
      <p class="eyebrow gold">About Shakespeare Publishing House</p>
      <p><?= e(ABOUT_PARAGRAPH); ?></p>
    </div>
  </section>

  <?php
    faq_section([
      ['How do I publish a book with Shakespeare Publishing House?', 'Book a consultation and share your manuscript or idea, and we recommend the right package. Our team handles editing, cover design, formatting, ISBN and print and ebook distribution, and you approve every stage before release.'],
      ['How much does it cost to publish a book?', 'The cost depends on the services your book needs. Editing-only projects cost less than full ghostwriting or full book publishing packages. You get a written quote after we review your manuscript or idea.'],
      ['How long does it take to publish a book?', 'It depends on the length of the manuscript, the services you choose and how many review rounds you need. We confirm a schedule with you before work begins.'],
      ['Do you work with authors outside New York?', 'Yes. We are a publishing house in New York and work with authors across the United States and internationally, entirely online.'],
    ], 'Book Publishing Questions, Answered');

    $cta_title = 'Ready to Publish Your Book?<br>Your Story Deserves the World.';
    include __DIR__ . '/includes/sections/cta.php';
  ?>
</main>

<?php include __DIR__ . '/includes/layout/footer.php'; ?>
