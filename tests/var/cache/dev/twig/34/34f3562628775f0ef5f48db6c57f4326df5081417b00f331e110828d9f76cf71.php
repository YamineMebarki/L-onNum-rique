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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php */
class __TwigTemplate_61a6644c1c7ad2f457ffd8aca62ba87a6601a56e6fc526e3c15a7f8968e1ae9c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping\\Driver;

use Doctrine\\Common\\Annotations\\Reader;
use Doctrine\\Common\\Persistence\\Mapping\\MappingException;
use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use ReflectionClass;
use RegexIterator;
use function array_merge;
use function array_unique;
use function get_class;
use function get_declared_classes;
use function in_array;
use function is_dir;
use function preg_match;
use function preg_quote;
use function realpath;
use function str_replace;
use function strpos;

/**
 * The AnnotationDriver reads the mapping metadata from docblock annotations.
 */
abstract class AnnotationDriver implements MappingDriver
{
    /**
     * The annotation reader.
     *
     * @var Reader
     */
    protected \$reader;

    /**
     * The paths where to look for mapping files.
     *
     * @var string[]
     */
    protected \$paths = [];

    /**
     * The paths excluded from path where to look for mapping files.
     *
     * @var string[]
     */
    protected \$excludePaths = [];

    /**
     * The file extension of mapping documents.
     *
     * @var string
     */
    protected \$fileExtension = '.php';

    /**
     * Cache for AnnotationDriver#getAllClassNames().
     *
     * @var string[]|null
     */
    protected \$classNames;

    /**
     * Name of the entity annotations as keys.
     *
     * @var string[]
     */
    protected \$entityAnnotationClasses = [];

    /**
     * Initializes a new AnnotationDriver that uses the given AnnotationReader for reading
     * docblock annotations.
     *
     * @param Reader               \$reader The AnnotationReader to use, duck-typed.
     * @param string|string[]|null \$paths  One or multiple paths where mapping classes can be found.
     */
    public function __construct(\$reader, \$paths = null)
    {
        \$this->reader = \$reader;
        if (! \$paths) {
            return;
        }

        \$this->addPaths((array) \$paths);
    }

    /**
     * Appends lookup paths to metadata driver.
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
     * Retrieves the defined metadata lookup paths.
     *
     * @return string[]
     */
    public function getPaths()
    {
        return \$this->paths;
    }

    /**
     * Append exclude lookup paths to metadata driver.
     *
     * @param string[] \$paths
     */
    public function addExcludePaths(array \$paths)
    {
        \$this->excludePaths = array_unique(array_merge(\$this->excludePaths, \$paths));
    }

    /**
     * Retrieve the defined metadata lookup exclude paths.
     *
     * @return string[]
     */
    public function getExcludePaths()
    {
        return \$this->excludePaths;
    }

    /**
     * Retrieve the current annotation reader
     *
     * @return Reader
     */
    public function getReader()
    {
        return \$this->reader;
    }

    /**
     * Gets the file extension used to look for mapping files under.
     *
     * @return string
     */
    public function getFileExtension()
    {
        return \$this->fileExtension;
    }

    /**
     * Sets the file extension used to look for mapping files under.
     *
     * @param string \$fileExtension The file extension to set.
     *
     * @return void
     */
    public function setFileExtension(\$fileExtension)
    {
        \$this->fileExtension = \$fileExtension;
    }

    /**
     * Returns whether the class with the specified name is transient. Only non-transient
     * classes, that is entities and mapped superclasses, should have their metadata loaded.
     *
     * A class is non-transient if it is annotated with an annotation
     * from the {@see AnnotationDriver::entityAnnotationClasses}.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function isTransient(\$className)
    {
        \$classAnnotations = \$this->reader->getClassAnnotations(new ReflectionClass(\$className));

        foreach (\$classAnnotations as \$annot) {
            if (isset(\$this->entityAnnotationClasses[get_class(\$annot)])) {
                return false;
            }
        }
        return true;
    }

    /**
     * {@inheritDoc}
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

            \$iterator = new RegexIterator(
                new RecursiveIteratorIterator(
                    new RecursiveDirectoryIterator(\$path, FilesystemIterator::SKIP_DOTS),
                    RecursiveIteratorIterator::LEAVES_ONLY
                ),
                '/^.+' . preg_quote(\$this->fileExtension) . '\$/i',
                RecursiveRegexIterator::GET_MATCH
            );

            foreach (\$iterator as \$file) {
                \$sourceFile = \$file[0];

                if (! preg_match('(^phar:)i', \$sourceFile)) {
                    \$sourceFile = realpath(\$sourceFile);
                }

                foreach (\$this->excludePaths as \$excludePath) {
                    \$exclude = str_replace('\\\\', '/', realpath(\$excludePath));
                    \$current = str_replace('\\\\', '/', \$sourceFile);

                    if (strpos(\$current, \$exclude) !== false) {
                        continue 2;
                    }
                }

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
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping\\Driver;

use Doctrine\\Common\\Annotations\\Reader;
use Doctrine\\Common\\Persistence\\Mapping\\MappingException;
use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use ReflectionClass;
use RegexIterator;
use function array_merge;
use function array_unique;
use function get_class;
use function get_declared_classes;
use function in_array;
use function is_dir;
use function preg_match;
use function preg_quote;
use function realpath;
use function str_replace;
use function strpos;

/**
 * The AnnotationDriver reads the mapping metadata from docblock annotations.
 */
abstract class AnnotationDriver implements MappingDriver
{
    /**
     * The annotation reader.
     *
     * @var Reader
     */
    protected \$reader;

    /**
     * The paths where to look for mapping files.
     *
     * @var string[]
     */
    protected \$paths = [];

    /**
     * The paths excluded from path where to look for mapping files.
     *
     * @var string[]
     */
    protected \$excludePaths = [];

    /**
     * The file extension of mapping documents.
     *
     * @var string
     */
    protected \$fileExtension = '.php';

    /**
     * Cache for AnnotationDriver#getAllClassNames().
     *
     * @var string[]|null
     */
    protected \$classNames;

    /**
     * Name of the entity annotations as keys.
     *
     * @var string[]
     */
    protected \$entityAnnotationClasses = [];

    /**
     * Initializes a new AnnotationDriver that uses the given AnnotationReader for reading
     * docblock annotations.
     *
     * @param Reader               \$reader The AnnotationReader to use, duck-typed.
     * @param string|string[]|null \$paths  One or multiple paths where mapping classes can be found.
     */
    public function __construct(\$reader, \$paths = null)
    {
        \$this->reader = \$reader;
        if (! \$paths) {
            return;
        }

        \$this->addPaths((array) \$paths);
    }

    /**
     * Appends lookup paths to metadata driver.
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
     * Retrieves the defined metadata lookup paths.
     *
     * @return string[]
     */
    public function getPaths()
    {
        return \$this->paths;
    }

    /**
     * Append exclude lookup paths to metadata driver.
     *
     * @param string[] \$paths
     */
    public function addExcludePaths(array \$paths)
    {
        \$this->excludePaths = array_unique(array_merge(\$this->excludePaths, \$paths));
    }

    /**
     * Retrieve the defined metadata lookup exclude paths.
     *
     * @return string[]
     */
    public function getExcludePaths()
    {
        return \$this->excludePaths;
    }

    /**
     * Retrieve the current annotation reader
     *
     * @return Reader
     */
    public function getReader()
    {
        return \$this->reader;
    }

    /**
     * Gets the file extension used to look for mapping files under.
     *
     * @return string
     */
    public function getFileExtension()
    {
        return \$this->fileExtension;
    }

    /**
     * Sets the file extension used to look for mapping files under.
     *
     * @param string \$fileExtension The file extension to set.
     *
     * @return void
     */
    public function setFileExtension(\$fileExtension)
    {
        \$this->fileExtension = \$fileExtension;
    }

    /**
     * Returns whether the class with the specified name is transient. Only non-transient
     * classes, that is entities and mapped superclasses, should have their metadata loaded.
     *
     * A class is non-transient if it is annotated with an annotation
     * from the {@see AnnotationDriver::entityAnnotationClasses}.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function isTransient(\$className)
    {
        \$classAnnotations = \$this->reader->getClassAnnotations(new ReflectionClass(\$className));

        foreach (\$classAnnotations as \$annot) {
            if (isset(\$this->entityAnnotationClasses[get_class(\$annot)])) {
                return false;
            }
        }
        return true;
    }

    /**
     * {@inheritDoc}
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

            \$iterator = new RegexIterator(
                new RecursiveIteratorIterator(
                    new RecursiveDirectoryIterator(\$path, FilesystemIterator::SKIP_DOTS),
                    RecursiveIteratorIterator::LEAVES_ONLY
                ),
                '/^.+' . preg_quote(\$this->fileExtension) . '\$/i',
                RecursiveRegexIterator::GET_MATCH
            );

            foreach (\$iterator as \$file) {
                \$sourceFile = \$file[0];

                if (! preg_match('(^phar:)i', \$sourceFile)) {
                    \$sourceFile = realpath(\$sourceFile);
                }

                foreach (\$this->excludePaths as \$excludePath) {
                    \$exclude = str_replace('\\\\', '/', realpath(\$excludePath));
                    \$current = str_replace('\\\\', '/', \$sourceFile);

                    if (strpos(\$current, \$exclude) !== false) {
                        continue 2;
                    }
                }

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
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php");
    }
}
