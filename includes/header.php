    <!-- Header Section -->
    <header class="header" id="header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a href="#home" class="logo-link">
                        <span class="logo-text">Zyntra</span>
                        <span class="logo-dot"></span>
                    </a>
                </div>
                
                <div class="menu-toggle" id="menu-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                
                <div class="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#process" class="nav-link">Process</a>
                        </li>
                        <li>
                            <a href="#project" class="nav-link">Portfolio</a>

                        </li>
                        <li class="nav-item">
                            <a href="#testimonials" class="nav-link">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item nav-cta">
                            <a href="#contact" class="btn btn-primary">GET QUOTE</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

     <script>
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
    </script>
