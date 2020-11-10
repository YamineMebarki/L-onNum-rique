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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/StaticPHPDriver.php */
class __TwigTemplate_25c24f6068cf1fe8bcedb4410ce5a908118f9bb039462c7ab278f31d93baea93 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/StaticPHPDriver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/StaticPHPDriver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping\\Driver;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\Mapping\\MappingException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use function array_merge;
use function array_unique;
use function get_declared_classes;
use function in_array;
use function is_dir;
use function method_exists;
use function realpath;

/**
 * The StaticPHPDriver calls a static loadMetadata() method on your entity
 * classes where you can manually populate the ClassMetadata instance.
 */
class StaticPHPDriver implements MappingDriver
{
    /**
     * Paths of entity directories.
     *
     * @var string[]
     */
    private \$paths = [];

    /**
     * Map of all class names.
     *
     * @var string[]
     */
    private \$classNames;

    /**
     * @param string[]|string \$paths
     */
    public function __construct(\$paths)
    {
        \$this->addPaths((array) \$paths);
    }

    /**
     * Adds paths.
     *
     * @param string[] \$paths
     *
     * @return void
     */
    public function addPaths(array \$paths)
    {
        \$this->paths = array_unique(array_merge(\$this->paths, \$paths));
    }

    /**
     * {@inheritdoc}
     */
    public function loadMetadataForClass(\$className, ClassMetadata \$metadata)
    {
        \$className::loadMetadata(\$metadata);
    }

    /**
     * {@inheritDoc}
     *
     * @todo Same code exists in AnnotationDriver, should we re-use it somehow or not worry about it?
     */
    public function getAllClassNames()
    {
        if (\$this->classNames !== null) {
            return \$this->classNames;
        }

        if (! \$this->paths) {
            throw MappingException::pathRequired();
        }

        \$classes       = [];
        \$includedFiles = [];

        foreach (\$this->paths as \$path) {
            if (! is_dir(\$path)) {
                throw MappingException::fileMappingDriversRequireConfiguredDirectoryPath(\$path);
            }

            \$iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator(\$path),
                RecursiveIteratorIterator::LEAVES_ONLY
            );

            foreach (\$iterator as \$file) {
                if (\$file->getBasename('.php') === \$file->getBasename()) {
                    continue;
                }

                \$sourceFile = realpath(\$file->getPathName());
                require_once \$sourceFile;
                \$includedFiles[] = \$sourceFile;
            }
        }

        \$declared = get_declared_classes();

        foreach (\$declared as \$className) {
            \$rc         = new ReflectionClass(\$className);
            \$sourceFile = \$rc->getFileName();
            if (! in_array(\$sourceFile, \$includedFiles) || \$this->isTransient(\$className)) {
                continue;
            }

            \$classes[] = \$className;
        }

        \$this->classNames = \$classes;

        return \$classes;
    }

    /**
     * {@inheritdoc}
     */
    public function isTransient(\$className)
    {
        return ! method_exists(\$className, 'loadMetadata');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/StaticPHPDriver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping\\Driver;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\Mapping\\MappingException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use function array_merge;
use function array_unique;
use function get_declared_classes;
use function in_array;
use function is_dir;
use function method_exists;
use function realpath;

/**
 * The StaticPHPDriver calls a static loadMetadata() method on your entity
 * classes where you can manually populate the ClassMetadata instance.
 */
class StaticPHPDriver implements MappingDriver
{
    /**
     * Paths of entity directories.
     *
     * @var string[]
     */
    private \$paths = [];

    /**
     * Map of all class names.
     *
     * @var string[]
     */
    private \$classNames;

    /**
     * @param string[]|string \$paths
     */
    public function __construct(\$paths)
    {
        \$this->addPaths((array) \$paths);
    }

    /**
     * Adds paths.
     *
     * @param string[] \$paths
     *
     * @return void
     */
    public function addPaths(array \$paths)
    {
        \$this->paths = array_unique(array_merge(\$this->paths, \$paths));
    }

    /**
     * {@inheritdoc}
     */
    public function loadMetadataForClass(\$className, ClassMetadata \$metadata)
    {
        \$className::loadMetadata(\$metadata);
    }

    /**
     * {@inheritDoc}
     *
     * @todo Same code exists in AnnotationDriver, should we re-use it somehow or not worry about it?
     */
    public function getAllClassNames()
    {
        if (\$this->classNames !== null) {
            return \$this->classNames;
        }

        if (! \$this->paths) {
            throw MappingException::pathRequired();
        }

        \$classes       = [];
        \$includedFiles = [];

        foreach (\$this->paths as \$path) {
            if (! is_dir(\$path)) {
                throw MappingException::fileMappingDriversRequireConfiguredDirectoryPath(\$path);
            }

            \$iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator(\$path),
                RecursiveIteratorIterator::LEAVES_ONLY
            );

            foreach (\$iterator as \$file) {
                if (\$file->getBasename('.php') === \$file->getBasename()) {
                    continue;
                }

                \$sourceFile = realpath(\$file->getPathName());
                require_once \$sourceFile;
                \$includedFiles[] = \$sourceFile;
            }
        }

        \$declared = get_declared_classes();

        foreach (\$declared as \$className) {
            \$rc         = new ReflectionClass(\$className);
            \$sourceFile = \$rc->getFileName();
            if (! in_array(\$sourceFile, \$includedFiles) || \$this->isTransient(\$className)) {
                continue;
            }

            \$classes[] = \$className;
        }

        \$this->classNames = \$classes;

        return \$classes;
    }

    /**
     * {@inheritdoc}
     */
    public function isTransient(\$className)
    {
        return ! method_exists(\$className, 'loadMetadata');
    }
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/StaticPHPDriver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/StaticPHPDriver.php");
    }
}
