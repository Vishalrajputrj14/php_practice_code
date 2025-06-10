<?php

class fruits {
    public function myvalue() {
        return fruits::class;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruit = new fruits();
    echo $fruit-> myvalue(); // fruits
    echo "<br>";
    echo $fruit::class; // fruits
    echo "<br>";
    ?>
</body>
</html>