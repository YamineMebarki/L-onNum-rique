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

/* vendor/twig/twig/doc/filters/reduce.rst */
class __TwigTemplate_b9f8863316bdb229c03bac4ba42abbf2ce38ad8a112c6fbf86d41320248accd8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/reduce.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/reduce.rst"));

        // line 1
        echo "``reduce``
==========

.. versionadded:: 1.41
    The ``reduce`` filter was added in Twig 1.41 and 2.10.

The ``reduce`` filter iteratively reduces a sequence or a mapping to a single
value using an arrow function, so as to reduce it to a single value. The arrow
function receives the return value of the previous iteration and the current
value of the sequence or mapping:

.. code-block:: twig

    ";
        // line 14
        $context["numbers"] = [0 => 1, 1 => 2, 2 => 3];
        // line 15
        echo "
    ";
        // line 16
        echo twig_escape_filter($this->env, twig_array_reduce((isset($context["numbers"]) || array_key_exists("numbers", $context) ? $context["numbers"] : (function () { throw new RuntimeError('Variable "numbers" does not exist.', 16, $this->source); })()), function ($__carry__, $__v__) use ($context, $macros) { $context["carry"] = $__carry__; $context["v"] = $__v__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 16, $this->source); })()) + (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 16, $this->source); })())); }), "html", null, true);
        echo "
    ";
        // line 18
        echo "
The ``reduce`` filter takes an ``initial`` value as a second argument:

.. code-block:: twig

    ";
        // line 23
        echo twig_escape_filter($this->env, twig_array_reduce((isset($context["numbers"]) || array_key_exists("numbers", $context) ? $context["numbers"] : (function () { throw new RuntimeError('Variable "numbers" does not exist.', 23, $this->source); })()), function ($__carry__, $__v__) use ($context, $macros) { $context["carry"] = $__carry__; $context["v"] = $__v__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 23, $this->source); })()) + (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 23, $this->source); })())); }, 10), "html", null, true);
        echo "
    ";
        // line 25
        echo "
Note that the arrow function has access to the current context.

Arguments
---------

* ``arrow``: The arrow function
* ``initial``: The initial value
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/reduce.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  74 => 23,  67 => 18,  63 => 16,  60 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``reduce``
==========

.. versionadded:: 1.41
    The ``reduce`` filter was added in Twig 1.41 and 2.10.

The ``reduce`` filter iteratively reduces a sequence or a mapping to a single
value using an arrow function, so as to reduce it to a single value. The arrow
function receives the return value of the previous iteration and the current
value of the sequence or mapping:

.. code-block:: twig

    {% set numbers = [1, 2, 3] %}

    {{ numbers|reduce((carry, v) => carry + v) }}
    {# output 6 #}

The ``reduce`` filter takes an ``initial`` value as a second argument:

.. code-block:: twig

    {{ numbers|reduce((carry, v) => carry + v, 10) }}
    {# output 16 #}

Note that the arrow function has access to the current context.

Arguments
---------

* ``arrow``: The arrow function
* ``initial``: The initial value
", "vendor/twig/twig/doc/filters/reduce.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/reduce.rst");
    }
}
