// Form Handler Scripts for Zyntra

document.addEventListener('DOMContentLoaded', function() {
    // Contact form interactions
    const contactForm = document.querySelector('.contact-form');
    
    // Process contact form if it exists on the page
    if (contactForm) {
        // Form input animation
        const formInputs = contactForm.querySelectorAll('input, select, textarea');
        
        formInputs.forEach(input => {
            // Focus effects
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('input-focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('input-focused');
                }
            });
            
            // Check for pre-filled inputs (e.g., after form submission with errors)
            if (input.value) {
                input.parentElement.classList.add('input-focused');
            }
        });

        // Find all required fields for validation
        const requiredFields = contactForm.querySelectorAll('[required]');
        
        // Add input event listeners to all required fields
        requiredFields.forEach(field => {
            field.addEventListener('input', function() {
                if (this.value.trim()) {
                    this.classList.remove('invalid');
                    const errorMessage = this.parentElement.querySelector('.error-message');
                    if (errorMessage) {
                        errorMessage.remove();
                    }
                }
            });
        });
        
        // Client-side form validation
        contactForm.addEventListener('submit', function(event) {
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('invalid');
                    
                    // Create or update error message
                    let errorMessage = field.parentElement.querySelector('.error-message');
                    if (!errorMessage) {
                        errorMessage = document.createElement('div');
                        errorMessage.className = 'error-message';
                        field.parentElement.appendChild(errorMessage);
                    }
                    errorMessage.textContent = 'This field is required';
                } else {
                    field.classList.remove('invalid');
                    const errorMessage = field.parentElement.querySelector('.error-message');
                    if (errorMessage) {
                        errorMessage.remove();
                    }
                    
                    // Email validation
                    if (field.type === 'email' && !isValidEmail(field.value)) {
                        isValid = false;
                        field.classList.add('invalid');
                        
                        let errorMessage = field.parentElement.querySelector('.error-message');
                        if (!errorMessage) {
                            errorMessage = document.createElement('div');
                            errorMessage.className = 'error-message';
                            field.parentElement.appendChild(errorMessage);
                        }
                        errorMessage.textContent = 'Please enter a valid email address';
                    }
                }
            });
            
            if (!isValid) {
                event.preventDefault();
                
                // Scroll to first error
                const firstError = contactForm.querySelector('.invalid');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstError.focus();
                }
            } else {
                // Show loading state
                const submitButton = contactForm.querySelector('button[type="submit"]');
                const originalText = submitButton.textContent;
                submitButton.innerHTML = '<span class="loading-spinner"></span> Sending...';
                submitButton.disabled = true;
                
                // Form will submit normally, this is just for UX
                // The actual form processing happens server-side in contact-form.php
            }
        });
    }
    
    // Flash message auto-dismiss
    const flashMessages = document.querySelectorAll('.alert');
    flashMessages.forEach(message => {
        if (message.classList.contains('alert-success')) {
            setTimeout(() => {
                fadeOut(message);
            }, 5000);
        }
    });
    
    // Handle anchor links smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                // Account for fixed header
                const headerHeight = document.querySelector('header').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Update URL without page jump
                history.pushState(null, null, targetId);
            }
        });
    });
});

// Helper functions
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function fadeOut(element) {
    let opacity = 1;
    const timer = setInterval(() => {
        if (opacity <= 0.1) {
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = opacity;
        opacity -= 0.1;
    }, 50);
}