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

/* vendor/symfony/security-http/Firewall/AbstractPreAuthenticatedListener.php */
class __TwigTemplate_faf5d55437ac467e95027fd29ae7ef8365dc719b23014a10f113872361353e7b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/AbstractPreAuthenticatedListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/AbstractPreAuthenticatedListener.php"));

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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\PreAuthenticatedToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * AbstractPreAuthenticatedListener is the base class for all listener that
 * authenticates users based on a pre-authenticated request (like a certificate
 * for instance).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal since Symfony 4.3
 */
abstract class AbstractPreAuthenticatedListener implements ListenerInterface
{
    use LegacyListenerTrait;

    protected \$logger;
    private \$tokenStorage;
    private \$authenticationManager;
    private \$providerKey;
    private \$dispatcher;
    private \$sessionStrategy;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->authenticationManager = \$authenticationManager;
        \$this->providerKey = \$providerKey;
        \$this->logger = \$logger;
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
    }

    /**
     * Handles pre-authentication.
     */
    public function __invoke(RequestEvent \$event)
    {
        \$request = \$event->getRequest();

        try {
            list(\$user, \$credentials) = \$this->getPreAuthenticatedData(\$request);
        } catch (BadCredentialsException \$e) {
            \$this->clearToken(\$e);

            return;
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Checking current security token.', ['token' => (string) \$this->tokenStorage->getToken()]);
        }

        if (null !== \$token = \$this->tokenStorage->getToken()) {
            if (\$token instanceof PreAuthenticatedToken && \$this->providerKey == \$token->getProviderKey() && \$token->isAuthenticated() && \$token->getUsername() === \$user) {
                return;
            }
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Trying to pre-authenticate user.', ['username' => (string) \$user]);
        }

        try {
            \$token = \$this->authenticationManager->authenticate(new PreAuthenticatedToken(\$user, \$credentials, \$this->providerKey));

            if (null !== \$this->logger) {
                \$this->logger->info('Pre-authentication successful.', ['token' => (string) \$token]);
            }

            \$this->migrateSession(\$request, \$token);

            \$this->tokenStorage->setToken(\$token);

            if (null !== \$this->dispatcher) {
                \$loginEvent = new InteractiveLoginEvent(\$request, \$token);
                \$this->dispatcher->dispatch(\$loginEvent, SecurityEvents::INTERACTIVE_LOGIN);
            }
        } catch (AuthenticationException \$e) {
            \$this->clearToken(\$e);
        }
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
     * Clears a PreAuthenticatedToken for this provider (if present).
     */
    private function clearToken(AuthenticationException \$exception)
    {
        \$token = \$this->tokenStorage->getToken();
        if (\$token instanceof PreAuthenticatedToken && \$this->providerKey === \$token->getProviderKey()) {
            \$this->tokenStorage->setToken(null);

            if (null !== \$this->logger) {
                \$this->logger->info('Cleared security token due to an exception.', ['exception' => \$exception]);
            }
        }
    }

    /**
     * Gets the user and credentials from the Request.
     *
     * @return array An array composed of the user and the credentials
     */
    abstract protected function getPreAuthenticatedData(Request \$request);

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
        return "vendor/symfony/security-http/Firewall/AbstractPreAuthenticatedListener.php";
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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\PreAuthenticatedToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * AbstractPreAuthenticatedListener is the base class for all listener that
 * authenticates users based on a pre-authenticated request (like a certificate
 * for instance).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal since Symfony 4.3
 */
abstract class AbstractPreAuthenticatedListener implements ListenerInterface
{
    use LegacyListenerTrait;

    protected \$logger;
    private \$tokenStorage;
    private \$authenticationManager;
    private \$providerKey;
    private \$dispatcher;
    private \$sessionStrategy;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->authenticationManager = \$authenticationManager;
        \$this->providerKey = \$providerKey;
        \$this->logger = \$logger;
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
    }

    /**
     * Handles pre-authentication.
     */
    public function __invoke(RequestEvent \$event)
    {
        \$request = \$event->getRequest();

        try {
            list(\$user, \$credentials) = \$this->getPreAuthenticatedData(\$request);
        } catch (BadCredentialsException \$e) {
            \$this->clearToken(\$e);

            return;
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Checking current security token.', ['token' => (string) \$this->tokenStorage->getToken()]);
        }

        if (null !== \$token = \$this->tokenStorage->getToken()) {
            if (\$token instanceof PreAuthenticatedToken && \$this->providerKey == \$token->getProviderKey() && \$token->isAuthenticated() && \$token->getUsername() === \$user) {
                return;
            }
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Trying to pre-authenticate user.', ['username' => (string) \$user]);
        }

        try {
            \$token = \$this->authenticationManager->authenticate(new PreAuthenticatedToken(\$user, \$credentials, \$this->providerKey));

            if (null !== \$this->logger) {
                \$this->logger->info('Pre-authentication successful.', ['token' => (string) \$token]);
            }

            \$this->migrateSession(\$request, \$token);

            \$this->tokenStorage->setToken(\$token);

            if (null !== \$this->dispatcher) {
                \$loginEvent = new InteractiveLoginEvent(\$request, \$token);
                \$this->dispatcher->dispatch(\$loginEvent, SecurityEvents::INTERACTIVE_LOGIN);
            }
        } catch (AuthenticationException \$e) {
            \$this->clearToken(\$e);
        }
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
     * Clears a PreAuthenticatedToken for this provider (if present).
     */
    private function clearToken(AuthenticationException \$exception)
    {
        \$token = \$this->tokenStorage->getToken();
        if (\$token instanceof PreAuthenticatedToken && \$this->providerKey === \$token->getProviderKey()) {
            \$this->tokenStorage->setToken(null);

            if (null !== \$this->logger) {
                \$this->logger->info('Cleared security token due to an exception.', ['exception' => \$exception]);
            }
        }
    }

    /**
     * Gets the user and credentials from the Request.
     *
     * @return array An array composed of the user and the credentials
     */
    abstract protected function getPreAuthenticatedData(Request \$request);

    private function migrateSession(Request \$request, TokenInterface \$token)
    {
        if (!\$this->sessionStrategy || !\$request->hasSession() || !\$request->hasPreviousSession()) {
            return;
        }

        \$this->sessionStrategy->onAuthentication(\$request, \$token);
    }
}
", "vendor/symfony/security-http/Firewall/AbstractPreAuthenticatedListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/AbstractPreAuthenticatedListener.php");
    }
}
