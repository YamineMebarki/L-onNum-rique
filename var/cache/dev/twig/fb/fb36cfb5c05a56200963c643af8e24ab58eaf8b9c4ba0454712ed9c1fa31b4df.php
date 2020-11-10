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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/SmtpUtf8Handler.php */
class __TwigTemplate_19efb3b1330f58a6810f31656cfea262bf805fea59d3dbc921a1ea87afb62e24 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/SmtpUtf8Handler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/SmtpUtf8Handler.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2018 Christian Schmidt
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * An ESMTP handler for SMTPUTF8 support (RFC 6531).
 *
 * SMTPUTF8 is required when sending to email addresses containing non-ASCII
 * characters in local-part (the substring before @). This handler should be
 * used together with Swift_AddressEncoder_Utf8AddressEncoder.
 *
 * SMTPUTF8 mode is enabled unconditionally, even when sending to ASCII-only
 * addresses, so it should only be used with an outbound SMTP server that will
 * deliver ASCII-only messages even if the next hop does not support SMTPUTF8.
 *
 * @author Christian Schmidt
 */
class Swift_Transport_Esmtp_SmtpUtf8Handler implements Swift_Transport_EsmtpHandler
{
    public function __construct()
    {
    }

    /**
     * Get the name of the ESMTP extension this handles.
     *
     * @return string
     */
    public function getHandledKeyword()
    {
        return 'SMTPUTF8';
    }

    /**
     * Not used.
     */
    public function setKeywordParams(array \$parameters)
    {
    }

    /**
     * Not used.
     */
    public function afterEhlo(Swift_Transport_SmtpAgent \$agent)
    {
    }

    /**
     * Get params which are appended to MAIL FROM:<>.
     *
     * @return string[]
     */
    public function getMailParams()
    {
        return ['SMTPUTF8'];
    }

    /**
     * Not used.
     */
    public function getRcptParams()
    {
        return [];
    }

    /**
     * Not used.
     */
    public function onCommand(Swift_Transport_SmtpAgent \$agent, \$command, \$codes = [], &\$failedRecipients = null, &\$stop = false)
    {
    }

    /**
     * Returns +1, -1 or 0 according to the rules for usort().
     *
     * This method is called to ensure extensions can be execute in an appropriate order.
     *
     * @param string \$esmtpKeyword to compare with
     *
     * @return int
     */
    public function getPriorityOver(\$esmtpKeyword)
    {
        return 0;
    }

    /**
     * Not used.
     */
    public function exposeMixinMethods()
    {
        return [];
    }

    /**
     * Not used.
     */
    public function resetState()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/SmtpUtf8Handler.php";
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
 * (c) 2018 Christian Schmidt
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * An ESMTP handler for SMTPUTF8 support (RFC 6531).
 *
 * SMTPUTF8 is required when sending to email addresses containing non-ASCII
 * characters in local-part (the substring before @). This handler should be
 * used together with Swift_AddressEncoder_Utf8AddressEncoder.
 *
 * SMTPUTF8 mode is enabled unconditionally, even when sending to ASCII-only
 * addresses, so it should only be used with an outbound SMTP server that will
 * deliver ASCII-only messages even if the next hop does not support SMTPUTF8.
 *
 * @author Christian Schmidt
 */
class Swift_Transport_Esmtp_SmtpUtf8Handler implements Swift_Transport_EsmtpHandler
{
    public function __construct()
    {
    }

    /**
     * Get the name of the ESMTP extension this handles.
     *
     * @return string
     */
    public function getHandledKeyword()
    {
        return 'SMTPUTF8';
    }

    /**
     * Not used.
     */
    public function setKeywordParams(array \$parameters)
    {
    }

    /**
     * Not used.
     */
    public function afterEhlo(Swift_Transport_SmtpAgent \$agent)
    {
    }

    /**
     * Get params which are appended to MAIL FROM:<>.
     *
     * @return string[]
     */
    public function getMailParams()
    {
        return ['SMTPUTF8'];
    }

    /**
     * Not used.
     */
    public function getRcptParams()
    {
        return [];
    }

    /**
     * Not used.
     */
    public function onCommand(Swift_Transport_SmtpAgent \$agent, \$command, \$codes = [], &\$failedRecipients = null, &\$stop = false)
    {
    }

    /**
     * Returns +1, -1 or 0 according to the rules for usort().
     *
     * This method is called to ensure extensions can be execute in an appropriate order.
     *
     * @param string \$esmtpKeyword to compare with
     *
     * @return int
     */
    public function getPriorityOver(\$esmtpKeyword)
    {
        return 0;
    }

    /**
     * Not used.
     */
    public function exposeMixinMethods()
    {
        return [];
    }

    /**
     * Not used.
     */
    public function resetState()
    {
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/SmtpUtf8Handler.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/SmtpUtf8Handler.php");
    }
}
