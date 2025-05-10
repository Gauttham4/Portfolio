<section id="services" class="services-section">
        <div class="section-container">
            <div class="section-header">
                <h2 class="section-title">Our <span class="services-text">Services</span></h2>
                <p class="section-subtitle">Crafting digital excellence with precision and care</p>
            </div>
            
            <div class="services-grid">
                <!-- Row 1 -->
                <div class="service-card fade-in-up" style="animation-delay: 0.1s;">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">
                        <em>Beautifully crafted websites</em> that engage visitors and convert them into customers.
                    </p>
                    <div class="service-hover-content">
                        <ul class="service-features">
                            <li>Responsive Design</li>
                            <li>E-commerce Solutions</li>
                            <li>CMS Integration</li>
                            <li>Performance Optimization</li>
                        </ul>
                    </div>
                </div>
                
                <div class="service-card fade-in-up" style="animation-delay: 0.2s;">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="service-title">Mobile Apps</h3>
                    <p class="service-description">
                        <em>Intuitive and powerful</em> mobile applications that deliver exceptional user experiences.
                    </p>
                    <div class="service-hover-content">
                        <ul class="service-features">
                            <li>iOS & Android Development</li>
                            <li>Cross-platform Solutions</li>
                            <li>UI/UX Design</li>
                            <li>App Store Optimization</li>
                        </ul>
                    </div>
                </div>
                
                <div class="service-card fade-in-up" style="animation-delay: 0.3s;">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="service-title">Web Applications</h3>
                    <p class="service-description">
                        <em>Sophisticated solutions</em> that streamline your business processes and increase efficiency.
                    </p>
                    <div class="service-hover-content">
                        <ul class="service-features">
                            <li>Custom Web Apps</li>
                            <li>SaaS Development</li>
                            <li>API Integration</li>
                            <li>Cloud Solutions</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Row 2 -->
                <div class="service-card fade-in-up" style="animation-delay: 0.4s;">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-description">
                        <em>Captivating interfaces</em> designed with your users in mind for maximum engagement.
                    </p>
                    <div class="service-hover-content">
                        <ul class="service-features">
                            <li>User Research</li>
                            <li>Wireframing & Prototyping</li>
                            <li>Visual Design</li>
                            <li>User Testing</li>
                        </ul>
                    </div>
                </div>
                
                <div class="service-card fade-in-up" style="animation-delay: 0.5s;">
                    <div class="service-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="service-title">Digital Marketing</h3>
                    <p class="service-description">
                        <em>Strategic campaigns</em> that boost your online presence and drive meaningful results.
                    </p>
                    <div class="service-hover-content">
                        <ul class="service-features">
                            <li>SEO Optimization</li>
                            <li>Content Marketing</li>
                            <li>Social Media Management</li>
                            <li>Analytics & Reporting</li>
                        </ul>
                    </div>
                </div>
                
                <div class="service-card fade-in-up" style="animation-delay: 0.6s;">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="service-title">Maintenance & Support</h3>
                    <p class="service-description">
                        <em>Reliable technical support</em> to keep your digital assets running smoothly and securely.
                    </p>
                    <div class="service-hover-content">
                        <ul class="service-features">
                            <li>24/7 Technical Support</li>
                            <li>Security Updates</li>
                            <li>Performance Monitoring</li>
                            <li>Regular Backups</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Intersection Observer to trigger animations when scrolling
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.service-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            cards.forEach(card => {
                observer.observe(card);
            });
        });
    </script>