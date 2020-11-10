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

/* vendor/twig/twig/doc/tests/empty.rst */
class __TwigTemplate_ac23025dc2b4448b8fd78f9a8d847724b93d79144338888c7c7e45a0886b5235 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tests/empty.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tests/empty.rst"));

        // line 1
        echo "``empty``
=========

.. versionadded:: 2.3

    Support for the ``__toString()`` magic method has been added in Twig 2.3.

``empty`` checks if a variable is an empty string, an empty array, an empty
hash, exactly ``false``, or exactly ``null``.

For objects that implement the ``Countable`` interface, ``empty`` will check the
return value of the ``count()`` method.

For objects that implement the ``__toString()`` magic method (and not ``Countable``),
it will check if an empty string is returned.

.. code-block:: twig

    ";
        // line 19
        if (twig_test_empty((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "        ...
    ";
        }
        // line 22
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/tests/empty.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  65 => 20,  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``empty``
=========

.. versionadded:: 2.3

    Support for the ``__toString()`` magic method has been added in Twig 2.3.

``empty`` checks if a variable is an empty string, an empty array, an empty
hash, exactly ``false``, or exactly ``null``.

For objects that implement the ``Countable`` interface, ``empty`` will check the
return value of the ``count()`` method.

For objects that implement the ``__toString()`` magic method (and not ``Countable``),
it will check if an empty string is returned.

.. code-block:: twig

    {% if foo is empty %}
        ...
    {% endif %}

", "vendor/twig/twig/doc/tests/empty.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/tests/empty.rst");
    }
}
