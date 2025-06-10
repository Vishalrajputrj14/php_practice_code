<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  
  $table = 2;
  $i = 1;
  do {
      $total = $table * $i;
      echo "$total<br>";
      $i++;
  } while ($i <= 10);

  $t =5;
    $i = 1;
    do {
        $total = $t * $i;
        echo "$total<br>";
        $i++;
    } while ($i <= 10);

    // php nested loop
    $n = 1;
    while ($n <= 3){
    $j = 1;
while($j <= 3){
    echo "i = $n, j = $j<br>";
    $j++;

    }
    $n++;
    }
  
  ?>
</body>
</html>