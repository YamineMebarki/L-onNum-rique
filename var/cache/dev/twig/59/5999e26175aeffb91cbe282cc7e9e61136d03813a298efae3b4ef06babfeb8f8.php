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

/* vendor/twig/twig/doc/tags/filter.rst */
class __TwigTemplate_a82928e52281db6b8d0ea449403c9f83a3da06fa52698e7e299ece0d0d3146d5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_29dad5fefbdcab9c410bb67bdb2caddb0376016b70ac3f5770d1fe7352040628' => [$this, 'block___internal_29dad5fefbdcab9c410bb67bdb2caddb0376016b70ac3f5770d1fe7352040628'],
            '__internal_c88dc34be069dc18086c1dd07bc99926111734619cd43552bec36f5f5d72c69b' => [$this, 'block___internal_c88dc34be069dc18086c1dd07bc99926111734619cd43552bec36f5f5d72c69b'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/filter.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/filter.rst"));

        // line 1
        echo "``filter``
==========

.. note::

    As of Twig 2.9, you should use the ``apply`` tag instead which does the
    same thing except that the wrapped template data is not scoped.

Filter sections allow you to apply regular Twig filters on a block of template
data. Just wrap the code in the special ``filter`` section:

.. code-block:: twig

    ";
        // line 14
        echo twig_escape_filter($this->env, twig_upper_filter($this->env,         $this->renderBlock("__internal_29dad5fefbdcab9c410bb67bdb2caddb0376016b70ac3f5770d1fe7352040628", $context, $blocks)), "html", null, true);
        // line 17
        echo "
You can also chain filters and pass arguments to them:

.. code-block:: twig

    ";
        // line 22
        echo twig_escape_filter($this->env, twig_lower_filter($this->env,         $this->renderBlock("__internal_c88dc34be069dc18086c1dd07bc99926111734619cd43552bec36f5f5d72c69b", $context, $blocks)), "html");
        // line 25
        echo "
    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block___internal_29dad5fefbdcab9c410bb67bdb2caddb0376016b70ac3f5770d1fe7352040628($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_29dad5fefbdcab9c410bb67bdb2caddb0376016b70ac3f5770d1fe7352040628"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_29dad5fefbdcab9c410bb67bdb2caddb0376016b70ac3f5770d1fe7352040628"));

        // line 15
        echo "        This text becomes uppercase
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block___internal_c88dc34be069dc18086c1dd07bc99926111734619cd43552bec36f5f5d72c69b($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_c88dc34be069dc18086c1dd07bc99926111734619cd43552bec36f5f5d72c69b"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_c88dc34be069dc18086c1dd07bc99926111734619cd43552bec36f5f5d72c69b"));

        // line 23
        echo "        <strong>SOME TEXT</strong>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/tags/filter.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 23,  103 => 22,  92 => 15,  82 => 14,  71 => 25,  69 => 22,  62 => 17,  60 => 14,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``filter``
==========

.. note::

    As of Twig 2.9, you should use the ``apply`` tag instead which does the
    same thing except that the wrapped template data is not scoped.

Filter sections allow you to apply regular Twig filters on a block of template
data. Just wrap the code in the special ``filter`` section:

.. code-block:: twig

    {% filter upper %}
        This text becomes uppercase
    {% endfilter %}

You can also chain filters and pass arguments to them:

.. code-block:: twig

    {% filter lower|escape('html') %}
        <strong>SOME TEXT</strong>
    {% endfilter %}

    {# outputs \"&lt;strong&gt;some text&lt;/strong&gt;\" #}
", "vendor/twig/twig/doc/tags/filter.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/tags/filter.rst");
    }
}
