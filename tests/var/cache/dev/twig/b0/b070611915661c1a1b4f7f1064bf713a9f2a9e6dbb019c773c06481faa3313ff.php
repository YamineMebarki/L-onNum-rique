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

/* vendor/psr/log/Psr/Log/Test/LoggerInterfaceTest.php */
class __TwigTemplate_3f043b61a585359879d16abab3f1c896ed631d41876a6f80e8863272ca9757dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/log/Psr/Log/Test/LoggerInterfaceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/psr/log/Psr/Log/Test/LoggerInterfaceTest.php"));

        // line 1
        echo "<?php

namespace Psr\\Log\\Test;

use Psr\\Log\\LoggerInterface;
use Psr\\Log\\LogLevel;
use PHPUnit\\Framework\\TestCase;

/**
 * Provides a base test class for ensuring compliance with the LoggerInterface.
 *
 * Implementors can extend the class and implement abstract methods to run this
 * as part of their test suite.
 */
abstract class LoggerInterfaceTest extends TestCase
{
    /**
     * @return LoggerInterface
     */
    abstract public function getLogger();

    /**
     * This must return the log messages in order.
     *
     * The simple formatting of the messages is: \"<LOG LEVEL> <MESSAGE>\".
     *
     * Example ->error('Foo') would yield \"error Foo\".
     *
     * @return string[]
     */
    abstract public function getLogs();

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
        \$logger->{\$level}(\$message, array('user' => 'Bob'));
        \$logger->log(\$level, \$message, array('user' => 'Bob'));

        \$expected = array(
            \$level.' message of level '.\$level.' with context: Bob',
            \$level.' message of level '.\$level.' with context: Bob',
        );
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function provideLevelsAndMessages()
    {
        return array(
            LogLevel::EMERGENCY => array(LogLevel::EMERGENCY, 'message of level emergency with context: {user}'),
            LogLevel::ALERT => array(LogLevel::ALERT, 'message of level alert with context: {user}'),
            LogLevel::CRITICAL => array(LogLevel::CRITICAL, 'message of level critical with context: {user}'),
            LogLevel::ERROR => array(LogLevel::ERROR, 'message of level error with context: {user}'),
            LogLevel::WARNING => array(LogLevel::WARNING, 'message of level warning with context: {user}'),
            LogLevel::NOTICE => array(LogLevel::NOTICE, 'message of level notice with context: {user}'),
            LogLevel::INFO => array(LogLevel::INFO, 'message of level info with context: {user}'),
            LogLevel::DEBUG => array(LogLevel::DEBUG, 'message of level debug with context: {user}'),
        );
    }

    /**
     * @expectedException \\Psr\\Log\\InvalidArgumentException
     */
    public function testThrowsOnInvalidLevel()
    {
        \$logger = \$this->getLogger();
        \$logger->log('invalid level', 'Foo');
    }

    public function testContextReplacement()
    {
        \$logger = \$this->getLogger();
        \$logger->info('{Message {nothing} {user} {foo.bar} a}', array('user' => 'Bob', 'foo.bar' => 'Bar'));

        \$expected = array('info {Message {nothing} Bob Bar a}');
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testObjectCastToString()
    {
        if (method_exists(\$this, 'createPartialMock')) {
            \$dummy = \$this->createPartialMock('Psr\\Log\\Test\\DummyTest', array('__toString'));
        } else {
            \$dummy = \$this->getMock('Psr\\Log\\Test\\DummyTest', array('__toString'));
        }
        \$dummy->expects(\$this->once())
            ->method('__toString')
            ->will(\$this->returnValue('DUMMY'));

        \$this->getLogger()->warning(\$dummy);

        \$expected = array('warning DUMMY');
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testContextCanContainAnything()
    {
        \$closed = fopen('php://memory', 'r');
        fclose(\$closed);

        \$context = array(
            'bool' => true,
            'null' => null,
            'string' => 'Foo',
            'int' => 0,
            'float' => 0.5,
            'nested' => array('with object' => new DummyTest),
            'object' => new \\DateTime,
            'resource' => fopen('php://memory', 'r'),
            'closed' => \$closed,
        );

        \$this->getLogger()->warning('Crazy context data', \$context);

        \$expected = array('warning Crazy context data');
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testContextExceptionKeyCanBeExceptionOrOtherValues()
    {
        \$logger = \$this->getLogger();
        \$logger->warning('Random message', array('exception' => 'oops'));
        \$logger->critical('Uncaught Exception!', array('exception' => new \\LogicException('Fail')));

        \$expected = array(
            'warning Random message',
            'critical Uncaught Exception!'
        );
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
        return "vendor/psr/log/Psr/Log/Test/LoggerInterfaceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Psr\\Log\\Test;

use Psr\\Log\\LoggerInterface;
use Psr\\Log\\LogLevel;
use PHPUnit\\Framework\\TestCase;

/**
 * Provides a base test class for ensuring compliance with the LoggerInterface.
 *
 * Implementors can extend the class and implement abstract methods to run this
 * as part of their test suite.
 */
abstract class LoggerInterfaceTest extends TestCase
{
    /**
     * @return LoggerInterface
     */
    abstract public function getLogger();

    /**
     * This must return the log messages in order.
     *
     * The simple formatting of the messages is: \"<LOG LEVEL> <MESSAGE>\".
     *
     * Example ->error('Foo') would yield \"error Foo\".
     *
     * @return string[]
     */
    abstract public function getLogs();

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
        \$logger->{\$level}(\$message, array('user' => 'Bob'));
        \$logger->log(\$level, \$message, array('user' => 'Bob'));

        \$expected = array(
            \$level.' message of level '.\$level.' with context: Bob',
            \$level.' message of level '.\$level.' with context: Bob',
        );
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function provideLevelsAndMessages()
    {
        return array(
            LogLevel::EMERGENCY => array(LogLevel::EMERGENCY, 'message of level emergency with context: {user}'),
            LogLevel::ALERT => array(LogLevel::ALERT, 'message of level alert with context: {user}'),
            LogLevel::CRITICAL => array(LogLevel::CRITICAL, 'message of level critical with context: {user}'),
            LogLevel::ERROR => array(LogLevel::ERROR, 'message of level error with context: {user}'),
            LogLevel::WARNING => array(LogLevel::WARNING, 'message of level warning with context: {user}'),
            LogLevel::NOTICE => array(LogLevel::NOTICE, 'message of level notice with context: {user}'),
            LogLevel::INFO => array(LogLevel::INFO, 'message of level info with context: {user}'),
            LogLevel::DEBUG => array(LogLevel::DEBUG, 'message of level debug with context: {user}'),
        );
    }

    /**
     * @expectedException \\Psr\\Log\\InvalidArgumentException
     */
    public function testThrowsOnInvalidLevel()
    {
        \$logger = \$this->getLogger();
        \$logger->log('invalid level', 'Foo');
    }

    public function testContextReplacement()
    {
        \$logger = \$this->getLogger();
        \$logger->info('{Message {nothing} {user} {foo.bar} a}', array('user' => 'Bob', 'foo.bar' => 'Bar'));

        \$expected = array('info {Message {nothing} Bob Bar a}');
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testObjectCastToString()
    {
        if (method_exists(\$this, 'createPartialMock')) {
            \$dummy = \$this->createPartialMock('Psr\\Log\\Test\\DummyTest', array('__toString'));
        } else {
            \$dummy = \$this->getMock('Psr\\Log\\Test\\DummyTest', array('__toString'));
        }
        \$dummy->expects(\$this->once())
            ->method('__toString')
            ->will(\$this->returnValue('DUMMY'));

        \$this->getLogger()->warning(\$dummy);

        \$expected = array('warning DUMMY');
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testContextCanContainAnything()
    {
        \$closed = fopen('php://memory', 'r');
        fclose(\$closed);

        \$context = array(
            'bool' => true,
            'null' => null,
            'string' => 'Foo',
            'int' => 0,
            'float' => 0.5,
            'nested' => array('with object' => new DummyTest),
            'object' => new \\DateTime,
            'resource' => fopen('php://memory', 'r'),
            'closed' => \$closed,
        );

        \$this->getLogger()->warning('Crazy context data', \$context);

        \$expected = array('warning Crazy context data');
        \$this->assertEquals(\$expected, \$this->getLogs());
    }

    public function testContextExceptionKeyCanBeExceptionOrOtherValues()
    {
        \$logger = \$this->getLogger();
        \$logger->warning('Random message', array('exception' => 'oops'));
        \$logger->critical('Uncaught Exception!', array('exception' => new \\LogicException('Fail')));

        \$expected = array(
            'warning Random message',
            'critical Uncaught Exception!'
        );
        \$this->assertEquals(\$expected, \$this->getLogs());
    }
}

class DummyTest
{
    public function __toString()
    {
    }
}
", "vendor/psr/log/Psr/Log/Test/LoggerInterfaceTest.php", "/var/www/public/DevLaon/templates/vendor/psr/log/Psr/Log/Test/LoggerInterfaceTest.php");
    }
}
