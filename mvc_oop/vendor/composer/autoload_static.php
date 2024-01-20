<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacc5102b0ac4e8771c3c32c26aac230b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'A' => 
        array (
            'Admin\\MvcOop\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'Admin\\MvcOop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitacc5102b0ac4e8771c3c32c26aac230b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacc5102b0ac4e8771c3c32c26aac230b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitacc5102b0ac4e8771c3c32c26aac230b::$classMap;

        }, null, ClassLoader::class);
    }
}