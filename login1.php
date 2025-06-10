<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    echo "<h2>Form Submitted</h2>";
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
}
?>
