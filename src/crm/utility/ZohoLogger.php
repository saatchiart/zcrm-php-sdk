<?php

declare(strict_types=1);

namespace zcrmsdk\crm\utility;

class ZohoLogger implements ZohoLoggerInterface
{
    private function writeToFile($msg)
    {
        set_include_path(ZCRMConfigUtil::getConfigValue('applicationLogFilePath'));
        $path = get_include_path();
        if (!ZCRMConfigUtil::getConfigValue('applicationLogFilePath')) {
            $path=dirname(__FILE__) ."/../../..";
        }
        $filePointer = fopen($path . "/ZCRMClientLibrary.log", "a");
        if (! $filePointer) {
            return;
        }
        fwrite($filePointer, sprintf("%s %s\n", date("Y-m-d H:i:s"), $msg));
        fclose($filePointer);
    }

    public function warn($msg)
    {
        self::writeToFile("WARNING: $msg");
    }

    public function info($msg)
    {
        self::writeToFile("INFO: $msg");
    }

    public function severe($msg)
    {
        self::writeToFile("SEVERE: $msg");
    }

    public function err($msg)
    {
        self::writeToFile("ERROR: $msg");
    }

    public function debug($msg)
    {
        self::writeToFile("DEBUG: $msg");
    }
}
