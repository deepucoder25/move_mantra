<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions (FAQs)',
    'bc_desc' => 'Find instant answers to common questions about packing charges, home shifting timelines, transit insurance, car transport, and relocation procedures with ' . $company3 . '.',
    'breadcrumbs' => [
        ['name' => 'Frequently Asked Questions']
    ]
]);
?>

<!-- Main FAQs Section -->
<section class="faq-page-section">
    <div class="container">
        
        <!-- Hero Introduction Card -->
        <div class="faq-hero-card">
            <span class="chs-badge">
                <i class="bi bi-question-circle-fill"></i> Help &amp; Support Hub
            </span>
            <h1 class="chs-title">
                Got Questions? We Have <span class="chs-gradient-text">Instant Answers</span>
            </h1>
            <p class="chs-subtitle">
                Explore our comprehensive knowledge base covering household shifting, price estimates, transit insurance, vehicle transportation, and live tracking for <strong><?= $company3 ?></strong>.
            </p>
        </div>

        <!-- FAQ Categories List -->
        <div class="faq-accordion" id="faqPageAccordion">

            <!-- FAQ Item 1 -->
            <div class="faq-item faq-q-item">
                <button class="faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#faq-ans-1" aria-expanded="true">
                    <span class="faq-btn-text">
                        <span class="faq-q-icon"><i class="bi bi-calculator"></i></span>
                        How can I get an instant moving quote from <?= $company3 ?>?
                    </span>
                    <i class="bi bi-chevron-down faq-chevron"></i>
                </button>
                <div id="faq-ans-1" class="collapse show" data-bs-parent="#faqPageAccordion">
                    <div class="faq-body">
                        Getting a free moving estimate is fast and effortless! You can click on the "Get Free Moving Quote" button at the top of our website, fill out our quick 1-minute inventory form, or call our customer support helpline directly at <strong><?= $phone ?></strong>. Our relocation experts will provide a transparent, 100% fixed estimate with zero hidden costs.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item faq-q-item">
                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-ans-2" aria-expanded="false">
                    <span class="faq-btn-text">
                        <span class="faq-q-icon"><i class="bi bi-box-seam"></i></span>
                        What packing materials do you use for delicate household items?
                    </span>
                    <i class="bi bi-chevron-down faq-chevron"></i>
                </button>
                <div id="faq-ans-2" class="collapse" data-bs-parent="#faqPageAccordion">
                    <div class="faq-body">
                        We use premium 3-layer protective materials including heavy-duty virgin bubble wrap, 5-ply corrugated sheets, waterproof stretch film, foam corner protectors, and custom wooden crating for glassware, electronics, and valuable antique furniture.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item faq-q-item">
                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-ans-3" aria-expanded="false">
                    <span class="faq-btn-text">
                        <span class="faq-q-icon"><i class="bi bi-shield-check"></i></span>
                        Is transit insurance included during the shifting process?
                    </span>
                    <i class="bi bi-chevron-down faq-chevron"></i>
                </button>
                <div id="faq-ans-3" class="collapse" data-bs-parent="#faqPageAccordion">
                    <div class="faq-body">
                        Yes, <?= $company3 ?> provides comprehensive all-risk transit insurance. Our policy covers full declared values of goods against unexpected natural calamities, road accidents, or handling hazards during long-distance intercity transportation.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item faq-q-item">
                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-ans-4" aria-expanded="false">
                    <span class="faq-btn-text">
                        <span class="faq-q-icon"><i class="bi bi-truck"></i></span>
                        How do you safely transport cars and bikes across states?
                    </span>
                    <i class="bi bi-chevron-down faq-chevron"></i>
                </button>
                <div id="faq-ans-4" class="collapse" data-bs-parent="#faqPageAccordion">
                    <div class="faq-body">
                        Vehicles are transported using dedicated enclosed car carrier trailers and covered bike containers. Cars are secured with wheel stoppers and safety belts inside the trailer, ensuring zero scratches or mileage accumulation during transit.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item faq-q-item">
                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-ans-5" aria-expanded="false">
                    <span class="faq-btn-text">
                        <span class="faq-q-icon"><i class="bi bi-geo-alt"></i></span>
                        How can I track my consignment location during transport?
                    </span>
                    <i class="bi bi-chevron-down faq-chevron"></i>
                </button>
                <div id="faq-ans-5" class="collapse" data-bs-parent="#faqPageAccordion">
                    <div class="faq-body">
                        All <?= $company3 ?> containerized vehicles are fitted with live GPS tracking systems. You receive real-time location updates via SMS/WhatsApp or by contacting your dedicated Move Manager anytime 24/7.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item faq-q-item">
                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-ans-6" aria-expanded="false">
                    <span class="faq-btn-text">
                        <span class="faq-q-icon"><i class="bi bi-clock"></i></span>
                        How long does a typical local or domestic move take?
                    </span>
                    <i class="bi bi-chevron-down faq-chevron"></i>
                </button>
                <div id="faq-ans-6" class="collapse" data-bs-parent="#faqPageAccordion">
                    <div class="faq-body">
                        Local intra-city moves are completed within a single day (typically 4 to 8 hours depending on volume). Domestic intercity relocations across India take between 2 to 5 business days depending on distance and vehicle type.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="faq-item faq-q-item">
                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-ans-7" aria-expanded="false">
                    <span class="faq-btn-text">
                        <span class="faq-q-icon"><i class="bi bi-currency-rupee"></i></span>
                        Are there any hidden costs or unexpected charges on delivery?
                    </span>
                    <i class="bi bi-chevron-down faq-chevron"></i>
                </button>
                <div id="faq-ans-7" class="collapse" data-bs-parent="#faqPageAccordion">
                    <div class="faq-body">
                        Absolutely not. <?= $company3 ?> adheres strictly to transparent pricing policies. Your written quote includes packing, loading, transportation, toll taxes, unloading, and unpacking with 100% zero hidden charges on delivery day.
                    </div>
                </div>
            </div>

        </div>

        <!-- Still Have Questions Card -->
        <div class="faq-help-card">
            <div class="faq-help-icon"><i class="bi bi-headset"></i></div>
            <h3 class="chs-title fs-3 mb-2">Still Have Unanswered Questions?</h3>
            <p class="chs-subtitle mx-auto mb-4">
                Can't find the answer you're looking for? Please contact our friendly customer support team for personalized assistance.
            </p>
            <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                <a href="<?= $phonehtml ?>" class="cnt-branch-btn text-center justify-content-center">
                    <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                </a>
                <button type="button" class="abt-cta-btn-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <i class="bi bi-calculator-fill"></i> Get Instant Quote
                </button>
            </div>
        </div>

    </div>
</section>