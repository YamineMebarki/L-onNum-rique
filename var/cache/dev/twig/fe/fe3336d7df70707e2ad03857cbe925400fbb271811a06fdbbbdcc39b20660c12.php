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

/* vendor/twig/twig/doc/filters/column.rst */
class __TwigTemplate_9e9cd6e03594c2bb29a08c7b0d7bb145503e84183bd1c21ae37499b6f590d025 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/column.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/column.rst"));

        // line 1
        echo "``column``
==========

.. versionadded:: 2.8
    The ``column`` filter was added in Twig 2.8.

The ``column`` filter returns the values from a single column in the input
array.

.. code-block:: twig

    ";
        // line 12
        $context["items"] = [0 => ["fruit" => "apple"], 1 => ["fruit" => "orange"]];
        // line 13
        echo "
    ";
        // line 14
        $context["fruits"] = twig_array_column((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 14, $this->source); })()), "fruit");
        // line 15
        echo "
    ";
        // line 17
        echo "
.. note::

    Internally, Twig uses the PHP `array_column`_ function.

Arguments
---------

* ``name``: The column name to extract

.. _`array_column`: https://secure.php.net/array_column
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/column.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  63 => 15,  61 => 14,  58 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``column``
==========

.. versionadded:: 2.8
    The ``column`` filter was added in Twig 2.8.

The ``column`` filter returns the values from a single column in the input
array.

.. code-block:: twig

    {% set items = [{ 'fruit' : 'apple'}, {'fruit' : 'orange' }] %}

    {% set fruits = items|column('fruit') %}

    {# fruits now contains ['apple', 'orange'] #}

.. note::

    Internally, Twig uses the PHP `array_column`_ function.

Arguments
---------

* ``name``: The column name to extract

.. _`array_column`: https://secure.php.net/array_column
", "vendor/twig/twig/doc/filters/column.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/column.rst");
    }
}
