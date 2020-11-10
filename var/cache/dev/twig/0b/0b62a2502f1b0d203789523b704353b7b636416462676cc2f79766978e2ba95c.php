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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableStatus.php */
class __TwigTemplate_26fb5a32c59c07e90e78e3d137887bca9c407472dc7f8f51b3276d7b2ee57fe7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableStatus.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableStatus.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tracking;

use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;

/**
 * The TableStatus class is responsible for checking if the tracking table needs to be created or updated.
 *
 * @internal
 */
class TableStatus
{
    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var TableDefinition */
    private \$migrationTable;

    /** @var bool|null */
    private \$created;

    /** @var bool|null */
    private \$upToDate;

    public function __construct(
        AbstractSchemaManager \$schemaManager,
        TableDefinition \$migrationTable
    ) {
        \$this->schemaManager  = \$schemaManager;
        \$this->migrationTable = \$migrationTable;
    }

    public function setCreated(bool \$created) : void
    {
        \$this->created = \$created;
    }

    public function isCreated() : bool
    {
        if (\$this->created !== null) {
            return \$this->created;
        }

        \$this->created = \$this->schemaManager->tablesExist([\$this->migrationTable->getName()]);

        return \$this->created;
    }

    public function setUpToDate(bool \$upToDate) : void
    {
        \$this->upToDate = \$upToDate;
    }

    public function isUpToDate() : bool
    {
        if (\$this->upToDate !== null) {
            return \$this->upToDate;
        }

        \$table = \$this->schemaManager->listTableDetails(\$this->migrationTable->getName());

        \$this->upToDate = true;

        foreach (\$this->migrationTable->getColumnNames() as \$columnName) {
            if (\$table->hasColumn(\$columnName)) {
                continue;
            }

            \$this->upToDate = false;
            break;
        }

        return \$this->upToDate;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableStatus.php";
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

/**
 * The TableStatus class is responsible for checking if the tracking table needs to be created or updated.
 *
 * @internal
 */
class TableStatus
{
    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var TableDefinition */
    private \$migrationTable;

    /** @var bool|null */
    private \$created;

    /** @var bool|null */
    private \$upToDate;

    public function __construct(
        AbstractSchemaManager \$schemaManager,
        TableDefinition \$migrationTable
    ) {
        \$this->schemaManager  = \$schemaManager;
        \$this->migrationTable = \$migrationTable;
    }

    public function setCreated(bool \$created) : void
    {
        \$this->created = \$created;
    }

    public function isCreated() : bool
    {
        if (\$this->created !== null) {
            return \$this->created;
        }

        \$this->created = \$this->schemaManager->tablesExist([\$this->migrationTable->getName()]);

        return \$this->created;
    }

    public function setUpToDate(bool \$upToDate) : void
    {
        \$this->upToDate = \$upToDate;
    }

    public function isUpToDate() : bool
    {
        if (\$this->upToDate !== null) {
            return \$this->upToDate;
        }

        \$table = \$this->schemaManager->listTableDetails(\$this->migrationTable->getName());

        \$this->upToDate = true;

        foreach (\$this->migrationTable->getColumnNames() as \$columnName) {
            if (\$table->hasColumn(\$columnName)) {
                continue;
            }

            \$this->upToDate = false;
            break;
        }

        return \$this->upToDate;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableStatus.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableStatus.php");
    }
}
