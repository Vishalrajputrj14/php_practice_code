<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class car {
        public $color;
        public $model;
        public $year;

        function __construct($color, $model, $year) {
            $this->color = $color;
            $this->model = $model;
            $this->year = $year;
        }

        function getDetails() {
            return "Car Model: " . $this->model . ", Color: " . $this->color . ", Year: " . $this->year;
        }
    }
    $carv = new car("Red", "Toyota", 2020);
    echo $carv->getDetails(); // Output: Car Model: Toyota, Color: Red, Year: 2020


    class carv {
        public $colorr;
        public $modell;
        public function Message() {
           echo "my car is ".$this->colorr . " and my car model is " . $this->modell;

        } 
    }
    $carv = new carv();
    $carv->colorr = "red";
    $carv->modell = "toyota";
    $carv->Message(); // Output: my car is red and my car model is toyota
var_dump($carv); // Output: object(carv)#1 (2) { ["colorr"]=> string(3) "red" ["modell"]=> string(6) "toyota" }
  
    ?>
</body>
</html>