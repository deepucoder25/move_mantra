<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Terms & Conditions of Service',
    'bc_desc' => 'Read our transparent terms of service, shifting guidelines, payment policies, and transit conditions for ' . $company3 . '.',
    'breadcrumbs' => [
        ['name' => 'Terms and Conditions']
    ]
]);
?>

<!-- Main Terms & Conditions Section -->
<section class="lgl-page-section">
    <div class="container">
        
        <!-- Hero Card -->
        <div class="lgl-hero-card">
            <span class="lgl-last-updated">
                <i class="bi bi-journal-text"></i> Service Level Agreement &amp; Shifting Policy
            </span>
            <h1 class="chs-title">
                Terms &amp; Conditions for <span class="chs-gradient-text"><?= $company3 ?></span>
            </h1>
            <p class="chs-subtitle">
                Welcome to <strong><?= $company3 ?></strong>. These Terms and Conditions govern all relocation services, pre-move surveys, household packing, corporate office moving, and vehicle shipping booked with our enterprise across India.
            </p>
        </div>

        <div class="row g-4">
            <!-- Sidebar Navigation / Table of Contents -->
            <div class="col-lg-3">
                <div class="lgl-toc-card">
                    <div class="lgl-toc-title"><i class="bi bi-list-nested me-2"></i>Table of Contents</div>
                    <ul class="lgl-toc-list">
                        <li><a href="#tsec-1" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>1. Quotations &amp; Booking</a></li>
                        <li><a href="#tsec-2" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>2. Payment Schedule</a></li>
                        <li><a href="#tsec-3" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>3. Customer Obligations</a></li>
                        <li><a href="#tsec-4" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>4. Prohibited Items</a></li>
                        <li><a href="#tsec-5" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>5. Insurance &amp; Claims</a></li>
                        <li><a href="#tsec-6" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>6. Cancellation &amp; Refunds</a></li>
                        <li><a href="#tsec-7" class="lgl-toc-link"><i class="bi bi-chevron-right"></i>7. Limitation of Liability</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Legal Content -->
            <div class="col-lg-9">
                <div class="lgl-content-card">
                    
                    <!-- Section 1 -->
                    <div class="lgl-section" id="tsec-1">
                        <h2 class="lgl-sec-title"><i class="bi bi-clipboard-check-fill"></i> 1. Survey, Quotation &amp; Booking Confirmation</h2>
                        <p class="lgl-text">
                            All cost estimates issued by <?= $company3 ?> are based on either physical pre-move survey assessments or verified virtual inventory lists submitted by the customer:
                        </p>
                        <ul class="lgl-list">
                            <li>Quotations are valid for 30 calendar days from the date of issuance.</li>
                            <li>If additional items or unlisted heavy inventory are added on moving day, revised pricing will apply based on weight and volume additions.</li>
                            <li>A booking confirmation deposit (typically 10% to 20%) is required to lock in vehicle allocation and packing crew schedules for your designated moving date.</li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="lgl-section" id="tsec-2">
                        <h2 class="lgl-sec-title"><i class="bi bi-credit-card-fill"></i> 2. Payment Terms &amp; Settlement Policy</h2>
                        <p class="lgl-text">
                            We maintain 100% transparent payment structures with no hidden surcharges or post-delivery surprises:
                        </p>
                        <ul class="lgl-list">
                            <li><strong>Advance Payment:</strong> 80% to 90% of the total agreed invoice balance is payable upon loading completion at the pickup location.</li>
                            <li><strong>Final Balance:</strong> The remaining balance is payable prior to vehicle unloading at the destination drop address.</li>
                            <li>Payments must be remitted directly to authorized <?= $company3 ?> corporate bank accounts, official UPI handles, or cash receipts issued by our Move Manager.</li>
                        </ul>
                    </div>

                    <!-- Section 3 -->
                    <div class="lgl-section" id="tsec-3">
                        <h2 class="lgl-sec-title"><i class="bi bi-person-check-fill"></i> 3. Customer Responsibilities Prior to Packing</h2>
                        <p class="lgl-text">
                            To ensure a smooth relocation process, customers must adhere to the following pre-packing guidelines:
                        </p>
                        <ul class="lgl-list">
                            <li>Disconnect and defrost refrigerators, washing machines, and air conditioners prior to crew arrival.</li>
                            <li>Secure permission letters or lift/society gate passes from building societies at both pickup and drop destinations.</li>
                            <li>Inspect all packed goods and sign the official Consignment Note (Lorry Receipt / LR) before vehicle departure.</li>
                        </ul>
                    </div>

                    <!-- Section 4 -->
                    <div class="lgl-section" id="tsec-4">
                        <h2 class="lgl-sec-title"><i class="bi bi-exclamation-triangle-fill"></i> 4. Restricted &amp; Prohibited Goods</h2>
                        <p class="lgl-text">
                            For safety and statutory compliance under Indian transport regulations, <?= $company3 ?> strictly prohibits transporting the following items inside our container trucks:
                        </p>
                        <ul class="lgl-list">
                            <li><strong>Hazardous Materials:</strong> Flammable liquids, gas cylinders, paints, petrol/diesel cans, and fireworks.</li>
                            <li><strong>Valuables &amp; Cash:</strong> Hard currency, jewelry, gold, stock certificates, passports, and irreplaceable legal deeds (must be carried personally by customer).</li>
                            <li><strong>Perishables &amp; Contraband:</strong> Perishable food items, plants, livestock, and illegal substances.</li>
                        </ul>

                        <div class="lgl-alert-box">
                            <i class="bi bi-shield-exclamation"></i> <strong>Important Warning:</strong> <?= $company3 ?> accepts zero liability for loss or damage to cash, jewelry, or prohibited flammable materials loaded without prior written disclosure.
                        </div>
                    </div>

                    <!-- Section 5 -->
                    <div class="lgl-section" id="tsec-5">
                        <h2 class="lgl-sec-title"><i class="bi bi-shield-lock-fill"></i> 5. Transit Insurance &amp; Damage Claim Filing</h2>
                        <p class="lgl-text">
                            Comprehensive transit risk insurance protects your shipment during intercity highway movement:
                        </p>
                        <ul class="lgl-list">
                            <li>Insurance premium is calculated at 3% (or applicable statutory rates) of the declared total item valuation list provided by the customer.</li>
                            <li>In the rare event of physical damage during transit, written notification must be submitted within 24 hours of unloading accompanied by photographs.</li>
                            <li>Claims are settled directly by the authorized insurance underwriting company based on policy terms.</li>
                        </ul>
                    </div>

                    <!-- Section 6 -->
                    <div class="lgl-section" id="tsec-6">
                        <h2 class="lgl-sec-title"><i class="bi bi-arrow-counterclockwise"></i> 6. Cancellation &amp; Rescheduling Policy</h2>
                        <p class="lgl-text">
                            We understand plans change. Our flexible rescheduling policy includes:
                        </p>
                        <ul class="lgl-list">
                            <li><strong>Free Rescheduling:</strong> Allowed up to 48 hours prior to scheduled packing day without penalty.</li>
                            <li><strong>Cancellation:</strong> Full booking deposit refund if cancelled 72 hours before the move date. 50% deposit refund if cancelled within 24–48 hours of scheduled move.</li>
                        </ul>
                    </div>

                    <!-- Section 7 -->
                    <div class="lgl-section" id="tsec-7">
                        <h2 class="lgl-sec-title"><i class="bi bi-bank"></i> 7. Limitation of Liability &amp; Jurisdiction</h2>
                        <p class="lgl-text">
                            <?= $company3 ?> shall not be held liable for delivery delays caused by Force Majeure events including severe weather floods, national highway blockades, civil strikes, or statutory police RTO inspections. Any legal disputes arising under these terms shall be subject to the exclusive jurisdiction of local courts in India where our corporate office is registered.
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>