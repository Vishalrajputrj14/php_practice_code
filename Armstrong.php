<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sum = 0;
    $num = 153; // Example number to check for Armstrong
    $temp = $num;
    while($temp > 0){
        $rem = $temp % 10; // Get the last digit
        $sum += $rem * $rem * $rem; // Cube the digit and add to sum
        $temp = ($temp / 10);
    }
    if($num == $sum) { 
        echo "$num is an Armstrong number"; //this is Armstrong number
    } else {
        echo "$num is not an Armstrong number"; //this is not Armstrong number
    }
    ?>
</body>
</html>