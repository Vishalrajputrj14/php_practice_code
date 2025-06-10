<?php
function add($a, $b) {
    return $a + $b;
}
echo add(5, 3); // Output: 8


function familyName($firstName, $lastName = "Doe") {
    return "$firstName $lastName";
}
echo familyName("John"); // Output: John Doe
echo "<br>";
echo familyName("John", "Smith"); // Output: John Smith
echo "<br>";
echo familyName("Jane", "Doe"); // Output: Jane Doe
echo "<br>";
echo familyName("Jane", "Smith"); // Output: Jane Smith
echo "<br>";
echo familyName("Doe"); // Output: Doe Doe
echo "<br>";
echo familyName("Doe", "Smith"); // Output: Doe Smith
echo "<br>";

function setHeight($height = 50) {
    return "The height is $height cm";
}
echo setHeight(); // Output: The height is 50 cm
echo "<br>";
echo setHeight(350); // Output: The height is 350 cm
echo "<br>";
echo setHeight(100); // Output: The height is 100 cm
echo "<br>";
echo setHeight(200); // Output: The height is 200 cm
echo "<br>";


function sumMyNumbase(...$s){
    $sum = 0;
    $length = count($s);
    for($i = 0; $i < $length; $i++){
        $sum += $s[$i];
    }
    return $sum;
}

echo sumMyNumbase(1, 2, 3, 4, 5); // Output: 15


?>