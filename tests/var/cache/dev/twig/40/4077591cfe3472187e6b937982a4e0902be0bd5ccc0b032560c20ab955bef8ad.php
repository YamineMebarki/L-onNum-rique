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

/* vendor/twig/twig/doc/tags/block.rst */
class __TwigTemplate_6fc5d47d1130962024d68606582c5ad8702e9367b1bd9c7c14052f1b60407c96 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/block.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/block.rst"));

        // line 1
        echo "``block``
=========

Blocks are used for inheritance and act as placeholders and replacements at
the same time. They are documented in detail in the documentation for the
:doc:`extends<../tags/extends>` tag.

Block names should consist of alphanumeric characters, and underscores. Dashes
are not permitted.

.. seealso:: :doc:`block<../functions/block>`, :doc:`parent<../functions/parent>`, :doc:`use<../tags/use>`, :doc:`extends<../tags/extends>`
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/tags/block.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``block``
=========

Blocks are used for inheritance and act as placeholders and replacements at
the same time. They are documented in detail in the documentation for the
:doc:`extends<../tags/extends>` tag.

Block names should consist of alphanumeric characters, and underscores. Dashes
are not permitted.

.. seealso:: :doc:`block<../functions/block>`, :doc:`parent<../functions/parent>`, :doc:`use<../tags/use>`, :doc:`extends<../tags/extends>`
", "vendor/twig/twig/doc/tags/block.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/tags/block.rst");
    }
}
