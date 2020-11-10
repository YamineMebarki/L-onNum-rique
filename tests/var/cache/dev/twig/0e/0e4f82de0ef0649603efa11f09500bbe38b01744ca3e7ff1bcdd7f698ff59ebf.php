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

/* vendor/twig/twig/doc/filters/raw.rst */
class __TwigTemplate_a41a2c190045ad0f4afecf7cd24c0a29bb15ff95345b8b1216a86747c0a20349 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/raw.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/raw.rst"));

        // line 1
        echo "``raw``
=======

The ``raw`` filter marks the value as being \"safe\", which means that in an
environment with automatic escaping enabled this variable will not be escaped
if ``raw`` is the last filter applied to it:

.. code-block:: twig

    ";
        // line 11
        echo "        ";
        echo (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 11, $this->source); })());
        echo " ";
        // line 12
        echo "    ";
        // line 13
        echo "
.. note::

    **This note only applies to Twig before versions 1.39 and 2.8**.

    Be careful when using the ``raw`` filter inside expressions:

    .. code-block:: twig

        ";
        // line 23
        echo "            ";
        $context["hello"] = "<strong>Hello</strong>";
        // line 24
        echo "            ";
        $context["hola"] = "<strong>Hola</strong>";
        // line 25
        echo "
            ";
        // line 26
        echo ((false) ? ("<strong>Hola</strong>") : ((isset($context["hello"]) || array_key_exists("hello", $context) ? $context["hello"] : (function () { throw new RuntimeError('Variable "hello" does not exist.', 26, $this->source); })())));
        echo "
            does not render the same as
            ";
        // line 28
        ((false) ? (print (twig_escape_filter($this->env, (isset($context["hola"]) || array_key_exists("hola", $context) ? $context["hola"] : (function () { throw new RuntimeError('Variable "hola" does not exist.', 28, $this->source); })()), "html", null, true))) : (print ((isset($context["hello"]) || array_key_exists("hello", $context) ? $context["hello"] : (function () { throw new RuntimeError('Variable "hello" does not exist.', 28, $this->source); })()))));
        echo "
            but renders the same as
            ";
        // line 30
        echo ((false) ? ((isset($context["hola"]) || array_key_exists("hola", $context) ? $context["hola"] : (function () { throw new RuntimeError('Variable "hola" does not exist.', 30, $this->source); })())) : ((isset($context["hello"]) || array_key_exists("hello", $context) ? $context["hello"] : (function () { throw new RuntimeError('Variable "hello" does not exist.', 30, $this->source); })())));
        echo "
        ";
        // line 32
        echo "
    The first ternary statement is not escaped: ``hello`` is marked as being
    safe and Twig does not escape static values (see
    :doc:`escape<../tags/autoescape>`). In the second ternary statement, even
    if ``hello`` is marked as safe, ``hola`` remains unsafe and so is the whole
    expression. The third ternary statement is marked as safe and the result is
    not escaped.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/raw.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  90 => 30,  85 => 28,  80 => 26,  77 => 25,  74 => 24,  71 => 23,  60 => 13,  58 => 12,  54 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``raw``
=======

The ``raw`` filter marks the value as being \"safe\", which means that in an
environment with automatic escaping enabled this variable will not be escaped
if ``raw`` is the last filter applied to it:

.. code-block:: twig

    {% autoescape %}
        {{ var|raw }} {# var won't be escaped #}
    {% endautoescape %}

.. note::

    **This note only applies to Twig before versions 1.39 and 2.8**.

    Be careful when using the ``raw`` filter inside expressions:

    .. code-block:: twig

        {% autoescape %}
            {% set hello = '<strong>Hello</strong>' %}
            {% set hola = '<strong>Hola</strong>' %}

            {{ false ? '<strong>Hola</strong>' : hello|raw }}
            does not render the same as
            {{ false ? hola : hello|raw }}
            but renders the same as
            {{ (false ? hola : hello)|raw }}
        {% endautoescape %}

    The first ternary statement is not escaped: ``hello`` is marked as being
    safe and Twig does not escape static values (see
    :doc:`escape<../tags/autoescape>`). In the second ternary statement, even
    if ``hello`` is marked as safe, ``hola`` remains unsafe and so is the whole
    expression. The third ternary statement is marked as safe and the result is
    not escaped.
", "vendor/twig/twig/doc/filters/raw.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/raw.rst");
    }
}
