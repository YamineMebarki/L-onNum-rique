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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php */
class __TwigTemplate_af31dc98940bc2675f638fa8eeb483f5eff45ddfcc3858b619d8d02db139c925 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function sprintf;

/**
 * The RollupCommand class is responsible for deleting all previously executed migrations from the versions table
 * and marking the freshly dumped schema migration (that was created with DumpSchemaCommand) as migrated.
 */
class RollupCommand extends AbstractCommand
{
    protected function configure() : void
    {
        parent::configure();

        \$this
            ->setName('migrations:rollup')
            ->setAliases(['rollup'])
            ->setDescription('Rollup migrations by deleting all tracked versions and insert the one version that exists.')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command rolls up migrations by deleting all tracked versions and
inserts the one version that exists that was created with the <info>migrations:dump-schema</info> command.

    <info>%command.full_name%</info>

To dump your schema to a migration version you can use the <info>migrations:dump-schema</info> command.
EOT
            );
    }

    public function execute(
        InputInterface \$input,
        OutputInterface \$output
    ) : ?int {
        \$version = \$this->dependencyFactory
            ->getRollup()->rollup();

        \$output->writeln(sprintf(
            'Rolled up migrations to version <info>%s</info>',
            \$version->getVersion()
        ));

        return 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php";
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
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function sprintf;

/**
 * The RollupCommand class is responsible for deleting all previously executed migrations from the versions table
 * and marking the freshly dumped schema migration (that was created with DumpSchemaCommand) as migrated.
 */
class RollupCommand extends AbstractCommand
{
    protected function configure() : void
    {
        parent::configure();

        \$this
            ->setName('migrations:rollup')
            ->setAliases(['rollup'])
            ->setDescription('Rollup migrations by deleting all tracked versions and insert the one version that exists.')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command rolls up migrations by deleting all tracked versions and
inserts the one version that exists that was created with the <info>migrations:dump-schema</info> command.

    <info>%command.full_name%</info>

To dump your schema to a migration version you can use the <info>migrations:dump-schema</info> command.
EOT
            );
    }

    public function execute(
        InputInterface \$input,
        OutputInterface \$output
    ) : ?int {
        \$version = \$this->dependencyFactory
            ->getRollup()->rollup();

        \$output->writeln(sprintf(
            'Rolled up migrations to version <info>%s</info>',
            \$version->getVersion()
        ));

        return 0;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php");
    }
}
