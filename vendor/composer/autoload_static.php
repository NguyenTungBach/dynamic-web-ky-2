<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83931cdee6bbf465e0c7a6cad6ff0184
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit83931cdee6bbf465e0c7a6cad6ff0184::$classMap;

        }, null, ClassLoader::class);
    }
}