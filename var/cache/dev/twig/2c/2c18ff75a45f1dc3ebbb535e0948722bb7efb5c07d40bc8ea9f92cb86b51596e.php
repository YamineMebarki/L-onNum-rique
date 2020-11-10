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

/* vendor/symfony/security-guard/Tests/GuardAuthenticatorHandlerTest.php */
class __TwigTemplate_73308edce5f2aa4a974f7be0217d4febe298c0d4356dd87dea75d19b20141c86 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Tests/GuardAuthenticatorHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Tests/GuardAuthenticatorHandlerTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Security\\Guard\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Guard\\AuthenticatorInterface;
use Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

class GuardAuthenticatorHandlerTest extends TestCase
{
    private \$tokenStorage;
    private \$dispatcher;
    private \$token;
    private \$request;
    private \$sessionStrategy;
    private \$guardAuthenticator;

    public function testAuthenticateWithToken()
    {
        \$this->tokenStorage->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->token);

        \$loginEvent = new InteractiveLoginEvent(\$this->request, \$this->token);

        \$this->dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->equalTo(\$loginEvent), \$this->equalTo(SecurityEvents::INTERACTIVE_LOGIN))
        ;

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$handler->authenticateWithToken(\$this->token, \$this->request);
    }

    public function testHandleAuthenticationSuccess()
    {
        \$providerKey = 'my_handleable_firewall';
        \$response = new Response('Guard all the things!');
        \$this->guardAuthenticator->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token, \$providerKey)
            ->willReturn(\$response);

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$actualResponse = \$handler->handleAuthenticationSuccess(\$this->token, \$this->request, \$this->guardAuthenticator, \$providerKey);
        \$this->assertSame(\$response, \$actualResponse);
    }

    public function testHandleAuthenticationFailure()
    {
        // setToken() not called - getToken() will return null, so there's nothing to clear
        \$this->tokenStorage->expects(\$this->never())
            ->method('setToken')
            ->with(null);
        \$authException = new AuthenticationException('Bad password!');

        \$response = new Response('Try again, but with the right password!');
        \$this->guardAuthenticator->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$authException)
            ->willReturn(\$response);

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$actualResponse = \$handler->handleAuthenticationFailure(\$authException, \$this->request, \$this->guardAuthenticator, 'firewall_provider_key');
        \$this->assertSame(\$response, \$actualResponse);
    }

    /**
     * @dataProvider getTokenClearingTests
     */
    public function testHandleAuthenticationClearsToken(\$tokenProviderKey, \$actualProviderKey)
    {
        \$this->tokenStorage->expects(\$this->never())
            ->method('setToken')
            ->with(null);
        \$authException = new AuthenticationException('Bad password!');

        \$response = new Response('Try again, but with the right password!');
        \$this->guardAuthenticator->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$authException)
            ->willReturn(\$response);

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$actualResponse = \$handler->handleAuthenticationFailure(\$authException, \$this->request, \$this->guardAuthenticator, \$actualProviderKey);
        \$this->assertSame(\$response, \$actualResponse);
    }

    public function getTokenClearingTests()
    {
        \$tests = [];
        // matching firewall => clear the token
        \$tests[] = ['the_firewall_key', 'the_firewall_key'];
        \$tests[] = ['the_firewall_key', 'different_key'];
        \$tests[] = ['the_firewall_key', 'the_firewall_key'];

        return \$tests;
    }

    public function testNoFailureIfSessionStrategyNotPassed()
    {
        \$this->configurePreviousSession();

        \$this->tokenStorage->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->token);

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$handler->authenticateWithToken(\$this->token, \$this->request);
    }

    public function testSessionStrategyIsCalled()
    {
        \$this->configurePreviousSession();

        \$this->sessionStrategy->expects(\$this->once())
            ->method('onAuthentication')
            ->with(\$this->request, \$this->token);

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$handler->setSessionAuthenticationStrategy(\$this->sessionStrategy);
        \$handler->authenticateWithToken(\$this->token, \$this->request);
    }

    public function testSessionStrategyIsNotCalledWhenStateless()
    {
        \$this->configurePreviousSession();

        \$this->sessionStrategy->expects(\$this->never())
            ->method('onAuthentication');

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher, ['some_provider_key']);
        \$handler->setSessionAuthenticationStrategy(\$this->sessionStrategy);
        \$handler->authenticateWithToken(\$this->token, \$this->request, 'some_provider_key');
    }

    protected function setUp(): void
    {
        \$this->tokenStorage = \$this->getMockBuilder(TokenStorageInterface::class)->getMock();
        \$this->dispatcher = \$this->getMockBuilder(EventDispatcherInterface::class)->getMock();
        \$this->token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$this->request = new Request([], [], [], [], [], []);
        \$this->sessionStrategy = \$this->getMockBuilder(SessionAuthenticationStrategyInterface::class)->getMock();
        \$this->guardAuthenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
    }

    protected function tearDown(): void
    {
        \$this->tokenStorage = null;
        \$this->dispatcher = null;
        \$this->token = null;
        \$this->request = null;
        \$this->guardAuthenticator = null;
    }

    private function configurePreviousSession()
    {
        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$session->expects(\$this->any())
            ->method('getName')
            ->willReturn('test_session_name');
        \$this->request->setSession(\$session);
        \$this->request->cookies->set('test_session_name', 'session_cookie_val');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-guard/Tests/GuardAuthenticatorHandlerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Security\\Guard\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Guard\\AuthenticatorInterface;
use Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

class GuardAuthenticatorHandlerTest extends TestCase
{
    private \$tokenStorage;
    private \$dispatcher;
    private \$token;
    private \$request;
    private \$sessionStrategy;
    private \$guardAuthenticator;

    public function testAuthenticateWithToken()
    {
        \$this->tokenStorage->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->token);

        \$loginEvent = new InteractiveLoginEvent(\$this->request, \$this->token);

        \$this->dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->equalTo(\$loginEvent), \$this->equalTo(SecurityEvents::INTERACTIVE_LOGIN))
        ;

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$handler->authenticateWithToken(\$this->token, \$this->request);
    }

    public function testHandleAuthenticationSuccess()
    {
        \$providerKey = 'my_handleable_firewall';
        \$response = new Response('Guard all the things!');
        \$this->guardAuthenticator->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token, \$providerKey)
            ->willReturn(\$response);

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$actualResponse = \$handler->handleAuthenticationSuccess(\$this->token, \$this->request, \$this->guardAuthenticator, \$providerKey);
        \$this->assertSame(\$response, \$actualResponse);
    }

    public function testHandleAuthenticationFailure()
    {
        // setToken() not called - getToken() will return null, so there's nothing to clear
        \$this->tokenStorage->expects(\$this->never())
            ->method('setToken')
            ->with(null);
        \$authException = new AuthenticationException('Bad password!');

        \$response = new Response('Try again, but with the right password!');
        \$this->guardAuthenticator->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$authException)
            ->willReturn(\$response);

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$actualResponse = \$handler->handleAuthenticationFailure(\$authException, \$this->request, \$this->guardAuthenticator, 'firewall_provider_key');
        \$this->assertSame(\$response, \$actualResponse);
    }

    /**
     * @dataProvider getTokenClearingTests
     */
    public function testHandleAuthenticationClearsToken(\$tokenProviderKey, \$actualProviderKey)
    {
        \$this->tokenStorage->expects(\$this->never())
            ->method('setToken')
            ->with(null);
        \$authException = new AuthenticationException('Bad password!');

        \$response = new Response('Try again, but with the right password!');
        \$this->guardAuthenticator->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$authException)
            ->willReturn(\$response);

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$actualResponse = \$handler->handleAuthenticationFailure(\$authException, \$this->request, \$this->guardAuthenticator, \$actualProviderKey);
        \$this->assertSame(\$response, \$actualResponse);
    }

    public function getTokenClearingTests()
    {
        \$tests = [];
        // matching firewall => clear the token
        \$tests[] = ['the_firewall_key', 'the_firewall_key'];
        \$tests[] = ['the_firewall_key', 'different_key'];
        \$tests[] = ['the_firewall_key', 'the_firewall_key'];

        return \$tests;
    }

    public function testNoFailureIfSessionStrategyNotPassed()
    {
        \$this->configurePreviousSession();

        \$this->tokenStorage->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->token);

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$handler->authenticateWithToken(\$this->token, \$this->request);
    }

    public function testSessionStrategyIsCalled()
    {
        \$this->configurePreviousSession();

        \$this->sessionStrategy->expects(\$this->once())
            ->method('onAuthentication')
            ->with(\$this->request, \$this->token);

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher);
        \$handler->setSessionAuthenticationStrategy(\$this->sessionStrategy);
        \$handler->authenticateWithToken(\$this->token, \$this->request);
    }

    public function testSessionStrategyIsNotCalledWhenStateless()
    {
        \$this->configurePreviousSession();

        \$this->sessionStrategy->expects(\$this->never())
            ->method('onAuthentication');

        \$handler = new GuardAuthenticatorHandler(\$this->tokenStorage, \$this->dispatcher, ['some_provider_key']);
        \$handler->setSessionAuthenticationStrategy(\$this->sessionStrategy);
        \$handler->authenticateWithToken(\$this->token, \$this->request, 'some_provider_key');
    }

    protected function setUp(): void
    {
        \$this->tokenStorage = \$this->getMockBuilder(TokenStorageInterface::class)->getMock();
        \$this->dispatcher = \$this->getMockBuilder(EventDispatcherInterface::class)->getMock();
        \$this->token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$this->request = new Request([], [], [], [], [], []);
        \$this->sessionStrategy = \$this->getMockBuilder(SessionAuthenticationStrategyInterface::class)->getMock();
        \$this->guardAuthenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
    }

    protected function tearDown(): void
    {
        \$this->tokenStorage = null;
        \$this->dispatcher = null;
        \$this->token = null;
        \$this->request = null;
        \$this->guardAuthenticator = null;
    }

    private function configurePreviousSession()
    {
        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$session->expects(\$this->any())
            ->method('getName')
            ->willReturn('test_session_name');
        \$this->request->setSession(\$session);
        \$this->request->cookies->set('test_session_name', 'session_cookie_val');
    }
}
", "vendor/symfony/security-guard/Tests/GuardAuthenticatorHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-guard/Tests/GuardAuthenticatorHandlerTest.php");
    }
}
