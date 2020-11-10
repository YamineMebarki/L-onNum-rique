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

/* vendor/symfony/monolog-bridge/Tests/Processor/RouteProcessorTest.php */
class __TwigTemplate_b0e6e231a6ae281ee3bb8c94f5a6583d58499b5d2ac05accbc8346d38891f70c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Processor/RouteProcessorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Processor/RouteProcessorTest.php"));

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

namespace Symfony\\Bridge\\Monolog\\Tests\\Processor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Processor\\RouteProcessor;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;

class RouteProcessorTest extends TestCase
{
    private const TEST_CONTROLLER = 'App\\Controller\\SomeController::someMethod';
    private const TEST_ROUTE = 'someRouteName';
    private const TEST_PARAMS = ['param1' => 'value1'];

    public function testProcessor()
    {
        \$request = \$this->mockFilledRequest();
        \$processor = new RouteProcessor();
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$request));

        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('requests', \$record['extra']);
        \$this->assertCount(1, \$record['extra']['requests']);
        \$this->assertEquals(
            ['controller' => self::TEST_CONTROLLER, 'route' => self::TEST_ROUTE, 'route_params' => self::TEST_PARAMS],
            \$record['extra']['requests'][0]
        );
    }

    public function testProcessorWithoutParams()
    {
        \$request = \$this->mockFilledRequest();
        \$processor = new RouteProcessor(false);
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$request));

        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('requests', \$record['extra']);
        \$this->assertCount(1, \$record['extra']['requests']);
        \$this->assertEquals(
            ['controller' => self::TEST_CONTROLLER, 'route' => self::TEST_ROUTE],
            \$record['extra']['requests'][0]
        );
    }

    public function testProcessorWithSubRequests()
    {
        \$controllerFromSubRequest = 'OtherController::otherMethod';
        \$mainRequest = \$this->mockFilledRequest();
        \$subRequest = \$this->mockFilledRequest(\$controllerFromSubRequest);

        \$processor = new RouteProcessor(false);
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$mainRequest));
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$subRequest));

        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('requests', \$record['extra']);
        \$this->assertCount(2, \$record['extra']['requests']);
        \$this->assertEquals(
            ['controller' => self::TEST_CONTROLLER, 'route' => self::TEST_ROUTE],
            \$record['extra']['requests'][0]
        );
        \$this->assertEquals(
            ['controller' => \$controllerFromSubRequest, 'route' => self::TEST_ROUTE],
            \$record['extra']['requests'][1]
        );
    }

    public function testFinishRequestRemovesRelatedEntry()
    {
        \$mainRequest = \$this->mockFilledRequest();
        \$subRequest = \$this->mockFilledRequest('OtherController::otherMethod');

        \$processor = new RouteProcessor(false);
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$mainRequest));
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$subRequest));
        \$processor->removeRouteData(\$this->mockFinishRequestEvent(\$subRequest));
        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('requests', \$record['extra']);
        \$this->assertCount(1, \$record['extra']['requests']);
        \$this->assertEquals(
            ['controller' => self::TEST_CONTROLLER, 'route' => self::TEST_ROUTE],
            \$record['extra']['requests'][0]
        );

        \$processor->removeRouteData(\$this->mockFinishRequestEvent(\$mainRequest));
        \$record = \$processor(['extra' => []]);

        \$this->assertArrayNotHasKey('requests', \$record['extra']);
    }

    public function testProcessorWithEmptyRequest()
    {
        \$request = \$this->mockEmptyRequest();
        \$processor = new RouteProcessor();
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$request));

        \$record = \$processor(['extra' => []]);
        \$this->assertEquals(['extra' => []], \$record);
    }

    public function testProcessorDoesNothingWhenNoRequest()
    {
        \$processor = new RouteProcessor();

        \$record = \$processor(['extra' => []]);
        \$this->assertEquals(['extra' => []], \$record);
    }

    private function mockGetResponseEvent(Request \$request): GetResponseEvent
    {
        \$event = \$this->getMockBuilder(GetResponseEvent::class)->disableOriginalConstructor()->getMock();
        \$event->method('getRequest')->willReturn(\$request);

        return \$event;
    }

    private function mockFinishRequestEvent(Request \$request): FinishRequestEvent
    {
        \$event = \$this->getMockBuilder(FinishRequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event->method('getRequest')->willReturn(\$request);

        return \$event;
    }

    private function mockEmptyRequest(): Request
    {
        return \$this->mockRequest([]);
    }

    private function mockFilledRequest(string \$controller = self::TEST_CONTROLLER): Request
    {
        return \$this->mockRequest([
            '_controller' => \$controller,
            '_route' => self::TEST_ROUTE,
            '_route_params' => self::TEST_PARAMS,
        ]);
    }

    private function mockRequest(array \$attributes): Request
    {
        \$request = \$this->getMockBuilder(Request::class)->disableOriginalConstructor()->getMock();
        \$request->attributes = new ParameterBag(\$attributes);

        return \$request;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Tests/Processor/RouteProcessorTest.php";
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

namespace Symfony\\Bridge\\Monolog\\Tests\\Processor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Processor\\RouteProcessor;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;

class RouteProcessorTest extends TestCase
{
    private const TEST_CONTROLLER = 'App\\Controller\\SomeController::someMethod';
    private const TEST_ROUTE = 'someRouteName';
    private const TEST_PARAMS = ['param1' => 'value1'];

    public function testProcessor()
    {
        \$request = \$this->mockFilledRequest();
        \$processor = new RouteProcessor();
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$request));

        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('requests', \$record['extra']);
        \$this->assertCount(1, \$record['extra']['requests']);
        \$this->assertEquals(
            ['controller' => self::TEST_CONTROLLER, 'route' => self::TEST_ROUTE, 'route_params' => self::TEST_PARAMS],
            \$record['extra']['requests'][0]
        );
    }

    public function testProcessorWithoutParams()
    {
        \$request = \$this->mockFilledRequest();
        \$processor = new RouteProcessor(false);
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$request));

        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('requests', \$record['extra']);
        \$this->assertCount(1, \$record['extra']['requests']);
        \$this->assertEquals(
            ['controller' => self::TEST_CONTROLLER, 'route' => self::TEST_ROUTE],
            \$record['extra']['requests'][0]
        );
    }

    public function testProcessorWithSubRequests()
    {
        \$controllerFromSubRequest = 'OtherController::otherMethod';
        \$mainRequest = \$this->mockFilledRequest();
        \$subRequest = \$this->mockFilledRequest(\$controllerFromSubRequest);

        \$processor = new RouteProcessor(false);
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$mainRequest));
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$subRequest));

        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('requests', \$record['extra']);
        \$this->assertCount(2, \$record['extra']['requests']);
        \$this->assertEquals(
            ['controller' => self::TEST_CONTROLLER, 'route' => self::TEST_ROUTE],
            \$record['extra']['requests'][0]
        );
        \$this->assertEquals(
            ['controller' => \$controllerFromSubRequest, 'route' => self::TEST_ROUTE],
            \$record['extra']['requests'][1]
        );
    }

    public function testFinishRequestRemovesRelatedEntry()
    {
        \$mainRequest = \$this->mockFilledRequest();
        \$subRequest = \$this->mockFilledRequest('OtherController::otherMethod');

        \$processor = new RouteProcessor(false);
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$mainRequest));
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$subRequest));
        \$processor->removeRouteData(\$this->mockFinishRequestEvent(\$subRequest));
        \$record = \$processor(['extra' => []]);

        \$this->assertArrayHasKey('requests', \$record['extra']);
        \$this->assertCount(1, \$record['extra']['requests']);
        \$this->assertEquals(
            ['controller' => self::TEST_CONTROLLER, 'route' => self::TEST_ROUTE],
            \$record['extra']['requests'][0]
        );

        \$processor->removeRouteData(\$this->mockFinishRequestEvent(\$mainRequest));
        \$record = \$processor(['extra' => []]);

        \$this->assertArrayNotHasKey('requests', \$record['extra']);
    }

    public function testProcessorWithEmptyRequest()
    {
        \$request = \$this->mockEmptyRequest();
        \$processor = new RouteProcessor();
        \$processor->addRouteData(\$this->mockGetResponseEvent(\$request));

        \$record = \$processor(['extra' => []]);
        \$this->assertEquals(['extra' => []], \$record);
    }

    public function testProcessorDoesNothingWhenNoRequest()
    {
        \$processor = new RouteProcessor();

        \$record = \$processor(['extra' => []]);
        \$this->assertEquals(['extra' => []], \$record);
    }

    private function mockGetResponseEvent(Request \$request): GetResponseEvent
    {
        \$event = \$this->getMockBuilder(GetResponseEvent::class)->disableOriginalConstructor()->getMock();
        \$event->method('getRequest')->willReturn(\$request);

        return \$event;
    }

    private function mockFinishRequestEvent(Request \$request): FinishRequestEvent
    {
        \$event = \$this->getMockBuilder(FinishRequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event->method('getRequest')->willReturn(\$request);

        return \$event;
    }

    private function mockEmptyRequest(): Request
    {
        return \$this->mockRequest([]);
    }

    private function mockFilledRequest(string \$controller = self::TEST_CONTROLLER): Request
    {
        return \$this->mockRequest([
            '_controller' => \$controller,
            '_route' => self::TEST_ROUTE,
            '_route_params' => self::TEST_PARAMS,
        ]);
    }

    private function mockRequest(array \$attributes): Request
    {
        \$request = \$this->getMockBuilder(Request::class)->disableOriginalConstructor()->getMock();
        \$request->attributes = new ParameterBag(\$attributes);

        return \$request;
    }
}
", "vendor/symfony/monolog-bridge/Tests/Processor/RouteProcessorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Tests/Processor/RouteProcessorTest.php");
    }
}
