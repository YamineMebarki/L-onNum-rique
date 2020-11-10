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

/* vendor/twig/twig/doc/filters/join.rst */
class __TwigTemplate_3e81e9c4a276b1faf99f50f99a31c42c2ad11b672750f738c8d6e0e68bbbd01d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/join.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/join.rst"));

        // line 1
        echo "``join``
========

.. versionadded:: 2.6.1
    The ``and`` argument was added in Twig 2.6.1.

The ``join`` filter returns a string which is the concatenation of the items
of a sequence:

.. code-block:: twig

    ";
        // line 12
        echo twig_escape_filter($this->env, twig_join_filter([0 => 1, 1 => 2, 2 => 3]), "html", null, true);
        echo "
    ";
        // line 14
        echo "
The separator between elements is an empty string per default, but you can
define it with the optional first parameter:

.. code-block:: twig

    ";
        // line 20
        echo twig_escape_filter($this->env, twig_join_filter([0 => 1, 1 => 2, 2 => 3], "|"), "html", null, true);
        echo "
    ";
        // line 22
        echo "
A second parameter can also be provided that will be the separator used between
the last two items of the sequence:

.. code-block:: twig

    ";
        // line 28
        echo twig_escape_filter($this->env, twig_join_filter([0 => 1, 1 => 2, 2 => 3], ", ", " and "), "html", null, true);
        echo "
    ";
        // line 30
        echo "
Arguments
---------

* ``glue``: The separator
* ``and``: The separator for the last pair of input items
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/join.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  80 => 28,  72 => 22,  68 => 20,  60 => 14,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``join``
========

.. versionadded:: 2.6.1
    The ``and`` argument was added in Twig 2.6.1.

The ``join`` filter returns a string which is the concatenation of the items
of a sequence:

.. code-block:: twig

    {{ [1, 2, 3]|join }}
    {# returns 123 #}

The separator between elements is an empty string per default, but you can
define it with the optional first parameter:

.. code-block:: twig

    {{ [1, 2, 3]|join('|') }}
    {# outputs 1|2|3 #}

A second parameter can also be provided that will be the separator used between
the last two items of the sequence:

.. code-block:: twig

    {{ [1, 2, 3]|join(', ', ' and ') }}
    {# outputs 1, 2 and 3 #}

Arguments
---------

* ``glue``: The separator
* ``and``: The separator for the last pair of input items
", "vendor/twig/twig/doc/filters/join.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/join.rst");
    }
}
