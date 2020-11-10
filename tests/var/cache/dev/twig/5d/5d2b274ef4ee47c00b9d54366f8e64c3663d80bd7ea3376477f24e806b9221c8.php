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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/RedirectingPlugin.php */
class __TwigTemplate_071a24e67ba0e5eba592d5c4474271774c14459d9cc7c34d2a28eb29d71bfb0a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/RedirectingPlugin.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/RedirectingPlugin.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Redirects all email to a single recipient.
 *
 * @author     Fabien Potencier
 */
class Swift_Plugins_RedirectingPlugin implements Swift_Events_SendListener
{
    /**
     * The recipient who will receive all messages.
     *
     * @var mixed
     */
    private \$recipient;

    /**
     * List of regular expression for recipient whitelisting.
     *
     * @var array
     */
    private \$whitelist = [];

    /**
     * Create a new RedirectingPlugin.
     *
     * @param mixed \$recipient
     */
    public function __construct(\$recipient, array \$whitelist = [])
    {
        \$this->recipient = \$recipient;
        \$this->whitelist = \$whitelist;
    }

    /**
     * Set the recipient of all messages.
     *
     * @param mixed \$recipient
     */
    public function setRecipient(\$recipient)
    {
        \$this->recipient = \$recipient;
    }

    /**
     * Get the recipient of all messages.
     *
     * @return mixed
     */
    public function getRecipient()
    {
        return \$this->recipient;
    }

    /**
     * Set a list of regular expressions to whitelist certain recipients.
     */
    public function setWhitelist(array \$whitelist)
    {
        \$this->whitelist = \$whitelist;
    }

    /**
     * Get the whitelist.
     *
     * @return array
     */
    public function getWhitelist()
    {
        return \$this->whitelist;
    }

    /**
     * Invoked immediately before the Message is sent.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$message = \$evt->getMessage();
        \$headers = \$message->getHeaders();

        // conditionally save current recipients

        if (\$headers->has('to')) {
            \$headers->addMailboxHeader('X-Swift-To', \$message->getTo());
        }

        if (\$headers->has('cc')) {
            \$headers->addMailboxHeader('X-Swift-Cc', \$message->getCc());
        }

        if (\$headers->has('bcc')) {
            \$headers->addMailboxHeader('X-Swift-Bcc', \$message->getBcc());
        }

        // Filter remaining headers against whitelist
        \$this->filterHeaderSet(\$headers, 'To');
        \$this->filterHeaderSet(\$headers, 'Cc');
        \$this->filterHeaderSet(\$headers, 'Bcc');

        // Add each hard coded recipient
        \$to = \$message->getTo();
        if (null === \$to) {
            \$to = [];
        }

        foreach ((array) \$this->recipient as \$recipient) {
            if (!array_key_exists(\$recipient, \$to)) {
                \$message->addTo(\$recipient);
            }
        }
    }

    /**
     * Filter header set against a whitelist of regular expressions.
     *
     * @param string \$type
     */
    private function filterHeaderSet(Swift_Mime_SimpleHeaderSet \$headerSet, \$type)
    {
        foreach (\$headerSet->getAll(\$type) as \$headers) {
            \$headers->setNameAddresses(\$this->filterNameAddresses(\$headers->getNameAddresses()));
        }
    }

    /**
     * Filtered list of addresses => name pairs.
     *
     * @return array
     */
    private function filterNameAddresses(array \$recipients)
    {
        \$filtered = [];

        foreach (\$recipients as \$address => \$name) {
            if (\$this->isWhitelisted(\$address)) {
                \$filtered[\$address] = \$name;
            }
        }

        return \$filtered;
    }

    /**
     * Matches address against whitelist of regular expressions.
     *
     * @return bool
     */
    protected function isWhitelisted(\$recipient)
    {
        if (in_array(\$recipient, (array) \$this->recipient)) {
            return true;
        }

        foreach (\$this->whitelist as \$pattern) {
            if (preg_match(\$pattern, \$recipient)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$this->restoreMessage(\$evt->getMessage());
    }

    private function restoreMessage(Swift_Mime_SimpleMessage \$message)
    {
        // restore original headers
        \$headers = \$message->getHeaders();

        if (\$headers->has('X-Swift-To')) {
            \$message->setTo(\$headers->get('X-Swift-To')->getNameAddresses());
            \$headers->removeAll('X-Swift-To');
        } else {
            \$message->setTo(null);
        }

        if (\$headers->has('X-Swift-Cc')) {
            \$message->setCc(\$headers->get('X-Swift-Cc')->getNameAddresses());
            \$headers->removeAll('X-Swift-Cc');
        }

        if (\$headers->has('X-Swift-Bcc')) {
            \$message->setBcc(\$headers->get('X-Swift-Bcc')->getNameAddresses());
            \$headers->removeAll('X-Swift-Bcc');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/RedirectingPlugin.php";
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
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Redirects all email to a single recipient.
 *
 * @author     Fabien Potencier
 */
class Swift_Plugins_RedirectingPlugin implements Swift_Events_SendListener
{
    /**
     * The recipient who will receive all messages.
     *
     * @var mixed
     */
    private \$recipient;

    /**
     * List of regular expression for recipient whitelisting.
     *
     * @var array
     */
    private \$whitelist = [];

    /**
     * Create a new RedirectingPlugin.
     *
     * @param mixed \$recipient
     */
    public function __construct(\$recipient, array \$whitelist = [])
    {
        \$this->recipient = \$recipient;
        \$this->whitelist = \$whitelist;
    }

    /**
     * Set the recipient of all messages.
     *
     * @param mixed \$recipient
     */
    public function setRecipient(\$recipient)
    {
        \$this->recipient = \$recipient;
    }

    /**
     * Get the recipient of all messages.
     *
     * @return mixed
     */
    public function getRecipient()
    {
        return \$this->recipient;
    }

    /**
     * Set a list of regular expressions to whitelist certain recipients.
     */
    public function setWhitelist(array \$whitelist)
    {
        \$this->whitelist = \$whitelist;
    }

    /**
     * Get the whitelist.
     *
     * @return array
     */
    public function getWhitelist()
    {
        return \$this->whitelist;
    }

    /**
     * Invoked immediately before the Message is sent.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$message = \$evt->getMessage();
        \$headers = \$message->getHeaders();

        // conditionally save current recipients

        if (\$headers->has('to')) {
            \$headers->addMailboxHeader('X-Swift-To', \$message->getTo());
        }

        if (\$headers->has('cc')) {
            \$headers->addMailboxHeader('X-Swift-Cc', \$message->getCc());
        }

        if (\$headers->has('bcc')) {
            \$headers->addMailboxHeader('X-Swift-Bcc', \$message->getBcc());
        }

        // Filter remaining headers against whitelist
        \$this->filterHeaderSet(\$headers, 'To');
        \$this->filterHeaderSet(\$headers, 'Cc');
        \$this->filterHeaderSet(\$headers, 'Bcc');

        // Add each hard coded recipient
        \$to = \$message->getTo();
        if (null === \$to) {
            \$to = [];
        }

        foreach ((array) \$this->recipient as \$recipient) {
            if (!array_key_exists(\$recipient, \$to)) {
                \$message->addTo(\$recipient);
            }
        }
    }

    /**
     * Filter header set against a whitelist of regular expressions.
     *
     * @param string \$type
     */
    private function filterHeaderSet(Swift_Mime_SimpleHeaderSet \$headerSet, \$type)
    {
        foreach (\$headerSet->getAll(\$type) as \$headers) {
            \$headers->setNameAddresses(\$this->filterNameAddresses(\$headers->getNameAddresses()));
        }
    }

    /**
     * Filtered list of addresses => name pairs.
     *
     * @return array
     */
    private function filterNameAddresses(array \$recipients)
    {
        \$filtered = [];

        foreach (\$recipients as \$address => \$name) {
            if (\$this->isWhitelisted(\$address)) {
                \$filtered[\$address] = \$name;
            }
        }

        return \$filtered;
    }

    /**
     * Matches address against whitelist of regular expressions.
     *
     * @return bool
     */
    protected function isWhitelisted(\$recipient)
    {
        if (in_array(\$recipient, (array) \$this->recipient)) {
            return true;
        }

        foreach (\$this->whitelist as \$pattern) {
            if (preg_match(\$pattern, \$recipient)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$this->restoreMessage(\$evt->getMessage());
    }

    private function restoreMessage(Swift_Mime_SimpleMessage \$message)
    {
        // restore original headers
        \$headers = \$message->getHeaders();

        if (\$headers->has('X-Swift-To')) {
            \$message->setTo(\$headers->get('X-Swift-To')->getNameAddresses());
            \$headers->removeAll('X-Swift-To');
        } else {
            \$message->setTo(null);
        }

        if (\$headers->has('X-Swift-Cc')) {
            \$message->setCc(\$headers->get('X-Swift-Cc')->getNameAddresses());
            \$headers->removeAll('X-Swift-Cc');
        }

        if (\$headers->has('X-Swift-Bcc')) {
            \$message->setBcc(\$headers->get('X-Swift-Bcc')->getNameAddresses());
            \$headers->removeAll('X-Swift-Bcc');
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/RedirectingPlugin.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/RedirectingPlugin.php");
    }
}
