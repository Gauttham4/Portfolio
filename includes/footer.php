<!-- Footer Section -->
    <footer class="footer" id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-grid">
                    <div class="footer-brand">
                        <div class="footer-logo">
                            <span class="logo-text">Zyntra</span>
                            <span class="logo-dot"></span>
                        </div>
                        <p class="footer-desc">Transforming ideas into digital reality with innovative solutions that drive business growth.</p>
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    
                    <div class="footer-links">
                        <h4 class="footer-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="#hero">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#process">Our Process</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-links">
                        <h4 class="footer-title">Services</h4>
                        <ul class="footer-list">
                            <li><a href="#services">Web Development</a></li>
                            <li><a href="#services">Mobile Applications</a></li>
                            <li><a href="#services">UI/UX Design</a></li>
                            <li><a href="#services">Digital Strategy</a></li>
                            <li><a href="#services">E-commerce Solutions</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-contact">
                        <h4 class="footer-title">Get In Touch</h4>
                        <ul class="contact-list">
                            <li><i class="fas fa-map-marker-alt"></i> 123 Innovation Avenue, Tech City</li>
                            <li><i class="fas fa-envelope"></i> <a href="mailto:info@zyntra.com">info@zyntra.com</a></li>
                            <li><i class="fas fa-phone-alt"></i> <a href="tel:+1234567890">+1 (234) 567-890</a></li>
                        </ul>
                        <div class="newsletter">
                            <form action="#" method="post" class="newsletter-form">
                                <input type="email" name="email" placeholder="Your email" required>
                                <button type="submit" class="btn-submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">&copy; <?php echo date('Y'); ?> Zyntra. All Rights Reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->
    
    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </a>
    <script>
        // Back to Top Button Functionality
document.addEventListener('DOMContentLoaded', function() {
  const backToTopButton = document.getElementById('backToTop');
  
  // Show/hide back to top button based on scroll position
  window.addEventListener('scroll', function() {
    if (window.pageYOffset > 300) {
      backToTopButton.classList.add('active');
    } else {
      backToTopButton.classList.remove('active');
    }
  });
  
  // Smooth scroll to top when button is clicked
  backToTopButton.addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
  
  // Form submission for newsletter
  const newsletterForm = document.querySelector('.newsletter-form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const emailInput = this.querySelector('input[type="email"]');
      
      if (emailInput.value) {
        // Here you would typically send an AJAX request to your server
        // For demo purposes, we'll just show an alert
        alert('Thank you for subscribing to our newsletter!');
        emailInput.value = '';
      }
    });
  }
});
    </script>
    <!-- JS Files -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/form-handler.js"></script>
</body>
</html>