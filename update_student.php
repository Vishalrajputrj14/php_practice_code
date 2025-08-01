<?php
$conn = new mysqli("localhost", "root", "2352005", "student");

$id = $_POST['id'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

$sql = "UPDATE student SET 
  FIRSTNAME='$fname', LASTNAME='$lname', EmailID='$email', 
  PHONENO='$phone', gender='$gender'
WHERE ID = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: dashboard.php");
} else {
    echo "Error updating record: " . $conn->error;
}
?>
