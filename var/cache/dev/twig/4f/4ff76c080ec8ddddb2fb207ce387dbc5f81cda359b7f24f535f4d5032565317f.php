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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationStatusInfosHelper.php */
class __TwigTemplate_e0d56e474df9427dfba7d7bbd077ca98671e2419e8fc3bb9f279b622c544d845 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationStatusInfosHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationStatusInfosHelper.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Helper;

use Doctrine\\Migrations\\Configuration\\AbstractFileConfiguration;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\MigrationRepository;
use function count;
use function sprintf;

/**
 * The MigrationStatusInfosHelper class is responsible for building the array of information used when displaying
 * the status of your migrations.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand
 */
class MigrationStatusInfosHelper
{
    /** @var Configuration  */
    private \$configuration;

    /** @var MigrationRepository  */
    private \$migrationRepository;

    public function __construct(
        Configuration \$configuration,
        MigrationRepository \$migrationRepository
    ) {
        \$this->configuration       = \$configuration;
        \$this->migrationRepository = \$migrationRepository;
    }

    /** @return string[]|int[]|null[] */
    public function getMigrationsInfos() : array
    {
        \$executedMigrations            = \$this->migrationRepository->getMigratedVersions();
        \$availableMigrations           = \$this->migrationRepository->getAvailableVersions();
        \$newMigrations                 = \$this->migrationRepository->getNewVersions();
        \$executedUnavailableMigrations = \$this->migrationRepository->getExecutedUnavailableMigrations();

        return [
            'Name'                              => \$this->configuration->getName() ?? 'Doctrine Database Migrations',
            'Database Driver'                   => \$this->configuration->getConnection()->getDriver()->getName(),
            'Database Host'                     => \$this->configuration->getConnection()->getHost(),
            'Database Name'                     => \$this->configuration->getConnection()->getDatabase(),
            'Configuration Source'              => \$this->configuration instanceof AbstractFileConfiguration ? \$this->configuration->getFile() : 'manually configured',
            'Version Table Name'                => \$this->configuration->getMigrationsTableName(),
            'Version Column Name'               => \$this->configuration->getMigrationsColumnName(),
            'Migrations Namespace'              => \$this->configuration->getMigrationsNamespace(),
            'Migrations Directory'              => \$this->configuration->getMigrationsDirectory(),
            'Previous Version'                  => \$this->getFormattedVersionAlias('prev'),
            'Current Version'                   => \$this->getFormattedVersionAlias('current'),
            'Next Version'                      => \$this->getFormattedVersionAlias('next'),
            'Latest Version'                    => \$this->getFormattedVersionAlias('latest'),
            'Executed Migrations'               => count(\$executedMigrations),
            'Executed Unavailable Migrations'   => count(\$executedUnavailableMigrations),
            'Available Migrations'              => count(\$availableMigrations),
            'New Migrations'                    => count(\$newMigrations),
        ];
    }

    private function getFormattedVersionAlias(string \$alias) : string
    {
        \$version = \$this->configuration->resolveVersionAlias(\$alias);

        // No version found
        if (\$version === null) {
            if (\$alias === 'next') {
                return 'Already at latest version';
            }

            if (\$alias === 'prev') {
                return 'Already at first version';
            }
        }

        // Before first version \"virtual\" version number
        if (\$version === '0') {
            return '<comment>0</comment>';
        }

        // Show normal version number
        return sprintf(
            '%s (<comment>%s</comment>)',
            \$this->configuration->getDateTime((string) \$version),
            \$version
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationStatusInfosHelper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Helper;

use Doctrine\\Migrations\\Configuration\\AbstractFileConfiguration;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\MigrationRepository;
use function count;
use function sprintf;

/**
 * The MigrationStatusInfosHelper class is responsible for building the array of information used when displaying
 * the status of your migrations.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand
 */
class MigrationStatusInfosHelper
{
    /** @var Configuration  */
    private \$configuration;

    /** @var MigrationRepository  */
    private \$migrationRepository;

    public function __construct(
        Configuration \$configuration,
        MigrationRepository \$migrationRepository
    ) {
        \$this->configuration       = \$configuration;
        \$this->migrationRepository = \$migrationRepository;
    }

    /** @return string[]|int[]|null[] */
    public function getMigrationsInfos() : array
    {
        \$executedMigrations            = \$this->migrationRepository->getMigratedVersions();
        \$availableMigrations           = \$this->migrationRepository->getAvailableVersions();
        \$newMigrations                 = \$this->migrationRepository->getNewVersions();
        \$executedUnavailableMigrations = \$this->migrationRepository->getExecutedUnavailableMigrations();

        return [
            'Name'                              => \$this->configuration->getName() ?? 'Doctrine Database Migrations',
            'Database Driver'                   => \$this->configuration->getConnection()->getDriver()->getName(),
            'Database Host'                     => \$this->configuration->getConnection()->getHost(),
            'Database Name'                     => \$this->configuration->getConnection()->getDatabase(),
            'Configuration Source'              => \$this->configuration instanceof AbstractFileConfiguration ? \$this->configuration->getFile() : 'manually configured',
            'Version Table Name'                => \$this->configuration->getMigrationsTableName(),
            'Version Column Name'               => \$this->configuration->getMigrationsColumnName(),
            'Migrations Namespace'              => \$this->configuration->getMigrationsNamespace(),
            'Migrations Directory'              => \$this->configuration->getMigrationsDirectory(),
            'Previous Version'                  => \$this->getFormattedVersionAlias('prev'),
            'Current Version'                   => \$this->getFormattedVersionAlias('current'),
            'Next Version'                      => \$this->getFormattedVersionAlias('next'),
            'Latest Version'                    => \$this->getFormattedVersionAlias('latest'),
            'Executed Migrations'               => count(\$executedMigrations),
            'Executed Unavailable Migrations'   => count(\$executedUnavailableMigrations),
            'Available Migrations'              => count(\$availableMigrations),
            'New Migrations'                    => count(\$newMigrations),
        ];
    }

    private function getFormattedVersionAlias(string \$alias) : string
    {
        \$version = \$this->configuration->resolveVersionAlias(\$alias);

        // No version found
        if (\$version === null) {
            if (\$alias === 'next') {
                return 'Already at latest version';
            }

            if (\$alias === 'prev') {
                return 'Already at first version';
            }
        }

        // Before first version \"virtual\" version number
        if (\$version === '0') {
            return '<comment>0</comment>';
        }

        // Show normal version number
        return sprintf(
            '%s (<comment>%s</comment>)',
            \$this->configuration->getDateTime((string) \$version),
            \$version
        );
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationStatusInfosHelper.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationStatusInfosHelper.php");
    }
}
