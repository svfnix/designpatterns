<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 3:14 PM
 */

namespace App\Factory\AbstractFactory;

interface CarFactoryInterface
{
    function getEngineFactory() : EngineFactoryInterface;
    function getDoorFactory() : DoorFactoryInterface;
    function getTireFactory() : TireFactoryInterface;
}