<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get phone and password from form
    $phone = htmlspecialchars($_POST["phone"]);
    $password = htmlspecialchars($_POST["password"]);

    // For testing, just show the entered details
    echo "<h2>Login Details:</h2>";
    echo "Phone Number: " . $phone . "<br>";
    echo "Password: " . $password . "<br>";
}
?>
