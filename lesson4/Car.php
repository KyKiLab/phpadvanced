<?php

namespace phpadvanced\lesson4;

class Car implements MovableInterface, CarStateInterface{

    private bool $engine;
    private bool $headlights;
    private int $speed;

    private const maxSpeed = 120;

    function __construct() {
        $this->engine = false;
        $this->headlights = false;
        $this->speed = 0;
    }

    public function start()
    {
        $this->engine = true;
        $this->headlights = false;
        $this->speed = 0;
    }

    public function stop()
    {
        $this->engine = false;
        $this->headlights = false;
        $this->speed = 0;
    }

    public function up()
    {
        $this->speed += 10;
        echo ($this->speed > self::maxSpeed) ? "Вы достигли максимальной скорости " . self::maxSpeed . "\n\r" : $this->speed . "\n\r";
    }

    public function down()
    {
        $this->speed = ($this->speed < 10) ? 0 : ($this->speed - 10);
        echo $this->speed . "\n\r";
    }

    public function turnOffHeadlights()
    {
        $this->headlights = false;
    }

    public function turnOnHeadlights()
    {
        $this->headlights = true;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function getHeadlights()
    {
        return $this->headlights;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function printState(){
        print("Engine: " . ($this->getEngine() ? "yes" : "no") .
            "\n\r Headlights: " . ($this->getHeadlights() ? "yes" : "no") .
            " \n\r Speed: " . ($this->getSpeed() ? "yes" : "no") . "\n\r");
    }
}