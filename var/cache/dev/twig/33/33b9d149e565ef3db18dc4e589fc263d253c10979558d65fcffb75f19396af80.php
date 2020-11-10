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

/* vendor/twig/twig/doc/filters/filter.rst */
class __TwigTemplate_8e02f43b7763eda75fe5f182ca4e2e4e7d2e23586d1558163340e4cb0498b617 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/filter.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/filter.rst"));

        // line 1
        echo "``filter``
==========

.. versionadded:: 1.41
    The ``filter`` filter was added in Twig 1.41 and 2.10.

The ``filter`` filter filters elements of a sequence or a mapping using an arrow
function. The arrow function receives the value of the sequence or mapping:

.. code-block:: twig

    ";
        // line 12
        $context["sizes"] = [0 => 34, 1 => 36, 2 => 38, 3 => 40, 4 => 42];
        // line 13
        echo "
    ";
        // line 14
        echo twig_escape_filter($this->env, twig_join_filter(twig_array_filter((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 14, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 14, $this->source); })()) > 38); }), ", "), "html", null, true);
        echo "
    ";
        // line 16
        echo "
Combined with the ``for`` tag, it allows to filter the items to iterate over:

.. code-block:: twig

    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 21, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ($context["v"] > 38); }));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 22
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        // line 25
        echo "
It also works with mappings:

.. code-block:: twig

    ";
        // line 30
        $context["sizes"] = ["xs" => 34, "s" => 36, "m" => 38, "l" => 40, "xl" => 42];
        // line 37
        echo "
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 38, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ($context["v"] > 38); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 39
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo " = ";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    ";
        // line 42
        echo "
The arrow function also receives the key as a second argument:

.. code-block:: twig

    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 47, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return (($context["v"] > 38) && ($context["k"] != "xl")); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 48
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo " = ";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    ";
        // line 51
        echo "
Note that the arrow function has access to the current context.

Arguments
---------

* ``array``: The sequence or mapping
* ``arrow``: The arrow function
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/filter.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  135 => 50,  125 => 48,  121 => 47,  114 => 42,  112 => 41,  102 => 39,  98 => 38,  95 => 37,  93 => 30,  86 => 25,  84 => 24,  76 => 22,  72 => 21,  65 => 16,  61 => 14,  58 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``filter``
==========

.. versionadded:: 1.41
    The ``filter`` filter was added in Twig 1.41 and 2.10.

The ``filter`` filter filters elements of a sequence or a mapping using an arrow
function. The arrow function receives the value of the sequence or mapping:

.. code-block:: twig

    {% set sizes = [34, 36, 38, 40, 42] %}

    {{ sizes|filter(v => v > 38)|join(', ') }}
    {# output 40, 42 #}

Combined with the ``for`` tag, it allows to filter the items to iterate over:

.. code-block:: twig

    {% for v in sizes|filter(v => v > 38) -%}
        {{ v }}
    {% endfor %}
    {# output 40 42 #}

It also works with mappings:

.. code-block:: twig

    {% set sizes = {
        xs: 34,
        s:  36,
        m:  38,
        l:  40,
        xl: 42,
    } %}

    {% for k, v in sizes|filter(v => v > 38) -%}
        {{ k }} = {{ v }}
    {% endfor %}
    {# output l = 40 xl = 42 #}

The arrow function also receives the key as a second argument:

.. code-block:: twig

    {% for k, v in sizes|filter((v, k) => v > 38 and k != \"xl\") -%}
        {{ k }} = {{ v }}
    {% endfor %}
    {# output l = 40 #}

Note that the arrow function has access to the current context.

Arguments
---------

* ``array``: The sequence or mapping
* ``arrow``: The arrow function
", "vendor/twig/twig/doc/filters/filter.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/filter.rst");
    }
}
