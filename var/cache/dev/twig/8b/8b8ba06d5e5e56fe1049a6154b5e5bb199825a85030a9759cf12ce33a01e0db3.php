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

/* vendor/symfony/http-kernel/HttpKernel.php */
class __TwigTemplate_ac23ff1f8b276366bc1642cafc04598f6124dcff8627fe7a4eddffee244fe74a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/HttpKernel.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/HttpKernel.php"));

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

namespace Symfony\\Component\\HttpKernel;

use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface;
use Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent;
use Symfony\\Component\\HttpKernel\\Event\\ControllerEvent;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\TerminateEvent;
use Symfony\\Component\\HttpKernel\\Event\\ViewEvent;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\ControllerDoesNotReturnResponseException;
use Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * HttpKernel notifies events to convert a Request object to a Response one.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpKernel implements HttpKernelInterface, TerminableInterface
{
    protected \$dispatcher;
    protected \$resolver;
    protected \$requestStack;
    private \$argumentResolver;

    public function __construct(EventDispatcherInterface \$dispatcher, ControllerResolverInterface \$resolver, RequestStack \$requestStack = null, ArgumentResolverInterface \$argumentResolver = null)
    {
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
        \$this->resolver = \$resolver;
        \$this->requestStack = \$requestStack ?: new RequestStack();
        \$this->argumentResolver = \$argumentResolver;

        if (null === \$this->argumentResolver) {
            \$this->argumentResolver = new ArgumentResolver();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Request \$request, \$type = HttpKernelInterface::MASTER_REQUEST, \$catch = true)
    {
        \$request->headers->set('X-Php-Ob-Level', ob_get_level());

        try {
            return \$this->handleRaw(\$request, \$type);
        } catch (\\Exception \$e) {
            if (\$e instanceof RequestExceptionInterface) {
                \$e = new BadRequestHttpException(\$e->getMessage(), \$e);
            }
            if (false === \$catch) {
                \$this->finishRequest(\$request, \$type);

                throw \$e;
            }

            return \$this->handleException(\$e, \$request, \$type);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function terminate(Request \$request, Response \$response)
    {
        \$this->dispatcher->dispatch(new TerminateEvent(\$this, \$request, \$response), KernelEvents::TERMINATE);
    }

    /**
     * @internal
     */
    public function terminateWithException(\\Exception \$exception, Request \$request = null)
    {
        if (!\$request = \$request ?: \$this->requestStack->getMasterRequest()) {
            throw \$exception;
        }

        \$response = \$this->handleException(\$exception, \$request, self::MASTER_REQUEST);

        \$response->sendHeaders();
        \$response->sendContent();

        \$this->terminate(\$request, \$response);
    }

    /**
     * Handles a request to convert it to a response.
     *
     * Exceptions are not caught.
     *
     * @param Request \$request A Request instance
     * @param int     \$type    The type of the request (one of HttpKernelInterface::MASTER_REQUEST or HttpKernelInterface::SUB_REQUEST)
     *
     * @return Response A Response instance
     *
     * @throws \\LogicException       If one of the listener does not behave as expected
     * @throws NotFoundHttpException When controller cannot be found
     */
    private function handleRaw(Request \$request, int \$type = self::MASTER_REQUEST)
    {
        \$this->requestStack->push(\$request);

        // request
        \$event = new RequestEvent(\$this, \$request, \$type);
        \$this->dispatcher->dispatch(\$event, KernelEvents::REQUEST);

        if (\$event->hasResponse()) {
            return \$this->filterResponse(\$event->getResponse(), \$request, \$type);
        }

        // load controller
        if (false === \$controller = \$this->resolver->getController(\$request)) {
            throw new NotFoundHttpException(sprintf('Unable to find the controller for path \"%s\". The route is wrongly configured.', \$request->getPathInfo()));
        }

        \$event = new ControllerEvent(\$this, \$controller, \$request, \$type);
        \$this->dispatcher->dispatch(\$event, KernelEvents::CONTROLLER);
        \$controller = \$event->getController();

        // controller arguments
        \$arguments = \$this->argumentResolver->getArguments(\$request, \$controller);

        \$event = new ControllerArgumentsEvent(\$this, \$controller, \$arguments, \$request, \$type);
        \$this->dispatcher->dispatch(\$event, KernelEvents::CONTROLLER_ARGUMENTS);
        \$controller = \$event->getController();
        \$arguments = \$event->getArguments();

        // call controller
        \$response = \$controller(...\$arguments);

        // view
        if (!\$response instanceof Response) {
            \$event = new ViewEvent(\$this, \$request, \$type, \$response);
            \$this->dispatcher->dispatch(\$event, KernelEvents::VIEW);

            if (\$event->hasResponse()) {
                \$response = \$event->getResponse();
            } else {
                \$msg = sprintf('The controller must return a \"Symfony\\Component\\HttpFoundation\\Response\" object but it returned %s.', \$this->varToString(\$response));

                // the user may have forgotten to return something
                if (null === \$response) {
                    \$msg .= ' Did you forget to add a return statement somewhere in your controller?';
                }

                throw new ControllerDoesNotReturnResponseException(\$msg, \$controller, __FILE__, __LINE__ - 17);
            }
        }

        return \$this->filterResponse(\$response, \$request, \$type);
    }

    /**
     * Filters a response object.
     *
     * @param Response \$response A Response instance
     * @param Request  \$request  An error message in case the response is not a Response object
     * @param int      \$type     The type of the request (one of HttpKernelInterface::MASTER_REQUEST or HttpKernelInterface::SUB_REQUEST)
     *
     * @return Response The filtered Response instance
     *
     * @throws \\RuntimeException if the passed object is not a Response instance
     */
    private function filterResponse(Response \$response, Request \$request, int \$type)
    {
        \$event = new ResponseEvent(\$this, \$request, \$type, \$response);

        \$this->dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->finishRequest(\$request, \$type);

        return \$event->getResponse();
    }

    /**
     * Publishes the finish request event, then pop the request from the stack.
     *
     * Note that the order of the operations is important here, otherwise
     * operations such as {@link RequestStack::getParentRequest()} can lead to
     * weird results.
     */
    private function finishRequest(Request \$request, int \$type)
    {
        \$this->dispatcher->dispatch(new FinishRequestEvent(\$this, \$request, \$type), KernelEvents::FINISH_REQUEST);
        \$this->requestStack->pop();
    }

    /**
     * Handles an exception by trying to convert it to a Response.
     *
     * @param \\Exception \$e       An \\Exception instance
     * @param Request    \$request A Request instance
     * @param int        \$type    The type of the request (one of HttpKernelInterface::MASTER_REQUEST or HttpKernelInterface::SUB_REQUEST)
     *
     * @throws \\Exception
     */
    private function handleException(\\Exception \$e, Request \$request, int \$type): Response
    {
        \$event = new ExceptionEvent(\$this, \$request, \$type, \$e);
        \$this->dispatcher->dispatch(\$event, KernelEvents::EXCEPTION);

        // a listener might have replaced the exception
        \$e = \$event->getException();

        if (!\$event->hasResponse()) {
            \$this->finishRequest(\$request, \$type);

            throw \$e;
        }

        \$response = \$event->getResponse();

        // the developer asked for a specific status code
        if (!\$event->isAllowingCustomResponseCode() && !\$response->isClientError() && !\$response->isServerError() && !\$response->isRedirect()) {
            // ensure that we actually have an error response
            if (\$e instanceof HttpExceptionInterface) {
                // keep the HTTP status code and headers
                \$response->setStatusCode(\$e->getStatusCode());
                \$response->headers->add(\$e->getHeaders());
            } else {
                \$response->setStatusCode(500);
            }
        }

        try {
            return \$this->filterResponse(\$response, \$request, \$type);
        } catch (\\Exception \$e) {
            return \$response;
        }
    }

    /**
     * Returns a human-readable string for the specified variable.
     */
    private function varToString(\$var): string
    {
        if (\\is_object(\$var)) {
            return sprintf('an object of type %s', \\get_class(\$var));
        }

        if (\\is_array(\$var)) {
            \$a = [];
            foreach (\$var as \$k => \$v) {
                \$a[] = sprintf('%s => ...', \$k);
            }

            return sprintf('an array ([%s])', mb_substr(implode(', ', \$a), 0, 255));
        }

        if (\\is_resource(\$var)) {
            return sprintf('a resource (%s)', get_resource_type(\$var));
        }

        if (null === \$var) {
            return 'null';
        }

        if (false === \$var) {
            return 'a boolean value (false)';
        }

        if (true === \$var) {
            return 'a boolean value (true)';
        }

        if (\\is_string(\$var)) {
            return sprintf('a string (\"%s%s\")', mb_substr(\$var, 0, 255), mb_strlen(\$var) > 255 ? '...' : '');
        }

        if (is_numeric(\$var)) {
            return sprintf('a number (%s)', (string) \$var);
        }

        return (string) \$var;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/HttpKernel.php";
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

namespace Symfony\\Component\\HttpKernel;

use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface;
use Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent;
use Symfony\\Component\\HttpKernel\\Event\\ControllerEvent;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\TerminateEvent;
use Symfony\\Component\\HttpKernel\\Event\\ViewEvent;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\ControllerDoesNotReturnResponseException;
use Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * HttpKernel notifies events to convert a Request object to a Response one.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpKernel implements HttpKernelInterface, TerminableInterface
{
    protected \$dispatcher;
    protected \$resolver;
    protected \$requestStack;
    private \$argumentResolver;

    public function __construct(EventDispatcherInterface \$dispatcher, ControllerResolverInterface \$resolver, RequestStack \$requestStack = null, ArgumentResolverInterface \$argumentResolver = null)
    {
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
        \$this->resolver = \$resolver;
        \$this->requestStack = \$requestStack ?: new RequestStack();
        \$this->argumentResolver = \$argumentResolver;

        if (null === \$this->argumentResolver) {
            \$this->argumentResolver = new ArgumentResolver();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Request \$request, \$type = HttpKernelInterface::MASTER_REQUEST, \$catch = true)
    {
        \$request->headers->set('X-Php-Ob-Level', ob_get_level());

        try {
            return \$this->handleRaw(\$request, \$type);
        } catch (\\Exception \$e) {
            if (\$e instanceof RequestExceptionInterface) {
                \$e = new BadRequestHttpException(\$e->getMessage(), \$e);
            }
            if (false === \$catch) {
                \$this->finishRequest(\$request, \$type);

                throw \$e;
            }

            return \$this->handleException(\$e, \$request, \$type);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function terminate(Request \$request, Response \$response)
    {
        \$this->dispatcher->dispatch(new TerminateEvent(\$this, \$request, \$response), KernelEvents::TERMINATE);
    }

    /**
     * @internal
     */
    public function terminateWithException(\\Exception \$exception, Request \$request = null)
    {
        if (!\$request = \$request ?: \$this->requestStack->getMasterRequest()) {
            throw \$exception;
        }

        \$response = \$this->handleException(\$exception, \$request, self::MASTER_REQUEST);

        \$response->sendHeaders();
        \$response->sendContent();

        \$this->terminate(\$request, \$response);
    }

    /**
     * Handles a request to convert it to a response.
     *
     * Exceptions are not caught.
     *
     * @param Request \$request A Request instance
     * @param int     \$type    The type of the request (one of HttpKernelInterface::MASTER_REQUEST or HttpKernelInterface::SUB_REQUEST)
     *
     * @return Response A Response instance
     *
     * @throws \\LogicException       If one of the listener does not behave as expected
     * @throws NotFoundHttpException When controller cannot be found
     */
    private function handleRaw(Request \$request, int \$type = self::MASTER_REQUEST)
    {
        \$this->requestStack->push(\$request);

        // request
        \$event = new RequestEvent(\$this, \$request, \$type);
        \$this->dispatcher->dispatch(\$event, KernelEvents::REQUEST);

        if (\$event->hasResponse()) {
            return \$this->filterResponse(\$event->getResponse(), \$request, \$type);
        }

        // load controller
        if (false === \$controller = \$this->resolver->getController(\$request)) {
            throw new NotFoundHttpException(sprintf('Unable to find the controller for path \"%s\". The route is wrongly configured.', \$request->getPathInfo()));
        }

        \$event = new ControllerEvent(\$this, \$controller, \$request, \$type);
        \$this->dispatcher->dispatch(\$event, KernelEvents::CONTROLLER);
        \$controller = \$event->getController();

        // controller arguments
        \$arguments = \$this->argumentResolver->getArguments(\$request, \$controller);

        \$event = new ControllerArgumentsEvent(\$this, \$controller, \$arguments, \$request, \$type);
        \$this->dispatcher->dispatch(\$event, KernelEvents::CONTROLLER_ARGUMENTS);
        \$controller = \$event->getController();
        \$arguments = \$event->getArguments();

        // call controller
        \$response = \$controller(...\$arguments);

        // view
        if (!\$response instanceof Response) {
            \$event = new ViewEvent(\$this, \$request, \$type, \$response);
            \$this->dispatcher->dispatch(\$event, KernelEvents::VIEW);

            if (\$event->hasResponse()) {
                \$response = \$event->getResponse();
            } else {
                \$msg = sprintf('The controller must return a \"Symfony\\Component\\HttpFoundation\\Response\" object but it returned %s.', \$this->varToString(\$response));

                // the user may have forgotten to return something
                if (null === \$response) {
                    \$msg .= ' Did you forget to add a return statement somewhere in your controller?';
                }

                throw new ControllerDoesNotReturnResponseException(\$msg, \$controller, __FILE__, __LINE__ - 17);
            }
        }

        return \$this->filterResponse(\$response, \$request, \$type);
    }

    /**
     * Filters a response object.
     *
     * @param Response \$response A Response instance
     * @param Request  \$request  An error message in case the response is not a Response object
     * @param int      \$type     The type of the request (one of HttpKernelInterface::MASTER_REQUEST or HttpKernelInterface::SUB_REQUEST)
     *
     * @return Response The filtered Response instance
     *
     * @throws \\RuntimeException if the passed object is not a Response instance
     */
    private function filterResponse(Response \$response, Request \$request, int \$type)
    {
        \$event = new ResponseEvent(\$this, \$request, \$type, \$response);

        \$this->dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->finishRequest(\$request, \$type);

        return \$event->getResponse();
    }

    /**
     * Publishes the finish request event, then pop the request from the stack.
     *
     * Note that the order of the operations is important here, otherwise
     * operations such as {@link RequestStack::getParentRequest()} can lead to
     * weird results.
     */
    private function finishRequest(Request \$request, int \$type)
    {
        \$this->dispatcher->dispatch(new FinishRequestEvent(\$this, \$request, \$type), KernelEvents::FINISH_REQUEST);
        \$this->requestStack->pop();
    }

    /**
     * Handles an exception by trying to convert it to a Response.
     *
     * @param \\Exception \$e       An \\Exception instance
     * @param Request    \$request A Request instance
     * @param int        \$type    The type of the request (one of HttpKernelInterface::MASTER_REQUEST or HttpKernelInterface::SUB_REQUEST)
     *
     * @throws \\Exception
     */
    private function handleException(\\Exception \$e, Request \$request, int \$type): Response
    {
        \$event = new ExceptionEvent(\$this, \$request, \$type, \$e);
        \$this->dispatcher->dispatch(\$event, KernelEvents::EXCEPTION);

        // a listener might have replaced the exception
        \$e = \$event->getException();

        if (!\$event->hasResponse()) {
            \$this->finishRequest(\$request, \$type);

            throw \$e;
        }

        \$response = \$event->getResponse();

        // the developer asked for a specific status code
        if (!\$event->isAllowingCustomResponseCode() && !\$response->isClientError() && !\$response->isServerError() && !\$response->isRedirect()) {
            // ensure that we actually have an error response
            if (\$e instanceof HttpExceptionInterface) {
                // keep the HTTP status code and headers
                \$response->setStatusCode(\$e->getStatusCode());
                \$response->headers->add(\$e->getHeaders());
            } else {
                \$response->setStatusCode(500);
            }
        }

        try {
            return \$this->filterResponse(\$response, \$request, \$type);
        } catch (\\Exception \$e) {
            return \$response;
        }
    }

    /**
     * Returns a human-readable string for the specified variable.
     */
    private function varToString(\$var): string
    {
        if (\\is_object(\$var)) {
            return sprintf('an object of type %s', \\get_class(\$var));
        }

        if (\\is_array(\$var)) {
            \$a = [];
            foreach (\$var as \$k => \$v) {
                \$a[] = sprintf('%s => ...', \$k);
            }

            return sprintf('an array ([%s])', mb_substr(implode(', ', \$a), 0, 255));
        }

        if (\\is_resource(\$var)) {
            return sprintf('a resource (%s)', get_resource_type(\$var));
        }

        if (null === \$var) {
            return 'null';
        }

        if (false === \$var) {
            return 'a boolean value (false)';
        }

        if (true === \$var) {
            return 'a boolean value (true)';
        }

        if (\\is_string(\$var)) {
            return sprintf('a string (\"%s%s\")', mb_substr(\$var, 0, 255), mb_strlen(\$var) > 255 ? '...' : '');
        }

        if (is_numeric(\$var)) {
            return sprintf('a number (%s)', (string) \$var);
        }

        return (string) \$var;
    }
}
", "vendor/symfony/http-kernel/HttpKernel.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/HttpKernel.php");
    }
}