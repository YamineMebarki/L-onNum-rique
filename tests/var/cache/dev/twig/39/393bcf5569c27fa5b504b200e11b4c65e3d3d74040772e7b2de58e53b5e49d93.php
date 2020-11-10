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

/* vendor/doctrine/orm/docs/en/cookbook/custom-mapping-types.rst */
class __TwigTemplate_ea7e3086ffaec0e7817e182ed184bd726afa28c9a4d6cd1654cba4282f4fc7d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/custom-mapping-types.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/custom-mapping-types.rst"));

        // line 1
        echo "Custom Mapping Types
====================

Doctrine allows you to create new mapping types. This can come in
handy when you're missing a specific mapping type or when you want
to replace the existing implementation of a mapping type.

In order to create a new mapping type you need to subclass
``Doctrine\\DBAL\\Types\\Type`` and implement/override the methods as
you wish. Here is an example skeleton of such a custom type class:

.. code-block:: php

    <?php
    namespace My\\Project\\Types;

    use Doctrine\\DBAL\\Types\\Type;
    use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

    /**
     * My custom datatype.
     */
    class MyType extends Type
    {
        const MYTYPE = 'mytype'; // modify to match your type name

        public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
        {
            // return the SQL used to create your column type. To create a portable column type, use the \$platform.
        }

        public function convertToPHPValue(\$value, AbstractPlatform \$platform)
        {
            // This is executed when the value is read from the database. Make your conversions here, optionally using the \$platform.
        }

        public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
        {
            // This is executed when the value is written to the database. Make your conversions here, optionally using the \$platform.
        }

        public function getName()
        {
            return self::MYTYPE; // modify to match your constant name
        }
    }

.. note::

    The following assumptions are applied to mapping types by the ORM:

    -  The ``UnitOfWork`` never passes values to the database convert
       method that did not change in the request.
    -  The ``UnitOfWork`` internally assumes that entity identifiers are
       castable to string. Hence, when using custom types that map to PHP
       objects as IDs, such objects must implement the ``__toString()`` magic
       method.

When you have implemented the type you still need to let Doctrine
know about it. This can be achieved through the
``Doctrine\\DBAL\\Types\\Type#addType(\$name, \$className)``
method. See the following example:

.. code-block:: php

    <?php
    // in bootstrapping code

    // ...

    use Doctrine\\DBAL\\Types\\Type;

    // ...

    // Register my type
    Type::addType('mytype', 'My\\Project\\Types\\MyType');

To convert the underlying database type of your
new \"mytype\" directly into an instance of ``MyType`` when performing
schema operations, the type has to be registered with the database
platform as well:

.. code-block:: php

    <?php
    \$conn = \$em->getConnection();
    \$conn->getDatabasePlatform()->registerDoctrineTypeMapping('db_mytype', 'mytype');

When registering the custom types in the configuration you specify a unique
name for the mapping type and map that to the corresponding fully qualified
class name. Now the new type can be used when mapping columns:

.. code-block:: php

    <?php
    class MyPersistentClass
    {
        /** @Column(type=\"mytype\") */
        private \$field;
    }

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/cookbook/custom-mapping-types.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Custom Mapping Types
====================

Doctrine allows you to create new mapping types. This can come in
handy when you're missing a specific mapping type or when you want
to replace the existing implementation of a mapping type.

In order to create a new mapping type you need to subclass
``Doctrine\\DBAL\\Types\\Type`` and implement/override the methods as
you wish. Here is an example skeleton of such a custom type class:

.. code-block:: php

    <?php
    namespace My\\Project\\Types;

    use Doctrine\\DBAL\\Types\\Type;
    use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

    /**
     * My custom datatype.
     */
    class MyType extends Type
    {
        const MYTYPE = 'mytype'; // modify to match your type name

        public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
        {
            // return the SQL used to create your column type. To create a portable column type, use the \$platform.
        }

        public function convertToPHPValue(\$value, AbstractPlatform \$platform)
        {
            // This is executed when the value is read from the database. Make your conversions here, optionally using the \$platform.
        }

        public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
        {
            // This is executed when the value is written to the database. Make your conversions here, optionally using the \$platform.
        }

        public function getName()
        {
            return self::MYTYPE; // modify to match your constant name
        }
    }

.. note::

    The following assumptions are applied to mapping types by the ORM:

    -  The ``UnitOfWork`` never passes values to the database convert
       method that did not change in the request.
    -  The ``UnitOfWork`` internally assumes that entity identifiers are
       castable to string. Hence, when using custom types that map to PHP
       objects as IDs, such objects must implement the ``__toString()`` magic
       method.

When you have implemented the type you still need to let Doctrine
know about it. This can be achieved through the
``Doctrine\\DBAL\\Types\\Type#addType(\$name, \$className)``
method. See the following example:

.. code-block:: php

    <?php
    // in bootstrapping code

    // ...

    use Doctrine\\DBAL\\Types\\Type;

    // ...

    // Register my type
    Type::addType('mytype', 'My\\Project\\Types\\MyType');

To convert the underlying database type of your
new \"mytype\" directly into an instance of ``MyType`` when performing
schema operations, the type has to be registered with the database
platform as well:

.. code-block:: php

    <?php
    \$conn = \$em->getConnection();
    \$conn->getDatabasePlatform()->registerDoctrineTypeMapping('db_mytype', 'mytype');

When registering the custom types in the configuration you specify a unique
name for the mapping type and map that to the corresponding fully qualified
class name. Now the new type can be used when mapping columns:

.. code-block:: php

    <?php
    class MyPersistentClass
    {
        /** @Column(type=\"mytype\") */
        private \$field;
    }

", "vendor/doctrine/orm/docs/en/cookbook/custom-mapping-types.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/cookbook/custom-mapping-types.rst");
    }
}
