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

/* vendor/twig/twig/doc/filters/round.rst */
class __TwigTemplate_2f8624ff8e9bc152f5fcf258ba94c74ce56148066fb702f2625246b5983fb16c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/round.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/round.rst"));

        // line 1
        echo "``round``
=========

The ``round`` filter rounds a number to a given precision:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, twig_round(42.55), "html", null, true);
        echo "
    ";
        // line 10
        echo "
    ";
        // line 11
        echo twig_escape_filter($this->env, twig_round(42.55, 1, "floor"), "html", null, true);
        echo "
    ";
        // line 13
        echo "
The ``round`` filter takes two optional arguments; the first one specifies the
precision (default is ``0``) and the second the rounding method (default is
``common``):

* ``common`` rounds either up or down (rounds the value up to precision decimal
  places away from zero, when it is half way there -- making 1.5 into 2 and
  -1.5 into -2);

* ``ceil`` always rounds up;

* ``floor`` always rounds down.

.. note::

    The ``//`` operator is equivalent to ``|round(0, 'floor')``.

Arguments
---------

* ``precision``: The rounding precision
* ``method``: The rounding method
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/round.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  59 => 11,  56 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``round``
=========

The ``round`` filter rounds a number to a given precision:

.. code-block:: twig

    {{ 42.55|round }}
    {# outputs 43 #}

    {{ 42.55|round(1, 'floor') }}
    {# outputs 42.5 #}

The ``round`` filter takes two optional arguments; the first one specifies the
precision (default is ``0``) and the second the rounding method (default is
``common``):

* ``common`` rounds either up or down (rounds the value up to precision decimal
  places away from zero, when it is half way there -- making 1.5 into 2 and
  -1.5 into -2);

* ``ceil`` always rounds up;

* ``floor`` always rounds down.

.. note::

    The ``//`` operator is equivalent to ``|round(0, 'floor')``.

Arguments
---------

* ``precision``: The rounding precision
* ``method``: The rounding method
", "vendor/twig/twig/doc/filters/round.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/round.rst");
    }
}
