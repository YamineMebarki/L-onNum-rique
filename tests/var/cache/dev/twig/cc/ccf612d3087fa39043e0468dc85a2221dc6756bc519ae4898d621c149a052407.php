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

/* vendor/doctrine/event-manager/docs/en/index.rst */
class __TwigTemplate_af24a4115012a15ebf4fe992ea3d7f839859c2cc8963d3d1cc0152afd013bf77 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/event-manager/docs/en/index.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/event-manager/docs/en/index.rst"));

        // line 1
        echo "Event Manager Documentation
===========================

The Doctrine Event Manager documentation is a reference guide to everything you need
to know about the project.

Getting Help
------------

If this documentation is not helping to answer questions you have about the
Doctrine DBAL, don't panic. You can get help from different sources:

-  Gitter chat room `#doctrine/event-manager <https://gitter.im/doctrine/event-manager>`_
-  On `Stack Overflow <http://stackoverflow.com/questions/tagged/doctrine-event-manager>`_
-  The `Doctrine Mailing List <http://groups.google.com/group/doctrine-user>`_
-  Report a bug on `GitHub <https://github.com/doctrine/event-manager/issues>`_.

Getting Started
---------------

The best way to get started is with the :doc:`Introduction <reference/index#introduction>` section
in the documentation. Use the sidebar to browse other documentation for the Doctrine Event Manager.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/event-manager/docs/en/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Event Manager Documentation
===========================

The Doctrine Event Manager documentation is a reference guide to everything you need
to know about the project.

Getting Help
------------

If this documentation is not helping to answer questions you have about the
Doctrine DBAL, don't panic. You can get help from different sources:

-  Gitter chat room `#doctrine/event-manager <https://gitter.im/doctrine/event-manager>`_
-  On `Stack Overflow <http://stackoverflow.com/questions/tagged/doctrine-event-manager>`_
-  The `Doctrine Mailing List <http://groups.google.com/group/doctrine-user>`_
-  Report a bug on `GitHub <https://github.com/doctrine/event-manager/issues>`_.

Getting Started
---------------

The best way to get started is with the :doc:`Introduction <reference/index#introduction>` section
in the documentation. Use the sidebar to browse other documentation for the Doctrine Event Manager.
", "vendor/doctrine/event-manager/docs/en/index.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/event-manager/docs/en/index.rst");
    }
}
