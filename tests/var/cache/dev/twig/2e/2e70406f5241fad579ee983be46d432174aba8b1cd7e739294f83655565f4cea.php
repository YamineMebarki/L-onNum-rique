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

/* vendor/twig/twig/doc/filters/date.rst */
class __TwigTemplate_db96484cd79ac9763b4cb4e97efe4c5f572747548ce4a7dc2d165b198db9fed0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/date.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/date.rst"));

        // line 1
        echo "``date``
========

The ``date`` filter formats a date to a given format:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "published_at", [], "any", false, false, false, 8), "m/d/Y"), "html", null, true);
        echo "

The format specifier is the same as supported by `date`_,
except when the filtered data is of type `DateInterval`_, when the format must conform to
`DateInterval::format`_ instead.

The ``date`` filter accepts strings (it must be in a format supported by the
`strtotime`_ function), `DateTime`_ instances, or `DateInterval`_ instances. For
instance, to display the current date, filter the word \"now\":

.. code-block:: twig

    ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "

To escape words and characters in the date format use ``\\\\`` in front of each
character:

.. code-block:: twig

    ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 27, $this->source); })()), "published_at", [], "any", false, false, false, 27), "F jS \\a\\t g:ia"), "html", null, true);
        echo "

If the value passed to the ``date`` filter is ``null``, it will return the
current date by default. If an empty string is desired instead of the current
date, use a ternary operator:

.. code-block:: twig

    ";
        // line 35
        ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "published_at", [], "any", false, false, false, 35))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "published_at", [], "any", false, false, false, 35), "m/d/Y"), "html", null, true))));
        echo "

If no format is provided, Twig will use the default one: ``F j, Y H:i``. This
default can be changed by calling the ``setDateFormat()`` method on the
``core`` extension instance. The first argument is the default format for
dates and the second one is the default format for date intervals:

.. code-block:: php

    \$twig = new \\Twig\\Environment(\$loader);
    \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setDateFormat('d/m/Y', '%d days');

Timezone
--------

By default, the date is displayed by applying the default timezone (the one
specified in php.ini or declared in Twig -- see below), but you can override
it by explicitly specifying a timezone:

.. code-block:: twig

    ";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 56, $this->source); })()), "published_at", [], "any", false, false, false, 56), "m/d/Y", "Europe/Paris"), "html", null, true);
        echo "

If the date is already a DateTime object, and if you want to keep its current
timezone, pass ``false`` as the timezone value:

.. code-block:: twig

    ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 63, $this->source); })()), "published_at", [], "any", false, false, false, 63), "m/d/Y", false), "html", null, true);
        echo "

The default timezone can also be set globally by calling ``setTimezone()``:

.. code-block:: php

    \$twig = new \\Twig\\Environment(\$loader);
    \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setTimezone('Europe/Paris');

Arguments
---------

* ``format``:   The date format
* ``timezone``: The date timezone

.. _`strtotime`:            https://secure.php.net/strtotime
.. _`DateTime`:             https://secure.php.net/DateTime
.. _`DateInterval`:         https://secure.php.net/DateInterval
.. _`date`:                 https://secure.php.net/date
.. _`DateInterval::format`: https://secure.php.net/DateInterval.format
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/date.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 63,  112 => 56,  88 => 35,  77 => 27,  67 => 20,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``date``
========

The ``date`` filter formats a date to a given format:

.. code-block:: twig

    {{ post.published_at|date(\"m/d/Y\") }}

The format specifier is the same as supported by `date`_,
except when the filtered data is of type `DateInterval`_, when the format must conform to
`DateInterval::format`_ instead.

The ``date`` filter accepts strings (it must be in a format supported by the
`strtotime`_ function), `DateTime`_ instances, or `DateInterval`_ instances. For
instance, to display the current date, filter the word \"now\":

.. code-block:: twig

    {{ \"now\"|date(\"m/d/Y\") }}

To escape words and characters in the date format use ``\\\\`` in front of each
character:

.. code-block:: twig

    {{ post.published_at|date(\"F jS \\\\a\\\\t g:ia\") }}

If the value passed to the ``date`` filter is ``null``, it will return the
current date by default. If an empty string is desired instead of the current
date, use a ternary operator:

.. code-block:: twig

    {{ post.published_at is empty ? \"\" : post.published_at|date(\"m/d/Y\") }}

If no format is provided, Twig will use the default one: ``F j, Y H:i``. This
default can be changed by calling the ``setDateFormat()`` method on the
``core`` extension instance. The first argument is the default format for
dates and the second one is the default format for date intervals:

.. code-block:: php

    \$twig = new \\Twig\\Environment(\$loader);
    \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setDateFormat('d/m/Y', '%d days');

Timezone
--------

By default, the date is displayed by applying the default timezone (the one
specified in php.ini or declared in Twig -- see below), but you can override
it by explicitly specifying a timezone:

.. code-block:: twig

    {{ post.published_at|date(\"m/d/Y\", \"Europe/Paris\") }}

If the date is already a DateTime object, and if you want to keep its current
timezone, pass ``false`` as the timezone value:

.. code-block:: twig

    {{ post.published_at|date(\"m/d/Y\", false) }}

The default timezone can also be set globally by calling ``setTimezone()``:

.. code-block:: php

    \$twig = new \\Twig\\Environment(\$loader);
    \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setTimezone('Europe/Paris');

Arguments
---------

* ``format``:   The date format
* ``timezone``: The date timezone

.. _`strtotime`:            https://secure.php.net/strtotime
.. _`DateTime`:             https://secure.php.net/DateTime
.. _`DateInterval`:         https://secure.php.net/DateInterval
.. _`date`:                 https://secure.php.net/date
.. _`DateInterval::format`: https://secure.php.net/DateInterval.format
", "vendor/twig/twig/doc/filters/date.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/date.rst");
    }
}
