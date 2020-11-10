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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/LoadBalancedTransport.php */
class __TwigTemplate_c9c9f662e5e150f4f56d2134cfbbfb28eab4a44aaa5dc425926df96f8838df76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/LoadBalancedTransport.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/LoadBalancedTransport.php"));

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
 * Redundantly and rotationally uses several Transports when sending.
 *
 * @author Chris Corbyn
 */
class Swift_Transport_LoadBalancedTransport implements Swift_Transport
{
    /**
     * Transports which are deemed useless.
     *
     * @var Swift_Transport[]
     */
    private \$deadTransports = [];

    /**
     * The Transports which are used in rotation.
     *
     * @var Swift_Transport[]
     */
    protected \$transports = [];

    /**
     * The Transport used in the last successful send operation.
     *
     * @var Swift_Transport
     */
    protected \$lastUsedTransport = null;

    // needed as __construct is called from elsewhere explicitly
    public function __construct()
    {
    }

    /**
     * Set \$transports to delegate to.
     *
     * @param Swift_Transport[] \$transports
     */
    public function setTransports(array \$transports)
    {
        \$this->transports = \$transports;
        \$this->deadTransports = [];
    }

    /**
     * Get \$transports to delegate to.
     *
     * @return Swift_Transport[]
     */
    public function getTransports()
    {
        return array_merge(\$this->transports, \$this->deadTransports);
    }

    /**
     * Get the Transport used in the last successful send operation.
     *
     * @return Swift_Transport
     */
    public function getLastUsedTransport()
    {
        return \$this->lastUsedTransport;
    }

    /**
     * DevLaon if this Transport mechanism has started.
     *
     * @return bool
     */
    public function isStarted()
    {
        return count(\$this->transports) > 0;
    }

    /**
     * Start this Transport mechanism.
     */
    public function start()
    {
        \$this->transports = array_merge(\$this->transports, \$this->deadTransports);
    }

    /**
     * Stop this Transport mechanism.
     */
    public function stop()
    {
        foreach (\$this->transports as \$transport) {
            \$transport->stop();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function ping()
    {
        foreach (\$this->transports as \$transport) {
            if (!\$transport->ping()) {
                \$this->killCurrentTransport();
            }
        }

        return count(\$this->transports) > 0;
    }

    /**
     * Send the given Message.
     *
     * Recipient/sender data will be retrieved from the Message API.
     * The return value is the number of recipients who were accepted for delivery.
     *
     * @param string[] \$failedRecipients An array of failures by-reference
     *
     * @return int
     */
    public function send(Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        \$maxTransports = count(\$this->transports);
        \$sent = 0;
        \$this->lastUsedTransport = null;

        for (\$i = 0; \$i < \$maxTransports
            && \$transport = \$this->getNextTransport(); ++\$i) {
            try {
                if (!\$transport->isStarted()) {
                    \$transport->start();
                }
                if (\$sent = \$transport->send(\$message, \$failedRecipients)) {
                    \$this->lastUsedTransport = \$transport;
                    break;
                }
            } catch (Swift_TransportException \$e) {
                \$this->killCurrentTransport();
            }
        }

        if (0 == count(\$this->transports)) {
            throw new Swift_TransportException(
                'All Transports in LoadBalancedTransport failed, or no Transports available'
                );
        }

        return \$sent;
    }

    /**
     * Register a plugin.
     */
    public function registerPlugin(Swift_Events_EventListener \$plugin)
    {
        foreach (\$this->transports as \$transport) {
            \$transport->registerPlugin(\$plugin);
        }
    }

    /**
     * Rotates the transport list around and returns the first instance.
     *
     * @return Swift_Transport
     */
    protected function getNextTransport()
    {
        if (\$next = array_shift(\$this->transports)) {
            \$this->transports[] = \$next;
        }

        return \$next;
    }

    /**
     * Tag the currently used (top of stack) transport as dead/useless.
     */
    protected function killCurrentTransport()
    {
        if (\$transport = array_pop(\$this->transports)) {
            try {
                \$transport->stop();
            } catch (Exception \$e) {
            }
            \$this->deadTransports[] = \$transport;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/LoadBalancedTransport.php";
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
 * Redundantly and rotationally uses several Transports when sending.
 *
 * @author Chris Corbyn
 */
class Swift_Transport_LoadBalancedTransport implements Swift_Transport
{
    /**
     * Transports which are deemed useless.
     *
     * @var Swift_Transport[]
     */
    private \$deadTransports = [];

    /**
     * The Transports which are used in rotation.
     *
     * @var Swift_Transport[]
     */
    protected \$transports = [];

    /**
     * The Transport used in the last successful send operation.
     *
     * @var Swift_Transport
     */
    protected \$lastUsedTransport = null;

    // needed as __construct is called from elsewhere explicitly
    public function __construct()
    {
    }

    /**
     * Set \$transports to delegate to.
     *
     * @param Swift_Transport[] \$transports
     */
    public function setTransports(array \$transports)
    {
        \$this->transports = \$transports;
        \$this->deadTransports = [];
    }

    /**
     * Get \$transports to delegate to.
     *
     * @return Swift_Transport[]
     */
    public function getTransports()
    {
        return array_merge(\$this->transports, \$this->deadTransports);
    }

    /**
     * Get the Transport used in the last successful send operation.
     *
     * @return Swift_Transport
     */
    public function getLastUsedTransport()
    {
        return \$this->lastUsedTransport;
    }

    /**
     * DevLaon if this Transport mechanism has started.
     *
     * @return bool
     */
    public function isStarted()
    {
        return count(\$this->transports) > 0;
    }

    /**
     * Start this Transport mechanism.
     */
    public function start()
    {
        \$this->transports = array_merge(\$this->transports, \$this->deadTransports);
    }

    /**
     * Stop this Transport mechanism.
     */
    public function stop()
    {
        foreach (\$this->transports as \$transport) {
            \$transport->stop();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function ping()
    {
        foreach (\$this->transports as \$transport) {
            if (!\$transport->ping()) {
                \$this->killCurrentTransport();
            }
        }

        return count(\$this->transports) > 0;
    }

    /**
     * Send the given Message.
     *
     * Recipient/sender data will be retrieved from the Message API.
     * The return value is the number of recipients who were accepted for delivery.
     *
     * @param string[] \$failedRecipients An array of failures by-reference
     *
     * @return int
     */
    public function send(Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        \$maxTransports = count(\$this->transports);
        \$sent = 0;
        \$this->lastUsedTransport = null;

        for (\$i = 0; \$i < \$maxTransports
            && \$transport = \$this->getNextTransport(); ++\$i) {
            try {
                if (!\$transport->isStarted()) {
                    \$transport->start();
                }
                if (\$sent = \$transport->send(\$message, \$failedRecipients)) {
                    \$this->lastUsedTransport = \$transport;
                    break;
                }
            } catch (Swift_TransportException \$e) {
                \$this->killCurrentTransport();
            }
        }

        if (0 == count(\$this->transports)) {
            throw new Swift_TransportException(
                'All Transports in LoadBalancedTransport failed, or no Transports available'
                );
        }

        return \$sent;
    }

    /**
     * Register a plugin.
     */
    public function registerPlugin(Swift_Events_EventListener \$plugin)
    {
        foreach (\$this->transports as \$transport) {
            \$transport->registerPlugin(\$plugin);
        }
    }

    /**
     * Rotates the transport list around and returns the first instance.
     *
     * @return Swift_Transport
     */
    protected function getNextTransport()
    {
        if (\$next = array_shift(\$this->transports)) {
            \$this->transports[] = \$next;
        }

        return \$next;
    }

    /**
     * Tag the currently used (top of stack) transport as dead/useless.
     */
    protected function killCurrentTransport()
    {
        if (\$transport = array_pop(\$this->transports)) {
            try {
                \$transport->stop();
            } catch (Exception \$e) {
            }
            \$this->deadTransports[] = \$transport;
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/LoadBalancedTransport.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/LoadBalancedTransport.php");
    }
}
