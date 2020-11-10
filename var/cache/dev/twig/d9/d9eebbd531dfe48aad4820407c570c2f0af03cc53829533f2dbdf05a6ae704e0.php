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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationDirectoryHelper.php */
class __TwigTemplate_ca3a52ec0bce45e5256cb41560a3406577cbc30f1a13a9a8f363008bb0940c7a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationDirectoryHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationDirectoryHelper.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Helper;

use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\DirectoryDoesNotExist;
use const DIRECTORY_SEPARATOR;
use function assert;
use function date;
use function file_exists;
use function getcwd;
use function mkdir;
use function rtrim;

/**
 * The MigrationDirectoryHelper class is responsible for returning the directory that migrations are stored in.
 *
 * @internal
 */
class MigrationDirectoryHelper
{
    /** @var Configuration */
    private \$configuration;

    public function __construct(Configuration \$configuration)
    {
        \$this->configuration = \$configuration;
    }

    /**
     * @throws DirectoryDoesNotExist
     */
    public function getMigrationDirectory() : string
    {
        \$dir = \$this->configuration->getMigrationsDirectory();
        \$dir = \$dir ?? getcwd();

        assert(\$dir !== false, 'Unable to determine current working directory.');

        \$dir = rtrim(\$dir, '/');

        if (! file_exists(\$dir)) {
            throw DirectoryDoesNotExist::new(\$dir);
        }

        if (\$this->configuration->areMigrationsOrganizedByYear()) {
            \$dir .= \$this->appendDir(date('Y'));
        }

        if (\$this->configuration->areMigrationsOrganizedByYearAndMonth()) {
            \$dir .= \$this->appendDir(date('m'));
        }

        \$this->createDirIfNotExists(\$dir);

        return \$dir;
    }

    private function appendDir(string \$dir) : string
    {
        return DIRECTORY_SEPARATOR . \$dir;
    }

    private function createDirIfNotExists(string \$dir) : void
    {
        if (file_exists(\$dir)) {
            return;
        }

        mkdir(\$dir, 0755, true);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationDirectoryHelper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Helper;

use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\DirectoryDoesNotExist;
use const DIRECTORY_SEPARATOR;
use function assert;
use function date;
use function file_exists;
use function getcwd;
use function mkdir;
use function rtrim;

/**
 * The MigrationDirectoryHelper class is responsible for returning the directory that migrations are stored in.
 *
 * @internal
 */
class MigrationDirectoryHelper
{
    /** @var Configuration */
    private \$configuration;

    public function __construct(Configuration \$configuration)
    {
        \$this->configuration = \$configuration;
    }

    /**
     * @throws DirectoryDoesNotExist
     */
    public function getMigrationDirectory() : string
    {
        \$dir = \$this->configuration->getMigrationsDirectory();
        \$dir = \$dir ?? getcwd();

        assert(\$dir !== false, 'Unable to determine current working directory.');

        \$dir = rtrim(\$dir, '/');

        if (! file_exists(\$dir)) {
            throw DirectoryDoesNotExist::new(\$dir);
        }

        if (\$this->configuration->areMigrationsOrganizedByYear()) {
            \$dir .= \$this->appendDir(date('Y'));
        }

        if (\$this->configuration->areMigrationsOrganizedByYearAndMonth()) {
            \$dir .= \$this->appendDir(date('m'));
        }

        \$this->createDirIfNotExists(\$dir);

        return \$dir;
    }

    private function appendDir(string \$dir) : string
    {
        return DIRECTORY_SEPARATOR . \$dir;
    }

    private function createDirIfNotExists(string \$dir) : void
    {
        if (file_exists(\$dir)) {
            return;
        }

        mkdir(\$dir, 0755, true);
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationDirectoryHelper.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationDirectoryHelper.php");
    }
}
