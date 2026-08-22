<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About ' . $company3,
    'bc_desc' => 'India\'s leading ISO-certified packing and moving company providing trusted household shifting, office relocation, and vehicle transport with 100% safety guarantee.',
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]);
?>

<!-- Main About Section -->
<section class="abt-page-section">
    <div class="container">
        
        <!-- Hero Introduction Card -->
        <div class="abt-hero-card">
            <span class="abt-badge">
                <i class="bi bi-award-fill"></i> ISO 9001:2015 Certified Relocation Enterprise
            </span>
            <h1 class="abt-title">
                India's Most Trusted Packers &amp; Movers - <span class="abt-gradient-text"><?= $company3 ?></span>
            </h1>
            <p class="abt-lead-desc">
                Welcome to <strong><?= $company3 ?></strong>, your ultimate partner in safe, affordable, and seamless relocation across India. Established in <?= $startYear ?>, we have spent over <strong><?= $experience ?> years</strong> redefining standards in household packing and moving, corporate office shifting, car shipping, and bike carrier transportation.
            </p>
            <p class="abt-lead-desc">
                With a nationwide footprint connecting <strong><?= $citiesCovered ?> cities</strong> across <strong><?= $statesCovered ?> states</strong>, our team of <?= $proMovers ?> trained logistics professionals and containerized weatherproof vehicles ensure that every move is executed with precision, speed, and zero damage.
            </p>
            
            <div class="abt-pill-tags">
                <div class="abt-pill-item">
                    <i class="bi bi-shield-check"></i> 100% Safe &amp; Insured Transit
                </div>
                <div class="abt-pill-item">
                    <i class="bi bi-geo-alt-fill"></i> <?= $citiesCovered ?> City Hubs
                </div>
                <div class="abt-pill-item">
                    <i class="bi bi-clock-history"></i> 24/7 Live Consignment Tracking
                </div>
                <div class="abt-pill-item">
                    <i class="bi bi-currency-rupee"></i> Zero Hidden Charges Guarantee
                </div>
            </div>
        </div>

        <!-- Dynamic Key Achievements Grid -->
        <div class="row g-3 mb-5">
            <div class="col-6 col-lg-3">
                <div class="abt-stats-card">
                    <div class="abt-stats-number"><?= $happyClients ?></div>
                    <p class="abt-stats-label">Happy Families Moved</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="abt-stats-card">
                    <div class="abt-stats-number"><?= $experience ?> Years</div>
                    <p class="abt-stats-label">Industry Leadership</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="abt-stats-card">
                    <div class="abt-stats-number"><?= $citiesCovered ?></div>
                    <p class="abt-stats-label">Active City Networks</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="abt-stats-card">
                    <div class="abt-stats-number"><?= $satisfactionRate ?></div>
                    <p class="abt-stats-label">Client Satisfaction</p>
                </div>
            </div>
        </div>

        <!-- Mission, Vision & Core Values Section -->
        <div class="abt-sec-title-wrap">
            <span class="abt-sec-subtitle">Our Corporate Ethos</span>
            <h2 class="abt-sec-title">What Drives <?= $company3 ?> Forward</h2>
        </div>

        <div class="row g-4 mb-5">
            <!-- Mission -->
            <div class="col-lg-4">
                <div class="abt-value-card">
                    <div class="abt-value-icon">
                        <i class="bi bi-compass-fill"></i>
                    </div>
                    <h3 class="abt-value-title">Our Mission</h3>
                    <p class="abt-value-desc">
                        To provide every Indian household and enterprise with stress-free, 100% secure, and transparent relocation services using premium multi-layer packing materials and trained personnel.
                    </p>
                </div>
            </div>

            <!-- Vision -->
            <div class="col-lg-4">
                <div class="abt-value-card">
                    <div class="abt-value-icon">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                    <h3 class="abt-value-title">Our Vision</h3>
                    <p class="abt-value-desc">
                        To build India's most tech-enabled and customer-centric packing and moving ecosystem, backed by real-time GPS tracking, enclosed car carriers, and seamless digital booking.
                    </p>
                </div>
            </div>

            <!-- Core Values -->
            <div class="col-lg-4">
                <div class="abt-value-card">
                    <div class="abt-value-icon">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h3 class="abt-value-title">Our Core Values</h3>
                    <p class="abt-value-desc">
                        Uncompromising integrity, zero hidden costs, punctuality, empathetic customer support, and treats your valuable belongings with the exact same care as our own.
                    </p>
                </div>
            </div>
        </div>

        <!-- 6-Step Perfection Workflow -->
        <div class="abt-sec-title-wrap">
            <span class="abt-sec-subtitle">Step-By-Step Process</span>
            <h2 class="abt-sec-title">How We Guarantee a Zero-Stress Move</h2>
        </div>

        <div class="row g-3 mb-5">
            <div class="col-md-4 col-lg-2 col-6">
                <div class="abt-proc-card">
                    <span class="abt-proc-num">01</span>
                    <div class="abt-proc-icon"><i class="bi bi-clipboard-check-fill"></i></div>
                    <h4 class="abt-proc-title">Free Survey</h4>
                    <p class="abt-proc-desc">Virtual or on-site inventory check &amp; instant transparent quote.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 col-6">
                <div class="abt-proc-card">
                    <span class="abt-proc-num">02</span>
                    <div class="abt-proc-icon"><i class="bi bi-box-seam-fill"></i></div>
                    <h4 class="abt-proc-title">Pro Packing</h4>
                    <p class="abt-proc-desc">3-Layer bubble wrap, corrugated sheets &amp; crating for fragile items.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 col-6">
                <div class="abt-proc-card">
                    <span class="abt-proc-num">03</span>
                    <div class="abt-proc-icon"><i class="bi bi-truck-front-fill"></i></div>
                    <h4 class="abt-proc-title">Safe Loading</h4>
                    <p class="abt-proc-desc">Expert crew using hydraulic ramps, belts &amp; padded ropes.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 col-6">
                <div class="abt-proc-card">
                    <span class="abt-proc-num">04</span>
                    <div class="abt-proc-icon"><i class="bi bi-map-fill"></i></div>
                    <h4 class="abt-proc-title">GPS Transit</h4>
                    <p class="abt-proc-desc">Weatherproof container trucks with live tracking updates.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 col-6">
                <div class="abt-proc-card">
                    <span class="abt-proc-num">05</span>
                    <div class="abt-proc-icon"><i class="bi bi-house-door-fill"></i></div>
                    <h4 class="abt-proc-title">Unloading</h4>
                    <p class="abt-proc-desc">Doorstep unloading and room-by-room placement at target destination.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 col-6">
                <div class="abt-proc-card">
                    <span class="abt-proc-num">06</span>
                    <div class="abt-proc-icon"><i class="bi bi-check-circle-fill"></i></div>
                    <h4 class="abt-proc-title">Handover</h4>
                    <p class="abt-proc-desc">Complete unpacking, furniture reassembly &amp; client signoff.</p>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Features Grid -->
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="pe-lg-4">
                    <span class="abt-sec-subtitle">The MoveMantra Edge</span>
                    <h2 class="abt-sec-title mb-4">Why Thousands Trust Us for Nationwide Moving</h2>
                    
                    <div class="abt-feature-card">
                        <div class="abt-feature-icon"><i class="bi bi-shield-lock-fill"></i></div>
                        <div class="abt-feature-info">
                            <h4>Comprehensive Transit Insurance</h4>
                            <p>Full-value transit insurance coverage safeguarding your household furniture, electronics, and vehicles against unexpected events.</p>
                        </div>
                    </div>

                    <div class="abt-feature-card">
                        <div class="abt-feature-icon"><i class="bi bi-person-workspace"></i></div>
                        <div class="abt-feature-info">
                            <h4>Dedicated Move Coordinator</h4>
                            <p>Single point of contact from initial quote generation until final unloading, keeping you informed at every step.</p>
                        </div>
                    </div>

                    <div class="abt-feature-card">
                        <div class="abt-feature-icon"><i class="bi bi-truck"></i></div>
                        <div class="abt-feature-info">
                            <h4>Specialized Vehicle Carriers</h4>
                            <p>Dedicated hydraulic car trailers and scratch-resistant bike containers for safe long-distance vehicle relocation.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="abt-hero-card abt-estimate-card p-4 p-md-5">
                    <div class="abt-badge">
                        <i class="bi bi-headset"></i> 24/7 Helpline &amp; Booking
                    </div>
                    <h3 class="abt-title fs-3 mb-3">Looking for a Fast Shifting Estimate?</h3>
                    <p class="abt-lead-desc fs-6 mb-4">
                        Speak directly with our moving consultants or drop a query. Get instant prices with zero obligation!
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <a href="<?= $phonehtml ?>" class="cnt-branch-btn text-center justify-content-center">
                            <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                        </a>
                        <a href="<?= site_url('contact-us') ?>" class="cnt-branch-btn abt-contact-btn text-center justify-content-center">
                            <i class="bi bi-envelope-fill"></i> Contact Page <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Banner -->
        <div class="abt-cta-card text-center">
            <h2 class="abt-cta-title">Ready for a Smooth &amp; Safe Relocation?</h2>
            <p class="abt-cta-desc mx-auto">
                Get a customized, non-binding quote tailored to your exact pickup location, items, and moving date. Experience seamless moving with <?= $company3 ?>!
            </p>
            <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                <button type="button" class="abt-cta-btn-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <i class="bi bi-calculator-fill"></i> Get Free Moving Quote
                </button>
                <a href="<?= site_url('our-branches') ?>" class="abt-cta-btn-secondary">
                    <i class="bi bi-geo-alt-fill"></i> Find Nearest Branch
                </a>
            </div>
        </div>
    </div>
</section>