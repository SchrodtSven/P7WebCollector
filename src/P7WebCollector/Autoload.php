<?php

declare(strict_types=1);
/**
 *  Init auto loading for current project 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2022-12-30
 */


namespace P7WebCollector;
require_once 'GlobalFunctions.php';
class Autoload
{

    /**
     * Namespace prefix for project files
     */
    public const NAMESPACE = 'P7WebCollector';

    /**
     * Lib prefix
     */
    public const LIB_PREFIX = 'src/';

    /**
     * Registering AL
     *
     * @return void
     */
    public function registerAutoloader()
    {
        /**
         * Registering project specific auto loading
         */
        spl_autoload_register(function ($className) {

            // Check if namespace of class to be instantiated belongs to us
            if (str_starts_with($className,  Autoload::NAMESPACE)) {
                $file = self::LIB_PREFIX . str_replace('\\', '/', $className) . '.php';

                // Check if destination class file exists  and include it, 
                // if not so - __do not throw__ \E*, because of AL chain!
                // @see https://www.php-fig.org/psr/psr-4/#2-specification : 
                // "4. Autoloader implementations *MUST NOT* throw exceptions,
                // MUST NOT raise errors of any level, and SHOULD NOT return a value."
                
                if (file_exists($file)) {
                    require_once $file;
                }
            }
        });
    }
}
// Registering auto loader
(new Autoload())->registerAutoloader();


