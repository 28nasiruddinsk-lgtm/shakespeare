<?php
$page_title = 'About Us | Publishing House in New York';
$page_description = 'Meet Shakespeare Publishing House, a publishing house in New York helping authors write, edit, design and publish books in print and ebook.';

require_once __DIR__ . '/includes/helpers.php';
include __DIR__ . '/includes/layout/header.php';
?>

<main>
  <?php include 'includes/sections/about-banner.php'; ?>
  <?php include 'includes/sections/about-story.php'; ?>
  <?php include 'includes/sections/about-what-we-do.php'; ?>
  <?php include 'includes/sections/about-values.php'; ?>

  <section class="about-blurb section-border">
    <div class="container about-blurb-inner">
      <p class="eyebrow gold">About Shakespeare Publishing House</p>
      <p><?= e(ABOUT_PARAGRAPH); ?></p>
    </div>
  </section>

  <?php
    faq_section([
      ['Where is Shakespeare Publishing House located?', 'We are at 1405 New York Ave, Huntington Station, NY 11746, United States, and we work with authors worldwide online.'],
      ['What kinds of books do you publish?', "Fiction, memoir, business and self-help books, faith-based titles, children's books and ebooks, in print, ebook and audiobook formats."],
    ], 'About Shakespeare Publishing House');

    $cta_text = 'Book a consultation and our team will recommend the right next step for your book.';
    include 'includes/sections/cta.php';
  ?>
</main>


<?php include __DIR__ . '/includes/layout/footer.php'; ?>
