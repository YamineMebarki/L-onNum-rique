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

/* vendor/twig/twig/doc/filters/sort.rst */
class __TwigTemplate_70588163897ea4b825e1f42bbbd0d6ec3202fddd5d37361db25c3a8ca86a2a16 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/sort.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/sort.rst"));

        // line 1
        echo "``sort``
========

.. versionadded:: 2.12
    The ``arrow`` argument was added in Twig 2.12.

The ``sort`` filter sorts an array:

.. code-block:: twig

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 11, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 12
            echo "        ...
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
.. note::

    Internally, Twig uses the PHP `asort`_ function to maintain index
    association. It supports Traversable objects by transforming
    those to arrays.

You can pass an arrow function to sort the array:

.. code-block:: twig

    ";
        // line 25
        $context["fruits"] = [0 => ["name" => "Apples", "quantity" => 5], 1 => ["name" => "Oranges", "quantity" => 2], 2 => ["name" => "Grapes", "quantity" => 4]];
        // line 30
        echo "
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_column(twig_sort_filter((isset($context["fruits"]) || array_key_exists("fruits", $context) ? $context["fruits"] : (function () { throw new RuntimeError('Variable "fruits" does not exist.', 31, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 31, $this->source); })()), "quantity", [], "any", false, false, false, 31) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 31, $this->source); })()), "quantity", [], "any", false, false, false, 31)); }), "name"));
        foreach ($context['_seq'] as $context["_key"] => $context["fruit"]) {
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, $context["fruit"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fruit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    ";
        // line 36
        echo "
Note the usage of the `spaceship`_ operator to simplify the comparison.

Arguments
---------

* ``arrow``: An arrow function

.. _`asort`: https://secure.php.net/asort
.. _`spaceship`: https://www.php.net/manual/en/language.operators.comparison.php
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/sort.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  97 => 34,  88 => 32,  84 => 31,  81 => 30,  79 => 25,  66 => 14,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``sort``
========

.. versionadded:: 2.12
    The ``arrow`` argument was added in Twig 2.12.

The ``sort`` filter sorts an array:

.. code-block:: twig

    {% for user in users|sort %}
        ...
    {% endfor %}

.. note::

    Internally, Twig uses the PHP `asort`_ function to maintain index
    association. It supports Traversable objects by transforming
    those to arrays.

You can pass an arrow function to sort the array:

.. code-block:: twig

    {% set fruits = [
        { name: 'Apples', quantity: 5 },
        { name: 'Oranges', quantity: 2 },
        { name: 'Grapes', quantity: 4 },
    ] %}

    {% for fruit in fruits|sort((a, b) => a.quantity <=> b.quantity)|column('name') %}
        {{ fruit }}
    {% endfor %}

    {# output in this order: Oranges, Grapes, Apples #}

Note the usage of the `spaceship`_ operator to simplify the comparison.

Arguments
---------

* ``arrow``: An arrow function

.. _`asort`: https://secure.php.net/asort
.. _`spaceship`: https://www.php.net/manual/en/language.operators.comparison.php
", "vendor/twig/twig/doc/filters/sort.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/sort.rst");
    }
}
