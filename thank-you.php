<?php
$page_title = 'Thank You | Shakespeare Publishing House';
$page_description = 'Thank you for contacting Shakespeare Publishing House. Our team will be in touch shortly.';
$page_noindex = true;

require_once __DIR__ . '/includes/helpers.php';
include __DIR__ . '/includes/layout/header.php';
?>

<main class="service-page">
  <section class="service-overview section-border">
    <div class="container" style="max-width:720px;text-align:center;padding:80px 16px">
      <p class="eyebrow gold">Submission Received</p>
      <h1>Thank You.</h1>
      <div class="gold-line" style="margin:18px auto"></div>
      <p>
        Your request has reached our editorial team. We will review your project and contact you
        within one business day with the right next step.
      </p>
      <p>Need us sooner? Call <a href="tel:+16462580616">+1 646 258 0616</a>.</p>
      <div class="hero-actions" style="justify-content:center;margin-top:28px">
        <a href="index.php" class="btn btn-green">Back to Home</a>
        <a href="blog.php" class="btn btn-outline">Read Our Blog</a>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/layout/footer.php'; ?>
