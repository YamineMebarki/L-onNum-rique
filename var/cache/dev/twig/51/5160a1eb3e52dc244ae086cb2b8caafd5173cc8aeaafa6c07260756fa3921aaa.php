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

/* vendor/doctrine/doctrine-bundle/README.md */
class __TwigTemplate_5182578abb1db9a99bbae7e68c15bc2c52e4dad7791db43832b554abc9a137e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/README.md"));

        // line 1
        echo "# Doctrine Bundle

Doctrine DBAL & ORM Bundle for the Symfony Framework.

Build Status: [![Build Status](https://travis-ci.org/doctrine/DoctrineBundle.svg?branch=master)](https://travis-ci.org/doctrine/DoctrineBundle)

## What is Doctrine?

The Doctrine Project is the home of a selected set of PHP libraries primarily focused on providing persistence
services and related functionality. Its prize projects are a Object Relational Mapper and the Database Abstraction
Layer it is built on top of. You can read more about the projects below or view a list of all projects.

Object relational mapper (ORM) for PHP that sits on top of a powerful database abstraction layer (DBAL).
One of its key features is the option to write database queries in a proprietary object oriented SQL dialect
called Doctrine Query Language (DQL), inspired by Hibernates HQL. This provides developers with a powerful
alternative to SQL that maintains flexibility without requiring unnecessary code duplication.

DBAL is a powerful database abstraction layer with many features for database schema introspection,
schema management and PDO abstraction.

## Documentation

The documentation is rendered on [the symfony.com website](http://symfony.com/doc/master/bundles/DoctrineBundle/site.html).
The source of the documentation is available in the Resources/docs folder.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Bundle

Doctrine DBAL & ORM Bundle for the Symfony Framework.

Build Status: [![Build Status](https://travis-ci.org/doctrine/DoctrineBundle.svg?branch=master)](https://travis-ci.org/doctrine/DoctrineBundle)

## What is Doctrine?

The Doctrine Project is the home of a selected set of PHP libraries primarily focused on providing persistence
services and related functionality. Its prize projects are a Object Relational Mapper and the Database Abstraction
Layer it is built on top of. You can read more about the projects below or view a list of all projects.

Object relational mapper (ORM) for PHP that sits on top of a powerful database abstraction layer (DBAL).
One of its key features is the option to write database queries in a proprietary object oriented SQL dialect
called Doctrine Query Language (DQL), inspired by Hibernates HQL. This provides developers with a powerful
alternative to SQL that maintains flexibility without requiring unnecessary code duplication.

DBAL is a powerful database abstraction layer with many features for database schema introspection,
schema management and PDO abstraction.

## Documentation

The documentation is rendered on [the symfony.com website](http://symfony.com/doc/master/bundles/DoctrineBundle/site.html).
The source of the documentation is available in the Resources/docs folder.
", "vendor/doctrine/doctrine-bundle/README.md", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/README.md");
    }
}
