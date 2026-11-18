<section class="feature-strip section-border" id="about">
  <div class="container feature-grid">
    <?php
      component('feature-card', [
        'icon' => '♕',
        'title' => 'Literary Excellence',
        'text' => "Every manuscript gets professional editing and proofreading to the standard we'd want for our own book. No shortcuts, no templated edits."
      ]);

      component('feature-card', [
        'icon' => '✒',
        'title' => 'Author Partnership',
        'text' => 'One dedicated publishing manager knows your book by name and answers your questions from start to finish.'
      ]);

      component('feature-card', [
        'icon' => 'Ⅰ',
        'title' => 'Timeless Book Design',
        'text' => 'Custom book cover design and interior formatting that still look good ten years after launch day.'
      ]);

      component('feature-card', [
        'icon' => '◎',
        'title' => 'Global Reach',
        'text' => 'Print and ebook distribution through major online bookstores and retail channels, so readers can find your book wherever they shop.'
      ]);
    ?>
  </div>
</section>
