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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php */
class __TwigTemplate_d46bff74eb695a6baf33c92ac5c1c4ce6f9b8820afb60fe918361e66704a29af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php"));

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
 * Interface for the EventDispatcher which handles the event dispatching layer.
 *
 * @author Chris Corbyn
 */
interface Swift_Events_EventDispatcher
{
    /**
     * Create a new SendEvent for \$source and \$message.
     *
     * @param Swift_Transport \$source
     * @param Swift_Mime_SimpleMessage
     *
     * @return Swift_Events_SendEvent
     */
    public function createSendEvent(Swift_Transport \$source, Swift_Mime_SimpleMessage \$message);

    /**
     * Create a new CommandEvent for \$source and \$command.
     *
     * @param Swift_Transport \$source
     * @param string          \$command      That will be executed
     * @param array           \$successCodes That are needed
     *
     * @return Swift_Events_CommandEvent
     */
    public function createCommandEvent(Swift_Transport \$source, \$command, \$successCodes = []);

    /**
     * Create a new ResponseEvent for \$source and \$response.
     *
     * @param Swift_Transport \$source
     * @param string          \$response
     * @param bool            \$valid    If the response is valid
     *
     * @return Swift_Events_ResponseEvent
     */
    public function createResponseEvent(Swift_Transport \$source, \$response, \$valid);

    /**
     * Create a new TransportChangeEvent for \$source.
     *
     * @param Swift_Transport \$source
     *
     * @return Swift_Events_TransportChangeEvent
     */
    public function createTransportChangeEvent(Swift_Transport \$source);

    /**
     * Create a new TransportExceptionEvent for \$source.
     *
     * @param Swift_Transport          \$source
     * @param Swift_TransportException \$ex
     *
     * @return Swift_Events_TransportExceptionEvent
     */
    public function createTransportExceptionEvent(Swift_Transport \$source, Swift_TransportException \$ex);

    /**
     * Bind an event listener to this dispatcher.
     *
     * @param Swift_Events_EventListener \$listener
     */
    public function bindEventListener(Swift_Events_EventListener \$listener);

    /**
     * Dispatch the given Event to all suitable listeners.
     *
     * @param Swift_Events_EventObject \$evt
     * @param string                   \$target method
     */
    public function dispatchEvent(Swift_Events_EventObject \$evt, \$target);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php";
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
 * Interface for the EventDispatcher which handles the event dispatching layer.
 *
 * @author Chris Corbyn
 */
interface Swift_Events_EventDispatcher
{
    /**
     * Create a new SendEvent for \$source and \$message.
     *
     * @param Swift_Transport \$source
     * @param Swift_Mime_SimpleMessage
     *
     * @return Swift_Events_SendEvent
     */
    public function createSendEvent(Swift_Transport \$source, Swift_Mime_SimpleMessage \$message);

    /**
     * Create a new CommandEvent for \$source and \$command.
     *
     * @param Swift_Transport \$source
     * @param string          \$command      That will be executed
     * @param array           \$successCodes That are needed
     *
     * @return Swift_Events_CommandEvent
     */
    public function createCommandEvent(Swift_Transport \$source, \$command, \$successCodes = []);

    /**
     * Create a new ResponseEvent for \$source and \$response.
     *
     * @param Swift_Transport \$source
     * @param string          \$response
     * @param bool            \$valid    If the response is valid
     *
     * @return Swift_Events_ResponseEvent
     */
    public function createResponseEvent(Swift_Transport \$source, \$response, \$valid);

    /**
     * Create a new TransportChangeEvent for \$source.
     *
     * @param Swift_Transport \$source
     *
     * @return Swift_Events_TransportChangeEvent
     */
    public function createTransportChangeEvent(Swift_Transport \$source);

    /**
     * Create a new TransportExceptionEvent for \$source.
     *
     * @param Swift_Transport          \$source
     * @param Swift_TransportException \$ex
     *
     * @return Swift_Events_TransportExceptionEvent
     */
    public function createTransportExceptionEvent(Swift_Transport \$source, Swift_TransportException \$ex);

    /**
     * Bind an event listener to this dispatcher.
     *
     * @param Swift_Events_EventListener \$listener
     */
    public function bindEventListener(Swift_Events_EventListener \$listener);

    /**
     * Dispatch the given Event to all suitable listeners.
     *
     * @param Swift_Events_EventObject \$evt
     * @param string                   \$target method
     */
    public function dispatchEvent(Swift_Events_EventObject \$evt, \$target);
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php");
    }
}
