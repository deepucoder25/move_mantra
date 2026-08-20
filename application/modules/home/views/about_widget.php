<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$companyName = !empty($company3) ? $company3 : 'MoveMantra Packers and Movers';
$expYears = !empty($yearsExperience) ? $yearsExperience : (!empty($experience) ? $experience : '10+');
?>

<!-- ABOUT US WIDGET SECTION -->
<section class="about-widget-section py-5 position-relative overflow-hidden">
  <div class="container position-relative z-2">
    <div class="row align-items-center g-4 g-lg-5">

      <!-- Left Side Graphic Column -->
      <div class="col-lg-6 col-12">
        <div class="about-graphic-container position-relative text-center">
          
          <!-- Background Soft Cyan Circle -->
          <div class="about-bg-circle position-absolute rounded-circle"></div>

          <!-- World Map SVG Background -->
          <div class="about-map-bg position-absolute w-100 h-100 top-0 start-0 pointer-events-none">
            <svg width="100%" height="100%" viewBox="0 0 600 400" fill="none" xmlns="http://www.w3.org/2000/svg" opacity="0.3">
              <!-- World Map Shape -->
              <path d="M120 150 C140 120, 180 130, 200 160 C220 190, 250 170, 270 140 C290 110, 340 120, 360 150 C380 180, 420 160, 450 190 C480 220, 520 200, 540 240 L500 280 L100 280 Z" fill="#7dd3fc"/>
              <circle cx="90" cy="90" r="3" fill="#0284c7"/>
              <circle cx="110" cy="70" r="2.5" fill="#0284c7"/>
              <circle cx="130" cy="110" r="3" fill="#0284c7"/>
              <circle cx="70" cy="110" r="2" fill="#0284c7"/>
              <circle cx="90" cy="130" r="2.5" fill="#0284c7"/>
            </svg>
          </div>

          <!-- Delivery Mover Image -->
          <img src="<?= base_url('assets/images/home_modules/home_about.jpg') ?>" 
               alt="<?= htmlspecialchars($companyName) ?> - Professional Mover" 
               class="about-showcase-img img-fluid position-relative z-2" 
               loading="lazy">

          <!-- Wavy Floating Experience Badge -->
          <div class="about-exp-badge position-absolute bg-white rounded-5 p-3 shadow-lg d-flex flex-column align-items-center justify-content-center z-3">
            <div class="fw-extrabold text-dark-navy lh-1 fs-1 mb-1"><?= htmlspecialchars($expYears) ?></div>
            <div class="extra-small fw-bold text-dark-navy text-center lh-xs text-nowrap">
              Years of<br>Experience
            </div>
          </div>

        </div>
      </div>

      <!-- Right Side Content Details -->
      <div class="col-lg-6 col-12">
        <div class="about-content-wrap">
          
          <!-- Subheading Eyebrow Tag -->
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="header-line left-line"></span>
            <span class="text-uppercase text-secondry section-tag-title">ABOUT US</span>
            <span class="header-line right-line"></span>
          </div>

          <!-- Main Title Heading -->
          <h2 class="fw-extrabold text-dark-navy fs-1 mb-3">
            We Make Moving Simple, <span class="text-secondry">Safe &amp; Stress-Free!</span>
          </h2>

          <!-- Description Paragraph -->
          <p class="text-secondary fs-6 mb-4 lh-base">
            <strong><?= htmlspecialchars($companyName) ?></strong> is a trusted name in the relocation industry, providing high-quality packing and moving services across India. Our expert team ensures your belongings are packed with care and delivered safely to your new destination.
          </p>

          <!-- 4 Feature Pills / Cards Row -->
          <div class="row g-2 mb-4">
            <!-- Feature 1 -->
            <div class="col-6 col-sm-3">
              <div class="about-feature-card bg-white p-2 px-2.5 rounded-4 border shadow-sm d-flex align-items-center gap-2 h-100">
                <div class="stat-badge-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:36px; height:36px;">
                  <i class="bi bi-people-fill fs-6"></i>
                </div>
                <div class="extra-small fw-bold text-dark-navy lh-sm">
                  Trained &amp;<br>Experienced Team
                </div>
              </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-6 col-sm-3">
              <div class="about-feature-card bg-white p-2 px-2.5 rounded-4 border shadow-sm d-flex align-items-center gap-2 h-100">
                <div class="stat-badge-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:36px; height:36px;">
                  <i class="bi bi-currency-rupee fs-6"></i>
                </div>
                <div class="extra-small fw-bold text-dark-navy lh-sm">
                  Affordable<br>Pricing
                </div>
              </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-6 col-sm-3">
              <div class="about-feature-card bg-white p-2 px-2.5 rounded-4 border shadow-sm d-flex align-items-center gap-2 h-100">
                <div class="stat-badge-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:36px; height:36px;">
                  <i class="bi bi-geo-alt-fill fs-6"></i>
                </div>
                <div class="extra-small fw-bold text-dark-navy lh-sm">
                  Pan India<br>Services
                </div>
              </div>
            </div>
            <!-- Feature 4 -->
            <div class="col-6 col-sm-3">
              <div class="about-feature-card bg-white p-2 px-2.5 rounded-4 border shadow-sm d-flex align-items-center gap-2 h-100">
                <div class="stat-badge-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:36px; height:36px;">
                  <i class="bi bi-clock-history fs-6"></i>
                </div>
                <div class="extra-small fw-bold text-dark-navy lh-sm">
                  On-Time<br>Delivery
                </div>
              </div>
            </div>
          </div>

          <!-- CTA Button -->
          <a href="<?= site_url('about-us') ?>" class="btn btn-hero-primary rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2 shadow-sm text-decoration-none">
            Know More About Us <i class="bi bi-arrow-right fs-6"></i>
          </a>

        </div>
      </div>

    </div>
  </div>
</section>
