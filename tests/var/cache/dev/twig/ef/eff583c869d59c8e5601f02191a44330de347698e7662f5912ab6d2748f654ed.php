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

/* vendor/symfony/doctrine-bridge/DependencyInjection/AbstractDoctrineExtension.php */
class __TwigTemplate_69f46761e3f5567026d5779faea0e4e8d8d515c0cac9aa9657331409b1b8dcaf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/DependencyInjection/AbstractDoctrineExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/DependencyInjection/AbstractDoctrineExtension.php"));

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

namespace Symfony\\Bridge\\Doctrine\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;

/**
 * This abstract classes groups common code that Doctrine Object Manager extensions (ORM, MongoDB, CouchDB) need.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
abstract class AbstractDoctrineExtension extends Extension
{
    /**
     * Used inside metadata driver method to simplify aggregation of data.
     */
    protected \$aliasMap = [];

    /**
     * Used inside metadata driver method to simplify aggregation of data.
     */
    protected \$drivers = [];

    /**
     * @param array            \$objectManager A configured object manager
     * @param ContainerBuilder \$container     A ContainerBuilder instance
     *
     * @throws \\InvalidArgumentException
     */
    protected function loadMappingInformation(array \$objectManager, ContainerBuilder \$container)
    {
        if (\$objectManager['auto_mapping']) {
            // automatically register bundle mappings
            foreach (array_keys(\$container->getParameter('kernel.bundles')) as \$bundle) {
                if (!isset(\$objectManager['mappings'][\$bundle])) {
                    \$objectManager['mappings'][\$bundle] = [
                        'mapping' => true,
                        'is_bundle' => true,
                    ];
                }
            }
        }

        foreach (\$objectManager['mappings'] as \$mappingName => \$mappingConfig) {
            if (null !== \$mappingConfig && false === \$mappingConfig['mapping']) {
                continue;
            }

            \$mappingConfig = array_replace([
                'dir' => false,
                'type' => false,
                'prefix' => false,
            ], (array) \$mappingConfig);

            \$mappingConfig['dir'] = \$container->getParameterBag()->resolveValue(\$mappingConfig['dir']);
            // a bundle configuration is detected by realizing that the specified dir is not absolute and existing
            if (!isset(\$mappingConfig['is_bundle'])) {
                \$mappingConfig['is_bundle'] = !is_dir(\$mappingConfig['dir']);
            }

            if (\$mappingConfig['is_bundle']) {
                \$bundle = null;
                foreach (\$container->getParameter('kernel.bundles') as \$name => \$class) {
                    if (\$mappingName === \$name) {
                        \$bundle = new \\ReflectionClass(\$class);

                        break;
                    }
                }

                if (null === \$bundle) {
                    throw new \\InvalidArgumentException(sprintf('Bundle \"%s\" does not exist or it is not enabled.', \$mappingName));
                }

                \$mappingConfig = \$this->getMappingDriverBundleConfigDefaults(\$mappingConfig, \$bundle, \$container);
                if (!\$mappingConfig) {
                    continue;
                }
            }

            \$this->assertValidMappingConfiguration(\$mappingConfig, \$objectManager['name']);
            \$this->setMappingDriverConfig(\$mappingConfig, \$mappingName);
            \$this->setMappingDriverAlias(\$mappingConfig, \$mappingName);
        }
    }

    /**
     * Register the alias for this mapping driver.
     *
     * Aliases can be used in the Query languages of all the Doctrine object managers to simplify writing tasks.
     *
     * @param array  \$mappingConfig
     * @param string \$mappingName
     */
    protected function setMappingDriverAlias(\$mappingConfig, \$mappingName)
    {
        if (isset(\$mappingConfig['alias'])) {
            \$this->aliasMap[\$mappingConfig['alias']] = \$mappingConfig['prefix'];
        } else {
            \$this->aliasMap[\$mappingName] = \$mappingConfig['prefix'];
        }
    }

    /**
     * Register the mapping driver configuration for later use with the object managers metadata driver chain.
     *
     * @param string \$mappingName
     *
     * @throws \\InvalidArgumentException
     */
    protected function setMappingDriverConfig(array \$mappingConfig, \$mappingName)
    {
        \$mappingDirectory = \$mappingConfig['dir'];
        if (!is_dir(\$mappingDirectory)) {
            throw new \\InvalidArgumentException(sprintf('Invalid Doctrine mapping path given. Cannot load Doctrine mapping/bundle named \"%s\".', \$mappingName));
        }

        \$this->drivers[\$mappingConfig['type']][\$mappingConfig['prefix']] = realpath(\$mappingDirectory) ?: \$mappingDirectory;
    }

    /**
     * If this is a bundle controlled mapping all the missing information can be autodetected by this method.
     *
     * Returns false when autodetection failed, an array of the completed information otherwise.
     *
     * @return array|false
     */
    protected function getMappingDriverBundleConfigDefaults(array \$bundleConfig, \\ReflectionClass \$bundle, ContainerBuilder \$container)
    {
        \$bundleDir = \\dirname(\$bundle->getFileName());

        if (!\$bundleConfig['type']) {
            \$bundleConfig['type'] = \$this->detectMetadataDriver(\$bundleDir, \$container);
        }

        if (!\$bundleConfig['type']) {
            // skip this bundle, no mapping information was found.
            return false;
        }

        if (!\$bundleConfig['dir']) {
            if (\\in_array(\$bundleConfig['type'], ['annotation', 'staticphp'])) {
                \$bundleConfig['dir'] = \$bundleDir.'/'.\$this->getMappingObjectDefaultName();
            } else {
                \$bundleConfig['dir'] = \$bundleDir.'/'.\$this->getMappingResourceConfigDirectory();
            }
        } else {
            \$bundleConfig['dir'] = \$bundleDir.'/'.\$bundleConfig['dir'];
        }

        if (!\$bundleConfig['prefix']) {
            \$bundleConfig['prefix'] = \$bundle->getNamespaceName().'\\\\'.\$this->getMappingObjectDefaultName();
        }

        return \$bundleConfig;
    }

    /**
     * Register all the collected mapping information with the object manager by registering the appropriate mapping drivers.
     *
     * @param array            \$objectManager
     * @param ContainerBuilder \$container     A ContainerBuilder instance
     */
    protected function registerMappingDrivers(\$objectManager, ContainerBuilder \$container)
    {
        // configure metadata driver for each bundle based on the type of mapping files found
        if (\$container->hasDefinition(\$this->getObjectManagerElementName(\$objectManager['name'].'_metadata_driver'))) {
            \$chainDriverDef = \$container->getDefinition(\$this->getObjectManagerElementName(\$objectManager['name'].'_metadata_driver'));
        } else {
            \$chainDriverDef = new Definition('%'.\$this->getObjectManagerElementName('metadata.driver_chain.class%'));
            \$chainDriverDef->setPublic(false);
        }

        foreach (\$this->drivers as \$driverType => \$driverPaths) {
            \$mappingService = \$this->getObjectManagerElementName(\$objectManager['name'].'_'.\$driverType.'_metadata_driver');
            if (\$container->hasDefinition(\$mappingService)) {
                \$mappingDriverDef = \$container->getDefinition(\$mappingService);
                \$args = \$mappingDriverDef->getArguments();
                if ('annotation' == \$driverType) {
                    \$args[1] = array_merge(array_values(\$driverPaths), \$args[1]);
                } else {
                    \$args[0] = array_merge(array_values(\$driverPaths), \$args[0]);
                }
                \$mappingDriverDef->setArguments(\$args);
            } elseif ('annotation' == \$driverType) {
                \$mappingDriverDef = new Definition('%'.\$this->getObjectManagerElementName('metadata.'.\$driverType.'.class%'), [
                    new Reference(\$this->getObjectManagerElementName('metadata.annotation_reader')),
                    array_values(\$driverPaths),
                ]);
            } else {
                \$mappingDriverDef = new Definition('%'.\$this->getObjectManagerElementName('metadata.'.\$driverType.'.class%'), [
                    array_values(\$driverPaths),
                ]);
            }
            \$mappingDriverDef->setPublic(false);
            if (false !== strpos(\$mappingDriverDef->getClass(), 'yml') || false !== strpos(\$mappingDriverDef->getClass(), 'xml')) {
                \$mappingDriverDef->setArguments([array_flip(\$driverPaths)]);
                \$mappingDriverDef->addMethodCall('setGlobalBasename', ['mapping']);
            }

            \$container->setDefinition(\$mappingService, \$mappingDriverDef);

            foreach (\$driverPaths as \$prefix => \$driverPath) {
                \$chainDriverDef->addMethodCall('addDriver', [new Reference(\$mappingService), \$prefix]);
            }
        }

        \$container->setDefinition(\$this->getObjectManagerElementName(\$objectManager['name'].'_metadata_driver'), \$chainDriverDef);
    }

    /**
     * Assertion if the specified mapping information is valid.
     *
     * @param string \$objectManagerName
     *
     * @throws \\InvalidArgumentException
     */
    protected function assertValidMappingConfiguration(array \$mappingConfig, \$objectManagerName)
    {
        if (!\$mappingConfig['type'] || !\$mappingConfig['dir'] || !\$mappingConfig['prefix']) {
            throw new \\InvalidArgumentException(sprintf('Mapping definitions for Doctrine manager \"%s\" require at least the \"type\", \"dir\" and \"prefix\" options.', \$objectManagerName));
        }

        if (!is_dir(\$mappingConfig['dir'])) {
            throw new \\InvalidArgumentException(sprintf('Specified non-existing directory \"%s\" as Doctrine mapping source.', \$mappingConfig['dir']));
        }

        if (!\\in_array(\$mappingConfig['type'], ['xml', 'yml', 'annotation', 'php', 'staticphp'])) {
            throw new \\InvalidArgumentException(sprintf('Can only configure \"xml\", \"yml\", \"annotation\", \"php\" or '.
                '\"staticphp\" through the DoctrineBundle. Use your own bundle to configure other metadata drivers. '.
                'You can register them by adding a new driver to the '.
                '\"%s\" service definition.', \$this->getObjectManagerElementName(\$objectManagerName.'_metadata_driver')
            ));
        }
    }

    /**
     * Detects what metadata driver to use for the supplied directory.
     *
     * @param string           \$dir       A directory path
     * @param ContainerBuilder \$container A ContainerBuilder instance
     *
     * @return string|null A metadata driver short name, if one can be detected
     */
    protected function detectMetadataDriver(\$dir, ContainerBuilder \$container)
    {
        \$configPath = \$this->getMappingResourceConfigDirectory();
        \$extension = \$this->getMappingResourceExtension();

        if (glob(\$dir.'/'.\$configPath.'/*.'.\$extension.'.xml', GLOB_NOSORT)) {
            \$driver = 'xml';
        } elseif (glob(\$dir.'/'.\$configPath.'/*.'.\$extension.'.yml', GLOB_NOSORT)) {
            \$driver = 'yml';
        } elseif (glob(\$dir.'/'.\$configPath.'/*.'.\$extension.'.php', GLOB_NOSORT)) {
            \$driver = 'php';
        } else {
            // add the closest existing directory as a resource
            \$resource = \$dir.'/'.\$configPath;
            while (!is_dir(\$resource)) {
                \$resource = \\dirname(\$resource);
            }
            \$container->fileExists(\$resource, false);

            return \$container->fileExists(\$dir.'/'.\$this->getMappingObjectDefaultName(), false) ? 'annotation' : null;
        }
        \$container->fileExists(\$dir.'/'.\$configPath, false);

        return \$driver;
    }

    /**
     * Loads a configured object manager metadata, query or result cache driver.
     *
     * @param array            \$objectManager A configured object manager
     * @param ContainerBuilder \$container     A ContainerBuilder instance
     * @param string           \$cacheName
     *
     * @throws \\InvalidArgumentException in case of unknown driver type
     */
    protected function loadObjectManagerCacheDriver(array \$objectManager, ContainerBuilder \$container, \$cacheName)
    {
        \$this->loadCacheDriver(\$cacheName, \$objectManager['name'], \$objectManager[\$cacheName.'_driver'], \$container);
    }

    /**
     * Loads a cache driver.
     *
     * @param string           \$cacheName         The cache driver name
     * @param string           \$objectManagerName The object manager name
     * @param array            \$cacheDriver       The cache driver mapping
     * @param ContainerBuilder \$container         The ContainerBuilder instance
     *
     * @return string
     *
     * @throws \\InvalidArgumentException
     */
    protected function loadCacheDriver(\$cacheName, \$objectManagerName, array \$cacheDriver, ContainerBuilder \$container)
    {
        \$cacheDriverServiceId = \$this->getObjectManagerElementName(\$objectManagerName.'_'.\$cacheName);

        switch (\$cacheDriver['type']) {
            case 'service':
                \$container->setAlias(\$cacheDriverServiceId, new Alias(\$cacheDriver['id'], false));

                return \$cacheDriverServiceId;
            case 'memcached':
                \$memcachedClass = !empty(\$cacheDriver['class']) ? \$cacheDriver['class'] : '%'.\$this->getObjectManagerElementName('cache.memcached.class').'%';
                \$memcachedInstanceClass = !empty(\$cacheDriver['instance_class']) ? \$cacheDriver['instance_class'] : '%'.\$this->getObjectManagerElementName('cache.memcached_instance.class').'%';
                \$memcachedHost = !empty(\$cacheDriver['host']) ? \$cacheDriver['host'] : '%'.\$this->getObjectManagerElementName('cache.memcached_host').'%';
                \$memcachedPort = !empty(\$cacheDriver['port']) ? \$cacheDriver['port'] : '%'.\$this->getObjectManagerElementName('cache.memcached_port').'%';
                \$cacheDef = new Definition(\$memcachedClass);
                \$memcachedInstance = new Definition(\$memcachedInstanceClass);
                \$memcachedInstance->setPrivate(true);
                \$memcachedInstance->addMethodCall('addServer', [
                    \$memcachedHost, \$memcachedPort,
                ]);
                \$container->setDefinition(\$this->getObjectManagerElementName(sprintf('%s_memcached_instance', \$objectManagerName)), \$memcachedInstance);
                \$cacheDef->addMethodCall('setMemcached', [new Reference(\$this->getObjectManagerElementName(sprintf('%s_memcached_instance', \$objectManagerName)))]);
                break;
             case 'redis':
                \$redisClass = !empty(\$cacheDriver['class']) ? \$cacheDriver['class'] : '%'.\$this->getObjectManagerElementName('cache.redis.class').'%';
                \$redisInstanceClass = !empty(\$cacheDriver['instance_class']) ? \$cacheDriver['instance_class'] : '%'.\$this->getObjectManagerElementName('cache.redis_instance.class').'%';
                \$redisHost = !empty(\$cacheDriver['host']) ? \$cacheDriver['host'] : '%'.\$this->getObjectManagerElementName('cache.redis_host').'%';
                \$redisPort = !empty(\$cacheDriver['port']) ? \$cacheDriver['port'] : '%'.\$this->getObjectManagerElementName('cache.redis_port').'%';
                \$cacheDef = new Definition(\$redisClass);
                \$redisInstance = new Definition(\$redisInstanceClass);
                \$redisInstance->setPrivate(true);
                \$redisInstance->addMethodCall('connect', [
                    \$redisHost, \$redisPort,
                ]);
                \$container->setDefinition(\$this->getObjectManagerElementName(sprintf('%s_redis_instance', \$objectManagerName)), \$redisInstance);
                \$cacheDef->addMethodCall('setRedis', [new Reference(\$this->getObjectManagerElementName(sprintf('%s_redis_instance', \$objectManagerName)))]);
                break;
            case 'apc':
            case 'apcu':
            case 'array':
            case 'xcache':
            case 'wincache':
            case 'zenddata':
                \$cacheDef = new Definition('%'.\$this->getObjectManagerElementName(sprintf('cache.%s.class', \$cacheDriver['type'])).'%');
                break;
            default:
                throw new \\InvalidArgumentException(sprintf('\"%s\" is an unrecognized Doctrine cache driver.', \$cacheDriver['type']));
        }

        \$cacheDef->setPublic(false);

        if (!isset(\$cacheDriver['namespace'])) {
            // generate a unique namespace for the given application
            if (\$container->hasParameter('cache.prefix.seed')) {
                \$seed = '.'.\$container->getParameterBag()->resolveValue(\$container->getParameter('cache.prefix.seed'));
            } else {
                \$seed = '_'.\$container->getParameter('kernel.project_dir');
            }
            \$seed .= '.'.\$container->getParameter('kernel.container_class');
            \$namespace = 'sf_'.\$this->getMappingResourceExtension().'_'.\$objectManagerName.'_'.ContainerBuilder::hash(\$seed);

            \$cacheDriver['namespace'] = \$namespace;
        }

        \$cacheDef->addMethodCall('setNamespace', [\$cacheDriver['namespace']]);

        \$container->setDefinition(\$cacheDriverServiceId, \$cacheDef);

        return \$cacheDriverServiceId;
    }

    /**
     * Returns a modified version of \$managerConfigs.
     *
     * The manager called \$autoMappedManager will map all bundles that are not mapped by other managers.
     *
     * @return array The modified version of \$managerConfigs
     */
    protected function fixManagersAutoMappings(array \$managerConfigs, array \$bundles)
    {
        if (\$autoMappedManager = \$this->validateAutoMapping(\$managerConfigs)) {
            foreach (array_keys(\$bundles) as \$bundle) {
                foreach (\$managerConfigs as \$manager) {
                    if (isset(\$manager['mappings'][\$bundle])) {
                        continue 2;
                    }
                }
                \$managerConfigs[\$autoMappedManager]['mappings'][\$bundle] = [
                    'mapping' => true,
                    'is_bundle' => true,
                ];
            }
            \$managerConfigs[\$autoMappedManager]['auto_mapping'] = false;
        }

        return \$managerConfigs;
    }

    /**
     * Prefixes the relative dependency injection container path with the object manager prefix.
     *
     * @example \$name is 'entity_manager' then the result would be 'doctrine.orm.entity_manager'
     *
     * @param string \$name
     *
     * @return string
     */
    abstract protected function getObjectManagerElementName(\$name);

    /**
     * Noun that describes the mapped objects such as Entity or Document.
     *
     * Will be used for autodetection of persistent objects directory.
     *
     * @return string
     */
    abstract protected function getMappingObjectDefaultName();

    /**
     * Relative path from the bundle root to the directory where mapping files reside.
     *
     * @return string
     */
    abstract protected function getMappingResourceConfigDirectory();

    /**
     * Extension used by the mapping files.
     *
     * @return string
     */
    abstract protected function getMappingResourceExtension();

    /**
     * Search for a manager that is declared as 'auto_mapping' = true.
     *
     * @return string|null The name of the manager. If no one manager is found, returns null
     *
     * @throws \\LogicException
     */
    private function validateAutoMapping(array \$managerConfigs)
    {
        \$autoMappedManager = null;
        foreach (\$managerConfigs as \$name => \$manager) {
            if (!\$manager['auto_mapping']) {
                continue;
            }

            if (null !== \$autoMappedManager) {
                throw new \\LogicException(sprintf('You cannot enable \"auto_mapping\" on more than one manager at the same time (found in \"%s\" and %s\").', \$autoMappedManager, \$name));
            }

            \$autoMappedManager = \$name;
        }

        return \$autoMappedManager;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/DependencyInjection/AbstractDoctrineExtension.php";
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

namespace Symfony\\Bridge\\Doctrine\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;

/**
 * This abstract classes groups common code that Doctrine Object Manager extensions (ORM, MongoDB, CouchDB) need.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
abstract class AbstractDoctrineExtension extends Extension
{
    /**
     * Used inside metadata driver method to simplify aggregation of data.
     */
    protected \$aliasMap = [];

    /**
     * Used inside metadata driver method to simplify aggregation of data.
     */
    protected \$drivers = [];

    /**
     * @param array            \$objectManager A configured object manager
     * @param ContainerBuilder \$container     A ContainerBuilder instance
     *
     * @throws \\InvalidArgumentException
     */
    protected function loadMappingInformation(array \$objectManager, ContainerBuilder \$container)
    {
        if (\$objectManager['auto_mapping']) {
            // automatically register bundle mappings
            foreach (array_keys(\$container->getParameter('kernel.bundles')) as \$bundle) {
                if (!isset(\$objectManager['mappings'][\$bundle])) {
                    \$objectManager['mappings'][\$bundle] = [
                        'mapping' => true,
                        'is_bundle' => true,
                    ];
                }
            }
        }

        foreach (\$objectManager['mappings'] as \$mappingName => \$mappingConfig) {
            if (null !== \$mappingConfig && false === \$mappingConfig['mapping']) {
                continue;
            }

            \$mappingConfig = array_replace([
                'dir' => false,
                'type' => false,
                'prefix' => false,
            ], (array) \$mappingConfig);

            \$mappingConfig['dir'] = \$container->getParameterBag()->resolveValue(\$mappingConfig['dir']);
            // a bundle configuration is detected by realizing that the specified dir is not absolute and existing
            if (!isset(\$mappingConfig['is_bundle'])) {
                \$mappingConfig['is_bundle'] = !is_dir(\$mappingConfig['dir']);
            }

            if (\$mappingConfig['is_bundle']) {
                \$bundle = null;
                foreach (\$container->getParameter('kernel.bundles') as \$name => \$class) {
                    if (\$mappingName === \$name) {
                        \$bundle = new \\ReflectionClass(\$class);

                        break;
                    }
                }

                if (null === \$bundle) {
                    throw new \\InvalidArgumentException(sprintf('Bundle \"%s\" does not exist or it is not enabled.', \$mappingName));
                }

                \$mappingConfig = \$this->getMappingDriverBundleConfigDefaults(\$mappingConfig, \$bundle, \$container);
                if (!\$mappingConfig) {
                    continue;
                }
            }

            \$this->assertValidMappingConfiguration(\$mappingConfig, \$objectManager['name']);
            \$this->setMappingDriverConfig(\$mappingConfig, \$mappingName);
            \$this->setMappingDriverAlias(\$mappingConfig, \$mappingName);
        }
    }

    /**
     * Register the alias for this mapping driver.
     *
     * Aliases can be used in the Query languages of all the Doctrine object managers to simplify writing tasks.
     *
     * @param array  \$mappingConfig
     * @param string \$mappingName
     */
    protected function setMappingDriverAlias(\$mappingConfig, \$mappingName)
    {
        if (isset(\$mappingConfig['alias'])) {
            \$this->aliasMap[\$mappingConfig['alias']] = \$mappingConfig['prefix'];
        } else {
            \$this->aliasMap[\$mappingName] = \$mappingConfig['prefix'];
        }
    }

    /**
     * Register the mapping driver configuration for later use with the object managers metadata driver chain.
     *
     * @param string \$mappingName
     *
     * @throws \\InvalidArgumentException
     */
    protected function setMappingDriverConfig(array \$mappingConfig, \$mappingName)
    {
        \$mappingDirectory = \$mappingConfig['dir'];
        if (!is_dir(\$mappingDirectory)) {
            throw new \\InvalidArgumentException(sprintf('Invalid Doctrine mapping path given. Cannot load Doctrine mapping/bundle named \"%s\".', \$mappingName));
        }

        \$this->drivers[\$mappingConfig['type']][\$mappingConfig['prefix']] = realpath(\$mappingDirectory) ?: \$mappingDirectory;
    }

    /**
     * If this is a bundle controlled mapping all the missing information can be autodetected by this method.
     *
     * Returns false when autodetection failed, an array of the completed information otherwise.
     *
     * @return array|false
     */
    protected function getMappingDriverBundleConfigDefaults(array \$bundleConfig, \\ReflectionClass \$bundle, ContainerBuilder \$container)
    {
        \$bundleDir = \\dirname(\$bundle->getFileName());

        if (!\$bundleConfig['type']) {
            \$bundleConfig['type'] = \$this->detectMetadataDriver(\$bundleDir, \$container);
        }

        if (!\$bundleConfig['type']) {
            // skip this bundle, no mapping information was found.
            return false;
        }

        if (!\$bundleConfig['dir']) {
            if (\\in_array(\$bundleConfig['type'], ['annotation', 'staticphp'])) {
                \$bundleConfig['dir'] = \$bundleDir.'/'.\$this->getMappingObjectDefaultName();
            } else {
                \$bundleConfig['dir'] = \$bundleDir.'/'.\$this->getMappingResourceConfigDirectory();
            }
        } else {
            \$bundleConfig['dir'] = \$bundleDir.'/'.\$bundleConfig['dir'];
        }

        if (!\$bundleConfig['prefix']) {
            \$bundleConfig['prefix'] = \$bundle->getNamespaceName().'\\\\'.\$this->getMappingObjectDefaultName();
        }

        return \$bundleConfig;
    }

    /**
     * Register all the collected mapping information with the object manager by registering the appropriate mapping drivers.
     *
     * @param array            \$objectManager
     * @param ContainerBuilder \$container     A ContainerBuilder instance
     */
    protected function registerMappingDrivers(\$objectManager, ContainerBuilder \$container)
    {
        // configure metadata driver for each bundle based on the type of mapping files found
        if (\$container->hasDefinition(\$this->getObjectManagerElementName(\$objectManager['name'].'_metadata_driver'))) {
            \$chainDriverDef = \$container->getDefinition(\$this->getObjectManagerElementName(\$objectManager['name'].'_metadata_driver'));
        } else {
            \$chainDriverDef = new Definition('%'.\$this->getObjectManagerElementName('metadata.driver_chain.class%'));
            \$chainDriverDef->setPublic(false);
        }

        foreach (\$this->drivers as \$driverType => \$driverPaths) {
            \$mappingService = \$this->getObjectManagerElementName(\$objectManager['name'].'_'.\$driverType.'_metadata_driver');
            if (\$container->hasDefinition(\$mappingService)) {
                \$mappingDriverDef = \$container->getDefinition(\$mappingService);
                \$args = \$mappingDriverDef->getArguments();
                if ('annotation' == \$driverType) {
                    \$args[1] = array_merge(array_values(\$driverPaths), \$args[1]);
                } else {
                    \$args[0] = array_merge(array_values(\$driverPaths), \$args[0]);
                }
                \$mappingDriverDef->setArguments(\$args);
            } elseif ('annotation' == \$driverType) {
                \$mappingDriverDef = new Definition('%'.\$this->getObjectManagerElementName('metadata.'.\$driverType.'.class%'), [
                    new Reference(\$this->getObjectManagerElementName('metadata.annotation_reader')),
                    array_values(\$driverPaths),
                ]);
            } else {
                \$mappingDriverDef = new Definition('%'.\$this->getObjectManagerElementName('metadata.'.\$driverType.'.class%'), [
                    array_values(\$driverPaths),
                ]);
            }
            \$mappingDriverDef->setPublic(false);
            if (false !== strpos(\$mappingDriverDef->getClass(), 'yml') || false !== strpos(\$mappingDriverDef->getClass(), 'xml')) {
                \$mappingDriverDef->setArguments([array_flip(\$driverPaths)]);
                \$mappingDriverDef->addMethodCall('setGlobalBasename', ['mapping']);
            }

            \$container->setDefinition(\$mappingService, \$mappingDriverDef);

            foreach (\$driverPaths as \$prefix => \$driverPath) {
                \$chainDriverDef->addMethodCall('addDriver', [new Reference(\$mappingService), \$prefix]);
            }
        }

        \$container->setDefinition(\$this->getObjectManagerElementName(\$objectManager['name'].'_metadata_driver'), \$chainDriverDef);
    }

    /**
     * Assertion if the specified mapping information is valid.
     *
     * @param string \$objectManagerName
     *
     * @throws \\InvalidArgumentException
     */
    protected function assertValidMappingConfiguration(array \$mappingConfig, \$objectManagerName)
    {
        if (!\$mappingConfig['type'] || !\$mappingConfig['dir'] || !\$mappingConfig['prefix']) {
            throw new \\InvalidArgumentException(sprintf('Mapping definitions for Doctrine manager \"%s\" require at least the \"type\", \"dir\" and \"prefix\" options.', \$objectManagerName));
        }

        if (!is_dir(\$mappingConfig['dir'])) {
            throw new \\InvalidArgumentException(sprintf('Specified non-existing directory \"%s\" as Doctrine mapping source.', \$mappingConfig['dir']));
        }

        if (!\\in_array(\$mappingConfig['type'], ['xml', 'yml', 'annotation', 'php', 'staticphp'])) {
            throw new \\InvalidArgumentException(sprintf('Can only configure \"xml\", \"yml\", \"annotation\", \"php\" or '.
                '\"staticphp\" through the DoctrineBundle. Use your own bundle to configure other metadata drivers. '.
                'You can register them by adding a new driver to the '.
                '\"%s\" service definition.', \$this->getObjectManagerElementName(\$objectManagerName.'_metadata_driver')
            ));
        }
    }

    /**
     * Detects what metadata driver to use for the supplied directory.
     *
     * @param string           \$dir       A directory path
     * @param ContainerBuilder \$container A ContainerBuilder instance
     *
     * @return string|null A metadata driver short name, if one can be detected
     */
    protected function detectMetadataDriver(\$dir, ContainerBuilder \$container)
    {
        \$configPath = \$this->getMappingResourceConfigDirectory();
        \$extension = \$this->getMappingResourceExtension();

        if (glob(\$dir.'/'.\$configPath.'/*.'.\$extension.'.xml', GLOB_NOSORT)) {
            \$driver = 'xml';
        } elseif (glob(\$dir.'/'.\$configPath.'/*.'.\$extension.'.yml', GLOB_NOSORT)) {
            \$driver = 'yml';
        } elseif (glob(\$dir.'/'.\$configPath.'/*.'.\$extension.'.php', GLOB_NOSORT)) {
            \$driver = 'php';
        } else {
            // add the closest existing directory as a resource
            \$resource = \$dir.'/'.\$configPath;
            while (!is_dir(\$resource)) {
                \$resource = \\dirname(\$resource);
            }
            \$container->fileExists(\$resource, false);

            return \$container->fileExists(\$dir.'/'.\$this->getMappingObjectDefaultName(), false) ? 'annotation' : null;
        }
        \$container->fileExists(\$dir.'/'.\$configPath, false);

        return \$driver;
    }

    /**
     * Loads a configured object manager metadata, query or result cache driver.
     *
     * @param array            \$objectManager A configured object manager
     * @param ContainerBuilder \$container     A ContainerBuilder instance
     * @param string           \$cacheName
     *
     * @throws \\InvalidArgumentException in case of unknown driver type
     */
    protected function loadObjectManagerCacheDriver(array \$objectManager, ContainerBuilder \$container, \$cacheName)
    {
        \$this->loadCacheDriver(\$cacheName, \$objectManager['name'], \$objectManager[\$cacheName.'_driver'], \$container);
    }

    /**
     * Loads a cache driver.
     *
     * @param string           \$cacheName         The cache driver name
     * @param string           \$objectManagerName The object manager name
     * @param array            \$cacheDriver       The cache driver mapping
     * @param ContainerBuilder \$container         The ContainerBuilder instance
     *
     * @return string
     *
     * @throws \\InvalidArgumentException
     */
    protected function loadCacheDriver(\$cacheName, \$objectManagerName, array \$cacheDriver, ContainerBuilder \$container)
    {
        \$cacheDriverServiceId = \$this->getObjectManagerElementName(\$objectManagerName.'_'.\$cacheName);

        switch (\$cacheDriver['type']) {
            case 'service':
                \$container->setAlias(\$cacheDriverServiceId, new Alias(\$cacheDriver['id'], false));

                return \$cacheDriverServiceId;
            case 'memcached':
                \$memcachedClass = !empty(\$cacheDriver['class']) ? \$cacheDriver['class'] : '%'.\$this->getObjectManagerElementName('cache.memcached.class').'%';
                \$memcachedInstanceClass = !empty(\$cacheDriver['instance_class']) ? \$cacheDriver['instance_class'] : '%'.\$this->getObjectManagerElementName('cache.memcached_instance.class').'%';
                \$memcachedHost = !empty(\$cacheDriver['host']) ? \$cacheDriver['host'] : '%'.\$this->getObjectManagerElementName('cache.memcached_host').'%';
                \$memcachedPort = !empty(\$cacheDriver['port']) ? \$cacheDriver['port'] : '%'.\$this->getObjectManagerElementName('cache.memcached_port').'%';
                \$cacheDef = new Definition(\$memcachedClass);
                \$memcachedInstance = new Definition(\$memcachedInstanceClass);
                \$memcachedInstance->setPrivate(true);
                \$memcachedInstance->addMethodCall('addServer', [
                    \$memcachedHost, \$memcachedPort,
                ]);
                \$container->setDefinition(\$this->getObjectManagerElementName(sprintf('%s_memcached_instance', \$objectManagerName)), \$memcachedInstance);
                \$cacheDef->addMethodCall('setMemcached', [new Reference(\$this->getObjectManagerElementName(sprintf('%s_memcached_instance', \$objectManagerName)))]);
                break;
             case 'redis':
                \$redisClass = !empty(\$cacheDriver['class']) ? \$cacheDriver['class'] : '%'.\$this->getObjectManagerElementName('cache.redis.class').'%';
                \$redisInstanceClass = !empty(\$cacheDriver['instance_class']) ? \$cacheDriver['instance_class'] : '%'.\$this->getObjectManagerElementName('cache.redis_instance.class').'%';
                \$redisHost = !empty(\$cacheDriver['host']) ? \$cacheDriver['host'] : '%'.\$this->getObjectManagerElementName('cache.redis_host').'%';
                \$redisPort = !empty(\$cacheDriver['port']) ? \$cacheDriver['port'] : '%'.\$this->getObjectManagerElementName('cache.redis_port').'%';
                \$cacheDef = new Definition(\$redisClass);
                \$redisInstance = new Definition(\$redisInstanceClass);
                \$redisInstance->setPrivate(true);
                \$redisInstance->addMethodCall('connect', [
                    \$redisHost, \$redisPort,
                ]);
                \$container->setDefinition(\$this->getObjectManagerElementName(sprintf('%s_redis_instance', \$objectManagerName)), \$redisInstance);
                \$cacheDef->addMethodCall('setRedis', [new Reference(\$this->getObjectManagerElementName(sprintf('%s_redis_instance', \$objectManagerName)))]);
                break;
            case 'apc':
            case 'apcu':
            case 'array':
            case 'xcache':
            case 'wincache':
            case 'zenddata':
                \$cacheDef = new Definition('%'.\$this->getObjectManagerElementName(sprintf('cache.%s.class', \$cacheDriver['type'])).'%');
                break;
            default:
                throw new \\InvalidArgumentException(sprintf('\"%s\" is an unrecognized Doctrine cache driver.', \$cacheDriver['type']));
        }

        \$cacheDef->setPublic(false);

        if (!isset(\$cacheDriver['namespace'])) {
            // generate a unique namespace for the given application
            if (\$container->hasParameter('cache.prefix.seed')) {
                \$seed = '.'.\$container->getParameterBag()->resolveValue(\$container->getParameter('cache.prefix.seed'));
            } else {
                \$seed = '_'.\$container->getParameter('kernel.project_dir');
            }
            \$seed .= '.'.\$container->getParameter('kernel.container_class');
            \$namespace = 'sf_'.\$this->getMappingResourceExtension().'_'.\$objectManagerName.'_'.ContainerBuilder::hash(\$seed);

            \$cacheDriver['namespace'] = \$namespace;
        }

        \$cacheDef->addMethodCall('setNamespace', [\$cacheDriver['namespace']]);

        \$container->setDefinition(\$cacheDriverServiceId, \$cacheDef);

        return \$cacheDriverServiceId;
    }

    /**
     * Returns a modified version of \$managerConfigs.
     *
     * The manager called \$autoMappedManager will map all bundles that are not mapped by other managers.
     *
     * @return array The modified version of \$managerConfigs
     */
    protected function fixManagersAutoMappings(array \$managerConfigs, array \$bundles)
    {
        if (\$autoMappedManager = \$this->validateAutoMapping(\$managerConfigs)) {
            foreach (array_keys(\$bundles) as \$bundle) {
                foreach (\$managerConfigs as \$manager) {
                    if (isset(\$manager['mappings'][\$bundle])) {
                        continue 2;
                    }
                }
                \$managerConfigs[\$autoMappedManager]['mappings'][\$bundle] = [
                    'mapping' => true,
                    'is_bundle' => true,
                ];
            }
            \$managerConfigs[\$autoMappedManager]['auto_mapping'] = false;
        }

        return \$managerConfigs;
    }

    /**
     * Prefixes the relative dependency injection container path with the object manager prefix.
     *
     * @example \$name is 'entity_manager' then the result would be 'doctrine.orm.entity_manager'
     *
     * @param string \$name
     *
     * @return string
     */
    abstract protected function getObjectManagerElementName(\$name);

    /**
     * Noun that describes the mapped objects such as Entity or Document.
     *
     * Will be used for autodetection of persistent objects directory.
     *
     * @return string
     */
    abstract protected function getMappingObjectDefaultName();

    /**
     * Relative path from the bundle root to the directory where mapping files reside.
     *
     * @return string
     */
    abstract protected function getMappingResourceConfigDirectory();

    /**
     * Extension used by the mapping files.
     *
     * @return string
     */
    abstract protected function getMappingResourceExtension();

    /**
     * Search for a manager that is declared as 'auto_mapping' = true.
     *
     * @return string|null The name of the manager. If no one manager is found, returns null
     *
     * @throws \\LogicException
     */
    private function validateAutoMapping(array \$managerConfigs)
    {
        \$autoMappedManager = null;
        foreach (\$managerConfigs as \$name => \$manager) {
            if (!\$manager['auto_mapping']) {
                continue;
            }

            if (null !== \$autoMappedManager) {
                throw new \\LogicException(sprintf('You cannot enable \"auto_mapping\" on more than one manager at the same time (found in \"%s\" and %s\").', \$autoMappedManager, \$name));
            }

            \$autoMappedManager = \$name;
        }

        return \$autoMappedManager;
    }
}
", "vendor/symfony/doctrine-bridge/DependencyInjection/AbstractDoctrineExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/DependencyInjection/AbstractDoctrineExtension.php");
    }
}
