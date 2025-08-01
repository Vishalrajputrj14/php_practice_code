<?php

class Fruit
{
    public $name;
    public $color;

    function __construct($name) {
        $this->name = $name;  // Assign the passed name to the object's property
    }

    function get_name() {
        return $this->name;
    }
}

$apple = new Fruit('apple');
$banana = new Fruit('banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

?>
