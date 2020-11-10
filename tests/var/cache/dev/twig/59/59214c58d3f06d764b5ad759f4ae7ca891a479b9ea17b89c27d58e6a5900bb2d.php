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

/* vendor/doctrine/instantiator/CONTRIBUTING.md */
class __TwigTemplate_d4a92ff5d262ac6174c9464e9090ca9ac9f2b615faff40b06157801bddfb4d4d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/CONTRIBUTING.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/CONTRIBUTING.md"));

        // line 1
        echo "# Contributing

 * Follow the [Doctrine Coding Standard](https://github.com/doctrine/coding-standard)
 * The project will follow strict [object calisthenics](http://www.slideshare.net/guilhermeblanco/object-calisthenics-applied-to-php)
 * Any contribution must provide tests for additional introduced conditions
 * Any un-confirmed issue needs a failing test case before being accepted
 * Pull requests must be sent from a new hotfix/feature branch, not from `master`.

## Installation

To install the project and run the tests, you need to clone it first:

```sh
\$ git clone git://github.com/doctrine/instantiator.git
```

You will then need to run a composer installation:

```sh
\$ cd Instantiator
\$ curl -s https://getcomposer.org/installer | php
\$ php composer.phar update
```

## Testing

The PHPUnit version to be used is the one installed as a dev- dependency via composer:

```sh
\$ ./vendor/bin/phpunit
```

Accepted coverage for new contributions is 80%. Any contribution not satisfying this requirement 
won't be merged.

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/instantiator/CONTRIBUTING.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Contributing

 * Follow the [Doctrine Coding Standard](https://github.com/doctrine/coding-standard)
 * The project will follow strict [object calisthenics](http://www.slideshare.net/guilhermeblanco/object-calisthenics-applied-to-php)
 * Any contribution must provide tests for additional introduced conditions
 * Any un-confirmed issue needs a failing test case before being accepted
 * Pull requests must be sent from a new hotfix/feature branch, not from `master`.

## Installation

To install the project and run the tests, you need to clone it first:

```sh
\$ git clone git://github.com/doctrine/instantiator.git
```

You will then need to run a composer installation:

```sh
\$ cd Instantiator
\$ curl -s https://getcomposer.org/installer | php
\$ php composer.phar update
```

## Testing

The PHPUnit version to be used is the one installed as a dev- dependency via composer:

```sh
\$ ./vendor/bin/phpunit
```

Accepted coverage for new contributions is 80%. Any contribution not satisfying this requirement 
won't be merged.

", "vendor/doctrine/instantiator/CONTRIBUTING.md", "/var/www/public/DevLaon/templates/vendor/doctrine/instantiator/CONTRIBUTING.md");
    }
}
