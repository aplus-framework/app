<?php
/**
 * AntiCSRF config.
 *
 * @see App::antiCsrf()
 */
return [
    'default' => [
        'enabled' => true,
        'token_name' => 'csrf_token',
    ],
];
