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

/* vendor/symfony/http-kernel/Tests/Log/LoggerTest.php */
class __TwigTemplate_fa1a48b72c744ed1dee1cd300dc70e892be7e0ceb040258be13cb25ffd4c3385 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Log/LoggerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Log/LoggerTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\Log;

use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;
use Psr\\Log\\LogLevel;
use Symfony\\Component\\HttpKernel\\Log\\Logger;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class LoggerTest extends TestCase
{
    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * @var string
     */
    private \$tmpFile;

    protected function setUp(): void
    {
        \$this->tmpFile = tempnam(sys_get_temp_dir(), 'log');
        \$this->logger = new Logger(LogLevel::DEBUG, \$this->tmpFile);
    }

    protected function tearDown(): void
    {
        if (!@unlink(\$this->tmpFile)) {
            file_put_contents(\$this->tmpFile, '');
        }
    }

    public static function assertLogsMatch(array \$expected, array \$given)
    {
        foreach (\$given as \$k => \$line) {
            self::assertThat(1 === preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}[\\+-][0-9]{2}:[0-9]{2} '.preg_quote(\$expected[\$k]).'/', \$line), self::isTrue(), \"\\\"\$line\\\" do not match expected pattern \\\"\$expected[\$k]\\\"\");
        }
    }

    /**
     * Return the log messages in order.
     *
     * @return string[]
     */
    public function getLogs()
    {
        return file(\$this->tmpFile, FILE_IGNORE_NEW_LINES);
    }

    public function testImplements()
    {
        \$this->assertInstanceOf(LoggerInterface::class, \$this->logger);
    }

    /**
     * @dataProvider provideLevelsAndMessages
     */
    public function testLogsAtAllLevels(\$level, \$message)
    {
        \$this->logger->{\$level}(\$message, ['user' => 'Bob']);
        \$this->logger->log(\$level, \$message, ['user' => 'Bob']);

        \$expected = [
            \"[\$level] message of level \$level with context: Bob\",
            \"[\$level] message of level \$level with context: Bob\",
        ];
        \$this->assertLogsMatch(\$expected, \$this->getLogs());
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

    public function testLogLevelDisabled()
    {
        \$this->logger = new Logger(LogLevel::INFO, \$this->tmpFile);

        \$this->logger->debug('test', ['user' => 'Bob']);
        \$this->logger->log(LogLevel::DEBUG, 'test', ['user' => 'Bob']);

        // Will always be true, but asserts than an exception isn't thrown
        \$this->assertSame([], \$this->getLogs());
    }

    public function testThrowsOnInvalidLevel()
    {
        \$this->expectException('Psr\\Log\\InvalidArgumentException');
        \$this->logger->log('invalid level', 'Foo');
    }

    public function testThrowsOnInvalidMinLevel()
    {
        \$this->expectException('Psr\\Log\\InvalidArgumentException');
        new Logger('invalid');
    }

    public function testInvalidOutput()
    {
        \$this->expectException('Psr\\Log\\InvalidArgumentException');
        new Logger(LogLevel::DEBUG, '/');
    }

    public function testContextReplacement()
    {
        \$logger = \$this->logger;
        \$logger->info('{Message {nothing} {user} {foo.bar} a}', ['user' => 'Bob', 'foo.bar' => 'Bar']);

        \$expected = ['[info] {Message {nothing} Bob Bar a}'];
        \$this->assertLogsMatch(\$expected, \$this->getLogs());
    }

    public function testObjectCastToString()
    {
        if (method_exists(\$this, 'createPartialMock')) {
            \$dummy = \$this->createPartialMock(DummyTest::class, ['__toString']);
        } else {
            \$dummy = \$this->createPartialMock(DummyTest::class, ['__toString']);
        }
        \$dummy->expects(\$this->atLeastOnce())
            ->method('__toString')
            ->willReturn('DUMMY');

        \$this->logger->warning(\$dummy);

        \$expected = ['[warning] DUMMY'];
        \$this->assertLogsMatch(\$expected, \$this->getLogs());
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

        \$this->logger->warning('Crazy context data', \$context);

        \$expected = ['[warning] Crazy context data'];
        \$this->assertLogsMatch(\$expected, \$this->getLogs());
    }

    public function testContextExceptionKeyCanBeExceptionOrOtherValues()
    {
        \$logger = \$this->logger;
        \$logger->warning('Random message', ['exception' => 'oops']);
        \$logger->critical('Uncaught Exception!', ['exception' => new \\LogicException('Fail')]);

        \$expected = [
            '[warning] Random message',
            '[critical] Uncaught Exception!',
        ];
        \$this->assertLogsMatch(\$expected, \$this->getLogs());
    }

    public function testFormatter()
    {
        \$this->logger = new Logger(LogLevel::DEBUG, \$this->tmpFile, function (\$level, \$message, \$context) {
            return json_encode(['level' => \$level, 'message' => \$message, 'context' => \$context]).\\PHP_EOL;
        });

        \$this->logger->error('An error', ['foo' => 'bar']);
        \$this->logger->warning('A warning', ['baz' => 'bar']);
        \$this->assertSame([
            '{\"level\":\"error\",\"message\":\"An error\",\"context\":{\"foo\":\"bar\"}}',
            '{\"level\":\"warning\",\"message\":\"A warning\",\"context\":{\"baz\":\"bar\"}}',
        ], \$this->getLogs());
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
        return "vendor/symfony/http-kernel/Tests/Log/LoggerTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\Log;

use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;
use Psr\\Log\\LogLevel;
use Symfony\\Component\\HttpKernel\\Log\\Logger;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class LoggerTest extends TestCase
{
    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * @var string
     */
    private \$tmpFile;

    protected function setUp(): void
    {
        \$this->tmpFile = tempnam(sys_get_temp_dir(), 'log');
        \$this->logger = new Logger(LogLevel::DEBUG, \$this->tmpFile);
    }

    protected function tearDown(): void
    {
        if (!@unlink(\$this->tmpFile)) {
            file_put_contents(\$this->tmpFile, '');
        }
    }

    public static function assertLogsMatch(array \$expected, array \$given)
    {
        foreach (\$given as \$k => \$line) {
            self::assertThat(1 === preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}[\\+-][0-9]{2}:[0-9]{2} '.preg_quote(\$expected[\$k]).'/', \$line), self::isTrue(), \"\\\"\$line\\\" do not match expected pattern \\\"\$expected[\$k]\\\"\");
        }
    }

    /**
     * Return the log messages in order.
     *
     * @return string[]
     */
    public function getLogs()
    {
        return file(\$this->tmpFile, FILE_IGNORE_NEW_LINES);
    }

    public function testImplements()
    {
        \$this->assertInstanceOf(LoggerInterface::class, \$this->logger);
    }

    /**
     * @dataProvider provideLevelsAndMessages
     */
    public function testLogsAtAllLevels(\$level, \$message)
    {
        \$this->logger->{\$level}(\$message, ['user' => 'Bob']);
        \$this->logger->log(\$level, \$message, ['user' => 'Bob']);

        \$expected = [
            \"[\$level] message of level \$level with context: Bob\",
            \"[\$level] message of level \$level with context: Bob\",
        ];
        \$this->assertLogsMatch(\$expected, \$this->getLogs());
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

    public function testLogLevelDisabled()
    {
        \$this->logger = new Logger(LogLevel::INFO, \$this->tmpFile);

        \$this->logger->debug('test', ['user' => 'Bob']);
        \$this->logger->log(LogLevel::DEBUG, 'test', ['user' => 'Bob']);

        // Will always be true, but asserts than an exception isn't thrown
        \$this->assertSame([], \$this->getLogs());
    }

    public function testThrowsOnInvalidLevel()
    {
        \$this->expectException('Psr\\Log\\InvalidArgumentException');
        \$this->logger->log('invalid level', 'Foo');
    }

    public function testThrowsOnInvalidMinLevel()
    {
        \$this->expectException('Psr\\Log\\InvalidArgumentException');
        new Logger('invalid');
    }

    public function testInvalidOutput()
    {
        \$this->expectException('Psr\\Log\\InvalidArgumentException');
        new Logger(LogLevel::DEBUG, '/');
    }

    public function testContextReplacement()
    {
        \$logger = \$this->logger;
        \$logger->info('{Message {nothing} {user} {foo.bar} a}', ['user' => 'Bob', 'foo.bar' => 'Bar']);

        \$expected = ['[info] {Message {nothing} Bob Bar a}'];
        \$this->assertLogsMatch(\$expected, \$this->getLogs());
    }

    public function testObjectCastToString()
    {
        if (method_exists(\$this, 'createPartialMock')) {
            \$dummy = \$this->createPartialMock(DummyTest::class, ['__toString']);
        } else {
            \$dummy = \$this->createPartialMock(DummyTest::class, ['__toString']);
        }
        \$dummy->expects(\$this->atLeastOnce())
            ->method('__toString')
            ->willReturn('DUMMY');

        \$this->logger->warning(\$dummy);

        \$expected = ['[warning] DUMMY'];
        \$this->assertLogsMatch(\$expected, \$this->getLogs());
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

        \$this->logger->warning('Crazy context data', \$context);

        \$expected = ['[warning] Crazy context data'];
        \$this->assertLogsMatch(\$expected, \$this->getLogs());
    }

    public function testContextExceptionKeyCanBeExceptionOrOtherValues()
    {
        \$logger = \$this->logger;
        \$logger->warning('Random message', ['exception' => 'oops']);
        \$logger->critical('Uncaught Exception!', ['exception' => new \\LogicException('Fail')]);

        \$expected = [
            '[warning] Random message',
            '[critical] Uncaught Exception!',
        ];
        \$this->assertLogsMatch(\$expected, \$this->getLogs());
    }

    public function testFormatter()
    {
        \$this->logger = new Logger(LogLevel::DEBUG, \$this->tmpFile, function (\$level, \$message, \$context) {
            return json_encode(['level' => \$level, 'message' => \$message, 'context' => \$context]).\\PHP_EOL;
        });

        \$this->logger->error('An error', ['foo' => 'bar']);
        \$this->logger->warning('A warning', ['baz' => 'bar']);
        \$this->assertSame([
            '{\"level\":\"error\",\"message\":\"An error\",\"context\":{\"foo\":\"bar\"}}',
            '{\"level\":\"warning\",\"message\":\"A warning\",\"context\":{\"baz\":\"bar\"}}',
        ], \$this->getLogs());
    }
}

class DummyTest
{
    public function __toString()
    {
    }
}
", "vendor/symfony/http-kernel/Tests/Log/LoggerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Log/LoggerTest.php");
    }
}
