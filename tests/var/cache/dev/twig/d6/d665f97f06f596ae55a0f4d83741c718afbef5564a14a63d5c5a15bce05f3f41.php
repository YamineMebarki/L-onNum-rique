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

/* vendor/twig/twig/doc/filters/url_encode.rst */
class __TwigTemplate_df72be2b377583a2ca9b2cd93b86692a935da2d176c6df684fdb511fee66d6ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/url_encode.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/url_encode.rst"));

        // line 1
        echo "``url_encode``
==============

The ``url_encode`` filter percent encodes a given string as URL segment
or an array as query string:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_urlencode_filter("path-seg*ment"), "html", null, true);
        echo "
    ";
        // line 11
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, twig_urlencode_filter("string with spaces"), "html", null, true);
        echo "
    ";
        // line 14
        echo "
    ";
        // line 15
        echo twig_escape_filter($this->env, twig_urlencode_filter(["param" => "value", "foo" => "bar"]), "html", null, true);
        echo "
    ";
        // line 17
        echo "
.. note::

    Internally, Twig uses the PHP ``rawurlencode``.

.. _`rawurlencode`: https://secure.php.net/rawurlencode
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/url_encode.rst";
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
        return new Source("``url_encode``
==============

The ``url_encode`` filter percent encodes a given string as URL segment
or an array as query string:

.. code-block:: twig

    {{ \"path-seg*ment\"|url_encode }}
    {# outputs \"path-seg%2Ament\" #}

    {{ \"string with spaces\"|url_encode }}
    {# outputs \"string%20with%20spaces\" #}

    {{ {'param': 'value', 'foo': 'bar'}|url_encode }}
    {# outputs \"param=value&foo=bar\" #}

.. note::

    Internally, Twig uses the PHP ``rawurlencode``.

.. _`rawurlencode`: https://secure.php.net/rawurlencode
", "vendor/twig/twig/doc/filters/url_encode.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/url_encode.rst");
    }
}
