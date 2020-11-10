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

/* vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsStatusDoctrineCommand.php */
class __TwigTemplate_5588350622ca7c095cb8bc72cec82ada1f0930c99c84278552efc984e58d3412 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsStatusDoctrineCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsStatusDoctrineCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\Command;

use Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand;
use InvalidArgumentException;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Command to view the status of a set of migrations.
 */
class MigrationsStatusDoctrineCommand extends StatusCommand
{
    protected function configure() : void
    {
        parent::configure();

        \$this
            ->setName('doctrine:migrations:status')
            ->addOption('db', null, InputOption::VALUE_REQUIRED, 'The database connection to use for this command.')
            ->addOption('em', null, InputOption::VALUE_REQUIRED, 'The entity manager to use for this command.')
            ->addOption('shard', null, InputOption::VALUE_REQUIRED, 'The shard connection to use for this command.');
    }

    public function initialize(InputInterface \$input, OutputInterface \$output) : void
    {
        /** @var Application \$application */
        \$application = \$this->getApplication();

        Helper\\DoctrineCommandHelper::setApplicationHelper(\$application, \$input);

        \$configuration = \$this->getMigrationConfiguration(\$input, \$output);
        DoctrineCommand::configureMigrations(\$application->getKernel()->getContainer(), \$configuration);

        parent::initialize(\$input, \$output);
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        // EM and DB options cannot be set at same time
        if (\$input->getOption('em') !== null && \$input->getOption('db') !== null) {
            throw new InvalidArgumentException('Cannot set both \"em\" and \"db\" for command execution.');
        }

        return parent::execute(\$input, \$output);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsStatusDoctrineCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\Command;

use Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand;
use InvalidArgumentException;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Command to view the status of a set of migrations.
 */
class MigrationsStatusDoctrineCommand extends StatusCommand
{
    protected function configure() : void
    {
        parent::configure();

        \$this
            ->setName('doctrine:migrations:status')
            ->addOption('db', null, InputOption::VALUE_REQUIRED, 'The database connection to use for this command.')
            ->addOption('em', null, InputOption::VALUE_REQUIRED, 'The entity manager to use for this command.')
            ->addOption('shard', null, InputOption::VALUE_REQUIRED, 'The shard connection to use for this command.');
    }

    public function initialize(InputInterface \$input, OutputInterface \$output) : void
    {
        /** @var Application \$application */
        \$application = \$this->getApplication();

        Helper\\DoctrineCommandHelper::setApplicationHelper(\$application, \$input);

        \$configuration = \$this->getMigrationConfiguration(\$input, \$output);
        DoctrineCommand::configureMigrations(\$application->getKernel()->getContainer(), \$configuration);

        parent::initialize(\$input, \$output);
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        // EM and DB options cannot be set at same time
        if (\$input->getOption('em') !== null && \$input->getOption('db') !== null) {
            throw new InvalidArgumentException('Cannot set both \"em\" and \"db\" for command execution.');
        }

        return parent::execute(\$input, \$output);
    }
}
", "vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsStatusDoctrineCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsStatusDoctrineCommand.php");
    }
}
