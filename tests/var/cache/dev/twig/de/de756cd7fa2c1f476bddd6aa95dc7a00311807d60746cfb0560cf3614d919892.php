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

/* vendor/twig/twig/doc/filters/abs.rst */
class __TwigTemplate_59e1f066871044bb1e8d434933198a52c85cf2cdb0bdb6375495fc35fff6829b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/abs.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/abs.rst"));

        // line 1
        echo "``abs``
=======

The ``abs`` filter returns the absolute value.

.. code-block:: twig

    ";
        // line 9
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, abs((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "

    ";
        // line 13
        echo "
.. note::

    Internally, Twig uses the PHP `abs`_ function.

.. _`abs`: https://secure.php.net/abs
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/abs.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  55 => 10,  52 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``abs``
=======

The ``abs`` filter returns the absolute value.

.. code-block:: twig

    {# number = -5 #}

    {{ number|abs }}

    {# outputs 5 #}

.. note::

    Internally, Twig uses the PHP `abs`_ function.

.. _`abs`: https://secure.php.net/abs
", "vendor/twig/twig/doc/filters/abs.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/abs.rst");
    }
}
