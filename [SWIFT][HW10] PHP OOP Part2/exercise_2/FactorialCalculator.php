<?php

class FactorialCalculator {

    public $number;
    private $factorial;

    function __construct($num) {
        $this->number = $num;
    }

    private function calculateFactorial() {
        $this->factorial = 1;
        do {
            $this->factorial *= $this->number;
            $this->number--;
        } while ($this->number > 0);

        return $this->factorial;
    }

    public function getFactorial() {
        if (!$this->factorial) {
            $this->calculateFactorial();
        }

        return $this->factorial;
    }
}
?>
