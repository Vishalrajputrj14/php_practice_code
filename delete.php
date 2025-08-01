<?php
// ✅ DB connection
$host = "localhost";
$user = "root";
$pass = "2352005";
$db = "hotel_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ✅ Delete logic
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "DELETE FROM reservations WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: all-reservations.php");
        exit;
    } else {
        echo "Error deleting reservation: " . $conn->error;
    }
} else {
    echo "Invalid ID";
}

$conn->close();
?>
