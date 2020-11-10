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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/AuthHandlerTest.php */
class __TwigTemplate_c1a2172917bb91598cf1e050d22f32474b72838654c4858d2ef90406129920fa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/AuthHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/AuthHandlerTest.php"));

        // line 1
        echo "<?php

class Swift_Transport_Esmtp_AuthHandlerTest extends \\SwiftMailerTestCase
{
    private \$agent;

    protected function setUp()
    {
        \$this->agent = \$this->getMockery('Swift_Transport_SmtpAgent')->shouldIgnoreMissing();
    }

    public function testKeywordIsAuth()
    {
        \$auth = \$this->createHandler([]);
        \$this->assertEquals('AUTH', \$auth->getHandledKeyword());
    }

    public function testUsernameCanBeSetAndFetched()
    {
        \$auth = \$this->createHandler([]);
        \$auth->setUsername('jack');
        \$this->assertEquals('jack', \$auth->getUsername());
    }

    public function testPasswordCanBeSetAndFetched()
    {
        \$auth = \$this->createHandler([]);
        \$auth->setPassword('pass');
        \$this->assertEquals('pass', \$auth->getPassword());
    }

    public function testAuthModeCanBeSetAndFetched()
    {
        \$auth = \$this->createHandler([]);
        \$auth->setAuthMode('PLAIN');
        \$this->assertEquals('PLAIN', \$auth->getAuthMode());
    }

    public function testMixinMethods()
    {
        \$auth = \$this->createHandler([]);
        \$mixins = \$auth->exposeMixinMethods();
        \$this->assertTrue(in_array('getUsername', \$mixins),
            '%s: getUsername() should be accessible via mixin'
            );
        \$this->assertTrue(in_array('setUsername', \$mixins),
            '%s: setUsername() should be accessible via mixin'
            );
        \$this->assertTrue(in_array('getPassword', \$mixins),
            '%s: getPassword() should be accessible via mixin'
            );
        \$this->assertTrue(in_array('setPassword', \$mixins),
            '%s: setPassword() should be accessible via mixin'
            );
        \$this->assertTrue(in_array('setAuthMode', \$mixins),
            '%s: setAuthMode() should be accessible via mixin'
            );
        \$this->assertTrue(in_array('getAuthMode', \$mixins),
            '%s: getAuthMode() should be accessible via mixin'
            );
    }

    public function testAuthenticatorsAreCalledAccordingToParamsAfterEhlo()
    {
        \$a1 = \$this->createMockAuthenticator('PLAIN');
        \$a2 = \$this->createMockAuthenticator('LOGIN');

        \$a1->shouldReceive('authenticate')
           ->never()
           ->with(\$this->agent, 'jack', 'pass');
        \$a2->shouldReceive('authenticate')
           ->once()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(true);

        \$auth = \$this->createHandler([\$a1, \$a2]);
        \$auth->setUsername('jack');
        \$auth->setPassword('pass');

        \$auth->setKeywordParams(['CRAM-MD5', 'LOGIN']);
        \$auth->afterEhlo(\$this->agent);
    }

    public function testAuthenticatorsAreNotUsedIfNoUsernameSet()
    {
        \$a1 = \$this->createMockAuthenticator('PLAIN');
        \$a2 = \$this->createMockAuthenticator('LOGIN');

        \$a1->shouldReceive('authenticate')
           ->never()
           ->with(\$this->agent, 'jack', 'pass');
        \$a2->shouldReceive('authenticate')
           ->never()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(true);

        \$auth = \$this->createHandler([\$a1, \$a2]);

        \$auth->setKeywordParams(['CRAM-MD5', 'LOGIN']);
        \$auth->afterEhlo(\$this->agent);
    }

    public function testSeveralAuthenticatorsAreTriedIfNeeded()
    {
        \$a1 = \$this->createMockAuthenticator('PLAIN');
        \$a2 = \$this->createMockAuthenticator('LOGIN');

        \$a1->shouldReceive('authenticate')
           ->once()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(false);
        \$a2->shouldReceive('authenticate')
           ->once()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(true);

        \$auth = \$this->createHandler([\$a1, \$a2]);
        \$auth->setUsername('jack');
        \$auth->setPassword('pass');

        \$auth->setKeywordParams(['PLAIN', 'LOGIN']);
        \$auth->afterEhlo(\$this->agent);
    }

    public function testFirstAuthenticatorToPassBreaksChain()
    {
        \$a1 = \$this->createMockAuthenticator('PLAIN');
        \$a2 = \$this->createMockAuthenticator('LOGIN');
        \$a3 = \$this->createMockAuthenticator('CRAM-MD5');

        \$a1->shouldReceive('authenticate')
           ->once()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(false);
        \$a2->shouldReceive('authenticate')
           ->once()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(true);
        \$a3->shouldReceive('authenticate')
           ->never()
           ->with(\$this->agent, 'jack', 'pass');

        \$auth = \$this->createHandler([\$a1, \$a2]);
        \$auth->setUsername('jack');
        \$auth->setPassword('pass');

        \$auth->setKeywordParams(['PLAIN', 'LOGIN', 'CRAM-MD5']);
        \$auth->afterEhlo(\$this->agent);
    }

    private function createHandler(\$authenticators)
    {
        return new Swift_Transport_Esmtp_AuthHandler(\$authenticators);
    }

    private function createMockAuthenticator(\$type)
    {
        \$authenticator = \$this->getMockery('Swift_Transport_Esmtp_Authenticator')->shouldIgnoreMissing();
        \$authenticator->shouldReceive('getAuthKeyword')
                      ->zeroOrMoreTimes()
                      ->andReturn(\$type);

        return \$authenticator;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/AuthHandlerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Transport_Esmtp_AuthHandlerTest extends \\SwiftMailerTestCase
{
    private \$agent;

    protected function setUp()
    {
        \$this->agent = \$this->getMockery('Swift_Transport_SmtpAgent')->shouldIgnoreMissing();
    }

    public function testKeywordIsAuth()
    {
        \$auth = \$this->createHandler([]);
        \$this->assertEquals('AUTH', \$auth->getHandledKeyword());
    }

    public function testUsernameCanBeSetAndFetched()
    {
        \$auth = \$this->createHandler([]);
        \$auth->setUsername('jack');
        \$this->assertEquals('jack', \$auth->getUsername());
    }

    public function testPasswordCanBeSetAndFetched()
    {
        \$auth = \$this->createHandler([]);
        \$auth->setPassword('pass');
        \$this->assertEquals('pass', \$auth->getPassword());
    }

    public function testAuthModeCanBeSetAndFetched()
    {
        \$auth = \$this->createHandler([]);
        \$auth->setAuthMode('PLAIN');
        \$this->assertEquals('PLAIN', \$auth->getAuthMode());
    }

    public function testMixinMethods()
    {
        \$auth = \$this->createHandler([]);
        \$mixins = \$auth->exposeMixinMethods();
        \$this->assertTrue(in_array('getUsername', \$mixins),
            '%s: getUsername() should be accessible via mixin'
            );
        \$this->assertTrue(in_array('setUsername', \$mixins),
            '%s: setUsername() should be accessible via mixin'
            );
        \$this->assertTrue(in_array('getPassword', \$mixins),
            '%s: getPassword() should be accessible via mixin'
            );
        \$this->assertTrue(in_array('setPassword', \$mixins),
            '%s: setPassword() should be accessible via mixin'
            );
        \$this->assertTrue(in_array('setAuthMode', \$mixins),
            '%s: setAuthMode() should be accessible via mixin'
            );
        \$this->assertTrue(in_array('getAuthMode', \$mixins),
            '%s: getAuthMode() should be accessible via mixin'
            );
    }

    public function testAuthenticatorsAreCalledAccordingToParamsAfterEhlo()
    {
        \$a1 = \$this->createMockAuthenticator('PLAIN');
        \$a2 = \$this->createMockAuthenticator('LOGIN');

        \$a1->shouldReceive('authenticate')
           ->never()
           ->with(\$this->agent, 'jack', 'pass');
        \$a2->shouldReceive('authenticate')
           ->once()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(true);

        \$auth = \$this->createHandler([\$a1, \$a2]);
        \$auth->setUsername('jack');
        \$auth->setPassword('pass');

        \$auth->setKeywordParams(['CRAM-MD5', 'LOGIN']);
        \$auth->afterEhlo(\$this->agent);
    }

    public function testAuthenticatorsAreNotUsedIfNoUsernameSet()
    {
        \$a1 = \$this->createMockAuthenticator('PLAIN');
        \$a2 = \$this->createMockAuthenticator('LOGIN');

        \$a1->shouldReceive('authenticate')
           ->never()
           ->with(\$this->agent, 'jack', 'pass');
        \$a2->shouldReceive('authenticate')
           ->never()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(true);

        \$auth = \$this->createHandler([\$a1, \$a2]);

        \$auth->setKeywordParams(['CRAM-MD5', 'LOGIN']);
        \$auth->afterEhlo(\$this->agent);
    }

    public function testSeveralAuthenticatorsAreTriedIfNeeded()
    {
        \$a1 = \$this->createMockAuthenticator('PLAIN');
        \$a2 = \$this->createMockAuthenticator('LOGIN');

        \$a1->shouldReceive('authenticate')
           ->once()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(false);
        \$a2->shouldReceive('authenticate')
           ->once()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(true);

        \$auth = \$this->createHandler([\$a1, \$a2]);
        \$auth->setUsername('jack');
        \$auth->setPassword('pass');

        \$auth->setKeywordParams(['PLAIN', 'LOGIN']);
        \$auth->afterEhlo(\$this->agent);
    }

    public function testFirstAuthenticatorToPassBreaksChain()
    {
        \$a1 = \$this->createMockAuthenticator('PLAIN');
        \$a2 = \$this->createMockAuthenticator('LOGIN');
        \$a3 = \$this->createMockAuthenticator('CRAM-MD5');

        \$a1->shouldReceive('authenticate')
           ->once()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(false);
        \$a2->shouldReceive('authenticate')
           ->once()
           ->with(\$this->agent, 'jack', 'pass')
           ->andReturn(true);
        \$a3->shouldReceive('authenticate')
           ->never()
           ->with(\$this->agent, 'jack', 'pass');

        \$auth = \$this->createHandler([\$a1, \$a2]);
        \$auth->setUsername('jack');
        \$auth->setPassword('pass');

        \$auth->setKeywordParams(['PLAIN', 'LOGIN', 'CRAM-MD5']);
        \$auth->afterEhlo(\$this->agent);
    }

    private function createHandler(\$authenticators)
    {
        return new Swift_Transport_Esmtp_AuthHandler(\$authenticators);
    }

    private function createMockAuthenticator(\$type)
    {
        \$authenticator = \$this->getMockery('Swift_Transport_Esmtp_Authenticator')->shouldIgnoreMissing();
        \$authenticator->shouldReceive('getAuthKeyword')
                      ->zeroOrMoreTimes()
                      ->andReturn(\$type);

        return \$authenticator;
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/AuthHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/Esmtp/AuthHandlerTest.php");
    }
}
