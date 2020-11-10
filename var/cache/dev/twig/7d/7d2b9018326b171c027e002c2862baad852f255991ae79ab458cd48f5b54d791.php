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

/* vendor/twig/twig/doc/functions/random.rst */
class __TwigTemplate_d3930713e6ed8c1adc77cb7f63e965049aab2ea8a89a59912f720dcfdc991264 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/random.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/random.rst"));

        // line 1
        echo "``random``
==========

.. versionadded:: 2.7
    The \"max\" argument was added in Twig 2.7.

The ``random`` function returns a random value depending on the supplied
parameter type:

* a random item from a sequence;
* a random character from a string;
* a random integer between 0 and the integer parameter (inclusive).
* a random integer between the integer parameter (when negative) and 0 (inclusive).
* a random integer between the first integer and the second integer parameter (inclusive).

.. code-block:: twig

    ";
        // line 18
        echo twig_escape_filter($this->env, twig_random($this->env, [0 => "apple", 1 => "orange", 2 => "citrus"]), "html", null, true);
        echo " ";
        // line 19
        echo "    ";
        echo twig_escape_filter($this->env, twig_random($this->env, "ABC"), "html", null, true);
        echo "                         ";
        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "                              ";
        // line 21
        echo "    ";
        echo twig_escape_filter($this->env, twig_random($this->env, 5), "html", null, true);
        echo "                             ";
        // line 22
        echo "    ";
        echo twig_escape_filter($this->env, twig_random($this->env, 50, 100), "html", null, true);
        echo "                       ";
        // line 23
        echo "
Arguments
---------

* ``values``: The values
* ``max``: The max value when values is an integer

.. _`mt_rand`: https://secure.php.net/mt_rand
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/functions/random.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``random``
==========

.. versionadded:: 2.7
    The \"max\" argument was added in Twig 2.7.

The ``random`` function returns a random value depending on the supplied
parameter type:

* a random item from a sequence;
* a random character from a string;
* a random integer between 0 and the integer parameter (inclusive).
* a random integer between the integer parameter (when negative) and 0 (inclusive).
* a random integer between the first integer and the second integer parameter (inclusive).

.. code-block:: twig

    {{ random(['apple', 'orange', 'citrus']) }} {# example output: orange #}
    {{ random('ABC') }}                         {# example output: C #}
    {{ random() }}                              {# example output: 15386094 (works as the native PHP mt_rand function) #}
    {{ random(5) }}                             {# example output: 3 #}
    {{ random(50, 100) }}                       {# example output: 63 #}

Arguments
---------

* ``values``: The values
* ``max``: The max value when values is an integer

.. _`mt_rand`: https://secure.php.net/mt_rand
", "vendor/twig/twig/doc/functions/random.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/functions/random.rst");
    }
}
