<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 12/3/18
 * Time: 2:52 PM
 */

class Benz implements CarInterface
{

    function start()
    {
        echo "Benz Started" . PHP_EOL;
    }

    function move()
    {
        echo "Benz moved" . PHP_EOL;
    }

    function stop()
    {
        echo "Benz stopped" . PHP_EOL;
    }
}