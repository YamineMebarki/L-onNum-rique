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

/* vendor/twig/twig/doc/filters/escape.rst */
class __TwigTemplate_00106ff64470004d9879726e09b3bfbaedd362ef57d87d5d0722e6b7d2d73c90 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/escape.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/escape.rst"));

        // line 1
        echo "``escape``
==========

The ``escape`` filter escapes a string using strategies that depend on the
context.

By default, it uses the HTML escaping strategy:

.. code-block:: html+twig

    <p>
        ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "username", [], "any", false, false, false, 12));
        echo "
    </p>

For convenience, the ``e`` filter is defined as an alias:

.. code-block:: html+twig

    <p>
        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "username", [], "any", false, false, false, 20));
        echo "
    </p>

The ``escape`` filter can also be used in other contexts than HTML thanks to
an optional argument which defines the escaping strategy to use:

.. code-block:: twig

    ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "username", [], "any", false, false, false, 28));
        echo "
    ";
        // line 30
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), "html");
        echo "

And here is how to escape variables included in JavaScript code:

.. code-block:: twig

    ";
        // line 36
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), "js"), "html", null, true);
        echo "
    ";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "username", [], "any", false, false, false, 37), "js"), "html", null, true);
        echo "

The ``escape`` filter supports the following escaping strategies for HTML
documents:

* ``html``: escapes a string for the **HTML body** context.

* ``js``: escapes a string for the **JavaScript** context.

* ``css``: escapes a string for the **CSS** context. CSS escaping can be
  applied to any string being inserted into CSS and escapes everything except
  alphanumerics.

* ``url``: escapes a string for the **URI or parameter** contexts. This should
  not be used to escape an entire URI; only a subcomponent being inserted.

* ``html_attr``: escapes a string for the **HTML attribute** context.

Note that doing contextual escaping in HTML documents is hard and choosing the
right escaping strategy depends on a lot of factors. Please, read related
documentation like `the OWASP prevention cheat sheet
<https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.md>`_
to learn more about this topic.

.. note::

    Internally, ``escape`` uses the PHP native `htmlspecialchars`_ function
    for the HTML escaping strategy.

.. caution::

    When using automatic escaping, Twig tries to not double-escape a variable
    when the automatic escaping strategy is the same as the one applied by the
    escape filter; but that does not work when using a variable as the
    escaping strategy:

    .. code-block:: twig

        ";
        // line 75
        $context["strategy"] = "html";
        // line 76
        echo "
        ";
        // line 78
        echo "            ";
        echo twig_escape_filter($this->env, (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 78, $this->source); })()), "html");
        echo "   ";
        // line 79
        echo "            ";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 79, $this->source); })()), (isset($context["strategy"]) || array_key_exists("strategy", $context) ? $context["strategy"] : (function () { throw new RuntimeError('Variable "strategy" does not exist.', 79, $this->source); })())), "html", null, true);
        echo " ";
        // line 80
        echo "        ";
        // line 81
        echo "
    When using a variable as the escaping strategy, you should disable
    automatic escaping:

    .. code-block:: twig

        ";
        // line 87
        $context["strategy"] = "html";
        // line 88
        echo "
        ";
        // line 90
        echo "            ";
        echo twig_escape_filter($this->env, (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 90, $this->source); })()), (isset($context["strategy"]) || array_key_exists("strategy", $context) ? $context["strategy"] : (function () { throw new RuntimeError('Variable "strategy" does not exist.', 90, $this->source); })()));
        echo " ";
        // line 91
        echo "        ";
        // line 92
        echo "
Custom Escapers
---------------

You can define custom escapers by calling the ``setEscaper()`` method on the
``core`` extension instance. The first argument is the escaper name (to be
used in the ``escape`` call) and the second one must be a valid PHP callable:

.. code-block:: php

    \$twig = new \\Twig\\Environment(\$loader);
    \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setEscaper('csv', 'csv_escaper');

When called by Twig, the callable receives the Twig environment instance, the
string to escape, and the charset.

.. note::

    Built-in escapers cannot be overridden mainly because they should be
    considered as the final implementation and also for better performance.

Arguments
---------

* ``strategy``: The escaping strategy
* ``charset``:  The string charset

.. _`htmlspecialchars`: https://secure.php.net/htmlspecialchars
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/filters/escape.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 92,  169 => 91,  165 => 90,  162 => 88,  160 => 87,  152 => 81,  150 => 80,  146 => 79,  142 => 78,  139 => 76,  137 => 75,  96 => 37,  92 => 36,  82 => 30,  78 => 28,  67 => 20,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``escape``
==========

The ``escape`` filter escapes a string using strategies that depend on the
context.

By default, it uses the HTML escaping strategy:

.. code-block:: html+twig

    <p>
        {{ user.username|escape }}
    </p>

For convenience, the ``e`` filter is defined as an alias:

.. code-block:: html+twig

    <p>
        {{ user.username|e }}
    </p>

The ``escape`` filter can also be used in other contexts than HTML thanks to
an optional argument which defines the escaping strategy to use:

.. code-block:: twig

    {{ user.username|e }}
    {# is equivalent to #}
    {{ user.username|e('html') }}

And here is how to escape variables included in JavaScript code:

.. code-block:: twig

    {{ user.username|escape('js') }}
    {{ user.username|e('js') }}

The ``escape`` filter supports the following escaping strategies for HTML
documents:

* ``html``: escapes a string for the **HTML body** context.

* ``js``: escapes a string for the **JavaScript** context.

* ``css``: escapes a string for the **CSS** context. CSS escaping can be
  applied to any string being inserted into CSS and escapes everything except
  alphanumerics.

* ``url``: escapes a string for the **URI or parameter** contexts. This should
  not be used to escape an entire URI; only a subcomponent being inserted.

* ``html_attr``: escapes a string for the **HTML attribute** context.

Note that doing contextual escaping in HTML documents is hard and choosing the
right escaping strategy depends on a lot of factors. Please, read related
documentation like `the OWASP prevention cheat sheet
<https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.md>`_
to learn more about this topic.

.. note::

    Internally, ``escape`` uses the PHP native `htmlspecialchars`_ function
    for the HTML escaping strategy.

.. caution::

    When using automatic escaping, Twig tries to not double-escape a variable
    when the automatic escaping strategy is the same as the one applied by the
    escape filter; but that does not work when using a variable as the
    escaping strategy:

    .. code-block:: twig

        {% set strategy = 'html' %}

        {% autoescape 'html' %}
            {{ var|escape('html') }}   {# won't be double-escaped #}
            {{ var|escape(strategy) }} {# will be double-escaped #}
        {% endautoescape %}

    When using a variable as the escaping strategy, you should disable
    automatic escaping:

    .. code-block:: twig

        {% set strategy = 'html' %}

        {% autoescape 'html' %}
            {{ var|escape(strategy)|raw }} {# won't be double-escaped #}
        {% endautoescape %}

Custom Escapers
---------------

You can define custom escapers by calling the ``setEscaper()`` method on the
``core`` extension instance. The first argument is the escaper name (to be
used in the ``escape`` call) and the second one must be a valid PHP callable:

.. code-block:: php

    \$twig = new \\Twig\\Environment(\$loader);
    \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setEscaper('csv', 'csv_escaper');

When called by Twig, the callable receives the Twig environment instance, the
string to escape, and the charset.

.. note::

    Built-in escapers cannot be overridden mainly because they should be
    considered as the final implementation and also for better performance.

Arguments
---------

* ``strategy``: The escaping strategy
* ``charset``:  The string charset

.. _`htmlspecialchars`: https://secure.php.net/htmlspecialchars
", "vendor/twig/twig/doc/filters/escape.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/escape.rst");
    }
}
