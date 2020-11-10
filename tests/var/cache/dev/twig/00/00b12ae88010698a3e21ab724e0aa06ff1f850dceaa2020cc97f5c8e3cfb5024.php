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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpHandler.php */
class __TwigTemplate_b16ae8ea2ac97a2412070743de86df48443206c34592abf3d9e3e2ad854ef68e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpHandler.php"));

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
 * An ESMTP handler.
 *
 * @author Chris Corbyn
 */
interface Swift_Transport_EsmtpHandler
{
    /**
     * Get the name of the ESMTP extension this handles.
     *
     * @return string
     */
    public function getHandledKeyword();

    /**
     * Set the parameters which the EHLO greeting indicated.
     *
     * @param string[] \$parameters
     */
    public function setKeywordParams(array \$parameters);

    /**
     * Runs immediately after a EHLO has been issued.
     *
     * @param Swift_Transport_SmtpAgent \$agent to read/write
     */
    public function afterEhlo(Swift_Transport_SmtpAgent \$agent);

    /**
     * Get params which are appended to MAIL FROM:<>.
     *
     * @return string[]
     */
    public function getMailParams();

    /**
     * Get params which are appended to RCPT TO:<>.
     *
     * @return string[]
     */
    public function getRcptParams();

    /**
     * Runs when a command is due to be sent.
     *
     * @param Swift_Transport_SmtpAgent \$agent            to read/write
     * @param string                    \$command          to send
     * @param int[]                     \$codes            expected in response
     * @param string[]                  \$failedRecipients to collect failures
     * @param bool                      \$stop             to be set true  by-reference if the command is now sent
     */
    public function onCommand(Swift_Transport_SmtpAgent \$agent, \$command, \$codes = [], &\$failedRecipients = null, &\$stop = false);

    /**
     * Returns +1, -1 or 0 according to the rules for usort().
     *
     * This method is called to ensure extensions can be execute in an appropriate order.
     *
     * @param string \$esmtpKeyword to compare with
     *
     * @return int
     */
    public function getPriorityOver(\$esmtpKeyword);

    /**
     * Returns an array of method names which are exposed to the Esmtp class.
     *
     * @return string[]
     */
    public function exposeMixinMethods();

    /**
     * Tells this handler to clear any buffers and reset its state.
     */
    public function resetState();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpHandler.php";
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
 * An ESMTP handler.
 *
 * @author Chris Corbyn
 */
interface Swift_Transport_EsmtpHandler
{
    /**
     * Get the name of the ESMTP extension this handles.
     *
     * @return string
     */
    public function getHandledKeyword();

    /**
     * Set the parameters which the EHLO greeting indicated.
     *
     * @param string[] \$parameters
     */
    public function setKeywordParams(array \$parameters);

    /**
     * Runs immediately after a EHLO has been issued.
     *
     * @param Swift_Transport_SmtpAgent \$agent to read/write
     */
    public function afterEhlo(Swift_Transport_SmtpAgent \$agent);

    /**
     * Get params which are appended to MAIL FROM:<>.
     *
     * @return string[]
     */
    public function getMailParams();

    /**
     * Get params which are appended to RCPT TO:<>.
     *
     * @return string[]
     */
    public function getRcptParams();

    /**
     * Runs when a command is due to be sent.
     *
     * @param Swift_Transport_SmtpAgent \$agent            to read/write
     * @param string                    \$command          to send
     * @param int[]                     \$codes            expected in response
     * @param string[]                  \$failedRecipients to collect failures
     * @param bool                      \$stop             to be set true  by-reference if the command is now sent
     */
    public function onCommand(Swift_Transport_SmtpAgent \$agent, \$command, \$codes = [], &\$failedRecipients = null, &\$stop = false);

    /**
     * Returns +1, -1 or 0 according to the rules for usort().
     *
     * This method is called to ensure extensions can be execute in an appropriate order.
     *
     * @param string \$esmtpKeyword to compare with
     *
     * @return int
     */
    public function getPriorityOver(\$esmtpKeyword);

    /**
     * Returns an array of method names which are exposed to the Esmtp class.
     *
     * @return string[]
     */
    public function exposeMixinMethods();

    /**
     * Tells this handler to clear any buffers and reset its state.
     */
    public function resetState();
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpHandler.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpHandler.php");
    }
}
