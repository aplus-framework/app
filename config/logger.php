<?php
/**
 * Logger config.
 *
 * @see  App::logger()
 * @see https://aplus-framework.com/docs/app/config#logger
 */

use Framework\Log\Logger;

return [
    'default' => [
        'directory' => STORAGE_DIR . 'logs',
        'level' => Logger::DEBUG,
    ],
];
