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

/* vendor/twig/twig/doc/functions/constant.rst */
class __TwigTemplate_e6c92927624cf8ba1f20430599098989d2a0f66544cf37db23cd5371baa73809 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/constant.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/constant.rst"));

        // line 1
        echo "``constant``
============

``constant`` returns the constant value for a given string:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["some_date"]) || array_key_exists("some_date", $context) ? $context["some_date"] : (function () { throw new RuntimeError('Variable "some_date" does not exist.', 8, $this->source); })()), twig_constant("DATE_W3C")), "html", null, true);
        echo "
    ";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("Namespace\\Classname::CONSTANT_NAME"), "html", null, true);
        echo "

You can read constants from object instances as well:

.. code-block:: twig

    ";
        // line 15
        echo twig_escape_filter($this->env, twig_constant("RSS", (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 15, $this->source); })())), "html", null, true);
        echo "

Use the ``defined`` test to check if a constant is defined:

.. code-block:: twig

    ";
        // line 21
        if (twig_constant_is_defined("SOME_CONST")) {
            // line 22
            echo "        ...
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/functions/constant.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  74 => 21,  65 => 15,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``constant``
============

``constant`` returns the constant value for a given string:

.. code-block:: twig

    {{ some_date|date(constant('DATE_W3C')) }}
    {{ constant('Namespace\\\\Classname::CONSTANT_NAME') }}

You can read constants from object instances as well:

.. code-block:: twig

    {{ constant('RSS', date) }}

Use the ``defined`` test to check if a constant is defined:

.. code-block:: twig

    {% if constant('SOME_CONST') is defined %}
        ...
    {% endif %}
", "vendor/twig/twig/doc/functions/constant.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/functions/constant.rst");
    }
}
