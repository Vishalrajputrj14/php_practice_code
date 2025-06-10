<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = Array("vishal", "rajput", "hello", "world");
    $obj = Array("vishal" => "35", "rajput" => "36", "hello" => "37", "world" => "38" );
     
    $a = (object)$a; // Convert array to object
    $obj = (object)$obj; // Convert array to object
    var_dump($a); // Display the object
    echo "<br>";
    var_dump($obj); // Display the object
    ?>
</body>
</html>