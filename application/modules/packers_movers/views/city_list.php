<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers and Movers in ' . ucwords($state),
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Our Branches', 'url' => site_url('our-branches')],
        ['name' => ucwords($state)],

    ]
]);
?>
<div class="pm-list-service-page">
    <div class="container pm-list-feature-section">
        
        <!-- Section Header -->
        <div class="text-center mb-4">
            <div class="pm-list-eyebrow mb-2">
                <i class="bi bi-pin-map-fill me-1"></i> Verified Service Hubs
            </div>
            <h2 class="pm-list-title">
                Packers and Movers in <span class="pm-list-title-highlight"><?= htmlspecialchars($state) ?></span>
            </h2>
            <p class="pm-list-subtitle">
                Select your city below to get instant quotes & hassle-free shifting services in <?= htmlspecialchars($state) ?>.
            </p>
        </div>

        <!-- City Cards Grid -->
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct):
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                ?>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>"
                        class="pm-list-city-card-link d-block h-100 text-decoration-none">
                        <div class="pm-list-city-card card h-100">
                            <div class="card-body pm-list-card-body">
                                <!-- Location Pin Icon on Left -->
                                <div class="pm-list-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <!-- Title on Right -->
                                <div class="pm-list-city-name">
                                    <small class="pm-list-city-tag">Packers and Movers</small>
                                    <h6 class="pm-list-city-title"><?= htmlspecialchars($ct['nm']) ?></h6>
                                </div>
                                <!-- Chevron Arrow Icon -->
                                <i class="bi bi-chevron-right pm-list-arrow"></i>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</main>