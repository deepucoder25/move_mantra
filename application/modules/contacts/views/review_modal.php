
<!-- Review Form Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 contact-review-modal-content">
            <!-- Modal Header -->
            <div class="contact-review-modal-header">
                <div class="d-flex align-items-center gap-3">
                    <div class="contact-review-header-icon">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div>
                        <h3 class="modal-title contact-review-modal-title" id="reviewModalLabel">Share Your Experience</h3>
                        <span class="contact-review-modal-sub">Help us improve MoveMantra services</span>
                    </div>
                </div>
                <button type="button" class="contact-review-close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-4">
                <form action="<?= site_url('reviews/submit') ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="contact-review-form-label"><i class="bi bi-person-fill me-1 text-primary-light"></i> Your Full Name</label>
                        <input type="text" name="name" class="form-control contact-review-form-control" placeholder="Enter your full name" required>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="contact-review-form-label"><i class="bi bi-envelope-fill me-1 text-primary-light"></i> Email Address</label>
                            <input type="email" name="email" class="form-control contact-review-form-control" placeholder="name@example.com" required>
                        </div>
                        <div class="col-md-6">
                            <label class="contact-review-form-label"><i class="bi bi-geo-alt-fill me-1 text-primary-light"></i> Your City / Route</label>
                            <input type="text" name="city" class="form-control contact-review-form-control" placeholder="e.g. Lucknow" value="<?= isset($city) ? $city : '' ?>" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="contact-review-form-label"><i class="bi bi-star-half me-1 text-primary-light"></i> Your Star Rating</label>
                        <div class="contact-review-rating-card">
                            <div class="contact-rating-select" id="star-rating">
                                <i class="bi bi-star-fill contact-rating-item active" data-value="1"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="2"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="3"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="4"></i>
                                <i class="bi bi-star-fill contact-rating-item active" data-value="5"></i>
                            </div>
                            <div class="contact-review-rating-badge">
                                <span id="rating-emoji" class="contact-review-emoji">😍</span>
                                <span id="rating-number" class="contact-review-number">5</span><span class="contact-review-total">/5</span>
                            </div>
                        </div>
                        <input type="hidden" name="rating" id="rating-input" value="5">
                    </div>

                    <div class="mb-3">
                        <label class="contact-review-form-label"><i class="bi bi-camera-fill me-1 text-primary-light"></i> Upload Move Photos (Optional, Max 4)</label>
                        <input type="file" id="review-images-input" name="review_images[]" class="form-control contact-review-form-control" accept="image/jpeg, image/png, image/webp" multiple>
                        <small class="contact-review-file-hint"><i class="bi bi-info-circle me-1"></i>Max 150 KB per image. Select up to 4 photos (JPG, PNG, WebP).</small>
                    </div>

                    <div class="mb-3">
                        <label class="contact-review-form-label"><i class="bi bi-chat-left-text-fill me-1 text-primary-light"></i> Your Detailed Feedback</label>
                        <textarea name="review" class="form-control contact-review-form-control" rows="3" placeholder="Write your shifting experience, packing quality, and overall feedback..." required></textarea>
                    </div>

                    <button type="submit" class="contact-btn-submit-review">
                        <i class="bi bi-send-fill me-2"></i> Submit My Review
                    </button>
                </form>

                <div class="contact-review-footer-note mt-3 text-center">
                    <i class="bi bi-shield-check me-1 text-success"></i> Verified Relocation Feedback • 100% Data Confidentiality
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const emojis = {
        1: '😠',
        2: '😞',
        3: '😐',
        4: '🙂',
        5: '😍'
    };
    const emojiDisplay = document.getElementById('rating-emoji');
    const numberDisplay = document.getElementById('rating-number');
    
    document.querySelectorAll('.contact-rating-item').forEach(star => {
        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            document.getElementById('rating-input').value = value;
            emojiDisplay.textContent = emojis[value];
            numberDisplay.textContent = value;
            
            document.querySelectorAll('.contact-rating-item').forEach(s => {
                if (s.getAttribute('data-value') <= value) {
                    s.classList.add('active');
                    s.classList.replace('bi-star', 'bi-star-fill');
                } else {
                    s.classList.remove('active');
                    s.classList.replace('bi-star-fill', 'bi-star');
                }
            });
        });
    });
    
    const fileInput = document.getElementById('review-images-input');
    if (fileInput) {
        fileInput.addEventListener('change', function() {
            if (this.files.length > 4) {
                alert('You can only select up to 4 images max. Please try again.');
                this.value = ''; // Reset the input
            }
        });
    }
});
</script>
