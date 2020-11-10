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

/* vendor/symfony/security-http/Firewall/ContextListener.php */
class __TwigTemplate_78c4afdac89cee9df7630f5c983079fad3a811f1277ca9fb9971f819c84d0e5b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/ContextListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/ContextListener.php"));

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
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\SwitchUserToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\Role\\SwitchUserRole;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;
use Symfony\\Component\\Security\\Http\\Event\\DeauthenticatedEvent;

/**
 * ContextListener manages the SecurityContext persistence through a session.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @final since Symfony 4.3
 */
class ContextListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$sessionKey;
    private \$logger;
    private \$userProviders;
    private \$dispatcher;
    private \$registered;
    private \$trustResolver;

    /**
     * @param iterable|UserProviderInterface[] \$userProviders
     */
    public function __construct(TokenStorageInterface \$tokenStorage, iterable \$userProviders, string \$contextKey, LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null, AuthenticationTrustResolverInterface \$trustResolver = null)
    {
        if (empty(\$contextKey)) {
            throw new \\InvalidArgumentException('\$contextKey must not be empty.');
        }

        \$this->tokenStorage = \$tokenStorage;
        \$this->userProviders = \$userProviders;
        \$this->sessionKey = '_security_'.\$contextKey;
        \$this->logger = \$logger;
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
        \$this->trustResolver = \$trustResolver ?: new AuthenticationTrustResolver(AnonymousToken::class, RememberMeToken::class);
    }

    /**
     * Enables deauthentication during refreshUser when the user has changed.
     *
     * @param bool \$logoutOnUserChange
     *
     * @deprecated since Symfony 4.1
     */
    public function setLogoutOnUserChange(\$logoutOnUserChange)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);
    }

    /**
     * Reads the Security Token from the session.
     */
    public function __invoke(RequestEvent \$event)
    {
        if (!\$this->registered && null !== \$this->dispatcher && \$event->isMasterRequest()) {
            \$this->dispatcher->addListener(KernelEvents::RESPONSE, [\$this, 'onKernelResponse']);
            \$this->registered = true;
        }

        \$request = \$event->getRequest();
        \$session = \$request->hasPreviousSession() ? \$request->getSession() : null;

        if (null === \$session || null === \$token = \$session->get(\$this->sessionKey)) {
            \$this->tokenStorage->setToken(null);

            return;
        }

        \$token = \$this->safelyUnserialize(\$token);

        if (null !== \$this->logger) {
            \$this->logger->debug('Read existing security token from the session.', [
                'key' => \$this->sessionKey,
                'token_class' => \\is_object(\$token) ? \\get_class(\$token) : null,
            ]);
        }

        if (\$token instanceof TokenInterface) {
            \$token = \$this->refreshUser(\$token);
        } elseif (null !== \$token) {
            if (null !== \$this->logger) {
                \$this->logger->warning('Expected a security token from the session, got something else.', ['key' => \$this->sessionKey, 'received' => \$token]);
            }

            \$token = null;
        }

        \$this->tokenStorage->setToken(\$token);
    }

    /**
     * Writes the security token into the session.
     */
    public function onKernelResponse(FilterResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$request = \$event->getRequest();

        if (!\$request->hasSession()) {
            return;
        }

        \$this->dispatcher->removeListener(KernelEvents::RESPONSE, [\$this, 'onKernelResponse']);
        \$this->registered = false;
        \$session = \$request->getSession();

        if ((null === \$token = \$this->tokenStorage->getToken()) || \$this->trustResolver->isAnonymous(\$token)) {
            if (\$request->hasPreviousSession()) {
                \$session->remove(\$this->sessionKey);
            }
        } else {
            \$session->set(\$this->sessionKey, serialize(\$token));

            if (null !== \$this->logger) {
                \$this->logger->debug('Stored the security token in the session.', ['key' => \$this->sessionKey]);
            }
        }
    }

    /**
     * Refreshes the user by reloading it from the user provider.
     *
     * @return TokenInterface|null
     *
     * @throws \\RuntimeException
     */
    protected function refreshUser(TokenInterface \$token)
    {
        \$user = \$token->getUser();
        if (!\$user instanceof UserInterface) {
            return \$token;
        }

        \$userNotFoundByProvider = false;
        \$userDeauthenticated = false;

        foreach (\$this->userProviders as \$provider) {
            if (!\$provider instanceof UserProviderInterface) {
                throw new \\InvalidArgumentException(sprintf('User provider \"%s\" must implement \"%s\".', \\get_class(\$provider), UserProviderInterface::class));
            }

            try {
                \$refreshedUser = \$provider->refreshUser(\$user);
                \$newToken = clone \$token;
                \$newToken->setUser(\$refreshedUser);

                // tokens can be deauthenticated if the user has been changed.
                if (!\$newToken->isAuthenticated()) {
                    \$userDeauthenticated = true;

                    if (null !== \$this->logger) {
                        \$this->logger->debug('Cannot refresh token because user has changed.', ['username' => \$refreshedUser->getUsername(), 'provider' => \\get_class(\$provider)]);
                    }

                    continue;
                }

                \$token->setUser(\$refreshedUser);

                if (null !== \$this->logger) {
                    \$context = ['provider' => \\get_class(\$provider), 'username' => \$refreshedUser->getUsername()];

                    if (\$token instanceof SwitchUserToken) {
                        \$context['impersonator_username'] = \$token->getOriginalToken()->getUsername();
                    } else {
                        foreach (\$token->getRoles(false) as \$role) {
                            if (\$role instanceof SwitchUserRole) {
                                \$context['impersonator_username'] = \$role->getSource(false)->getUsername();
                                break;
                            }
                        }
                    }

                    \$this->logger->debug('User was reloaded from a user provider.', \$context);
                }

                return \$token;
            } catch (UnsupportedUserException \$e) {
                // let's try the next user provider
            } catch (UsernameNotFoundException \$e) {
                if (null !== \$this->logger) {
                    \$this->logger->warning('Username could not be found in the selected user provider.', ['username' => \$e->getUsername(), 'provider' => \\get_class(\$provider)]);
                }

                \$userNotFoundByProvider = true;
            }
        }

        if (\$userDeauthenticated) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Token was deauthenticated after trying to refresh it.');
            }

            if (null !== \$this->dispatcher) {
                \$this->dispatcher->dispatch(new DeauthenticatedEvent(\$token, \$newToken), DeauthenticatedEvent::class);
            }

            return null;
        }

        if (\$userNotFoundByProvider) {
            return null;
        }

        throw new \\RuntimeException(sprintf('There is no user provider for user \"%s\".', \\get_class(\$user)));
    }

    private function safelyUnserialize(\$serializedToken)
    {
        \$e = \$token = null;
        \$prevUnserializeHandler = ini_set('unserialize_callback_func', __CLASS__.'::handleUnserializeCallback');
        \$prevErrorHandler = set_error_handler(function (\$type, \$msg, \$file, \$line, \$context = []) use (&\$prevErrorHandler) {
            if (__FILE__ === \$file) {
                throw new \\ErrorException(\$msg, 0x37313bc, \$type, \$file, \$line);
            }

            return \$prevErrorHandler ? \$prevErrorHandler(\$type, \$msg, \$file, \$line, \$context) : false;
        });

        try {
            \$token = unserialize(\$serializedToken);
        } catch (\\Throwable \$e) {
        }
        restore_error_handler();
        ini_set('unserialize_callback_func', \$prevUnserializeHandler);
        if (\$e) {
            if (!\$e instanceof \\ErrorException || 0x37313bc !== \$e->getCode()) {
                throw \$e;
            }
            if (\$this->logger) {
                \$this->logger->warning('Failed to unserialize the security token from the session.', ['key' => \$this->sessionKey, 'received' => \$serializedToken, 'exception' => \$e]);
            }
        }

        return \$token;
    }

    /**
     * @internal
     */
    public static function handleUnserializeCallback(\$class)
    {
        throw new \\ErrorException('Class not found: '.\$class, 0x37313bc);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall/ContextListener.php";
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
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\SwitchUserToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\Role\\SwitchUserRole;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;
use Symfony\\Component\\Security\\Http\\Event\\DeauthenticatedEvent;

/**
 * ContextListener manages the SecurityContext persistence through a session.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @final since Symfony 4.3
 */
class ContextListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$sessionKey;
    private \$logger;
    private \$userProviders;
    private \$dispatcher;
    private \$registered;
    private \$trustResolver;

    /**
     * @param iterable|UserProviderInterface[] \$userProviders
     */
    public function __construct(TokenStorageInterface \$tokenStorage, iterable \$userProviders, string \$contextKey, LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null, AuthenticationTrustResolverInterface \$trustResolver = null)
    {
        if (empty(\$contextKey)) {
            throw new \\InvalidArgumentException('\$contextKey must not be empty.');
        }

        \$this->tokenStorage = \$tokenStorage;
        \$this->userProviders = \$userProviders;
        \$this->sessionKey = '_security_'.\$contextKey;
        \$this->logger = \$logger;
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
        \$this->trustResolver = \$trustResolver ?: new AuthenticationTrustResolver(AnonymousToken::class, RememberMeToken::class);
    }

    /**
     * Enables deauthentication during refreshUser when the user has changed.
     *
     * @param bool \$logoutOnUserChange
     *
     * @deprecated since Symfony 4.1
     */
    public function setLogoutOnUserChange(\$logoutOnUserChange)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.1.', __METHOD__), E_USER_DEPRECATED);
    }

    /**
     * Reads the Security Token from the session.
     */
    public function __invoke(RequestEvent \$event)
    {
        if (!\$this->registered && null !== \$this->dispatcher && \$event->isMasterRequest()) {
            \$this->dispatcher->addListener(KernelEvents::RESPONSE, [\$this, 'onKernelResponse']);
            \$this->registered = true;
        }

        \$request = \$event->getRequest();
        \$session = \$request->hasPreviousSession() ? \$request->getSession() : null;

        if (null === \$session || null === \$token = \$session->get(\$this->sessionKey)) {
            \$this->tokenStorage->setToken(null);

            return;
        }

        \$token = \$this->safelyUnserialize(\$token);

        if (null !== \$this->logger) {
            \$this->logger->debug('Read existing security token from the session.', [
                'key' => \$this->sessionKey,
                'token_class' => \\is_object(\$token) ? \\get_class(\$token) : null,
            ]);
        }

        if (\$token instanceof TokenInterface) {
            \$token = \$this->refreshUser(\$token);
        } elseif (null !== \$token) {
            if (null !== \$this->logger) {
                \$this->logger->warning('Expected a security token from the session, got something else.', ['key' => \$this->sessionKey, 'received' => \$token]);
            }

            \$token = null;
        }

        \$this->tokenStorage->setToken(\$token);
    }

    /**
     * Writes the security token into the session.
     */
    public function onKernelResponse(FilterResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$request = \$event->getRequest();

        if (!\$request->hasSession()) {
            return;
        }

        \$this->dispatcher->removeListener(KernelEvents::RESPONSE, [\$this, 'onKernelResponse']);
        \$this->registered = false;
        \$session = \$request->getSession();

        if ((null === \$token = \$this->tokenStorage->getToken()) || \$this->trustResolver->isAnonymous(\$token)) {
            if (\$request->hasPreviousSession()) {
                \$session->remove(\$this->sessionKey);
            }
        } else {
            \$session->set(\$this->sessionKey, serialize(\$token));

            if (null !== \$this->logger) {
                \$this->logger->debug('Stored the security token in the session.', ['key' => \$this->sessionKey]);
            }
        }
    }

    /**
     * Refreshes the user by reloading it from the user provider.
     *
     * @return TokenInterface|null
     *
     * @throws \\RuntimeException
     */
    protected function refreshUser(TokenInterface \$token)
    {
        \$user = \$token->getUser();
        if (!\$user instanceof UserInterface) {
            return \$token;
        }

        \$userNotFoundByProvider = false;
        \$userDeauthenticated = false;

        foreach (\$this->userProviders as \$provider) {
            if (!\$provider instanceof UserProviderInterface) {
                throw new \\InvalidArgumentException(sprintf('User provider \"%s\" must implement \"%s\".', \\get_class(\$provider), UserProviderInterface::class));
            }

            try {
                \$refreshedUser = \$provider->refreshUser(\$user);
                \$newToken = clone \$token;
                \$newToken->setUser(\$refreshedUser);

                // tokens can be deauthenticated if the user has been changed.
                if (!\$newToken->isAuthenticated()) {
                    \$userDeauthenticated = true;

                    if (null !== \$this->logger) {
                        \$this->logger->debug('Cannot refresh token because user has changed.', ['username' => \$refreshedUser->getUsername(), 'provider' => \\get_class(\$provider)]);
                    }

                    continue;
                }

                \$token->setUser(\$refreshedUser);

                if (null !== \$this->logger) {
                    \$context = ['provider' => \\get_class(\$provider), 'username' => \$refreshedUser->getUsername()];

                    if (\$token instanceof SwitchUserToken) {
                        \$context['impersonator_username'] = \$token->getOriginalToken()->getUsername();
                    } else {
                        foreach (\$token->getRoles(false) as \$role) {
                            if (\$role instanceof SwitchUserRole) {
                                \$context['impersonator_username'] = \$role->getSource(false)->getUsername();
                                break;
                            }
                        }
                    }

                    \$this->logger->debug('User was reloaded from a user provider.', \$context);
                }

                return \$token;
            } catch (UnsupportedUserException \$e) {
                // let's try the next user provider
            } catch (UsernameNotFoundException \$e) {
                if (null !== \$this->logger) {
                    \$this->logger->warning('Username could not be found in the selected user provider.', ['username' => \$e->getUsername(), 'provider' => \\get_class(\$provider)]);
                }

                \$userNotFoundByProvider = true;
            }
        }

        if (\$userDeauthenticated) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Token was deauthenticated after trying to refresh it.');
            }

            if (null !== \$this->dispatcher) {
                \$this->dispatcher->dispatch(new DeauthenticatedEvent(\$token, \$newToken), DeauthenticatedEvent::class);
            }

            return null;
        }

        if (\$userNotFoundByProvider) {
            return null;
        }

        throw new \\RuntimeException(sprintf('There is no user provider for user \"%s\".', \\get_class(\$user)));
    }

    private function safelyUnserialize(\$serializedToken)
    {
        \$e = \$token = null;
        \$prevUnserializeHandler = ini_set('unserialize_callback_func', __CLASS__.'::handleUnserializeCallback');
        \$prevErrorHandler = set_error_handler(function (\$type, \$msg, \$file, \$line, \$context = []) use (&\$prevErrorHandler) {
            if (__FILE__ === \$file) {
                throw new \\ErrorException(\$msg, 0x37313bc, \$type, \$file, \$line);
            }

            return \$prevErrorHandler ? \$prevErrorHandler(\$type, \$msg, \$file, \$line, \$context) : false;
        });

        try {
            \$token = unserialize(\$serializedToken);
        } catch (\\Throwable \$e) {
        }
        restore_error_handler();
        ini_set('unserialize_callback_func', \$prevUnserializeHandler);
        if (\$e) {
            if (!\$e instanceof \\ErrorException || 0x37313bc !== \$e->getCode()) {
                throw \$e;
            }
            if (\$this->logger) {
                \$this->logger->warning('Failed to unserialize the security token from the session.', ['key' => \$this->sessionKey, 'received' => \$serializedToken, 'exception' => \$e]);
            }
        }

        return \$token;
    }

    /**
     * @internal
     */
    public static function handleUnserializeCallback(\$class)
    {
        throw new \\ErrorException('Class not found: '.\$class, 0x37313bc);
    }
}
", "vendor/symfony/security-http/Firewall/ContextListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/ContextListener.php");
    }
}
