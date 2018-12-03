<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 12/3/18
 * Time: 2:52 PM
 */

class BenzDriver extends Driving
{

    function getCar(): CarInterface
    {
        return new Benz();
    }
}