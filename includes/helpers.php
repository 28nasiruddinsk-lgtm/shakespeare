<?php
function e($value){ return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
function component($name, $vars = []){
  extract($vars, EXTR_SKIP);
  include __DIR__ . '/components/' . $name . '.php';
}

// One source for the business details, so pages, footer and schema always match.
const SITE_URL = 'https://shakespearebookpublishinghouse.com/';
const SITE_PHONE = '+1 646 258 0616';
const SITE_PHONE_TEL = '+16462580616';
const SITE_EMAIL = 'info@shakespearebookpublishinghouse.com';
const SITE_ADDRESS = '1405 New York Ave, Huntington Station, NY 11746, United States';
// Same wording on Home, About and Contact (search engines trust an identical description everywhere).
const ABOUT_PARAGRAPH = "Shakespeare Publishing House is a book publishing company at 1405 New York Ave, Huntington Station, NY 11746. It provides ghostwriting services, book editing services, ebook writing, children's book publishing, book cover design, book formatting and book marketing services for first-time and established authors, in print, ebook and audiobook formats.";

// FAQ accordion + matching FAQPage schema from one list of [question, answer] pairs.
// Optional $image puts a picture beside the questions (the faq-layout used on some service pages).
function faq_section(array $items, $heading = 'Frequently Asked Questions', $eyebrow = 'FAQ', $image = null, $imageAlt = ''){
  ?>
  <section class="faq-section faq--v2 section-border">
    <div class="container faq-v2-grid">
      <div class="faq-v2-intro">
        <p class="eyebrow gold"><?= e($eyebrow); ?></p>
        <h2><?= e($heading); ?></h2>
        <p>Can't find your answer? Talk to our publishing team and get a straight reply.</p>
        <div class="faq-v2-actions">
          <a class="btn btn-dark" href="contact.php">Book a Consultation</a>
          <a class="faq-v2-call" href="tel:<?= e(SITE_PHONE_TEL); ?>">or call <?= e(SITE_PHONE); ?></a>
        </div>
        <?php if ($image): ?>
        <div class="faq-v2-image"><img src="<?= e($image); ?>" alt="<?= e($imageAlt); ?>" loading="lazy"></div>
        <?php endif; ?>
      </div>
      <div class="faq-grid faq-v2-list">
        <?php foreach ($items as $i => [$q, $a]): ?>
        <div class="faq-card">
          <button type="button"><em class="faq-num"><?= sprintf('%02d', $i + 1); ?></em><strong class="faq-q"><?= e($q); ?></strong> <span>+</span></button>
          <p><?= e($a); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <script type="application/ld+json"><?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(fn($qa) => [
      '@type' => 'Question',
      'name' => $qa[0],
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qa[1]],
    ], $items),
  ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?></script>
  <?php
}

// Service schema for a service page, on the live domain.
function service_schema($name, $description, $page){
  ?>
  <script type="application/ld+json"><?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => $name,
    'serviceType' => $name,
    'url' => SITE_URL . $page,
    'provider' => ['@id' => SITE_URL . '#organization'],
    'areaServed' => 'Worldwide',
    'description' => $description,
  ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?></script>
  <?php
}
?>
