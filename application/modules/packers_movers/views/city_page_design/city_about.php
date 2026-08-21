<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ABOUT CITY RELOCATION SECTION -->
<section class="pm-city-about-section py-5">
  <div class="container">
    
    <!-- Main About Card Box -->
    <div class="pm-about-main-card mb-5">
      <div class="row align-items-center">
        
        <!-- LEFT COLUMN: ABOUT CONTENT -->
        <div class="col-lg-6">
          <div class="pm-about-content-wrap">
            
            <!-- Eyebrow Pill Tag -->
            <div class="pm-about-eyebrow d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-3">
              <i class="bi bi-award-fill fs-6"></i>
              <span class="text-uppercase fw-extrabold">Top-Rated Relocation Experts</span>
            </div>

            <!-- Heading -->
            <h2 class="pm-about-title fw-extrabold mb-3">
              About Move Mantra Packers and Movers in <span class="pm-about-accent"><?= $city ?></span>
            </h2>

            <!-- Lead Intro Paragraph -->
            <p class="pm-about-lead mb-3">
              Planning a move in <strong><?= $city ?></strong>? Whether you're shifting your home, transferring your office, or moving vehicles, <strong>Move Mantra Packers and Movers</strong> provides seamless, stress-free, and affordable relocation solutions tailored to your needs.
            </p>

            <p class="pm-about-text text-secondary mb-4">
              Navigating local traffic, narrow lanes, apartment guidelines, and weather conditions in <?= $city ?> requires experienced professionals. Our trained team uses multi-layer protective packaging, specialized loading equipment, and real-time GPS-tracked vehicles to ensure 100% safety of your belongings.
            </p>


            <!-- CTA Action Buttons -->
            <div class="d-flex align-items-center gap-2 gap-md-3 pt-2 pm-about-cta-buttons">
              <button type="button" class="btn btn-pm-about-primary rounded-pill fw-bold d-inline-flex align-items-center justify-content-center gap-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal">
                Get Instant Quote <i class="bi bi-arrow-right"></i>
              </button>
              <a href="tel:<?= !empty($company_phone) ? $company_phone : '9876543210' ?>" class="btn btn-pm-about-outline rounded-pill fw-bold d-inline-flex align-items-center justify-content-center gap-2 shadow-sm">
                <i class="bi bi-telephone-fill"></i> Call Now
              </a>
            </div>

          </div>
        </div>

        <!-- RIGHT COLUMN: 3 DISTINCT DESIGN IMAGE BOXES -->
        <div class="col-lg-6">
          <div class="pm-about-img-grid-container position-relative">
            
            <!-- Decorative Backing Gradient Orbs & Rings -->
            <div class="pm-about-img-glow"></div>
            <div class="pm-about-img-dots"></div>

            <div class="row align-items-center">
              <!-- Main Featured Image Box 1 (Left / Large) -->
              <div class="col-7">
                <div class="pm-about-img-box pm-img-box-main shadow-lg rounded-4 overflow-hidden border">
                  <img src="<?= base_url('assets/images/services_modules/household_shifting.jpg') ?>" alt="Household Relocation in <?= $city ?>" class="img-fluid w-100 pm-grid-img" loading="lazy">
                </div>
              </div>

              <!-- Right Column: 2 Stacked Image Boxes -->
              <div class="col-5 d-flex flex-column gap-3">
                <!-- Image Box 2: Safe Packing -->
                <div class="pm-about-img-box pm-img-box-sub shadow-md rounded-4 overflow-hidden border">
                  <img src="<?= base_url('assets/images/services_modules/packing_unpacking.jpg') ?>" alt="Packing Service in <?= $city ?>" class="img-fluid w-100 pm-grid-img" loading="lazy">
                </div>

                <!-- Image Box 3: Loading & Transport -->
                <div class="pm-about-img-box pm-img-box-sub shadow-md rounded-4 overflow-hidden border">
                  <img src="<?= base_url('assets/images/services_modules/loading_unloading.jpg') ?>" alt="Transport Service in <?= $city ?>" class="img-fluid w-100 pm-grid-img" loading="lazy">
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- City Map Section (col-lg-6 Content & col-lg-6 Map) -->
    <div class="pm-city-map-card mb-5">
      <div class="row align-items-center">
        
        <!-- LEFT COLUMN: CONTENT (col-lg-6) -->
        <div class="col-lg-6">
          <div class="pm-map-content">
            
            <!-- Eyebrow Tag -->
            <div class="pm-map-eyebrow d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-3">
              <i class="bi bi-geo-alt-fill text-secondry"></i>
              <span class="text-uppercase fw-extrabold">Service Coverage Area</span>
            </div>

            <!-- Title -->
            <h3 class="pm-map-title fw-extrabold mb-3">
              Our Relocation Network in <span class="pm-about-accent"><?= $city ?></span>
            </h3>

            <!-- Description Paragraphs -->
            <p class="pm-map-desc text-secondary mb-3">
              We provide complete local and intercity relocation services across all major residential, commercial, and industrial zones in <strong><?= $city ?></strong>. Our dedicated local team ensures hassle-free pickup, fast transit, and doorstep delivery.
            </p>

            <p class="pm-map-desc text-secondary mb-3">
              Whether you are moving household goods to a new apartment in <?= $city ?>, shifting an office setup, or transporting your car and bike across states, our logistics fleet operates 24/7 with real-time GPS tracking.
            </p>

            <p class="pm-map-desc text-secondary mb-0">
              Our experienced packing crew handles every item with multi-layer bubble wrap, sturdy corrugated boxes, and heavy-duty protective covers to guarantee 100% damage-free delivery anywhere in <?= $city ?> and nationwide.
            </p>

          </div>
        </div>

        <!-- RIGHT COLUMN: MAP (col-lg-6) -->
        <div class="col-lg-6">
          <div class="pm-city-map-wrapper rounded-4 overflow-hidden border shadow-lg">
            <?php include 'city_map.php'; ?>
          </div>
        </div>

      </div>
    </div>

    <!-- Relocation Process Section -->
    <?php include 'city_process.php'; ?>

    <!-- Pricing & Rates Tables Section -->
    <?php include 'city_tables.php'; ?>

    <!-- Customer Reviews Section -->
    <?php include 'city_reviews.php'; ?>

    <!-- FAQ Accordion Section -->
    <?php include 'city_faq.php'; ?>

  </div>
</section>
