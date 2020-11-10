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

/* vendor/doctrine/migrations/docs/en/reference/generating-migrations.rst */
class __TwigTemplate_ec4d797201dae911ee4b2251e17b8aae187512b7f4d43a2e11ea85dbd3940abd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/docs/en/reference/generating-migrations.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/docs/en/reference/generating-migrations.rst"));

        // line 1
        echo "Generating Migrations
=====================

Doctrine can generate blank migrations for you to modify or it can generate functional migrations for you by comparing
the current state of your database schema to your mapping information.

Generating Blank Migrations
---------------------------

To generate a blank migration you can use the ``generate`` command:

.. code-block:: sh

    \$ ./vendor/bin/doctrine-migrations generate

Diffing Using the ORM
---------------------

If you are using the ORM, you can modify your mapping information and have Doctrine generate a migration
for you by comparing the current state of your database schema to the mapping information that is defined by using
the ORM. To test this functionality, create a new ``User`` entity located at ``lib/MyProject/Entities/User.php``.

.. code-block:: php

    <?php

    namespace MyProject\\Entities;

    /**
     * @Entity
     * @Table(name=\"users\")
     */
    class User
    {
        /** @Id @Column(type=\"integer\") @GeneratedValue */
        private \$id;

        /** @Column(type=\"string\", nullable=true) */
        private \$username;

        public function setId(int \$id)
        {
            \$this->id = \$id;
        }

        public function getId() : ?int
        {
            return \$this->id;
        }

        public function setUsername(string \$username) : void
        {
            \$this->username = \$username;
        }

        public function getUsername() : ?string
        {
            return \$this->username;
        }
    }

Now when you run the ``diff`` command it will generate a migration which will create the ``users`` table:

.. code-block:: sh

    \$ ./vendor/bin/doctrine-migrations diff
    Generated new migration class to \"/data/doctrine/migrations-docs-example/lib/MyProject/Migrations/Version20180601215504.php\"

    To run just this migration for testing purposes, you can use migrations:execute --up 20180601215504

    To revert the migration you can use migrations:execute --down 20180601215504

Take a look at the generated migration:

.. note::

    Notice how the table named ``example_table`` that we created earlier in the :ref:`Managing Migrations <managing-migrations>`
    chapter is being dropped. This is because the table is not mapped anywhere in the Doctrine ORM and the ``diff`` command
    detects that and generates the SQL to drop the table. If you want to ignore some tables in your database take a
    look at `Ignoring Custom Tables <#ignoring-custom-tables>`_ chapter.

.. code-block:: php

    <?php

    declare(strict_types=1);

    namespace MyProject\\Migrations;

    use Doctrine\\DBAL\\Schema\\Schema;
    use Doctrine\\Migrations\\AbstractMigration;

    /**
     * Auto-generated Migration: Please modify to your needs!
     */
    final class Version20180601215504 extends AbstractMigration
    {
        public function getDescription() : string
        {
            return '';
        }

        public function up(Schema \$schema) : void
        {
            // this up() migration is auto-generated, please modify it to your needs
            \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

            \$this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
            \$this->addSql('DROP TABLE example_table');
        }

        public function down(Schema \$schema) : void
        {
            // this down() migration is auto-generated, please modify it to your needs
            \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

            \$this->addSql('CREATE TABLE example_table (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
            \$this->addSql('DROP TABLE users');
        }
    }

Now you are ready to execute your diff migration:

.. code-block:: sh

    \$ ./vendor/bin/doctrine-migrations migrate

                        My Project Migrations


    WARNING! You are about to execute a database migration that could result in schema changes and data loss. Are you sure you wish to continue? (y/n)y
    Migrating up to 20180601215504 from 20180601193057

      ++ migrating 20180601215504

         -> CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB
         -> DROP TABLE example_table

      ++ migrated (took 75.9ms, used 8M memory)

      ------------------------

      ++ finished in 84.3ms
      ++ used 8M memory
      ++ 1 migrations executed
      ++ 1 sql queries

The SQL generated here is the exact same SQL that would be executed if you were using the ``orm:schema-tool`` command.
This just allows you to capture that SQL and maybe tweak it or add to it and trigger the deployment later across
multiple database servers.

Diffing Without the ORM
-----------------------

Internally the diff command generates a ``Doctrine\\DBAL\\Schema\\Schema`` object from your entities metadata using an
implementation of ``Doctrine\\Migrations\\Provider\\SchemaProviderInterface``. To use the Schema representation
directly, without the ORM, you must implement this interface yourself.

The ``SchemaProviderInterface`` only has one method named ``createSchema``. This should return a ``Doctrine\\DBAL\\Schema\\Schema``
instance that represents the state to which you'd like to migrate your database.

.. code-block:: php

    <?php

    use Doctrine\\DBAL\\Schema\\Schema;
    use Doctrine\\Migrations\\Provider\\SchemaProviderInterface;

    final class CustomSchemaProvider implements SchemaProviderInterface
    {
        public function createSchema()
        {
            \$schema = new Schema();

            \$table = \$schema->createTable('users');

            \$table->addColumn('id', 'integer', [
                'autoincrement' => true,
            ]);

            \$table->addColumn('username', 'string', [
                'notnull' => false,
            ]);

            \$table->setPrimaryKey(array('id'));

            return \$schema;
        }
    }

The ``StubSchemaProvider`` provided with the migrations library is another option.
It simply takes a schema object to its constructor and returns it from ``createSchema``.

.. code-block:: php

    <?php

    use Doctrine\\DBAL\\Schema\\Schema;
    use Doctrine\\Migrations\\Provider\\StubSchemaProvider;

    \$schema = new Schema();

    \$table = \$schema->createTable('users');

    \$table->addColumn('id', 'integer', [
        'autoincrement' => true,
    ]);

    \$table->addColumn('username', 'string', [
        'notnull' => false,
    ]);

    \$table->setPrimaryKey(array('id'));

    \$provider = new StubSchemaProvider(\$schema);
    \$provider->createSchema() === \$schema; // true

By default the Doctrine Migrations command line tool will only add the diff command if the ORM is present.
Without the ORM, you'll have to add the diff command to your console application manually, passing in your schema
provider implementation to the diff command's constructor. Take a look at the :ref:`Custom Integration <custom-integration>`
chapter for information on how to setup a custom console application.

.. code-block:: php

    <?php

    use Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand;

    \$schemaProvider = new CustomSchemaProvider();

    /** @var Symfony\\Component\\Console\\Application */
    \$cli->add(new DiffCommand(\$schemaProvider));

    // ...

    \$cli->run();

With the custom provider in place the ``diff`` command will compare the current database schema to the one provided by
the ``SchemaProviderInterface`` implementation. If there is a mismatch, the differences will be included in the
generated migration just like the ORM examples above.

Formatted SQL
-------------

You can optionally pass the ``--formatted`` option if you want the dumped SQL to be formatted. This option uses
the ``jdorn/sql-formatter`` package so you will need to install this package for it to work:

.. code-block:: sh

    \$ composer require jdorn/sql-formatter

Ignoring Custom Tables
----------------------

If you have custom tables which are not managed by Doctrine you will need to tell Doctrine to ignore these tables.
Otherwise, everytime you run the ``diff`` command, Doctrine will try to drop those tables. You can configure Doctrine
with a schema filter.

.. code-block:: php

    \$connection->getConfiguration()->setFilterSchemaAssetsExpression(\"~^(?!t_)~\");

With this expression all tables prefixed with t_ will ignored by the schema tool.

If you use the DoctrineBundle with Symfony you can set the ``schema_filter`` option
in your configuration. You can find more information in the documentation of the
DoctrineMigrationsBundle.

:ref:`Next Chapter: Custom Configuration <custom-configuration>`
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/docs/en/reference/generating-migrations.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Generating Migrations
=====================

Doctrine can generate blank migrations for you to modify or it can generate functional migrations for you by comparing
the current state of your database schema to your mapping information.

Generating Blank Migrations
---------------------------

To generate a blank migration you can use the ``generate`` command:

.. code-block:: sh

    \$ ./vendor/bin/doctrine-migrations generate

Diffing Using the ORM
---------------------

If you are using the ORM, you can modify your mapping information and have Doctrine generate a migration
for you by comparing the current state of your database schema to the mapping information that is defined by using
the ORM. To test this functionality, create a new ``User`` entity located at ``lib/MyProject/Entities/User.php``.

.. code-block:: php

    <?php

    namespace MyProject\\Entities;

    /**
     * @Entity
     * @Table(name=\"users\")
     */
    class User
    {
        /** @Id @Column(type=\"integer\") @GeneratedValue */
        private \$id;

        /** @Column(type=\"string\", nullable=true) */
        private \$username;

        public function setId(int \$id)
        {
            \$this->id = \$id;
        }

        public function getId() : ?int
        {
            return \$this->id;
        }

        public function setUsername(string \$username) : void
        {
            \$this->username = \$username;
        }

        public function getUsername() : ?string
        {
            return \$this->username;
        }
    }

Now when you run the ``diff`` command it will generate a migration which will create the ``users`` table:

.. code-block:: sh

    \$ ./vendor/bin/doctrine-migrations diff
    Generated new migration class to \"/data/doctrine/migrations-docs-example/lib/MyProject/Migrations/Version20180601215504.php\"

    To run just this migration for testing purposes, you can use migrations:execute --up 20180601215504

    To revert the migration you can use migrations:execute --down 20180601215504

Take a look at the generated migration:

.. note::

    Notice how the table named ``example_table`` that we created earlier in the :ref:`Managing Migrations <managing-migrations>`
    chapter is being dropped. This is because the table is not mapped anywhere in the Doctrine ORM and the ``diff`` command
    detects that and generates the SQL to drop the table. If you want to ignore some tables in your database take a
    look at `Ignoring Custom Tables <#ignoring-custom-tables>`_ chapter.

.. code-block:: php

    <?php

    declare(strict_types=1);

    namespace MyProject\\Migrations;

    use Doctrine\\DBAL\\Schema\\Schema;
    use Doctrine\\Migrations\\AbstractMigration;

    /**
     * Auto-generated Migration: Please modify to your needs!
     */
    final class Version20180601215504 extends AbstractMigration
    {
        public function getDescription() : string
        {
            return '';
        }

        public function up(Schema \$schema) : void
        {
            // this up() migration is auto-generated, please modify it to your needs
            \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

            \$this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
            \$this->addSql('DROP TABLE example_table');
        }

        public function down(Schema \$schema) : void
        {
            // this down() migration is auto-generated, please modify it to your needs
            \$this->abortIf(\$this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \\'mysql\\'.');

            \$this->addSql('CREATE TABLE example_table (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
            \$this->addSql('DROP TABLE users');
        }
    }

Now you are ready to execute your diff migration:

.. code-block:: sh

    \$ ./vendor/bin/doctrine-migrations migrate

                        My Project Migrations


    WARNING! You are about to execute a database migration that could result in schema changes and data loss. Are you sure you wish to continue? (y/n)y
    Migrating up to 20180601215504 from 20180601193057

      ++ migrating 20180601215504

         -> CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB
         -> DROP TABLE example_table

      ++ migrated (took 75.9ms, used 8M memory)

      ------------------------

      ++ finished in 84.3ms
      ++ used 8M memory
      ++ 1 migrations executed
      ++ 1 sql queries

The SQL generated here is the exact same SQL that would be executed if you were using the ``orm:schema-tool`` command.
This just allows you to capture that SQL and maybe tweak it or add to it and trigger the deployment later across
multiple database servers.

Diffing Without the ORM
-----------------------

Internally the diff command generates a ``Doctrine\\DBAL\\Schema\\Schema`` object from your entities metadata using an
implementation of ``Doctrine\\Migrations\\Provider\\SchemaProviderInterface``. To use the Schema representation
directly, without the ORM, you must implement this interface yourself.

The ``SchemaProviderInterface`` only has one method named ``createSchema``. This should return a ``Doctrine\\DBAL\\Schema\\Schema``
instance that represents the state to which you'd like to migrate your database.

.. code-block:: php

    <?php

    use Doctrine\\DBAL\\Schema\\Schema;
    use Doctrine\\Migrations\\Provider\\SchemaProviderInterface;

    final class CustomSchemaProvider implements SchemaProviderInterface
    {
        public function createSchema()
        {
            \$schema = new Schema();

            \$table = \$schema->createTable('users');

            \$table->addColumn('id', 'integer', [
                'autoincrement' => true,
            ]);

            \$table->addColumn('username', 'string', [
                'notnull' => false,
            ]);

            \$table->setPrimaryKey(array('id'));

            return \$schema;
        }
    }

The ``StubSchemaProvider`` provided with the migrations library is another option.
It simply takes a schema object to its constructor and returns it from ``createSchema``.

.. code-block:: php

    <?php

    use Doctrine\\DBAL\\Schema\\Schema;
    use Doctrine\\Migrations\\Provider\\StubSchemaProvider;

    \$schema = new Schema();

    \$table = \$schema->createTable('users');

    \$table->addColumn('id', 'integer', [
        'autoincrement' => true,
    ]);

    \$table->addColumn('username', 'string', [
        'notnull' => false,
    ]);

    \$table->setPrimaryKey(array('id'));

    \$provider = new StubSchemaProvider(\$schema);
    \$provider->createSchema() === \$schema; // true

By default the Doctrine Migrations command line tool will only add the diff command if the ORM is present.
Without the ORM, you'll have to add the diff command to your console application manually, passing in your schema
provider implementation to the diff command's constructor. Take a look at the :ref:`Custom Integration <custom-integration>`
chapter for information on how to setup a custom console application.

.. code-block:: php

    <?php

    use Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand;

    \$schemaProvider = new CustomSchemaProvider();

    /** @var Symfony\\Component\\Console\\Application */
    \$cli->add(new DiffCommand(\$schemaProvider));

    // ...

    \$cli->run();

With the custom provider in place the ``diff`` command will compare the current database schema to the one provided by
the ``SchemaProviderInterface`` implementation. If there is a mismatch, the differences will be included in the
generated migration just like the ORM examples above.

Formatted SQL
-------------

You can optionally pass the ``--formatted`` option if you want the dumped SQL to be formatted. This option uses
the ``jdorn/sql-formatter`` package so you will need to install this package for it to work:

.. code-block:: sh

    \$ composer require jdorn/sql-formatter

Ignoring Custom Tables
----------------------

If you have custom tables which are not managed by Doctrine you will need to tell Doctrine to ignore these tables.
Otherwise, everytime you run the ``diff`` command, Doctrine will try to drop those tables. You can configure Doctrine
with a schema filter.

.. code-block:: php

    \$connection->getConfiguration()->setFilterSchemaAssetsExpression(\"~^(?!t_)~\");

With this expression all tables prefixed with t_ will ignored by the schema tool.

If you use the DoctrineBundle with Symfony you can set the ``schema_filter`` option
in your configuration. You can find more information in the documentation of the
DoctrineMigrationsBundle.

:ref:`Next Chapter: Custom Configuration <custom-configuration>`
", "vendor/doctrine/migrations/docs/en/reference/generating-migrations.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/docs/en/reference/generating-migrations.rst");
    }
}
