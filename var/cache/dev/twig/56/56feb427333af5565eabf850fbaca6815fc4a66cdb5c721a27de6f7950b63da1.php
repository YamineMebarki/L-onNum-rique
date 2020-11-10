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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/AntiFloodPlugin.php */
class __TwigTemplate_e987b6b3dd1417526474cbcfd6e99fb0228ffac88fba26f888b4068ecff61e9b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/AntiFloodPlugin.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/AntiFloodPlugin.php"));

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
class Swift_Plugins_AntiFloodPlugin implements Swift_Events_SendListener, Swift_Plugins_Sleeper
{
    /**
     * The number of emails to send before restarting Transport.
     *
     * @var int
     */
    private \$threshold;

    /**
     * The number of seconds to sleep for during a restart.
     *
     * @var int
     */
    private \$sleep;

    /**
     * The internal counter.
     *
     * @var int
     */
    private \$counter = 0;

    /**
     * The Sleeper instance for sleeping.
     *
     * @var Swift_Plugins_Sleeper
     */
    private \$sleeper;

    /**
     * Create a new AntiFloodPlugin with \$threshold and \$sleep time.
     *
     * @param int                   \$threshold
     * @param int                   \$sleep     time
     * @param Swift_Plugins_Sleeper \$sleeper   (not needed really)
     */
    public function __construct(\$threshold = 99, \$sleep = 0, Swift_Plugins_Sleeper \$sleeper = null)
    {
        \$this->setThreshold(\$threshold);
        \$this->setSleepTime(\$sleep);
        \$this->sleeper = \$sleeper;
    }

    /**
     * Set the number of emails to send before restarting.
     *
     * @param int \$threshold
     */
    public function setThreshold(\$threshold)
    {
        \$this->threshold = \$threshold;
    }

    /**
     * Get the number of emails to send before restarting.
     *
     * @return int
     */
    public function getThreshold()
    {
        return \$this->threshold;
    }

    /**
     * Set the number of seconds to sleep for during a restart.
     *
     * @param int \$sleep time
     */
    public function setSleepTime(\$sleep)
    {
        \$this->sleep = \$sleep;
    }

    /**
     * Get the number of seconds to sleep for during a restart.
     *
     * @return int
     */
    public function getSleepTime()
    {
        return \$this->sleep;
    }

    /**
     * Invoked immediately before the Message is sent.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
        ++\$this->counter;
        if (\$this->counter >= \$this->threshold) {
            \$transport = \$evt->getTransport();
            \$transport->stop();
            if (\$this->sleep) {
                \$this->sleep(\$this->sleep);
            }
            \$transport->start();
            \$this->counter = 0;
        }
    }

    /**
     * Sleep for \$seconds.
     *
     * @param int \$seconds
     */
    public function sleep(\$seconds)
    {
        if (isset(\$this->sleeper)) {
            \$this->sleeper->sleep(\$seconds);
        } else {
            sleep(\$seconds);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/AntiFloodPlugin.php";
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
class Swift_Plugins_AntiFloodPlugin implements Swift_Events_SendListener, Swift_Plugins_Sleeper
{
    /**
     * The number of emails to send before restarting Transport.
     *
     * @var int
     */
    private \$threshold;

    /**
     * The number of seconds to sleep for during a restart.
     *
     * @var int
     */
    private \$sleep;

    /**
     * The internal counter.
     *
     * @var int
     */
    private \$counter = 0;

    /**
     * The Sleeper instance for sleeping.
     *
     * @var Swift_Plugins_Sleeper
     */
    private \$sleeper;

    /**
     * Create a new AntiFloodPlugin with \$threshold and \$sleep time.
     *
     * @param int                   \$threshold
     * @param int                   \$sleep     time
     * @param Swift_Plugins_Sleeper \$sleeper   (not needed really)
     */
    public function __construct(\$threshold = 99, \$sleep = 0, Swift_Plugins_Sleeper \$sleeper = null)
    {
        \$this->setThreshold(\$threshold);
        \$this->setSleepTime(\$sleep);
        \$this->sleeper = \$sleeper;
    }

    /**
     * Set the number of emails to send before restarting.
     *
     * @param int \$threshold
     */
    public function setThreshold(\$threshold)
    {
        \$this->threshold = \$threshold;
    }

    /**
     * Get the number of emails to send before restarting.
     *
     * @return int
     */
    public function getThreshold()
    {
        return \$this->threshold;
    }

    /**
     * Set the number of seconds to sleep for during a restart.
     *
     * @param int \$sleep time
     */
    public function setSleepTime(\$sleep)
    {
        \$this->sleep = \$sleep;
    }

    /**
     * Get the number of seconds to sleep for during a restart.
     *
     * @return int
     */
    public function getSleepTime()
    {
        return \$this->sleep;
    }

    /**
     * Invoked immediately before the Message is sent.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
        ++\$this->counter;
        if (\$this->counter >= \$this->threshold) {
            \$transport = \$evt->getTransport();
            \$transport->stop();
            if (\$this->sleep) {
                \$this->sleep(\$this->sleep);
            }
            \$transport->start();
            \$this->counter = 0;
        }
    }

    /**
     * Sleep for \$seconds.
     *
     * @param int \$seconds
     */
    public function sleep(\$seconds)
    {
        if (isset(\$this->sleeper)) {
            \$this->sleeper->sleep(\$seconds);
        } else {
            sleep(\$seconds);
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/AntiFloodPlugin.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/AntiFloodPlugin.php");
    }
}
