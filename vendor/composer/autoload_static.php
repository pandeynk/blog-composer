<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69cd9b24c3b27f71692ea9b5399b5a33
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Library\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Library\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69cd9b24c3b27f71692ea9b5399b5a33::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69cd9b24c3b27f71692ea9b5399b5a33::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
