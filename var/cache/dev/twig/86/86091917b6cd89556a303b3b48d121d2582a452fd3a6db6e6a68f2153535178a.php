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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php */
class __TwigTemplate_fedfd53f50f1c1e01f6a954d419e4ee5e744ef78f89549bc0e034cba3ac9f246 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php"));

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
 * Interface for spools.
 *
 * @author Fabien Potencier
 */
interface Swift_Spool
{
    /**
     * Starts this Spool mechanism.
     */
    public function start();

    /**
     * Stops this Spool mechanism.
     */
    public function stop();

    /**
     * Tests if this Spool mechanism has started.
     *
     * @return bool
     */
    public function isStarted();

    /**
     * Queues a message.
     *
     * @param Swift_Mime_SimpleMessage \$message The message to store
     *
     * @return bool Whether the operation has succeeded
     */
    public function queueMessage(Swift_Mime_SimpleMessage \$message);

    /**
     * Sends messages using the given transport instance.
     *
     * @param Swift_Transport \$transport        A transport instance
     * @param string[]        \$failedRecipients An array of failures by-reference
     *
     * @return int The number of sent emails
     */
    public function flushQueue(Swift_Transport \$transport, &\$failedRecipients = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php";
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
 * Interface for spools.
 *
 * @author Fabien Potencier
 */
interface Swift_Spool
{
    /**
     * Starts this Spool mechanism.
     */
    public function start();

    /**
     * Stops this Spool mechanism.
     */
    public function stop();

    /**
     * Tests if this Spool mechanism has started.
     *
     * @return bool
     */
    public function isStarted();

    /**
     * Queues a message.
     *
     * @param Swift_Mime_SimpleMessage \$message The message to store
     *
     * @return bool Whether the operation has succeeded
     */
    public function queueMessage(Swift_Mime_SimpleMessage \$message);

    /**
     * Sends messages using the given transport instance.
     *
     * @param Swift_Transport \$transport        A transport instance
     * @param string[]        \$failedRecipients An array of failures by-reference
     *
     * @return int The number of sent emails
     */
    public function flushQueue(Swift_Transport \$transport, &\$failedRecipients = null);
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php");
    }
}
