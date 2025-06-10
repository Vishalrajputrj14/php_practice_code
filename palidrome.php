<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $no = 121;
    $stvr = strrev($no);
    if($no == $stvr) { 
        echo "$no is a palindrome number"; //this is palindrome number
    } else {
        echo "$no is not a palindrome number"; //this is not palindrome number
    }

?>
</body>
</html>