<?php
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
