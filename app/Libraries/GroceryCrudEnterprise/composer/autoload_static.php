<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit829065e31ba829e6ee711b9f1f2c7cdb
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
        'L' => 
        array (
            'Laminas\\Stdlib\\' => 15,
            'Laminas\\Db\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'Laminas\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-stdlib/src',
        ),
        'Laminas\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-db/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/scoumbourdis/upload/src',
            ),
        ),
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/scoumbourdis/phpexcel/Classes',
            ),
        ),
        'G' => 
        array (
            'GroceryCrud' => 
            array (
                0 => __DIR__ . '/..' . '/grocery-crud/enterprise/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit829065e31ba829e6ee711b9f1f2c7cdb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit829065e31ba829e6ee711b9f1f2c7cdb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit829065e31ba829e6ee711b9f1f2c7cdb::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit829065e31ba829e6ee711b9f1f2c7cdb::$classMap;

        }, null, ClassLoader::class);
    }
}
