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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/CramMd5AuthenticatorTest.php */
class __TwigTemplate_4785d4cfbeddca75bd5f06657127cb1640363e38f246ff90a205c426c74a663f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/CramMd5AuthenticatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/CramMd5AuthenticatorTest.php"));

        // line 1
        echo "<?php

class Swift_Transport_Esmtp_Auth_CramMd5AuthenticatorTest extends \\SwiftMailerTestCase
{
    private \$agent;

    protected function setUp()
    {
        \$this->agent = \$this->getMockery('Swift_Transport_SmtpAgent')->shouldIgnoreMissing();
    }

    public function testKeywordIsCramMd5()
    {
        /* -- RFC 2195, 2.
        The authentication type associated with CRAM is \"CRAM-MD5\".
        */

        \$cram = \$this->getAuthenticator();
        \$this->assertEquals('CRAM-MD5', \$cram->getAuthKeyword());
    }

    public function testSuccessfulAuthentication()
    {
        \$cram = \$this->getAuthenticator();

        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\"AUTH CRAM-MD5\\r\\n\", [334])
             ->andReturn('334 '.base64_encode('<foo@bar>').\"\\r\\n\");
        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\\Mockery::any(), [235]);

        \$this->assertTrue(\$cram->authenticate(\$this->agent, 'jack', 'pass'),
            '%s: The buffer accepted all commands authentication should succeed'
            );
    }

    /**
     * @expectedException \\Swift_TransportException
     */
    public function testAuthenticationFailureSendRset()
    {
        \$cram = \$this->getAuthenticator();

        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\"AUTH CRAM-MD5\\r\\n\", [334])
             ->andReturn('334 '.base64_encode('<foo@bar>').\"\\r\\n\");
        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\\Mockery::any(), [235])
             ->andThrow(new Swift_TransportException(''));
        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\"RSET\\r\\n\", [250]);

        \$cram->authenticate(\$this->agent, 'jack', 'pass');
    }

    private function getAuthenticator()
    {
        return new Swift_Transport_Esmtp_Auth_CramMd5Authenticator();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/CramMd5AuthenticatorTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Transport_Esmtp_Auth_CramMd5AuthenticatorTest extends \\SwiftMailerTestCase
{
    private \$agent;

    protected function setUp()
    {
        \$this->agent = \$this->getMockery('Swift_Transport_SmtpAgent')->shouldIgnoreMissing();
    }

    public function testKeywordIsCramMd5()
    {
        /* -- RFC 2195, 2.
        The authentication type associated with CRAM is \"CRAM-MD5\".
        */

        \$cram = \$this->getAuthenticator();
        \$this->assertEquals('CRAM-MD5', \$cram->getAuthKeyword());
    }

    public function testSuccessfulAuthentication()
    {
        \$cram = \$this->getAuthenticator();

        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\"AUTH CRAM-MD5\\r\\n\", [334])
             ->andReturn('334 '.base64_encode('<foo@bar>').\"\\r\\n\");
        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\\Mockery::any(), [235]);

        \$this->assertTrue(\$cram->authenticate(\$this->agent, 'jack', 'pass'),
            '%s: The buffer accepted all commands authentication should succeed'
            );
    }

    /**
     * @expectedException \\Swift_TransportException
     */
    public function testAuthenticationFailureSendRset()
    {
        \$cram = \$this->getAuthenticator();

        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\"AUTH CRAM-MD5\\r\\n\", [334])
             ->andReturn('334 '.base64_encode('<foo@bar>').\"\\r\\n\");
        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\\Mockery::any(), [235])
             ->andThrow(new Swift_TransportException(''));
        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\"RSET\\r\\n\", [250]);

        \$cram->authenticate(\$this->agent, 'jack', 'pass');
    }

    private function getAuthenticator()
    {
        return new Swift_Transport_Esmtp_Auth_CramMd5Authenticator();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/CramMd5AuthenticatorTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/CramMd5AuthenticatorTest.php");
    }
}
