<?php

 
$a = 10; 
$b  = 2.36;
$c = "Hello World";
$d = true;
$e = null;
$h = "25killitar";
$f = "25kilogram";



    $a = (int)$a; // Cast to string
    $b = (int)$b; // Cast to string
    $c = (int)$c; // Cast to string
    $d = (int)$d; // Cast to string
    $e = (int)$e; // Cast to string
    $h = (int)$h; // Cast to string
    $f = (int)$f; // Cast to string



var_dump($a); // string(2) "10"
var_dump($b); // string(4) "2.36"
var_dump($c); // string(11) "Hello World"
var_dump($d); // string(4) "true"
var_dump($e); // string(4) "null"
var_dump($h); // string(4) "25killitar"
var_dump($f); // string(4) "25kilogram"




?>