<?php

declare(strict_types=1);

namespace zcrmsdk\crm\utility;

interface ZohoLoggerInterface
{
    /** @access public */
    const LOGGER_CLASS = 'logger_class';

    /**
     * @param string $msg
     *
     * @return void
     */
    public function warn($msg);

    /**
     * @param string $msg
     *
     * @return void
     */
    public function info($msg);

    /**
     * @param string $msg
     *
     * @return void
     */
    public function severe($msg);

    /**
     * @param string $msg
     *
     * @return void
     */
    public function err($msg);

    /**
     * @param string $msg
     *
     * @return void
     */
    public function debug($msg);
}
