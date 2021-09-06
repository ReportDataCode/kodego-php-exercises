<?php
class Fruit {
    public $name;
    public $color;
    public $isAvailable;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
        
    }

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }
}
class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry?";
    }
}

$strawberry = new Strawberry("Strawberry", "red");

$apple = new Fruit("Banana", "Red");
$banana = new Fruit("Apple", "Yellow");
$apple->setName("Apple");
$banana->setName("Banana");
echo $apple->getName();
echo "<br/>";
echo $banana->getName();

