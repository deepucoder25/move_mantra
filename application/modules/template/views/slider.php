<?php
?>
<!-- HERO SLIDER SECTION -->
<section class="home-page-slider position-relative py-5" itemscope itemtype="https://schema.org/WPHeader">
  <div class="container position-relative z-2">
    <!-- Top Hero Content Row -->
    <div class="row align-items-center">
      <!-- Left Content Column -->
      <div class="col-xl-6 col-lg-7 col-md-10 text-start hero-text-col">
        <!-- Subtitle / Eyebrow Tag Pill Badge -->
        <div class="hero-eyebrow-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-3" itemprop="headline">
          <i class="bi bi-shield-fill-check text-secondry fs-6"></i>
          <span class="hero-eyebrow-text text-uppercase fw-extrabold">
            SAFE. SECURE. STRESS-FREE
          </span>
        </div>

        <!-- Main Title -->
        <h1 class="hero-title fw-extrabold mb-3 text-dark-navy" itemprop="name">
          We Move Your World
          With <span class="accent-text text-secondry">Care &amp; Trust</span>
        </h1>

        <!-- Subtext Description -->
        <p class="hero-lead text-secondary fs-6 mb-4 max-w-500" itemprop="description">
          Reliable and affordable packing &amp; moving services across India for homes, offices and vehicles.
        </p>

        <!-- Feature Badges Row -->
        <div class="d-flex flex-wrap align-items-center gap-2 mb-4 hero-trust-pills">
          <span class="badge-pill d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-light border border-light-subtle text-dark-navy fw-semibold extra-small">
            <i class="bi bi-check-circle-fill text-secondry"></i> Safe Packing
          </span>
          <span class="badge-pill d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-light border border-light-subtle text-dark-navy fw-semibold extra-small">
            <i class="bi bi-clock-fill text-secondry"></i> Timely Delivery
          </span>
          <span class="badge-pill d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-light border border-light-subtle text-dark-navy fw-semibold extra-small">
            <i class="bi bi-geo-alt-fill text-secondry"></i> Doorstep Services
          </span>
          <span class="badge-pill d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-light border border-light-subtle text-dark-navy fw-semibold extra-small">
            <i class="bi bi-tag-fill text-secondry"></i> Affordable Pricing
          </span>
        </div>

        <!-- CTA Buttons Row -->
        <div class="d-flex align-items-center gap-2 gap-md-3 mb-3 hero-cta-buttons">
          <button type="button" class="btn btn-hero-primary rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal">
            Get a Free Quote <i class="bi bi-arrow-right fs-6"></i>
          </button>
          <a href="<?= site_url('contact-us') ?>" class="btn btn-hero-outline rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2 shadow-sm text-decoration-none">
            Contact Us <span class="btn-circle-icon"><i class="bi bi-chevron-right"></i></span>
          </a>
        </div>

        <!-- Google Rating Badge Below CTA Buttons -->
        <div class="google-rating-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white shadow-sm border mt-1 mb-2">
          <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0">
            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
            <path fill="#FBBC05" d="M5.84 14.1c-.22-.66-.35-1.36-.35-2.1s.13-1.44.35-2.1V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.62z"/>
            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
          </svg>
          <span class="fw-extrabold text-dark-navy fs-6 me-1"><?= $ratingValue ?>/5</span>
          <div class="d-flex align-items-center text-warning fs-6">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <span class="extra-small text-muted fw-semibold ms-1"><?= $ratingCount ?>+ Reviews</span>
        </div>
      </div>

      <!-- Right Form Column -->
      <div class="col-xl-5 col-lg-5 col-md-12 ms-auto hero-form-col my-3 my-lg-0">
        <?php $this->load->view('contacts/quoteform.php') ?>
      </div>
    </div>

    <!-- FLOATING STATS CARD DIRECTLY ON SLIDER -->
    <div class="hero-bottom-stats-card bg-white p-3 p-md-4 mt-2">
      <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 align-items-center text-center text-md-start g-3">
        <!-- Stat 1 -->
        <div class="col border-end-md">
          <div class="d-flex align-items-center gap-3 px-2">
            <div class="stat-badge-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="bi bi-geo-alt-fill fs-4"></i>
            </div>
            <div>
              <h4 class="fw-bold text-dark-navy mb-0 fs-3 lh-1"><?= $yearsExperience ?></h4>
              <span class="extra-small text-muted fw-semibold text-nowrap">Years of Experience</span>
            </div>
          </div>
        </div>
        <!-- Stat 2 -->
        <div class="col border-end-md">
          <div class="d-flex align-items-center gap-3 px-2">
            <div class="stat-badge-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="bi bi-people-fill fs-4"></i>
            </div>
            <div>
              <h4 class="fw-bold text-dark-navy mb-0 fs-3 lh-1"><?= $happyClients ?></h4>
              <span class="extra-small text-muted fw-semibold text-nowrap">Happy Customers</span>
            </div>
          </div>
        </div>
        <!-- Stat 3 -->
        <div class="col border-end-md">
          <div class="d-flex align-items-center gap-3 px-2">
            <div class="stat-badge-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="bi bi-pin-map-fill fs-4"></i>
            </div>
            <div>
              <h4 class="fw-bold text-dark-navy mb-0 fs-3 lh-1"><?= $citiesCovered ?></h4>
              <span class="extra-small text-muted fw-semibold text-nowrap">Cities Covered</span>
            </div>
          </div>
        </div>
        <!-- Stat 4 -->
        <div class="col border-end-md">
          <div class="d-flex align-items-center gap-3 px-2">
            <div class="stat-badge-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="bi bi-shield-check fs-4"></i>
            </div>
            <div>
              <h4 class="fw-bold text-dark-navy mb-0 fs-3 lh-1"><?= $satisfactionRate ?></h4>
              <span class="extra-small text-muted fw-semibold text-nowrap">On-Time Delivery</span>
            </div>
          </div>
        </div>
        <!-- Stat 5 -->
        <div class="col">
          <div class="d-flex align-items-center gap-3 px-2">
            <div class="stat-badge-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="bi bi-headset fs-4"></i>
            </div>
            <div>
              <h4 class="fw-bold text-dark-navy mb-0 fs-3 lh-1">24/7</h4>
              <span class="extra-small text-muted fw-semibold text-nowrap">Customer Support</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
