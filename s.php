<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <button type="submit" name="sb">Register</button>
    </form>

    <?php
    // MySQL connection
    $con = mysqli_connect("localhost", "root", "2352005", "record");

    if (!$con) {
        die("❌ Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['sb'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Data Insert query
        $query = "INSERT INTO register (name, email) VALUES ('$name', '$email')";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<p style='color:green;'>✅ Successfully Registered!</p>";
        } else {
            echo "<p style='color:red;'>❌ Error: " . mysqli_error($con) . "</p>";
        }
    }

    mysqli_close($con);
    ?>
</body>
</html>
