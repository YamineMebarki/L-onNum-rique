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

/* vendor/symfony/security-http/Tests/Firewall/SimplePreAuthenticationListenerTest.php */
class __TwigTemplate_5de3e42f61ded9defdfca257be5f24964b734b65a797aca6debbeb508ee8a729 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/SimplePreAuthenticationListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/SimplePreAuthenticationListenerTest.php"));

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
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener;
use Symfony\\Component\\Security\\Http\\SecurityEvents;

/**
 * @group legacy
 */
class SimplePreAuthenticationListenerTest extends TestCase
{
    private \$authenticationManager;
    private \$dispatcher;
    private \$event;
    private \$logger;
    private \$request;
    private \$tokenStorage;
    private \$token;

    public function testHandle()
    {
        \$this->tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$this->token))
        ;

        \$this->authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->equalTo(\$this->token))
            ->willReturn(\$this->token)
        ;

        \$simpleAuthenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authentication\\SimplePreAuthenticatorInterface')->getMock();
        \$simpleAuthenticator
            ->expects(\$this->once())
            ->method('createToken')
            ->with(\$this->equalTo(\$this->request), \$this->equalTo('secured_area'))
            ->willReturn(\$this->token)
        ;

        \$loginEvent = new InteractiveLoginEvent(\$this->request, \$this->token);

        \$this->dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->equalTo(\$loginEvent), \$this->equalTo(SecurityEvents::INTERACTIVE_LOGIN))
        ;

        \$listener = new SimplePreAuthenticationListener(\$this->tokenStorage, \$this->authenticationManager, 'secured_area', \$simpleAuthenticator, \$this->logger, \$this->dispatcher);

        \$listener(\$this->event);
    }

    public function testHandlecatchAuthenticationException()
    {
        \$exception = new AuthenticationException('Authentication failed.');

        \$this->authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->equalTo(\$this->token))
            ->willThrowException(\$exception)
        ;

        \$this->tokenStorage->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(null))
        ;

        \$simpleAuthenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authentication\\SimplePreAuthenticatorInterface')->getMock();
        \$simpleAuthenticator
            ->expects(\$this->once())
            ->method('createToken')
            ->with(\$this->equalTo(\$this->request), \$this->equalTo('secured_area'))
            ->willReturn(\$this->token)
        ;

        \$listener = new SimplePreAuthenticationListener(\$this->tokenStorage, \$this->authenticationManager, 'secured_area', \$simpleAuthenticator, \$this->logger, \$this->dispatcher);

        \$listener(\$this->event);
    }

    protected function setUp(): void
    {
        \$this->authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        \$this->dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();

        \$this->request = new Request([], [], [], [], [], []);

        \$this->event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$this->event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$this->request)
        ;

        \$this->logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$this->tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
    }

    protected function tearDown(): void
    {
        \$this->authenticationManager = null;
        \$this->dispatcher = null;
        \$this->event = null;
        \$this->logger = null;
        \$this->request = null;
        \$this->tokenStorage = null;
        \$this->token = null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Firewall/SimplePreAuthenticationListenerTest.php";
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
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener;
use Symfony\\Component\\Security\\Http\\SecurityEvents;

/**
 * @group legacy
 */
class SimplePreAuthenticationListenerTest extends TestCase
{
    private \$authenticationManager;
    private \$dispatcher;
    private \$event;
    private \$logger;
    private \$request;
    private \$tokenStorage;
    private \$token;

    public function testHandle()
    {
        \$this->tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$this->token))
        ;

        \$this->authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->equalTo(\$this->token))
            ->willReturn(\$this->token)
        ;

        \$simpleAuthenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authentication\\SimplePreAuthenticatorInterface')->getMock();
        \$simpleAuthenticator
            ->expects(\$this->once())
            ->method('createToken')
            ->with(\$this->equalTo(\$this->request), \$this->equalTo('secured_area'))
            ->willReturn(\$this->token)
        ;

        \$loginEvent = new InteractiveLoginEvent(\$this->request, \$this->token);

        \$this->dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->equalTo(\$loginEvent), \$this->equalTo(SecurityEvents::INTERACTIVE_LOGIN))
        ;

        \$listener = new SimplePreAuthenticationListener(\$this->tokenStorage, \$this->authenticationManager, 'secured_area', \$simpleAuthenticator, \$this->logger, \$this->dispatcher);

        \$listener(\$this->event);
    }

    public function testHandlecatchAuthenticationException()
    {
        \$exception = new AuthenticationException('Authentication failed.');

        \$this->authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->equalTo(\$this->token))
            ->willThrowException(\$exception)
        ;

        \$this->tokenStorage->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(null))
        ;

        \$simpleAuthenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authentication\\SimplePreAuthenticatorInterface')->getMock();
        \$simpleAuthenticator
            ->expects(\$this->once())
            ->method('createToken')
            ->with(\$this->equalTo(\$this->request), \$this->equalTo('secured_area'))
            ->willReturn(\$this->token)
        ;

        \$listener = new SimplePreAuthenticationListener(\$this->tokenStorage, \$this->authenticationManager, 'secured_area', \$simpleAuthenticator, \$this->logger, \$this->dispatcher);

        \$listener(\$this->event);
    }

    protected function setUp(): void
    {
        \$this->authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        \$this->dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();

        \$this->request = new Request([], [], [], [], [], []);

        \$this->event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$this->event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$this->request)
        ;

        \$this->logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$this->tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
    }

    protected function tearDown(): void
    {
        \$this->authenticationManager = null;
        \$this->dispatcher = null;
        \$this->event = null;
        \$this->logger = null;
        \$this->request = null;
        \$this->tokenStorage = null;
        \$this->token = null;
    }
}
", "vendor/symfony/security-http/Tests/Firewall/SimplePreAuthenticationListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Firewall/SimplePreAuthenticationListenerTest.php");
    }
}
