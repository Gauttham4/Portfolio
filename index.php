<?php
// Include database connection
require_once 'config/database.php';

// Set page title
$page_title = "Zyntra | Innovative Digital Solutions";
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="Zyntra provides cutting-edge web and mobile solutions to transform your business ideas into reality.">
    
    <!-- Add nojs/js class detection -->
    <script>document.documentElement.className = document.documentElement.className.replace("no-js", "js");</script>
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Main CSS Files -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    
    <!-- Component-specific CSS -->
    <link rel="stylesheet" href="assets/css/components/navbar.css">
    <link rel="stylesheet" href="assets/css/components/hero.css">
    <link rel="stylesheet" href="assets/css/components/services.css">
     <link rel="stylesheet" href="assets/css/components/process.css">
    <link rel="stylesheet" href="assets/css/components/project.css">
    <link rel="stylesheet" href="assets/css/components/testimonal.css">
    <link rel="stylesheet" href="assets/css/components/contact.css">
    <link rel="stylesheet" href="assets/css/components/footer.css"> 
</head> 
<body>
    <!-- Loading Screen -->
    <div class="loading-screen">
        <div class="loading-logo">
            <span class="z">Z</span>
            <span class="y">y</span>
            <span class="n">n</span>
            <span class="t">t</span>
            <span class="r">r</span>
            <span class="a">a</span>
        </div>
        <div class="loading-bar">
            <div class="loading-progress"></div>
        </div>
    </div>

    <!-- Page Loader - Secondary loader that shows after loading animation -->
    <div class="page-loader">
        <div class="loader-content">
            <svg class="logo-loader" viewBox="0 0 100 100" width="80" height="80">
                <circle class="logo-circle" cx="50" cy="50" r="40" fill="none" stroke="#007bff" stroke-width="3"></circle>
                <path class="logo-path" d="M30,50 L45,65 L70,35" stroke="#00e5ff" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <h3 class="loading-text">ZYNTRA</h3>
        </div>
    </div>

    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <?php include 'sections/hero.php'; ?>

        <!-- Services Section -->
        <?php include 'sections/services.php'; ?>

        <!-- Process Section -->
        <?php include 'sections/process.php'; ?>
        
        <?php include 'sections/project.php'; ?>

        <!-- Testimonials Section -->
        <?php include 'sections/testimonials.php'; ?>

        <!-- Contact Section -->
        <?php include 'sections/contact.php'; ?>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/form-handler.js"></script>
</body>
</html>