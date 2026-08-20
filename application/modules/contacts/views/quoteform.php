  <div class="hero-quote-card-container" itemscope itemtype="https://schema.org/QuoteAction">
            <!-- Card Header -->
            <div class="hero-quote-header">
              <h3 class="hero-quote-title" itemprop="name">Get Free Moving Quote</h3>
              <p class="hero-quote-subtitle" itemprop="description">घर एवं ऑफिस शिफ्टिंग - सबसे कम दाम में!</p>
            </div>
            
            <div class="hero-quote-white-card">
              <!-- Card Body / Form -->
              <div class="card-body-form">
                <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
                  
                  <div class="row g-2">
                    <!-- Name Input -->
                    <div class="col-6">
                      <div class="input-wrap-custom">
                        <i class="bi bi-person input-icon-custom"></i>
                        <input type="text" name="name" class="form-control-custom" placeholder="Your Name" required>
                      </div>
                    </div>
                    
                    <!-- Phone Input -->
                    <div class="col-6">
                      <div class="input-wrap-custom">
                        <i class="bi bi-telephone input-icon-custom"></i>
                        <input type="tel" name="phone" class="form-control-custom" placeholder="Phone Number" required>
                      </div>
                    </div>
                    
                    <!-- Select Service -->
                    <div class="col-12">
                      <div class="input-wrap-custom select-wrap-custom">
                        <select name="mtype" class="form-select-custom">
                          <option value="" disabled selected>Select Service</option>
                          <option>Home Relocation</option>
                          <option>Office Relocation</option>
                          <option>Car Transportation</option>
                          <option>Bike Transportation</option>
                          <option>Packing &amp; Moving Service</option>
                          <option>Loading Unloading Service</option>
                        </select>
                      </div>
                    </div>
                    
                    <!-- Moving From -->
                    <div class="col-6">
                      <div class="input-wrap-custom">
                        <i class="bi bi-geo-alt input-icon-custom"></i>
                        <input type="text" name="mfrom" class="form-control-custom" value="<?= @$city ?>" placeholder="Moving From">
                      </div>
                    </div>
                    
                    <!-- Moving To -->
                    <div class="col-6">
                      <div class="input-wrap-custom">
                        <i class="bi bi-geo-alt input-icon-custom"></i>
                        <input type="text" name="mto" class="form-control-custom" placeholder="Moving To">
                      </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="col-12 mt-2">
                      <button type="submit" class="btn-submit-custom">
                        <i class="bi bi-send submit-btn-icon-desktop"></i>
                        <i class="bi bi-file-earmark-text submit-btn-icon-mobile"></i>
                        <span>Get Quote</span>
                      </button>
                    </div>
                  </div>
                  
                  <div id="quoteformresults" class="mt-2"></div>
                </form>
            </div>
          </div>

          </div>