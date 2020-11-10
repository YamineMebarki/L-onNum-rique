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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ExecuteCommand.php */
class __TwigTemplate_c0c7a1f4f1e1225714caa31e0e7c834ff2fe71e5b60ff1eceac5f4b3686b9c79 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ExecuteCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ExecuteCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Doctrine\\Migrations\\MigratorConfiguration;
use Doctrine\\Migrations\\Version\\Direction;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function getcwd;

/**
 * The ExecutCommand class is responsible for executing a single migration version up or down.
 */
class ExecuteCommand extends AbstractCommand
{
    protected function configure() : void
    {
        \$this
            ->setName('migrations:execute')
            ->setAliases(['execute'])
            ->setDescription(
                'Execute a single migration version up or down manually.'
            )
            ->addArgument(
                'version',
                InputArgument::REQUIRED,
                'The version to execute.',
                null
            )
            ->addOption(
                'write-sql',
                null,
                InputOption::VALUE_OPTIONAL,
                'The path to output the migration SQL file instead of executing it. Defaults to current working directory.',
                false
            )
            ->addOption(
                'dry-run',
                null,
                InputOption::VALUE_NONE,
                'Execute the migration as a dry run.'
            )
            ->addOption(
                'up',
                null,
                InputOption::VALUE_NONE,
                'Execute the migration up.'
            )
            ->addOption(
                'down',
                null,
                InputOption::VALUE_NONE,
                'Execute the migration down.'
            )
            ->addOption(
                'query-time',
                null,
                InputOption::VALUE_NONE,
                'Time all the queries individually.'
            )
            ->setHelp(<<<EOT
The <info>%command.name%</info> command executes a single migration version up or down manually:

    <info>%command.full_name% YYYYMMDDHHMMSS</info>

If no <comment>--up</comment> or <comment>--down</comment> option is specified it defaults to up:

    <info>%command.full_name% YYYYMMDDHHMMSS --down</info>

You can also execute the migration as a <comment>--dry-run</comment>:

    <info>%command.full_name% YYYYMMDDHHMMSS --dry-run</info>

You can output the would be executed SQL statements to a file with <comment>--write-sql</comment>:

    <info>%command.full_name% YYYYMMDDHHMMSS --write-sql</info>

Or you can also execute the migration without a warning message which you need to interact with:

    <info>%command.full_name% YYYYMMDDHHMMSS --no-interaction</info>
EOT
        );

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$version        = \$input->getArgument('version');
        \$timeAllQueries = (bool) \$input->getOption('query-time');
        \$dryRun         = (bool) \$input->getOption('dry-run');
        \$path           = \$input->getOption('write-sql');
        \$direction      = \$input->getOption('down') !== false
            ? Direction::DOWN
            : Direction::UP;

        \$version = \$this->migrationRepository->getVersion(\$version);

        if (\$path !== false) {
            \$path = \$path ?? getcwd();

            \$version->writeSqlFile(\$path, \$direction);

            return 0;
        }

        \$question = 'WARNING! You are about to execute a database migration that could result in schema changes and data lost. Are you sure you wish to continue? (y/n)';

        if (! \$dryRun && ! \$this->canExecute(\$question, \$input, \$output)) {
            \$output->writeln('<error>Migration cancelled!</error>');

            return 1;
        }

        \$migratorConfiguration = (new MigratorConfiguration())
            ->setDryRun(\$dryRun)
            ->setTimeAllQueries(\$timeAllQueries);

        \$version->execute(\$direction, \$migratorConfiguration);

        return 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ExecuteCommand.php";
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

use Doctrine\\Migrations\\MigratorConfiguration;
use Doctrine\\Migrations\\Version\\Direction;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function getcwd;

/**
 * The ExecutCommand class is responsible for executing a single migration version up or down.
 */
class ExecuteCommand extends AbstractCommand
{
    protected function configure() : void
    {
        \$this
            ->setName('migrations:execute')
            ->setAliases(['execute'])
            ->setDescription(
                'Execute a single migration version up or down manually.'
            )
            ->addArgument(
                'version',
                InputArgument::REQUIRED,
                'The version to execute.',
                null
            )
            ->addOption(
                'write-sql',
                null,
                InputOption::VALUE_OPTIONAL,
                'The path to output the migration SQL file instead of executing it. Defaults to current working directory.',
                false
            )
            ->addOption(
                'dry-run',
                null,
                InputOption::VALUE_NONE,
                'Execute the migration as a dry run.'
            )
            ->addOption(
                'up',
                null,
                InputOption::VALUE_NONE,
                'Execute the migration up.'
            )
            ->addOption(
                'down',
                null,
                InputOption::VALUE_NONE,
                'Execute the migration down.'
            )
            ->addOption(
                'query-time',
                null,
                InputOption::VALUE_NONE,
                'Time all the queries individually.'
            )
            ->setHelp(<<<EOT
The <info>%command.name%</info> command executes a single migration version up or down manually:

    <info>%command.full_name% YYYYMMDDHHMMSS</info>

If no <comment>--up</comment> or <comment>--down</comment> option is specified it defaults to up:

    <info>%command.full_name% YYYYMMDDHHMMSS --down</info>

You can also execute the migration as a <comment>--dry-run</comment>:

    <info>%command.full_name% YYYYMMDDHHMMSS --dry-run</info>

You can output the would be executed SQL statements to a file with <comment>--write-sql</comment>:

    <info>%command.full_name% YYYYMMDDHHMMSS --write-sql</info>

Or you can also execute the migration without a warning message which you need to interact with:

    <info>%command.full_name% YYYYMMDDHHMMSS --no-interaction</info>
EOT
        );

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$version        = \$input->getArgument('version');
        \$timeAllQueries = (bool) \$input->getOption('query-time');
        \$dryRun         = (bool) \$input->getOption('dry-run');
        \$path           = \$input->getOption('write-sql');
        \$direction      = \$input->getOption('down') !== false
            ? Direction::DOWN
            : Direction::UP;

        \$version = \$this->migrationRepository->getVersion(\$version);

        if (\$path !== false) {
            \$path = \$path ?? getcwd();

            \$version->writeSqlFile(\$path, \$direction);

            return 0;
        }

        \$question = 'WARNING! You are about to execute a database migration that could result in schema changes and data lost. Are you sure you wish to continue? (y/n)';

        if (! \$dryRun && ! \$this->canExecute(\$question, \$input, \$output)) {
            \$output->writeln('<error>Migration cancelled!</error>');

            return 1;
        }

        \$migratorConfiguration = (new MigratorConfiguration())
            ->setDryRun(\$dryRun)
            ->setTimeAllQueries(\$timeAllQueries);

        \$version->execute(\$direction, \$migratorConfiguration);

        return 0;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ExecuteCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ExecuteCommand.php");
    }
}
