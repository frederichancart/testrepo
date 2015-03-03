<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Logger
{
    const INFO = 'info';
    const ERROR = 'error';

    private static $instance;
    private $config = array();

    private function __construct()
    {
        $this->config = require "config.php";
    }

    private static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    private function writeToFile($message)
    {
        file_put_contents($this->config['log_file'], "$message\n", FILE_APPEND);
    }

    public static function log($message, $level = Logger::INFO)
    {
        $date = date('Y-m-d H:i:s');
        $severity = "[$level]";
        $message = "$date $severity ::$message";
        self::getInstance()->writeToFile($message);
    }
}


