<?php
class Vishal {
    public $name; 
    protected $color; 
    private $weight; 

    function setColor($color) {
        $this->color = $color;
    }

    function getColor() {
        return $this->color;
    }

    function setWeight($weight) {
        $this->weight = $weight;
    }

    function getWeight() {
        return $this->weight;
    }
}

$mango = new Vishal(); 
$mango->name = "mango";
$mango->setColor("yellow");  // सेट करना
$mango->setWeight(300);  // सेट करना

echo "Fruit Name: " . $mango->name . "\n";
echo "Fruit Color: " . $mango->getColor() . "\n"; // सुरक्षित तरीके से एक्सेस करना
echo "Fruit Weight: " . $mango->getWeight() . " grams\n"; // सुरक्षित तरीके से एक्सेस करना

?>