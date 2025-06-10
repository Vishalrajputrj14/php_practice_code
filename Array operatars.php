<?php
$v = array("a" => "apple", "b" => "banana", "c" => "cherry");
$m = array("b" => "banana", "c" => "cherry", "a" => "apple");

$z = $v+$m;
var_dump($z); // array(3) { ["a"]=> string(5) "apple" ["b"]=> string(6) "banana" ["c"]=> string(6) "cherry" }
echo "<br>";
var_dump($v == $m); // bool(true)
echo "<br>";
var_dump($v === $m); // bool(true)
echo "<br>";
var_dump($v != $m); // bool(false)
echo "<br>";
var_dump($v <> $m); // bool(false)
echo "<br>";
var_dump($v !== $m); // bool(false)
echo "<br>";
var_dump($v < $m); // bool(false)
?>


