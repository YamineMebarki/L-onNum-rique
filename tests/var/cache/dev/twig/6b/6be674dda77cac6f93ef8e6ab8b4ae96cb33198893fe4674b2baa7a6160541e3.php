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

/* vendor/symfony/config/Loader/FileLoader.php */
class __TwigTemplate_498ceaf0a612384b3e603ca0ee72b6d29b9ac0e363ff8753274649533b6aa8a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Loader/FileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Loader/FileLoader.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Config\\Loader;

use Symfony\\Component\\Config\\Exception\\FileLoaderImportCircularReferenceException;
use Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException;
use Symfony\\Component\\Config\\Exception\\LoaderLoadException;
use Symfony\\Component\\Config\\FileLocatorInterface;
use Symfony\\Component\\Config\\Resource\\FileExistenceResource;
use Symfony\\Component\\Config\\Resource\\GlobResource;

/**
 * FileLoader is the abstract class used by all built-in loaders that are file based.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class FileLoader extends Loader
{
    protected static \$loading = [];

    protected \$locator;

    private \$currentDir;

    public function __construct(FileLocatorInterface \$locator)
    {
        \$this->locator = \$locator;
    }

    /**
     * Sets the current directory.
     *
     * @param string \$dir
     */
    public function setCurrentDir(\$dir)
    {
        \$this->currentDir = \$dir;
    }

    /**
     * Returns the file locator used by this loader.
     *
     * @return FileLocatorInterface
     */
    public function getLocator()
    {
        return \$this->locator;
    }

    /**
     * Imports a resource.
     *
     * @param mixed       \$resource       A Resource
     * @param string|null \$type           The resource type or null if unknown
     * @param bool        \$ignoreErrors   Whether to ignore import errors or not
     * @param string|null \$sourceResource The original resource importing the new resource
     *
     * @return mixed
     *
     * @throws LoaderLoadException
     * @throws FileLoaderImportCircularReferenceException
     * @throws FileLocatorFileNotFoundException
     */
    public function import(\$resource, \$type = null, \$ignoreErrors = false, \$sourceResource = null)
    {
        if (\\is_string(\$resource) && \\strlen(\$resource) !== \$i = strcspn(\$resource, '*?{[')) {
            \$ret = [];
            \$isSubpath = 0 !== \$i && false !== strpos(substr(\$resource, 0, \$i), '/');
            foreach (\$this->glob(\$resource, false, \$_, \$ignoreErrors || !\$isSubpath) as \$path => \$info) {
                if (null !== \$res = \$this->doImport(\$path, \$type, \$ignoreErrors, \$sourceResource)) {
                    \$ret[] = \$res;
                }
                \$isSubpath = true;
            }

            if (\$isSubpath) {
                return isset(\$ret[1]) ? \$ret : (isset(\$ret[0]) ? \$ret[0] : null);
            }
        }

        return \$this->doImport(\$resource, \$type, \$ignoreErrors, \$sourceResource);
    }

    /**
     * @internal
     */
    protected function glob(string \$pattern, bool \$recursive, &\$resource = null, bool \$ignoreErrors = false, bool \$forExclusion = false, array \$excluded = [])
    {
        if (\\strlen(\$pattern) === \$i = strcspn(\$pattern, '*?{[')) {
            \$prefix = \$pattern;
            \$pattern = '';
        } elseif (0 === \$i || false === strpos(substr(\$pattern, 0, \$i), '/')) {
            \$prefix = '.';
            \$pattern = '/'.\$pattern;
        } else {
            \$prefix = \\dirname(substr(\$pattern, 0, 1 + \$i));
            \$pattern = substr(\$pattern, \\strlen(\$prefix));
        }

        try {
            \$prefix = \$this->locator->locate(\$prefix, \$this->currentDir, true);
        } catch (FileLocatorFileNotFoundException \$e) {
            if (!\$ignoreErrors) {
                throw \$e;
            }

            \$resource = [];
            foreach (\$e->getPaths() as \$path) {
                \$resource[] = new FileExistenceResource(\$path);
            }

            return;
        }
        \$resource = new GlobResource(\$prefix, \$pattern, \$recursive, \$forExclusion, \$excluded);

        yield from \$resource;
    }

    private function doImport(\$resource, \$type = null, bool \$ignoreErrors = false, \$sourceResource = null)
    {
        try {
            \$loader = \$this->resolve(\$resource, \$type);

            if (\$loader instanceof self && null !== \$this->currentDir) {
                \$resource = \$loader->getLocator()->locate(\$resource, \$this->currentDir, false);
            }

            \$resources = \\is_array(\$resource) ? \$resource : [\$resource];
            for (\$i = 0; \$i < \$resourcesCount = \\count(\$resources); ++\$i) {
                if (isset(self::\$loading[\$resources[\$i]])) {
                    if (\$i == \$resourcesCount - 1) {
                        throw new FileLoaderImportCircularReferenceException(array_keys(self::\$loading));
                    }
                } else {
                    \$resource = \$resources[\$i];
                    break;
                }
            }
            self::\$loading[\$resource] = true;

            try {
                \$ret = \$loader->load(\$resource, \$type);
            } finally {
                unset(self::\$loading[\$resource]);
            }

            return \$ret;
        } catch (FileLoaderImportCircularReferenceException \$e) {
            throw \$e;
        } catch (\\Exception \$e) {
            if (!\$ignoreErrors) {
                // prevent embedded imports from nesting multiple exceptions
                if (\$e instanceof LoaderLoadException) {
                    throw \$e;
                }

                throw new LoaderLoadException(\$resource, \$sourceResource, null, \$e, \$type);
            }
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Loader/FileLoader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Config\\Loader;

use Symfony\\Component\\Config\\Exception\\FileLoaderImportCircularReferenceException;
use Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException;
use Symfony\\Component\\Config\\Exception\\LoaderLoadException;
use Symfony\\Component\\Config\\FileLocatorInterface;
use Symfony\\Component\\Config\\Resource\\FileExistenceResource;
use Symfony\\Component\\Config\\Resource\\GlobResource;

/**
 * FileLoader is the abstract class used by all built-in loaders that are file based.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class FileLoader extends Loader
{
    protected static \$loading = [];

    protected \$locator;

    private \$currentDir;

    public function __construct(FileLocatorInterface \$locator)
    {
        \$this->locator = \$locator;
    }

    /**
     * Sets the current directory.
     *
     * @param string \$dir
     */
    public function setCurrentDir(\$dir)
    {
        \$this->currentDir = \$dir;
    }

    /**
     * Returns the file locator used by this loader.
     *
     * @return FileLocatorInterface
     */
    public function getLocator()
    {
        return \$this->locator;
    }

    /**
     * Imports a resource.
     *
     * @param mixed       \$resource       A Resource
     * @param string|null \$type           The resource type or null if unknown
     * @param bool        \$ignoreErrors   Whether to ignore import errors or not
     * @param string|null \$sourceResource The original resource importing the new resource
     *
     * @return mixed
     *
     * @throws LoaderLoadException
     * @throws FileLoaderImportCircularReferenceException
     * @throws FileLocatorFileNotFoundException
     */
    public function import(\$resource, \$type = null, \$ignoreErrors = false, \$sourceResource = null)
    {
        if (\\is_string(\$resource) && \\strlen(\$resource) !== \$i = strcspn(\$resource, '*?{[')) {
            \$ret = [];
            \$isSubpath = 0 !== \$i && false !== strpos(substr(\$resource, 0, \$i), '/');
            foreach (\$this->glob(\$resource, false, \$_, \$ignoreErrors || !\$isSubpath) as \$path => \$info) {
                if (null !== \$res = \$this->doImport(\$path, \$type, \$ignoreErrors, \$sourceResource)) {
                    \$ret[] = \$res;
                }
                \$isSubpath = true;
            }

            if (\$isSubpath) {
                return isset(\$ret[1]) ? \$ret : (isset(\$ret[0]) ? \$ret[0] : null);
            }
        }

        return \$this->doImport(\$resource, \$type, \$ignoreErrors, \$sourceResource);
    }

    /**
     * @internal
     */
    protected function glob(string \$pattern, bool \$recursive, &\$resource = null, bool \$ignoreErrors = false, bool \$forExclusion = false, array \$excluded = [])
    {
        if (\\strlen(\$pattern) === \$i = strcspn(\$pattern, '*?{[')) {
            \$prefix = \$pattern;
            \$pattern = '';
        } elseif (0 === \$i || false === strpos(substr(\$pattern, 0, \$i), '/')) {
            \$prefix = '.';
            \$pattern = '/'.\$pattern;
        } else {
            \$prefix = \\dirname(substr(\$pattern, 0, 1 + \$i));
            \$pattern = substr(\$pattern, \\strlen(\$prefix));
        }

        try {
            \$prefix = \$this->locator->locate(\$prefix, \$this->currentDir, true);
        } catch (FileLocatorFileNotFoundException \$e) {
            if (!\$ignoreErrors) {
                throw \$e;
            }

            \$resource = [];
            foreach (\$e->getPaths() as \$path) {
                \$resource[] = new FileExistenceResource(\$path);
            }

            return;
        }
        \$resource = new GlobResource(\$prefix, \$pattern, \$recursive, \$forExclusion, \$excluded);

        yield from \$resource;
    }

    private function doImport(\$resource, \$type = null, bool \$ignoreErrors = false, \$sourceResource = null)
    {
        try {
            \$loader = \$this->resolve(\$resource, \$type);

            if (\$loader instanceof self && null !== \$this->currentDir) {
                \$resource = \$loader->getLocator()->locate(\$resource, \$this->currentDir, false);
            }

            \$resources = \\is_array(\$resource) ? \$resource : [\$resource];
            for (\$i = 0; \$i < \$resourcesCount = \\count(\$resources); ++\$i) {
                if (isset(self::\$loading[\$resources[\$i]])) {
                    if (\$i == \$resourcesCount - 1) {
                        throw new FileLoaderImportCircularReferenceException(array_keys(self::\$loading));
                    }
                } else {
                    \$resource = \$resources[\$i];
                    break;
                }
            }
            self::\$loading[\$resource] = true;

            try {
                \$ret = \$loader->load(\$resource, \$type);
            } finally {
                unset(self::\$loading[\$resource]);
            }

            return \$ret;
        } catch (FileLoaderImportCircularReferenceException \$e) {
            throw \$e;
        } catch (\\Exception \$e) {
            if (!\$ignoreErrors) {
                // prevent embedded imports from nesting multiple exceptions
                if (\$e instanceof LoaderLoadException) {
                    throw \$e;
                }

                throw new LoaderLoadException(\$resource, \$sourceResource, null, \$e, \$type);
            }
        }

        return null;
    }
}
", "vendor/symfony/config/Loader/FileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Loader/FileLoader.php");
    }
}
