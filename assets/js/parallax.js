
// Parallax Effects for Zyntra Landing Page

document.addEventListener('DOMContentLoaded', function() {
    // Initialize parallax effects
    initParallaxBackgrounds();
    initParallaxElements();
    initTiltEffect();
    initSmoothScrolling();
});

// Parallax backgrounds
function initParallaxBackgrounds() {
    const parallaxBgs = document.querySelectorAll('.parallax-bg');
    
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        
        parallaxBgs.forEach(bg => {
            const speed = parseFloat(bg.dataset.speed || 0.5);
            const yPos = -(scrollY * speed);
            bg.style.transform = `translate3d(0, ${yPos}px, 0)`;
        });
    });
}

// Parallax elements that move as you scroll
function initParallaxElements() {
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    
    const elementObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // Only apply parallax to visible elements for performance
            if (entry.isIntersecting) {
                const element = entry.target;
                const speed = parseFloat(element.dataset.parallax || 0.2);
                const direction = element.dataset.direction || 'up';
                
                // Get the element's distance from the top of the page
                const rect = element.getBoundingClientRect();
                const offsetTop = rect.top + window.pageYOffset;
                
                // Function to update position
                const updatePosition = () => {
                    const scrollY = window.scrollY;
                    const windowHeight = window.innerHeight;
                    
                    // Calculate relative position
                    const relativeScroll = scrollY + windowHeight - offsetTop;
                    if (relativeScroll <= 0) return;
                    
                    // Calculate transform based on direction
                    let transform = '';
                    switch (direction) {
                        case 'up':
                            transform = `translateY(${-relativeScroll * speed}px)`;
                            break;
                        case 'down':
                            transform = `translateY(${relativeScroll * speed}px)`;
                            break;
                        case 'left':
                            transform = `translateX(${-relativeScroll * speed}px)`;
                            break;
                        case 'right':
                            transform = `translateX(${relativeScroll * speed}px)`;
                            break;
                    }
                    
                    element.style.transform = transform;
                };
                
                // Initial position
                updatePosition();
                
                // Update on scroll
                window.addEventListener('scroll', updatePosition);
            }
        });
    }, { threshold: 0.1 });
    
    parallaxElements.forEach(element => {
        elementObserver.observe(element);
    });
}

// Tilt effect for cards and sections
function initTiltEffect() {
    const tiltElements = document.querySelectorAll('.tilt-effect');
    
    tiltElements.forEach(element => {
        const intensity = parseFloat(element.dataset.tiltIntensity || 5);
        
        element.addEventListener('mousemove', (e) => {
            // Get position of mouse relative to element
            const rect = element.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            // Center position
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            // Calculate the tilt
            const tiltX = ((y - centerY) / centerY) * intensity;
            const tiltY = -((x - centerX) / centerX) * intensity;
            
            // Apply the transform
            element.style.transform = `perspective(1000px) rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
        });
        
        // Reset on mouse leave
        element.addEventListener('mouseleave', () => {
            element.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
        });
    });
}

// Smooth scrolling for page
function initSmoothScrolling() {
    if ('scrollBehavior' in document.documentElement.style) return; // Use native if available
    
    // Polyfill for browsers that don't support smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (!targetElement) return;
            
            const headerHeight = document.querySelector('header').offsetHeight;
            const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
            
            // Smooth scroll animation
            let startPosition = window.pageYOffset;
            let distance = targetPosition - startPosition;
            let startTime = null;
            
            function animation(currentTime) {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const duration = 1000; // 1 second animation
                
                const run = easeInOutCubic(timeElapsed, startPosition, distance, duration);
                window.scrollTo(0, run);
                
                if (timeElapsed < duration) {
                    requestAnimationFrame(animation);
                }
            }
            
            // Easing function
            function easeInOutCubic(t, b, c, d) {
                t /= d / 2;
                if (t < 1) return c / 2 * t * t * t + b;
                t -= 2;
                return c / 2 * (t * t * t + 2) + b;
            }
            
            requestAnimationFrame(animation);
        });
    });
}

// Parallax mouse movement effect
function initMouseParallax() {
    const mouseElements = document.querySelectorAll('.mouse-parallax');
    
    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;
        
        mouseElements.forEach(element => {
            const speed = parseFloat(element.dataset.mouseSpeed || 0.05);
            const rect = element.getBoundingClientRect();
            
            // Calculate the center of the element
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;
            
            // Calculate the movement offset based on mouse position
            const moveX = (mouseX - centerX) * speed;
            const moveY = (mouseY - centerY) * speed;
            
            element.style.transform = `translate(${moveX}px, ${moveY}px)`;
        });
    });
}

// Export functions for use in other scripts
window.ZyntraParallax = {
    backgrounds: initParallaxBackgrounds,
    elements: initParallaxElements,
    tiltEffect: initTiltEffect,
    smoothScroll: initSmoothScrolling,
    mouseParallax: initMouseParallax
};