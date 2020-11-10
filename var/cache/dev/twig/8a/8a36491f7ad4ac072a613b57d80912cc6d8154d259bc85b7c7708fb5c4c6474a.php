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

/* vendor/symfony/monolog-bridge/Tests/LoggerTest.php */
class __TwigTemplate_854203ca6cc1581083f4a6654ab8cb88b05739d6feda486b64e9365eaf007563 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/LoggerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/LoggerTest.php"));

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

namespace Symfony\\Bridge\\Monolog\\Tests;

use Monolog\\Handler\\TestHandler;
use Monolog\\ResettableInterface;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Logger;
use Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor;
use Symfony\\Component\\HttpFoundation\\Request;

class LoggerTest extends TestCase
{
    public function testGetLogsWithoutDebugProcessor()
    {
        \$handler = new TestHandler();
        \$logger = new Logger(__METHOD__, [\$handler]);

        \$logger->error('error message');
        \$this->assertSame([], \$logger->getLogs());
    }

    public function testCountErrorsWithoutDebugProcessor()
    {
        \$handler = new TestHandler();
        \$logger = new Logger(__METHOD__, [\$handler]);

        \$logger->error('error message');
        \$this->assertSame(0, \$logger->countErrors());
    }

    public function testGetLogsWithDebugProcessor()
    {
        \$handler = new TestHandler();
        \$processor = new DebugProcessor();
        \$logger = new Logger(__METHOD__, [\$handler], [\$processor]);

        \$logger->error('error message');
        \$this->assertCount(1, \$logger->getLogs());
    }

    public function testCountErrorsWithDebugProcessor()
    {
        \$handler = new TestHandler();
        \$processor = new DebugProcessor();
        \$logger = new Logger(__METHOD__, [\$handler], [\$processor]);

        \$logger->debug('test message');
        \$logger->info('test message');
        \$logger->notice('test message');
        \$logger->warning('test message');

        \$logger->error('test message');
        \$logger->critical('test message');
        \$logger->alert('test message');
        \$logger->emergency('test message');

        \$this->assertSame(4, \$logger->countErrors());
    }

    public function testGetLogsWithDebugProcessor2()
    {
        \$handler = new TestHandler();
        \$logger = new Logger('test', [\$handler]);
        \$logger->pushProcessor(new DebugProcessor());

        \$logger->info('test');
        \$this->assertCount(1, \$logger->getLogs());
        list(\$record) = \$logger->getLogs();

        \$this->assertEquals('test', \$record['message']);
        \$this->assertEquals(Logger::INFO, \$record['priority']);
    }

    public function testGetLogsWithDebugProcessor3()
    {
        \$request = new Request();
        \$processor = \$this->getMockBuilder(DebugProcessor::class)->getMock();
        \$processor->expects(\$this->once())->method('getLogs')->with(\$request);
        \$processor->expects(\$this->once())->method('countErrors')->with(\$request);

        \$handler = new TestHandler();
        \$logger = new Logger('test', [\$handler]);
        \$logger->pushProcessor(\$processor);

        \$logger->getLogs(\$request);
        \$logger->countErrors(\$request);
    }

    public function testClear()
    {
        \$handler = new TestHandler();
        \$logger = new Logger('test', [\$handler]);
        \$logger->pushProcessor(new DebugProcessor());

        \$logger->info('test');
        \$logger->clear();

        \$this->assertEmpty(\$logger->getLogs());
        \$this->assertSame(0, \$logger->countErrors());
    }

    public function testReset()
    {
        \$handler = new TestHandler();
        \$logger = new Logger('test', [\$handler]);
        \$logger->pushProcessor(new DebugProcessor());

        \$logger->info('test');
        \$logger->reset();

        \$this->assertEmpty(\$logger->getLogs());
        \$this->assertSame(0, \$logger->countErrors());
        if (class_exists(ResettableInterface::class)) {
            \$this->assertEmpty(\$handler->getRecords());
        }
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"Symfony\\Bridge\\Monolog\\Logger::getLogs()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.
     * @expectedDeprecation The \"Symfony\\Bridge\\Monolog\\Logger::countErrors()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.
     */
    public function testInheritedClassWithoutArgument()
    {
        \$loggerChild = new ClassThatInheritLogger('test');
        \$loggerChild->getLogs();
        \$loggerChild->countErrors();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Tests/LoggerTest.php";
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

namespace Symfony\\Bridge\\Monolog\\Tests;

use Monolog\\Handler\\TestHandler;
use Monolog\\ResettableInterface;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Logger;
use Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor;
use Symfony\\Component\\HttpFoundation\\Request;

class LoggerTest extends TestCase
{
    public function testGetLogsWithoutDebugProcessor()
    {
        \$handler = new TestHandler();
        \$logger = new Logger(__METHOD__, [\$handler]);

        \$logger->error('error message');
        \$this->assertSame([], \$logger->getLogs());
    }

    public function testCountErrorsWithoutDebugProcessor()
    {
        \$handler = new TestHandler();
        \$logger = new Logger(__METHOD__, [\$handler]);

        \$logger->error('error message');
        \$this->assertSame(0, \$logger->countErrors());
    }

    public function testGetLogsWithDebugProcessor()
    {
        \$handler = new TestHandler();
        \$processor = new DebugProcessor();
        \$logger = new Logger(__METHOD__, [\$handler], [\$processor]);

        \$logger->error('error message');
        \$this->assertCount(1, \$logger->getLogs());
    }

    public function testCountErrorsWithDebugProcessor()
    {
        \$handler = new TestHandler();
        \$processor = new DebugProcessor();
        \$logger = new Logger(__METHOD__, [\$handler], [\$processor]);

        \$logger->debug('test message');
        \$logger->info('test message');
        \$logger->notice('test message');
        \$logger->warning('test message');

        \$logger->error('test message');
        \$logger->critical('test message');
        \$logger->alert('test message');
        \$logger->emergency('test message');

        \$this->assertSame(4, \$logger->countErrors());
    }

    public function testGetLogsWithDebugProcessor2()
    {
        \$handler = new TestHandler();
        \$logger = new Logger('test', [\$handler]);
        \$logger->pushProcessor(new DebugProcessor());

        \$logger->info('test');
        \$this->assertCount(1, \$logger->getLogs());
        list(\$record) = \$logger->getLogs();

        \$this->assertEquals('test', \$record['message']);
        \$this->assertEquals(Logger::INFO, \$record['priority']);
    }

    public function testGetLogsWithDebugProcessor3()
    {
        \$request = new Request();
        \$processor = \$this->getMockBuilder(DebugProcessor::class)->getMock();
        \$processor->expects(\$this->once())->method('getLogs')->with(\$request);
        \$processor->expects(\$this->once())->method('countErrors')->with(\$request);

        \$handler = new TestHandler();
        \$logger = new Logger('test', [\$handler]);
        \$logger->pushProcessor(\$processor);

        \$logger->getLogs(\$request);
        \$logger->countErrors(\$request);
    }

    public function testClear()
    {
        \$handler = new TestHandler();
        \$logger = new Logger('test', [\$handler]);
        \$logger->pushProcessor(new DebugProcessor());

        \$logger->info('test');
        \$logger->clear();

        \$this->assertEmpty(\$logger->getLogs());
        \$this->assertSame(0, \$logger->countErrors());
    }

    public function testReset()
    {
        \$handler = new TestHandler();
        \$logger = new Logger('test', [\$handler]);
        \$logger->pushProcessor(new DebugProcessor());

        \$logger->info('test');
        \$logger->reset();

        \$this->assertEmpty(\$logger->getLogs());
        \$this->assertSame(0, \$logger->countErrors());
        if (class_exists(ResettableInterface::class)) {
            \$this->assertEmpty(\$handler->getRecords());
        }
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"Symfony\\Bridge\\Monolog\\Logger::getLogs()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.
     * @expectedDeprecation The \"Symfony\\Bridge\\Monolog\\Logger::countErrors()\" method will have a new \"Request \$request = null\" argument in version 5.0, not defining it is deprecated since Symfony 4.2.
     */
    public function testInheritedClassWithoutArgument()
    {
        \$loggerChild = new ClassThatInheritLogger('test');
        \$loggerChild->getLogs();
        \$loggerChild->countErrors();
    }
}
", "vendor/symfony/monolog-bridge/Tests/LoggerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Tests/LoggerTest.php");
    }
}
