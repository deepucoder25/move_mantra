<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Pan-India Service Network & Branches',
    'bc_desc' => 'Explore our nationwide network of verified packers and movers branches providing local & long-distance shifting services across all states in India.',
    'breadcrumbs' => [
        ['name' => 'Our Branches']
    ]
]);
?>

<?php
$state = [
    [
        "image" => "west-bengal.jpg",
        "category" => "West Bengal",
        "link" => "west-bengal"
    ]
];
?>

<!-- Branch Section -->
<section class="portfolio-area pm-states-section py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h2 class="pm-states-heading">
                Our Presence Across <span class="pm-states-title-span">India</span>
            </h2>
            <p class="pm-states-subtitle">
                Reliable packing and moving services available in major states.
            </p>
        </div>

        <div class="row">

            <?php foreach ($state as $item): ?>

                <!-- 4 Columns on Desktop, 2 on Tablet, 1 on Mobile -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">

                    <a href="<?= site_url($item['link']) ?>" class="text-decoration-none d-block h-100">
                        <div class="pm-states-card h-100">

                            <!-- Image -->
                            <div class="pm-states-img">
                                <img class="img-fluid w-100" src="<?= base_url() ?>/assets/images/state/<?= $item['image'] ?>"
                                    alt="<?= htmlspecialchars($item['category']) ?>">

                                <div class="pm-states-overlay">
                                    <span class="pm-states-overlay-text">
                                        Explore <?= htmlspecialchars($item['category']) ?> <i class="bi bi-arrow-right"></i>
                                    </span>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="pm-states-body">
                                <span class="pm-states-dash"></span>
                                <h6 class="pm-states-card-title mb-0">
                                    <?= htmlspecialchars($item['category']) ?>
                                </h6>
                            </div>

                        </div>
                    </a>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>