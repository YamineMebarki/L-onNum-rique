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

/* vendor/symfony/security-http/Firewall/UsernamePasswordJsonAuthenticationListener.php */
class __TwigTemplate_a26eb1aa049fe82c5360ee032d2c5e70bf1671ec8e9297bf401d625dd353c8f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/UsernamePasswordJsonAuthenticationListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/UsernamePasswordJsonAuthenticationListener.php"));

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
use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\PropertyAccess\\Exception\\AccessException;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * UsernamePasswordJsonAuthenticationListener is a stateless implementation of
 * an authentication via a JSON document composed of a username and a password.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final since Symfony 4.3
 */
class UsernamePasswordJsonAuthenticationListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$authenticationManager;
    private \$httpUtils;
    private \$providerKey;
    private \$successHandler;
    private \$failureHandler;
    private \$options;
    private \$logger;
    private \$eventDispatcher;
    private \$propertyAccessor;
    private \$sessionStrategy;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, HttpUtils \$httpUtils, string \$providerKey, AuthenticationSuccessHandlerInterface \$successHandler = null, AuthenticationFailureHandlerInterface \$failureHandler = null, array \$options = [], LoggerInterface \$logger = null, EventDispatcherInterface \$eventDispatcher = null, PropertyAccessorInterface \$propertyAccessor = null)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->authenticationManager = \$authenticationManager;
        \$this->httpUtils = \$httpUtils;
        \$this->providerKey = \$providerKey;
        \$this->successHandler = \$successHandler;
        \$this->failureHandler = \$failureHandler;
        \$this->logger = \$logger;
        \$this->eventDispatcher = LegacyEventDispatcherProxy::decorate(\$eventDispatcher);
        \$this->options = array_merge(['username_path' => 'username', 'password_path' => 'password'], \$options);
        \$this->propertyAccessor = \$propertyAccessor ?: PropertyAccess::createPropertyAccessor();
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke(RequestEvent \$event)
    {
        \$request = \$event->getRequest();
        if (false === strpos(\$request->getRequestFormat(), 'json')
            && false === strpos(\$request->getContentType(), 'json')
        ) {
            return;
        }

        if (isset(\$this->options['check_path']) && !\$this->httpUtils->checkRequestPath(\$request, \$this->options['check_path'])) {
            return;
        }

        \$data = json_decode(\$request->getContent());

        try {
            if (!\$data instanceof \\stdClass) {
                throw new BadRequestHttpException('Invalid JSON.');
            }

            try {
                \$username = \$this->propertyAccessor->getValue(\$data, \$this->options['username_path']);
            } catch (AccessException \$e) {
                throw new BadRequestHttpException(sprintf('The key \"%s\" must be provided.', \$this->options['username_path']), \$e);
            }

            try {
                \$password = \$this->propertyAccessor->getValue(\$data, \$this->options['password_path']);
            } catch (AccessException \$e) {
                throw new BadRequestHttpException(sprintf('The key \"%s\" must be provided.', \$this->options['password_path']), \$e);
            }

            if (!\\is_string(\$username)) {
                throw new BadRequestHttpException(sprintf('The key \"%s\" must be a string.', \$this->options['username_path']));
            }

            if (\\strlen(\$username) > Security::MAX_USERNAME_LENGTH) {
                throw new BadCredentialsException('Invalid username.');
            }

            if (!\\is_string(\$password)) {
                throw new BadRequestHttpException(sprintf('The key \"%s\" must be a string.', \$this->options['password_path']));
            }

            \$token = new UsernamePasswordToken(\$username, \$password, \$this->providerKey);

            \$authenticatedToken = \$this->authenticationManager->authenticate(\$token);
            \$response = \$this->onSuccess(\$request, \$authenticatedToken);
        } catch (AuthenticationException \$e) {
            \$response = \$this->onFailure(\$request, \$e);
        } catch (BadRequestHttpException \$e) {
            \$request->setRequestFormat('json');

            throw \$e;
        }

        if (null === \$response) {
            return;
        }

        \$event->setResponse(\$response);
    }

    /**
     * @return Response|null
     */
    private function onSuccess(Request \$request, TokenInterface \$token)
    {
        if (null !== \$this->logger) {
            \$this->logger->info('User has been authenticated successfully.', ['username' => \$token->getUsername()]);
        }

        \$this->migrateSession(\$request, \$token);

        \$this->tokenStorage->setToken(\$token);

        if (null !== \$this->eventDispatcher) {
            \$loginEvent = new InteractiveLoginEvent(\$request, \$token);
            \$this->eventDispatcher->dispatch(\$loginEvent, SecurityEvents::INTERACTIVE_LOGIN);
        }

        if (!\$this->successHandler) {
            return null; // let the original request succeeds
        }

        \$response = \$this->successHandler->onAuthenticationSuccess(\$request, \$token);

        if (!\$response instanceof Response) {
            throw new \\RuntimeException('Authentication Success Handler did not return a Response.');
        }

        return \$response;
    }

    private function onFailure(Request \$request, AuthenticationException \$failed)
    {
        if (null !== \$this->logger) {
            \$this->logger->info('Authentication request failed.', ['exception' => \$failed]);
        }

        \$token = \$this->tokenStorage->getToken();
        if (\$token instanceof UsernamePasswordToken && \$this->providerKey === \$token->getProviderKey()) {
            \$this->tokenStorage->setToken(null);
        }

        if (!\$this->failureHandler) {
            return new JsonResponse(['error' => \$failed->getMessageKey()], 401);
        }

        \$response = \$this->failureHandler->onAuthenticationFailure(\$request, \$failed);

        if (!\$response instanceof Response) {
            throw new \\RuntimeException('Authentication Failure Handler did not return a Response.');
        }

        return \$response;
    }

    /**
     * Call this method if your authentication token is stored to a session.
     *
     * @final
     */
    public function setSessionAuthenticationStrategy(SessionAuthenticationStrategyInterface \$sessionStrategy)
    {
        \$this->sessionStrategy = \$sessionStrategy;
    }

    private function migrateSession(Request \$request, TokenInterface \$token)
    {
        if (!\$this->sessionStrategy || !\$request->hasSession() || !\$request->hasPreviousSession()) {
            return;
        }

        \$this->sessionStrategy->onAuthentication(\$request, \$token);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall/UsernamePasswordJsonAuthenticationListener.php";
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
use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\PropertyAccess\\Exception\\AccessException;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * UsernamePasswordJsonAuthenticationListener is a stateless implementation of
 * an authentication via a JSON document composed of a username and a password.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final since Symfony 4.3
 */
class UsernamePasswordJsonAuthenticationListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$authenticationManager;
    private \$httpUtils;
    private \$providerKey;
    private \$successHandler;
    private \$failureHandler;
    private \$options;
    private \$logger;
    private \$eventDispatcher;
    private \$propertyAccessor;
    private \$sessionStrategy;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, HttpUtils \$httpUtils, string \$providerKey, AuthenticationSuccessHandlerInterface \$successHandler = null, AuthenticationFailureHandlerInterface \$failureHandler = null, array \$options = [], LoggerInterface \$logger = null, EventDispatcherInterface \$eventDispatcher = null, PropertyAccessorInterface \$propertyAccessor = null)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->authenticationManager = \$authenticationManager;
        \$this->httpUtils = \$httpUtils;
        \$this->providerKey = \$providerKey;
        \$this->successHandler = \$successHandler;
        \$this->failureHandler = \$failureHandler;
        \$this->logger = \$logger;
        \$this->eventDispatcher = LegacyEventDispatcherProxy::decorate(\$eventDispatcher);
        \$this->options = array_merge(['username_path' => 'username', 'password_path' => 'password'], \$options);
        \$this->propertyAccessor = \$propertyAccessor ?: PropertyAccess::createPropertyAccessor();
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke(RequestEvent \$event)
    {
        \$request = \$event->getRequest();
        if (false === strpos(\$request->getRequestFormat(), 'json')
            && false === strpos(\$request->getContentType(), 'json')
        ) {
            return;
        }

        if (isset(\$this->options['check_path']) && !\$this->httpUtils->checkRequestPath(\$request, \$this->options['check_path'])) {
            return;
        }

        \$data = json_decode(\$request->getContent());

        try {
            if (!\$data instanceof \\stdClass) {
                throw new BadRequestHttpException('Invalid JSON.');
            }

            try {
                \$username = \$this->propertyAccessor->getValue(\$data, \$this->options['username_path']);
            } catch (AccessException \$e) {
                throw new BadRequestHttpException(sprintf('The key \"%s\" must be provided.', \$this->options['username_path']), \$e);
            }

            try {
                \$password = \$this->propertyAccessor->getValue(\$data, \$this->options['password_path']);
            } catch (AccessException \$e) {
                throw new BadRequestHttpException(sprintf('The key \"%s\" must be provided.', \$this->options['password_path']), \$e);
            }

            if (!\\is_string(\$username)) {
                throw new BadRequestHttpException(sprintf('The key \"%s\" must be a string.', \$this->options['username_path']));
            }

            if (\\strlen(\$username) > Security::MAX_USERNAME_LENGTH) {
                throw new BadCredentialsException('Invalid username.');
            }

            if (!\\is_string(\$password)) {
                throw new BadRequestHttpException(sprintf('The key \"%s\" must be a string.', \$this->options['password_path']));
            }

            \$token = new UsernamePasswordToken(\$username, \$password, \$this->providerKey);

            \$authenticatedToken = \$this->authenticationManager->authenticate(\$token);
            \$response = \$this->onSuccess(\$request, \$authenticatedToken);
        } catch (AuthenticationException \$e) {
            \$response = \$this->onFailure(\$request, \$e);
        } catch (BadRequestHttpException \$e) {
            \$request->setRequestFormat('json');

            throw \$e;
        }

        if (null === \$response) {
            return;
        }

        \$event->setResponse(\$response);
    }

    /**
     * @return Response|null
     */
    private function onSuccess(Request \$request, TokenInterface \$token)
    {
        if (null !== \$this->logger) {
            \$this->logger->info('User has been authenticated successfully.', ['username' => \$token->getUsername()]);
        }

        \$this->migrateSession(\$request, \$token);

        \$this->tokenStorage->setToken(\$token);

        if (null !== \$this->eventDispatcher) {
            \$loginEvent = new InteractiveLoginEvent(\$request, \$token);
            \$this->eventDispatcher->dispatch(\$loginEvent, SecurityEvents::INTERACTIVE_LOGIN);
        }

        if (!\$this->successHandler) {
            return null; // let the original request succeeds
        }

        \$response = \$this->successHandler->onAuthenticationSuccess(\$request, \$token);

        if (!\$response instanceof Response) {
            throw new \\RuntimeException('Authentication Success Handler did not return a Response.');
        }

        return \$response;
    }

    private function onFailure(Request \$request, AuthenticationException \$failed)
    {
        if (null !== \$this->logger) {
            \$this->logger->info('Authentication request failed.', ['exception' => \$failed]);
        }

        \$token = \$this->tokenStorage->getToken();
        if (\$token instanceof UsernamePasswordToken && \$this->providerKey === \$token->getProviderKey()) {
            \$this->tokenStorage->setToken(null);
        }

        if (!\$this->failureHandler) {
            return new JsonResponse(['error' => \$failed->getMessageKey()], 401);
        }

        \$response = \$this->failureHandler->onAuthenticationFailure(\$request, \$failed);

        if (!\$response instanceof Response) {
            throw new \\RuntimeException('Authentication Failure Handler did not return a Response.');
        }

        return \$response;
    }

    /**
     * Call this method if your authentication token is stored to a session.
     *
     * @final
     */
    public function setSessionAuthenticationStrategy(SessionAuthenticationStrategyInterface \$sessionStrategy)
    {
        \$this->sessionStrategy = \$sessionStrategy;
    }

    private function migrateSession(Request \$request, TokenInterface \$token)
    {
        if (!\$this->sessionStrategy || !\$request->hasSession() || !\$request->hasPreviousSession()) {
            return;
        }

        \$this->sessionStrategy->onAuthentication(\$request, \$token);
    }
}
", "vendor/symfony/security-http/Firewall/UsernamePasswordJsonAuthenticationListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/UsernamePasswordJsonAuthenticationListener.php");
    }
}
