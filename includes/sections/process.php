<section class="process-section process--v2 section-border" id="process">
  <div class="container">
    <div class="section-heading center">
      <p class="eyebrow gold">Our Process</p>
      <h2>How to Publish Your Book in 5 Steps</h2>
      <p>A clear, transparent process, and you approve every stage before release.</p>
    </div>

    <div class="process-track">
      <?php
        component('process-step', ['number' => '01', 'title' => 'Consultation', 'text' => 'We learn your goals, genre, timeline and budget.']);
        component('process-step', ['number' => '02', 'title' => 'Manuscript Development', 'text' => 'Ghostwriting or book editing to get the manuscript ready to publish.']);
        component('process-step', ['number' => '03', 'title' => 'Cover Design & Formatting', 'text' => 'Custom cover, interior layout and ISBN setup.']);
        component('process-step', ['number' => '04', 'title' => 'Publishing & Distribution', 'text' => 'Print and ebook release through major online and retail book channels.']);
        component('process-step', ['number' => '05', 'title' => 'Book Marketing & Launch', 'text' => 'Author website, book listing optimization and launch promotion.']);
      ?>
    </div>
  </div>
</section>
