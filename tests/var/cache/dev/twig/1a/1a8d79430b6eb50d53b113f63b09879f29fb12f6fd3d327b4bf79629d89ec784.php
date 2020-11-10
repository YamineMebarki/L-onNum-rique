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

/* vendor/twig/twig/doc/tags/apply.rst */
class __TwigTemplate_9b678b6831c0ab9bc7b2765bd24c4a5945fac8c7f0973b659c41ab4cddae5745 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/apply.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/apply.rst"));

        // line 1
        echo "``apply``
=========

.. versionadded:: 2.9
    The ``apply`` tag was added in Twig 2.9.

The ``apply`` tag allows you to apply Twig filters on a block of template data:

.. code-block:: twig

    ";
        // line 11
        $___internal_57560c806295caa5d175b6cb04986c94b46660fe5da75f7706f2fa81504951af_ = ('' === $tmp = "        This text becomes uppercase
    ") ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $___internal_57560c806295caa5d175b6cb04986c94b46660fe5da75f7706f2fa81504951af_), "html", null, true);
        // line 14
        echo "
You can also chain filters and pass arguments to them:

.. code-block:: twig

    ";
        // line 19
        $___internal_bab2303df4ab5da132474436e4a73f651afb5165ff5f2fddf25fd3349f37552c_ = ('' === $tmp = "        <strong>SOME TEXT</strong>
    ") ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $___internal_bab2303df4ab5da132474436e4a73f651afb5165ff5f2fddf25fd3349f37552c_), "html");
        // line 22
        echo "
    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/tags/apply.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  66 => 19,  59 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``apply``
=========

.. versionadded:: 2.9
    The ``apply`` tag was added in Twig 2.9.

The ``apply`` tag allows you to apply Twig filters on a block of template data:

.. code-block:: twig

    {% apply upper %}
        This text becomes uppercase
    {% endapply %}

You can also chain filters and pass arguments to them:

.. code-block:: twig

    {% apply lower|escape('html') %}
        <strong>SOME TEXT</strong>
    {% endapply %}

    {# outputs \"&lt;strong&gt;some text&lt;/strong&gt;\" #}
", "vendor/twig/twig/doc/tags/apply.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/tags/apply.rst");
    }
}
