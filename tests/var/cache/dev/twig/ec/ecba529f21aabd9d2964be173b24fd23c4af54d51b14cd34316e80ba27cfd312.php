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

/* vendor/twig/twig/doc/functions/dump.rst */
class __TwigTemplate_35a961a9ab845c69220ca9d92fc2423a587a0d57f3de56507228f8dde7b844ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/dump.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/dump.rst"));

        // line 1
        echo "``dump``
========

The ``dump`` function dumps information about a template variable. This is
mostly useful to debug a template that does not behave as expected by
introspecting its variables:

.. code-block:: twig

    ";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()));
        echo "

.. note::

    The ``dump`` function is not available by default. You must add the
    ``\\Twig\\Extension\\DebugExtension`` extension explicitly when creating your Twig
    environment::

        \$twig = new \\Twig\\Environment(\$loader, [
            'debug' => true,
            // ...
        ]);
        \$twig->addExtension(new \\Twig\\Extension\\DebugExtension());

    Even when enabled, the ``dump`` function won't display anything if the
    ``debug`` option on the environment is not enabled (to avoid leaking debug
    information on a production server).

In an HTML context, wrap the output with a ``pre`` tag to make it easier to
read:

.. code-block:: twig

    <pre>
        ";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()));
        echo "
    </pre>

.. tip::

    Using a ``pre`` tag is not needed when `XDebug`_ is enabled and
    ``html_errors`` is ``on``; as a bonus, the output is also nicer with
    XDebug enabled.

You can debug several variables by passing them as additional arguments:

.. code-block:: twig

    ";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 47, $this->source); })()));
        echo "

If you don't pass any value, all variables from the current context are
dumped:

.. code-block:: twig

    ";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context);
        echo "

.. note::

    Internally, Twig uses the PHP `var_dump`_ function.

Arguments
---------

* ``context``: The context to dump

.. _`XDebug`:   https://xdebug.org/docs/display
.. _`var_dump`: https://secure.php.net/var_dump
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/functions/dump.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 54,  97 => 47,  81 => 34,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``dump``
========

The ``dump`` function dumps information about a template variable. This is
mostly useful to debug a template that does not behave as expected by
introspecting its variables:

.. code-block:: twig

    {{ dump(user) }}

.. note::

    The ``dump`` function is not available by default. You must add the
    ``\\Twig\\Extension\\DebugExtension`` extension explicitly when creating your Twig
    environment::

        \$twig = new \\Twig\\Environment(\$loader, [
            'debug' => true,
            // ...
        ]);
        \$twig->addExtension(new \\Twig\\Extension\\DebugExtension());

    Even when enabled, the ``dump`` function won't display anything if the
    ``debug`` option on the environment is not enabled (to avoid leaking debug
    information on a production server).

In an HTML context, wrap the output with a ``pre`` tag to make it easier to
read:

.. code-block:: twig

    <pre>
        {{ dump(user) }}
    </pre>

.. tip::

    Using a ``pre`` tag is not needed when `XDebug`_ is enabled and
    ``html_errors`` is ``on``; as a bonus, the output is also nicer with
    XDebug enabled.

You can debug several variables by passing them as additional arguments:

.. code-block:: twig

    {{ dump(user, categories) }}

If you don't pass any value, all variables from the current context are
dumped:

.. code-block:: twig

    {{ dump() }}

.. note::

    Internally, Twig uses the PHP `var_dump`_ function.

Arguments
---------

* ``context``: The context to dump

.. _`XDebug`:   https://xdebug.org/docs/display
.. _`var_dump`: https://secure.php.net/var_dump
", "vendor/twig/twig/doc/functions/dump.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/functions/dump.rst");
    }
}
