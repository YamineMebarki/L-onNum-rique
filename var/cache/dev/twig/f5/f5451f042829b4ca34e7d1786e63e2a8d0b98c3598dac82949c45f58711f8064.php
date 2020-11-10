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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/NullTransport.php */
class __TwigTemplate_46483bd7ded9eac872346a4b5f641c747eda720966d2d28e9be5f661973c3249 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/NullTransport.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/NullTransport.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2009 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Pretends messages have been sent, but just ignores them.
 *
 * @author Fabien Potencier
 */
class Swift_Transport_NullTransport implements Swift_Transport
{
    /** The event dispatcher from the plugin API */
    private \$eventDispatcher;

    /**
     * Constructor.
     */
    public function __construct(Swift_Events_EventDispatcher \$eventDispatcher)
    {
        \$this->eventDispatcher = \$eventDispatcher;
    }

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
     * {@inheritdoc}
     */
    public function ping()
    {
        return true;
    }

    /**
     * Sends the given message.
     *
     * @param string[] \$failedRecipients An array of failures by-reference
     *
     * @return int The number of sent emails
     */
    public function send(Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        if (\$evt = \$this->eventDispatcher->createSendEvent(\$this, \$message)) {
            \$this->eventDispatcher->dispatchEvent(\$evt, 'beforeSendPerformed');
            if (\$evt->bubbleCancelled()) {
                return 0;
            }
        }

        if (\$evt) {
            \$evt->setResult(Swift_Events_SendEvent::RESULT_SUCCESS);
            \$this->eventDispatcher->dispatchEvent(\$evt, 'sendPerformed');
        }

        \$count = (
            count((array) \$message->getTo())
            + count((array) \$message->getCc())
            + count((array) \$message->getBcc())
            );

        return \$count;
    }

    /**
     * Register a plugin.
     */
    public function registerPlugin(Swift_Events_EventListener \$plugin)
    {
        \$this->eventDispatcher->bindEventListener(\$plugin);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/NullTransport.php";
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
 * (c) 2009 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Pretends messages have been sent, but just ignores them.
 *
 * @author Fabien Potencier
 */
class Swift_Transport_NullTransport implements Swift_Transport
{
    /** The event dispatcher from the plugin API */
    private \$eventDispatcher;

    /**
     * Constructor.
     */
    public function __construct(Swift_Events_EventDispatcher \$eventDispatcher)
    {
        \$this->eventDispatcher = \$eventDispatcher;
    }

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
     * {@inheritdoc}
     */
    public function ping()
    {
        return true;
    }

    /**
     * Sends the given message.
     *
     * @param string[] \$failedRecipients An array of failures by-reference
     *
     * @return int The number of sent emails
     */
    public function send(Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        if (\$evt = \$this->eventDispatcher->createSendEvent(\$this, \$message)) {
            \$this->eventDispatcher->dispatchEvent(\$evt, 'beforeSendPerformed');
            if (\$evt->bubbleCancelled()) {
                return 0;
            }
        }

        if (\$evt) {
            \$evt->setResult(Swift_Events_SendEvent::RESULT_SUCCESS);
            \$this->eventDispatcher->dispatchEvent(\$evt, 'sendPerformed');
        }

        \$count = (
            count((array) \$message->getTo())
            + count((array) \$message->getCc())
            + count((array) \$message->getBcc())
            );

        return \$count;
    }

    /**
     * Register a plugin.
     */
    public function registerPlugin(Swift_Events_EventListener \$plugin)
    {
        \$this->eventDispatcher->bindEventListener(\$plugin);
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/NullTransport.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/NullTransport.php");
    }
}
