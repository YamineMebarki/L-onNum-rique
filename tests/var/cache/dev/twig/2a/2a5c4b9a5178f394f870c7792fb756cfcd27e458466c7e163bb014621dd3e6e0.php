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

/* vendor/symfony/console/Tests/Logger/ConsoleLoggerTest.php */
class __TwigTemplate_2c55cf3ef5b0510129c3436a7c2d12a97d9bbdf8899288bd8749655fe8e93abc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Logger/ConsoleLoggerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Logger/ConsoleLoggerTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Logger;

use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;
use Psr\\Log\\LogLevel;
use Symfony\\Component\\Console\\Logger\\ConsoleLogger;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Tests\\Fixtures\\DummyOutput;

/**
 * Console logger test.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class ConsoleLoggerTest extends TestCase
{
    /**
     * @var DummyOutput
     */
    protected \$output;

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        \$this->output = new DummyOutput(OutputInterface::VERBOSITY_VERBOSE);

        return new ConsoleLogger(\$this->output, [
            LogLevel::EMERGENCY => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::ALERT => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::CRITICAL => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::ERROR => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::WARNING => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::NOTICE => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::INFO => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::DEBUG => OutputInterface::VERBOSITY_NORMAL,
        ]);
    }

    /**
     * Return the log messages in order.
     *
     * @return string[]
     */
    public function getLogs()
    {
        return \$this->output->getLogs();
    }

    /**
     * @dataProvider provideOutputMappingParams
     */
    public function testOutputMapping(\$logLevel, \$outputVerbosity, \$isOutput, \$addVerbosityLevelMap = [])
    {
        \$out = new BufferedOutput(\$outputVerbosity);
        \$logger = new ConsoleLogger(\$out, \$addVerbosityLevelMap);
        \$logger->log(\$logLevel, 'foo bar');
        \$log = \$out->fetch();
        \$this->assertEquals(\$isOutput ? \"[\$logLevel] foo bar\".PHP_EOL : '', \$log);
    }

    public function provideOutputMappingParams()
    {
        \$quietMap = [LogLevel::EMERGENCY => OutputInterface::VERBOSITY_QUIET];

        return [
            [LogLevel::EMERGENCY, OutputInterface::VERBOSITY_NORMAL, true],
            [LogLevel::WARNING, OutputInterface::VERBOSITY_NORMAL, true],
            [LogLevel::INFO, OutputInterface::VERBOSITY_NORMAL, false],
            [LogLevel::DEBUG, OutputInterface::VERBOSITY_NORMAL, false],
            [LogLevel::INFO, OutputInterface::VERBOSITY_VERBOSE, false],
            [LogLevel::INFO, OutputInterface::VERBOSITY_VERY_VERBOSE, true],
            [LogLevel::DEBUG, OutputInterface::VERBOSITY_VERY_VERBOSE, false],
            [LogLevel::DEBUG, OutputInterface::VERBOSITY_DEBUG, true],
            [LogLevel::ALERT, OutputInterface::VERBOSITY_QUIET, false],
            [LogLevel::EMERGENCY, OutputInterface::VERBOSITY_QUIET, false],
            [LogLevel::ALERT, OutputInterface::VERBOSITY_QUIET, false, \$quietMap],
            [LogLevel::EMERGENCY, OutputInterface::VERBOSITY_QUIET, true, \$quietMap],
        ];
    }

    public function testHasErrored()
    {
        \$logger = new ConsoleLogger(new BufferedOutput());

        \$this->assertFalse(\$logger->hasErrored());

        \$logger->warning('foo');
        \$this->assertFalse(\$logger->hasErrored());

        \$logger->error('bar');
        \$this->assertTrue(\$logger->hasErrored());
    }

    public function testImplements()
    {
        \$this->assertInstanceOf('Psr\\Log\\LoggerInterface', \$this->getLogger());
    }

    /**
     * @dataProvider provideLevelsAndMessages
     */
    public function testLogsAtAllLevels(\$level, \$message)
    {
        \$logger = \$this->getLogger();
        \$logger->{\$level}(\$message, ['user' => 'Bob']);
        \$logger->log(\$level, \$message, ['user' => 'Bob']);

        \$expected = [
            \$level.' message of level '.\$level.' with context: Bob',
            \$level.' message of level '.\$level.' with context: Bob',
        ];
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function provideLevelsAndMessages()
    {
        return [
            LogLevel::EMERGENCY => [LogLevel::EMERGENCY, 'message of level emergency with context: {user}'],
            LogLevel::ALERT => [LogLevel::ALERT, 'message of level alert with context: {user}'],
            LogLevel::CRITICAL => [LogLevel::CRITICAL, 'message of level critical with context: {user}'],
            LogLevel::ERROR => [LogLevel::ERROR, 'message of level error with context: {user}'],
            LogLevel::WARNING => [LogLevel::WARNING, 'message of level warning with context: {user}'],
            LogLevel::NOTICE => [LogLevel::NOTICE, 'message of level notice with context: {user}'],
            LogLevel::INFO => [LogLevel::INFO, 'message of level info with context: {user}'],
            LogLevel::DEBUG => [LogLevel::DEBUG, 'message of level debug with context: {user}'],
        ];
    }

    public function testThrowsOnInvalidLevel()
    {
        \$this->expectException('Psr\\Log\\InvalidArgumentException');
        \$logger = \$this->getLogger();
        \$logger->log('invalid level', 'Foo');
    }

    public function testContextReplacement()
    {
        \$logger = \$this->getLogger();
        \$logger->info('{Message {nothing} {user} {foo.bar} a}', ['user' => 'Bob', 'foo.bar' => 'Bar']);

        \$expected = ['info {Message {nothing} Bob Bar a}'];
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testObjectCastToString()
    {
        if (method_exists(\$this, 'createPartialMock')) {
            \$dummy = \$this->createPartialMock('Symfony\\Component\\Console\\Tests\\Logger\\DummyTest', ['__toString']);
        } else {
            \$dummy = \$this->createPartialMock('Symfony\\Component\\Console\\Tests\\Logger\\DummyTest', ['__toString']);
        }
        \$dummy->method('__toString')->willReturn('DUMMY');

        \$this->getLogger()->warning(\$dummy);

        \$expected = ['warning DUMMY'];
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testContextCanContainAnything()
    {
        \$context = [
            'bool' => true,
            'null' => null,
            'string' => 'Foo',
            'int' => 0,
            'float' => 0.5,
            'nested' => ['with object' => new DummyTest()],
            'object' => new \\DateTime(),
            'resource' => fopen('php://memory', 'r'),
        ];

        \$this->getLogger()->warning('Crazy context data', \$context);

        \$expected = ['warning Crazy context data'];
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testContextExceptionKeyCanBeExceptionOrOtherValues()
    {
        \$logger = \$this->getLogger();
        \$logger->warning('Random message', ['exception' => 'oops']);
        \$logger->critical('Uncaught Exception!', ['exception' => new \\LogicException('Fail')]);

        \$expected = [
            'warning Random message',
            'critical Uncaught Exception!',
        ];
        \$this->assertEquals(\$expected, \$this->getLogs());
    }
}

class DummyTest
{
    public function __toString()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Logger/ConsoleLoggerTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Logger;

use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;
use Psr\\Log\\LogLevel;
use Symfony\\Component\\Console\\Logger\\ConsoleLogger;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Tests\\Fixtures\\DummyOutput;

/**
 * Console logger test.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class ConsoleLoggerTest extends TestCase
{
    /**
     * @var DummyOutput
     */
    protected \$output;

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        \$this->output = new DummyOutput(OutputInterface::VERBOSITY_VERBOSE);

        return new ConsoleLogger(\$this->output, [
            LogLevel::EMERGENCY => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::ALERT => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::CRITICAL => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::ERROR => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::WARNING => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::NOTICE => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::INFO => OutputInterface::VERBOSITY_NORMAL,
            LogLevel::DEBUG => OutputInterface::VERBOSITY_NORMAL,
        ]);
    }

    /**
     * Return the log messages in order.
     *
     * @return string[]
     */
    public function getLogs()
    {
        return \$this->output->getLogs();
    }

    /**
     * @dataProvider provideOutputMappingParams
     */
    public function testOutputMapping(\$logLevel, \$outputVerbosity, \$isOutput, \$addVerbosityLevelMap = [])
    {
        \$out = new BufferedOutput(\$outputVerbosity);
        \$logger = new ConsoleLogger(\$out, \$addVerbosityLevelMap);
        \$logger->log(\$logLevel, 'foo bar');
        \$log = \$out->fetch();
        \$this->assertEquals(\$isOutput ? \"[\$logLevel] foo bar\".PHP_EOL : '', \$log);
    }

    public function provideOutputMappingParams()
    {
        \$quietMap = [LogLevel::EMERGENCY => OutputInterface::VERBOSITY_QUIET];

        return [
            [LogLevel::EMERGENCY, OutputInterface::VERBOSITY_NORMAL, true],
            [LogLevel::WARNING, OutputInterface::VERBOSITY_NORMAL, true],
            [LogLevel::INFO, OutputInterface::VERBOSITY_NORMAL, false],
            [LogLevel::DEBUG, OutputInterface::VERBOSITY_NORMAL, false],
            [LogLevel::INFO, OutputInterface::VERBOSITY_VERBOSE, false],
            [LogLevel::INFO, OutputInterface::VERBOSITY_VERY_VERBOSE, true],
            [LogLevel::DEBUG, OutputInterface::VERBOSITY_VERY_VERBOSE, false],
            [LogLevel::DEBUG, OutputInterface::VERBOSITY_DEBUG, true],
            [LogLevel::ALERT, OutputInterface::VERBOSITY_QUIET, false],
            [LogLevel::EMERGENCY, OutputInterface::VERBOSITY_QUIET, false],
            [LogLevel::ALERT, OutputInterface::VERBOSITY_QUIET, false, \$quietMap],
            [LogLevel::EMERGENCY, OutputInterface::VERBOSITY_QUIET, true, \$quietMap],
        ];
    }

    public function testHasErrored()
    {
        \$logger = new ConsoleLogger(new BufferedOutput());

        \$this->assertFalse(\$logger->hasErrored());

        \$logger->warning('foo');
        \$this->assertFalse(\$logger->hasErrored());

        \$logger->error('bar');
        \$this->assertTrue(\$logger->hasErrored());
    }

    public function testImplements()
    {
        \$this->assertInstanceOf('Psr\\Log\\LoggerInterface', \$this->getLogger());
    }

    /**
     * @dataProvider provideLevelsAndMessages
     */
    public function testLogsAtAllLevels(\$level, \$message)
    {
        \$logger = \$this->getLogger();
        \$logger->{\$level}(\$message, ['user' => 'Bob']);
        \$logger->log(\$level, \$message, ['user' => 'Bob']);

        \$expected = [
            \$level.' message of level '.\$level.' with context: Bob',
            \$level.' message of level '.\$level.' with context: Bob',
        ];
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function provideLevelsAndMessages()
    {
        return [
            LogLevel::EMERGENCY => [LogLevel::EMERGENCY, 'message of level emergency with context: {user}'],
            LogLevel::ALERT => [LogLevel::ALERT, 'message of level alert with context: {user}'],
            LogLevel::CRITICAL => [LogLevel::CRITICAL, 'message of level critical with context: {user}'],
            LogLevel::ERROR => [LogLevel::ERROR, 'message of level error with context: {user}'],
            LogLevel::WARNING => [LogLevel::WARNING, 'message of level warning with context: {user}'],
            LogLevel::NOTICE => [LogLevel::NOTICE, 'message of level notice with context: {user}'],
            LogLevel::INFO => [LogLevel::INFO, 'message of level info with context: {user}'],
            LogLevel::DEBUG => [LogLevel::DEBUG, 'message of level debug with context: {user}'],
        ];
    }

    public function testThrowsOnInvalidLevel()
    {
        \$this->expectException('Psr\\Log\\InvalidArgumentException');
        \$logger = \$this->getLogger();
        \$logger->log('invalid level', 'Foo');
    }

    public function testContextReplacement()
    {
        \$logger = \$this->getLogger();
        \$logger->info('{Message {nothing} {user} {foo.bar} a}', ['user' => 'Bob', 'foo.bar' => 'Bar']);

        \$expected = ['info {Message {nothing} Bob Bar a}'];
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testObjectCastToString()
    {
        if (method_exists(\$this, 'createPartialMock')) {
            \$dummy = \$this->createPartialMock('Symfony\\Component\\Console\\Tests\\Logger\\DummyTest', ['__toString']);
        } else {
            \$dummy = \$this->createPartialMock('Symfony\\Component\\Console\\Tests\\Logger\\DummyTest', ['__toString']);
        }
        \$dummy->method('__toString')->willReturn('DUMMY');

        \$this->getLogger()->warning(\$dummy);

        \$expected = ['warning DUMMY'];
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testContextCanContainAnything()
    {
        \$context = [
            'bool' => true,
            'null' => null,
            'string' => 'Foo',
            'int' => 0,
            'float' => 0.5,
            'nested' => ['with object' => new DummyTest()],
            'object' => new \\DateTime(),
            'resource' => fopen('php://memory', 'r'),
        ];

        \$this->getLogger()->warning('Crazy context data', \$context);

        \$expected = ['warning Crazy context data'];
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testContextExceptionKeyCanBeExceptionOrOtherValues()
    {
        \$logger = \$this->getLogger();
        \$logger->warning('Random message', ['exception' => 'oops']);
        \$logger->critical('Uncaught Exception!', ['exception' => new \\LogicException('Fail')]);

        \$expected = [
            'warning Random message',
            'critical Uncaught Exception!',
        ];
        \$this->assertEquals(\$expected, \$this->getLogs());
    }
}

class DummyTest
{
    public function __toString()
    {
    }
}
", "vendor/symfony/console/Tests/Logger/ConsoleLoggerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Logger/ConsoleLoggerTest.php");
    }
}
