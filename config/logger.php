<?php
/**
 * Logger config.
 *
 * @see  App::logger()
 */

use Framework\Log\Logger;

return [
    'default' => [
        'directory' => STORAGE_DIR . 'logs/',
        'level' => Logger::DEBUG,
    ],
];
