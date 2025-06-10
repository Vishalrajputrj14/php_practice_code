<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "John Doe";
    $selry = 50000; 
    $pf = $selry * 0.12; // 12% of salary
    $hra = $selry * 0.10; // 10% of salary
    $ta = $selry * 0.05; // 5% of salary
    $da = $selry * 0.08; // 8% of salary
    $bauns = $selry * 0.03; // 3% of salary
    $net =($selry+$pf+$ta+$da+$bauns)-$hra; // net salary calculation
    echo "Name: $name<br>";
    echo "Salary: $selry<br>";
    echo "Provident Fund: $pf<br>";
    echo "House Rent Allowance: $hra<br>";
    echo "Travel Allowance: $ta<br>";
    echo "Dearness Allowance: $da<br>";
    echo "Bonus: $bauns<br>";
    echo "Net Salary: $net<br>";
    ?>
</body>
</html>