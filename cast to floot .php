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
      
      $a = (float) $a; // Typecasting integer to float
      $b = (float) $b; // Already float, remains unchanged
      $c = (float) $c; // Extracts numeric part, results in 25.0
      $d = (float) $d; // Since no number is found, results in 0.0
      $e = (float) $e; // Extracts numeric part, results in 25.0
      $f = (float) $f; // `true` converts to 1.0
      $g = (float) $g; // `false` converts to 0.0
      $h = (float) $h; // `null` converts to 0.0
      
      var_dump($a);
      var_dump($b);
      var_dump($c);
      var_dump($d);
      var_dump($e);
      var_dump($f);
      var_dump($g);
      var_dump($h);
   
   var_dump($f); //this is static variable
   
   var_dump($g); //this is static variable
   
   var_dump($h); //this is static variable
    ?>
</body>
</html>