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

/* vendor/symfony/http-kernel/EventListener/RouterListener.php */
class __TwigTemplate_a4977354d4021f44d0faa8a472bbce975c2883019ce464149944014fd00030d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/RouterListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/RouterListener.php"));

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
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException;
use Symfony\\Component\\Routing\\Exception\\NoConfigurationException;
use Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException;
use Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface;
use Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\RequestContextAwareInterface;

/**
 * Initializes the context from the request and sets request attributes based on a matching route.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @final since Symfony 4.3
 */
class RouterListener implements EventSubscriberInterface
{
    private \$matcher;
    private \$context;
    private \$logger;
    private \$requestStack;
    private \$projectDir;
    private \$debug;

    /**
     * @param UrlMatcherInterface|RequestMatcherInterface \$matcher      The Url or Request matcher
     * @param RequestStack                                \$requestStack A RequestStack instance
     * @param RequestContext|null                         \$context      The RequestContext (can be null when \$matcher implements RequestContextAwareInterface)
     * @param LoggerInterface|null                        \$logger       The logger
     * @param string                                      \$projectDir
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(\$matcher, RequestStack \$requestStack, RequestContext \$context = null, LoggerInterface \$logger = null, string \$projectDir = null, bool \$debug = true)
    {
        if (!\$matcher instanceof UrlMatcherInterface && !\$matcher instanceof RequestMatcherInterface) {
            throw new \\InvalidArgumentException('Matcher must either implement UrlMatcherInterface or RequestMatcherInterface.');
        }

        if (null === \$context && !\$matcher instanceof RequestContextAwareInterface) {
            throw new \\InvalidArgumentException('You must either pass a RequestContext or the matcher must implement RequestContextAwareInterface.');
        }

        \$this->matcher = \$matcher;
        \$this->context = \$context ?: \$matcher->getContext();
        \$this->requestStack = \$requestStack;
        \$this->logger = \$logger;
        \$this->projectDir = \$projectDir;
        \$this->debug = \$debug;
    }

    private function setCurrentRequest(Request \$request = null)
    {
        if (null !== \$request) {
            try {
                \$this->context->fromRequest(\$request);
            } catch (\\UnexpectedValueException \$e) {
                throw new BadRequestHttpException(\$e->getMessage(), \$e, \$e->getCode());
            }
        }
    }

    /**
     * After a sub-request is done, we need to reset the routing context to the parent request so that the URL generator
     * operates on the correct context again.
     */
    public function onKernelFinishRequest(FinishRequestEvent \$event)
    {
        \$this->setCurrentRequest(\$this->requestStack->getParentRequest());
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        \$request = \$event->getRequest();

        \$this->setCurrentRequest(\$request);

        if (\$request->attributes->has('_controller')) {
            // routing is already done
            return;
        }

        // add attributes based on the request (routing)
        try {
            // matching a request is more powerful than matching a URL path + context, so try that first
            if (\$this->matcher instanceof RequestMatcherInterface) {
                \$parameters = \$this->matcher->matchRequest(\$request);
            } else {
                \$parameters = \$this->matcher->match(\$request->getPathInfo());
            }

            if (null !== \$this->logger) {
                \$this->logger->info('Matched route \"{route}\".', [
                    'route' => isset(\$parameters['_route']) ? \$parameters['_route'] : 'n/a',
                    'route_parameters' => \$parameters,
                    'request_uri' => \$request->getUri(),
                    'method' => \$request->getMethod(),
                ]);
            }

            \$request->attributes->add(\$parameters);
            unset(\$parameters['_route'], \$parameters['_controller']);
            \$request->attributes->set('_route_params', \$parameters);
        } catch (ResourceNotFoundException \$e) {
            \$message = sprintf('No route found for \"%s %s\"', \$request->getMethod(), \$request->getPathInfo());

            if (\$referer = \$request->headers->get('referer')) {
                \$message .= sprintf(' (from \"%s\")', \$referer);
            }

            throw new NotFoundHttpException(\$message, \$e);
        } catch (MethodNotAllowedException \$e) {
            \$message = sprintf('No route found for \"%s %s\": Method Not Allowed (Allow: %s)', \$request->getMethod(), \$request->getPathInfo(), implode(', ', \$e->getAllowedMethods()));

            throw new MethodNotAllowedHttpException(\$e->getAllowedMethods(), \$message, \$e);
        }
    }

    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        if (!\$this->debug || !(\$e = \$event->getException()) instanceof NotFoundHttpException) {
            return;
        }

        if (\$e->getPrevious() instanceof NoConfigurationException) {
            \$event->setResponse(\$this->createWelcomeResponse());
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [['onKernelRequest', 32]],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
            KernelEvents::EXCEPTION => ['onKernelException', -64],
        ];
    }

    private function createWelcomeResponse()
    {
        \$version = Kernel::VERSION;
        \$baseDir = realpath(\$this->projectDir).\\DIRECTORY_SEPARATOR;
        \$docVersion = substr(Kernel::VERSION, 0, 3);

        ob_start();
        include __DIR__.'/../Resources/welcome.html.php';

        return new Response(ob_get_clean(), Response::HTTP_NOT_FOUND);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/EventListener/RouterListener.php";
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
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException;
use Symfony\\Component\\Routing\\Exception\\NoConfigurationException;
use Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException;
use Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface;
use Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\RequestContextAwareInterface;

/**
 * Initializes the context from the request and sets request attributes based on a matching route.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @final since Symfony 4.3
 */
class RouterListener implements EventSubscriberInterface
{
    private \$matcher;
    private \$context;
    private \$logger;
    private \$requestStack;
    private \$projectDir;
    private \$debug;

    /**
     * @param UrlMatcherInterface|RequestMatcherInterface \$matcher      The Url or Request matcher
     * @param RequestStack                                \$requestStack A RequestStack instance
     * @param RequestContext|null                         \$context      The RequestContext (can be null when \$matcher implements RequestContextAwareInterface)
     * @param LoggerInterface|null                        \$logger       The logger
     * @param string                                      \$projectDir
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(\$matcher, RequestStack \$requestStack, RequestContext \$context = null, LoggerInterface \$logger = null, string \$projectDir = null, bool \$debug = true)
    {
        if (!\$matcher instanceof UrlMatcherInterface && !\$matcher instanceof RequestMatcherInterface) {
            throw new \\InvalidArgumentException('Matcher must either implement UrlMatcherInterface or RequestMatcherInterface.');
        }

        if (null === \$context && !\$matcher instanceof RequestContextAwareInterface) {
            throw new \\InvalidArgumentException('You must either pass a RequestContext or the matcher must implement RequestContextAwareInterface.');
        }

        \$this->matcher = \$matcher;
        \$this->context = \$context ?: \$matcher->getContext();
        \$this->requestStack = \$requestStack;
        \$this->logger = \$logger;
        \$this->projectDir = \$projectDir;
        \$this->debug = \$debug;
    }

    private function setCurrentRequest(Request \$request = null)
    {
        if (null !== \$request) {
            try {
                \$this->context->fromRequest(\$request);
            } catch (\\UnexpectedValueException \$e) {
                throw new BadRequestHttpException(\$e->getMessage(), \$e, \$e->getCode());
            }
        }
    }

    /**
     * After a sub-request is done, we need to reset the routing context to the parent request so that the URL generator
     * operates on the correct context again.
     */
    public function onKernelFinishRequest(FinishRequestEvent \$event)
    {
        \$this->setCurrentRequest(\$this->requestStack->getParentRequest());
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        \$request = \$event->getRequest();

        \$this->setCurrentRequest(\$request);

        if (\$request->attributes->has('_controller')) {
            // routing is already done
            return;
        }

        // add attributes based on the request (routing)
        try {
            // matching a request is more powerful than matching a URL path + context, so try that first
            if (\$this->matcher instanceof RequestMatcherInterface) {
                \$parameters = \$this->matcher->matchRequest(\$request);
            } else {
                \$parameters = \$this->matcher->match(\$request->getPathInfo());
            }

            if (null !== \$this->logger) {
                \$this->logger->info('Matched route \"{route}\".', [
                    'route' => isset(\$parameters['_route']) ? \$parameters['_route'] : 'n/a',
                    'route_parameters' => \$parameters,
                    'request_uri' => \$request->getUri(),
                    'method' => \$request->getMethod(),
                ]);
            }

            \$request->attributes->add(\$parameters);
            unset(\$parameters['_route'], \$parameters['_controller']);
            \$request->attributes->set('_route_params', \$parameters);
        } catch (ResourceNotFoundException \$e) {
            \$message = sprintf('No route found for \"%s %s\"', \$request->getMethod(), \$request->getPathInfo());

            if (\$referer = \$request->headers->get('referer')) {
                \$message .= sprintf(' (from \"%s\")', \$referer);
            }

            throw new NotFoundHttpException(\$message, \$e);
        } catch (MethodNotAllowedException \$e) {
            \$message = sprintf('No route found for \"%s %s\": Method Not Allowed (Allow: %s)', \$request->getMethod(), \$request->getPathInfo(), implode(', ', \$e->getAllowedMethods()));

            throw new MethodNotAllowedHttpException(\$e->getAllowedMethods(), \$message, \$e);
        }
    }

    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        if (!\$this->debug || !(\$e = \$event->getException()) instanceof NotFoundHttpException) {
            return;
        }

        if (\$e->getPrevious() instanceof NoConfigurationException) {
            \$event->setResponse(\$this->createWelcomeResponse());
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [['onKernelRequest', 32]],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
            KernelEvents::EXCEPTION => ['onKernelException', -64],
        ];
    }

    private function createWelcomeResponse()
    {
        \$version = Kernel::VERSION;
        \$baseDir = realpath(\$this->projectDir).\\DIRECTORY_SEPARATOR;
        \$docVersion = substr(Kernel::VERSION, 0, 3);

        ob_start();
        include __DIR__.'/../Resources/welcome.html.php';

        return new Response(ob_get_clean(), Response::HTTP_NOT_FOUND);
    }
}
", "vendor/symfony/http-kernel/EventListener/RouterListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/EventListener/RouterListener.php");
    }
}
