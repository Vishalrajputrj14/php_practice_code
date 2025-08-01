<?php
$conn = new mysqli("localhost", "root", "2352005", "student");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 1: Validate ID from URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("❌ Invalid or missing ID!");
}

$id = intval($_GET['id']);

// Step 2: Fetch student details
$result = $conn->query("SELECT * FROM student WHERE ID = $id");

if ($result->num_rows != 1) {
    die("❌ Student not found!");
}

$student = $result->fetch_assoc();
?>
