<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Household Shifting & Home Relocation Services',
    'bc_desc' => 'Professional, stress-free household shifting services with multi-layer protective packing, trained movers, and safe GPS-tracked doorstep transit across India.',
    'breadcrumbs' => [
        ['name' => 'Home Relocation']
    ]
]);
?>

<!-- Main Home Relocation Section -->
<section class="hmr-page-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Left Main Content Column -->
            <div class="col-lg-8">
                
                <!-- Hero Service Intro Card -->
                <div class="hmr-hero-card">
                    <span class="hmr-badge">
                        <i class="bi bi-house-heart-fill"></i> #1 Rated Household Relocation Specialists
                    </span>
                    <h1 class="hmr-title">
                        Stress-Free &amp; Zero-Damage <span class="hmr-gradient-text">Home Shifting</span>
                    </h1>
                    <p class="hmr-desc">
                        Relocating your home is more than just moving furniture; it is shifting your memories, valuables, and peace of mind. At <strong><?= $company3 ?></strong>, we deliver end-to-end household relocation services tailored to your needs. From careful 4-layer bubble packing of fragile items to door-to-door transport and room-by-room reassembly, our certified logistics team ensures a seamless experience across <strong><?= $citiesCovered ?>+ cities</strong> nationwide.
                    </p>

                    <!-- Feature Pills Grid -->
                    <div class="abt-pill-tags">
                        <div class="abt-pill-item">
                            <i class="bi bi-box-seam-fill"></i> 4-Layer Bubble &amp; Foam Packing
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-shield-check"></i> 100% Transit Insurance Coverage
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-geo-fill"></i> Live GPS Consignment Tracking
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-person-badge-fill"></i> Dedicated Move Coordinator
                        </div>
                    </div>
                </div>

                <!-- 4 Relocation Service Categories Grid -->
                <div class="row g-3 mb-4">
                    <!-- Local Shifting -->
                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h3 class="hmr-type-title">Local City House Shifting</h3>
                            <p class="hmr-type-desc">
                                Same-day intra-city home shifting for 1BHK, 2BHK, 3BHK flats and villas with complete packing, loading, unloading, and furniture reassembly.
                            </p>
                        </div>
                    </div>

                    <!-- Intercity Domestic Shifting -->
                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-truck"></i>
                            </div>
                            <h3 class="hmr-type-title">Interstate Domestic Shifting</h3>
                            <p class="hmr-type-desc">
                                Doorstep long-distance household relocation across India using weatherproof enclosed container trucks with real-time GPS tracking.
                            </p>
                        </div>
                    </div>

                    <!-- Complete Villa & Penthouse Shifting -->
                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-house-door"></i>
                            </div>
                            <h3 class="hmr-type-title">Villa &amp; Luxury Home Moving</h3>
                            <p class="hmr-type-desc">
                                Premium white-glove relocation for large independent houses, antique furniture, pianos, paintings, and heavy marble items.
                            </p>
                        </div>
                    </div>

                    <!-- Partial / Dedicated Truck Moving -->
                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-box2-heart"></i>
                            </div>
                            <h3 class="hmr-type-title">Single Item &amp; Part Load Moving</h3>
                            <p class="hmr-type-desc">
                                Budget-friendly shared container options for luggage, select furniture pieces, or single-room house moves.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Multi-Layer Protective Packing Standards -->
                <div class="hmr-packing-box">
                    <h2 class="hmr-sec-heading">
                        <i class="bi bi-layers-fill"></i> Our 4-Layer Scientific Packing Protocol
                    </h2>
                    
                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">LAYER 1</span>
                        <div>
                            <h4 class="hmr-layer-title">Stretch Film &amp; Moisture Barrier</h4>
                            <p class="hmr-layer-desc">Protects wooden furniture and fabric sofas against dust, rain, moisture, and transit scratches.</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">LAYER 2</span>
                        <div>
                            <h4 class="hmr-layer-title">Heavy-Duty Bubble Cushioning</h4>
                            <p class="hmr-layer-desc">Shock-absorbent high-density bubble wrap wrapped around TVs, refrigerators, glass tables, and electronics.</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">LAYER 3</span>
                        <div>
                            <h4 class="hmr-layer-title">Corrugated Fiberboard Sheets &amp; Corner Guards</h4>
                            <p class="hmr-layer-desc">Reinforced edge protectors for wardrobes, dining tables, and delicate wooden corners during stair handling.</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">LAYER 4</span>
                        <div>
                            <h4 class="hmr-layer-title">Custom Wooden Crating (Optional for Fragile Items)</h4>
                            <p class="hmr-layer-desc">Sturdy wooden crates built on-demand for crockery, glass showcases, chandeliers, and high-value artwork.</p>
                        </div>
                    </div>
                </div>

                <!-- Rate Estimator Matrix Table -->
                <div class="hmr-table-card">
                    <h2 class="hmr-sec-heading">
                        <i class="bi bi-calculator-fill"></i> Estimated Household Shifting Rate Matrix
                    </h2>
                    <table class="hmr-rate-table">
                        <thead>
                            <tr>
                                <th>House Type</th>
                                <th>Local Moving Rate</th>
                                <th>Intercity Moving Rate</th>
                                <th>Estimated Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1 BHK Flat</strong></td>
                                <td>₹3,500 - ₹6,500</td>
                                <td>₹8,500 - ₹16,000</td>
                                <td>1 Day / 2-3 Days</td>
                            </tr>
                            <tr>
                                <td><strong>2 BHK Apartment</strong></td>
                                <td>₹5,500 - ₹10,500</td>
                                <td>₹14,000 - ₹24,000</td>
                                <td>1 Day / 3-4 Days</td>
                            </tr>
                            <tr>
                                <td><strong>3 BHK Apartment</strong></td>
                                <td>₹8,500 - ₹15,000</td>
                                <td>₹20,000 - ₹34,000</td>
                                <td>1-2 Days / 3-5 Days</td>
                            </tr>
                            <tr>
                                <td><strong>4 BHK / Independent Villa</strong></td>
                                <td>₹14,000 - ₹25,000</td>
                                <td>₹28,000 - ₹48,000</td>
                                <td>2 Days / 4-6 Days</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- 6-Step Shifting Process Grid -->
                <div class="abt-sec-title-wrap text-start mb-4">
                    <span class="abt-sec-subtitle">6-Step Workflow</span>
                    <h2 class="abt-sec-title">How Your Home Move Works</h2>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">01</span>
                            <div class="abt-proc-icon"><i class="bi bi-clipboard-check"></i></div>
                            <h4 class="abt-proc-title">Free Pre-Move Survey</h4>
                            <p class="abt-proc-desc">Virtual or doorstep inventory audit to provide exact quotation.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">02</span>
                            <div class="abt-proc-icon"><i class="bi bi-box-seam"></i></div>
                            <h4 class="abt-proc-title">Multi-Layer Packing</h4>
                            <p class="abt-proc-desc">Movers pack items with bubble wrap, corrugated sheets, and label boxes.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">03</span>
                            <div class="abt-proc-icon"><i class="bi bi-arrow-up-circle"></i></div>
                            <h4 class="abt-proc-title">Safe Loading</h4>
                            <p class="abt-proc-desc">Hydraulic ramps and heavy belts used to load furniture carefully.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">04</span>
                            <div class="abt-proc-icon"><i class="bi bi-truck"></i></div>
                            <h4 class="abt-proc-title">GPS Tracked Transit</h4>
                            <p class="abt-proc-desc">Containerized trucks with 24/7 live location tracking.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">05</span>
                            <div class="abt-proc-icon"><i class="bi bi-arrow-down-circle"></i></div>
                            <h4 class="abt-proc-title">Unloading &amp; Placement</h4>
                            <p class="abt-proc-desc">Goods unloaded and placed into designated rooms at destination.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">06</span>
                            <div class="abt-proc-icon"><i class="bi bi-tools"></i></div>
                            <h4 class="abt-proc-title">Unpacking &amp; Reassembly</h4>
                            <p class="abt-proc-desc">Beds, wardrobes, and electronics reassembled for immediate use.</p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Banner -->
                <div class="chs-cta-card">
                    <h2 class="chs-cta-title">Planning to Shift Your Home Soon?</h2>
                    <p class="chs-cta-desc mx-auto">
                        Get a instant transparent shifting quote with zero hidden charges. Our move managers are ready to assist you!
                    </p>
                    <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                        <button type="button" class="abt-cta-btn-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator-fill"></i> Get Instant Home Quote
                        </button>
                        <a href="<?= $phonehtml ?>" class="abt-cta-btn-secondary">
                            <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar Column -->
            <?php $this->load->view('services/service_sidebar', ['active' => 'home-shifting']); ?>

        </div>
    </div>
</section>

