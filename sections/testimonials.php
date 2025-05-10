<section id="testimonials" class="testimonials-section">
        <div class="section-container">
            <div class="section-header">
                <h2 class="section-title">Client  <span class="services-text">Success</span></h2>
                <p class="section-subtitle">What our clients say about working with us</p>
            </div>
        
        <div class="testimonials-slider">
            <div class="testimonials-track">
                <div class="testimonial-card" style="--delay: 0">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">
                            <em>The team at Zyntra transformed our online presence completely. Their attention to detail and understanding of our brand was exceptional. Our new website has increased conversions by 45%.</em>
                        </p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/1.jpg" alt="Sarah Johnson">
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Sarah Johnson</h4>
                                <p class="author-position">Marketing Director, TechVision</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" style="--delay: 1">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">
                            <em>Zyntra's development team created a mobile app that exceeded our expectations. Their process was transparent, and they delivered on time and within budget. Highly recommended!</em>
                        </p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/1.jpg" alt="David Chen">
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">David Chen</h4>
                                <p class="author-position">Founder, InnovateLabs</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" style="--delay: 2">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">
                            <em>Working with Zyntra was a game-changer for our business. Their web application streamlined our internal processes and helped us scale efficiently. Their support after launch has been outstanding.</em>
                        </p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/1.jpg" alt="Emily Rodriguez">
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Emily Rodriguez</h4>
                                <p class="author-position">Operations Manager, GrowthFactory</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" style="--delay: 3">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">
                            <em>The space-inspired design Zyntra created for our platform has received countless compliments from our users. Their creative approach and technical expertise make them an ideal partner.</em>
                        </p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/1.jpg" alt="Michael Torres">
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Michael Torres</h4>
                                <p class="author-position">CEO, Orbit Digital</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" style="--delay: 4">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">
                            <em>From concept to execution, Zyntra delivered excellence at every step. Their UI/UX design philosophy transformed our complex data into intuitive, beautiful interfaces that our customers love.</em>
                        </p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/1.jpg" alt="Jennifer Park">
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Jennifer Park</h4>
                                <p class="author-position">Product Manager, DataSphere</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="video-card">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/your-video-id" title="Client Success Story" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="play-button"></div>
                </div>
                <div class="video-info">
                    <h3 class="video-title">Our Client Success Story</h3>
                    <p class="video-description">Watch how we helped TechVision transform their digital strategy and achieve remarkable growth.</p>
                </div>
            </div>
            
            <div class="slider-controls">
                <button class="slider-arrow prev" aria-label="Previous testimonial">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="slider-dots">
                    <button class="slider-dot active" aria-label="Go to slide 1"></button>
                    <button class="slider-dot" aria-label="Go to slide 2"></button>
                    <button class="slider-dot" aria-label="Go to slide 3"></button>
                    <button class="slider-dot" aria-label="Go to slide 4"></button>
                    <button class="slider-dot" aria-label="Go to slide 5"></button>
                </div>
                <button class="slider-arrow next" aria-label="Next testimonial">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Initialize testimonial slider functionality
    const slider = document.querySelector('.testimonials-slider');
    const track = document.querySelector('.testimonials-track');
    const slides = document.querySelectorAll('.testimonial-card');
    const dotsContainer = document.querySelector('.slider-dots');
    const dots = document.querySelectorAll('.slider-dot');
    const prevButton = document.querySelector('.slider-arrow.prev');
    const nextButton = document.querySelector('.slider-arrow.next');
    const videoPlayButton = document.querySelector('.play-button');

    // Mobile detection
    const isMobile = window.innerWidth < 768;
    
    // Variables
    let currentIndex = 0;
    let slideWidth;
    let slidePositions = [];
    
    // Recalculate dimensions on resize
    function calculateDimensions() {
        if (window.innerWidth < 768) {
            slideWidth = track.offsetWidth;
        } else if (window.innerWidth < 992) {
            slideWidth = track.offsetWidth / 2;
        } else {
            slideWidth = track.offsetWidth / 3;
        }
        
        // Calculate positions for grid layout
        slidePositions = [];
        if (window.innerWidth < 768) {
            // On mobile, show one testimonial at a time in stacked layout
            slides.forEach((_, index) => {
                slidePositions.push(index);
            });
        } else {
            // Desktop view uses grid layout - no movement needed
            slidePositions.push(0);
        }
    }
    
    // Set up initial state
    function initSlider() {
        calculateDimensions();
        updateSlider();
        
        // Handle dots click
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                goToSlide(index);
            });
        });
        
        // Handle arrow clicks
        prevButton.addEventListener('click', () => {
            goToSlide(currentIndex - 1);
        });
        
        nextButton.addEventListener('click', () => {
            goToSlide(currentIndex + 1);
        });
        
        // Handle play button click
        if (videoPlayButton) {
            videoPlayButton.addEventListener('click', function() {
                const iframe = document.querySelector('.video-container iframe');
                const videoSrc = iframe.src;
                
                // Add autoplay parameter
                if (videoSrc.indexOf('?') > -1) {
                    iframe.src = videoSrc + '&autoplay=1';
                } else {
                    iframe.src = videoSrc + '?autoplay=1';
                }
                
                // Hide play button
                this.style.opacity = '0';
                setTimeout(() => {
                    this.style.display = 'none';
                }, 500);
            });
        }
        
        // Add swipe functionality for mobile
        if (isMobile) {
            let touchStartX = 0;
            let touchEndX = 0;
            
            track.addEventListener('touchstart', (e) => {
                touchStartX = e.touches[0].clientX;
            }, false);
            
            track.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].clientX;
                handleSwipe();
            }, false);
            
            function handleSwipe() {
                const difference = touchStartX - touchEndX;
                if (difference > 50) {
                    // Swipe left
                    goToSlide(currentIndex + 1);
                } else if (difference < -50) {
                    // Swipe right
                    goToSlide(currentIndex - 1);
                }
            }
        }
    }
    
    // Go to specific slide
    function goToSlide(index) {
        // Handle edge cases
        if (index < 0) {
            index = 0;
        } else if (index > slides.length - 1) {
            index = slides.length - 1;
        }
        
        currentIndex = index;
        updateSlider();
    }
    
    // Update slider display
    function updateSlider() {
        // Update dot indicators
        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
        
        // Update arrow states
        prevButton.classList.toggle('disabled', currentIndex === 0);
        nextButton.classList.toggle('disabled', currentIndex === slides.length - 1);
        
        // Only apply translation in mobile view
        if (window.innerWidth < 768) {
            // Transform the track
            track.style.transform = `translateY(-${currentIndex * 100}%)`;
        }
    }
    
    // Handle window resize
    window.addEventListener('resize', () => {
        calculateDimensions();
        updateSlider();
    });
    
    // Initialize
    initSlider();
    
    // Add scroll animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });
    
    // Observe testimonial cards
    slides.forEach(card => {
        observer.observe(card);
    });
    
    // Observe video card if it exists
    const videoCard = document.querySelector('.video-card');
    if (videoCard) {
        observer.observe(videoCard);
    }
    
    // Space-theme particle effect (minimal)
    function createStars() {
        const container = document.querySelector('.testimonials-section');
        const starCount = 50; // Keep minimal for performance
        
        for (let i = 0; i < starCount; i++) {
            const star = document.createElement('div');
            star.classList.add('star');
            
            // Random positioning
            const x = Math.random() * 100;
            const y = Math.random() * 100;
            const size = Math.random() * 2;
            const duration = 3 + Math.random() * 7;
            const delay = Math.random() * 2;
            
            star.style.cssText = `
                position: absolute;
                left: ${x}%;
                top: ${y}%;
                width: ${size}px;
                height: ${size}px;
                background-color: rgba(255, 255, 255, 0.7);
                border-radius: 50%;
                z-index: -1;
                opacity: ${Math.random() * 0.7};
                animation: twinkle ${duration}s linear ${delay}s infinite;
            `;
            
            container.appendChild(star);
        }
    }
    
    // Add keyframe animation to head
    function addTwinkleAnimation() {
        const style = document.createElement('style');
        style.textContent = `
            @keyframes twinkle {
                0%, 100% { opacity: 0.3; }
                50% { opacity: 0.8; }
            }
        `;
        document.head.appendChild(style);
    }
    
    // Initialize space theme effects
    addTwinkleAnimation();
    createStars();
});
</script>