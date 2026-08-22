document.addEventListener("DOMContentLoaded", function () {
    // Inject custom validation styles
    if (!document.getElementById("validation-custom-styles")) {
        const style = document.createElement("style");
        style.id = "validation-custom-styles";
        style.innerHTML = `
            .input-error-highlight {
                border: 1.5px solid #EF4444 !important;
                background-color: #FEF2F2 !important;
                box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.15) !important;
                transition: all 0.25s ease-in-out !important;
            }
            .field-error-msg {
                color: #DC2626 !important;
                font-size: 0.78rem !important;
                font-weight: 700 !important;
                margin-top: 4px !important;
                margin-bottom: 4px !important;
                text-align: left !important;
                padding-left: 2px !important;
                display: flex !important;
                align-items: center !important;
                gap: 5px !important;
                width: 100% !important;
                line-height: 1.25 !important;
                animation: fieldErrorFadeIn 0.3s ease-out !important;
            }
            .field-error-msg i {
                color: #DC2626 !important;
                font-size: 0.85rem !important;
                flex-shrink: 0 !important;
            }
            @keyframes fieldErrorFadeIn {
                from { opacity: 0; transform: translateY(-4px); }
                to { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
    }

    // Attach submit handler to ALL forms with class .ajax-form
    document.querySelectorAll(".ajax-form").forEach(form => {

        // Real-time error clearing on typing
        form.querySelectorAll("input, textarea").forEach(input => {
            input.addEventListener("input", function() {
                const group = this.closest(".input-wrap-custom") || this.closest(".cnt-input-group") || this.closest(".vrl-input-group-stylish") || this.closest(".qte-input-group") || this.closest(".field-wrap") || this.closest(".form-group") || this;
                group.classList.remove("input-error-highlight");
                this.classList.remove("input-error-highlight");
                const nextErr = group.nextElementSibling;
                if (nextErr && nextErr.classList.contains("field-error-msg")) {
                    nextErr.remove();
                }
            });
        });

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            // Clear previous errors and highlights
            form.querySelectorAll(".input-error-highlight").forEach(el => el.classList.remove("input-error-highlight"));
            form.querySelectorAll(".field-error-msg").forEach(el => el.remove());

            const url = this.getAttribute("data-url");
            const resultBoxId = this.getAttribute("data-result");
            const resultBox = document.getElementById(resultBoxId);
            
            // Get fields
            const nameInput = form.querySelector('input[name="name"]');
            const phoneInput = form.querySelector('input[name="phone"]');

            let hasErrors = false;

            // Helper to show field error cleanly outside container
            function showError(inputEl, message) {
                if (!inputEl) return;
                
                const targetGroup = inputEl.closest(".input-wrap-custom") || inputEl.closest(".cnt-input-group") || inputEl.closest(".vrl-input-group-stylish") || inputEl.closest(".qte-input-group") || inputEl.closest(".field-wrap") || inputEl.closest(".form-group") || inputEl;
                targetGroup.classList.add("input-error-highlight");
                inputEl.classList.add("input-error-highlight");
                
                const errorDiv = document.createElement("div");
                errorDiv.className = "field-error-msg";
                errorDiv.innerHTML = `<i class="bi bi-exclamation-circle-fill"></i> ${message}`;
                
                // Insert error message neatly AFTER the group container
                targetGroup.insertAdjacentElement('afterend', errorDiv);
            }

            // Validate Name
            if (nameInput) {
                const val = nameInput.value.trim();
                if (!val) {
                    showError(nameInput, "The Name field is required.");
                    hasErrors = true;
                }
            }

            // Validate Phone
            if (phoneInput) {
                const val = phoneInput.value.trim();
                if (!val) {
                    showError(phoneInput, "The Mobile field is required.");
                    hasErrors = true;
                } else if (!/^\d+$/.test(val)) {
                    showError(phoneInput, "The Mobile field must contain only numbers.");
                    hasErrors = true;
                } else if (val.length !== 10) {
                    showError(phoneInput, "The Mobile field must be exactly 10 digits.");
                    hasErrors = true;
                }
            }

            if (hasErrors) {
                if (resultBox) {
                    resultBox.innerHTML = ""; // Clear loader/previous messages
                }
                return; // Stop form submission
            }

            const formData = new FormData(this);

            // Show loader
            if (resultBox) {
                resultBox.innerHTML = "<p style='color:orange; font-weight:bold; font-size:0.9rem; padding: 10px;'>Please wait...</p>";
            }

            fetch(url, {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {

                if (data.trim() === "1") {
                    data = `
                        <div class='alert alert-success' style='margin-top: 15px;'>
                        <p style='color:green; font-weight:bold; margin-bottom: 0;'>Thank you! Your request has been submitted successfully.</p>
                        </div>
                    `;
                    form.reset();
                }

                if (resultBox) {
                    resultBox.innerHTML = data;
                    setTimeout(() => resultBox.innerHTML = "", 8000);
                }
            })
            .catch(err => {
                if (resultBox) {
                    resultBox.innerHTML = "<p style='color:red; font-weight:bold;'>Something went wrong!</p>";
                }
            });

        });

    });

});
