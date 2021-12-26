<a href="https://gitlab.com/aplus-framework/projects/app"><img src="https://gitlab.com/aplus-framework/projects/app/-/raw/master/guide/image.png" alt="Aplus Framework App Project" align="right" width="100"></a>

# Aplus Framework App Project

- [Home](https://aplus-framework.com/packages/app)
- [User Guide](https://docs.aplus-framework.com/guides/projects/app/index.html)
- [API Documentation](https://docs.aplus-framework.com/packages/app.html)

[![tests](https://github.com/aplus-framework/app/actions/workflows/tests.yml/badge.svg)](https://github.com/aplus-framework/app/actions/workflows/tests.yml)
[![pipeline](https://gitlab.com/aplus-framework/projects/app/badges/master/pipeline.svg)](https://gitlab.com/aplus-framework/projects/app/-/pipelines?scope=branches)
[![coverage](https://gitlab.com/aplus-framework/projects/app/badges/master/coverage.svg?job=test:php)](https://aplus-framework.gitlab.io/projects/app/coverage/)
[![packagist](https://img.shields.io/packagist/v/aplus/app)](https://packagist.org/packages/aplus/app)
[![open-source](https://img.shields.io/badge/open--source-sponsor-magenta)](https://aplus-framework.com/sponsor)

## Getting Started

Make sure you have [Composer](https://getcomposer.org/doc/00-intro.md) installed.

Follow the installation instructions in the [User Guide](https://docs.aplus-framework.com/guides/projects/app/index.html).

```
composer create-project aplus/app:dev-master aplus 
```

Enter the project directory.

## Licensing

Add a `LICENSE` file.

If you think about open-source your project,
[choose a license](https://choosealicense.com/licenses/).

If your project is proprietary, you can add your custom license or
[not](https://choosealicense.com/no-permission/).

Edit the `.php-cs-fixer.dist.php` file.
Set the project name and copyright information.

To update the comment header in all PHP files, run:

```
vendor/bin/php-cs-fixer fix -vvv
```

## Code Quality

Aplus Framework uses Code Quality Tools in all its projects.

By default, App Project also uses the following tools as dev-dependencies:

- [PHP-CS-Fixer](https://cs.symfony.com)
- [phpDocumentor](https://phpdoc.org)
- [PHPMD](https://phpmd.org)
- [PHPStan](https://phpstan.org)
- [PHPUnit](https://phpunit.de)

### Static Analysis

You can find bugs in your code without writing tests by running:

```
vendor/bin/phpstan analyse
```

See the `phpstan.neon.dist` file for more details.

### Mess Detector

You can look for several potential problems in the source code by running:

```
vendor/bin/phpmd app xml phpmd.xml
```

Customize your rules in the `phpmd.xml` file.

### Coding Standard

We extend PHP-CS-Fixer to create the
[Coding Standard Library](https://gitlab.com/aplus-framework/libraries/coding-standard).

It is [PSR-12](https://www.php-fig.org/psr/psr-12/) compatible.

You can see what to fix in the source code by running:

```
vendor/bin/php-cs-fixer fix --diff --dry-run --verbose
```

### Testing

We extend PHPUnit to create the
[Testing Library](https://gitlab.com/aplus-framework/libraries/testing).

You can unit test your code by running:

```
vendor/bin/phpunit
```

See the `phpunit.xml.dist` file for more details.

### Documenting

Good software usually has good documentation.

You can build beautiful HTML pages about your project's documentation.

You must have phpDocumentor installed on your computer or run `phpdoc`
[inside a container](#containers).

## Development Environment

The App Project is delivered with a dev-dependency to easily configure the
built-in PHP development server.

Just run

```
vendor/bin/php-server
```

and your project will be available at http://localhost:8080.

See the `php-server.ini` file for more details.

### Containers

Aplus has Docker [images](https://gitlab.com/aplus-framework/images) for testing
and building software.

You can run it in CI or local environments.

With [Docker](https://www.docker.com/get-started) installed on your computer,
you can run:

```
docker-compose run --service-ports lempa
```

This will log you as the **developer** user into a Docker container where you can
run all your tests.

By default, the web app will be available at http://localhost, on ports 80 and 443.

See the `docker-compose.yml` file for more details.

## Continuous Integration

App Project is cross-platform and can be used in public and private projects.

You can use it on [GitLab](https://about.gitlab.com/stages-devops-lifecycle/continuous-integration/),
on [GitHub](https://docs.github.com/en/actions/automating-builds-and-tests/about-continuous-integration),
on your computer, anywhere you want.

The App Project is already pre-configured to run in a GitLab CI environment.

See the `.gitlab-ci.yml` file for more details.

Just upload your project to GitLab and it will run
[pipelines](https://docs.gitlab.com/ee/ci/pipelines/#view-pipelines).

On GitHub, it will run [workflows](https://docs.github.com/en/actions) to test
your code every Push or Pull Request.

Check the `.github` folder to see more.

## And now?

Go build an API or a website, an awesome app! ⚡

See you.

---

If you have a little time...

Visit the Aplus Framework website: [aplus-framework.com](https://aplus-framework.com)

Follow Aplus on:

- [GitLab](https://gitlab.com/aplus-framework)
- [GitHub](https://github.com/aplus-framework)
- [Twitter](https://twitter.com/AplusFramework)
- [Gab](https://gab.com/AplusFramework)
- [Facebook](https://www.facebook.com/AplusFramework)
- [YouTube](https://www.youtube.com/channel/UCPeXnwhvq7wUnBauiSMZ-wg)

Stay tuned for our updates.

Share your experiences about meet us!

**Remember**:

> Coding is Art.
>
> Coding is Engineering.
>
> Good developer loves to code.
>
> **Code with Love!**

---

The Aplus Framework Team
