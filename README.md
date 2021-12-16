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

### Licensing

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

### Code Quality

Aplus Framework uses Code Quality Tools in all its projects.

By default, App Project also uses the following tools as dev-dependencies:

- [PHP-CS-Fixer](https://cs.symfony.com)
- [phpDocumentor](https://phpdoc.org)
- [PHPMD](https://phpmd.org)
- [PHPStan](https://phpstan.org)
- [PHPUnit](https://phpunit.de)

#### Static Analysis

You can find bugs in your code without writing tests by running:

```
vendor/bin/phpstan analyse
```

See the `phpstan.neon.dist` file for more details.

#### Mess Detector

You can look for several potential problems in the source code by running:

```
vendor/bin/phpmd app xml phpmd.xml
```

Customize your rules in the `phpmd.xml` file.

#### Coding Standard

We extend PHP-CS-Fixer to create the
[Coding Standard Library](https://gitlab.com/aplus-framework/libraries/coding-standard).

It is [PSR-12](https://www.php-fig.org/psr/psr-12/) compatible.

You can see what to fix in the source code by running:

```
vendor/bin/php-cs-fixer fix --diff --dry-run --verbose
```

#### Testing

We extend PHPUnit to create the
[Testing Library](https://gitlab.com/aplus-framework/libraries/testing).

You can unit test your code by running:

```
vendor/bin/phpunit
```

See the `phpunit.xml.dist` file for more details.

#### Documenting

Good software usually has good documentation.

You can build beautiful HTML pages about your project's documentation.

You must have phpDocumentor installed on your computer or run `phpdoc`
[inside a container](#containers).

### Development Environment

The App Project is delivered with a dev-dependency to easily configure the
built-in PHP development server.

Just run

```
vendor/bin/php-server
```

and your project will be available at http://localhost:8080.

See the `php-server.ini` file for more details.

#### Containers

Aplus has Docker [images](https://gitlab.com/aplus-framework/images) for testing
and building software.

You can run it in CI or local environments.

With [Docker](https://www.docker.com/get-started) installed on your computer,
you can run:

```
docker-compose run package
```

This will log you as the *developer* user into a Docker container where you can
run all your tests.

See the `docker-compose.yml` file for more details.

### Continuous Integration

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

### And now?

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

<details> 
<summary>Ok! Ok, John! But I'm not an artist. I'm not an engineer.</summary>
<blockquote>
Fique calmo, amigo. Eu também não sou. Quando eu era criança, minha mãe sempre 
dizia que eu fazia arte. Eu brincava na terra e construia cidades inteiras. Meus
carrinhos eram de madeira. Meu tio, que era semi-analfabeto, brincava comigo e 
trabalhava com eletrônica. Junto com meu avô e seus irmãos, eles construiram um
caminhão com materiais de sucata e cavaram um açude enorme com pás, fizeram as
bordas com pedras e aquilo tudo era magnifico (haviam gansos sinaleira! tinha
ovos, filhotes, grama verde, trilhos, galpões). Meu avô faleceu quando eu tinha
dez anos. Eu nunca deixei de ser criança. Não se preocupe muito, meu amigo.
Seja o que você quiser, ninguém te conhece melhor do que você mesmo.
Eu sou você!
<br><br>
Construa seu app. Vá nas documentações. Vá nos códigos-fonte. Existem muitas
pessoas que amam você. E muitas querem um app. ❤️ ⚡⚡
<br><br>
<sub>
Desculpe. Meu inglês não é muito bom. No ensino médio tinhamos 50 minutos
semanais, mas na maioria do tempo a minha professora só falava de festas, das
pessoas que ela conhecia e dos lugares incríveis que ela havia conhecido por ela
saber falar em inglês. Ela falava sobre a lingua inglesa o tempo todo, mas não
ensinou praticamente nada sobre inglês. E eu aprendi com ela que o inglês é
importante.
</sub>
</blockquote>
</details>

Are you good with English or other languages and would like to collaborate by
improving the User Guides and PHPDocs or by adding translations in languages you
master in Aplus Framework?

Please feel free collaborating with Issues and Merge Requests, sending good
energies and sponsoring us.

We will love your help! Thank you very much. ☕

---

The Aplus Framework Team
