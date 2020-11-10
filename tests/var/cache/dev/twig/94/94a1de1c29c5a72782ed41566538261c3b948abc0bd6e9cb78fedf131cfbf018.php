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

/* vendor/twig/twig/doc/filters/reverse.rst */
class __TwigTemplate_ad8985d03889155a529cf551c227fdba5776e5861b5f640fd2c60f4fe83ebd31 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/reverse.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/reverse.rst"));

        // line 1
        echo "``reverse``
===========

The ``reverse`` filter reverses a sequence, a mapping, or a string:

.. code-block:: twig

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 8, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 9
            echo "        ...
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, twig_reverse_filter($this->env, "1234"), "html", null, true);
        echo "

    ";
        // line 15
        echo "
.. tip::

    For sequences and mappings, numeric keys are not preserved. To reverse
    them as well, pass ``true`` as an argument to the ``reverse`` filter:

    .. code-block:: twig

        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, [1 => "a", 2 => "b", 3 => "c"]));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 24
            echo "            ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
        ";
        // line 28
        echo "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, [1 => "a", 2 => "b", 3 => "c"], true));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 30
            echo "            ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        ";
        // line 34
        echo "
.. note::

    It also works with objects implementing the `Traversable`_ interface.

Arguments
---------

* ``preserve_keys``: Preserve keys when reversing a mapping or a sequence.

.. _`Traversable`: https://secure.php.net/Traversable
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/reverse.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  113 => 32,  104 => 30,  100 => 29,  97 => 28,  94 => 26,  85 => 24,  81 => 23,  71 => 15,  66 => 12,  63 => 11,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``reverse``
===========

The ``reverse`` filter reverses a sequence, a mapping, or a string:

.. code-block:: twig

    {% for user in users|reverse %}
        ...
    {% endfor %}

    {{ '1234'|reverse }}

    {# outputs 4321 #}

.. tip::

    For sequences and mappings, numeric keys are not preserved. To reverse
    them as well, pass ``true`` as an argument to the ``reverse`` filter:

    .. code-block:: twig

        {% for key, value in {1: \"a\", 2: \"b\", 3: \"c\"}|reverse %}
            {{ key }}: {{ value }}
        {%- endfor %}

        {# output: 0: c    1: b    2: a #}

        {% for key, value in {1: \"a\", 2: \"b\", 3: \"c\"}|reverse(true) %}
            {{ key }}: {{ value }}
        {%- endfor %}

        {# output: 3: c    2: b    1: a #}

.. note::

    It also works with objects implementing the `Traversable`_ interface.

Arguments
---------

* ``preserve_keys``: Preserve keys when reversing a mapping or a sequence.

.. _`Traversable`: https://secure.php.net/Traversable
", "vendor/twig/twig/doc/filters/reverse.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/reverse.rst");
    }
}
