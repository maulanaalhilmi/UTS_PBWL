<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92aa0d5c7cbd87b919eec611277fcf2a
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit92aa0d5c7cbd87b919eec611277fcf2a::$classMap;

        }, null, ClassLoader::class);
    }
}
