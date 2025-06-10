<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function getCube($cube) {
        return $cube * $cube * $cube; 
    }
    $num = 3; 
    $cube = getCube($num);
    echo "The cube of $num is $cube"; //this is cube method
    ?>
</body>         
</html>