<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitce5824dfdbfb78991841167ed8810f71
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitce5824dfdbfb78991841167ed8810f71', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitce5824dfdbfb78991841167ed8810f71', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitce5824dfdbfb78991841167ed8810f71::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
