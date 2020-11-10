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

/* vendor/twig/twig/doc/tags/include.rst */
class __TwigTemplate_2f26a0ab9de0b46a6b93dd2591a56ca10a54a93c9a036ae5ce33c6fee75d8363 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_d11ed5302b279d8a3950721516a9151816ef8a3145457a6a4a093e7b5bed998d' => [$this, 'block___internal_d11ed5302b279d8a3950721516a9151816ef8a3145457a6a4a093e7b5bed998d'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/include.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/include.rst"));

        // line 1
        echo "``include``
===========

The ``include`` statement includes a template and returns the rendered content
of that file:

.. code-block:: twig

    ";
        // line 9
        $this->loadTemplate("header.html", "vendor/twig/twig/doc/tags/include.rst", 9)->display($context);
        // line 10
        echo "        Body
    ";
        // line 11
        $this->loadTemplate("footer.html", "vendor/twig/twig/doc/tags/include.rst", 11)->display($context);
        // line 12
        echo "
.. note::

    As of Twig 1.12, it is recommended to use the
    :doc:`include<../functions/include>` function instead as it provides the
    same features with a bit more flexibility:

    * The ``include`` function is semantically more \"correct\" (including a
      template outputs its rendered contents in the current scope; a tag should
      not display anything);

    * The ``include`` function is more \"composable\":

      .. code-block:: twig

          ";
        // line 28
        echo "          ";
        ob_start();
        // line 29
        echo "              ";
        $this->loadTemplate("template.html", "vendor/twig/twig/doc/tags/include.rst", 29)->display($context);
        // line 30
        echo "          ";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "          ";
        // line 32
        echo "          ";
        $context["content"] = twig_include($this->env, $context, "template.html");
        // line 33
        echo "
          ";
        // line 35
        echo "          ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env,         $this->renderBlock("__internal_d11ed5302b279d8a3950721516a9151816ef8a3145457a6a4a093e7b5bed998d", $context, $blocks)), "html", null, true);
        // line 38
        echo "          ";
        // line 39
        echo "          ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_include($this->env, $context, "template.html")), "html", null, true);
        echo "

    * The ``include`` function does not impose any specific order for
      arguments thanks to :ref:`named arguments <named-arguments>`.

Included templates have access to the variables of the active context.

If you are using the filesystem loader, the templates are looked for in the
paths defined by it.

You can add additional variables by passing them after the ``with`` keyword:

.. code-block:: twig

    ";
        // line 54
        echo "    ";
        $this->loadTemplate("template.html", "vendor/twig/twig/doc/tags/include.rst", 54)->display(twig_array_merge($context, ["foo" => "bar"]));
        // line 55
        echo "
    ";
        // line 56
        $context["vars"] = ["foo" => "bar"];
        // line 57
        echo "    ";
        $this->loadTemplate("template.html", "vendor/twig/twig/doc/tags/include.rst", 57)->display(twig_array_merge($context, (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 57, $this->source); })())));
        // line 58
        echo "
You can disable access to the context by appending the ``only`` keyword:

.. code-block:: twig

    ";
        // line 64
        echo "    ";
        $this->loadTemplate("template.html", "vendor/twig/twig/doc/tags/include.rst", 64)->display(twig_to_array(["foo" => "bar"]));
        // line 65
        echo "
.. code-block:: twig

    ";
        // line 69
        echo "    ";
        $this->loadTemplate("template.html", "vendor/twig/twig/doc/tags/include.rst", 69)->display([]);
        // line 70
        echo "
.. tip::

    When including a template created by an end user, you should consider
    sandboxing it. More information in the :doc:`Twig for Developers<../api>`
    chapter and in the :doc:`sandbox<../tags/sandbox>` tag documentation.

The template name can be any valid Twig expression:

.. code-block:: twig

    ";
        // line 81
        $this->loadTemplate((isset($context["some_var"]) || array_key_exists("some_var", $context) ? $context["some_var"] : (function () { throw new RuntimeError('Variable "some_var" does not exist.', 81, $this->source); })()), "vendor/twig/twig/doc/tags/include.rst", 81)->display($context);
        // line 82
        echo "    ";
        $this->loadTemplate((((isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 82, $this->source); })())) ? ("ajax.html") : ("not_ajax.html")), "vendor/twig/twig/doc/tags/include.rst", 82)->display($context);
        // line 83
        echo "
And if the expression evaluates to a ``\\Twig\\Template`` or a
``\\Twig\\TemplateWrapper`` instance, Twig will use it directly::

    // ";
        // line 87
        $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 87, $this->source); })()), "vendor/twig/twig/doc/tags/include.rst", 87)->display($context);
        // line 88
        echo "
    \$template = \$twig->load('some_template.twig');

    \$twig->display('template.twig', ['template' => \$template]);

You can mark an include with ``ignore missing`` in which case Twig will ignore
the statement if the template to be included does not exist. It has to be
placed just after the template name. Here some valid examples:

.. code-block:: twig

    ";
        // line 99
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("sidebar.html", "vendor/twig/twig/doc/tags/include.rst", 99);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 100
        echo "    ";
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
        try {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             $this->loadTemplate("sidebar.html", "vendor/twig/twig/doc/tags/include.rst", 100);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display(twig_array_merge($context, ["foo" => "bar"]));
        }
        // line 101
        echo "    ";
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = null;
        try {
            $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =             $this->loadTemplate("sidebar.html", "vendor/twig/twig/doc/tags/include.rst", 101);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) {
            $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b->display([]);
        }
        // line 102
        echo "
You can also provide a list of templates that are checked for existence before
inclusion. The first template that exists will be included:

.. code-block:: twig

    ";
        // line 108
        $this->loadTemplate([0 => "page_detailed.html", 1 => "page.html"], "vendor/twig/twig/doc/tags/include.rst", 108)->display($context);
        // line 109
        echo "
If ``ignore missing`` is given, it will fall back to rendering nothing if none
of the templates exist, otherwise it will throw an exception.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block___internal_d11ed5302b279d8a3950721516a9151816ef8a3145457a6a4a093e7b5bed998d($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_d11ed5302b279d8a3950721516a9151816ef8a3145457a6a4a093e7b5bed998d"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_d11ed5302b279d8a3950721516a9151816ef8a3145457a6a4a093e7b5bed998d"));

        // line 36
        echo "              ";
        $this->loadTemplate("template.html", "vendor/twig/twig/doc/tags/include.rst", 36)->display($context);
        // line 37
        echo "          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/tags/include.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 37,  251 => 36,  241 => 35,  228 => 109,  226 => 108,  218 => 102,  207 => 101,  196 => 100,  186 => 99,  173 => 88,  171 => 87,  165 => 83,  162 => 82,  160 => 81,  147 => 70,  144 => 69,  139 => 65,  136 => 64,  129 => 58,  126 => 57,  124 => 56,  121 => 55,  118 => 54,  100 => 39,  98 => 38,  95 => 35,  92 => 33,  89 => 32,  87 => 31,  84 => 30,  81 => 29,  78 => 28,  61 => 12,  59 => 11,  56 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``include``
===========

The ``include`` statement includes a template and returns the rendered content
of that file:

.. code-block:: twig

    {% include 'header.html' %}
        Body
    {% include 'footer.html' %}

.. note::

    As of Twig 1.12, it is recommended to use the
    :doc:`include<../functions/include>` function instead as it provides the
    same features with a bit more flexibility:

    * The ``include`` function is semantically more \"correct\" (including a
      template outputs its rendered contents in the current scope; a tag should
      not display anything);

    * The ``include`` function is more \"composable\":

      .. code-block:: twig

          {# Store a rendered template in a variable #}
          {% set content %}
              {% include 'template.html' %}
          {% endset %}
          {# vs #}
          {% set content = include('template.html') %}

          {# Filter a rendered template #}
          {% filter upper %}
              {% include 'template.html' %}
          {% endfilter %}
          {# vs #}
          {{ include('template.html')|upper }}

    * The ``include`` function does not impose any specific order for
      arguments thanks to :ref:`named arguments <named-arguments>`.

Included templates have access to the variables of the active context.

If you are using the filesystem loader, the templates are looked for in the
paths defined by it.

You can add additional variables by passing them after the ``with`` keyword:

.. code-block:: twig

    {# template.html will have access to the variables from the current context and the additional ones provided #}
    {% include 'template.html' with {'foo': 'bar'} %}

    {% set vars = {'foo': 'bar'} %}
    {% include 'template.html' with vars %}

You can disable access to the context by appending the ``only`` keyword:

.. code-block:: twig

    {# only the foo variable will be accessible #}
    {% include 'template.html' with {'foo': 'bar'} only %}

.. code-block:: twig

    {# no variables will be accessible #}
    {% include 'template.html' only %}

.. tip::

    When including a template created by an end user, you should consider
    sandboxing it. More information in the :doc:`Twig for Developers<../api>`
    chapter and in the :doc:`sandbox<../tags/sandbox>` tag documentation.

The template name can be any valid Twig expression:

.. code-block:: twig

    {% include some_var %}
    {% include ajax ? 'ajax.html' : 'not_ajax.html' %}

And if the expression evaluates to a ``\\Twig\\Template`` or a
``\\Twig\\TemplateWrapper`` instance, Twig will use it directly::

    // {% include template %}

    \$template = \$twig->load('some_template.twig');

    \$twig->display('template.twig', ['template' => \$template]);

You can mark an include with ``ignore missing`` in which case Twig will ignore
the statement if the template to be included does not exist. It has to be
placed just after the template name. Here some valid examples:

.. code-block:: twig

    {% include 'sidebar.html' ignore missing %}
    {% include 'sidebar.html' ignore missing with {'foo': 'bar'} %}
    {% include 'sidebar.html' ignore missing only %}

You can also provide a list of templates that are checked for existence before
inclusion. The first template that exists will be included:

.. code-block:: twig

    {% include ['page_detailed.html', 'page.html'] %}

If ``ignore missing`` is given, it will fall back to rendering nothing if none
of the templates exist, otherwise it will throw an exception.
", "vendor/twig/twig/doc/tags/include.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/tags/include.rst");
    }
}
