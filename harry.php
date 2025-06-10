<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Registration Details:<br>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Password: $password";
}
?>
