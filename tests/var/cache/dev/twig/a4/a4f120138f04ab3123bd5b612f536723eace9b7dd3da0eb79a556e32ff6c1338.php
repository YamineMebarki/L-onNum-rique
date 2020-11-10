<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/ocramius/package-versions/README.md */
class __TwigTemplate_bb0906e81f314afbfd96c2a5effd20e75011e781f5b0c1a29ebf7f9392484aa5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/package-versions/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/package-versions/README.md"));

        // line 1
        echo "# Package Versions

This utility provides quick and easy access to version information of composer dependencies.

This information is derived from the ```composer.lock``` file which is (re)generated during ```composer install``` or ```composer update```.

```php
\$version = \\PackageVersions\\Versions::getVersion('ocramius/package-versions');

var_dump(\$version); // 1.0.0@0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33
```

[![Build Status](https://travis-ci.org/Ocramius/PackageVersions.svg?branch=master)](https://travis-ci.org/Ocramius/PackageVersions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/?branch=master)
[![Downloads](https://images.shields.io/packagist/dt/ocramius/package-versions.svg)](https://packagist.org/packages/ocramius/package-versions)
[![Packagist](https://images.shields.io/packagist/v/ocramius/package-versions.svg)](https://packagist.org/packages/ocramius/package-versions)
[![Dependencies](https://tidelift.com/badges/github/packagist/ocramius%2Fpackage-versions)](https://tidelift.com/subscription/pkg/packagist-ocramius%2Fpackage-versions?utm_source=packagist-ocramius%2Fpackage-versions&utm_medium=readme)

### Installation

```sh
composer require ocramius/package-versions
```

It is suggested that you use a optimized composer autoloader in order to prevent
autoload I/O when accessing the `PackageVersions\\Versions` API:

Therefore you should use `optimize-autoloader: true` in your composer.json:
```
...
    \"config\": {
        \"optimize-autoloader\": true
    },
...
```
see https://getcomposer.org/doc/06-config.md#optimize-autoloader

In case you manually generate your autoloader via the CLI use the `--optimize` flag:

```sh
composer dump-autoload --optimize
```

### Use-cases

This repository implements `PackageVersions\\Versions::getVersion()` in such a way that no IO
happens when calling it, because the list of package versions is compiled during composer
installation.

This is especially useful when you want to generate assets/code/artifacts that are computed from
the current version of a certain dependency. Doing so at runtime by checking the installed
version of a package would be too expensive, and this package mitigates that.

## Professional Support

[Professionally supported `ocramius/package-versions` is available through Tidelift](https://tidelift.com/subscription/pkg/packagist-ocramius-package-versions?utm_source=packagist-ocramius-package-versions&utm_medium=referral&utm_campaign=readme).

You can also contact the maintainer at ocramius@gmail.com for looking into issues related to this package
in your private projects.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/package-versions/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Package Versions

This utility provides quick and easy access to version information of composer dependencies.

This information is derived from the ```composer.lock``` file which is (re)generated during ```composer install``` or ```composer update```.

```php
\$version = \\PackageVersions\\Versions::getVersion('ocramius/package-versions');

var_dump(\$version); // 1.0.0@0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33
```

[![Build Status](https://travis-ci.org/Ocramius/PackageVersions.svg?branch=master)](https://travis-ci.org/Ocramius/PackageVersions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/?branch=master)
[![Downloads](https://images.shields.io/packagist/dt/ocramius/package-versions.svg)](https://packagist.org/packages/ocramius/package-versions)
[![Packagist](https://images.shields.io/packagist/v/ocramius/package-versions.svg)](https://packagist.org/packages/ocramius/package-versions)
[![Dependencies](https://tidelift.com/badges/github/packagist/ocramius%2Fpackage-versions)](https://tidelift.com/subscription/pkg/packagist-ocramius%2Fpackage-versions?utm_source=packagist-ocramius%2Fpackage-versions&utm_medium=readme)

### Installation

```sh
composer require ocramius/package-versions
```

It is suggested that you use a optimized composer autoloader in order to prevent
autoload I/O when accessing the `PackageVersions\\Versions` API:

Therefore you should use `optimize-autoloader: true` in your composer.json:
```
...
    \"config\": {
        \"optimize-autoloader\": true
    },
...
```
see https://getcomposer.org/doc/06-config.md#optimize-autoloader

In case you manually generate your autoloader via the CLI use the `--optimize` flag:

```sh
composer dump-autoload --optimize
```

### Use-cases

This repository implements `PackageVersions\\Versions::getVersion()` in such a way that no IO
happens when calling it, because the list of package versions is compiled during composer
installation.

This is especially useful when you want to generate assets/code/artifacts that are computed from
the current version of a certain dependency. Doing so at runtime by checking the installed
version of a package would be too expensive, and this package mitigates that.

## Professional Support

[Professionally supported `ocramius/package-versions` is available through Tidelift](https://tidelift.com/subscription/pkg/packagist-ocramius-package-versions?utm_source=packagist-ocramius-package-versions&utm_medium=referral&utm_campaign=readme).

You can also contact the maintainer at ocramius@gmail.com for looking into issues related to this package
in your private projects.
", "vendor/ocramius/package-versions/README.md", "/var/www/public/DevLaon/templates/vendor/ocramius/package-versions/README.md");
    }
}
