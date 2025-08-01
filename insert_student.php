<?php
$host = "localhost";
$user = "root";
$pass = "2352005";
$db = "student";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

$firstname   = isset($_POST['firstname'])   ? $_POST['firstname']   : '';
$lastname    = isset($_POST['lastname'])    ? $_POST['lastname']    : '';
$email       = isset($_POST['email'])       ? $_POST['email']       : '';
$phone       = isset($_POST['phone'])       ? $_POST['phone']       : '';
$address     = isset($_POST['address'])     ? $_POST['address']     : '';
$fathername  = isset($_POST['fathername'])  ? $_POST['fathername']  : '';
$mothername  = isset($_POST['mothername'])  ? $_POST['mothername']  : '';
$schoolname  = isset($_POST['schoolname'])  ? $_POST['schoolname']  : '';
$subject     = isset($_POST['subject'])     ? $_POST['subject']     : '';
$grade       = isset($_POST['grade'])       ? $_POST['grade']       : '';
$state       = isset($_POST['state'])       ? $_POST['state']       : '';
$pincode     = isset($_POST['pincode'])     ? $_POST['pincode']     : '';
$gender      = isset($_POST['gender'])      ? $_POST['gender']      : '';

$sql = "INSERT INTO student 
(FIRSTNAME, LASTNAME, EmailID, PHONENO, ADDRESS, FATHERNAME, MATHERNAME, SCHOOLNAME, SUBJECT, GERETE, STATE, pincode,  GENDER) 
VALUES 
('$firstname', '$lastname', '$email', '$phone', '$address', '$fathername', '$mothername', '$schoolname', '$subject', '$grade', '$state', '$pincode', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Student registered successfully!";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
