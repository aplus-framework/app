<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Anti-CSRF config.
 *
 * @see App::antiCsrf()
 * @see https://docs.aplus-framework.com/guides/projects/app/config/anti-csrf.html
 */
return [
    'default' => [
        'enabled' => true,
        'token_name' => 'csrf_token',
    ],
];
