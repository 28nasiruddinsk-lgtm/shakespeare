<?php require_once __DIR__ . '/includes/helpers.php'; ?>
<?php include __DIR__ . '/includes/layout/header.php'; ?>

<style>
/* ===== TERMS & CONDITIONS PAGE STYLES ===== */
/* Clean, simple, matches privacy page styling */

.terms-page {
    max-width: 820px;
    margin: 0 auto;
    padding: 1.5rem 1rem 2.5rem 1rem;
    background: transparent;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    color: #111;
    line-height: 1.7;
}

.terms-page h1 {
    font-size: 2.2rem;
    font-weight: 700;
    letter-spacing: -0.5px;
    color: #000;
    margin: 0 0 0.1rem 0;
    padding-bottom: 0.2rem;
    border-bottom: 2px solid #222;
}

.terms-page .meta {
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

.terms-page .meta .date {
    font-weight: 400;
}

.terms-page .meta .brand {
    font-weight: 600;
    color: #000;
}

.terms-page h2 {
    font-size: 1.4rem;
    font-weight: 700;
    margin: 2rem 0 0.6rem 0;
    color: #000;
    border-left: 4px solid #888;
    padding-left: 0.9rem;
}

.terms-page h3 {
    font-size: 1.1rem;
    font-weight: 600;
    margin: 1.2rem 0 0.4rem 0;
    color: #000;
}

.terms-page p {
    margin: 0.6rem 0 1.1rem 0;
    color: #1a1a1a;
}

.terms-page ul {
    margin: 0.3rem 0 1.2rem 1.8rem;
    padding-left: 0.3rem;
}

.terms-page ul li {
    margin-bottom: 0.4rem;
    color: #1a1a1a;
}

.terms-page ul li strong {
    color: #000;
    font-weight: 600;
}

.terms-page a {
    color: #1a1a1a;
    text-decoration: underline;
    text-underline-offset: 2px;
    text-decoration-color: #aaa;
    transition: color 0.15s ease;
}

.terms-page a:hover {
    color: #000;
    text-decoration-color: #000;
}

/* Contact section */
.terms-page .contact-section {
    margin: 2.2rem 0 0.8rem 0;
    padding: 1.2rem 0 0.2rem 0;
    border-top: 1px solid #ddd;
}

.terms-page .contact-section .company-name {
    font-weight: 700;
    font-size: 1.15rem;
    margin-bottom: 0.3rem;
    color: #000;
}

.terms-page .contact-block {
    display: flex;
    flex-wrap: wrap;
    align-items: baseline;
    gap: 0.3rem 1.8rem;
    margin-top: 0.5rem;
    padding: 0.2rem 0;
    font-size: 1rem;
}

.terms-page .contact-block .address-line {
    display: block;
    width: 100%;
    margin-bottom: 0.2rem;
    color: #1a1a1a;
}

.terms-page .contact-block .label {
    font-weight: 600;
    margin-right: 0.2rem;
    color: #000;
}

.terms-page .contact-block span {
    display: inline-block;
}

/* Footer note */
.terms-page .footer-note {
    margin-top: 2.8rem;
    font-size: 0.85rem;
    color: #555;
    border-top: 1px solid #e0e0e0;
    padding-top: 1.2rem;
    text-align: center;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 640px) {
    .terms-page {
        padding: 1rem 0.8rem 2rem 0.8rem;
    }

    .terms-page h1 {
        font-size: 1.8rem;
    }

    .terms-page .meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.2rem;
        padding-bottom: 0.8rem;
    }

    .terms-page h2 {
        font-size: 1.25rem;
        padding-left: 0.7rem;
    }

    .terms-page ul {
        margin-left: 1.2rem;
    }

    .terms-page .contact-block {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.2rem;
    }

    .terms-page .contact-block .address-line {
        width: 100%;
    }
}

@media (max-width: 400px) {
    .terms-page h1 {
        font-size: 1.5rem;
    }
}
</style>

<div class="terms-page">

    <h1>Terms &amp; Conditions</h1>
    <div class="meta">
        <span class="date"><strong>Effective Date:</strong> July 30, 2021</span>
        <span class="brand">Shakespeare Publishing House</span>
    </div>

    <!-- Overview -->
    <h2>Overview</h2>
    <p>Use of this website and/or our services constitutes your agreement to the following Terms and Conditions. If you do not agree with any part of these terms, please do not use this website or engage our services.</p>
    <ul>
        <li>If you are under the legal age of consent in your jurisdiction, you may not access or use this website or our services without the involvement of a parent or legal guardian.</li>
        <li>You acknowledge and agree that you must be of legal age, or have the consent of a parent or guardian, to purchase any products or services offered on this website.</li>
        <li>By submitting an order and/or payment, you confirm that you have read and understood these Terms and Conditions and agree to be legally bound by them. These terms form the entire agreement between you and Shakespeare Publishing House.</li>
    </ul>

    <!-- Definition of Terms -->
    <h2>Definition of Terms</h2>
    <ul>
        <li><strong>“Website”:</strong> Refers to all content available on our domain and its pages.</li>
        <li><strong>“Customer,” “You,” “Your”:</strong> Refers to the individual or entity submitting an order to Shakespeare Publishing House, or any person submitting an order on their behalf.</li>
        <li><strong>“Company,” “We,” “Us,” “Our”:</strong> Refers to Shakespeare Publishing House.</li>
        <li><strong>“Services”:</strong> Refers to book publishing, book cover design, logo design, author websites, social media marketing, copyright registration assistance, press release, video book trailers, editing, illustration, and any other services offered by Shakespeare Publishing House.</li>
        <li><strong>“Order”:</strong> Refers to a request for services placed by the customer via phone, email, or our website, confirmed by a deposit or payment through an accepted method (credit/debit card, bank transfer, or other approved payment processor).</li>
    </ul>

    <!-- Our Services -->
    <h2>Our Services</h2>
    <p>Shakespeare Publishing House provides self-publishing support services for authors, including manuscript editing, custom illustration coordination, book formatting, cover design, ISBN registration assistance, logo and author website design, marketing, video trailers, press releases, and distribution support. It is your responsibility to read and understand these Terms and Conditions, including our Return and Refund Policy below, before submitting any order or payment.</p>

    <!-- Ownership and Rights -->
    <h2>Ownership and Rights</h2>
    <ul>
        <li>Authors retain ownership of the underlying story, manuscript, and text they provide to us, subject to any separate written agreement.</li>
        <li>Custom illustrations, cover designs, logos, and other creative deliverables become the property of the customer only upon full payment for the applicable service, unless otherwise stated in a signed agreement.</li>
        <li>Shakespeare Publishing House may showcase completed covers, designs, or published titles in its portfolio, marketing materials, or website for promotional purposes, unless the customer requests otherwise in writing.</li>
        <li>You represent that any content you submit to us (manuscript, images, likenesses, or other materials) is either your original work or that you hold the necessary rights and permissions to use it, and that it does not infringe on the rights of any third party.</li>
    </ul>

    <!-- Revisions -->
    <h2>Revisions</h2>
    <ul>
        <li><strong>Timeline:</strong> Revisions may be requested within 5–10 days after a deliverable is marked “Waiting for Customer Approval.”</li>
        <li><strong>Process:</strong> Customers should request revisions by contacting their assigned project representative via email.</li>
        <li><strong>Scope:</strong> A reasonable number of revisions are included as part of the agreed service package; additional revision rounds beyond what was quoted may incur extra charges.</li>
    </ul>

    <!-- Return Policy -->
    <h2>Return Policy</h2>
    <p>Due to the custom, made-to-order nature of our services, we do not accept returns on services that have been fully or partially delivered.</p>
    <ul>
        <li>If a deliverable requires adjustment to meet the agreed specifications (such as editing, formatting, or design corrections), our revision process is available to address those concerns.</li>
        <li>If a final deliverable does not meet the requirements specified in the original order, we will review the matter and either revise or recreate the deliverable at no additional cost, where appropriate.</li>
    </ul>

    <!-- Refund Policy -->
    <h2>Refund Policy</h2>
    <p>Refund requests are handled on a case-by-case basis. We aim to resolve concerns fairly and in good faith.</p>

    <h3>Refund Eligibility:</h3>
    <ul>
        <li><strong>Change of Mind:</strong> A change of mind after a project has commenced, or after services have been partially or fully delivered, does not qualify for a refund.</li>
        <li><strong>Unsatisfactory Delivery:</strong> If a completed deliverable does not meet the agreed project requirements, we will offer revisions to resolve the issue. If the matter cannot be resolved through revisions, a partial refund may be considered.</li>
        <li><strong>Delay Caused by Shakespeare Publishing House:</strong> If delivery is significantly delayed due to fault on our part, and after reasonable attempts to resolve the delay, a refund may be considered upon review.</li>
    </ul>

    <h3>Printed Books and Print Orders (Non-Refundable):</h3>
    <p>All print orders are final once approved for production. Because printed books are produced to your specific approved proof and quantity, we cannot offer refunds, cancellations, or changes after a print order is submitted to production. Customers are responsible for carefully reviewing all proofs, formatting, and quantities before giving final approval.</p>

    <h3>Refund Time Frame:</h3>
    <p>Refund requests must be submitted within 10 days of initial delivery or order submission, provided no revisions have already been used. Requests submitted after this period may not be considered.</p>

    <h3>Exclusions:</h3>
    <p>Refunds will not be issued for:</p>
    <ul>
        <li>Minor or subjective concerns (such as personal preference on style once specifications were met).</li>
        <li>Delays caused by the customer (e.g., late feedback, late approvals, or delayed content submission).</li>
        <li>Dissatisfaction with sales, marketing performance, or reader reception of a published book, which cannot be guaranteed.</li>
    </ul>

    <h3>Processing:</h3>
    <p>Approved refunds are processed within 5–15 business days to the original payment method and may be subject to a processing fee.</p>

    <!-- Modifications to Services and Pricing -->
    <h2>Modifications to Services and Pricing</h2>
    <ul>
        <li>Pricing, packages, and promotional discounts are subject to change without prior notice.</li>
        <li>We reserve the right to modify, update, or discontinue any part of our services or website content at any time.</li>
        <li>We are not liable for any modifications, price changes, or discontinuation of services, except as otherwise required by law.</li>
    </ul>

    <!-- Marketing and Sales Results -->
    <h2>Marketing and Sales Results</h2>
    <p>While we are committed to providing high-quality publishing, design, and marketing services, we do not and cannot guarantee specific sales figures, bestseller status, media placements, or reader engagement outcomes, as these depend on factors outside our control.</p>

    <!-- Limitation of Liability -->
    <h2>Limitation of Liability</h2>
    <p>To the fullest extent permitted by law, Shakespeare Publishing House shall not be liable for any indirect, incidental, or consequential damages arising from your use of our website or services, including but not limited to lost sales, lost opportunities, or reputational harm.</p>

    <!-- Third-Party Platforms -->
    <h2>Third-Party Platforms</h2>
    <p>Where we assist with publishing or distributing your book through third-party platforms (such as online retailers or print-on-demand services), your book will also be subject to those platforms’ own terms, policies, and content guidelines, which are outside our control.</p>

    <!-- Acceptance of Terms -->
    <h2>Acceptance of Terms</h2>
    <p>By using this website or engaging our services, you confirm your acceptance of these Terms and Conditions. If you do not agree to these terms, please refrain from using this website or our services.</p>

    <!-- Governing Law -->
    <h2>Governing Law</h2>
    <p>These Terms and Conditions are governed by and construed in accordance with the laws of the State of New York, without regard to conflict of law principles. Any disputes arising from these terms shall be subject to the exclusive jurisdiction of the courts located in New York County, New York.</p>

    <!-- Contact Information -->
    <h2>Contact Information</h2>
    <p>If you have questions, concerns, or need clarification about these Terms and Conditions or our services, please contact us:</p>

    <div class="contact-section">
        <div class="company-name">Shakespeare Publishing House</div>
        <div class="contact-block">
            <span class="address-line">Rockefeller Plaza, 14th Floor - Suite 1405, New York, NY, 10111, United States</span>
            <span><span class="label">Email:</span> <a href="mailto:info@shakespearepublishinghouse.com">info@shakespearepublishinghouse.com</a></span>
            <span><span class="label">Phone:</span> <a href="tel:+16462580616">+1 646 258 0616</a></span>
        </div>
    </div>

    <!-- simple footer -->
    <div class="footer-note">
        Shakespeare Publishing House · Terms &amp; Conditions
    </div>

</div>

<?php include __DIR__ . '/includes/layout/footer.php'; ?>