<?php
 
 for($i = 0; $i < 5; $i++){
     for($j = 0; $j < 5; $j++){
         echo "The value of i is: $i and the value of j is: $j <br>";
     }
 }


 // Nested for loop to print a pattern

    for($i = 1; $i <= 5; $i++){
        for($j = 1; $j <= $i; $j++){
            echo "* ";
        }
        echo "<br>";
    }
?>