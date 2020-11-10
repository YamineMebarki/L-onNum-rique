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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php */
class __TwigTemplate_1406f048010e003c79c932b768dc7bff3ca8e118aa41bba74dbcb2c0910366b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php"));

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
 * Swift Mailer class.
 *
 * @author Chris Corbyn
 */
class Swift_Mailer
{
    /** The Transport used to send messages */
    private \$transport;

    /**
     * Create a new Mailer using \$transport for delivery.
     */
    public function __construct(Swift_Transport \$transport)
    {
        \$this->transport = \$transport;
    }

    /**
     * Create a new class instance of one of the message services.
     *
     * For example 'mimepart' would create a 'message.mimepart' instance
     *
     * @param string \$service
     *
     * @return object
     */
    public function createMessage(\$service = 'message')
    {
        return Swift_DependencyContainer::getInstance()
            ->lookup('message.'.\$service);
    }

    /**
     * Send the given Message like it would be sent in a mail client.
     *
     * All recipients (with the exception of Bcc) will be able to see the other
     * recipients this message was sent to.
     *
     * Recipient/sender data will be retrieved from the Message object.
     *
     * The return value is the number of recipients who were accepted for
     * delivery.
     *
     * @param array \$failedRecipients An array of failures by-reference
     *
     * @return int The number of successful recipients. Can be 0 which indicates failure
     */
    public function send(Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        \$failedRecipients = (array) \$failedRecipients;

        // FIXME: to be removed in 7.0 (as transport must now start itself on send)
        if (!\$this->transport->isStarted()) {
            \$this->transport->start();
        }

        \$sent = 0;

        try {
            \$sent = \$this->transport->send(\$message, \$failedRecipients);
        } catch (Swift_RfcComplianceException \$e) {
            foreach (\$message->getTo() as \$address => \$name) {
                \$failedRecipients[] = \$address;
            }
        }

        return \$sent;
    }

    /**
     * Register a plugin using a known unique key (e.g. myPlugin).
     */
    public function registerPlugin(Swift_Events_EventListener \$plugin)
    {
        \$this->transport->registerPlugin(\$plugin);
    }

    /**
     * The Transport used to send messages.
     *
     * @return Swift_Transport
     */
    public function getTransport()
    {
        return \$this->transport;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php";
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
 * Swift Mailer class.
 *
 * @author Chris Corbyn
 */
class Swift_Mailer
{
    /** The Transport used to send messages */
    private \$transport;

    /**
     * Create a new Mailer using \$transport for delivery.
     */
    public function __construct(Swift_Transport \$transport)
    {
        \$this->transport = \$transport;
    }

    /**
     * Create a new class instance of one of the message services.
     *
     * For example 'mimepart' would create a 'message.mimepart' instance
     *
     * @param string \$service
     *
     * @return object
     */
    public function createMessage(\$service = 'message')
    {
        return Swift_DependencyContainer::getInstance()
            ->lookup('message.'.\$service);
    }

    /**
     * Send the given Message like it would be sent in a mail client.
     *
     * All recipients (with the exception of Bcc) will be able to see the other
     * recipients this message was sent to.
     *
     * Recipient/sender data will be retrieved from the Message object.
     *
     * The return value is the number of recipients who were accepted for
     * delivery.
     *
     * @param array \$failedRecipients An array of failures by-reference
     *
     * @return int The number of successful recipients. Can be 0 which indicates failure
     */
    public function send(Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        \$failedRecipients = (array) \$failedRecipients;

        // FIXME: to be removed in 7.0 (as transport must now start itself on send)
        if (!\$this->transport->isStarted()) {
            \$this->transport->start();
        }

        \$sent = 0;

        try {
            \$sent = \$this->transport->send(\$message, \$failedRecipients);
        } catch (Swift_RfcComplianceException \$e) {
            foreach (\$message->getTo() as \$address => \$name) {
                \$failedRecipients[] = \$address;
            }
        }

        return \$sent;
    }

    /**
     * Register a plugin using a known unique key (e.g. myPlugin).
     */
    public function registerPlugin(Swift_Events_EventListener \$plugin)
    {
        \$this->transport->registerPlugin(\$plugin);
    }

    /**
     * The Transport used to send messages.
     *
     * @return Swift_Transport
     */
    public function getTransport()
    {
        return \$this->transport;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php");
    }
}
