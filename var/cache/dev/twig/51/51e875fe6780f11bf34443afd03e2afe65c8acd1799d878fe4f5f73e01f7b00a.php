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

/* vendor/symfony/http-kernel/Tests/EventListener/DebugHandlersListenerTest.php */
class __TwigTemplate_c5759b5425fb3ef716d61c59c3af7df3b3e24d9fba5833533aef0f8372246d8a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/DebugHandlersListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/DebugHandlersListenerTest.php"));

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
use Psr\\Log\\LogLevel;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleEvent;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Console\\Output\\ConsoleOutput;
use Symfony\\Component\\Debug\\ErrorHandler;
use Symfony\\Component\\Debug\\ExceptionHandler;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DebugHandlersListenerTest extends TestCase
{
    public function testConfigure()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$userHandler = function () {};
        \$listener = new DebugHandlersListener(\$userHandler, \$logger);
        \$xHandler = new ExceptionHandler();
        \$eHandler = new ErrorHandler();
        \$eHandler->setExceptionHandler([\$xHandler, 'handle']);

        \$exception = null;
        set_error_handler([\$eHandler, 'handleError']);
        set_exception_handler([\$eHandler, 'handleException']);
        try {
            \$listener->configure();
        } catch (\\Exception \$exception) {
        }
        restore_exception_handler();
        restore_error_handler();

        if (null !== \$exception) {
            throw \$exception;
        }

        \$this->assertSame(\$userHandler, \$xHandler->setHandler('var_dump'));

        \$loggers = \$eHandler->setLoggers([]);

        \$this->assertArrayHasKey(E_DEPRECATED, \$loggers);
        \$this->assertSame([\$logger, LogLevel::INFO], \$loggers[E_DEPRECATED]);
    }

    public function testConfigureForHttpKernelWithNoTerminateWithException()
    {
        \$listener = new DebugHandlersListener(null);
        \$eHandler = new ErrorHandler();
        \$event = new KernelEvent(
            \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(),
            Request::create('/'),
            HttpKernelInterface::MASTER_REQUEST
        );

        \$exception = null;
        \$h = set_exception_handler([\$eHandler, 'handleException']);
        try {
            \$listener->configure(\$event);
        } catch (\\Exception \$exception) {
        }
        restore_exception_handler();

        if (null !== \$exception) {
            throw \$exception;
        }

        \$this->assertNull(\$h);
    }

    public function testConsoleEvent()
    {
        \$dispatcher = new EventDispatcher();
        \$listener = new DebugHandlersListener(null);
        \$app = \$this->getMockBuilder('Symfony\\Component\\Console\\Application')->getMock();
        \$app->expects(\$this->once())->method('getHelperSet')->willReturn(new HelperSet());
        \$command = new Command(__FUNCTION__);
        \$command->setApplication(\$app);
        \$event = new ConsoleEvent(\$command, new ArgvInput(), new ConsoleOutput());

        \$dispatcher->addSubscriber(\$listener);

        \$xListeners = [
            KernelEvents::REQUEST => [[\$listener, 'configure']],
            ConsoleEvents::COMMAND => [[\$listener, 'configure']],
            KernelEvents::EXCEPTION => [[\$listener, 'onKernelException']],
        ];
        \$this->assertSame(\$xListeners, \$dispatcher->getListeners());

        \$exception = null;
        \$eHandler = new ErrorHandler();
        set_error_handler([\$eHandler, 'handleError']);
        set_exception_handler([\$eHandler, 'handleException']);
        try {
            \$dispatcher->dispatch(\$event, ConsoleEvents::COMMAND);
        } catch (\\Exception \$exception) {
        }
        restore_exception_handler();
        restore_error_handler();

        if (null !== \$exception) {
            throw \$exception;
        }

        \$xHandler = \$eHandler->setExceptionHandler('var_dump');
        \$this->assertInstanceOf('Closure', \$xHandler);

        \$app->expects(\$this->once())
            ->method('renderException');

        \$xHandler(new \\Exception());
    }

    public function testReplaceExistingExceptionHandler()
    {
        \$userHandler = function () {};
        \$listener = new DebugHandlersListener(\$userHandler);
        \$eHandler = new ErrorHandler();
        \$eHandler->setExceptionHandler('var_dump');

        \$exception = null;
        set_exception_handler([\$eHandler, 'handleException']);
        try {
            \$listener->configure();
        } catch (\\Exception \$exception) {
        }
        restore_exception_handler();

        if (null !== \$exception) {
            throw \$exception;
        }

        \$this->assertSame(\$userHandler, \$eHandler->setExceptionHandler('var_dump'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/DebugHandlersListenerTest.php";
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
use Psr\\Log\\LogLevel;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleEvent;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Console\\Output\\ConsoleOutput;
use Symfony\\Component\\Debug\\ErrorHandler;
use Symfony\\Component\\Debug\\ExceptionHandler;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DebugHandlersListenerTest extends TestCase
{
    public function testConfigure()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$userHandler = function () {};
        \$listener = new DebugHandlersListener(\$userHandler, \$logger);
        \$xHandler = new ExceptionHandler();
        \$eHandler = new ErrorHandler();
        \$eHandler->setExceptionHandler([\$xHandler, 'handle']);

        \$exception = null;
        set_error_handler([\$eHandler, 'handleError']);
        set_exception_handler([\$eHandler, 'handleException']);
        try {
            \$listener->configure();
        } catch (\\Exception \$exception) {
        }
        restore_exception_handler();
        restore_error_handler();

        if (null !== \$exception) {
            throw \$exception;
        }

        \$this->assertSame(\$userHandler, \$xHandler->setHandler('var_dump'));

        \$loggers = \$eHandler->setLoggers([]);

        \$this->assertArrayHasKey(E_DEPRECATED, \$loggers);
        \$this->assertSame([\$logger, LogLevel::INFO], \$loggers[E_DEPRECATED]);
    }

    public function testConfigureForHttpKernelWithNoTerminateWithException()
    {
        \$listener = new DebugHandlersListener(null);
        \$eHandler = new ErrorHandler();
        \$event = new KernelEvent(
            \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(),
            Request::create('/'),
            HttpKernelInterface::MASTER_REQUEST
        );

        \$exception = null;
        \$h = set_exception_handler([\$eHandler, 'handleException']);
        try {
            \$listener->configure(\$event);
        } catch (\\Exception \$exception) {
        }
        restore_exception_handler();

        if (null !== \$exception) {
            throw \$exception;
        }

        \$this->assertNull(\$h);
    }

    public function testConsoleEvent()
    {
        \$dispatcher = new EventDispatcher();
        \$listener = new DebugHandlersListener(null);
        \$app = \$this->getMockBuilder('Symfony\\Component\\Console\\Application')->getMock();
        \$app->expects(\$this->once())->method('getHelperSet')->willReturn(new HelperSet());
        \$command = new Command(__FUNCTION__);
        \$command->setApplication(\$app);
        \$event = new ConsoleEvent(\$command, new ArgvInput(), new ConsoleOutput());

        \$dispatcher->addSubscriber(\$listener);

        \$xListeners = [
            KernelEvents::REQUEST => [[\$listener, 'configure']],
            ConsoleEvents::COMMAND => [[\$listener, 'configure']],
            KernelEvents::EXCEPTION => [[\$listener, 'onKernelException']],
        ];
        \$this->assertSame(\$xListeners, \$dispatcher->getListeners());

        \$exception = null;
        \$eHandler = new ErrorHandler();
        set_error_handler([\$eHandler, 'handleError']);
        set_exception_handler([\$eHandler, 'handleException']);
        try {
            \$dispatcher->dispatch(\$event, ConsoleEvents::COMMAND);
        } catch (\\Exception \$exception) {
        }
        restore_exception_handler();
        restore_error_handler();

        if (null !== \$exception) {
            throw \$exception;
        }

        \$xHandler = \$eHandler->setExceptionHandler('var_dump');
        \$this->assertInstanceOf('Closure', \$xHandler);

        \$app->expects(\$this->once())
            ->method('renderException');

        \$xHandler(new \\Exception());
    }

    public function testReplaceExistingExceptionHandler()
    {
        \$userHandler = function () {};
        \$listener = new DebugHandlersListener(\$userHandler);
        \$eHandler = new ErrorHandler();
        \$eHandler->setExceptionHandler('var_dump');

        \$exception = null;
        set_exception_handler([\$eHandler, 'handleException']);
        try {
            \$listener->configure();
        } catch (\\Exception \$exception) {
        }
        restore_exception_handler();

        if (null !== \$exception) {
            throw \$exception;
        }

        \$this->assertSame(\$userHandler, \$eHandler->setExceptionHandler('var_dump'));
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/DebugHandlersListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/DebugHandlersListenerTest.php");
    }
}
