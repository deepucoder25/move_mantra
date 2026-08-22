<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Reliable Bike & Two-Wheeler Transportation',
    'bc_desc' => 'Scratch-free motorcycle, scooter, and sports bike transport across India with heavy corrugated box wrapping, wooden crating, and door-to-door delivery.',
    'breadcrumbs' => [
        ['name' => 'Bike Transportation']
    ]
]);
?>

<!-- Main Bike Transportation Section -->
<section class="hmr-page-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Left Main Content Column -->
            <div class="col-lg-8">
                
                <!-- Hero Service Intro Card -->
                <div class="hmr-hero-card">
                    <span class="hmr-badge">
                        <i class="bi bi-bicycle"></i> #1 Rated Two-Wheeler Shipping Specialists
                    </span>
                    <h1 class="hmr-title">
                        Scratch-Free &amp; Doorstep <span class="hmr-gradient-text">Bike Transport</span>
                    </h1>
                    <p class="hmr-desc">
                        Moving your commuter motorcycle, electric scooter, Royal Enfield bullet, or high-performance superbike requires multi-layer bubble padding, mirror dismantling, and heavy corrugated sheet packaging. At <strong><?= $company3 ?></strong>, we provide safe, fully insured, doorstep bike relocation across <strong><?= $citiesCovered ?>+ cities</strong> nationwide. Enjoy guaranteed scratch-free arrival at budget-friendly rates.
                    </p>

                    <!-- Feature Pills Grid -->
                    <div class="abt-pill-tags">
                        <div class="abt-pill-item">
                            <i class="bi bi-box-seam-fill"></i> Multi-Layer Corrugated Box Packing
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-shield-check"></i> 100% Transit Damage Insurance
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-geo-alt-fill"></i> Live GPS Consignment Tracking
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-house-door-fill"></i> Door-to-Door Pickup &amp; Unpacking
                        </div>
                    </div>
                </div>

                <!-- 4 Relocation Service Categories Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-scooter"></i>
                            </div>
                            <h3 class="hmr-type-title">Scooter &amp; Moped Shipping</h3>
                            <p class="hmr-type-desc">
                                Safe transport for Activa, Jupiter, Vespa, and electric scooters with fiber body protective wrapping and front wheel lock chocks.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-bicycle"></i>
                            </div>
                            <h3 class="hmr-type-title">Commuter &amp; Executive Motorcycles</h3>
                            <p class="hmr-type-desc">
                                Complete packing and doorstep shipping for 100cc to 200cc motorcycles with mirror dismantling and silencer shielding.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-speedometer"></i>
                            </div>
                            <h3 class="hmr-type-title">Cruiser &amp; Heavy Royal Enfield Moving</h3>
                            <p class="hmr-type-desc">
                                Reinforced heavy-vehicle transport for Royal Enfield Classic, Himalayan, Avenger, and Java cruisers using heavy-duty belts.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </div>
                            <h3 class="hmr-type-title">Sports Bikes &amp; Electric (EV) Two-Wheelers</h3>
                            <p class="hmr-type-desc">
                                White-glove wooden crate packaging for Kawasaki, Ducati, BMW superbikes, and Ola / Ather electric scooters with battery safety.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 4-Stage Packaging Protocol Box -->
                <div class="hmr-packing-box">
                    <h2 class="hmr-sec-heading">
                        <i class="bi bi-shield-check"></i> Our 4-Layer Bike Protection Protocol
                    </h2>
                    
                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">STAGE 1</span>
                        <div>
                            <h4 class="hmr-layer-title">Fuel Draining &amp; Pre-Inspection</h4>
                            <p class="hmr-layer-desc">Fuel tank is safely drained to minimal reserve levels for fire safety, and existing scratch status is documented.</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">STAGE 2</span>
                        <div>
                            <h4 class="hmr-layer-title">Mirror Dismantling &amp; Handlebar Padding</h4>
                            <p class="hmr-layer-desc">Rear-view mirrors are safely unscrewed and packed separately. Handlebars, meters, and headlights receive thick bubble cushioning.</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">STAGE 3</span>
                        <div>
                            <h4 class="hmr-layer-title">Full-Body Heavy Corrugated Sheet Wrapping</h4>
                            <p class="hmr-layer-desc">The entire petrol tank, side panels, exhaust pipe, and mudguards are enclosed in heavy-duty 5-ply corrugated cardboard sheets.</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">STAGE 4</span>
                        <div>
                            <h4 class="hmr-layer-title">Container Truck Loading &amp; Belt Anchoring</h4>
                            <p class="hmr-layer-desc">The bike is loaded onto specialized container trucks, positioned upright, and secured with nylon ratchet tie-down straps.</p>
                        </div>
                    </div>
                </div>

                <!-- Rate Matrix Table -->
                <div class="hmr-table-card">
                    <h2 class="hmr-sec-heading">
                        <i class="bi bi-calculator-fill"></i> Estimated Bike Transportation Rate Matrix
                    </h2>
                    <table class="hmr-rate-table">
                        <thead>
                            <tr>
                                <th>Bike Category</th>
                                <th>Short Distance Move</th>
                                <th>Interstate Long Distance</th>
                                <th>Estimated Delivery</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Scooter / Moped (Activa, Jupiter)</strong></td>
                                <td>₹2,500 - ₹4,500</td>
                                <td>₹4,500 - ₹8,500</td>
                                <td>2 - 4 Days</td>
                            </tr>
                            <tr>
                                <td><strong>Commuter Bike (Splendor, Pulsar)</strong></td>
                                <td>₹3,000 - ₹5,000</td>
                                <td>₹5,500 - ₹9,500</td>
                                <td>2 - 4 Days</td>
                            </tr>
                            <tr>
                                <td><strong>Cruiser / Bullet (Royal Enfield)</strong></td>
                                <td>₹4,000 - ₹6,500</td>
                                <td>₹7,000 - ₹12,500</td>
                                <td>3 - 5 Days</td>
                            </tr>
                            <tr>
                                <td><strong>Sports Bike / Superbike (Crated)</strong></td>
                                <td>₹6,500 - ₹10,500</td>
                                <td>₹12,000 - ₹20,000</td>
                                <td>3 - 5 Days</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- 6-Step Process Grid -->
                <div class="abt-sec-title-wrap text-start mb-4">
                    <span class="abt-sec-subtitle">6-Step Workflow</span>
                    <h2 class="abt-sec-title">How Your Bike Relocation Works</h2>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">01</span>
                            <div class="abt-proc-icon"><i class="bi bi-calendar-event"></i></div>
                            <h4 class="abt-proc-title">Schedule Pickup</h4>
                            <p class="abt-proc-desc">Select convenient date and doorstep pickup location.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">02</span>
                            <div class="abt-proc-icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="abt-proc-title">Document &amp; Inspect</h4>
                            <p class="abt-proc-desc">RC copy, ID proof verified &amp; bike condition noted.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">03</span>
                            <div class="abt-proc-icon"><i class="bi bi-box-seam"></i></div>
                            <h4 class="abt-proc-title">4-Layer Wrapping</h4>
                            <p class="abt-proc-desc">Bubble wrap, corrugated sheets, and foam taping applied.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">04</span>
                            <div class="abt-proc-icon"><i class="bi bi-truck"></i></div>
                            <h4 class="abt-proc-title">Sealed Truck Transit</h4>
                            <p class="abt-proc-desc">Upright loading and belt anchoring inside container truck.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">05</span>
                            <div class="abt-proc-icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="abt-proc-title">Destination Hub</h4>
                            <p class="abt-proc-desc">Arrives at destination branch and prepared for final delivery.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">06</span>
                            <div class="abt-proc-icon"><i class="bi bi-house-check-fill"></i></div>
                            <h4 class="abt-proc-title">Doorstep Delivery</h4>
                            <p class="abt-proc-desc">Unpacked at destination, mirrors reattached, and handed over.</p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Banner -->
                <div class="chs-cta-card">
                    <h2 class="chs-cta-title">Want to Transport Your Bike Safely?</h2>
                    <p class="chs-cta-desc mx-auto">
                        Get an instant quote for doorstep bike shipping with guaranteed scratch-free 4-layer packaging.
                    </p>
                    <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                        <button type="button" class="abt-cta-btn-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator-fill"></i> Get Instant Bike Quote
                        </button>
                        <a href="<?= $phonehtml ?>" class="abt-cta-btn-secondary">
                            <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar Column -->
            <?php $this->load->view('services/service_sidebar', ['active' => 'bike-transportation']); ?>

        </div>
    </div>
</section>