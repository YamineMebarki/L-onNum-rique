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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/GenerateCommand.php */
class __TwigTemplate_6c4847aba48c4b212ed8e97d4c604163c0466ba746c3d64165615896f902be05 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/GenerateCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/GenerateCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function sprintf;

/**
 * The GenerateCommand class is responsible for generating a blank migration class for you to modify to your needs.
 */
class GenerateCommand extends AbstractCommand
{
    protected function configure() : void
    {
        \$this
            ->setName('migrations:generate')
            ->setAliases(['generate'])
            ->setDescription('Generate a blank migration class.')
            ->addOption(
                'editor-cmd',
                null,
                InputOption::VALUE_OPTIONAL,
                'Open file with this command upon creation.'
            )
            ->setHelp(<<<EOT
The <info>%command.name%</info> command generates a blank migration class:

    <info>%command.full_name%</info>

You can optionally specify a <comment>--editor-cmd</comment> option to open the generated file in your favorite editor:

    <info>%command.full_name% --editor-cmd=mate</info>
EOT
        );

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$versionNumber = \$this->configuration->generateVersionNumber();

        \$migrationGenerator = \$this->dependencyFactory->getMigrationGenerator();

        \$path = \$migrationGenerator->generateMigration(\$versionNumber);

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
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/GenerateCommand.php";
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

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function sprintf;

/**
 * The GenerateCommand class is responsible for generating a blank migration class for you to modify to your needs.
 */
class GenerateCommand extends AbstractCommand
{
    protected function configure() : void
    {
        \$this
            ->setName('migrations:generate')
            ->setAliases(['generate'])
            ->setDescription('Generate a blank migration class.')
            ->addOption(
                'editor-cmd',
                null,
                InputOption::VALUE_OPTIONAL,
                'Open file with this command upon creation.'
            )
            ->setHelp(<<<EOT
The <info>%command.name%</info> command generates a blank migration class:

    <info>%command.full_name%</info>

You can optionally specify a <comment>--editor-cmd</comment> option to open the generated file in your favorite editor:

    <info>%command.full_name% --editor-cmd=mate</info>
EOT
        );

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$versionNumber = \$this->configuration->generateVersionNumber();

        \$migrationGenerator = \$this->dependencyFactory->getMigrationGenerator();

        \$path = \$migrationGenerator->generateMigration(\$versionNumber);

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
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/GenerateCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/GenerateCommand.php");
    }
}
