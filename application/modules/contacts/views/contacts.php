<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact MoveMantra Packers & Movers',
    'bc_desc' => 'Get in touch with our 24/7 customer support team for instant shifting quotes, branch location inquiries, or booking assistance.',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>

<!-- Main Page Content Section -->
<section class="cnt-page-section">
    <div class="container">
        <!-- Top Intro Header Card -->
        <div class="cnt-header-card">
            <span class="cnt-badge">
                <i class="bi bi-headset"></i> 24/7 Relocation Support Hub
            </span>
            <h1 class="cnt-title">
                Get In Touch With <span class="cnt-gradient-text"><?= !empty($company3) ? $company3 : 'MoveMantra Packers & Movers' ?></span>
            </h1>
            <p class="cnt-subtitle">
                Planning a move or need assistance? Fill out the quick form below for an instant shifting quote, or connect directly with our experts via phone or WhatsApp. We are available 24/7 across India!
            </p>
        </div>

        <div class="row g-4 align-items-stretch">
            <!-- Left Side: Interactive Contact Form Card -->
            <div class="col-lg-7">
                <div class="cnt-form-card">
                    <div class="cnt-card-header">
                        <div class="cnt-card-icon-box">
                            <i class="bi bi-chat-square-quote-fill"></i>
                        </div>
                        <div>
                            <h2 class="cnt-card-title">Send Us a Message</h2>
                            <p class="cnt-card-desc"><i class="bi bi-clock-history"></i> Instant Response • Free Moving Estimate</p>
                        </div>
                    </div>

                    <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label class="cnt-label">Your Full Name <span class="text-danger">*</span></label>
                                <div class="cnt-input-group">
                                    <div class="cnt-input-addon">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <input type="text" name="name" class="cnt-input-field" placeholder="e.g. Rahul Sharma" required>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <label class="cnt-label">Phone / Mobile Number <span class="text-danger">*</span></label>
                                <div class="cnt-input-group">
                                    <div class="cnt-input-addon">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <input type="tel" name="phone" class="cnt-input-field" placeholder="e.g. 9876543210" required>
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6">
                                <label class="cnt-label">Email Address</label>
                                <div class="cnt-input-group">
                                    <div class="cnt-input-addon">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <input type="email" name="email" class="cnt-input-field" placeholder="e.g. rahul@example.com">
                                </div>
                            </div>

                            <!-- Required Service -->
                            <div class="col-md-6">
                                <label class="cnt-label">Required Service</label>
                                <div class="cnt-input-group">
                                    <div class="cnt-input-addon">
                                        <i class="bi bi-truck-front-fill"></i>
                                    </div>
                                    <select name="service" class="cnt-input-field">
                                        <option value="Home Shifting">Household Shifting</option>
                                        <option value="Bike Transportation">Bike Transportation</option>
                                        <option value="Car Transportation">Car Transportation</option>
                                        <option value="Office Relocation">Office Relocation</option>
                                        <option value="Packing & Moving">Packing &amp; Moving</option>
                                        <option value="Loading & Unloading">Loading &amp; Unloading</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Message Requirements -->
                            <div class="col-12">
                                <label class="cnt-label">Your Shifting Message / Requirements</label>
                                <div class="cnt-input-group align-items-start">
                                    <div class="cnt-input-addon">
                                        <i class="bi bi-chat-left-text-fill"></i>
                                    </div>
                                    <textarea name="message" class="cnt-input-field" rows="4" placeholder="Tell us your pickup city, destination city, and preferred moving date..."></textarea>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mt-4">
                                <button type="submit" class="cnt-submit-btn">
                                    <i class="bi bi-send-fill"></i> Send Message &amp; Get Free Quote
                                </button>
                            </div>
                        </div>

                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>
            </div>

            <!-- Right Side: Contact Hub & Quick Reach Cards -->
            <div class="col-lg-5">
                <div class="cnt-info-wrapper">
                    <!-- Phone & Call Support Card -->
                    <div class="cnt-info-card">
                        <div class="cnt-info-item">
                            <div class="cnt-info-icon-box phone-bg">
                                <i class="bi bi-telephone-outbound-fill"></i>
                            </div>
                            <div class="cnt-info-content">
                                <h4>24/7 Helpline Support</h4>
                                <p>Call us anytime for instant booking or query resolution.</p>
                                <?php if (!empty($phone)): ?>
                                    <a href="<?=$phonehtml ?>" class="cnt-action-link">
                                        <i class="bi bi-telephone-fill"></i> <?= $phone ?>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($phone1)): ?>
                                    <br>
                                    <a href="<?=$phonehtml1 ?>" class="cnt-action-link">
                                        <i class="bi bi-telephone-fill"></i> <?= $phone1 ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp Quick Chat Card -->
                    <div class="cnt-info-card">
                        <div class="cnt-info-item">
                            <div class="cnt-info-icon-box whatsapp-bg">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <div class="cnt-info-content">
                                <h4>WhatsApp Instant Quote</h4>
                                <p>Get quick price estimates directly on WhatsApp.</p>
                                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="cnt-action-link text-success">
                                    <i class="bi bi-chat-dots-fill"></i> Chat on WhatsApp Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Corporate Office Location Card -->
                    <div class="cnt-info-card">
                        <div class="cnt-info-item">
                            <div class="cnt-info-icon-box location-bg">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="cnt-info-content">
                                <h4>Corporate Headquarters</h4>
                                <p>
                                    <?= str_replace(',', ', ', $address) ?>
                                </p>
                                <?php if(!empty($email)): ?>
                                <a href="<?= $emailhtml ?>" class="cnt-action-link mt-2">
                                    <i class="bi bi-envelope-at-fill"></i> <?= $email ?>
                                </a>
                                <?php endif; ?>
                            </div>  
                        </div>
                    </div>

                    <!-- MoveMantra Highlights Card -->
                    <div class="cnt-highlights-card">
                        <h3 class="cnt-hl-title">
                            <i class="bi bi-award-fill"></i> Why Move With Us?
                        </h3>
                        <ul class="cnt-hl-list">
                            <li class="cnt-hl-item">
                                <i class="bi bi-shield-check"></i> 100% Safe &amp; Insured Relocation
                            </li>
                            <li class="cnt-hl-item">
                                <i class="bi bi-clock-history"></i> On-Time Pickup &amp; Safe Express Delivery
                            </li>
                            <li class="cnt-hl-item">
                                <i class="bi bi-currency-rupee"></i> Transparent Pricing &amp; Zero Hidden Fees
                            </li>
                            <li class="cnt-hl-item">
                                <i class="bi bi-truck"></i> Containerized &amp; Weatherproof Vehicles
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Stats Bar -->
        <div class="cnt-trust-bar">
            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="cnt-trust-item">
                        <div class="cnt-trust-number"><?= $happyClients ?></div>
                        <p class="cnt-trust-label">Happy Clients</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="cnt-trust-item">
                        <div class="cnt-trust-number"><?= $citiesCovered ?></div>
                        <p class="cnt-trust-label">Cities Covered</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="cnt-trust-item">
                        <div class="cnt-trust-number"><?= $secureShifting ?></div>
                        <p class="cnt-trust-label">Safe Shifting</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="cnt-trust-item">
                        <div class="cnt-trust-number"><?= $ratingValue ?> ★</div>
                        <p class="cnt-trust-label">Customer Rating</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- All India Branch Locator Callout Card -->
        <div class="cnt-branch-locator-card">
            <div class="cnt-branch-info">
                <div class="cnt-branch-icon">
                    <i class="bi bi-map-fill"></i>
                </div>
                <div class="cnt-branch-text">
                    <h4>Need Local Branch Assistance?</h4>
                    <p>We operate across <?= $citiesCovered ?> cities in <?= $statesCovered ?> Indian states with local support hubs.</p>
                </div>
            </div>
            <a href="<?= site_url('our-branches') ?>" class="cnt-branch-btn">
                <i class="bi bi-pin-map-fill"></i> Explore All Branches <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>