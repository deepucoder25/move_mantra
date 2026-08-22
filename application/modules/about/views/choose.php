<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose ' . $company3,
    'bc_desc' => 'Discover why thousands of families and businesses trust ' . $company3 . ' for safe, affordable, transparent, and hassle-free relocation services across India.',
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]);
?>

<!-- Main Why Choose Us Section -->
<section class="chs-page-section">
    <div class="container">
        
        <!-- Hero Introduction Card -->
        <div class="chs-hero-card">
            <span class="chs-badge">
                <i class="bi bi-star-fill"></i> India's #1 Rated Relocation Specialist
            </span>
            <h1 class="chs-title">
                Why Choose <span class="chs-gradient-text"><?= $company3 ?></span> For Your Relocation?
            </h1>
            <p class="chs-subtitle">
                Moving your home or business should be an exciting fresh start, not a stressful ordeal. Discover the 8 core promises and modern logistics innovations that make <strong><?= $company3 ?></strong> the most trusted name in Indian packing and moving.
            </p>
            
            <div class="abt-pill-tags">
                <div class="abt-pill-item">
                    <i class="bi bi-shield-check"></i> 100% Safe Transit Guarantee
                </div>
                <div class="abt-pill-item">
                    <i class="bi bi-tag-fill"></i> Zero Hidden Costs
                </div>
                <div class="abt-pill-item">
                    <i class="bi bi-geo-fill"></i> GPS Live Tracking
                </div>
                <div class="abt-pill-item">
                    <i class="bi bi-award-fill"></i> ISO Certified Process
                </div>
            </div>
        </div>

        <!-- 8 Pillars Grid -->
        <div class="abt-sec-title-wrap">
            <span class="abt-sec-subtitle">8 Pillars Of Trust</span>
            <h2 class="abt-sec-title">What Sets Us Apart From Ordinary Movers</h2>
        </div>

        <div class="row g-4 mb-5">
            <!-- Pillar 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="chs-pillar-card">
                    <div class="chs-pillar-icon"><i class="bi bi-box-seam-fill"></i></div>
                    <h3 class="chs-pillar-title">3-Layer Smart Packing</h3>
                    <p class="chs-pillar-desc">Heavy corrugated boxes, virgin bubble wraps &amp; custom wooden crating to safeguard delicate items.</p>
                </div>
            </div>

            <!-- Pillar 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="chs-pillar-card">
                    <div class="chs-pillar-icon"><i class="bi bi-calculator-fill"></i></div>
                    <h3 class="chs-pillar-title">Zero Hidden Fees</h3>
                    <p class="chs-pillar-desc">100% fixed, transparent written quotes with no surprise toll or labor charges on delivery day.</p>
                </div>
            </div>

            <!-- Pillar 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="chs-pillar-card">
                    <div class="chs-pillar-icon"><i class="bi bi-truck-front-fill"></i></div>
                    <h3 class="chs-pillar-title">Weatherproof Fleet</h3>
                    <p class="chs-pillar-desc">Dedicated, sealed container vehicles equipped with hydraulic ramps and shock-absorbing belts.</p>
                </div>
            </div>

            <!-- Pillar 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="chs-pillar-card">
                    <div class="chs-pillar-icon"><i class="bi bi-person-badge-fill"></i></div>
                    <h3 class="chs-pillar-title">Trained In-House Crew</h3>
                    <p class="chs-pillar-desc">Background-checked, uniformed, and certified packing experts who treat your home with total respect.</p>
                </div>
            </div>

            <!-- Pillar 5 -->
            <div class="col-md-6 col-lg-3">
                <div class="chs-pillar-card">
                    <div class="chs-pillar-icon"><i class="bi bi-shield-lock-fill"></i></div>
                    <h3 class="chs-pillar-title">Transit Insurance</h3>
                    <p class="chs-pillar-desc">Comprehensive all-risk insurance protection for absolute peace of mind during long-distance movement.</p>
                </div>
            </div>

            <!-- Pillar 6 -->
            <div class="col-md-6 col-lg-3">
                <div class="chs-pillar-card">
                    <div class="chs-pillar-icon"><i class="bi bi-clock-history"></i></div>
                    <h3 class="chs-pillar-title">On-Time Express Delivery</h3>
                    <p class="chs-pillar-desc">Strict scheduling protocols ensuring your goods arrive on time at your new destination.</p>
                </div>
            </div>

            <!-- Pillar 7 -->
            <div class="col-md-6 col-lg-3">
                <div class="chs-pillar-card">
                    <div class="chs-pillar-icon"><i class="bi bi-headset"></i></div>
                    <h3 class="chs-pillar-title">Dedicated Move Manager</h3>
                    <p class="chs-pillar-desc">Single point of contact assisting you continuously from pre-move survey to final room placement.</p>
                </div>
            </div>

            <!-- Pillar 8 -->
            <div class="col-md-6 col-lg-3">
                <div class="chs-pillar-card">
                    <div class="chs-pillar-icon"><i class="bi bi-map-fill"></i></div>
                    <h3 class="chs-pillar-title">Pan-India Support</h3>
                    <p class="chs-pillar-desc">Over <?= !empty($citiesCovered) ? $citiesCovered : '500+' ?> city hubs ensuring doorstep service anywhere across India.</p>
                </div>
            </div>
        </div>

        <!-- Comparison Table: MoveMantra vs Unorganized Movers -->
        <div class="abt-sec-title-wrap">
            <span class="abt-sec-subtitle">Clear Comparison</span>
            <h2 class="abt-sec-title"><?= $company3 ?> vs Local Unorganized Movers</h2>
        </div>

        <div class="chs-compare-card">
            <div class="table-responsive">
                <table class="chs-compare-table">
                    <thead>
                        <tr>
                            <th>Relocation Feature</th>
                            <th class="brand-col text-center"><?= $company3 ?></th>
                            <th class="other-col text-center">Unorganized Local Movers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="feature-title">Packing Materials Quality</td>
                            <td class="brand-val"><i class="bi bi-check-circle-fill"></i> 3-Layer Bubble Wrap &amp; Corrugated Boxes</td>
                            <td class="other-val"><i class="bi bi-x-circle-fill"></i> Recycled Newsprint or No Wrap</td>
                        </tr>
                        <tr>
                            <td class="feature-title">Pricing &amp; Cost Transparency</td>
                            <td class="brand-val"><i class="bi bi-check-circle-fill"></i> 100% Fixed Written Estimate (Zero Hidden Fee)</td>
                            <td class="other-val"><i class="bi bi-x-circle-fill"></i> Surprise Demands &amp; Extra Labor Charges</td>
                        </tr>
                        <tr>
                            <td class="feature-title">Vehicle Safety &amp; Weather Protection</td>
                            <td class="brand-val"><i class="bi bi-check-circle-fill"></i> Enclosed Weatherproof GPS Containers</td>
                            <td class="other-val"><i class="bi bi-x-circle-fill"></i> Open Uncovered Flatbed Trucks</td>
                        </tr>
                        <tr>
                            <td class="feature-title">Consignment Tracking</td>
                            <td class="brand-val"><i class="bi bi-check-circle-fill"></i> Live GPS Consignment Tracking 24/7</td>
                            <td class="other-val"><i class="bi bi-x-circle-fill"></i> No Tracking &amp; Unresponsive Phones</td>
                        </tr>
                        <tr>
                            <td class="feature-title">Damage Risk &amp; Compensation</td>
                            <td class="brand-val"><i class="bi bi-check-circle-fill"></i> Comprehensive Transit Risk Insurance</td>
                            <td class="other-val"><i class="bi bi-x-circle-fill"></i> Zero Liability for Lost or Broken Goods</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Call to Action Card -->
        <div class="chs-cta-card">
            <h2 class="chs-cta-title">Experience a Zero-Stress Relocation</h2>
            <p class="chs-cta-desc mx-auto">
                Don't risk your precious household goods with unorganized movers. Trust <?= $company3 ?> for guaranteed safety, fixed prices, and on-time delivery.
            </p>
            <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                <button type="button" class="abt-cta-btn-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <i class="bi bi-calculator-fill"></i> Get Free Instant Quote
                </button>
                <a href="<?= $phonehtml ?>" class="abt-cta-btn-secondary">
                    <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                </a>
            </div>
        </div>

    </div>
</section>