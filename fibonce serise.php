<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numterm = 10; 
    $num1 = 0; 
    $num2 = 1;
    $nextterm; 
    echo "Fibonacci Series: <br>";
    for($i = 1; $i <= $numterm; $i++){
        echo "$num1 <br>"; 
        $nextterm = $num1 + $num2; 
        $num1 = $num2; 
        $num2 = $nextterm; 
    }
    ?>
</body>
</html>