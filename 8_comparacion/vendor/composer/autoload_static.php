<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ad2c7b320340c28f17e99d7c6770efe
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Arcoders\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Arcoders\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ad2c7b320340c28f17e99d7c6770efe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ad2c7b320340c28f17e99d7c6770efe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}