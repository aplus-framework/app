App
===

.. image:: image.png
    :alt: Aplus Framework App Project

Aplus Framework App Project.

- `Installation`_
- `Structure`_
- `Bootstrap`_
- `Configuration`_
- `Extra files`_
- `Storage`_
- `The global class App`_
- `The App namespace`_
- `Running an aplus app`_
- `Testing`_
- `Optimization`_
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
    │   └── app.php
    ├── composer.json
    ├── config/
    ├── extra/
    │   ├── constants.php
    │   ├── helpers.php
    │   ├── init.php
    │   └── routes.php
    ├── preload.php
    ├── public/
    │   └── index.php
    ├── storage/
    ├── tests/
    └── vendor/

Bootstrap
---------


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

Extra files
-----------

Init
####

Constants
#########

Routes
######

Helpers
#######

Storage
-------

Cache
#####

Logs
####

Sessions
########

Uploads
#######

The global class App
--------------------

The App namespace
-----------------

Commands
########

Controllers
###########

Languages
#########

Models
######

Views
#####


Running an aplus app
--------------------

Run HTTP
########

Run CLI
#######

Testing
-------

Test HTTP
#########

Test CLI
########

Optimization
------------

Caching
#######

Preloading
##########

Benchmarks
##########

TODO: Colocar um texto importante aqui.

Já falamos sobre dinossauros, padarias, encanamentos, caixas de música e faíscas. 
Agora vamos começar a falar sobre raios, estrelas e contar piadas. 
Você gosta de cyberpunk? Lara, Aline e João gostam muito.

https://www.youtube.com/watch?v=kp54_1fgsFU

Brincadeira. Isso é coisa séria:

.. code-block::

    ab -n 100000 -c 100 http://aplus-app.frameworks.local/

Vá fazer um café e volte correndo.

Load Balancing
##############

Ok. Ok. Now we have the secrets of the universe... Só que não.

Conclusion
----------

Nunca devemos tirar conclusões precipitadas.
