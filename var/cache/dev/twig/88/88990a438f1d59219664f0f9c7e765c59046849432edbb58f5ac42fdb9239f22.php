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

/* vendor/twig/twig/doc/tags/set.rst */
class __TwigTemplate_97d3594b75b1b0b602bd488b5cca54e6d597f5278e924430cb2bbd85718be3e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/set.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/set.rst"));

        // line 1
        echo "``set``
=======

Inside code blocks you can also assign values to variables. Assignments use
the ``set`` tag and can have multiple targets.

Here is how you can assign the ``bar`` value to the ``foo`` variable:

.. code-block:: twig

    ";
        // line 11
        $context["foo"] = "bar";
        // line 12
        echo "
After the ``set`` call, the ``foo`` variable is available in the template like
any other ones:

.. code-block:: twig

    ";
        // line 19
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "

The assigned value can be any valid :ref:`Twig expression
<twig-expressions>`:

.. code-block:: twig

    ";
        // line 26
        $context["foo"] = [0 => 1, 1 => 2];
        // line 27
        echo "    ";
        $context["foo"] = ["foo" => "bar"];
        // line 28
        echo "    ";
        $context["foo"] = ("foo" . "bar");
        // line 29
        echo "
Several variables can be assigned in one block:

.. code-block:: twig

    ";
        // line 34
        list($context["foo"], $context["bar"]) =         ["foo", "bar"];
        // line 35
        echo "
    ";
        // line 37
        echo "
    ";
        // line 38
        $context["foo"] = "foo";
        // line 39
        echo "    ";
        $context["bar"] = "bar";
        // line 40
        echo "
The ``set`` tag can also be used to 'capture' chunks of text:

.. code-block:: twig

    ";
        // line 45
        $context["foo"] = ('' === $tmp = "        <div id=\"pagination\">
            ...
        </div>
    ") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "
.. caution::

    If you enable automatic output escaping, Twig will only consider the
    content to be safe when capturing chunks of text.

.. note::

    Note that loops are scoped in Twig; therefore a variable declared inside a
    ``for`` loop is not accessible outside the loop itself:

    .. code-block:: twig

        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "            ";
            $context["foo"] = $context["item"];
            // line 65
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
        ";
        // line 68
        echo "
    If you want to access the variable, just declare it before the loop:

    .. code-block:: twig

        ";
        // line 73
        $context["foo"] = "";
        // line 74
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 75
            echo "            ";
            $context["foo"] = $context["item"];
            // line 76
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
        ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/tags/set.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 77,  164 => 76,  161 => 75,  156 => 74,  154 => 73,  147 => 68,  144 => 66,  138 => 65,  135 => 64,  131 => 63,  116 => 50,  111 => 45,  104 => 40,  101 => 39,  99 => 38,  96 => 37,  93 => 35,  91 => 34,  84 => 29,  81 => 28,  78 => 27,  76 => 26,  65 => 19,  57 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``set``
=======

Inside code blocks you can also assign values to variables. Assignments use
the ``set`` tag and can have multiple targets.

Here is how you can assign the ``bar`` value to the ``foo`` variable:

.. code-block:: twig

    {% set foo = 'bar' %}

After the ``set`` call, the ``foo`` variable is available in the template like
any other ones:

.. code-block:: twig

    {# displays bar #}
    {{ foo }}

The assigned value can be any valid :ref:`Twig expression
<twig-expressions>`:

.. code-block:: twig

    {% set foo = [1, 2] %}
    {% set foo = {'foo': 'bar'} %}
    {% set foo = 'foo' ~ 'bar' %}

Several variables can be assigned in one block:

.. code-block:: twig

    {% set foo, bar = 'foo', 'bar' %}

    {# is equivalent to #}

    {% set foo = 'foo' %}
    {% set bar = 'bar' %}

The ``set`` tag can also be used to 'capture' chunks of text:

.. code-block:: twig

    {% set foo %}
        <div id=\"pagination\">
            ...
        </div>
    {% endset %}

.. caution::

    If you enable automatic output escaping, Twig will only consider the
    content to be safe when capturing chunks of text.

.. note::

    Note that loops are scoped in Twig; therefore a variable declared inside a
    ``for`` loop is not accessible outside the loop itself:

    .. code-block:: twig

        {% for item in list %}
            {% set foo = item %}
        {% endfor %}

        {# foo is NOT available #}

    If you want to access the variable, just declare it before the loop:

    .. code-block:: twig

        {% set foo = \"\" %}
        {% for item in list %}
            {% set foo = item %}
        {% endfor %}

        {# foo is available #}
", "vendor/twig/twig/doc/tags/set.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/tags/set.rst");
    }
}
