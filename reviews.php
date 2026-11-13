<?php
$page_title = 'Customer Reviews | Shakespeare Publishing House';
$page_description = 'Read what authors say about working with Shakespeare Publishing House on ghostwriting, editing, ebook writing, and book publishing.';
require_once __DIR__ . '/includes/helpers.php';
include __DIR__ . '/includes/layout/header.php';
?>

<main class="reviews-page">
  <section class="reviews-hero section-border">
    <div class="container reviews-hero-grid">
      <div>
        <p class="eyebrow gold">Author Reviews</p>
        <h1>Authors Trust Us With Their Stories.</h1>
      </div>
      <p>From first drafts to finished books on the shelf, here is what writers say about ghostwriting, editing, ebook writing, and publishing with Shakespeare Publishing House.</p>
    </div>
  </section>

  <?php
  // Real third-party review profiles for Shakespeare Publishing House, checked live,
  // each with that platform's own logo/icon file. Trustpilot removed on request (no
  // Trustpilot profile is used). The Trustindex widget section was removed on request.
  // Sorted by review count, highest first, so the busiest profiles lead.
  $platforms = [
    ['name' => 'Reviews.io',        'count' => 93, 'rating' => '5.0', 'logo' => 'reviewsio.svg',       'url' => 'https://www.reviews.io/company-reviews/store/www.shakespearepublishinghouse'],
    ['name' => 'Bark',              'count' => 49, 'rating' => '5.0', 'logo' => 'bark.png',             'url' => 'https://www.bark.com/en/us/company/shakespeare-publishing-house/AVXqDy/'],
    ['name' => 'ListYourBusiness',  'count' => 37, 'rating' => '5.0', 'logo' => 'listyourbusiness.png', 'url' => 'https://listyourbusiness.us/directory/shakespeare-publishing-house/'],
    ['name' => 'YPLocal',           'count' => 26, 'rating' => '5.0', 'logo' => 'yplocal.png',          'url' => 'https://www.yplocal.com/united-states/new-york/advertising-marketing-1/shakespeare-publishing-house'],
    ['name' => 'CrowdTrust',        'count' => 16, 'rating' => '4.9', 'logo' => 'crowdtrust.webp',      'url' => 'https://www.crowdtrust.ai/review/shakespearepublishinghouse.com'],
    ['name' => 'ProvenExpert',      'count' => 10, 'rating' => '5.0', 'logo' => 'provenexpert.svg',     'url' => 'https://www.provenexpert.com/shakespeare-publishing-house/'],
  ];
  $platformTotal = array_sum(array_column($platforms, 'count'));
  ?>
  <section class="review-platforms section-border" aria-label="Review platforms">
    <div class="container">
      <p class="platforms-label">Verified on <?= (int)$platformTotal; ?>+ reviews across independent review sites</p>
      <div class="platform-row">
        <?php foreach ($platforms as $p): ?>
          <a class="platform-badge" href="<?= e($p['url']); ?>" target="_blank" rel="noopener" aria-label="<?= e($p['name']); ?> reviews">
            <span class="pb-mark">
              <img src="assets/images/review-logos/<?= e($p['logo']); ?>" alt="<?= e($p['name']); ?> logo" loading="lazy">
            </span>
            <span class="pb-copy">
              <span class="pb-name"><?= e($p['name']); ?></span>
              <span class="pb-meta"><?= e($p['rating']); ?>★ &middot; <?= (int)$p['count']; ?> reviews</span>
            </span>
          </a>
        <?php endforeach; ?>
      </div>
      <p class="platforms-note">Ranked by number of reviews, most to fewest, checked live on 2026-09-28. Trustpilot is not used &mdash; we are not listed there.</p>
    </div>
  </section>

  <?php
  $realReviews = require __DIR__ . '/includes/data/real-reviews.php';
  // Only platforms that actually have cards below get a filter tab.
  $reviewPlatformKeys = array_values(array_unique(array_column($realReviews, 1)));
  $logoByKey = [];
  foreach ($platforms as $p) {
    $key = strtolower(preg_replace('/[^a-z0-9]/i', '', $p['name']));
    $logoByKey[$key] = $p['logo'];
  }
  ?>
  <section class="review-list-section section-border">
    <div class="container">
      <div class="section-heading center">
        <p class="eyebrow gold">In Their Own Words</p>
        <h2>Real Reviews From Real Authors.</h2>
        <p>Short summaries of reviews posted on the independent platforms above, each credited and linked back to the original so you can read the exact wording yourself. Coverage matches each platform's real total, except Reviews.io, which blocks automated reading, so it has no cards below.</p>
      </div>

      <div class="review-filters" role="group" aria-label="Filter reviews by platform">
        <button type="button" class="review-filter is-active" data-filter="all">All Platforms</button>
        <?php foreach ($reviewPlatformKeys as $key): ?>
          <?php
            $label = '';
            foreach ($realReviews as $r) { if ($r[1] === $key) { $label = $r[2]; break; } }
          ?>
          <button type="button" class="review-filter" data-filter="<?= e($key); ?>"><?= e($label); ?></button>
        <?php endforeach; ?>
      </div>

      <div class="review-wall" id="reviewWall">
        <?php foreach ($realReviews as [$name, $platformKey, $platformName, $url, $when, $blurb]): ?>
          <article class="review-tile" data-service="<?= e($platformKey); ?>">
            <div class="stars" aria-label="5 out of 5 stars">★★★★★</div>
            <p>&ldquo;<?= e($blurb); ?>&rdquo;</p>
            <div class="review-person">
              <span class="review-avatar" aria-hidden="true"><?= e(mb_substr($name, 0, 1)); ?></span>
              <div>
                <h3><?= e($name); ?></h3>
                <span><?= e($when); ?></span>
              </div>
            </div>
            <a class="review-source" href="<?= e($url); ?>" target="_blank" rel="noopener">
              <?php if (isset($logoByKey[$platformKey])): ?>
                <img src="assets/images/review-logos/<?= e($logoByKey[$platformKey]); ?>" alt="" aria-hidden="true">
              <?php endif; ?>
              Read on <?= e($platformName); ?> &rarr;
            </a>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="review-more">
        <p class="review-count" id="reviewCount" aria-live="polite"></p>
        <button type="button" class="btn btn-dark" id="loadMoreReviews">Load More Reviews</button>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/includes/sections/cta.php'; ?>
</main>

<script>
(function () {
  var STEP = 12;
  var tiles = Array.prototype.slice.call(document.querySelectorAll('.review-tile'));
  var filters = document.querySelectorAll('.review-filter');
  var btn = document.getElementById('loadMoreReviews');
  var count = document.getElementById('reviewCount');
  var current = 'all', shown = STEP;

  function render() {
    var match = tiles.filter(function (t) { return current === 'all' || t.dataset.service === current; });
    tiles.forEach(function (t) { t.hidden = true; });
    match.forEach(function (t, i) { t.hidden = i >= shown; });
    var visible = Math.min(shown, match.length);
    count.textContent = 'Showing ' + visible + ' of ' + match.length + ' reviews';
    btn.hidden = visible >= match.length;
  }

  btn.addEventListener('click', function () { shown += STEP; render(); });
  filters.forEach(function (f) {
    f.addEventListener('click', function () {
      filters.forEach(function (x) { x.classList.remove('is-active'); });
      f.classList.add('is-active');
      current = f.dataset.filter; shown = STEP; render();
    });
  });
  render();
})();
</script>

<?php include __DIR__ . '/includes/layout/footer.php'; ?>
