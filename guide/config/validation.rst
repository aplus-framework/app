Validation
==========

Aplus Framework App Project Validation Config.

This is an example of the *config/validation.php* configuration file delivered
with the App project:

.. code-block:: php

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

Below is an explanation of what each key in the *default* array serves.

- `validators`_

validators
----------
