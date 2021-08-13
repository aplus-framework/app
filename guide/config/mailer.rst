Mailer
======

Aplus Framework App Project Mailer Config.

This is an example of the *config/mailer.php* configuration file delivered
with the App project:

.. code-block:: php

    use Framework\Email\SMTP;
    
    return [
        'default' => [
            'class' => SMTP::class,
            'server' => 'localhost',
            'port' => 587,
            'tls' => true,
            'username' => null,
            'password' => null,
            'charset' => 'utf-8',
            'crlf' => "\r\n",
            'keep_alive' => false,
        ],
    ];

Below is an explanation of what each key in the *default* array serves.

- `class`_
- `server`_
- `port`_
- `tls`_
- `username`_
- `password`_
- `charset`_
- `crlf`_
- `keep_alive`_

class
-----

server
------

port
----

tls
---

username
--------

password
--------

charset
-------

crlf
----

keep_alive
----------
