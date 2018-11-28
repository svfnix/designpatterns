<?php
/**
 * Created by PhpStorm.
 * User: svf
 * Date: 11/28/18
 * Time: 3:02 PM
 */

class Factory
{
    static function createPlatform($platform){

        switch ($platform){
            case DesktopFactory::class:
                    return new DesktopFactory();
                break;
            case MobileFactory::class:
                    return new MobileFactory();
                break;
            case MobileFactory::class:
                    return new MobileFactory();
                break;
        }

    }
}