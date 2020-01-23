<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8ef422c501e013b98a1158c07a8835b
{
    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'bcmPHP\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'bcmPHP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8ef422c501e013b98a1158c07a8835b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8ef422c501e013b98a1158c07a8835b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
