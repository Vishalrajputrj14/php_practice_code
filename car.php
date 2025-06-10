<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if this is the registration form
    if (isset($_POST['form_type']) && $_POST['form_type'] == 'register') {
        // Registration form handling
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Example: Basic validation
        if (!empty($username) && !empty($email) && !empty($password)) {
            echo "Registration successful!<br>";
            echo "Username: $username <br> Email: $email";
        } else {
            echo "Please fill all the registration fields.";
        }

    } else {
        // Login form handling
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Example: Basic validation
        if (!empty($email) && !empty($password)) {
            echo "Login successful!<br>";
            echo "Email: $email";
        } else {
            echo "Please fill all the login fields.";
        }
    }
} else {
    echo "Invalid request.";
}
?>
