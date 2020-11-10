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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/PlainAuthenticatorTest.php */
class __TwigTemplate_b29fa5a6ac8d8cf91f4a0ed903ff016592b20187674966f30dc9031184be9fb0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/PlainAuthenticatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/PlainAuthenticatorTest.php"));

        // line 1
        echo "<?php

class Swift_Transport_Esmtp_Auth_PlainAuthenticatorTest extends \\SwiftMailerTestCase
{
    private \$agent;

    protected function setUp()
    {
        \$this->agent = \$this->getMockery('Swift_Transport_SmtpAgent')->shouldIgnoreMissing();
    }

    public function testKeywordIsPlain()
    {
        /* -- RFC 4616, 1.
        The name associated with this mechanism is \"PLAIN\".
        */

        \$login = \$this->getAuthenticator();
        \$this->assertEquals('PLAIN', \$login->getAuthKeyword());
    }

    public function testSuccessfulAuthentication()
    {
        /* -- RFC 4616, 2.
        The client presents the authorization identity (identity to act as),
        followed by a NUL (U+0000) character, followed by the authentication
        identity (identity whose password will be used), followed by a NUL
        (U+0000) character, followed by the clear-text password.
        */

        \$plain = \$this->getAuthenticator();

        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with('AUTH PLAIN '.base64_encode(
                        'jack'.chr(0).'jack'.chr(0).'pass'
                    ).\"\\r\\n\", [235]);

        \$this->assertTrue(\$plain->authenticate(\$this->agent, 'jack', 'pass'),
            '%s: The buffer accepted all commands authentication should succeed'
            );
    }

    /**
     * @expectedException \\Swift_TransportException
     */
    public function testAuthenticationFailureSendRset()
    {
        \$plain = \$this->getAuthenticator();

        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with('AUTH PLAIN '.base64_encode(
                        'jack'.chr(0).'jack'.chr(0).'pass'
                    ).\"\\r\\n\", [235])
             ->andThrow(new Swift_TransportException(''));
        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\"RSET\\r\\n\", [250]);

        \$plain->authenticate(\$this->agent, 'jack', 'pass');
    }

    private function getAuthenticator()
    {
        return new Swift_Transport_Esmtp_Auth_PlainAuthenticator();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/PlainAuthenticatorTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Transport_Esmtp_Auth_PlainAuthenticatorTest extends \\SwiftMailerTestCase
{
    private \$agent;

    protected function setUp()
    {
        \$this->agent = \$this->getMockery('Swift_Transport_SmtpAgent')->shouldIgnoreMissing();
    }

    public function testKeywordIsPlain()
    {
        /* -- RFC 4616, 1.
        The name associated with this mechanism is \"PLAIN\".
        */

        \$login = \$this->getAuthenticator();
        \$this->assertEquals('PLAIN', \$login->getAuthKeyword());
    }

    public function testSuccessfulAuthentication()
    {
        /* -- RFC 4616, 2.
        The client presents the authorization identity (identity to act as),
        followed by a NUL (U+0000) character, followed by the authentication
        identity (identity whose password will be used), followed by a NUL
        (U+0000) character, followed by the clear-text password.
        */

        \$plain = \$this->getAuthenticator();

        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with('AUTH PLAIN '.base64_encode(
                        'jack'.chr(0).'jack'.chr(0).'pass'
                    ).\"\\r\\n\", [235]);

        \$this->assertTrue(\$plain->authenticate(\$this->agent, 'jack', 'pass'),
            '%s: The buffer accepted all commands authentication should succeed'
            );
    }

    /**
     * @expectedException \\Swift_TransportException
     */
    public function testAuthenticationFailureSendRset()
    {
        \$plain = \$this->getAuthenticator();

        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with('AUTH PLAIN '.base64_encode(
                        'jack'.chr(0).'jack'.chr(0).'pass'
                    ).\"\\r\\n\", [235])
             ->andThrow(new Swift_TransportException(''));
        \$this->agent->shouldReceive('executeCommand')
             ->once()
             ->with(\"RSET\\r\\n\", [250]);

        \$plain->authenticate(\$this->agent, 'jack', 'pass');
    }

    private function getAuthenticator()
    {
        return new Swift_Transport_Esmtp_Auth_PlainAuthenticator();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/PlainAuthenticatorTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/Auth/PlainAuthenticatorTest.php");
    }
}
