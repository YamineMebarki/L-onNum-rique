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

/* vendor/symfony/framework-bundle/Console/Descriptor/JsonDescriptor.php */
class __TwigTemplate_3b5e64369c8b2984bdcc3a402aa67f46d5e787388e12ff294f0129cfd7e5eddf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Console/Descriptor/JsonDescriptor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Console/Descriptor/JsonDescriptor.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor;

use Symfony\\Component\\Console\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Argument\\ArgumentInterface;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class JsonDescriptor extends Descriptor
{
    /**
     * {@inheritdoc}
     */
    protected function describeRouteCollection(RouteCollection \$routes, array \$options = [])
    {
        \$data = [];
        foreach (\$routes->all() as \$name => \$route) {
            \$data[\$name] = \$this->getRouteData(\$route);
        }

        \$this->writeData(\$data, \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeRoute(Route \$route, array \$options = [])
    {
        \$this->writeData(\$this->getRouteData(\$route), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerParameters(ParameterBag \$parameters, array \$options = [])
    {
        \$this->writeData(\$this->sortParameters(\$parameters), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerTags(ContainerBuilder \$builder, array \$options = [])
    {
        \$showHidden = isset(\$options['show_hidden']) && \$options['show_hidden'];
        \$data = [];

        foreach (\$this->findDefinitionsByTag(\$builder, \$showHidden) as \$tag => \$definitions) {
            \$data[\$tag] = [];
            foreach (\$definitions as \$definition) {
                \$data[\$tag][] = \$this->getContainerDefinitionData(\$definition, true);
            }
        }

        \$this->writeData(\$data, \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerService(\$service, array \$options = [], ContainerBuilder \$builder = null)
    {
        if (!isset(\$options['id'])) {
            throw new \\InvalidArgumentException('An \"id\" option must be provided.');
        }

        if (\$service instanceof Alias) {
            \$this->describeContainerAlias(\$service, \$options, \$builder);
        } elseif (\$service instanceof Definition) {
            \$this->writeData(\$this->getContainerDefinitionData(\$service, isset(\$options['omit_tags']) && \$options['omit_tags'], isset(\$options['show_arguments']) && \$options['show_arguments']), \$options);
        } else {
            \$this->writeData(\\get_class(\$service), \$options);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerServices(ContainerBuilder \$builder, array \$options = [])
    {
        \$serviceIds = isset(\$options['tag']) && \$options['tag'] ? array_keys(\$builder->findTaggedServiceIds(\$options['tag'])) : \$builder->getServiceIds();
        \$showHidden = isset(\$options['show_hidden']) && \$options['show_hidden'];
        \$omitTags = isset(\$options['omit_tags']) && \$options['omit_tags'];
        \$showArguments = isset(\$options['show_arguments']) && \$options['show_arguments'];
        \$data = ['definitions' => [], 'aliases' => [], 'services' => []];

        if (isset(\$options['filter'])) {
            \$serviceIds = array_filter(\$serviceIds, \$options['filter']);
        }

        foreach (\$this->sortServiceIds(\$serviceIds) as \$serviceId) {
            \$service = \$this->resolveServiceDefinition(\$builder, \$serviceId);

            if (\$showHidden xor '.' === (\$serviceId[0] ?? null)) {
                continue;
            }

            if (\$service instanceof Alias) {
                \$data['aliases'][\$serviceId] = \$this->getContainerAliasData(\$service);
            } elseif (\$service instanceof Definition) {
                \$data['definitions'][\$serviceId] = \$this->getContainerDefinitionData(\$service, \$omitTags, \$showArguments);
            } else {
                \$data['services'][\$serviceId] = \\get_class(\$service);
            }
        }

        \$this->writeData(\$data, \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerDefinition(Definition \$definition, array \$options = [])
    {
        \$this->writeData(\$this->getContainerDefinitionData(\$definition, isset(\$options['omit_tags']) && \$options['omit_tags'], isset(\$options['show_arguments']) && \$options['show_arguments']), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerAlias(Alias \$alias, array \$options = [], ContainerBuilder \$builder = null)
    {
        if (!\$builder) {
            \$this->writeData(\$this->getContainerAliasData(\$alias), \$options);

            return;
        }

        \$this->writeData(
            [\$this->getContainerAliasData(\$alias), \$this->getContainerDefinitionData(\$builder->getDefinition((string) \$alias), isset(\$options['omit_tags']) && \$options['omit_tags'], isset(\$options['show_arguments']) && \$options['show_arguments'])],
            array_merge(\$options, ['id' => (string) \$alias])
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function describeEventDispatcherListeners(EventDispatcherInterface \$eventDispatcher, array \$options = [])
    {
        \$this->writeData(\$this->getEventDispatcherListenersData(\$eventDispatcher, \\array_key_exists('event', \$options) ? \$options['event'] : null), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeCallable(\$callable, array \$options = [])
    {
        \$this->writeData(\$this->getCallableData(\$callable, \$options), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerParameter(\$parameter, array \$options = [])
    {
        \$key = isset(\$options['parameter']) ? \$options['parameter'] : '';

        \$this->writeData([\$key => \$parameter], \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerEnvVars(array \$envs, array \$options = [])
    {
        throw new LogicException('Using the JSON format to debug environment variables is not supported.');
    }

    /**
     * Writes data as json.
     */
    private function writeData(array \$data, array \$options)
    {
        \$flags = isset(\$options['json_encoding']) ? \$options['json_encoding'] : 0;

        \$this->write(json_encode(\$data, \$flags | JSON_PRETTY_PRINT).\"\\n\");
    }

    /**
     * @return array
     */
    protected function getRouteData(Route \$route)
    {
        \$data = [
            'path' => \$route->getPath(),
            'pathRegex' => \$route->compile()->getRegex(),
            'host' => '' !== \$route->getHost() ? \$route->getHost() : 'ANY',
            'hostRegex' => '' !== \$route->getHost() ? \$route->compile()->getHostRegex() : '',
            'scheme' => \$route->getSchemes() ? implode('|', \$route->getSchemes()) : 'ANY',
            'method' => \$route->getMethods() ? implode('|', \$route->getMethods()) : 'ANY',
            'class' => \\get_class(\$route),
            'defaults' => \$route->getDefaults(),
            'requirements' => \$route->getRequirements() ?: 'NO CUSTOM',
            'options' => \$route->getOptions(),
        ];

        if ('' !== \$route->getCondition()) {
            \$data['condition'] = \$route->getCondition();
        }

        return \$data;
    }

    private function getContainerDefinitionData(Definition \$definition, bool \$omitTags = false, bool \$showArguments = false): array
    {
        \$data = [
            'class' => (string) \$definition->getClass(),
            'public' => \$definition->isPublic() && !\$definition->isPrivate(),
            'synthetic' => \$definition->isSynthetic(),
            'lazy' => \$definition->isLazy(),
            'shared' => \$definition->isShared(),
            'abstract' => \$definition->isAbstract(),
            'autowire' => \$definition->isAutowired(),
            'autoconfigure' => \$definition->isAutoconfigured(),
        ];

        if ('' !== \$classDescription = \$this->getClassDescription((string) \$definition->getClass())) {
            \$data['description'] = \$classDescription;
        }

        if (\$showArguments) {
            \$data['arguments'] = \$this->describeValue(\$definition->getArguments(), \$omitTags, \$showArguments);
        }

        \$data['file'] = \$definition->getFile();

        if (\$factory = \$definition->getFactory()) {
            if (\\is_array(\$factory)) {
                if (\$factory[0] instanceof Reference) {
                    \$data['factory_service'] = (string) \$factory[0];
                } elseif (\$factory[0] instanceof Definition) {
                    throw new \\InvalidArgumentException('Factory is not describable.');
                } else {
                    \$data['factory_class'] = \$factory[0];
                }
                \$data['factory_method'] = \$factory[1];
            } else {
                \$data['factory_function'] = \$factory;
            }
        }

        \$calls = \$definition->getMethodCalls();
        if (\\count(\$calls) > 0) {
            \$data['calls'] = [];
            foreach (\$calls as \$callData) {
                \$data['calls'][] = \$callData[0];
            }
        }

        if (!\$omitTags) {
            \$data['tags'] = [];
            foreach (\$definition->getTags() as \$tagName => \$tagData) {
                foreach (\$tagData as \$parameters) {
                    \$data['tags'][] = ['name' => \$tagName, 'parameters' => \$parameters];
                }
            }
        }

        return \$data;
    }

    private function getContainerAliasData(Alias \$alias): array
    {
        return [
            'service' => (string) \$alias,
            'public' => \$alias->isPublic() && !\$alias->isPrivate(),
        ];
    }

    private function getEventDispatcherListenersData(EventDispatcherInterface \$eventDispatcher, string \$event = null): array
    {
        \$data = [];

        \$registeredListeners = \$eventDispatcher->getListeners(\$event);
        if (null !== \$event) {
            foreach (\$registeredListeners as \$listener) {
                \$l = \$this->getCallableData(\$listener);
                \$l['priority'] = \$eventDispatcher->getListenerPriority(\$event, \$listener);
                \$data[] = \$l;
            }
        } else {
            ksort(\$registeredListeners);

            foreach (\$registeredListeners as \$eventListened => \$eventListeners) {
                foreach (\$eventListeners as \$eventListener) {
                    \$l = \$this->getCallableData(\$eventListener);
                    \$l['priority'] = \$eventDispatcher->getListenerPriority(\$eventListened, \$eventListener);
                    \$data[\$eventListened][] = \$l;
                }
            }
        }

        return \$data;
    }

    private function getCallableData(\$callable, array \$options = []): array
    {
        \$data = [];

        if (\\is_array(\$callable)) {
            \$data['type'] = 'function';

            if (\\is_object(\$callable[0])) {
                \$data['name'] = \$callable[1];
                \$data['class'] = \\get_class(\$callable[0]);
            } else {
                if (0 !== strpos(\$callable[1], 'parent::')) {
                    \$data['name'] = \$callable[1];
                    \$data['class'] = \$callable[0];
                    \$data['static'] = true;
                } else {
                    \$data['name'] = substr(\$callable[1], 8);
                    \$data['class'] = \$callable[0];
                    \$data['static'] = true;
                    \$data['parent'] = true;
                }
            }

            return \$data;
        }

        if (\\is_string(\$callable)) {
            \$data['type'] = 'function';

            if (false === strpos(\$callable, '::')) {
                \$data['name'] = \$callable;
            } else {
                \$callableParts = explode('::', \$callable);

                \$data['name'] = \$callableParts[1];
                \$data['class'] = \$callableParts[0];
                \$data['static'] = true;
            }

            return \$data;
        }

        if (\$callable instanceof \\Closure) {
            \$data['type'] = 'closure';

            \$r = new \\ReflectionFunction(\$callable);
            if (false !== strpos(\$r->name, '{closure}')) {
                return \$data;
            }
            \$data['name'] = \$r->name;

            if (\$class = \$r->getClosureScopeClass()) {
                \$data['class'] = \$class->name;
                if (!\$r->getClosureThis()) {
                    \$data['static'] = true;
                }
            }

            return \$data;
        }

        if (method_exists(\$callable, '__invoke')) {
            \$data['type'] = 'object';
            \$data['name'] = \\get_class(\$callable);

            return \$data;
        }

        throw new \\InvalidArgumentException('Callable is not describable.');
    }

    private function describeValue(\$value, \$omitTags, \$showArguments)
    {
        if (\\is_array(\$value)) {
            \$data = [];
            foreach (\$value as \$k => \$v) {
                \$data[\$k] = \$this->describeValue(\$v, \$omitTags, \$showArguments);
            }

            return \$data;
        }

        if (\$value instanceof ServiceClosureArgument) {
            \$value = \$value->getValues()[0];
        }

        if (\$value instanceof Reference) {
            return [
                'type' => 'service',
                'id' => (string) \$value,
            ];
        }

        if (\$value instanceof ArgumentInterface) {
            return \$this->describeValue(\$value->getValues(), \$omitTags, \$showArguments);
        }

        if (\$value instanceof Definition) {
            return \$this->getContainerDefinitionData(\$value, \$omitTags, \$showArguments);
        }

        return \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Console/Descriptor/JsonDescriptor.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor;

use Symfony\\Component\\Console\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Argument\\ArgumentInterface;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class JsonDescriptor extends Descriptor
{
    /**
     * {@inheritdoc}
     */
    protected function describeRouteCollection(RouteCollection \$routes, array \$options = [])
    {
        \$data = [];
        foreach (\$routes->all() as \$name => \$route) {
            \$data[\$name] = \$this->getRouteData(\$route);
        }

        \$this->writeData(\$data, \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeRoute(Route \$route, array \$options = [])
    {
        \$this->writeData(\$this->getRouteData(\$route), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerParameters(ParameterBag \$parameters, array \$options = [])
    {
        \$this->writeData(\$this->sortParameters(\$parameters), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerTags(ContainerBuilder \$builder, array \$options = [])
    {
        \$showHidden = isset(\$options['show_hidden']) && \$options['show_hidden'];
        \$data = [];

        foreach (\$this->findDefinitionsByTag(\$builder, \$showHidden) as \$tag => \$definitions) {
            \$data[\$tag] = [];
            foreach (\$definitions as \$definition) {
                \$data[\$tag][] = \$this->getContainerDefinitionData(\$definition, true);
            }
        }

        \$this->writeData(\$data, \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerService(\$service, array \$options = [], ContainerBuilder \$builder = null)
    {
        if (!isset(\$options['id'])) {
            throw new \\InvalidArgumentException('An \"id\" option must be provided.');
        }

        if (\$service instanceof Alias) {
            \$this->describeContainerAlias(\$service, \$options, \$builder);
        } elseif (\$service instanceof Definition) {
            \$this->writeData(\$this->getContainerDefinitionData(\$service, isset(\$options['omit_tags']) && \$options['omit_tags'], isset(\$options['show_arguments']) && \$options['show_arguments']), \$options);
        } else {
            \$this->writeData(\\get_class(\$service), \$options);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerServices(ContainerBuilder \$builder, array \$options = [])
    {
        \$serviceIds = isset(\$options['tag']) && \$options['tag'] ? array_keys(\$builder->findTaggedServiceIds(\$options['tag'])) : \$builder->getServiceIds();
        \$showHidden = isset(\$options['show_hidden']) && \$options['show_hidden'];
        \$omitTags = isset(\$options['omit_tags']) && \$options['omit_tags'];
        \$showArguments = isset(\$options['show_arguments']) && \$options['show_arguments'];
        \$data = ['definitions' => [], 'aliases' => [], 'services' => []];

        if (isset(\$options['filter'])) {
            \$serviceIds = array_filter(\$serviceIds, \$options['filter']);
        }

        foreach (\$this->sortServiceIds(\$serviceIds) as \$serviceId) {
            \$service = \$this->resolveServiceDefinition(\$builder, \$serviceId);

            if (\$showHidden xor '.' === (\$serviceId[0] ?? null)) {
                continue;
            }

            if (\$service instanceof Alias) {
                \$data['aliases'][\$serviceId] = \$this->getContainerAliasData(\$service);
            } elseif (\$service instanceof Definition) {
                \$data['definitions'][\$serviceId] = \$this->getContainerDefinitionData(\$service, \$omitTags, \$showArguments);
            } else {
                \$data['services'][\$serviceId] = \\get_class(\$service);
            }
        }

        \$this->writeData(\$data, \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerDefinition(Definition \$definition, array \$options = [])
    {
        \$this->writeData(\$this->getContainerDefinitionData(\$definition, isset(\$options['omit_tags']) && \$options['omit_tags'], isset(\$options['show_arguments']) && \$options['show_arguments']), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerAlias(Alias \$alias, array \$options = [], ContainerBuilder \$builder = null)
    {
        if (!\$builder) {
            \$this->writeData(\$this->getContainerAliasData(\$alias), \$options);

            return;
        }

        \$this->writeData(
            [\$this->getContainerAliasData(\$alias), \$this->getContainerDefinitionData(\$builder->getDefinition((string) \$alias), isset(\$options['omit_tags']) && \$options['omit_tags'], isset(\$options['show_arguments']) && \$options['show_arguments'])],
            array_merge(\$options, ['id' => (string) \$alias])
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function describeEventDispatcherListeners(EventDispatcherInterface \$eventDispatcher, array \$options = [])
    {
        \$this->writeData(\$this->getEventDispatcherListenersData(\$eventDispatcher, \\array_key_exists('event', \$options) ? \$options['event'] : null), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeCallable(\$callable, array \$options = [])
    {
        \$this->writeData(\$this->getCallableData(\$callable, \$options), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerParameter(\$parameter, array \$options = [])
    {
        \$key = isset(\$options['parameter']) ? \$options['parameter'] : '';

        \$this->writeData([\$key => \$parameter], \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeContainerEnvVars(array \$envs, array \$options = [])
    {
        throw new LogicException('Using the JSON format to debug environment variables is not supported.');
    }

    /**
     * Writes data as json.
     */
    private function writeData(array \$data, array \$options)
    {
        \$flags = isset(\$options['json_encoding']) ? \$options['json_encoding'] : 0;

        \$this->write(json_encode(\$data, \$flags | JSON_PRETTY_PRINT).\"\\n\");
    }

    /**
     * @return array
     */
    protected function getRouteData(Route \$route)
    {
        \$data = [
            'path' => \$route->getPath(),
            'pathRegex' => \$route->compile()->getRegex(),
            'host' => '' !== \$route->getHost() ? \$route->getHost() : 'ANY',
            'hostRegex' => '' !== \$route->getHost() ? \$route->compile()->getHostRegex() : '',
            'scheme' => \$route->getSchemes() ? implode('|', \$route->getSchemes()) : 'ANY',
            'method' => \$route->getMethods() ? implode('|', \$route->getMethods()) : 'ANY',
            'class' => \\get_class(\$route),
            'defaults' => \$route->getDefaults(),
            'requirements' => \$route->getRequirements() ?: 'NO CUSTOM',
            'options' => \$route->getOptions(),
        ];

        if ('' !== \$route->getCondition()) {
            \$data['condition'] = \$route->getCondition();
        }

        return \$data;
    }

    private function getContainerDefinitionData(Definition \$definition, bool \$omitTags = false, bool \$showArguments = false): array
    {
        \$data = [
            'class' => (string) \$definition->getClass(),
            'public' => \$definition->isPublic() && !\$definition->isPrivate(),
            'synthetic' => \$definition->isSynthetic(),
            'lazy' => \$definition->isLazy(),
            'shared' => \$definition->isShared(),
            'abstract' => \$definition->isAbstract(),
            'autowire' => \$definition->isAutowired(),
            'autoconfigure' => \$definition->isAutoconfigured(),
        ];

        if ('' !== \$classDescription = \$this->getClassDescription((string) \$definition->getClass())) {
            \$data['description'] = \$classDescription;
        }

        if (\$showArguments) {
            \$data['arguments'] = \$this->describeValue(\$definition->getArguments(), \$omitTags, \$showArguments);
        }

        \$data['file'] = \$definition->getFile();

        if (\$factory = \$definition->getFactory()) {
            if (\\is_array(\$factory)) {
                if (\$factory[0] instanceof Reference) {
                    \$data['factory_service'] = (string) \$factory[0];
                } elseif (\$factory[0] instanceof Definition) {
                    throw new \\InvalidArgumentException('Factory is not describable.');
                } else {
                    \$data['factory_class'] = \$factory[0];
                }
                \$data['factory_method'] = \$factory[1];
            } else {
                \$data['factory_function'] = \$factory;
            }
        }

        \$calls = \$definition->getMethodCalls();
        if (\\count(\$calls) > 0) {
            \$data['calls'] = [];
            foreach (\$calls as \$callData) {
                \$data['calls'][] = \$callData[0];
            }
        }

        if (!\$omitTags) {
            \$data['tags'] = [];
            foreach (\$definition->getTags() as \$tagName => \$tagData) {
                foreach (\$tagData as \$parameters) {
                    \$data['tags'][] = ['name' => \$tagName, 'parameters' => \$parameters];
                }
            }
        }

        return \$data;
    }

    private function getContainerAliasData(Alias \$alias): array
    {
        return [
            'service' => (string) \$alias,
            'public' => \$alias->isPublic() && !\$alias->isPrivate(),
        ];
    }

    private function getEventDispatcherListenersData(EventDispatcherInterface \$eventDispatcher, string \$event = null): array
    {
        \$data = [];

        \$registeredListeners = \$eventDispatcher->getListeners(\$event);
        if (null !== \$event) {
            foreach (\$registeredListeners as \$listener) {
                \$l = \$this->getCallableData(\$listener);
                \$l['priority'] = \$eventDispatcher->getListenerPriority(\$event, \$listener);
                \$data[] = \$l;
            }
        } else {
            ksort(\$registeredListeners);

            foreach (\$registeredListeners as \$eventListened => \$eventListeners) {
                foreach (\$eventListeners as \$eventListener) {
                    \$l = \$this->getCallableData(\$eventListener);
                    \$l['priority'] = \$eventDispatcher->getListenerPriority(\$eventListened, \$eventListener);
                    \$data[\$eventListened][] = \$l;
                }
            }
        }

        return \$data;
    }

    private function getCallableData(\$callable, array \$options = []): array
    {
        \$data = [];

        if (\\is_array(\$callable)) {
            \$data['type'] = 'function';

            if (\\is_object(\$callable[0])) {
                \$data['name'] = \$callable[1];
                \$data['class'] = \\get_class(\$callable[0]);
            } else {
                if (0 !== strpos(\$callable[1], 'parent::')) {
                    \$data['name'] = \$callable[1];
                    \$data['class'] = \$callable[0];
                    \$data['static'] = true;
                } else {
                    \$data['name'] = substr(\$callable[1], 8);
                    \$data['class'] = \$callable[0];
                    \$data['static'] = true;
                    \$data['parent'] = true;
                }
            }

            return \$data;
        }

        if (\\is_string(\$callable)) {
            \$data['type'] = 'function';

            if (false === strpos(\$callable, '::')) {
                \$data['name'] = \$callable;
            } else {
                \$callableParts = explode('::', \$callable);

                \$data['name'] = \$callableParts[1];
                \$data['class'] = \$callableParts[0];
                \$data['static'] = true;
            }

            return \$data;
        }

        if (\$callable instanceof \\Closure) {
            \$data['type'] = 'closure';

            \$r = new \\ReflectionFunction(\$callable);
            if (false !== strpos(\$r->name, '{closure}')) {
                return \$data;
            }
            \$data['name'] = \$r->name;

            if (\$class = \$r->getClosureScopeClass()) {
                \$data['class'] = \$class->name;
                if (!\$r->getClosureThis()) {
                    \$data['static'] = true;
                }
            }

            return \$data;
        }

        if (method_exists(\$callable, '__invoke')) {
            \$data['type'] = 'object';
            \$data['name'] = \\get_class(\$callable);

            return \$data;
        }

        throw new \\InvalidArgumentException('Callable is not describable.');
    }

    private function describeValue(\$value, \$omitTags, \$showArguments)
    {
        if (\\is_array(\$value)) {
            \$data = [];
            foreach (\$value as \$k => \$v) {
                \$data[\$k] = \$this->describeValue(\$v, \$omitTags, \$showArguments);
            }

            return \$data;
        }

        if (\$value instanceof ServiceClosureArgument) {
            \$value = \$value->getValues()[0];
        }

        if (\$value instanceof Reference) {
            return [
                'type' => 'service',
                'id' => (string) \$value,
            ];
        }

        if (\$value instanceof ArgumentInterface) {
            return \$this->describeValue(\$value->getValues(), \$omitTags, \$showArguments);
        }

        if (\$value instanceof Definition) {
            return \$this->getContainerDefinitionData(\$value, \$omitTags, \$showArguments);
        }

        return \$value;
    }
}
", "vendor/symfony/framework-bundle/Console/Descriptor/JsonDescriptor.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Console/Descriptor/JsonDescriptor.php");
    }
}
