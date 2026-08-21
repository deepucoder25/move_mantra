<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- PACKERS AND MOVERS RATE CHART & PRICING TABLES SECTION -->
<div class="pm-city-tables-card-v2 mb-5">
  
  <!-- Section Header -->
  <div class="mb-4 text-center text-md-start">
    <div class="pm-table-eyebrow d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-2">
      <i class="bi bi-currency-rupee text-secondry"></i>
      <span class="text-uppercase fw-extrabold">TRANSPARENT PRICING &amp; CHARGES</span>
    </div>
    <h3 class="pm-table-title fw-extrabold mb-1">
      Estimated Packers and Movers Charges in <span class="pm-about-accent"><?= $city ?></span>
    </h3>
    <p class="text-secondary small mb-0">
      Clear, transparent price estimates for local shifting, intercity moving, and vehicle transport in <?= $city ?>. No hidden fees!
    </p>
  </div>

  <!-- Pricing Nav Tabs -->
  <ul class="nav nav-pills pm-table-tabs mb-4 gap-2 flex-nowrap overflow-x-auto pb-2" id="priceTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active rounded-pill fw-bold text-nowrap" id="local-tab" data-bs-toggle="pill" data-bs-target="#local-price" type="button" role="tab" aria-controls="local-price" aria-selected="true">
        <i class="bi bi-house-door-fill me-1"></i> Local Home Shifting
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link rounded-pill fw-bold text-nowrap" id="intercity-tab" data-bs-toggle="pill" data-bs-target="#intercity-price" type="button" role="tab" aria-controls="intercity-price" aria-selected="false">
        <i class="bi bi-truck me-1"></i> Intercity / Interstate Shifting
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link rounded-pill fw-bold text-nowrap" id="vehicle-tab" data-bs-toggle="pill" data-bs-target="#vehicle-price" type="button" role="tab" aria-controls="vehicle-price" aria-selected="false">
        <i class="bi bi-car-front-fill me-1"></i> Vehicle Transport Rates
      </button>
    </li>
  </ul>

  <!-- Tab Contents -->
  <div class="tab-content" id="priceTabContent">

    <!-- TAB 1: LOCAL HOUSEHOLD SHIFTING CHARGES -->
    <div class="tab-pane fade show active" id="local-price" role="tabpanel" aria-labelledby="local-tab">
      <div class="pm-table-wrapper rounded-4 overflow-hidden border bg-white shadow-sm">
        <div class="table-responsive">
          <table class="table pm-pricing-table align-middle mb-0">
            <thead>
              <tr>
                <th>Shifting Type / Home Size</th>
                <th>Packing Charges</th>
                <th>Labor &amp; Handling</th>
                <th>Transport / Truck</th>
                <th>Total Estimated Cost</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex align-items-center gap-2">
                    <span class="pm-table-badge bg-primary-subtle text-primary fw-bold">1 BHK</span>
                    <span class="fw-bold text-dark-navy">Small House Shifting</span>
                  </div>
                </td>
                <td>₹1,500 - ₹3,000</td>
                <td>₹1,200 - ₹2,500</td>
                <td>₹1,800 - ₹3,500</td>
                <td><span class="pm-price-highlight fw-extrabold">₹4,500 - ₹9,000</span></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center gap-2">
                    <span class="pm-table-badge bg-info-subtle text-info-emphasis fw-bold">2 BHK</span>
                    <span class="fw-bold text-dark-navy">Standard Apartment</span>
                  </div>
                </td>
                <td>₹2,800 - ₹5,500</td>
                <td>₹2,500 - ₹4,500</td>
                <td>₹2,700 - ₹5,000</td>
                <td><span class="pm-price-highlight fw-extrabold">₹8,000 - ₹15,000</span></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center gap-2">
                    <span class="pm-table-badge bg-success-subtle text-success fw-bold">3 BHK</span>
                    <span class="fw-bold text-dark-navy">Large Home Shifting</span>
                  </div>
                </td>
                <td>₹4,500 - ₹8,500</td>
                <td>₹3,500 - ₹6,500</td>
                <td>₹4,000 - ₹7,000</td>
                <td><span class="pm-price-highlight fw-extrabold">₹12,000 - ₹22,000</span></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center gap-2">
                    <span class="pm-table-badge bg-warning-subtle text-warning-emphasis fw-bold">4+ BHK / Villa</span>
                    <span class="fw-bold text-dark-navy">Premium Villa Relocation</span>
                  </div>
                </td>
                <td>₹7,000 - ₹14,000</td>
                <td>₹5,500 - ₹10,000</td>
                <td>₹6,500 - ₹12,000</td>
                <td><span class="pm-price-highlight fw-extrabold">₹19,000 - ₹36,000</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- TAB 2: INTERCITY / INTERSTATE RELOCATION CHARGES -->
    <div class="tab-pane fade" id="intercity-price" role="tabpanel" aria-labelledby="intercity-tab">
      <div class="pm-table-wrapper rounded-4 overflow-hidden border bg-white shadow-sm">
        <div class="table-responsive">
          <table class="table pm-pricing-table align-middle mb-0">
            <thead>
              <tr>
                <th>Distance Range</th>
                <th>1 BHK Shifting</th>
                <th>2 BHK Shifting</th>
                <th>3 BHK Shifting</th>
                <th>Transit Insurance Option</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="fw-bold text-dark-navy">100 km - 350 km</span></td>
                <td>₹8,000 - ₹14,000</td>
                <td>₹12,000 - ₹20,000</td>
                <td>₹16,000 - ₹28,000</td>
                <td><span class="badge bg-light text-secondary border">3% Declared Value</span></td>
              </tr>
              <tr>
                <td><span class="fw-bold text-dark-navy">350 km - 750 km</span></td>
                <td>₹11,000 - ₹18,000</td>
                <td>₹16,000 - ₹26,000</td>
                <td>₹22,000 - ₹36,000</td>
                <td><span class="badge bg-light text-secondary border">3% Declared Value</span></td>
              </tr>
              <tr>
                <td><span class="fw-bold text-dark-navy">750 km - 1200 km</span></td>
                <td>₹14,000 - ₹23,000</td>
                <td>₹20,000 - ₹32,000</td>
                <td>₹28,000 - ₹44,000</td>
                <td><span class="badge bg-light text-secondary border">3% Declared Value</span></td>
              </tr>
              <tr>
                <td><span class="fw-bold text-dark-navy">1200+ km (All India)</span></td>
                <td>₹18,000 - ₹29,000</td>
                <td>₹25,000 - ₹40,000</td>
                <td>₹34,000 - ₹55,000</td>
                <td><span class="badge bg-light text-secondary border">3% Declared Value</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- TAB 3: VEHICLE TRANSPORTATION RATES -->
    <div class="tab-pane fade" id="vehicle-price" role="tabpanel" aria-labelledby="vehicle-tab">
      <div class="pm-table-wrapper rounded-4 overflow-hidden border bg-white shadow-sm">
        <div class="table-responsive">
          <table class="table pm-pricing-table align-middle mb-0">
            <thead>
              <tr>
                <th>Vehicle Type</th>
                <th>Local Transport (Within <?= $city ?>)</th>
                <th>Outstation (300 - 800 km)</th>
                <th>Long Distance (800+ km)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-bicycle text-secondry fs-5"></i>
                    <span class="fw-bold text-dark-navy">Standard Two-Wheeler / Bike</span>
                  </div>
                </td>
                <td>₹1,200 - ₹2,200</td>
                <td>₹2,800 - ₹4,500</td>
                <td>₹4,500 - ₹7,000</td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-scooter text-secondry fs-5"></i>
                    <span class="fw-bold text-dark-navy">Premium / Heavy Sports Bike</span>
                  </div>
                </td>
                <td>₹1,800 - ₹3,000</td>
                <td>₹3,800 - ₹6,000</td>
                <td>₹5,500 - ₹9,500</td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-car-front text-secondry fs-5"></i>
                    <span class="fw-bold text-dark-navy">Hatchback / Compact Car</span>
                  </div>
                </td>
                <td>₹3,000 - ₹5,000</td>
                <td>₹6,500 - ₹11,000</td>
                <td>₹10,500 - ₹17,000</td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-truck-front text-secondry fs-5"></i>
                    <span class="fw-bold text-dark-navy">Sedan / SUV / Luxury Car</span>
                  </div>
                </td>
                <td>₹4,500 - ₹7,500</td>
                <td>₹9,000 - ₹15,000</td>
                <td>₹14,000 - ₹24,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

  <!-- Bottom Rate Disclaimer & Get Quote Card -->
  <div class="pm-table-footer-card mt-4 p-3 p-md-4 rounded-4 bg-light border d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
    <div class="d-flex align-items-center gap-3">
      <div class="pm-table-info-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
        <i class="bi bi-info-circle-fill fs-4 text-secondry"></i>
      </div>
      <div>
        <h6 class="fw-bold text-dark-navy mb-1 fs-6">Need an Exact Customized Quotation?</h6>
        <p class="extra-small text-secondary mb-0">Actual shifting charges depend on inventory volume, distance, packing layer quality, and floor height.</p>
      </div>
    </div>
    <button type="button" class="btn btn-pm-about-primary rounded-pill fw-bold text-nowrap px-4 py-2 flex-shrink-0 shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal">
      Get Instant Free Quote <i class="bi bi-arrow-right ms-1"></i>
    </button>
  </div>

</div>
