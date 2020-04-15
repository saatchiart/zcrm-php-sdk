<?php

declare(strict_types=1);

namespace zcrmsdk\oauth\utility;

class ZohoOAuthLogger implements ZohoOAuthLoggerInterface
{

    /** {@inheritDoc} */
    private function writeToFile($msg)
    {
        $filePointer = fopen(dirname(__FILE__) . "/OAuth.log", "a");
        fwrite($filePointer, sprintf("%s %s\n", date("Y-m-d H:i:s"), $msg));
        fclose($filePointer);
    }

    /** {@inheritDoc} */
    public function warn($msg)
    {
        self::writeToFile("WARNING: $msg");
    }

    /** {@inheritDoc} */
    public function info($msg)
    {
        self::writeToFile("INFO: $msg");
    }

    /** {@inheritDoc} */
    public function severe($msg)
    {
        self::writeToFile("SEVERE: $msg");
    }

    /** {@inheritDoc} */
    public function err($msg)
    {
        self::writeToFile("ERROR: $msg");
    }

    /** {@inheritDoc} */
    public function debug($msg)
    {
        self::writeToFile("DEBUG: $msg");
    }
}
