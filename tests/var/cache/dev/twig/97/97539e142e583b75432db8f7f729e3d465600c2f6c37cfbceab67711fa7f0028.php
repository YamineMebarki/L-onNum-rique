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

/* vendor/symfony/console/Tests/EventListener/ErrorListenerTest.php */
class __TwigTemplate_512b04c5e1e4d0487c19439b7f323b947be96d7d0145a4a076dd8c77409ce3f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/EventListener/ErrorListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/EventListener/ErrorListenerTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\Console\\EventListener\\ErrorListener;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Input\\Input;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\StringInput;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class ErrorListenerTest extends TestCase
{
    public function testOnConsoleError()
    {
        \$error = new \\TypeError('An error occurred');

        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->once())
            ->method('error')
            ->with('Error thrown while running command \"{command}\". Message: \"{message}\"', ['exception' => \$error, 'command' => 'test:run --foo=baz buzz', 'message' => 'An error occurred'])
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleError(new ConsoleErrorEvent(new ArgvInput(['console.php', 'test:run', '--foo=baz', 'buzz']), \$this->getOutput(), \$error, new Command('test:run')));
    }

    public function testOnConsoleErrorWithNoCommandAndNoInputString()
    {
        \$error = new \\RuntimeException('An error occurred');

        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->once())
            ->method('error')
            ->with('An error occurred while using the console. Message: \"{message}\"', ['exception' => \$error, 'message' => 'An error occurred'])
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleError(new ConsoleErrorEvent(new NonStringInput(), \$this->getOutput(), \$error));
    }

    public function testOnConsoleTerminateForNonZeroExitCodeWritesToLog()
    {
        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->once())
            ->method('debug')
            ->with('Command \"{command}\" exited with code \"{code}\"', ['command' => 'test:run', 'code' => 255])
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(new ArgvInput(['console.php', 'test:run']), 255));
    }

    public function testOnConsoleTerminateForZeroExitCodeDoesNotWriteToLog()
    {
        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->never())
            ->method('debug')
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(new ArgvInput(['console.php', 'test:run']), 0));
    }

    public function testGetSubscribedEvents()
    {
        \$this->assertEquals(
            [
                'console.error' => ['onConsoleError', -128],
                'console.terminate' => ['onConsoleTerminate', -128],
            ],
            ErrorListener::getSubscribedEvents()
        );
    }

    public function testAllKindsOfInputCanBeLogged()
    {
        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->exactly(3))
            ->method('debug')
            ->with('Command \"{command}\" exited with code \"{code}\"', ['command' => 'test:run --foo=bar', 'code' => 255])
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(new ArgvInput(['console.php', 'test:run', '--foo=bar']), 255));
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(new ArrayInput(['name' => 'test:run', '--foo' => 'bar']), 255));
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(new StringInput('test:run --foo=bar'), 255));
    }

    public function testCommandNameIsDisplayedForNonStringableInput()
    {
        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->once())
            ->method('debug')
            ->with('Command \"{command}\" exited with code \"{code}\"', ['command' => 'test:run', 'code' => 255])
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(\$this->getMockBuilder(InputInterface::class)->getMock(), 255));
    }

    private function getLogger()
    {
        return \$this->getMockForAbstractClass(LoggerInterface::class);
    }

    private function getConsoleTerminateEvent(InputInterface \$input, \$exitCode)
    {
        return new ConsoleTerminateEvent(new Command('test:run'), \$input, \$this->getOutput(), \$exitCode);
    }

    private function getOutput()
    {
        return \$this->getMockBuilder(OutputInterface::class)->getMock();
    }
}

class NonStringInput extends Input
{
    public function getFirstArgument()
    {
    }

    public function hasParameterOption(\$values, \$onlyParams = false)
    {
    }

    public function getParameterOption(\$values, \$default = false, \$onlyParams = false)
    {
    }

    public function parse()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/EventListener/ErrorListenerTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\Console\\EventListener\\ErrorListener;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Input\\Input;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\StringInput;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class ErrorListenerTest extends TestCase
{
    public function testOnConsoleError()
    {
        \$error = new \\TypeError('An error occurred');

        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->once())
            ->method('error')
            ->with('Error thrown while running command \"{command}\". Message: \"{message}\"', ['exception' => \$error, 'command' => 'test:run --foo=baz buzz', 'message' => 'An error occurred'])
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleError(new ConsoleErrorEvent(new ArgvInput(['console.php', 'test:run', '--foo=baz', 'buzz']), \$this->getOutput(), \$error, new Command('test:run')));
    }

    public function testOnConsoleErrorWithNoCommandAndNoInputString()
    {
        \$error = new \\RuntimeException('An error occurred');

        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->once())
            ->method('error')
            ->with('An error occurred while using the console. Message: \"{message}\"', ['exception' => \$error, 'message' => 'An error occurred'])
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleError(new ConsoleErrorEvent(new NonStringInput(), \$this->getOutput(), \$error));
    }

    public function testOnConsoleTerminateForNonZeroExitCodeWritesToLog()
    {
        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->once())
            ->method('debug')
            ->with('Command \"{command}\" exited with code \"{code}\"', ['command' => 'test:run', 'code' => 255])
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(new ArgvInput(['console.php', 'test:run']), 255));
    }

    public function testOnConsoleTerminateForZeroExitCodeDoesNotWriteToLog()
    {
        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->never())
            ->method('debug')
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(new ArgvInput(['console.php', 'test:run']), 0));
    }

    public function testGetSubscribedEvents()
    {
        \$this->assertEquals(
            [
                'console.error' => ['onConsoleError', -128],
                'console.terminate' => ['onConsoleTerminate', -128],
            ],
            ErrorListener::getSubscribedEvents()
        );
    }

    public function testAllKindsOfInputCanBeLogged()
    {
        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->exactly(3))
            ->method('debug')
            ->with('Command \"{command}\" exited with code \"{code}\"', ['command' => 'test:run --foo=bar', 'code' => 255])
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(new ArgvInput(['console.php', 'test:run', '--foo=bar']), 255));
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(new ArrayInput(['name' => 'test:run', '--foo' => 'bar']), 255));
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(new StringInput('test:run --foo=bar'), 255));
    }

    public function testCommandNameIsDisplayedForNonStringableInput()
    {
        \$logger = \$this->getLogger();
        \$logger
            ->expects(\$this->once())
            ->method('debug')
            ->with('Command \"{command}\" exited with code \"{code}\"', ['command' => 'test:run', 'code' => 255])
        ;

        \$listener = new ErrorListener(\$logger);
        \$listener->onConsoleTerminate(\$this->getConsoleTerminateEvent(\$this->getMockBuilder(InputInterface::class)->getMock(), 255));
    }

    private function getLogger()
    {
        return \$this->getMockForAbstractClass(LoggerInterface::class);
    }

    private function getConsoleTerminateEvent(InputInterface \$input, \$exitCode)
    {
        return new ConsoleTerminateEvent(new Command('test:run'), \$input, \$this->getOutput(), \$exitCode);
    }

    private function getOutput()
    {
        return \$this->getMockBuilder(OutputInterface::class)->getMock();
    }
}

class NonStringInput extends Input
{
    public function getFirstArgument()
    {
    }

    public function hasParameterOption(\$values, \$onlyParams = false)
    {
    }

    public function getParameterOption(\$values, \$default = false, \$onlyParams = false)
    {
    }

    public function parse()
    {
    }
}
", "vendor/symfony/console/Tests/EventListener/ErrorListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/EventListener/ErrorListenerTest.php");
    }
}
