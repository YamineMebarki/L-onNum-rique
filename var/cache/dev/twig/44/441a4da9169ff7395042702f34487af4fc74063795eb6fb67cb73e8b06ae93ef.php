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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php */
class __TwigTemplate_03f056cec5c9bfc2c95028b9b6b57beaad1741f1e9729ad0e7364301e52224fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function sprintf;

/**
 * The LatestCommand class is responsible for outputting what your latest version is.
 */
class LatestCommand extends AbstractCommand
{
    protected function configure() : void
    {
        \$this
            ->setName('migrations:latest')
            ->setAliases(['latest'])
            ->setDescription('Outputs the latest version number');

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$latestVersion = \$this->migrationRepository->getLatestVersion();
        \$version       = \$this->migrationRepository->getVersion(\$latestVersion);
        \$description   = \$version->getMigration()->getDescription();

        \$output->writeln(sprintf(
            '<info>%s</info>%s',
            \$latestVersion,
            \$description !== '' ? ' - ' . \$description : ''
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
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php";
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
 * The LatestCommand class is responsible for outputting what your latest version is.
 */
class LatestCommand extends AbstractCommand
{
    protected function configure() : void
    {
        \$this
            ->setName('migrations:latest')
            ->setAliases(['latest'])
            ->setDescription('Outputs the latest version number');

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$latestVersion = \$this->migrationRepository->getLatestVersion();
        \$version       = \$this->migrationRepository->getVersion(\$latestVersion);
        \$description   = \$version->getMigration()->getDescription();

        \$output->writeln(sprintf(
            '<info>%s</info>%s',
            \$latestVersion,
            \$description !== '' ? ' - ' . \$description : ''
        ));

        return 0;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php");
    }
}
