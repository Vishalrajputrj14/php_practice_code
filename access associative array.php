<?php
$cars = array("barand"=>"audi", "bmw"=>"mercedes", "ford"=>"toyota", "honda"=>"nissan", "chevrolet"=>"hyundai");
 $cars["barand"];
 echo $cars["barand"];
 var_dump($cars); // Outputs detailed information about the array
 // change value of associative array
    $cars["bmw"] = "audi";
    echo $cars["bmw"];
    var_dump($cars); // Outputs detailed information about the array
    
?>