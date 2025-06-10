<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $otp = rand(100000, 999999); // Generate a random 6-digit OTP
    echo "Your OTP is: " . $otp . "<br>"; // Display the OTP
  






    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_otp = $_POST['user_otp']; // Get the user input OTP
        if ($user_otp == $otp) {
            echo "OTP verified successfully!"; // OTP is correct
        } else {
            echo "Invalid OTP. Please try again."; // OTP is incorrect
        }
    }
    ?>
</body>
</html>