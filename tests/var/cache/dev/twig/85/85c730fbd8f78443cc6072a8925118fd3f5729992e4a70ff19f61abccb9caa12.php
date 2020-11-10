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

/* vendor/twig/twig/doc/functions/date.rst */
class __TwigTemplate_809a4622153dcf07e9a29e559751aa333594d719601a7290d55ea72e0bffb2e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/date.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/date.rst"));

        // line 1
        echo "``date``
========

Converts an argument to a date to allow date comparison:

.. code-block:: twig

    ";
        // line 8
        if ((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "created_at", [], "any", false, false, false, 8)) < twig_date_converter($this->env, "-2days"))) {
            // line 9
            echo "        ";
            // line 10
            echo "    ";
        }
        // line 11
        echo "
The argument must be in one of PHP’s supported `date and time formats`_.

You can pass a timezone as the second argument:

.. code-block:: twig

    ";
        // line 18
        if ((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "created_at", [], "any", false, false, false, 18)) < twig_date_converter($this->env, "-2days", "Europe/Paris"))) {
            // line 19
            echo "        ";
            // line 20
            echo "    ";
        }
        // line 21
        echo "
If no argument is passed, the function returns the current date:

.. code-block:: twig

    ";
        // line 26
        if ((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "created_at", [], "any", false, false, false, 26)) < twig_date_converter($this->env))) {
            // line 27
            echo "        ";
            // line 28
            echo "    ";
        }
        // line 29
        echo "
.. note::

    You can set the default timezone globally by calling ``setTimezone()`` on
    the ``core`` extension instance:

    .. code-block:: php

        \$twig = new \\Twig\\Environment(\$loader);
        \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setTimezone('Europe/Paris');

Arguments
---------

* ``date``:     The date
* ``timezone``: The timezone

.. _`date and time formats`: https://secure.php.net/manual/en/datetime.formats.php
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/functions/date.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  86 => 28,  84 => 27,  82 => 26,  75 => 21,  72 => 20,  70 => 19,  68 => 18,  59 => 11,  56 => 10,  54 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``date``
========

Converts an argument to a date to allow date comparison:

.. code-block:: twig

    {% if date(user.created_at) < date('-2days') %}
        {# do something #}
    {% endif %}

The argument must be in one of PHP’s supported `date and time formats`_.

You can pass a timezone as the second argument:

.. code-block:: twig

    {% if date(user.created_at) < date('-2days', 'Europe/Paris') %}
        {# do something #}
    {% endif %}

If no argument is passed, the function returns the current date:

.. code-block:: twig

    {% if date(user.created_at) < date() %}
        {# always! #}
    {% endif %}

.. note::

    You can set the default timezone globally by calling ``setTimezone()`` on
    the ``core`` extension instance:

    .. code-block:: php

        \$twig = new \\Twig\\Environment(\$loader);
        \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setTimezone('Europe/Paris');

Arguments
---------

* ``date``:     The date
* ``timezone``: The timezone

.. _`date and time formats`: https://secure.php.net/manual/en/datetime.formats.php
", "vendor/twig/twig/doc/functions/date.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/functions/date.rst");
    }
}
