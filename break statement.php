<?php
$i = 1;
do {
if ($i == 7)break;
    echo "$i<br>";
    $i++;
} while ($i < 10);

echo "<br>";

$i = 1;
do{
    $i++;
    if ($i == 3) continue;
    echo "$i<br>";
    $i++;
} while ($i < 10);
echo "<br>";



?>