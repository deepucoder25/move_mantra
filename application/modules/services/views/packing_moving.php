<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Professional Packing & Unpacking Services',
    'bc_desc' => 'Premium quality packing materials, customized wooden crating, furniture dismantling, and room-by-room unpacking solutions for stress-free relocation.',
    'breadcrumbs' => [
        ['name' => 'Packing & Moving']
    ]
]);
?>

<!-- Main Packing & Moving Section -->
<section class="hmr-page-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Left Main Content Column -->
            <div class="col-lg-8">
                
                <!-- Hero Service Intro Card -->
                <div class="hmr-hero-card">
                    <span class="hmr-badge">
                        <i class="bi bi-box-seam-fill"></i> #1 Premium Quality Packing Specialists
                    </span>
                    <h1 class="hmr-title">
                        Flawless Multi-Layer <span class="hmr-gradient-text">Packing &amp; Unpacking</span>
                    </h1>
                    <p class="hmr-desc">
                        Scientific packing is the single most critical factor in guaranteeing zero-damage relocation. At <strong><?= $company3 ?></strong>, we use heavy-duty 5-ply corrugated boxes, high-density bubble wrap, stretch film, foam corner guards, and custom wooden crating to safeguard your electronics, glassware, furniture, and valuables across <strong><?= $citiesCovered ?>+ cities</strong> nationwide.
                    </p>

                    <!-- Feature Pills Grid -->
                    <div class="abt-pill-tags">
                        <div class="abt-pill-item">
                            <i class="bi bi-box2-fill"></i> Heavy 5-Ply Corrugated Boxes
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-tools"></i> Custom Wooden Crating
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-tags-fill"></i> Room-by-Room Box Indexing
                        </div>
                        <div class="abt-pill-item">
                            <i class="bi bi-trash-fill"></i> Unpacking &amp; Debris Removal
                        </div>
                    </div>
                </div>

                <!-- 4 Relocation Service Categories Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-boxes"></i>
                            </div>
                            <h3 class="hmr-type-title">Full Household Goods Packing</h3>
                            <p class="hmr-type-desc">
                                End-to-end packing of clothes, kitchenware, books, mattresses, and home decor using specialized partitioned boxes and wardrobe cartons.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-cup-straw"></i>
                            </div>
                            <h3 class="hmr-type-title">Fragile &amp; Glassware Packing</h3>
                            <p class="hmr-type-desc">
                                Special dish-pack boxes, tissue wrapping, and cell-dividers for delicate china, crystal glassware, ceramic plates, and expensive lamps.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-tv-fill"></i>
                            </div>
                            <h3 class="hmr-type-title">OLED TV &amp; Appliance Crating</h3>
                            <p class="hmr-type-desc">
                                Double-bubble cushioning and solid wooden crate frames built on-site for large 65"+ OLED TVs, refrigerators, and washing machines.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hmr-type-card">
                            <div class="hmr-type-icon">
                                <i class="bi bi-house-check-fill"></i>
                            </div>
                            <h3 class="hmr-type-title">Unpacking &amp; Debris Clearance</h3>
                            <p class="hmr-type-desc">
                                Complete unpacking at destination, placing items into kitchen cabinets and wardrobes, plus removing all used packing waste.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 4-Stage Material Quality Protocol Box -->
                <div class="hmr-packing-box">
                    <h2 class="hmr-sec-heading">
                        <i class="bi bi-layers-fill"></i> Our 4-Layer Scientific Material Protocol
                    </h2>
                    
                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">LAYER 1</span>
                        <div>
                            <h4 class="hmr-layer-title">High-Grade Stretch Film &amp; Soft Tissue Paper</h4>
                            <p class="hmr-layer-desc">Used directly on wood polishes, leather sofas, and glass surfaces to prevent surface scratches and dust accumulation.</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">LAYER 2</span>
                        <div>
                            <h4 class="hmr-layer-title">Air Bubble Cushion Wrap &amp; EPE Foam Sheets</h4>
                            <p class="hmr-layer-desc">High-density 100 GSM air bubble sheets wrapped around appliances, mirrors, paintings, and electronic gear.</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">LAYER 3</span>
                        <div>
                            <h4 class="hmr-layer-title">5-Ply Heavy Duty Cardboard Cartons &amp; Corner Guards</h4>
                            <p class="hmr-layer-desc">Heavy-duty export quality cartons with reinforced corners to withstand stacking pressure during transit.</p>
                        </div>
                    </div>

                    <div class="hmr-layer-item">
                        <span class="hmr-layer-badge">LAYER 4</span>
                        <div>
                            <h4 class="hmr-layer-title">Heavy Waterproof Tarpaulin &amp; Crate Enclosure</h4>
                            <p class="hmr-layer-desc">Final outer layer binding with waterproof plastic sheets and heavy-duty strapping tape for total weather protection.</p>
                        </div>
                    </div>
                </div>

                <!-- Rate Matrix Table -->
                <div class="hmr-table-card">
                    <h2 class="hmr-sec-heading">
                        <i class="bi bi-calculator-fill"></i> Estimated Packing Material &amp; Labor Rate Matrix
                    </h2>
                    <table class="hmr-rate-table">
                        <thead>
                            <tr>
                                <th>House Size</th>
                                <th>Packing Material Included</th>
                                <th>Estimated Labor Cost</th>
                                <th>Completion Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1 BHK Flat</strong></td>
                                <td>15-25 Cartons, Bubble Roll, Tapes</td>
                                <td>₹2,500 - ₹4,500</td>
                                <td>3 - 5 Hours</td>
                            </tr>
                            <tr>
                                <td><strong>2 BHK Apartment</strong></td>
                                <td>30-45 Cartons, Bubble Rolls, Foam</td>
                                <td>₹4,500 - ₹7,500</td>
                                <td>5 - 8 Hours</td>
                            </tr>
                            <tr>
                                <td><strong>3 BHK Apartment</strong></td>
                                <td>50-70 Cartons, Wooden Crating</td>
                                <td>₹7,500 - ₹12,000</td>
                                <td>1 Day</td>
                            </tr>
                            <tr>
                                <td><strong>4 BHK / Independent Villa</strong></td>
                                <td>75+ Cartons, Custom Crating</td>
                                <td>₹12,000 - ₹22,000</td>
                                <td>1 - 2 Days</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- 6-Step Process Grid -->
                <div class="abt-sec-title-wrap text-start mb-4">
                    <span class="abt-sec-subtitle">6-Step Workflow</span>
                    <h2 class="abt-sec-title">How Our Packing Process Operates</h2>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">01</span>
                            <div class="abt-proc-icon"><i class="bi bi-search"></i></div>
                            <h4 class="abt-proc-title">Item Inventory</h4>
                            <p class="abt-proc-desc">Categorize fragile, heavy, and general household items.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">02</span>
                            <div class="abt-proc-icon"><i class="bi bi-box"></i></div>
                            <h4 class="abt-proc-title">Fresh Materials</h4>
                            <p class="abt-proc-desc">Unused 5-ply cartons, bubble wrap, &amp; tapes delivered.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">03</span>
                            <div class="abt-proc-icon"><i class="bi bi-layers"></i></div>
                            <h4 class="abt-proc-title">Scientific Wrap</h4>
                            <p class="abt-proc-desc">Multi-layer wrapping applied by expert packers.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">04</span>
                            <div class="abt-proc-icon"><i class="bi bi-pen"></i></div>
                            <h4 class="abt-proc-title">Box Labeling</h4>
                            <p class="abt-proc-desc">Every box labeled with contents and destination room.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">05</span>
                            <div class="abt-proc-icon"><i class="bi bi-truck"></i></div>
                            <h4 class="abt-proc-title">Safe Transport</h4>
                            <p class="abt-proc-desc">Loaded carefully into clean containerized vehicles.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="abt-proc-card">
                            <span class="abt-proc-num">06</span>
                            <div class="abt-proc-icon"><i class="bi bi-check-circle-fill"></i></div>
                            <h4 class="abt-proc-title">Unpack &amp; Clean</h4>
                            <p class="abt-proc-desc">Unpacked at target home &amp; packing waste cleared.</p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Banner -->
                <div class="chs-cta-card">
                    <h2 class="chs-cta-title">Need Professional Packing Services?</h2>
                    <p class="chs-cta-desc mx-auto">
                        Get a transparent packing quote with fresh 5-ply materials and certified packing experts.
                    </p>
                    <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                        <button type="button" class="abt-cta-btn-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator-fill"></i> Get Instant Packing Quote
                        </button>
                        <a href="<?= $phonehtml ?>" class="abt-cta-btn-secondary">
                            <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar Column -->
            <?php $this->load->view('services/service_sidebar', ['active' => 'packing-and-moving']); ?>

        </div>
    </div>
</section>
