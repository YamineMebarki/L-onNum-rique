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

/* vendor/twig/twig/doc/filters/format_time.rst */
class __TwigTemplate_71a42bbeadbff8145b2e264eca5f01ae36c4ac86f7330ea70264b0d8dbf949fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/format_time.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/format_time.rst"));

        // line 1
        echo "``format_time``
===============

.. versionadded:: 2.12
    The ``format_time`` filter was added in Twig 2.12.

The ``format_time`` filter formats a time. It behaves in the exact same way as
the ``format_datetime`` filter, but without the date.

.. note::

    The ``format_time`` filter is part of the ``IntlExtension`` which is not
    installed by default. Install it first:

    .. code-block:: bash

        \$ composer req twig/intl-extra

    Then, use the ``twig/extra-bundle`` on Symfony projects or add the extension
    explictly on the Twig environment::

        use Twig\\Extra\\Intl\\IntlExtension;

        \$twig = new \\Twig\\Environment(...);
        \$twig->addExtension(new IntlExtension());

Arguments
---------

* ``locale``: The locale
* ``timeFormat``: The time format
* ``pattern``: A date time pattern
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/format_time.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``format_time``
===============

.. versionadded:: 2.12
    The ``format_time`` filter was added in Twig 2.12.

The ``format_time`` filter formats a time. It behaves in the exact same way as
the ``format_datetime`` filter, but without the date.

.. note::

    The ``format_time`` filter is part of the ``IntlExtension`` which is not
    installed by default. Install it first:

    .. code-block:: bash

        \$ composer req twig/intl-extra

    Then, use the ``twig/extra-bundle`` on Symfony projects or add the extension
    explictly on the Twig environment::

        use Twig\\Extra\\Intl\\IntlExtension;

        \$twig = new \\Twig\\Environment(...);
        \$twig->addExtension(new IntlExtension());

Arguments
---------

* ``locale``: The locale
* ``timeFormat``: The time format
* ``pattern``: A date time pattern
", "vendor/twig/twig/doc/filters/format_time.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/format_time.rst");
    }
}
