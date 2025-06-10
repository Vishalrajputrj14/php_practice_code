<?php
$a = 10; 
$b  = 2.36;
$c = "Hello World";
$d = true;
$e = null;

    $a = (string)$a; // Cast to string
    $b = (string)$b; // Cast to string
    $c = (string)$c; // Cast to string
    $d = (string)$d; // Cast to string
    $e = (string)$e; // Cast to string


var_dump($a); // string(2) "10"
var_dump($b); // string(4) "2.36"
var_dump($c); // string(11) "Hello World"
var_dump($d); // string(4) "true"


?>