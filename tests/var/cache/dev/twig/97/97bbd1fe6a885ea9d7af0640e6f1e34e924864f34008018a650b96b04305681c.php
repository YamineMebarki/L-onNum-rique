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

/* vendor/doctrine/migrations/bin/doctrine-migrations.php */
class __TwigTemplate_3e41ef1f577a292eed08ac0b88513e30b925e32c23bca70e6a9037b576afa15a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/bin/doctrine-migrations.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/bin/doctrine-migrations.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\Migrations\\Tools\\Console\\ConsoleRunner;
use Phar;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Helper\\QuestionHelper;
use const DIRECTORY_SEPARATOR;
use const E_USER_ERROR;
use const PHP_EOL;
use function extension_loaded;
use function file_exists;
use function getcwd;
use function is_readable;
use function trigger_error;

(static function () : void {
    \$autoloadFiles = [
        __DIR__ . '/../vendor/autoload.php',
        __DIR__ . '/../../../autoload.php',
    ];

    \$autoloaderFound = false;

    foreach (\$autoloadFiles as \$autoloadFile) {
        if (! file_exists(\$autoloadFile)) {
            continue;
        }

        require_once \$autoloadFile;
        \$autoloaderFound = true;
    }

    if (! \$autoloaderFound) {
        if (extension_loaded('phar') && Phar::running() !== '') {
            echo 'The PHAR was built without dependencies!' . PHP_EOL;
            exit(1);
        }

        echo 'vendor/autoload.php could not be found. Did you run `composer install`?', PHP_EOL;
        exit(1);
    }

    // Support for using the Doctrine ORM convention of providing a `cli-paypal.php` file.
    \$configurationDirectories = [
        getcwd(),
        getcwd() . DIRECTORY_SEPARATOR . 'config',
    ];

    \$configurationFile = null;
    foreach (\$configurationDirectories as \$configurationDirectory) {
        \$configurationFilePath = \$configurationDirectory . DIRECTORY_SEPARATOR . 'cli-paypal.php';

        if (! file_exists(\$configurationFilePath)) {
            continue;
        }

        \$configurationFile = \$configurationFilePath;
        break;
    }

    \$helperSet = null;
    if (\$configurationFile !== null) {
        if (! is_readable(\$configurationFile)) {
            trigger_error('Configuration file [' . \$configurationFile . '] does not have read permission.', E_USER_ERROR);
            exit(1);
        }

        \$helperSet = require \$configurationFile;

        if (! \$helperSet instanceof HelperSet) {
            foreach (\$GLOBALS as \$helperSetCandidate) {
                if (! \$helperSetCandidate instanceof HelperSet) {
                    continue;
                }

                \$helperSet = \$helperSetCandidate;
                break;
            }
        }
    }

    \$helperSet = \$helperSet ?? new HelperSet();
    \$helperSet->set(new QuestionHelper(), 'question');

    \$commands = [];

    ConsoleRunner::run(\$helperSet, \$commands);
})();
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/bin/doctrine-migrations.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\Migrations\\Tools\\Console\\ConsoleRunner;
use Phar;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Helper\\QuestionHelper;
use const DIRECTORY_SEPARATOR;
use const E_USER_ERROR;
use const PHP_EOL;
use function extension_loaded;
use function file_exists;
use function getcwd;
use function is_readable;
use function trigger_error;

(static function () : void {
    \$autoloadFiles = [
        __DIR__ . '/../vendor/autoload.php',
        __DIR__ . '/../../../autoload.php',
    ];

    \$autoloaderFound = false;

    foreach (\$autoloadFiles as \$autoloadFile) {
        if (! file_exists(\$autoloadFile)) {
            continue;
        }

        require_once \$autoloadFile;
        \$autoloaderFound = true;
    }

    if (! \$autoloaderFound) {
        if (extension_loaded('phar') && Phar::running() !== '') {
            echo 'The PHAR was built without dependencies!' . PHP_EOL;
            exit(1);
        }

        echo 'vendor/autoload.php could not be found. Did you run `composer install`?', PHP_EOL;
        exit(1);
    }

    // Support for using the Doctrine ORM convention of providing a `cli-paypal.php` file.
    \$configurationDirectories = [
        getcwd(),
        getcwd() . DIRECTORY_SEPARATOR . 'config',
    ];

    \$configurationFile = null;
    foreach (\$configurationDirectories as \$configurationDirectory) {
        \$configurationFilePath = \$configurationDirectory . DIRECTORY_SEPARATOR . 'cli-paypal.php';

        if (! file_exists(\$configurationFilePath)) {
            continue;
        }

        \$configurationFile = \$configurationFilePath;
        break;
    }

    \$helperSet = null;
    if (\$configurationFile !== null) {
        if (! is_readable(\$configurationFile)) {
            trigger_error('Configuration file [' . \$configurationFile . '] does not have read permission.', E_USER_ERROR);
            exit(1);
        }

        \$helperSet = require \$configurationFile;

        if (! \$helperSet instanceof HelperSet) {
            foreach (\$GLOBALS as \$helperSetCandidate) {
                if (! \$helperSetCandidate instanceof HelperSet) {
                    continue;
                }

                \$helperSet = \$helperSetCandidate;
                break;
            }
        }
    }

    \$helperSet = \$helperSet ?? new HelperSet();
    \$helperSet->set(new QuestionHelper(), 'question');

    \$commands = [];

    ConsoleRunner::run(\$helperSet, \$commands);
})();
", "vendor/doctrine/migrations/bin/doctrine-migrations.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/bin/doctrine-migrations.php");
    }
}
