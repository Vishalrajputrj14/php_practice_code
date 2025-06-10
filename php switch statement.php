<?php
$favcolor = "blue";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    case "yellow":
        echo "Your favorite color is yellow!";
        break;
    case "purple":
        echo "Your favorite color is purple!";
        break;
    case "orange":
        echo "Your favorite color is orange!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}


echo "<br>";
$d = 5;
switch ($d) {
    case 0:
        echo "The value is zero.";
        break;
    case 1:
        echo "The value is one.";
        break;
    case 2:
        echo "The value is two.";
        break;
    case 3:
        echo "The value is three.";
        break;
    case 4:
        echo "The value is four.";
        break;
    case 5:
        echo "The value is five.";
        break;
    default:
        echo "The value is not between 0 and 5.";
}

echo "<br>";
$v = 8;
switch ($v) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "The value is between 1 and 5.";
        break;
    case 6:
    case 7:
    case 8:
        echo "The value is between 1 and 3.";
        break;   
    case 9:
    case 10:
        echo "The value is between 9 and 10.";
        break;
    default:
        echo "The value is not between 1 and 10.";
        break;      
    }
?>