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

/* vendor/symfony/monolog-bridge/Tests/Processor/WebProcessorTest.php */
class __TwigTemplate_be83d2adb74ede2987a8c970b5ee6660377bb1e38d98298ef7557ff847569d67 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Processor/WebProcessorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Processor/WebProcessorTest.php"));

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

use Monolog\\Logger;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Processor\\WebProcessor;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;

class WebProcessorTest extends TestCase
{
    public function testUsesRequestServerData()
    {
        list(\$event, \$server) = \$this->createRequestEvent();

        \$processor = new WebProcessor();
        \$processor->onKernelRequest(\$event);
        \$record = \$processor(\$this->getRecord());

        \$this->assertCount(5, \$record['extra']);
        \$this->assertEquals(\$server['REQUEST_URI'], \$record['extra']['url']);
        \$this->assertEquals(\$server['REMOTE_ADDR'], \$record['extra']['ip']);
        \$this->assertEquals(\$server['REQUEST_METHOD'], \$record['extra']['http_method']);
        \$this->assertEquals(\$server['SERVER_NAME'], \$record['extra']['server']);
        \$this->assertEquals(\$server['HTTP_REFERER'], \$record['extra']['referrer']);
    }

    public function testUseRequestClientIp()
    {
        Request::setTrustedProxies(['192.168.0.1'], Request::HEADER_X_FORWARDED_ALL);
        list(\$event, \$server) = \$this->createRequestEvent(['X_FORWARDED_FOR' => '192.168.0.2']);

        \$processor = new WebProcessor();
        \$processor->onKernelRequest(\$event);
        \$record = \$processor(\$this->getRecord());

        \$this->assertCount(5, \$record['extra']);
        \$this->assertEquals(\$server['REQUEST_URI'], \$record['extra']['url']);
        \$this->assertEquals(\$server['X_FORWARDED_FOR'], \$record['extra']['ip']);
        \$this->assertEquals(\$server['REQUEST_METHOD'], \$record['extra']['http_method']);
        \$this->assertEquals(\$server['SERVER_NAME'], \$record['extra']['server']);
        \$this->assertEquals(\$server['HTTP_REFERER'], \$record['extra']['referrer']);

        Request::setTrustedProxies([], -1);
    }

    public function testCanBeConstructedWithExtraFields()
    {
        if (!\$this->isExtraFieldsSupported()) {
            \$this->markTestSkipped('WebProcessor of the installed Monolog version does not support \$extraFields parameter');
        }

        list(\$event, \$server) = \$this->createRequestEvent();

        \$processor = new WebProcessor(['url', 'referrer']);
        \$processor->onKernelRequest(\$event);
        \$record = \$processor(\$this->getRecord());

        \$this->assertCount(2, \$record['extra']);
        \$this->assertEquals(\$server['REQUEST_URI'], \$record['extra']['url']);
        \$this->assertEquals(\$server['HTTP_REFERER'], \$record['extra']['referrer']);
    }

    private function createRequestEvent(\$additionalServerParameters = []): array
    {
        \$server = array_merge(
            [
                'REQUEST_URI' => 'A',
                'REMOTE_ADDR' => '192.168.0.1',
                'REQUEST_METHOD' => 'C',
                'SERVER_NAME' => 'D',
                'HTTP_REFERER' => 'E',
            ],
            \$additionalServerParameters
        );

        \$request = new Request();
        \$request->server->replace(\$server);
        \$request->headers->replace(\$server);

        \$event = \$this->getMockBuilder(RequestEvent::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$event->expects(\$this->any())
            ->method('isMasterRequest')
            ->willReturn(true);
        \$event->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request);

        return [\$event, \$server];
    }

    private function getRecord(int \$level = Logger::WARNING, string \$message = 'test'): array
    {
        return [
            'message' => \$message,
            'context' => [],
            'level' => \$level,
            'level_name' => Logger::getLevelName(\$level),
            'channel' => 'test',
            'datetime' => new \\DateTime(),
            'extra' => [],
        ];
    }

    private function isExtraFieldsSupported()
    {
        \$monologWebProcessorClass = new \\ReflectionClass('Monolog\\Processor\\WebProcessor');

        foreach (\$monologWebProcessorClass->getConstructor()->getParameters() as \$parameter) {
            if ('extraFields' === \$parameter->getName()) {
                return true;
            }
        }

        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Tests/Processor/WebProcessorTest.php";
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

use Monolog\\Logger;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Processor\\WebProcessor;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;

class WebProcessorTest extends TestCase
{
    public function testUsesRequestServerData()
    {
        list(\$event, \$server) = \$this->createRequestEvent();

        \$processor = new WebProcessor();
        \$processor->onKernelRequest(\$event);
        \$record = \$processor(\$this->getRecord());

        \$this->assertCount(5, \$record['extra']);
        \$this->assertEquals(\$server['REQUEST_URI'], \$record['extra']['url']);
        \$this->assertEquals(\$server['REMOTE_ADDR'], \$record['extra']['ip']);
        \$this->assertEquals(\$server['REQUEST_METHOD'], \$record['extra']['http_method']);
        \$this->assertEquals(\$server['SERVER_NAME'], \$record['extra']['server']);
        \$this->assertEquals(\$server['HTTP_REFERER'], \$record['extra']['referrer']);
    }

    public function testUseRequestClientIp()
    {
        Request::setTrustedProxies(['192.168.0.1'], Request::HEADER_X_FORWARDED_ALL);
        list(\$event, \$server) = \$this->createRequestEvent(['X_FORWARDED_FOR' => '192.168.0.2']);

        \$processor = new WebProcessor();
        \$processor->onKernelRequest(\$event);
        \$record = \$processor(\$this->getRecord());

        \$this->assertCount(5, \$record['extra']);
        \$this->assertEquals(\$server['REQUEST_URI'], \$record['extra']['url']);
        \$this->assertEquals(\$server['X_FORWARDED_FOR'], \$record['extra']['ip']);
        \$this->assertEquals(\$server['REQUEST_METHOD'], \$record['extra']['http_method']);
        \$this->assertEquals(\$server['SERVER_NAME'], \$record['extra']['server']);
        \$this->assertEquals(\$server['HTTP_REFERER'], \$record['extra']['referrer']);

        Request::setTrustedProxies([], -1);
    }

    public function testCanBeConstructedWithExtraFields()
    {
        if (!\$this->isExtraFieldsSupported()) {
            \$this->markTestSkipped('WebProcessor of the installed Monolog version does not support \$extraFields parameter');
        }

        list(\$event, \$server) = \$this->createRequestEvent();

        \$processor = new WebProcessor(['url', 'referrer']);
        \$processor->onKernelRequest(\$event);
        \$record = \$processor(\$this->getRecord());

        \$this->assertCount(2, \$record['extra']);
        \$this->assertEquals(\$server['REQUEST_URI'], \$record['extra']['url']);
        \$this->assertEquals(\$server['HTTP_REFERER'], \$record['extra']['referrer']);
    }

    private function createRequestEvent(\$additionalServerParameters = []): array
    {
        \$server = array_merge(
            [
                'REQUEST_URI' => 'A',
                'REMOTE_ADDR' => '192.168.0.1',
                'REQUEST_METHOD' => 'C',
                'SERVER_NAME' => 'D',
                'HTTP_REFERER' => 'E',
            ],
            \$additionalServerParameters
        );

        \$request = new Request();
        \$request->server->replace(\$server);
        \$request->headers->replace(\$server);

        \$event = \$this->getMockBuilder(RequestEvent::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$event->expects(\$this->any())
            ->method('isMasterRequest')
            ->willReturn(true);
        \$event->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request);

        return [\$event, \$server];
    }

    private function getRecord(int \$level = Logger::WARNING, string \$message = 'test'): array
    {
        return [
            'message' => \$message,
            'context' => [],
            'level' => \$level,
            'level_name' => Logger::getLevelName(\$level),
            'channel' => 'test',
            'datetime' => new \\DateTime(),
            'extra' => [],
        ];
    }

    private function isExtraFieldsSupported()
    {
        \$monologWebProcessorClass = new \\ReflectionClass('Monolog\\Processor\\WebProcessor');

        foreach (\$monologWebProcessorClass->getConstructor()->getParameters() as \$parameter) {
            if ('extraFields' === \$parameter->getName()) {
                return true;
            }
        }

        return false;
    }
}
", "vendor/symfony/monolog-bridge/Tests/Processor/WebProcessorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Tests/Processor/WebProcessorTest.php");
    }
}
