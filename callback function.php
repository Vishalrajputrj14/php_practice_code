<?php
function my_callback($item){
    return strlen($item);
}

$string = ["apple", "arange", "banana", "coconet"];
$length = array_map("my_callback", $string);
print_r($length);
?>

