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

/* vendor/twig/twig/doc/filters/split.rst */
class __TwigTemplate_e821690cf905957eab138ebfc572a76033cbe5bc9e42d55ec43b427b1c364d31 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/split.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/split.rst"));

        // line 1
        echo "``split``
=========

The ``split`` filter splits a string by the given delimiter and returns a list
of strings:

.. code-block:: twig

    ";
        // line 9
        $context["foo"] = twig_split_filter($this->env, "one,two,three", ",");
        // line 10
        echo "    ";
        // line 11
        echo "
You can also pass a ``limit`` argument:

* If ``limit`` is positive, the returned array will contain a maximum of
  limit elements with the last element containing the rest of string;

* If ``limit`` is negative, all components except the last -limit are
  returned;

* If ``limit`` is zero, then this is treated as 1.

.. code-block:: twig

    ";
        // line 24
        $context["foo"] = twig_split_filter($this->env, "one,two,three,four,five", ",", 3);
        // line 25
        echo "    ";
        // line 26
        echo "
If the ``delimiter`` is an empty string, then value will be split by equal
chunks. Length is set by the ``limit`` argument (one character by default).

.. code-block:: twig

    ";
        // line 32
        $context["foo"] = twig_split_filter($this->env, "123", "");
        // line 33
        echo "    ";
        // line 34
        echo "
    ";
        // line 35
        $context["bar"] = twig_split_filter($this->env, "aabbcc", "", 2);
        // line 36
        echo "    ";
        // line 37
        echo "
.. note::

    Internally, Twig uses the PHP `explode`_ or `str_split`_ (if delimiter is
    empty) functions for string splitting.

Arguments
---------

* ``delimiter``: The delimiter
* ``limit``:     The limit argument

.. _`explode`:   https://secure.php.net/explode
.. _`str_split`: https://secure.php.net/str_split
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/split.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 37,  93 => 36,  91 => 35,  88 => 34,  86 => 33,  84 => 32,  76 => 26,  74 => 25,  72 => 24,  57 => 11,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``split``
=========

The ``split`` filter splits a string by the given delimiter and returns a list
of strings:

.. code-block:: twig

    {% set foo = \"one,two,three\"|split(',') %}
    {# foo contains ['one', 'two', 'three'] #}

You can also pass a ``limit`` argument:

* If ``limit`` is positive, the returned array will contain a maximum of
  limit elements with the last element containing the rest of string;

* If ``limit`` is negative, all components except the last -limit are
  returned;

* If ``limit`` is zero, then this is treated as 1.

.. code-block:: twig

    {% set foo = \"one,two,three,four,five\"|split(',', 3) %}
    {# foo contains ['one', 'two', 'three,four,five'] #}

If the ``delimiter`` is an empty string, then value will be split by equal
chunks. Length is set by the ``limit`` argument (one character by default).

.. code-block:: twig

    {% set foo = \"123\"|split('') %}
    {# foo contains ['1', '2', '3'] #}

    {% set bar = \"aabbcc\"|split('', 2) %}
    {# bar contains ['aa', 'bb', 'cc'] #}

.. note::

    Internally, Twig uses the PHP `explode`_ or `str_split`_ (if delimiter is
    empty) functions for string splitting.

Arguments
---------

* ``delimiter``: The delimiter
* ``limit``:     The limit argument

.. _`explode`:   https://secure.php.net/explode
.. _`str_split`: https://secure.php.net/str_split
", "vendor/twig/twig/doc/filters/split.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/split.rst");
    }
}
