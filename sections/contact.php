<?php
// Fix for session_start error - keep this at the very top of your file
// before any output, even white space

// Get any flash messages
$flash_message = $_SESSION['flash_message'] ?? null;
$form_errors = $_SESSION['form_errors'] ?? [];
$form_data = $_SESSION['form_data'] ?? [];

// Clear session variables
unset($_SESSION['flash_message'], $_SESSION['form_errors'], $_SESSION['form_data']);
?>
<section id="contact" class="contact-section">
    <!-- Stars Animation Background -->
    <div class="stars" id="stars"></div>
    
    <div class="container">
        <div class="section-header">
            <h2>Let's Build <em>Together</em></h2>
            <p>Share your vision, and we'll bring it to life with cutting-edge technology and design</p>
        </div>
        
        <div class="contact-container">
            <div class="contact-info">
                <h3>Why Choose <em>Zyntra</em>?</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fas fa-rocket"></i></span>
                        <div>
                            <h4>Innovative Solutions</h4>
                            <p>Cutting-edge technology meets creative design</p>
                        </div>
                    </li>
                    <li>
                        <span class="icon"><i class="fas fa-code"></i></span>
                        <div>
                            <h4>Expert Development</h4>
                            <p>Seasoned professionals with diverse expertise</p>
                        </div>
                    </li>
                    <li>
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <div>
                            <h4>Result-Driven</h4>
                            <p>Focused on your growth and success metrics</p>
                        </div>
                    </li>
                    <li>
                        <span class="icon"><i class="fas fa-headset"></i></span>
                        <div>
                            <h4>Dedicated Support</h4>
                            <p>We're with you every step of the journey</p>
                        </div>
                    </li>
                </ul>
                
                <!-- Call-to-action button moved here, below "Why Choose Zyntra?" -->
                <div class="cta-container">
                    <button class="btn-primary open-modal">Get Started Now</button>
                </div>
            </div>
<!--             
            <div class="contact-form-container">
                <?php if ($flash_message): ?>
                <div class="alert alert-<?php echo $flash_message['type']; ?>">
                    <?php echo $flash_message['message']; ?>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($form_errors)): ?>
                <div class="alert alert-error">
                    <ul>
                        <?php foreach ($form_errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div> -->
        </div>
    </div>
    
    <!-- Floating Inquiry Button -->
    <button class="inquiry-button open-modal">
        <i class="fas fa-comment-dots"></i>
    </button>
</section>

<!-- Modal for Contact Form -->
<div id="contactModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h3>Contact <em>Zyntra</em></h3>
            <p>Fill out the form below and we'll get back to you shortly</p>
        </div>
        <div class="modal-body">
            <?php if ($flash_message): ?>
            <div class="alert alert-<?php echo $flash_message['type']; ?>">
                <?php echo $flash_message['message']; ?>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($form_errors)): ?>
            <div class="alert alert-error">
                <ul>
                    <?php foreach ($form_errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            
            <form action="handlers/contact-form.php" method="POST" class="contact-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="full_name">Full Name *</label>
                        <input type="text" id="full_name" name="full_name" required 
                               value="<?php echo htmlspecialchars($form_data['full_name'] ?? ''); ?>">
                        <span class="focus-indicator"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required
                               value="<?php echo htmlspecialchars($form_data['email'] ?? ''); ?>">
                        <span class="focus-indicator"></span>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                               value="<?php echo htmlspecialchars($form_data['phone'] ?? ''); ?>">
                        <span class="focus-indicator"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Company/Organization</label>
                        <input type="text" id="company" name="company"
                               value="<?php echo htmlspecialchars($form_data['company'] ?? ''); ?>">
                        <span class="focus-indicator"></span>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="project_type">Project Type *</label>
                        <select id="project_type" name="project_type" required>
                            <option value="" disabled <?php echo empty($form_data['project_type']) ? 'selected' : ''; ?>>Select a project type</option>
                            <option value="Website" <?php echo ($form_data['project_type'] ?? '') === 'Website' ? 'selected' : ''; ?>>Website</option>
                            <option value="Mobile App" <?php echo ($form_data['project_type'] ?? '') === 'Mobile App' ? 'selected' : ''; ?>>Mobile App</option>
                            <option value="Web Application" <?php echo ($form_data['project_type'] ?? '') === 'Web Application' ? 'selected' : ''; ?>>Web Application</option>
                            <option value="Other" <?php echo ($form_data['project_type'] ?? '') === 'Other' ? 'selected' : ''; ?>>Other</option>
                        </select>
                        <span class="focus-indicator"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="budget">Budget Range</label>
                        <select id="budget" name="budget">
                            <option value="" disabled <?php echo empty($form_data['budget']) ? 'selected' : ''; ?>>Select your budget range</option>
                            <option value="Less than $5,000" <?php echo ($form_data['budget'] ?? '') === 'Less than $5,000' ? 'selected' : ''; ?>>Less than $5,000</option>
                            <option value="$5,000 - $10,000" <?php echo ($form_data['budget'] ?? '') === '$5,000 - $10,000' ? 'selected' : ''; ?>>$5,000 - $10,000</option>
                            <option value="$10,000 - $25,000" <?php echo ($form_data['budget'] ?? '') === '$10,000 - $25,000' ? 'selected' : ''; ?>>$10,000 - $25,000</option>
                            <option value="$25,000+" <?php echo ($form_data['budget'] ?? '') === '$25,000+' ? 'selected' : ''; ?>>$25,000+</option>
                            <option value="Not sure yet" <?php echo ($form_data['budget'] ?? '') === 'Not sure yet' ? 'selected' : ''; ?>>Not sure yet</option>
                        </select>
                        <span class="focus-indicator"></span>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="timeline">Project Timeline</label>
                        <select id="timeline" name="timeline">
                            <option value="" disabled <?php echo empty($form_data['timeline']) ? 'selected' : ''; ?>>Select expected timeline</option>
                            <option value="ASAP" <?php echo ($form_data['timeline'] ?? '') === 'ASAP' ? 'selected' : ''; ?>>ASAP</option>
                            <option value="1-3 months" <?php echo ($form_data['timeline'] ?? '') === '1-3 months' ? 'selected' : ''; ?>>1-3 months</option>
                            <option value="3-6 months" <?php echo ($form_data['timeline'] ?? '') === '3-6 months' ? 'selected' : ''; ?>>3-6 months</option>
                            <option value="6+ months" <?php echo ($form_data['timeline'] ?? '') === '6+ months' ? 'selected' : ''; ?>>6+ months</option>
                            <option value="Not sure yet" <?php echo ($form_data['timeline'] ?? '') === 'Not sure yet' ? 'selected' : ''; ?>>Not sure yet</option>
                        </select>
                        <span class="focus-indicator"></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="project_description">Project Description *</label>
                    <textarea id="project_description" name="project_description" rows="5" required><?php echo htmlspecialchars($form_data['project_description'] ?? ''); ?></textarea>
                    <span class="focus-indicator"></span>
                </div>
                
                <div class="form-group">
                    <label for="additional_info">Additional Information</label>
                    <textarea id="additional_info" name="additional_info" rows="3"><?php echo htmlspecialchars($form_data['additional_info'] ?? ''); ?></textarea>
                    <span class="focus-indicator"></span>
                </div>
                
                <div class="form-submit">
                    <button type="submit" class="btn-primary">Send Inquiry</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for Modal functionality and animations -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Modal functionality
    const modal = document.getElementById('contactModal');
    const openButtons = document.querySelectorAll('.open-modal');
    const closeButton = document.querySelector('.close-modal');
    
    openButtons.forEach(button => {
        button.addEventListener('click', function() {
            modal.classList.add('show');
        });
    });
    
    closeButton.addEventListener('click', function() {
        modal.classList.remove('show');
    });
    
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.classList.remove('show');
        }
    });
    
    // Stars animation
    const starsContainer = document.getElementById('stars');
    const starCount = 50;
    
    for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.classList.add('star');
        
        // Random position
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        
        // Random size
        const size = Math.random() * 2 + 1;
        
        // Random animation duration and opacity
        const duration = Math.random() * 4 + 2;
        const opacity = Math.random() * 0.7 + 0.3;
        
        // Apply styles
        star.style.width = `${size}px`;
        star.style.height = `${size}px`;
        star.style.left = `${posX}%`;
        star.style.top = `${posY}%`;
        star.style.setProperty('--duration', `${duration}s`);
        star.style.setProperty('--opacity', opacity);
        
        starsContainer.appendChild(star);
    }
    
    // Form field animations
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.animationDelay = `${0.4 + (index * 0.1)}s`;
    });
    
    // Parallax effect for stars
    document.addEventListener('mousemove', function(e) {
        const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
        const moveY = (e.clientY - window.innerHeight / 2) * 0.01;
        
        starsContainer.style.transform = `translate(${moveX}px, ${moveY}px)`;
    });
});
</script>