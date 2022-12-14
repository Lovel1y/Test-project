<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae4b1ee9a0669d1bb0e1f0f649b5f9b3
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae4b1ee9a0669d1bb0e1f0f649b5f9b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae4b1ee9a0669d1bb0e1f0f649b5f9b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitae4b1ee9a0669d1bb0e1f0f649b5f9b3::$classMap;

        }, null, ClassLoader::class);
    }
}
