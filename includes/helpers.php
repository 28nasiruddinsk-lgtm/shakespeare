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
  <section class="faq-section section-border">
    <div class="container<?= $image ? ' faq-layout' : ''; ?>">
      <?php if ($image): ?>
      <div class="faq-image"><img src="<?= e($image); ?>" alt="<?= e($imageAlt); ?>"></div>
      <div class="faq-content">
      <?php endif; ?>
      <div class="section-heading center">
        <p class="eyebrow gold"><?= e($eyebrow); ?></p>
        <h2><?= e($heading); ?></h2>
      </div>
      <div class="faq-grid">
        <?php foreach ($items as [$q, $a]): ?>
        <div class="faq-card">
          <button type="button"><?= e($q); ?> <span>+</span></button>
          <p><?= e($a); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <?php if ($image): ?></div><?php endif; ?>
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
