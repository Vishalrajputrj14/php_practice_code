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
    
    $a = (bool) $a; // true
    $b = (bool) $b; // true
    $c = (bool) $c; // true
    $d = (bool) $d; // true
    $e = (bool) $e; // true
    $f = (bool) $f; // true
    $g = (bool) $g; // false
    $h = (bool) $h; // false
    
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    var_dump($g);
    var_dump($h);
    ?>
</body>
</html>