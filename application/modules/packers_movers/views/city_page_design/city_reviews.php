<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- REVIEWS & CUSTOMER EXPERIENCES SECTION (ONE ROW HORIZONTAL SIDE SCROLL) -->
<div class="pm-city-reviews-card-v2 mb-5">
  
  <!-- Header Bar -->
  <div class="row align-items-center mb-4">
    <div class="col-md-7">
      <div class="pm-rev-eyebrow d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-2">
        <i class="bi bi-chat-heart-fill text-secondry"></i>
        <span class="text-uppercase fw-extrabold">REAL CUSTOMER STORIES</span>
      </div>
      <h3 class="pm-rev-title fw-extrabold mb-1">
        What People in <span class="pm-about-accent"><?= $city ?></span> Say About Us
      </h3>
      <p class="text-secondary small mb-0">Scroll horizontally to read genuine experience reviews.</p>
    </div>

    <!-- Rating Summary Box (Right) -->
    <div class="col-md-5 text-md-end">
      <div class="pm-rev-summary-box-v2 d-inline-flex align-items-center gap-3 p-3 rounded-4 bg-white border shadow-sm">
        <div class="pm-rev-summary-icon rounded-circle d-flex align-items-center justify-content-center text-white">
          <i class="bi bi-star-fill fs-5 text-warning"></i>
        </div>
        <div class="text-start">
          <div class="d-flex align-items-center gap-2">
            <span class="fw-extrabold text-dark-navy fs-5">4.9 / 5</span>
            <div class="text-warning extra-small">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
          <small class="d-block text-muted fw-semibold extra-small">1,600+ Verified Reviews in <?= $city ?></small>
        </div>
      </div>
    </div>
  </div>

  <!-- Review Cards Horizontal Scroll Container (One Row Side Scroll) -->
  <div class="pm-rev-scroll-container d-flex gap-4 overflow-x-auto pb-3 pt-2">
    
    <!-- Review Card 1 -->
    <div class="pm-rev-scroll-item">
      <div class="pm-rev-card-v2 rounded-4 p-4 border h-100 bg-white shadow-sm position-relative">
        <!-- Top Row: Customer Info & Rating -->
        <div class="d-flex align-items-center justify-content-between mb-3">
          <div class="d-flex align-items-center gap-3">
            <div class="pm-rev-avatar-v2 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm">
              RS
            </div>
            <div>
              <h5 class="mb-0 fw-extrabold text-dark-navy fs-6">Rohit Sharma</h5>
              <small class="text-muted extra-small d-flex align-items-center gap-1">
                <i class="bi bi-geo-alt-fill text-secondry"></i> <?= $city ?>, India
              </small>
            </div>
          </div>

          <div class="pm-rev-rating-pill d-inline-flex align-items-center gap-1 px-3 py-1 rounded-pill">
            <i class="bi bi-star-fill text-warning extra-small"></i>
            <span class="fw-extrabold text-dark-navy extra-small">5.0</span>
          </div>
        </div>

        <!-- Speech Bubble Quote Box -->
        <div class="pm-rev-bubble p-3 rounded-4 bg-light border position-relative">
          <p class="pm-rev-text-v2 mb-3 text-secondary">
            "Shifted my flat inside <?= $city ?>. They arrived at 8 AM sharp and finished packing faster than expected. Multi-layer bubble wrapping protected all fragile kitchenware."
          </p>
          
          <div class="d-flex align-items-center justify-content-between pt-2 border-top extra-small">
            <span class="fw-bold text-secondry">
              <i class="bi bi-house-door-fill me-1"></i> Home Relocation
            </span>
            <span class="text-success fw-bold">
              <i class="bi bi-check-circle-fill me-1"></i> Verified Customer
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- Review Card 2 -->
    <div class="pm-rev-scroll-item">
      <div class="pm-rev-card-v2 rounded-4 p-4 border h-100 bg-white shadow-sm position-relative">
        <!-- Top Row: Customer Info & Rating -->
        <div class="d-flex align-items-center justify-content-between mb-3">
          <div class="d-flex align-items-center gap-3">
            <div class="pm-rev-avatar-v2 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm">
              AG
            </div>
            <div>
              <h5 class="mb-0 fw-extrabold text-dark-navy fs-6">Ananya Gupta</h5>
              <small class="text-muted extra-small d-flex align-items-center gap-1">
                <i class="bi bi-geo-alt-fill text-secondry"></i> <?= $city ?>, India
              </small>
            </div>
          </div>

          <div class="pm-rev-rating-pill d-inline-flex align-items-center gap-1 px-3 py-1 rounded-pill">
            <i class="bi bi-star-fill text-warning extra-small"></i>
            <span class="fw-extrabold text-dark-navy extra-small">5.0</span>
          </div>
        </div>

        <!-- Speech Bubble Quote Box -->
        <div class="pm-rev-bubble p-3 rounded-4 bg-light border position-relative">
          <p class="pm-rev-text-v2 mb-3 text-secondary">
            "We moved office equipment and IT servers during the weekend in <?= $city ?>. The team coordinated perfectly with building management and completed everything seamlessly."
          </p>
          
          <div class="d-flex align-items-center justify-content-between pt-2 border-top extra-small">
            <span class="fw-bold text-secondry">
              <i class="bi bi-building-fill me-1"></i> Office Shifting
            </span>
            <span class="text-success fw-bold">
              <i class="bi bi-check-circle-fill me-1"></i> Verified Customer
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- Review Card 3 -->
    <div class="pm-rev-scroll-item">
      <div class="pm-rev-card-v2 rounded-4 p-4 border h-100 bg-white shadow-sm position-relative">
        <!-- Top Row: Customer Info & Rating -->
        <div class="d-flex align-items-center justify-content-between mb-3">
          <div class="d-flex align-items-center gap-3">
            <div class="pm-rev-avatar-v2 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm">
              SV
            </div>
            <div>
              <h5 class="mb-0 fw-extrabold text-dark-navy fs-6">Sandeep Verma</h5>
              <small class="text-muted extra-small d-flex align-items-center gap-1">
                <i class="bi bi-geo-alt-fill text-secondry"></i> <?= $city ?>, India
              </small>
            </div>
          </div>

          <div class="pm-rev-rating-pill d-inline-flex align-items-center gap-1 px-3 py-1 rounded-pill">
            <i class="bi bi-star-fill text-warning extra-small"></i>
            <span class="fw-extrabold text-dark-navy extra-small">4.8</span>
          </div>
        </div>

        <!-- Speech Bubble Quote Box -->
        <div class="pm-rev-bubble p-3 rounded-4 bg-light border position-relative">
          <p class="pm-rev-text-v2 mb-3 text-secondary">
            "Booked them after searching Packers and Movers in <?= $city ?>. Pricing stayed exactly as quoted — no hidden fees or extra charges at unloading time."
          </p>
          
          <div class="d-flex align-items-center justify-content-between pt-2 border-top extra-small">
            <span class="fw-bold text-secondry">
              <i class="bi bi-truck-front-fill me-1"></i> Intercity Move
            </span>
            <span class="text-success fw-bold">
              <i class="bi bi-check-circle-fill me-1"></i> Verified Customer
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- Review Card 4 -->
    <div class="pm-rev-scroll-item">
      <div class="pm-rev-card-v2 rounded-4 p-4 border h-100 bg-white shadow-sm position-relative">
        <!-- Top Row: Customer Info & Rating -->
        <div class="d-flex align-items-center justify-content-between mb-3">
          <div class="d-flex align-items-center gap-3">
            <div class="pm-rev-avatar-v2 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm">
              PN
            </div>
            <div>
              <h5 class="mb-0 fw-extrabold text-dark-navy fs-6">Priya Nair</h5>
              <small class="text-muted extra-small d-flex align-items-center gap-1">
                <i class="bi bi-geo-alt-fill text-secondry"></i> <?= $city ?>, India
              </small>
            </div>
          </div>

          <div class="pm-rev-rating-pill d-inline-flex align-items-center gap-1 px-3 py-1 rounded-pill">
            <i class="bi bi-star-fill text-warning extra-small"></i>
            <span class="fw-extrabold text-dark-navy extra-small">5.0</span>
          </div>
        </div>

        <!-- Speech Bubble Quote Box -->
        <div class="pm-rev-bubble p-3 rounded-4 bg-light border position-relative">
          <p class="pm-rev-text-v2 mb-3 text-secondary">
            "Extremely polite and helpful staff in <?= $city ?>. My elderly parents were stressed about furniture damage, but Move Mantra's team handled everything with care."
          </p>
          
          <div class="d-flex align-items-center justify-content-between pt-2 border-top extra-small">
            <span class="fw-bold text-secondry">
              <i class="bi bi-box-seam-fill me-1"></i> Packing &amp; Moving
            </span>
            <span class="text-success fw-bold">
              <i class="bi bi-check-circle-fill me-1"></i> Verified Customer
            </span>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>