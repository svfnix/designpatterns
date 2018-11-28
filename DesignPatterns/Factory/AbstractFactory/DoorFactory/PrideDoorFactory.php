<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 3:20 PM
 */

namespace App\Factory\AbstractFactory\DoorFactory;

use App\Factory\AbstractFactory\DoorFactoryInterface;

class PrideDoorFactory implements DoorFactoryInterface
{
    function getType()
    {
        return self::class;
    }
}