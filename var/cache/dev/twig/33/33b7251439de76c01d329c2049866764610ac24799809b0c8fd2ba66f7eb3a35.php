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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php */
class __TwigTemplate_d6c9668ac1380b307ab0f6ad1566d159ddf117666f19b20745092c1b995f8693 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * The EventDispatcher which handles the event dispatching layer.
 *
 * @author Chris Corbyn
 */
class Swift_Events_SimpleEventDispatcher implements Swift_Events_EventDispatcher
{
    /** A map of event types to their associated listener types */
    private \$eventMap = [];

    /** Event listeners bound to this dispatcher */
    private \$listeners = [];

    /** Listeners queued to have an Event bubbled up the stack to them */
    private \$bubbleQueue = [];

    /**
     * Create a new EventDispatcher.
     */
    public function __construct()
    {
        \$this->eventMap = [
            'Swift_Events_CommandEvent' => 'Swift_Events_CommandListener',
            'Swift_Events_ResponseEvent' => 'Swift_Events_ResponseListener',
            'Swift_Events_SendEvent' => 'Swift_Events_SendListener',
            'Swift_Events_TransportChangeEvent' => 'Swift_Events_TransportChangeListener',
            'Swift_Events_TransportExceptionEvent' => 'Swift_Events_TransportExceptionListener',
            ];
    }

    /**
     * Create a new SendEvent for \$source and \$message.
     *
     * @return Swift_Events_SendEvent
     */
    public function createSendEvent(Swift_Transport \$source, Swift_Mime_SimpleMessage \$message)
    {
        return new Swift_Events_SendEvent(\$source, \$message);
    }

    /**
     * Create a new CommandEvent for \$source and \$command.
     *
     * @param string \$command      That will be executed
     * @param array  \$successCodes That are needed
     *
     * @return Swift_Events_CommandEvent
     */
    public function createCommandEvent(Swift_Transport \$source, \$command, \$successCodes = [])
    {
        return new Swift_Events_CommandEvent(\$source, \$command, \$successCodes);
    }

    /**
     * Create a new ResponseEvent for \$source and \$response.
     *
     * @param string \$response
     * @param bool   \$valid    If the response is valid
     *
     * @return Swift_Events_ResponseEvent
     */
    public function createResponseEvent(Swift_Transport \$source, \$response, \$valid)
    {
        return new Swift_Events_ResponseEvent(\$source, \$response, \$valid);
    }

    /**
     * Create a new TransportChangeEvent for \$source.
     *
     * @return Swift_Events_TransportChangeEvent
     */
    public function createTransportChangeEvent(Swift_Transport \$source)
    {
        return new Swift_Events_TransportChangeEvent(\$source);
    }

    /**
     * Create a new TransportExceptionEvent for \$source.
     *
     * @return Swift_Events_TransportExceptionEvent
     */
    public function createTransportExceptionEvent(Swift_Transport \$source, Swift_TransportException \$ex)
    {
        return new Swift_Events_TransportExceptionEvent(\$source, \$ex);
    }

    /**
     * Bind an event listener to this dispatcher.
     */
    public function bindEventListener(Swift_Events_EventListener \$listener)
    {
        foreach (\$this->listeners as \$l) {
            // Already loaded
            if (\$l === \$listener) {
                return;
            }
        }
        \$this->listeners[] = \$listener;
    }

    /**
     * Dispatch the given Event to all suitable listeners.
     *
     * @param string \$target method
     */
    public function dispatchEvent(Swift_Events_EventObject \$evt, \$target)
    {
        \$this->prepareBubbleQueue(\$evt);
        \$this->bubble(\$evt, \$target);
    }

    /** Queue listeners on a stack ready for \$evt to be bubbled up it */
    private function prepareBubbleQueue(Swift_Events_EventObject \$evt)
    {
        \$this->bubbleQueue = [];
        \$evtClass = get_class(\$evt);
        foreach (\$this->listeners as \$listener) {
            if (array_key_exists(\$evtClass, \$this->eventMap)
                && (\$listener instanceof \$this->eventMap[\$evtClass])) {
                \$this->bubbleQueue[] = \$listener;
            }
        }
    }

    /** Bubble \$evt up the stack calling \$target() on each listener */
    private function bubble(Swift_Events_EventObject \$evt, \$target)
    {
        if (!\$evt->bubbleCancelled() && \$listener = array_shift(\$this->bubbleQueue)) {
            \$listener->\$target(\$evt);
            \$this->bubble(\$evt, \$target);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * The EventDispatcher which handles the event dispatching layer.
 *
 * @author Chris Corbyn
 */
class Swift_Events_SimpleEventDispatcher implements Swift_Events_EventDispatcher
{
    /** A map of event types to their associated listener types */
    private \$eventMap = [];

    /** Event listeners bound to this dispatcher */
    private \$listeners = [];

    /** Listeners queued to have an Event bubbled up the stack to them */
    private \$bubbleQueue = [];

    /**
     * Create a new EventDispatcher.
     */
    public function __construct()
    {
        \$this->eventMap = [
            'Swift_Events_CommandEvent' => 'Swift_Events_CommandListener',
            'Swift_Events_ResponseEvent' => 'Swift_Events_ResponseListener',
            'Swift_Events_SendEvent' => 'Swift_Events_SendListener',
            'Swift_Events_TransportChangeEvent' => 'Swift_Events_TransportChangeListener',
            'Swift_Events_TransportExceptionEvent' => 'Swift_Events_TransportExceptionListener',
            ];
    }

    /**
     * Create a new SendEvent for \$source and \$message.
     *
     * @return Swift_Events_SendEvent
     */
    public function createSendEvent(Swift_Transport \$source, Swift_Mime_SimpleMessage \$message)
    {
        return new Swift_Events_SendEvent(\$source, \$message);
    }

    /**
     * Create a new CommandEvent for \$source and \$command.
     *
     * @param string \$command      That will be executed
     * @param array  \$successCodes That are needed
     *
     * @return Swift_Events_CommandEvent
     */
    public function createCommandEvent(Swift_Transport \$source, \$command, \$successCodes = [])
    {
        return new Swift_Events_CommandEvent(\$source, \$command, \$successCodes);
    }

    /**
     * Create a new ResponseEvent for \$source and \$response.
     *
     * @param string \$response
     * @param bool   \$valid    If the response is valid
     *
     * @return Swift_Events_ResponseEvent
     */
    public function createResponseEvent(Swift_Transport \$source, \$response, \$valid)
    {
        return new Swift_Events_ResponseEvent(\$source, \$response, \$valid);
    }

    /**
     * Create a new TransportChangeEvent for \$source.
     *
     * @return Swift_Events_TransportChangeEvent
     */
    public function createTransportChangeEvent(Swift_Transport \$source)
    {
        return new Swift_Events_TransportChangeEvent(\$source);
    }

    /**
     * Create a new TransportExceptionEvent for \$source.
     *
     * @return Swift_Events_TransportExceptionEvent
     */
    public function createTransportExceptionEvent(Swift_Transport \$source, Swift_TransportException \$ex)
    {
        return new Swift_Events_TransportExceptionEvent(\$source, \$ex);
    }

    /**
     * Bind an event listener to this dispatcher.
     */
    public function bindEventListener(Swift_Events_EventListener \$listener)
    {
        foreach (\$this->listeners as \$l) {
            // Already loaded
            if (\$l === \$listener) {
                return;
            }
        }
        \$this->listeners[] = \$listener;
    }

    /**
     * Dispatch the given Event to all suitable listeners.
     *
     * @param string \$target method
     */
    public function dispatchEvent(Swift_Events_EventObject \$evt, \$target)
    {
        \$this->prepareBubbleQueue(\$evt);
        \$this->bubble(\$evt, \$target);
    }

    /** Queue listeners on a stack ready for \$evt to be bubbled up it */
    private function prepareBubbleQueue(Swift_Events_EventObject \$evt)
    {
        \$this->bubbleQueue = [];
        \$evtClass = get_class(\$evt);
        foreach (\$this->listeners as \$listener) {
            if (array_key_exists(\$evtClass, \$this->eventMap)
                && (\$listener instanceof \$this->eventMap[\$evtClass])) {
                \$this->bubbleQueue[] = \$listener;
            }
        }
    }

    /** Bubble \$evt up the stack calling \$target() on each listener */
    private function bubble(Swift_Events_EventObject \$evt, \$target)
    {
        if (!\$evt->bubbleCancelled() && \$listener = array_shift(\$this->bubbleQueue)) {
            \$listener->\$target(\$evt);
            \$this->bubble(\$evt, \$target);
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php");
    }
}
