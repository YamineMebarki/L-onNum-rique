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

/* vendor/doctrine/doctrine-cache-bundle/README.md */
class __TwigTemplate_a57f65f69e45429d77aaee0dc4e9205fd4d0da4c060e0d10ed5d75d824d0a27b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/README.md"));

        // line 1
        echo "DoctrineCacheBundle
===================

Symfony Bundle for Doctrine Cache.

Master: [![Build Status](https://secure.travis-ci.org/doctrine/DoctrineCacheBundle.svg?branch=master)](https://travis-ci.org/doctrine/DoctrineCacheBundle)

Master: [![Coverage Status](https://coveralls.io/repos/doctrine/DoctrineCacheBundle/badge.png?branch=master)](https://coveralls.io/r/doctrine/DoctrineCacheBundle?branch=master)

## Installation

1. Add this bundle to your project as a composer dependency:

  ```bash
  composer require doctrine/doctrine-cache-bundle
  ```

2. Add this bundle in your application kernel:

    ```php
    // app/AppKernel.php
    public function registerBundles()
    {
        // ...
        \$bundles[] = new \\Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle();

        return \$bundles;
    }
    ```

Read the [documentation](https://symfony.com/doc/current/bundles/DoctrineCacheBundle/site.html) to learn how to configure and
use your own cache providers.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("DoctrineCacheBundle
===================

Symfony Bundle for Doctrine Cache.

Master: [![Build Status](https://secure.travis-ci.org/doctrine/DoctrineCacheBundle.svg?branch=master)](https://travis-ci.org/doctrine/DoctrineCacheBundle)

Master: [![Coverage Status](https://coveralls.io/repos/doctrine/DoctrineCacheBundle/badge.png?branch=master)](https://coveralls.io/r/doctrine/DoctrineCacheBundle?branch=master)

## Installation

1. Add this bundle to your project as a composer dependency:

  ```bash
  composer require doctrine/doctrine-cache-bundle
  ```

2. Add this bundle in your application kernel:

    ```php
    // app/AppKernel.php
    public function registerBundles()
    {
        // ...
        \$bundles[] = new \\Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle();

        return \$bundles;
    }
    ```

Read the [documentation](https://symfony.com/doc/current/bundles/DoctrineCacheBundle/site.html) to learn how to configure and
use your own cache providers.
", "vendor/doctrine/doctrine-cache-bundle/README.md", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/README.md");
    }
}
