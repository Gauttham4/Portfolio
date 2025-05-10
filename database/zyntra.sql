
CREATE TABLE inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    company VARCHAR(100),
    project_type ENUM('Website', 'Mobile App', 'Web Application', 'Other') NOT NULL,
    budget VARCHAR(50),
    timeline VARCHAR(50),
    project_description TEXT NOT NULL,
    additional_info TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);