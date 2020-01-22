<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a6fc2970d91bd2db892e37a5a22ddf7
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a6fc2970d91bd2db892e37a5a22ddf7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a6fc2970d91bd2db892e37a5a22ddf7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
