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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ImpersonatePlugin.php */
class __TwigTemplate_c77a509b8b6c93ac15608f754fbe59d7d91d16c293d0802e511394e983e71f7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ImpersonatePlugin.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ImpersonatePlugin.php"));

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
 * Replaces the sender of a message.
 *
 * @author Arjen Brouwer
 */
class Swift_Plugins_ImpersonatePlugin implements Swift_Events_SendListener
{
    /**
     * The sender to impersonate.
     *
     * @var string
     */
    private \$sender;

    /**
     * Create a new ImpersonatePlugin to impersonate \$sender.
     *
     * @param string \$sender address
     */
    public function __construct(\$sender)
    {
        \$this->sender = \$sender;
    }

    /**
     * Invoked immediately before the Message is sent.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$message = \$evt->getMessage();
        \$headers = \$message->getHeaders();

        // save current recipients
        \$headers->addPathHeader('X-Swift-Return-Path', \$message->getReturnPath());

        // replace them with the one to send to
        \$message->setReturnPath(\$this->sender);
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$message = \$evt->getMessage();

        // restore original headers
        \$headers = \$message->getHeaders();

        if (\$headers->has('X-Swift-Return-Path')) {
            \$message->setReturnPath(\$headers->get('X-Swift-Return-Path')->getAddress());
            \$headers->removeAll('X-Swift-Return-Path');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ImpersonatePlugin.php";
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
 * Replaces the sender of a message.
 *
 * @author Arjen Brouwer
 */
class Swift_Plugins_ImpersonatePlugin implements Swift_Events_SendListener
{
    /**
     * The sender to impersonate.
     *
     * @var string
     */
    private \$sender;

    /**
     * Create a new ImpersonatePlugin to impersonate \$sender.
     *
     * @param string \$sender address
     */
    public function __construct(\$sender)
    {
        \$this->sender = \$sender;
    }

    /**
     * Invoked immediately before the Message is sent.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$message = \$evt->getMessage();
        \$headers = \$message->getHeaders();

        // save current recipients
        \$headers->addPathHeader('X-Swift-Return-Path', \$message->getReturnPath());

        // replace them with the one to send to
        \$message->setReturnPath(\$this->sender);
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$message = \$evt->getMessage();

        // restore original headers
        \$headers = \$message->getHeaders();

        if (\$headers->has('X-Swift-Return-Path')) {
            \$message->setReturnPath(\$headers->get('X-Swift-Return-Path')->getAddress());
            \$headers->removeAll('X-Swift-Return-Path');
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ImpersonatePlugin.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ImpersonatePlugin.php");
    }
}
