
<?php
// Include database configuration
require_once __DIR__ . '/../config/database.php';

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to save inquiry to database
function save_inquiry($data) {
    global $pdo;
    
    try {
        $sql = "INSERT INTO inquiries (full_name, email, phone, company, project_type, budget, timeline, project_description, additional_info)
                VALUES (:full_name, :email, :phone, :company, :project_type, :budget, :timeline, :project_description, :additional_info)";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':full_name', $data['full_name'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':phone', $data['phone'], PDO::PARAM_STR);
        $stmt->bindParam(':company', $data['company'], PDO::PARAM_STR);
        $stmt->bindParam(':project_type', $data['project_type'], PDO::PARAM_STR);
        $stmt->bindParam(':budget', $data['budget'], PDO::PARAM_STR);
        $stmt->bindParam(':timeline', $data['timeline'], PDO::PARAM_STR);
        $stmt->bindParam(':project_description', $data['project_description'], PDO::PARAM_STR);
        $stmt->bindParam(':additional_info', $data['additional_info'], PDO::PARAM_STR);
        
        return $stmt->execute();
    } catch(PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        return false;
    }
}
?>