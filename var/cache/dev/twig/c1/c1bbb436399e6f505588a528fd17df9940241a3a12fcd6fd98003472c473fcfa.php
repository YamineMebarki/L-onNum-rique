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

/* vendor/symfony/security-guard/Tests/Firewall/GuardAuthenticationListenerTest.php */
class __TwigTemplate_d9fed76e55b47c3042a5dc18928b7b6f36bd653cefb2ab54b7ffd80ab1c1bbb3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Tests/Firewall/GuardAuthenticationListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Tests/Firewall/GuardAuthenticationListenerTest.php"));

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

namespace Symfony\\Component\\Security\\Guard\\Tests\\Firewall;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Guard\\AuthenticatorInterface;
use Symfony\\Component\\Security\\Guard\\Firewall\\GuardAuthenticationListener;
use Symfony\\Component\\Security\\Guard\\Token\\PreAuthenticationGuardToken;

/**
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Amaury Leroux de Lens <amaury@lerouxdelens.com>
 */
class GuardAuthenticationListenerTest extends TestCase
{
    private \$authenticationManager;
    private \$guardAuthenticatorHandler;
    private \$event;
    private \$logger;
    private \$request;
    private \$rememberMeServices;

    public function testHandleSuccess()
    {
        \$authenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$authenticateToken = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$providerKey = 'my_firewall';

        \$credentials = ['username' => 'weaverryan', 'password' => 'all_your_base'];

        \$authenticator
            ->expects(\$this->once())
            ->method('supports')
            ->willReturn(true);
        \$authenticator
            ->expects(\$this->once())
            ->method('getCredentials')
            ->with(\$this->equalTo(\$this->request))
            ->willReturn(\$credentials);

        // a clone of the token that should be created internally
        \$uniqueGuardKey = 'my_firewall_0';
        \$nonAuthedToken = new PreAuthenticationGuardToken(\$credentials, \$uniqueGuardKey);

        \$this->authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->equalTo(\$nonAuthedToken))
            ->willReturn(\$authenticateToken);

        \$this->guardAuthenticatorHandler
            ->expects(\$this->once())
            ->method('authenticateWithToken')
            ->with(\$authenticateToken, \$this->request);

        \$this->guardAuthenticatorHandler
            ->expects(\$this->once())
            ->method('handleAuthenticationSuccess')
            ->with(\$authenticateToken, \$this->request, \$authenticator, \$providerKey);

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            \$providerKey,
            [\$authenticator],
            \$this->logger
        );

        \$listener->setRememberMeServices(\$this->rememberMeServices);
        // should never be called - our handleAuthenticationSuccess() does not return a Response
        \$this->rememberMeServices
            ->expects(\$this->never())
            ->method('loginSuccess');

        \$listener(\$this->event);
    }

    public function testHandleSuccessStopsAfterResponseIsSet()
    {
        \$authenticator1 = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$authenticator2 = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();

        // mock the first authenticator to fail, and set a Response
        \$authenticator1
            ->expects(\$this->once())
            ->method('supports')
            ->willReturn(true);
        \$authenticator1
            ->expects(\$this->once())
            ->method('getCredentials')
            ->willThrowException(new AuthenticationException());
        \$this->guardAuthenticatorHandler
            ->expects(\$this->once())
            ->method('handleAuthenticationFailure')
            ->willReturn(new Response());
        // the second authenticator should *never* be called
        \$authenticator2
            ->expects(\$this->never())
            ->method('getCredentials');

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            'my_firewall',
            [\$authenticator1, \$authenticator2],
            \$this->logger
        );

        \$listener(\$this->event);
    }

    public function testHandleSuccessWithRememberMe()
    {
        \$authenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$authenticateToken = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$providerKey = 'my_firewall_with_rememberme';

        \$authenticator
            ->expects(\$this->once())
            ->method('supports')
            ->with(\$this->equalTo(\$this->request))
            ->willReturn(true);
        \$authenticator
            ->expects(\$this->once())
            ->method('getCredentials')
            ->with(\$this->equalTo(\$this->request))
            ->willReturn(['username' => 'anything_not_empty']);

        \$this->authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willReturn(\$authenticateToken);

        \$successResponse = new Response('Success!');
        \$this->guardAuthenticatorHandler
            ->expects(\$this->once())
            ->method('handleAuthenticationSuccess')
            ->willReturn(\$successResponse);

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            \$providerKey,
            [\$authenticator],
            \$this->logger
        );

        \$listener->setRememberMeServices(\$this->rememberMeServices);
        \$authenticator->expects(\$this->once())
            ->method('supportsRememberMe')
            ->willReturn(true);
        // should be called - we do have a success Response
        \$this->rememberMeServices
            ->expects(\$this->once())
            ->method('loginSuccess');

        \$listener(\$this->event);
    }

    public function testHandleCatchesAuthenticationException()
    {
        \$authenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$providerKey = 'my_firewall2';

        \$authException = new AuthenticationException('Get outta here crazy user with a bad password!');
        \$authenticator
            ->expects(\$this->once())
            ->method('supports')
            ->willReturn(true);
        \$authenticator
            ->expects(\$this->once())
            ->method('getCredentials')
            ->willThrowException(\$authException);

        // this is not called
        \$this->authenticationManager
            ->expects(\$this->never())
            ->method('authenticate');

        \$this->guardAuthenticatorHandler
            ->expects(\$this->once())
            ->method('handleAuthenticationFailure')
            ->with(\$authException, \$this->request, \$authenticator, \$providerKey);

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            \$providerKey,
            [\$authenticator],
            \$this->logger
        );

        \$listener(\$this->event);
    }

    public function testSupportsReturnFalseSkipAuth()
    {
        \$authenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$providerKey = 'my_firewall4';

        \$authenticator
            ->expects(\$this->once())
            ->method('supports')
            ->willReturn(false);

        // this is not called
        \$authenticator
            ->expects(\$this->never())
            ->method('getCredentials');

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            \$providerKey,
            [\$authenticator],
            \$this->logger
        );

        \$listener(\$this->event);
    }

    public function testReturnNullFromGetCredentials()
    {
        \$this->expectException('UnexpectedValueException');
        \$authenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$providerKey = 'my_firewall4';

        \$authenticator
            ->expects(\$this->once())
            ->method('supports')
            ->willReturn(true);

        // this will raise exception
        \$authenticator
            ->expects(\$this->once())
            ->method('getCredentials')
            ->willReturn(null);

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            \$providerKey,
            [\$authenticator],
            \$this->logger
        );

        \$listener(\$this->event);
    }

    protected function setUp(): void
    {
        \$this->authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager')
            ->disableOriginalConstructor()
            ->getMock();

        \$this->guardAuthenticatorHandler = \$this->getMockBuilder('Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler')
            ->disableOriginalConstructor()
            ->getMock();

        \$this->request = new Request([], [], [], [], [], []);

        \$this->event = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Event\\RequestEvent')
            ->disableOriginalConstructor()
            ->setMethods(['getRequest'])
            ->getMock();
        \$this->event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$this->request);

        \$this->logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$this->rememberMeServices = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface')->getMock();
    }

    protected function tearDown(): void
    {
        \$this->authenticationManager = null;
        \$this->guardAuthenticatorHandler = null;
        \$this->event = null;
        \$this->logger = null;
        \$this->request = null;
        \$this->rememberMeServices = null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-guard/Tests/Firewall/GuardAuthenticationListenerTest.php";
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

namespace Symfony\\Component\\Security\\Guard\\Tests\\Firewall;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Guard\\AuthenticatorInterface;
use Symfony\\Component\\Security\\Guard\\Firewall\\GuardAuthenticationListener;
use Symfony\\Component\\Security\\Guard\\Token\\PreAuthenticationGuardToken;

/**
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Amaury Leroux de Lens <amaury@lerouxdelens.com>
 */
class GuardAuthenticationListenerTest extends TestCase
{
    private \$authenticationManager;
    private \$guardAuthenticatorHandler;
    private \$event;
    private \$logger;
    private \$request;
    private \$rememberMeServices;

    public function testHandleSuccess()
    {
        \$authenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$authenticateToken = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$providerKey = 'my_firewall';

        \$credentials = ['username' => 'weaverryan', 'password' => 'all_your_base'];

        \$authenticator
            ->expects(\$this->once())
            ->method('supports')
            ->willReturn(true);
        \$authenticator
            ->expects(\$this->once())
            ->method('getCredentials')
            ->with(\$this->equalTo(\$this->request))
            ->willReturn(\$credentials);

        // a clone of the token that should be created internally
        \$uniqueGuardKey = 'my_firewall_0';
        \$nonAuthedToken = new PreAuthenticationGuardToken(\$credentials, \$uniqueGuardKey);

        \$this->authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->equalTo(\$nonAuthedToken))
            ->willReturn(\$authenticateToken);

        \$this->guardAuthenticatorHandler
            ->expects(\$this->once())
            ->method('authenticateWithToken')
            ->with(\$authenticateToken, \$this->request);

        \$this->guardAuthenticatorHandler
            ->expects(\$this->once())
            ->method('handleAuthenticationSuccess')
            ->with(\$authenticateToken, \$this->request, \$authenticator, \$providerKey);

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            \$providerKey,
            [\$authenticator],
            \$this->logger
        );

        \$listener->setRememberMeServices(\$this->rememberMeServices);
        // should never be called - our handleAuthenticationSuccess() does not return a Response
        \$this->rememberMeServices
            ->expects(\$this->never())
            ->method('loginSuccess');

        \$listener(\$this->event);
    }

    public function testHandleSuccessStopsAfterResponseIsSet()
    {
        \$authenticator1 = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$authenticator2 = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();

        // mock the first authenticator to fail, and set a Response
        \$authenticator1
            ->expects(\$this->once())
            ->method('supports')
            ->willReturn(true);
        \$authenticator1
            ->expects(\$this->once())
            ->method('getCredentials')
            ->willThrowException(new AuthenticationException());
        \$this->guardAuthenticatorHandler
            ->expects(\$this->once())
            ->method('handleAuthenticationFailure')
            ->willReturn(new Response());
        // the second authenticator should *never* be called
        \$authenticator2
            ->expects(\$this->never())
            ->method('getCredentials');

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            'my_firewall',
            [\$authenticator1, \$authenticator2],
            \$this->logger
        );

        \$listener(\$this->event);
    }

    public function testHandleSuccessWithRememberMe()
    {
        \$authenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$authenticateToken = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$providerKey = 'my_firewall_with_rememberme';

        \$authenticator
            ->expects(\$this->once())
            ->method('supports')
            ->with(\$this->equalTo(\$this->request))
            ->willReturn(true);
        \$authenticator
            ->expects(\$this->once())
            ->method('getCredentials')
            ->with(\$this->equalTo(\$this->request))
            ->willReturn(['username' => 'anything_not_empty']);

        \$this->authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willReturn(\$authenticateToken);

        \$successResponse = new Response('Success!');
        \$this->guardAuthenticatorHandler
            ->expects(\$this->once())
            ->method('handleAuthenticationSuccess')
            ->willReturn(\$successResponse);

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            \$providerKey,
            [\$authenticator],
            \$this->logger
        );

        \$listener->setRememberMeServices(\$this->rememberMeServices);
        \$authenticator->expects(\$this->once())
            ->method('supportsRememberMe')
            ->willReturn(true);
        // should be called - we do have a success Response
        \$this->rememberMeServices
            ->expects(\$this->once())
            ->method('loginSuccess');

        \$listener(\$this->event);
    }

    public function testHandleCatchesAuthenticationException()
    {
        \$authenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$providerKey = 'my_firewall2';

        \$authException = new AuthenticationException('Get outta here crazy user with a bad password!');
        \$authenticator
            ->expects(\$this->once())
            ->method('supports')
            ->willReturn(true);
        \$authenticator
            ->expects(\$this->once())
            ->method('getCredentials')
            ->willThrowException(\$authException);

        // this is not called
        \$this->authenticationManager
            ->expects(\$this->never())
            ->method('authenticate');

        \$this->guardAuthenticatorHandler
            ->expects(\$this->once())
            ->method('handleAuthenticationFailure')
            ->with(\$authException, \$this->request, \$authenticator, \$providerKey);

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            \$providerKey,
            [\$authenticator],
            \$this->logger
        );

        \$listener(\$this->event);
    }

    public function testSupportsReturnFalseSkipAuth()
    {
        \$authenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$providerKey = 'my_firewall4';

        \$authenticator
            ->expects(\$this->once())
            ->method('supports')
            ->willReturn(false);

        // this is not called
        \$authenticator
            ->expects(\$this->never())
            ->method('getCredentials');

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            \$providerKey,
            [\$authenticator],
            \$this->logger
        );

        \$listener(\$this->event);
    }

    public function testReturnNullFromGetCredentials()
    {
        \$this->expectException('UnexpectedValueException');
        \$authenticator = \$this->getMockBuilder(AuthenticatorInterface::class)->getMock();
        \$providerKey = 'my_firewall4';

        \$authenticator
            ->expects(\$this->once())
            ->method('supports')
            ->willReturn(true);

        // this will raise exception
        \$authenticator
            ->expects(\$this->once())
            ->method('getCredentials')
            ->willReturn(null);

        \$listener = new GuardAuthenticationListener(
            \$this->guardAuthenticatorHandler,
            \$this->authenticationManager,
            \$providerKey,
            [\$authenticator],
            \$this->logger
        );

        \$listener(\$this->event);
    }

    protected function setUp(): void
    {
        \$this->authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager')
            ->disableOriginalConstructor()
            ->getMock();

        \$this->guardAuthenticatorHandler = \$this->getMockBuilder('Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler')
            ->disableOriginalConstructor()
            ->getMock();

        \$this->request = new Request([], [], [], [], [], []);

        \$this->event = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Event\\RequestEvent')
            ->disableOriginalConstructor()
            ->setMethods(['getRequest'])
            ->getMock();
        \$this->event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$this->request);

        \$this->logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$this->rememberMeServices = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface')->getMock();
    }

    protected function tearDown(): void
    {
        \$this->authenticationManager = null;
        \$this->guardAuthenticatorHandler = null;
        \$this->event = null;
        \$this->logger = null;
        \$this->request = null;
        \$this->rememberMeServices = null;
    }
}
", "vendor/symfony/security-guard/Tests/Firewall/GuardAuthenticationListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-guard/Tests/Firewall/GuardAuthenticationListenerTest.php");
    }
}
