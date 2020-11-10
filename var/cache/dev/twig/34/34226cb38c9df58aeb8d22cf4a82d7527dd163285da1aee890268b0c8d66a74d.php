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

/* vendor/symfony/security-http/Authentication/SimpleAuthenticationHandler.php */
class __TwigTemplate_c64734b1973548b596f9715d8d89d195dc4a1a2db53b3ac1c246f3398d9948c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Authentication/SimpleAuthenticationHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Authentication/SimpleAuthenticationHandler.php"));

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

namespace Symfony\\Component\\Security\\Http\\Authentication;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use Guard instead.', SimpleAuthenticationHandler::class), E_USER_DEPRECATED);

/**
 * Class to proxy authentication success/failure handlers.
 *
 * Events are sent to the SimpleAuthenticatorInterface if it implements
 * the right interface, otherwise (or if it fails to return a Response)
 * the default handlers are triggered.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimpleAuthenticationHandler implements AuthenticationFailureHandlerInterface, AuthenticationSuccessHandlerInterface
{
    protected \$successHandler;
    protected \$failureHandler;
    protected \$simpleAuthenticator;
    protected \$logger;

    /**
     * @param SimpleAuthenticatorInterface          \$authenticator  SimpleAuthenticatorInterface instance
     * @param AuthenticationSuccessHandlerInterface \$successHandler Default success handler
     * @param AuthenticationFailureHandlerInterface \$failureHandler Default failure handler
     * @param LoggerInterface                       \$logger         Optional logger
     */
    public function __construct(SimpleAuthenticatorInterface \$authenticator, AuthenticationSuccessHandlerInterface \$successHandler, AuthenticationFailureHandlerInterface \$failureHandler, LoggerInterface \$logger = null)
    {
        \$this->simpleAuthenticator = \$authenticator;
        \$this->successHandler = \$successHandler;
        \$this->failureHandler = \$failureHandler;
        \$this->logger = \$logger;
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token)
    {
        if (\$this->simpleAuthenticator instanceof AuthenticationSuccessHandlerInterface) {
            if (\$this->logger) {
                \$this->logger->debug('Selected an authentication success handler.', ['handler' => \\get_class(\$this->simpleAuthenticator)]);
            }

            \$response = \$this->simpleAuthenticator->onAuthenticationSuccess(\$request, \$token);
            if (\$response instanceof Response) {
                return \$response;
            }

            if (null !== \$response) {
                throw new \\UnexpectedValueException(sprintf('The %s::onAuthenticationSuccess method must return null to use the default success handler, or a Response object', \\get_class(\$this->simpleAuthenticator)));
            }
        }

        if (\$this->logger) {
            \$this->logger->debug('Fallback to the default authentication success handler.');
        }

        return \$this->successHandler->onAuthenticationSuccess(\$request, \$token);
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationFailure(Request \$request, AuthenticationException \$exception)
    {
        if (\$this->simpleAuthenticator instanceof AuthenticationFailureHandlerInterface) {
            if (\$this->logger) {
                \$this->logger->debug('Selected an authentication failure handler.', ['handler' => \\get_class(\$this->simpleAuthenticator)]);
            }

            \$response = \$this->simpleAuthenticator->onAuthenticationFailure(\$request, \$exception);
            if (\$response instanceof Response) {
                return \$response;
            }

            if (null !== \$response) {
                throw new \\UnexpectedValueException(sprintf('The %s::onAuthenticationFailure method must return null to use the default failure handler, or a Response object', \\get_class(\$this->simpleAuthenticator)));
            }
        }

        if (\$this->logger) {
            \$this->logger->debug('Fallback to the default authentication failure handler.');
        }

        return \$this->failureHandler->onAuthenticationFailure(\$request, \$exception);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Authentication/SimpleAuthenticationHandler.php";
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

namespace Symfony\\Component\\Security\\Http\\Authentication;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use Guard instead.', SimpleAuthenticationHandler::class), E_USER_DEPRECATED);

/**
 * Class to proxy authentication success/failure handlers.
 *
 * Events are sent to the SimpleAuthenticatorInterface if it implements
 * the right interface, otherwise (or if it fails to return a Response)
 * the default handlers are triggered.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimpleAuthenticationHandler implements AuthenticationFailureHandlerInterface, AuthenticationSuccessHandlerInterface
{
    protected \$successHandler;
    protected \$failureHandler;
    protected \$simpleAuthenticator;
    protected \$logger;

    /**
     * @param SimpleAuthenticatorInterface          \$authenticator  SimpleAuthenticatorInterface instance
     * @param AuthenticationSuccessHandlerInterface \$successHandler Default success handler
     * @param AuthenticationFailureHandlerInterface \$failureHandler Default failure handler
     * @param LoggerInterface                       \$logger         Optional logger
     */
    public function __construct(SimpleAuthenticatorInterface \$authenticator, AuthenticationSuccessHandlerInterface \$successHandler, AuthenticationFailureHandlerInterface \$failureHandler, LoggerInterface \$logger = null)
    {
        \$this->simpleAuthenticator = \$authenticator;
        \$this->successHandler = \$successHandler;
        \$this->failureHandler = \$failureHandler;
        \$this->logger = \$logger;
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token)
    {
        if (\$this->simpleAuthenticator instanceof AuthenticationSuccessHandlerInterface) {
            if (\$this->logger) {
                \$this->logger->debug('Selected an authentication success handler.', ['handler' => \\get_class(\$this->simpleAuthenticator)]);
            }

            \$response = \$this->simpleAuthenticator->onAuthenticationSuccess(\$request, \$token);
            if (\$response instanceof Response) {
                return \$response;
            }

            if (null !== \$response) {
                throw new \\UnexpectedValueException(sprintf('The %s::onAuthenticationSuccess method must return null to use the default success handler, or a Response object', \\get_class(\$this->simpleAuthenticator)));
            }
        }

        if (\$this->logger) {
            \$this->logger->debug('Fallback to the default authentication success handler.');
        }

        return \$this->successHandler->onAuthenticationSuccess(\$request, \$token);
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationFailure(Request \$request, AuthenticationException \$exception)
    {
        if (\$this->simpleAuthenticator instanceof AuthenticationFailureHandlerInterface) {
            if (\$this->logger) {
                \$this->logger->debug('Selected an authentication failure handler.', ['handler' => \\get_class(\$this->simpleAuthenticator)]);
            }

            \$response = \$this->simpleAuthenticator->onAuthenticationFailure(\$request, \$exception);
            if (\$response instanceof Response) {
                return \$response;
            }

            if (null !== \$response) {
                throw new \\UnexpectedValueException(sprintf('The %s::onAuthenticationFailure method must return null to use the default failure handler, or a Response object', \\get_class(\$this->simpleAuthenticator)));
            }
        }

        if (\$this->logger) {
            \$this->logger->debug('Fallback to the default authentication failure handler.');
        }

        return \$this->failureHandler->onAuthenticationFailure(\$request, \$exception);
    }
}
", "vendor/symfony/security-http/Authentication/SimpleAuthenticationHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Authentication/SimpleAuthenticationHandler.php");
    }
}
