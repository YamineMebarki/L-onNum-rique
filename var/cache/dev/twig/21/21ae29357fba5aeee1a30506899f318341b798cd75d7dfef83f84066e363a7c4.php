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

/* vendor/twig/twig/doc/filters/format.rst */
class __TwigTemplate_d56e395a0d30a4addbea6c4e2227e77e4172542072788a073861e7f5c172537e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/format.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/format.rst"));

        // line 1
        echo "``format``
==========

The ``format`` filter formats a given string by replacing the placeholders
(placeholders follows the `sprintf`_ notation):

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, sprintf("I like %s and %s.", (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 9, $this->source); })()), "bar"), "html", null, true);
        echo "

    ";
        // line 13
        echo "
.. _`sprintf`: https://secure.php.net/sprintf

.. seealso:: :doc:`replace<replace>`
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/format.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``format``
==========

The ``format`` filter formats a given string by replacing the placeholders
(placeholders follows the `sprintf`_ notation):

.. code-block:: twig

    {{ \"I like %s and %s.\"|format(foo, \"bar\") }}

    {# outputs I like foo and bar
       if the foo parameter equals to the foo string. #}

.. _`sprintf`: https://secure.php.net/sprintf

.. seealso:: :doc:`replace<replace>`
", "vendor/twig/twig/doc/filters/format.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/format.rst");
    }
}
