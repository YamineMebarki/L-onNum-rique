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

/* vendor/symfony/http-kernel/Tests/DataCollector/LoggerDataCollectorTest.php */
class __TwigTemplate_6f1ab81b59721a382075a56df8702f9b460ebcd6c18c633054cb58457307f554 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DataCollector/LoggerDataCollectorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DataCollector/LoggerDataCollectorTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\DataCollector;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Debug\\Exception\\SilencedErrorContext;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;

class LoggerDataCollectorTest extends TestCase
{
    public function testCollectWithUnexpectedFormat()
    {
        \$logger = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface')
            ->setMethods(['countErrors', 'getLogs', 'clear'])
            ->getMock();
        \$logger->expects(\$this->once())->method('countErrors')->willReturn(123);
        \$logger->expects(\$this->exactly(2))->method('getLogs')->willReturn([]);

        \$c = new LoggerDataCollector(\$logger, __DIR__.'/');
        \$c->lateCollect();
        \$compilerLogs = \$c->getCompilerLogs()->getValue('message');

        \$this->assertSame([
            ['message' => 'Removed service \"Psr\\Container\\ContainerInterface\"; reason: private alias.'],
            ['message' => 'Removed service \"Symfony\\Component\\DependencyInjection\\ContainerInterface\"; reason: private alias.'],
        ], \$compilerLogs['Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass']);

        \$this->assertSame([
            ['message' => 'Some custom logging message'],
            ['message' => 'With ending :'],
        ], \$compilerLogs['Unknown Compiler Pass']);
    }

    public function testWithMasterRequest()
    {
        \$masterRequest = new Request();
        \$stack = new RequestStack();
        \$stack->push(\$masterRequest);

        \$logger = \$this
            ->getMockBuilder(DebugLoggerInterface::class)
            ->setMethods(['countErrors', 'getLogs', 'clear'])
            ->getMock();
        \$logger->expects(\$this->once())->method('countErrors')->with(null);
        \$logger->expects(\$this->exactly(2))->method('getLogs')->with(null)->willReturn([]);

        \$c = new LoggerDataCollector(\$logger, __DIR__.'/', \$stack);

        \$c->collect(\$masterRequest, new Response());
        \$c->lateCollect();
    }

    public function testWithSubRequest()
    {
        \$masterRequest = new Request();
        \$subRequest = new Request();
        \$stack = new RequestStack();
        \$stack->push(\$masterRequest);
        \$stack->push(\$subRequest);

        \$logger = \$this
            ->getMockBuilder(DebugLoggerInterface::class)
            ->setMethods(['countErrors', 'getLogs', 'clear'])
            ->getMock();
        \$logger->expects(\$this->once())->method('countErrors')->with(\$subRequest);
        \$logger->expects(\$this->exactly(2))->method('getLogs')->with(\$subRequest)->willReturn([]);

        \$c = new LoggerDataCollector(\$logger, __DIR__.'/', \$stack);

        \$c->collect(\$subRequest, new Response());
        \$c->lateCollect();
    }

    /**
     * @dataProvider getCollectTestData
     */
    public function testCollect(\$nb, \$log, \$expectedLogs, \$expectedDeprecationCount, \$expectedScreamCount, \$expectedPriorities = null)
    {
        \$logger = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface')
            ->setMethods(['countErrors', 'getLogs', 'clear'])
            ->getMock();
        \$logger->expects(\$this->once())->method('countErrors')->willReturn(\$nb);
        \$logger->expects(\$this->exactly(2))->method('getLogs')->willReturn(\$log);

        \$c = new LoggerDataCollector(\$logger);
        \$c->lateCollect();

        \$this->assertEquals('logger', \$c->getName());
        \$this->assertEquals(\$nb, \$c->countErrors());

        \$log = array_map(function (\$v) {
            if (isset(\$v['context']['exception'])) {
                \$e = &\$v['context']['exception'];
                \$e = isset(\$e[\"\\0*\\0message\"]) ? [\$e[\"\\0*\\0message\"], \$e[\"\\0*\\0severity\"]] : [\$e[\"\\0Symfony\\Component\\Debug\\Exception\\SilencedErrorContext\\0severity\"]];
            }

            return \$v;
        }, \$c->getLogs()->getValue(true));
        \$this->assertEquals(\$expectedLogs, \$log);
        \$this->assertEquals(\$expectedDeprecationCount, \$c->countDeprecations());
        \$this->assertEquals(\$expectedScreamCount, \$c->countScreams());

        if (isset(\$expectedPriorities)) {
            \$this->assertSame(\$expectedPriorities, \$c->getPriorities()->getValue(true));
        }
    }

    public function testReset()
    {
        \$logger = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface')
            ->setMethods(['countErrors', 'getLogs', 'clear'])
            ->getMock();
        \$logger->expects(\$this->once())->method('clear');

        \$c = new LoggerDataCollector(\$logger);
        \$c->reset();
    }

    public function getCollectTestData()
    {
        yield 'simple log' => [
            1,
            [['message' => 'foo', 'context' => [], 'priority' => 100, 'priorityName' => 'DEBUG']],
            [['message' => 'foo', 'context' => [], 'priority' => 100, 'priorityName' => 'DEBUG']],
            0,
            0,
        ];

        yield 'log with a context' => [
            1,
            [['message' => 'foo', 'context' => ['foo' => 'bar'], 'priority' => 100, 'priorityName' => 'DEBUG']],
            [['message' => 'foo', 'context' => ['foo' => 'bar'], 'priority' => 100, 'priorityName' => 'DEBUG']],
            0,
            0,
        ];

        if (!class_exists(SilencedErrorContext::class)) {
            return;
        }

        yield 'log with some deprecations' => [
            1,
            [
                ['message' => 'foo3', 'context' => ['exception' => new \\ErrorException('warning', 0, E_USER_WARNING)], 'priority' => 100, 'priorityName' => 'DEBUG'],
                ['message' => 'foo', 'context' => ['exception' => new \\ErrorException('deprecated', 0, E_DEPRECATED)], 'priority' => 100, 'priorityName' => 'DEBUG'],
                ['message' => 'foo2', 'context' => ['exception' => new \\ErrorException('deprecated', 0, E_USER_DEPRECATED)], 'priority' => 100, 'priorityName' => 'DEBUG'],
            ],
            [
                ['message' => 'foo3', 'context' => ['exception' => ['warning', E_USER_WARNING]], 'priority' => 100, 'priorityName' => 'DEBUG'],
                ['message' => 'foo', 'context' => ['exception' => ['deprecated', E_DEPRECATED]], 'priority' => 100, 'priorityName' => 'DEBUG', 'errorCount' => 1, 'scream' => false],
                ['message' => 'foo2', 'context' => ['exception' => ['deprecated', E_USER_DEPRECATED]], 'priority' => 100, 'priorityName' => 'DEBUG', 'errorCount' => 1, 'scream' => false],
            ],
            2,
            0,
            [100 => ['count' => 3, 'name' => 'DEBUG']],
        ];

        yield 'log with some silent errors' => [
            1,
            [
                ['message' => 'foo3', 'context' => ['exception' => new \\ErrorException('warning', 0, E_USER_WARNING)], 'priority' => 100, 'priorityName' => 'DEBUG'],
                ['message' => 'foo3', 'context' => ['exception' => new SilencedErrorContext(E_USER_WARNING, __FILE__, __LINE__)], 'priority' => 100, 'priorityName' => 'DEBUG'],
            ],
            [
                ['message' => 'foo3', 'context' => ['exception' => ['warning', E_USER_WARNING]], 'priority' => 100, 'priorityName' => 'DEBUG'],
                ['message' => 'foo3', 'context' => ['exception' => [E_USER_WARNING]], 'priority' => 100, 'priorityName' => 'DEBUG', 'errorCount' => 1, 'scream' => true],
            ],
            0,
            1,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DataCollector/LoggerDataCollectorTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\DataCollector;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Debug\\Exception\\SilencedErrorContext;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;

class LoggerDataCollectorTest extends TestCase
{
    public function testCollectWithUnexpectedFormat()
    {
        \$logger = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface')
            ->setMethods(['countErrors', 'getLogs', 'clear'])
            ->getMock();
        \$logger->expects(\$this->once())->method('countErrors')->willReturn(123);
        \$logger->expects(\$this->exactly(2))->method('getLogs')->willReturn([]);

        \$c = new LoggerDataCollector(\$logger, __DIR__.'/');
        \$c->lateCollect();
        \$compilerLogs = \$c->getCompilerLogs()->getValue('message');

        \$this->assertSame([
            ['message' => 'Removed service \"Psr\\Container\\ContainerInterface\"; reason: private alias.'],
            ['message' => 'Removed service \"Symfony\\Component\\DependencyInjection\\ContainerInterface\"; reason: private alias.'],
        ], \$compilerLogs['Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass']);

        \$this->assertSame([
            ['message' => 'Some custom logging message'],
            ['message' => 'With ending :'],
        ], \$compilerLogs['Unknown Compiler Pass']);
    }

    public function testWithMasterRequest()
    {
        \$masterRequest = new Request();
        \$stack = new RequestStack();
        \$stack->push(\$masterRequest);

        \$logger = \$this
            ->getMockBuilder(DebugLoggerInterface::class)
            ->setMethods(['countErrors', 'getLogs', 'clear'])
            ->getMock();
        \$logger->expects(\$this->once())->method('countErrors')->with(null);
        \$logger->expects(\$this->exactly(2))->method('getLogs')->with(null)->willReturn([]);

        \$c = new LoggerDataCollector(\$logger, __DIR__.'/', \$stack);

        \$c->collect(\$masterRequest, new Response());
        \$c->lateCollect();
    }

    public function testWithSubRequest()
    {
        \$masterRequest = new Request();
        \$subRequest = new Request();
        \$stack = new RequestStack();
        \$stack->push(\$masterRequest);
        \$stack->push(\$subRequest);

        \$logger = \$this
            ->getMockBuilder(DebugLoggerInterface::class)
            ->setMethods(['countErrors', 'getLogs', 'clear'])
            ->getMock();
        \$logger->expects(\$this->once())->method('countErrors')->with(\$subRequest);
        \$logger->expects(\$this->exactly(2))->method('getLogs')->with(\$subRequest)->willReturn([]);

        \$c = new LoggerDataCollector(\$logger, __DIR__.'/', \$stack);

        \$c->collect(\$subRequest, new Response());
        \$c->lateCollect();
    }

    /**
     * @dataProvider getCollectTestData
     */
    public function testCollect(\$nb, \$log, \$expectedLogs, \$expectedDeprecationCount, \$expectedScreamCount, \$expectedPriorities = null)
    {
        \$logger = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface')
            ->setMethods(['countErrors', 'getLogs', 'clear'])
            ->getMock();
        \$logger->expects(\$this->once())->method('countErrors')->willReturn(\$nb);
        \$logger->expects(\$this->exactly(2))->method('getLogs')->willReturn(\$log);

        \$c = new LoggerDataCollector(\$logger);
        \$c->lateCollect();

        \$this->assertEquals('logger', \$c->getName());
        \$this->assertEquals(\$nb, \$c->countErrors());

        \$log = array_map(function (\$v) {
            if (isset(\$v['context']['exception'])) {
                \$e = &\$v['context']['exception'];
                \$e = isset(\$e[\"\\0*\\0message\"]) ? [\$e[\"\\0*\\0message\"], \$e[\"\\0*\\0severity\"]] : [\$e[\"\\0Symfony\\Component\\Debug\\Exception\\SilencedErrorContext\\0severity\"]];
            }

            return \$v;
        }, \$c->getLogs()->getValue(true));
        \$this->assertEquals(\$expectedLogs, \$log);
        \$this->assertEquals(\$expectedDeprecationCount, \$c->countDeprecations());
        \$this->assertEquals(\$expectedScreamCount, \$c->countScreams());

        if (isset(\$expectedPriorities)) {
            \$this->assertSame(\$expectedPriorities, \$c->getPriorities()->getValue(true));
        }
    }

    public function testReset()
    {
        \$logger = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface')
            ->setMethods(['countErrors', 'getLogs', 'clear'])
            ->getMock();
        \$logger->expects(\$this->once())->method('clear');

        \$c = new LoggerDataCollector(\$logger);
        \$c->reset();
    }

    public function getCollectTestData()
    {
        yield 'simple log' => [
            1,
            [['message' => 'foo', 'context' => [], 'priority' => 100, 'priorityName' => 'DEBUG']],
            [['message' => 'foo', 'context' => [], 'priority' => 100, 'priorityName' => 'DEBUG']],
            0,
            0,
        ];

        yield 'log with a context' => [
            1,
            [['message' => 'foo', 'context' => ['foo' => 'bar'], 'priority' => 100, 'priorityName' => 'DEBUG']],
            [['message' => 'foo', 'context' => ['foo' => 'bar'], 'priority' => 100, 'priorityName' => 'DEBUG']],
            0,
            0,
        ];

        if (!class_exists(SilencedErrorContext::class)) {
            return;
        }

        yield 'log with some deprecations' => [
            1,
            [
                ['message' => 'foo3', 'context' => ['exception' => new \\ErrorException('warning', 0, E_USER_WARNING)], 'priority' => 100, 'priorityName' => 'DEBUG'],
                ['message' => 'foo', 'context' => ['exception' => new \\ErrorException('deprecated', 0, E_DEPRECATED)], 'priority' => 100, 'priorityName' => 'DEBUG'],
                ['message' => 'foo2', 'context' => ['exception' => new \\ErrorException('deprecated', 0, E_USER_DEPRECATED)], 'priority' => 100, 'priorityName' => 'DEBUG'],
            ],
            [
                ['message' => 'foo3', 'context' => ['exception' => ['warning', E_USER_WARNING]], 'priority' => 100, 'priorityName' => 'DEBUG'],
                ['message' => 'foo', 'context' => ['exception' => ['deprecated', E_DEPRECATED]], 'priority' => 100, 'priorityName' => 'DEBUG', 'errorCount' => 1, 'scream' => false],
                ['message' => 'foo2', 'context' => ['exception' => ['deprecated', E_USER_DEPRECATED]], 'priority' => 100, 'priorityName' => 'DEBUG', 'errorCount' => 1, 'scream' => false],
            ],
            2,
            0,
            [100 => ['count' => 3, 'name' => 'DEBUG']],
        ];

        yield 'log with some silent errors' => [
            1,
            [
                ['message' => 'foo3', 'context' => ['exception' => new \\ErrorException('warning', 0, E_USER_WARNING)], 'priority' => 100, 'priorityName' => 'DEBUG'],
                ['message' => 'foo3', 'context' => ['exception' => new SilencedErrorContext(E_USER_WARNING, __FILE__, __LINE__)], 'priority' => 100, 'priorityName' => 'DEBUG'],
            ],
            [
                ['message' => 'foo3', 'context' => ['exception' => ['warning', E_USER_WARNING]], 'priority' => 100, 'priorityName' => 'DEBUG'],
                ['message' => 'foo3', 'context' => ['exception' => [E_USER_WARNING]], 'priority' => 100, 'priorityName' => 'DEBUG', 'errorCount' => 1, 'scream' => true],
            ],
            0,
            1,
        ];
    }
}
", "vendor/symfony/http-kernel/Tests/DataCollector/LoggerDataCollectorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DataCollector/LoggerDataCollectorTest.php");
    }
}
