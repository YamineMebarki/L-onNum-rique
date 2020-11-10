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

/* vendor/symfony/dependency-injection/Loader/FileLoader.php */
class __TwigTemplate_5a8d7e8a81ff3f8504929d9eb7af625b0da9f7ac957339575bdbc0697e634ae5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/FileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/FileLoader.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader;

use Symfony\\Component\\Config\\FileLocatorInterface;
use Symfony\\Component\\Config\\Loader\\FileLoader as BaseFileLoader;
use Symfony\\Component\\Config\\Resource\\GlobResource;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * FileLoader is the abstract class used by all built-in loaders that are file based.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class FileLoader extends BaseFileLoader
{
    protected \$container;
    protected \$isLoadingInstanceof = false;
    protected \$instanceof = [];

    public function __construct(ContainerBuilder \$container, FileLocatorInterface \$locator)
    {
        \$this->container = \$container;

        parent::__construct(\$locator);
    }

    /**
     * Registers a set of classes as services using PSR-4 for discovery.
     *
     * @param Definition           \$prototype A definition to use as template
     * @param string               \$namespace The namespace prefix of classes in the scanned directory
     * @param string               \$resource  The directory to look for classes, glob-patterns allowed
     * @param string|string[]|null \$exclude   A globbed path of files to exclude or an array of globbed paths of files to exclude
     */
    public function registerClasses(Definition \$prototype, \$namespace, \$resource, \$exclude = null)
    {
        if ('\\\\' !== substr(\$namespace, -1)) {
            throw new InvalidArgumentException(sprintf('Namespace prefix must end with a \"\\\\\": %s.', \$namespace));
        }
        if (!preg_match('/^(?:[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+\\\\\\\\)++\$/', \$namespace)) {
            throw new InvalidArgumentException(sprintf('Namespace is not a valid PSR-4 prefix: %s.', \$namespace));
        }

        \$classes = \$this->findClasses(\$namespace, \$resource, (array) \$exclude);
        // prepare for deep cloning
        \$serializedPrototype = serialize(\$prototype);
        \$interfaces = [];
        \$singlyImplemented = [];

        foreach (\$classes as \$class => \$errorMessage) {
            if (interface_exists(\$class, false)) {
                \$interfaces[] = \$class;
            } else {
                \$this->setDefinition(\$class, \$definition = unserialize(\$serializedPrototype));
                if (null !== \$errorMessage) {
                    \$definition->addError(\$errorMessage);

                    continue;
                }
                foreach (class_implements(\$class, false) as \$interface) {
                    \$singlyImplemented[\$interface] = isset(\$singlyImplemented[\$interface]) ? false : \$class;
                }
            }
        }
        foreach (\$interfaces as \$interface) {
            if (!empty(\$singlyImplemented[\$interface])) {
                \$this->container->setAlias(\$interface, \$singlyImplemented[\$interface])
                    ->setPublic(false);
            }
        }
    }

    /**
     * Registers a definition in the container with its instanceof-conditionals.
     *
     * @param string \$id
     */
    protected function setDefinition(\$id, Definition \$definition)
    {
        \$this->container->removeBindings(\$id);

        if (\$this->isLoadingInstanceof) {
            if (!\$definition instanceof ChildDefinition) {
                throw new InvalidArgumentException(sprintf('Invalid type definition \"%s\": ChildDefinition expected, \"%s\" given.', \$id, \\get_class(\$definition)));
            }
            \$this->instanceof[\$id] = \$definition;
        } else {
            \$this->container->setDefinition(\$id, \$definition instanceof ChildDefinition ? \$definition : \$definition->setInstanceofConditionals(\$this->instanceof));
        }
    }

    private function findClasses(\$namespace, \$pattern, array \$excludePatterns)
    {
        \$parameterBag = \$this->container->getParameterBag();

        \$excludePaths = [];
        \$excludePrefix = null;
        \$excludePatterns = \$parameterBag->unescapeValue(\$parameterBag->resolveValue(\$excludePatterns));
        foreach (\$excludePatterns as \$excludePattern) {
            foreach (\$this->glob(\$excludePattern, true, \$resource, false, true) as \$path => \$info) {
                if (null === \$excludePrefix) {
                    \$excludePrefix = \$resource->getPrefix();
                }

                // normalize Windows slashes
                \$excludePaths[str_replace('\\\\', '/', \$path)] = true;
            }
        }

        \$pattern = \$parameterBag->unescapeValue(\$parameterBag->resolveValue(\$pattern));
        \$classes = [];
        \$extRegexp = '/\\\\.php\$/';
        \$prefixLen = null;
        foreach (\$this->glob(\$pattern, true, \$resource, false, false, \$excludePaths) as \$path => \$info) {
            if (null === \$prefixLen) {
                \$prefixLen = \\strlen(\$resource->getPrefix());

                if (\$excludePrefix && 0 !== strpos(\$excludePrefix, \$resource->getPrefix())) {
                    throw new InvalidArgumentException(sprintf('Invalid \"exclude\" pattern when importing classes for \"%s\": make sure your \"exclude\" pattern (%s) is a subset of the \"resource\" pattern (%s)', \$namespace, \$excludePattern, \$pattern));
                }
            }

            if (isset(\$excludePaths[str_replace('\\\\', '/', \$path)])) {
                continue;
            }

            if (!preg_match(\$extRegexp, \$path, \$m) || !\$info->isReadable()) {
                continue;
            }
            \$class = \$namespace.ltrim(str_replace('/', '\\\\', substr(\$path, \$prefixLen, -\\strlen(\$m[0]))), '\\\\');

            if (!preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+(?:\\\\\\\\[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+)*+\$/', \$class)) {
                continue;
            }

            try {
                \$r = \$this->container->getReflectionClass(\$class);
            } catch (\\ReflectionException \$e) {
                \$classes[\$class] = sprintf(
                    'While discovering services from namespace \"%s\", an error was thrown when processing the class \"%s\": \"%s\".',
                    \$namespace,
                    \$class,
                    \$e->getMessage()
                );
                continue;
            }
            // check to make sure the expected class exists
            if (!\$r) {
                throw new InvalidArgumentException(sprintf('Expected to find class \"%s\" in file \"%s\" while importing services from resource \"%s\", but it was not found! Check the namespace prefix used with the resource.', \$class, \$path, \$pattern));
            }

            if (\$r->isInstantiable() || \$r->isInterface()) {
                \$classes[\$class] = null;
            }
        }

        // track only for new & removed files
        if (\$resource instanceof GlobResource) {
            \$this->container->addResource(\$resource);
        } else {
            foreach (\$resource as \$path) {
                \$this->container->fileExists(\$path, false);
            }
        }

        return \$classes;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Loader/FileLoader.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader;

use Symfony\\Component\\Config\\FileLocatorInterface;
use Symfony\\Component\\Config\\Loader\\FileLoader as BaseFileLoader;
use Symfony\\Component\\Config\\Resource\\GlobResource;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * FileLoader is the abstract class used by all built-in loaders that are file based.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class FileLoader extends BaseFileLoader
{
    protected \$container;
    protected \$isLoadingInstanceof = false;
    protected \$instanceof = [];

    public function __construct(ContainerBuilder \$container, FileLocatorInterface \$locator)
    {
        \$this->container = \$container;

        parent::__construct(\$locator);
    }

    /**
     * Registers a set of classes as services using PSR-4 for discovery.
     *
     * @param Definition           \$prototype A definition to use as template
     * @param string               \$namespace The namespace prefix of classes in the scanned directory
     * @param string               \$resource  The directory to look for classes, glob-patterns allowed
     * @param string|string[]|null \$exclude   A globbed path of files to exclude or an array of globbed paths of files to exclude
     */
    public function registerClasses(Definition \$prototype, \$namespace, \$resource, \$exclude = null)
    {
        if ('\\\\' !== substr(\$namespace, -1)) {
            throw new InvalidArgumentException(sprintf('Namespace prefix must end with a \"\\\\\": %s.', \$namespace));
        }
        if (!preg_match('/^(?:[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+\\\\\\\\)++\$/', \$namespace)) {
            throw new InvalidArgumentException(sprintf('Namespace is not a valid PSR-4 prefix: %s.', \$namespace));
        }

        \$classes = \$this->findClasses(\$namespace, \$resource, (array) \$exclude);
        // prepare for deep cloning
        \$serializedPrototype = serialize(\$prototype);
        \$interfaces = [];
        \$singlyImplemented = [];

        foreach (\$classes as \$class => \$errorMessage) {
            if (interface_exists(\$class, false)) {
                \$interfaces[] = \$class;
            } else {
                \$this->setDefinition(\$class, \$definition = unserialize(\$serializedPrototype));
                if (null !== \$errorMessage) {
                    \$definition->addError(\$errorMessage);

                    continue;
                }
                foreach (class_implements(\$class, false) as \$interface) {
                    \$singlyImplemented[\$interface] = isset(\$singlyImplemented[\$interface]) ? false : \$class;
                }
            }
        }
        foreach (\$interfaces as \$interface) {
            if (!empty(\$singlyImplemented[\$interface])) {
                \$this->container->setAlias(\$interface, \$singlyImplemented[\$interface])
                    ->setPublic(false);
            }
        }
    }

    /**
     * Registers a definition in the container with its instanceof-conditionals.
     *
     * @param string \$id
     */
    protected function setDefinition(\$id, Definition \$definition)
    {
        \$this->container->removeBindings(\$id);

        if (\$this->isLoadingInstanceof) {
            if (!\$definition instanceof ChildDefinition) {
                throw new InvalidArgumentException(sprintf('Invalid type definition \"%s\": ChildDefinition expected, \"%s\" given.', \$id, \\get_class(\$definition)));
            }
            \$this->instanceof[\$id] = \$definition;
        } else {
            \$this->container->setDefinition(\$id, \$definition instanceof ChildDefinition ? \$definition : \$definition->setInstanceofConditionals(\$this->instanceof));
        }
    }

    private function findClasses(\$namespace, \$pattern, array \$excludePatterns)
    {
        \$parameterBag = \$this->container->getParameterBag();

        \$excludePaths = [];
        \$excludePrefix = null;
        \$excludePatterns = \$parameterBag->unescapeValue(\$parameterBag->resolveValue(\$excludePatterns));
        foreach (\$excludePatterns as \$excludePattern) {
            foreach (\$this->glob(\$excludePattern, true, \$resource, false, true) as \$path => \$info) {
                if (null === \$excludePrefix) {
                    \$excludePrefix = \$resource->getPrefix();
                }

                // normalize Windows slashes
                \$excludePaths[str_replace('\\\\', '/', \$path)] = true;
            }
        }

        \$pattern = \$parameterBag->unescapeValue(\$parameterBag->resolveValue(\$pattern));
        \$classes = [];
        \$extRegexp = '/\\\\.php\$/';
        \$prefixLen = null;
        foreach (\$this->glob(\$pattern, true, \$resource, false, false, \$excludePaths) as \$path => \$info) {
            if (null === \$prefixLen) {
                \$prefixLen = \\strlen(\$resource->getPrefix());

                if (\$excludePrefix && 0 !== strpos(\$excludePrefix, \$resource->getPrefix())) {
                    throw new InvalidArgumentException(sprintf('Invalid \"exclude\" pattern when importing classes for \"%s\": make sure your \"exclude\" pattern (%s) is a subset of the \"resource\" pattern (%s)', \$namespace, \$excludePattern, \$pattern));
                }
            }

            if (isset(\$excludePaths[str_replace('\\\\', '/', \$path)])) {
                continue;
            }

            if (!preg_match(\$extRegexp, \$path, \$m) || !\$info->isReadable()) {
                continue;
            }
            \$class = \$namespace.ltrim(str_replace('/', '\\\\', substr(\$path, \$prefixLen, -\\strlen(\$m[0]))), '\\\\');

            if (!preg_match('/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+(?:\\\\\\\\[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*+)*+\$/', \$class)) {
                continue;
            }

            try {
                \$r = \$this->container->getReflectionClass(\$class);
            } catch (\\ReflectionException \$e) {
                \$classes[\$class] = sprintf(
                    'While discovering services from namespace \"%s\", an error was thrown when processing the class \"%s\": \"%s\".',
                    \$namespace,
                    \$class,
                    \$e->getMessage()
                );
                continue;
            }
            // check to make sure the expected class exists
            if (!\$r) {
                throw new InvalidArgumentException(sprintf('Expected to find class \"%s\" in file \"%s\" while importing services from resource \"%s\", but it was not found! Check the namespace prefix used with the resource.', \$class, \$path, \$pattern));
            }

            if (\$r->isInstantiable() || \$r->isInterface()) {
                \$classes[\$class] = null;
            }
        }

        // track only for new & removed files
        if (\$resource instanceof GlobResource) {
            \$this->container->addResource(\$resource);
        } else {
            foreach (\$resource as \$path) {
                \$this->container->fileExists(\$path, false);
            }
        }

        return \$classes;
    }
}
", "vendor/symfony/dependency-injection/Loader/FileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Loader/FileLoader.php");
    }
}
