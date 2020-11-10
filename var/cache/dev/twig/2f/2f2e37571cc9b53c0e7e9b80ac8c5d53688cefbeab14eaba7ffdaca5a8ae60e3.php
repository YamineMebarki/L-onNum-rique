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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/LoggerPlugin.php */
class __TwigTemplate_f15c4929acd864c2bc10fbd28d2c00788b62f253639e788c7fbc36b2dee9c473 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/LoggerPlugin.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/LoggerPlugin.php"));

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
 * Does real time logging of Transport level information.
 *
 * @author     Chris Corbyn
 */
class Swift_Plugins_LoggerPlugin implements Swift_Events_CommandListener, Swift_Events_ResponseListener, Swift_Events_TransportChangeListener, Swift_Events_TransportExceptionListener, Swift_Plugins_Logger
{
    /** The logger which is delegated to */
    private \$logger;

    /**
     * Create a new LoggerPlugin using \$logger.
     */
    public function __construct(Swift_Plugins_Logger \$logger)
    {
        \$this->logger = \$logger;
    }

    /**
     * Add a log entry.
     *
     * @param string \$entry
     */
    public function add(\$entry)
    {
        \$this->logger->add(\$entry);
    }

    /**
     * Clear the log contents.
     */
    public function clear()
    {
        \$this->logger->clear();
    }

    /**
     * Get this log as a string.
     *
     * @return string
     */
    public function dump()
    {
        return \$this->logger->dump();
    }

    /**
     * Invoked immediately following a command being sent.
     */
    public function commandSent(Swift_Events_CommandEvent \$evt)
    {
        \$command = \$evt->getCommand();
        \$this->logger->add(sprintf('>> %s', \$command));
    }

    /**
     * Invoked immediately following a response coming back.
     */
    public function responseReceived(Swift_Events_ResponseEvent \$evt)
    {
        \$response = \$evt->getResponse();
        \$this->logger->add(sprintf('<< %s', \$response));
    }

    /**
     * Invoked just before a Transport is started.
     */
    public function beforeTransportStarted(Swift_Events_TransportChangeEvent \$evt)
    {
        \$transportName = get_class(\$evt->getSource());
        \$this->logger->add(sprintf('++ Starting %s', \$transportName));
    }

    /**
     * Invoked immediately after the Transport is started.
     */
    public function transportStarted(Swift_Events_TransportChangeEvent \$evt)
    {
        \$transportName = get_class(\$evt->getSource());
        \$this->logger->add(sprintf('++ %s started', \$transportName));
    }

    /**
     * Invoked just before a Transport is stopped.
     */
    public function beforeTransportStopped(Swift_Events_TransportChangeEvent \$evt)
    {
        \$transportName = get_class(\$evt->getSource());
        \$this->logger->add(sprintf('++ Stopping %s', \$transportName));
    }

    /**
     * Invoked immediately after the Transport is stopped.
     */
    public function transportStopped(Swift_Events_TransportChangeEvent \$evt)
    {
        \$transportName = get_class(\$evt->getSource());
        \$this->logger->add(sprintf('++ %s stopped', \$transportName));
    }

    /**
     * Invoked as a TransportException is thrown in the Transport system.
     */
    public function exceptionThrown(Swift_Events_TransportExceptionEvent \$evt)
    {
        \$e = \$evt->getException();
        \$message = \$e->getMessage();
        \$code = \$e->getCode();
        \$this->logger->add(sprintf('!! %s (code: %s)', \$message, \$code));
        \$message .= PHP_EOL;
        \$message .= 'Log data:'.PHP_EOL;
        \$message .= \$this->logger->dump();
        \$evt->cancelBubble();
        throw new Swift_TransportException(\$message, \$code, \$e->getPrevious());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/LoggerPlugin.php";
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
 * Does real time logging of Transport level information.
 *
 * @author     Chris Corbyn
 */
class Swift_Plugins_LoggerPlugin implements Swift_Events_CommandListener, Swift_Events_ResponseListener, Swift_Events_TransportChangeListener, Swift_Events_TransportExceptionListener, Swift_Plugins_Logger
{
    /** The logger which is delegated to */
    private \$logger;

    /**
     * Create a new LoggerPlugin using \$logger.
     */
    public function __construct(Swift_Plugins_Logger \$logger)
    {
        \$this->logger = \$logger;
    }

    /**
     * Add a log entry.
     *
     * @param string \$entry
     */
    public function add(\$entry)
    {
        \$this->logger->add(\$entry);
    }

    /**
     * Clear the log contents.
     */
    public function clear()
    {
        \$this->logger->clear();
    }

    /**
     * Get this log as a string.
     *
     * @return string
     */
    public function dump()
    {
        return \$this->logger->dump();
    }

    /**
     * Invoked immediately following a command being sent.
     */
    public function commandSent(Swift_Events_CommandEvent \$evt)
    {
        \$command = \$evt->getCommand();
        \$this->logger->add(sprintf('>> %s', \$command));
    }

    /**
     * Invoked immediately following a response coming back.
     */
    public function responseReceived(Swift_Events_ResponseEvent \$evt)
    {
        \$response = \$evt->getResponse();
        \$this->logger->add(sprintf('<< %s', \$response));
    }

    /**
     * Invoked just before a Transport is started.
     */
    public function beforeTransportStarted(Swift_Events_TransportChangeEvent \$evt)
    {
        \$transportName = get_class(\$evt->getSource());
        \$this->logger->add(sprintf('++ Starting %s', \$transportName));
    }

    /**
     * Invoked immediately after the Transport is started.
     */
    public function transportStarted(Swift_Events_TransportChangeEvent \$evt)
    {
        \$transportName = get_class(\$evt->getSource());
        \$this->logger->add(sprintf('++ %s started', \$transportName));
    }

    /**
     * Invoked just before a Transport is stopped.
     */
    public function beforeTransportStopped(Swift_Events_TransportChangeEvent \$evt)
    {
        \$transportName = get_class(\$evt->getSource());
        \$this->logger->add(sprintf('++ Stopping %s', \$transportName));
    }

    /**
     * Invoked immediately after the Transport is stopped.
     */
    public function transportStopped(Swift_Events_TransportChangeEvent \$evt)
    {
        \$transportName = get_class(\$evt->getSource());
        \$this->logger->add(sprintf('++ %s stopped', \$transportName));
    }

    /**
     * Invoked as a TransportException is thrown in the Transport system.
     */
    public function exceptionThrown(Swift_Events_TransportExceptionEvent \$evt)
    {
        \$e = \$evt->getException();
        \$message = \$e->getMessage();
        \$code = \$e->getCode();
        \$this->logger->add(sprintf('!! %s (code: %s)', \$message, \$code));
        \$message .= PHP_EOL;
        \$message .= 'Log data:'.PHP_EOL;
        \$message .= \$this->logger->dump();
        \$evt->cancelBubble();
        throw new Swift_TransportException(\$message, \$code, \$e->getPrevious());
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/LoggerPlugin.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/LoggerPlugin.php");
    }
}
