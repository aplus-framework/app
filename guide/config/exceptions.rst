Exceptions
==========

Aplus Framework App Project Exceptions Config.

This is an example of the *config/exceptions.php* configuration file delivered
with the App project:

.. code-block:: php

    use Framework\Debug\ExceptionHandler;

    return [
        'default' => [
            'environment' => ENVIRONMENT === 'development'
                ? ExceptionHandler::DEVELOPMENT
                : ExceptionHandler::PRODUCTION,
            'views_dir' => null,
            'logger_instance' => 'default',
            'language_instance' => 'default',
        ],
    ];

Below is an explanation of what each key in the *default* array serves.

- `environment`_
- `views_dir`_
- `logger_instance`_
- `language_instance`_

environment
-----------

views_dir
---------

logger_instance
---------------

language_instance
-----------------
