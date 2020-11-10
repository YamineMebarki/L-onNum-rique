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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ReporterPlugin.php */
class __TwigTemplate_afe47d030b0ddbf85ab818f89612a5637e58bbcba13adeb7f1438e20479e8016 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ReporterPlugin.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ReporterPlugin.php"));

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
 * Does real time reporting of pass/fail for each recipient.
 *
 * @author Chris Corbyn
 */
class Swift_Plugins_ReporterPlugin implements Swift_Events_SendListener
{
    /**
     * The reporter backend which takes notifications.
     *
     * @var Swift_Plugins_Reporter
     */
    private \$reporter;

    /**
     * Create a new ReporterPlugin using \$reporter.
     */
    public function __construct(Swift_Plugins_Reporter \$reporter)
    {
        \$this->reporter = \$reporter;
    }

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
        \$failures = array_flip(\$evt->getFailedRecipients());
        foreach ((array) \$message->getTo() as \$address => \$null) {
            \$this->reporter->notify(\$message, \$address, (array_key_exists(\$address, \$failures) ? Swift_Plugins_Reporter::RESULT_FAIL : Swift_Plugins_Reporter::RESULT_PASS));
        }
        foreach ((array) \$message->getCc() as \$address => \$null) {
            \$this->reporter->notify(\$message, \$address, (array_key_exists(\$address, \$failures) ? Swift_Plugins_Reporter::RESULT_FAIL : Swift_Plugins_Reporter::RESULT_PASS));
        }
        foreach ((array) \$message->getBcc() as \$address => \$null) {
            \$this->reporter->notify(\$message, \$address, (array_key_exists(\$address, \$failures) ? Swift_Plugins_Reporter::RESULT_FAIL : Swift_Plugins_Reporter::RESULT_PASS));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ReporterPlugin.php";
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
 * Does real time reporting of pass/fail for each recipient.
 *
 * @author Chris Corbyn
 */
class Swift_Plugins_ReporterPlugin implements Swift_Events_SendListener
{
    /**
     * The reporter backend which takes notifications.
     *
     * @var Swift_Plugins_Reporter
     */
    private \$reporter;

    /**
     * Create a new ReporterPlugin using \$reporter.
     */
    public function __construct(Swift_Plugins_Reporter \$reporter)
    {
        \$this->reporter = \$reporter;
    }

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
        \$failures = array_flip(\$evt->getFailedRecipients());
        foreach ((array) \$message->getTo() as \$address => \$null) {
            \$this->reporter->notify(\$message, \$address, (array_key_exists(\$address, \$failures) ? Swift_Plugins_Reporter::RESULT_FAIL : Swift_Plugins_Reporter::RESULT_PASS));
        }
        foreach ((array) \$message->getCc() as \$address => \$null) {
            \$this->reporter->notify(\$message, \$address, (array_key_exists(\$address, \$failures) ? Swift_Plugins_Reporter::RESULT_FAIL : Swift_Plugins_Reporter::RESULT_PASS));
        }
        foreach ((array) \$message->getBcc() as \$address => \$null) {
            \$this->reporter->notify(\$message, \$address, (array_key_exists(\$address, \$failures) ? Swift_Plugins_Reporter::RESULT_FAIL : Swift_Plugins_Reporter::RESULT_PASS));
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ReporterPlugin.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ReporterPlugin.php");
    }
}
