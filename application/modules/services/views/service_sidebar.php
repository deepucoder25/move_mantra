<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$active_service = isset($active) ? $active : $this->uri->segment(1);

$services_menu = [
    [
        'slug' => 'home-shifting',
        'name' => 'Household Shifting',
        'icon' => 'bi-house-door-fill',
        'url' => site_url('home-shifting')
    ],
    [
        'slug' => 'office-relocation',
        'name' => 'Corporate Office Shifting',
        'icon' => 'bi-building',
        'url' => site_url('office-relocation')
    ],
    [
        'slug' => 'car-transportation',
        'name' => 'Car Transportation',
        'icon' => 'bi-car-front-fill',
        'url' => site_url('car-transportation')
    ],
    [
        'slug' => 'bike-transportation',
        'name' => 'Bike Carrier Shifting',
        'icon' => 'bi-bicycle',
        'url' => site_url('bike-transportation')
    ],
    [
        'slug' => 'packing-and-moving',
        'name' => 'Packing & Unpacking',
        'icon' => 'bi-box-seam-fill',
        'url' => site_url('packing-and-moving')
    ],
    [
        'slug' => 'loading-and-unloading',
        'name' => 'Loading & Unloading',
        'icon' => 'bi-truck-flatbed',
        'url' => site_url('loading-unloading')
    ]
];
?>

<!-- Right Sidebar Column -->
<div class="col-lg-4">
    <div class="service-sidebar-sticky">
        
        <!-- Quick Service Links Navigation Widget -->
        <div class="hmr-widget">
            <h3 class="hmr-widget-title">Relocation Services</h3>
            <?php foreach ($services_menu as $s): 
                $is_active = ($active_service === $s['slug'] || $this->uri->segment(1) === $s['slug']) ? 'active' : '';
            ?>
                <a href="<?= $s['url'] ?>" class="hmr-service-link <?= $is_active ?>">
                    <span><i class="bi <?= $s['icon'] ?> me-2 text-primary-light"></i> <?= $s['name'] ?></span>
                    <i class="bi bi-chevron-right"></i>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- 24/7 Hotline Support Card -->
        <div class="hmr-support-card mb-4">
            <div class="hmr-support-icon">
                <i class="bi bi-headset"></i>
            </div>
            <h4 class="fw-extrabold fs-5 text-white mb-2">Need Immediate Shifting Help?</h4>
            <p class="fs-6 opacity-75 mb-3">Speak with our certified relocation expert for instant home shifting estimates and survey scheduling.</p>
            <div class="d-flex flex-column gap-2">
                <a href="<?= $phonehtml ?>" class="abt-cta-btn-primary justify-content-center w-100">
                    <i class="bi bi-telephone-fill"></i> <?= $phone ?>
                </a>
                <?php if (!empty($phone1)): ?>
                    <a href="<?= $phonehtml1 ?>" class="abt-cta-btn-primary justify-content-center w-100">
                        <i class="bi bi-telephone-fill"></i> <?= $phone1 ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Why Trust Us Sidebar Card -->
        <div class="hmr-widget">
            <h3 class="hmr-widget-title">Why Trust <?= $company3 ?>?</h3>
            
            <div class="d-flex align-items-start gap-3 mb-3">
                <div class="hmr-sec-heading mb-0 fs-4 text-primary-light"><i class="bi bi-shield-lock-fill"></i></div>
                <div>
                    <h5 class="fw-bold fs-6 text-dark-navy mb-1">100% Insured Shifting</h5>
                    <p class="fs-6 text-muted mb-0">Full transit insurance policy for complete peace of mind.</p>
                </div>
            </div>

            <div class="d-flex align-items-start gap-3 mb-3">
                <div class="hmr-sec-heading mb-0 fs-4 text-primary-light"><i class="bi bi-cash-stack"></i></div>
                <div>
                    <h5 class="fw-bold fs-6 text-dark-navy mb-1">Transparent Fixed Quotes</h5>
                    <p class="fs-6 text-muted mb-0">What is quoted during pre-move survey is final. Zero hidden fees.</p>
                </div>
            </div>

            <div class="d-flex align-items-start gap-3">
                <div class="hmr-sec-heading mb-0 fs-4 text-primary-light"><i class="bi bi-clock-history"></i></div>
                <div>
                    <h5 class="fw-bold fs-6 text-dark-navy mb-1">24/7 Consignment Support</h5>
                    <p class="fs-6 text-muted mb-0">Dedicated move coordinator available on phone &amp; WhatsApp.</p>
                </div>
            </div>
        </div>

    </div>
</div>
