<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function test(){
        $a = 10; //this is local variable
        $b = 20; //this is local variable
        $c = $a + $b; //this is local variable
        echo "The sum of $a and $b is: $c"; //this is local variable
    }
    test(); // Call the function to execute it
    ?>
</body>
</html>