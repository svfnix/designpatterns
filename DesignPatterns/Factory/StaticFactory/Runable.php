<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 1:14 PM
 */

class Runable
{
    var $factory;
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    function run(){
        $platform = $this->factory->createPlatform();
        $platform->run();
    }
}