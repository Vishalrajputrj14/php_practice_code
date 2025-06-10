<?php


$int = 2500000.250; // Yahan apna number set karein

if (!filter_var($int, FILTER_VALIDATE_INT)) {
    echo "Invalid integer.";
} else {
    echo "Valid integer.";
}
?>

