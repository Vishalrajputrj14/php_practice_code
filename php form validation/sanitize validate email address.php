<?php
$email = "user@example.com"; // Sample email

// Step 1: Email sanitization (removes illegal characters)
$sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Step 2: Email validation (checks if it's a valid format)
if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid Email: " . $sanitized_email;
} else {
    echo "Invalid Email Address.";
}
?>