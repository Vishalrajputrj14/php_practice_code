<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$x = 96582; 
var_dump(is_numeric($x)); // true
echo "<br>";

$x = 65823522; 
var_dump(is_numeric($x)); // true
echo "<br>";

$x = 65823522.0; 
var_dump(is_numeric($x)); // true
echo "<br>";

$x = "vishal rajput"; 
var_dump(is_numeric($x)); // false
echo "<br>";
    ?>
</body>
</html>