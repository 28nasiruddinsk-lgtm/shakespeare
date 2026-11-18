<?php
$page_title = 'Book Editing Services | Developmental & Proofreading';
$page_description = 'Book editing services in three layers: developmental editing, line editing, copyediting and proofreading. Request a sample edit.';

require_once __DIR__ . '/includes/helpers.php';
include __DIR__ . '/includes/layout/header.php';
?>

<main class="service-page editing-page">

  <!-- HERO -->
  <section class="service-hero section-border service-banner editing-banner" style="background-image: url('assets/images/Editing/bg-editing.webp');">
    <div class="container service-hero-grid">

      <div class="service-hero-content">
        <h1>Book Editing Services That Make Your Book Better</h1>
        <div class="gold-line"></div>

        <p>
          Many editors online run a manuscript through a grammar checker and call it done. That's not editing.
          Real manuscript editing means someone reads your book the way a reader will, and tells you honestly
          where it works and where it doesn't.
        </p>

        <div class="hero-actions">
          <a href="#manuscript-popup" class="btn btn-green js-manuscript-popup">Request a Sample Edit</a>
          <a href="#contact" class="btn btn-outline">Get an Editing Quote</a>
        </div>
      </div>

    </div>
  </section>

  <!-- THREE LAYERS -->
  <section class="included-section section-border">
    <div class="container">

      <div class="section-heading center">
        <p class="eyebrow gold">The Three Layers of Editing</p>
        <h2>The Three Layers of Book Editing, and Why Order Matters</h2>
        <p>
          Most authors think editing is one step. It's actually three. Doing them in the wrong order wastes time and
          money, because there's no point polishing sentences in a chapter that needs to be cut.
        </p>
      </div>

      <div class="included-grid">

        <div class="included-card">
          <img src="assets/images/Editing/icon-one.webp" alt="Developmental editing">
          <h3>Developmental Editing</h3>
          <p>
            We read the whole manuscript to see how the book works as a whole. This edit covers structure, pacing,
            chapter flow, narrative arc and logic. You receive a detailed editorial report with practical notes on
            what to change and why.
          </p>
        </div>

        <div class="included-card">
          <img src="assets/images/Editing/icon-two.png" alt="Line editing">
          <h3>Line Editing</h3>
          <p>
            We work sentence by sentence on word choice, flow, tone, rhythm and repetition, tightening weak lines
            while keeping your voice.
          </p>
        </div>

        <div class="included-card">
          <img src="assets/images/Editing/icon-three.png" alt="Copyediting and proofreading">
          <h3>Copyediting &amp; Proofreading</h3>
          <p>
            The final technical pass for grammar, spelling, punctuation, consistency and typos before your book goes to print.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="process-section process--v2 section-border">
    <div class="container">

      <div class="section-heading center">
        <p class="eyebrow gold">How It Works</p>
        <h2>Our Manuscript Editing Process</h2>
      </div>

      <div class="process-line">

        <div class="process-step">
          <div class="process-icon">01</div>
          <h3>Manuscript Review</h3>
          <p>We read your draft and recommend the right level of editing.</p>
        </div>

        <div class="process-step">
          <div class="process-icon">02</div>
          <h3>Editing Plan</h3>
          <p>A clear scope, quote and schedule.</p>
        </div>

        <div class="process-step">
          <div class="process-icon">03</div>
          <h3>Tracked Edits</h3>
          <p>Every change is marked with Track Changes, with comments explaining why.</p>
        </div>

        <div class="process-step">
          <div class="process-icon">04</div>
          <h3>Review Round</h3>
          <p>You accept, reject or discuss each change.</p>
        </div>

        <div class="process-step">
          <div class="process-icon">05</div>
          <h3>Final Pass</h3>
          <p>A last proofreading check before publishing.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- WHY AUTHORS TRUST OUR EDITORS -->
  <section class="why-service-section other-services section-border">
    <div class="container">

      <div class="section-heading center">
        <p class="eyebrow gold">Why Authors Trust Our Editors</p>
      </div>

      <div class="why-service-grid three-col">

        <div class="why-service-card">
          <div class="why-icon">
            <img src="assets/images/Editing/icons (2).webp" alt="Author voice protection">
          </div>
          <h3>Author Voice Protection</h3>
          <p>We improve how you say it, never what you mean.</p>
        </div>

        <div class="why-service-card">
          <div class="why-icon">
            <img src="assets/images/Editing/icons (3).webp" alt="Complete manuscript focus">
          </div>
          <h3>Complete Manuscript Focus</h3>
          <p>Every chapter gets the same attention as the first.</p>
        </div>

        <div class="why-service-card">
          <div class="why-icon">
            <img src="assets/images/Editing/icons (4).webp" alt="Clear editorial direction">
          </div>
          <h3>Clear Editorial Direction</h3>
          <p>Notes you can act on, not vague comments.</p>
        </div>

        <div class="why-service-card">
          <div class="why-icon">
            <img src="assets/images/Editing/icons (1).webp" alt="Careful quality review">
          </div>
          <h3>Careful Quality Review</h3>
          <p>We check flow, consistency, readability and presentation before every manuscript is returned.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- INTERNAL LINKS / NEXT STEPS -->
  <section class="deliverables-section section-border">
    <div class="container deliverables-grid">

      <div class="deliverables-content">
        <p class="eyebrow gold">Related Services</p>

        <ul class="premium-list">
          <li>Still drafting your book? <a href="ghostwriting.php">Explore Ghostwriting</a></li>
          <li>Ready after editing? <a href="book-publishing.php">Explore Book Publishing</a></li>
          <li>Editing an ebook? <a href="ebook-editing.php">Explore Ebook Editing</a></li>
          <li>Developmental editing, line editing, copyediting and proofreading available.</li>
          <li>Sample edit available before full project commitment.</li>
        </ul>
      </div>

      <div class="deliverables-image">
        <img src="assets/images/Editing/manusript.jpg" alt="Editing desk with manuscript notes and marked pages">
      </div>

    </div>
  </section>

  <?php
    faq_section([
      ['What is the difference between developmental editing and proofreading?', 'Developmental editing fixes the big picture: structure, plot, pacing and argument. Proofreading is the final check for typos and small errors after all other edits are finished.'],
      ['What kind of editing does my book need?', "If the story or structure isn't working, start with developmental editing. If the structure is solid but the sentences feel rough, choose line editing. If the book is finished and polished, proofreading is enough. A manuscript review tells you which level fits."],
      ['How much do book editing services cost?', 'Editing is priced by word count and editing level. Upload your manuscript for a written quote.'],
      ['Will editing change my voice?', 'No. Every change is tracked and explained, and you decide what to keep.'],
    ], 'Editing FAQ', 'Frequently Asked Questions', 'assets/images/Editing/faq-editing.jpg', 'Editor reviewing manuscript with notes');
  ?>

  <!-- CTA -->
  <section class="service-cta section-border">
    <div class="container cta-grid">

      <div class="cta-content">
        <h2>Your Manuscript Deserves a <em>Real Read.</em></h2>
        <div class="gold-line"></div>

        <p>Send us your manuscript and our editors will recommend the level of editing it needs.</p>

        <div class="hero-actions">
          <a href="#manuscript-popup" class="btn btn-green js-manuscript-popup">Request a Sample Edit</a>
          <a href="#contact" class="btn btn-outline">Get an Editing Quote</a>
        </div>
      </div>

    </div>
  </section>

</main>

<?php service_schema('Book Editing Services', $page_description, 'editing.php'); ?>

<?php include __DIR__ . '/includes/layout/footer.php'; ?>
