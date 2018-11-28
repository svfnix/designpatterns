<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 3:28 PM
 */

namespace App\Factory\AbstractFactory;

use App\Factory\AbstractFactory\DoorFactory\PeykanDoorFactory;
use App\Factory\AbstractFactory\EngineFactory\PeykanEngineFactory;
use App\Factory\AbstractFactory\TireFactory\PeykanTireFactory;

class PeykanFactory implements CarFactoryInterface
{

    function getEngineFactory(): EngineFactoryInterface
    {
        return new PeykanEngineFactory();
    }

    function getDoorFactory(): DoorFactoryInterface
    {
        return new PeykanDoorFactory();
    }

    function getTireFactory(): TireFactoryInterface
    {
        return new PeykanTireFactory();
    }
}