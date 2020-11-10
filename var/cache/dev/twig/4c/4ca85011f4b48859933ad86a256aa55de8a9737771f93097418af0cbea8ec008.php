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

/* vendor/doctrine/orm/docs/en/reference/namingstrategy.rst */
class __TwigTemplate_1d7f2773de6ce02187c1c8dd2741ad8299fb6478bbabfb5490bd759a67faba91 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/namingstrategy.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/namingstrategy.rst"));

        // line 1
        echo "Implementing a NamingStrategy
==============================

.. versionadded:: 2.3

Using a naming strategy you can provide rules for generating database identifiers,
column or table names when the column or table name is not given. This feature helps
reduce the verbosity of the mapping document, eliminating repetitive noise (eg: ``TABLE_``).

Configuring a naming strategy
-----------------------------
The default strategy used by Doctrine is quite minimal.

By default the ``Doctrine\\ORM\\Mapping\\DefaultNamingStrategy``
uses the simple class name and the attribute names to generate tables and columns.

You can specify a different strategy by calling ``Doctrine\\ORM\\Configuration#setNamingStrategy()``:

.. code-block:: php

    <?php
    \$namingStrategy = new MyNamingStrategy();
    \$configuration->setNamingStrategy(\$namingStrategy);

Underscore naming strategy
---------------------------

``\\Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy`` is a built-in strategy.

.. code-block:: php

    <?php
    \$namingStrategy = new \\Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy(CASE_UPPER);
    \$configuration->setNamingStrategy(\$namingStrategy);

For SomeEntityName the strategy will generate the table SOME_ENTITY_NAME with the
``CASE_UPPER`` option, or some_entity_name with the ``CASE_LOWER`` option.

Naming strategy interface
-------------------------
The interface ``Doctrine\\ORM\\Mapping\\NamingStrategy`` allows you to specify
a naming strategy for database tables and columns.

.. code-block:: php

    <?php
    /**
     * Return a table name for an entity class
     *
     * @param string \$className The fully-qualified class name
     * @return string A table name
     */
    function classToTableName(\$className);

    /**
     * Return a column name for a property
     *
     * @param string \$propertyName A property
     * @return string A column name
     */
    function propertyToColumnName(\$propertyName);

    /**
     * Return the default reference column name
     *
     * @return string A column name
     */
    function referenceColumnName();

    /**
     * Return a join column name for a property
     *
     * @param string \$propertyName A property
     * @return string A join column name
     */
    function joinColumnName(\$propertyName, \$className = null);

    /**
     * Return a join table name
     *
     * @param string \$sourceEntity The source entity
     * @param string \$targetEntity The target entity
     * @param string \$propertyName A property
     * @return string A join table name
     */
    function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null);

    /**
     * Return the foreign key column name for the given parameters
     *
     * @param string \$entityName A entity
     * @param string \$referencedColumnName A property
     * @return string A join column name
     */
    function joinKeyColumnName(\$entityName, \$referencedColumnName = null);

Implementing a naming strategy
-------------------------------
If you have database naming standards, like all table names should be prefixed
by the application prefix, all column names should be lower case, you can easily
achieve such standards by implementing a naming strategy.

You need to create a class which implements ``Doctrine\\ORM\\Mapping\\NamingStrategy``.


.. code-block:: php

    <?php
    class MyAppNamingStrategy implements NamingStrategy
    {
        public function classToTableName(\$className)
        {
            return 'MyApp_' . substr(\$className, strrpos(\$className, '\\\\') + 1);
        }
        public function propertyToColumnName(\$propertyName)
        {
            return \$propertyName;
        }
        public function referenceColumnName()
        {
            return 'id';
        }
        public function joinColumnName(\$propertyName, \$className = null)
        {
            return \$propertyName . '_' . \$this->referenceColumnName();
        }
        public function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null)
        {
            return strtolower(\$this->classToTableName(\$sourceEntity) . '_' .
                    \$this->classToTableName(\$targetEntity));
        }
        public function joinKeyColumnName(\$entityName, \$referencedColumnName = null)
        {
            return strtolower(\$this->classToTableName(\$entityName) . '_' .
                    (\$referencedColumnName ?: \$this->referenceColumnName()));
        }
    }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/reference/namingstrategy.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Implementing a NamingStrategy
==============================

.. versionadded:: 2.3

Using a naming strategy you can provide rules for generating database identifiers,
column or table names when the column or table name is not given. This feature helps
reduce the verbosity of the mapping document, eliminating repetitive noise (eg: ``TABLE_``).

Configuring a naming strategy
-----------------------------
The default strategy used by Doctrine is quite minimal.

By default the ``Doctrine\\ORM\\Mapping\\DefaultNamingStrategy``
uses the simple class name and the attribute names to generate tables and columns.

You can specify a different strategy by calling ``Doctrine\\ORM\\Configuration#setNamingStrategy()``:

.. code-block:: php

    <?php
    \$namingStrategy = new MyNamingStrategy();
    \$configuration->setNamingStrategy(\$namingStrategy);

Underscore naming strategy
---------------------------

``\\Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy`` is a built-in strategy.

.. code-block:: php

    <?php
    \$namingStrategy = new \\Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy(CASE_UPPER);
    \$configuration->setNamingStrategy(\$namingStrategy);

For SomeEntityName the strategy will generate the table SOME_ENTITY_NAME with the
``CASE_UPPER`` option, or some_entity_name with the ``CASE_LOWER`` option.

Naming strategy interface
-------------------------
The interface ``Doctrine\\ORM\\Mapping\\NamingStrategy`` allows you to specify
a naming strategy for database tables and columns.

.. code-block:: php

    <?php
    /**
     * Return a table name for an entity class
     *
     * @param string \$className The fully-qualified class name
     * @return string A table name
     */
    function classToTableName(\$className);

    /**
     * Return a column name for a property
     *
     * @param string \$propertyName A property
     * @return string A column name
     */
    function propertyToColumnName(\$propertyName);

    /**
     * Return the default reference column name
     *
     * @return string A column name
     */
    function referenceColumnName();

    /**
     * Return a join column name for a property
     *
     * @param string \$propertyName A property
     * @return string A join column name
     */
    function joinColumnName(\$propertyName, \$className = null);

    /**
     * Return a join table name
     *
     * @param string \$sourceEntity The source entity
     * @param string \$targetEntity The target entity
     * @param string \$propertyName A property
     * @return string A join table name
     */
    function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null);

    /**
     * Return the foreign key column name for the given parameters
     *
     * @param string \$entityName A entity
     * @param string \$referencedColumnName A property
     * @return string A join column name
     */
    function joinKeyColumnName(\$entityName, \$referencedColumnName = null);

Implementing a naming strategy
-------------------------------
If you have database naming standards, like all table names should be prefixed
by the application prefix, all column names should be lower case, you can easily
achieve such standards by implementing a naming strategy.

You need to create a class which implements ``Doctrine\\ORM\\Mapping\\NamingStrategy``.


.. code-block:: php

    <?php
    class MyAppNamingStrategy implements NamingStrategy
    {
        public function classToTableName(\$className)
        {
            return 'MyApp_' . substr(\$className, strrpos(\$className, '\\\\') + 1);
        }
        public function propertyToColumnName(\$propertyName)
        {
            return \$propertyName;
        }
        public function referenceColumnName()
        {
            return 'id';
        }
        public function joinColumnName(\$propertyName, \$className = null)
        {
            return \$propertyName . '_' . \$this->referenceColumnName();
        }
        public function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null)
        {
            return strtolower(\$this->classToTableName(\$sourceEntity) . '_' .
                    \$this->classToTableName(\$targetEntity));
        }
        public function joinKeyColumnName(\$entityName, \$referencedColumnName = null)
        {
            return strtolower(\$this->classToTableName(\$entityName) . '_' .
                    (\$referencedColumnName ?: \$this->referenceColumnName()));
        }
    }
", "vendor/doctrine/orm/docs/en/reference/namingstrategy.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/reference/namingstrategy.rst");
    }
}
