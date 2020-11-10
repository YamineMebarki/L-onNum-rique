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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConsoleRunner.php */
class __TwigTemplate_7cceb5fbaede82a3544f67668608c762321a17858e02eea2d1f5398ed8c8c358 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConsoleRunner.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConsoleRunner.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console;

use Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand;
use PackageVersions\\Versions;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * The ConsoleRunner class is used to create the Symfony Console application for the Doctrine Migrations console.
 *
 * @internal
 *
 * @see bin/doctrine-migrations.php
 */
class ConsoleRunner
{
    /** @param AbstractCommand[] \$commands */
    public static function run(HelperSet \$helperSet, array \$commands = []) : void
    {
        \$cli = static::createApplication(\$helperSet, \$commands);
        \$cli->run();
    }

    /** @param AbstractCommand[] \$commands */
    public static function createApplication(HelperSet \$helperSet, array \$commands = []) : Application
    {
        \$cli = new Application('Doctrine Migrations', Versions::getVersion('doctrine/migrations'));
        \$cli->setCatchExceptions(true);
        \$cli->setHelperSet(\$helperSet);
        self::addCommands(\$cli);
        \$cli->addCommands(\$commands);

        return \$cli;
    }

    public static function addCommands(Application \$cli) : void
    {
        \$cli->addCommands([
            new DumpSchemaCommand(),
            new ExecuteCommand(),
            new GenerateCommand(),
            new LatestCommand(),
            new MigrateCommand(),
            new RollupCommand(),
            new StatusCommand(),
            new VersionCommand(),
            new UpToDateCommand(),
        ]);

        if (! \$cli->getHelperSet()->has('em')) {
            return;
        }

        \$cli->add(new DiffCommand());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConsoleRunner.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console;

use Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand;
use PackageVersions\\Versions;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * The ConsoleRunner class is used to create the Symfony Console application for the Doctrine Migrations console.
 *
 * @internal
 *
 * @see bin/doctrine-migrations.php
 */
class ConsoleRunner
{
    /** @param AbstractCommand[] \$commands */
    public static function run(HelperSet \$helperSet, array \$commands = []) : void
    {
        \$cli = static::createApplication(\$helperSet, \$commands);
        \$cli->run();
    }

    /** @param AbstractCommand[] \$commands */
    public static function createApplication(HelperSet \$helperSet, array \$commands = []) : Application
    {
        \$cli = new Application('Doctrine Migrations', Versions::getVersion('doctrine/migrations'));
        \$cli->setCatchExceptions(true);
        \$cli->setHelperSet(\$helperSet);
        self::addCommands(\$cli);
        \$cli->addCommands(\$commands);

        return \$cli;
    }

    public static function addCommands(Application \$cli) : void
    {
        \$cli->addCommands([
            new DumpSchemaCommand(),
            new ExecuteCommand(),
            new GenerateCommand(),
            new LatestCommand(),
            new MigrateCommand(),
            new RollupCommand(),
            new StatusCommand(),
            new VersionCommand(),
            new UpToDateCommand(),
        ]);

        if (! \$cli->getHelperSet()->has('em')) {
            return;
        }

        \$cli->add(new DiffCommand());
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConsoleRunner.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConsoleRunner.php");
    }
}
