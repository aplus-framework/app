<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Logger config.
 *
 * @see App::logger()
 * @see https://docs.aplus-framework.com/guides/projects/app/config/logger.html
 */

use Framework\Log\Logger;

return [
    'default' => [
        'directory' => STORAGE_DIR . 'logs',
        'level' => Logger::DEBUG,
    ],
];
