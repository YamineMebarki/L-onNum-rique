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

/* vendor/twig/twig/doc/functions/range.rst */
class __TwigTemplate_e4eab303e63870393a07d2ebfaccc5cd8042bee89e4fcd61afd4aa94613df5ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/range.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/range.rst"));

        // line 1
        echo "``range``
=========

Returns a list containing an arithmetic progression of integers:

.. code-block:: twig

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    ";
        // line 13
        echo "
When step is given (as the third parameter), it specifies the increment (or
decrement for negative values):

.. code-block:: twig

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 6, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "        ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    ";
        // line 24
        echo "
.. note::

    Note that if the start is greater than the end, ``range`` assumes a step of
    ``-1``:

    .. code-block:: twig

        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(3, 0));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 33
            echo "            ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ",
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        ";
        // line 37
        echo "
The Twig built-in ``..`` operator is just syntactic sugar for the ``range``
function (with a step of ``1``, or ``-1`` if the start is greater than the end):

.. code-block:: twig

    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "        ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
.. tip::

    The ``range`` function works as the native PHP `range`_ function.

Arguments
---------

* ``low``:  The first value of the sequence.
* ``high``: The highest possible value of the sequence.
* ``step``: The increment between elements of the sequence.

.. _`range`: https://secure.php.net/range
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/functions/range.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 46,  130 => 44,  126 => 43,  118 => 37,  115 => 35,  106 => 33,  102 => 32,  92 => 24,  89 => 22,  80 => 20,  76 => 19,  68 => 13,  65 => 11,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``range``
=========

Returns a list containing an arithmetic progression of integers:

.. code-block:: twig

    {% for i in range(0, 3) %}
        {{ i }},
    {% endfor %}

    {# outputs 0, 1, 2, 3, #}

When step is given (as the third parameter), it specifies the increment (or
decrement for negative values):

.. code-block:: twig

    {% for i in range(0, 6, 2) %}
        {{ i }},
    {% endfor %}

    {# outputs 0, 2, 4, 6, #}

.. note::

    Note that if the start is greater than the end, ``range`` assumes a step of
    ``-1``:

    .. code-block:: twig

        {% for i in range(3, 0) %}
            {{ i }},
        {% endfor %}

        {# outputs 3, 2, 1, 0, #}

The Twig built-in ``..`` operator is just syntactic sugar for the ``range``
function (with a step of ``1``, or ``-1`` if the start is greater than the end):

.. code-block:: twig

    {% for i in 0..3 %}
        {{ i }},
    {% endfor %}

.. tip::

    The ``range`` function works as the native PHP `range`_ function.

Arguments
---------

* ``low``:  The first value of the sequence.
* ``high``: The highest possible value of the sequence.
* ``step``: The increment between elements of the sequence.

.. _`range`: https://secure.php.net/range
", "vendor/twig/twig/doc/functions/range.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/functions/range.rst");
    }
}
