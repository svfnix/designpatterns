<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 3:26 PM
 */

namespace App\Factory\AbstractFactory;

use App\Factory\AbstractFactory\DoorFactory\RenaultDoorFactory;
use App\Factory\AbstractFactory\EngineFactory\RenaultEngineFactory;
use App\Factory\AbstractFactory\TireFactory\RenaultTireFactory;

class RenaultFactory implements CarFactoryInterface
{

    function getEngineFactory(): EngineFactoryInterface
    {
        return new RenaultEngineFactory();
    }

    function getDoorFactory(): DoorFactoryInterface
    {
        return new RenaultDoorFactory();
    }

    function getTireFactory(): TireFactoryInterface
    {
        return new RenaultTireFactory();
    }
}