<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $v = "hello world"; //this is static variable
echo strtoupper($v); //this is static variable
echo "<br>";
echo strtolower($v); //this is static variable
echo "<br>";
echo ucfirst($v); //this is static variable
echo "<br>";
echo ucwords($v); //this is static variable
echo "<br>";
echo strrev($v); //this is static variable
echo "<br>";
echo str_repeat($v, 2); //this is static variable
echo "<br>";
echo str_replace("world", "vishal", $v); //this is static variable
echo "<br>";
echo str_ireplace("world", "vishal", $v); //this is static variable
echo "<br>";
echo str_shuffle($v); //this is static variable
echo "<br>";
echo str_word_count($v); //this is static variable
echo "<br>";
// echo str_split($v); //this is static variable
echo "<br>";
echo str_pad($v, 20, "*"); //this is static variable
echo "<br>";
echo str_pad($v, 20, "*", STR_PAD_BOTH); //this is static variable
echo "<br>";
echo str_pad($v, 20, "*", STR_PAD_LEFT); //this is static variable
echo "<br>";
echo str_pad($v, 20, "*", STR_PAD_RIGHT); //this is static variable
echo "<br>";
echo str_pad($v, 20, "*", STR_PAD_LEFT | STR_PAD_RIGHT); //this is static variable
echo "<br>";
echo str_pad($v, 20, "*", STR_PAD_BOTH | STR_PAD_LEFT); //this is static variable
echo "<br>";
    ?>
</body>
</html>