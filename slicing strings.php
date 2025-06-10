<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $g = "vishal rajput"; //this is static variable
    $v = substr($g, 0, 5); //this is static variable
    echo $v; //this is static variable
    echo "<br>";
    $g = "vishal rajput"; //this is static variable
    $v = substr($g, -5, 2); //this is static variable
    echo $v; //this is static variable
    echo "<br>";
    $g = "vishal rajput"; //this is static variable
    $v = substr($g, 6); //this is static variable
    echo $v; //this is static variable
    echo "<br>";
    $g = "vishal rajput"; //this is static variable
    $v = substr($g, 4, -4); //this is static variable
    echo $v; //this is static variable
    ?>
    
</body>
</html>