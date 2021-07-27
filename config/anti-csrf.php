<?php
/**
 * AntiCSRF config.
 *
 * @see App::antiCsrf()
 * @see https://aplus-framework.com/docs/app/config#anti-csrf
 */
return [
    'default' => [
        'enabled' => true,
        'token_name' => 'csrf_token',
    ],
];
