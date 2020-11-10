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

/* vendor/twig/twig/doc/filters/trim.rst */
class __TwigTemplate_dbae3288491c012dfcb1f6da097db0112f95588b6732018171615b023c8a4c3a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/trim.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/trim.rst"));

        // line 1
        echo "``trim``
========

The ``trim`` filter strips whitespace (or other characters) from the beginning
and end of a string:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_trim_filter("  I like Twig.  "), "html", null, true);
        echo "

    ";
        // line 12
        echo "
    ";
        // line 13
        echo twig_escape_filter($this->env, twig_trim_filter("  I like Twig.", "."), "html", null, true);
        echo "

    ";
        // line 16
        echo "
    ";
        // line 17
        echo twig_escape_filter($this->env, twig_trim_filter("  I like Twig.  ", null, "left"), "html", null, true);
        echo "

    ";
        // line 20
        echo "
    ";
        // line 21
        echo twig_escape_filter($this->env, twig_trim_filter("  I like Twig.  ", " ", "right"), "html", null, true);
        echo "

    ";
        // line 24
        echo "
.. note::

    Internally, Twig uses the PHP `trim`_, `ltrim`_, and `rtrim`_ functions.

Arguments
---------

* ``character_mask``: The characters to strip

* ``side``: The default is to strip from the left and the right (`both`) sides, but `left`
  and `right` will strip from either the left side or right side only

.. _`trim`: https://secure.php.net/trim
.. _`ltrim`: https://secure.php.net/ltrim
.. _`rtrim`: https://secure.php.net/rtrim
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/trim.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  77 => 21,  74 => 20,  69 => 17,  66 => 16,  61 => 13,  58 => 12,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``trim``
========

The ``trim`` filter strips whitespace (or other characters) from the beginning
and end of a string:

.. code-block:: twig

    {{ '  I like Twig.  '|trim }}

    {# outputs 'I like Twig.' #}

    {{ '  I like Twig.'|trim('.') }}

    {# outputs '  I like Twig' #}

    {{ '  I like Twig.  '|trim(side='left') }}

    {# outputs 'I like Twig.  ' #}

    {{ '  I like Twig.  '|trim(' ', 'right') }}

    {# outputs '  I like Twig.' #}

.. note::

    Internally, Twig uses the PHP `trim`_, `ltrim`_, and `rtrim`_ functions.

Arguments
---------

* ``character_mask``: The characters to strip

* ``side``: The default is to strip from the left and the right (`both`) sides, but `left`
  and `right` will strip from either the left side or right side only

.. _`trim`: https://secure.php.net/trim
.. _`ltrim`: https://secure.php.net/ltrim
.. _`rtrim`: https://secure.php.net/rtrim
", "vendor/twig/twig/doc/filters/trim.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/trim.rst");
    }
}
