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

/* vendor/doctrine/orm/docs/en/reference/filters.rst */
class __TwigTemplate_0ed63b85949e54d281df0fa4828e3a518b25882dfd9d08a76bc74edf18b66a16 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/filters.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/filters.rst"));

        // line 1
        echo "Filters
=======

.. versionadded:: 2.2

Doctrine 2.2 features a filter system that allows the developer to add SQL to
the conditional clauses of queries, regardless the place where the SQL is
generated (e.g. from a DQL query, or by loading associated entities).

The filter functionality works on SQL level. Whether a SQL query is generated
in a Persister, during lazy loading, in extra lazy collections or from DQL.
Each time the system iterates over all the enabled filters, adding a new SQL
part as a filter returns.

By adding SQL to the conditional clauses of queries, the filter system filters
out rows belonging to the entities at the level of the SQL result set. This
means that the filtered entities are never hydrated (which can be expensive).


Example filter class
--------------------
Throughout this document the example ``MyLocaleFilter`` class will be used to
illustrate how the filter feature works. A filter class must extend the base
``Doctrine\\ORM\\Query\\Filter\\SQLFilter`` class and implement the ``addFilterConstraint``
method. The method receives the ``ClassMetadata`` of the filtered entity and the
table alias of the SQL table of the entity.

.. note::

    In the case of joined or single table inheritance, you always get passed the ClassMetadata of the
    inheritance root. This is necessary to avoid edge cases that would break the SQL when applying the filters.

Parameters for the query should be set on the filter object by
``SQLFilter#setParameter()``. Only parameters set via this function can be used
in filters.  The ``SQLFilter#getParameter()`` function takes care of the
proper quoting of parameters.

.. code-block:: php

    <?php
    namespace Example;
    use Doctrine\\ORM\\Mapping\\ClassMetaData,
        Doctrine\\ORM\\Query\\Filter\\SQLFilter;

    class MyLocaleFilter extends SQLFilter
    {
        public function addFilterConstraint(ClassMetadata \$targetEntity, \$targetTableAlias)
        {
            // Check if the entity implements the LocalAware interface
            if (!\$targetEntity->reflClass->implementsInterface('LocaleAware')) {
                return \"\";
            }

            return \$targetTableAlias.'.locale = ' . \$this->getParameter('locale'); // getParameter applies quoting automatically
        }
    }


Configuration
-------------
Filter classes are added to the configuration as following:

.. code-block:: php

    <?php
    \$config->addFilter(\"locale\", \"\\Doctrine\\Tests\\ORM\\Functional\\MyLocaleFilter\");


The ``Configuration#addFilter()`` method takes a name for the filter and the name of the
class responsible for the actual filtering.


Disabling/Enabling Filters and Setting Parameters
---------------------------------------------------
Filters can be disabled and enabled via the ``FilterCollection`` which is
stored in the ``EntityManager``. The ``FilterCollection#enable(\$name)`` method
will retrieve the filter object. You can set the filter parameters on that
object.

.. code-block:: php

    <?php
    \$filter = \$em->getFilters()->enable(\"locale\");
    \$filter->setParameter('locale', 'en');

    // Disable it
    \$filter = \$em->getFilters()->disable(\"locale\");

.. warning::
    Disabling and enabling filters has no effect on managed entities. If you
    want to refresh or reload an object after having modified a filter or the
    FilterCollection, then you should clear the EntityManager and re-fetch your
    entities, having the new rules for filtering applied.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/reference/filters.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Filters
=======

.. versionadded:: 2.2

Doctrine 2.2 features a filter system that allows the developer to add SQL to
the conditional clauses of queries, regardless the place where the SQL is
generated (e.g. from a DQL query, or by loading associated entities).

The filter functionality works on SQL level. Whether a SQL query is generated
in a Persister, during lazy loading, in extra lazy collections or from DQL.
Each time the system iterates over all the enabled filters, adding a new SQL
part as a filter returns.

By adding SQL to the conditional clauses of queries, the filter system filters
out rows belonging to the entities at the level of the SQL result set. This
means that the filtered entities are never hydrated (which can be expensive).


Example filter class
--------------------
Throughout this document the example ``MyLocaleFilter`` class will be used to
illustrate how the filter feature works. A filter class must extend the base
``Doctrine\\ORM\\Query\\Filter\\SQLFilter`` class and implement the ``addFilterConstraint``
method. The method receives the ``ClassMetadata`` of the filtered entity and the
table alias of the SQL table of the entity.

.. note::

    In the case of joined or single table inheritance, you always get passed the ClassMetadata of the
    inheritance root. This is necessary to avoid edge cases that would break the SQL when applying the filters.

Parameters for the query should be set on the filter object by
``SQLFilter#setParameter()``. Only parameters set via this function can be used
in filters.  The ``SQLFilter#getParameter()`` function takes care of the
proper quoting of parameters.

.. code-block:: php

    <?php
    namespace Example;
    use Doctrine\\ORM\\Mapping\\ClassMetaData,
        Doctrine\\ORM\\Query\\Filter\\SQLFilter;

    class MyLocaleFilter extends SQLFilter
    {
        public function addFilterConstraint(ClassMetadata \$targetEntity, \$targetTableAlias)
        {
            // Check if the entity implements the LocalAware interface
            if (!\$targetEntity->reflClass->implementsInterface('LocaleAware')) {
                return \"\";
            }

            return \$targetTableAlias.'.locale = ' . \$this->getParameter('locale'); // getParameter applies quoting automatically
        }
    }


Configuration
-------------
Filter classes are added to the configuration as following:

.. code-block:: php

    <?php
    \$config->addFilter(\"locale\", \"\\Doctrine\\Tests\\ORM\\Functional\\MyLocaleFilter\");


The ``Configuration#addFilter()`` method takes a name for the filter and the name of the
class responsible for the actual filtering.


Disabling/Enabling Filters and Setting Parameters
---------------------------------------------------
Filters can be disabled and enabled via the ``FilterCollection`` which is
stored in the ``EntityManager``. The ``FilterCollection#enable(\$name)`` method
will retrieve the filter object. You can set the filter parameters on that
object.

.. code-block:: php

    <?php
    \$filter = \$em->getFilters()->enable(\"locale\");
    \$filter->setParameter('locale', 'en');

    // Disable it
    \$filter = \$em->getFilters()->disable(\"locale\");

.. warning::
    Disabling and enabling filters has no effect on managed entities. If you
    want to refresh or reload an object after having modified a filter or the
    FilterCollection, then you should clear the EntityManager and re-fetch your
    entities, having the new rules for filtering applied.
", "vendor/doctrine/orm/docs/en/reference/filters.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/reference/filters.rst");
    }
}
