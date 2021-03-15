<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40bf99ee01dd983d975cef3d9dfb376f
{
    public static $classMap = array (
        'SebastianBergmann\\Timer\\Exception' => __DIR__ . '/..' . '/phpunit/php-timer/src/Exception.php',
        'SebastianBergmann\\Timer\\RuntimeException' => __DIR__ . '/..' . '/phpunit/php-timer/src/RuntimeException.php',
        'SebastianBergmann\\Timer\\Timer' => __DIR__ . '/..' . '/phpunit/php-timer/src/Timer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit40bf99ee01dd983d975cef3d9dfb376f::$classMap;

        }, null, ClassLoader::class);
    }
}
