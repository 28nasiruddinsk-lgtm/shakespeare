<?php
$page_title = 'Contact | Shakespeare Publishing House';
$page_description = 'Contact Shakespeare Publishing House for book publishing, ghostwriting, editing, and ebook writing services.';
require_once __DIR__ . '/includes/helpers.php';
include __DIR__ . '/includes/layout/header.php';
?>

<main class="contact-page">
  <section class="contact-hero section-border">
    <div class="container contact-hero-grid">
      <div>
        <p class="eyebrow gold">Contact Us</p>
        <h1>Let&rsquo;s Talk About Your Book.</h1>
        <p>Tell us where you are in the writing or publishing process. Our team will help you choose the right next step.</p>
      </div>

      <div class="contact-info-panel">
        <h2>Shakespeare Publishing House</h2>
        <a href="mailto:Info@shakespearepublishinghouse.com">Info@shakespearepublishinghouse.com</a>
        <a href="tel:+16463890212">+1 646 389 0212</a>
        <address>Rockefeller Plaza, 14th Floor - Suite 1405, New York, NY, 10111, United States</address>
        <a class="btn btn-green" href="tel:+16462580616">Call Now</a>
      </div>
    </div>
  </section>

  <section class="contact-form-section section-border">
    <div class="container contact-form-grid">
      <div class="section-intro">
        <p class="eyebrow gold">Project Inquiry</p>
        <h2>Send Your Details.</h2>
        <p>Use this form for publishing quotes, manuscript reviews, editing questions, ebook writing, or consultation requests.</p>
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
            <input type="email" name="email" placeholder="you@example.com" required>
          </label>
        </div>

        <div class="form-row">
          <label>
            <span>Phone</span>
            <input type="tel" name="phone" placeholder="Phone number">
          </label>
          <label>
            <span>Service</span>
            <select name="service">
              <option>Book Publishing</option>
              <option>Ghostwriting</option>
              <option>Editing</option>
              <option>Ebook Writing</option>
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
</main>

<?php include __DIR__ . '/includes/layout/footer.php'; ?>

