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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/FailoverTransport.php */
class __TwigTemplate_34c97a2762dd80ea7c0fdeea57e07c79f42f4c320549dfb144d20181e06ea0be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/FailoverTransport.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/FailoverTransport.php"));

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
 * Contains a list of redundant Transports so when one fails, the next is used.
 *
 * @author Chris Corbyn
 */
class Swift_Transport_FailoverTransport extends Swift_Transport_LoadBalancedTransport
{
    /**
     * Registered transport currently used.
     *
     * @var Swift_Transport
     */
    private \$currentTransport;

    // needed as __construct is called from elsewhere explicitly
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function ping()
    {
        \$maxTransports = count(\$this->transports);
        for (\$i = 0; \$i < \$maxTransports
            && \$transport = \$this->getNextTransport(); ++\$i) {
            if (\$transport->ping()) {
                return true;
            } else {
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

                    return \$sent;
                }
            } catch (Swift_TransportException \$e) {
                \$this->killCurrentTransport();
            }
        }

        if (0 == count(\$this->transports)) {
            throw new Swift_TransportException(
                'All Transports in FailoverTransport failed, or no Transports available'
                );
        }

        return \$sent;
    }

    protected function getNextTransport()
    {
        if (!isset(\$this->currentTransport)) {
            \$this->currentTransport = parent::getNextTransport();
        }

        return \$this->currentTransport;
    }

    protected function killCurrentTransport()
    {
        \$this->currentTransport = null;
        parent::killCurrentTransport();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/FailoverTransport.php";
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
 * Contains a list of redundant Transports so when one fails, the next is used.
 *
 * @author Chris Corbyn
 */
class Swift_Transport_FailoverTransport extends Swift_Transport_LoadBalancedTransport
{
    /**
     * Registered transport currently used.
     *
     * @var Swift_Transport
     */
    private \$currentTransport;

    // needed as __construct is called from elsewhere explicitly
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function ping()
    {
        \$maxTransports = count(\$this->transports);
        for (\$i = 0; \$i < \$maxTransports
            && \$transport = \$this->getNextTransport(); ++\$i) {
            if (\$transport->ping()) {
                return true;
            } else {
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

                    return \$sent;
                }
            } catch (Swift_TransportException \$e) {
                \$this->killCurrentTransport();
            }
        }

        if (0 == count(\$this->transports)) {
            throw new Swift_TransportException(
                'All Transports in FailoverTransport failed, or no Transports available'
                );
        }

        return \$sent;
    }

    protected function getNextTransport()
    {
        if (!isset(\$this->currentTransport)) {
            \$this->currentTransport = parent::getNextTransport();
        }

        return \$this->currentTransport;
    }

    protected function killCurrentTransport()
    {
        \$this->currentTransport = null;
        parent::killCurrentTransport();
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/FailoverTransport.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/FailoverTransport.php");
    }
}
