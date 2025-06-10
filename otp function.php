<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function generateOTP($length = 6) {
        return str_pad(mt_rand(0, 999999), $length, '0', STR_PAD_LEFT);
    }
    
    $otp = generateOTP();
    echo "Your OTP is: " . $otp;
    echo "<br>"; // Display the OTP
    function otp(){
      $otp = "";
      for($i = 0; $i < 6; $i++){
        $otp .= rand(0, 9); // Generate a random digit between 0 and 9
      } return $otp; // Return the generated OTP

    }
    echo "Your OTP is: " . otp() . "<br>"; // Display the OTP

    // type 3 in code otp 

 echo "<br>";
    function generateAlphanumericOTP($length = 6) {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $otp = '';
        for ($i = 0; $i < $length; $i++) {
            $otp .= $chars[random_int(0, strlen($chars) - 1)];
        }
        return $otp;
    }
    
    echo "Alphanumeric OTP: " . generateAlphanumericOTP();

    echo "<br>";
    // type 4 in code otp
    function generateUUIDOTP() {
        return substr(uniqid(), -6);
    }
    
    echo "UUID OTP: " . generateUUIDOTP();
    ?>
</body>
</html>