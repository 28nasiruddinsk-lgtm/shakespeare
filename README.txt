Shakespeare Publishing House Homepage

This version does NOT use data.php.
It uses a clean PHP include structure:

index.php
includes/helpers.php
includes/layout/header.php
includes/layout/footer.php
includes/sections/hero.php
includes/sections/features.php
includes/sections/services.php
includes/sections/books.php
includes/sections/process.php
includes/sections/videos.php
includes/sections/reviews.php
includes/sections/cta.php
includes/components/feature-card.php
includes/components/service-card.php
includes/components/process-step.php
includes/components/video-card.php
includes/components/review-card.php
includes/components/footer-column.php
assets/css/style.css
assets/js/script.js

Placeholder image sizes used in the UI:
- Hero illustration: 900 x 560 px
- Featured books shelf: 920 x 360 px
- Video thumbnails: 420 x 260 px each
- Ink & quill art: 620 x 360 px
- CTA luxury books image: 900 x 300 px

How to run locally:
1. Put the folder in XAMPP htdocs or any PHP server.
2. Open index.php in browser through localhost.

To replace placeholder images:
- Replace the placeholder div in each section file with an <img> tag.
- Keep the same parent class for spacing and responsive layout.
