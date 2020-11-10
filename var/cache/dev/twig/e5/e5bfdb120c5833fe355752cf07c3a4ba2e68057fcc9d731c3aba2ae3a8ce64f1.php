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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php */
class __TwigTemplate_8055540a0cb6d53ab525e8e7a2749279ee523a2e595d8cf67b817a91f1fcb7f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function count;
use function sprintf;

/**
 * The UpToDateCommand class outputs if your database is up to date or if there are new migrations
 * that need to be executed.
 */
class UpToDateCommand extends AbstractCommand
{
    protected function configure() : void
    {
        \$this
            ->setName('migrations:up-to-date')
            ->setAliases(['up-to-date'])
            ->setDescription('Tells you if your schema is up-to-date.')
            ->addOption('fail-on-unregistered', 'u', InputOption::VALUE_NONE, 'Whether to fail when there are unregistered extra migrations found')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command tells you if your schema is up-to-date:

    <info>%command.full_name%</info>
EOT
            );

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$migrations          = count(\$this->migrationRepository->getMigrations());
        \$migratedVersions    = count(\$this->migrationRepository->getMigratedVersions());
        \$availableMigrations = \$migrations - \$migratedVersions;

        if (\$availableMigrations === 0) {
            \$output->writeln('<comment>Up-to-date! No migrations to execute.</comment>');

            return 0;
        }

        if (\$availableMigrations > 0) {
            \$output->writeln(sprintf(
                '<error>Out-of-date! %u migration%s available to execute.</error>',
                \$availableMigrations,
                \$availableMigrations > 1 ? 's are' : ' is'
            ));

            return 1;
        }

        // negative number means that there are unregistered migrations in the database

        \$extraMigrations = -\$availableMigrations;
        \$output->writeln(sprintf(
            '<error>You have %1\$u previously executed migration%3\$s in the database that %2\$s registered migration%3\$s.</error>',
            \$extraMigrations,
            \$extraMigrations > 1 ? 'are not' : 'is not a',
            \$extraMigrations > 1 ? 's' : ''
        ));

        return \$input->getOption('fail-on-unregistered') === true ? 2 : 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php";
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
use function count;
use function sprintf;

/**
 * The UpToDateCommand class outputs if your database is up to date or if there are new migrations
 * that need to be executed.
 */
class UpToDateCommand extends AbstractCommand
{
    protected function configure() : void
    {
        \$this
            ->setName('migrations:up-to-date')
            ->setAliases(['up-to-date'])
            ->setDescription('Tells you if your schema is up-to-date.')
            ->addOption('fail-on-unregistered', 'u', InputOption::VALUE_NONE, 'Whether to fail when there are unregistered extra migrations found')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command tells you if your schema is up-to-date:

    <info>%command.full_name%</info>
EOT
            );

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$migrations          = count(\$this->migrationRepository->getMigrations());
        \$migratedVersions    = count(\$this->migrationRepository->getMigratedVersions());
        \$availableMigrations = \$migrations - \$migratedVersions;

        if (\$availableMigrations === 0) {
            \$output->writeln('<comment>Up-to-date! No migrations to execute.</comment>');

            return 0;
        }

        if (\$availableMigrations > 0) {
            \$output->writeln(sprintf(
                '<error>Out-of-date! %u migration%s available to execute.</error>',
                \$availableMigrations,
                \$availableMigrations > 1 ? 's are' : ' is'
            ));

            return 1;
        }

        // negative number means that there are unregistered migrations in the database

        \$extraMigrations = -\$availableMigrations;
        \$output->writeln(sprintf(
            '<error>You have %1\$u previously executed migration%3\$s in the database that %2\$s registered migration%3\$s.</error>',
            \$extraMigrations,
            \$extraMigrations > 1 ? 'are not' : 'is not a',
            \$extraMigrations > 1 ? 's' : ''
        ));

        return \$input->getOption('fail-on-unregistered') === true ? 2 : 0;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php");
    }
}
