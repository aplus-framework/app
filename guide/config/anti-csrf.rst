Anti-CSRF
=========

Aplus Framework App Project Anti-CSRF Config.

This is an example of the *config/anti-csrf.php* configuration file delivered
with the App project:

.. code-block:: php

    return [
        'default' => [
            'enabled' => true,
            'token_name' => 'csrf_token',
        ],
    ];

Below is an explanation of what each key in the *default* array serves.

- `enabled`_
- `token_name`_

enabled
-------

token_name
----------
