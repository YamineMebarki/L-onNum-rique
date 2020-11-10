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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableUpdater.php */
class __TwigTemplate_ef551d09a72484a059110674de4fa33f8cd5417f856ae30aa4fe00fa195f848b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableUpdater.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableUpdater.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tracking;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Table;
use Throwable;
use function in_array;

/**
 * The TableUpdater class is responsible for updating the tracking table schema if it needs to be updated.
 *
 * @internal
 */
class TableUpdater
{
    /** @var Connection */
    private \$connection;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var TableDefinition */
    private \$migrationTable;

    /** @var AbstractPlatform */
    private \$platform;

    public function __construct(
        Connection \$connection,
        AbstractSchemaManager \$schemaManager,
        TableDefinition \$migrationTable,
        AbstractPlatform \$platform
    ) {
        \$this->connection     = \$connection;
        \$this->schemaManager  = \$schemaManager;
        \$this->migrationTable = \$migrationTable;
        \$this->platform       = \$platform;
    }

    public function updateMigrationTable() : void
    {
        \$fromTable = \$this->getFromTable();
        \$toTable   = \$this->migrationTable->getDBALTable();

        \$fromSchema = \$this->createSchema([\$fromTable]);
        \$toSchema   = \$this->createSchema([\$toTable]);

        \$queries = \$fromSchema->getMigrateToSql(\$toSchema, \$this->platform);

        \$this->connection->beginTransaction();

        try {
            foreach (\$queries as \$query) {
                \$this->connection->executeQuery(\$query);
            }
        } catch (Throwable \$e) {
            \$this->connection->rollBack();

            throw \$e;
        }

        \$this->connection->commit();
    }

    /**
     * @param Table[] \$tables
     */
    protected function createSchema(array \$tables) : Schema
    {
        return new Schema(\$tables);
    }

    private function getFromTable() : Table
    {
        \$tableName   = \$this->migrationTable->getName();
        \$columnNames = \$this->migrationTable->getColumnNames();

        \$currentTable = \$this->schemaManager->listTableDetails(\$tableName);

        \$table = \$this->migrationTable->createDBALTable(\$currentTable->getColumns());

        // remove columns from the table definition that we don't care about
        // so we don't try to drop those columns
        foreach (\$table->getColumns() as \$column) {
            if (in_array(\$column->getName(), \$columnNames, true)) {
                continue;
            }

            \$table->dropColumn(\$column->getName());
        }

        return \$table;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableUpdater.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tracking;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Table;
use Throwable;
use function in_array;

/**
 * The TableUpdater class is responsible for updating the tracking table schema if it needs to be updated.
 *
 * @internal
 */
class TableUpdater
{
    /** @var Connection */
    private \$connection;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var TableDefinition */
    private \$migrationTable;

    /** @var AbstractPlatform */
    private \$platform;

    public function __construct(
        Connection \$connection,
        AbstractSchemaManager \$schemaManager,
        TableDefinition \$migrationTable,
        AbstractPlatform \$platform
    ) {
        \$this->connection     = \$connection;
        \$this->schemaManager  = \$schemaManager;
        \$this->migrationTable = \$migrationTable;
        \$this->platform       = \$platform;
    }

    public function updateMigrationTable() : void
    {
        \$fromTable = \$this->getFromTable();
        \$toTable   = \$this->migrationTable->getDBALTable();

        \$fromSchema = \$this->createSchema([\$fromTable]);
        \$toSchema   = \$this->createSchema([\$toTable]);

        \$queries = \$fromSchema->getMigrateToSql(\$toSchema, \$this->platform);

        \$this->connection->beginTransaction();

        try {
            foreach (\$queries as \$query) {
                \$this->connection->executeQuery(\$query);
            }
        } catch (Throwable \$e) {
            \$this->connection->rollBack();

            throw \$e;
        }

        \$this->connection->commit();
    }

    /**
     * @param Table[] \$tables
     */
    protected function createSchema(array \$tables) : Schema
    {
        return new Schema(\$tables);
    }

    private function getFromTable() : Table
    {
        \$tableName   = \$this->migrationTable->getName();
        \$columnNames = \$this->migrationTable->getColumnNames();

        \$currentTable = \$this->schemaManager->listTableDetails(\$tableName);

        \$table = \$this->migrationTable->createDBALTable(\$currentTable->getColumns());

        // remove columns from the table definition that we don't care about
        // so we don't try to drop those columns
        foreach (\$table->getColumns() as \$column) {
            if (in_array(\$column->getName(), \$columnNames, true)) {
                continue;
            }

            \$table->dropColumn(\$column->getName());
        }

        return \$table;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableUpdater.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableUpdater.php");
    }
}
