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

/* vendor/doctrine/orm/docs/en/tutorials/getting-started-models.rst */
class __TwigTemplate_d3eb85871ddc22dac7ca05b3691ea36fc9309c7dffed22a5ec4c80979025a3f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/tutorials/getting-started-models.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/tutorials/getting-started-models.rst"));

        // line 1
        echo "Getting Started: Model First
============================

.. note:: *Development Workflows*

    When you :doc:`Code First <getting-started>`, you
    start with developing Objects and then map them onto your database. When
    you Model First, you are modelling your application using tools (for
    example UML) and generate database schema and PHP code from this model.
    When you have a :doc:`Database First <getting-started-database>`, then you already have a database schema
    and generate the corresponding PHP code from it.

.. note::

    This getting started guide is in development.

There are applications when you start with a high-level description of the
model using modelling tools such as UML. Modelling tools could also be Excel,
XML or CSV files that describe the model in some structured way. If your
application is using a modelling tool, then the development workflow is said to
be a  *Model First* approach to Doctrine2.

In this workflow you always change the model description and then regenerate
both PHP code and database schema from this model.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/tutorials/getting-started-models.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Getting Started: Model First
============================

.. note:: *Development Workflows*

    When you :doc:`Code First <getting-started>`, you
    start with developing Objects and then map them onto your database. When
    you Model First, you are modelling your application using tools (for
    example UML) and generate database schema and PHP code from this model.
    When you have a :doc:`Database First <getting-started-database>`, then you already have a database schema
    and generate the corresponding PHP code from it.

.. note::

    This getting started guide is in development.

There are applications when you start with a high-level description of the
model using modelling tools such as UML. Modelling tools could also be Excel,
XML or CSV files that describe the model in some structured way. If your
application is using a modelling tool, then the development workflow is said to
be a  *Model First* approach to Doctrine2.

In this workflow you always change the model description and then regenerate
both PHP code and database schema from this model.
", "vendor/doctrine/orm/docs/en/tutorials/getting-started-models.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/tutorials/getting-started-models.rst");
    }
}
