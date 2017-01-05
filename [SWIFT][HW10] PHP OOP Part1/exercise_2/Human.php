<?php
require_once '../exercise_1/Dog.php';

class Human {
    private $isBusy = false;

    public $name;
    public $gender;
    public $weight;
    public $height;
    public $dog;


    function __construct($name, $gender, $weight, $height, $dog) {
        $this->name = $name;
        $this->gender = $gender;
        $this->weight = $weight;
        $this->height = $height;
        $this->dog = $dog;
    }

    private function toggleBusyState() {
        $this->isBusy = !$this->isBusy;
    }

    public function walk() {
        return 'walking... ';
    }

    public function run() {
        return 'runing...';
    }

    public function talk() {
        return 'bla-bla';
    }

    public function feed() {
        return 'feeding...';
    }

    public function meetOthers($other) {
        if ($this->canMeetOthers($other)) {
            $this->toggleBusyState();
            $other->toggleBusyState();
            return $this->name . ' is meeting with... ' . $other->name . '<br>';
        } else {
            return $this->name . ' can NOT meet ' . $other->name . '<br>';
        }
    }

    public function endMeeting($other) {
        $this->toggleBusyState();
        $other->toggleBusyState();
        return $this->name . ' ended the meeting with... ' . $other->name . '<br>';
    }

    private function canMeetOthers($other) {
        if (($this->gender != $other->gender) && (!$this->isBusy) && (!$other->isBusy)){
            return true;
        }
        return false;
    }

}
?>
