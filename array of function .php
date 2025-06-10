<?php
function myfunction(){
    echo "मैं भी एक फ़ंक्शन हूँ";
}

$myarray = array(
    "volvo" => "कार",
    "audi" => "लक्जरी",
    "bmw" => "स्पोर्ट्स",
    "mercedes" => "क्लासिक",
    "ford" => "मजबूत",
    "toyota" => "विश्वसनीय",
    "honda" => "सस्ता",
    "nissan" => "तेज़",
    "chevrolet" => "अमेरिकन",
    "hyundai" => "इनोवेटिव",
    "customFunction" => "myfunction"
);

echo $myarray["customFunction"]();
?> 


