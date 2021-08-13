Language
========

Aplus Framework App Project Language Config.

This is an example of the *config/language.php* configuration file delivered
with the App project:

.. code-block:: php

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

Below is an explanation of what each key in the *default* array serves.

- `default`_
- `supported`_
- `fallback_level`_
- `directories`_
- `negotiate`_

default
-------

supported
---------

fallback_level
--------------

directories
-----------

negotiate
---------
