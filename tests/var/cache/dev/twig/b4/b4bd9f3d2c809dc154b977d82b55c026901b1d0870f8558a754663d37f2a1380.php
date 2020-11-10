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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DiffCommand.php */
class __TwigTemplate_8d3dc172e249267d5cd222478233ffb1a58143680cca502f1fb46332bd33ad9e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DiffCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DiffCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Doctrine\\Migrations\\Generator\\DiffGenerator;
use Doctrine\\Migrations\\Provider\\OrmSchemaProvider;
use Doctrine\\Migrations\\Provider\\SchemaProviderInterface;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\InvalidOptionUsage;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use const FILTER_VALIDATE_BOOLEAN;
use function class_exists;
use function filter_var;
use function sprintf;

/**
 * The DiffCommand class is responsible for generating a migration by comparing your current database schema to
 * your mapping information.
 */
class DiffCommand extends AbstractCommand
{
    /** @var SchemaProviderInterface|null */
    protected \$schemaProvider;

    public function __construct(?SchemaProviderInterface \$schemaProvider = null)
    {
        \$this->schemaProvider = \$schemaProvider;

        parent::__construct();
    }

    protected function configure() : void
    {
        parent::configure();

        \$this
            ->setName('migrations:diff')
            ->setAliases(['diff'])
            ->setDescription('Generate a migration by comparing your current database to your mapping information.')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command generates a migration by comparing your current database to your mapping information:

    <info>%command.full_name%</info>

You can optionally specify a <comment>--editor-cmd</comment> option to open the generated file in your favorite editor:

    <info>%command.full_name% --editor-cmd=mate</info>
EOT
            )
            ->addOption(
                'editor-cmd',
                null,
                InputOption::VALUE_OPTIONAL,
                'Open file with this command upon creation.'
            )
            ->addOption(
                'filter-expression',
                null,
                InputOption::VALUE_OPTIONAL,
                'Tables which are filtered by Regular Expression.'
            )
            ->addOption(
                'formatted',
                null,
                InputOption::VALUE_NONE,
                'Format the generated SQL.'
            )
            ->addOption(
                'line-length',
                null,
                InputOption::VALUE_OPTIONAL,
                'Max line length of unformatted lines.',
                120
            )
            ->addOption(
                'check-database-platform',
                null,
                InputOption::VALUE_OPTIONAL,
                'Check Database Platform to the generated code.',
                true
            );
    }

    /**
     * @throws InvalidOptionUsage
     */
    public function execute(
        InputInterface \$input,
        OutputInterface \$output
    ) : ?int {
        \$filterExpression = \$input->getOption('filter-expression') ?? null;
        \$formatted        = (bool) \$input->getOption('formatted');
        \$lineLength       = (int) \$input->getOption('line-length');
        \$checkDbPlatform  = filter_var(\$input->getOption('check-database-platform'), FILTER_VALIDATE_BOOLEAN);

        if (\$formatted) {
            if (! class_exists('SqlFormatter')) {
                throw InvalidOptionUsage::new(
                    'The \"--formatted\" option can only be used if the sql formatter is installed. Please run \"composer require jdorn/sql-formatter\".'
                );
            }
        }

        \$versionNumber = \$this->configuration->generateVersionNumber();

        \$path = \$this->createMigrationDiffGenerator()->generate(
            \$versionNumber,
            \$filterExpression,
            \$formatted,
            \$lineLength,
            \$checkDbPlatform
        );

        \$editorCommand = \$input->getOption('editor-cmd');

        if (\$editorCommand !== null) {
            \$this->procOpen(\$editorCommand, \$path);
        }

        \$output->writeln([
            sprintf('Generated new migration class to \"<info>%s</info>\"', \$path),
            '',
            sprintf(
                'To run just this migration for testing purposes, you can use <info>migrations:execute --up %s</info>',
                \$versionNumber
            ),
            '',
            sprintf(
                'To revert the migration you can use <info>migrations:execute --down %s</info>',
                \$versionNumber
            ),
        ]);

        return 0;
    }

    protected function createMigrationDiffGenerator() : DiffGenerator
    {
        return new DiffGenerator(
            \$this->connection->getConfiguration(),
            \$this->connection->getSchemaManager(),
            \$this->getSchemaProvider(),
            \$this->connection->getDatabasePlatform(),
            \$this->dependencyFactory->getMigrationGenerator(),
            \$this->dependencyFactory->getMigrationSqlGenerator()
        );
    }

    private function getSchemaProvider() : SchemaProviderInterface
    {
        if (\$this->schemaProvider === null) {
            \$this->schemaProvider = new OrmSchemaProvider(
                \$this->getHelper('entityManager')->getEntityManager()
            );
        }

        return \$this->schemaProvider;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DiffCommand.php";
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

use Doctrine\\Migrations\\Generator\\DiffGenerator;
use Doctrine\\Migrations\\Provider\\OrmSchemaProvider;
use Doctrine\\Migrations\\Provider\\SchemaProviderInterface;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\InvalidOptionUsage;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use const FILTER_VALIDATE_BOOLEAN;
use function class_exists;
use function filter_var;
use function sprintf;

/**
 * The DiffCommand class is responsible for generating a migration by comparing your current database schema to
 * your mapping information.
 */
class DiffCommand extends AbstractCommand
{
    /** @var SchemaProviderInterface|null */
    protected \$schemaProvider;

    public function __construct(?SchemaProviderInterface \$schemaProvider = null)
    {
        \$this->schemaProvider = \$schemaProvider;

        parent::__construct();
    }

    protected function configure() : void
    {
        parent::configure();

        \$this
            ->setName('migrations:diff')
            ->setAliases(['diff'])
            ->setDescription('Generate a migration by comparing your current database to your mapping information.')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command generates a migration by comparing your current database to your mapping information:

    <info>%command.full_name%</info>

You can optionally specify a <comment>--editor-cmd</comment> option to open the generated file in your favorite editor:

    <info>%command.full_name% --editor-cmd=mate</info>
EOT
            )
            ->addOption(
                'editor-cmd',
                null,
                InputOption::VALUE_OPTIONAL,
                'Open file with this command upon creation.'
            )
            ->addOption(
                'filter-expression',
                null,
                InputOption::VALUE_OPTIONAL,
                'Tables which are filtered by Regular Expression.'
            )
            ->addOption(
                'formatted',
                null,
                InputOption::VALUE_NONE,
                'Format the generated SQL.'
            )
            ->addOption(
                'line-length',
                null,
                InputOption::VALUE_OPTIONAL,
                'Max line length of unformatted lines.',
                120
            )
            ->addOption(
                'check-database-platform',
                null,
                InputOption::VALUE_OPTIONAL,
                'Check Database Platform to the generated code.',
                true
            );
    }

    /**
     * @throws InvalidOptionUsage
     */
    public function execute(
        InputInterface \$input,
        OutputInterface \$output
    ) : ?int {
        \$filterExpression = \$input->getOption('filter-expression') ?? null;
        \$formatted        = (bool) \$input->getOption('formatted');
        \$lineLength       = (int) \$input->getOption('line-length');
        \$checkDbPlatform  = filter_var(\$input->getOption('check-database-platform'), FILTER_VALIDATE_BOOLEAN);

        if (\$formatted) {
            if (! class_exists('SqlFormatter')) {
                throw InvalidOptionUsage::new(
                    'The \"--formatted\" option can only be used if the sql formatter is installed. Please run \"composer require jdorn/sql-formatter\".'
                );
            }
        }

        \$versionNumber = \$this->configuration->generateVersionNumber();

        \$path = \$this->createMigrationDiffGenerator()->generate(
            \$versionNumber,
            \$filterExpression,
            \$formatted,
            \$lineLength,
            \$checkDbPlatform
        );

        \$editorCommand = \$input->getOption('editor-cmd');

        if (\$editorCommand !== null) {
            \$this->procOpen(\$editorCommand, \$path);
        }

        \$output->writeln([
            sprintf('Generated new migration class to \"<info>%s</info>\"', \$path),
            '',
            sprintf(
                'To run just this migration for testing purposes, you can use <info>migrations:execute --up %s</info>',
                \$versionNumber
            ),
            '',
            sprintf(
                'To revert the migration you can use <info>migrations:execute --down %s</info>',
                \$versionNumber
            ),
        ]);

        return 0;
    }

    protected function createMigrationDiffGenerator() : DiffGenerator
    {
        return new DiffGenerator(
            \$this->connection->getConfiguration(),
            \$this->connection->getSchemaManager(),
            \$this->getSchemaProvider(),
            \$this->connection->getDatabasePlatform(),
            \$this->dependencyFactory->getMigrationGenerator(),
            \$this->dependencyFactory->getMigrationSqlGenerator()
        );
    }

    private function getSchemaProvider() : SchemaProviderInterface
    {
        if (\$this->schemaProvider === null) {
            \$this->schemaProvider = new OrmSchemaProvider(
                \$this->getHelper('entityManager')->getEntityManager()
            );
        }

        return \$this->schemaProvider;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DiffCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DiffCommand.php");
    }
}
