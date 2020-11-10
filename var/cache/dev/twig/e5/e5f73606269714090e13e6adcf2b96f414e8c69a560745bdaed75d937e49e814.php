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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php */
class __TwigTemplate_90a84bbc2e969b1a646f188707115353eb3d757320e12ab11dbbd9a1a3d9af5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Doctrine\\Migrations\\Tools\\Console\\Exception\\InvalidOptionUsage;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\SchemaDumpRequiresNoMigrations;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function class_exists;
use function count;
use function sprintf;

/**
 * The DumpSchemaCommand class is responsible for dumping your current database schema to a migration class. This is
 * intended to be used in conjuction with the RollupCommand.
 *
 * @see Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand
 */
class DumpSchemaCommand extends AbstractCommand
{
    protected function configure() : void
    {
        parent::configure();

        \$this
            ->setName('migrations:dump-schema')
            ->setAliases(['dump-schema'])
            ->setDescription('Dump the schema for your database to a migration.')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command dumps the schema for your database to a migration:

    <info>%command.full_name%</info>

After dumping your schema to a migration, you can rollup your migrations using the <info>migrations:rollup</info> command.
EOT
            )
            ->addOption(
                'editor-cmd',
                null,
                InputOption::VALUE_OPTIONAL,
                'Open file with this command upon creation.'
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
            );
    }

    /**
     * @throws SchemaDumpRequiresNoMigrations
     */
    public function execute(
        InputInterface \$input,
        OutputInterface \$output
    ) : ?int {
        \$formatted  = (bool) \$input->getOption('formatted');
        \$lineLength = (int) \$input->getOption('line-length');

        \$schemaDumper = \$this->dependencyFactory->getSchemaDumper();
        \$versions     = \$this->migrationRepository->getVersions();

        if (count(\$versions) > 0) {
            throw SchemaDumpRequiresNoMigrations::new();
        }

        if (\$formatted) {
            if (! class_exists('SqlFormatter')) {
                throw InvalidOptionUsage::new(
                    'The \"--formatted\" option can only be used if the sql formatter is installed. Please run \"composer require jdorn/sql-formatter\".'
                );
            }
        }

        \$versionNumber = \$this->configuration->generateVersionNumber();

        \$path = \$schemaDumper->dump(
            \$versionNumber,
            \$formatted,
            \$lineLength
        );

        \$editorCommand = \$input->getOption('editor-cmd');

        if (\$editorCommand !== null) {
            \$this->procOpen(\$editorCommand, \$path);
        }

        \$output->writeln([
            sprintf('Dumped your schema to a new migration class at \"<info>%s</info>\"', \$path),
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
            '',
            'To use this as a rollup migration you can use the <info>migrations:rollup</info> command.',
        ]);

        return 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php";
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

use Doctrine\\Migrations\\Tools\\Console\\Exception\\InvalidOptionUsage;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\SchemaDumpRequiresNoMigrations;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function class_exists;
use function count;
use function sprintf;

/**
 * The DumpSchemaCommand class is responsible for dumping your current database schema to a migration class. This is
 * intended to be used in conjuction with the RollupCommand.
 *
 * @see Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand
 */
class DumpSchemaCommand extends AbstractCommand
{
    protected function configure() : void
    {
        parent::configure();

        \$this
            ->setName('migrations:dump-schema')
            ->setAliases(['dump-schema'])
            ->setDescription('Dump the schema for your database to a migration.')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command dumps the schema for your database to a migration:

    <info>%command.full_name%</info>

After dumping your schema to a migration, you can rollup your migrations using the <info>migrations:rollup</info> command.
EOT
            )
            ->addOption(
                'editor-cmd',
                null,
                InputOption::VALUE_OPTIONAL,
                'Open file with this command upon creation.'
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
            );
    }

    /**
     * @throws SchemaDumpRequiresNoMigrations
     */
    public function execute(
        InputInterface \$input,
        OutputInterface \$output
    ) : ?int {
        \$formatted  = (bool) \$input->getOption('formatted');
        \$lineLength = (int) \$input->getOption('line-length');

        \$schemaDumper = \$this->dependencyFactory->getSchemaDumper();
        \$versions     = \$this->migrationRepository->getVersions();

        if (count(\$versions) > 0) {
            throw SchemaDumpRequiresNoMigrations::new();
        }

        if (\$formatted) {
            if (! class_exists('SqlFormatter')) {
                throw InvalidOptionUsage::new(
                    'The \"--formatted\" option can only be used if the sql formatter is installed. Please run \"composer require jdorn/sql-formatter\".'
                );
            }
        }

        \$versionNumber = \$this->configuration->generateVersionNumber();

        \$path = \$schemaDumper->dump(
            \$versionNumber,
            \$formatted,
            \$lineLength
        );

        \$editorCommand = \$input->getOption('editor-cmd');

        if (\$editorCommand !== null) {
            \$this->procOpen(\$editorCommand, \$path);
        }

        \$output->writeln([
            sprintf('Dumped your schema to a new migration class at \"<info>%s</info>\"', \$path),
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
            '',
            'To use this as a rollup migration you can use the <info>migrations:rollup</info> command.',
        ]);

        return 0;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php");
    }
}
