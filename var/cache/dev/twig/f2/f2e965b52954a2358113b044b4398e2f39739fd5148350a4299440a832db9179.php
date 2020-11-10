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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php */
class __TwigTemplate_4bcecf62bbf0e5db6af8affb7ecf36ff5fe6aebb085bd37109d9d48ab286ce3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2011 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Stores all sent emails for further usage.
 *
 * @author Fabien Potencier
 */
class Swift_Plugins_MessageLogger implements Swift_Events_SendListener
{
    /**
     * @var Swift_Mime_SimpleMessage[]
     */
    private \$messages;

    public function __construct()
    {
        \$this->messages = [];
    }

    /**
     * Get the message list.
     *
     * @return Swift_Mime_SimpleMessage[]
     */
    public function getMessages()
    {
        return \$this->messages;
    }

    /**
     * Get the message count.
     *
     * @return int count
     */
    public function countMessages()
    {
        return count(\$this->messages);
    }

    /**
     * Empty the message list.
     */
    public function clear()
    {
        \$this->messages = [];
    }

    /**
     * Invoked immediately before the Message is sent.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$this->messages[] = clone \$evt->getMessage();
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php";
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
 * (c) 2011 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Stores all sent emails for further usage.
 *
 * @author Fabien Potencier
 */
class Swift_Plugins_MessageLogger implements Swift_Events_SendListener
{
    /**
     * @var Swift_Mime_SimpleMessage[]
     */
    private \$messages;

    public function __construct()
    {
        \$this->messages = [];
    }

    /**
     * Get the message list.
     *
     * @return Swift_Mime_SimpleMessage[]
     */
    public function getMessages()
    {
        return \$this->messages;
    }

    /**
     * Get the message count.
     *
     * @return int count
     */
    public function countMessages()
    {
        return count(\$this->messages);
    }

    /**
     * Empty the message list.
     */
    public function clear()
    {
        \$this->messages = [];
    }

    /**
     * Invoked immediately before the Message is sent.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$this->messages[] = clone \$evt->getMessage();
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php");
    }
}
