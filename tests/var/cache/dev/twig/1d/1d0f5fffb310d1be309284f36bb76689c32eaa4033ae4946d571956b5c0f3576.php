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

/* vendor/symfony/security-http/Firewall/RememberMeListener.php */
class __TwigTemplate_2607be6e5f228a6a80bfbb46f1391787740f7cd842a612666fc70c116835044b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/RememberMeListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/RememberMeListener.php"));

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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * RememberMeListener implements authentication capabilities via a cookie.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @final since Symfony 4.3
 */
class RememberMeListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$rememberMeServices;
    private \$authenticationManager;
    private \$logger;
    private \$dispatcher;
    private \$catchExceptions = true;
    private \$sessionStrategy;

    public function __construct(TokenStorageInterface \$tokenStorage, RememberMeServicesInterface \$rememberMeServices, AuthenticationManagerInterface \$authenticationManager, LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null, bool \$catchExceptions = true, SessionAuthenticationStrategyInterface \$sessionStrategy = null)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->rememberMeServices = \$rememberMeServices;
        \$this->authenticationManager = \$authenticationManager;
        \$this->logger = \$logger;
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
        \$this->catchExceptions = \$catchExceptions;
        \$this->sessionStrategy = null === \$sessionStrategy ? new SessionAuthenticationStrategy(SessionAuthenticationStrategy::MIGRATE) : \$sessionStrategy;
    }

    /**
     * Handles remember-me cookie based authentication.
     */
    public function __invoke(RequestEvent \$event)
    {
        if (null !== \$this->tokenStorage->getToken()) {
            return;
        }

        \$request = \$event->getRequest();
        try {
            if (null === \$token = \$this->rememberMeServices->autoLogin(\$request)) {
                return;
            }
        } catch (AuthenticationException \$e) {
            if (null !== \$this->logger) {
                \$this->logger->warning(
                    'The token storage was not populated with remember-me token as the'
                   .' RememberMeServices was not able to create a token from the remember'
                   .' me information.', ['exception' => \$e]
                );
            }

            \$this->rememberMeServices->loginFail(\$request);

            if (!\$this->catchExceptions) {
                throw \$e;
            }

            return;
        }

        try {
            \$token = \$this->authenticationManager->authenticate(\$token);
            if (\$request->hasSession() && \$request->getSession()->isStarted()) {
                \$this->sessionStrategy->onAuthentication(\$request, \$token);
            }
            \$this->tokenStorage->setToken(\$token);

            if (null !== \$this->dispatcher) {
                \$loginEvent = new InteractiveLoginEvent(\$request, \$token);
                \$this->dispatcher->dispatch(\$loginEvent, SecurityEvents::INTERACTIVE_LOGIN);
            }

            if (null !== \$this->logger) {
                \$this->logger->debug('Populated the token storage with a remember-me token.');
            }
        } catch (AuthenticationException \$e) {
            if (null !== \$this->logger) {
                \$this->logger->warning(
                    'The token storage was not populated with remember-me token as the'
                   .' AuthenticationManager rejected the AuthenticationToken returned'
                   .' by the RememberMeServices.', ['exception' => \$e]
                );
            }

            \$this->rememberMeServices->loginFail(\$request, \$e);

            if (!\$this->catchExceptions) {
                throw \$e;
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall/RememberMeListener.php";
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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent;
use Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface;
use Symfony\\Component\\Security\\Http\\SecurityEvents;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * RememberMeListener implements authentication capabilities via a cookie.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @final since Symfony 4.3
 */
class RememberMeListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$tokenStorage;
    private \$rememberMeServices;
    private \$authenticationManager;
    private \$logger;
    private \$dispatcher;
    private \$catchExceptions = true;
    private \$sessionStrategy;

    public function __construct(TokenStorageInterface \$tokenStorage, RememberMeServicesInterface \$rememberMeServices, AuthenticationManagerInterface \$authenticationManager, LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null, bool \$catchExceptions = true, SessionAuthenticationStrategyInterface \$sessionStrategy = null)
    {
        \$this->tokenStorage = \$tokenStorage;
        \$this->rememberMeServices = \$rememberMeServices;
        \$this->authenticationManager = \$authenticationManager;
        \$this->logger = \$logger;
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
        \$this->catchExceptions = \$catchExceptions;
        \$this->sessionStrategy = null === \$sessionStrategy ? new SessionAuthenticationStrategy(SessionAuthenticationStrategy::MIGRATE) : \$sessionStrategy;
    }

    /**
     * Handles remember-me cookie based authentication.
     */
    public function __invoke(RequestEvent \$event)
    {
        if (null !== \$this->tokenStorage->getToken()) {
            return;
        }

        \$request = \$event->getRequest();
        try {
            if (null === \$token = \$this->rememberMeServices->autoLogin(\$request)) {
                return;
            }
        } catch (AuthenticationException \$e) {
            if (null !== \$this->logger) {
                \$this->logger->warning(
                    'The token storage was not populated with remember-me token as the'
                   .' RememberMeServices was not able to create a token from the remember'
                   .' me information.', ['exception' => \$e]
                );
            }

            \$this->rememberMeServices->loginFail(\$request);

            if (!\$this->catchExceptions) {
                throw \$e;
            }

            return;
        }

        try {
            \$token = \$this->authenticationManager->authenticate(\$token);
            if (\$request->hasSession() && \$request->getSession()->isStarted()) {
                \$this->sessionStrategy->onAuthentication(\$request, \$token);
            }
            \$this->tokenStorage->setToken(\$token);

            if (null !== \$this->dispatcher) {
                \$loginEvent = new InteractiveLoginEvent(\$request, \$token);
                \$this->dispatcher->dispatch(\$loginEvent, SecurityEvents::INTERACTIVE_LOGIN);
            }

            if (null !== \$this->logger) {
                \$this->logger->debug('Populated the token storage with a remember-me token.');
            }
        } catch (AuthenticationException \$e) {
            if (null !== \$this->logger) {
                \$this->logger->warning(
                    'The token storage was not populated with remember-me token as the'
                   .' AuthenticationManager rejected the AuthenticationToken returned'
                   .' by the RememberMeServices.', ['exception' => \$e]
                );
            }

            \$this->rememberMeServices->loginFail(\$request, \$e);

            if (!\$this->catchExceptions) {
                throw \$e;
            }
        }
    }
}
", "vendor/symfony/security-http/Firewall/RememberMeListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/RememberMeListener.php");
    }
}
