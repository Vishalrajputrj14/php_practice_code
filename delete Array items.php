<?php
$cars = array("Volvo", "BMW", "Toyota", "Honda", "Ford", "Chevrolet", "Nissan", "Hyundai", "Kia", "Mazda");
 array_splice($cars, 1, 2); // Remove 3 elements starting from index 2
echo "<pre>";
echo "Array after removing elements:\n";
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota", "Honda", "Ford", "Chevrolet", "Nissan", "Hyundai", "Kia", "Mazda");
unset($cars[0]); // Remove element at index 1
var_dump($cars);

?>