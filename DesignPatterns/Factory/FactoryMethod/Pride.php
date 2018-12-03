<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 12/3/18
 * Time: 2:42 PM
 */

class Pride implements CarInterface
{

    function start()
    {
        echo "Pride Started" . PHP_EOL;
    }

    function move()
    {
        echo "Pride moved" . PHP_EOL;
    }

    function stop()
    {
        echo "Pride stopped" . PHP_EOL;
    }
}