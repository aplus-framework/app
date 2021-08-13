App
===

Aplus Framework App Project.

- `Installation`_
- `Configuration`_
- `Extra files`_
- `Storage`_
- `The global class App`_
- `The App namespace`_
- `Running an aplus app`_
- `Testing`_
- `Conclusion`_

Installation
------------

The installation of this project can be done with Composer:

.. code-block::

    composer create-project aplus/app:dev-master aplus

Configuration
-------------

Aplus App is organized in such a way that its configuration files are all in the
same directory.

By default, the directory is called *config*. Located in the application's root
directory.

Configuration files serve to pre-establish values used by services
or routines needed for `helpers`_ and `libraries`_ to work together.
Assembling thus, a project with a framework.

All configuration files must return an *array* containing the information needed
to initialize or customize services.

The default content looks like this:

.. code-block:: php

    return [
        'default' => [],
    ];

Where the ``default`` key should receive the main service instance settings.

It is possible to define configs for multiple instances of the same service.
For example:

.. code-block:: php

    return [
        'default' => [
            'foo' => 1,
        ],
        'custom' => [
            'foo' => 2,
        ],
    ];

When getting a service, just pass which configuration instance you want to use:

.. code-block:: php

    $defaultInstance = App::serviceName(); // uses 1 as foo value
    $customInstance = App::serviceName('custom'); // uses 2 as foo value

For more details see the `Config <guides/libraries/config/>`_ and
`MVC <guides/libraries/mvc/>`_ libraries documentation.

Here: `See the explanation of all configs for a new App project <guides/projects/app/config/>`_.

Extra files
-----------

Storage
-------

The global class App
--------------------

The App namespace
-----------------

Running an aplus app
--------------------

Testing
-------

Conclusion
----------
