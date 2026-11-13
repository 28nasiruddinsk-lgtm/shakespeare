  <section class="footer-contact-section section-border" id="contact">
    <div class="container footer-contact-grid">
      
      <div class="footer-contact-copy">
        <p class="eyebrow gold">Start Your Publishing Journey</p>
        <h2>Professional Book Publishing, Ghostwriting, Editing, and Ebook Writing Services.</h2>
        <div class="gold-line"></div>

        <p>
          Shakespeare Publishing House helps authors, entrepreneurs, coaches, and brands turn manuscripts and ideas into polished, publication-ready books. Share your project details and our team will recommend the right path for writing, editing, ebook development, book publishing, and global distribution.
        </p>

        <div class="contact-detail-list" aria-label="Contact details">
          <a href="mailto:Info@shakespearepublishinghouse.com">Info@shakespearepublishinghouse.com</a>
          <a href="tel:+16463890212">+1 646 389 0212</a>
          <address>Rockefeller Plaza, 14th Floor - Suite 1405, New York, NY, 10111, United States</address>
        </div>
      </div>

      <form class="footer-contact-form js-site-form" action="submit-form.php" method="post">
        <input type="hidden" name="form_type" value="Footer Consultation">
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
          <span>Project Details</span>
          <textarea name="message" rows="5" placeholder="Tell us about your manuscript, book idea, timeline, or publishing goals"></textarea>
        </label>

        <button type="submit" class="btn btn-green">Request a Consultation</button>
        <p class="form-status" role="status" aria-live="polite"></p>
      </form>

    </div>
  </section>

  <footer class="site-footer">
    <div class="container footer-grid">

      <div class="footer-brand">
        <a class="brand footer-logo" href="index.php">
          <img src="assets/images/logo-white.png" class="brand-logo" alt="Shakespeare Publishing House">
        </a>

        <p>
          Timeless stories. Lasting impact. We partner with authors to craft extraordinary books that endure.
        </p>

        <div class="socials">
          <a href="https://www.instagram.com/shakespearepublishinghouse/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">IG</a>
          <a href="https://www.youtube.com/@ShakespearePublishingHouse" target="_blank" rel="noopener noreferrer" aria-label="YouTube">YT</a>
          <a href="https://www.facebook.com/profile.php?id=61556203858800" target="_blank" rel="noopener noreferrer" aria-label="Facebook">FB</a>
        </div>
      </div>

      <?php
        component('footer-column', [
          'title' => 'Company',
          'links' => [
            ['label' => 'Home', 'href' => 'index.php'],
            ['label' => 'About Us', 'href' => 'about.php'],
            ['label' => 'Blog', 'href' => 'blog.php'],
            ['label' => 'Reviews', 'href' => 'reviews.php'],
            ['label' => 'Contact', 'href' => 'contact.php'],
          ],
        ]);

        component('footer-column', [
          'title' => 'Services',
          'links' => [
            ['label' => 'Ghostwriting', 'href' => 'ghostwriting.php'],
            ['label' => 'Editing', 'href' => 'editing.php'],
            ['label' => 'Ebook Writing', 'href' => 'ebook-writing.php'],
            ['label' => "Children's Book", 'href' => 'childrens-book.php'],
            ['label' => 'Ebook Editing', 'href' => 'ebook-editing.php'],
            ['label' => 'Book Publishing', 'href' => 'book-publishing.php'],
          ],
        ]);

        component('footer-column', [
          'title' => 'Social',
          'links' => [
            ['label' => 'Instagram', 'href' => 'https://www.instagram.com/shakespearepublishinghouse/', 'external' => true],
            ['label' => 'YouTube', 'href' => 'https://www.youtube.com/@ShakespearePublishingHouse', 'external' => true],
            ['label' => 'Facebook', 'href' => 'https://www.facebook.com/profile.php?id=61556203858800', 'external' => true],
          ],
        ]);
      ?>

      <div class="newsletter">
        <h4>Stay Inspired &mdash;</h4>
        <p>Subscribe for writing tips, publishing insights & exclusive offers.</p>

        <form class="js-site-form newsletter-form" action="submit-form.php" method="post">
          <input type="hidden" name="form_type" value="Newsletter">
          <input class="form-honeypot" type="text" name="website" autocomplete="off" tabindex="-1" aria-hidden="true">
          <input type="email" name="email" placeholder="Enter your email address" required>
          <button aria-label="Subscribe">&rarr;</button>
          <p class="form-status" role="status" aria-live="polite"></p>
        </form>
      </div>

    </div>

    <div class="container footer-bottom">
      <span>&copy; <?= date('Y'); ?> Shakespeare Publishing House.</span>
      <span>
        <a href="index.php">Home</a>
        &nbsp;
        <a href="about.php">About</a>
        &nbsp;
        <a href="blog.php">Blog</a>
        &nbsp;
        <a href="contact.php">Contact</a>
      </span>
    </div>
  </footer>

  <!-- Manuscript Popup (self-contained: markup + style + script) -->
  <?php include __DIR__ . '/../sections/manuscript-popup.php'; ?>

  <!-- Left Floating WhatsApp + Messenger -->
  <div class="floating-contact-icons" aria-label="Quick contact options">

  <a class="floating-contact-btn floating-whatsapp"
     href="https://wa.me/16463890212"
     target="_blank"
     rel="noopener noreferrer"
     aria-label="Chat on WhatsApp">
    <img src="assets/images/whatsapp.png" alt="WhatsApp">
  </a>

  <a id="messengerDirectBtn"
     class="floating-contact-btn"
     href="https://www.messenger.com/t/222097630987780"
     target="_blank"
     rel="noopener noreferrer"
     aria-label="Chat on Messenger">
    <img src="assets/images/messenger.png" alt="Messenger">
  </a>

</div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Services Carousel -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      if (typeof Swiper !== "undefined" && document.querySelector(".services-swiper")) {
        new Swiper(".services-swiper", {
          loop: true,
          speed: 700,
          spaceBetween: 28,
          slidesPerView: 3,
          autoplay: {
            delay: 4000,
            disableOnInteraction: false
          },
          navigation: {
            nextEl: ".services-next",
            prevEl: ".services-prev"
          },
          pagination: {
            el: ".services-pagination",
            clickable: true
          },
          breakpoints: {
            0: {
              slidesPerView: 1,
              spaceBetween: 18
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 22
            },
            1100: {
              slidesPerView: 3,
              spaceBetween: 28
            }
          }
        });
      }
    });
  </script>

  <script>
(function () {
  var messengerBtn = document.getElementById('messengerDirectBtn');

  if (messengerBtn) {
    messengerBtn.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      e.stopImmediatePropagation();

      window.open('https://www.messenger.com/t/222097630987780', '_blank', 'noopener,noreferrer');
      return false;
    }, true);
  }
})();
</script>


  <!-- Zendesk Right Side Chat -->
  <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=eb0092bd-b6da-4958-9379-b51e54268e92"></script>
  <!-- End of Zendesk Widget script -->
    <script>
        window.openZendeskChatWidget = function () {
            if (typeof zE !== 'undefined') {
                zE('webWidget', 'open');
            }
        };

        window.addEventListener('load', function () {
            const chatToggle = document.getElementById("chat_toggle");
            if (chatToggle) {
                chatToggle.addEventListener("click", function () {
                    window.openZendeskChatWidget();
                });
            }

            const interval = setInterval(() => {
                if (typeof zE !== 'undefined') {
                    zE('webWidget:on', 'chat:unreadMessages', function (numberOfUnreadMessages) {
                        if (numberOfUnreadMessages > 0) {
                            window.openZendeskChatWidget();
                        }
                    });
                    clearInterval(interval);
                }
            }, 500);
        });
    </script>
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script defer async src='https://cdn.trustindex.io/loader-cert.js?14d331175de081423566ab0b50b'></script>


  <!-- Main JS -->
  <script src="assets/js/script.js?v=<?= @filemtime(__DIR__ . '/../../assets/js/script.js') ?: time(); ?>"></script>

</body>
</html>