<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit654a92d108ede57234ca6374947977ea
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KAMAL\\NFC\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KAMAL\\NFC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit654a92d108ede57234ca6374947977ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit654a92d108ede57234ca6374947977ea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
