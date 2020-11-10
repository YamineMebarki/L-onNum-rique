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

/* vendor/twig/twig/doc/functions/cycle.rst */
class __TwigTemplate_68ded34e17a6b8da475a6a7d752bcbd00435c691c176c5ec5f4c67498a2723f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/cycle.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/cycle.rst"));

        // line 1
        echo "``cycle``
=========

The ``cycle`` function cycles on an array of values:

.. code-block:: twig

    ";
        // line 8
        $context["start_year"] = twig_date_format_filter($this->env, twig_date_converter($this->env), "Y");
        // line 9
        echo "    ";
        $context["end_year"] = ((isset($context["start_year"]) || array_key_exists("start_year", $context) ? $context["start_year"] : (function () { throw new RuntimeError('Variable "start_year" does not exist.', 9, $this->source); })()) + 5);
        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["start_year"]) || array_key_exists("start_year", $context) ? $context["start_year"] : (function () { throw new RuntimeError('Variable "start_year" does not exist.', 11, $this->source); })()), (isset($context["end_year"]) || array_key_exists("end_year", $context) ? $context["end_year"] : (function () { throw new RuntimeError('Variable "end_year" does not exist.', 11, $this->source); })())));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 12)), "html", null, true);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
The array can contain any number of values:

.. code-block:: twig

    ";
        // line 19
        $context["fruits"] = [0 => "apple", 1 => "orange", 2 => "citrus"];
        // line 20
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, twig_cycle((isset($context["fruits"]) || array_key_exists("fruits", $context) ? $context["fruits"] : (function () { throw new RuntimeError('Variable "fruits" does not exist.', 22, $this->source); })()), $context["i"]), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
Arguments
---------

* ``position``: The cycle position
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/functions/cycle.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 24,  110 => 22,  106 => 21,  103 => 20,  101 => 19,  94 => 14,  77 => 12,  60 => 11,  57 => 10,  54 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``cycle``
=========

The ``cycle`` function cycles on an array of values:

.. code-block:: twig

    {% set start_year = date() | date('Y') %}
    {% set end_year = start_year + 5 %}

    {% for year in start_year..end_year %}
        {{ cycle(['odd', 'even'], loop.index0) }}
    {% endfor %}

The array can contain any number of values:

.. code-block:: twig

    {% set fruits = ['apple', 'orange', 'citrus'] %}

    {% for i in 0..10 %}
        {{ cycle(fruits, i) }}
    {% endfor %}

Arguments
---------

* ``position``: The cycle position
", "vendor/twig/twig/doc/functions/cycle.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/functions/cycle.rst");
    }
}
