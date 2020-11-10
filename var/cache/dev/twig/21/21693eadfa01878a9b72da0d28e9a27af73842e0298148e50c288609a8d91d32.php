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

/* vendor/twig/twig/doc/filters/nl2br.rst */
class __TwigTemplate_506819cc0073c9c3904a2ff1f97004c27e79a8bd2dd856c962d4b29d253810e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/nl2br.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/nl2br.rst"));

        // line 1
        echo "``nl2br``
=========

The ``nl2br`` filter inserts HTML line breaks before all newlines in a string:

.. code-block:: twig

    ";
        // line 8
        echo nl2br("I like Twig.
You will like it too.");
        echo "
    ";
        // line 15
        echo "
.. note::

    The ``nl2br`` filter pre-escapes the input before applying the
    transformation.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/nl2br.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``nl2br``
=========

The ``nl2br`` filter inserts HTML line breaks before all newlines in a string:

.. code-block:: twig

    {{ \"I like Twig.\\nYou will like it too.\"|nl2br }}
    {# outputs

        I like Twig.<br />
        You will like it too.

    #}

.. note::

    The ``nl2br`` filter pre-escapes the input before applying the
    transformation.
", "vendor/twig/twig/doc/filters/nl2br.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/nl2br.rst");
    }
}
