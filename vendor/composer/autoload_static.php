<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c13c7e86dd5098b8413ee2db63511ba
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Settings\\' => 20,
            'chillerlan\\QRCode\\' => 18,
        ),
        'V' => 
        array (
            'Vicdi\\QrPhp\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-settings-container/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
        'Vicdi\\QrPhp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c13c7e86dd5098b8413ee2db63511ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c13c7e86dd5098b8413ee2db63511ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3c13c7e86dd5098b8413ee2db63511ba::$classMap;

        }, null, ClassLoader::class);
    }
}
