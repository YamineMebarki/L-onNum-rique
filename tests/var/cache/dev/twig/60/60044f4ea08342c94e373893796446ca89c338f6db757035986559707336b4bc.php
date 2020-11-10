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

/* vendor/symfony/event-dispatcher/DependencyInjection/RegisterListenersPass.php */
class __TwigTemplate_2c4ad9441764f7c3b45497b4a739dcc28f76a75d13bf4c90f30539c63ec69dd5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/DependencyInjection/RegisterListenersPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/DependencyInjection/RegisterListenersPass.php"));

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

namespace Symfony\\Component\\EventDispatcher\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * Compiler pass to register tagged services for an event dispatcher.
 */
class RegisterListenersPass implements CompilerPassInterface
{
    protected \$dispatcherService;
    protected \$listenerTag;
    protected \$subscriberTag;
    protected \$eventAliasesParameter;

    private \$hotPathEvents = [];
    private \$hotPathTagName;

    public function __construct(string \$dispatcherService = 'event_dispatcher', string \$listenerTag = 'kernel.event_listener', string \$subscriberTag = 'kernel.event_subscriber', string \$eventAliasesParameter = 'event_dispatcher.event_aliases')
    {
        \$this->dispatcherService = \$dispatcherService;
        \$this->listenerTag = \$listenerTag;
        \$this->subscriberTag = \$subscriberTag;
        \$this->eventAliasesParameter = \$eventAliasesParameter;
    }

    public function setHotPathEvents(array \$hotPathEvents, \$tagName = 'container.hot_path')
    {
        \$this->hotPathEvents = array_flip(\$hotPathEvents);
        \$this->hotPathTagName = \$tagName;

        return \$this;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->dispatcherService) && !\$container->hasAlias(\$this->dispatcherService)) {
            return;
        }

        if (\$container->hasParameter(\$this->eventAliasesParameter)) {
            \$aliases = \$container->getParameter(\$this->eventAliasesParameter);
            \$container->getParameterBag()->remove(\$this->eventAliasesParameter);
        } else {
            \$aliases = [];
        }
        \$definition = \$container->findDefinition(\$this->dispatcherService);

        foreach (\$container->findTaggedServiceIds(\$this->listenerTag, true) as \$id => \$events) {
            foreach (\$events as \$event) {
                \$priority = isset(\$event['priority']) ? \$event['priority'] : 0;

                if (!isset(\$event['event'])) {
                    throw new InvalidArgumentException(sprintf('Service \"%s\" must define the \"event\" attribute on \"%s\" tags.', \$id, \$this->listenerTag));
                }
                \$event['event'] = \$aliases[\$event['event']] ?? \$event['event'];

                if (!isset(\$event['method'])) {
                    \$event['method'] = 'on'.preg_replace_callback([
                        '/(?<=\\b)[a-z]/i',
                        '/[^a-z0-9]/i',
                    ], function (\$matches) { return strtoupper(\$matches[0]); }, \$event['event']);
                    \$event['method'] = preg_replace('/[^a-z0-9]/i', '', \$event['method']);

                    if (null !== (\$class = \$container->getDefinition(\$id)->getClass()) && (\$r = \$container->getReflectionClass(\$class, false)) && !\$r->hasMethod(\$event['method']) && \$r->hasMethod('__invoke')) {
                        \$event['method'] = '__invoke';
                    }
                }

                \$definition->addMethodCall('addListener', [\$event['event'], [new ServiceClosureArgument(new Reference(\$id)), \$event['method']], \$priority]);

                if (isset(\$this->hotPathEvents[\$event['event']])) {
                    \$container->getDefinition(\$id)->addTag(\$this->hotPathTagName);
                }
            }
        }

        \$extractingDispatcher = new ExtractingEventDispatcher();

        foreach (\$container->findTaggedServiceIds(\$this->subscriberTag, true) as \$id => \$attributes) {
            \$def = \$container->getDefinition(\$id);

            // We must assume that the class value has been correctly filled, even if the service is created by a factory
            \$class = \$def->getClass();

            if (!\$r = \$container->getReflectionClass(\$class)) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$id));
            }
            if (!\$r->isSubclassOf(EventSubscriberInterface::class)) {
                throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$id, EventSubscriberInterface::class));
            }
            \$class = \$r->name;

            ExtractingEventDispatcher::\$aliases = \$aliases;
            ExtractingEventDispatcher::\$subscriber = \$class;
            \$extractingDispatcher->addSubscriber(\$extractingDispatcher);
            foreach (\$extractingDispatcher->listeners as \$args) {
                \$args[1] = [new ServiceClosureArgument(new Reference(\$id)), \$args[1]];
                \$definition->addMethodCall('addListener', \$args);

                if (isset(\$this->hotPathEvents[\$args[0]])) {
                    \$container->getDefinition(\$id)->addTag(\$this->hotPathTagName);
                }
            }
            \$extractingDispatcher->listeners = [];
            ExtractingEventDispatcher::\$aliases = [];
        }
    }
}

/**
 * @internal
 */
class ExtractingEventDispatcher extends EventDispatcher implements EventSubscriberInterface
{
    public \$listeners = [];

    public static \$aliases = [];
    public static \$subscriber;

    public function addListener(\$eventName, \$listener, \$priority = 0)
    {
        \$this->listeners[] = [\$eventName, \$listener[1], \$priority];
    }

    public static function getSubscribedEvents()
    {
        \$events = [];

        foreach ([self::\$subscriber, 'getSubscribedEvents']() as \$eventName => \$params) {
            \$events[self::\$aliases[\$eventName] ?? \$eventName] = \$params;
        }

        return \$events;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/DependencyInjection/RegisterListenersPass.php";
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

namespace Symfony\\Component\\EventDispatcher\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * Compiler pass to register tagged services for an event dispatcher.
 */
class RegisterListenersPass implements CompilerPassInterface
{
    protected \$dispatcherService;
    protected \$listenerTag;
    protected \$subscriberTag;
    protected \$eventAliasesParameter;

    private \$hotPathEvents = [];
    private \$hotPathTagName;

    public function __construct(string \$dispatcherService = 'event_dispatcher', string \$listenerTag = 'kernel.event_listener', string \$subscriberTag = 'kernel.event_subscriber', string \$eventAliasesParameter = 'event_dispatcher.event_aliases')
    {
        \$this->dispatcherService = \$dispatcherService;
        \$this->listenerTag = \$listenerTag;
        \$this->subscriberTag = \$subscriberTag;
        \$this->eventAliasesParameter = \$eventAliasesParameter;
    }

    public function setHotPathEvents(array \$hotPathEvents, \$tagName = 'container.hot_path')
    {
        \$this->hotPathEvents = array_flip(\$hotPathEvents);
        \$this->hotPathTagName = \$tagName;

        return \$this;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->dispatcherService) && !\$container->hasAlias(\$this->dispatcherService)) {
            return;
        }

        if (\$container->hasParameter(\$this->eventAliasesParameter)) {
            \$aliases = \$container->getParameter(\$this->eventAliasesParameter);
            \$container->getParameterBag()->remove(\$this->eventAliasesParameter);
        } else {
            \$aliases = [];
        }
        \$definition = \$container->findDefinition(\$this->dispatcherService);

        foreach (\$container->findTaggedServiceIds(\$this->listenerTag, true) as \$id => \$events) {
            foreach (\$events as \$event) {
                \$priority = isset(\$event['priority']) ? \$event['priority'] : 0;

                if (!isset(\$event['event'])) {
                    throw new InvalidArgumentException(sprintf('Service \"%s\" must define the \"event\" attribute on \"%s\" tags.', \$id, \$this->listenerTag));
                }
                \$event['event'] = \$aliases[\$event['event']] ?? \$event['event'];

                if (!isset(\$event['method'])) {
                    \$event['method'] = 'on'.preg_replace_callback([
                        '/(?<=\\b)[a-z]/i',
                        '/[^a-z0-9]/i',
                    ], function (\$matches) { return strtoupper(\$matches[0]); }, \$event['event']);
                    \$event['method'] = preg_replace('/[^a-z0-9]/i', '', \$event['method']);

                    if (null !== (\$class = \$container->getDefinition(\$id)->getClass()) && (\$r = \$container->getReflectionClass(\$class, false)) && !\$r->hasMethod(\$event['method']) && \$r->hasMethod('__invoke')) {
                        \$event['method'] = '__invoke';
                    }
                }

                \$definition->addMethodCall('addListener', [\$event['event'], [new ServiceClosureArgument(new Reference(\$id)), \$event['method']], \$priority]);

                if (isset(\$this->hotPathEvents[\$event['event']])) {
                    \$container->getDefinition(\$id)->addTag(\$this->hotPathTagName);
                }
            }
        }

        \$extractingDispatcher = new ExtractingEventDispatcher();

        foreach (\$container->findTaggedServiceIds(\$this->subscriberTag, true) as \$id => \$attributes) {
            \$def = \$container->getDefinition(\$id);

            // We must assume that the class value has been correctly filled, even if the service is created by a factory
            \$class = \$def->getClass();

            if (!\$r = \$container->getReflectionClass(\$class)) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$id));
            }
            if (!\$r->isSubclassOf(EventSubscriberInterface::class)) {
                throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$id, EventSubscriberInterface::class));
            }
            \$class = \$r->name;

            ExtractingEventDispatcher::\$aliases = \$aliases;
            ExtractingEventDispatcher::\$subscriber = \$class;
            \$extractingDispatcher->addSubscriber(\$extractingDispatcher);
            foreach (\$extractingDispatcher->listeners as \$args) {
                \$args[1] = [new ServiceClosureArgument(new Reference(\$id)), \$args[1]];
                \$definition->addMethodCall('addListener', \$args);

                if (isset(\$this->hotPathEvents[\$args[0]])) {
                    \$container->getDefinition(\$id)->addTag(\$this->hotPathTagName);
                }
            }
            \$extractingDispatcher->listeners = [];
            ExtractingEventDispatcher::\$aliases = [];
        }
    }
}

/**
 * @internal
 */
class ExtractingEventDispatcher extends EventDispatcher implements EventSubscriberInterface
{
    public \$listeners = [];

    public static \$aliases = [];
    public static \$subscriber;

    public function addListener(\$eventName, \$listener, \$priority = 0)
    {
        \$this->listeners[] = [\$eventName, \$listener[1], \$priority];
    }

    public static function getSubscribedEvents()
    {
        \$events = [];

        foreach ([self::\$subscriber, 'getSubscribedEvents']() as \$eventName => \$params) {
            \$events[self::\$aliases[\$eventName] ?? \$eventName] = \$params;
        }

        return \$events;
    }
}
", "vendor/symfony/event-dispatcher/DependencyInjection/RegisterListenersPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/DependencyInjection/RegisterListenersPass.php");
    }
}
