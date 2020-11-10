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

/* vendor/symfony/maker-bundle/src/EventRegistry.php */
class __TwigTemplate_81df384ff266f77f99fe5ad4e0317062d960454dff52e0332ddd7bd26e481fee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/EventRegistry.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/EventRegistry.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle;

use Symfony\\Component\\Console\\Event\\ConsoleCommandEvent;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\EventDispatcher\\Event as LegacyEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent;
use Symfony\\Component\\HttpKernel\\Event\\ControllerEvent;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerArgumentsEvent;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\PostResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\TerminateEvent;
use Symfony\\Component\\HttpKernel\\Event\\ViewEvent;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationEvent;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * @internal
 */
class EventRegistry
{
    // list of *known* events to always include (if they exist)
    private static \$newEventsMap = [
        'kernel.exception' => ExceptionEvent::class,
        'kernel.request' => RequestEvent::class,
        'kernel.response' => ResponseEvent::class,
        'kernel.view' => ViewEvent::class,
        'kernel.controller_arguments' => ControllerArgumentsEvent::class,
        'kernel.controller' => ControllerEvent::class,
        'kernel.terminate' => TerminateEvent::class,
    ];

    private static \$eventsMap = [
        'console.command' => ConsoleCommandEvent::class,
        'console.terminate' => ConsoleTerminateEvent::class,
        'console.error' => ConsoleErrorEvent::class,
        'kernel.request' => GetResponseEvent::class,
        'kernel.exception' => GetResponseForExceptionEvent::class,
        'kernel.view' => GetResponseForControllerResultEvent::class,
        'kernel.controller' => FilterControllerEvent::class,
        'kernel.controller_arguments' => FilterControllerArgumentsEvent::class,
        'kernel.response' => FilterResponseEvent::class,
        'kernel.terminate' => PostResponseEvent::class,
        'kernel.finish_request' => FinishRequestEvent::class,
        'security.authentication.success' => AuthenticationEvent::class,
        'security.authentication.failure' => AuthenticationFailureEvent::class,
        'security.interactive_login' => InteractiveLoginEvent::class,
        'security.switch_user' => SwitchUserEvent::class,
    ];

    private \$eventDispatcher;

    public function __construct(EventDispatcherInterface \$eventDispatcher)
    {
        \$this->eventDispatcher = \$eventDispatcher;

        // Loop through the new event classes
        foreach (self::\$newEventsMap as \$eventName => \$newEventClass) {
            //Check if the new event classes exist, if so replace the old one with the new.
            if (isset(self::\$eventsMap[\$eventName]) && class_exists(\$newEventClass)) {
                unset(self::\$eventsMap[\$eventName]);
                self::\$eventsMap[\$newEventClass] = \$newEventClass;
            }
        }
    }

    /**
     * Returns all known event names in the system.
     */
    public function getAllActiveEvents(): array
    {
        \$activeEvents = [];
        foreach (self::\$eventsMap as \$eventName => \$eventClass) {
            if (!class_exists(\$eventClass)) {
                continue;
            }

            \$activeEvents[] = \$eventName;
        }

        \$listeners = \$this->eventDispatcher->getListeners();

        // Check if these listeners are part of the new events.
        foreach (array_keys(\$listeners) as \$listenerKey) {
            if (isset(self::\$newEventsMap[\$listenerKey])) {
                unset(\$listeners[\$listenerKey]);
            }
        }

        \$activeEvents = array_unique(array_merge(\$activeEvents, array_keys(\$listeners)));

        asort(\$activeEvents);

        return \$activeEvents;
    }

    /**
     * Attempts to get the event class for a given event.
     */
    public function getEventClassName(string \$event)
    {
        if (isset(self::\$eventsMap[\$event])) {
            return self::\$eventsMap[\$event];
        }

        \$listeners = \$this->eventDispatcher->getListeners(\$event);
        if (empty(\$listeners)) {
            return null;
        }

        foreach (\$listeners as \$listener) {
            if (!\\is_array(\$listener) || 2 !== \\count(\$listener)) {
                continue;
            }

            \$reflectionMethod = new \\ReflectionMethod(\$listener[0], \$listener[1]);
            \$args = \$reflectionMethod->getParameters();
            if (!\$args) {
                continue;
            }

            if (null !== \$type = \$args[0]->getType()) {
                \$type = \$type instanceof \\ReflectionNamedType ? \$type->getName() : \$type->__toString();

                if (LegacyEvent::class === \$type && class_exists(Event::class)) {
                    return Event::class;
                }

                return \$type;
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
        return "vendor/symfony/maker-bundle/src/EventRegistry.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle;

use Symfony\\Component\\Console\\Event\\ConsoleCommandEvent;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\EventDispatcher\\Event as LegacyEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent;
use Symfony\\Component\\HttpKernel\\Event\\ControllerEvent;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerArgumentsEvent;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\PostResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\TerminateEvent;
use Symfony\\Component\\HttpKernel\\Event\\ViewEvent;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationEvent;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * @internal
 */
class EventRegistry
{
    // list of *known* events to always include (if they exist)
    private static \$newEventsMap = [
        'kernel.exception' => ExceptionEvent::class,
        'kernel.request' => RequestEvent::class,
        'kernel.response' => ResponseEvent::class,
        'kernel.view' => ViewEvent::class,
        'kernel.controller_arguments' => ControllerArgumentsEvent::class,
        'kernel.controller' => ControllerEvent::class,
        'kernel.terminate' => TerminateEvent::class,
    ];

    private static \$eventsMap = [
        'console.command' => ConsoleCommandEvent::class,
        'console.terminate' => ConsoleTerminateEvent::class,
        'console.error' => ConsoleErrorEvent::class,
        'kernel.request' => GetResponseEvent::class,
        'kernel.exception' => GetResponseForExceptionEvent::class,
        'kernel.view' => GetResponseForControllerResultEvent::class,
        'kernel.controller' => FilterControllerEvent::class,
        'kernel.controller_arguments' => FilterControllerArgumentsEvent::class,
        'kernel.response' => FilterResponseEvent::class,
        'kernel.terminate' => PostResponseEvent::class,
        'kernel.finish_request' => FinishRequestEvent::class,
        'security.authentication.success' => AuthenticationEvent::class,
        'security.authentication.failure' => AuthenticationFailureEvent::class,
        'security.interactive_login' => InteractiveLoginEvent::class,
        'security.switch_user' => SwitchUserEvent::class,
    ];

    private \$eventDispatcher;

    public function __construct(EventDispatcherInterface \$eventDispatcher)
    {
        \$this->eventDispatcher = \$eventDispatcher;

        // Loop through the new event classes
        foreach (self::\$newEventsMap as \$eventName => \$newEventClass) {
            //Check if the new event classes exist, if so replace the old one with the new.
            if (isset(self::\$eventsMap[\$eventName]) && class_exists(\$newEventClass)) {
                unset(self::\$eventsMap[\$eventName]);
                self::\$eventsMap[\$newEventClass] = \$newEventClass;
            }
        }
    }

    /**
     * Returns all known event names in the system.
     */
    public function getAllActiveEvents(): array
    {
        \$activeEvents = [];
        foreach (self::\$eventsMap as \$eventName => \$eventClass) {
            if (!class_exists(\$eventClass)) {
                continue;
            }

            \$activeEvents[] = \$eventName;
        }

        \$listeners = \$this->eventDispatcher->getListeners();

        // Check if these listeners are part of the new events.
        foreach (array_keys(\$listeners) as \$listenerKey) {
            if (isset(self::\$newEventsMap[\$listenerKey])) {
                unset(\$listeners[\$listenerKey]);
            }
        }

        \$activeEvents = array_unique(array_merge(\$activeEvents, array_keys(\$listeners)));

        asort(\$activeEvents);

        return \$activeEvents;
    }

    /**
     * Attempts to get the event class for a given event.
     */
    public function getEventClassName(string \$event)
    {
        if (isset(self::\$eventsMap[\$event])) {
            return self::\$eventsMap[\$event];
        }

        \$listeners = \$this->eventDispatcher->getListeners(\$event);
        if (empty(\$listeners)) {
            return null;
        }

        foreach (\$listeners as \$listener) {
            if (!\\is_array(\$listener) || 2 !== \\count(\$listener)) {
                continue;
            }

            \$reflectionMethod = new \\ReflectionMethod(\$listener[0], \$listener[1]);
            \$args = \$reflectionMethod->getParameters();
            if (!\$args) {
                continue;
            }

            if (null !== \$type = \$args[0]->getType()) {
                \$type = \$type instanceof \\ReflectionNamedType ? \$type->getName() : \$type->__toString();

                if (LegacyEvent::class === \$type && class_exists(Event::class)) {
                    return Event::class;
                }

                return \$type;
            }
        }

        return null;
    }
}
", "vendor/symfony/maker-bundle/src/EventRegistry.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/EventRegistry.php");
    }
}
