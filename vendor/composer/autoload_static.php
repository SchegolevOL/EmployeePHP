<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5e3f9d641a1c56e2a2eb53641f9e2f8
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'trait\\' => 6,
        ),
        'c' => 
        array (
            'class\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'trait\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Traits',
        ),
        'class\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb5e3f9d641a1c56e2a2eb53641f9e2f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb5e3f9d641a1c56e2a2eb53641f9e2f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb5e3f9d641a1c56e2a2eb53641f9e2f8::$classMap;

        }, null, ClassLoader::class);
    }
}