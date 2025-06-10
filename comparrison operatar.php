<?php
$x = 10; // global scope
$y = 20; // global scope
$z = 30; // global scope

var_dump($x == $y); // false
var_dump($x === $y); // false
var_dump($x != $y); // true
var_dump($x !== $y); // true
var_dump($x > $y); // false
var_dump($x < $y); // true
var_dump($x >= $y); // false
var_dump($x <= $y); // true
var_dump($x <=> $y); // -1
var_dump($x == $z); // false
var_dump($x === $z); // false
var_dump($x != $z); // true

?>