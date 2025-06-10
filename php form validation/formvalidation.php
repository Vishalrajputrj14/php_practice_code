<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation Example</title>
</head>
<body>

<?php  
$name = $email = $gender = $comment = $website = "";  

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $name = text_input($_POST["name"]);  
    $email = text_input($_POST["email"]);  
    $website = text_input($_POST["website"]);  
    $comment = text_input($_POST["comment"]);  
    $gender = text_input($_POST["gender"]);  
}

function text_input($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
}  
?>

<h2>PHP Form Validation Example</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">  
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">  
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website; ?>">  
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>  
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if ($gender=="female") echo "checked";?> value="female">Female  
    <input type="radio" name="gender" <?php if ($gender=="male") echo "checked";?> value="male">Male  
    <input type="radio" name="gender" <?php if ($gender=="other") echo "checked";?> value="other">Other  
    <br><br>
    <input type="submit" name="submit" value="Submit">  
</form>

<?php  
echo "<h2>Your Input:</h2>";  
echo "Name: " . $name . "<br>";  
echo "Email: " . $email . "<br>";  
echo "Website: " . $website . "<br>";  
echo "Comment: " . $comment . "<br>";  
echo "Gender: " . $gender . "<br>";  
?>

</body>
</html>