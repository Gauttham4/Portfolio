
    <section class="projects-section">
                <div class="section-container">
            <div class="section-header">
                <h2 class="section-title">Our  <span class="services-text">Portfolio</span></h2>
                <p class="section-subtitle">What our clients say about working with us</p>
            </div>
            <div class="filter-container">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="web">Web Development</button>
                <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
                <button class="filter-btn" data-filter="ui">UI/UX Design</button>
                <button class="filter-btn" data-filter="ecommerce">E-Commerce</button>
            </div>
            
            <div class="projects-container">
                <!-- E-commerce Project Card -->
                <div class="project-card" data-category="web ecommerce">
                    <img src="assets/images/3.jpg" alt="E-commerce Website" class="project-image">
                    <div class="project-content">
                        <span class="project-category">E-Commerce</span>
                        <h3 class="project-title">Modern Online Store</h3>
                        <p class="project-description">
                            A full-featured e-commerce platform with seamless payment integration,
                            inventory management, and responsive design.
                        </p>
                        <a href="#" class="project-link">
                            View Project <span class="project-link-arrow">→</span>
                        </a>
                    </div>
                </div>
                
                <!-- Mobile App Project Card -->
                <div class="project-card" data-category="mobile">
                    <img src="assets/images/4.jpg" alt="Fitness App" class="project-image">
                    <div class="project-content">
                        <span class="project-category">Mobile App</span>
                        <h3 class="project-title">FitTrack Fitness App</h3>
                        <p class="project-description">
                            A comprehensive fitness tracking application with workout plans,
                            nutrition guides, and progress monitoring.
                        </p>
                        <a href="#" class="project-link">
                            View Project <span class="project-link-arrow">→</span>
                        </a>
                    </div>
                </div>
                
                <!-- UI/UX Project Card -->
                <div class="project-card" data-category="ui">
                    <img src="assets/images/3.jpg" alt="Banking Dashboard" class="project-image">
                    <div class="project-content">
                        <span class="project-category">UI/UX Design</span>
                        <h3 class="project-title">Banking Dashboard</h3>
                        <p class="project-description">
                            A modern banking interface with intuitive information architecture,
                            user-friendly design, and advanced security features.
                        </p>
                        <a href="#" class="project-link">
                            View Project <span class="project-link-arrow">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');
            
            // Filter functionality
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Get filter value
                    const filterValue = this.getAttribute('data-filter');
                    
                    // Filter projects
                    projectCards.forEach(card => {
                        if (filterValue === 'all') {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 50);
                        } else if (card.getAttribute('data-category').includes(filterValue)) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 50);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>