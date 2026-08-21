<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- RELOCATION PROCESS / HOW IT WORKS SECTION (ALTERNATIVE V2 ROADMAP DESIGN) -->
<div class="pm-city-process-card-v2 mb-5">
  
  <!-- Header Bar -->
  <div class="mb-4">
    <div class="pm-process-eyebrow d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-2">
      <i class="bi bi-diagram-3-fill text-secondry"></i>
      <span class="text-uppercase fw-extrabold">HOW IT WORKS</span>
    </div>
    <h3 class="pm-process-title fw-extrabold mb-1">
      Our Simple 4-Step Relocation Flow in <span class="pm-about-accent"><?= $city ?></span>
    </h3>
    <p class="text-secondary small mb-0">Transparent, damage-free shifting process tailored for <?= $city ?>.</p>
  </div>

  <!-- 4 Step Cards Grid (V2 Roadmap Layout) -->
  <div class="row g-4">
    
    <!-- Step 01 -->
    <div class="col-lg-3 col-md-6 col-6">
      <div class="pm-process-card-v2 p-4 rounded-4 bg-white border position-relative h-100 shadow-sm overflow-hidden">
        <div class="pm-process-top-bar"></div>
        <div class="d-flex align-items-center justify-content-between mb-3">
          <span class="pm-process-num-v2 fw-extrabold">01</span>
          <div class="pm-process-icon-v2 rounded-3 d-flex align-items-center justify-content-center">
            <i class="bi bi-clipboard2-check-fill"></i>
          </div>
        </div>
        <h5 class="fw-extrabold text-dark-navy mb-2 fs-6">Free Survey &amp; Quote</h5>
        <p class="pm-process-desc-v2 text-secondary extra-small mb-0">
          Share your moving details or schedule a quick home survey in <?= $city ?> to get an accurate, transparent cost estimate.
        </p>
      </div>
    </div>

    <!-- Step 02 -->
    <div class="col-lg-3 col-md-6 col-6">
      <div class="pm-process-card-v2 p-4 rounded-4 bg-white border position-relative h-100 shadow-sm overflow-hidden">
        <div class="pm-process-top-bar"></div>
        <div class="d-flex align-items-center justify-content-between mb-3">
          <span class="pm-process-num-v2 fw-extrabold">02</span>
          <div class="pm-process-icon-v2 rounded-3 d-flex align-items-center justify-content-center">
            <i class="bi bi-box-seam-fill"></i>
          </div>
        </div>
        <h5 class="fw-extrabold text-dark-navy mb-2 fs-6">Multi-Layer Packing</h5>
        <p class="pm-process-desc-v2 text-secondary extra-small mb-0">
          Our trained crew arrives with heavy-duty cartons, bubble wraps, and foam covers to safely pack your household items.
        </p>
      </div>
    </div>

    <!-- Step 03 -->
    <div class="col-lg-3 col-md-6 col-6">
      <div class="pm-process-card-v2 p-4 rounded-4 bg-white border position-relative h-100 shadow-sm overflow-hidden">
        <div class="pm-process-top-bar"></div>
        <div class="d-flex align-items-center justify-content-between mb-3">
          <span class="pm-process-num-v2 fw-extrabold">03</span>
          <div class="pm-process-icon-v2 rounded-3 d-flex align-items-center justify-content-center">
            <i class="bi bi-truck-front-fill"></i>
          </div>
        </div>
        <h5 class="fw-extrabold text-dark-navy mb-2 fs-6">Safe GPS Transit</h5>
        <p class="pm-process-desc-v2 text-secondary extra-small mb-0">
          Goods are carefully loaded onto dedicated GPS-tracked vehicles and transported safely across <?= $city ?> or nationwide.
        </p>
      </div>
    </div>

    <!-- Step 04 -->
    <div class="col-lg-3 col-md-6 col-6">
      <div class="pm-process-card-v2 p-4 rounded-4 bg-white border position-relative h-100 shadow-sm overflow-hidden">
        <div class="pm-process-top-bar"></div>
        <div class="d-flex align-items-center justify-content-between mb-3">
          <span class="pm-process-num-v2 fw-extrabold">04</span>
          <div class="pm-process-icon-v2 rounded-3 d-flex align-items-center justify-content-center">
            <i class="bi bi-house-check-fill"></i>
          </div>
        </div>
        <h5 class="fw-extrabold text-dark-navy mb-2 fs-6">Doorstep Unpacking</h5>
        <p class="pm-process-desc-v2 text-secondary extra-small mb-0">
          We unload, unpack, and arrange your furniture at your new location in <?= $city ?>, ensuring 100% satisfaction.
        </p>
      </div>
    </div>

  </div>
</div>
