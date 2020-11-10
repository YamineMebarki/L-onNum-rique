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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Rollup.php */
class __TwigTemplate_247fee014e91545902b473e264c796803d6a25bf7b62180d30573c792e892695 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Rollup.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Rollup.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Exception\\RollupFailed;
use Doctrine\\Migrations\\Version\\Version;
use function count;
use function current;
use function sprintf;

/**
 * The Rollup class is responsible for deleting all previously executed migrations from the versions table
 * and marking the freshly dumped schema migration (that was created with SchemaDumper) as migrated.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\SchemaDumper
 */
class Rollup
{
    /** @var Configuration */
    private \$configuration;

    /** @var Connection */
    private \$connection;

    /** @var MigrationRepository */
    private \$migrationRepository;

    public function __construct(
        Configuration \$configuration,
        Connection \$connection,
        MigrationRepository \$migrationRepository
    ) {
        \$this->configuration       = \$configuration;
        \$this->connection          = \$connection;
        \$this->migrationRepository = \$migrationRepository;
    }

    /**
     * @throws RollupFailed
     */
    public function rollup() : Version
    {
        \$versions = \$this->migrationRepository->getVersions();

        if (count(\$versions) === 0) {
            throw RollupFailed::noMigrationsFound();
        }

        if (count(\$versions) > 1) {
            throw RollupFailed::tooManyMigrations();
        }

        \$sql = sprintf(
            'DELETE FROM %s',
            \$this->configuration->getMigrationsTableName()
        );

        \$this->connection->executeQuery(\$sql);

        \$version = current(\$versions);

        \$version->markMigrated();

        return \$version;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Rollup.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Exception\\RollupFailed;
use Doctrine\\Migrations\\Version\\Version;
use function count;
use function current;
use function sprintf;

/**
 * The Rollup class is responsible for deleting all previously executed migrations from the versions table
 * and marking the freshly dumped schema migration (that was created with SchemaDumper) as migrated.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\SchemaDumper
 */
class Rollup
{
    /** @var Configuration */
    private \$configuration;

    /** @var Connection */
    private \$connection;

    /** @var MigrationRepository */
    private \$migrationRepository;

    public function __construct(
        Configuration \$configuration,
        Connection \$connection,
        MigrationRepository \$migrationRepository
    ) {
        \$this->configuration       = \$configuration;
        \$this->connection          = \$connection;
        \$this->migrationRepository = \$migrationRepository;
    }

    /**
     * @throws RollupFailed
     */
    public function rollup() : Version
    {
        \$versions = \$this->migrationRepository->getVersions();

        if (count(\$versions) === 0) {
            throw RollupFailed::noMigrationsFound();
        }

        if (count(\$versions) > 1) {
            throw RollupFailed::tooManyMigrations();
        }

        \$sql = sprintf(
            'DELETE FROM %s',
            \$this->configuration->getMigrationsTableName()
        );

        \$this->connection->executeQuery(\$sql);

        \$version = current(\$versions);

        \$version->markMigrated();

        return \$version;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Rollup.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Rollup.php");
    }
}
