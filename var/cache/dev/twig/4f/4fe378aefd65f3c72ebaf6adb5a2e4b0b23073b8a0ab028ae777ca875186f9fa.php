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

/* vendor/twig/twig/doc/filters/length.rst */
class __TwigTemplate_72ba85e1fbb00b40c2bea1331f894e58a45e205e8d0d3cc76e78ebed133c8039 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/length.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/length.rst"));

        // line 1
        echo "``length``
==========

.. versionadded:: 2.3

    Support for the ``__toString()`` magic method has been added in Twig 2.3.

The ``length`` filter returns the number of items of a sequence or mapping, or
the length of a string.

For objects that implement the ``Countable`` interface, ``length`` will use the
return value of the ``count()`` method.

For objects that implement the ``__toString()`` magic method (and not ``Countable``),
it will return the length of the string provided by that method.

For objects that implement the ``IteratorAggregate`` interface, ``length`` will use the return value of the ``iterator_count()`` method.

.. code-block:: twig

    ";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 21, $this->source); })())) > 10)) {
            // line 22
            echo "        ...
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/length.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``length``
==========

.. versionadded:: 2.3

    Support for the ``__toString()`` magic method has been added in Twig 2.3.

The ``length`` filter returns the number of items of a sequence or mapping, or
the length of a string.

For objects that implement the ``Countable`` interface, ``length`` will use the
return value of the ``count()`` method.

For objects that implement the ``__toString()`` magic method (and not ``Countable``),
it will return the length of the string provided by that method.

For objects that implement the ``IteratorAggregate`` interface, ``length`` will use the return value of the ``iterator_count()`` method.

.. code-block:: twig

    {% if users|length > 10 %}
        ...
    {% endif %}
", "vendor/twig/twig/doc/filters/length.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/length.rst");
    }
}
