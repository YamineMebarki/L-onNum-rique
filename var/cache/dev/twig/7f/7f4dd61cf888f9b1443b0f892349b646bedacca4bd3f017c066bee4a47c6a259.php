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

/* vendor/twig/twig/doc/filters/format_date.rst */
class __TwigTemplate_de2e26d2715cae1339e38fef7f4451c494a91dc9ae477ec36049fa9b60d987c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/format_date.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/format_date.rst"));

        // line 1
        echo "``format_date``
===============

.. versionadded:: 2.12
    The ``format_date`` filter was added in Twig 2.12.

The ``format_date`` filter formats a date. It behaves in the exact same way as
the ``format_datetime`` filter, but without the time.

.. note::

    The ``format_date`` filter is part of the ``IntlExtension`` which is not
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
* ``dateFormat``: The date format
* ``pattern``: A date time pattern
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/format_date.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``format_date``
===============

.. versionadded:: 2.12
    The ``format_date`` filter was added in Twig 2.12.

The ``format_date`` filter formats a date. It behaves in the exact same way as
the ``format_datetime`` filter, but without the time.

.. note::

    The ``format_date`` filter is part of the ``IntlExtension`` which is not
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
* ``dateFormat``: The date format
* ``pattern``: A date time pattern
", "vendor/twig/twig/doc/filters/format_date.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/format_date.rst");
    }
}
