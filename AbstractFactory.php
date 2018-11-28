<?php

require_once 'vendor/autoload.php';

use App\Factory\AbstractFactory\BikeFactory;
use App\Factory\AbstractFactory\CarFactoryInterface;
use App\Factory\AbstractFactory\PeykanFactory;

/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 3:28 PM
 */

class AbstractFactory
{
    private $carFactory;
    public function __construct(CarFactoryInterface $carFactory)
    {
        $this->carFactory = $carFactory;
    }

    private function setEngine(){
        echo $this->carFactory->getEngineFactory()->getType() . PHP_EOL;
    }

    private function setDoor(){
        echo $this->carFactory->getDoorFactory()->getType() . PHP_EOL;
    }

    private function setTire(){
        echo $this->carFactory->getTireFactory()->getType() . PHP_EOL;
    }

    function createCar(){
        $this->setEngine();
        $this->setDoor();
        $this->setTire();
    }
}

$factory = new AbstractFactory(new BikeFactory());
$factory->createCar();