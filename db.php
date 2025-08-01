<?php
$host = "localhost";
$user = "root";
$pass = "2352005";
$db = "hotel_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
