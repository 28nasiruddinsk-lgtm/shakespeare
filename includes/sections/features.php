<section class="feature-strip section-border" id="about">
  <div class="container feature-grid">
    <?php
      component('feature-card', [
        'icon' => '♕',
        'title' => 'Literary Excellence',
        'text' => "Every manuscript gets the same standard we'd want for our own book no shortcuts, no templated edits."
      ]);

      component('feature-card', [
        'icon' => '✒',
        'title' => 'Author Partnership',
        'text' => 'You\'re not a ticket number. You get a real point of contact who knows your book by name.'
      ]);

      component('feature-card', [
        'icon' => 'Ⅰ',
        'title' => 'Timeless Publishing',
        'text' => 'We design books that still look good ten years from now, not just on launch day.'
      ]);

      component('feature-card', [
        'icon' => '◎',
        'title' => 'Global Reach',
        'text' => 'We design books that still look good ten years from now, not just on launch day.'
      ]);
    ?>
  </div>
</section>