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

/* vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php */
class __TwigTemplate_390947685395a246669bb794d0fd2dd2f476e517ed392657087c47241abc771d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Persistence\\Mapping\\Driver;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\Mapping\\MappingException;
use function array_keys;
use function array_merge;
use function array_unique;
use function is_file;
use function str_replace;

/**
 * Base driver for file-based metadata drivers.
 *
 * A file driver operates in a mode where it loads the mapping files of individual
 * classes on demand. This requires the user to adhere to the convention of 1 mapping
 * file per class and the file names of the mapping files must correspond to the full
 * class name, including namespace, with the namespace delimiters '\\', replaced by dots '.'.
 */
abstract class FileDriver implements MappingDriver
{
    /** @var FileLocator */
    protected \$locator;

    /** @var ClassMetadata[]|null */
    protected \$classCache;

    /** @var string|null */
    protected \$globalBasename;

    /**
     * Initializes a new FileDriver that looks in the given path(s) for mapping
     * documents and operates in the specified operating mode.
     *
     * @param string|string[]|FileLocator \$locator       A FileLocator or one/multiple paths
     *                                                where mapping documents can be found.
     * @param string|null                 \$fileExtension
     */
    public function __construct(\$locator, \$fileExtension = null)
    {
        if (\$locator instanceof FileLocator) {
            \$this->locator = \$locator;
        } else {
            \$this->locator = new DefaultFileLocator((array) \$locator, \$fileExtension);
        }
    }

    /**
     * Sets the global basename.
     *
     * @param string \$file
     *
     * @return void
     */
    public function setGlobalBasename(\$file)
    {
        \$this->globalBasename = \$file;
    }

    /**
     * Retrieves the global basename.
     *
     * @return string|null
     */
    public function getGlobalBasename()
    {
        return \$this->globalBasename;
    }

    /**
     * Gets the element of schema meta data for the class from the mapping file.
     * This will lazily load the mapping file if it is not loaded yet.
     *
     * @param string \$className
     *
     * @return ClassMetadata The element of schema meta data.
     *
     * @throws MappingException
     */
    public function getElement(\$className)
    {
        if (\$this->classCache === null) {
            \$this->initialize();
        }

        if (isset(\$this->classCache[\$className])) {
            return \$this->classCache[\$className];
        }

        \$result = \$this->loadMappingFile(\$this->locator->findMappingFile(\$className));
        if (! isset(\$result[\$className])) {
            throw MappingException::invalidMappingFile(\$className, str_replace('\\\\', '.', \$className) . \$this->locator->getFileExtension());
        }

        \$this->classCache[\$className] = \$result[\$className];

        return \$result[\$className];
    }

    /**
     * {@inheritDoc}
     */
    public function isTransient(\$className)
    {
        if (\$this->classCache === null) {
            \$this->initialize();
        }

        if (isset(\$this->classCache[\$className])) {
            return false;
        }

        return ! \$this->locator->fileExists(\$className);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllClassNames()
    {
        if (\$this->classCache === null) {
            \$this->initialize();
        }

        if (! \$this->classCache) {
            return (array) \$this->locator->getAllClassNames(\$this->globalBasename);
        }

        return array_unique(array_merge(
            array_keys(\$this->classCache),
            (array) \$this->locator->getAllClassNames(\$this->globalBasename)
        ));
    }

    /**
     * Loads a mapping file with the given name and returns a map
     * from class/entity names to their corresponding file driver elements.
     *
     * @param string \$file The mapping file to load.
     *
     * @return ClassMetadata[]
     */
    abstract protected function loadMappingFile(\$file);

    /**
     * Initializes the class cache from all the global files.
     *
     * Using this feature adds a substantial performance hit to file drivers as
     * more metadata has to be loaded into memory than might actually be
     * necessary. This may not be relevant to scenarios where caching of
     * metadata is in place, however hits very hard in scenarios where no
     * caching is used.
     *
     * @return void
     */
    protected function initialize()
    {
        \$this->classCache = [];
        if (\$this->globalBasename === null) {
            return;
        }

        foreach (\$this->locator->getPaths() as \$path) {
            \$file = \$path . '/' . \$this->globalBasename . \$this->locator->getFileExtension();
            if (! is_file(\$file)) {
                continue;
            }

            \$this->classCache = array_merge(
                \$this->classCache,
                \$this->loadMappingFile(\$file)
            );
        }
    }

    /**
     * Retrieves the locator used to discover mapping files by className.
     *
     * @return FileLocator
     */
    public function getLocator()
    {
        return \$this->locator;
    }

    /**
     * Sets the locator used to discover mapping files by className.
     */
    public function setLocator(FileLocator \$locator)
    {
        \$this->locator = \$locator;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php";
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
use function array_keys;
use function array_merge;
use function array_unique;
use function is_file;
use function str_replace;

/**
 * Base driver for file-based metadata drivers.
 *
 * A file driver operates in a mode where it loads the mapping files of individual
 * classes on demand. This requires the user to adhere to the convention of 1 mapping
 * file per class and the file names of the mapping files must correspond to the full
 * class name, including namespace, with the namespace delimiters '\\', replaced by dots '.'.
 */
abstract class FileDriver implements MappingDriver
{
    /** @var FileLocator */
    protected \$locator;

    /** @var ClassMetadata[]|null */
    protected \$classCache;

    /** @var string|null */
    protected \$globalBasename;

    /**
     * Initializes a new FileDriver that looks in the given path(s) for mapping
     * documents and operates in the specified operating mode.
     *
     * @param string|string[]|FileLocator \$locator       A FileLocator or one/multiple paths
     *                                                where mapping documents can be found.
     * @param string|null                 \$fileExtension
     */
    public function __construct(\$locator, \$fileExtension = null)
    {
        if (\$locator instanceof FileLocator) {
            \$this->locator = \$locator;
        } else {
            \$this->locator = new DefaultFileLocator((array) \$locator, \$fileExtension);
        }
    }

    /**
     * Sets the global basename.
     *
     * @param string \$file
     *
     * @return void
     */
    public function setGlobalBasename(\$file)
    {
        \$this->globalBasename = \$file;
    }

    /**
     * Retrieves the global basename.
     *
     * @return string|null
     */
    public function getGlobalBasename()
    {
        return \$this->globalBasename;
    }

    /**
     * Gets the element of schema meta data for the class from the mapping file.
     * This will lazily load the mapping file if it is not loaded yet.
     *
     * @param string \$className
     *
     * @return ClassMetadata The element of schema meta data.
     *
     * @throws MappingException
     */
    public function getElement(\$className)
    {
        if (\$this->classCache === null) {
            \$this->initialize();
        }

        if (isset(\$this->classCache[\$className])) {
            return \$this->classCache[\$className];
        }

        \$result = \$this->loadMappingFile(\$this->locator->findMappingFile(\$className));
        if (! isset(\$result[\$className])) {
            throw MappingException::invalidMappingFile(\$className, str_replace('\\\\', '.', \$className) . \$this->locator->getFileExtension());
        }

        \$this->classCache[\$className] = \$result[\$className];

        return \$result[\$className];
    }

    /**
     * {@inheritDoc}
     */
    public function isTransient(\$className)
    {
        if (\$this->classCache === null) {
            \$this->initialize();
        }

        if (isset(\$this->classCache[\$className])) {
            return false;
        }

        return ! \$this->locator->fileExists(\$className);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllClassNames()
    {
        if (\$this->classCache === null) {
            \$this->initialize();
        }

        if (! \$this->classCache) {
            return (array) \$this->locator->getAllClassNames(\$this->globalBasename);
        }

        return array_unique(array_merge(
            array_keys(\$this->classCache),
            (array) \$this->locator->getAllClassNames(\$this->globalBasename)
        ));
    }

    /**
     * Loads a mapping file with the given name and returns a map
     * from class/entity names to their corresponding file driver elements.
     *
     * @param string \$file The mapping file to load.
     *
     * @return ClassMetadata[]
     */
    abstract protected function loadMappingFile(\$file);

    /**
     * Initializes the class cache from all the global files.
     *
     * Using this feature adds a substantial performance hit to file drivers as
     * more metadata has to be loaded into memory than might actually be
     * necessary. This may not be relevant to scenarios where caching of
     * metadata is in place, however hits very hard in scenarios where no
     * caching is used.
     *
     * @return void
     */
    protected function initialize()
    {
        \$this->classCache = [];
        if (\$this->globalBasename === null) {
            return;
        }

        foreach (\$this->locator->getPaths() as \$path) {
            \$file = \$path . '/' . \$this->globalBasename . \$this->locator->getFileExtension();
            if (! is_file(\$file)) {
                continue;
            }

            \$this->classCache = array_merge(
                \$this->classCache,
                \$this->loadMappingFile(\$file)
            );
        }
    }

    /**
     * Retrieves the locator used to discover mapping files by className.
     *
     * @return FileLocator
     */
    public function getLocator()
    {
        return \$this->locator;
    }

    /**
     * Sets the locator used to discover mapping files by className.
     */
    public function setLocator(FileLocator \$locator)
    {
        \$this->locator = \$locator;
    }
}
", "vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php");
    }
}
