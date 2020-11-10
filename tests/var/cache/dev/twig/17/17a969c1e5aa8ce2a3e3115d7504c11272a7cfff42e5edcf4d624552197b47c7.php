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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php */
class __TwigTemplate_56d99e86e4ab97d2747aa7b885f23e6a4619bd39925523467cde1f5504e55e34 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\DependencyFactory;
use Doctrine\\Migrations\\MigrationRepository;
use Doctrine\\Migrations\\Tools\\Console\\ConnectionLoader;
use Doctrine\\Migrations\\Tools\\Console\\Helper\\ConfigurationHelper;
use Doctrine\\Migrations\\Tools\\Console\\Helper\\ConfigurationHelperInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Question\\ConfirmationQuestion;
use function escapeshellarg;
use function proc_open;
use function str_repeat;
use function strlen;

/**
 * The AbstractCommand class provides base functionality for the other migrations commands to extend from.
 */
abstract class AbstractCommand extends Command
{
    /** @var Configuration */
    protected \$configuration;

    /** @var Connection */
    protected \$connection;

    /** @var DependencyFactory */
    protected \$dependencyFactory;

    /** @var MigrationRepository */
    protected \$migrationRepository;

    /** @var Configuration|null */
    protected \$migrationConfiguration;

    public function setMigrationConfiguration(Configuration \$configuration) : void
    {
        \$this->configuration = \$configuration;

        \$this->initializeDependencies();
    }

    public function setConnection(Connection \$connection) : void
    {
        \$this->connection = \$connection;
    }

    public function setDependencyFactory(DependencyFactory \$dependencyFactory) : void
    {
        \$this->dependencyFactory = \$dependencyFactory;
    }

    public function setMigrationRepository(MigrationRepository \$migrationRepository) : void
    {
        \$this->migrationRepository = \$migrationRepository;
    }

    public function initialize(
        InputInterface \$input,
        OutputInterface \$output
    ) : void {
        \$this->configuration = \$this->getMigrationConfiguration(\$input, \$output);

        \$this->initializeDependencies();

        \$this->configuration->validate();
        \$this->configuration->createMigrationTable();
    }

    protected function configure() : void
    {
        \$this->addOption(
            'configuration',
            null,
            InputOption::VALUE_OPTIONAL,
            'The path to a migrations configuration file.'
        );

        \$this->addOption(
            'db-configuration',
            null,
            InputOption::VALUE_OPTIONAL,
            'The path to a database connection configuration file.'
        );
    }

    protected function outputHeader(
        OutputInterface \$output
    ) : void {
        \$name = \$this->configuration->getName();
        \$name = \$name ?? 'Doctrine Database Migrations';
        \$name = str_repeat(' ', 20) . \$name . str_repeat(' ', 20);
        \$output->writeln('<question>' . str_repeat(' ', strlen(\$name)) . '</question>');
        \$output->writeln('<question>' . \$name . '</question>');
        \$output->writeln('<question>' . str_repeat(' ', strlen(\$name)) . '</question>');
        \$output->writeln('');
    }

    protected function getMigrationConfiguration(
        InputInterface \$input,
        OutputInterface \$output
    ) : Configuration {
        if (\$this->migrationConfiguration === null) {
            if (\$this->hasConfigurationHelper()) {
                /** @var ConfigurationHelper \$configHelper */
                \$configHelper = \$this->getHelperSet()->get('configuration');
            } else {
                \$configHelper = new ConfigurationHelper(
                    \$this->getConnection(\$input),
                    \$this->configuration
                );
            }

            \$this->migrationConfiguration = \$configHelper->getMigrationConfig(\$input);

            \$this->migrationConfiguration->getOutputWriter()->setCallback(
                static function (string \$message) use (\$output) : void {
                    \$output->writeln(\$message);
                }
            );
        }

        if (\$this->migrationConfiguration === null && \$this->configuration !== null) {
            \$this->migrationConfiguration = \$this->configuration;
        }

        return \$this->migrationConfiguration;
    }

    protected function askConfirmation(
        string \$question,
        InputInterface \$input,
        OutputInterface \$output
    ) : bool {
        return \$this->getHelper('question')->ask(
            \$input,
            \$output,
            new ConfirmationQuestion(\$question)
        );
    }

    protected function canExecute(
        string \$question,
        InputInterface \$input,
        OutputInterface \$output
    ) : bool {
        return ! \$input->isInteractive() || \$this->askConfirmation(\$question, \$input, \$output);
    }

    protected function procOpen(string \$editorCommand, string \$path) : void
    {
        proc_open(\$editorCommand . ' ' . escapeshellarg(\$path), [], \$pipes);
    }

    private function initializeDependencies() : void
    {
        \$this->connection          = \$this->configuration->getConnection();
        \$this->dependencyFactory   = \$this->configuration->getDependencyFactory();
        \$this->migrationRepository = \$this->dependencyFactory->getMigrationRepository();
    }

    private function hasConfigurationHelper() : bool
    {
        /** @var HelperSet|null \$helperSet */
        \$helperSet = \$this->getHelperSet();

        if (\$helperSet === null) {
            return false;
        }

        if (! \$helperSet->has('configuration')) {
            return false;
        }

        return \$helperSet->get('configuration') instanceof ConfigurationHelperInterface;
    }

    private function getConnection(InputInterface \$input) : Connection
    {
        if (\$this->connection === null) {
            \$this->connection = (new ConnectionLoader(\$this->configuration))
                ->getConnection(\$input, \$this->getHelperSet());
        }

        return \$this->connection;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\DependencyFactory;
use Doctrine\\Migrations\\MigrationRepository;
use Doctrine\\Migrations\\Tools\\Console\\ConnectionLoader;
use Doctrine\\Migrations\\Tools\\Console\\Helper\\ConfigurationHelper;
use Doctrine\\Migrations\\Tools\\Console\\Helper\\ConfigurationHelperInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Question\\ConfirmationQuestion;
use function escapeshellarg;
use function proc_open;
use function str_repeat;
use function strlen;

/**
 * The AbstractCommand class provides base functionality for the other migrations commands to extend from.
 */
abstract class AbstractCommand extends Command
{
    /** @var Configuration */
    protected \$configuration;

    /** @var Connection */
    protected \$connection;

    /** @var DependencyFactory */
    protected \$dependencyFactory;

    /** @var MigrationRepository */
    protected \$migrationRepository;

    /** @var Configuration|null */
    protected \$migrationConfiguration;

    public function setMigrationConfiguration(Configuration \$configuration) : void
    {
        \$this->configuration = \$configuration;

        \$this->initializeDependencies();
    }

    public function setConnection(Connection \$connection) : void
    {
        \$this->connection = \$connection;
    }

    public function setDependencyFactory(DependencyFactory \$dependencyFactory) : void
    {
        \$this->dependencyFactory = \$dependencyFactory;
    }

    public function setMigrationRepository(MigrationRepository \$migrationRepository) : void
    {
        \$this->migrationRepository = \$migrationRepository;
    }

    public function initialize(
        InputInterface \$input,
        OutputInterface \$output
    ) : void {
        \$this->configuration = \$this->getMigrationConfiguration(\$input, \$output);

        \$this->initializeDependencies();

        \$this->configuration->validate();
        \$this->configuration->createMigrationTable();
    }

    protected function configure() : void
    {
        \$this->addOption(
            'configuration',
            null,
            InputOption::VALUE_OPTIONAL,
            'The path to a migrations configuration file.'
        );

        \$this->addOption(
            'db-configuration',
            null,
            InputOption::VALUE_OPTIONAL,
            'The path to a database connection configuration file.'
        );
    }

    protected function outputHeader(
        OutputInterface \$output
    ) : void {
        \$name = \$this->configuration->getName();
        \$name = \$name ?? 'Doctrine Database Migrations';
        \$name = str_repeat(' ', 20) . \$name . str_repeat(' ', 20);
        \$output->writeln('<question>' . str_repeat(' ', strlen(\$name)) . '</question>');
        \$output->writeln('<question>' . \$name . '</question>');
        \$output->writeln('<question>' . str_repeat(' ', strlen(\$name)) . '</question>');
        \$output->writeln('');
    }

    protected function getMigrationConfiguration(
        InputInterface \$input,
        OutputInterface \$output
    ) : Configuration {
        if (\$this->migrationConfiguration === null) {
            if (\$this->hasConfigurationHelper()) {
                /** @var ConfigurationHelper \$configHelper */
                \$configHelper = \$this->getHelperSet()->get('configuration');
            } else {
                \$configHelper = new ConfigurationHelper(
                    \$this->getConnection(\$input),
                    \$this->configuration
                );
            }

            \$this->migrationConfiguration = \$configHelper->getMigrationConfig(\$input);

            \$this->migrationConfiguration->getOutputWriter()->setCallback(
                static function (string \$message) use (\$output) : void {
                    \$output->writeln(\$message);
                }
            );
        }

        if (\$this->migrationConfiguration === null && \$this->configuration !== null) {
            \$this->migrationConfiguration = \$this->configuration;
        }

        return \$this->migrationConfiguration;
    }

    protected function askConfirmation(
        string \$question,
        InputInterface \$input,
        OutputInterface \$output
    ) : bool {
        return \$this->getHelper('question')->ask(
            \$input,
            \$output,
            new ConfirmationQuestion(\$question)
        );
    }

    protected function canExecute(
        string \$question,
        InputInterface \$input,
        OutputInterface \$output
    ) : bool {
        return ! \$input->isInteractive() || \$this->askConfirmation(\$question, \$input, \$output);
    }

    protected function procOpen(string \$editorCommand, string \$path) : void
    {
        proc_open(\$editorCommand . ' ' . escapeshellarg(\$path), [], \$pipes);
    }

    private function initializeDependencies() : void
    {
        \$this->connection          = \$this->configuration->getConnection();
        \$this->dependencyFactory   = \$this->configuration->getDependencyFactory();
        \$this->migrationRepository = \$this->dependencyFactory->getMigrationRepository();
    }

    private function hasConfigurationHelper() : bool
    {
        /** @var HelperSet|null \$helperSet */
        \$helperSet = \$this->getHelperSet();

        if (\$helperSet === null) {
            return false;
        }

        if (! \$helperSet->has('configuration')) {
            return false;
        }

        return \$helperSet->get('configuration') instanceof ConfigurationHelperInterface;
    }

    private function getConnection(InputInterface \$input) : Connection
    {
        if (\$this->connection === null) {
            \$this->connection = (new ConnectionLoader(\$this->configuration))
                ->getConnection(\$input, \$this->getHelperSet());
        }

        return \$this->connection;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php");
    }
}
