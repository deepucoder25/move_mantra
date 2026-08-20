<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$faqs = [
    [
        'question' => '1. How can I get a quote for moving services?',
        'answer' => 'You can request a free moving quote by filling out our quick online form or calling our customer support helpline.'
    ],
    [
        'question' => '2. Do you provide packing materials?',
        'answer' => 'Yes, we use multi-layer bubble wrap, heavy-duty corrugated boxes, stretch film, and wooden crating for maximum safety.'
    ],
    [
        'question' => '3. How do you ensure the safety of my belongings?',
        'answer' => 'Our experienced movers use specialized packing techniques, enclosed vehicle carriers, and real-time GPS tracking.'
    ],
    [
        'question' => '4. Do you offer insurance for goods?',
        'answer' => 'Yes, we provide comprehensive transit insurance coverage to protect your household goods and vehicles against unexpected events.'
    ],
    [
        'question' => '5. How long does the transportation take?',
        'answer' => 'Local moves take 1 day. Intercity and pan-India relocations depend on the distance and route, usually 2 to 5 business days.'
    ],
];
?>

<!-- FAQS WIDGET SECTION -->
<section class="faq-widget-section py-5 position-relative overflow-hidden">
  <div class="container position-relative z-2">
    
    <!-- Section Header -->
    <div class="text-center mb-5">
      <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
        <span class="header-line left-line"></span>
        <span class="text-uppercase text-secondry section-tag-title">FAQS</span>
        <span class="header-line right-line"></span>
      </div>
      <h2 class="fw-extrabold text-dark-navy display-6 mb-0">
        Frequently Asked Questions
      </h2>
    </div>

    <!-- 3D Graphic + Accordion Layout (Full Width) -->
    <div class="row align-items-center g-4 justify-content-center">
      
      <!-- 3D Box & Question Mark Illustration -->
      <div class="col-lg-3 col-md-4 col-12 text-center mb-3 mb-md-0">
        <div class="faq-3d-graphic position-relative d-inline-block">
          <img src="<?= base_url('assets/images/home_modules/faqs_question.png') ?>" alt="Moving FAQs Help" class="img-fluid custom-faq-img">
        </div>
      </div>

      <!-- Accordion List -->
      <div class="col-lg-8 col-md-8 col-12">
        <div class="accordion accordion-flush custom-faq-accordion" id="faqAccordion">
          <?php foreach ($faqs as $index => $faq): 
            $isOpen = ($index === 0);
          ?>
            <div class="accordion-item bg-white border rounded-3 mb-3 overflow-hidden shadow-2xs">
              <h3 class="accordion-header" id="heading-<?= $index ?>">
                <button class="accordion-button <?= $isOpen ? '' : 'collapsed' ?> fw-bold text-dark-navy fs-6 py-3 px-4" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#collapse-<?= $index ?>" 
                        aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" 
                        aria-controls="collapse-<?= $index ?>">
                  <?= htmlspecialchars($faq['question']) ?>
                </button>
              </h3>
              <div id="collapse-<?= $index ?>" 
                   class="accordion-collapse collapse <?= $isOpen ? 'show' : '' ?>" 
                   aria-labelledby="heading-<?= $index ?>" 
                   data-bs-parent="#faqAccordion">
                <div class="accordion-body text-secondary small lh-base py-3 px-4">
                  <?= htmlspecialchars($faq['answer']) ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>
