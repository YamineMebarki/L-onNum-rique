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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Migrator.php */
class __TwigTemplate_1d27e1fc45e54e1f85e59083c4b99cf9828c8a04cb1930df57ac1ac83161ea3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Migrator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Migrator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Exception\\MigrationException;
use Doctrine\\Migrations\\Exception\\NoMigrationsToExecute;
use Doctrine\\Migrations\\Exception\\UnknownMigrationVersion;
use Doctrine\\Migrations\\Tools\\BytesFormatter;
use Doctrine\\Migrations\\Version\\Direction;
use Doctrine\\Migrations\\Version\\Version;
use Symfony\\Component\\Stopwatch\\StopwatchEvent;
use Throwable;
use const COUNT_RECURSIVE;
use function count;
use function sprintf;

/**
 * The Migrator class is responsible for generating and executing the SQL for a migration.
 *
 * @internal
 */
class Migrator
{
    /** @var Configuration */
    private \$configuration;

    /** @var MigrationRepository */
    private \$migrationRepository;

    /** @var OutputWriter */
    private \$outputWriter;

    /** @var Stopwatch */
    private \$stopwatch;

    public function __construct(
        Configuration \$configuration,
        MigrationRepository \$migrationRepository,
        OutputWriter \$outputWriter,
        Stopwatch \$stopwatch
    ) {
        \$this->configuration       = \$configuration;
        \$this->migrationRepository = \$migrationRepository;
        \$this->outputWriter        = \$outputWriter;
        \$this->stopwatch           = \$stopwatch;
    }

    /** @return string[][] */
    public function getSql(?string \$to = null) : array
    {
        \$migratorConfiguration = (new MigratorConfiguration())
            ->setDryRun(true);

        return \$this->migrate(\$to, \$migratorConfiguration);
    }

    public function writeSqlFile(string \$path, ?string \$to = null) : bool
    {
        \$sql = \$this->getSql(\$to);

        \$from = \$this->migrationRepository->getCurrentVersion();

        if (\$to === null) {
            \$to = \$this->migrationRepository->getLatestVersion();
        }

        \$direction = \$from > \$to
            ? Direction::DOWN
            : Direction::UP;

        \$this->outputWriter->write(
            sprintf(\"-- Migrating from %s to %s\\n\", \$from, \$to)
        );

        /**
         * Since the configuration object changes during the creation we cannot inject things
         * properly, so I had to violate LoD here (so please, let's find a way to solve it on v2).
         */
        return \$this->configuration
            ->getQueryWriter()
            ->write(\$path, \$direction, \$sql);
    }

    /**
     * @return string[][]
     *
     * @throws MigrationException
     */
    public function migrate(
        ?string \$to = null,
        ?MigratorConfiguration \$migratorConfiguration = null
    ) : array {
        \$migratorConfiguration = \$migratorConfiguration ?? new MigratorConfiguration();
        \$dryRun                = \$migratorConfiguration->isDryRun();

        if (\$to === null) {
            \$to = \$this->migrationRepository->getLatestVersion();
        }

        \$versions = \$this->migrationRepository->getMigrations();

        if (! isset(\$versions[\$to]) && \$to > 0) {
            throw UnknownMigrationVersion::new(\$to);
        }

        \$from = \$this->migrationRepository->getCurrentVersion();

        \$direction = \$this->calculateDirection(\$from, \$to);

        \$migrationsToExecute = \$this->configuration
            ->getMigrationsToExecute(\$direction, \$to);

        /**
         * If
         *  there are no migrations to execute
         *  and there are migrations,
         *  and the migration from and to are the same
         * means we are already at the destination return an empty array()
         * to signify that there is nothing left to do.
         */
        if (\$from === \$to && count(\$migrationsToExecute) === 0 && count(\$versions) !== 0) {
            return \$this->noMigrations();
        }

        \$output  = \$dryRun ? 'Executing dry run of migration' : 'Migrating';
        \$output .= ' <info>%s</info> to <comment>%s</comment> from <comment>%s</comment>';

        \$this->outputWriter->write(sprintf(\$output, \$direction, \$to, \$from));

        /**
         * If there are no migrations to execute throw an exception.
         */
        if (count(\$migrationsToExecute) === 0 && ! \$migratorConfiguration->getNoMigrationException()) {
            throw NoMigrationsToExecute::new();
        }

        if (count(\$migrationsToExecute) === 0) {
            return \$this->noMigrations();
        }

        \$stopwatchEvent = \$this->stopwatch->start('migrate');

        \$sql = \$this->executeMigration(\$migrationsToExecute, \$direction, \$migratorConfiguration);

        \$this->endMigration(\$stopwatchEvent, \$migrationsToExecute, \$sql);

        return \$sql;
    }

    /**
     * @param Version[] \$migrationsToExecute
     *
     * @return string[][]
     */
    private function executeMigration(
        array \$migrationsToExecute,
        string \$direction,
        MigratorConfiguration \$migratorConfiguration
    ) : array {
        \$dryRun = \$migratorConfiguration->isDryRun();

        \$connection = \$this->configuration->getConnection();

        \$allOrNothing = \$migratorConfiguration->isAllOrNothing();

        if (\$allOrNothing) {
            \$connection->beginTransaction();
        }

        try {
            \$this->configuration->dispatchMigrationEvent(Events::onMigrationsMigrating, \$direction, \$dryRun);

            \$sql  = [];
            \$time = 0;

            foreach (\$migrationsToExecute as \$version) {
                \$versionExecutionResult = \$version->execute(\$direction, \$migratorConfiguration);

                // capture the to Schema for the migration so we have the ability to use
                // it as the from Schema for the next migration when we are running a dry run
                // \$toSchema may be null in the case of skipped migrations
                if (! \$versionExecutionResult->isSkipped()) {
                    \$migratorConfiguration->setFromSchema(\$versionExecutionResult->getToSchema());
                }

                \$sql[\$version->getVersion()] = \$versionExecutionResult->getSql();
                \$time                       += \$versionExecutionResult->getTime();
            }

            \$this->configuration->dispatchMigrationEvent(Events::onMigrationsMigrated, \$direction, \$dryRun);
        } catch (Throwable \$e) {
            if (\$allOrNothing) {
                \$connection->rollBack();
            }

            throw \$e;
        }

        if (\$allOrNothing) {
            \$connection->commit();
        }

        return \$sql;
    }

    /**
     * @param Version[]  \$migrationsToExecute
     * @param string[][] \$sql
     */
    private function endMigration(
        StopwatchEvent \$stopwatchEvent,
        array \$migrationsToExecute,
        array \$sql
    ) : void {
        \$stopwatchEvent->stop();

        \$this->outputWriter->write(\"\\n  <comment>------------------------</comment>\\n\");

        \$this->outputWriter->write(sprintf(
            '  <info>++</info> finished in %sms',
            \$stopwatchEvent->getDuration()
        ));

        \$this->outputWriter->write(sprintf(
            '  <info>++</info> used %s memory',
            BytesFormatter::formatBytes(\$stopwatchEvent->getMemory())
        ));

        \$this->outputWriter->write(sprintf(
            '  <info>++</info> %s migrations executed',
            count(\$migrationsToExecute)
        ));

        \$this->outputWriter->write(sprintf(
            '  <info>++</info> %s sql queries',
            count(\$sql, COUNT_RECURSIVE) - count(\$sql)
        ));
    }

    private function calculateDirection(string \$from, string \$to) : string
    {
        return (int) \$from > (int) \$to ? Direction::DOWN : Direction::UP;
    }

    /** @return string[][] */
    private function noMigrations() : array
    {
        \$this->outputWriter->write('<comment>No migrations to execute.</comment>');

        return [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Migrator.php";
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

use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Exception\\MigrationException;
use Doctrine\\Migrations\\Exception\\NoMigrationsToExecute;
use Doctrine\\Migrations\\Exception\\UnknownMigrationVersion;
use Doctrine\\Migrations\\Tools\\BytesFormatter;
use Doctrine\\Migrations\\Version\\Direction;
use Doctrine\\Migrations\\Version\\Version;
use Symfony\\Component\\Stopwatch\\StopwatchEvent;
use Throwable;
use const COUNT_RECURSIVE;
use function count;
use function sprintf;

/**
 * The Migrator class is responsible for generating and executing the SQL for a migration.
 *
 * @internal
 */
class Migrator
{
    /** @var Configuration */
    private \$configuration;

    /** @var MigrationRepository */
    private \$migrationRepository;

    /** @var OutputWriter */
    private \$outputWriter;

    /** @var Stopwatch */
    private \$stopwatch;

    public function __construct(
        Configuration \$configuration,
        MigrationRepository \$migrationRepository,
        OutputWriter \$outputWriter,
        Stopwatch \$stopwatch
    ) {
        \$this->configuration       = \$configuration;
        \$this->migrationRepository = \$migrationRepository;
        \$this->outputWriter        = \$outputWriter;
        \$this->stopwatch           = \$stopwatch;
    }

    /** @return string[][] */
    public function getSql(?string \$to = null) : array
    {
        \$migratorConfiguration = (new MigratorConfiguration())
            ->setDryRun(true);

        return \$this->migrate(\$to, \$migratorConfiguration);
    }

    public function writeSqlFile(string \$path, ?string \$to = null) : bool
    {
        \$sql = \$this->getSql(\$to);

        \$from = \$this->migrationRepository->getCurrentVersion();

        if (\$to === null) {
            \$to = \$this->migrationRepository->getLatestVersion();
        }

        \$direction = \$from > \$to
            ? Direction::DOWN
            : Direction::UP;

        \$this->outputWriter->write(
            sprintf(\"-- Migrating from %s to %s\\n\", \$from, \$to)
        );

        /**
         * Since the configuration object changes during the creation we cannot inject things
         * properly, so I had to violate LoD here (so please, let's find a way to solve it on v2).
         */
        return \$this->configuration
            ->getQueryWriter()
            ->write(\$path, \$direction, \$sql);
    }

    /**
     * @return string[][]
     *
     * @throws MigrationException
     */
    public function migrate(
        ?string \$to = null,
        ?MigratorConfiguration \$migratorConfiguration = null
    ) : array {
        \$migratorConfiguration = \$migratorConfiguration ?? new MigratorConfiguration();
        \$dryRun                = \$migratorConfiguration->isDryRun();

        if (\$to === null) {
            \$to = \$this->migrationRepository->getLatestVersion();
        }

        \$versions = \$this->migrationRepository->getMigrations();

        if (! isset(\$versions[\$to]) && \$to > 0) {
            throw UnknownMigrationVersion::new(\$to);
        }

        \$from = \$this->migrationRepository->getCurrentVersion();

        \$direction = \$this->calculateDirection(\$from, \$to);

        \$migrationsToExecute = \$this->configuration
            ->getMigrationsToExecute(\$direction, \$to);

        /**
         * If
         *  there are no migrations to execute
         *  and there are migrations,
         *  and the migration from and to are the same
         * means we are already at the destination return an empty array()
         * to signify that there is nothing left to do.
         */
        if (\$from === \$to && count(\$migrationsToExecute) === 0 && count(\$versions) !== 0) {
            return \$this->noMigrations();
        }

        \$output  = \$dryRun ? 'Executing dry run of migration' : 'Migrating';
        \$output .= ' <info>%s</info> to <comment>%s</comment> from <comment>%s</comment>';

        \$this->outputWriter->write(sprintf(\$output, \$direction, \$to, \$from));

        /**
         * If there are no migrations to execute throw an exception.
         */
        if (count(\$migrationsToExecute) === 0 && ! \$migratorConfiguration->getNoMigrationException()) {
            throw NoMigrationsToExecute::new();
        }

        if (count(\$migrationsToExecute) === 0) {
            return \$this->noMigrations();
        }

        \$stopwatchEvent = \$this->stopwatch->start('migrate');

        \$sql = \$this->executeMigration(\$migrationsToExecute, \$direction, \$migratorConfiguration);

        \$this->endMigration(\$stopwatchEvent, \$migrationsToExecute, \$sql);

        return \$sql;
    }

    /**
     * @param Version[] \$migrationsToExecute
     *
     * @return string[][]
     */
    private function executeMigration(
        array \$migrationsToExecute,
        string \$direction,
        MigratorConfiguration \$migratorConfiguration
    ) : array {
        \$dryRun = \$migratorConfiguration->isDryRun();

        \$connection = \$this->configuration->getConnection();

        \$allOrNothing = \$migratorConfiguration->isAllOrNothing();

        if (\$allOrNothing) {
            \$connection->beginTransaction();
        }

        try {
            \$this->configuration->dispatchMigrationEvent(Events::onMigrationsMigrating, \$direction, \$dryRun);

            \$sql  = [];
            \$time = 0;

            foreach (\$migrationsToExecute as \$version) {
                \$versionExecutionResult = \$version->execute(\$direction, \$migratorConfiguration);

                // capture the to Schema for the migration so we have the ability to use
                // it as the from Schema for the next migration when we are running a dry run
                // \$toSchema may be null in the case of skipped migrations
                if (! \$versionExecutionResult->isSkipped()) {
                    \$migratorConfiguration->setFromSchema(\$versionExecutionResult->getToSchema());
                }

                \$sql[\$version->getVersion()] = \$versionExecutionResult->getSql();
                \$time                       += \$versionExecutionResult->getTime();
            }

            \$this->configuration->dispatchMigrationEvent(Events::onMigrationsMigrated, \$direction, \$dryRun);
        } catch (Throwable \$e) {
            if (\$allOrNothing) {
                \$connection->rollBack();
            }

            throw \$e;
        }

        if (\$allOrNothing) {
            \$connection->commit();
        }

        return \$sql;
    }

    /**
     * @param Version[]  \$migrationsToExecute
     * @param string[][] \$sql
     */
    private function endMigration(
        StopwatchEvent \$stopwatchEvent,
        array \$migrationsToExecute,
        array \$sql
    ) : void {
        \$stopwatchEvent->stop();

        \$this->outputWriter->write(\"\\n  <comment>------------------------</comment>\\n\");

        \$this->outputWriter->write(sprintf(
            '  <info>++</info> finished in %sms',
            \$stopwatchEvent->getDuration()
        ));

        \$this->outputWriter->write(sprintf(
            '  <info>++</info> used %s memory',
            BytesFormatter::formatBytes(\$stopwatchEvent->getMemory())
        ));

        \$this->outputWriter->write(sprintf(
            '  <info>++</info> %s migrations executed',
            count(\$migrationsToExecute)
        ));

        \$this->outputWriter->write(sprintf(
            '  <info>++</info> %s sql queries',
            count(\$sql, COUNT_RECURSIVE) - count(\$sql)
        ));
    }

    private function calculateDirection(string \$from, string \$to) : string
    {
        return (int) \$from > (int) \$to ? Direction::DOWN : Direction::UP;
    }

    /** @return string[][] */
    private function noMigrations() : array
    {
        \$this->outputWriter->write('<comment>No migrations to execute.</comment>');

        return [];
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Migrator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Migrator.php");
    }
}