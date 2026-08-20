<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$services = [
    [
        'title' => 'Home Relocation',
        'desc' => 'Safe and secure shifting of your home with utmost care.',
        'icon' => 'bi-house-door-fill',
        'image' => 'household_shifting.jpg',
        'link' => 'home-relocation'
    ],
    [
        'title' => 'Office Relocation',
        'desc' => 'Efficient office shifting services to ensure zero business downtime.',
        'icon' => 'bi-building-fill',
        'image' => 'office_relocation.jpg',
        'link' => 'office-relocation'
    ],
    [
        'title' => 'Car Transportation',
        'desc' => 'We provide safe bike and car transportation across India.',
        'icon' => 'bi-car-front-fill',
        'image' => 'car_transportation.jpg',
        'link' => 'car-transportation'
    ],
    [
        'title' => 'Bike Transportation',
        'desc' => 'Safe & damage-free bike packing and transportation across India.',
        'icon' => 'bi-bicycle',
        'image' => 'bike_transportation.jpg',
        'link' => 'bike-transportation'
    ],
    [
        'title' => 'Packing & Moving Service',
        'desc' => 'High-quality packing materials and professional packing services.',
        'icon' => 'bi-box-seam-fill',
        'image' => 'packing_unpacking.jpg',
        'link' => 'packing-and-moving'
    ],
    [
        'title' => 'Loading Unloading Service',
        'desc' => 'Expert team for safe loading and unloading of your valuable goods.',
        'icon' => 'bi-person-down',
        'image' => 'loading_unloading.jpg',
        'link' => 'loading-unloading'
    ],
];
?>

<!-- OUR SERVICES WIDGET SECTION -->
<section class="service-widget-section py-5 position-relative overflow-hidden">
  <div class="container position-relative z-2">
    
    <!-- Section Header -->
    <div class="text-center mb-5">
      <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
        <span class="header-line left-line"></span>
        <span class="text-uppercase text-secondry section-tag-title">OUR SERVICES</span>
        <span class="header-line right-line"></span>
      </div>
      <h2 class="fw-extrabold text-dark-navy display-6 mb-0">
        Comprehensive Moving Solutions
      </h2>
    </div>

    <!-- 6 Services Grid Row -->
    <div class="row row-cols-lg-6 row-cols-md-3 row-cols-2 g-3 justify-content-center">
      <?php foreach ($services as $service): ?>
        <div class="col d-flex">
          <div class="service-widget-card bg-white rounded-4 border shadow-sm w-100 d-flex flex-column overflow-hidden position-relative">
            
            <!-- Top Image Wrap with Badge -->
            <div class="service-img-wrap position-relative p-1">
              <div class="overflow-hidden rounded-3 position-relative h-100">
                <img src="<?= base_url('assets/images/services_modules/' . $service['image']) ?>" 
                     alt="<?= htmlspecialchars($service['title']) ?>" 
                     class="w-100 service-card-img" loading="lazy">
                
                <!-- Floating Top-Left Circle Icon Badge -->
                <div class="service-icon-badge position-absolute top-0 start-0 m-2 rounded-circle bg-white text-secondry d-flex align-items-center justify-content-center shadow-sm border border-2 border-info-subtle">
                  <i class="bi <?= $service['icon'] ?> fs-6"></i>
                </div>
              </div>
            </div>

            <!-- Card Content -->
            <div class="service-card-body p-3 d-flex flex-column flex-grow-1">
              <h5 class="fw-extrabold text-dark-navy service-card-title mb-2"><?= htmlspecialchars($service['title']) ?></h5>
              <p class="service-card-desc flex-grow-1 mb-3"><?= htmlspecialchars($service['desc']) ?></p>
              
              <a href="<?= site_url($service['link']) ?>" class="service-read-more text-decoration-none fw-bold text-secondry d-inline-flex align-items-center gap-1 mt-auto">
                Learn More <i class="bi bi-arrow-right"></i>
              </a>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
