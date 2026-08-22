<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy & Data Security',
    'bc_desc' => 'Learn how ' . $company3 . ' protects your personal information, booking details, and privacy with 100% data confidentiality.',
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
    ]
]);
?>

<!-- Main Privacy Policy Section -->
<section class="lgl-page-section">
    <div class="container">
        
        <!-- Hero Card -->
        <div class="lgl-hero-card">
            <span class="lgl-last-updated">
                <i class="bi bi-shield-lock-fill"></i> Data Confidentiality &amp; Privacy Standards
            </span>
            <h1 class="chs-title">
                Privacy Policy for <span class="chs-gradient-text"><?= $company3 ?></span>
            </h1>
            <p class="chs-subtitle">
                At <strong><?= $company3 ?></strong>, safeguarding your privacy and personal data is our utmost commitment. This Privacy Policy outlines how we collect, handle, protect, and utilize your personal information when booking our packing, moving, household shifting, and car transport services across India.
            </p>
        </div>

        <div class="row g-4">
            <!-- Sidebar Navigation / Table of Contents -->
            <div class="col-lg-3">
                <div class="lgl-toc-card">
                    <div class="lgl-toc-title"><i class="bi bi-list-nested me-2"></i>Table of Contents</div>
                    <ul class="lgl-toc-list">
                        <li><a href="#psec-1" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>1. Data We Collect</a></li>
                        <li><a href="#psec-2" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>2. How We Use Information</a></li>
                        <li><a href="#psec-3" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>3. Data Protection &amp; Security</a></li>
                        <li><a href="#psec-4" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>4. Sharing &amp; Third Parties</a></li>
                        <li><a href="#psec-5" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>5. Cookies &amp; Tracking</a></li>
                        <li><a href="#psec-6" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>6. Your Rights &amp; Choices</a></li>
                        <li><a href="#psec-7" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>7. Contact Privacy Team</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Legal Content -->
            <div class="col-lg-9">
                <div class="lgl-content-card">
                    
                    <!-- Section 1 -->
                    <div class="lgl-section" id="psec-1">
                        <h2 class="lgl-sec-title"><i class="bi bi-file-earmark-person-fill"></i> 1. Information We Collect</h2>
                        <p class="lgl-text">
                            To deliver seamless door-to-door relocation and vehicle transport, <?= $company3 ?> collects essential personal information directly provided by you during quote requests, phone inquiries, or online survey bookings:
                        </p>
                        <ul class="lgl-list">
                            <li><strong>Contact Details:</strong> Full name, mobile number, WhatsApp contact number, and email address.</li>
                            <li><strong>Relocation Details:</strong> Origin city, destination city, complete pickup address, floor levels, and destination drop address.</li>
                            <li><strong>Inventory Details:</strong> List of household goods, furniture items, electronics, and vehicle details (car/bike make and registration model).</li>
                            <li><strong>Billing &amp; Payment Data:</strong> Invoice details and payment confirmation tokens (processed securely via regulated gateway partners).</li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="lgl-section" id="psec-2">
                        <h2 class="lgl-sec-title"><i class="bi bi-gear-fill"></i> 2. How We Use Your Information</h2>
                        <p class="lgl-text">
                            Your personal data is strictly used for fulfilling relocation requests, improving service quality, and ensuring smooth customer communication:
                        </p>
                        <ul class="lgl-list">
                            <li>Generating instant moving quotes, pre-move survey schedules, and consignment invoices.</li>
                            <li>Dispatching trained packing crews and assigning dedicated Move Coordinators to your shipment.</li>
                            <li>Sending real-time SMS, WhatsApp, and email alerts regarding live GPS vehicle tracking and consignment status.</li>
                            <li>Filing transit insurance documentation with authorized underwriting partners to secure your goods.</li>
                        </ul>
                        
                        <div class="lgl-alert-box">
                            <i class="bi bi-shield-check"></i> <strong>Zero Data Selling Commitment:</strong> <?= $company3 ?> never sells, rents, or trades your phone number, address, or personal data to unauthorized third-party telemarketers or ad networks.
                        </div>
                    </div>

                    <!-- Section 3 -->
                    <div class="lgl-section" id="psec-3">
                        <h2 class="lgl-sec-title"><i class="bi bi-lock-fill"></i> 3. Data Protection &amp; Security Standards</h2>
                        <p class="lgl-text">
                            We deploy robust technical, administrative, and physical safeguards to protect your personal information against unauthorized access, loss, or misuse:
                        </p>
                        <ul class="lgl-list">
                            <li><strong>SSL Encryption:</strong> All data transmitted through our web portal is encrypted using standard 256-bit SSL protocols.</li>
                            <li><strong>Access Control:</strong> Access to customer addresses and contact information is strictly limited to authorized logistics operations staff assigned to your specific move.</li>
                            <li><strong>Secure Servers:</strong> Our database is hosted on secure, firewall-protected cloud servers with regular security patches.</li>
                        </ul>
                    </div>

                    <!-- Section 4 -->
                    <div class="lgl-section" id="psec-4">
                        <h2 class="lgl-sec-title"><i class="bi bi-share-fill"></i> 4. Information Sharing &amp; Third Parties</h2>
                        <p class="lgl-text">
                            We may share limited relevant details only with vetted operational partners strictly necessary for executing your move:
                        </p>
                        <ul class="lgl-list">
                            <li><strong>Transit Insurance Underwriters:</strong> For processing all-risk insurance certificates for your household goods.</li>
                            <li><strong>Official SMS &amp; GPS Gateways:</strong> For sending automated dispatch notifications and live tracking coordinates.</li>
                            <li><strong>Legal Compliance:</strong> If required by Indian law enforcement agencies or court orders under applicable statutes.</li>
                        </ul>
                    </div>

                    <!-- Section 5 -->
                    <div class="lgl-section" id="psec-5">
                        <h2 class="lgl-sec-title"><i class="bi bi-cookie"></i> 5. Cookies &amp; Web Analytics</h2>
                        <p class="lgl-text">
                            Our website utilizes cookies and anonymous analytics to enhance site navigation, measure page load performance, and remember your city selection preferences. You can disable cookies through your web browser settings at any time without restricting access to our main relocation information.
                        </p>
                    </div>

                    <!-- Section 6 -->
                    <div class="lgl-section" id="psec-6">
                        <h2 class="lgl-sec-title"><i class="bi bi-person-check-fill"></i> 6. Your Rights &amp; Data Control</h2>
                        <p class="lgl-text">
                            You maintain full control over your personal data submitted to <?= $company3 ?>:
                        </p>
                        <ul class="lgl-list">
                            <li>You can request a copy of the personal details stored in our booking system.</li>
                            <li>You can request corrections to updated phone numbers, addresses, or consignment item lists.</li>
                            <li>You can request total deletion of your inquiry record after your relocation is completed.</li>
                        </ul>
                    </div>

                    <!-- Section 7 -->
                    <div class="lgl-section" id="psec-7">
                        <h2 class="lgl-sec-title"><i class="bi bi-envelope-check-fill"></i> 7. Contact Privacy Team</h2>
                        <p class="lgl-text">
                            If you have any questions, concerns, or data requests regarding this Privacy Policy, please contact our dedicated Privacy Officer:
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3 mt-3">
                            <a href="<?= $emailhtml ?>" class="cnt-branch-btn text-center justify-content-center">
                                <i class="bi bi-envelope-fill"></i> Email: <?= $email ?>
                            </a>
                            <a href="<?= $phonehtml ?>" class="cnt-branch-btn abt-contact-btn text-center justify-content-center">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>