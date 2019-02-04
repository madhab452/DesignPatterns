<?php
declare(strict_types = 1);
namespace src\Lib;

/**
 * Class Logger
 * for simplicity i have just used a log method, which writes the given input to the console
 */
class Logger {

    private static $instance = null;

    /**
     * Logger constructor.
     * Private constructor will prevents new instance
     */
    private function __construct()
    {
    }
    /**
     * Private clone will prevent cloning of the object
     */
    private function __clone()
    {
    }

    /**
     * Private wakeup will prevent unserialize the object
     */
    private function __wakeup()
    {
    }

    /**
     * @return Logger|null
     */
    public static function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    /**
     * @param string $str
     */
    public function log(string $str) : void {
        // here we can log the data to filesystem or database
        echo $str;
    }

}
