<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $age = 18;
    if($age < 18){
        echo "You are not eligible to vote."; //this is if else statement
    } elseif($age == 18) {
        echo "You are just eligible to vote."; //this is if else statement
    } else {
        echo "You are eligible to vote."; //this is if else statement
    }
    ?>
</body>
</html>