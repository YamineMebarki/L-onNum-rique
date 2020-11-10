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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/RecursiveRegexFinder.php */
class __TwigTemplate_afe7d4d22e4421b46198f8a8c4b58fe7689d4a5466cc59bb66b52bc0795872d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/RecursiveRegexFinder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/RecursiveRegexFinder.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Finder;

use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RegexIterator;
use const DIRECTORY_SEPARATOR;
use function sprintf;

/**
 * The RecursiveRegexFinder class recursively searches the given directory for migrations.
 */
final class RecursiveRegexFinder extends Finder implements MigrationDeepFinder
{
    /**
     * @return string[]
     */
    public function findMigrations(string \$directory, ?string \$namespace = null) : array
    {
        \$dir = \$this->getRealPath(\$directory);

        return \$this->loadMigrations(
            \$this->getMatches(\$this->createIterator(\$dir)),
            \$namespace
        );
    }

    private function createIterator(string \$dir) : RegexIterator
    {
        return new RegexIterator(
            new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator(\$dir, FilesystemIterator::SKIP_DOTS | FilesystemIterator::FOLLOW_SYMLINKS),
                RecursiveIteratorIterator::LEAVES_ONLY
            ),
            \$this->getPattern(),
            RegexIterator::GET_MATCH
        );
    }

    private function getPattern() : string
    {
        return sprintf(
            '#^.+\\\\%sVersion[^\\\\%s]{1,255}\\\\.php\$#i',
            DIRECTORY_SEPARATOR,
            DIRECTORY_SEPARATOR
        );
    }

    /**
     * @return string[]
     */
    private function getMatches(RegexIterator \$iteratorFilesMatch) : array
    {
        \$files = [];
        foreach (\$iteratorFilesMatch as \$file) {
            \$files[] = \$file[0];
        }

        return \$files;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/RecursiveRegexFinder.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Finder;

use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RegexIterator;
use const DIRECTORY_SEPARATOR;
use function sprintf;

/**
 * The RecursiveRegexFinder class recursively searches the given directory for migrations.
 */
final class RecursiveRegexFinder extends Finder implements MigrationDeepFinder
{
    /**
     * @return string[]
     */
    public function findMigrations(string \$directory, ?string \$namespace = null) : array
    {
        \$dir = \$this->getRealPath(\$directory);

        return \$this->loadMigrations(
            \$this->getMatches(\$this->createIterator(\$dir)),
            \$namespace
        );
    }

    private function createIterator(string \$dir) : RegexIterator
    {
        return new RegexIterator(
            new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator(\$dir, FilesystemIterator::SKIP_DOTS | FilesystemIterator::FOLLOW_SYMLINKS),
                RecursiveIteratorIterator::LEAVES_ONLY
            ),
            \$this->getPattern(),
            RegexIterator::GET_MATCH
        );
    }

    private function getPattern() : string
    {
        return sprintf(
            '#^.+\\\\%sVersion[^\\\\%s]{1,255}\\\\.php\$#i',
            DIRECTORY_SEPARATOR,
            DIRECTORY_SEPARATOR
        );
    }

    /**
     * @return string[]
     */
    private function getMatches(RegexIterator \$iteratorFilesMatch) : array
    {
        \$files = [];
        foreach (\$iteratorFilesMatch as \$file) {
            \$files[] = \$file[0];
        }

        return \$files;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/RecursiveRegexFinder.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/RecursiveRegexFinder.php");
    }
}
