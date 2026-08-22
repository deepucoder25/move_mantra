<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 

$CI = &get_instance();
if (isset($CI->session)) {
    $flash_success = $CI->session->flashdata('success');
    $flash_error = $CI->session->flashdata('error');
} else {
    $flash_success = null;
    $flash_error = null;
}
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Customer Reviews & Shifting Testimonials',
    'bc_desc' => 'Read real stories and feedback from delighted home owners, corporate clients, and vehicle owners who experienced hassle-free shifting with ' . $company3 . '.',
    'breadcrumbs' => [
        ['name' => 'Testimonials']
    ]
]);
?>

<!-- Main Testimonials Section -->
<section class="tst-page-section">
    <div class="container">
        
        <!-- Flash Alerts -->
        <?php if (!empty($flash_success)): ?>
            <div class="alert alert-success alert-dismissible fade show rounded-4 shadow-sm mb-4" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i><?= htmlspecialchars($flash_success) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (!empty($flash_error)): ?>
            <div class="alert alert-danger alert-dismissible fade show rounded-4 shadow-sm mb-4" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i><?= htmlspecialchars($flash_error) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Hero Overall Rating Summary Card -->
        <div class="tst-hero-card">
            <span class="tst-badge">
                <i class="bi bi-star-fill"></i> Verified Customer Feedback
            </span>
            <h1 class="chs-title">
                Real Stories From <span class="chs-gradient-text">Satisfied Clients</span>
            </h1>
            <p class="chs-subtitle">
                Discover why over <strong><?= $happyClients ?></strong> households and corporate enterprises across India trust <strong><?= $company3 ?></strong> for safe, on-time, and zero-damage relocations.
            </p>

            <!-- Overall Rating Bar -->
            <div class="tst-rating-bar">
                <div class="tst-rating-item">
                    <span class="tst-score">4.9</span>
                    <div>
                        <div class="tst-stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <span class="tst-rating-label">Overall Star Rating</span>
                    </div>
                </div>

                <div class="tst-rating-item">
                    <span class="tst-score"><?= $happyClients ?></span>
                    <span class="tst-rating-label">Verified Moves</span>
                </div>

                <div class="tst-rating-item">
                    <span class="tst-score"><?= $satisfactionRate ?></span>
                    <span class="tst-rating-label">Satisfaction Rate</span>
                </div>

                <div class="ms-md-auto mt-2 mt-md-0">
                    <button type="button" class="tst-write-review-btn" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="bi bi-pencil-square"></i> Write A Review
                    </button>
                </div>
            </div>
        </div>

        <!-- Testimonials Cards Grid -->
        <div class="row g-4 mb-5">
            
            <?php if (isset($db_reviews) && is_object($db_reviews) && method_exists($db_reviews, 'num_rows') && $db_reviews->num_rows() > 0): ?>
                <?php foreach ($db_reviews->result() as $rev): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="tst-card">
                            <div class="tst-card-top">
                                <div class="tst-card-header">
                                    <span class="tst-tag">Verified Customer Review</span>
                                    <div class="tst-stars">
                                        <?php 
                                        $num_stars = !empty($rev->stars) ? (int)$rev->stars : 5;
                                        for ($s = 1; $s <= 5; $s++) {
                                            echo ($s <= $num_stars) ? '<i class="bi bi-star-fill"></i>' : '<i class="bi bi-star"></i>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <p class="tst-text">
                                    "<?= htmlspecialchars($rev->r_desc) ?>"
                                </p>
                                <div class="tst-route-badge">
                                    <i class="bi bi-geo-alt-fill text-primary-light"></i> <?= !empty($rev->r_title) ? htmlspecialchars($rev->r_title) : 'Verified Location' ?>
                                </div>

                                <?php if (!empty($rev->r_img)): ?>
                                    <div class="d-flex gap-2 mt-2">
                                        <?php 
                                        $imgs = explode(',', $rev->r_img);
                                        foreach ($imgs as $img_path):
                                            if (!empty(trim($img_path))):
                                        ?>
                                            <a href="<?= base_url(trim($img_path)) ?>" target="_blank">
                                                <img src="<?= base_url(trim($img_path)) ?>" alt="Customer review photo" class="rounded-3" style="width: 48px; height: 48px; object-fit: cover;">
                                            </a>
                                        <?php 
                                            endif;
                                        endforeach; 
                                        ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="tst-author-row">
                                <div class="tst-avatar"><?= strtoupper(substr($rev->name, 0, 1)) ?></div>
                                <div>
                                    <h5 class="tst-author-name"><?= htmlspecialchars($rev->name) ?></h5>
                                    <span class="tst-author-location"><?= !empty($rev->r_title) ? htmlspecialchars($rev->r_title) : 'Verified Client' ?> • <?= !empty($rev->posted_date) ? date('M Y', strtotime($rev->posted_date)) : 'Recent' ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="tst-card">
                    <div class="tst-card-top">
                        <div class="tst-card-header">
                            <span class="tst-tag">Household Move</span>
                            <div class="tst-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="tst-text">
                            "Shifting my 3BHK household goods from Delhi to Bangalore was extremely smooth with <?= $company3 ?>. Their 3-layer bubble wrapping protected all my glass items and TV without a single scratch!"
                        </p>
                        <div class="tst-route-badge">
                            <i class="bi bi-geo-alt-fill text-primary-light"></i> Delhi to Bangalore
                        </div>
                    </div>
                    <div class="tst-author-row">
                        <div class="tst-avatar">R</div>
                        <div>
                            <h5 class="tst-author-name">Rahul Sharma</h5>
                            <span class="tst-author-location">Software Engineer • Delhi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="tst-card">
                    <div class="tst-card-top">
                        <div class="tst-card-header">
                            <span class="tst-tag">Car &amp; Bike Transport</span>
                            <div class="tst-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="tst-text">
                            "Transported my Hyundai Creta and Royal Enfield bike in an enclosed hydraulic trailer. Live GPS tracking kept me updated continuously. Arrived on exact promised delivery date!"
                        </p>
                        <div class="tst-route-badge">
                            <i class="bi bi-geo-alt-fill text-primary-light"></i> Mumbai to Hyderabad
                        </div>
                    </div>
                    <div class="tst-author-row">
                        <div class="tst-avatar">P</div>
                        <div>
                            <h5 class="tst-author-name">Priya Mehta</h5>
                            <span class="tst-author-location">Banking Executive • Mumbai</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="tst-card">
                    <div class="tst-card-top">
                        <div class="tst-card-header">
                            <span class="tst-tag">Office Shifting</span>
                            <div class="tst-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="tst-text">
                            "Relocated our 45-workstation corporate office over the weekend. The crew dismantled desks, IT servers, and furniture with zero downtime. Exceptional professionalism!"
                        </p>
                        <div class="tst-route-badge">
                            <i class="bi bi-geo-alt-fill text-primary-light"></i> Gurgaon Corporate Hub
                        </div>
                    </div>
                    <div class="tst-author-row">
                        <div class="tst-avatar">A</div>
                        <div>
                            <h5 class="tst-author-name">Amitabh Verma</h5>
                            <span class="tst-author-location">Operations Lead • Gurgaon</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="tst-card">
                    <div class="tst-card-top">
                        <div class="tst-card-header">
                            <span class="tst-tag">Intercity Move</span>
                            <div class="tst-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="tst-text">
                            "Zero hidden costs! What was quoted during the survey was the exact final invoice amount. The packing crew was punctual, polite, and handled unloading carefully."
                        </p>
                        <div class="tst-route-badge">
                            <i class="bi bi-geo-alt-fill text-primary-light"></i> Pune to Ahmedabad
                        </div>
                    </div>
                    <div class="tst-author-row">
                        <div class="tst-avatar">S</div>
                        <div>
                            <h5 class="tst-author-name">Sanjay Kulkarni</h5>
                            <span class="tst-author-location">Architect • Pune</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="tst-card">
                    <div class="tst-card-top">
                        <div class="tst-card-header">
                            <span class="tst-tag">Local Shifting</span>
                            <div class="tst-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="tst-text">
                            "Completed our local home move within 6 hours. Their team unpacked everything and reassembled all beds and wardrobes seamlessly. Highly recommended!"
                        </p>
                        <div class="tst-route-badge">
                            <i class="bi bi-geo-alt-fill text-primary-light"></i> Local City Move
                        </div>
                    </div>
                    <div class="tst-author-row">
                        <div class="tst-avatar">N</div>
                        <div>
                            <h5 class="tst-author-name">Neha Deshmukh</h5>
                            <span class="tst-author-location">Doctor • Bangalore</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="tst-card">
                    <div class="tst-card-top">
                        <div class="tst-card-header">
                            <span class="tst-tag">Transit Insurance</span>
                            <div class="tst-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="tst-text">
                            "Full value transit insurance policy gave us peace of mind during long distance relocation. Dedicated Move Manager was available 24/7 on WhatsApp."
                        </p>
                        <div class="tst-route-badge">
                            <i class="bi bi-geo-alt-fill text-primary-light"></i> Kolkata to Chennai
                        </div>
                    </div>
                    <div class="tst-author-row">
                        <div class="tst-avatar">V</div>
                        <div>
                            <h5 class="tst-author-name">Vikram Roy</h5>
                            <span class="tst-author-location">Business Owner • Kolkata</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Call to Action Card -->
        <div class="chs-cta-card">
            <h2 class="chs-cta-title">Ready to Experience a 5-Star Relocation?</h2>
            <p class="chs-cta-desc mx-auto">
                Join thousands of satisfied families and business owners across India. Get your free, transparent moving quote today!
            </p>
            <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                <button type="button" class="abt-cta-btn-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <i class="bi bi-calculator-fill"></i> Get Free Moving Quote
                </button>
                <button type="button" class="tst-write-review-btn py-3 px-4 fs-6" data-bs-toggle="modal" data-bs-target="#reviewModal">
                    <i class="bi bi-pencil-square"></i> Write A Review
                </button>
                <a href="<?= $phonehtml ?>" class="abt-cta-btn-secondary">
                    <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                </a>
            </div>
        </div>

    </div>
</section>