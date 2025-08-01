<?php
$host = "localhost";
$user = "root";
$password = "2352005";
$database = "hotel";

// Create DB connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Receive POST data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $checkin = $_POST['checkin'] ?? '';
    $checkout = $_POST['checkout'] ?? '';
    $adults = $_POST['adults'] ?? 0;
    $children = $_POST['children'] ?? 0;
    $rooms = $_POST['rooms'] ?? 0;
    $room_type = $_POST['room_type'] ?? '';

    // Map room type number to text
    $room_type_map = [
        "1" => "Deluxe room",
        "2" => "Family room",
        "3" => "Daily room",
        "4" => "Pro room"
    ];
    $room_type_text = $room_type_map[$room_type] ?? "Unknown";

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, checkin, checkout, adults, children, rooms, room_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiiis", $name, $email, $checkin, $checkout, $adults, $children, $rooms, $room_type_text);

    if ($stmt->execute()) {
        echo "<script>alert('✅ Booking Successful!'); window.location.href='index.html';</script>";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
