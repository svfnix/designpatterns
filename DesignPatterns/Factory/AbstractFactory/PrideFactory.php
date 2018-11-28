<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 3:18 PM
 */

namespace App\Factory\AbstractFactory;

use App\Factory\AbstractFactory\DoorFactory\PrideDoorFactory;
use App\Factory\AbstractFactory\EngineFactory\PrideEngineFactory;
use App\Factory\AbstractFactory\TireFactory\PrideTireFactory;

class PrideFactory implements CarFactoryInterface
{
    function getEngineFactory(): EngineFactoryInterface
    {
        return new PrideEngineFactory();
    }

    function getDoorFactory(): DoorFactoryInterface
    {
        return new PrideDoorFactory();
    }

    function getTireFactory(): TireFactoryInterface
    {
        return new PrideTireFactory();
    }
}