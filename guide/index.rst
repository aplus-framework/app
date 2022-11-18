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
- `Deployment`_
- `Conclusion`_

Installation
------------

The installation of this project can be done with Composer:

.. code-block::

    composer create-project aplus/app

Or, to install the latest `LTS <https://aplus-framework.com/lts>`_ version:

.. code-block::

    composer create-project aplus/app:^22

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

Deployment
----------

We will see how to deploy to a `Shared Hosting`_ and a `Private Server`_:

In the following examples, configurations will be made for the domain ``domain.tld``.
Replace it with the domain of your application.

Shared Hosting
##############

In shared hosting, it is common that you can upload the project files only by FTP.

Also, typically the document root is a publicly accessible directory called
``www``, ``web`` or ``public_html``.

And the server is Apache, which allows configurations through files called
``.htaccess``.

In the following example the settings can be made locally and then sent to the
hosting server.

URL Origin
""""""""""

Make sure that the URL Origin has the correct domain in the ``boot/routes.php``
file:

.. code-block:: php

    App::router()->serve('http://domain.tld', ...);

Install Dependencies
""""""""""""""""""""

Install dependencies with Composer:

.. code-block::

    composer install --no-dev

.htaccess files
"""""""""""""""

In the document root and in the ``public`` directory of the application has
``.htaccess`` files that can be configured as needed.

For example, redirecting insecure requests to **HTTPS** or redirecting to the
**www** subdomain.

Finishing
"""""""""

Upload the files to the public directory of your hosting.

Access the domain through the browser: http://domain.tld

It should open the home page of your project.

Private Server
##############

We will be using Ubuntu 22.04 LTS which is supported until 2027 and already
comes with PHP 8.1.

Replace ``domain.tld`` with your domain.

Installing PHP and required packages:

.. code-block::

    sudo apt-get -y install \
    composer \
    curl \
    git \
    php8.1-apcu \
    php8.1-cli \
    php8.1-curl \
    php8.1-fpm \
    php8.1-gd \
    php8.1-igbinary \
    php8.1-imap \
    php8.1-intl \
    php8.1-mbstring \
    php8.1-memcached \
    php8.1-msgpack \
    php8.1-mysql \
    php8.1-opcache \
    php8.1-readline \
    php8.1-redis \
    php8.1-xdebug \
    php8.1-xml \
    php8.1-yaml \
    php8.1-zip \
    unzip

Make the application directory:

.. code-block::

    sudo mkdir -p /var/www/domain.tld

Set directory ownership. Replace "username" with your username:

.. code-block::

    sudo chown username:username /var/www/domain.tld

Enter the application directory...

.. code-block::

    cd /var/www/domain.tld

... and clone or download your project.

As an example, we'll install a new app:

.. code-block::

    git clone https://github.com/aplus-framework/app.git .

Set storage directory permissions:

.. code-block::

    chmod -R 777 storage/*

Edit the URL Origin of your project in the routes file, ``boot/routes.php``:

.. code-block:: php

    App::router()->serve('http://domain.tld', ...);

Install the necessary PHP packages through Composer:

.. code-block::

    composer install --no-dev

Web Servers
"""""""""""

In these examples, we will see how to install and configure two web servers:

- `Apache`_
- `Nginx (recommended)`_

Apache
^^^^^^

Install required packages:

.. code-block::

    sudo apt install apache2 libapache2-mod-php

Enable modules:

.. code-block::

    sudo a2enmod rewrite

Create the file ``/etc/apache2/sites-available/domain.tld.conf``:

.. code-block:: apacheconf

    <Directory /var/www/domain.tld/public>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    <VirtualHost *:80>
        ServerName domain.tld
        SetEnv ENVIRONMENT production
        DocumentRoot /var/www/domain.tld/public
    </VirtualHost>

Enable the site:

.. code-block::

    sudo a2ensite domain.tld

Reload the server:

.. code-block::

    sudo systemctl reload apache2

Access the domain through the browser: http://domain.tld

It should open the home page of your project.

Nginx (recommended)
^^^^^^^^^^^^^^^^^^^

Edit the ``php.ini`` file:

.. code-block::

    sudo sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g' /etc/php/8.1/fpm/php.ini

Restart PHP-FPM:

.. code-block::

    sudo systemctl restart php8.1-fpm

Install required packages:

.. code-block::

    sudo apt install nginx

Create the file ``/etc/nginx/sites-available/domain.tld.conf``:

.. code-block:: nginx

    server {
        listen 80;

        root /var/www/domain.tld/public;

        index index.php;

        server_name domain.tld;

        location / {
            try_files $uri $uri/ /index.php?$args;
        }

        location ~ \.php$ {
            include snippets/fastcgi-php.conf;
            fastcgi_param ENVIRONMENT production;
            fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        }

        location ~ /\. {
            deny all;
        }
    }

Enable the site:

.. code-block::

    sudo ln -s /etc/nginx/sites-available/domain.tld.conf /etc/nginx/sites-enabled/

Test Nginx configurations:

.. code-block::

    sudo nginx -t

Restart Nginx:

.. code-block::

    sudo systemctl restart nginx

Access the domain through the browser: http://domain.tld

It should open the home page of your project.

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
