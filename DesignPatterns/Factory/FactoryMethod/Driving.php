<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 12/3/18
 * Time: 2:44 PM
 */

abstract class Driving
{
    abstract function getCar() : CarInterface;

    function drive() {
        $car = $this->getCar();
        $car->start();
        $car->move();
        $car->stop();
    }
}