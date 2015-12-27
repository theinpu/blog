<?php
/**
 * User: anubis
 * Date: 27.12.2015
 * Time: 2:36
 */

namespace bc\utils;

use bc\config\ConfigManager;
use Monolog\Handler\ChromePHPHandler;
use Monolog\Handler\RotatingFileHandler;

class Logger {

    /**
     * @var \Monolog\Logger[]
     */
    private static $logs = array();

    /**
     * @param string $chanel
     *
     * @return \Monolog\Logger
     */
    public static function Log($chanel = "Application") {
        if(!isset(self::$logs[$chanel])) {
            $logsLevel = ConfigManager::get('config/app')->get('logs.level');
            $logFile = ConfigManager::get('config/app')->get('logs');

            self::$logs[$chanel] = new \Monolog\Logger($chanel, array(
                new RotatingFileHandler($logFile, 0, $logsLevel),
                new ChromePHPHandler($logsLevel)
            ));
        }

        return self::$logs[$chanel];
    }

}