
// Animations & Effects for Zyntra Landing Page

document.addEventListener('DOMContentLoaded', function() {
    // Initialize animation observers
    initFadeInAnimations();
    initSlideAnimations();
    initFloatingElements();
    initTypingEffect();
    initGlowPulse();
});

// Fade-in animations for elements as they scroll into view
function initFadeInAnimations() {
    const fadeElements = document.querySelectorAll('.fade-in');
    
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Once the animation has played, we can stop observing
                fadeObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15, // When 15% of the element is visible
        rootMargin: '0px 0px -50px 0px' // Negative bottom margin to trigger earlier
    });
    
    fadeElements.forEach(element => {
        fadeObserver.observe(element);
    });
}

// Slide-in animations from different directions
function initSlideAnimations() {
    const slideElements = document.querySelectorAll('.slide-left, .slide-right, .slide-up, .slide-down');
    
    const slideObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                slideObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    });
    
    slideElements.forEach(element => {
        slideObserver.observe(element);
    });
}

// Floating animation for elements
function initFloatingElements() {
    const floatingElements = document.querySelectorAll('.floating');
    
    floatingElements.forEach((element, index) => {
        // Set different animation durations and delays for variety
        const duration = 3 + Math.random() * 2; // Between 3-5s
        const delay = Math.random() * 2; // Between 0-2s
        
        element.style.animationDuration = `${duration}s`;
        element.style.animationDelay = `${delay}s`;
    });
}

// Typing effect for headings
function initTypingEffect() {
    const typingElements = document.querySelectorAll('.typing-effect');
    
    typingElements.forEach(element => {
        const text = element.dataset.text || element.textContent;
        element.textContent = '';
        element.style.visibility = 'visible';
        
        const typeObserver = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                let i = 0;
                const typingInterval = setInterval(() => {
                    if (i < text.length) {
                        element.textContent += text.charAt(i);
                        i++;
                    } else {
                        clearInterval(typingInterval);
                    }
                }, 70); // Speed of typing
                
                typeObserver.unobserve(element);
            }
        }, { threshold: 0.5 });
        
        typeObserver.observe(element);
    });
}

// Glowing pulse effect for elements with .glow-pulse class
function initGlowPulse() {
    const glowElements = document.querySelectorAll('.glow-pulse');
    
    glowElements.forEach((element, index) => {
        // Randomize animation phases
        const delay = Math.random() * 3; // Between 0-3s
        element.style.animationDelay = `${delay}s`;
    });
}

// Parallax effect for backgrounds (called from parallax.js)
function createParallaxEffect(selector, speedFactor = 0.5) {
    const elements = document.querySelectorAll(selector);
    
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        
        elements.forEach(element => {
            const offsetY = scrollY * speedFactor;
            element.style.transform = `translateY(${offsetY}px)`;
        });
    });
}

// Staggered animation for lists
function animateStaggered(selector, baseDelay = 0.1) {
    const items = document.querySelectorAll(selector);
    
    items.forEach((item, index) => {
        item.style.animationDelay = `${baseDelay * index}s`;
    });
}

// Scroll progress indicator
function initScrollProgress() {
    const progressBar = document.querySelector('.scroll-progress');
    if (!progressBar) return;
    
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        progressBar.style.width = scrolled + '%';
    });
}

// Reveal sections on scroll
function revealOnScroll() {
    const sections = document.querySelectorAll('section');
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
            }
        });
    }, { threshold: 0.1 });
    
    sections.forEach(section => {
        revealObserver.observe(section);
    });
}

// Export functions for use in other scripts
window.ZyntraAnimations = {
    fadeIn: initFadeInAnimations,
    slideAnimations: initSlideAnimations,
    floating: initFloatingElements,
    typingEffect: initTypingEffect,
    glowPulse: initGlowPulse,
    parallax: createParallaxEffect,
    staggered: animateStaggered,
    scrollProgress: initScrollProgress,
    revealSections: revealOnScroll
};