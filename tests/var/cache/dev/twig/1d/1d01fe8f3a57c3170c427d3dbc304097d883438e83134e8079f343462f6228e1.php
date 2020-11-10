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

/* vendor/twig/twig/doc/functions/block.rst */
class __TwigTemplate_1d3e7420ec7098284b12d02d162c0e0e5aa1e5f0b78c265dcf3e1cdc7a526e45 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/block.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/block.rst"));

        // line 1
        echo "``block``
=========

When a template uses inheritance and if you want to print a block multiple
times, use the ``block`` function:

.. code-block:: twig

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <h1>";
        // line 11
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>

    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
The ``block`` function can also be used to display one block from another
template:

.. code-block:: twig

    ";
        // line 20
        $this->loadTemplate("common_blocks.twig", "vendor/twig/twig/doc/functions/block.rst", 20)->displayBlock("title", $context);
        echo "

Use the ``defined`` test to check if a block exists in the context of the
current template:

.. code-block:: twig

    ";
        // line 27
        if (        $this->hasBlock("footer", $context, $blocks)) {
            // line 28
            echo "        ...
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if (        $this->loadTemplate("common_blocks.twig", "vendor/twig/twig/doc/functions/block.rst", 31)->hasBlock("footer", $context)) {
            // line 32
            echo "        ...
    ";
        }
        // line 34
        echo "
.. seealso:: :doc:`extends<../tags/extends>`, :doc:`parent<../functions/parent>`
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/functions/block.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 13,  112 => 9,  100 => 34,  96 => 32,  94 => 31,  91 => 30,  87 => 28,  85 => 27,  75 => 20,  67 => 14,  65 => 13,  60 => 11,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``block``
=========

When a template uses inheritance and if you want to print a block multiple
times, use the ``block`` function:

.. code-block:: twig

    <title>{% block title %}{% endblock %}</title>

    <h1>{{ block('title') }}</h1>

    {% block body %}{% endblock %}

The ``block`` function can also be used to display one block from another
template:

.. code-block:: twig

    {{ block(\"title\", \"common_blocks.twig\") }}

Use the ``defined`` test to check if a block exists in the context of the
current template:

.. code-block:: twig

    {% if block(\"footer\") is defined %}
        ...
    {% endif %}

    {% if block(\"footer\", \"common_blocks.twig\") is defined %}
        ...
    {% endif %}

.. seealso:: :doc:`extends<../tags/extends>`, :doc:`parent<../functions/parent>`
", "vendor/twig/twig/doc/functions/block.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/functions/block.rst");
    }
}
