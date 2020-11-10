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

/* vendor/symfony/http-kernel/EventListener/ExceptionListener.php */
class __TwigTemplate_0cfc036b3c309cbd66ece71c6147612efe39cf24dd4765c56c9aa179ac1ef464 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/ExceptionListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/ExceptionListener.php"));

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
use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class ExceptionListener implements EventSubscriberInterface
{
    protected \$controller;
    protected \$logger;
    protected \$debug;

    public function __construct(\$controller, LoggerInterface \$logger = null, \$debug = false)
    {
        \$this->controller = \$controller;
        \$this->logger = \$logger;
        \$this->debug = \$debug;
    }

    public function logKernelException(GetResponseForExceptionEvent \$event)
    {
        \$e = FlattenException::create(\$event->getException());

        \$this->logException(\$event->getException(), sprintf('Uncaught PHP Exception %s: \"%s\" at %s line %s', \$e->getClass(), \$e->getMessage(), \$e->getFile(), \$e->getLine()));
    }

    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        if (null === \$this->controller) {
            return;
        }

        \$exception = \$event->getException();
        \$request = \$this->duplicateRequest(\$exception, \$event->getRequest());
        \$eventDispatcher = \\func_num_args() > 2 ? func_get_arg(2) : null;

        try {
            \$response = \$event->getKernel()->handle(\$request, HttpKernelInterface::SUB_REQUEST, false);
        } catch (\\Exception \$e) {
            \$f = FlattenException::create(\$e);

            \$this->logException(\$e, sprintf('Exception thrown when handling an exception (%s: %s at %s line %s)', \$f->getClass(), \$f->getMessage(), \$e->getFile(), \$e->getLine()));

            \$prev = \$e;
            do {
                if (\$exception === \$wrapper = \$prev) {
                    throw \$e;
                }
            } while (\$prev = \$wrapper->getPrevious());

            \$prev = new \\ReflectionProperty(\$wrapper instanceof \\Exception ? \\Exception::class : \\Error::class, 'previous');
            \$prev->setAccessible(true);
            \$prev->setValue(\$wrapper, \$exception);

            throw \$e;
        }

        \$event->setResponse(\$response);

        if (\$this->debug && \$eventDispatcher instanceof EventDispatcherInterface) {
            \$cspRemovalListener = function (\$event) use (&\$cspRemovalListener, \$eventDispatcher) {
                \$event->getResponse()->headers->remove('Content-Security-Policy');
                \$eventDispatcher->removeListener(KernelEvents::RESPONSE, \$cspRemovalListener);
            };
            \$eventDispatcher->addListener(KernelEvents::RESPONSE, \$cspRemovalListener, -128);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => [
                ['logKernelException', 0],
                ['onKernelException', -128],
            ],
        ];
    }

    /**
     * Logs an exception.
     *
     * @param \\Exception \$exception The \\Exception instance
     * @param string     \$message   The error message to log
     */
    protected function logException(\\Exception \$exception, \$message)
    {
        if (null !== \$this->logger) {
            if (!\$exception instanceof HttpExceptionInterface || \$exception->getStatusCode() >= 500) {
                \$this->logger->critical(\$message, ['exception' => \$exception]);
            } else {
                \$this->logger->error(\$message, ['exception' => \$exception]);
            }
        }
    }

    /**
     * Clones the request for the exception.
     *
     * @param \\Exception \$exception The thrown exception
     * @param Request    \$request   The original request
     *
     * @return Request The cloned request
     */
    protected function duplicateRequest(\\Exception \$exception, Request \$request)
    {
        \$attributes = [
            '_controller' => \$this->controller,
            'exception' => FlattenException::create(\$exception),
            'logger' => \$this->logger instanceof DebugLoggerInterface ? \$this->logger : null,
        ];
        \$request = \$request->duplicate(null, null, \$attributes);
        \$request->setMethod('GET');

        return \$request;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/EventListener/ExceptionListener.php";
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
use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class ExceptionListener implements EventSubscriberInterface
{
    protected \$controller;
    protected \$logger;
    protected \$debug;

    public function __construct(\$controller, LoggerInterface \$logger = null, \$debug = false)
    {
        \$this->controller = \$controller;
        \$this->logger = \$logger;
        \$this->debug = \$debug;
    }

    public function logKernelException(GetResponseForExceptionEvent \$event)
    {
        \$e = FlattenException::create(\$event->getException());

        \$this->logException(\$event->getException(), sprintf('Uncaught PHP Exception %s: \"%s\" at %s line %s', \$e->getClass(), \$e->getMessage(), \$e->getFile(), \$e->getLine()));
    }

    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        if (null === \$this->controller) {
            return;
        }

        \$exception = \$event->getException();
        \$request = \$this->duplicateRequest(\$exception, \$event->getRequest());
        \$eventDispatcher = \\func_num_args() > 2 ? func_get_arg(2) : null;

        try {
            \$response = \$event->getKernel()->handle(\$request, HttpKernelInterface::SUB_REQUEST, false);
        } catch (\\Exception \$e) {
            \$f = FlattenException::create(\$e);

            \$this->logException(\$e, sprintf('Exception thrown when handling an exception (%s: %s at %s line %s)', \$f->getClass(), \$f->getMessage(), \$e->getFile(), \$e->getLine()));

            \$prev = \$e;
            do {
                if (\$exception === \$wrapper = \$prev) {
                    throw \$e;
                }
            } while (\$prev = \$wrapper->getPrevious());

            \$prev = new \\ReflectionProperty(\$wrapper instanceof \\Exception ? \\Exception::class : \\Error::class, 'previous');
            \$prev->setAccessible(true);
            \$prev->setValue(\$wrapper, \$exception);

            throw \$e;
        }

        \$event->setResponse(\$response);

        if (\$this->debug && \$eventDispatcher instanceof EventDispatcherInterface) {
            \$cspRemovalListener = function (\$event) use (&\$cspRemovalListener, \$eventDispatcher) {
                \$event->getResponse()->headers->remove('Content-Security-Policy');
                \$eventDispatcher->removeListener(KernelEvents::RESPONSE, \$cspRemovalListener);
            };
            \$eventDispatcher->addListener(KernelEvents::RESPONSE, \$cspRemovalListener, -128);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => [
                ['logKernelException', 0],
                ['onKernelException', -128],
            ],
        ];
    }

    /**
     * Logs an exception.
     *
     * @param \\Exception \$exception The \\Exception instance
     * @param string     \$message   The error message to log
     */
    protected function logException(\\Exception \$exception, \$message)
    {
        if (null !== \$this->logger) {
            if (!\$exception instanceof HttpExceptionInterface || \$exception->getStatusCode() >= 500) {
                \$this->logger->critical(\$message, ['exception' => \$exception]);
            } else {
                \$this->logger->error(\$message, ['exception' => \$exception]);
            }
        }
    }

    /**
     * Clones the request for the exception.
     *
     * @param \\Exception \$exception The thrown exception
     * @param Request    \$request   The original request
     *
     * @return Request The cloned request
     */
    protected function duplicateRequest(\\Exception \$exception, Request \$request)
    {
        \$attributes = [
            '_controller' => \$this->controller,
            'exception' => FlattenException::create(\$exception),
            'logger' => \$this->logger instanceof DebugLoggerInterface ? \$this->logger : null,
        ];
        \$request = \$request->duplicate(null, null, \$attributes);
        \$request->setMethod('GET');

        return \$request;
    }
}
", "vendor/symfony/http-kernel/EventListener/ExceptionListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/EventListener/ExceptionListener.php");
    }
}
