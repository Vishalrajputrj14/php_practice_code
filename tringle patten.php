<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = 5; // Number of rows
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            echo "&nbsp;";
        }

        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>
</html>