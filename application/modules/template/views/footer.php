<!-- FOOTER SECTION -->
<?php
$floatingPhoneNumber = preg_replace('/\D+/', '', (string) $phone);
$floatingWhatsappLink = !empty($whatsapphtml)
  ? $whatsapphtml
  : (!empty($floatingPhoneNumber) ? 'https://wa.me/' . $floatingPhoneNumber : '#');

?>
<!-- TOP CURVED WAVE LINE -->
<div class="footer-wave-top w-100 overflow-hidden position-relative" style="line-height: 0; margin-bottom: -1px; z-index: 2;">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 90" preserveAspectRatio="none" style="width: 100%; height: 75px; display: block;">
    <path fill="#030c21" d="M0,35 C240,85 480,10 720,45 C960,80 1200,10 1440,35 L1440,90 L0,90 Z"></path>
    <path fill="none" stroke="var(--primary-blue)" stroke-width="3" d="M0,35 C240,85 480,10 720,45 C960,80 1200,10 1440,35"></path>
  </svg>
</div>
<footer class="footer-section position-relative text-white pt-2 pb-3">
  <div class="container">

    <!-- 1. TOP TRUST BADGES BANNER -->
    <div class="footer-trust-banner rounded-5 p-3 mb-4">
      <div class="row g-3 align-items-center justify-content-between">
        <!-- Badge 1: 100% Safe Packing -->
        <div class="col-lg col-md-4 col-sm-6">
          <div class="d-flex align-items-center gap-3 pe-lg-3 trust-badge-item">
            <div class="trust-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-shield-check fs-4"></i>
            </div>
            <div>
              <h6 class="fw-bold mb-0 text-white fs-6">100% Safe Packing</h6>
              <span class="small text-white-50">Your belongings are in safe hands</span>
            </div>
          </div>
        </div>
        <!-- Badge 2: On-Time Delivery -->
        <div class="col-lg col-md-4 col-sm-6">
          <div class="d-flex align-items-center gap-3 pe-lg-3 trust-badge-item">
            <div class="trust-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-geo-alt-fill fs-4"></i>
            </div>
            <div>
              <h6 class="fw-bold mb-0 text-white fs-6">On-Time Delivery</h6>
              <span class="small text-white-50">We value your time and punctuality</span>
            </div>
          </div>
        </div>
        <!-- Badge 3: Affordable Pricing -->
        <div class="col-lg col-md-4 col-sm-6">
          <div class="d-flex align-items-center gap-3 pe-lg-3 trust-badge-item">
            <div class="trust-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-currency-rupee fs-4"></i>
            </div>
            <div>
              <h6 class="fw-bold mb-0 text-white fs-6">Affordable Pricing</h6>
              <span class="small text-white-50">Best services at competitive rates</span>
            </div>
          </div>
        </div>
        <!-- Badge 4: 24/7 Customer Support -->
        <div class="col-lg col-md-4 col-sm-6">
          <div class="d-flex align-items-center gap-3 pe-lg-3 trust-badge-item">
            <div class="trust-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-headset fs-4"></i>
            </div>
            <div>
              <h6 class="fw-bold mb-0 text-white fs-6">24/7 Customer Support</h6>
              <span class="small text-white-50">We are always here to assist you</span>
            </div>
          </div>
        </div>
        <!-- Badge 5: Doorstep Services -->
        <div class="col-lg col-md-4 col-sm-6">
          <div class="d-flex align-items-center gap-3 trust-badge-item border-0">
            <div class="trust-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-box-seam-fill fs-4"></i>
            </div>
            <div>
              <h6 class="fw-bold mb-0 text-white fs-6">Doorstep Services</h6>
              <span class="small text-white-50">Hassle-free pickup and delivery</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 2. MAIN FOOTER CONTENT GRID -->
    <div class="row g-4 justify-content-between mb-4">

      <!-- Column 1: Brand Info & Call Box -->
      <div class="col-xl-4 col-lg-4 col-md-6">
        <div class="pe-xl-3">
          <!-- Custom MoveMantra Brand Header -->
          <a href="<?= site_url() ?>" class="d-inline-flex align-items-center gap-3 text-decoration-none mb-3">
            <div class="footer-logo-truck-wrap flex-shrink-0">
              <svg width="58" height="40" viewBox="0 0 70 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Speed Motion Lines -->
                <line x1="2" y1="14" x2="16" y2="14" stroke="#82EEFD" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="6" y1="22" x2="18" y2="22" stroke="#82EEFD" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="0" y1="30" x2="14" y2="30" stroke="#82EEFD" stroke-width="2.5" stroke-linecap="round"/>
                <!-- Truck Body Outer Box -->
                <rect x="18" y="6" width="34" height="28" rx="3" stroke="#FFFFFF" stroke-width="3" fill="none"/>
                <!-- Cargo Boxes Inside Truck -->
                <path d="M24 12H35V24H24V12Z" stroke="#82EEFD" stroke-width="1.8" fill="none" stroke-dasharray="2 2"/>
                <path d="M38 15H47V21H38V15Z" stroke="#82EEFD" stroke-width="1.5" fill="none"/>
                <!-- Truck Cabin Front -->
                <path d="M52 16L62 16L68 25L68 34L52 34V16Z" stroke="#FFFFFF" stroke-width="3" stroke-linejoin="round" fill="none"/>
                <!-- Cabin Window -->
                <path d="M56 19H62L65 24H56V19Z" fill="#82EEFD" fill-opacity="0.7"/>
                <!-- Wheels -->
                <circle cx="28" cy="38" r="5" stroke="#FFFFFF" stroke-width="3" fill="#030c21"/>
                <circle cx="28" cy="38" r="1.5" fill="#82EEFD"/>
                <circle cx="58" cy="38" r="5" stroke="#FFFFFF" stroke-width="3" fill="#030c21"/>
                <circle cx="58" cy="38" r="1.5" fill="#82EEFD"/>
              </svg>
            </div>
            <div class="d-flex flex-column">
              <div class="lh-1">
                <span class="fw-bold text-white fs-3 font-outfit">Move</span><span class="fw-bold text-primary-light fs-3 font-outfit">Mantra</span>
              </div>
              <span class="text-white small fw-medium text-nowrap mt-1 font-outfit" style="letter-spacing: 0.3px;">Packers and Movers</span>
              <div class="mt-1" style="width: 45px; height: 2.5px; background: var(--primary-blue); border-radius: 2px;"></div>
            </div>
          </a>
          <p class="small text-white-50 mb-3 lh-base">
            <?= $company3 ?> Packers and Movers is a trusted name in the relocation industry, providing safe, secure and affordable packing &amp; moving services across India.
          </p>

          <!-- Social Media Icons -->
          <div class="d-flex align-items-center gap-2 mb-4">
            <a href="<?= !empty($facebookhtml) ? $facebookhtml : '#' ?>" class="footer-social-btn" aria-label="Facebook" target="_blank" rel="noopener"><i class="bi bi-facebook"></i></a>
            <a href="<?= !empty($instagramhtml) ? $instagramhtml : '#' ?>" class="footer-social-btn" aria-label="Instagram" target="_blank" rel="noopener"><i class="bi bi-instagram"></i></a>
            <a href="<?= !empty($twitterhtml) ? $twitterhtml : '#' ?>" class="footer-social-btn" aria-label="Twitter" target="_blank" rel="noopener"><i class="bi bi-twitter-x"></i></a>
            <a href="<?= !empty($linkedinhtml) ? $linkedinhtml : '#' ?>" class="footer-social-btn" aria-label="LinkedIn" target="_blank" rel="noopener"><i class="bi bi-linkedin"></i></a>
            <a href="<?= !empty($youtubehtml) ? $youtubehtml : '#' ?>" class="footer-social-btn" aria-label="YouTube" target="_blank" rel="noopener"><i class="bi bi-youtube"></i></a>
          </div>

          <!-- Need Help Call Us Card -->
          <div class="footer-help-card rounded-4 p-3 d-flex align-items-center gap-3">
            <div class="help-icon-circle rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="bi bi-headset fs-3 text-primary-light"></i>
            </div>
            <div>
              <span class="d-block small text-white-50 fw-semibold">Need Help? Call Us</span>
              <a href="<?= $phonehtml ?>" class="d-block fw-bold fs-5 text-primary-light text-decoration-none py-1"><?= $phone ?></a>
              <?php if (!empty($phone1)): ?>
                <a href="<?= $phonehtml1 ?>" class="d-block fw-bold fs-5 text-primary-light text-decoration-none"><?= $phone1 ?></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="col-xl-2 col-lg-2 col-md-3 col-6">
        <div class="footer-widget">
          <h5 class="footer-widget-title text-white fw-bold mb-3 pb-2 position-relative">QUICK LINKS</h5>
          <ul class="list-unstyled d-flex flex-column gap-2 mb-0 footer-link-list">
            <li><a href="<?= site_url() ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-chevron-right text-primary-light"></i> Home</a></li>
            <li><a href="<?= site_url('about-us') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-chevron-right text-primary-light"></i> About Us</a></li>
            <li><a href="<?= site_url('our-branches') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-chevron-right text-primary-light"></i> Network</a></li>
            <li><a href="<?= site_url('blog') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-chevron-right text-primary-light"></i> Blog</a></li>
            <li><a href="<?= site_url('faqs') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-chevron-right text-primary-light"></i> FAQs</a></li>
            <li><a href="<?= site_url('tracking') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-chevron-right text-primary-light"></i> Track Shipment</a></li>
            <li><a href="<?= site_url('contact-us') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-chevron-right text-primary-light"></i> Contact Us</a></li>
          </ul>
        </div>
      </div>

      <!-- Column 3: Our Services -->
      <div class="col-xl-3 col-lg-3 col-md-3 col-6">
        <div class="footer-widget">
          <h5 class="footer-widget-title text-white fw-bold mb-3 pb-2 position-relative">OUR SERVICES</h5>
          <ul class="list-unstyled d-flex flex-column gap-2 mb-0 footer-link-list">
            <li><a href="<?= site_url('home-relocation') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-house-door text-primary-light"></i> Household Shifting</a></li>
            <li><a href="<?= site_url('office-relocation') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-building text-primary-light"></i> Office Relocation</a></li>
            <li><a href="<?= site_url('car-transportation') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-truck text-primary-light"></i> Vehicle Transportation</a></li>
            <li><a href="<?= site_url('packing-and-moving') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-box-seam text-primary-light"></i> Packing &amp; Unpacking</a></li>
            <li><a href="<?= site_url('loading-unloading') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-boxes text-primary-light"></i> Loading &amp; Unloading</a></li>
            <li><a href="<?= site_url('bike-transportation') ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2"><i class="bi bi-database text-primary-light"></i> Storage Solutions</a></li>
          </ul>
        </div>
      </div>

      <!-- Column 4: Contact Us & Promise Badge -->
      <div class="col-xl-3 col-lg-3 col-md-6 col-12">
        <div class="footer-widget">
          <h5 class="footer-widget-title text-white fw-bold mb-3 pb-2 position-relative">CONTACT US</h5>
          <div class="row g-3 align-items-center">
            <div class="col-6 col-md-12">
              <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                <li>
                  <a href="<?= $phonehtml ?>" class="text-white text-decoration-none small d-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill text-primary-light"></i> <?= $phone ?>
                  </a>
                </li>
                <?php if (!empty($phone1)): ?>
                <li>
                  <a href="<?= $phonehtml1 ?>" class="text-white text-decoration-none small d-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill text-primary-light"></i> <?= $phone1 ?>
                  </a>
                </li>
                <?php endif; ?>
                <li>
                  <a href="<?= $mailhtml ?>" class="text-white-50 text-decoration-none small d-flex align-items-center gap-2 text-break">
                    <i class="bi bi-envelope-fill text-primary-light"></i> <?= $mail ?>
                  </a>
                </li>
                <li class="text-white-50 small d-flex align-items-start gap-2">
                  <i class="bi bi-geo-alt-fill text-primary-light flex-shrink-0 mt-1"></i>
                  <span><?= $address ?></span>
                </li>
                <li class="text-white-50 small d-flex align-items-center gap-2">
                  <i class="bi bi-headset text-primary-light"></i> 24/7 Customer Support
                </li>
              </ul>
            </div>

            <div class="col-6 col-md-12">
              <!-- Safety Promise Badge -->
              <div class="safety-promise-card text-center p-3 rounded-4 position-relative">
                <div class="promise-shield-icon mx-auto mb-2 d-flex align-items-center justify-content-center rounded-circle">
                  <i class="bi bi-shield-lock-fill fs-3 text-primary-light"></i>
                </div>
                <h6 class="promise-title text-white fst-italic mb-1 fs-6">Your Safety, Our Promise</h6>
                <p class="extra-small text-white-50 mb-0">We ensure complete safety of your belongings.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- 3. BOTTOM STATS COUNTER BANNER -->
    <div class="footer-stats-banner rounded-5 p-3 mb-4 position-relative overflow-hidden">
      <div class="row g-3 align-items-center position-relative z-1 pe-xl-5">
        <!-- Stat 1 -->
        <div class="col-xl-2 col-lg-4 col-6">
          <div class="d-flex align-items-center gap-3 stat-item">
            <div class="stat-icon-wrap flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-person-fill fs-3 text-primary-light"></i>
            </div>
            <div>
              <h4 class="fw-bold text-primary-light mb-0 fs-3"><?= $yearsExperience ?></h4>
              <span class="extra-small text-white-50 d-block">Years of Experience</span>
            </div>
          </div>
        </div>
        <!-- Stat 2 -->
        <div class="col-xl-2 col-lg-4 col-6">
          <div class="d-flex align-items-center gap-3 stat-item">
            <div class="stat-icon-wrap flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-people-fill fs-3 text-primary-light"></i>
            </div>
            <div>
              <h4 class="fw-bold text-primary-light mb-0 fs-3"><?= $happyClients ?></h4>
              <span class="extra-small text-white-50 d-block">Happy Customers</span>
            </div>
          </div>
        </div>
        <!-- Stat 3 -->
        <div class="col-xl-2 col-lg-4 col-6">
          <div class="d-flex align-items-center gap-3 stat-item">
            <div class="stat-icon-wrap flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-geo-alt-fill fs-3 text-primary-light"></i>
            </div>
            <div>
              <h4 class="fw-bold text-primary-light mb-0 fs-3"><?= $citiesCovered ?></h4>
              <span class="extra-small text-white-50 d-block">Cities Covered</span>
            </div>
          </div>
        </div>
        <!-- Stat 4 -->
        <div class="col-xl-2 col-lg-4 col-6">
          <div class="d-flex align-items-center gap-3 stat-item">
            <div class="stat-icon-wrap flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-person-gear fs-3 text-primary-light"></i>
            </div>
            <div>
              <h4 class="fw-bold text-primary-light mb-0 fs-3"><?= $proMovers ?></h4>
              <span class="extra-small text-white-50 d-block">Professional Movers</span>
            </div>
          </div>
        </div>
        <!-- Stat 5 -->
        <div class="col-xl-2 col-lg-4 col-12">
          <div class="d-flex align-items-center gap-3 stat-item border-0">
            <div class="stat-icon-wrap flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-patch-check-fill fs-3 text-primary-light"></i>
            </div>
            <div>
              <h4 class="fw-bold text-primary-light mb-0 fs-3"><?= $satisfactionRate ?></h4>
              <span class="extra-small text-white-50 d-block">Customer Satisfaction</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Moving Truck & Skyline SVG Illustration Graphic -->
      <div class="truck-skyline-wrapper position-absolute end-0 bottom-0 d-none d-xl-block pointer-events-none" style="right: -10px; bottom: -2px;">
        <svg width="320" height="105" viewBox="0 0 340 110" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- City Buildings Silhouette in Background -->
          <path d="M 210 100 V 30 H 225 V 50 H 240 V 20 H 255 V 60 H 270 V 10 H 285 V 40 H 300 V 70 H 315 V 30 H 330 V 100 Z" fill="rgba(2, 132, 199, 0.2)"/>
          <path d="M 220 100 V 45 H 232 V 100 M 245 100 V 25 H 252 V 100 M 275 100 V 15 H 280 V 100 M 305 100 V 35 H 310 V 100" stroke="rgba(130, 238, 253, 0.25)" stroke-width="1.5"/>

          <!-- Glowing Ground Light Beam -->
          <ellipse cx="230" cy="98" rx="100" ry="4" fill="url(#groundGlow)"/>
          <defs>
            <radialGradient id="groundGlow" cx="50%" cy="50%" r="50%">
              <stop offset="0%" stop-color="#82EEFD" stop-opacity="0.8"/>
              <stop offset="100%" stop-color="#0284C7" stop-opacity="0"/>
            </radialGradient>
          </defs>

          <!-- TRUCK CABIN (Left Facing) -->
          <path d="M 125 90 L 125 45 C 125 35 135 25 148 25 L 170 25 L 170 90 Z" fill="#031638" stroke="#82EEFD" stroke-width="2"/>
          <path d="M 132 45 C 135 35 142 30 152 30 L 165 30 L 165 52 L 132 52 Z" fill="#82EEFD" fill-opacity="0.4" stroke="#82EEFD" stroke-width="1.5"/>
          <path d="M 145 54 H 168 V 85 H 145 Z" stroke="rgba(130, 238, 253, 0.5)" stroke-width="1.5" fill="none"/>
          <rect x="148" y="65" width="5" height="2" fill="#82EEFD"/>
          <circle cx="126" cy="80" r="3" fill="#82EEFD"/>
          <path d="M 123 80 L 90 70 L 90 90 Z" fill="url(#headlightBeam)"/>
          <defs>
            <linearGradient id="headlightBeam" x1="100%" y1="50%" x2="0%" y2="50%">
              <stop offset="0%" stop-color="#82EEFD" stop-opacity="0.6"/>
              <stop offset="100%" stop-color="#82EEFD" stop-opacity="0"/>
            </linearGradient>
          </defs>

          <!-- TRUCK CONTAINER BOX -->
          <rect x="170" y="20" width="135" height="70" rx="4" fill="#051a42" stroke="#82EEFD" stroke-width="2.5"/>
          <rect x="175" y="25" width="125" height="60" rx="2" fill="none" stroke="rgba(130, 238, 253, 0.3)" stroke-width="1"/>

          <!-- 3D ISOMETRIC CUBE LOGO ON CONTAINER SIDE -->
          <g transform="translate(225, 42)">
            <polygon points="12,0 24,7 12,14 0,7" fill="#82EEFD" stroke="#051a42" stroke-width="1.5"/>
            <polygon points="0,7 12,14 12,28 0,21" fill="#0284C7" stroke="#051a42" stroke-width="1.5"/>
            <polygon points="12,14 24,7 24,21 12,28" fill="#0D47A1" stroke="#82EEFD" stroke-width="1.5"/>
            <line x1="12" y1="14" x2="12" y2="28" stroke="#82EEFD" stroke-width="1.5"/>
          </g>

          <!-- WHEELS WITH GLOW RIMS -->
          <circle cx="142" cy="92" r="9" fill="#030c21" stroke="#82EEFD" stroke-width="2.5"/>
          <circle cx="142" cy="92" r="4" fill="#0284C7" stroke="#82EEFD" stroke-width="1.5"/>
          <circle cx="255" cy="92" r="9" fill="#030c21" stroke="#82EEFD" stroke-width="2.5"/>
          <circle cx="255" cy="92" r="4" fill="#0284C7" stroke="#82EEFD" stroke-width="1.5"/>
          <circle cx="276" cy="92" r="9" fill="#030c21" stroke="#82EEFD" stroke-width="2.5"/>
          <circle cx="276" cy="92" r="4" fill="#0284C7" stroke="#82EEFD" stroke-width="1.5"/>
        </svg>
      </div>
    </div>

    <!-- 4. COPYRIGHT BOTTOM BAR -->
    <div class="footer-copyright-bar pt-3 border-top border-secondary border-opacity-25">
      <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-2">
        <div class="d-flex align-items-center gap-2 small text-white-50">
          <i class="bi bi-shield-lock-fill text-primary-light"></i>
          <span>SSL Secured Website</span>
        </div>
        <p class="small text-white-50 mb-0 text-center">
          &copy; <?= date('Y') ?> MoveMantra Packers and Movers. All Rights Reserved.
        </p>
        <div class="d-flex align-items-center gap-3 small">
          <a href="<?= site_url('privacy-policy') ?>" class="text-white-50 text-decoration-none">Privacy Policy</a>
          <span class="text-white-50">|</span>
          <a href="<?= site_url('terms-and-conditions') ?>" class="text-white-50 text-decoration-none">Terms &amp; Conditions</a>
        </div>
      </div>
    </div>

  </div>
</footer>

<!-- LEFT FLOATING CALL SPEED-DIAL FAB (PURE CSS) -->
<div class="speed-dial-wrapper speed-dial-left" tabindex="0">
  <div class="speed-dial-options">
    <a href="<?= $phonehtml1 ?>" class="speed-dial-sub-btn float-call-sub" title="Call <?= $phone1 ?>" aria-label="Call <?= $phone1 ?>">
      <div class="icon-wrap-sm"><i class="bi bi-telephone-fill"></i></div>
      <span class="sub-label"><?= $phone1 ?></span>
    </a>
    <a href="<?= $phonehtml ?>" class="speed-dial-sub-btn float-call-sub" title="Call <?= $phone ?>" aria-label="Call <?= $phone ?>">
      <div class="icon-wrap-sm"><i class="bi bi-telephone-fill"></i></div>
      <span class="sub-label"><?= $phone ?></span>
    </a>
  </div>
  <div class="float-btn float-call speed-dial-trigger" title="Call Us" aria-label="Call Us">
    <div class="icon-wrap"><i class="bi bi-telephone-fill"></i></div>
    <span>Call Now</span>
  </div>
</div>

<!-- RIGHT FLOATING SPEED-DIAL FAB (WHATSAPP) -->
<div class="speed-dial-wrapper speed-dial-right" tabindex="0">
  <div class="speed-dial-options">
    <a href="<?= $whatsapphtml1 ?>" target="_blank" rel="noopener" class="speed-dial-sub-btn float-wa-sub" title="WhatsApp <?= $phone1 ?>" aria-label="WhatsApp <?= $phone1 ?>">
      <span class="sub-label"><?= $phone1 ?></span>
      <div class="icon-wrap-sm"><i class="bi bi-whatsapp"></i></div>
    </a>
    <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="speed-dial-sub-btn float-wa-sub" title="WhatsApp <?= $phone ?>" aria-label="WhatsApp <?= $phone ?>">
      <span class="sub-label"><?= $phone ?></span>
      <div class="icon-wrap-sm"><i class="bi bi-whatsapp"></i></div>
    </a>
  </div>
  <div class="float-btn float-whatsapp speed-dial-trigger" title="WhatsApp Us" aria-label="WhatsApp Us">
    <div class="icon-wrap"><i class="bi bi-whatsapp"></i></div>
    <span>WhatsApp Us</span>
  </div>
</div>

<script>
document.querySelectorAll('.speed-dial-wrapper').forEach(function(wrapper) {
  wrapper.addEventListener('mouseenter', function() {
    wrapper.classList.add('open');
  });
  wrapper.addEventListener('mouseleave', function() {
    wrapper.classList.remove('open');
  });
  wrapper.addEventListener('click', function(e) {
    if (e.target.closest('.speed-dial-sub-btn')) return;
    wrapper.classList.toggle('open');
  });
});
</script>

<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('contacts/review_modal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/form.js"></script>
</body>

</html>