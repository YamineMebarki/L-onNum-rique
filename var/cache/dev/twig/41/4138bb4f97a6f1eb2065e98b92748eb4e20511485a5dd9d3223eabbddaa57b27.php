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

/* vendor/twig/twig/doc/filters/json_encode.rst */
class __TwigTemplate_d3f657859029c18c05fa72a76adf33302de1a8e700ba6563a6055f54f0455eac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/json_encode.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/json_encode.rst"));

        // line 1
        echo "``json_encode``
===============

The ``json_encode`` filter returns the JSON representation of a value:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })())), "html", null, true);
        echo "

.. note::

    Internally, Twig uses the PHP `json_encode`_ function.

Arguments
---------

* ``options``: A bitmask of `json_encode options`_: ``";
        // line 17
        echo twig_escape_filter($this->env, json_encode(        // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), twig_constant("JSON_PRETTY_PRINT")), "html", null, true);
        echo "``.
  Combine constants using :ref:`bitwise operators<template_logic>`:
  ``";
        // line 20
        echo twig_escape_filter($this->env, json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), (twig_constant("JSON_PRETTY_PRINT") | twig_constant("JSON_HEX_QUOT"))), "html", null, true);
        echo "``

.. _`json_encode`: https://secure.php.net/json_encode
.. _`json_encode options`: https://secure.php.net/manual/en/json.constants.php
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/json_encode.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  65 => 18,  64 => 17,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``json_encode``
===============

The ``json_encode`` filter returns the JSON representation of a value:

.. code-block:: twig

    {{ data|json_encode() }}

.. note::

    Internally, Twig uses the PHP `json_encode`_ function.

Arguments
---------

* ``options``: A bitmask of `json_encode options`_: ``{{
  data|json_encode(constant('JSON_PRETTY_PRINT')) }}``.
  Combine constants using :ref:`bitwise operators<template_logic>`:
  ``{{ data|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_HEX_QUOT')) }}``

.. _`json_encode`: https://secure.php.net/json_encode
.. _`json_encode options`: https://secure.php.net/manual/en/json.constants.php
", "vendor/twig/twig/doc/filters/json_encode.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/json_encode.rst");
    }
}
