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

/* vendor/symfony/validator/Mapping/Factory/LazyLoadingMetadataFactory.php */
class __TwigTemplate_ae6c28374a8042af102f123f1fb34d63fd38e52b6ad76f9a0dbafe8bb0978802 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Factory/LazyLoadingMetadataFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Factory/LazyLoadingMetadataFactory.php"));

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

namespace Symfony\\Component\\Validator\\Mapping\\Factory;

use Symfony\\Component\\Validator\\Exception\\NoSuchMetadataException;
use Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;

/**
 * Creates new {@link ClassMetadataInterface} instances.
 *
 * Whenever {@link getMetadataFor()} is called for the first time with a given
 * class name or object of that class, a new metadata instance is created and
 * returned. On subsequent requests for the same class, the same metadata
 * instance will be returned.
 *
 * You can optionally pass a {@link LoaderInterface} instance to the constructor.
 * Whenever a new metadata instance is created, it is passed to the loader,
 * which can configure the metadata based on configuration loaded from the
 * filesystem or a database. If you want to use multiple loaders, wrap them in a
 * {@link LoaderChain}.
 *
 * You can also optionally pass a {@link CacheInterface} instance to the
 * constructor. This cache will be used for persisting the generated metadata
 * between multiple PHP requests.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LazyLoadingMetadataFactory implements MetadataFactoryInterface
{
    protected \$loader;
    protected \$cache;

    /**
     * The loaded metadata, indexed by class name.
     *
     * @var ClassMetadata[]
     */
    protected \$loadedClasses = [];

    /**
     * Creates a new metadata factory.
     *
     * @param LoaderInterface|null \$loader The loader for configuring new metadata
     * @param CacheInterface|null  \$cache  The cache for persisting metadata
     *                                     between multiple PHP requests
     */
    public function __construct(LoaderInterface \$loader = null, CacheInterface \$cache = null)
    {
        \$this->loader = \$loader;
        \$this->cache = \$cache;
    }

    /**
     * {@inheritdoc}
     *
     * If the method was called with the same class name (or an object of that
     * class) before, the same metadata instance is returned.
     *
     * If the factory was configured with a cache, this method will first look
     * for an existing metadata instance in the cache. If an existing instance
     * is found, it will be returned without further ado.
     *
     * Otherwise, a new metadata instance is created. If the factory was
     * configured with a loader, the metadata is passed to the
     * {@link LoaderInterface::loadClassMetadata()} method for further
     * configuration. At last, the new object is returned.
     */
    public function getMetadataFor(\$value)
    {
        if (!\\is_object(\$value) && !\\is_string(\$value)) {
            throw new NoSuchMetadataException(sprintf('Cannot create metadata for non-objects. Got: %s', \\gettype(\$value)));
        }

        \$class = ltrim(\\is_object(\$value) ? \\get_class(\$value) : \$value, '\\\\');

        if (isset(\$this->loadedClasses[\$class])) {
            return \$this->loadedClasses[\$class];
        }

        if (!class_exists(\$class) && !interface_exists(\$class, false)) {
            throw new NoSuchMetadataException(sprintf('The class or interface \"%s\" does not exist.', \$class));
        }

        if (null !== \$this->cache && false !== (\$metadata = \$this->cache->read(\$class))) {
            // Include constraints from the parent class
            \$this->mergeConstraints(\$metadata);

            return \$this->loadedClasses[\$class] = \$metadata;
        }

        \$metadata = new ClassMetadata(\$class);

        if (null !== \$this->loader) {
            \$this->loader->loadClassMetadata(\$metadata);
        }

        if (null !== \$this->cache) {
            \$this->cache->write(\$metadata);
        }

        // Include constraints from the parent class
        \$this->mergeConstraints(\$metadata);

        return \$this->loadedClasses[\$class] = \$metadata;
    }

    private function mergeConstraints(ClassMetadata \$metadata)
    {
        // Include constraints from the parent class
        if (\$parent = \$metadata->getReflectionClass()->getParentClass()) {
            \$metadata->mergeConstraints(\$this->getMetadataFor(\$parent->name));
        }

        \$interfaces = \$metadata->getReflectionClass()->getInterfaces();

        \$interfaces = array_filter(\$interfaces, function (\\ReflectionClass \$interface) use (\$parent, \$interfaces) {
            \$interfaceName = \$interface->getName();

            if (\$parent && \$parent->implementsInterface(\$interfaceName)) {
                return false;
            }

            foreach (\$interfaces as \$i) {
                if (\$i !== \$interface && \$i->implementsInterface(\$interfaceName)) {
                    return false;
                }
            }

            return true;
        });

        // Include constraints from all directly implemented interfaces
        foreach (\$interfaces as \$interface) {
            if ('Symfony\\Component\\Validator\\GroupSequenceProviderInterface' === \$interface->name) {
                continue;
            }
            \$metadata->mergeConstraints(\$this->getMetadataFor(\$interface->name));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$value)
    {
        if (!\\is_object(\$value) && !\\is_string(\$value)) {
            return false;
        }

        \$class = ltrim(\\is_object(\$value) ? \\get_class(\$value) : \$value, '\\\\');

        return class_exists(\$class) || interface_exists(\$class, false);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Factory/LazyLoadingMetadataFactory.php";
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

namespace Symfony\\Component\\Validator\\Mapping\\Factory;

use Symfony\\Component\\Validator\\Exception\\NoSuchMetadataException;
use Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;

/**
 * Creates new {@link ClassMetadataInterface} instances.
 *
 * Whenever {@link getMetadataFor()} is called for the first time with a given
 * class name or object of that class, a new metadata instance is created and
 * returned. On subsequent requests for the same class, the same metadata
 * instance will be returned.
 *
 * You can optionally pass a {@link LoaderInterface} instance to the constructor.
 * Whenever a new metadata instance is created, it is passed to the loader,
 * which can configure the metadata based on configuration loaded from the
 * filesystem or a database. If you want to use multiple loaders, wrap them in a
 * {@link LoaderChain}.
 *
 * You can also optionally pass a {@link CacheInterface} instance to the
 * constructor. This cache will be used for persisting the generated metadata
 * between multiple PHP requests.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LazyLoadingMetadataFactory implements MetadataFactoryInterface
{
    protected \$loader;
    protected \$cache;

    /**
     * The loaded metadata, indexed by class name.
     *
     * @var ClassMetadata[]
     */
    protected \$loadedClasses = [];

    /**
     * Creates a new metadata factory.
     *
     * @param LoaderInterface|null \$loader The loader for configuring new metadata
     * @param CacheInterface|null  \$cache  The cache for persisting metadata
     *                                     between multiple PHP requests
     */
    public function __construct(LoaderInterface \$loader = null, CacheInterface \$cache = null)
    {
        \$this->loader = \$loader;
        \$this->cache = \$cache;
    }

    /**
     * {@inheritdoc}
     *
     * If the method was called with the same class name (or an object of that
     * class) before, the same metadata instance is returned.
     *
     * If the factory was configured with a cache, this method will first look
     * for an existing metadata instance in the cache. If an existing instance
     * is found, it will be returned without further ado.
     *
     * Otherwise, a new metadata instance is created. If the factory was
     * configured with a loader, the metadata is passed to the
     * {@link LoaderInterface::loadClassMetadata()} method for further
     * configuration. At last, the new object is returned.
     */
    public function getMetadataFor(\$value)
    {
        if (!\\is_object(\$value) && !\\is_string(\$value)) {
            throw new NoSuchMetadataException(sprintf('Cannot create metadata for non-objects. Got: %s', \\gettype(\$value)));
        }

        \$class = ltrim(\\is_object(\$value) ? \\get_class(\$value) : \$value, '\\\\');

        if (isset(\$this->loadedClasses[\$class])) {
            return \$this->loadedClasses[\$class];
        }

        if (!class_exists(\$class) && !interface_exists(\$class, false)) {
            throw new NoSuchMetadataException(sprintf('The class or interface \"%s\" does not exist.', \$class));
        }

        if (null !== \$this->cache && false !== (\$metadata = \$this->cache->read(\$class))) {
            // Include constraints from the parent class
            \$this->mergeConstraints(\$metadata);

            return \$this->loadedClasses[\$class] = \$metadata;
        }

        \$metadata = new ClassMetadata(\$class);

        if (null !== \$this->loader) {
            \$this->loader->loadClassMetadata(\$metadata);
        }

        if (null !== \$this->cache) {
            \$this->cache->write(\$metadata);
        }

        // Include constraints from the parent class
        \$this->mergeConstraints(\$metadata);

        return \$this->loadedClasses[\$class] = \$metadata;
    }

    private function mergeConstraints(ClassMetadata \$metadata)
    {
        // Include constraints from the parent class
        if (\$parent = \$metadata->getReflectionClass()->getParentClass()) {
            \$metadata->mergeConstraints(\$this->getMetadataFor(\$parent->name));
        }

        \$interfaces = \$metadata->getReflectionClass()->getInterfaces();

        \$interfaces = array_filter(\$interfaces, function (\\ReflectionClass \$interface) use (\$parent, \$interfaces) {
            \$interfaceName = \$interface->getName();

            if (\$parent && \$parent->implementsInterface(\$interfaceName)) {
                return false;
            }

            foreach (\$interfaces as \$i) {
                if (\$i !== \$interface && \$i->implementsInterface(\$interfaceName)) {
                    return false;
                }
            }

            return true;
        });

        // Include constraints from all directly implemented interfaces
        foreach (\$interfaces as \$interface) {
            if ('Symfony\\Component\\Validator\\GroupSequenceProviderInterface' === \$interface->name) {
                continue;
            }
            \$metadata->mergeConstraints(\$this->getMetadataFor(\$interface->name));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$value)
    {
        if (!\\is_object(\$value) && !\\is_string(\$value)) {
            return false;
        }

        \$class = ltrim(\\is_object(\$value) ? \\get_class(\$value) : \$value, '\\\\');

        return class_exists(\$class) || interface_exists(\$class, false);
    }
}
", "vendor/symfony/validator/Mapping/Factory/LazyLoadingMetadataFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Factory/LazyLoadingMetadataFactory.php");
    }
}
