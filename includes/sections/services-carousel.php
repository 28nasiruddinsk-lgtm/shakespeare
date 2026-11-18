<?php
  $homeServices = [
    ['Ghostwriting Services', 'assets/images/Ghostwriting.png', 'Professional book ghostwriters turn your ideas, notes and interviews into a finished manuscript written in your voice, with your name on the cover.', 'ghostwriting.php'],
    ['Book Editing Services', 'assets/images/Editing.webp', 'Developmental editing, line editing, copyediting and proofreading for clear structure and polished prose.', 'editing.php'],
    ['Book Publishing', 'assets/images/Book-Publishing.webp', 'Self-publishing services in paperback, hardcover, ebook and audiobook, with ISBN, formatting and distribution handled for you.', 'book-publishing.php'],
    ['Ebook Writing Services', 'assets/images/Article-Writing.webp', 'Turn your expertise into a professionally written ebook for every major e-reader.', 'ebook-writing.php'],
    ['Ebook Editing Services', 'assets/images/Editing.webp', 'Proofreading and digital formatting, so your ebook reads cleanly on every phone, tablet and e-reader.', 'ebook-editing.php'],
    ["Children's Book Publishing", 'assets/images/Cover-Design.webp', 'Writing, custom illustration and layout for picture books, early readers and middle-grade stories.', 'childrens-book.php'],
  ];
?>
<section class="services-carousel-section services--v2 section-border" id="services">
  <div class="container">

    <div class="section-heading center">
      <p class="eyebrow gold">Our Services</p>
      <h2>Book Publishing, Ghostwriting &amp; Editing Services, Every Step Handled</h2>
      <p>
        From writing and editing to design, publishing and marketing, our book publishing services cover every
        stage of the journey for authors who want their book handled with care.
      </p>
    </div>

    <div class="services-carousel-wrap">
      <div class="swiper services-swiper">
        <div class="swiper-wrapper">

          <?php foreach ($homeServices as $i => [$title, $img, $text, $href]): ?>
          <div class="swiper-slide">
            <div class="service-card">
              <div class="service-icon">
                <img src="<?= e($img); ?>" alt="<?= e($title); ?>">
              </div>
              <h3><?= e($title); ?></h3>
              <p><?= e($text); ?></p>
              <a href="<?= e($href); ?>">Explore Service <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
      </div>

      <div class="services-controls">
        <button class="services-prev" type="button" aria-label="Previous service">&larr;</button>
        <div class="services-pagination"></div>
        <button class="services-next" type="button" aria-label="Next service">&rarr;</button>
      </div>
    </div>

  </div>
</section>
