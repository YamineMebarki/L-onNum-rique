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

/* vendor/doctrine/collections/docs/en/expressions.rst */
class __TwigTemplate_7cb564b1448416664aac6422acaecee6829109d08c8aa3b86ad466a0ba89491b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/docs/en/expressions.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/docs/en/expressions.rst"));

        // line 1
        echo "Expressions
===========

The ``Doctrine\\Common\\Collections\\Expr\\Comparison`` class
can be used to create expressions to be used with the
``Doctrine\\Common\\Collections\\Criteria`` class. It has the
following operator constants:

- ``Comparison::EQ``
- ``Comparison::NEQ``
- ``Comparison::LT``
- ``Comparison::LTE``
- ``Comparison::GT``
- ``Comparison::GTE``
- ``Comparison::IS``
- ``Comparison::IN``
- ``Comparison::NIN``
- ``Comparison::CONTAINS``
- ``Comparison::MEMBER_OF``
- ``Comparison::STARTS_WITH``
- ``Comparison::ENDS_WITH``

The ``Doctrine\\Common\\Collections\\Criteria`` class has the following
API to be used with expressions:

where
-----

Sets the where expression to evaluate when this Criteria is searched for.

.. code-block:: php
    \$expr = new Comparison('key', Comparison::EQ, 'value');

    \$criteria->where(\$expr);

andWhere
--------

Appends the where expression to evaluate when this Criteria is searched for
using an AND with previous expression.

.. code-block:: php
    \$expr = new Comparison('key', Comparison::EQ, 'value');

    \$criteria->andWhere(\$expr);

orWhere
-------

Appends the where expression to evaluate when this Criteria is searched for
using an OR with previous expression.

.. code-block:: php
    \$expr1 = new Comparison('key', Comparison::EQ, 'value1');
    \$expr2 = new Comparison('key', Comparison::EQ, 'value2');

    \$criteria->where(\$expr1);
    \$criteria->orWhere(\$expr2);

orderBy
-------

Sets the ordering of the result of this Criteria.

.. code-block:: php
    \$criteria->orderBy(['name' => Criteria::ASC]);

setFirstResult
--------------

Set the number of first result that this Criteria should return.

.. code-block:: php
    \$criteria->setFirstResult(0);

getFirstResult
--------------

Gets the current first result option of this Criteria.

.. code-block:: php
    \$criteria->setFirstResult(10);

    echo \$criteria->getFirstResult(); // 10

setMaxResults
-------------

Sets the max results that this Criteria should return.

.. code-block:: php
    \$criteria->setMaxResults(20);

getMaxResults
-------------

Gets the current max results option of this Criteria.

.. code-block:: php
    \$criteria->setMaxResults(20);

    echo \$criteria->getMaxResults(); // 20
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/docs/en/expressions.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Expressions
===========

The ``Doctrine\\Common\\Collections\\Expr\\Comparison`` class
can be used to create expressions to be used with the
``Doctrine\\Common\\Collections\\Criteria`` class. It has the
following operator constants:

- ``Comparison::EQ``
- ``Comparison::NEQ``
- ``Comparison::LT``
- ``Comparison::LTE``
- ``Comparison::GT``
- ``Comparison::GTE``
- ``Comparison::IS``
- ``Comparison::IN``
- ``Comparison::NIN``
- ``Comparison::CONTAINS``
- ``Comparison::MEMBER_OF``
- ``Comparison::STARTS_WITH``
- ``Comparison::ENDS_WITH``

The ``Doctrine\\Common\\Collections\\Criteria`` class has the following
API to be used with expressions:

where
-----

Sets the where expression to evaluate when this Criteria is searched for.

.. code-block:: php
    \$expr = new Comparison('key', Comparison::EQ, 'value');

    \$criteria->where(\$expr);

andWhere
--------

Appends the where expression to evaluate when this Criteria is searched for
using an AND with previous expression.

.. code-block:: php
    \$expr = new Comparison('key', Comparison::EQ, 'value');

    \$criteria->andWhere(\$expr);

orWhere
-------

Appends the where expression to evaluate when this Criteria is searched for
using an OR with previous expression.

.. code-block:: php
    \$expr1 = new Comparison('key', Comparison::EQ, 'value1');
    \$expr2 = new Comparison('key', Comparison::EQ, 'value2');

    \$criteria->where(\$expr1);
    \$criteria->orWhere(\$expr2);

orderBy
-------

Sets the ordering of the result of this Criteria.

.. code-block:: php
    \$criteria->orderBy(['name' => Criteria::ASC]);

setFirstResult
--------------

Set the number of first result that this Criteria should return.

.. code-block:: php
    \$criteria->setFirstResult(0);

getFirstResult
--------------

Gets the current first result option of this Criteria.

.. code-block:: php
    \$criteria->setFirstResult(10);

    echo \$criteria->getFirstResult(); // 10

setMaxResults
-------------

Sets the max results that this Criteria should return.

.. code-block:: php
    \$criteria->setMaxResults(20);

getMaxResults
-------------

Gets the current max results option of this Criteria.

.. code-block:: php
    \$criteria->setMaxResults(20);

    echo \$criteria->getMaxResults(); // 20
", "vendor/doctrine/collections/docs/en/expressions.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/docs/en/expressions.rst");
    }
}
