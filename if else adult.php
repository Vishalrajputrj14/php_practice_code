<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $age = 70; 
    if($age < 18){
        echo "you are a minor";
    }
    elseif($age >= 18 && $age < 60){
        echo "you are an adult";
    } 
    else {
        echo "you are a senior citizen";
    }
    ?>
    
</body>
</html>