<?php
$str ="<h1> hello world ! </h2>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);

echo $newstr;


?>