Session
=======

Aplus Framework App Project Session Config.

This is an example of the *config/session.php* configuration file delivered
with the App project:

.. code-block:: php

    use Framework\Session\SaveHandlers\FilesHandler;
    
    return [
        'default' => [
            'options' => [],
            'save_handler' => [
                'class' => FilesHandler::class,
                'config' => [
                    'prefix' => '',
                    'directory' => STORAGE_DIR . 'sessions',
                    'match_ip' => false,
                    'match_ua' => false,
                ],
            ],
            'logger_instance' => 'default',
        ],
    ];

Below is an explanation of what each key in the *default* array serves.

- `options`_
- `save_handler`_
- `logger_instance`_

options
-------

save_handler
------------

class
^^^^^

config
^^^^^^

logger_instance
---------------
