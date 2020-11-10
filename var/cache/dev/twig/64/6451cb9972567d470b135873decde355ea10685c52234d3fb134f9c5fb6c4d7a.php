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

/* vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php */
class __TwigTemplate_a8429be81a9f1aabe2d59920855ddcc441569d518e5d5c3c73c3b0fe8477f988 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php"));

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

namespace Symfony\\Component\\Security\\Guard\\Firewall;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Guard\\AuthenticatorInterface;
use Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler;
use Symfony\\Component\\Security\\Guard\\Token\\PreAuthenticationGuardToken;
use Symfony\\Component\\Security\\Http\\Firewall\\LegacyListenerTrait;
use Symfony\\Component\\Security\\Http\\Firewall\\ListenerInterface;
use Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface;

/**
 * Authentication listener for the \"guard\" system.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 * @author Amaury Leroux de Lens <amaury@lerouxdelens.com>
 *
 * @final since Symfony 4.3
 */
class GuardAuthenticationListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$guardHandler;
    private \$authenticationManager;
    private \$providerKey;
    private \$guardAuthenticators;
    private \$logger;
    private \$rememberMeServices;

    /**
     * @param GuardAuthenticatorHandler         \$guardHandler          The Guard handler
     * @param AuthenticationManagerInterface    \$authenticationManager An AuthenticationManagerInterface instance
     * @param string                            \$providerKey           The provider (i.e. firewall) key
     * @param iterable|AuthenticatorInterface[] \$guardAuthenticators   The authenticators, with keys that match what's passed to GuardAuthenticationProvider
     * @param LoggerInterface                   \$logger                A LoggerInterface instance
     */
    public function __construct(GuardAuthenticatorHandler \$guardHandler, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, \$guardAuthenticators, LoggerInterface \$logger = null)
    {
        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->guardHandler = \$guardHandler;
        \$this->authenticationManager = \$authenticationManager;
        \$this->providerKey = \$providerKey;
        \$this->guardAuthenticators = \$guardAuthenticators;
        \$this->logger = \$logger;
    }

    /**
     * Iterates over each authenticator to see if each wants to authenticate the request.
     */
    public function __invoke(RequestEvent \$event)
    {
        if (null !== \$this->logger) {
            \$context = ['firewall_key' => \$this->providerKey];

            if (\$this->guardAuthenticators instanceof \\Countable || \\is_array(\$this->guardAuthenticators)) {
                \$context['authenticators'] = \\count(\$this->guardAuthenticators);
            }

            \$this->logger->debug('Checking for guard authentication credentials.', \$context);
        }

        foreach (\$this->guardAuthenticators as \$key => \$guardAuthenticator) {
            // get a key that's unique to *this* guard authenticator
            // this MUST be the same as GuardAuthenticationProvider
            \$uniqueGuardKey = \$this->providerKey.'_'.\$key;

            \$this->executeGuardAuthenticator(\$uniqueGuardKey, \$guardAuthenticator, \$event);

            if (\$event->hasResponse()) {
                if (null !== \$this->logger) {
                    \$this->logger->debug('The \"{authenticator}\" authenticator set the response. Any later authenticator will not be called', ['authenticator' => \\get_class(\$guardAuthenticator)]);
                }

                break;
            }
        }
    }

    private function executeGuardAuthenticator(\$uniqueGuardKey, AuthenticatorInterface \$guardAuthenticator, RequestEvent \$event)
    {
        \$request = \$event->getRequest();
        try {
            if (null !== \$this->logger) {
                \$this->logger->debug('Checking support on guard authenticator.', ['firewall_key' => \$this->providerKey, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            // abort the execution of the authenticator if it doesn't support the request
            if (!\$guardAuthenticator->supports(\$request)) {
                if (null !== \$this->logger) {
                    \$this->logger->debug('Guard authenticator does not support the request.', ['firewall_key' => \$this->providerKey, 'authenticator' => \\get_class(\$guardAuthenticator)]);
                }

                return;
            }

            if (null !== \$this->logger) {
                \$this->logger->debug('Calling getCredentials() on guard authenticator.', ['firewall_key' => \$this->providerKey, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            // allow the authenticator to fetch authentication info from the request
            \$credentials = \$guardAuthenticator->getCredentials(\$request);

            if (null === \$credentials) {
                throw new \\UnexpectedValueException(sprintf('The return value of \"%1\$s::getCredentials()\" must not be null. Return false from \"%1\$s::supports()\" instead.', \\get_class(\$guardAuthenticator)));
            }

            // create a token with the unique key, so that the provider knows which authenticator to use
            \$token = new PreAuthenticationGuardToken(\$credentials, \$uniqueGuardKey);

            if (null !== \$this->logger) {
                \$this->logger->debug('Passing guard token information to the GuardAuthenticationProvider', ['firewall_key' => \$this->providerKey, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }
            // pass the token into the AuthenticationManager system
            // this indirectly calls GuardAuthenticationProvider::authenticate()
            \$token = \$this->authenticationManager->authenticate(\$token);

            if (null !== \$this->logger) {
                \$this->logger->info('Guard authentication successful!', ['token' => \$token, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            // sets the token on the token storage, etc
            \$this->guardHandler->authenticateWithToken(\$token, \$request, \$this->providerKey);
        } catch (AuthenticationException \$e) {
            // oh no! Authentication failed!

            if (null !== \$this->logger) {
                \$this->logger->info('Guard authentication failed.', ['exception' => \$e, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            \$response = \$this->guardHandler->handleAuthenticationFailure(\$e, \$request, \$guardAuthenticator, \$this->providerKey);

            if (\$response instanceof Response) {
                \$event->setResponse(\$response);
            }

            return;
        }

        // success!
        \$response = \$this->guardHandler->handleAuthenticationSuccess(\$token, \$request, \$guardAuthenticator, \$this->providerKey);
        if (\$response instanceof Response) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Guard authenticator set success response.', ['response' => \$response, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            \$event->setResponse(\$response);
        } else {
            if (null !== \$this->logger) {
                \$this->logger->debug('Guard authenticator set no success response: request continues.', ['authenticator' => \\get_class(\$guardAuthenticator)]);
            }
        }

        // attempt to trigger the remember me functionality
        \$this->triggerRememberMe(\$guardAuthenticator, \$request, \$token, \$response);
    }

    /**
     * Should be called if this listener will support remember me.
     */
    public function setRememberMeServices(RememberMeServicesInterface \$rememberMeServices)
    {
        \$this->rememberMeServices = \$rememberMeServices;
    }

    /**
     * Checks to see if remember me is supported in the authenticator and
     * on the firewall. If it is, the RememberMeServicesInterface is notified.
     */
    private function triggerRememberMe(AuthenticatorInterface \$guardAuthenticator, Request \$request, TokenInterface \$token, Response \$response = null)
    {
        if (null === \$this->rememberMeServices) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Remember me skipped: it is not configured for the firewall.', ['authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            return;
        }

        if (!\$guardAuthenticator->supportsRememberMe()) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Remember me skipped: your authenticator does not support it.', ['authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            return;
        }

        if (!\$response instanceof Response) {
            throw new \\LogicException(sprintf('%s::onAuthenticationSuccess *must* return a Response if you want to use the remember me functionality. Return a Response, or set remember_me to false under the guard configuration.', \\get_class(\$guardAuthenticator)));
        }

        \$this->rememberMeServices->loginSuccess(\$request, \$response, \$token);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php";
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

namespace Symfony\\Component\\Security\\Guard\\Firewall;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Guard\\AuthenticatorInterface;
use Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler;
use Symfony\\Component\\Security\\Guard\\Token\\PreAuthenticationGuardToken;
use Symfony\\Component\\Security\\Http\\Firewall\\LegacyListenerTrait;
use Symfony\\Component\\Security\\Http\\Firewall\\ListenerInterface;
use Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface;

/**
 * Authentication listener for the \"guard\" system.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 * @author Amaury Leroux de Lens <amaury@lerouxdelens.com>
 *
 * @final since Symfony 4.3
 */
class GuardAuthenticationListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$guardHandler;
    private \$authenticationManager;
    private \$providerKey;
    private \$guardAuthenticators;
    private \$logger;
    private \$rememberMeServices;

    /**
     * @param GuardAuthenticatorHandler         \$guardHandler          The Guard handler
     * @param AuthenticationManagerInterface    \$authenticationManager An AuthenticationManagerInterface instance
     * @param string                            \$providerKey           The provider (i.e. firewall) key
     * @param iterable|AuthenticatorInterface[] \$guardAuthenticators   The authenticators, with keys that match what's passed to GuardAuthenticationProvider
     * @param LoggerInterface                   \$logger                A LoggerInterface instance
     */
    public function __construct(GuardAuthenticatorHandler \$guardHandler, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, \$guardAuthenticators, LoggerInterface \$logger = null)
    {
        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->guardHandler = \$guardHandler;
        \$this->authenticationManager = \$authenticationManager;
        \$this->providerKey = \$providerKey;
        \$this->guardAuthenticators = \$guardAuthenticators;
        \$this->logger = \$logger;
    }

    /**
     * Iterates over each authenticator to see if each wants to authenticate the request.
     */
    public function __invoke(RequestEvent \$event)
    {
        if (null !== \$this->logger) {
            \$context = ['firewall_key' => \$this->providerKey];

            if (\$this->guardAuthenticators instanceof \\Countable || \\is_array(\$this->guardAuthenticators)) {
                \$context['authenticators'] = \\count(\$this->guardAuthenticators);
            }

            \$this->logger->debug('Checking for guard authentication credentials.', \$context);
        }

        foreach (\$this->guardAuthenticators as \$key => \$guardAuthenticator) {
            // get a key that's unique to *this* guard authenticator
            // this MUST be the same as GuardAuthenticationProvider
            \$uniqueGuardKey = \$this->providerKey.'_'.\$key;

            \$this->executeGuardAuthenticator(\$uniqueGuardKey, \$guardAuthenticator, \$event);

            if (\$event->hasResponse()) {
                if (null !== \$this->logger) {
                    \$this->logger->debug('The \"{authenticator}\" authenticator set the response. Any later authenticator will not be called', ['authenticator' => \\get_class(\$guardAuthenticator)]);
                }

                break;
            }
        }
    }

    private function executeGuardAuthenticator(\$uniqueGuardKey, AuthenticatorInterface \$guardAuthenticator, RequestEvent \$event)
    {
        \$request = \$event->getRequest();
        try {
            if (null !== \$this->logger) {
                \$this->logger->debug('Checking support on guard authenticator.', ['firewall_key' => \$this->providerKey, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            // abort the execution of the authenticator if it doesn't support the request
            if (!\$guardAuthenticator->supports(\$request)) {
                if (null !== \$this->logger) {
                    \$this->logger->debug('Guard authenticator does not support the request.', ['firewall_key' => \$this->providerKey, 'authenticator' => \\get_class(\$guardAuthenticator)]);
                }

                return;
            }

            if (null !== \$this->logger) {
                \$this->logger->debug('Calling getCredentials() on guard authenticator.', ['firewall_key' => \$this->providerKey, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            // allow the authenticator to fetch authentication info from the request
            \$credentials = \$guardAuthenticator->getCredentials(\$request);

            if (null === \$credentials) {
                throw new \\UnexpectedValueException(sprintf('The return value of \"%1\$s::getCredentials()\" must not be null. Return false from \"%1\$s::supports()\" instead.', \\get_class(\$guardAuthenticator)));
            }

            // create a token with the unique key, so that the provider knows which authenticator to use
            \$token = new PreAuthenticationGuardToken(\$credentials, \$uniqueGuardKey);

            if (null !== \$this->logger) {
                \$this->logger->debug('Passing guard token information to the GuardAuthenticationProvider', ['firewall_key' => \$this->providerKey, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }
            // pass the token into the AuthenticationManager system
            // this indirectly calls GuardAuthenticationProvider::authenticate()
            \$token = \$this->authenticationManager->authenticate(\$token);

            if (null !== \$this->logger) {
                \$this->logger->info('Guard authentication successful!', ['token' => \$token, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            // sets the token on the token storage, etc
            \$this->guardHandler->authenticateWithToken(\$token, \$request, \$this->providerKey);
        } catch (AuthenticationException \$e) {
            // oh no! Authentication failed!

            if (null !== \$this->logger) {
                \$this->logger->info('Guard authentication failed.', ['exception' => \$e, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            \$response = \$this->guardHandler->handleAuthenticationFailure(\$e, \$request, \$guardAuthenticator, \$this->providerKey);

            if (\$response instanceof Response) {
                \$event->setResponse(\$response);
            }

            return;
        }

        // success!
        \$response = \$this->guardHandler->handleAuthenticationSuccess(\$token, \$request, \$guardAuthenticator, \$this->providerKey);
        if (\$response instanceof Response) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Guard authenticator set success response.', ['response' => \$response, 'authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            \$event->setResponse(\$response);
        } else {
            if (null !== \$this->logger) {
                \$this->logger->debug('Guard authenticator set no success response: request continues.', ['authenticator' => \\get_class(\$guardAuthenticator)]);
            }
        }

        // attempt to trigger the remember me functionality
        \$this->triggerRememberMe(\$guardAuthenticator, \$request, \$token, \$response);
    }

    /**
     * Should be called if this listener will support remember me.
     */
    public function setRememberMeServices(RememberMeServicesInterface \$rememberMeServices)
    {
        \$this->rememberMeServices = \$rememberMeServices;
    }

    /**
     * Checks to see if remember me is supported in the authenticator and
     * on the firewall. If it is, the RememberMeServicesInterface is notified.
     */
    private function triggerRememberMe(AuthenticatorInterface \$guardAuthenticator, Request \$request, TokenInterface \$token, Response \$response = null)
    {
        if (null === \$this->rememberMeServices) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Remember me skipped: it is not configured for the firewall.', ['authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            return;
        }

        if (!\$guardAuthenticator->supportsRememberMe()) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Remember me skipped: your authenticator does not support it.', ['authenticator' => \\get_class(\$guardAuthenticator)]);
            }

            return;
        }

        if (!\$response instanceof Response) {
            throw new \\LogicException(sprintf('%s::onAuthenticationSuccess *must* return a Response if you want to use the remember me functionality. Return a Response, or set remember_me to false under the guard configuration.', \\get_class(\$guardAuthenticator)));
        }

        \$this->rememberMeServices->loginSuccess(\$request, \$response, \$token);
    }
}
", "vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php");
    }
}
