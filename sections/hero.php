<section class="hero" id="hero">
    <div class="hero-video-container">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="assets/images/hero2.mp4" type="video/mp4">
            <!-- Fallback for older browsers -->
            <img src="../../images/hero-fallback.jpg" alt="Hero Background" class="hero-fallback-img">
        </video>
    </div>
    
    <div class="hero-overlay"></div>
    
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="hero-title-thin">Transforming</span>
                <span class="hero-title-bold">Ideas into Digital Reality</span>
            </h1>
            
            <div class="hero-quote">
                <p class="quote-text"><em>"Innovate today, define tomorrow. Where vision meets execution."</em></p>
            </div>
            
            <p class="hero-description">
                We build cutting-edge web and mobile solutions that elevate your business and create lasting digital experiences.
            </p>
            
            <div class="hero-buttons">
                <a href="#services" class="btn btn-primary">
                    <span class="btn-text">Explore Our Services</span>
                    <span class="btn-icon">→</span>
                </a>
                <a href="#contact" class="btn btn-outline">
                    <span class="btn-text">Get in Touch</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="hero-particles" id="particles-js"></div>
    
    <div class="hero-scroll-indicator">
        <a href="#services" class="scroll-down">
            <span class="scroll-text">Discover</span>
            <div class="scroll-arrow-container">
                <span class="scroll-arrow"></span>
            </div>
        </a>
    </div>
</section>
<!-- End Hero Section -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Initialize particles.js if available
    if (typeof particlesJS !== 'undefined') {
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 50,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    }
                },
                "opacity": {
                    "value": 0.3,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 2,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.2,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 0.6
                        }
                    }
                }
            },
            "retina_detect": true
        });
    }

    // Add parallax effect on scroll
    window.addEventListener('scroll', function() {
        const scrollPosition = window.pageYOffset;
        const heroSection = document.querySelector('.hero');
        
        if (heroSection && scrollPosition <= heroSection.offsetHeight) {
            const videoContainer = document.querySelector('.hero-video-container');
            if (videoContainer) {
                videoContainer.style.transform = `translateY(${scrollPosition * 0.3}px)`;
            }
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add loading animation for video
    const heroVideo = document.querySelector('.hero-video');
    if (heroVideo) {
        heroVideo.addEventListener('loadeddata', function() {
            heroVideo.classList.add('loaded');
            document.querySelector('.hero').classList.add('video-loaded');
        });
        
        // Fallback if video doesn't load in 3 seconds
        setTimeout(function() {
            if (!heroVideo.classList.contains('loaded')) {
                document.querySelector('.hero').classList.add('video-loaded');
            }
        }, 3000);
    }
});
</script>