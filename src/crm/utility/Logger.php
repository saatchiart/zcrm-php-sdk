<?php

declare(strict_types=1);

namespace zcrmsdk\crm\utility;

use zcrmsdk\crm\utility\ZohoLoggerInterface;

class Logger
{
    /** @var \zcrmsdk\crm\utility\ZohoLoggerInterface */
    private static $logger;

    private static function initializeLogger()
    {
        if (!self::$logger) {
            $loggerClassName = ZCRMConfigUtil::getConfigValue(
                ZohoLoggerInterface::LOGGER_CLASS
            );
            self::$logger = new $loggerClassName();
        }
    }

    private static function writeToFile($msg)
    {
        self::initializeLogger();
        return self::$logger->writeToFile($msg);
    }

    public static function warn($msg)
    {
        self::initializeLogger();
        return self::$logger->warn($msg);
    }

    public static function info($msg)
    {
        self::initializeLogger();
        return self::$logger->info($msg);
    }

    public static function severe($msg)
    {
        self::initializeLogger();
        return self::$logger->severe($msg);
    }

    public static function err($msg)
    {
        self::initializeLogger();
        return self::$logger->err($msg);
    }

    public static function debug($msg)
    {
        self::initializeLogger();
        return self::$logger->debug($msg);
    }
}
