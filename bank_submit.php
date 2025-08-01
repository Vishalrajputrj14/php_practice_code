<?php
// Database config
$host = "localhost";
$user = "root";
$pass = "2352005"; // your DB password
$db = "bank_db";

// Connect to MySQL
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("❌ Connection failed: " . $conn->connect_error);
}

// Make sure all required fields are set
if (
  isset($_POST['name'], $_POST['dob'], $_POST['gender'], $_POST['email'],
  $_POST['phone'], $_POST['address'], $_POST['aadhaar'], $_POST['pan'],
  $_POST['account_type'], $_POST['deposit'], $_FILES['signature'])
) {

  // Form data
  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $aadhaar = $_POST['aadhaar'];
  $pan = $_POST['pan'];
  $account_type = $_POST['account_type'];
  $deposit = $_POST['deposit'];

  // Handle signature upload
  $upload_dir = "uploads/";
  if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true); // create folder if not exists
  }

  $signature_name = $_FILES['signature']['name'];
  $signature_tmp = $_FILES['signature']['tmp_name'];

  if (!empty($signature_name) && is_uploaded_file($signature_tmp)) {
    $signature_path = $upload_dir . time() . "_" . basename($signature_name);

    if (move_uploaded_file($signature_tmp, $signature_path)) {
      // Insert into DB
      $sql = "INSERT INTO account_applications
      (name, dob, gender, email, phone, address, aadhaar, pan, account_type, deposit, signature)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sssssssssss", $name, $dob, $gender, $email, $phone, $address, $aadhaar, $pan, $account_type, $deposit, $signature_path);

      if ($stmt->execute()) {
        echo "✅ Application submitted successfully!";
      } else {
        echo "❌ Database insert failed: " . $stmt->error;
      }
    } else {
      echo "❌ Failed to upload signature file.";
    }
  } else {
    echo "❌ Signature file not selected or upload error.";
  }
} else {
  echo "❌ Please fill all required fields.";
}

$conn->close();
?>
  