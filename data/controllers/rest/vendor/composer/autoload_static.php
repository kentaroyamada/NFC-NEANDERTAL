<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06fa2fe68165756e6513b7c1ac63f121
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hashids\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hashids\\' => 
        array (
            0 => __DIR__ . '/..' . '/hashids/hashids/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06fa2fe68165756e6513b7c1ac63f121::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06fa2fe68165756e6513b7c1ac63f121::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
