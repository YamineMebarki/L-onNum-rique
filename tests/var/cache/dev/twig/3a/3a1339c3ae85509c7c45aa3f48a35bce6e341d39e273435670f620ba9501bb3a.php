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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableDefinition.php */
class __TwigTemplate_d0a76fe8b932fc2b5f0900d33c94f7cde8648fc0fb669ef8e1882b84dc24bc49 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableDefinition.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableDefinition.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tracking;

use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Types\\Type;

/**
 * The TableDefinition class is responsible for defining the schema of the table used to track the execution state of
 * each migration version.
 *
 * @internal
 */
class TableDefinition
{
    public const MIGRATION_COLUMN_TYPE             = 'string';
    public const MIGRATION_EXECUTED_AT_COLUMN_TYPE = 'datetime_immutable';

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var string */
    private \$name;

    /** @var string */
    private \$columnName;

    /** @var int */
    private \$columnLength;

    /** @var string */
    private \$executedAtColumnName;

    public function __construct(
        AbstractSchemaManager \$schemaManager,
        string \$name,
        string \$columnName,
        int \$columnLength,
        string \$executedAtColumnName
    ) {
        \$this->schemaManager        = \$schemaManager;
        \$this->name                 = \$name;
        \$this->columnName           = \$columnName;
        \$this->columnLength         = \$columnLength;
        \$this->executedAtColumnName = \$executedAtColumnName;
    }

    public function getName() : string
    {
        return \$this->name;
    }

    public function getColumnName() : string
    {
        return \$this->columnName;
    }

    public function getColumnLength() : int
    {
        return \$this->columnLength;
    }

    public function getExecutedAtColumnName() : string
    {
        return \$this->executedAtColumnName;
    }

    public function getMigrationsColumn() : Column
    {
        return new Column(
            \$this->columnName,
            Type::getType(self::MIGRATION_COLUMN_TYPE),
            ['length' => \$this->columnLength]
        );
    }

    public function getExecutedAtColumn() : Column
    {
        return new Column(
            \$this->executedAtColumnName,
            Type::getType(self::MIGRATION_EXECUTED_AT_COLUMN_TYPE)
        );
    }

    /**
     * @return string[]
     */
    public function getColumnNames() : array
    {
        return [
            \$this->columnName,
            \$this->executedAtColumnName,
        ];
    }

    public function getDBALTable() : Table
    {
        \$executedAtColumn = \$this->getExecutedAtColumn();
        \$executedAtColumn->setNotnull(false);

        \$columns = [
            \$this->columnName           => \$this->getMigrationsColumn(),
            \$this->executedAtColumnName => \$executedAtColumn,
        ];

        return \$this->createDBALTable(\$columns);
    }

    public function getNewDBALTable() : Table
    {
        \$executedAtColumn = \$this->getExecutedAtColumn();
        \$executedAtColumn->setNotnull(true);

        \$columns = [
            \$this->columnName           => \$this->getMigrationsColumn(),
            \$this->executedAtColumnName => \$executedAtColumn,
        ];

        return \$this->createDBALTable(\$columns);
    }

    /**
     * @param Column[] \$columns
     */
    public function createDBALTable(array \$columns) : Table
    {
        \$schemaConfig = \$this->schemaManager->createSchemaConfig();

        \$table = new Table(\$this->getName(), \$columns);
        \$table->setPrimaryKey([\$this->getColumnName()]);

        foreach (\$schemaConfig->getDefaultTableOptions() as \$name => \$value) {
            \$table->addOption(\$name, \$value);
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
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableDefinition.php";
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

use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Types\\Type;

/**
 * The TableDefinition class is responsible for defining the schema of the table used to track the execution state of
 * each migration version.
 *
 * @internal
 */
class TableDefinition
{
    public const MIGRATION_COLUMN_TYPE             = 'string';
    public const MIGRATION_EXECUTED_AT_COLUMN_TYPE = 'datetime_immutable';

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var string */
    private \$name;

    /** @var string */
    private \$columnName;

    /** @var int */
    private \$columnLength;

    /** @var string */
    private \$executedAtColumnName;

    public function __construct(
        AbstractSchemaManager \$schemaManager,
        string \$name,
        string \$columnName,
        int \$columnLength,
        string \$executedAtColumnName
    ) {
        \$this->schemaManager        = \$schemaManager;
        \$this->name                 = \$name;
        \$this->columnName           = \$columnName;
        \$this->columnLength         = \$columnLength;
        \$this->executedAtColumnName = \$executedAtColumnName;
    }

    public function getName() : string
    {
        return \$this->name;
    }

    public function getColumnName() : string
    {
        return \$this->columnName;
    }

    public function getColumnLength() : int
    {
        return \$this->columnLength;
    }

    public function getExecutedAtColumnName() : string
    {
        return \$this->executedAtColumnName;
    }

    public function getMigrationsColumn() : Column
    {
        return new Column(
            \$this->columnName,
            Type::getType(self::MIGRATION_COLUMN_TYPE),
            ['length' => \$this->columnLength]
        );
    }

    public function getExecutedAtColumn() : Column
    {
        return new Column(
            \$this->executedAtColumnName,
            Type::getType(self::MIGRATION_EXECUTED_AT_COLUMN_TYPE)
        );
    }

    /**
     * @return string[]
     */
    public function getColumnNames() : array
    {
        return [
            \$this->columnName,
            \$this->executedAtColumnName,
        ];
    }

    public function getDBALTable() : Table
    {
        \$executedAtColumn = \$this->getExecutedAtColumn();
        \$executedAtColumn->setNotnull(false);

        \$columns = [
            \$this->columnName           => \$this->getMigrationsColumn(),
            \$this->executedAtColumnName => \$executedAtColumn,
        ];

        return \$this->createDBALTable(\$columns);
    }

    public function getNewDBALTable() : Table
    {
        \$executedAtColumn = \$this->getExecutedAtColumn();
        \$executedAtColumn->setNotnull(true);

        \$columns = [
            \$this->columnName           => \$this->getMigrationsColumn(),
            \$this->executedAtColumnName => \$executedAtColumn,
        ];

        return \$this->createDBALTable(\$columns);
    }

    /**
     * @param Column[] \$columns
     */
    public function createDBALTable(array \$columns) : Table
    {
        \$schemaConfig = \$this->schemaManager->createSchemaConfig();

        \$table = new Table(\$this->getName(), \$columns);
        \$table->setPrimaryKey([\$this->getColumnName()]);

        foreach (\$schemaConfig->getDefaultTableOptions() as \$name => \$value) {
            \$table->addOption(\$name, \$value);
        }

        return \$table;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableDefinition.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableDefinition.php");
    }
}
