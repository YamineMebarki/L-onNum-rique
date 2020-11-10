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

/* vendor/symfony/http-kernel/Tests/EventListener/RouterListenerTest.php */
class __TwigTemplate_4f7d98e07abf033e290c20c380bd93d09d857d609c8541079ac917e94aed6a6d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/RouterListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/RouterListenerTest.php"));

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
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolver;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener;
use Symfony\\Component\\HttpKernel\\EventListener\\RouterListener;
use Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener;
use Symfony\\Component\\HttpKernel\\HttpKernel;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Routing\\Exception\\NoConfigurationException;
use Symfony\\Component\\Routing\\RequestContext;

class RouterListenerTest extends TestCase
{
    private \$requestStack;

    protected function setUp(): void
    {
        \$this->requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->disableOriginalConstructor()->getMock();
    }

    /**
     * @dataProvider getPortData
     */
    public function testPort(\$defaultHttpPort, \$defaultHttpsPort, \$uri, \$expectedHttpPort, \$expectedHttpsPort)
    {
        \$urlMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface')
            ->disableOriginalConstructor()
            ->getMock();
        \$context = new RequestContext();
        \$context->setHttpPort(\$defaultHttpPort);
        \$context->setHttpsPort(\$defaultHttpsPort);
        \$urlMatcher->expects(\$this->any())
            ->method('getContext')
            ->willReturn(\$context);

        \$listener = new RouterListener(\$urlMatcher, \$this->requestStack);
        \$event = \$this->createRequestEventForUri(\$uri);
        \$listener->onKernelRequest(\$event);

        \$this->assertEquals(\$expectedHttpPort, \$context->getHttpPort());
        \$this->assertEquals(\$expectedHttpsPort, \$context->getHttpsPort());
        \$this->assertEquals(0 === strpos(\$uri, 'https') ? 'https' : 'http', \$context->getScheme());
    }

    public function getPortData()
    {
        return [
            [80, 443, 'http://localhost/', 80, 443],
            [80, 443, 'http://localhost:90/', 90, 443],
            [80, 443, 'https://localhost/', 80, 443],
            [80, 443, 'https://localhost:90/', 80, 90],
        ];
    }

    private function createRequestEventForUri(string \$uri): RequestEvent
    {
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create(\$uri);
        \$request->attributes->set('_controller', null); // Prevents going in to routing process

        return new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);
    }

    public function testInvalidMatcher()
    {
        \$this->expectException('InvalidArgumentException');
        new RouterListener(new \\stdClass(), \$this->requestStack);
    }

    public function testRequestMatcher()
    {
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('http://localhost/');
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);

        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$requestMatcher->expects(\$this->once())
                       ->method('matchRequest')
                       ->with(\$this->isInstanceOf('Symfony\\Component\\HttpFoundation\\Request'))
                       ->willReturn([]);

        \$listener = new RouterListener(\$requestMatcher, \$this->requestStack, new RequestContext());
        \$listener->onKernelRequest(\$event);
    }

    public function testSubRequestWithDifferentMethod()
    {
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('http://localhost/', 'post');
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);

        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$requestMatcher->expects(\$this->any())
                       ->method('matchRequest')
                       ->with(\$this->isInstanceOf('Symfony\\Component\\HttpFoundation\\Request'))
                       ->willReturn([]);

        \$context = new RequestContext();

        \$listener = new RouterListener(\$requestMatcher, \$this->requestStack, new RequestContext());
        \$listener->onKernelRequest(\$event);

        // sub-request with another HTTP method
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('http://localhost/', 'get');
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::SUB_REQUEST);

        \$listener->onKernelRequest(\$event);

        \$this->assertEquals('GET', \$context->getMethod());
    }

    /**
     * @dataProvider getLoggingParameterData
     */
    public function testLoggingParameter(\$parameter, \$log, \$parameters)
    {
        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$requestMatcher->expects(\$this->once())
            ->method('matchRequest')
            ->willReturn(\$parameter);

        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$logger->expects(\$this->once())
            ->method('info')
            ->with(\$this->equalTo(\$log), \$this->equalTo(\$parameters));

        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('http://localhost/');

        \$listener = new RouterListener(\$requestMatcher, \$this->requestStack, new RequestContext(), \$logger);
        \$listener->onKernelRequest(new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST));
    }

    public function getLoggingParameterData()
    {
        return [
            [['_route' => 'foo'], 'Matched route \"{route}\".', ['route' => 'foo', 'route_parameters' => ['_route' => 'foo'], 'request_uri' => 'http://localhost/', 'method' => 'GET']],
            [[], 'Matched route \"{route}\".', ['route' => 'n/a', 'route_parameters' => [], 'request_uri' => 'http://localhost/', 'method' => 'GET']],
        ];
    }

    public function testWithBadRequest()
    {
        \$requestStack = new RequestStack();

        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$requestMatcher->expects(\$this->never())->method('matchRequest');

        \$dispatcher = new EventDispatcher();
        \$dispatcher->addSubscriber(new ValidateRequestListener());
        \$dispatcher->addSubscriber(new RouterListener(\$requestMatcher, \$requestStack, new RequestContext()));
        \$dispatcher->addSubscriber(new ExceptionListener(function () {
            return new Response('Exception handled', 400);
        }));

        \$kernel = new HttpKernel(\$dispatcher, new ControllerResolver(), \$requestStack, new ArgumentResolver());

        \$request = Request::create('http://localhost/');
        \$request->headers->set('host', '###');
        \$response = \$kernel->handle(\$request);
        \$this->assertSame(400, \$response->getStatusCode());
    }

    public function testNoRoutingConfigurationResponse()
    {
        \$requestStack = new RequestStack();

        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$requestMatcher
            ->expects(\$this->once())
            ->method('matchRequest')
            ->willThrowException(new NoConfigurationException())
        ;

        \$dispatcher = new EventDispatcher();
        \$dispatcher->addSubscriber(new RouterListener(\$requestMatcher, \$requestStack, new RequestContext()));

        \$kernel = new HttpKernel(\$dispatcher, new ControllerResolver(), \$requestStack, new ArgumentResolver());

        \$request = Request::create('http://localhost/');
        \$response = \$kernel->handle(\$request);
        \$this->assertSame(404, \$response->getStatusCode());
        \$this->assertStringContainsString('Welcome', \$response->getContent());
    }

    public function testRequestWithBadHost()
    {
        \$this->expectException('Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException');
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('http://bad host %22/');
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);

        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();

        \$listener = new RouterListener(\$requestMatcher, \$this->requestStack, new RequestContext());
        \$listener->onKernelRequest(\$event);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/RouterListenerTest.php";
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
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolver;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener;
use Symfony\\Component\\HttpKernel\\EventListener\\RouterListener;
use Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener;
use Symfony\\Component\\HttpKernel\\HttpKernel;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Routing\\Exception\\NoConfigurationException;
use Symfony\\Component\\Routing\\RequestContext;

class RouterListenerTest extends TestCase
{
    private \$requestStack;

    protected function setUp(): void
    {
        \$this->requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->disableOriginalConstructor()->getMock();
    }

    /**
     * @dataProvider getPortData
     */
    public function testPort(\$defaultHttpPort, \$defaultHttpsPort, \$uri, \$expectedHttpPort, \$expectedHttpsPort)
    {
        \$urlMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface')
            ->disableOriginalConstructor()
            ->getMock();
        \$context = new RequestContext();
        \$context->setHttpPort(\$defaultHttpPort);
        \$context->setHttpsPort(\$defaultHttpsPort);
        \$urlMatcher->expects(\$this->any())
            ->method('getContext')
            ->willReturn(\$context);

        \$listener = new RouterListener(\$urlMatcher, \$this->requestStack);
        \$event = \$this->createRequestEventForUri(\$uri);
        \$listener->onKernelRequest(\$event);

        \$this->assertEquals(\$expectedHttpPort, \$context->getHttpPort());
        \$this->assertEquals(\$expectedHttpsPort, \$context->getHttpsPort());
        \$this->assertEquals(0 === strpos(\$uri, 'https') ? 'https' : 'http', \$context->getScheme());
    }

    public function getPortData()
    {
        return [
            [80, 443, 'http://localhost/', 80, 443],
            [80, 443, 'http://localhost:90/', 90, 443],
            [80, 443, 'https://localhost/', 80, 443],
            [80, 443, 'https://localhost:90/', 80, 90],
        ];
    }

    private function createRequestEventForUri(string \$uri): RequestEvent
    {
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create(\$uri);
        \$request->attributes->set('_controller', null); // Prevents going in to routing process

        return new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);
    }

    public function testInvalidMatcher()
    {
        \$this->expectException('InvalidArgumentException');
        new RouterListener(new \\stdClass(), \$this->requestStack);
    }

    public function testRequestMatcher()
    {
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('http://localhost/');
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);

        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$requestMatcher->expects(\$this->once())
                       ->method('matchRequest')
                       ->with(\$this->isInstanceOf('Symfony\\Component\\HttpFoundation\\Request'))
                       ->willReturn([]);

        \$listener = new RouterListener(\$requestMatcher, \$this->requestStack, new RequestContext());
        \$listener->onKernelRequest(\$event);
    }

    public function testSubRequestWithDifferentMethod()
    {
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('http://localhost/', 'post');
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);

        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$requestMatcher->expects(\$this->any())
                       ->method('matchRequest')
                       ->with(\$this->isInstanceOf('Symfony\\Component\\HttpFoundation\\Request'))
                       ->willReturn([]);

        \$context = new RequestContext();

        \$listener = new RouterListener(\$requestMatcher, \$this->requestStack, new RequestContext());
        \$listener->onKernelRequest(\$event);

        // sub-request with another HTTP method
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('http://localhost/', 'get');
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::SUB_REQUEST);

        \$listener->onKernelRequest(\$event);

        \$this->assertEquals('GET', \$context->getMethod());
    }

    /**
     * @dataProvider getLoggingParameterData
     */
    public function testLoggingParameter(\$parameter, \$log, \$parameters)
    {
        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$requestMatcher->expects(\$this->once())
            ->method('matchRequest')
            ->willReturn(\$parameter);

        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$logger->expects(\$this->once())
            ->method('info')
            ->with(\$this->equalTo(\$log), \$this->equalTo(\$parameters));

        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('http://localhost/');

        \$listener = new RouterListener(\$requestMatcher, \$this->requestStack, new RequestContext(), \$logger);
        \$listener->onKernelRequest(new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST));
    }

    public function getLoggingParameterData()
    {
        return [
            [['_route' => 'foo'], 'Matched route \"{route}\".', ['route' => 'foo', 'route_parameters' => ['_route' => 'foo'], 'request_uri' => 'http://localhost/', 'method' => 'GET']],
            [[], 'Matched route \"{route}\".', ['route' => 'n/a', 'route_parameters' => [], 'request_uri' => 'http://localhost/', 'method' => 'GET']],
        ];
    }

    public function testWithBadRequest()
    {
        \$requestStack = new RequestStack();

        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$requestMatcher->expects(\$this->never())->method('matchRequest');

        \$dispatcher = new EventDispatcher();
        \$dispatcher->addSubscriber(new ValidateRequestListener());
        \$dispatcher->addSubscriber(new RouterListener(\$requestMatcher, \$requestStack, new RequestContext()));
        \$dispatcher->addSubscriber(new ExceptionListener(function () {
            return new Response('Exception handled', 400);
        }));

        \$kernel = new HttpKernel(\$dispatcher, new ControllerResolver(), \$requestStack, new ArgumentResolver());

        \$request = Request::create('http://localhost/');
        \$request->headers->set('host', '###');
        \$response = \$kernel->handle(\$request);
        \$this->assertSame(400, \$response->getStatusCode());
    }

    public function testNoRoutingConfigurationResponse()
    {
        \$requestStack = new RequestStack();

        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();
        \$requestMatcher
            ->expects(\$this->once())
            ->method('matchRequest')
            ->willThrowException(new NoConfigurationException())
        ;

        \$dispatcher = new EventDispatcher();
        \$dispatcher->addSubscriber(new RouterListener(\$requestMatcher, \$requestStack, new RequestContext()));

        \$kernel = new HttpKernel(\$dispatcher, new ControllerResolver(), \$requestStack, new ArgumentResolver());

        \$request = Request::create('http://localhost/');
        \$response = \$kernel->handle(\$request);
        \$this->assertSame(404, \$response->getStatusCode());
        \$this->assertStringContainsString('Welcome', \$response->getContent());
    }

    public function testRequestWithBadHost()
    {
        \$this->expectException('Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException');
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('http://bad host %22/');
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);

        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface')->getMock();

        \$listener = new RouterListener(\$requestMatcher, \$this->requestStack, new RequestContext());
        \$listener->onKernelRequest(\$event);
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/RouterListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/RouterListenerTest.php");
    }
}
