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

/* vendor/doctrine/orm/docs/en/toc.rst */
class __TwigTemplate_5fd592261c9bcf74fd1e21e90d28081609fd7c328545e11247b5998f8b2de17a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/toc.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/toc.rst"));

        // line 1
        echo "Welcome to Doctrine 2 ORM's documentation!
==========================================

Tutorials
---------

.. toctree::
   :maxdepth: 1

   tutorials/getting-started
   tutorials/getting-started-database
   tutorials/getting-started-models
   tutorials/working-with-indexed-associations
   tutorials/extra-lazy-associations
   tutorials/composite-primary-keys
   tutorials/ordered-associations
   tutorials/override-field-association-mappings-in-subclasses
   tutorials/pagination.rst
   tutorials/embeddables.rst

Reference Guide
---------------

.. toctree::
   :maxdepth: 1
   :numbered:

   reference/architecture
   reference/configuration.rst
   reference/faq
   reference/basic-mapping
   reference/association-mapping
   reference/inheritance-mapping
   reference/working-with-objects
   reference/working-with-associations
   reference/events
   reference/unitofwork
   reference/unitofwork-associations
   reference/transactions-and-concurrency
   reference/batch-processing
   reference/dql-doctrine-query-language
   reference/query-builder
   reference/native-sql
   reference/change-tracking-policies
   reference/partial-objects
   reference/xml-mapping
   reference/yaml-mapping
   reference/annotations-reference
   reference/php-mapping
   reference/caching
   reference/improving-performance
   reference/tools
   reference/metadata-drivers
   reference/best-practices
   reference/limitations-and-known-issues
   tutorials/pagination
   reference/filters
   reference/namingstrategy
   reference/advanced-configuration
   reference/second-level-cache
   reference/security
   

Cookbook
--------

.. toctree::
   :maxdepth: 1

   cookbook/aggregate-fields
   cookbook/custom-mapping-types
   cookbook/decorator-pattern
   cookbook/dql-custom-walkers
   cookbook/dql-user-defined-functions
   cookbook/implementing-arrayaccess-for-domain-objects
   cookbook/implementing-the-notify-changetracking-policy
   cookbook/implementing-wakeup-or-clone
   cookbook/resolve-target-entity-listener
   cookbook/sql-table-prefixes
   cookbook/strategy-cookbook-introduction
   cookbook/validation-of-entities
   cookbook/working-with-datetime
   cookbook/mysql-enums
   cookbook/advanced-field-value-conversion-using-custom-mapping-types
   cookbook/entities-in-session

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/toc.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Welcome to Doctrine 2 ORM's documentation!
==========================================

Tutorials
---------

.. toctree::
   :maxdepth: 1

   tutorials/getting-started
   tutorials/getting-started-database
   tutorials/getting-started-models
   tutorials/working-with-indexed-associations
   tutorials/extra-lazy-associations
   tutorials/composite-primary-keys
   tutorials/ordered-associations
   tutorials/override-field-association-mappings-in-subclasses
   tutorials/pagination.rst
   tutorials/embeddables.rst

Reference Guide
---------------

.. toctree::
   :maxdepth: 1
   :numbered:

   reference/architecture
   reference/configuration.rst
   reference/faq
   reference/basic-mapping
   reference/association-mapping
   reference/inheritance-mapping
   reference/working-with-objects
   reference/working-with-associations
   reference/events
   reference/unitofwork
   reference/unitofwork-associations
   reference/transactions-and-concurrency
   reference/batch-processing
   reference/dql-doctrine-query-language
   reference/query-builder
   reference/native-sql
   reference/change-tracking-policies
   reference/partial-objects
   reference/xml-mapping
   reference/yaml-mapping
   reference/annotations-reference
   reference/php-mapping
   reference/caching
   reference/improving-performance
   reference/tools
   reference/metadata-drivers
   reference/best-practices
   reference/limitations-and-known-issues
   tutorials/pagination
   reference/filters
   reference/namingstrategy
   reference/advanced-configuration
   reference/second-level-cache
   reference/security
   

Cookbook
--------

.. toctree::
   :maxdepth: 1

   cookbook/aggregate-fields
   cookbook/custom-mapping-types
   cookbook/decorator-pattern
   cookbook/dql-custom-walkers
   cookbook/dql-user-defined-functions
   cookbook/implementing-arrayaccess-for-domain-objects
   cookbook/implementing-the-notify-changetracking-policy
   cookbook/implementing-wakeup-or-clone
   cookbook/resolve-target-entity-listener
   cookbook/sql-table-prefixes
   cookbook/strategy-cookbook-introduction
   cookbook/validation-of-entities
   cookbook/working-with-datetime
   cookbook/mysql-enums
   cookbook/advanced-field-value-conversion-using-custom-mapping-types
   cookbook/entities-in-session

", "vendor/doctrine/orm/docs/en/toc.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/toc.rst");
    }
}
