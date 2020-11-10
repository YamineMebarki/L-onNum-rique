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

/* vendor/symfony/security-http/Firewall/BasicAuthenticationListener.php */
class __TwigTemplate_ebbe2ec0c6c62b75f5865d2ffb868e4b0e8440d8457bde624e87547c86e22d42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/BasicAuthenticationListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/BasicAuthenticationListener.php"));

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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;

/**
 * BasicAuthenticationListener implements Basic HTTP authentication.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class BasicAuthenticationListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$authenticationManager;
    private \$providerKey;
    private \$authenticationEntryPoint;
    private \$logger;
    private \$ignoreFailure;
    private \$sessionStrategy;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, AuthenticationEntryPointInterface \$authenticationEntryPoint, LoggerInterface \$logger = null)
    {
        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->tokenStorage = \$tokenStorage;
        \$this->authenticationManager = \$authenticationManager;
        \$this->providerKey = \$providerKey;
        \$this->authenticationEntryPoint = \$authenticationEntryPoint;
        \$this->logger = \$logger;
        \$this->ignoreFailure = false;
    }

    /**
     * Handles basic authentication.
     */
    public function __invoke(RequestEvent \$event)
    {
        \$request = \$event->getRequest();

        if (null === \$username = \$request->headers->get('PHP_AUTH_USER')) {
            return;
        }

        if (null !== \$token = \$this->tokenStorage->getToken()) {
            if (\$token instanceof UsernamePasswordToken && \$token->isAuthenticated() && \$token->getUsername() === \$username) {
                return;
            }
        }

        if (null !== \$this->logger) {
            \$this->logger->info('Basic authentication Authorization header found for user.', ['username' => \$username]);
        }

        try {
            \$token = \$this->authenticationManager->authenticate(new UsernamePasswordToken(\$username, \$request->headers->get('PHP_AUTH_PW'), \$this->providerKey));

            \$this->migrateSession(\$request, \$token);

            \$this->tokenStorage->setToken(\$token);
        } catch (AuthenticationException \$e) {
            \$token = \$this->tokenStorage->getToken();
            if (\$token instanceof UsernamePasswordToken && \$this->providerKey === \$token->getProviderKey()) {
                \$this->tokenStorage->setToken(null);
            }

            if (null !== \$this->logger) {
                \$this->logger->info('Basic authentication failed for user.', ['username' => \$username, 'exception' => \$e]);
            }

            if (\$this->ignoreFailure) {
                return;
            }

            \$event->setResponse(\$this->authenticationEntryPoint->start(\$request, \$e));
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
        return "vendor/symfony/security-http/Firewall/BasicAuthenticationListener.php";
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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;

/**
 * BasicAuthenticationListener implements Basic HTTP authentication.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class BasicAuthenticationListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$authenticationManager;
    private \$providerKey;
    private \$authenticationEntryPoint;
    private \$logger;
    private \$ignoreFailure;
    private \$sessionStrategy;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, string \$providerKey, AuthenticationEntryPointInterface \$authenticationEntryPoint, LoggerInterface \$logger = null)
    {
        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->tokenStorage = \$tokenStorage;
        \$this->authenticationManager = \$authenticationManager;
        \$this->providerKey = \$providerKey;
        \$this->authenticationEntryPoint = \$authenticationEntryPoint;
        \$this->logger = \$logger;
        \$this->ignoreFailure = false;
    }

    /**
     * Handles basic authentication.
     */
    public function __invoke(RequestEvent \$event)
    {
        \$request = \$event->getRequest();

        if (null === \$username = \$request->headers->get('PHP_AUTH_USER')) {
            return;
        }

        if (null !== \$token = \$this->tokenStorage->getToken()) {
            if (\$token instanceof UsernamePasswordToken && \$token->isAuthenticated() && \$token->getUsername() === \$username) {
                return;
            }
        }

        if (null !== \$this->logger) {
            \$this->logger->info('Basic authentication Authorization header found for user.', ['username' => \$username]);
        }

        try {
            \$token = \$this->authenticationManager->authenticate(new UsernamePasswordToken(\$username, \$request->headers->get('PHP_AUTH_PW'), \$this->providerKey));

            \$this->migrateSession(\$request, \$token);

            \$this->tokenStorage->setToken(\$token);
        } catch (AuthenticationException \$e) {
            \$token = \$this->tokenStorage->getToken();
            if (\$token instanceof UsernamePasswordToken && \$this->providerKey === \$token->getProviderKey()) {
                \$this->tokenStorage->setToken(null);
            }

            if (null !== \$this->logger) {
                \$this->logger->info('Basic authentication failed for user.', ['username' => \$username, 'exception' => \$e]);
            }

            if (\$this->ignoreFailure) {
                return;
            }

            \$event->setResponse(\$this->authenticationEntryPoint->start(\$request, \$e));
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

    private function migrateSession(Request \$request, TokenInterface \$token)
    {
        if (!\$this->sessionStrategy || !\$request->hasSession() || !\$request->hasPreviousSession()) {
            return;
        }

        \$this->sessionStrategy->onAuthentication(\$request, \$token);
    }
}
", "vendor/symfony/security-http/Firewall/BasicAuthenticationListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/BasicAuthenticationListener.php");
    }
}
