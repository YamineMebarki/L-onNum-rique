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

/* vendor/doctrine/orm/docs/en/tutorials/getting-started-database.rst */
class __TwigTemplate_da6e6e028c132e341ebdc1da1e9dd3db48649d39fce2e5dd201b51e17f7abe60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/tutorials/getting-started-database.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/tutorials/getting-started-database.rst"));

        // line 1
        echo "Getting Started: Database First
===============================

.. note:: *Development Workflows*

    When you :doc:`Code First <getting-started>`, you
    start with developing Objects and then map them onto your database. When
    you :doc:`Model First <getting-started-models>`, you are modelling your application using tools (for
    example UML) and generate database schema and PHP code from this model.
    When you have a Database First, you already have a database schema
    and generate the corresponding PHP code from it.

.. note::

    This getting started guide is in development.

Development of new applications often starts with an existing database schema.
When the database schema is the starting point for your application, then
development is said to use the *Database First* approach to Doctrine.

In this workflow you would modify the database schema first and then
regenerate the PHP code to use with this schema. You need a flexible
code-generator for this task and up to Doctrine 2.2, the code generator hasn't
been flexible enough to achieve this.

We spinned off a subproject, Doctrine CodeGenerator, that will fill this gap and
allow you to do *Database First* development.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/tutorials/getting-started-database.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Getting Started: Database First
===============================

.. note:: *Development Workflows*

    When you :doc:`Code First <getting-started>`, you
    start with developing Objects and then map them onto your database. When
    you :doc:`Model First <getting-started-models>`, you are modelling your application using tools (for
    example UML) and generate database schema and PHP code from this model.
    When you have a Database First, you already have a database schema
    and generate the corresponding PHP code from it.

.. note::

    This getting started guide is in development.

Development of new applications often starts with an existing database schema.
When the database schema is the starting point for your application, then
development is said to use the *Database First* approach to Doctrine.

In this workflow you would modify the database schema first and then
regenerate the PHP code to use with this schema. You need a flexible
code-generator for this task and up to Doctrine 2.2, the code generator hasn't
been flexible enough to achieve this.

We spinned off a subproject, Doctrine CodeGenerator, that will fill this gap and
allow you to do *Database First* development.
", "vendor/doctrine/orm/docs/en/tutorials/getting-started-database.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/tutorials/getting-started-database.rst");
    }
}
