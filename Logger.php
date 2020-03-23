<?php

class Logger
{
    private static $instance = null;

    private function __construct()
    {
        
    }

    public static function get()
    {
        if (null === self::$instance)
        {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    public function save($msg)
    {
        file_put_contents('server.log', $msg, FILE_APPEND | LOCK_EX);
    }
}