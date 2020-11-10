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

/* vendor/twig/twig/doc/functions/include.rst */
class __TwigTemplate_3dd28b8b55f7465d2d398fcf6762742aa59f3b9a02173950ee0f9ad65ab43bac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/include.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/functions/include.rst"));

        // line 1
        echo "``include``
===========

The ``include`` function returns the rendered content of a template:

.. code-block:: twig

    ";
        // line 8
        echo twig_include($this->env, $context, "template.html");
        echo "
    ";
        // line 9
        echo twig_include($this->env, $context, (isset($context["some_var"]) || array_key_exists("some_var", $context) ? $context["some_var"] : (function () { throw new RuntimeError('Variable "some_var" does not exist.', 9, $this->source); })()));
        echo "

Included templates have access to the variables of the active context.

If you are using the filesystem loader, the templates are looked for in the
paths defined by it.

The context is passed by default to the template but you can also pass
additional variables:

.. code-block:: twig

    ";
        // line 22
        echo "    ";
        echo twig_include($this->env, $context, "template.html", ["foo" => "bar"]);
        echo "

You can disable access to the context by setting ``with_context`` to
``false``:

.. code-block:: twig

    ";
        // line 30
        echo "    ";
        echo twig_include($this->env, $context, "template.html", ["foo" => "bar"], false);
        echo "

.. code-block:: twig

    ";
        // line 35
        echo "    ";
        echo twig_include($this->env, $context, "template.html", array(), false);
        echo "

And if the expression evaluates to a ``\\Twig\\Template`` or a
``\\Twig\\TemplateWrapper`` instance, Twig will use it directly::

    // ";
        // line 40
        echo twig_include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 40, $this->source); })()));
        echo "

    \$template = \$twig->load('some_template.twig');

    \$twig->display('template.twig', ['template' => \$template]);

When you set the ``ignore_missing`` flag, Twig will return an empty string if
the template does not exist:

.. code-block:: twig

    ";
        // line 51
        echo twig_include($this->env, $context, "sidebar.html", array(), true, true);
        echo "

You can also provide a list of templates that are checked for existence before
inclusion. The first template that exists will be rendered:

.. code-block:: twig

    ";
        // line 58
        echo twig_include($this->env, $context, [0 => "page_detailed.html", 1 => "page.html"]);
        echo "

If ``ignore_missing`` is set, it will fall back to rendering nothing if none
of the templates exist, otherwise it will throw an exception.

When including a template created by an end user, you should consider
sandboxing it:

.. code-block:: twig

    ";
        // line 68
        echo twig_include($this->env, $context, "page.html", array(), true, false, true);
        echo "

Arguments
---------

* ``template``:       The template to render
* ``variables``:      The variables to pass to the template
* ``with_context``:   Whether to pass the current context variables or not
* ``ignore_missing``: Whether to ignore missing templates or not
* ``sandboxed``:      Whether to sandbox the template or not
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/functions/include.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 68,  123 => 58,  113 => 51,  99 => 40,  90 => 35,  82 => 30,  71 => 22,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``include``
===========

The ``include`` function returns the rendered content of a template:

.. code-block:: twig

    {{ include('template.html') }}
    {{ include(some_var) }}

Included templates have access to the variables of the active context.

If you are using the filesystem loader, the templates are looked for in the
paths defined by it.

The context is passed by default to the template but you can also pass
additional variables:

.. code-block:: twig

    {# template.html will have access to the variables from the current context and the additional ones provided #}
    {{ include('template.html', {foo: 'bar'}) }}

You can disable access to the context by setting ``with_context`` to
``false``:

.. code-block:: twig

    {# only the foo variable will be accessible #}
    {{ include('template.html', {foo: 'bar'}, with_context = false) }}

.. code-block:: twig

    {# no variables will be accessible #}
    {{ include('template.html', with_context = false) }}

And if the expression evaluates to a ``\\Twig\\Template`` or a
``\\Twig\\TemplateWrapper`` instance, Twig will use it directly::

    // {{ include(template) }}

    \$template = \$twig->load('some_template.twig');

    \$twig->display('template.twig', ['template' => \$template]);

When you set the ``ignore_missing`` flag, Twig will return an empty string if
the template does not exist:

.. code-block:: twig

    {{ include('sidebar.html', ignore_missing = true) }}

You can also provide a list of templates that are checked for existence before
inclusion. The first template that exists will be rendered:

.. code-block:: twig

    {{ include(['page_detailed.html', 'page.html']) }}

If ``ignore_missing`` is set, it will fall back to rendering nothing if none
of the templates exist, otherwise it will throw an exception.

When including a template created by an end user, you should consider
sandboxing it:

.. code-block:: twig

    {{ include('page.html', sandboxed = true) }}

Arguments
---------

* ``template``:       The template to render
* ``variables``:      The variables to pass to the template
* ``with_context``:   Whether to pass the current context variables or not
* ``ignore_missing``: Whether to ignore missing templates or not
* ``sandboxed``:      Whether to sandbox the template or not
", "vendor/twig/twig/doc/functions/include.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/functions/include.rst");
    }
}
