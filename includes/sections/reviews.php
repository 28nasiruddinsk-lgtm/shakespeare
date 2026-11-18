<?php
  // Only real reviews, each linked to the original on its platform (same data as reviews.php).
  // One review from each platform, so the strip shows the spread of independent sites.
  $homeReviews = [];
  foreach (require __DIR__ . '/../data/real-reviews.php' as $r) {
    if (!isset($homeReviews[$r[1]])) $homeReviews[$r[1]] = $r;
  }
?>
<section class="reviews-section section-border" id="reviews">
  <div class="container reviews-grid">

    <!-- LEFT: Reviews Carousel -->
    <div class="reviews-left">
      <p class="eyebrow gold">Author Reviews</p>
      <h2>Trusted by Authors on Independent Review Sites</h2>

      <div class="reviews-carousel-wrap">
        <div class="swiper reviews-swiper">
          <div class="swiper-wrapper">

            <?php foreach ($homeReviews as [$name, $key, $platform, $link, $date, $text]): ?>
            <div class="swiper-slide">
              <div class="review-card">
                <div class="stars">★★★★★</div>
                <p>“<?= e($text); ?>”</p>
                <h4><?= e($name); ?></h4>
                <span>Review on <a href="<?= e($link); ?>" target="_blank" rel="noopener"><?= e($platform); ?></a><?php if (!preg_match('/\bago\b/i', $date)): // "11 hours ago" was relative to when it was collected ?> &middot; <?= e($date); ?><?php endif; ?></span>
              </div>
            </div>
            <?php endforeach; ?>

          </div>
        </div>

        <div class="reviews-controls">
          <button class="reviews-prev" type="button" aria-label="Previous review">←</button>
          <div class="reviews-pagination"></div>
          <button class="reviews-next" type="button" aria-label="Next review">→</button>
        </div>
      </div>

      <a class="btn btn-outline reviews-all-link" href="reviews.php">Read All Reviews <span>→</span></a>
    </div>

    <!-- RIGHT: Image -->
    <div class="reviews-right">
      <img src="assets/images/review-img.png" alt="Ink and quill illustration">
    </div>

  </div>
</section>
