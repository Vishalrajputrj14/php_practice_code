<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function mytest(){
        static $v = 2;
        echo $v; //this is static variable
        $v++;
    }
    mytest(); // Call the function to execute it
    echo "<br>";
    mytest(); // Call the function to execute it
    echo "<br>";
    mytest(); // Call the function to execute it
    echo "<br>";

    mytest(); // Call the function to execute it
    ?>
</body>
</html>