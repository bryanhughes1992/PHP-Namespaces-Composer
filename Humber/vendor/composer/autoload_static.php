<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit910e26eaa6fc87799253241b1c8981e8
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Humber\\Model\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Humber\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Model',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit910e26eaa6fc87799253241b1c8981e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit910e26eaa6fc87799253241b1c8981e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit910e26eaa6fc87799253241b1c8981e8::$classMap;

        }, null, ClassLoader::class);
    }
}