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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/XOAuth2Authenticator.php */
class __TwigTemplate_c584f5d4809e000e8af5a4b8ad0a059c84f2e3a32bef7364e6e15788cb062add extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/XOAuth2Authenticator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/XOAuth2Authenticator.php"));

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
 * Handles XOAUTH2 authentication.
 *
 * Example:
 * <code>
 * \$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
 *   ->setAuthMode('XOAUTH2')
 *   ->setUsername('YOUR_EMAIL_ADDRESS')
 *   ->setPassword('YOUR_ACCESS_TOKEN');
 * </code>
 *
 * @author xu.li<AthenaLightenedMyPath@gmail.com>
 *
 * @see        https://developers.google.com/google-apps/gmail/xoauth2_protocol
 */
class Swift_Transport_Esmtp_Auth_XOAuth2Authenticator implements Swift_Transport_Esmtp_Authenticator
{
    /**
     * Get the name of the AUTH mechanism this Authenticator handles.
     *
     * @return string
     */
    public function getAuthKeyword()
    {
        return 'XOAUTH2';
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(Swift_Transport_SmtpAgent \$agent, \$email, \$token)
    {
        try {
            \$param = \$this->constructXOAuth2Params(\$email, \$token);
            \$agent->executeCommand('AUTH XOAUTH2 '.\$param.\"\\r\\n\", [235]);

            return true;
        } catch (Swift_TransportException \$e) {
            \$agent->executeCommand(\"RSET\\r\\n\", [250]);

            throw \$e;
        }
    }

    /**
     * Construct the auth parameter.
     *
     * @see https://developers.google.com/google-apps/gmail/xoauth2_protocol#the_sasl_xoauth2_mechanism
     */
    protected function constructXOAuth2Params(\$email, \$token)
    {
        return base64_encode(\"user=\$email\\1auth=Bearer \$token\\1\\1\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/XOAuth2Authenticator.php";
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
 * Handles XOAUTH2 authentication.
 *
 * Example:
 * <code>
 * \$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
 *   ->setAuthMode('XOAUTH2')
 *   ->setUsername('YOUR_EMAIL_ADDRESS')
 *   ->setPassword('YOUR_ACCESS_TOKEN');
 * </code>
 *
 * @author xu.li<AthenaLightenedMyPath@gmail.com>
 *
 * @see        https://developers.google.com/google-apps/gmail/xoauth2_protocol
 */
class Swift_Transport_Esmtp_Auth_XOAuth2Authenticator implements Swift_Transport_Esmtp_Authenticator
{
    /**
     * Get the name of the AUTH mechanism this Authenticator handles.
     *
     * @return string
     */
    public function getAuthKeyword()
    {
        return 'XOAUTH2';
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(Swift_Transport_SmtpAgent \$agent, \$email, \$token)
    {
        try {
            \$param = \$this->constructXOAuth2Params(\$email, \$token);
            \$agent->executeCommand('AUTH XOAUTH2 '.\$param.\"\\r\\n\", [235]);

            return true;
        } catch (Swift_TransportException \$e) {
            \$agent->executeCommand(\"RSET\\r\\n\", [250]);

            throw \$e;
        }
    }

    /**
     * Construct the auth parameter.
     *
     * @see https://developers.google.com/google-apps/gmail/xoauth2_protocol#the_sasl_xoauth2_mechanism
     */
    protected function constructXOAuth2Params(\$email, \$token)
    {
        return base64_encode(\"user=\$email\\1auth=Bearer \$token\\1\\1\");
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/XOAuth2Authenticator.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/XOAuth2Authenticator.php");
    }
}
