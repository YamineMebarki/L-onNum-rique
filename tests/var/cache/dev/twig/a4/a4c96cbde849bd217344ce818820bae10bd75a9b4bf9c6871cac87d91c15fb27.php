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

/* vendor/symfony/security-http/Firewall/SimplePreAuthenticationListener.php */
class __TwigTemplate_4003bd8d4ff0bfe39f982efde1dec6c6c3d89609e7b32b1a51bd4512fb43dde3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/SimplePreAuthenticationListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/SimplePreAuthenticationListener.php"));

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
use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\SimplePreAuthenticatorInterface;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use Guard instead.', SimplePreAuthenticationListener::class), E_USER_DEPRECATED);

/**
 * SimplePreAuthenticationListener implements simple proxying to an authenticator.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimplePreAuthenticationListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$authenticationManager;
    private \$providerKey;
    private \$simpleAuthenticator;
    private \$logger;
    private \$dispatcher;
    private \$sessionStrategy;
    private \$trustResolver;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, SimplePreAuthenticatorInterface \$simpleAuthenticator, LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null, AuthenticationTrustResolverInterface \$trustResolver = null)
    {
        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->tokenStorage = \$tokenStorage;
        \$this->authenticationManager = \$authenticationManager;
        \$this->providerKey = \$providerKey;
        \$this->simpleAuthenticator = \$simpleAuthenticator;
        \$this->logger = \$logger;
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
        \$this->trustResolver = \$trustResolver ?: new AuthenticationTrustResolver(AnonymousToken::class, RememberMeToken::class);
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

    /**
     * Handles basic authentication.
     */
    public function __invoke(RequestEvent \$event)
    {
        \$request = \$event->getRequest();

        if (null !== \$this->logger) {
            \$this->logger->info('Attempting SimplePreAuthentication.', ['key' => \$this->providerKey, 'authenticator' => \\get_class(\$this->simpleAuthenticator)]);
        }

        if ((null !== \$token = \$this->tokenStorage->getToken()) && !\$this->trustResolver->isAnonymous(\$token)) {
            return;
        }

        try {
            \$token = \$this->simpleAuthenticator->createToken(\$request, \$this->providerKey);

            // allow null to be returned to skip authentication
            if (null === \$token) {
                return;
            }

            \$token = \$this->authenticationManager->authenticate(\$token);

            \$this->migrateSession(\$request, \$token);

            \$this->tokenStorage->setToken(\$token);

            if (null !== \$this->dispatcher) {
                \$loginEvent = new InteractiveLoginEvent(\$request, \$token);
                \$this->dispatcher->dispatch(\$loginEvent, SecurityEvents::INTERACTIVE_LOGIN);
            }
        } catch (AuthenticationException \$e) {
            \$this->tokenStorage->setToken(null);

            if (null !== \$this->logger) {
                \$this->logger->info('SimplePreAuthentication request failed.', ['exception' => \$e, 'authenticator' => \\get_class(\$this->simpleAuthenticator)]);
            }

            if (\$this->simpleAuthenticator instanceof AuthenticationFailureHandlerInterface) {
                \$response = \$this->simpleAuthenticator->onAuthenticationFailure(\$request, \$e);
                if (\$response instanceof Response) {
                    \$event->setResponse(\$response);
                } elseif (null !== \$response) {
                    throw new \\UnexpectedValueException(sprintf('The %s::onAuthenticationFailure method must return null or a Response object', \\get_class(\$this->simpleAuthenticator)));
                }
            }

            return;
        }

        if (\$this->simpleAuthenticator instanceof AuthenticationSuccessHandlerInterface) {
            \$response = \$this->simpleAuthenticator->onAuthenticationSuccess(\$request, \$token);
            if (\$response instanceof Response) {
                \$event->setResponse(\$response);
            } elseif (null !== \$response) {
                throw new \\UnexpectedValueException(sprintf('The %s::onAuthenticationSuccess method must return null or a Response object', \\get_class(\$this->simpleAuthenticator)));
            }
        }
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
        return "vendor/symfony/security-http/Firewall/SimplePreAuthenticationListener.php";
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
use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\SimplePreAuthenticatorInterface;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use Guard instead.', SimplePreAuthenticationListener::class), E_USER_DEPRECATED);

/**
 * SimplePreAuthenticationListener implements simple proxying to an authenticator.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimplePreAuthenticationListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$authenticationManager;
    private \$providerKey;
    private \$simpleAuthenticator;
    private \$logger;
    private \$dispatcher;
    private \$sessionStrategy;
    private \$trustResolver;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, SimplePreAuthenticatorInterface \$simpleAuthenticator, LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null, AuthenticationTrustResolverInterface \$trustResolver = null)
    {
        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->tokenStorage = \$tokenStorage;
        \$this->authenticationManager = \$authenticationManager;
        \$this->providerKey = \$providerKey;
        \$this->simpleAuthenticator = \$simpleAuthenticator;
        \$this->logger = \$logger;
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
        \$this->trustResolver = \$trustResolver ?: new AuthenticationTrustResolver(AnonymousToken::class, RememberMeToken::class);
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

    /**
     * Handles basic authentication.
     */
    public function __invoke(RequestEvent \$event)
    {
        \$request = \$event->getRequest();

        if (null !== \$this->logger) {
            \$this->logger->info('Attempting SimplePreAuthentication.', ['key' => \$this->providerKey, 'authenticator' => \\get_class(\$this->simpleAuthenticator)]);
        }

        if ((null !== \$token = \$this->tokenStorage->getToken()) && !\$this->trustResolver->isAnonymous(\$token)) {
            return;
        }

        try {
            \$token = \$this->simpleAuthenticator->createToken(\$request, \$this->providerKey);

            // allow null to be returned to skip authentication
            if (null === \$token) {
                return;
            }

            \$token = \$this->authenticationManager->authenticate(\$token);

            \$this->migrateSession(\$request, \$token);

            \$this->tokenStorage->setToken(\$token);

            if (null !== \$this->dispatcher) {
                \$loginEvent = new InteractiveLoginEvent(\$request, \$token);
                \$this->dispatcher->dispatch(\$loginEvent, SecurityEvents::INTERACTIVE_LOGIN);
            }
        } catch (AuthenticationException \$e) {
            \$this->tokenStorage->setToken(null);

            if (null !== \$this->logger) {
                \$this->logger->info('SimplePreAuthentication request failed.', ['exception' => \$e, 'authenticator' => \\get_class(\$this->simpleAuthenticator)]);
            }

            if (\$this->simpleAuthenticator instanceof AuthenticationFailureHandlerInterface) {
                \$response = \$this->simpleAuthenticator->onAuthenticationFailure(\$request, \$e);
                if (\$response instanceof Response) {
                    \$event->setResponse(\$response);
                } elseif (null !== \$response) {
                    throw new \\UnexpectedValueException(sprintf('The %s::onAuthenticationFailure method must return null or a Response object', \\get_class(\$this->simpleAuthenticator)));
                }
            }

            return;
        }

        if (\$this->simpleAuthenticator instanceof AuthenticationSuccessHandlerInterface) {
            \$response = \$this->simpleAuthenticator->onAuthenticationSuccess(\$request, \$token);
            if (\$response instanceof Response) {
                \$event->setResponse(\$response);
            } elseif (null !== \$response) {
                throw new \\UnexpectedValueException(sprintf('The %s::onAuthenticationSuccess method must return null or a Response object', \\get_class(\$this->simpleAuthenticator)));
            }
        }
    }

    private function migrateSession(Request \$request, TokenInterface \$token)
    {
        if (!\$this->sessionStrategy || !\$request->hasSession() || !\$request->hasPreviousSession()) {
            return;
        }

        \$this->sessionStrategy->onAuthentication(\$request, \$token);
    }
}
", "vendor/symfony/security-http/Firewall/SimplePreAuthenticationListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/SimplePreAuthenticationListener.php");
    }
}
