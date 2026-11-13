<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= isset($page_title) ? e($page_title) : 'Shakespeare Publishing House'; ?></title>
  <?php if (isset($page_description) && $page_description): ?>
  <meta name="description" content="<?= e($page_description); ?>">
  <?php endif; ?>
  <?php if (!empty($page_canonical)): ?><link rel="canonical" href="<?= e($page_canonical); ?>"><?php endif; ?>
  <?php if (!empty($page_noindex)): ?><meta name="robots" content="noindex, follow"><?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" type="image/png" href="assets/images/Shakespeare Pubishing House-14.png">
<link rel="shortcut icon" type="image/png" href="assets/images/Shakespeare Pubishing House-14.png">
<link rel="apple-touch-icon" href="assets/images/Shakespeare Pubishing House-14.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css?v=<?= @filemtime(__DIR__ . '/../../assets/css/style.css') ?: time(); ?>">
  
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Organization", "ProfessionalService"],
      "@id": "https://shakespearepublishinghouse.com/#organization",
      "name": "Shakespeare Publishing House",
      "url": "https://shakespearepublishinghouse.com/",
      "logo": {
        "@type": "ImageObject",
        "url": "https://shakespearepublishinghouse.com/wp-content/uploads/2026/06/logo.png"
      },
      "image": "https://shakespearepublishinghouse.com/wp-content/uploads/2026/06/logo.png",
      "description": "Shakespeare Publishing House helps authors, entrepreneurs, coaches, and brands turn manuscripts and ideas into polished, publication-ready books.",
      "email": "Info@shakespearepublishinghouse.com",
      "telephone": "+1-646-389-0212",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Rockefeller Plaza, 14th Floor - Suite 1405",
        "addressLocality": "New York",
        "addressRegion": "NY",
        "postalCode": "10111",
        "addressCountry": "US"
      },
      "sameAs": [
        "https://www.instagram.com/shakespearepublishinghouse/",
        "https://www.youtube.com/@ShakespearePublishingHouse",
        "https://www.facebook.com/profile.php?id=61556203858800"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-646-258-0616",
        "email": "Info@shakespearepublishinghouse.com",
        "contactType": "customer support",
        "areaServed": "US",
        "availableLanguage": ["English"]
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://shakespearepublishinghouse.com/#localbusiness",
      "name": "Shakespeare Publishing House",
      "url": "https://shakespearepublishinghouse.com/",
      "image": "https://shakespearepublishinghouse.com/wp-content/uploads/2026/06/logo.png",
      "logo": "https://shakespearepublishinghouse.com/wp-content/uploads/2026/06/logo.png",
      "description": "Professional book publishing, ghostwriting, editing, ebook writing, book cover design, marketing, and author branding services.",
      "telephone": "+1-646-258-0616",
      "email": "Info@shakespearepublishinghouse.com",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Rockefeller Plaza, 14th Floor - Suite 1405",
        "addressLocality": "New York",
        "addressRegion": "NY",
        "postalCode": "10111",
        "addressCountry": "US"
      },
      "areaServed": [
        {
          "@type": "Country",
          "name": "United States"
        },
        {
          "@type": "Place",
          "name": "Worldwide"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Publishing Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Ghostwriting",
              "url": "https://shakespearepublishinghouse.com/ghostwriting/"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Editing",
              "url": "https://shakespearepublishinghouse.com/editing/"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Book Publishing",
              "url": "https://shakespearepublishinghouse.com/book-publishing/"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Ebook Writing",
              "url": "https://shakespearepublishinghouse.com/ebook-writing/"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Book Cover Design",
              "url": "https://shakespearepublishinghouse.com/book-cover-design/"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Book Marketing",
              "url": "https://shakespearepublishinghouse.com/book-marketing/"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Author Branding",
              "url": "https://shakespearepublishinghouse.com/author-branding/"
            }
          }
        ]
      },
      "sameAs": [
        "https://www.instagram.com/shakespearepublishinghouse/",
        "https://www.youtube.com/@ShakespearePublishingHouse",
        "https://www.facebook.com/profile.php?id=61556203858800"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://shakespearepublishinghouse.com/#website",
      "url": "https://shakespearepublishinghouse.com/",
      "name": "Shakespeare Publishing House",
      "publisher": {
        "@id": "https://shakespearepublishinghouse.com/#organization"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://shakespearepublishinghouse.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
  ]
}
</script>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-18347661667"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-18347661667');
</script>

  
  
  
</head>
<body>
  <div class="top-quote">
    <span>&ldquo;</span> This above all: to thine own self be true. <strong>&mdash; William Shakespeare, Hamlet</strong>
  </div>

  <header class="site-header" id="top">
    <div class="container nav-wrap">
      <a class="brand" href="index.php" aria-label="Shakespeare Publishing House">
         <img src="assets/images/logo.png" class="brand-logo" alt="Shakespeare Publishing House">
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
  
  


