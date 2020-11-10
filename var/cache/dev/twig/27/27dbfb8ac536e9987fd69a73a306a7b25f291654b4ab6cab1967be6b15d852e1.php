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

/* vendor/twig/twig/doc/filters/date_modify.rst */
class __TwigTemplate_05aeea3fdfeb5bbc8668660c8dc9b9ff286e6f93da22da399dcf2f5e65eed6e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/date_modify.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/date_modify.rst"));

        // line 1
        echo "``date_modify``
===============

The ``date_modify`` filter modifies a date with a given modifier string:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "published_at", [], "any", false, false, false, 8), "+1 day"), "m/d/Y"), "html", null, true);
        echo "

The ``date_modify`` filter accepts strings (it must be in a format supported
by the `strtotime`_ function) or `DateTime`_ instances. You can combine
it with the :doc:`date<date>` filter for formatting.

Arguments
---------

* ``modifier``: The modifier

.. _`strtotime`: https://secure.php.net/strtotime
.. _`DateTime`:  https://secure.php.net/DateTime
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/date_modify.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``date_modify``
===============

The ``date_modify`` filter modifies a date with a given modifier string:

.. code-block:: twig

    {{ post.published_at|date_modify(\"+1 day\")|date(\"m/d/Y\") }}

The ``date_modify`` filter accepts strings (it must be in a format supported
by the `strtotime`_ function) or `DateTime`_ instances. You can combine
it with the :doc:`date<date>` filter for formatting.

Arguments
---------

* ``modifier``: The modifier

.. _`strtotime`: https://secure.php.net/strtotime
.. _`DateTime`:  https://secure.php.net/DateTime
", "vendor/twig/twig/doc/filters/date_modify.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/date_modify.rst");
    }
}
