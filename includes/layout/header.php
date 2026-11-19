<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= isset($page_title) ? e($page_title) : 'Shakespeare Publishing House'; ?></title>
  <?php if (isset($page_description) && $page_description): ?>
  <meta name="description" content="<?= e($page_description); ?>">
  <?php endif; ?>
  <?php
    // Every page gets a canonical on the live domain (index.php = the root).
    $script = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
    $page_canonical = $page_canonical ?? SITE_URL . ($script === 'index.php' ? '' : $script);
  ?>
  <link rel="canonical" href="<?= e($page_canonical); ?>">
  <?php if (isset($page_title)): ?><meta property="og:title" content="<?= e($page_title); ?>"><?php endif; ?>
  <?php if (!empty($page_description)): ?><meta property="og:description" content="<?= e($page_description); ?>"><?php endif; ?>
  <meta property="og:url" content="<?= e($page_canonical); ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?= e(SITE_URL . 'assets/images/logo-shakespeare.png'); ?>">
  <?php if (!empty($page_noindex)): ?><meta name="robots" content="noindex, follow"><?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" type="image/png" href="assets/images/Shakespeare Pubishing House-14.png">
<link rel="shortcut icon" type="image/png" href="assets/images/Shakespeare Pubishing House-14.png">
<link rel="apple-touch-icon" href="assets/images/Shakespeare Pubishing House-14.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@29.5.10/dist/css/intlTelInput.min.css">
  <style>.iti{display:block;width:100%}</style>
  <link rel="stylesheet" href="assets/css/style.css?v=<?= @filemtime(__DIR__ . '/../../assets/css/style.css') ?: time(); ?>">
  
  <?php
    // Organization + LocalBusiness + WebSite schema, built from the constants in includes/helpers.php.
    $address = [
      '@type' => 'PostalAddress',
      'streetAddress' => '1405 New York Ave',
      'addressLocality' => 'Huntington Station',
      'addressRegion' => 'NY',
      'postalCode' => '11746',
      'addressCountry' => 'US',
    ];
    $sameAs = [
      'https://www.instagram.com/shakespearepublishinghouse/',
      'https://www.youtube.com/@ShakespearePublishingHouse',
      'https://www.facebook.com/profile.php?id=61556203858800',
    ];
    $services = [
      'Ghostwriting Services' => 'ghostwriting.php',
      'Book Editing Services' => 'editing.php',
      'Book Publishing Services' => 'book-publishing.php',
      'Ebook Writing Services' => 'ebook-writing.php',
      'Ebook Editing Services' => 'ebook-editing.php',
      "Children's Book Publishing" => 'childrens-book.php',
    ];
    $logo = SITE_URL . 'assets/images/logo-shakespeare.png';
    $schema = [
      '@context' => 'https://schema.org',
      '@graph' => [
        [
          '@type' => ['Organization', 'ProfessionalService'],
          '@id' => SITE_URL . '#organization',
          'name' => 'Shakespeare Publishing House',
          'url' => SITE_URL,
          'logo' => ['@type' => 'ImageObject', 'url' => $logo],
          'image' => $logo,
          'description' => ABOUT_PARAGRAPH,
          'email' => SITE_EMAIL,
          'telephone' => SITE_PHONE_TEL,
          'address' => $address,
          'sameAs' => $sameAs,
          'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => SITE_PHONE_TEL,
            'email' => SITE_EMAIL,
            'contactType' => 'customer support',
            'areaServed' => 'US',
            'availableLanguage' => ['English'],
          ],
        ],
        [
          '@type' => 'LocalBusiness',
          '@id' => SITE_URL . '#localbusiness',
          'name' => 'Shakespeare Publishing House',
          'url' => SITE_URL,
          'image' => $logo,
          'logo' => $logo,
          'description' => ABOUT_PARAGRAPH,
          'telephone' => SITE_PHONE_TEL,
          'email' => SITE_EMAIL,
          'priceRange' => '$$',
          'address' => $address,
          'areaServed' => [['@type' => 'Country', 'name' => 'United States'], ['@type' => 'Place', 'name' => 'Worldwide']],
          'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Publishing Services',
            'itemListElement' => array_map(fn($name, $page) => [
              '@type' => 'Offer',
              'itemOffered' => ['@type' => 'Service', 'name' => $name, 'url' => SITE_URL . $page],
            ], array_keys($services), $services),
          ],
          'sameAs' => $sameAs,
        ],
        [
          '@type' => 'WebSite',
          '@id' => SITE_URL . '#website',
          'url' => SITE_URL,
          'name' => 'Shakespeare Publishing House',
          'publisher' => ['@id' => SITE_URL . '#organization'],
        ],
      ],
    ];
  ?>
  <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?></script>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-18347661667"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-18347661667');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GTM-MVNXN4NM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GTM-MVNXN4NM');
</script>
<?php if (!empty($page_conversion)): // thank-you page only: one visit = one lead ?>
<!-- Event snippet for Sign-up conversion page -->
<script>
  gtag('event', 'conversion', {
    'send_to': 'AW-18583789003/NJA_CLDB27sdEMu7uJ1F',
    'value': 1.0,
    'currency': 'USD'
  });
</script>
<?php endif; ?>

  
  
  
</head>
<body>
  <div class="top-quote">
    <span>&ldquo;</span> This above all: to thine own self be true. <strong>&mdash; William Shakespeare, Hamlet</strong>
  </div>

  <header class="site-header" id="top">
    <div class="container nav-wrap">
      <a class="brand" href="index.php" aria-label="Shakespeare Publishing House">
         <img src="assets/images/logo-shakespeare.webp" class="brand-logo" alt="Shakespeare Book Publishing House" width="600" height="404">
      </a>

      <button class="nav-toggle" aria-label="Open menu" aria-expanded="false">&#9776;</button>

      <nav class="main-nav">
  <a href="about.php">About</a>

  <div class="nav-item has-dropdown">
    <a href="index.php#services" class="nav-link">Services <span aria-hidden="true">&#9662;</span></a>

    <div class="dropdown-menu">
      <a href="ghostwriting.php">Ghostwriting</a>
      <a href="editing.php">Editing</a>
      <a href="book-publishing.php">Book Publishing</a>
      <a href="ebook-writing.php">Ebook Writing</a>
      <a href="ebook-editing.php">Ebook Editing</a>
      <a href="childrens-book.php">Children&#39;s Book</a>
      <!-- Coming soon: pages not available yet.
      <a href="book-cover-design.php">Book Cover Design</a>
      <a href="marketing.php">Marketing</a>
      <a href="author-branding.php">Author Branding</a>
      -->
    </div>
  </div>

  <!-- <a href="#process">Our Process</a> -->
  <a href="index.php#books">Books</a>
  <!-- <a href="#resources">Resources &#9662;</a> -->
  <a href="blog.php">Blog</a>
  <a href="reviews.php">Reviews</a>
  <a href="contact.php">Contact</a>
</nav>

      <a class="btn btn-dark header-btn js-manuscript-popup" href="#manuscript-popup">Submit Manuscript</a>
    </div>
  </header>
  
  


