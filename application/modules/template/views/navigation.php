<body>
  <?php
  $megaWhatsappLink = !empty($whatsapphtml) ? $whatsapphtml : '#';

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
    $active_tab = 'home';
  } elseif ($class === 'about' || $class === 'gallery' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials', 'photo-gallery', 'privacy-policy', 'terms-and-conditions'])) {
    $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'home-shifting', 'office-relocation', 'car-transportation', 'bike-transportation', 'warehouse-and-storage', 'domestic-relocation', 'international-shifting', 'corporate-shifting', 'intercity-shifting', 'local-shifting', 'logistic-services', 'pet-relocation', 'home-relocation', 'storage-services', 'car-transportation-service'])) {
    $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
    $active_tab = 'locations';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
    $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
    $active_tab = 'contact';
  } elseif ($class === 'tracking' || $segment1 === 'tracking') {
    $active_tab = 'tracking';
  }
  ?>

  <!-- Slim Top Bar -->
  <div class="top-bar">
    <div class="container">
      <!-- Desktop Top Bar -->
      <div class="top-bar-desktop d-none d-lg-flex justify-content-between align-items-center">
        <!-- Left Side: Email & Location -->
        <div class="top-bar-left d-flex align-items-center gap-4">
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-2">
            <i class="bi bi-envelope"></i> <span><?= $mail ?></span>
          </a>
          <span class="d-flex align-items-center gap-2">
            <i class="bi bi-geo-alt-fill text-primary-light"></i> <span>Pan India Services</span>
          </span>
        </div>

        <!-- Right Side: Support, Phone & Social Icons -->
        <div class="top-bar-right d-flex align-items-center gap-4">
          <span class="d-flex align-items-center gap-2">
            <span>24/7 Customer Support</span>
          </span>
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-2 fw-semibold">
            <i class="bi bi-telephone-fill text-primary-light"></i> <span><?= $phone ?></span>
          </a>
          <!-- Social Icons -->
          <div class="social-icons d-flex align-items-center gap-3 ms-2">
            <a href="<?= !empty($facebookhtml) ? $facebookhtml : '#' ?>" aria-label="Facebook" target="_blank" rel="noopener"><i class="bi bi-facebook"></i></a>
            <a href="<?= !empty($instagramhtml) ? $instagramhtml : '#' ?>" aria-label="Instagram" target="_blank" rel="noopener"><i class="bi bi-instagram"></i></a>
            <a href="<?= !empty($youtubehtml) ? $youtubehtml : '#' ?>" aria-label="YouTube" target="_blank" rel="noopener"><i class="bi bi-youtube"></i></a>
            <a href="<?= !empty($linkedinhtml) ? $linkedinhtml : '#' ?>" aria-label="LinkedIn" target="_blank" rel="noopener"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

      <!-- Mobile Top Bar -->
      <div class="top-bar-mobile d-flex d-lg-none justify-content-between align-items-center py-1">
        <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-1 small text-white fw-semibold">
          <i class="bi bi-telephone-fill text-primary-light"></i> <span><?= $phone ?></span>
        </a>
        <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-1 small text-white">
          <i class="bi bi-envelope"></i> <span><?= $mail ?></span>
        </a>
        <div class="social-icons d-flex align-items-center gap-2 small">
          <a href="<?= !empty($facebookhtml) ? $facebookhtml : '#' ?>" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="<?= !empty($instagramhtml) ? $instagramhtml : '#' ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- SEO Friendly SiteNavigationElement Schema -->
  <?php
  $nav_schema = [
    "@context" => "https://schema.org",
    "@graph" => [
      ["@type" => "SiteNavigationElement", "name" => "Home", "url" => site_url()],
      ["@type" => "SiteNavigationElement", "name" => "About Us", "url" => site_url('about-us')],
      ["@type" => "SiteNavigationElement", "name" => "Services", "url" => site_url('our-services')],
      ["@type" => "SiteNavigationElement", "name" => "Network", "url" => site_url('our-branches')],
      ["@type" => "SiteNavigationElement", "name" => "Blog", "url" => site_url('blog')],
      ["@type" => "SiteNavigationElement", "name" => "FAQs", "url" => site_url('faqs')],
      ["@type" => "SiteNavigationElement", "name" => "Contact Us", "url" => site_url('contact-us')],
      ["@type" => "SiteNavigationElement", "name" => "Track", "url" => site_url('tracking')]
    ]
  ];
  ?>
  <script type="application/ld+json">
  <?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
  </script>

  <!-- Main Sticky Header -->
  <header class="main-header" id="mainHeader">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap">
        <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Packers and Movers"
          class="brand-logo">
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav d-none d-lg-flex align-items-center gap-3" itemscope
        itemtype="https://schema.org/SiteNavigationElement">
        <a itemprop="url" href="<?= site_url() ?>" class="nav-link<?= $active_tab === 'home' ? ' active' : '' ?>">
          <i class="bi bi-house-door me-1"></i><span itemprop="name">Home</span>
        </a>
        
        <div class="nav-item dropdown">
          <a href="<?= site_url('about-us') ?>"
            class="nav-link dropdown-toggle<?= $active_tab === 'about' ? ' active' : '' ?>">
            <i class="bi bi-info-circle me-1"></i>About Us <i class="bi bi-chevron-down ms-1"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item<?= $segment1 === 'about-us' ? ' active' : '' ?>"
                href="<?= site_url('about-us') ?>"><i class="bi bi-building me-2 text-primary-brand"></i>About Us</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'why-choose-us' ? ' active' : '' ?>"
                href="<?= site_url('why-choose-us') ?>"><i class="bi bi-shield-check me-2 text-primary-brand"></i>Why Choose Us</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'faqs' ? ' active' : '' ?>"
                href="<?= site_url('faqs') ?>"><i class="bi bi-question-circle me-2 text-primary-brand"></i>FAQ</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'testimonials' ? ' active' : '' ?>"
                href="<?= site_url('testimonials') ?>"><i class="bi bi-star me-2 text-primary-brand"></i>Testimonial</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'photo-gallery' ? ' active' : '' ?>"
                href="<?= site_url('photo-gallery') ?>"><i class="bi bi-images me-2 text-primary-brand"></i>Photo Gallery</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'privacy-policy' ? ' active' : '' ?>"
                href="<?= site_url('privacy-policy') ?>"><i class="bi bi-shield-lock me-2 text-primary-brand"></i>Privacy Policy</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'terms-and-conditions' ? ' active' : '' ?>"
                href="<?= site_url('terms-and-conditions') ?>"><i class="bi bi-file-earmark-text me-2 text-primary-brand"></i>Terms &amp; Conditions</a></li>
          </ul>
        </div>

        <div class="nav-item dropdown">
          <a href="<?= site_url('our-services') ?>"
            class="nav-link dropdown-toggle<?= $active_tab === 'services' ? ' active' : '' ?>">
            <i class="bi bi-truck me-1"></i>Services <i class="bi bi-chevron-down ms-1"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item<?= $segment1 === 'home-relocation' ? ' active' : '' ?>"
                href="<?= site_url('home-relocation') ?>"><i class="bi bi-house-gear me-2 text-primary-brand"></i>Home Relocation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'office-relocation' ? ' active' : '' ?>"
                href="<?= site_url('office-relocation') ?>"><i class="bi bi-building-gear me-2 text-primary-brand"></i>Office Relocation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'car-transportation' ? ' active' : '' ?>"
                href="<?= site_url('car-transportation') ?>"><i class="bi bi-car-front me-2 text-primary-brand"></i>Car Transportation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'bike-transportation' ? ' active' : '' ?>"
                href="<?= site_url('bike-transportation') ?>"><i class="bi bi-bicycle me-2 text-primary-brand"></i>Bike Transportation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'packing-and-moving' ? ' active' : '' ?>"
                href="<?= site_url('packing-and-moving') ?>"><i class="bi bi-box-seam me-2 text-primary-brand"></i>Packing &amp; Moving Service</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'loading-unloading' ? ' active' : '' ?>"
                href="<?= site_url('loading-unloading') ?>"><i class="bi bi-person-down me-2 text-primary-brand"></i>Loading Unloading Service</a></li>
          </ul>
        </div>

        <a href="<?= site_url('our-branches') ?>"
          class="nav-link<?= $active_tab === 'locations' ? ' active' : '' ?>"><i class="bi bi-geo-alt me-1"></i>Network</a>
        <a href="<?= site_url('blog') ?>" class="nav-link<?= $active_tab === 'blog' ? ' active' : '' ?>"><i class="bi bi-journal-text me-1"></i>Blog</a>
        <a href="<?= site_url('tracking') ?>" class="nav-link<?= $active_tab === 'tracking' ? ' active' : '' ?>"><i class="bi bi-box-seam me-1"></i>Track Order</a>
        <a href="<?= site_url('contact-us') ?>"
          class="nav-link<?= $active_tab === 'contact' ? ' active' : '' ?>"><i class="bi bi-telephone me-1"></i>Contact Us</a>
      </nav>

      <!-- Header Action Buttons -->
      <div class="d-flex align-items-center gap-3">
        <!-- Get a Quote Button -->
        <a href="#" class="btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
          <span>Get a Quote</span>
          <i class="bi bi-chevron-right ms-1"></i>
        </a>

        <!-- Hamburger for Mobile -->
        <button class="hamburger d-flex d-lg-none" id="openMenu" aria-label="Open navigation menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Full Screen Mega Menu (overlay menu when clicking hamburger) -->
  <nav class="mega-overlay" id="megaMenu" aria-label="Main navigation">
    <div class="mega-inner">
      <!-- Drawer Header Row -->
      <div class="drawer-header d-flex align-items-center justify-content-between pb-3 border-bottom">
        <a href="<?= site_url() ?>" class="d-flex align-items-center">
          <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?>" class="drawer-logo">
        </a>
        <button class="mega-close" id="closeMenu" aria-label="Close navigation menu">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>

      <!-- Navigation Accordion -->
      <div class="mobile-nav-list">
        <div class="mobile-nav-item">
          <a href="<?= site_url() ?>" class="mobile-nav-link<?= $active_tab === 'home' ? ' active' : '' ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-house-door-fill text-primary-brand"></i> Home
            </span>
          </a>
        </div>

        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'about' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle<?= $active_tab === 'about' ? ' active' : '' ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-info-circle-fill text-primary-brand"></i> About Us
            </span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('about-us') ?>" class="<?= $segment1 === 'about-us' ? 'active' : '' ?>">About Us</a>
            <a href="<?= site_url('why-choose-us') ?>" class="<?= $segment1 === 'why-choose-us' ? 'active' : '' ?>">Why Choose Us</a>
            <a href="<?= site_url('faqs') ?>" class="<?= $segment1 === 'faqs' ? 'active' : '' ?>">FAQ</a>
            <a href="<?= site_url('testimonials') ?>" class="<?= $segment1 === 'testimonials' ? 'active' : '' ?>">Testimonials</a>
            <a href="<?= site_url('photo-gallery') ?>" class="<?= $segment1 === 'photo-gallery' ? 'active' : '' ?>">Photo Gallery</a>
            <a href="<?= site_url('privacy-policy') ?>" class="<?= $segment1 === 'privacy-policy' ? 'active' : '' ?>">Privacy Policy</a>
            <a href="<?= site_url('terms-and-conditions') ?>" class="<?= $segment1 === 'terms-and-conditions' ? 'active' : '' ?>">Terms &amp; Conditions</a>
          </div>
        </div>

        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'services' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle<?= $active_tab === 'services' ? ' active' : '' ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-truck-flatbed text-primary-brand"></i> Services
            </span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('home-relocation') ?>" class="<?= $segment1 === 'home-relocation' ? 'active' : '' ?>">Home Relocation</a>
            <a href="<?= site_url('office-relocation') ?>" class="<?= $segment1 === 'office-relocation' ? 'active' : '' ?>">Office Relocation</a>
            <a href="<?= site_url('car-transportation') ?>" class="<?= $segment1 === 'car-transportation' ? 'active' : '' ?>">Car Transportation</a>
            <a href="<?= site_url('bike-transportation') ?>" class="<?= $segment1 === 'bike-transportation' ? 'active' : '' ?>">Bike Transportation</a>
            <a href="<?= site_url('packing-and-moving') ?>" class="<?= $segment1 === 'packing-and-moving' ? 'active' : '' ?>">Packing &amp; Moving Service</a>
            <a href="<?= site_url('loading-unloading') ?>" class="<?= $segment1 === 'loading-unloading' ? 'active' : '' ?>">Loading Unloading Service</a>
          </div>
        </div>

        <div class="mobile-nav-item">
          <a href="<?= site_url('our-branches') ?>" class="mobile-nav-link<?= $active_tab === 'locations' ? ' active' : '' ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-geo-alt-fill text-primary-brand"></i> Network
            </span>
          </a>
        </div>

        <div class="mobile-nav-item">
          <a href="<?= site_url('blog') ?>" class="mobile-nav-link<?= $active_tab === 'blog' ? ' active' : '' ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-journal-text text-primary-brand"></i> Blog
            </span>
          </a>
        </div>


        <div class="mobile-nav-item">
          <a href="<?= site_url('contact-us') ?>" class="mobile-nav-link<?= $active_tab === 'contact' ? ' active' : '' ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-envelope-fill text-primary-brand"></i> Contact Us
            </span>
          </a>
        </div>

        <div class="mobile-nav-item">
          <a href="<?= site_url('tracking') ?>" class="mobile-nav-link<?= $active_tab === 'tracking' ? ' active' : '' ?>">
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-box-seam-fill text-primary-brand"></i> Track Shipment
            </span>
          </a>
        </div>
      </div>

      <!-- Drawer Footer & Socials -->
      <div class="drawer-footer mt-auto pt-3 border-top">
        <div class="mobile-sec-pills d-flex flex-wrap gap-2 mb-3">
          <a href="<?= site_url('photo-gallery') ?>" class="drawer-pill">Gallery</a>
          <a href="<?= site_url('privacy-policy') ?>" class="drawer-pill">Privacy</a>
          <a href="<?= site_url('terms-and-conditions') ?>" class="drawer-pill">Terms</a>
        </div>
        <a href="<?= $megaWhatsappLink ?>" target="_blank" rel="noopener" class="btn-whatsapp-drawer d-flex align-items-center justify-content-center gap-2">
          <i class="bi bi-whatsapp"></i> <span>Chat on WhatsApp</span>
        </a>
      </div>
    </div>
  </nav>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const body = document.body;
    const mainHeader = document.getElementById('mainHeader');

    openMenu.addEventListener('click', () => {
      megaMenu.classList.add('active');
      body.classList.add('menu-open');
    });

    closeMenu.addEventListener('click', () => {
      megaMenu.classList.remove('active');
      body.classList.remove('menu-open');
    });

    // Toggle mobile dropdown accordions
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = button.closest('.mobile-nav-item');

        // Close other open dropdowns (accordion style)
        document.querySelectorAll('.mobile-nav-item.mobile-dropdown').forEach(item => {
          if (item !== parent) {
            item.classList.remove('active');
          }
        });

        parent.classList.toggle('active');
      });
    });

    // Close menu when clicking on backdrop overlay
    megaMenu.addEventListener('click', (e) => {
      if (e.target === megaMenu) {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    window.addEventListener('scroll', () => {
      mainHeader.classList.toggle('scrolled', window.scrollY > 20);
    });
  </script>