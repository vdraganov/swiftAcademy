<?php

require_once './MobileInterface.php';

class Mobile implements MobileInterface {
    public $model;
    public $manifacturer;
    private $type;
    private $owner;
    public $batteryType;
    public $displayType;

    function __construct($model, $manifacturer, $owner, $batteryType, $displayType) {
        $this->model = $model;
        $this->manifacturer = $manifacturer;
        $this->owner = $owner;
        $this->batteryType = $batteryType;
        $this->displayType = $displayType;
    }

    private function setPhoneType() {
        $this->type = rand();
    }

    public function getModel() {
        return $this->model;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function getType() {
        if (!isset($this->setPhoneType)) {
            $this->setPhoneType();
        }

        return $this->type;
    }

    public function getBattery() {
        return $this->batteryType;
    }

    public function getScreen() {
        return $this->displayType;
    }

    /**
     * Return pretty formatted message with phone info
     * @return string
     */
    public function getInfo() {
        return 'Phone Info: <br/>' .
                'Manifacturer: ' . $this->manifacturer . '; <br/>' .
                'Model: ' . $this->getModel() . '; <br/>' .
                'Serial Numeber(type): ' . $this->getType() . '; <br/>' .
                'Onwer: ' . $this->getOwner() . '; <br/>' .
                'Battery: ' . $this->getBattery() . '; <br/>' .
                'Display: ' . $this->getScreen() . '; <br/>';
    }
}


?>
