<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 2:40 PM
 */

class DesktopFactory implements FactoryInterface
{
    function createPlatform()
    {
       return new DesktopFactory();
    }
}