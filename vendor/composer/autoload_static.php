<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd20db99e4d9a848455b3a2b9bc3e7355
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Egulias\\EmailValidator\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Egulias\\EmailValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd20db99e4d9a848455b3a2b9bc3e7355::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd20db99e4d9a848455b3a2b9bc3e7355::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd20db99e4d9a848455b3a2b9bc3e7355::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
