<?php
$page_title = 'Blog | Shakespeare Publishing House';
$page_description = 'Publishing, writing, editing, and author guidance from Shakespeare Publishing House.';
require_once __DIR__ . '/includes/helpers.php';
$blogs = require __DIR__ . '/includes/data/blogs.php';
include __DIR__ . '/includes/layout/header.php';
?>

<main class="blog-page">
  <section class="blog-hero section-border">
    <div class="container blog-hero-grid">
      <div>
        <p class="eyebrow gold">Author Resources</p>
        <h1>Publishing Insights for Serious Authors.</h1>
      </div>
      <p>Explore practical guidance on book publishing, ebook writing, editing, and building a professional author presence.</p>
    </div>
  </section>

  <section class="blog-list-section section-border">
    <div class="container blog-card-grid">
      <?php foreach ($blogs as $slug => $post): ?>
        <article class="blog-card">
          <a class="blog-card-image" href="single-blog.php?slug=<?= e($slug); ?>">
            <img src="<?= e($post['image']); ?>" alt="<?= e($post['title']); ?>">
          </a>
          <div class="blog-card-content">
            <p class="blog-meta"><?= e($post['category']); ?> / <?= e($post['date']); ?></p>
            <h2><a href="single-blog.php?slug=<?= e($slug); ?>"><?= e($post['title']); ?></a></h2>
            <p><?= e($post['excerpt']); ?></p>
            <a class="text-link" href="single-blog.php?slug=<?= e($slug); ?>">Read Article &rarr;</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/layout/footer.php'; ?>