<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>
<body>

    <?php
    // सेशन वेरिएबल सेट करना
    $_SESSION["user"] = "vishal";
    echo "Session information set successfully for User.<br>";

    $_SESSION["address"] = "Jaipur";
    echo "Session information set successfully for Address.<br>";

    $_SESSION["email"] = "abcs@gmail.com";
    echo "Session information set successfully for Email.<br>";

    $_SESSION["mobile_no"] = "9653221"; 
    echo "Session information set successfully for Mobile No.<br>";
    ?>

    <br>
    <a href="phpsession2.php">Go to Next Page</a>

</body>
</html>