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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableManipulator.php */
class __TwigTemplate_05a6799f7708d1a53fe859d9ad51cbb4c14613b54c9c03647271683a91b377f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableManipulator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableManipulator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tracking;

use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\Migrations\\Configuration\\Configuration;

/**
 * The TableManipulator class is responsible for creating and updating the schema of the table used to track
 * the execution state of each migration version.
 *
 * @internal
 */
class TableManipulator
{
    /** @var Configuration */
    private \$configuration;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var TableDefinition */
    private \$migrationTable;

    /** @var TableStatus */
    private \$migrationTableStatus;

    /** @var TableUpdater */
    private \$migrationTableUpdater;

    public function __construct(
        Configuration \$configuration,
        AbstractSchemaManager \$schemaManager,
        TableDefinition \$migrationTable,
        TableStatus \$migrationTableStatus,
        TableUpdater \$migrationTableUpdater
    ) {
        \$this->configuration         = \$configuration;
        \$this->schemaManager         = \$schemaManager;
        \$this->migrationTable        = \$migrationTable;
        \$this->migrationTableStatus  = \$migrationTableStatus;
        \$this->migrationTableUpdater = \$migrationTableUpdater;
    }

    public function createMigrationTable() : bool
    {
        \$this->configuration->validate();

        if (\$this->configuration->isDryRun()) {
            return false;
        }

        if (\$this->migrationTableStatus->isCreated()) {
            if (! \$this->migrationTableStatus->isUpToDate()) {
                \$this->migrationTableUpdater->updateMigrationTable();

                \$this->migrationTableStatus->setUpToDate(true);

                return true;
            }

            return false;
        }

        \$table = \$this->migrationTable->getNewDBALTable();

        \$this->schemaManager->createTable(\$table);

        \$this->migrationTableStatus->setCreated(true);

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableManipulator.php";
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
use Doctrine\\Migrations\\Configuration\\Configuration;

/**
 * The TableManipulator class is responsible for creating and updating the schema of the table used to track
 * the execution state of each migration version.
 *
 * @internal
 */
class TableManipulator
{
    /** @var Configuration */
    private \$configuration;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var TableDefinition */
    private \$migrationTable;

    /** @var TableStatus */
    private \$migrationTableStatus;

    /** @var TableUpdater */
    private \$migrationTableUpdater;

    public function __construct(
        Configuration \$configuration,
        AbstractSchemaManager \$schemaManager,
        TableDefinition \$migrationTable,
        TableStatus \$migrationTableStatus,
        TableUpdater \$migrationTableUpdater
    ) {
        \$this->configuration         = \$configuration;
        \$this->schemaManager         = \$schemaManager;
        \$this->migrationTable        = \$migrationTable;
        \$this->migrationTableStatus  = \$migrationTableStatus;
        \$this->migrationTableUpdater = \$migrationTableUpdater;
    }

    public function createMigrationTable() : bool
    {
        \$this->configuration->validate();

        if (\$this->configuration->isDryRun()) {
            return false;
        }

        if (\$this->migrationTableStatus->isCreated()) {
            if (! \$this->migrationTableStatus->isUpToDate()) {
                \$this->migrationTableUpdater->updateMigrationTable();

                \$this->migrationTableStatus->setUpToDate(true);

                return true;
            }

            return false;
        }

        \$table = \$this->migrationTable->getNewDBALTable();

        \$this->schemaManager->createTable(\$table);

        \$this->migrationTableStatus->setCreated(true);

        return true;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableManipulator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableManipulator.php");
    }
}
