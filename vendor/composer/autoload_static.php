<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6beca39a6af0a854af1a4eea69a4f6ff
{
    public static $files = array (
        '6c41697b31a6dbbb45ab0240329e0c82' => __DIR__ . '/../..' . '/includes/functions/HelperFunctions.php',
        'd59b526359b0ef622b26309a2d7293d2' => __DIR__ . '/../..' . '/includes/functions/AjaxFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WheelOfLife\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WheelOfLife\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WheelOfLife\\Wheel_Of_Life' => __DIR__ . '/../..' . '/includes/Wheel_Of_Life.php',
        'WheelOfLife\\Wheel_Of_Life_Admin' => __DIR__ . '/../..' . '/includes/Wheel_Of_Life_Admin.php',
        'WheelOfLife\\Wheel_Of_Life_PostTypes' => __DIR__ . '/../..' . '/includes/Wheel_Of_Life_PostTypes.php',
        'WheelOfLife\\Wheel_Of_Life_Public' => __DIR__ . '/../..' . '/includes/Wheel_Of_Life_Public.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6beca39a6af0a854af1a4eea69a4f6ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6beca39a6af0a854af1a4eea69a4f6ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6beca39a6af0a854af1a4eea69a4f6ff::$classMap;

        }, null, ClassLoader::class);
    }
}
