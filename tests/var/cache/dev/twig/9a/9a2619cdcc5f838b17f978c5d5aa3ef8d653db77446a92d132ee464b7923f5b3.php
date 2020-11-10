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

/* vendor/twig/twig/doc/filters/convert_encoding.rst */
class __TwigTemplate_c0b47eba3cbac1e17b5bb145c6edeb27a5a0647865bc0f5d5e9a2bbe8739c9fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/convert_encoding.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/convert_encoding.rst"));

        // line 1
        echo "``convert_encoding``
====================

The ``convert_encoding`` filter converts a string from one encoding to
another. The first argument is the expected output charset and the second one
is the input charset:

.. code-block:: twig

    ";
        // line 10
        echo twig_escape_filter($this->env, twig_convert_encoding((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "UTF-8", "iso-2022-jp"), "html", null, true);
        echo "

.. note::

    This filter relies on the `iconv`_ extension.

Arguments
---------

* ``to``:   The output charset
* ``from``: The input charset

.. _`iconv`: https://secure.php.net/iconv
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/convert_encoding.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``convert_encoding``
====================

The ``convert_encoding`` filter converts a string from one encoding to
another. The first argument is the expected output charset and the second one
is the input charset:

.. code-block:: twig

    {{ data|convert_encoding('UTF-8', 'iso-2022-jp') }}

.. note::

    This filter relies on the `iconv`_ extension.

Arguments
---------

* ``to``:   The output charset
* ``from``: The input charset

.. _`iconv`: https://secure.php.net/iconv
", "vendor/twig/twig/doc/filters/convert_encoding.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/convert_encoding.rst");
    }
}
