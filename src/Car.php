<?php

namespace Perasser\Cars;

class Car
{
    private $color = '';
    private $speed = 100;

    /*
     * set the color of the car
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /*
     * set the speed of the car
     */
    public function setSpeed($speed) {
        $this->speed = $speed;
        return $this;
    }

}