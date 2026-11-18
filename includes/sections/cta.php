<?php
  // Pages may set $cta_title / $cta_text before including this section.
  $cta_title = $cta_title ?? 'Your Story Deserves<br>the World.';
  $cta_text = $cta_text ?? 'Tell us about your manuscript or idea, and our publishing team will recommend the right next step.';
?>
<section class="cta-section section-border" id="story-cta">
  <div class="container cta-grid home-cta-grid">
    <div class="cta-copy">
      <h2><?= $cta_title; ?></h2>
      <p><?= e($cta_text); ?></p>
      <div class="hero-actions">
        <a class="btn btn-dark js-manuscript-popup" href="#manuscript-popup">Submit Your Manuscript <span>&rarr;</span></a>
        <a class="btn btn-outline" href="contact.php">Book a Consultation</a>
      </div>
    </div>

    <div class="cta-art home-cta-art">
      <img src="assets/images/home-sec.jpg" alt="Author publishing desk with finished books">
    </div>
  </div>
</section>
