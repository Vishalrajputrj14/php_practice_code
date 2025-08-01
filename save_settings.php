<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// DB config
$host = "localhost";
$user = "root";
$password = "2352005"; // Use "" if no password
$database = "hotel_website";

// Connect
$conn = new mysqli($host, $user, $password, $database);

// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form values
$name = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$language = $_POST['language'] ?? '';
$password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
$notifications = $_POST['notifications'] ?? '';

// Insert
$sql = "INSERT INTO user_settings (full_name, email, phone, language, password, notifications)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ssssss", $name, $email, $phone, $language, $password, $notifications);
    if ($stmt->execute()) {
        echo "✅ Settings saved successfully.";
    } else {
        echo "❌ Execution Error: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "❌ Prepare Error: " . $conn->error;
}

$conn->close();
?>
