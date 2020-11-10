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

/* vendor/symfony/http-kernel/Tests/EventListener/SessionListenerTest.php */
class __TwigTemplate_c53e10ca4de98dcff75abdaa2155e515f4805d9635b4ae8ef4724096292609d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/SessionListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/SessionListenerTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\AbstractSessionListener;
use Symfony\\Component\\HttpKernel\\EventListener\\SessionListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

class SessionListenerTest extends TestCase
{
    public function testOnlyTriggeredOnMasterRequest()
    {
        \$listener = \$this->getMockForAbstractClass(AbstractSessionListener::class);
        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event->expects(\$this->once())->method('isMasterRequest')->willReturn(false);
        \$event->expects(\$this->never())->method('getRequest');

        // sub request
        \$listener->onKernelRequest(\$event);
    }

    public function testSessionIsSet()
    {
        \$session = \$this->getMockBuilder(Session::class)->disableOriginalConstructor()->getMock();

        \$requestStack = \$this->getMockBuilder(RequestStack::class)->getMock();
        \$requestStack->expects(\$this->once())->method('getMasterRequest')->willReturn(null);

        \$sessionStorage = \$this->getMockBuilder(NativeSessionStorage::class)->getMock();
        \$sessionStorage->expects(\$this->never())->method('setOptions')->with(['cookie_secure' => true]);

        \$container = new Container();
        \$container->set('session', \$session);
        \$container->set('request_stack', \$requestStack);
        \$container->set('session_storage', \$sessionStorage);

        \$request = new Request();
        \$listener = new SessionListener(\$container);

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event->expects(\$this->once())->method('isMasterRequest')->willReturn(true);
        \$event->expects(\$this->once())->method('getRequest')->willReturn(\$request);

        \$listener->onKernelRequest(\$event);

        \$this->assertTrue(\$request->hasSession());
        \$this->assertSame(\$session, \$request->getSession());
    }

    public function testResponseIsPrivateIfSessionStarted()
    {
        \$session = \$this->getMockBuilder(Session::class)->disableOriginalConstructor()->getMock();
        \$session->expects(\$this->exactly(2))->method('getUsageIndex')->will(\$this->onConsecutiveCalls(0, 1));

        \$container = new Container();
        \$container->set('initialized_session', \$session);

        \$listener = new SessionListener(\$container);
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();

        \$request = new Request();
        \$listener->onKernelRequest(new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST));

        \$response = new Response();
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, \$response));

        \$this->assertTrue(\$response->headers->has('Expires'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('private'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('must-revalidate'));
        \$this->assertSame('0', \$response->headers->getCacheControlDirective('max-age'));
        \$this->assertLessThanOrEqual((new \\DateTime('now', new \\DateTimeZone('UTC'))), (new \\DateTime(\$response->headers->get('Expires'))));
        \$this->assertFalse(\$response->headers->has(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER));
    }

    public function testResponseIsStillPublicIfSessionStartedAndHeaderPresent()
    {
        \$session = \$this->getMockBuilder(Session::class)->disableOriginalConstructor()->getMock();
        \$session->expects(\$this->exactly(2))->method('getUsageIndex')->will(\$this->onConsecutiveCalls(0, 1));

        \$container = new Container();
        \$container->set('initialized_session', \$session);

        \$listener = new SessionListener(\$container);
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();

        \$request = new Request();
        \$listener->onKernelRequest(new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST));

        \$response = new Response();
        \$response->setSharedMaxAge(60);
        \$response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, \$response));

        \$this->assertTrue(\$response->headers->hasCacheControlDirective('public'));
        \$this->assertFalse(\$response->headers->has('Expires'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('private'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('must-revalidate'));
        \$this->assertSame('60', \$response->headers->getCacheControlDirective('s-maxage'));
        \$this->assertFalse(\$response->headers->has(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER));
    }

    public function testUninitializedSession()
    {
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();
        \$response = new Response();
        \$response->setSharedMaxAge(60);
        \$response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');

        \$container = new ServiceLocator([
            'initialized_session' => function () {},
        ]);

        \$listener = new SessionListener(\$container);
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, \$response));
        \$this->assertFalse(\$response->headers->has('Expires'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('public'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('private'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('must-revalidate'));
        \$this->assertSame('60', \$response->headers->getCacheControlDirective('s-maxage'));
        \$this->assertFalse(\$response->headers->has(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER));
    }

    public function testSurrogateMasterRequestIsPublic()
    {
        \$session = \$this->getMockBuilder(Session::class)->disableOriginalConstructor()->getMock();
        \$session->expects(\$this->exactly(4))->method('getUsageIndex')->will(\$this->onConsecutiveCalls(0, 1, 1, 1));

        \$container = new Container();
        \$container->set('initialized_session', \$session);
        \$container->set('session', \$session);

        \$listener = new SessionListener(\$container);
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();

        \$request = new Request();
        \$response = new Response();
        \$response->setCache(['public' => true, 'max_age' => '30']);
        \$listener->onKernelRequest(new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST));
        \$this->assertTrue(\$request->hasSession());

        \$subRequest = clone \$request;
        \$this->assertSame(\$request->getSession(), \$subRequest->getSession());
        \$listener->onKernelRequest(new RequestEvent(\$kernel, \$subRequest, HttpKernelInterface::MASTER_REQUEST));
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, \$subRequest, HttpKernelInterface::MASTER_REQUEST, \$response));
        \$listener->onFinishRequest(new FinishRequestEvent(\$kernel, \$subRequest, HttpKernelInterface::MASTER_REQUEST));

        \$this->assertFalse(\$response->headers->has('Expires'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('private'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('must-revalidate'));
        \$this->assertSame('30', \$response->headers->getCacheControlDirective('max-age'));

        \$listener->onKernelResponse(new ResponseEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST, \$response));

        \$this->assertTrue(\$response->headers->hasCacheControlDirective('private'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('must-revalidate'));
        \$this->assertSame('0', \$response->headers->getCacheControlDirective('max-age'));

        \$this->assertTrue(\$response->headers->has('Expires'));
        \$this->assertLessThanOrEqual((new \\DateTime('now', new \\DateTimeZone('UTC'))), (new \\DateTime(\$response->headers->get('Expires'))));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/SessionListenerTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\AbstractSessionListener;
use Symfony\\Component\\HttpKernel\\EventListener\\SessionListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

class SessionListenerTest extends TestCase
{
    public function testOnlyTriggeredOnMasterRequest()
    {
        \$listener = \$this->getMockForAbstractClass(AbstractSessionListener::class);
        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event->expects(\$this->once())->method('isMasterRequest')->willReturn(false);
        \$event->expects(\$this->never())->method('getRequest');

        // sub request
        \$listener->onKernelRequest(\$event);
    }

    public function testSessionIsSet()
    {
        \$session = \$this->getMockBuilder(Session::class)->disableOriginalConstructor()->getMock();

        \$requestStack = \$this->getMockBuilder(RequestStack::class)->getMock();
        \$requestStack->expects(\$this->once())->method('getMasterRequest')->willReturn(null);

        \$sessionStorage = \$this->getMockBuilder(NativeSessionStorage::class)->getMock();
        \$sessionStorage->expects(\$this->never())->method('setOptions')->with(['cookie_secure' => true]);

        \$container = new Container();
        \$container->set('session', \$session);
        \$container->set('request_stack', \$requestStack);
        \$container->set('session_storage', \$sessionStorage);

        \$request = new Request();
        \$listener = new SessionListener(\$container);

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event->expects(\$this->once())->method('isMasterRequest')->willReturn(true);
        \$event->expects(\$this->once())->method('getRequest')->willReturn(\$request);

        \$listener->onKernelRequest(\$event);

        \$this->assertTrue(\$request->hasSession());
        \$this->assertSame(\$session, \$request->getSession());
    }

    public function testResponseIsPrivateIfSessionStarted()
    {
        \$session = \$this->getMockBuilder(Session::class)->disableOriginalConstructor()->getMock();
        \$session->expects(\$this->exactly(2))->method('getUsageIndex')->will(\$this->onConsecutiveCalls(0, 1));

        \$container = new Container();
        \$container->set('initialized_session', \$session);

        \$listener = new SessionListener(\$container);
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();

        \$request = new Request();
        \$listener->onKernelRequest(new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST));

        \$response = new Response();
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, \$response));

        \$this->assertTrue(\$response->headers->has('Expires'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('private'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('must-revalidate'));
        \$this->assertSame('0', \$response->headers->getCacheControlDirective('max-age'));
        \$this->assertLessThanOrEqual((new \\DateTime('now', new \\DateTimeZone('UTC'))), (new \\DateTime(\$response->headers->get('Expires'))));
        \$this->assertFalse(\$response->headers->has(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER));
    }

    public function testResponseIsStillPublicIfSessionStartedAndHeaderPresent()
    {
        \$session = \$this->getMockBuilder(Session::class)->disableOriginalConstructor()->getMock();
        \$session->expects(\$this->exactly(2))->method('getUsageIndex')->will(\$this->onConsecutiveCalls(0, 1));

        \$container = new Container();
        \$container->set('initialized_session', \$session);

        \$listener = new SessionListener(\$container);
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();

        \$request = new Request();
        \$listener->onKernelRequest(new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST));

        \$response = new Response();
        \$response->setSharedMaxAge(60);
        \$response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, \$response));

        \$this->assertTrue(\$response->headers->hasCacheControlDirective('public'));
        \$this->assertFalse(\$response->headers->has('Expires'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('private'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('must-revalidate'));
        \$this->assertSame('60', \$response->headers->getCacheControlDirective('s-maxage'));
        \$this->assertFalse(\$response->headers->has(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER));
    }

    public function testUninitializedSession()
    {
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();
        \$response = new Response();
        \$response->setSharedMaxAge(60);
        \$response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');

        \$container = new ServiceLocator([
            'initialized_session' => function () {},
        ]);

        \$listener = new SessionListener(\$container);
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, \$response));
        \$this->assertFalse(\$response->headers->has('Expires'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('public'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('private'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('must-revalidate'));
        \$this->assertSame('60', \$response->headers->getCacheControlDirective('s-maxage'));
        \$this->assertFalse(\$response->headers->has(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER));
    }

    public function testSurrogateMasterRequestIsPublic()
    {
        \$session = \$this->getMockBuilder(Session::class)->disableOriginalConstructor()->getMock();
        \$session->expects(\$this->exactly(4))->method('getUsageIndex')->will(\$this->onConsecutiveCalls(0, 1, 1, 1));

        \$container = new Container();
        \$container->set('initialized_session', \$session);
        \$container->set('session', \$session);

        \$listener = new SessionListener(\$container);
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();

        \$request = new Request();
        \$response = new Response();
        \$response->setCache(['public' => true, 'max_age' => '30']);
        \$listener->onKernelRequest(new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST));
        \$this->assertTrue(\$request->hasSession());

        \$subRequest = clone \$request;
        \$this->assertSame(\$request->getSession(), \$subRequest->getSession());
        \$listener->onKernelRequest(new RequestEvent(\$kernel, \$subRequest, HttpKernelInterface::MASTER_REQUEST));
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, \$subRequest, HttpKernelInterface::MASTER_REQUEST, \$response));
        \$listener->onFinishRequest(new FinishRequestEvent(\$kernel, \$subRequest, HttpKernelInterface::MASTER_REQUEST));

        \$this->assertFalse(\$response->headers->has('Expires'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('private'));
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('must-revalidate'));
        \$this->assertSame('30', \$response->headers->getCacheControlDirective('max-age'));

        \$listener->onKernelResponse(new ResponseEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST, \$response));

        \$this->assertTrue(\$response->headers->hasCacheControlDirective('private'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('must-revalidate'));
        \$this->assertSame('0', \$response->headers->getCacheControlDirective('max-age'));

        \$this->assertTrue(\$response->headers->has('Expires'));
        \$this->assertLessThanOrEqual((new \\DateTime('now', new \\DateTimeZone('UTC'))), (new \\DateTime(\$response->headers->get('Expires'))));
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/SessionListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/SessionListenerTest.php");
    }
}
