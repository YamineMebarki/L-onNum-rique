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

/* vendor/twig/twig/README.rst */
class __TwigTemplate_88edd6df3a3c4ae0ee2773b5d430a6afafa4b38d685d2309e0981145d7c7e1f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/README.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/README.rst"));

        // line 1
        echo "Twig, the flexible, fast, and secure template language for PHP
==============================================================

Twig is a template language for PHP, released under the new BSD license (code
and documentation).

Twig uses a syntax similar to the Django and Jinja template languages which
inspired the Twig runtime environment.

Sponsors
--------

.. raw:: html

    <a href=\"https://blackfire.io/docs/introduction?utm_source=twig&utm_medium=github_readme&utm_campaign=logo\">
        <img src=\"https://static.blackfire.io/assets/intemporals/logo/png/blackfire-io_secondary_horizontal_transparent.png?1\" width=\"255px\" alt=\"Blackfire.io\">
    </a>

More Information
----------------

Read the `documentation`_ for more information.

.. _documentation: https://twig.symfony.com/documentation
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/README.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Twig, the flexible, fast, and secure template language for PHP
==============================================================

Twig is a template language for PHP, released under the new BSD license (code
and documentation).

Twig uses a syntax similar to the Django and Jinja template languages which
inspired the Twig runtime environment.

Sponsors
--------

.. raw:: html

    <a href=\"https://blackfire.io/docs/introduction?utm_source=twig&utm_medium=github_readme&utm_campaign=logo\">
        <images src=\"https://static.blackfire.io/assets/intemporals/logo/png/blackfire-io_secondary_horizontal_transparent.png?1\" width=\"255px\" alt=\"Blackfire.io\">
    </a>

More Information
----------------

Read the `documentation`_ for more information.

.. _documentation: https://twig.symfony.com/documentation
", "vendor/twig/twig/README.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/README.rst");
    }
}
