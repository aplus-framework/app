<?php
/**
 * Language config.
 *
 * @see App::language()
 * @see https://aplus-framework.com/docs/app/config#language
 */

use Framework\Language\Language;

return [
    'default' => [
        'default' => 'en',
        'supported' => [
            'en',
            'es',
            'pt-br',
        ],
        'fallback_level' => Language::FALLBACK_NONE,
        'directories' => null,
        'negotiate' => false,
    ],
];
