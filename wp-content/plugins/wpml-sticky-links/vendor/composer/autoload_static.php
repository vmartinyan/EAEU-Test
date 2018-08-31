<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit177deef1b9f1ea998589a3f983b20a14
{
    public static $prefixesPsr0 = array (
        'x' => 
        array (
            'xrstf\\Composer52' => 
            array (
                0 => __DIR__ . '/..' . '/xrstf/composer-php52/lib',
            ),
        ),
    );

    public static $classMap = array (
        'WPML_Cache_Directory' => __DIR__ . '/..' . '/wpml-shared/wpml-lib-cache/src/cache/class-wpml-cache-directory.php',
        'WPML_Dependencies' => __DIR__ . '/..' . '/wpml-shared/wpml-lib-dependencies/src/dependencies/class-wpml-dependencies.php',
        'WPML_Sticky_Links' => __DIR__ . '/../..' . '/classes/class-wpml-sticky-links.php',
        'xrstf\\Composer52\\AutoloadGenerator' => __DIR__ . '/..' . '/xrstf/composer-php52/lib/xrstf/Composer52/AutoloadGenerator.php',
        'xrstf\\Composer52\\Generator' => __DIR__ . '/..' . '/xrstf/composer-php52/lib/xrstf/Composer52/Generator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit177deef1b9f1ea998589a3f983b20a14::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit177deef1b9f1ea998589a3f983b20a14::$classMap;

        }, null, ClassLoader::class);
    }
}
