<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 3:28 PM
 */

namespace App\Factory\AbstractFactory;

use App\Factory\AbstractFactory\DoorFactory\PeykanDoorFactory;
use App\Factory\AbstractFactory\DoorFactory\PrideDoorFactory;
use App\Factory\AbstractFactory\EngineFactory\BikeEngineFactory;
use App\Factory\AbstractFactory\EngineFactory\PeykanEngineFactory;
use App\Factory\AbstractFactory\TireFactory\BikeTireFactory;
use App\Factory\AbstractFactory\TireFactory\PeykanTireFactory;

class BikeFactory implements CarFactoryInterface
{

    function getEngineFactory(): EngineFactoryInterface
    {
        return new BikeEngineFactory();
    }

    function getDoorFactory(): DoorFactoryInterface
    {
        return new PrideDoorFactory();
    }

    function getTireFactory(): TireFactoryInterface
    {
        return new BikeTireFactory();
    }
}