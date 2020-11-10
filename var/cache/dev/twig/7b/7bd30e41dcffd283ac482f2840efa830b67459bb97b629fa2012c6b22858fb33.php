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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/DefaultFileLocator.php */
class __TwigTemplate_4f635d06e6ad0a91400c524ebe854d8d453fea0422dbaf3470ae622d6a5aee71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/DefaultFileLocator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/DefaultFileLocator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping\\Driver;

use Doctrine\\Common\\Persistence\\Mapping\\MappingException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use const DIRECTORY_SEPARATOR;
use function array_merge;
use function array_unique;
use function is_dir;
use function is_file;
use function str_replace;

/**
 * Locates the file that contains the metadata information for a given class name.
 *
 * This behavior is independent of the actual content of the file. It just detects
 * the file which is responsible for the given class name.
 */
class DefaultFileLocator implements FileLocator
{
    /**
     * The paths where to look for mapping files.
     *
     * @var string[]
     */
    protected \$paths = [];

    /**
     * The file extension of mapping documents.
     *
     * @var string|null
     */
    protected \$fileExtension;

    /**
     * Initializes a new FileDriver that looks in the given path(s) for mapping
     * documents and operates in the specified operating mode.
     *
     * @param string|string[] \$paths         One or multiple paths where mapping documents can be found.
     * @param string|null     \$fileExtension The file extension of mapping documents, usually prefixed with a dot.
     */
    public function __construct(\$paths, \$fileExtension = null)
    {
        \$this->addPaths((array) \$paths);
        \$this->fileExtension = \$fileExtension;
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
     * Gets the file extension used to look for mapping files under.
     *
     * @return string|null
     */
    public function getFileExtension()
    {
        return \$this->fileExtension;
    }

    /**
     * Sets the file extension used to look for mapping files under.
     *
     * @param string|null \$fileExtension The file extension to set.
     *
     * @return void
     */
    public function setFileExtension(\$fileExtension)
    {
        \$this->fileExtension = \$fileExtension;
    }

    /**
     * {@inheritDoc}
     */
    public function findMappingFile(\$className)
    {
        \$fileName = str_replace('\\\\', '.', \$className) . \$this->fileExtension;

        // Check whether file exists
        foreach (\$this->paths as \$path) {
            if (is_file(\$path . DIRECTORY_SEPARATOR . \$fileName)) {
                return \$path . DIRECTORY_SEPARATOR . \$fileName;
            }
        }

        throw MappingException::mappingFileNotFound(\$className, \$fileName);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllClassNames(\$globalBasename)
    {
        \$classes = [];

        if (\$this->paths) {
            foreach (\$this->paths as \$path) {
                if (! is_dir(\$path)) {
                    throw MappingException::fileMappingDriversRequireConfiguredDirectoryPath(\$path);
                }

                \$iterator = new RecursiveIteratorIterator(
                    new RecursiveDirectoryIterator(\$path),
                    RecursiveIteratorIterator::LEAVES_ONLY
                );

                foreach (\$iterator as \$file) {
                    \$fileName = \$file->getBasename(\$this->fileExtension);

                    if (\$fileName === \$file->getBasename() || \$fileName === \$globalBasename) {
                        continue;
                    }

                    // NOTE: All files found here means classes are not transient!
                    \$classes[] = str_replace('.', '\\\\', \$fileName);
                }
            }
        }

        return \$classes;
    }

    /**
     * {@inheritDoc}
     */
    public function fileExists(\$className)
    {
        \$fileName = str_replace('\\\\', '.', \$className) . \$this->fileExtension;

        // Check whether file exists
        foreach ((array) \$this->paths as \$path) {
            if (is_file(\$path . DIRECTORY_SEPARATOR . \$fileName)) {
                return true;
            }
        }

        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/DefaultFileLocator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Persistence\\Mapping\\Driver;

use Doctrine\\Common\\Persistence\\Mapping\\MappingException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use const DIRECTORY_SEPARATOR;
use function array_merge;
use function array_unique;
use function is_dir;
use function is_file;
use function str_replace;

/**
 * Locates the file that contains the metadata information for a given class name.
 *
 * This behavior is independent of the actual content of the file. It just detects
 * the file which is responsible for the given class name.
 */
class DefaultFileLocator implements FileLocator
{
    /**
     * The paths where to look for mapping files.
     *
     * @var string[]
     */
    protected \$paths = [];

    /**
     * The file extension of mapping documents.
     *
     * @var string|null
     */
    protected \$fileExtension;

    /**
     * Initializes a new FileDriver that looks in the given path(s) for mapping
     * documents and operates in the specified operating mode.
     *
     * @param string|string[] \$paths         One or multiple paths where mapping documents can be found.
     * @param string|null     \$fileExtension The file extension of mapping documents, usually prefixed with a dot.
     */
    public function __construct(\$paths, \$fileExtension = null)
    {
        \$this->addPaths((array) \$paths);
        \$this->fileExtension = \$fileExtension;
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
     * Gets the file extension used to look for mapping files under.
     *
     * @return string|null
     */
    public function getFileExtension()
    {
        return \$this->fileExtension;
    }

    /**
     * Sets the file extension used to look for mapping files under.
     *
     * @param string|null \$fileExtension The file extension to set.
     *
     * @return void
     */
    public function setFileExtension(\$fileExtension)
    {
        \$this->fileExtension = \$fileExtension;
    }

    /**
     * {@inheritDoc}
     */
    public function findMappingFile(\$className)
    {
        \$fileName = str_replace('\\\\', '.', \$className) . \$this->fileExtension;

        // Check whether file exists
        foreach (\$this->paths as \$path) {
            if (is_file(\$path . DIRECTORY_SEPARATOR . \$fileName)) {
                return \$path . DIRECTORY_SEPARATOR . \$fileName;
            }
        }

        throw MappingException::mappingFileNotFound(\$className, \$fileName);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllClassNames(\$globalBasename)
    {
        \$classes = [];

        if (\$this->paths) {
            foreach (\$this->paths as \$path) {
                if (! is_dir(\$path)) {
                    throw MappingException::fileMappingDriversRequireConfiguredDirectoryPath(\$path);
                }

                \$iterator = new RecursiveIteratorIterator(
                    new RecursiveDirectoryIterator(\$path),
                    RecursiveIteratorIterator::LEAVES_ONLY
                );

                foreach (\$iterator as \$file) {
                    \$fileName = \$file->getBasename(\$this->fileExtension);

                    if (\$fileName === \$file->getBasename() || \$fileName === \$globalBasename) {
                        continue;
                    }

                    // NOTE: All files found here means classes are not transient!
                    \$classes[] = str_replace('.', '\\\\', \$fileName);
                }
            }
        }

        return \$classes;
    }

    /**
     * {@inheritDoc}
     */
    public function fileExists(\$className)
    {
        \$fileName = str_replace('\\\\', '.', \$className) . \$this->fileExtension;

        // Check whether file exists
        foreach ((array) \$this->paths as \$path) {
            if (is_file(\$path . DIRECTORY_SEPARATOR . \$fileName)) {
                return true;
            }
        }

        return false;
    }
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/DefaultFileLocator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/DefaultFileLocator.php");
    }
}
