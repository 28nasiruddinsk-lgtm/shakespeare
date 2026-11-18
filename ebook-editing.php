<?php
$page_title = 'Ebook Editing Services | Proofreading & Formatting';
$page_description = 'Ebook editing services with proofreading and digital formatting, so your ebook reads cleanly on every e-reader and tablet.';

require_once __DIR__ . '/includes/helpers.php';
include __DIR__ . '/includes/layout/header.php';
?>

<!-- Uses the ebook-writing page styles (same layout family). -->
<main class="service-page ebook-writing-page ebook-editing-page">

  <!-- HERO -->
  <section class="service-hero section-border service-banner ebook-writing-banner" style="background-image: url('assets/images/ebook/E-Book-banner.webp');">
    <div class="container service-hero-grid">

      <div class="service-hero-content">
        <h1>Ebook Editing Services for a Clean, Professional Digital Book</h1>
        <div class="gold-line"></div>

        <p>
          Readers notice errors faster on a screen, and a single bad review can sink an ebook. Our ebook editing services
          correct structure, language and formatting, so your ebook reads cleanly on every phone, tablet and e-reader.
        </p>

        <div class="hero-actions">
          <a href="#contact" class="btn btn-green">Get an Ebook Editing Quote</a>
          <a href="#manuscript-popup" class="btn btn-outline js-manuscript-popup">Request a Sample Edit</a>
        </div>
      </div>

    </div>
  </section>

  <!-- WHAT'S INCLUDED -->
  <section class="included-section section-border">
    <div class="container">

      <div class="section-heading center">
        <p class="eyebrow gold">What’s Included</p>
        <h2>Everything Your Ebook Needs Before It Goes Live</h2>
      </div>

      <div class="included-grid">

        <div class="included-card">
          <img src="assets/images/ebook/Digital Strategy & Hook.webp" alt="Structural edit">
          <h3>Structural Edit</h3>
          <p>Chapter order, flow and clarity for short-form and long-form ebooks.</p>
        </div>

        <div class="included-card">
          <img src="assets/images/ebook/Interactive Flow & Refinement.png" alt="Ebook copyediting and proofreading">
          <h3>Ebook Copyediting &amp; Proofreading</h3>
          <p>Grammar, consistency, tone and readability line by line, then a final check for typos, spacing and punctuation.</p>
        </div>

        <div class="included-card">
          <img src="assets/images/ebook/Professional Formatting & Conversion.webp" alt="Ebook formatting">
          <h3>Ebook Formatting</h3>
          <p>Clickable table of contents, headings, links, images and reflowable layout tested on common devices.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- WHO IT'S FOR -->
  <section class="service-overview section-border">
    <div class="container overview-grid">

      <div class="overview-content">
        <p class="eyebrow gold">Who It's For</p>
        <h2>Digital Manuscript Editing for Every Kind of Ebook</h2>
        <div class="gold-line"></div>

        <ul class="premium-list">
          <li>Authors with a finished ebook draft</li>
          <li>Coaches and businesses publishing a guide or lead magnet ebook</li>
          <li>Authors converting a print book into an ebook</li>
        </ul>
      </div>

      <div class="overview-image ornate-frame">
        <img src="assets/images/ebook/ebook-section-1.jpg" alt="Ebook draft on a tablet with editing notes">
      </div>

    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="process-section section-border">
    <div class="container">

      <div class="section-heading center">
        <p class="eyebrow gold">Process</p>
        <h2>Our Digital Manuscript Editing Process</h2>
      </div>

      <div class="process-line">

        <div class="process-step">
          <div class="process-icon">01</div>
          <h3>Upload &amp; Review</h3>
          <p>We assess the draft and recommend the level of editing.</p>
        </div>

        <div class="process-step">
          <div class="process-icon">02</div>
          <h3>Editing</h3>
          <p>Tracked changes with clear comments.</p>
        </div>

        <div class="process-step">
          <div class="process-icon">03</div>
          <h3>Your Review</h3>
          <p>You accept or discuss each change.</p>
        </div>

        <div class="process-step">
          <div class="process-icon">04</div>
          <h3>Proofread &amp; Format</h3>
          <p>A final proofread, then digital formatting.</p>
        </div>

        <div class="process-step">
          <div class="process-icon">05</div>
          <h3>Device Check</h3>
          <p>We preview the file on phone, tablet and e-reader screens.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- RELATED -->
  <section class="deliverables-section section-border">
    <div class="container deliverables-grid">

      <div class="deliverables-content">
        <p class="eyebrow gold">Related Services</p>

        <ul class="premium-list">
          <li>Still writing your ebook? <a href="ebook-writing.php">Explore Ebook Writing</a></li>
          <li>Editing a print book? <a href="editing.php">Explore Book Editing</a></li>
          <li>Ready to publish? <a href="book-publishing.php">Explore Book Publishing</a></li>
        </ul>
      </div>

      <div class="deliverables-image">
        <img src="assets/images/ebook/section-3.jpg" alt="Ebook manuscript on a tablet ready for publishing">
      </div>

    </div>
  </section>

  <?php
    faq_section([
      ['What is the difference between ebook editing and ebook formatting?', 'Editing improves the words: structure, grammar and clarity. Formatting prepares the file so it displays correctly on digital devices, with a working table of contents and clean page flow.'],
      ['Do ebooks need proofreading as much as print books?', 'Yes. Readers can highlight and report errors on most e-readers, and typos often show up in reviews, so a professional proofread protects your ratings.'],
      ['How much do ebook editing services cost?', 'The price depends on word count and the level of editing. Upload your file for a written quote.'],
    ], 'Ebook Editing FAQ', 'Frequently Asked Questions');
  ?>

  <!-- CTA -->
  <section class="service-cta section-border">
    <div class="container cta-grid">

      <div class="cta-content">
        <h2>Make Your Ebook <em>Reader-Ready.</em></h2>
        <div class="gold-line"></div>

        <p>Send us your ebook file and we'll recommend the editing and formatting it needs, with a written quote.</p>

        <div class="hero-actions">
          <a href="#contact" class="btn btn-green">Get an Ebook Editing Quote</a>
          <a href="#manuscript-popup" class="btn btn-outline js-manuscript-popup">Request a Sample Edit</a>
        </div>
      </div>

    </div>
  </section>

</main>

<?php service_schema('Ebook Editing Services', $page_description, 'ebook-editing.php'); ?>

<?php include __DIR__ . '/includes/layout/footer.php'; ?>
