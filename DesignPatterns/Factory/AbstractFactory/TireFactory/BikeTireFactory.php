<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 3:20 PM
 */

namespace App\Factory\AbstractFactory\TireFactory;

use App\Factory\AbstractFactory\TireFactoryInterface;

class BikeTireFactory implements TireFactoryInterface
{
    function getType()
    {
        return self::class;
    }
}