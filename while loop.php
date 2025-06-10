<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $t = 5;
    $i = 1;
    while ($i <= 10) {
        $total = $t * $i;
        echo "$total<br>";
        $i++;
    }
    echo "<br>";

    $table = 2;
    $i = 1;
    do{
        $total = $table * $i;
        echo "$total<br>";
        $i++;
    } while ($i <= 10);
    echo "<br>";



    for ($i = 1; $i <= 10; $i++) {
        $total = $table * $i;
        echo "$total<br>";
    }

    


    ?>
</body>
</html>