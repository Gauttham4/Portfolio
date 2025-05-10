// Wait for the page to fully load
document.addEventListener('DOMContentLoaded', function() {
    // Get loading screen elements
    const loadingScreen = document.querySelector('.loading-screen');
    const pageLoader = document.querySelector('.page-loader');
    
    // Initialize variables
    let isLoaded = false;
    
    // Function to hide loading elements
    function hideLoaders() {
        // Add a small delay to make sure animations finish
        setTimeout(() => {
            if (loadingScreen) {
                loadingScreen.style.opacity = '0';
                loadingScreen.style.visibility = 'hidden';
            }
            
            if (pageLoader) {
                pageLoader.style.opacity = '0';
                pageLoader.style.visibility = 'hidden';
            }
            
            // Remove loaders from DOM after transition completes
            setTimeout(() => {
                if (loadingScreen) loadingScreen.style.display = 'none';
                if (pageLoader) pageLoader.style.display = 'none';
                
                // Animate elements in after loaders are gone
                animateElementsIn();
            }, 500); // Match this to your CSS transition time
        }, 1000); // Small delay for visual effect
    }
    
    // Function to animate elements in after loading
    function animateElementsIn() {
        // Animate the hero content if it exists
        const heroContent = document.querySelector('.hero-content');
        if (heroContent) {
            heroContent.classList.add('animated');
        }
        
        // Add your other animations here
    }
    
    // Handle page load
    window.addEventListener('load', function() {
        isLoaded = true;
        hideLoaders();
    });
    
    // Fallback - if the page takes too long to load, hide loaders anyway
    setTimeout(() => {
        if (!isLoaded) {
            console.log('Fallback loader hide triggered');
            hideLoaders();
        }
    }, 3000); // 3 seconds max wait time
    
    // Toggle mobile menu
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            menuToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    }
    
    // Smooth scroll for navigation links
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                // Close mobile menu if it's open
                if (menuToggle && menuToggle.classList.contains('active')) {
                    menuToggle.classList.remove('active');
                    navMenu.classList.remove('active');
                }
                
                // Scroll to the target section
                window.scrollTo({
                    top: targetSection.offsetTop - 80, // Adjust for header height
                    behavior: 'smooth'
                });
                
                // Update active link
                navLinks.forEach(link => link.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });
            document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const navMenu = document.querySelector('.nav-menu');
            const header = document.getElementById('header');
            const navLinks = document.querySelectorAll('.nav-link');
            const body = document.body;
            
            // Toggle mobile menu
            menuToggle.addEventListener('click', function() {
                this.classList.toggle('active');
                navMenu.classList.toggle('active');
                body.classList.toggle('menu-open');
            });
            
            // Close mobile menu when clicking a nav link
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    menuToggle.classList.remove('active');
                    navMenu.classList.remove('active');
                    body.classList.remove('menu-open');
                });
            });

            // Change header background on scroll
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Check scroll position on page load
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            }
        });
    // Update active navigation link on scroll
    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        
        // Get all sections
        const sections = document.querySelectorAll('section');
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100; // Adjust as needed
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                // Remove active class from all links
                navLinks.forEach(link => link.classList.remove('active'));
                
                // Add active class to corresponding link
                const activeLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    });
});

// Navigation toggle functionality
document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.getElementById('menu-toggle');
  const navMenu = document.querySelector('.nav-menu');
  const header = document.getElementById('header');
  const navLinks = document.querySelectorAll('.nav-link');
  
  // Toggle mobile menu
  menuToggle.addEventListener('click', function() {
    this.classList.toggle('active');
    navMenu.classList.toggle('active');
  });
  
  // Close mobile menu when clicking a nav link
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      menuToggle.classList.remove('active');
      navMenu.classList.remove('active');
    });
  });
  
  // Highlight active menu item and handle header background on scroll
  window.addEventListener('scroll', function() {
    let scrollPosition = window.scrollY;
    
    // Add/remove scrolled class to header
    if (scrollPosition > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
    
    // Highlight active menu item based on scroll position
    const sections = document.querySelectorAll('section[id]');
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 100;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute('id');
      
      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        navLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === '#' + sectionId) {
            link.classList.add('active');
          }
        });
      }
    });
  });
});

// Navigation toggle functionality
document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.getElementById('menu-toggle');
  const navMenu = document.querySelector('.nav-menu');
  const header = document.getElementById('header');
  const navLinks = document.querySelectorAll('.nav-link');
  
  // Apply header styling on page load based on scroll position
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  }
  
  // Toggle mobile menu
  menuToggle.addEventListener('click', function() {
    this.classList.toggle('active');
    navMenu.classList.toggle('active');
    document.body.classList.toggle('menu-open'); // Prevent background scrolling when menu is open
  });
  
  // Close mobile menu when clicking a nav link
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      menuToggle.classList.remove('active');
      navMenu.classList.remove('active');
      document.body.classList.remove('menu-open');
    });
  });
  
  // Close mobile menu when clicking outside
  document.addEventListener('click', function(e) {
    if (navMenu.classList.contains('active') && 
        !navMenu.contains(e.target) && 
        !menuToggle.contains(e.target)) {
      menuToggle.classList.remove('active');
      navMenu.classList.remove('active');
      document.body.classList.remove('menu-open');
    }
  });
  
  // Highlight active menu item and handle header background on scroll
  window.addEventListener('scroll', function() {
    let scrollPosition = window.scrollY;
    
    // Add/remove scrolled class to header
    if (scrollPosition > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
    
    // Highlight active menu item based on scroll position
    const sections = document.querySelectorAll('section[id]');
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 100;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute('id');
      
      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        navLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === '#' + sectionId) {
            link.classList.add('active');
          }
        });
      }
    });
  });
  
  // Handle window resize
  window.addEventListener('resize', function() {
    if (window.innerWidth > 992 && navMenu.classList.contains('active')) {
      menuToggle.classList.remove('active');
      navMenu.classList.remove('active');
      document.body.classList.remove('menu-open');
    }
  });
});