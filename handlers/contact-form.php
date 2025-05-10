
<?php
// Start session for flash messages
session_start();

// Include required files
require_once __DIR__ . '/../includes/db-connect.php';
require_once __DIR__ . '/../config/mail-config.php';
require_once __DIR__ . '/../vendor/autoload.php'; // Load PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect and sanitize form data
    $full_name = sanitize_input($_POST['full_name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $phone = sanitize_input($_POST['phone'] ?? '');
    $company = sanitize_input($_POST['company'] ?? '');
    $project_type = sanitize_input($_POST['project_type'] ?? '');
    $budget = sanitize_input($_POST['budget'] ?? '');
    $timeline = sanitize_input($_POST['timeline'] ?? '');
    $project_description = sanitize_input($_POST['project_description'] ?? '');
    $additional_info = sanitize_input($_POST['additional_info'] ?? '');
    
    // Validate required fields
    $errors = [];
    
    if (empty($full_name)) {
        $errors[] = "Full name is required";
    }
    
    if (empty($email) || !is_valid_email($email)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($project_type)) {
        $errors[] = "Project type is required";
    }
    
    if (empty($project_description)) {
        $errors[] = "Project description is required";
    }
    
    // If there are no errors, proceed with saving and sending
    if (empty($errors)) {
        $inquiry_data = [
            'full_name' => $full_name,
            'email' => $email,
            'phone' => $phone,
            'company' => $company,
            'project_type' => $project_type,
            'budget' => $budget,
            'timeline' => $timeline,
            'project_description' => $project_description,
            'additional_info' => $additional_info
        ];
        
        // Save to database
        $db_result = save_inquiry($inquiry_data);
        
        // Send email using PHPMailer
        $mail = new PHPMailer(true);
        
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = SMTP_HOST;
            $mail->SMTPAuth = true;
            $mail->Username = SMTP_USERNAME;
            $mail->Password = SMTP_PASSWORD;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = SMTP_PORT;
            
            // Recipients
            $mail->setFrom(SMTP_USERNAME, SMTP_FROM_NAME);
            $mail->addAddress(RECIPIENT_EMAIL); // Set the recipient to your email
            $mail->addReplyTo($email, $full_name);
            
            // Content
            $mail->isHTML(true);
            $mail->Subject = "New Project Inquiry from {$full_name}";
            
            // Email body
            $body = "<h2>New Project Inquiry from Zyntra Website</h2>";
            $body .= "<p><strong>Name:</strong> {$full_name}</p>";
            $body .= "<p><strong>Email:</strong> {$email}</p>";
            $body .= "<p><strong>Phone:</strong> {$phone}</p>";
            $body .= "<p><strong>Company:</strong> {$company}</p>";
            $body .= "<p><strong>Project Type:</strong> {$project_type}</p>";
            $body .= "<p><strong>Budget Range:</strong> {$budget}</p>";
            $body .= "<p><strong>Timeline:</strong> {$timeline}</p>";
            $body .= "<p><strong>Project Description:</strong><br>{$project_description}</p>";
            $body .= "<p><strong>Additional Information:</strong><br>{$additional_info}</p>";
            
            $mail->Body = $body;
            $mail->AltBody = strip_tags($body);
            
            $mail_result = $mail->send();
            
            // If both operations successful, redirect with success message
            if ($db_result && $mail_result) {
                $_SESSION['flash_message'] = [
                    'type' => 'success',
                    'message' => 'Your inquiry has been sent successfully! We will contact you soon.'
                ];
            } else {
                throw new Exception('Failed to process your request');
            }
        } catch (Exception $e) {
            error_log("Email sending failed: " . $mail->ErrorInfo);
            $_SESSION['flash_message'] = [
                'type' => 'error',
                'message' => 'There was an error sending your message. Please try again later.'
            ];
        }
    } else {
        // Store errors in session
        $_SESSION['form_errors'] = $errors;
        $_SESSION['form_data'] = $_POST; // Store form data for repopulation
    }
    
    // Redirect back to contact section
    header("Location: /#contact");
    exit;
}

// If accessed directly without POST
header("Location: /");
exit;
?>