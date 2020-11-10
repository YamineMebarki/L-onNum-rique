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

/* vendor/twig/twig/doc/filters/replace.rst */
class __TwigTemplate_8a7b27f1a3f4b224146a8c6bf50cc271c1d6c32bd7c2395e764baa7d1bcaf89b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/replace.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/replace.rst"));

        // line 1
        echo "``replace``
===========

The ``replace`` filter formats a given string by replacing the placeholders
(placeholders are free-form):

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_replace_filter("I like %this% and %that%.", ["%this%" => (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 9, $this->source); })()), "%that%" => "bar"]), "html", null, true);
        echo "

    ";
        // line 13
        echo "
    ";
        // line 15
        echo "
    ";
        // line 16
        echo twig_escape_filter($this->env, twig_replace_filter("I like this and --that--.", ["this" => (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 16, $this->source); })()), "--that--" => "bar"]), "html", null, true);
        echo "

    ";
        // line 19
        echo "
Arguments
---------

* ``from``: The placeholder values

.. seealso:: :doc:`format<format>`
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/replace.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  64 => 16,  61 => 15,  58 => 13,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``replace``
===========

The ``replace`` filter formats a given string by replacing the placeholders
(placeholders are free-form):

.. code-block:: twig

    {{ \"I like %this% and %that%.\"|replace({'%this%': foo, '%that%': \"bar\"}) }}

    {# outputs I like foo and bar
       if the foo parameter equals to the foo string. #}

    {# using % as a delimiter is purely conventional and optional #}

    {{ \"I like this and --that--.\"|replace({'this': foo, '--that--': \"bar\"}) }}

    {# outputs I like foo and bar #}

Arguments
---------

* ``from``: The placeholder values

.. seealso:: :doc:`format<format>`
", "vendor/twig/twig/doc/filters/replace.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/replace.rst");
    }
}
