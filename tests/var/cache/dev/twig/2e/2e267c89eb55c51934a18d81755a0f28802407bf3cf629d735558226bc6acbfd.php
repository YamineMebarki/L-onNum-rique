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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SendmailTransport.php */
class __TwigTemplate_7cd682d68c6934eccb53e84d3ed91fa535e1935b0c1c0432fcd99965927077e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SendmailTransport.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SendmailTransport.php"));

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
 * SendmailTransport for sending mail through a Sendmail/Postfix (etc..) binary.
 *
 * Supported modes are -bs and -t, with any additional flags desired.
 * It is advised to use -bs mode since error reporting with -t mode is not
 * possible.
 *
 * @author Chris Corbyn
 */
class Swift_Transport_SendmailTransport extends Swift_Transport_AbstractSmtpTransport
{
    /**
     * Connection buffer parameters.
     *
     * @var array
     */
    private \$params = [
        'timeout' => 30,
        'blocking' => 1,
        'command' => '/usr/sbin/sendmail -bs',
        'type' => Swift_Transport_IoBuffer::TYPE_PROCESS,
        ];

    /**
     * Create a new SendmailTransport with \$buf for I/O.
     *
     * @param string \$localDomain
     */
    public function __construct(Swift_Transport_IoBuffer \$buf, Swift_Events_EventDispatcher \$dispatcher, \$localDomain = '127.0.0.1', Swift_AddressEncoder \$addressEncoder = null)
    {
        parent::__construct(\$buf, \$dispatcher, \$localDomain, \$addressEncoder);
    }

    /**
     * Start the standalone SMTP session if running in -bs mode.
     */
    public function start()
    {
        if (false !== strpos(\$this->getCommand(), ' -bs')) {
            parent::start();
        }
    }

    /**
     * Set the command to invoke.
     *
     * If using -t mode you are strongly advised to include -oi or -i in the flags.
     * For example: /usr/sbin/sendmail -oi -t
     * Swift will append a -f<sender> flag if one is not present.
     *
     * The recommended mode is \"-bs\" since it is interactive and failure notifications
     * are hence possible.
     *
     * @param string \$command
     *
     * @return \$this
     */
    public function setCommand(\$command)
    {
        \$this->params['command'] = \$command;

        return \$this;
    }

    /**
     * Get the sendmail command which will be invoked.
     *
     * @return string
     */
    public function getCommand()
    {
        return \$this->params['command'];
    }

    /**
     * Send the given Message.
     *
     * Recipient/sender data will be retrieved from the Message API.
     *
     * The return value is the number of recipients who were accepted for delivery.
     * NOTE: If using 'sendmail -t' you will not be aware of any failures until
     * they bounce (i.e. send() will always return 100% success).
     *
     * @param string[] \$failedRecipients An array of failures by-reference
     *
     * @return int
     */
    public function send(Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        \$failedRecipients = (array) \$failedRecipients;
        \$command = \$this->getCommand();
        \$buffer = \$this->getBuffer();
        \$count = 0;

        if (false !== strpos(\$command, ' -t')) {
            if (\$evt = \$this->eventDispatcher->createSendEvent(\$this, \$message)) {
                \$this->eventDispatcher->dispatchEvent(\$evt, 'beforeSendPerformed');
                if (\$evt->bubbleCancelled()) {
                    return 0;
                }
            }

            if (false === strpos(\$command, ' -f')) {
                \$command .= ' -f'.escapeshellarg(\$this->getReversePath(\$message));
            }

            \$buffer->initialize(array_merge(\$this->params, ['command' => \$command]));

            if (false === strpos(\$command, ' -i') && false === strpos(\$command, ' -oi')) {
                \$buffer->setWriteTranslations([\"\\r\\n\" => \"\\n\", \"\\n.\" => \"\\n..\"]);
            } else {
                \$buffer->setWriteTranslations([\"\\r\\n\" => \"\\n\"]);
            }

            \$count = count((array) \$message->getTo())
                + count((array) \$message->getCc())
                + count((array) \$message->getBcc())
                ;
            \$message->toByteStream(\$buffer);
            \$buffer->flushBuffers();
            \$buffer->setWriteTranslations([]);
            \$buffer->terminate();

            if (\$evt) {
                \$evt->setResult(Swift_Events_SendEvent::RESULT_SUCCESS);
                \$evt->setFailedRecipients(\$failedRecipients);
                \$this->eventDispatcher->dispatchEvent(\$evt, 'sendPerformed');
            }

            \$message->generateId();
        } elseif (false !== strpos(\$command, ' -bs')) {
            \$count = parent::send(\$message, \$failedRecipients);
        } else {
            \$this->throwException(new Swift_TransportException(
                'Unsupported sendmail command flags ['.\$command.']. '.
                'Must be one of \"-bs\" or \"-t\" but can include additional flags.'
                ));
        }

        return \$count;
    }

    /** Get the params to initialize the buffer */
    protected function getBufferParams()
    {
        return \$this->params;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SendmailTransport.php";
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
 * SendmailTransport for sending mail through a Sendmail/Postfix (etc..) binary.
 *
 * Supported modes are -bs and -t, with any additional flags desired.
 * It is advised to use -bs mode since error reporting with -t mode is not
 * possible.
 *
 * @author Chris Corbyn
 */
class Swift_Transport_SendmailTransport extends Swift_Transport_AbstractSmtpTransport
{
    /**
     * Connection buffer parameters.
     *
     * @var array
     */
    private \$params = [
        'timeout' => 30,
        'blocking' => 1,
        'command' => '/usr/sbin/sendmail -bs',
        'type' => Swift_Transport_IoBuffer::TYPE_PROCESS,
        ];

    /**
     * Create a new SendmailTransport with \$buf for I/O.
     *
     * @param string \$localDomain
     */
    public function __construct(Swift_Transport_IoBuffer \$buf, Swift_Events_EventDispatcher \$dispatcher, \$localDomain = '127.0.0.1', Swift_AddressEncoder \$addressEncoder = null)
    {
        parent::__construct(\$buf, \$dispatcher, \$localDomain, \$addressEncoder);
    }

    /**
     * Start the standalone SMTP session if running in -bs mode.
     */
    public function start()
    {
        if (false !== strpos(\$this->getCommand(), ' -bs')) {
            parent::start();
        }
    }

    /**
     * Set the command to invoke.
     *
     * If using -t mode you are strongly advised to include -oi or -i in the flags.
     * For example: /usr/sbin/sendmail -oi -t
     * Swift will append a -f<sender> flag if one is not present.
     *
     * The recommended mode is \"-bs\" since it is interactive and failure notifications
     * are hence possible.
     *
     * @param string \$command
     *
     * @return \$this
     */
    public function setCommand(\$command)
    {
        \$this->params['command'] = \$command;

        return \$this;
    }

    /**
     * Get the sendmail command which will be invoked.
     *
     * @return string
     */
    public function getCommand()
    {
        return \$this->params['command'];
    }

    /**
     * Send the given Message.
     *
     * Recipient/sender data will be retrieved from the Message API.
     *
     * The return value is the number of recipients who were accepted for delivery.
     * NOTE: If using 'sendmail -t' you will not be aware of any failures until
     * they bounce (i.e. send() will always return 100% success).
     *
     * @param string[] \$failedRecipients An array of failures by-reference
     *
     * @return int
     */
    public function send(Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        \$failedRecipients = (array) \$failedRecipients;
        \$command = \$this->getCommand();
        \$buffer = \$this->getBuffer();
        \$count = 0;

        if (false !== strpos(\$command, ' -t')) {
            if (\$evt = \$this->eventDispatcher->createSendEvent(\$this, \$message)) {
                \$this->eventDispatcher->dispatchEvent(\$evt, 'beforeSendPerformed');
                if (\$evt->bubbleCancelled()) {
                    return 0;
                }
            }

            if (false === strpos(\$command, ' -f')) {
                \$command .= ' -f'.escapeshellarg(\$this->getReversePath(\$message));
            }

            \$buffer->initialize(array_merge(\$this->params, ['command' => \$command]));

            if (false === strpos(\$command, ' -i') && false === strpos(\$command, ' -oi')) {
                \$buffer->setWriteTranslations([\"\\r\\n\" => \"\\n\", \"\\n.\" => \"\\n..\"]);
            } else {
                \$buffer->setWriteTranslations([\"\\r\\n\" => \"\\n\"]);
            }

            \$count = count((array) \$message->getTo())
                + count((array) \$message->getCc())
                + count((array) \$message->getBcc())
                ;
            \$message->toByteStream(\$buffer);
            \$buffer->flushBuffers();
            \$buffer->setWriteTranslations([]);
            \$buffer->terminate();

            if (\$evt) {
                \$evt->setResult(Swift_Events_SendEvent::RESULT_SUCCESS);
                \$evt->setFailedRecipients(\$failedRecipients);
                \$this->eventDispatcher->dispatchEvent(\$evt, 'sendPerformed');
            }

            \$message->generateId();
        } elseif (false !== strpos(\$command, ' -bs')) {
            \$count = parent::send(\$message, \$failedRecipients);
        } else {
            \$this->throwException(new Swift_TransportException(
                'Unsupported sendmail command flags ['.\$command.']. '.
                'Must be one of \"-bs\" or \"-t\" but can include additional flags.'
                ));
        }

        return \$count;
    }

    /** Get the params to initialize the buffer */
    protected function getBufferParams()
    {
        return \$this->params;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SendmailTransport.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SendmailTransport.php");
    }
}
