<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $year = 2023; //this is leap year
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "$year is a leap year"; //this is leap year
    } else {
        echo "$year is not a leap year"; //this is not leap year
    }

    //this is leap year in simple code 

    $year = 2008; 
    if($year % 4 == 0) { 
        echo "$year is a leap year"; 
    } else {
        echo "$year is not a leap year"; 
    }
    ?>
</body>
</html>   