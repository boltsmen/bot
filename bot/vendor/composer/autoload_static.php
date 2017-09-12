<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97a178dc107fc7e319eec2c32995432b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TelegramBot\\Api\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TelegramBot\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/telegram-bot/api/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97a178dc107fc7e319eec2c32995432b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97a178dc107fc7e319eec2c32995432b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}