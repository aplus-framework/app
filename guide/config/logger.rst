Logger
======

Aplus Framework App Project Logger Config.

This is an example of the *config/logger.php* configuration file delivered
with the App project:

.. code-block:: php

    use Framework\Log\Logger;
    
    return [
        'default' => [
            'directory' => STORAGE_DIR . 'logs',
            'level' => Logger::DEBUG,
        ],
    ];

Below is an explanation of what each key in the *default* array serves.

- `directory`_
- `level`_

directory
---------

level
-----
