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

/* vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php */
class __TwigTemplate_23e9bd49f6873ffa237e5372d2e1f21b2db4f28b281d8ea9e9c48deb67434185 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php"));

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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleEvent;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Debug\\ErrorHandler;
use Symfony\\Component\\Debug\\ExceptionHandler;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Configures errors and exceptions handlers.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DebugHandlersListener implements EventSubscriberInterface
{
    private \$exceptionHandler;
    private \$logger;
    private \$levels;
    private \$throwAt;
    private \$scream;
    private \$fileLinkFormat;
    private \$scope;
    private \$charset;
    private \$firstCall = true;
    private \$hasTerminatedWithException;

    /**
     * @param callable|null                 \$exceptionHandler A handler that will be called on Exception
     * @param LoggerInterface|null          \$logger           A PSR-3 logger
     * @param array|int                     \$levels           An array map of E_* to LogLevel::* or an integer bit field of E_* constants
     * @param int|null                      \$throwAt          Thrown errors in a bit field of E_* constants, or null to keep the current value
     * @param bool                          \$scream           Enables/disables screaming mode, where even silenced errors are logged
     * @param string|FileLinkFormatter|null \$fileLinkFormat   The format for links to source files
     * @param bool                          \$scope            Enables/disables scoping mode
     */
    public function __construct(callable \$exceptionHandler = null, LoggerInterface \$logger = null, \$levels = E_ALL, ?int \$throwAt = E_ALL, bool \$scream = true, \$fileLinkFormat = null, bool \$scope = true, string \$charset = null)
    {
        \$this->exceptionHandler = \$exceptionHandler;
        \$this->logger = \$logger;
        \$this->levels = null === \$levels ? E_ALL : \$levels;
        \$this->throwAt = \\is_int(\$throwAt) ? \$throwAt : (null === \$throwAt ? null : (\$throwAt ? E_ALL : null));
        \$this->scream = \$scream;
        \$this->fileLinkFormat = \$fileLinkFormat;
        \$this->scope = \$scope;
        \$this->charset = \$charset;
    }

    /**
     * Configures the error handler.
     */
    public function configure(Event \$event = null)
    {
        if (!\$event instanceof KernelEvent ? !\$this->firstCall : !\$event->isMasterRequest()) {
            return;
        }
        \$this->firstCall = \$this->hasTerminatedWithException = false;

        \$handler = set_exception_handler('var_dump');
        \$handler = \\is_array(\$handler) ? \$handler[0] : null;
        restore_exception_handler();

        if (\$this->logger || null !== \$this->throwAt) {
            if (\$handler instanceof ErrorHandler) {
                if (\$this->logger) {
                    \$handler->setDefaultLogger(\$this->logger, \$this->levels);
                    if (\\is_array(\$this->levels)) {
                        \$levels = 0;
                        foreach (\$this->levels as \$type => \$log) {
                            \$levels |= \$type;
                        }
                    } else {
                        \$levels = \$this->levels;
                    }
                    if (\$this->scream) {
                        \$handler->screamAt(\$levels);
                    }
                    if (\$this->scope) {
                        \$handler->scopeAt(\$levels & ~E_USER_DEPRECATED & ~E_DEPRECATED);
                    } else {
                        \$handler->scopeAt(0, true);
                    }
                    \$this->logger = \$this->levels = null;
                }
                if (null !== \$this->throwAt) {
                    \$handler->throwAt(\$this->throwAt, true);
                }
            }
        }
        if (!\$this->exceptionHandler) {
            if (\$event instanceof KernelEvent) {
                if (method_exists(\$kernel = \$event->getKernel(), 'terminateWithException')) {
                    \$request = \$event->getRequest();
                    \$hasRun = &\$this->hasTerminatedWithException;
                    \$this->exceptionHandler = static function (\\Exception \$e) use (\$kernel, \$request, &\$hasRun) {
                        if (\$hasRun) {
                            throw \$e;
                        }
                        \$hasRun = true;
                        \$kernel->terminateWithException(\$e, \$request);
                    };
                }
            } elseif (\$event instanceof ConsoleEvent && \$app = \$event->getCommand()->getApplication()) {
                \$output = \$event->getOutput();
                if (\$output instanceof ConsoleOutputInterface) {
                    \$output = \$output->getErrorOutput();
                }
                \$this->exceptionHandler = function (\$e) use (\$app, \$output) {
                    \$app->renderException(\$e, \$output);
                };
            }
        }
        if (\$this->exceptionHandler) {
            if (\$handler instanceof ErrorHandler) {
                \$h = \$handler->setExceptionHandler('var_dump');
                if (\\is_array(\$h) && \$h[0] instanceof ExceptionHandler) {
                    \$handler->setExceptionHandler(\$h);
                    \$handler = \$h[0];
                } else {
                    \$handler->setExceptionHandler(\$this->exceptionHandler);
                }
            }
            if (\$handler instanceof ExceptionHandler) {
                \$handler->setHandler(\$this->exceptionHandler);
                if (null !== \$this->fileLinkFormat) {
                    \$handler->setFileLinkFormat(\$this->fileLinkFormat);
                }
            }
            \$this->exceptionHandler = null;
        }
    }

    /**
     * @internal
     */
    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        if (!\$this->hasTerminatedWithException || !\$event->isMasterRequest()) {
            return;
        }

        \$debug = \$this->scream && \$this->scope;
        \$controller = function (Request \$request) use (\$debug) {
            \$e = \$request->attributes->get('exception');
            \$handler = new ExceptionHandler(\$debug, \$this->charset, \$this->fileLinkFormat);

            return new Response(\$handler->getHtml(\$e), \$e->getStatusCode(), \$e->getHeaders());
        };

        (new ExceptionListener(\$controller, \$this->logger, \$debug))->onKernelException(\$event);
    }

    public static function getSubscribedEvents()
    {
        \$events = [KernelEvents::REQUEST => ['configure', 2048]];

        if ('cli' === \\PHP_SAPI && \\defined('Symfony\\Component\\Console\\ConsoleEvents::COMMAND')) {
            \$events[ConsoleEvents::COMMAND] = ['configure', 2048];
        }

        \$events[KernelEvents::EXCEPTION] = ['onKernelException', -2048];

        return \$events;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php";
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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleEvent;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Debug\\ErrorHandler;
use Symfony\\Component\\Debug\\ExceptionHandler;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * Configures errors and exceptions handlers.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DebugHandlersListener implements EventSubscriberInterface
{
    private \$exceptionHandler;
    private \$logger;
    private \$levels;
    private \$throwAt;
    private \$scream;
    private \$fileLinkFormat;
    private \$scope;
    private \$charset;
    private \$firstCall = true;
    private \$hasTerminatedWithException;

    /**
     * @param callable|null                 \$exceptionHandler A handler that will be called on Exception
     * @param LoggerInterface|null          \$logger           A PSR-3 logger
     * @param array|int                     \$levels           An array map of E_* to LogLevel::* or an integer bit field of E_* constants
     * @param int|null                      \$throwAt          Thrown errors in a bit field of E_* constants, or null to keep the current value
     * @param bool                          \$scream           Enables/disables screaming mode, where even silenced errors are logged
     * @param string|FileLinkFormatter|null \$fileLinkFormat   The format for links to source files
     * @param bool                          \$scope            Enables/disables scoping mode
     */
    public function __construct(callable \$exceptionHandler = null, LoggerInterface \$logger = null, \$levels = E_ALL, ?int \$throwAt = E_ALL, bool \$scream = true, \$fileLinkFormat = null, bool \$scope = true, string \$charset = null)
    {
        \$this->exceptionHandler = \$exceptionHandler;
        \$this->logger = \$logger;
        \$this->levels = null === \$levels ? E_ALL : \$levels;
        \$this->throwAt = \\is_int(\$throwAt) ? \$throwAt : (null === \$throwAt ? null : (\$throwAt ? E_ALL : null));
        \$this->scream = \$scream;
        \$this->fileLinkFormat = \$fileLinkFormat;
        \$this->scope = \$scope;
        \$this->charset = \$charset;
    }

    /**
     * Configures the error handler.
     */
    public function configure(Event \$event = null)
    {
        if (!\$event instanceof KernelEvent ? !\$this->firstCall : !\$event->isMasterRequest()) {
            return;
        }
        \$this->firstCall = \$this->hasTerminatedWithException = false;

        \$handler = set_exception_handler('var_dump');
        \$handler = \\is_array(\$handler) ? \$handler[0] : null;
        restore_exception_handler();

        if (\$this->logger || null !== \$this->throwAt) {
            if (\$handler instanceof ErrorHandler) {
                if (\$this->logger) {
                    \$handler->setDefaultLogger(\$this->logger, \$this->levels);
                    if (\\is_array(\$this->levels)) {
                        \$levels = 0;
                        foreach (\$this->levels as \$type => \$log) {
                            \$levels |= \$type;
                        }
                    } else {
                        \$levels = \$this->levels;
                    }
                    if (\$this->scream) {
                        \$handler->screamAt(\$levels);
                    }
                    if (\$this->scope) {
                        \$handler->scopeAt(\$levels & ~E_USER_DEPRECATED & ~E_DEPRECATED);
                    } else {
                        \$handler->scopeAt(0, true);
                    }
                    \$this->logger = \$this->levels = null;
                }
                if (null !== \$this->throwAt) {
                    \$handler->throwAt(\$this->throwAt, true);
                }
            }
        }
        if (!\$this->exceptionHandler) {
            if (\$event instanceof KernelEvent) {
                if (method_exists(\$kernel = \$event->getKernel(), 'terminateWithException')) {
                    \$request = \$event->getRequest();
                    \$hasRun = &\$this->hasTerminatedWithException;
                    \$this->exceptionHandler = static function (\\Exception \$e) use (\$kernel, \$request, &\$hasRun) {
                        if (\$hasRun) {
                            throw \$e;
                        }
                        \$hasRun = true;
                        \$kernel->terminateWithException(\$e, \$request);
                    };
                }
            } elseif (\$event instanceof ConsoleEvent && \$app = \$event->getCommand()->getApplication()) {
                \$output = \$event->getOutput();
                if (\$output instanceof ConsoleOutputInterface) {
                    \$output = \$output->getErrorOutput();
                }
                \$this->exceptionHandler = function (\$e) use (\$app, \$output) {
                    \$app->renderException(\$e, \$output);
                };
            }
        }
        if (\$this->exceptionHandler) {
            if (\$handler instanceof ErrorHandler) {
                \$h = \$handler->setExceptionHandler('var_dump');
                if (\\is_array(\$h) && \$h[0] instanceof ExceptionHandler) {
                    \$handler->setExceptionHandler(\$h);
                    \$handler = \$h[0];
                } else {
                    \$handler->setExceptionHandler(\$this->exceptionHandler);
                }
            }
            if (\$handler instanceof ExceptionHandler) {
                \$handler->setHandler(\$this->exceptionHandler);
                if (null !== \$this->fileLinkFormat) {
                    \$handler->setFileLinkFormat(\$this->fileLinkFormat);
                }
            }
            \$this->exceptionHandler = null;
        }
    }

    /**
     * @internal
     */
    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        if (!\$this->hasTerminatedWithException || !\$event->isMasterRequest()) {
            return;
        }

        \$debug = \$this->scream && \$this->scope;
        \$controller = function (Request \$request) use (\$debug) {
            \$e = \$request->attributes->get('exception');
            \$handler = new ExceptionHandler(\$debug, \$this->charset, \$this->fileLinkFormat);

            return new Response(\$handler->getHtml(\$e), \$e->getStatusCode(), \$e->getHeaders());
        };

        (new ExceptionListener(\$controller, \$this->logger, \$debug))->onKernelException(\$event);
    }

    public static function getSubscribedEvents()
    {
        \$events = [KernelEvents::REQUEST => ['configure', 2048]];

        if ('cli' === \\PHP_SAPI && \\defined('Symfony\\Component\\Console\\ConsoleEvents::COMMAND')) {
            \$events[ConsoleEvents::COMMAND] = ['configure', 2048];
        }

        \$events[KernelEvents::EXCEPTION] = ['onKernelException', -2048];

        return \$events;
    }
}
", "vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php");
    }
}
