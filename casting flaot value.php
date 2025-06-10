<?php 


 

$a = 10; 
$b = 2.36;
$c = "Hello World";
$d = true;
$e = null;
$h = "25killitar";
$f = "25kilogram";


$a = floor($a); 
$b = floor($b);
$c = floor($c);
$d = floor($d);
$h = floor($h);
$f = floor($f);
// $e = floor($e);
// Output results
var_dump($a); // int(10)
var_dump($b); // float(2) (since floor returns a float in PHP)
var_dump($c); // string(11) "Hello World" (no change)
var_dump($d); // bool(true) (no change)
var_dump($e); // NULL (no change)
var_dump($h); // string(10) "25killitar" (no change)
var_dump($f); // string(10) "25kilogram" (no change)






?>