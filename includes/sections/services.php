<section class="services-block section-border" id="services">
  <div class="container split-grid">
    <div class="section-intro boxed-left">
      <p class="eyebrow gold">Our Services</p>
      <h2>Every Step.<br>Expertly Handled.</h2>
      <p>Self-publishing a book sounds simple until you're three drafts in and realizing editing, cover design, formatting, and marketing all need to happen — and none of them happen by accident. This is where most authors stall out. We don't let that happen. Our publishing house covers the entire path from blank page to bestseller list, so you're never stuck Googling "how to format an ebook for Kindle" at midnight.</p>
      <a class="btn btn-dark" href="index.php#services">Explore Our Services <span>→</span></a>
    </div>

    <div class="service-list">
      <?php
        component('service-card', ['icon' => '✒', 'title' => 'Ghostwriting', 'text' => 'Bring your ideas to life.']);
        component('service-card', ['icon' => '☼', 'title' => 'Editing', 'text' => 'Polish your story to perfection.']);
        component('service-card', ['icon' => '☰', 'title' => 'Book Publishing', 'text' => 'Premium print & digital publishing.']);
        component('service-card', ['icon' => '▧', 'title' => 'Cover Design', 'text' => 'So striking, it sells the book.']);
        component('service-card', ['icon' => '➤', 'title' => 'Marketing', 'text' => 'Strategic promotion that gets results.']);
      ?>
    </div>
  </div>
</section>
