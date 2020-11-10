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

/* vendor/doctrine/collections/docs/en/expression-builder.rst */
class __TwigTemplate_ee68446d478da03f1d34a2a23e1bfb32e86462ca03d7c15fa456ee7a87a09f9e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/docs/en/expression-builder.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/docs/en/expression-builder.rst"));

        // line 1
        echo "Expression Builder
==================

The Expression Builder is a convenient fluent interface for
building expressions to be used with the ``Doctrine\\Common\\Collections\\Criteria``
class:

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$criteria = new Criteria();
    \$criteria->where(\$expressionBuilder->eq('name', 'jwage'));
    \$criteria->orWhere(\$expressionBuilder->eq('name', 'romanb'));

    \$collection->matching(\$criteria);

The ``ExpressionBuilder`` has the following API:

andX
----

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->andX(
        \$expressionBuilder->eq('foo', 1),
        \$expressionBuilder->eq('bar', 1)
    );

    \$collection->matching(new Criteria(\$expression));

orX
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->orX(
        \$expressionBuilder->eq('foo', 1),
        \$expressionBuilder->eq('bar', 1)
    );

    \$collection->matching(new Criteria(\$expression));

eq
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->eq('foo', 1);

    \$collection->matching(new Criteria(\$expression));

gt
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->gt('foo', 1);

    \$collection->matching(new Criteria(\$expression));

lt
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->lt('foo', 1);

    \$collection->matching(new Criteria(\$expression));

gte
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->gte('foo', 1);

    \$collection->matching(new Criteria(\$expression));

lte
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->lte('foo', 1);

    \$collection->matching(new Criteria(\$expression));

neq
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->neq('foo', 1);

    \$collection->matching(new Criteria(\$expression));

isNull
------

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->isNull('foo');

    \$collection->matching(new Criteria(\$expression));

in
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->in('foo', ['value1', 'value2']);

    \$collection->matching(new Criteria(\$expression));

notIn
-----

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->notIn('foo', ['value1', 'value2']);

    \$collection->matching(new Criteria(\$expression));

contains
--------

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->contains('foo', 'value1');

    \$collection->matching(new Criteria(\$expression));

memberOf
--------

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->memberOf('foo', ['value1', 'value2']);

    \$collection->matching(new Criteria(\$expression));

startsWith
----------

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->startsWith('foo', 'hello');

    \$collection->matching(new Criteria(\$expression));

endsWith
--------

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->endsWith('foo', 'world');

    \$collection->matching(new Criteria(\$expression));
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/docs/en/expression-builder.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Expression Builder
==================

The Expression Builder is a convenient fluent interface for
building expressions to be used with the ``Doctrine\\Common\\Collections\\Criteria``
class:

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$criteria = new Criteria();
    \$criteria->where(\$expressionBuilder->eq('name', 'jwage'));
    \$criteria->orWhere(\$expressionBuilder->eq('name', 'romanb'));

    \$collection->matching(\$criteria);

The ``ExpressionBuilder`` has the following API:

andX
----

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->andX(
        \$expressionBuilder->eq('foo', 1),
        \$expressionBuilder->eq('bar', 1)
    );

    \$collection->matching(new Criteria(\$expression));

orX
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->orX(
        \$expressionBuilder->eq('foo', 1),
        \$expressionBuilder->eq('bar', 1)
    );

    \$collection->matching(new Criteria(\$expression));

eq
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->eq('foo', 1);

    \$collection->matching(new Criteria(\$expression));

gt
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->gt('foo', 1);

    \$collection->matching(new Criteria(\$expression));

lt
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->lt('foo', 1);

    \$collection->matching(new Criteria(\$expression));

gte
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->gte('foo', 1);

    \$collection->matching(new Criteria(\$expression));

lte
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->lte('foo', 1);

    \$collection->matching(new Criteria(\$expression));

neq
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->neq('foo', 1);

    \$collection->matching(new Criteria(\$expression));

isNull
------

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->isNull('foo');

    \$collection->matching(new Criteria(\$expression));

in
---

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->in('foo', ['value1', 'value2']);

    \$collection->matching(new Criteria(\$expression));

notIn
-----

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->notIn('foo', ['value1', 'value2']);

    \$collection->matching(new Criteria(\$expression));

contains
--------

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->contains('foo', 'value1');

    \$collection->matching(new Criteria(\$expression));

memberOf
--------

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->memberOf('foo', ['value1', 'value2']);

    \$collection->matching(new Criteria(\$expression));

startsWith
----------

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->startsWith('foo', 'hello');

    \$collection->matching(new Criteria(\$expression));

endsWith
--------

.. code-block:: php
    \$expressionBuilder = Criteria::expr();

    \$expression = \$expressionBuilder->endsWith('foo', 'world');

    \$collection->matching(new Criteria(\$expression));
", "vendor/doctrine/collections/docs/en/expression-builder.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/docs/en/expression-builder.rst");
    }
}
