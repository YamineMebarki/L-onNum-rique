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

/* vendor/doctrine/reflection/docs/en/index.rst */
class __TwigTemplate_6bfdd0250a52fc9b78778e68ffb0d8baffc07eb03a6dae2c571336fa2e7259cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/docs/en/index.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/docs/en/index.rst"));

        // line 1
        echo "Reflection Documentation
=================

The Doctrine Reflection documentation is a reference guide to everything you need
to know about the reflection project.

Getting Help
------------

If this documentation is not helping to answer questions you have about
Doctrine Reflection don't panic. You can get help from different sources:

-  The `Doctrine Mailing List <https://groups.google.com/group/doctrine-user>`_
-  Gitter chat room `#doctrine/reflection <https://gitter.im/doctrine/reflection>`_
-  Report a bug on `GitHub <https://github.com/doctrine/reflection/issues>`_.
-  On `StackOverflow <https://stackoverflow.com/questions/tagged/doctrine-reflection>`_

Getting Started
---------------

The best way to get started is with the :doc:`Introduction <introduction>` section.
Use the sidebar to browse other documentation for the Doctrine PHP Reflection project.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/reflection/docs/en/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Reflection Documentation
=================

The Doctrine Reflection documentation is a reference guide to everything you need
to know about the reflection project.

Getting Help
------------

If this documentation is not helping to answer questions you have about
Doctrine Reflection don't panic. You can get help from different sources:

-  The `Doctrine Mailing List <https://groups.google.com/group/doctrine-user>`_
-  Gitter chat room `#doctrine/reflection <https://gitter.im/doctrine/reflection>`_
-  Report a bug on `GitHub <https://github.com/doctrine/reflection/issues>`_.
-  On `StackOverflow <https://stackoverflow.com/questions/tagged/doctrine-reflection>`_

Getting Started
---------------

The best way to get started is with the :doc:`Introduction <introduction>` section.
Use the sidebar to browse other documentation for the Doctrine PHP Reflection project.
", "vendor/doctrine/reflection/docs/en/index.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/reflection/docs/en/index.rst");
    }
}
