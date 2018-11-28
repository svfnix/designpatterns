<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 3:20 PM
 */

namespace App\Factory\AbstractFactory\EngineFactory;

use App\Factory\AbstractFactory\EngineFactoryInterface;

class PrideEngineFactory implements EngineFactoryInterface
{
    function getType()
    {
        return self::class;
    }
}