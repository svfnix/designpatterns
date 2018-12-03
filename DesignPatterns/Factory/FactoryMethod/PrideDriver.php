<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 12/3/18
 * Time: 2:49 PM
 */

class PrideDriver extends Driving
{

    function getCar(): CarInterface
    {
        new Pride();
    }
}