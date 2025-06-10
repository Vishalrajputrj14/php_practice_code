<?php
 $myArray = [];
    $myArray[0] = "a";
    $myArray[1] = "b";
    $myArray[2] = "c";
    $myArray[3] = "d";
    $myArray["vishal"] = "e";

    echo $myArray[0] . "<br>"; // Outputs "a" and adds a line break
    echo $myArray[1] . "<br>"; // Outputs "b" and adds a line break
    echo $myArray[2] . "<br>"; // Outputs "c" and adds a line break
    echo $myArray[3] . "<br>"; // Outputs "d" and adds a line break
    echo $myArray["vishal"] . "<br>"; // Outputs "e" and adds a line break
    var_dump($myArray); // Outputs detailed information about the array
?>