<?php 
$name = $email = $gender = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = text_input($_POST["name"]);
    $email = text_input($_POST["email"]);
    $gender = text_input($_POST["gender"] ?? ""); // avoid undefined index
    $website = text_input($_POST["website"]);
}

function text_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f2f2f2;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 300px;
        }

        input[type="text"],
        input[type="radio"] {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-group {
            margin-bottom: 12px;
        }
    </style>
</head>
<body>

<h2>PHP Form Validation Example</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="form-group">
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
    </div>
    <div class="form-group">
        Gender:
        <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>>Female
        <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?>>Male
        <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo "checked"; ?>>Other
    </div>
    <input type="submit" value="Submit">
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Your Input:</h3>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Website: $website<br>";
    echo "Gender: $gender<br>";
}
?>
</body>
</html>

</body>
</html>
