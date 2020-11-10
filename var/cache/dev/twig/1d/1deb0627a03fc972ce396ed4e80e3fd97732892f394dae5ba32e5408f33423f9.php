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

/* vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php */
class __TwigTemplate_5de3cca90de5bd4de10bb328c80f1db98c65086ac7bbe9ba2c1b67d49d593645 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common;

use function spl_object_hash;

/**
 * The EventManager is the central point of Doctrine's event listener system.
 * Listeners are registered on the manager and events are dispatched through the
 * manager.
 */
class EventManager
{
    /**
     * Map of registered listeners.
     * <event> => <listeners>
     *
     * @var object[][]
     */
    private \$_listeners = [];

    /**
     * Dispatches an event to all registered listeners.
     *
     * @param string         \$eventName The name of the event to dispatch. The name of the event is
     *                                  the name of the method that is invoked on listeners.
     * @param EventArgs|null \$eventArgs The event arguments to pass to the event handlers/listeners.
     *                                  If not supplied, the single empty EventArgs instance is used.
     *
     * @return void
     */
    public function dispatchEvent(\$eventName, ?EventArgs \$eventArgs = null)
    {
        if (! isset(\$this->_listeners[\$eventName])) {
            return;
        }

        \$eventArgs = \$eventArgs ?? EventArgs::getEmptyInstance();

        foreach (\$this->_listeners[\$eventName] as \$listener) {
            \$listener->\$eventName(\$eventArgs);
        }
    }

    /**
     * Gets the listeners of a specific event or all listeners.
     *
     * @param string|null \$event The name of the event.
     *
     * @return object[]|object[][] The event listeners for the specified event, or all event listeners.
     */
    public function getListeners(\$event = null)
    {
        return \$event ? \$this->_listeners[\$event] : \$this->_listeners;
    }

    /**
     * Checks whether an event has any registered listeners.
     *
     * @param string \$event
     *
     * @return bool TRUE if the specified event has any listeners, FALSE otherwise.
     */
    public function hasListeners(\$event)
    {
        return ! empty(\$this->_listeners[\$event]);
    }

    /**
     * Adds an event listener that listens on the specified events.
     *
     * @param string|string[] \$events   The event(s) to listen on.
     * @param object          \$listener The listener object.
     *
     * @return void
     */
    public function addEventListener(\$events, \$listener)
    {
        // Picks the hash code related to that listener
        \$hash = spl_object_hash(\$listener);

        foreach ((array) \$events as \$event) {
            // Overrides listener if a previous one was associated already
            // Prevents duplicate listeners on same event (same instance only)
            \$this->_listeners[\$event][\$hash] = \$listener;
        }
    }

    /**
     * Removes an event listener from the specified events.
     *
     * @param string|string[] \$events
     * @param object          \$listener
     *
     * @return void
     */
    public function removeEventListener(\$events, \$listener)
    {
        // Picks the hash code related to that listener
        \$hash = spl_object_hash(\$listener);

        foreach ((array) \$events as \$event) {
            unset(\$this->_listeners[\$event][\$hash]);
        }
    }

    /**
     * Adds an EventSubscriber. The subscriber is asked for all the events it is
     * interested in and added as a listener for these events.
     *
     * @param EventSubscriber \$subscriber The subscriber.
     *
     * @return void
     */
    public function addEventSubscriber(EventSubscriber \$subscriber)
    {
        \$this->addEventListener(\$subscriber->getSubscribedEvents(), \$subscriber);
    }

    /**
     * Removes an EventSubscriber. The subscriber is asked for all the events it is
     * interested in and removed as a listener for these events.
     *
     * @param EventSubscriber \$subscriber The subscriber.
     *
     * @return void
     */
    public function removeEventSubscriber(EventSubscriber \$subscriber)
    {
        \$this->removeEventListener(\$subscriber->getSubscribedEvents(), \$subscriber);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common;

use function spl_object_hash;

/**
 * The EventManager is the central point of Doctrine's event listener system.
 * Listeners are registered on the manager and events are dispatched through the
 * manager.
 */
class EventManager
{
    /**
     * Map of registered listeners.
     * <event> => <listeners>
     *
     * @var object[][]
     */
    private \$_listeners = [];

    /**
     * Dispatches an event to all registered listeners.
     *
     * @param string         \$eventName The name of the event to dispatch. The name of the event is
     *                                  the name of the method that is invoked on listeners.
     * @param EventArgs|null \$eventArgs The event arguments to pass to the event handlers/listeners.
     *                                  If not supplied, the single empty EventArgs instance is used.
     *
     * @return void
     */
    public function dispatchEvent(\$eventName, ?EventArgs \$eventArgs = null)
    {
        if (! isset(\$this->_listeners[\$eventName])) {
            return;
        }

        \$eventArgs = \$eventArgs ?? EventArgs::getEmptyInstance();

        foreach (\$this->_listeners[\$eventName] as \$listener) {
            \$listener->\$eventName(\$eventArgs);
        }
    }

    /**
     * Gets the listeners of a specific event or all listeners.
     *
     * @param string|null \$event The name of the event.
     *
     * @return object[]|object[][] The event listeners for the specified event, or all event listeners.
     */
    public function getListeners(\$event = null)
    {
        return \$event ? \$this->_listeners[\$event] : \$this->_listeners;
    }

    /**
     * Checks whether an event has any registered listeners.
     *
     * @param string \$event
     *
     * @return bool TRUE if the specified event has any listeners, FALSE otherwise.
     */
    public function hasListeners(\$event)
    {
        return ! empty(\$this->_listeners[\$event]);
    }

    /**
     * Adds an event listener that listens on the specified events.
     *
     * @param string|string[] \$events   The event(s) to listen on.
     * @param object          \$listener The listener object.
     *
     * @return void
     */
    public function addEventListener(\$events, \$listener)
    {
        // Picks the hash code related to that listener
        \$hash = spl_object_hash(\$listener);

        foreach ((array) \$events as \$event) {
            // Overrides listener if a previous one was associated already
            // Prevents duplicate listeners on same event (same instance only)
            \$this->_listeners[\$event][\$hash] = \$listener;
        }
    }

    /**
     * Removes an event listener from the specified events.
     *
     * @param string|string[] \$events
     * @param object          \$listener
     *
     * @return void
     */
    public function removeEventListener(\$events, \$listener)
    {
        // Picks the hash code related to that listener
        \$hash = spl_object_hash(\$listener);

        foreach ((array) \$events as \$event) {
            unset(\$this->_listeners[\$event][\$hash]);
        }
    }

    /**
     * Adds an EventSubscriber. The subscriber is asked for all the events it is
     * interested in and added as a listener for these events.
     *
     * @param EventSubscriber \$subscriber The subscriber.
     *
     * @return void
     */
    public function addEventSubscriber(EventSubscriber \$subscriber)
    {
        \$this->addEventListener(\$subscriber->getSubscribedEvents(), \$subscriber);
    }

    /**
     * Removes an EventSubscriber. The subscriber is asked for all the events it is
     * interested in and removed as a listener for these events.
     *
     * @param EventSubscriber \$subscriber The subscriber.
     *
     * @return void
     */
    public function removeEventSubscriber(EventSubscriber \$subscriber)
    {
        \$this->removeEventListener(\$subscriber->getSubscribedEvents(), \$subscriber);
    }
}
", "vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php", "/var/www/public/DevLaon/templates/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php");
    }
}
