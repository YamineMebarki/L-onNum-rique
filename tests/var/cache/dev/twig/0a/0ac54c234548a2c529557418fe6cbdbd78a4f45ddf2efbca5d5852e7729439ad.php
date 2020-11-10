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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/CramMd5Authenticator.php */
class __TwigTemplate_aa63dd69f788212406fe1b4963d441b1616e5d94e09e84fcf13babc5fa5455ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/CramMd5Authenticator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/CramMd5Authenticator.php"));

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
 * Handles CRAM-MD5 authentication.
 *
 * @author Chris Corbyn
 */
class Swift_Transport_Esmtp_Auth_CramMd5Authenticator implements Swift_Transport_Esmtp_Authenticator
{
    /**
     * Get the name of the AUTH mechanism this Authenticator handles.
     *
     * @return string
     */
    public function getAuthKeyword()
    {
        return 'CRAM-MD5';
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(Swift_Transport_SmtpAgent \$agent, \$username, \$password)
    {
        try {
            \$challenge = \$agent->executeCommand(\"AUTH CRAM-MD5\\r\\n\", [334]);
            \$challenge = base64_decode(substr(\$challenge, 4));
            \$message = base64_encode(
                \$username.' '.\$this->getResponse(\$password, \$challenge)
                );
            \$agent->executeCommand(sprintf(\"%s\\r\\n\", \$message), [235]);

            return true;
        } catch (Swift_TransportException \$e) {
            \$agent->executeCommand(\"RSET\\r\\n\", [250]);

            throw \$e;
        }
    }

    /**
     * Generate a CRAM-MD5 response from a server challenge.
     *
     * @param string \$secret
     * @param string \$challenge
     *
     * @return string
     */
    private function getResponse(\$secret, \$challenge)
    {
        if (strlen(\$secret) > 64) {
            \$secret = pack('H32', md5(\$secret));
        }

        if (strlen(\$secret) < 64) {
            \$secret = str_pad(\$secret, 64, chr(0));
        }

        \$k_ipad = substr(\$secret, 0, 64) ^ str_repeat(chr(0x36), 64);
        \$k_opad = substr(\$secret, 0, 64) ^ str_repeat(chr(0x5C), 64);

        \$inner = pack('H32', md5(\$k_ipad.\$challenge));
        \$digest = md5(\$k_opad.\$inner);

        return \$digest;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/CramMd5Authenticator.php";
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
 * Handles CRAM-MD5 authentication.
 *
 * @author Chris Corbyn
 */
class Swift_Transport_Esmtp_Auth_CramMd5Authenticator implements Swift_Transport_Esmtp_Authenticator
{
    /**
     * Get the name of the AUTH mechanism this Authenticator handles.
     *
     * @return string
     */
    public function getAuthKeyword()
    {
        return 'CRAM-MD5';
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(Swift_Transport_SmtpAgent \$agent, \$username, \$password)
    {
        try {
            \$challenge = \$agent->executeCommand(\"AUTH CRAM-MD5\\r\\n\", [334]);
            \$challenge = base64_decode(substr(\$challenge, 4));
            \$message = base64_encode(
                \$username.' '.\$this->getResponse(\$password, \$challenge)
                );
            \$agent->executeCommand(sprintf(\"%s\\r\\n\", \$message), [235]);

            return true;
        } catch (Swift_TransportException \$e) {
            \$agent->executeCommand(\"RSET\\r\\n\", [250]);

            throw \$e;
        }
    }

    /**
     * Generate a CRAM-MD5 response from a server challenge.
     *
     * @param string \$secret
     * @param string \$challenge
     *
     * @return string
     */
    private function getResponse(\$secret, \$challenge)
    {
        if (strlen(\$secret) > 64) {
            \$secret = pack('H32', md5(\$secret));
        }

        if (strlen(\$secret) < 64) {
            \$secret = str_pad(\$secret, 64, chr(0));
        }

        \$k_ipad = substr(\$secret, 0, 64) ^ str_repeat(chr(0x36), 64);
        \$k_opad = substr(\$secret, 0, 64) ^ str_repeat(chr(0x5C), 64);

        \$inner = pack('H32', md5(\$k_ipad.\$challenge));
        \$digest = md5(\$k_opad.\$inner);

        return \$digest;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/CramMd5Authenticator.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/CramMd5Authenticator.php");
    }
}
