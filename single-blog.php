<?php
require_once __DIR__ . '/includes/helpers.php';
$blogs = require __DIR__ . '/includes/data/blogs.php';
$slug = $_GET['slug'] ?? 'how-to-prepare-your-manuscript';
$post = $blogs[$slug] ?? null;

if (!$post) {
  http_response_code(404);
  $post = [
    'title' => 'Article Not Found',
    'date' => '',
    'category' => 'Blog',
    'image' => 'assets/images/home-sec.jpg',
    'excerpt' => 'The article you are looking for could not be found.',
    'content' => ['Please return to the blog page to browse available articles.'],
  ];
}

// SEO title tags from the content plan; the on-page heading keeps the post's own title.
$seoTitles = [
  'complete-guide-to-publishing-a-successful-book' => 'How to Publish a Book: A Step-by-Step Guide for Authors',
  'how-to-prepare-your-manuscript' => 'Manuscript Preparation Checklist Before You Publish',
  'ebook-writing-for-authority' => 'Why Experts Should Write an Ebook (and How to Start)',
  'editing-before-publishing' => 'Why Book Editing Must Come Before Publishing',
];
$page_title = $seoTitles[$slug] ?? $post['title'] . ' | Shakespeare Publishing House';
$page_description = $post['excerpt'];
// Each post is its own page, so the canonical keeps the slug.
$page_canonical = SITE_URL . 'single-blog.php?slug=' . rawurlencode($slug);
include __DIR__ . '/includes/layout/header.php';
?>

<main class="single-blog-page">
  <article>
    <section class="single-blog-hero section-border">
      <div class="container single-blog-grid">
        <div class="single-blog-heading">
          <p class="eyebrow gold"><?= e($post['category']); ?></p>
          <h1><?= e($post['title']); ?></h1>
          <?php if (!empty($post['date'])): ?><p class="blog-meta"><?= e($post['date']); ?></p><?php endif; ?>
        </div>
        <div class="single-blog-image ornate-frame">
          <img src="<?= e($post['image']); ?>" alt="<?= e($post['title']); ?>">
        </div>
      </div>
    </section>

    <section class="single-blog-content section-border">
      <div class="container article-body">
        <?php foreach ($post['content'] as $paragraph): ?>
          <p><?= e($paragraph); ?></p>
        <?php endforeach; ?>
        <a class="btn btn-green" href="blog.php">Back to Blog</a>
      </div>
    </section>
  </article>
</main>

<?php include __DIR__ . '/includes/layout/footer.php'; ?>