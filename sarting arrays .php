<?php
$cars = array("Volvo", "BMW", "Toyota", "Honda", "Ford", "Chevrolet", "Nissan", "Hyundai", "Kia", "Mazda");
sort($cars); // Sort the array in ascending ordervar
var_dump($cars);
$elenghth = count($cars); // Get the length of the array
for ($i = 0; $i < $elenghth; $i++) {
    echo $cars[$i] . "<br>"; // Print each element of the array
}
echo "<br>";



$numbar = array(10,9,8,7,6,5,4,3,2,1); // Create an array of numbers
rsort($numbar); // Sort the array in ascending order
$elenghth = count($numbar); // Get the length of the array
for ($i = 0; $i < $elenghth; $i++) {
    echo $numbar[$i] . "<br>"; // Print each element of the array
}
echo "<br>";



?>