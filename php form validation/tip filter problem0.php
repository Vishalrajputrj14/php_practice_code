<?php
$int = 10; // Yahan apna number set karein

if (filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo "Integer is not valid.";
} else {
    echo "Integer is valid.";
}
?>