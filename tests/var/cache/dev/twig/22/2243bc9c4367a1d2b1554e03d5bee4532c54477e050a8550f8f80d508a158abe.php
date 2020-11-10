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

/* vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php */
class __TwigTemplate_80246f98a48e1b44a1a94726817a537201ddd10ed2de8060f78e7d1aabd81180 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php"));

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
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Exception\\InvalidCsrfTokenException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\ParameterBagUtils;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * UsernamePasswordFormAuthenticationListener is the default implementation of
 * an authentication via a simple form composed of a username and a password.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UsernamePasswordFormAuthenticationListener extends AbstractAuthenticationListener
{
    private \$csrfTokenManager;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, SessionAuthenticationStrategyInterface \$sessionStrategy, HttpUtils \$httpUtils, string \$providerKey, AuthenticationSuccessHandlerInterface \$successHandler, AuthenticationFailureHandlerInterface \$failureHandler, array \$options = [], LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null, CsrfTokenManagerInterface \$csrfTokenManager = null)
    {
        parent::__construct(\$tokenStorage, \$authenticationManager, \$sessionStrategy, \$httpUtils, \$providerKey, \$successHandler, \$failureHandler, array_merge([
            'username_parameter' => '_username',
            'password_parameter' => '_password',
            'csrf_parameter' => '_csrf_token',
            'csrf_token_id' => 'authenticate',
            'post_only' => true,
        ], \$options), \$logger, \$dispatcher);

        \$this->csrfTokenManager = \$csrfTokenManager;
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

        return \$this->authenticationManager->authenticate(new UsernamePasswordToken(\$username, \$password, \$this->providerKey));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php";
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
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\Exception\\InvalidCsrfTokenException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\ParameterBagUtils;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * UsernamePasswordFormAuthenticationListener is the default implementation of
 * an authentication via a simple form composed of a username and a password.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UsernamePasswordFormAuthenticationListener extends AbstractAuthenticationListener
{
    private \$csrfTokenManager;

    public function __construct(TokenStorageInterface \$tokenStorage, AuthenticationManagerInterface \$authenticationManager, SessionAuthenticationStrategyInterface \$sessionStrategy, HttpUtils \$httpUtils, string \$providerKey, AuthenticationSuccessHandlerInterface \$successHandler, AuthenticationFailureHandlerInterface \$failureHandler, array \$options = [], LoggerInterface \$logger = null, EventDispatcherInterface \$dispatcher = null, CsrfTokenManagerInterface \$csrfTokenManager = null)
    {
        parent::__construct(\$tokenStorage, \$authenticationManager, \$sessionStrategy, \$httpUtils, \$providerKey, \$successHandler, \$failureHandler, array_merge([
            'username_parameter' => '_username',
            'password_parameter' => '_password',
            'csrf_parameter' => '_csrf_token',
            'csrf_token_id' => 'authenticate',
            'post_only' => true,
        ], \$options), \$logger, \$dispatcher);

        \$this->csrfTokenManager = \$csrfTokenManager;
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

        return \$this->authenticationManager->authenticate(new UsernamePasswordToken(\$username, \$password, \$this->providerKey));
    }
}
", "vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php");
    }
}
