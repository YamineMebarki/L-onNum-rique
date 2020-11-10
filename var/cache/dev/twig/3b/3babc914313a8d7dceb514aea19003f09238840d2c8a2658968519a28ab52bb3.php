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

/* vendor/doctrine/doctrine-cache-bundle/DependencyInjection/CacheProviderLoader.php */
class __TwigTemplate_45ffd84757b04a72f3af4283e54884e03c6109a705227a5ee130dcdc4ac431be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/CacheProviderLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/CacheProviderLoader.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Bundle\\DoctrineCacheBundle\\DependencyInjection;

use Doctrine\\Common\\Inflector\\Inflector;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Cache provider loader
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CacheProviderLoader
{
    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     */
    public function loadCacheProvider(\$name, array \$config, ContainerBuilder \$container)
    {
        \$serviceId  = 'doctrine_cache.providers.' . \$name;
        \$decorator  = \$this->getProviderDecorator(\$container, \$config);
        \$service    = \$container->setDefinition(\$serviceId, \$decorator);
        \$type       = (\$config['type'] === 'custom_provider')
            ? \$config['custom_provider']['type']
            : \$config['type'];

        if (\$config['namespace']) {
            \$service->addMethodCall('setNamespace', array(\$config['namespace']));
        }
        \$service->setPublic(true);

        foreach (\$config['aliases'] as \$alias) {
            \$container->setAlias(\$alias, new Alias(\$serviceId, true));
        }

        if (\$this->definitionClassExists(\$type, \$container)) {
            \$this->getCacheDefinition(\$type, \$container)->configure(\$name, \$config, \$service, \$container);
        }
    }

    /**
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     * @param array                                                     \$config
     *
     * @return \\Symfony\\Component\\DependencyInjection\\DefinitionDecorator
     */
    protected function getProviderDecorator(ContainerBuilder \$container, array \$config)
    {
        \$type = \$config['type'];
        \$id   = 'doctrine_cache.abstract.' . \$type;

        static \$childDefinition;

        if (null === \$childDefinition) {
            \$childDefinition = class_exists('Symfony\\Component\\DependencyInjection\\ChildDefinition') ? 'Symfony\\Component\\DependencyInjection\\ChildDefinition' : 'Symfony\\Component\\DependencyInjection\\DefinitionDecorator';
        }

        if (\$type === 'custom_provider') {
            \$type  = \$config['custom_provider']['type'];
            \$param = \$this->getCustomProviderParameter(\$type);

            if (\$container->hasParameter(\$param)) {
                return new \$childDefinition(\$container->getParameter(\$param));
            }
        }

        if (\$container->hasDefinition(\$id)) {
            return new \$childDefinition(\$id);
        }

        throw new \\InvalidArgumentException(sprintf('\"%s\" is an unrecognized Doctrine cache driver.', \$type));
    }

    /**
     * @param string                                                    \$type
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return \\Doctrine\\Bundle\\DoctrineCacheBundle\\DependencyInjection\\Definition\\CacheDefinition
     */
    private function getCacheDefinition(\$type, ContainerBuilder \$container)
    {
        \$class  = \$this->getDefinitionClass(\$type, \$container);
        \$object = new \$class(\$type);

        return \$object;
    }

    /**
     * @param string                                                    \$type
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return boolean
     */
    private function definitionClassExists(\$type, ContainerBuilder \$container)
    {
        if (\$container->hasParameter(\$this->getCustomDefinitionClassParameter(\$type))) {
            return true;
        }

        return class_exists(\$this->getDefinitionClass(\$type, \$container));
    }

    /**
     * @param string                                                    \$type
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return string
     */
    protected function getDefinitionClass(\$type, ContainerBuilder \$container)
    {
        if (\$container->hasParameter(\$this->getCustomDefinitionClassParameter(\$type))) {
            return \$container->getParameter(\$this->getCustomDefinitionClassParameter(\$type));
        }

        \$name  = Inflector::classify(\$type) . 'Definition';
        \$class = sprintf('%s\\Definition\\%s', __NAMESPACE__, \$name);

        return \$class;
    }

    /**
     * @param string \$type
     *
     * @return string
     */
    public function getCustomProviderParameter(\$type)
    {
        return 'doctrine_cache.custom_provider.' . \$type;
    }

    /**
     * @param string \$type
     *
     * @return string
     */
    public function getCustomDefinitionClassParameter(\$type)
    {
        return 'doctrine_cache.custom_definition_class.' . \$type;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/CacheProviderLoader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Bundle\\DoctrineCacheBundle\\DependencyInjection;

use Doctrine\\Common\\Inflector\\Inflector;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Cache provider loader
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CacheProviderLoader
{
    /**
     * @param string                                                    \$name
     * @param array                                                     \$config
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     */
    public function loadCacheProvider(\$name, array \$config, ContainerBuilder \$container)
    {
        \$serviceId  = 'doctrine_cache.providers.' . \$name;
        \$decorator  = \$this->getProviderDecorator(\$container, \$config);
        \$service    = \$container->setDefinition(\$serviceId, \$decorator);
        \$type       = (\$config['type'] === 'custom_provider')
            ? \$config['custom_provider']['type']
            : \$config['type'];

        if (\$config['namespace']) {
            \$service->addMethodCall('setNamespace', array(\$config['namespace']));
        }
        \$service->setPublic(true);

        foreach (\$config['aliases'] as \$alias) {
            \$container->setAlias(\$alias, new Alias(\$serviceId, true));
        }

        if (\$this->definitionClassExists(\$type, \$container)) {
            \$this->getCacheDefinition(\$type, \$container)->configure(\$name, \$config, \$service, \$container);
        }
    }

    /**
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     * @param array                                                     \$config
     *
     * @return \\Symfony\\Component\\DependencyInjection\\DefinitionDecorator
     */
    protected function getProviderDecorator(ContainerBuilder \$container, array \$config)
    {
        \$type = \$config['type'];
        \$id   = 'doctrine_cache.abstract.' . \$type;

        static \$childDefinition;

        if (null === \$childDefinition) {
            \$childDefinition = class_exists('Symfony\\Component\\DependencyInjection\\ChildDefinition') ? 'Symfony\\Component\\DependencyInjection\\ChildDefinition' : 'Symfony\\Component\\DependencyInjection\\DefinitionDecorator';
        }

        if (\$type === 'custom_provider') {
            \$type  = \$config['custom_provider']['type'];
            \$param = \$this->getCustomProviderParameter(\$type);

            if (\$container->hasParameter(\$param)) {
                return new \$childDefinition(\$container->getParameter(\$param));
            }
        }

        if (\$container->hasDefinition(\$id)) {
            return new \$childDefinition(\$id);
        }

        throw new \\InvalidArgumentException(sprintf('\"%s\" is an unrecognized Doctrine cache driver.', \$type));
    }

    /**
     * @param string                                                    \$type
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return \\Doctrine\\Bundle\\DoctrineCacheBundle\\DependencyInjection\\Definition\\CacheDefinition
     */
    private function getCacheDefinition(\$type, ContainerBuilder \$container)
    {
        \$class  = \$this->getDefinitionClass(\$type, \$container);
        \$object = new \$class(\$type);

        return \$object;
    }

    /**
     * @param string                                                    \$type
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return boolean
     */
    private function definitionClassExists(\$type, ContainerBuilder \$container)
    {
        if (\$container->hasParameter(\$this->getCustomDefinitionClassParameter(\$type))) {
            return true;
        }

        return class_exists(\$this->getDefinitionClass(\$type, \$container));
    }

    /**
     * @param string                                                    \$type
     * @param \\Symfony\\Component\\DependencyInjection\\ContainerBuilder   \$container
     *
     * @return string
     */
    protected function getDefinitionClass(\$type, ContainerBuilder \$container)
    {
        if (\$container->hasParameter(\$this->getCustomDefinitionClassParameter(\$type))) {
            return \$container->getParameter(\$this->getCustomDefinitionClassParameter(\$type));
        }

        \$name  = Inflector::classify(\$type) . 'Definition';
        \$class = sprintf('%s\\Definition\\%s', __NAMESPACE__, \$name);

        return \$class;
    }

    /**
     * @param string \$type
     *
     * @return string
     */
    public function getCustomProviderParameter(\$type)
    {
        return 'doctrine_cache.custom_provider.' . \$type;
    }

    /**
     * @param string \$type
     *
     * @return string
     */
    public function getCustomDefinitionClassParameter(\$type)
    {
        return 'doctrine_cache.custom_definition_class.' . \$type;
    }
}
", "vendor/doctrine/doctrine-cache-bundle/DependencyInjection/CacheProviderLoader.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/DependencyInjection/CacheProviderLoader.php");
    }
}
