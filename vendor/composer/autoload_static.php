<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5ea8786e78899a1400377577de83804
{
    public static $files = array (
        'e320f53bb3364b7ed572ecc5ef33c5cf' => __DIR__ . '/../..' . '/app/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'App\\App' => __DIR__ . '/../..' . '/app/App.php',
        'App\\Controllers\\TaskController' => __DIR__ . '/../..' . '/app/Controllers/TaskController.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/app/Core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/app/Core/Router.php',
        'App\\Database\\DBconntion' => __DIR__ . '/../..' . '/app/Database/DBconntect.php',
        'App\\Database\\qureyBulider' => __DIR__ . '/../..' . '/app/Database/qureyBulidr.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5ea8786e78899a1400377577de83804::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5ea8786e78899a1400377577de83804::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita5ea8786e78899a1400377577de83804::$classMap;

        }, null, ClassLoader::class);
    }
}
