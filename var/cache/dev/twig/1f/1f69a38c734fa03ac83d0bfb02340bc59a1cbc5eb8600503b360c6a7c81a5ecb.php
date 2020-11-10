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

/* vendor/symfony/security-http/Firewall/SimpleFormAuthenticationListener.php */
class __TwigTemplate_bd03e73cb1d7c9e659dcf14bb2deb54c830613d6898c305b9a00731bacb9574a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/SimpleFormAuthenticationListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/SimpleFormAuthenticationListener.php"));

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
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Exception\\InvalidCsrfTokenException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\SimpleFormAuthenticatorInterface;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\ParameterBagUtils;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use Guard instead.', SimpleFormAuthenticationListener::class), E_USER_DEPRECATED);

/**
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimpleFormAuthenticationListener extends AbstractAuthenticationListener
{
    private \$simpleAuthenticator;
    private \$csrfTokenManager;

    /**
     * @throws \\InvalidArgumentException In case no simple authenticator is provided
     */
    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, SessionAuthenticationStrategyInterface \$sessionStrategy, HttpUtils \$httpUtils, string \$providerKey, AuthenticationSuccessHandlerInterface \$successHandler, AuthenticationFailureHandlerInterface \$failureHandler, array \$options = [], LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null, CsrfTokenManagerInterface \$csrfTokenManager = null, SimpleFormAuthenticatorInterface \$simpleAuthenticator = null)
    {
        if (!\$simpleAuthenticator) {
            throw new \\InvalidArgumentException('Missing simple authenticator');
        }

        \$this->simpleAuthenticator = \$simpleAuthenticator;
        \$this->csrfTokenManager = \$csrfTokenManager;

        \$options = array_merge([
            'username_parameter' => '_username',
            'password_parameter' => '_password',
            'csrf_parameter' => '_csrf_token',
            'csrf_token_id' => 'authenticate',
            'post_only' => true,
        ], \$options);

        parent::__construct(\$tokenStorage, \$authenticationManager, \$sessionStrategy, \$httpUtils, \$providerKey, \$successHandler, \$failureHandler, \$options, \$logger, \$dispatcher);
    }

    /**
     * {@inheritdoc}
     */
    protected function requiresAuthentication(Request \$request)
    {
        if (\$this->options['post_only'] && !\$request->isMethod('POST')) {
            return false;
        }

        return parent::requiresAuthentication(\$request);
    }

    /**
     * {@inheritdoc}
     */
    protected function attemptAuthentication(Request \$request)
    {
        if (null !== \$this->csrfTokenManager) {
            \$csrfToken = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['csrf_parameter']);

            if (false === \$this->csrfTokenManager->isTokenValid(new CsrfToken(\$this->options['csrf_token_id'], \$csrfToken))) {
                throw new InvalidCsrfTokenException('Invalid CSRF token.');
            }
        }

        if (\$this->options['post_only']) {
            \$username = ParameterBagUtils::getParameterBagValue(\$request->request, \$this->options['username_parameter']);
            \$password = ParameterBagUtils::getParameterBagValue(\$request->request, \$this->options['password_parameter']);
        } else {
            \$username = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['username_parameter']);
            \$password = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['password_parameter']);
        }

        if (!\\is_string(\$username) && (!\\is_object(\$username) || !method_exists(\$username, '__toString'))) {
            throw new BadRequestHttpException(sprintf('The key \"%s\" must be a string, \"%s\" given.', \$this->options['username_parameter'], \\gettype(\$username)));
        }

        \$username = trim(\$username);

        if (\\strlen(\$username) > Security::MAX_USERNAME_LENGTH) {
            throw new BadCredentialsException('Invalid username.');
        }

        \$request->getSession()->set(Security::LAST_USERNAME, \$username);

        \$token = \$this->simpleAuthenticator->createToken(\$request, \$username, \$password, \$this->providerKey);

        return \$this->authenticationManager->authenticate(\$token);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall/SimpleFormAuthenticationListener.php";
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
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Exception\\InvalidCsrfTokenException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\SimpleFormAuthenticatorInterface;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\ParameterBagUtils;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2, use Guard instead.', SimpleFormAuthenticationListener::class), E_USER_DEPRECATED);

/**
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since Symfony 4.2, use Guard instead.
 */
class SimpleFormAuthenticationListener extends AbstractAuthenticationListener
{
    private \$simpleAuthenticator;
    private \$csrfTokenManager;

    /**
     * @throws \\InvalidArgumentException In case no simple authenticator is provided
     */
    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, SessionAuthenticationStrategyInterface \$sessionStrategy, HttpUtils \$httpUtils, string \$providerKey, AuthenticationSuccessHandlerInterface \$successHandler, AuthenticationFailureHandlerInterface \$failureHandler, array \$options = [], LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null, CsrfTokenManagerInterface \$csrfTokenManager = null, SimpleFormAuthenticatorInterface \$simpleAuthenticator = null)
    {
        if (!\$simpleAuthenticator) {
            throw new \\InvalidArgumentException('Missing simple authenticator');
        }

        \$this->simpleAuthenticator = \$simpleAuthenticator;
        \$this->csrfTokenManager = \$csrfTokenManager;

        \$options = array_merge([
            'username_parameter' => '_username',
            'password_parameter' => '_password',
            'csrf_parameter' => '_csrf_token',
            'csrf_token_id' => 'authenticate',
            'post_only' => true,
        ], \$options);

        parent::__construct(\$tokenStorage, \$authenticationManager, \$sessionStrategy, \$httpUtils, \$providerKey, \$successHandler, \$failureHandler, \$options, \$logger, \$dispatcher);
    }

    /**
     * {@inheritdoc}
     */
    protected function requiresAuthentication(Request \$request)
    {
        if (\$this->options['post_only'] && !\$request->isMethod('POST')) {
            return false;
        }

        return parent::requiresAuthentication(\$request);
    }

    /**
     * {@inheritdoc}
     */
    protected function attemptAuthentication(Request \$request)
    {
        if (null !== \$this->csrfTokenManager) {
            \$csrfToken = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['csrf_parameter']);

            if (false === \$this->csrfTokenManager->isTokenValid(new CsrfToken(\$this->options['csrf_token_id'], \$csrfToken))) {
                throw new InvalidCsrfTokenException('Invalid CSRF token.');
            }
        }

        if (\$this->options['post_only']) {
            \$username = ParameterBagUtils::getParameterBagValue(\$request->request, \$this->options['username_parameter']);
            \$password = ParameterBagUtils::getParameterBagValue(\$request->request, \$this->options['password_parameter']);
        } else {
            \$username = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['username_parameter']);
            \$password = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['password_parameter']);
        }

        if (!\\is_string(\$username) && (!\\is_object(\$username) || !method_exists(\$username, '__toString'))) {
            throw new BadRequestHttpException(sprintf('The key \"%s\" must be a string, \"%s\" given.', \$this->options['username_parameter'], \\gettype(\$username)));
        }

        \$username = trim(\$username);

        if (\\strlen(\$username) > Security::MAX_USERNAME_LENGTH) {
            throw new BadCredentialsException('Invalid username.');
        }

        \$request->getSession()->set(Security::LAST_USERNAME, \$username);

        \$token = \$this->simpleAuthenticator->createToken(\$request, \$username, \$password, \$this->providerKey);

        return \$this->authenticationManager->authenticate(\$token);
    }
}
", "vendor/symfony/security-http/Firewall/SimpleFormAuthenticationListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/SimpleFormAuthenticationListener.php");
    }
}
