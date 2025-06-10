<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $table = 5;
    for ($i = 1; $i <= 10; $i++) {
     $totel = $table * $i."<br/>"; //this is static variable
        echo $totel; //this is static variable
    }
    echo "<br>";
    for( $i = 1; $i <= 100; $i++) {
        $totel =  $i."<br/>"; //this is static variable
        echo $totel; //this is static variable
    }

    echo "<br>";

    for($i = 2 ; $i <= 20; $i += 2 ){
      
         echo $i."<br/>"; //this is static variable
    }
    ?>
</body>
</html>