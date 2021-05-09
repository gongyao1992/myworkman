<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe09506de4268eced09c0a37a450a386
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\Crontab\\' => 18,
            'Workerman\\' => 10,
        ),
        'G' => 
        array (
            'Gongyao\\Testcomposer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\Crontab\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/crontab/src',
        ),
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
        'Gongyao\\Testcomposer\\' => 
        array (
            0 => __DIR__ . '/..' . '/gongyao/testcomposer',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe09506de4268eced09c0a37a450a386::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe09506de4268eced09c0a37a450a386::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}