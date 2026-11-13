<section class="process-section section-border" id="process">
  <div class="container process-grid">
    <div class="section-intro boxed-left compact">
      <p class="eyebrow gold">Our Process</p>
      <h2>Your Journey<br>to Publication</h2>
      <p>A seamless, transparent process designed around your success.</p>
    </div>

    <div class="process-track">
      <?php
        component('process-step', ['number' => '01', 'title' => 'Consultation', 'text' => 'We understand your goals and vision.']);
        component('process-step', ['number' => '02', 'title' => 'Manuscript Development', 'text' => 'We shape, refine, and strengthen.']);
        component('process-step', ['number' => '03', 'title' => 'Design & Production', 'text' => 'Cover, layout, and beautiful formatting.']);
        component('process-step', ['number' => '04', 'title' => 'Publishing', 'text' => 'Print, eBook, and global distribution.']);
        component('process-step', ['number' => '05', 'title' => 'Marketing & Launch', 'text' => 'Promote your book and build your brand.']);
      ?>
    </div>
  </div>
</section>
