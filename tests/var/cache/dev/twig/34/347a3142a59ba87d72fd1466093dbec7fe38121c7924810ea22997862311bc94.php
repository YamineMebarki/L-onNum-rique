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

/* vendor/symfony/event-dispatcher/EventDispatcherInterface.php */
class __TwigTemplate_d49a912ac13c51f09361a92c43206e089be298467d57fec51d55f6aff45b62b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/EventDispatcherInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/EventDispatcherInterface.php"));

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

namespace Symfony\\Component\\EventDispatcher;

use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface as ContractsEventDispatcherInterface;

/**
 * The EventDispatcherInterface is the central point of Symfony's event listener system.
 * Listeners are registered on the manager and events are dispatched through the
 * manager.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface EventDispatcherInterface extends ContractsEventDispatcherInterface
{
    /**
     * Adds an event listener that listens on the specified events.
     *
     * @param string   \$eventName The event to listen on
     * @param callable \$listener  The listener
     * @param int      \$priority  The higher this value, the earlier an event
     *                            listener will be triggered in the chain (defaults to 0)
     */
    public function addListener(\$eventName, \$listener, \$priority = 0);

    /**
     * Adds an event subscriber.
     *
     * The subscriber is asked for all the events it is
     * interested in and added as a listener for these events.
     */
    public function addSubscriber(EventSubscriberInterface \$subscriber);

    /**
     * Removes an event listener from the specified events.
     *
     * @param string   \$eventName The event to remove a listener from
     * @param callable \$listener  The listener to remove
     */
    public function removeListener(\$eventName, \$listener);

    public function removeSubscriber(EventSubscriberInterface \$subscriber);

    /**
     * Gets the listeners of a specific event or all listeners sorted by descending priority.
     *
     * @param string|null \$eventName The name of the event
     *
     * @return array The event listeners for the specified event, or all event listeners by event name
     */
    public function getListeners(\$eventName = null);

    /**
     * Gets the listener priority for a specific event.
     *
     * Returns null if the event or the listener does not exist.
     *
     * @param string   \$eventName The name of the event
     * @param callable \$listener  The listener
     *
     * @return int|null The event listener priority
     */
    public function getListenerPriority(\$eventName, \$listener);

    /**
     * Checks whether an event has any registered listeners.
     *
     * @param string|null \$eventName The name of the event
     *
     * @return bool true if the specified event has any listeners, false otherwise
     */
    public function hasListeners(\$eventName = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/EventDispatcherInterface.php";
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

namespace Symfony\\Component\\EventDispatcher;

use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface as ContractsEventDispatcherInterface;

/**
 * The EventDispatcherInterface is the central point of Symfony's event listener system.
 * Listeners are registered on the manager and events are dispatched through the
 * manager.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface EventDispatcherInterface extends ContractsEventDispatcherInterface
{
    /**
     * Adds an event listener that listens on the specified events.
     *
     * @param string   \$eventName The event to listen on
     * @param callable \$listener  The listener
     * @param int      \$priority  The higher this value, the earlier an event
     *                            listener will be triggered in the chain (defaults to 0)
     */
    public function addListener(\$eventName, \$listener, \$priority = 0);

    /**
     * Adds an event subscriber.
     *
     * The subscriber is asked for all the events it is
     * interested in and added as a listener for these events.
     */
    public function addSubscriber(EventSubscriberInterface \$subscriber);

    /**
     * Removes an event listener from the specified events.
     *
     * @param string   \$eventName The event to remove a listener from
     * @param callable \$listener  The listener to remove
     */
    public function removeListener(\$eventName, \$listener);

    public function removeSubscriber(EventSubscriberInterface \$subscriber);

    /**
     * Gets the listeners of a specific event or all listeners sorted by descending priority.
     *
     * @param string|null \$eventName The name of the event
     *
     * @return array The event listeners for the specified event, or all event listeners by event name
     */
    public function getListeners(\$eventName = null);

    /**
     * Gets the listener priority for a specific event.
     *
     * Returns null if the event or the listener does not exist.
     *
     * @param string   \$eventName The name of the event
     * @param callable \$listener  The listener
     *
     * @return int|null The event listener priority
     */
    public function getListenerPriority(\$eventName, \$listener);

    /**
     * Checks whether an event has any registered listeners.
     *
     * @param string|null \$eventName The name of the event
     *
     * @return bool true if the specified event has any listeners, false otherwise
     */
    public function hasListeners(\$eventName = null);
}
", "vendor/symfony/event-dispatcher/EventDispatcherInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/EventDispatcherInterface.php");
    }
}
