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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Finder.php */
class __TwigTemplate_d792f4f40a01930eff86fe4feaa41f078482f213f8f0f5202161a4cf2ba22e70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Finder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Finder.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Finder;

use Doctrine\\Migrations\\Finder\\Exception\\InvalidDirectory;
use Doctrine\\Migrations\\Finder\\Exception\\NameIsReserved;
use ReflectionClass;
use const SORT_STRING;
use function assert;
use function get_declared_classes;
use function in_array;
use function is_dir;
use function ksort;
use function realpath;
use function strlen;
use function strncmp;
use function substr;

/**
 * The Finder class is responsible for for finding migrations on disk at a given path.
 */
abstract class Finder implements MigrationFinder
{
    protected static function requireOnce(string \$path) : void
    {
        require_once \$path;
    }

    /**
     * @throws InvalidDirectory
     */
    protected function getRealPath(string \$directory) : string
    {
        \$dir = realpath(\$directory);

        if (\$dir === false || ! is_dir(\$dir)) {
            throw InvalidDirectory::new(\$directory);
        }

        return \$dir;
    }

    /**
     * @param string[] \$files
     *
     * @return string[]
     *
     * @throws NameIsReserved
     */
    protected function loadMigrations(array \$files, ?string \$namespace) : array
    {
        \$includedFiles = [];
        foreach (\$files as \$file) {
            static::requireOnce(\$file);

            \$realFile = realpath(\$file);
            assert(\$realFile !== false);

            \$includedFiles[] = \$realFile;
        }

        \$classes  = \$this->loadMigrationClasses(\$includedFiles, \$namespace);
        \$versions = [];
        foreach (\$classes as \$class) {
            \$version = substr(\$class->getShortName(), 7);

            if (\$version === '0') {
                throw NameIsReserved::new(\$version);
            }

            \$versions[\$version] = \$class->getName();
        }

        ksort(\$versions, SORT_STRING);

        return \$versions;
    }

    /**
     * Look up all declared classes and find those classes contained
     * in the given `\$files` array.
     *
     * @param string[]    \$files     The set of files that were `required`
     * @param string|null \$namespace If not null only classes in this namespace will be returned
     *
     * @return ReflectionClass[] the classes in `\$files`
     */
    protected function loadMigrationClasses(array \$files, ?string \$namespace) : array
    {
        \$classes = [];
        foreach (get_declared_classes() as \$class) {
            \$reflectionClass = new ReflectionClass(\$class);

            if (! in_array(\$reflectionClass->getFileName(), \$files, true)) {
                continue;
            }

            if (\$namespace !== null && ! \$this->isReflectionClassInNamespace(\$reflectionClass, \$namespace)) {
                continue;
            }

            \$classes[] = \$reflectionClass;
        }

        return \$classes;
    }

    private function isReflectionClassInNamespace(ReflectionClass \$reflectionClass, string \$namespace) : bool
    {
        return strncmp(\$reflectionClass->getName(), \$namespace . '\\\\', strlen(\$namespace) + 1) === 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Finder.php";
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

use Doctrine\\Migrations\\Finder\\Exception\\InvalidDirectory;
use Doctrine\\Migrations\\Finder\\Exception\\NameIsReserved;
use ReflectionClass;
use const SORT_STRING;
use function assert;
use function get_declared_classes;
use function in_array;
use function is_dir;
use function ksort;
use function realpath;
use function strlen;
use function strncmp;
use function substr;

/**
 * The Finder class is responsible for for finding migrations on disk at a given path.
 */
abstract class Finder implements MigrationFinder
{
    protected static function requireOnce(string \$path) : void
    {
        require_once \$path;
    }

    /**
     * @throws InvalidDirectory
     */
    protected function getRealPath(string \$directory) : string
    {
        \$dir = realpath(\$directory);

        if (\$dir === false || ! is_dir(\$dir)) {
            throw InvalidDirectory::new(\$directory);
        }

        return \$dir;
    }

    /**
     * @param string[] \$files
     *
     * @return string[]
     *
     * @throws NameIsReserved
     */
    protected function loadMigrations(array \$files, ?string \$namespace) : array
    {
        \$includedFiles = [];
        foreach (\$files as \$file) {
            static::requireOnce(\$file);

            \$realFile = realpath(\$file);
            assert(\$realFile !== false);

            \$includedFiles[] = \$realFile;
        }

        \$classes  = \$this->loadMigrationClasses(\$includedFiles, \$namespace);
        \$versions = [];
        foreach (\$classes as \$class) {
            \$version = substr(\$class->getShortName(), 7);

            if (\$version === '0') {
                throw NameIsReserved::new(\$version);
            }

            \$versions[\$version] = \$class->getName();
        }

        ksort(\$versions, SORT_STRING);

        return \$versions;
    }

    /**
     * Look up all declared classes and find those classes contained
     * in the given `\$files` array.
     *
     * @param string[]    \$files     The set of files that were `required`
     * @param string|null \$namespace If not null only classes in this namespace will be returned
     *
     * @return ReflectionClass[] the classes in `\$files`
     */
    protected function loadMigrationClasses(array \$files, ?string \$namespace) : array
    {
        \$classes = [];
        foreach (get_declared_classes() as \$class) {
            \$reflectionClass = new ReflectionClass(\$class);

            if (! in_array(\$reflectionClass->getFileName(), \$files, true)) {
                continue;
            }

            if (\$namespace !== null && ! \$this->isReflectionClassInNamespace(\$reflectionClass, \$namespace)) {
                continue;
            }

            \$classes[] = \$reflectionClass;
        }

        return \$classes;
    }

    private function isReflectionClassInNamespace(ReflectionClass \$reflectionClass, string \$namespace) : bool
    {
        return strncmp(\$reflectionClass->getName(), \$namespace . '\\\\', strlen(\$namespace) + 1) === 0;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Finder.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Finder.php");
    }
}
