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

/* vendor/monolog/monolog/README.md */
class __TwigTemplate_867bb7555ea81094780aa98f8f7ccea5beae7eecbf2dd905d83965beba1bfaee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/README.md"));

        // line 1
        echo "# Monolog - Logging for PHP [![Build Status](https://images.shields.io/travis/Seldaek/monolog.svg)](https://travis-ci.org/Seldaek/monolog)

[![Total Downloads](https://images.shields.io/packagist/dt/monolog/monolog.svg)](https://packagist.org/packages/monolog/monolog)
[![Latest Stable Version](https://images.shields.io/packagist/v/monolog/monolog.svg)](https://packagist.org/packages/monolog/monolog)


Monolog sends your log to files, sockets, inboxes, databases and various
web services. See the complete list of handlers below. Special handlers
allow you to build advanced logging strategies.

This library implements the [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
interface that you can type-hint against in your own libraries to keep
a maximum of interoperability. You can also use it in your applications to
make sure you can always use another compatible logger at a later time.
As of 1.11.0 Monolog public APIs will also accept PSR-3 log levels.
Internally Monolog still uses its own level scheme since it predates PSR-3.

## Installation

Install the latest version with

```bash
\$ composer require monolog/monolog
```

## Basic Usage

```php
<?php

use Monolog\\Logger;
use Monolog\\Handler\\StreamHandler;

// create a log channel
\$log = new Logger('name');
\$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
\$log->addWarning('Foo');
\$log->addError('Bar');
```

## Documentation

- [Usage Instructions](doc/01-usage.md)
- [Handlers, Formatters and Processors](doc/02-handlers-formatters-processors.md)
- [Utility classes](doc/03-utilities.md)
- [Extending Monolog](doc/04-extending.md)

## Third Party Packages

Third party handlers, formatters and processors are
[listed in the wiki](https://github.com/Seldaek/monolog/wiki/Third-Party-Packages). You
can also add your own there if you publish one.

## About

### Requirements

- Monolog works with PHP 5.3 or above, and is also tested to work with HHVM.

### Submitting bugs and feature requests

Bugs and feature request are tracked on [GitHub](https://github.com/Seldaek/monolog/issues)

### Framework Integrations

- Frameworks and libraries using [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
  can be used very easily with Monolog since it implements the interface.
- [Symfony2](http://symfony.com) comes out of the box with Monolog.
- [Silex](http://silex.sensiolabs.org/) comes out of the box with Monolog.
- [Laravel 4 & 5](http://laravel.com/) come out of the box with Monolog.
- [Lumen](http://lumen.laravel.com/) comes out of the box with Monolog.
- [PPI](http://www.ppi.io/) comes out of the box with Monolog.
- [CakePHP](http://cakephp.org/) is usable with Monolog via the [cakephp-monolog](https://github.com/jadb/cakephp-monolog) plugin.
- [Slim](http://www.slimframework.com/) is usable with Monolog via the [Slim-Monolog](https://github.com/Flynsarmy/Slim-Monolog) log writer.
- [XOOPS 2.6](http://xoops.org/) comes out of the box with Monolog.
- [Aura.Web_Project](https://github.com/auraphp/Aura.Web_Project) comes out of the box with Monolog.
- [Nette Framework](http://nette.org/en/) can be used with Monolog via [Kdyby/Monolog](https://github.com/Kdyby/Monolog) extension.
- [Proton Micro Framework](https://github.com/alexbilbie/Proton) comes out of the box with Monolog.

### Author

Jordi Boggiano - <j.boggiano@seld.be> - <http://twitter.com/seldaek><br />
See also the list of [contributors](https://github.com/Seldaek/monolog/contributors) which participated in this project.

### License

Monolog is licensed under the MIT License - see the `LICENSE` file for details

### Acknowledgements

This library is heavily inspired by Python's [Logbook](https://logbook.readthedocs.io/en/stable/)
library, although most concepts have been adjusted to fit to the PHP world.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Monolog - Logging for PHP [![Build Status](https://images.shields.io/travis/Seldaek/monolog.svg)](https://travis-ci.org/Seldaek/monolog)

[![Total Downloads](https://images.shields.io/packagist/dt/monolog/monolog.svg)](https://packagist.org/packages/monolog/monolog)
[![Latest Stable Version](https://images.shields.io/packagist/v/monolog/monolog.svg)](https://packagist.org/packages/monolog/monolog)


Monolog sends your log to files, sockets, inboxes, databases and various
web services. See the complete list of handlers below. Special handlers
allow you to build advanced logging strategies.

This library implements the [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
interface that you can type-hint against in your own libraries to keep
a maximum of interoperability. You can also use it in your applications to
make sure you can always use another compatible logger at a later time.
As of 1.11.0 Monolog public APIs will also accept PSR-3 log levels.
Internally Monolog still uses its own level scheme since it predates PSR-3.

## Installation

Install the latest version with

```bash
\$ composer require monolog/monolog
```

## Basic Usage

```php
<?php

use Monolog\\Logger;
use Monolog\\Handler\\StreamHandler;

// create a log channel
\$log = new Logger('name');
\$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
\$log->addWarning('Foo');
\$log->addError('Bar');
```

## Documentation

- [Usage Instructions](doc/01-usage.md)
- [Handlers, Formatters and Processors](doc/02-handlers-formatters-processors.md)
- [Utility classes](doc/03-utilities.md)
- [Extending Monolog](doc/04-extending.md)

## Third Party Packages

Third party handlers, formatters and processors are
[listed in the wiki](https://github.com/Seldaek/monolog/wiki/Third-Party-Packages). You
can also add your own there if you publish one.

## About

### Requirements

- Monolog works with PHP 5.3 or above, and is also tested to work with HHVM.

### Submitting bugs and feature requests

Bugs and feature request are tracked on [GitHub](https://github.com/Seldaek/monolog/issues)

### Framework Integrations

- Frameworks and libraries using [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
  can be used very easily with Monolog since it implements the interface.
- [Symfony2](http://symfony.com) comes out of the box with Monolog.
- [Silex](http://silex.sensiolabs.org/) comes out of the box with Monolog.
- [Laravel 4 & 5](http://laravel.com/) come out of the box with Monolog.
- [Lumen](http://lumen.laravel.com/) comes out of the box with Monolog.
- [PPI](http://www.ppi.io/) comes out of the box with Monolog.
- [CakePHP](http://cakephp.org/) is usable with Monolog via the [cakephp-monolog](https://github.com/jadb/cakephp-monolog) plugin.
- [Slim](http://www.slimframework.com/) is usable with Monolog via the [Slim-Monolog](https://github.com/Flynsarmy/Slim-Monolog) log writer.
- [XOOPS 2.6](http://xoops.org/) comes out of the box with Monolog.
- [Aura.Web_Project](https://github.com/auraphp/Aura.Web_Project) comes out of the box with Monolog.
- [Nette Framework](http://nette.org/en/) can be used with Monolog via [Kdyby/Monolog](https://github.com/Kdyby/Monolog) extension.
- [Proton Micro Framework](https://github.com/alexbilbie/Proton) comes out of the box with Monolog.

### Author

Jordi Boggiano - <j.boggiano@seld.be> - <http://twitter.com/seldaek><br />
See also the list of [contributors](https://github.com/Seldaek/monolog/contributors) which participated in this project.

### License

Monolog is licensed under the MIT License - see the `LICENSE` file for details

### Acknowledgements

This library is heavily inspired by Python's [Logbook](https://logbook.readthedocs.io/en/stable/)
library, although most concepts have been adjusted to fit to the PHP world.
", "vendor/monolog/monolog/README.md", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/README.md");
    }
}
