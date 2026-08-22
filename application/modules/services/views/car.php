<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Safe Car Transportation & Enclosed Vehicle Carrier',
    'bc_desc' => 'Hassle-free, door-to-door car shipping across India using multi-car enclosed hydraulic carriers with real-time GPS tracking and zero-scratch guarantee.',
    'breadcrumbs' => [
        ['name' => 'Car Transportation']
    ]
]);
?>

<!-- Main Car Transportation Section -->
<section class="hmr-page-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Left Main Content Column -->
            <div class="col-lg-8">
                
                <!-- Hero Service Intro Card -->
                <div class="hmr-hero-card">
                    <span class="hmr-badge">
                        <i class="bi bi-car-front-fill"></i> #1 Rated Nationwide Car Shipping Specialists
                    </span>
                    <h1 class="hmr-title">
                        Scratch-Free &amp; Door-to-Door <span class="hmr-gradient-text">Car Transportation</span>
                    </h1>
                    <p class="hmr-desc">
                        Shipping your prized hatchback, sedan, luxury SUV, or electric car requires specialized enclosed car trailers, hydraulic ramps, and professional wheel-locking tie-downs. At <strong><?= $company3 ?></strong>, we provide safe, fully insured, door-to-door vehicle shipping across <strong><?= $citiesCovered ?>+ cities</strong> nationwide. Experience 100% scratch-free transit backed by live GPS tracking.
                    </p>

                    <!-- Feature Pills Grid -->
                    <div class="abt-pill-tags">
                        <div class="abt-pill-item">
                            <i class="bi bi-shield-shaded"></i> Enclosed Weatherproof Trailers
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-geo-alt-fill"></i> 24/7 Real-Time GPS Tracking
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-file-earmark-check-fill"></i> Full Transit Insurance Policy
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-door-open-fill"></i> Doorstep Pickup &amp; Delivery
                        </div>
                    </div>
                </div>

                <!-- 4 Relocation Service Categories Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-truck-front"></i>
                            </div>
                            <h3 class="hmr-type-title">Enclosed Multi-Car Carrier</h3>
                            <p class="hmr-type-desc">
                                Sealed multi-deck car trailers protecting your vehicle from rain, dust, flying stone chips, and harsh weather conditions during interstate transit.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-speedometer2"></i>
                            </div>
                            <h3 class="hmr-type-title">Dedicated Single Flatbed Towing</h3>
                            <p class="hmr-type-desc">
                                Express single-car hydraulic flatbed transport for urgent moves, non-running vehicles, or luxury sports cars with zero driving mileage added.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-gem"></i>
                            </div>
                            <h3 class="hmr-type-title">Luxury &amp; Vintage White-Glove Moving</h3>
                            <p class="hmr-type-desc">
                                Custom soft fabric car covers, wheel rim protectors, air-suspension transit, and VIP handling for high-end luxury sedans and vintage cars.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-ev-station-fill"></i>
                            </div>
                            <h3 class="hmr-type-title">Electric Vehicle (EV) Shipping</h3>
                            <p class="hmr-type-desc">
                                Specialized EV carrier protocol with temperature-controlled monitoring, battery safety checks, and flatbed loading for electric SUVs.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 4-Stage Vehicle Protection Protocol Box -->
                <div class="hmr-packing-box">
                    <h2 class="hmr-sec-heading">
                        <i class="bi bi-shield-check"></i> Our 4-Stage Vehicle Safety Protocol
                    </h2>
                    
                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">STAGE 1</span>
                        <div>
                            <h4 class="hmr-layer-title">360-Degree Pre-Loading Inspection</h4>
                            <p class="hmr-layer-desc">Before loading, our manager conducts a joint inspection, recording odometer reading, fuel level, and existing condition report with photos.</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">STAGE 2</span>
                        <div>
                            <h4 class="hmr-layer-title">Hydraulic Ramp Loading &amp; Soft Wheel Strapping</h4>
                            <p class="hmr-layer-desc">Vehicles are driven onto hydraulic ramps at low speed and secured using heavy-duty nylon wheel-clamp belts (no body hooks).</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">STAGE 3</span>
                        <div>
                            <h4 class="hmr-layer-title">Enclosed Weatherproof Sealed Transit</h4>
                            <p class="hmr-layer-desc">The container doors are locked and sealed with tamper-proof security tags. Live GPS link sent directly to your phone.</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">STAGE 4</span>
                        <div>
                            <h4 class="hmr-layer-title">Doorstep Unloading &amp; Handover</h4>
                            <p class="hmr-layer-desc">The car is safely unloaded at your new address, checked against the origin inspection report, and handed over cleanly.</p>
                        </div>
                    </div>
                </div>

                <!-- Rate Matrix Table -->
                <div class="hmr-table-card">
                    <h2 class="hmr-sec-heading">
                        <i class="bi bi-calculator-fill"></i> Estimated Car Transportation Rate Matrix
                    </h2>
                    <table class="hmr-rate-table">
                        <thead>
                            <tr>
                                <th>Vehicle Segment</th>
                                <th>Local / Nearby Moving</th>
                                <th>Long Interstate Moving</th>
                                <th>Estimated Transit Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Hatchback (Alto, Swift, i20)</strong></td>
                                <td>₹6,500 - ₹11,500</td>
                                <td>₹12,000 - ₹20,000</td>
                                <td>2 - 4 Days</td>
                            </tr>
                            <tr>
                                <td><strong>Sedan (City, Verna, Ciaz)</strong></td>
                                <td>₹8,000 - ₹13,500</td>
                                <td>₹14,500 - ₹24,000</td>
                                <td>3 - 5 Days</td>
                            </tr>
                            <tr>
                                <td><strong>Compact / Mid SUV (Creta, Nexon, Thar)</strong></td>
                                <td>₹9,500 - ₹15,500</td>
                                <td>₹16,500 - ₹27,000</td>
                                <td>3 - 5 Days</td>
                            </tr>
                            <tr>
                                <td><strong>Luxury SUV / MUV (Fortuner, BMW, Merc)</strong></td>
                                <td>₹12,000 - ₹19,000</td>
                                <td>₹20,000 - ₹34,000</td>
                                <td>3 - 6 Days</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- 6-Step Process Grid -->
                <div class="abt-sec-title-wrap text-start mb-4">
                    <span class="abt-sec-subtitle">6-Step Workflow</span>
                    <h2 class="abt-sec-title">How Your Car Transportation Works</h2>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">01</span>
                            <div class="abt-proc-icon"><i class="bi bi-telephone-outbound"></i></div>
                            <h4 class="abt-proc-title">Quote &amp; Booking</h4>
                            <p class="abt-proc-desc">Select vehicle type, route, and schedule your pickup date.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">02</span>
                            <div class="abt-proc-icon"><i class="bi bi-clipboard-check"></i></div>
                            <h4 class="abt-proc-title">Joint Inspection</h4>
                            <p class="abt-proc-desc">Car condition report &amp; odometer reading documented.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">03</span>
                            <div class="abt-proc-icon"><i class="bi bi-truck"></i></div>
                            <h4 class="abt-proc-title">Ramp Loading</h4>
                            <p class="abt-proc-desc">Driven onto enclosed container carrier &amp; wheel-belt locked.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">04</span>
                            <div class="abt-proc-icon"><i class="bi bi-geo-fill"></i></div>
                            <h4 class="abt-proc-title">Live GPS Transit</h4>
                            <p class="abt-proc-desc">Track trailer movement 24/7 on your mobile device.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">05</span>
                            <div class="abt-proc-icon"><i class="bi bi-box-arrow-down"></i></div>
                            <h4 class="abt-proc-title">Destination Ramp Down</h4>
                            <p class="abt-proc-desc">Car unloaded gently at target hub or residence.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">06</span>
                            <div class="abt-proc-icon"><i class="bi bi-key-fill"></i></div>
                            <h4 class="abt-proc-title">Keys Handover</h4>
                            <p class="abt-proc-desc">Inspection verification and key handover at your doorstep.</p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Banner -->
                <div class="chs-cta-card">
                    <h2 class="chs-cta-title">Need Safe Car Shipping?</h2>
                    <p class="chs-cta-desc mx-auto">
                        Get an instant transparent car transportation quote with 100% insured enclosed trailer protection.
                    </p>
                    <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                        <button type="button" class="abt-cta-btn-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator-fill"></i> Get Instant Car Quote
                        </button>
                        <a href="<?= $phonehtml ?>" class="abt-cta-btn-secondary">
                            <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar Column -->
            <?php $this->load->view('services/service_sidebar', ['active' => 'car-transportation']); ?>

        </div>
    </div>
</section>
