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

/* vendor/twig/twig/doc/tags/with.rst */
class __TwigTemplate_ef07c0938541ee376923ec0778013c6fd3e898d7097b2b5d9d3d4775a96739d6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/with.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/with.rst"));

        // line 1
        echo "``with``
========

Use the ``with`` tag to create a new inner scope. Variables set within this
scope are not visible outside of the scope:

.. code-block:: twig

    ";
        // line 9
        $context['_parent'] = $context;
        // line 10
        echo "        ";
        $context["foo"] = 42;
        // line 11
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        // line 12
        echo "    ";
        $context = $context['_parent'];
        // line 13
        echo "    foo is not visible here any longer

Instead of defining variables at the beginning of the scope, you can pass a
hash of variables you want to define in the ``with`` tag; the previous example
is equivalent to the following one:

.. code-block:: twig

    ";
        // line 21
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ["foo" => 42];
        if (!twig_test_iterable($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 21, $this->getSourceContext());
        }
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_to_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4));
        // line 22
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        // line 23
        echo "    ";
        $context = $context['_parent'];
        // line 24
        echo "    foo is not visible here any longer

    ";
        // line 27
        echo "    ";
        $context["vars"] = ["foo" => 42];
        // line 28
        echo "    ";
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 28, $this->source); })());
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 28, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        // line 29
        echo "        ...
    ";
        $context = $context['_parent'];
        // line 31
        echo "
By default, the inner scope has access to the outer scope context; you can
disable this behavior by appending the ``only`` keyword:

.. code-block:: twig

    ";
        // line 37
        $context["bar"] = "bar";
        // line 38
        echo "    ";
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ["foo" => 42];
        if (!twig_test_iterable($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 38, $this->getSourceContext());
        }
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_to_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b);
        $context = ['_parent' => $context];
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b));
        // line 39
        echo "        ";
        // line 40
        echo "        ";
        // line 41
        echo "    ";
        $context = $context['_parent'];
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/tags/with.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  131 => 40,  129 => 39,  120 => 38,  118 => 37,  110 => 31,  106 => 29,  97 => 28,  94 => 27,  90 => 24,  87 => 23,  83 => 22,  75 => 21,  65 => 13,  62 => 12,  58 => 11,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``with``
========

Use the ``with`` tag to create a new inner scope. Variables set within this
scope are not visible outside of the scope:

.. code-block:: twig

    {% with %}
        {% set foo = 42 %}
        {{ foo }} {# foo is 42 here #}
    {% endwith %}
    foo is not visible here any longer

Instead of defining variables at the beginning of the scope, you can pass a
hash of variables you want to define in the ``with`` tag; the previous example
is equivalent to the following one:

.. code-block:: twig

    {% with { foo: 42 } %}
        {{ foo }} {# foo is 42 here #}
    {% endwith %}
    foo is not visible here any longer

    {# it works with any expression that resolves to a hash #}
    {% set vars = { foo: 42 } %}
    {% with vars %}
        ...
    {% endwith %}

By default, the inner scope has access to the outer scope context; you can
disable this behavior by appending the ``only`` keyword:

.. code-block:: twig

    {% set bar = 'bar' %}
    {% with { foo: 42 } only %}
        {# only foo is defined #}
        {# bar is not defined #}
    {% endwith %}
", "vendor/twig/twig/doc/tags/with.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/tags/with.rst");
    }
}
