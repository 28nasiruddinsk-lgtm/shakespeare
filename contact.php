<?php
$page_title = 'Contact Us | Book Publishing Consultation';
$page_description = 'Talk to Shakespeare Publishing House about publishing, ghostwriting, editing or ebook writing. Request a publishing consultation today.';
require_once __DIR__ . '/includes/helpers.php';
include __DIR__ . '/includes/layout/header.php';
?>

<main class="contact-page">
  <section class="contact-hero section-border">
    <div class="container contact-hero-grid">
      <div>
        <p class="eyebrow gold">Contact Us</p>
        <h1>Let&rsquo;s Talk About Your Book: Book a Publishing Consultation</h1>
        <p>Tell us where you are in the writing or publishing process, and our team will help you choose the right next step. Use the form for a publishing quote, a manuscript review, editing questions, ebook writing or a consultation.</p>
      </div>

      <div class="contact-info-panel">
        <h2>Shakespeare Publishing House</h2>
        <a href="mailto:<?= e(SITE_EMAIL); ?>"><?= e(SITE_EMAIL); ?></a>
        <a href="tel:<?= e(SITE_PHONE_TEL); ?>"><?= e(SITE_PHONE); ?></a>
        <address><?= e(SITE_ADDRESS); ?></address>
        <p class="contact-hours">Mon &ndash; Fri, 9 AM &ndash; 6 PM (Eastern)</p>
        <a class="btn btn-green" href="tel:<?= e(SITE_PHONE_TEL); ?>">Call Now</a>
      </div>
    </div>
  </section>

  <section class="contact-form-section section-border">
    <div class="container contact-form-grid">
      <div class="section-intro">
        <p class="eyebrow gold">Project Inquiry</p>
        <h2>Send Your Details.</h2>
        <p>Use this form for publishing quotes, manuscript reviews, editing questions, ebook writing, or consultation requests.</p>
        <p><?= e(ABOUT_PARAGRAPH); ?></p>
      </div>

      <form class="footer-contact-form contact-page-form js-site-form" action="submit-form.php" method="post">
        <input type="hidden" name="form_type" value="Contact Page Inquiry">
        <input class="form-honeypot" type="text" name="website" autocomplete="off" tabindex="-1" aria-hidden="true">
        <div class="form-row">
          <label>
            <span>Name</span>
            <input type="text" name="name" placeholder="Your name" required>
          </label>
          <label>
            <span>Email</span>
            <input type="email" maxlength="120" pattern="[^\s@]+@[^\s@]+\.[A-Za-z]{2,}" title="Email address like name@example.com" name="email" placeholder="you@example.com" required>
          </label>
        </div>

        <div class="form-row">
          <label>
            <span>Phone</span>
            <input type="tel" inputmode="tel" maxlength="20" pattern="(?=(?:[^0-9]*[0-9]){7,15}[^0-9]*$)\+?[0-9\s\(\)\.\-]+" title="Phone number: 7 to 15 digits, may start with + (e.g. +1 646 389 3047)" name="phone" placeholder="Phone number">
          </label>
          <label>
            <span>Service</span>
            <select name="service">
              <option>Book Publishing</option>
              <option>Ghostwriting</option>
              <option>Editing</option>
              <option>Ebook Writing</option>
              <option>Ebook Editing</option>
              <option>Children's Book</option>
            </select>
          </label>
        </div>

        <label>
          <span>Message</span>
          <textarea name="message" rows="6" placeholder="Tell us about your book, manuscript, timeline, and goals"></textarea>
        </label>

        <button type="submit" class="btn btn-green">Send Inquiry</button>
        <p class="form-status" role="status" aria-live="polite"></p>
      </form>
    </div>
  </section>

  <section class="contact-map section-border">
    <div class="container">
      <iframe
        title="Map: Shakespeare Publishing House, <?= e(SITE_ADDRESS); ?>"
        src="https://www.google.com/maps?q=<?= rawurlencode('1405 New York Ave, Huntington Station, NY 11746'); ?>&output=embed"
        loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
    </div>
  </section>

  <?php
    faq_section([
      ['How quickly will you reply?', 'Within one business day. Need us sooner? Call ' . SITE_PHONE . '.'],
      ['Can I send my manuscript before the consultation?', 'Yes. Attach it to the form or use Submit Your Manuscript, and your consultant will read it before the call.'],
    ], 'Contact FAQ');
  ?>
</main>

<?php include __DIR__ . '/includes/layout/footer.php'; ?>
