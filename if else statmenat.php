<?php
// if else statement example
$number = 10;

if ($number > 20) {
    echo "The number is positive.";
} else {
    echo "The number is not positive.";
}


echo "<br>";

// if else statement with  conditions

$mode =  "yellow";
$color ;
if($mode == "dark") {
    $color = "black";
} else if ($mode == "light") {
    $color = "white";
} else if ($mode == "blue") {
    $color = "blue";
} else if ($mode == "red") {
    $color = "red";
} else if ($mode == "green") {
    $color = "green";
} else if ($mode == "yellow") {
    $color = "yellow";
} else if ($mode == "purple") {
    $color = "purple";
} else if ($mode == "orange") {
    $color = "orange";
} else if ($mode == "pink") {
    $color = "pink";
} else if ($mode == "brown") {
    $color = "brown";
} else if ($mode == "gray") {
    $color = "gray";
} else {
    $color = "white"; // default color
}

echo "The color is: " . $color . "<br>";

echo "<br>";

$age = 18;
$student  ;

if ($age < 18) {
    $student = "You are a minor.";
} else if ($age >= 18 && $age < 65) {
    $student = "You are an adult.";
} else {
    $student = "You are a senior citizen.";
}
echo $student . "<br>";

echo "<br>";


$mark = 85;
if($mark < 33){
    echo "You are fail<br>";
} else if($mark >= 33 && $mark < 50){
    echo "You are pass<br>";
} else if($mark >= 50 && $mark < 75){
    echo "You are good<br>";
} else if($mark >= 75 && $mark < 90){
    echo "You are very good<br>";
} else {
    echo "You are excellent<br>";
}




?>