App
===

.. image:: image.png
    :alt: Aplus Framework App Project

Aplus Framework App Project.

- `Installation`_
- `Structure`_
- `Bootstrap`_
- `Configuration`_
- `Storage`_
- `The global class App`_
- `The App namespace`_
- `Running an Aplus App`_
- `Testing`_
- `Conclusion`_

Installation
------------

The installation of this project can be done with Composer:

.. code-block::

    composer create-project aplus/app:dev-master aplus

or with the `Aplus Command Line Tool <https://docs.aplus-framework.com/guides/aplus/index.html>`_:

.. code-block::

    aplus new-app

Structure
---------

The App has a standard structure to organize business logic. 
And remember, it's highly customizable. You can adapt it as you like.

This is the basic directory tree:

.. code-block::

    .
    ├── app/
    │   ├── Commands/
    │   │   └── Index.php
    │   ├── Controllers/
    │   │   └── Home.php
    │   ├── Languages/
    │   ├── Models/
    │   └── Views/
    ├── App.php
    ├── bin/
    │   └── console
    ├── boot/
    │   ├── app.php
    │   ├── constants.php
    │   ├── helpers.php
    │   ├── init.php
    │   └── routes.php
    ├── composer.json
    ├── config/
    ├── preload.php
    ├── public/
    │   └── index.php
    ├── storage/
    ├── tests/
    └── vendor/

Bootstrap
---------

Inside the **boot** directory are located files that are part of the application
startup.

The **app.php** file returns the instance of the **App** class, which is called
to run the application in HTTP or CLI.

Init
####

In the **init.php** file, initial settings are performed, such as setting the
timezone.

Constants
#########

In the **constants.php** file, the constants that will be available throughout
the application are set, such as the **ENVIRONMENT** and the paths to the
different directories.

Helpers
#######

The **helpers.php** file contains common functions that will always be available
in the application.

Routes
######

In the **routes.php** file, the application routes are served.


Configuration
-------------

Aplus App is organized in such a way that its configuration files are all in the
same directory.

By default, the directory is called **config**. Located in the application's root
directory.

Configuration files serve to pre-establish values used by services
or routines needed for `helpers`_ and `libraries <https://docs.aplus-framework.com/guides/libraries/index.html>`_.

For more details see the `Config <https://docs.aplus-framework.com/guides/libraries/config/index.html>`_
and `MVC <https://docs.aplus-framework.com/guides/libraries/mvc/index.html>`_
libraries documentation.

Storage
-------

In the **storage** directory, different types of files are stored in
subdirectories:

Cache
#####

Cache files are stored in the **cache** directory.

Logs
####

Log files are stored in the **logs** directory.

Sessions
########

Session files are stored in the **sessions** directory.

Uploads
#######

Upload files are stored in the **uploads** directory.

The global class App
--------------------

The global class **App**, whose file is located in the root directory, extends
the ``Framework\MVC\App`` class.

Through it, it is possible to customize features and
`services <https://docs.aplus-framework.com/guides/libraries/mvc/index.html#services>`_.

The App namespace
-----------------

Inside the **app** directory is registered the ``App`` namespace.

By default, some files are already inside it:

Commands
########

In the **Commands** directory is the ``App\Commands`` namespace.

In it, you can add commands that will be available in the console.

Controllers
###########

In the **Controllers** directory is the ``App\Controllers`` namespace.

In it, you can add controllers with methods that will act as routes.

Languages
#########

In the subdirectories of **Languages** are stored application language files.

Models
######

In the **Models** directory is the ``App\Models`` namespace.

In it it is possible to add models that represent tables of the application's
database schema.

Views
#####

In the **Views** directory are stored application view files.

Running an Aplus App
--------------------

The Aplus App project is designed to run on HTTP and CLI.

Run HTTP
########

Inside the **public** directory is the front-controller **index.php**.

The **public** directory must be the document root configured on the server.

Note that the directory name may vary by server. In some it may be called
**public_html** and in others **web**, etc.

In development, you can use PHP server running ``vendor/bin/php-server`` or
Docker Compose.

Run CLI
#######

Inside the **bin** directory is the **console** file.

Through it it is possible to run the various commands of the application,
running ``./bin/console``.

Testing
-------

Unit tests can be created within the **tests** directory. See the tests that
come inside it as an example.

Conclusion
----------

Aplus App Project is an easy-to-use tool for, beginners and experienced, PHP developers. 
It is perfect for building powerful, high-performance applications. 
The more you use it, the more you will learn.

.. note::
    Did you find something wrong? 
    Be sure to let us know about it with an
    `issue <https://gitlab.com/aplus-framework/projects/app/issues>`_. 
    Thank you!
