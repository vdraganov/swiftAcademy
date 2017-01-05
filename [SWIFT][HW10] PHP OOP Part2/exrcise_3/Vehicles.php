<?php

class Vehicle {

    public $type;
    public $fuelType;
    public $engine;
    public $manifacturer;
    public $manifactureYear;

    function __construct($type, $fuelType, $engine, $manifacturer, $manifactureYear) {
        $this->type = $type;
        $this->fuelType = $fuelType;
        $this->engine = $engine;
        $this->manifacturer = $manifacturer;
        $this->manifactureYear = $manifactureYear;
    }

    public function move() {
        return 'moving...';
    }

    private function needFuel() {
        return 'The vehicle needs to be fueled.';
    }

    // public function () {
    //     return 'moving...';
    // }
    //
    // public function () {
    //     return 'moving...';
    // }

    public function getSpecs() {
        return 'Vehicle type: ' . $this->type . ';<br/>' .
                'Manifacturer: ' . $this->manifacturer . ';<br/>' .
                'Year of manifacture: ' . $this->manifactureYear . ';<br/>' .
                'Fuel type: ' . $this->fuelType . ';<br/>';
    }


}


?>
