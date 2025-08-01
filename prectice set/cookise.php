<?php
setcookie("name","vishal");
setcookie("age","20");
setcookie("city","pune"); // Cookie expires in 1 hour
setcookie("country","india"); // Cookie expires in 1 day
setcookie("language","english"); // Cookie expires in 30 days
echo "Cookies have been set successfully!";
// To view the cookies, you can use the following code:


echo "<h2>Cookies:</h2>";
echo  "cookise name :".$_COOKIE['name'] . "<br>";
echo  "cookise age :".$_COOKIE['age'] . "<br>";
echo  "cookise city :".$_COOKIE['city'] . "<br>";
echo  "cookise country :".$_COOKIE['country'] . "<br>";
echo  "cookise language :".$_COOKIE['language'] . "<br>";






?>