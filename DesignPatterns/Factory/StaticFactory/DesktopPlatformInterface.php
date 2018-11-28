<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 1:13 PM
 */

class DesktopPlatformInterface implements PlatformInterface
{
    function run(){
        echo "running desktop platform";
    }
}