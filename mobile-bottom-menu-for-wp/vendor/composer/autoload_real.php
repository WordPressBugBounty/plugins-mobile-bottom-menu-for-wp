<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite406fc30eff7491c7ae94e11f563ca27
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite406fc30eff7491c7ae94e11f563ca27', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite406fc30eff7491c7ae94e11f563ca27', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite406fc30eff7491c7ae94e11f563ca27::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
