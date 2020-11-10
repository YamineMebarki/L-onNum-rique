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

/* vendor/zendframework/zend-eventmanager/src/EventManagerInterface.php */
class __TwigTemplate_0e0763d9c73d9781e24bb58fb5e3ab43e8ec441834698dbb47fb41eb75bf264c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/EventManagerInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/EventManagerInterface.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-eventmanager for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-eventmanager/blob/master/LICENSE.md
 */

namespace Zend\\EventManager;

/**
 * Interface for messengers
 */
interface EventManagerInterface extends SharedEventsCapableInterface
{
    /**
     * Create and trigger an event.
     *
     * Use this method when you do not want to create an EventInterface
     * instance prior to triggering. You will be required to pass:
     *
     * - the event name
     * - the event target (can be null)
     * - any event parameters you want to provide (empty array by default)
     *
     * It will create the Event instance for you and then trigger all listeners
     * related to the event.
     *
     * @param  string \$eventName
     * @param  null|object|string \$target
     * @param  array|object \$argv
     * @return ResponseCollection
     */
    public function trigger(\$eventName, \$target = null, \$argv = []);

    /**
     * Create and trigger an event, applying a callback to each listener result.
     *
     * Use this method when you do not want to create an EventInterface
     * instance prior to triggering. You will be required to pass:
     *
     * - the event name
     * - the event target (can be null)
     * - any event parameters you want to provide (empty array by default)
     *
     * It will create the Event instance for you, and trigger all listeners
     * related to the event.
     *
     * The result of each listener is passed to \$callback; if \$callback returns
     * a boolean true value, the manager must short-circuit listener execution.
     *
     * @param  callable \$callback
     * @param  string \$eventName
     * @param  null|object|string \$target
     * @param  array|object \$argv
     * @return ResponseCollection
     */
    public function triggerUntil(callable \$callback, \$eventName, \$target = null, \$argv = []);

    /**
     * Trigger an event
     *
     * Provided an EventInterface instance, this method will trigger listeners
     * based on the event name, raising an exception if the event name is missing.
     *
     * @param  EventInterface \$event
     * @return ResponseCollection
     */
    public function triggerEvent(EventInterface \$event);

    /**
     * Trigger an event, applying a callback to each listener result.
     *
     * Provided an EventInterface instance, this method will trigger listeners
     * based on the event name, raising an exception if the event name is missing.
     *
     * The result of each listener is passed to \$callback; if \$callback returns
     * a boolean true value, the manager must short-circuit listener execution.
     *
     * @param  callable \$callback
     * @param  EventInterface \$event
     * @return ResponseCollection
     */
    public function triggerEventUntil(callable \$callback, EventInterface \$event);

    /**
     * Attach a listener to an event
     *
     * The first argument is the event, and the next argument is a
     * callable that will respond to that event.
     *
     * The last argument indicates a priority at which the event should be
     * executed; by default, this value is 1; however, you may set it for any
     * integer value. Higher values have higher priority (i.e., execute first).
     *
     * You can specify \"*\" for the event name. In such cases, the listener will
     * be triggered for every event *that has registered listeners at the time
     * it is attached*. As such, register wildcard events last whenever possible!
     *
     * @param  string \$eventName Event to which to listen.
     * @param  callable \$listener
     * @param  int \$priority Priority at which to register listener.
     * @return callable
     */
    public function attach(\$eventName, callable \$listener, \$priority = 1);

    /**
     * Detach a listener.
     *
     * If no \$event or '*' is provided, detaches listener from all events;
     * otherwise, detaches only from the named event.
     *
     * @param callable \$listener
     * @param null|string \$eventName Event from which to detach; null and '*'
     *     indicate all events.
     * @return void
     */
    public function detach(callable \$listener, \$eventName = null);

    /**
     * Clear all listeners for a given event
     *
     * @param  string \$eventName
     * @return void
     */
    public function clearListeners(\$eventName);

    /**
     * Provide an event prototype to use with trigger().
     *
     * When `trigger()` needs to create an event instance, it should clone the
     * prototype provided to this method.
     *
     * @param  EventInterface \$prototype
     * @return void
     */
    public function setEventPrototype(EventInterface \$prototype);

    /**
     * Get the identifier(s) for this EventManager
     *
     * @return array
     */
    public function getIdentifiers();

    /**
     * Set the identifiers (overrides any currently set identifiers)
     *
     * @param  string[] \$identifiers
     * @return void
     */
    public function setIdentifiers(array \$identifiers);

    /**
     * Add identifier(s) (appends to any currently set identifiers)
     *
     * @param  string[] \$identifiers
     * @return void
     */
    public function addIdentifiers(array \$identifiers);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/src/EventManagerInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-eventmanager for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-eventmanager/blob/master/LICENSE.md
 */

namespace Zend\\EventManager;

/**
 * Interface for messengers
 */
interface EventManagerInterface extends SharedEventsCapableInterface
{
    /**
     * Create and trigger an event.
     *
     * Use this method when you do not want to create an EventInterface
     * instance prior to triggering. You will be required to pass:
     *
     * - the event name
     * - the event target (can be null)
     * - any event parameters you want to provide (empty array by default)
     *
     * It will create the Event instance for you and then trigger all listeners
     * related to the event.
     *
     * @param  string \$eventName
     * @param  null|object|string \$target
     * @param  array|object \$argv
     * @return ResponseCollection
     */
    public function trigger(\$eventName, \$target = null, \$argv = []);

    /**
     * Create and trigger an event, applying a callback to each listener result.
     *
     * Use this method when you do not want to create an EventInterface
     * instance prior to triggering. You will be required to pass:
     *
     * - the event name
     * - the event target (can be null)
     * - any event parameters you want to provide (empty array by default)
     *
     * It will create the Event instance for you, and trigger all listeners
     * related to the event.
     *
     * The result of each listener is passed to \$callback; if \$callback returns
     * a boolean true value, the manager must short-circuit listener execution.
     *
     * @param  callable \$callback
     * @param  string \$eventName
     * @param  null|object|string \$target
     * @param  array|object \$argv
     * @return ResponseCollection
     */
    public function triggerUntil(callable \$callback, \$eventName, \$target = null, \$argv = []);

    /**
     * Trigger an event
     *
     * Provided an EventInterface instance, this method will trigger listeners
     * based on the event name, raising an exception if the event name is missing.
     *
     * @param  EventInterface \$event
     * @return ResponseCollection
     */
    public function triggerEvent(EventInterface \$event);

    /**
     * Trigger an event, applying a callback to each listener result.
     *
     * Provided an EventInterface instance, this method will trigger listeners
     * based on the event name, raising an exception if the event name is missing.
     *
     * The result of each listener is passed to \$callback; if \$callback returns
     * a boolean true value, the manager must short-circuit listener execution.
     *
     * @param  callable \$callback
     * @param  EventInterface \$event
     * @return ResponseCollection
     */
    public function triggerEventUntil(callable \$callback, EventInterface \$event);

    /**
     * Attach a listener to an event
     *
     * The first argument is the event, and the next argument is a
     * callable that will respond to that event.
     *
     * The last argument indicates a priority at which the event should be
     * executed; by default, this value is 1; however, you may set it for any
     * integer value. Higher values have higher priority (i.e., execute first).
     *
     * You can specify \"*\" for the event name. In such cases, the listener will
     * be triggered for every event *that has registered listeners at the time
     * it is attached*. As such, register wildcard events last whenever possible!
     *
     * @param  string \$eventName Event to which to listen.
     * @param  callable \$listener
     * @param  int \$priority Priority at which to register listener.
     * @return callable
     */
    public function attach(\$eventName, callable \$listener, \$priority = 1);

    /**
     * Detach a listener.
     *
     * If no \$event or '*' is provided, detaches listener from all events;
     * otherwise, detaches only from the named event.
     *
     * @param callable \$listener
     * @param null|string \$eventName Event from which to detach; null and '*'
     *     indicate all events.
     * @return void
     */
    public function detach(callable \$listener, \$eventName = null);

    /**
     * Clear all listeners for a given event
     *
     * @param  string \$eventName
     * @return void
     */
    public function clearListeners(\$eventName);

    /**
     * Provide an event prototype to use with trigger().
     *
     * When `trigger()` needs to create an event instance, it should clone the
     * prototype provided to this method.
     *
     * @param  EventInterface \$prototype
     * @return void
     */
    public function setEventPrototype(EventInterface \$prototype);

    /**
     * Get the identifier(s) for this EventManager
     *
     * @return array
     */
    public function getIdentifiers();

    /**
     * Set the identifiers (overrides any currently set identifiers)
     *
     * @param  string[] \$identifiers
     * @return void
     */
    public function setIdentifiers(array \$identifiers);

    /**
     * Add identifier(s) (appends to any currently set identifiers)
     *
     * @param  string[] \$identifiers
     * @return void
     */
    public function addIdentifiers(array \$identifiers);
}
", "vendor/zendframework/zend-eventmanager/src/EventManagerInterface.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/src/EventManagerInterface.php");
    }
}
