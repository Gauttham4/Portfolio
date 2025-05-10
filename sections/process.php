<section id="process" class="process-section">
        <div class="section-container">
            <div class="section-header">
                <h2 class="section-title">Our <span class="services-text">Process</span></h2>
                <p class="section-subtitle">Crafting digital excellence with precision and care</p>
            </div>

           
 <div class="process-content">
            <div class="process-video-container">
                <div class="glassmorphic-card">
                    <div class="video-wrapper">
                        <video id="process-video" poster="assets/images/video-poster.jpg" muted loop playsinline>
                            <source src="assets/images/stock.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-overlay">
                            <button class="play-btn" id="play-btn" aria-label="Play video">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="video-caption">
                        <p><em>See how we bring your vision to life</em></p>
                    </div>
                </div>
            </div>

            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <h3 class="step-title">Discovery & Planning</h3>
                        <p class="step-description">
                            <em>We begin by understanding your vision</em>. Through in-depth discussions, we identify your goals, target audience, and project requirements to create a comprehensive roadmap.
                        </p>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <h3 class="step-title">Design & Prototyping</h3>
                        <p class="step-description">
                            <em>We create intuitive and appealing designs</em> that align with your brand identity and provide interactive prototypes for your feedback and refinement.
                        </p>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">03</div>
                    <div class="step-content">
                        <h3 class="step-title">Development & Testing</h3>
                        <p class="step-description">
                            <em>Our expert developers build your solution</em> with clean, efficient code while our QA team ensures everything works flawlessly across all platforms.
                        </p>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">04</div>
                    <div class="step-content">
                        <h3 class="step-title">Launch & Support</h3>
                        <p class="step-description">
                            <em>We deploy your project and provide ongoing support</em> to ensure your digital solution continues to evolve with your business needs and market demands.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional feature cards -->
        <div class="additional-cards">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="feature-title">Innovative Solutions</h3>
                <p class="feature-description">
                    We utilize cutting-edge technologies to create future-proof digital experiences that set you apart from competitors in an evolving market.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tablet-alt"></i>
                </div>
                <h3 class="feature-title">Responsive Design</h3>
                <p class="feature-description">
                    All our solutions are built with a mobile-first approach ensuring perfect display and functionality across all devices and screen sizes.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="feature-title">Clean Code</h3>
                <p class="feature-description">
                    Our developers follow industry best practices, creating maintainable and scalable applications that grow alongside your business.
                </p>
            </div>
        </div>
    </div>
</section>

    <script>
// Enhanced video functionality with elegant transitions
document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('process-video');
    const playBtn = document.getElementById('play-btn');
    const videoOverlay = document.querySelector('.video-overlay');
    const videoWrapper = document.querySelector('.video-wrapper');
    
    if(video) {
        // Set video to loop
        video.loop = true;
        
        // Add class when video is playing
        video.addEventListener('play', function() {
            videoWrapper.classList.add('playing');
        });
        
        video.addEventListener('pause', function() {
            videoWrapper.classList.remove('playing');
        });
        
        // Function to handle play/pause via button
        if(playBtn) {
            playBtn.addEventListener('click', function() {
                if(video.paused) {
                    video.play();
                    videoOverlay.style.opacity = '0';
                    setTimeout(() => {
                        videoOverlay.style.display = 'none';
                    }, 300);
                } else {
                    video.pause();
                    videoOverlay.style.display = 'flex';
                    setTimeout(() => {
                        videoOverlay.style.opacity = '1';
                    }, 10);
                }
            });
        }
        
        // Set up Intersection Observer to autoplay when scrolled into view
        const videoObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // If video is visible
                if (entry.isIntersecting) {
                    // Add a slight delay for better effect
                    setTimeout(() => {
                        // Play video and hide overlay with elegant fade
                        video.play()
                            .then(() => {
                                videoOverlay.style.opacity = '0';
                                setTimeout(() => {
                                    videoOverlay.style.display = 'none';
                                }, 500);
                            })
                            .catch(err => {
                                console.log('Autoplay was prevented:', err);
                            });
                    }, 300);
                }
            });
        }, {
            root: null,
            threshold: 0.5 // Trigger when 50% of the element is visible
        });
        
        // Start observing the video
        videoObserver.observe(video.closest('.process-video-container'));
        
        // Add hover effects to step cards
        const stepCards = document.querySelectorAll('.step-content');
        stepCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.classList.add('card-hover');
            });
            
            card.addEventListener('mouseleave', function() {
                this.classList.remove('card-hover');
            });
        });
        
        // Add hover effects to feature cards
        const featureCards = document.querySelectorAll('.feature-card');
        featureCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.classList.add('card-hover');
            });
            
            card.addEventListener('mouseleave', function() {
                this.classList.remove('card-hover');
            });
        });
    }
});
    </script>