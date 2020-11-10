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

/* vendor/doctrine/orm/docs/en/cookbook/sql-table-prefixes.rst */
class __TwigTemplate_d0e12fff59b715cea52e8dcc16b8667001a6e5b3cf9b5980672d47e77a623cd0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/sql-table-prefixes.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/sql-table-prefixes.rst"));

        // line 1
        echo "SQL-Table Prefixes
==================

This recipe is intended as an example of implementing a
loadClassMetadata listener to provide a Table Prefix option for
your application. The method used below is not a hack, but fully
integrates into the Doctrine system, all SQL generated will include
the appropriate table prefix.

In most circumstances it is desirable to separate different
applications into individual databases, but in certain cases, it
may be beneficial to have a table prefix for your Entities to
separate them from other vendor products in the same database.

Implementing the listener
-------------------------

The listener in this example has been set up with the
DoctrineExtensions namespace. You create this file in your
library/DoctrineExtensions directory, but will need to set up
appropriate autoloaders.

.. code-block:: php

    <?php
    
    namespace DoctrineExtensions;
    use \\Doctrine\\ORM\\Event\\LoadClassMetadataEventArgs;
    
    class TablePrefix
    {
        protected \$prefix = '';
    
        public function __construct(\$prefix)
        {
            \$this->prefix = (string) \$prefix;
        }
    
        public function loadClassMetadata(LoadClassMetadataEventArgs \$eventArgs)
        {
            \$classMetadata = \$eventArgs->getClassMetadata();

            if (!\$classMetadata->isInheritanceTypeSingleTable() || \$classMetadata->getName() === \$classMetadata->rootEntityName) {
                \$classMetadata->setPrimaryTable([
                    'name' => \$this->prefix . \$classMetadata->getTableName()
                ]);
            }

            foreach (\$classMetadata->getAssociationMappings() as \$fieldName => \$mapping) {
                if (\$mapping['type'] == \\Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY && \$mapping['isOwningSide']) {
                    \$mappedTableName = \$mapping['joinTable']['name'];
                    \$classMetadata->associationMappings[\$fieldName]['joinTable']['name'] = \$this->prefix . \$mappedTableName;
                }
            }
        }

    }

Telling the EntityManager about our listener
--------------------------------------------

A listener of this type must be set up before the EntityManager has
been initialised, otherwise an Entity might be created or cached
before the prefix has been set.

.. note::

    If you set this listener up, be aware that you will need
    to clear your caches and drop then recreate your database schema.


.. code-block:: php

    <?php
    
    // \$connectionOptions and \$config set earlier
    
    \$evm = new \\Doctrine\\Common\\EventManager;
    
    // Table Prefix
    \$tablePrefix = new \\DoctrineExtensions\\TablePrefix('prefix_');
    \$evm->addEventListener(\\Doctrine\\ORM\\Events::loadClassMetadata, \$tablePrefix);
    
    \$em = \\Doctrine\\ORM\\EntityManager::create(\$connectionOptions, \$config, \$evm);


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/cookbook/sql-table-prefixes.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("SQL-Table Prefixes
==================

This recipe is intended as an example of implementing a
loadClassMetadata listener to provide a Table Prefix option for
your application. The method used below is not a hack, but fully
integrates into the Doctrine system, all SQL generated will include
the appropriate table prefix.

In most circumstances it is desirable to separate different
applications into individual databases, but in certain cases, it
may be beneficial to have a table prefix for your Entities to
separate them from other vendor products in the same database.

Implementing the listener
-------------------------

The listener in this example has been set up with the
DoctrineExtensions namespace. You create this file in your
library/DoctrineExtensions directory, but will need to set up
appropriate autoloaders.

.. code-block:: php

    <?php
    
    namespace DoctrineExtensions;
    use \\Doctrine\\ORM\\Event\\LoadClassMetadataEventArgs;
    
    class TablePrefix
    {
        protected \$prefix = '';
    
        public function __construct(\$prefix)
        {
            \$this->prefix = (string) \$prefix;
        }
    
        public function loadClassMetadata(LoadClassMetadataEventArgs \$eventArgs)
        {
            \$classMetadata = \$eventArgs->getClassMetadata();

            if (!\$classMetadata->isInheritanceTypeSingleTable() || \$classMetadata->getName() === \$classMetadata->rootEntityName) {
                \$classMetadata->setPrimaryTable([
                    'name' => \$this->prefix . \$classMetadata->getTableName()
                ]);
            }

            foreach (\$classMetadata->getAssociationMappings() as \$fieldName => \$mapping) {
                if (\$mapping['type'] == \\Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY && \$mapping['isOwningSide']) {
                    \$mappedTableName = \$mapping['joinTable']['name'];
                    \$classMetadata->associationMappings[\$fieldName]['joinTable']['name'] = \$this->prefix . \$mappedTableName;
                }
            }
        }

    }

Telling the EntityManager about our listener
--------------------------------------------

A listener of this type must be set up before the EntityManager has
been initialised, otherwise an Entity might be created or cached
before the prefix has been set.

.. note::

    If you set this listener up, be aware that you will need
    to clear your caches and drop then recreate your database schema.


.. code-block:: php

    <?php
    
    // \$connectionOptions and \$config set earlier
    
    \$evm = new \\Doctrine\\Common\\EventManager;
    
    // Table Prefix
    \$tablePrefix = new \\DoctrineExtensions\\TablePrefix('prefix_');
    \$evm->addEventListener(\\Doctrine\\ORM\\Events::loadClassMetadata, \$tablePrefix);
    
    \$em = \\Doctrine\\ORM\\EntityManager::create(\$connectionOptions, \$config, \$evm);


", "vendor/doctrine/orm/docs/en/cookbook/sql-table-prefixes.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/cookbook/sql-table-prefixes.rst");
    }
}
