<?php
/**
 * Validation config.
 *
 * @see App::validation()
 * @see https://docs.aplus-framework.com/guides/projects/app/config/validation.html
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
