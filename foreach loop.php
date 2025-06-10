<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $season = array("Winter", "Spring", "Summer", "Fall");
    foreach ($season as $value) {
        echo "$value<br>";
    }
    echo "<br>"; 
    $parson = array("Winter" => "December", "Spring" => "March", "Summer" => "June", "Fall" => "September");
    foreach ($parson as $key => $value) {
        echo "$key => $value<br>";
    }
    echo "<br>";   
 
    $numbers = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
    foreach ($numbers as $value) {
        echo "$value<br>";
    }
    
    ?>
</body>
</html>