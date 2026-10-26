<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$_ENV['ENVIRONMENT'] = 'development';
//$_ENV['ENVIRONMENT'] = 'production';

// App -------------------------------------------------------------------------
$_ENV['app.default.origin'] = 'http://localhost:8080';

// Cache -----------------------------------------------------------------------
$_ENV['cache.default.class'] = Aplus\Cache\FilesCache::class;
$_ENV['cache.default.configs'] = [
    'directory' => __DIR__ . '/storage/cache',
];
$_ENV['cache.default.prefix'] = null;

// Database --------------------------------------------------------------------
$_ENV['database.default.config.username'] = 'developer';
$_ENV['database.default.config.password'] = 'password';
$_ENV['database.default.config.schema'] = 'aplus';
$_ENV['database.default.config.host'] = 'localhost';

// Logger ----------------------------------------------------------------------
$_ENV['logger.default.class'] = Aplus\Log\Loggers\MultiFileLogger::class;
$_ENV['logger.default.destination'] = __DIR__ . '/storage/logs';
$_ENV['logger.default.level'] = Aplus\Log\LogLevel::DEBUG;

// Mailer ----------------------------------------------------------------------
$_ENV['mailer.default.host'] = 'localhost';
$_ENV['mailer.default.port'] = 587;
$_ENV['mailer.default.username'] = null;
$_ENV['mailer.default.password'] = null;

// Request ---------------------------------------------------------------------
$_ENV['request.default.allowed_hosts'] = [
    //'localhost',
    //'localhost:8080',
];
