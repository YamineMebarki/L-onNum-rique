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

/* vendor/twig/twig/doc/filters/merge.rst */
class __TwigTemplate_6627ebb6d107fa7d69deae9b0087f4d43d968f96f35c88ab42fe73f8a6c2389b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/merge.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/merge.rst"));

        // line 1
        echo "``merge``
=========

The ``merge`` filter merges an array with another array:

.. code-block:: twig

    ";
        // line 8
        $context["values"] = [0 => 1, 1 => 2];
        // line 9
        echo "
    ";
        // line 10
        $context["values"] = twig_array_merge((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 10, $this->source); })()), [0 => "apple", 1 => "orange"]);
        // line 11
        echo "
    ";
        // line 13
        echo "
New values are added at the end of the existing ones.

The ``merge`` filter also works on hashes:

.. code-block:: twig

    ";
        // line 20
        $context["items"] = ["apple" => "fruit", "orange" => "fruit", "peugeot" => "unknown"];
        // line 21
        echo "
    ";
        // line 22
        $context["items"] = twig_array_merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 22, $this->source); })()), ["peugeot" => "car", "renault" => "car"]);
        // line 23
        echo "
    ";
        // line 25
        echo "
For hashes, the merging process occurs on the keys: if the key does not
already exist, it is added but if the key already exists, its value is
overridden.

.. tip::

    If you want to ensure that some values are defined in an array (by given
    default values), reverse the two elements in the call:

    .. code-block:: twig

        ";
        // line 37
        $context["items"] = ["apple" => "fruit", "orange" => "fruit"];
        // line 38
        echo "
        ";
        // line 39
        $context["items"] = twig_array_merge(["apple" => "unknown"], (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 39, $this->source); })()));
        // line 40
        echo "
        ";
        // line 42
        echo "        
.. note::

    Internally, Twig uses the PHP `array_merge`_ function. It supports
    Traversable objects by transforming those to arrays.

.. _`array_merge`: https://secure.php.net/array_merge
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/merge.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 42,  102 => 40,  100 => 39,  97 => 38,  95 => 37,  81 => 25,  78 => 23,  76 => 22,  73 => 21,  71 => 20,  62 => 13,  59 => 11,  57 => 10,  54 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``merge``
=========

The ``merge`` filter merges an array with another array:

.. code-block:: twig

    {% set values = [1, 2] %}

    {% set values = values|merge(['apple', 'orange']) %}

    {# values now contains [1, 2, 'apple', 'orange'] #}

New values are added at the end of the existing ones.

The ``merge`` filter also works on hashes:

.. code-block:: twig

    {% set items = { 'apple': 'fruit', 'orange': 'fruit', 'peugeot': 'unknown' } %}

    {% set items = items|merge({ 'peugeot': 'car', 'renault': 'car' }) %}

    {# items now contains { 'apple': 'fruit', 'orange': 'fruit', 'peugeot': 'car', 'renault': 'car' } #}

For hashes, the merging process occurs on the keys: if the key does not
already exist, it is added but if the key already exists, its value is
overridden.

.. tip::

    If you want to ensure that some values are defined in an array (by given
    default values), reverse the two elements in the call:

    .. code-block:: twig

        {% set items = { 'apple': 'fruit', 'orange': 'fruit' } %}

        {% set items = { 'apple': 'unknown' }|merge(items) %}

        {# items now contains { 'apple': 'fruit', 'orange': 'fruit' } #}
        
.. note::

    Internally, Twig uses the PHP `array_merge`_ function. It supports
    Traversable objects by transforming those to arrays.

.. _`array_merge`: https://secure.php.net/array_merge
", "vendor/twig/twig/doc/filters/merge.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/merge.rst");
    }
}
