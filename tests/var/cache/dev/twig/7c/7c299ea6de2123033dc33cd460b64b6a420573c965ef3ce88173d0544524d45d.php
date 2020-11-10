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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Executor.php */
class __TwigTemplate_02d2758c3f67f1fc827dc1a83a2e211cb2e644839dc12e3eee16c2b14ac4cbe8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Executor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Executor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Events;
use Doctrine\\Migrations\\Exception\\SkipMigration;
use Doctrine\\Migrations\\MigratorConfiguration;
use Doctrine\\Migrations\\OutputWriter;
use Doctrine\\Migrations\\ParameterFormatterInterface;
use Doctrine\\Migrations\\Provider\\SchemaDiffProviderInterface;
use Doctrine\\Migrations\\Stopwatch;
use Doctrine\\Migrations\\Tools\\BytesFormatter;
use Throwable;
use function count;
use function rtrim;
use function sprintf;
use function ucfirst;

/**
 * The Executor class is responsible for executing a single migration version.
 *
 * @internal
 */
final class Executor implements ExecutorInterface
{
    /** @var Configuration */
    private \$configuration;

    /** @var Connection */
    private \$connection;

    /** @var SchemaDiffProviderInterface */
    private \$schemaProvider;

    /** @var OutputWriter */
    private \$outputWriter;

    /** @var ParameterFormatterInterface */
    private \$parameterFormatter;

    /** @var Stopwatch */
    private \$stopwatch;

    /** @var string[] */
    private \$sql = [];

    /** @var mixed[] */
    private \$params = [];

    /** @var mixed[] */
    private \$types = [];

    public function __construct(
        Configuration \$configuration,
        Connection \$connection,
        SchemaDiffProviderInterface \$schemaProvider,
        OutputWriter \$outputWriter,
        ParameterFormatterInterface \$parameterFormatter,
        Stopwatch \$stopwatch
    ) {
        \$this->configuration      = \$configuration;
        \$this->connection         = \$connection;
        \$this->schemaProvider     = \$schemaProvider;
        \$this->outputWriter       = \$outputWriter;
        \$this->parameterFormatter = \$parameterFormatter;
        \$this->stopwatch          = \$stopwatch;
    }

    /**
     * @return string[]
     */
    public function getSql() : array
    {
        return \$this->sql;
    }

    /**
     * @return mixed[]
     */
    public function getParams() : array
    {
        return \$this->params;
    }

    /**
     * @return mixed[]
     */
    public function getTypes() : array
    {
        return \$this->types;
    }

    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    public function addSql(string \$sql, array \$params = [], array \$types = []) : void
    {
        \$this->sql[] = \$sql;

        if (count(\$params) === 0) {
            return;
        }

        \$this->addQueryParams(\$params, \$types);
    }

    public function execute(
        Version \$version,
        AbstractMigration \$migration,
        string \$direction,
        ?MigratorConfiguration \$migratorConfiguration = null
    ) : ExecutionResult {
        \$migratorConfiguration = \$migratorConfiguration ?? new MigratorConfiguration();

        \$versionExecutionResult = new ExecutionResult();

        \$this->startMigration(\$version, \$migration, \$direction, \$migratorConfiguration);

        try {
            \$this->executeMigration(
                \$version,
                \$migration,
                \$versionExecutionResult,
                \$direction,
                \$migratorConfiguration
            );

            \$versionExecutionResult->setSql(\$this->sql);
            \$versionExecutionResult->setParams(\$this->params);
            \$versionExecutionResult->setTypes(\$this->types);
        } catch (SkipMigration \$e) {
            \$this->skipMigration(
                \$e,
                \$version,
                \$migration,
                \$direction,
                \$migratorConfiguration
            );

            \$versionExecutionResult->setSkipped(true);
        } catch (Throwable \$e) {
            \$this->migrationError(\$e, \$version, \$migration);

            \$versionExecutionResult->setError(true);
            \$versionExecutionResult->setException(\$e);

            throw \$e;
        }

        return \$versionExecutionResult;
    }

    private function startMigration(
        Version \$version,
        AbstractMigration \$migration,
        string \$direction,
        MigratorConfiguration \$migratorConfiguration
    ) : void {
        \$this->sql    = [];
        \$this->params = [];
        \$this->types  = [];

        \$this->configuration->dispatchVersionEvent(
            \$version,
            Events::onMigrationsVersionExecuting,
            \$direction,
            \$migratorConfiguration->isDryRun()
        );

        if (! \$migration->isTransactional()) {
            return;
        }

        // only start transaction if in transactional mode
        \$this->connection->beginTransaction();
    }

    private function executeMigration(
        Version \$version,
        AbstractMigration \$migration,
        ExecutionResult \$versionExecutionResult,
        string \$direction,
        MigratorConfiguration \$migratorConfiguration
    ) : ExecutionResult {
        \$stopwatchEvent = \$this->stopwatch->start('execute');

        \$version->setState(State::PRE);

        \$fromSchema = \$this->getFromSchema(\$migratorConfiguration);

        \$migration->{'pre' . ucfirst(\$direction)}(\$fromSchema);

        \$this->outputWriter->write(\"\\n\" . \$this->getMigrationHeader(\$version, \$migration, \$direction) . \"\\n\");

        \$version->setState(State::EXEC);

        \$toSchema = \$this->schemaProvider->createToSchema(\$fromSchema);

        \$versionExecutionResult->setToSchema(\$toSchema);

        \$migration->\$direction(\$toSchema);

        foreach (\$this->schemaProvider->getSqlDiffToMigrate(\$fromSchema, \$toSchema) as \$sql) {
            \$this->addSql(\$sql);
        }

        if (count(\$this->sql) !== 0) {
            if (! \$migratorConfiguration->isDryRun()) {
                \$this->executeVersionExecutionResult(\$version, \$migratorConfiguration);
            } else {
                foreach (\$this->sql as \$idx => \$query) {
                    \$this->outputSqlQuery(\$idx, \$query);
                }
            }
        } else {
            \$this->outputWriter->write(sprintf(
                '<error>Migration %s was executed but did not result in any SQL statements.</error>',
                \$version->getVersion()
            ));
        }

        \$version->setState(State::POST);

        \$migration->{'post' . ucfirst(\$direction)}(\$toSchema);

        if (! \$migratorConfiguration->isDryRun()) {
            \$version->markVersion(\$direction);
        }

        \$stopwatchEvent->stop();

        \$versionExecutionResult->setTime(\$stopwatchEvent->getDuration());
        \$versionExecutionResult->setMemory(\$stopwatchEvent->getMemory());

        if (\$direction === Direction::UP) {
            \$this->outputWriter->write(sprintf(
                \"\\n  <info>++</info> migrated (took %sms, used %s memory)\",
                \$stopwatchEvent->getDuration(),
                BytesFormatter::formatBytes(\$stopwatchEvent->getMemory())
            ));
        } else {
            \$this->outputWriter->write(sprintf(
                \"\\n  <info>--</info> reverted (took %sms, used %s memory)\",
                \$stopwatchEvent->getDuration(),
                BytesFormatter::formatBytes(\$stopwatchEvent->getMemory())
            ));
        }

        if (\$migration->isTransactional()) {
            //commit only if running in transactional mode
            \$this->connection->commit();
        }

        \$version->setState(State::NONE);

        \$this->configuration->dispatchVersionEvent(
            \$version,
            Events::onMigrationsVersionExecuted,
            \$direction,
            \$migratorConfiguration->isDryRun()
        );

        return \$versionExecutionResult;
    }

    private function getMigrationHeader(Version \$version, AbstractMigration \$migration, string \$direction) : string
    {
        \$versionInfo = \$version->getVersion();
        \$description = \$migration->getDescription();

        if (\$description !== '') {
            \$versionInfo .= ' (' . \$description . ')';
        }

        if (\$direction === Direction::UP) {
            return sprintf('  <info>++</info> migrating <comment>%s</comment>', \$versionInfo);
        }

        return sprintf('  <info>--</info> reverting <comment>%s</comment>', \$versionInfo);
    }

    private function skipMigration(
        SkipMigration \$e,
        Version \$version,
        AbstractMigration \$migration,
        string \$direction,
        MigratorConfiguration \$migratorConfiguration
    ) : void {
        if (\$migration->isTransactional()) {
            //only rollback transaction if in transactional mode
            \$this->connection->rollBack();
        }

        if (! \$migratorConfiguration->isDryRun()) {
            \$version->markVersion(\$direction);
        }

        \$this->outputWriter->write(sprintf(\"\\n  <info>SS</info> skipped (Reason: %s)\", \$e->getMessage()));

        \$version->setState(State::NONE);

        \$this->configuration->dispatchVersionEvent(
            \$version,
            Events::onMigrationsVersionSkipped,
            \$direction,
            \$migratorConfiguration->isDryRun()
        );
    }

    /**
     * @throws Throwable
     */
    private function migrationError(Throwable \$e, Version \$version, AbstractMigration \$migration) : void
    {
        \$this->outputWriter->write(sprintf(
            '<error>Migration %s failed during %s. Error %s</error>',
            \$version->getVersion(),
            \$version->getExecutionState(),
            \$e->getMessage()
        ));

        if (\$migration->isTransactional()) {
            //only rollback transaction if in transactional mode
            \$this->connection->rollBack();
        }

        \$version->setState(State::NONE);
    }

    private function executeVersionExecutionResult(
        Version \$version,
        MigratorConfiguration \$migratorConfiguration
    ) : void {
        foreach (\$this->sql as \$key => \$query) {
            \$stopwatchEvent = \$this->stopwatch->start('query');

            \$this->outputSqlQuery(\$key, \$query);

            if (! isset(\$this->params[\$key])) {
                \$this->connection->executeQuery(\$query);
            } else {
                \$this->connection->executeQuery(\$query, \$this->params[\$key], \$this->types[\$key]);
            }

            \$stopwatchEvent->stop();

            if (! \$migratorConfiguration->getTimeAllQueries()) {
                continue;
            }

            \$this->outputWriter->write(sprintf('  <info>%sms</info>', \$stopwatchEvent->getDuration()));
        }
    }

    /**
     * @param mixed[]|int \$params
     * @param mixed[]|int \$types
     */
    private function addQueryParams(\$params, \$types) : void
    {
        \$index                = count(\$this->sql) - 1;
        \$this->params[\$index] = \$params;
        \$this->types[\$index]  = \$types;
    }

    private function outputSqlQuery(int \$idx, string \$query) : void
    {
        \$params = \$this->parameterFormatter->formatParameters(
            \$this->params[\$idx] ?? [],
            \$this->types[\$idx] ?? []
        );

        \$this->outputWriter->write(rtrim(sprintf(
            '     <comment>-></comment> %s %s',
            \$query,
            \$params
        )));
    }

    private function getFromSchema(MigratorConfiguration \$migratorConfiguration) : Schema
    {
        // if we're in a dry run, use the from Schema instead of reading the schema from the database
        if (\$migratorConfiguration->isDryRun() && \$migratorConfiguration->getFromSchema() !== null) {
            return \$migratorConfiguration->getFromSchema();
        }

        return \$this->schemaProvider->createFromSchema();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Executor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Events;
use Doctrine\\Migrations\\Exception\\SkipMigration;
use Doctrine\\Migrations\\MigratorConfiguration;
use Doctrine\\Migrations\\OutputWriter;
use Doctrine\\Migrations\\ParameterFormatterInterface;
use Doctrine\\Migrations\\Provider\\SchemaDiffProviderInterface;
use Doctrine\\Migrations\\Stopwatch;
use Doctrine\\Migrations\\Tools\\BytesFormatter;
use Throwable;
use function count;
use function rtrim;
use function sprintf;
use function ucfirst;

/**
 * The Executor class is responsible for executing a single migration version.
 *
 * @internal
 */
final class Executor implements ExecutorInterface
{
    /** @var Configuration */
    private \$configuration;

    /** @var Connection */
    private \$connection;

    /** @var SchemaDiffProviderInterface */
    private \$schemaProvider;

    /** @var OutputWriter */
    private \$outputWriter;

    /** @var ParameterFormatterInterface */
    private \$parameterFormatter;

    /** @var Stopwatch */
    private \$stopwatch;

    /** @var string[] */
    private \$sql = [];

    /** @var mixed[] */
    private \$params = [];

    /** @var mixed[] */
    private \$types = [];

    public function __construct(
        Configuration \$configuration,
        Connection \$connection,
        SchemaDiffProviderInterface \$schemaProvider,
        OutputWriter \$outputWriter,
        ParameterFormatterInterface \$parameterFormatter,
        Stopwatch \$stopwatch
    ) {
        \$this->configuration      = \$configuration;
        \$this->connection         = \$connection;
        \$this->schemaProvider     = \$schemaProvider;
        \$this->outputWriter       = \$outputWriter;
        \$this->parameterFormatter = \$parameterFormatter;
        \$this->stopwatch          = \$stopwatch;
    }

    /**
     * @return string[]
     */
    public function getSql() : array
    {
        return \$this->sql;
    }

    /**
     * @return mixed[]
     */
    public function getParams() : array
    {
        return \$this->params;
    }

    /**
     * @return mixed[]
     */
    public function getTypes() : array
    {
        return \$this->types;
    }

    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    public function addSql(string \$sql, array \$params = [], array \$types = []) : void
    {
        \$this->sql[] = \$sql;

        if (count(\$params) === 0) {
            return;
        }

        \$this->addQueryParams(\$params, \$types);
    }

    public function execute(
        Version \$version,
        AbstractMigration \$migration,
        string \$direction,
        ?MigratorConfiguration \$migratorConfiguration = null
    ) : ExecutionResult {
        \$migratorConfiguration = \$migratorConfiguration ?? new MigratorConfiguration();

        \$versionExecutionResult = new ExecutionResult();

        \$this->startMigration(\$version, \$migration, \$direction, \$migratorConfiguration);

        try {
            \$this->executeMigration(
                \$version,
                \$migration,
                \$versionExecutionResult,
                \$direction,
                \$migratorConfiguration
            );

            \$versionExecutionResult->setSql(\$this->sql);
            \$versionExecutionResult->setParams(\$this->params);
            \$versionExecutionResult->setTypes(\$this->types);
        } catch (SkipMigration \$e) {
            \$this->skipMigration(
                \$e,
                \$version,
                \$migration,
                \$direction,
                \$migratorConfiguration
            );

            \$versionExecutionResult->setSkipped(true);
        } catch (Throwable \$e) {
            \$this->migrationError(\$e, \$version, \$migration);

            \$versionExecutionResult->setError(true);
            \$versionExecutionResult->setException(\$e);

            throw \$e;
        }

        return \$versionExecutionResult;
    }

    private function startMigration(
        Version \$version,
        AbstractMigration \$migration,
        string \$direction,
        MigratorConfiguration \$migratorConfiguration
    ) : void {
        \$this->sql    = [];
        \$this->params = [];
        \$this->types  = [];

        \$this->configuration->dispatchVersionEvent(
            \$version,
            Events::onMigrationsVersionExecuting,
            \$direction,
            \$migratorConfiguration->isDryRun()
        );

        if (! \$migration->isTransactional()) {
            return;
        }

        // only start transaction if in transactional mode
        \$this->connection->beginTransaction();
    }

    private function executeMigration(
        Version \$version,
        AbstractMigration \$migration,
        ExecutionResult \$versionExecutionResult,
        string \$direction,
        MigratorConfiguration \$migratorConfiguration
    ) : ExecutionResult {
        \$stopwatchEvent = \$this->stopwatch->start('execute');

        \$version->setState(State::PRE);

        \$fromSchema = \$this->getFromSchema(\$migratorConfiguration);

        \$migration->{'pre' . ucfirst(\$direction)}(\$fromSchema);

        \$this->outputWriter->write(\"\\n\" . \$this->getMigrationHeader(\$version, \$migration, \$direction) . \"\\n\");

        \$version->setState(State::EXEC);

        \$toSchema = \$this->schemaProvider->createToSchema(\$fromSchema);

        \$versionExecutionResult->setToSchema(\$toSchema);

        \$migration->\$direction(\$toSchema);

        foreach (\$this->schemaProvider->getSqlDiffToMigrate(\$fromSchema, \$toSchema) as \$sql) {
            \$this->addSql(\$sql);
        }

        if (count(\$this->sql) !== 0) {
            if (! \$migratorConfiguration->isDryRun()) {
                \$this->executeVersionExecutionResult(\$version, \$migratorConfiguration);
            } else {
                foreach (\$this->sql as \$idx => \$query) {
                    \$this->outputSqlQuery(\$idx, \$query);
                }
            }
        } else {
            \$this->outputWriter->write(sprintf(
                '<error>Migration %s was executed but did not result in any SQL statements.</error>',
                \$version->getVersion()
            ));
        }

        \$version->setState(State::POST);

        \$migration->{'post' . ucfirst(\$direction)}(\$toSchema);

        if (! \$migratorConfiguration->isDryRun()) {
            \$version->markVersion(\$direction);
        }

        \$stopwatchEvent->stop();

        \$versionExecutionResult->setTime(\$stopwatchEvent->getDuration());
        \$versionExecutionResult->setMemory(\$stopwatchEvent->getMemory());

        if (\$direction === Direction::UP) {
            \$this->outputWriter->write(sprintf(
                \"\\n  <info>++</info> migrated (took %sms, used %s memory)\",
                \$stopwatchEvent->getDuration(),
                BytesFormatter::formatBytes(\$stopwatchEvent->getMemory())
            ));
        } else {
            \$this->outputWriter->write(sprintf(
                \"\\n  <info>--</info> reverted (took %sms, used %s memory)\",
                \$stopwatchEvent->getDuration(),
                BytesFormatter::formatBytes(\$stopwatchEvent->getMemory())
            ));
        }

        if (\$migration->isTransactional()) {
            //commit only if running in transactional mode
            \$this->connection->commit();
        }

        \$version->setState(State::NONE);

        \$this->configuration->dispatchVersionEvent(
            \$version,
            Events::onMigrationsVersionExecuted,
            \$direction,
            \$migratorConfiguration->isDryRun()
        );

        return \$versionExecutionResult;
    }

    private function getMigrationHeader(Version \$version, AbstractMigration \$migration, string \$direction) : string
    {
        \$versionInfo = \$version->getVersion();
        \$description = \$migration->getDescription();

        if (\$description !== '') {
            \$versionInfo .= ' (' . \$description . ')';
        }

        if (\$direction === Direction::UP) {
            return sprintf('  <info>++</info> migrating <comment>%s</comment>', \$versionInfo);
        }

        return sprintf('  <info>--</info> reverting <comment>%s</comment>', \$versionInfo);
    }

    private function skipMigration(
        SkipMigration \$e,
        Version \$version,
        AbstractMigration \$migration,
        string \$direction,
        MigratorConfiguration \$migratorConfiguration
    ) : void {
        if (\$migration->isTransactional()) {
            //only rollback transaction if in transactional mode
            \$this->connection->rollBack();
        }

        if (! \$migratorConfiguration->isDryRun()) {
            \$version->markVersion(\$direction);
        }

        \$this->outputWriter->write(sprintf(\"\\n  <info>SS</info> skipped (Reason: %s)\", \$e->getMessage()));

        \$version->setState(State::NONE);

        \$this->configuration->dispatchVersionEvent(
            \$version,
            Events::onMigrationsVersionSkipped,
            \$direction,
            \$migratorConfiguration->isDryRun()
        );
    }

    /**
     * @throws Throwable
     */
    private function migrationError(Throwable \$e, Version \$version, AbstractMigration \$migration) : void
    {
        \$this->outputWriter->write(sprintf(
            '<error>Migration %s failed during %s. Error %s</error>',
            \$version->getVersion(),
            \$version->getExecutionState(),
            \$e->getMessage()
        ));

        if (\$migration->isTransactional()) {
            //only rollback transaction if in transactional mode
            \$this->connection->rollBack();
        }

        \$version->setState(State::NONE);
    }

    private function executeVersionExecutionResult(
        Version \$version,
        MigratorConfiguration \$migratorConfiguration
    ) : void {
        foreach (\$this->sql as \$key => \$query) {
            \$stopwatchEvent = \$this->stopwatch->start('query');

            \$this->outputSqlQuery(\$key, \$query);

            if (! isset(\$this->params[\$key])) {
                \$this->connection->executeQuery(\$query);
            } else {
                \$this->connection->executeQuery(\$query, \$this->params[\$key], \$this->types[\$key]);
            }

            \$stopwatchEvent->stop();

            if (! \$migratorConfiguration->getTimeAllQueries()) {
                continue;
            }

            \$this->outputWriter->write(sprintf('  <info>%sms</info>', \$stopwatchEvent->getDuration()));
        }
    }

    /**
     * @param mixed[]|int \$params
     * @param mixed[]|int \$types
     */
    private function addQueryParams(\$params, \$types) : void
    {
        \$index                = count(\$this->sql) - 1;
        \$this->params[\$index] = \$params;
        \$this->types[\$index]  = \$types;
    }

    private function outputSqlQuery(int \$idx, string \$query) : void
    {
        \$params = \$this->parameterFormatter->formatParameters(
            \$this->params[\$idx] ?? [],
            \$this->types[\$idx] ?? []
        );

        \$this->outputWriter->write(rtrim(sprintf(
            '     <comment>-></comment> %s %s',
            \$query,
            \$params
        )));
    }

    private function getFromSchema(MigratorConfiguration \$migratorConfiguration) : Schema
    {
        // if we're in a dry run, use the from Schema instead of reading the schema from the database
        if (\$migratorConfiguration->isDryRun() && \$migratorConfiguration->getFromSchema() !== null) {
            return \$migratorConfiguration->getFromSchema();
        }

        return \$this->schemaProvider->createFromSchema();
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Executor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Executor.php");
    }
}
