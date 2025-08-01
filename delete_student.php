<?php
$conn = new mysqli("localhost", "root", "2352005", "student");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'id' is passed in URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Delete the student
    $sql = "DELETE FROM student WHERE ID = $id";
    if ($conn->query($sql)) {
        // Redirect back to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        echo "❌ Error deleting record: " . $conn->error;
    }
} else {
    echo "❌ Invalid student ID!";
}

$conn->close();
?>
