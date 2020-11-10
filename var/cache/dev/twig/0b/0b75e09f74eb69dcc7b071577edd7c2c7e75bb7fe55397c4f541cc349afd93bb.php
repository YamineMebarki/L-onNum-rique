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

/* vendor/symfony/security-http/Firewall/ExceptionListener.php */
class __TwigTemplate_da85f2bd2fbac6032784dde117455c793c58b937abf8ee1579cc4204b55fb649 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/ExceptionListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/ExceptionListener.php"));

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

namespace Symfony\\Component\\Security\\Http\\Firewall;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Exception\\AccountStatusException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\InsufficientAuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\LogoutException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Http\\Authorization\\AccessDeniedHandlerInterface;
use Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\Util\\TargetPathTrait;

/**
 * ExceptionListener catches authentication exception and converts them to
 * Response instances.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3, EventDispatcherInterface type-hints will be updated to the interface from symfony/contracts in 5.0
 */
class ExceptionListener
{
    use TargetPathTrait;

    private \$tokenStorage;
    private \$providerKey;
    private \$accessDeniedHandler;
    private \$authenticationEntryPoint;
    private \$authenticationTrustResolver;
    private \$errorPage;
    private \$logger;
    private \$httpUtils;
    private \$stateless;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationTrustResolverInterface \$trustResolver, HttpUtils \$httpUtils, string \$providerKey, AuthenticationEntryPointInterface \$authenticationEntryPoint = null, string \$errorPage = null, AccessDeniedHandlerInterface \$accessDeniedHandler = null, LoggerInterface \$logger = null, bool \$stateless = false)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->accessDeniedHandler = \$accessDeniedHandler;
        \$this->httpUtils = \$httpUtils;
        \$this->providerKey = \$providerKey;
        \$this->authenticationEntryPoint = \$authenticationEntryPoint;
        \$this->authenticationTrustResolver = \$trustResolver;
        \$this->errorPage = \$errorPage;
        \$this->logger = \$logger;
        \$this->stateless = \$stateless;
    }

    /**
     * Registers a onKernelException listener to take care of security exceptions.
     */
    public function register(EventDispatcherInterface \$dispatcher)
    {
        \$dispatcher->addListener(KernelEvents::EXCEPTION, [\$this, 'onKernelException'], 1);
    }

    /**
     * Unregisters the dispatcher.
     */
    public function unregister(EventDispatcherInterface \$dispatcher)
    {
        \$dispatcher->removeListener(KernelEvents::EXCEPTION, [\$this, 'onKernelException']);
    }

    /**
     * Handles security related exceptions.
     */
    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        \$exception = \$event->getException();
        do {
            if (\$exception instanceof AuthenticationException) {
                \$this->handleAuthenticationException(\$event, \$exception);

                return;
            }

            if (\$exception instanceof AccessDeniedException) {
                \$this->handleAccessDeniedException(\$event, \$exception);

                return;
            }

            if (\$exception instanceof LogoutException) {
                \$this->handleLogoutException(\$exception);

                return;
            }
        } while (null !== \$exception = \$exception->getPrevious());
    }

    private function handleAuthenticationException(GetResponseForExceptionEvent \$event, AuthenticationException \$exception): void
    {
        if (null !== \$this->logger) {
            \$this->logger->info('An AuthenticationException was thrown; redirecting to authentication entry point.', ['exception' => \$exception]);
        }

        try {
            \$event->setResponse(\$this->startAuthentication(\$event->getRequest(), \$exception));
            \$event->allowCustomResponseCode();
        } catch (\\Exception \$e) {
            \$event->setException(\$e);
        }
    }

    private function handleAccessDeniedException(GetResponseForExceptionEvent \$event, AccessDeniedException \$exception)
    {
        \$event->setException(new AccessDeniedHttpException(\$exception->getMessage(), \$exception));

        \$token = \$this->tokenStorage->getToken();
        if (!\$this->authenticationTrustResolver->isFullFledged(\$token)) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Access denied, the user is not fully authenticated; redirecting to authentication entry point.', ['exception' => \$exception]);
            }

            try {
                \$insufficientAuthenticationException = new InsufficientAuthenticationException('Full authentication is required to access this resource.', 0, \$exception);
                \$insufficientAuthenticationException->setToken(\$token);

                \$event->setResponse(\$this->startAuthentication(\$event->getRequest(), \$insufficientAuthenticationException));
            } catch (\\Exception \$e) {
                \$event->setException(\$e);
            }

            return;
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Access denied, the user is neither anonymous, nor remember-me.', ['exception' => \$exception]);
        }

        try {
            if (null !== \$this->accessDeniedHandler) {
                \$response = \$this->accessDeniedHandler->handle(\$event->getRequest(), \$exception);

                if (\$response instanceof Response) {
                    \$event->setResponse(\$response);
                }
            } elseif (null !== \$this->errorPage) {
                \$subRequest = \$this->httpUtils->createRequest(\$event->getRequest(), \$this->errorPage);
                \$subRequest->attributes->set(Security::ACCESS_DENIED_ERROR, \$exception);

                \$event->setResponse(\$event->getKernel()->handle(\$subRequest, HttpKernelInterface::SUB_REQUEST, true));
                \$event->allowCustomResponseCode();
            }
        } catch (\\Exception \$e) {
            if (null !== \$this->logger) {
                \$this->logger->error('An exception was thrown when handling an AccessDeniedException.', ['exception' => \$e]);
            }

            \$event->setException(new \\RuntimeException('Exception thrown when handling an exception.', 0, \$e));
        }
    }

    private function handleLogoutException(LogoutException \$exception): void
    {
        if (null !== \$this->logger) {
            \$this->logger->info('A LogoutException was thrown.', ['exception' => \$exception]);
        }
    }

    private function startAuthentication(Request \$request, AuthenticationException \$authException): Response
    {
        if (null === \$this->authenticationEntryPoint) {
            throw new HttpException(Response::HTTP_UNAUTHORIZED, \$authException->getMessage(), \$authException, [], \$authException->getCode());
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Calling Authentication entry point.');
        }

        if (!\$this->stateless) {
            \$this->setTargetPath(\$request);
        }

        if (\$authException instanceof AccountStatusException) {
            // remove the security token to prevent infinite redirect loops
            \$this->tokenStorage->setToken(null);

            if (null !== \$this->logger) {
                \$this->logger->info('The security token was removed due to an AccountStatusException.', ['exception' => \$authException]);
            }
        }

        \$response = \$this->authenticationEntryPoint->start(\$request, \$authException);

        if (!\$response instanceof Response) {
            \$given = \\is_object(\$response) ? \\get_class(\$response) : \\gettype(\$response);

            throw new \\LogicException(sprintf('The %s::start() method must return a Response object (%s returned)', \\get_class(\$this->authenticationEntryPoint), \$given));
        }

        return \$response;
    }

    protected function setTargetPath(Request \$request)
    {
        // session isn't required when using HTTP basic authentication mechanism for example
        if (\$request->hasSession() && \$request->isMethodSafe(false) && !\$request->isXmlHttpRequest()) {
            \$this->saveTargetPath(\$request->getSession(), \$this->providerKey, \$request->getUri());
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall/ExceptionListener.php";
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

namespace Symfony\\Component\\Security\\Http\\Firewall;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Exception\\AccountStatusException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\InsufficientAuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\LogoutException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Http\\Authorization\\AccessDeniedHandlerInterface;
use Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\Util\\TargetPathTrait;

/**
 * ExceptionListener catches authentication exception and converts them to
 * Response instances.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3, EventDispatcherInterface type-hints will be updated to the interface from symfony/contracts in 5.0
 */
class ExceptionListener
{
    use TargetPathTrait;

    private \$tokenStorage;
    private \$providerKey;
    private \$accessDeniedHandler;
    private \$authenticationEntryPoint;
    private \$authenticationTrustResolver;
    private \$errorPage;
    private \$logger;
    private \$httpUtils;
    private \$stateless;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationTrustResolverInterface \$trustResolver, HttpUtils \$httpUtils, string \$providerKey, AuthenticationEntryPointInterface \$authenticationEntryPoint = null, string \$errorPage = null, AccessDeniedHandlerInterface \$accessDeniedHandler = null, LoggerInterface \$logger = null, bool \$stateless = false)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->accessDeniedHandler = \$accessDeniedHandler;
        \$this->httpUtils = \$httpUtils;
        \$this->providerKey = \$providerKey;
        \$this->authenticationEntryPoint = \$authenticationEntryPoint;
        \$this->authenticationTrustResolver = \$trustResolver;
        \$this->errorPage = \$errorPage;
        \$this->logger = \$logger;
        \$this->stateless = \$stateless;
    }

    /**
     * Registers a onKernelException listener to take care of security exceptions.
     */
    public function register(EventDispatcherInterface \$dispatcher)
    {
        \$dispatcher->addListener(KernelEvents::EXCEPTION, [\$this, 'onKernelException'], 1);
    }

    /**
     * Unregisters the dispatcher.
     */
    public function unregister(EventDispatcherInterface \$dispatcher)
    {
        \$dispatcher->removeListener(KernelEvents::EXCEPTION, [\$this, 'onKernelException']);
    }

    /**
     * Handles security related exceptions.
     */
    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        \$exception = \$event->getException();
        do {
            if (\$exception instanceof AuthenticationException) {
                \$this->handleAuthenticationException(\$event, \$exception);

                return;
            }

            if (\$exception instanceof AccessDeniedException) {
                \$this->handleAccessDeniedException(\$event, \$exception);

                return;
            }

            if (\$exception instanceof LogoutException) {
                \$this->handleLogoutException(\$exception);

                return;
            }
        } while (null !== \$exception = \$exception->getPrevious());
    }

    private function handleAuthenticationException(GetResponseForExceptionEvent \$event, AuthenticationException \$exception): void
    {
        if (null !== \$this->logger) {
            \$this->logger->info('An AuthenticationException was thrown; redirecting to authentication entry point.', ['exception' => \$exception]);
        }

        try {
            \$event->setResponse(\$this->startAuthentication(\$event->getRequest(), \$exception));
            \$event->allowCustomResponseCode();
        } catch (\\Exception \$e) {
            \$event->setException(\$e);
        }
    }

    private function handleAccessDeniedException(GetResponseForExceptionEvent \$event, AccessDeniedException \$exception)
    {
        \$event->setException(new AccessDeniedHttpException(\$exception->getMessage(), \$exception));

        \$token = \$this->tokenStorage->getToken();
        if (!\$this->authenticationTrustResolver->isFullFledged(\$token)) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Access denied, the user is not fully authenticated; redirecting to authentication entry point.', ['exception' => \$exception]);
            }

            try {
                \$insufficientAuthenticationException = new InsufficientAuthenticationException('Full authentication is required to access this resource.', 0, \$exception);
                \$insufficientAuthenticationException->setToken(\$token);

                \$event->setResponse(\$this->startAuthentication(\$event->getRequest(), \$insufficientAuthenticationException));
            } catch (\\Exception \$e) {
                \$event->setException(\$e);
            }

            return;
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Access denied, the user is neither anonymous, nor remember-me.', ['exception' => \$exception]);
        }

        try {
            if (null !== \$this->accessDeniedHandler) {
                \$response = \$this->accessDeniedHandler->handle(\$event->getRequest(), \$exception);

                if (\$response instanceof Response) {
                    \$event->setResponse(\$response);
                }
            } elseif (null !== \$this->errorPage) {
                \$subRequest = \$this->httpUtils->createRequest(\$event->getRequest(), \$this->errorPage);
                \$subRequest->attributes->set(Security::ACCESS_DENIED_ERROR, \$exception);

                \$event->setResponse(\$event->getKernel()->handle(\$subRequest, HttpKernelInterface::SUB_REQUEST, true));
                \$event->allowCustomResponseCode();
            }
        } catch (\\Exception \$e) {
            if (null !== \$this->logger) {
                \$this->logger->error('An exception was thrown when handling an AccessDeniedException.', ['exception' => \$e]);
            }

            \$event->setException(new \\RuntimeException('Exception thrown when handling an exception.', 0, \$e));
        }
    }

    private function handleLogoutException(LogoutException \$exception): void
    {
        if (null !== \$this->logger) {
            \$this->logger->info('A LogoutException was thrown.', ['exception' => \$exception]);
        }
    }

    private function startAuthentication(Request \$request, AuthenticationException \$authException): Response
    {
        if (null === \$this->authenticationEntryPoint) {
            throw new HttpException(Response::HTTP_UNAUTHORIZED, \$authException->getMessage(), \$authException, [], \$authException->getCode());
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Calling Authentication entry point.');
        }

        if (!\$this->stateless) {
            \$this->setTargetPath(\$request);
        }

        if (\$authException instanceof AccountStatusException) {
            // remove the security token to prevent infinite redirect loops
            \$this->tokenStorage->setToken(null);

            if (null !== \$this->logger) {
                \$this->logger->info('The security token was removed due to an AccountStatusException.', ['exception' => \$authException]);
            }
        }

        \$response = \$this->authenticationEntryPoint->start(\$request, \$authException);

        if (!\$response instanceof Response) {
            \$given = \\is_object(\$response) ? \\get_class(\$response) : \\gettype(\$response);

            throw new \\LogicException(sprintf('The %s::start() method must return a Response object (%s returned)', \\get_class(\$this->authenticationEntryPoint), \$given));
        }

        return \$response;
    }

    protected function setTargetPath(Request \$request)
    {
        // session isn't required when using HTTP basic authentication mechanism for example
        if (\$request->hasSession() && \$request->isMethodSafe(false) && !\$request->isXmlHttpRequest()) {
            \$this->saveTargetPath(\$request->getSession(), \$this->providerKey, \$request->getUri());
        }
    }
}
", "vendor/symfony/security-http/Firewall/ExceptionListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/ExceptionListener.php");
    }
}
