<?php
class Dog {
    public $breed;
    public $furColor;
    public $furLenght;
    public $eyeColor;

    public function __construct($breed, $furColor, $furLenght, $eyeColor) {
        $this->breed = $breed;
        $this->furColor = $furColor;
        $this->furLenght = $furLenght;
        $this->eyeColor = $eyeColor;
    }

    public function walk() {
        return 'walking...';
    }

    public function run() {
        return 'runing...';
    }

    public function bark() {
        return 'bau-bau';
    }

    public function bite() {
        return 'biting...';
    }

    public function drinkWater() {
        return 'drinking water...';
    }

    public function feed() {
        return 'feeding...';
    }

    public function __toString() {
        return $this->breed;
    }

}
?>
