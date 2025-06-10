<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $string = "Hello world! This is a test string.";
    $wordCount = str_word_count($string); //this is static variable
    var_dump($wordCount); //this is static variable
    echo "<br>";
    echo "The string contains $wordCount words."; //this is static variable
    echo str_word_count("lorem ipsum dolor sit amet, consectetur adipiscing elit."); //this is static variable  
    ?>
</body>
</html>