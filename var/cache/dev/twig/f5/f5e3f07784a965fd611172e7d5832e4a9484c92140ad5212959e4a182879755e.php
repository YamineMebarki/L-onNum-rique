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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php */
class __TwigTemplate_85eee56af0a287bc8fad19016c6986bbfdc171ea60045d82ec747eb412eb640e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2011 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Stores Messages in memory.
 *
 * @author Fabien Potencier
 */
class Swift_MemorySpool implements Swift_Spool
{
    protected \$messages = [];
    private \$flushRetries = 3;

    /**
     * Tests if this Transport mechanism has started.
     *
     * @return bool
     */
    public function isStarted()
    {
        return true;
    }

    /**
     * Starts this Transport mechanism.
     */
    public function start()
    {
    }

    /**
     * Stops this Transport mechanism.
     */
    public function stop()
    {
    }

    /**
     * @param int \$retries
     */
    public function setFlushRetries(\$retries)
    {
        \$this->flushRetries = \$retries;
    }

    /**
     * Stores a message in the queue.
     *
     * @param Swift_Mime_SimpleMessage \$message The message to store
     *
     * @return bool Whether the operation has succeeded
     */
    public function queueMessage(Swift_Mime_SimpleMessage \$message)
    {
        //clone the message to make sure it is not changed while in the queue
        \$this->messages[] = clone \$message;

        return true;
    }

    /**
     * Sends messages using the given transport instance.
     *
     * @param Swift_Transport \$transport        A transport instance
     * @param string[]        \$failedRecipients An array of failures by-reference
     *
     * @return int The number of sent emails
     */
    public function flushQueue(Swift_Transport \$transport, &\$failedRecipients = null)
    {
        if (!\$this->messages) {
            return 0;
        }

        if (!\$transport->isStarted()) {
            \$transport->start();
        }

        \$count = 0;
        \$retries = \$this->flushRetries;
        while (\$retries--) {
            try {
                while (\$message = array_pop(\$this->messages)) {
                    \$count += \$transport->send(\$message, \$failedRecipients);
                }
            } catch (Swift_TransportException \$exception) {
                if (\$retries) {
                    // re-queue the message at the end of the queue to give a chance
                    // to the other messages to be sent, in case the failure was due to
                    // this message and not just the transport failing
                    array_unshift(\$this->messages, \$message);

                    // wait half a second before we try again
                    usleep(500000);
                } else {
                    throw \$exception;
                }
            }
        }

        return \$count;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php";
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
 * (c) 2011 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Stores Messages in memory.
 *
 * @author Fabien Potencier
 */
class Swift_MemorySpool implements Swift_Spool
{
    protected \$messages = [];
    private \$flushRetries = 3;

    /**
     * Tests if this Transport mechanism has started.
     *
     * @return bool
     */
    public function isStarted()
    {
        return true;
    }

    /**
     * Starts this Transport mechanism.
     */
    public function start()
    {
    }

    /**
     * Stops this Transport mechanism.
     */
    public function stop()
    {
    }

    /**
     * @param int \$retries
     */
    public function setFlushRetries(\$retries)
    {
        \$this->flushRetries = \$retries;
    }

    /**
     * Stores a message in the queue.
     *
     * @param Swift_Mime_SimpleMessage \$message The message to store
     *
     * @return bool Whether the operation has succeeded
     */
    public function queueMessage(Swift_Mime_SimpleMessage \$message)
    {
        //clone the message to make sure it is not changed while in the queue
        \$this->messages[] = clone \$message;

        return true;
    }

    /**
     * Sends messages using the given transport instance.
     *
     * @param Swift_Transport \$transport        A transport instance
     * @param string[]        \$failedRecipients An array of failures by-reference
     *
     * @return int The number of sent emails
     */
    public function flushQueue(Swift_Transport \$transport, &\$failedRecipients = null)
    {
        if (!\$this->messages) {
            return 0;
        }

        if (!\$transport->isStarted()) {
            \$transport->start();
        }

        \$count = 0;
        \$retries = \$this->flushRetries;
        while (\$retries--) {
            try {
                while (\$message = array_pop(\$this->messages)) {
                    \$count += \$transport->send(\$message, \$failedRecipients);
                }
            } catch (Swift_TransportException \$exception) {
                if (\$retries) {
                    // re-queue the message at the end of the queue to give a chance
                    // to the other messages to be sent, in case the failure was due to
                    // this message and not just the transport failing
                    array_unshift(\$this->messages, \$message);

                    // wait half a second before we try again
                    usleep(500000);
                } else {
                    throw \$exception;
                }
            }
        }

        return \$count;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php");
    }
}
