<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2d04878fafa84fa14d73957ea02f63f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/DesignPatterns',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2d04878fafa84fa14d73957ea02f63f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2d04878fafa84fa14d73957ea02f63f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
