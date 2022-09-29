<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7b83e7faab5ceeb85cb162bb4f9e1ce
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita7b83e7faab5ceeb85cb162bb4f9e1ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7b83e7faab5ceeb85cb162bb4f9e1ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7b83e7faab5ceeb85cb162bb4f9e1ce::$classMap;

        }, null, ClassLoader::class);
    }
}
