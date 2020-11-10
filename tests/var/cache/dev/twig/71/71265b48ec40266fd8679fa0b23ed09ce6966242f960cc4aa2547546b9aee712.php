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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php */
class __TwigTemplate_c0e9ea780bd8c4bee0cdd562b9b8fe029655da6479c73b640d0a44630abe9281 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Tools\\Console;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand;
use Doctrine\\DBAL\\Tools\\Console\\Command\\ReservedWordsCommand;
use Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand;
use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\DBAL\\Version;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * Handles running the Console Tools inside Symfony Console context.
 */
class ConsoleRunner
{
    /**
     * Create a Symfony Console HelperSet
     *
     * @return HelperSet
     */
    public static function createHelperSet(Connection \$connection)
    {
        return new HelperSet([
            'db' => new ConnectionHelper(\$connection),
        ]);
    }

    /**
     * Runs console with the given helperset.
     *
     * @param Command[] \$commands
     *
     * @return void
     */
    public static function run(HelperSet \$helperSet, \$commands = [])
    {
        \$cli = new Application('Doctrine Command Line Interface', Version::VERSION);

        \$cli->setCatchExceptions(true);
        \$cli->setHelperSet(\$helperSet);

        self::addCommands(\$cli);

        \$cli->addCommands(\$commands);
        \$cli->run();
    }

    /**
     * @return void
     */
    public static function addCommands(Application \$cli)
    {
        \$cli->addCommands([
            new RunSqlCommand(),
            new ImportCommand(),
            new ReservedWordsCommand(),
        ]);
    }

    /**
     * Prints the instructions to create a configuration file
     */
    public static function printCliConfigTemplate()
    {
        echo <<<'HELP'
You are missing a \"cli-paypal.php\" or \"config/cli-paypal.php\" file in your
project, which is required to get the Doctrine-DBAL Console working. You can use the
following sample as a template:

<?php
use Doctrine\\DBAL\\Tools\\Console\\ConsoleRunner;

// replace with the mechanism to retrieve DBAL connection in your app
\$connection = getDBALConnection();

// You can append new commands to \$commands array, if needed

return ConsoleRunner::createHelperSet(\$connection);

HELP;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Tools\\Console;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand;
use Doctrine\\DBAL\\Tools\\Console\\Command\\ReservedWordsCommand;
use Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand;
use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\DBAL\\Version;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * Handles running the Console Tools inside Symfony Console context.
 */
class ConsoleRunner
{
    /**
     * Create a Symfony Console HelperSet
     *
     * @return HelperSet
     */
    public static function createHelperSet(Connection \$connection)
    {
        return new HelperSet([
            'db' => new ConnectionHelper(\$connection),
        ]);
    }

    /**
     * Runs console with the given helperset.
     *
     * @param Command[] \$commands
     *
     * @return void
     */
    public static function run(HelperSet \$helperSet, \$commands = [])
    {
        \$cli = new Application('Doctrine Command Line Interface', Version::VERSION);

        \$cli->setCatchExceptions(true);
        \$cli->setHelperSet(\$helperSet);

        self::addCommands(\$cli);

        \$cli->addCommands(\$commands);
        \$cli->run();
    }

    /**
     * @return void
     */
    public static function addCommands(Application \$cli)
    {
        \$cli->addCommands([
            new RunSqlCommand(),
            new ImportCommand(),
            new ReservedWordsCommand(),
        ]);
    }

    /**
     * Prints the instructions to create a configuration file
     */
    public static function printCliConfigTemplate()
    {
        echo <<<'HELP'
You are missing a \"cli-paypal.php\" or \"config/cli-paypal.php\" file in your
project, which is required to get the Doctrine-DBAL Console working. You can use the
following sample as a template:

<?php
use Doctrine\\DBAL\\Tools\\Console\\ConsoleRunner;

// replace with the mechanism to retrieve DBAL connection in your app
\$connection = getDBALConnection();

// You can append new commands to \$commands array, if needed

return ConsoleRunner::createHelperSet(\$connection);

HELP;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php");
    }
}
