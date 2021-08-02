<?php
/**
 * Validation config.
 *
 * @see App::validation()
 * @see https://aplus-framework.com/docs/app/config#validation
 */

use Framework\MVC\Validator;
use Framework\Validation\FilesValidator;

return [
    'default' => [
        'validators' => [
            Validator::class,
            FilesValidator::class,
        ],
    ],
];
