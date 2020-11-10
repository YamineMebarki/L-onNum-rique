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

/* vendor/symfony/security-http/Tests/Firewall/RememberMeListenerTest.php */
class __TwigTemplate_5079034ff47f340a0907264e9b4b8e542f5edfea8a396ac0d42fea08d01c4f4d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/RememberMeListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/RememberMeListenerTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\Firewall;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

class RememberMeListenerTest extends TestCase
{
    public function testOnCoreSecurityDoesNotTryToPopulateNonEmptyTokenStorage()
    {
        list(\$listener, \$tokenStorage) = \$this->getListener();

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock())
        ;

        \$tokenStorage
            ->expects(\$this->never())
            ->method('setToken')
        ;

        \$this->assertNull(\$listener(\$this->getGetResponseEvent()));
    }

    public function testOnCoreSecurityDoesNothingWhenNoCookieIsSet()
    {
        list(\$listener, \$tokenStorage, \$service) = \$this->getListener();

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(null)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(new Request())
        ;

        \$this->assertNull(\$listener(\$event));
    }

    public function testOnCoreSecurityIgnoresAuthenticationExceptionThrownByAuthenticationManagerImplementation()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager) = \$this->getListener();
        \$request = new Request();
        \$exception = new AuthenticationException('Authentication failed.');

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock())
        ;

        \$service
            ->expects(\$this->once())
            ->method('loginFail')
            ->with(\$request, \$exception)
        ;

        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willThrowException(\$exception)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    public function testOnCoreSecurityIgnoresAuthenticationOptionallyRethrowsExceptionThrownAuthenticationManagerImplementation()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException');
        \$this->expectExceptionMessage('Authentication failed.');
        list(\$listener, \$tokenStorage, \$service, \$manager) = \$this->getListener(false, false);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock())
        ;

        \$service
            ->expects(\$this->once())
            ->method('loginFail')
        ;

        \$exception = new AuthenticationException('Authentication failed.');
        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willThrowException(\$exception)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(new Request())
        ;

        \$listener(\$event);
    }

    public function testOnCoreSecurityAuthenticationExceptionDuringAutoLoginTriggersLoginFail()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager) = \$this->getListener();

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$exception = new AuthenticationException('Authentication failed.');
        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willThrowException(\$exception)
        ;

        \$service
            ->expects(\$this->once())
            ->method('loginFail')
        ;

        \$manager
            ->expects(\$this->never())
            ->method('authenticate')
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(new Request())
        ;

        \$listener(\$event);
    }

    public function testOnCoreSecurity()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager) = \$this->getListener();

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$token)
        ;

        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$token))
        ;

        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willReturn(\$token)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(new Request())
        ;

        \$listener(\$event);
    }

    public function testSessionStrategy()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager, , \$dispatcher, \$sessionStrategy) = \$this->getListener(false, true, true);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$token)
        ;

        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$token))
        ;

        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willReturn(\$token)
        ;

        \$session = \$this->getMockBuilder('\\Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$session
            ->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(true)
        ;

        \$request = \$this->getMockBuilder('\\Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request
            ->expects(\$this->once())
            ->method('hasSession')
            ->willReturn(true)
        ;

        \$request
            ->expects(\$this->once())
            ->method('getSession')
            ->willReturn(\$session)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$sessionStrategy
            ->expects(\$this->once())
            ->method('onAuthentication')
            ->willReturn(null)
        ;

        \$listener(\$event);
    }

    public function testSessionIsMigratedByDefault()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager, , \$dispatcher, \$sessionStrategy) = \$this->getListener(false, true, false);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$token)
        ;

        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$token))
        ;

        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willReturn(\$token)
        ;

        \$session = \$this->getMockBuilder('\\Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$session
            ->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(true)
        ;
        \$session
            ->expects(\$this->once())
            ->method('migrate')
        ;

        \$request = \$this->getMockBuilder('\\Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request
            ->expects(\$this->any())
            ->method('hasSession')
            ->willReturn(true)
        ;

        \$request
            ->expects(\$this->any())
            ->method('getSession')
            ->willReturn(\$session)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    public function testOnCoreSecurityInteractiveLoginEventIsDispatchedIfDispatcherIsPresent()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager, , \$dispatcher) = \$this->getListener(true);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$token)
        ;

        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$token))
        ;

        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willReturn(\$token)
        ;

        \$event = \$this->getGetResponseEvent();
        \$request = new Request();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->isInstanceOf('Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent'),
                SecurityEvents::INTERACTIVE_LOGIN
            )
        ;

        \$listener(\$event);
    }

    protected function getGetResponseEvent()
    {
        return \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
    }

    protected function getResponseEvent(): ResponseEvent
    {
        return \$this->getMockBuilder(ResponseEvent::class)->disableOriginalConstructor()->getMock();
    }

    protected function getListener(\$withDispatcher = false, \$catchExceptions = true, \$withSessionStrategy = false)
    {
        \$listener = new RememberMeListener(
            \$tokenStorage = \$this->getTokenStorage(),
            \$service = \$this->getService(),
            \$manager = \$this->getManager(),
            \$logger = \$this->getLogger(),
            \$dispatcher = (\$withDispatcher ? \$this->getDispatcher() : null),
            \$catchExceptions,
            \$sessionStrategy = (\$withSessionStrategy ? \$this->getSessionStrategy() : null)
        );

        return [\$listener, \$tokenStorage, \$service, \$manager, \$logger, \$dispatcher, \$sessionStrategy];
    }

    protected function getLogger()
    {
        return \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
    }

    protected function getManager()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();
    }

    protected function getService()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface')->getMock();
    }

    protected function getTokenStorage()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
    }

    protected function getDispatcher()
    {
        return \$this->getMockBuilder(EventDispatcherInterface::class)->getMock();
    }

    private function getSessionStrategy()
    {
        return \$this->getMockBuilder('\\Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Firewall/RememberMeListenerTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\Firewall;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

class RememberMeListenerTest extends TestCase
{
    public function testOnCoreSecurityDoesNotTryToPopulateNonEmptyTokenStorage()
    {
        list(\$listener, \$tokenStorage) = \$this->getListener();

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock())
        ;

        \$tokenStorage
            ->expects(\$this->never())
            ->method('setToken')
        ;

        \$this->assertNull(\$listener(\$this->getGetResponseEvent()));
    }

    public function testOnCoreSecurityDoesNothingWhenNoCookieIsSet()
    {
        list(\$listener, \$tokenStorage, \$service) = \$this->getListener();

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(null)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(new Request())
        ;

        \$this->assertNull(\$listener(\$event));
    }

    public function testOnCoreSecurityIgnoresAuthenticationExceptionThrownByAuthenticationManagerImplementation()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager) = \$this->getListener();
        \$request = new Request();
        \$exception = new AuthenticationException('Authentication failed.');

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock())
        ;

        \$service
            ->expects(\$this->once())
            ->method('loginFail')
            ->with(\$request, \$exception)
        ;

        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willThrowException(\$exception)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    public function testOnCoreSecurityIgnoresAuthenticationOptionallyRethrowsExceptionThrownAuthenticationManagerImplementation()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException');
        \$this->expectExceptionMessage('Authentication failed.');
        list(\$listener, \$tokenStorage, \$service, \$manager) = \$this->getListener(false, false);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock())
        ;

        \$service
            ->expects(\$this->once())
            ->method('loginFail')
        ;

        \$exception = new AuthenticationException('Authentication failed.');
        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willThrowException(\$exception)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(new Request())
        ;

        \$listener(\$event);
    }

    public function testOnCoreSecurityAuthenticationExceptionDuringAutoLoginTriggersLoginFail()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager) = \$this->getListener();

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$exception = new AuthenticationException('Authentication failed.');
        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willThrowException(\$exception)
        ;

        \$service
            ->expects(\$this->once())
            ->method('loginFail')
        ;

        \$manager
            ->expects(\$this->never())
            ->method('authenticate')
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(new Request())
        ;

        \$listener(\$event);
    }

    public function testOnCoreSecurity()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager) = \$this->getListener();

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$token)
        ;

        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$token))
        ;

        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willReturn(\$token)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(new Request())
        ;

        \$listener(\$event);
    }

    public function testSessionStrategy()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager, , \$dispatcher, \$sessionStrategy) = \$this->getListener(false, true, true);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$token)
        ;

        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$token))
        ;

        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willReturn(\$token)
        ;

        \$session = \$this->getMockBuilder('\\Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$session
            ->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(true)
        ;

        \$request = \$this->getMockBuilder('\\Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request
            ->expects(\$this->once())
            ->method('hasSession')
            ->willReturn(true)
        ;

        \$request
            ->expects(\$this->once())
            ->method('getSession')
            ->willReturn(\$session)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$sessionStrategy
            ->expects(\$this->once())
            ->method('onAuthentication')
            ->willReturn(null)
        ;

        \$listener(\$event);
    }

    public function testSessionIsMigratedByDefault()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager, , \$dispatcher, \$sessionStrategy) = \$this->getListener(false, true, false);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$token)
        ;

        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$token))
        ;

        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willReturn(\$token)
        ;

        \$session = \$this->getMockBuilder('\\Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$session
            ->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(true)
        ;
        \$session
            ->expects(\$this->once())
            ->method('migrate')
        ;

        \$request = \$this->getMockBuilder('\\Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request
            ->expects(\$this->any())
            ->method('hasSession')
            ->willReturn(true)
        ;

        \$request
            ->expects(\$this->any())
            ->method('getSession')
            ->willReturn(\$session)
        ;

        \$event = \$this->getGetResponseEvent();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    public function testOnCoreSecurityInteractiveLoginEventIsDispatchedIfDispatcherIsPresent()
    {
        list(\$listener, \$tokenStorage, \$service, \$manager, , \$dispatcher) = \$this->getListener(true);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$service
            ->expects(\$this->once())
            ->method('autoLogin')
            ->willReturn(\$token)
        ;

        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$token))
        ;

        \$manager
            ->expects(\$this->once())
            ->method('authenticate')
            ->willReturn(\$token)
        ;

        \$event = \$this->getGetResponseEvent();
        \$request = new Request();
        \$event
            ->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->isInstanceOf('Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent'),
                SecurityEvents::INTERACTIVE_LOGIN
            )
        ;

        \$listener(\$event);
    }

    protected function getGetResponseEvent()
    {
        return \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
    }

    protected function getResponseEvent(): ResponseEvent
    {
        return \$this->getMockBuilder(ResponseEvent::class)->disableOriginalConstructor()->getMock();
    }

    protected function getListener(\$withDispatcher = false, \$catchExceptions = true, \$withSessionStrategy = false)
    {
        \$listener = new RememberMeListener(
            \$tokenStorage = \$this->getTokenStorage(),
            \$service = \$this->getService(),
            \$manager = \$this->getManager(),
            \$logger = \$this->getLogger(),
            \$dispatcher = (\$withDispatcher ? \$this->getDispatcher() : null),
            \$catchExceptions,
            \$sessionStrategy = (\$withSessionStrategy ? \$this->getSessionStrategy() : null)
        );

        return [\$listener, \$tokenStorage, \$service, \$manager, \$logger, \$dispatcher, \$sessionStrategy];
    }

    protected function getLogger()
    {
        return \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
    }

    protected function getManager()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();
    }

    protected function getService()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface')->getMock();
    }

    protected function getTokenStorage()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
    }

    protected function getDispatcher()
    {
        return \$this->getMockBuilder(EventDispatcherInterface::class)->getMock();
    }

    private function getSessionStrategy()
    {
        return \$this->getMockBuilder('\\Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface')->getMock();
    }
}
", "vendor/symfony/security-http/Tests/Firewall/RememberMeListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Firewall/RememberMeListenerTest.php");
    }
}
