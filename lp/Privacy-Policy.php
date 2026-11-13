<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Policy | The Shakespeare Publishing House</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        :root {
            --navy: #0E1B3D;
            --navy-deep: #0B1432;
            --gold: #F5B041;
            --gold-dark: #D9992A;
            --orange-cta: #F39C12;
            --bg-white: #FFFFFF;
            --bg-soft: #F8F9FA;
            --text-main: #333333;
            --text-muted: #666666;
            --border-color: #E5E7EB;
            --shadow: 0 10px 30px rgba(14, 27, 61, 0.1);
            --shadow-lg: 0 20px 50px rgba(14, 27, 61, 0.2);
            --radius: 12px;
            --font-head: 'Poppins', sans-serif;
            --font-body: 'Inter', sans-serif;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: var(--font-body); background: var(--bg-white); color: var(--text-main); line-height: 1.7; }
        a { text-decoration: none; color: inherit; transition: 0.2s; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; }

        /* Top Header (Exact Copy from lp.php) */
        .top-header { background: var(--bg-white); padding: 16px 0; border-bottom: 1px solid var(--border-color); position: sticky; top: 0; z-index: 90; }
        .header-inner { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
        .header-inner .brand-logo { display: flex; align-items: center; }
        .header-inner .brand-logo img { height: 70px; width: auto; display: block; }
        .header-contact { display: flex; align-items: center; gap: 24px; font-size: 0.9rem; color: var(--text-muted); flex-wrap: wrap; }
        .header-contact div { display: flex; align-items: center; gap: 8px; }
        .header-contact i { color: var(--gold); }
        .header-contact a:hover { color: var(--navy); }

        /* Top Banner */
        .top-banner { background: var(--navy-deep); color: #fff; text-align: center; padding: 8px 16px; font-size: 0.85rem; font-family: var(--font-head); border-bottom: 1px solid rgba(255,255,255,0.05); }
        .top-banner strong { color: var(--gold); }

        /* Footer (Exact Copy from lp.php) */
        footer { background: var(--navy-deep); color: rgba(255,255,255,0.6); padding: 40px 0; text-align: center; font-size: 0.8rem; border-top: 1px solid rgba(255,255,255,0.05); }
        footer a { color: rgba(255,255,255,0.6); margin: 0 10px; }
        footer a:hover { color: #fff; }

        /* =============================
           UNIFIED PRIVACY POLICY STYLES
           ============================= */
        .privacy-page {
            max-width: 820px;
            margin: 60px auto; /* Matches LP section padding */
            padding: 0 20px;
            background: transparent;
            color: #111;
            line-height: 1.7;
        }

        .privacy-page h1 {
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: var(--navy);
            margin: 0 0 0.1rem 0;
            padding-bottom: 0.2rem;
            border-bottom: 2px solid var(--navy);
        }

        .privacy-page .meta {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: baseline;
            padding: 0.6rem 0 1.2rem 0;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 1.8rem;
            font-size: 0.95rem;
            color: #333;
        }

        .privacy-page .meta .date { font-weight: 400; }
        .privacy-page .meta .brand { font-weight: 600; color: var(--navy); }

        .privacy-page h2 {
            font-size: 1.4rem;
            font-weight: 700;
            margin: 2rem 0 0.6rem 0;
            color: var(--navy);
            border-left: 4px solid var(--gold);
            padding-left: 0.9rem;
        }

        .privacy-page p { margin: 0.6rem 0 1.1rem 0; color: #1a1a1a; }
        .privacy-page ul { margin: 0.3rem 0 1.2rem 1.8rem; padding-left: 0.3rem; }
        .privacy-page ul li { margin-bottom: 0.4rem; color: #1a1a1a; }
        .privacy-page ul li strong { color: var(--navy); font-weight: 600; }
        .privacy-page a { color: var(--navy); text-decoration: underline; text-underline-offset: 2px; text-decoration-color: #aaa; transition: color 0.15s ease; }
        .privacy-page a:hover { color: #000; text-decoration-color: #000; }

        .privacy-page .contact-section {
            margin: 2.2rem 0 0.8rem 0;
            padding: 1.2rem 0 0.2rem 0;
            border-top: 1px solid #ddd;
        }

        .privacy-page .contact-section .company-name {
            font-weight: 700;
            font-size: 1.15rem;
            margin-bottom: 0.3rem;
            color: var(--navy);
        }

        .privacy-page .contact-block {
            display: flex;
            flex-wrap: wrap;
            align-items: baseline;
            gap: 0.3rem 1.8rem;
            margin-top: 0.5rem;
            padding: 0.2rem 0;
            font-size: 1rem;
        }

        .privacy-page .contact-block .address-line { display: block; width: 100%; margin-bottom: 0.2rem; color: #1a1a1a; }
        .privacy-page .contact-block .label { font-weight: 600; margin-right: 0.2rem; color: var(--navy); }
        .privacy-page .contact-block span { display: inline-block; }

        .privacy-page .footer-note {
            margin-top: 2.8rem;
            font-size: 0.85rem;
            color: #555;
            border-top: 1px solid #e0e0e0;
            padding-top: 1.2rem;
            text-align: center;
        }

        /* Responsive for Privacy Page */
        @media (max-width: 1024px) {
            .privacy-page { margin: 40px auto; }
        }
        @media (max-width: 768px) {
            .header-inner { flex-direction: column; text-align: center; }
            .header-contact { flex-direction: column; gap: 8px; }
        }
        @media (max-width: 640px) {
            .privacy-page { padding: 1rem 0.8rem 2rem 0.8rem; margin: 20px auto; }
            .privacy-page h1 { font-size: 1.8rem; }
            .privacy-page .meta { flex-direction: column; align-items: flex-start; gap: 0.2rem; padding-bottom: 0.8rem; }
            .privacy-page h2 { font-size: 1.25rem; padding-left: 0.7rem; }
            .privacy-page ul { margin-left: 1.2rem; }
            .privacy-page .contact-block { flex-direction: column; align-items: flex-start; gap: 0.2rem; }
            .privacy-page .contact-block .address-line { width: 100%; }
            .top-header .brand-logo img { height: 70px; }
            .container { padding: 0 16px; }
        }
        @media (max-width: 400px) {
            .privacy-page h1 { font-size: 1.5rem; }
        }
    </style>
</head>
<body>

    <!-- Header (Identical to lp.php) -->
    <header class="top-header">
        <div class="container header-inner">
            <a href="lp.php" class="brand-logo">
                <img src="https://shakespearepublishinghouse.com/assets/images/logo.png" class="brand-logo" alt="The Shakespeare Publishing House">
            </a>
            <div class="header-contact">
                <div><i class="fas fa-envelope"></i> <a href="mailto:info@theshakespearepublishinghouse.com">info@theshakespearepublishinghouse.com</a></div>
                <div><i class="fas fa-phone-alt"></i> <a href="tel:+16462580616" style="font-weight:700;">+1 646 258 0616</a></div>
                <div><i class="fas fa-clock"></i> Mon - Fri, 9 AM - 6 PM</div>
            </div>
        </div>
    </header>

    <!-- Top Banner (Identical to lp.php) -->
    <div class="top-banner">
        <i class="fas fa-clock" style="color: var(--gold);"></i> 
        <strong>LIMITED TIME OFFER:</strong> Get 50% OFF on all publishing packages &rarr; <strong style="text-decoration: underline; cursor: pointer;" onclick="window.location.href='lp.php#quote'">Claim your discount today!</strong>
    </div>

    <main>
        <!-- START: PRIVACY POLICY CONTENT -->
        <div class="privacy-page">
            <h1>Privacy Policy</h1>
            <div class="meta">
                <span class="date"><strong>Effective Date:</strong> July 30, 2021</span>
                <span class="brand">The Shakespeare Publishing House</span>
            </div>

            <p><strong>The Shakespeare Publishing House</strong> (“we,” “us,” or “our”) respects your privacy and is committed to protecting the personal information you share with us. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our publishing and author services.</p>
            <p>By accessing or using our website or services, you agree to the terms of this Privacy Policy.</p>

            <h2>1. Information We Collect</h2>
            <p>We may collect personal and non-personal information in the following ways:</p>
            <ul>
                <li><strong>Personal Information:</strong> Name, email address, phone number, mailing address, and any manuscript, artwork, or project details you voluntarily submit through our contact forms, project inquiries, or during the course of our publishing services.</li>
                <li><strong>Payment Information:</strong> Billing details necessary to process orders for publishing, design, marketing, or related services. Payment card data is handled by our payment processors and is not stored on our servers.</li>
                <li><strong>Usage Data:</strong> IP address, browser type, device information, operating system, referring URLs, pages visited, and time spent on our site.</li>
                <li><strong>Cookies and Tracking Technologies:</strong> We use cookies, pixels, and similar technologies (including tools such as Meta Pixel and Google Tag Manager) to understand how visitors interact with our site and to support our marketing efforts.</li>
            </ul>

            <h2>2. How We Use Your Information</h2>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Provide, manage, and deliver our publishing, design, marketing, and related services.</li>
                <li>Communicate with you about your project, respond to inquiries, and provide customer support.</li>
                <li>Process orders and payments for services you purchase.</li>
                <li>Improve our website, services, and user experience.</li>
                <li>Send updates, offers, and marketing communications, where you have opted in to receive them.</li>
                <li>Comply with legal obligations and enforce our Terms and Conditions.</li>
            </ul>

            <h2>3. Data Sharing and Disclosure</h2>
            <p>We do not sell or rent your personal information to third parties for their own marketing purposes.</p>
            <p>We may share your information:</p>
            <ul>
                <li>With trusted vendors, freelancers, and service providers (such as editors, illustrators, designers, printers, and distribution or marketing platforms) who assist us in fulfilling your order, under confidentiality obligations.</li>
                <li>With publishing and distribution platforms as required to publish and distribute your book in accordance with your order.</li>
                <li>To comply with applicable law, respond to legal process, or protect our rights, property, or safety, or that of our clients or others.</li>
                <li>In connection with a merger, acquisition, financing, or sale of company assets, subject to applicable law.</li>
            </ul>

            <h2>4. Manuscripts, Artwork, and User-Submitted Content</h2>
            <p>Any manuscript, illustration, photograph, or other material you submit to us remains subject to the ownership and licensing terms described in our Terms and Conditions. We use submitted content solely to provide the services you have engaged us for, and we take reasonable measures to keep such material confidential during the course of our engagement.</p>

            <h2>5. Your Privacy Rights</h2>
            <p>Depending on your location, you may have the right to:</p>
            <ul>
                <li>Request access to the personal data we hold about you.</li>
                <li>Request correction or updating of your information.</li>
                <li>Request deletion of your personal data.</li>
                <li>Withdraw consent where processing is based on consent.</li>
                <li>Opt out of marketing communications at any time.</li>
            </ul>
            <p>To exercise any of these rights, please contact us at <a href="mailto:info@theshakespearepublishinghouse.com">info@theshakespearepublishinghouse.com</a>.</p>

            <h2>6. Security of Your Information</h2>
            <p>We use reasonable administrative, technical, and physical safeguards designed to protect your personal information. However, no method of transmission over the Internet or electronic storage is completely secure, and we cannot guarantee absolute security.</p>

            <h2>7. Children's Privacy</h2>
            <p>While our books are created for young readers, our website and services are directed to adults — authors, parents, and guardians — who engage us to publish, illustrate, or market a book. Our services are not directed to individuals under the age of 13, and we do not knowingly collect personal information directly from children through our website. If we learn that we have inadvertently collected personal data from a child under 13, we will delete it promptly.</p>

            <h2>8. Third-Party Links</h2>
            <p>Our website may contain links to third-party websites, including social media platforms, retail and distribution platforms, and payment processors. We are not responsible for the privacy practices or content of those third-party sites, and we encourage you to review their privacy policies.</p>

            <h2>9. Cookies and Analytics</h2>
            <p>We use cookies and similar technologies, along with analytics and advertising tools, to understand site traffic and improve our marketing. You can control or disable cookies through your browser settings, though doing so may affect certain site functionality.</p>

            <h2>10. Changes to This Privacy Policy</h2>
            <p>We may update this Privacy Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. Any changes will be posted on this page with an updated “Effective Date.” We encourage you to review this page periodically.</p>

            <h2>11. Contact Us</h2>
            <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact us:</p>

            <div class="contact-section">
                <div class="company-name">The Shakespeare Publishing House</div>
                <div class="contact-block">
                    <span class="address-line">Rockefeller Plaza, 14th Floor - Suite 1405, New York, NY, 10111, United States</span>
                    <span><span class="label">Email:</span> <a href="mailto:info@theshakespearepublishinghouse.com">info@theshakespearepublishinghouse.com</a></span>
                    <span><span class="label">Phone:</span> <a href="tel:+16462580616">+1 646 258 0616</a></span>
                </div>
            </div>

            <div class="footer-note">
                The Shakespeare Publishing House · Privacy Policy
            </div>
        </div>
        <!-- END: PRIVACY POLICY CONTENT -->
    </main>

    <!-- Footer (Identical to lp.php) -->
    <footer>
        <div class="container">
            <p>&copy; 2026 The Shakespeare Publishing House. All rights reserved.</p>
            <p>
                <a href="https://shakespearepublishinghouse.com/Terms-and-conditions.php">Terms and Conditions</a>
                <a href="privacy-policy.php">Privacy Policy</a>
            </p>
        </div>
    </footer>

</body>
</html>