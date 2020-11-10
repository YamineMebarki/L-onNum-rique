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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/BandwidthMonitorPlugin.php */
class __TwigTemplate_bdf171cbd77d8db07848cf1bb3b90796612a77059e91a1bf55e3cd9d06b5a9f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/BandwidthMonitorPlugin.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/BandwidthMonitorPlugin.php"));

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
 * Reduces network flooding when sending large amounts of mail.
 *
 * @author Chris Corbyn
 */
class Swift_Plugins_BandwidthMonitorPlugin implements Swift_Events_SendListener, Swift_Events_CommandListener, Swift_Events_ResponseListener, Swift_InputByteStream
{
    /**
     * The outgoing traffic counter.
     *
     * @var int
     */
    private \$out = 0;

    /**
     * The incoming traffic counter.
     *
     * @var int
     */
    private \$in = 0;

    /** Bound byte streams */
    private \$mirrors = [];

    /**
     * Not used.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$message = \$evt->getMessage();
        \$message->toByteStream(\$this);
    }

    /**
     * Invoked immediately following a command being sent.
     */
    public function commandSent(Swift_Events_CommandEvent \$evt)
    {
        \$command = \$evt->getCommand();
        \$this->out += strlen(\$command);
    }

    /**
     * Invoked immediately following a response coming back.
     */
    public function responseReceived(Swift_Events_ResponseEvent \$evt)
    {
        \$response = \$evt->getResponse();
        \$this->in += strlen(\$response);
    }

    /**
     * Called when a message is sent so that the outgoing counter can be increased.
     *
     * @param string \$bytes
     */
    public function write(\$bytes)
    {
        \$this->out += strlen(\$bytes);
        foreach (\$this->mirrors as \$stream) {
            \$stream->write(\$bytes);
        }
    }

    /**
     * Not used.
     */
    public function commit()
    {
    }

    /**
     * Attach \$is to this stream.
     *
     * The stream acts as an observer, receiving all data that is written.
     * All {@link write()} and {@link flushBuffers()} operations will be mirrored.
     */
    public function bind(Swift_InputByteStream \$is)
    {
        \$this->mirrors[] = \$is;
    }

    /**
     * Remove an already bound stream.
     *
     * If \$is is not bound, no errors will be raised.
     * If the stream currently has any buffered data it will be written to \$is
     * before unbinding occurs.
     */
    public function unbind(Swift_InputByteStream \$is)
    {
        foreach (\$this->mirrors as \$k => \$stream) {
            if (\$is === \$stream) {
                unset(\$this->mirrors[\$k]);
            }
        }
    }

    /**
     * Not used.
     */
    public function flushBuffers()
    {
        foreach (\$this->mirrors as \$stream) {
            \$stream->flushBuffers();
        }
    }

    /**
     * Get the total number of bytes sent to the server.
     *
     * @return int
     */
    public function getBytesOut()
    {
        return \$this->out;
    }

    /**
     * Get the total number of bytes received from the server.
     *
     * @return int
     */
    public function getBytesIn()
    {
        return \$this->in;
    }

    /**
     * Reset the internal counters to zero.
     */
    public function reset()
    {
        \$this->out = 0;
        \$this->in = 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/BandwidthMonitorPlugin.php";
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
 * Reduces network flooding when sending large amounts of mail.
 *
 * @author Chris Corbyn
 */
class Swift_Plugins_BandwidthMonitorPlugin implements Swift_Events_SendListener, Swift_Events_CommandListener, Swift_Events_ResponseListener, Swift_InputByteStream
{
    /**
     * The outgoing traffic counter.
     *
     * @var int
     */
    private \$out = 0;

    /**
     * The incoming traffic counter.
     *
     * @var int
     */
    private \$in = 0;

    /** Bound byte streams */
    private \$mirrors = [];

    /**
     * Not used.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$message = \$evt->getMessage();
        \$message->toByteStream(\$this);
    }

    /**
     * Invoked immediately following a command being sent.
     */
    public function commandSent(Swift_Events_CommandEvent \$evt)
    {
        \$command = \$evt->getCommand();
        \$this->out += strlen(\$command);
    }

    /**
     * Invoked immediately following a response coming back.
     */
    public function responseReceived(Swift_Events_ResponseEvent \$evt)
    {
        \$response = \$evt->getResponse();
        \$this->in += strlen(\$response);
    }

    /**
     * Called when a message is sent so that the outgoing counter can be increased.
     *
     * @param string \$bytes
     */
    public function write(\$bytes)
    {
        \$this->out += strlen(\$bytes);
        foreach (\$this->mirrors as \$stream) {
            \$stream->write(\$bytes);
        }
    }

    /**
     * Not used.
     */
    public function commit()
    {
    }

    /**
     * Attach \$is to this stream.
     *
     * The stream acts as an observer, receiving all data that is written.
     * All {@link write()} and {@link flushBuffers()} operations will be mirrored.
     */
    public function bind(Swift_InputByteStream \$is)
    {
        \$this->mirrors[] = \$is;
    }

    /**
     * Remove an already bound stream.
     *
     * If \$is is not bound, no errors will be raised.
     * If the stream currently has any buffered data it will be written to \$is
     * before unbinding occurs.
     */
    public function unbind(Swift_InputByteStream \$is)
    {
        foreach (\$this->mirrors as \$k => \$stream) {
            if (\$is === \$stream) {
                unset(\$this->mirrors[\$k]);
            }
        }
    }

    /**
     * Not used.
     */
    public function flushBuffers()
    {
        foreach (\$this->mirrors as \$stream) {
            \$stream->flushBuffers();
        }
    }

    /**
     * Get the total number of bytes sent to the server.
     *
     * @return int
     */
    public function getBytesOut()
    {
        return \$this->out;
    }

    /**
     * Get the total number of bytes received from the server.
     *
     * @return int
     */
    public function getBytesIn()
    {
        return \$this->in;
    }

    /**
     * Reset the internal counters to zero.
     */
    public function reset()
    {
        \$this->out = 0;
        \$this->in = 0;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/BandwidthMonitorPlugin.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/BandwidthMonitorPlugin.php");
    }
}
