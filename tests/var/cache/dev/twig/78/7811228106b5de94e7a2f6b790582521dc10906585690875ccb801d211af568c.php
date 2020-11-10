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

/* vendor/twig/twig/doc/tags/macro.rst */
class __TwigTemplate_7a4e96778729f41426f0c14393c0d5d5f20c05f293c3a2b5b99458d9f8170e79 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/macro.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/macro.rst"));

        // line 1
        echo "``macro``
=========

Macros are comparable with functions in regular programming languages. They
are useful to reuse template fragments to not repeat yourself.

Macros are defined in regular templates.

Imagine having a generic helper template that define how to render HTML forms
via macros (called ``forms.html``):

.. code-block:: twig

    ";
        // line 17
        echo "
    ";
        // line 21
        echo "
Each macro argument can have a default value (here ``text`` is the default value
for ``type`` if not provided in the call).

Macros differ from native PHP functions in a few ways:

* Arguments of a macro are always optional.

* If extra positional arguments are passed to a macro, they end up in the
  special ``varargs`` variable as a list of values.

But as with PHP functions, macros don't have access to the current template
variables.

.. tip::

    You can pass the whole context as an argument by using the special
    ``_context`` variable.

Importing Macros
----------------

There are two ways to import macros. You can import the complete template
containing the macros into a local variable (via the ``import`` tag) or only
import specific macros from the template (via the ``from`` tag).

To import all macros from a template into a local variable, use the ``import``
tag:

.. code-block:: twig

    ";
        // line 52
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.html", "vendor/twig/twig/doc/tags/macro.rst", 52)->unwrap();
        // line 53
        echo "
The above ``import`` call imports the ``forms.html`` file (which can contain
only macros, or a template and some macros), and import the macros as items of
the ``forms`` local variable.

The macros can then be called at will in the *current* template:

.. code-block:: twig

    <p>";
        // line 62
        echo twig_call_macro($macros["forms"], "macro_input", ["username"], 62, $context, $this->getSourceContext());
        echo "</p>
    <p>";
        // line 63
        echo twig_call_macro($macros["forms"], "macro_input", ["password", null, "password"], 63, $context, $this->getSourceContext());
        echo "</p>

Alternatively you can import names from the template into the current namespace
via the ``from`` tag:

.. code-block:: twig

    ";
        // line 70
        $macros["__internal_e1fd8bcdb0cdfdfe3f7edd9ff0c542a4f5630e3999e9e93f917d0996a640c7d3"] = $this->macros["__internal_e1fd8bcdb0cdfdfe3f7edd9ff0c542a4f5630e3999e9e93f917d0996a640c7d3"] = $this->loadTemplate("forms.html", "vendor/twig/twig/doc/tags/macro.rst", 70)->unwrap();
        // line 71
        echo "
    <p>";
        // line 72
        echo twig_call_macro($macros["__internal_e1fd8bcdb0cdfdfe3f7edd9ff0c542a4f5630e3999e9e93f917d0996a640c7d3"], "macro_input", ["password", "", "password"], 72, $context, $this->getSourceContext());
        echo "</p>
    <p>";
        // line 73
        echo twig_call_macro($macros["__internal_e1fd8bcdb0cdfdfe3f7edd9ff0c542a4f5630e3999e9e93f917d0996a640c7d3"], "macro_textarea", ["comment"], 73, $context, $this->getSourceContext());
        echo "</p>

.. tip::

    When macro usages and definitions are in the same template, you don't need to
    import the macros as they are automatically available under the special
    ``_self`` variable:

    .. code-block:: twig

        <p>";
        // line 83
        echo twig_call_macro($macros["_self"], "macro_input", ["password", "", "password"], 83, $context, $this->getSourceContext());
        echo "</p>

        ";
        // line 88
        echo "
    Auto-import is only available as of Twig 2.11. For older versions, import
    macros using the special ``_self`` variable for the template name:

    .. code-block:: twig

        ";
        // line 94
        $macros["forms"] = $this->macros["forms"] = $this;
        // line 95
        echo "
        <p>";
        // line 96
        echo twig_call_macro($macros["forms"], "macro_input", ["username"], 96, $context, $this->getSourceContext());
        echo "</p>

.. note::

    Before Twig 2.11, when you want to use a macro in another macro from the
    same file, you need to import it locally:

    .. code-block:: twig

        ";
        // line 108
        echo "
        ";
        // line 116
        echo "
Macros Scoping
--------------

.. versionadded:: 2.11

    The scoping rules described in this paragraph are implemented as of Twig
    2.11.

The scoping rules are the same whether you imported macros via ``import`` or
``from``.

Imported macros are always **local** to the current template. It means that
macros are available in all blocks and other macros defined in the current
template, but they are not available in included templates or child templates;
you need to explicitely re-import macros in each template.

When calling ``import`` or ``from`` from a ``block`` tag, the imported macros
are only defined in the current block and they override macros defined at the
template level with the same names.

When calling ``import`` or ``from`` from a ``macro`` tag, the imported macros
are only defined in the current macro and they override macros defined at the
template level with the same names.

.. note::

    Before Twig 2.11, it was possible to use macros imported in a block in a
    \"sub-block\". When upgrading to 2.11, you need to either move the import in
    the global scope or reimport the macros explicitly in the \"sub-blocks\".

Checking if a Macro is defined
------------------------------

.. versionadded:: 2.11

    Support for the ``defined`` test on macros was added in Twig 2.11.

You can check if a macro is defined via the ``defined`` test:

.. code-block:: twig

    ";
        // line 158
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "vendor/twig/twig/doc/tags/macro.rst", 158)->unwrap();
        // line 159
        echo "
    ";
        // line 160
        $macros["__internal_9267b791c459cc6c3d6ef36ed733e5120c3f29b82119badbe6fc1051e6a2f2ab"] = $this->macros["__internal_9267b791c459cc6c3d6ef36ed733e5120c3f29b82119badbe6fc1051e6a2f2ab"] = $this->loadTemplate("macros.twig", "vendor/twig/twig/doc/tags/macro.rst", 160)->unwrap();
        // line 161
        echo "
    ";
        // line 162
        if (method_exists($macros["macros"], "macro_hello")) {
            // line 163
            echo "OK
    ";
        }
        // line 165
        echo "
    ";
        // line 166
        if (method_exists($macros["__internal_9267b791c459cc6c3d6ef36ed733e5120c3f29b82119badbe6fc1051e6a2f2ab"], "macro_hello")) {
            // line 167
            echo "OK
    ";
        }
        // line 169
        echo "
Named Macro End-Tags
--------------------

Twig allows you to put the name of the macro after the end tag for better
readability (the name after the ``endmacro`` word must match the macro name):

.. code-block:: twig

    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 178
    public function macro_input(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "input"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "input"));

            // line 179
            echo "        ...
    ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 18
    public function macro_textarea($__name__ = null, $__value__ = null, $__rows__ = 10, $__cols__ = 40, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "rows" => $__rows__,
            "cols" => $__cols__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "textarea"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "textarea"));

            // line 19
            echo "        <textarea name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" cols=\"";
            echo twig_escape_filter($this->env, (isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new RuntimeError('Variable "cols" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })()));
            echo "</textarea>
    ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 109
    public function macro_wrapped_input($__name__ = null, $__value__ = null, $__type__ = null, $__size__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "wrapped_input"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "wrapped_input"));

            // line 110
            echo "            ";
            $macros["forms"] = $this;
            // line 111
            echo "
            <div class=\"field\">
                ";
            // line 113
            echo twig_call_macro($macros["forms"], "macro_input", [(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 113, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 113, $this->source); })()), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 113, $this->source); })()), (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 113, $this->source); })())], 113, $context, $this->getSourceContext());
            echo "
            </div>
        ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/tags/macro.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 113,  370 => 111,  367 => 110,  345 => 109,  321 => 19,  299 => 18,  283 => 179,  265 => 178,  246 => 169,  242 => 167,  240 => 166,  237 => 165,  233 => 163,  231 => 162,  228 => 161,  226 => 160,  223 => 159,  221 => 158,  177 => 116,  174 => 108,  162 => 96,  159 => 95,  157 => 94,  149 => 88,  144 => 83,  131 => 73,  127 => 72,  124 => 71,  122 => 70,  112 => 63,  108 => 62,  97 => 53,  95 => 52,  62 => 21,  59 => 17,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``macro``
=========

Macros are comparable with functions in regular programming languages. They
are useful to reuse template fragments to not repeat yourself.

Macros are defined in regular templates.

Imagine having a generic helper template that define how to render HTML forms
via macros (called ``forms.html``):

.. code-block:: twig

    {% macro input(name, value, type = \"text\", size = 20) %}
        <input type=\"{{ type }}\" name=\"{{ name }}\" value=\"{{ value|e }}\" size=\"{{ size }}\" />
    {% endmacro %}

    {% macro textarea(name, value, rows = 10, cols = 40) %}
        <textarea name=\"{{ name }}\" rows=\"{{ rows }}\" cols=\"{{ cols }}\">{{ value|e }}</textarea>
    {% endmacro %}

Each macro argument can have a default value (here ``text`` is the default value
for ``type`` if not provided in the call).

Macros differ from native PHP functions in a few ways:

* Arguments of a macro are always optional.

* If extra positional arguments are passed to a macro, they end up in the
  special ``varargs`` variable as a list of values.

But as with PHP functions, macros don't have access to the current template
variables.

.. tip::

    You can pass the whole context as an argument by using the special
    ``_context`` variable.

Importing Macros
----------------

There are two ways to import macros. You can import the complete template
containing the macros into a local variable (via the ``import`` tag) or only
import specific macros from the template (via the ``from`` tag).

To import all macros from a template into a local variable, use the ``import``
tag:

.. code-block:: twig

    {% import \"forms.html\" as forms %}

The above ``import`` call imports the ``forms.html`` file (which can contain
only macros, or a template and some macros), and import the macros as items of
the ``forms`` local variable.

The macros can then be called at will in the *current* template:

.. code-block:: twig

    <p>{{ forms.input('username') }}</p>
    <p>{{ forms.input('password', null, 'password') }}</p>

Alternatively you can import names from the template into the current namespace
via the ``from`` tag:

.. code-block:: twig

    {% from 'forms.html' import input as input_field, textarea %}

    <p>{{ input_field('password', '', 'password') }}</p>
    <p>{{ textarea('comment') }}</p>

.. tip::

    When macro usages and definitions are in the same template, you don't need to
    import the macros as they are automatically available under the special
    ``_self`` variable:

    .. code-block:: twig

        <p>{{ _self.input('password', '', 'password') }}</p>

        {% macro input(name, value, type = \"text\", size = 20) %}
            <input type=\"{{ type }}\" name=\"{{ name }}\" value=\"{{ value|e }}\" size=\"{{ size }}\" />
        {% endmacro %}

    Auto-import is only available as of Twig 2.11. For older versions, import
    macros using the special ``_self`` variable for the template name:

    .. code-block:: twig

        {% import _self as forms %}

        <p>{{ forms.input('username') }}</p>

.. note::

    Before Twig 2.11, when you want to use a macro in another macro from the
    same file, you need to import it locally:

    .. code-block:: twig

        {% macro input(name, value, type, size) %}
            <input type=\"{{ type|default('text') }}\" name=\"{{ name }}\" value=\"{{ value|e }}\" size=\"{{ size|default(20) }}\" />
        {% endmacro %}

        {% macro wrapped_input(name, value, type, size) %}
            {% import _self as forms %}

            <div class=\"field\">
                {{ forms.input(name, value, type, size) }}
            </div>
        {% endmacro %}

Macros Scoping
--------------

.. versionadded:: 2.11

    The scoping rules described in this paragraph are implemented as of Twig
    2.11.

The scoping rules are the same whether you imported macros via ``import`` or
``from``.

Imported macros are always **local** to the current template. It means that
macros are available in all blocks and other macros defined in the current
template, but they are not available in included templates or child templates;
you need to explicitely re-import macros in each template.

When calling ``import`` or ``from`` from a ``block`` tag, the imported macros
are only defined in the current block and they override macros defined at the
template level with the same names.

When calling ``import`` or ``from`` from a ``macro`` tag, the imported macros
are only defined in the current macro and they override macros defined at the
template level with the same names.

.. note::

    Before Twig 2.11, it was possible to use macros imported in a block in a
    \"sub-block\". When upgrading to 2.11, you need to either move the import in
    the global scope or reimport the macros explicitly in the \"sub-blocks\".

Checking if a Macro is defined
------------------------------

.. versionadded:: 2.11

    Support for the ``defined`` test on macros was added in Twig 2.11.

You can check if a macro is defined via the ``defined`` test:

.. code-block:: twig

    {% import \"macros.twig\" as macros %}

    {% from \"macros.twig\" import hello %}

    {% if macros.hello is defined -%}
        OK
    {% endif %}

    {% if hello is defined -%}
        OK
    {% endif %}

Named Macro End-Tags
--------------------

Twig allows you to put the name of the macro after the end tag for better
readability (the name after the ``endmacro`` word must match the macro name):

.. code-block:: twig

    {% macro input() %}
        ...
    {% endmacro input %}
", "vendor/twig/twig/doc/tags/macro.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/tags/macro.rst");
    }
}
