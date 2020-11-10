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

/* vendor/twig/twig/doc/functions/min.rst */
class __TwigTemplate_5e0897851563d89a7266cc8be64bd4a69945a701dfdcec8e84c6d4f10605e4bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/min.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/min.rst"));

        // line 1
        echo "``min``
=======

``min`` returns the lowest value of a sequence or a set of values:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, min(1, 3, 2), "html", null, true);
        echo "
    ";
        // line 9
        echo twig_escape_filter($this->env, min([0 => 1, 1 => 3, 2 => 2]), "html", null, true);
        echo "

When called with a mapping, min ignores keys and only compares values:

.. code-block:: twig

    ";
        // line 15
        echo twig_escape_filter($this->env, min([2 => "e", 3 => "a", 1 => "b", 5 => "d", 4 => "c"]), "html", null, true);
        echo "
    ";
        // line 17
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/functions/min.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  65 => 15,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``min``
=======

``min`` returns the lowest value of a sequence or a set of values:

.. code-block:: twig

    {{ min(1, 3, 2) }}
    {{ min([1, 3, 2]) }}

When called with a mapping, min ignores keys and only compares values:

.. code-block:: twig

    {{ min({2: \"e\", 3: \"a\", 1: \"b\", 5: \"d\", 4: \"c\"}) }}
    {# returns \"a\" #}

", "vendor/twig/twig/doc/functions/min.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/functions/min.rst");
    }
}
