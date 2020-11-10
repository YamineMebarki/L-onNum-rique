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

/* vendor/twig/twig/doc/filters/first.rst */
class __TwigTemplate_0373ec6aa8a513f78d8360d57a1592ab6efac6aa4b968b3cd59b66fde4139b69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/first.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/first.rst"));

        // line 1
        echo "``first``
=========

The ``first`` filter returns the first \"element\" of a sequence, a mapping, or
a string:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_first($this->env, [0 => 1, 1 => 2, 2 => 3, 3 => 4]), "html", null, true);
        echo "
    ";
        // line 11
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, twig_first($this->env, ["a" => 1, "b" => 2, "c" => 3, "d" => 4]), "html", null, true);
        echo "
    ";
        // line 14
        echo "
    ";
        // line 15
        echo twig_escape_filter($this->env, twig_first($this->env, "1234"), "html", null, true);
        echo "
    ";
        // line 17
        echo "
.. note::

    It also works with objects implementing the `Traversable`_ interface.

.. _`Traversable`: https://secure.php.net/manual/en/class.traversable.php
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/first.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  67 => 15,  64 => 14,  60 => 12,  57 => 11,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``first``
=========

The ``first`` filter returns the first \"element\" of a sequence, a mapping, or
a string:

.. code-block:: twig

    {{ [1, 2, 3, 4]|first }}
    {# outputs 1 #}

    {{ { a: 1, b: 2, c: 3, d: 4 }|first }}
    {# outputs 1 #}

    {{ '1234'|first }}
    {# outputs 1 #}

.. note::

    It also works with objects implementing the `Traversable`_ interface.

.. _`Traversable`: https://secure.php.net/manual/en/class.traversable.php
", "vendor/twig/twig/doc/filters/first.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/first.rst");
    }
}
