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

/* vendor/twig/twig/doc/tags/for.rst */
class __TwigTemplate_642757b36310d879c29242ed635168cde2d3fd84cd5774825a1a3d321ebdb101 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/for.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/for.rst"));

        // line 1
        echo "``for``
=======

Loop over each item in a sequence. For example, to display a list of users
provided in a variable called ``users``:

.. code-block:: twig

    <h1>Members</h1>
    <ul>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 12
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 12));
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>

.. note::

    A sequence can be either an array or an object implementing the
    ``Traversable`` interface.

If you do need to iterate over a sequence of numbers, you can use the ``..``
operator:

.. code-block:: twig

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "        * ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
The above snippet of code would print all numbers from 0 to 10.

It can be also useful with letters:

.. code-block:: twig

    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("a", "z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 37
            echo "        * ";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
The ``..`` operator can take any expression at both sides:

.. code-block:: twig

    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_upper_filter($this->env, "a"), twig_upper_filter($this->env, "z")));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 45
            echo "        * ";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
.. tip:

    If you need a step different from 1, you can use the ``range`` function
    instead.

The `loop` variable
-------------------

Inside of a ``for`` loop block you can access some special variables:

===================== =============================================================
Variable              Description
===================== =============================================================
``loop.index``        The current iteration of the loop. (1 indexed)
``loop.index0``       The current iteration of the loop. (0 indexed)
``loop.revindex``     The number of iterations from the end of the loop (1 indexed)
``loop.revindex0``    The number of iterations from the end of the loop (0 indexed)
``loop.first``        True if first iteration
``loop.last``         True if last iteration
``loop.length``       The number of items in the sequence
``loop.parent``       The parent context
===================== =============================================================

.. code-block:: twig

    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 73, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 74
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 74), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 74), "html", null, true);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
.. note::

    The ``loop.length``, ``loop.revindex``, ``loop.revindex0``, and
    ``loop.last`` variables are only available for PHP arrays, or objects that
    implement the ``Countable`` interface. They are also not available when
    looping with a condition.

Adding a condition
------------------

.. tip::

    As of Twig 2.10, use the :doc:`filter <../filters/filter>` filter instead,
    or an ``if`` condition inside the ``for`` body (if your condition depends on
    a variable updated inside the loop and you are not using the ``loop``
    variable).

Unlike in PHP, it's not possible to ``break`` or ``continue`` in a loop. You
can however filter the sequence during iteration which allows you to skip
items. The following example skips all the users which are not active:

.. code-block:: twig

    <ul>
        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if (twig_get_attribute($this->env, $this->source, $context["user"], "active", [], "any", false, false, false, 101)) {
                // line 102
                echo "            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 102));
                echo "</li>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </ul>

The advantage is that the special loop variable will count correctly thus not
counting the users not iterated over. Keep in mind that properties like
``loop.last`` will not be defined when using loop conditions.

.. note::

    Using the ``loop`` variable within the condition is not recommended as it
    will probably not be doing what you expect it to. For instance, adding a
    condition like ``loop.index > 4`` won't work as the index is only
    incremented when the condition is true (so the condition will never
    match).

The `else` Clause
-----------------

If no iteration took place because the sequence was empty, you can render a
replacement block by using ``else``:

.. code-block:: twig

    <ul>
        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 127, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 128
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 128));
            echo "</li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 130
            echo "            <li><em>no user found</em></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "    </ul>

Iterating over Keys
-------------------

By default, a loop iterates over the values of the sequence. You can iterate
on keys by using the ``keys`` filter:

.. code-block:: twig

    <h1>Members</h1>
    <ul>
        ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 144, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 145
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "    </ul>

Iterating over Keys and Values
------------------------------

You can also access both keys and values:

.. code-block:: twig

    <h1>Members</h1>
    <ul>
        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["user"]) {
            // line 159
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 159));
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "    </ul>

Iterating over a Subset
-----------------------

You might want to iterate over a subset of values. This can be achieved using
the :doc:`slice <../filters/slice>` filter:

.. code-block:: twig

    <h1>Top Ten Members</h1>
    <ul>
        ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 173, $this->source); })()), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 174
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 174));
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "    </ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/tags/for.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 176,  361 => 174,  357 => 173,  343 => 161,  332 => 159,  328 => 158,  315 => 147,  306 => 145,  302 => 144,  288 => 132,  281 => 130,  273 => 128,  268 => 127,  243 => 104,  233 => 102,  228 => 101,  201 => 76,  182 => 74,  165 => 73,  137 => 47,  128 => 45,  124 => 44,  117 => 39,  108 => 37,  104 => 36,  95 => 29,  86 => 27,  82 => 26,  68 => 14,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``for``
=======

Loop over each item in a sequence. For example, to display a list of users
provided in a variable called ``users``:

.. code-block:: twig

    <h1>Members</h1>
    <ul>
        {% for user in users %}
            <li>{{ user.username|e }}</li>
        {% endfor %}
    </ul>

.. note::

    A sequence can be either an array or an object implementing the
    ``Traversable`` interface.

If you do need to iterate over a sequence of numbers, you can use the ``..``
operator:

.. code-block:: twig

    {% for i in 0..10 %}
        * {{ i }}
    {% endfor %}

The above snippet of code would print all numbers from 0 to 10.

It can be also useful with letters:

.. code-block:: twig

    {% for letter in 'a'..'z' %}
        * {{ letter }}
    {% endfor %}

The ``..`` operator can take any expression at both sides:

.. code-block:: twig

    {% for letter in 'a'|upper..'z'|upper %}
        * {{ letter }}
    {% endfor %}

.. tip:

    If you need a step different from 1, you can use the ``range`` function
    instead.

The `loop` variable
-------------------

Inside of a ``for`` loop block you can access some special variables:

===================== =============================================================
Variable              Description
===================== =============================================================
``loop.index``        The current iteration of the loop. (1 indexed)
``loop.index0``       The current iteration of the loop. (0 indexed)
``loop.revindex``     The number of iterations from the end of the loop (1 indexed)
``loop.revindex0``    The number of iterations from the end of the loop (0 indexed)
``loop.first``        True if first iteration
``loop.last``         True if last iteration
``loop.length``       The number of items in the sequence
``loop.parent``       The parent context
===================== =============================================================

.. code-block:: twig

    {% for user in users %}
        {{ loop.index }} - {{ user.username }}
    {% endfor %}

.. note::

    The ``loop.length``, ``loop.revindex``, ``loop.revindex0``, and
    ``loop.last`` variables are only available for PHP arrays, or objects that
    implement the ``Countable`` interface. They are also not available when
    looping with a condition.

Adding a condition
------------------

.. tip::

    As of Twig 2.10, use the :doc:`filter <../filters/filter>` filter instead,
    or an ``if`` condition inside the ``for`` body (if your condition depends on
    a variable updated inside the loop and you are not using the ``loop``
    variable).

Unlike in PHP, it's not possible to ``break`` or ``continue`` in a loop. You
can however filter the sequence during iteration which allows you to skip
items. The following example skips all the users which are not active:

.. code-block:: twig

    <ul>
        {% for user in users if user.active %}
            <li>{{ user.username|e }}</li>
        {% endfor %}
    </ul>

The advantage is that the special loop variable will count correctly thus not
counting the users not iterated over. Keep in mind that properties like
``loop.last`` will not be defined when using loop conditions.

.. note::

    Using the ``loop`` variable within the condition is not recommended as it
    will probably not be doing what you expect it to. For instance, adding a
    condition like ``loop.index > 4`` won't work as the index is only
    incremented when the condition is true (so the condition will never
    match).

The `else` Clause
-----------------

If no iteration took place because the sequence was empty, you can render a
replacement block by using ``else``:

.. code-block:: twig

    <ul>
        {% for user in users %}
            <li>{{ user.username|e }}</li>
        {% else %}
            <li><em>no user found</em></li>
        {% endfor %}
    </ul>

Iterating over Keys
-------------------

By default, a loop iterates over the values of the sequence. You can iterate
on keys by using the ``keys`` filter:

.. code-block:: twig

    <h1>Members</h1>
    <ul>
        {% for key in users|keys %}
            <li>{{ key }}</li>
        {% endfor %}
    </ul>

Iterating over Keys and Values
------------------------------

You can also access both keys and values:

.. code-block:: twig

    <h1>Members</h1>
    <ul>
        {% for key, user in users %}
            <li>{{ key }}: {{ user.username|e }}</li>
        {% endfor %}
    </ul>

Iterating over a Subset
-----------------------

You might want to iterate over a subset of values. This can be achieved using
the :doc:`slice <../filters/slice>` filter:

.. code-block:: twig

    <h1>Top Ten Members</h1>
    <ul>
        {% for user in users|slice(0, 10) %}
            <li>{{ user.username|e }}</li>
        {% endfor %}
    </ul>
", "vendor/twig/twig/doc/tags/for.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/tags/for.rst");
    }
}
