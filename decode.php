<?php
$age = array("petar" => 35, "ben" => 95, "joe" => 43);

$json = json_encode($age);          // Convert array to JSON string
$decoded = json_decode($json);      // Decode JSON string back to PHP object

var_dump($decoded);
?>
