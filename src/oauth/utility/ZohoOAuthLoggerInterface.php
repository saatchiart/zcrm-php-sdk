<?php

declare(strict_types=1);

namespace zcrmsdk\oauth\utility;

use zrcmsdk\crm\utility\ZohoLoggerInterface;

interface ZohoOAuthLoggerInterface extends ZohoLoggerInterface
{
    /** @access public */
    const OAUTH_LOGGER_CLASS = 'oauth_logger_class';
}
