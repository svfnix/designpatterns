
<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 12/3/18
 * Time: 2:42 PM
 */

class Peykan implements CarInterface
{

    function start()
    {
        echo "Peykan Started" . PHP_EOL;
    }

    function move()
    {
        echo "Peykan moved" . PHP_EOL;
    }

    function stop()
    {
        echo "Peykan stopped" . PHP_EOL;
    }
}