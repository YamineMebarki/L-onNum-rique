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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendEvent.php */
class __TwigTemplate_7243e19c39776405b0c4b803624f8bab49580ffb5845d257bb63000b1527b5f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendEvent.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendEvent.php"));

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
 * Generated when a message is being sent.
 *
 * @author Chris Corbyn
 */
class Swift_Events_SendEvent extends Swift_Events_EventObject
{
    /** Sending has yet to occur */
    const RESULT_PENDING = 0x0001;

    /** Email is spooled, ready to be sent */
    const RESULT_SPOOLED = 0x0011;

    /** Sending was successful */
    const RESULT_SUCCESS = 0x0010;

    /** Sending worked, but there were some failures */
    const RESULT_TENTATIVE = 0x0100;

    /** Sending failed */
    const RESULT_FAILED = 0x1000;

    /**
     * The Message being sent.
     *
     * @var Swift_Mime_SimpleMessage
     */
    private \$message;

    /**
     * Any recipients which failed after sending.
     *
     * @var string[]
     */
    private \$failedRecipients = [];

    /**
     * The overall result as a bitmask from the class constants.
     *
     * @var int
     */
    private \$result;

    /**
     * Create a new SendEvent for \$source and \$message.
     */
    public function __construct(Swift_Transport \$source, Swift_Mime_SimpleMessage \$message)
    {
        parent::__construct(\$source);
        \$this->message = \$message;
        \$this->result = self::RESULT_PENDING;
    }

    /**
     * Get the Transport used to send the Message.
     *
     * @return Swift_Transport
     */
    public function getTransport()
    {
        return \$this->getSource();
    }

    /**
     * Get the Message being sent.
     *
     * @return Swift_Mime_SimpleMessage
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * Set the array of addresses that failed in sending.
     *
     * @param array \$recipients
     */
    public function setFailedRecipients(\$recipients)
    {
        \$this->failedRecipients = \$recipients;
    }

    /**
     * Get an recipient addresses which were not accepted for delivery.
     *
     * @return string[]
     */
    public function getFailedRecipients()
    {
        return \$this->failedRecipients;
    }

    /**
     * Set the result of sending.
     *
     * @param int \$result
     */
    public function setResult(\$result)
    {
        \$this->result = \$result;
    }

    /**
     * Get the result of this Event.
     *
     * The return value is a bitmask from
     * {@see RESULT_PENDING, RESULT_SUCCESS, RESULT_TENTATIVE, RESULT_FAILED}
     *
     * @return int
     */
    public function getResult()
    {
        return \$this->result;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendEvent.php";
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
 * Generated when a message is being sent.
 *
 * @author Chris Corbyn
 */
class Swift_Events_SendEvent extends Swift_Events_EventObject
{
    /** Sending has yet to occur */
    const RESULT_PENDING = 0x0001;

    /** Email is spooled, ready to be sent */
    const RESULT_SPOOLED = 0x0011;

    /** Sending was successful */
    const RESULT_SUCCESS = 0x0010;

    /** Sending worked, but there were some failures */
    const RESULT_TENTATIVE = 0x0100;

    /** Sending failed */
    const RESULT_FAILED = 0x1000;

    /**
     * The Message being sent.
     *
     * @var Swift_Mime_SimpleMessage
     */
    private \$message;

    /**
     * Any recipients which failed after sending.
     *
     * @var string[]
     */
    private \$failedRecipients = [];

    /**
     * The overall result as a bitmask from the class constants.
     *
     * @var int
     */
    private \$result;

    /**
     * Create a new SendEvent for \$source and \$message.
     */
    public function __construct(Swift_Transport \$source, Swift_Mime_SimpleMessage \$message)
    {
        parent::__construct(\$source);
        \$this->message = \$message;
        \$this->result = self::RESULT_PENDING;
    }

    /**
     * Get the Transport used to send the Message.
     *
     * @return Swift_Transport
     */
    public function getTransport()
    {
        return \$this->getSource();
    }

    /**
     * Get the Message being sent.
     *
     * @return Swift_Mime_SimpleMessage
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * Set the array of addresses that failed in sending.
     *
     * @param array \$recipients
     */
    public function setFailedRecipients(\$recipients)
    {
        \$this->failedRecipients = \$recipients;
    }

    /**
     * Get an recipient addresses which were not accepted for delivery.
     *
     * @return string[]
     */
    public function getFailedRecipients()
    {
        return \$this->failedRecipients;
    }

    /**
     * Set the result of sending.
     *
     * @param int \$result
     */
    public function setResult(\$result)
    {
        \$this->result = \$result;
    }

    /**
     * Get the result of this Event.
     *
     * The return value is a bitmask from
     * {@see RESULT_PENDING, RESULT_SUCCESS, RESULT_TENTATIVE, RESULT_FAILED}
     *
     * @return int
     */
    public function getResult()
    {
        return \$this->result;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendEvent.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendEvent.php");
    }
}
