<?php

$x = 10; // global scope
echo ++$x;
echo "<br>";
echo $x; // 11
echo "<br>";
echo $x++; // 11
echo "<br>";
echo $x; // 12
echo "<br>";
echo --$x; // 11
echo "<br>";
echo $x; // 11
echo "<br>";
echo $x--; // 11
echo "<br>";
echo $x; // 10
echo "<br>";
echo $x += 20; // 30
echo "<br>";
echo $x; // 30
echo "<br>";
echo $x -= 20; // 10
echo "<br>";
echo $x; // 10
echo "<br>";
echo $x *= 20; // 200
echo "<br>";
echo $x; // 200
echo "<br>";
echo $x /= 20; // 10
echo "<br>";
echo $x; // 10
echo "<br>";
echo $x %= 20; // 10
echo "<br>";
echo $x; // 10
echo "<br>";


?>