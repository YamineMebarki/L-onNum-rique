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

/* vendor/twig/twig/doc/filters/map.rst */
class __TwigTemplate_12c1b48f658788c508187744bb5cc70de7f7b75560f8a8b35d985d24a738b8b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/map.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/map.rst"));

        // line 1
        echo "``map``
=======

.. versionadded:: 1.41
    The ``map`` filter was added in Twig 1.41 and 2.10.

The ``map`` filter applies an arrow function to the elements of a sequence or a
mapping. The arrow function receives the value of the sequence or mapping:

.. code-block:: twig

    ";
        // line 12
        $context["people"] = [0 => ["first" => "Bob", "last" => "Smith"], 1 => ["first" => "Alice", "last" => "Dupond"]];
        // line 16
        echo "
    ";
        // line 17
        echo twig_escape_filter($this->env, twig_join_filter(twig_array_map((isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 17, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 17, $this->source); })()), "first", [], "any", false, false, false, 17) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 17, $this->source); })()), "last", [], "any", false, false, false, 17)); }), ", "), "html", null, true);
        echo "
    ";
        // line 19
        echo "
The arrow function also receives the key as a second argument:

.. code-block:: twig

    ";
        // line 24
        $context["people"] = ["Bob" => "Smith", "Alice" => "Dupond"];
        // line 28
        echo "
    ";
        // line 29
        echo twig_escape_filter($this->env, twig_join_filter(twig_array_map((isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 29, $this->source); })()), function ($__last__, $__first__) use ($context, $macros) { $context["last"] = $__last__; $context["first"] = $__first__; return (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 29, $this->source); })()) . " ") . (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 29, $this->source); })())); }), ", "), "html", null, true);
        echo "
    ";
        // line 31
        echo "
Note that the arrow function has access to the current context.

Arguments
---------

* ``arrow``: The arrow function
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/map.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  77 => 29,  74 => 28,  72 => 24,  65 => 19,  61 => 17,  58 => 16,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``map``
=======

.. versionadded:: 1.41
    The ``map`` filter was added in Twig 1.41 and 2.10.

The ``map`` filter applies an arrow function to the elements of a sequence or a
mapping. The arrow function receives the value of the sequence or mapping:

.. code-block:: twig

    {% set people = [
        {first: \"Bob\", last: \"Smith\"},
        {first: \"Alice\", last: \"Dupond\"},
    ] %}

    {{ people|map(p => \"#{p.first} #{p.last}\")|join(', ') }}
    {# outputs Bob Smith, Alice Dupond #}

The arrow function also receives the key as a second argument:

.. code-block:: twig

    {% set people = {
        \"Bob\": \"Smith\",
        \"Alice\": \"Dupond\",
    } %}

    {{ people|map((last, first) => \"#{first} #{last}\")|join(', ') }}
    {# outputs Bob Smith, Alice Dupond #}

Note that the arrow function has access to the current context.

Arguments
---------

* ``arrow``: The arrow function
", "vendor/twig/twig/doc/filters/map.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/map.rst");
    }
}
