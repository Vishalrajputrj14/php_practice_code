<?php

// class vishal{
//     public $name;
//     public $color;
//     public function __construct($name, $color) {
//         $this-> name = $name;
//         $this-> color = $color;

//     }
//     public function intro(){
//         echo "The fruit is {$this -> name} and the color is {$this -> color}.";

//     }
// }
// // strowberry is inherited from fruit 
// class strowberry extends vishal{
//     public function mseeage(){
//         echo "i am a fruit are berry ?";
//     }
// }
// $strowberry = new strowberry("strowberry", "red");


// $strowberry -> mseeage();
// $strowberry -> intro();


// class cars {
//     public $name;
//     public $color;
//     public function __construct($name, $color){
//         $this -> name = $name;
//         $this -> color = $color;

//     }
//     public function employ(){
//         echo "the car is {$this -> name} and the color is {$this -> color}.";
    
        
//     }
// }
// class Car extends Cars {
//     public function message(){
//         echo "I am a car named Vishal.<br>";
//     }
// }

// $cars = new Cars("BMW", "red");

// $cars->employ();
// $cars->message();
class Cars {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function employ() {
        echo "The car is {$this->name} and the color is {$this->color}.<br>";
    }
}

class Car extends Cars {
    public function message() {
        echo "I am a car.<br>";
    }
}

// ऑब्जेक्ट बनाना और मेथड्स को कॉल करना
$car = new Car("BMW", "Red");
$car->employ();
$car->message();






?>