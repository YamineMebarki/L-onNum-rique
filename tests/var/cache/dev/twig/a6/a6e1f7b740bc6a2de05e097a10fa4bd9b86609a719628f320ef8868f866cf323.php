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

/* vendor/twig/twig/doc/functions/attribute.rst */
class __TwigTemplate_b1b07a441a0d79c51ee3b6c051355b7d2df64db00fe72bbadf5b4a38faea3e1f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/attribute.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/attribute.rst"));

        // line 1
        echo "``attribute``
=============

The ``attribute`` function can be used to access a \"dynamic\" attribute of a
variable:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 9, $this->source); })()), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 9, $this->source); })()), [], "any", false, false, false, 9), "html", null, true);
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 10, $this->source); })()), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 10, $this->source); })()), (isset($context["arguments"]) || array_key_exists("arguments", $context) ? $context["arguments"] : (function () { throw new RuntimeError('Variable "arguments" does not exist.', 10, $this->source); })()), "any", false, false, false, 10), "html", null, true);
        echo "
    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 11, $this->source); })()), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), [], "any", false, false, false, 11), "html", null, true);
        echo "

In addition, the ``defined`` test can check for the existence of a dynamic
attribute:

.. code-block:: twig

    ";
        // line 18
        echo ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 18, $this->source); })()), [], "any", true, true, false, 18)) ? ("Method exists") : ("Method does not exist"));
        echo "

.. note::

    The resolution algorithm is the same as the one used for the ``.``
    notation, except that the item can be any valid expression.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/functions/attribute.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  61 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``attribute``
=============

The ``attribute`` function can be used to access a \"dynamic\" attribute of a
variable:

.. code-block:: twig

    {{ attribute(object, method) }}
    {{ attribute(object, method, arguments) }}
    {{ attribute(array, item) }}

In addition, the ``defined`` test can check for the existence of a dynamic
attribute:

.. code-block:: twig

    {{ attribute(object, method) is defined ? 'Method exists' : 'Method does not exist' }}

.. note::

    The resolution algorithm is the same as the one used for the ``.``
    notation, except that the item can be any valid expression.
", "vendor/twig/twig/doc/functions/attribute.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/functions/attribute.rst");
    }
}
