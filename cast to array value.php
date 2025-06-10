<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 10; // Static variable
    $b = 5.24;
    $c = "25kiloram";
    $d = "hello world";
    $e = "hello world 25kiloram";
    $f = true;
    $g = false;
    $h = null;
    
    $a = (array) $a; // Convert to array
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;
    $f = (array) $f;
    $g = (array) $g;
    $h = (array) $h;
    
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    var_dump($f);
    echo "<br>";
    var_dump($g);
    echo "<br>";
    var_dump($h);
    ?>
</body>
</html>