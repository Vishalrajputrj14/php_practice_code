<?php
function sum($s , $y) {
    $z = $s + $y;
    return $z;
}

echo sum(5, 3); // Output: 8
echo "<br>";
echo sum(10, 20); // Output: 30
echo "<br>";
echo sum(15, 25); // Output: 40
echo "<br>";
echo sum(100, 200); // Output: 300
echo "<br>";
echo sum(50, 50); // Output: 100
echo "<br>";
echo sum(0, 0); // Output: 0
echo "<br>";
echo sum(-5, 5); // Output: 0

?>