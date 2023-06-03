<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf057f044dfa25f4e31cb689cb2fbeb50
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jokejiec\\Test\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jokejiec\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf057f044dfa25f4e31cb689cb2fbeb50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf057f044dfa25f4e31cb689cb2fbeb50::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf057f044dfa25f4e31cb689cb2fbeb50::$classMap;

        }, null, ClassLoader::class);
    }
}
