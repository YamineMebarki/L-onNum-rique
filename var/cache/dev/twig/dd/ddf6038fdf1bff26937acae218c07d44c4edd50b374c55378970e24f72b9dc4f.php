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

/* vendor/symfony/security-http/RememberMe/AbstractRememberMeServices.php */
class __TwigTemplate_6b0fac5b30d3798234328f4bf682f6e1c7449c5aaae17abb6aa09a8878bee733 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/RememberMe/AbstractRememberMeServices.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/RememberMe/AbstractRememberMeServices.php"));

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

namespace Symfony\\Component\\Security\\Http\\RememberMe;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\CookieTheftException;
use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Http\\Logout\\LogoutHandlerInterface;
use Symfony\\Component\\Security\\Http\\ParameterBagUtils;

/**
 * Base class implementing the RememberMeServicesInterface.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
abstract class AbstractRememberMeServices implements RememberMeServicesInterface, LogoutHandlerInterface
{
    const COOKIE_DELIMITER = ':';

    protected \$logger;
    protected \$options = [
        'secure' => false,
        'httponly' => true,
    ];
    private \$providerKey;
    private \$secret;
    private \$userProviders;

    /**
     * @throws \\InvalidArgumentException
     */
    public function __construct(array \$userProviders, string \$secret, string \$providerKey, array \$options = [], LoggerInterface \$logger = null)
    {
        if (empty(\$secret)) {
            throw new \\InvalidArgumentException('\$secret must not be empty.');
        }
        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }
        if (0 === \\count(\$userProviders)) {
            throw new \\InvalidArgumentException('You must provide at least one user provider.');
        }

        \$this->userProviders = \$userProviders;
        \$this->secret = \$secret;
        \$this->providerKey = \$providerKey;
        \$this->options = array_merge(\$this->options, \$options);
        \$this->logger = \$logger;
    }

    /**
     * Returns the parameter that is used for checking whether remember-me
     * services have been requested.
     *
     * @return string
     */
    public function getRememberMeParameter()
    {
        return \$this->options['remember_me_parameter'];
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return \$this->secret;
    }

    /**
     * Implementation of RememberMeServicesInterface. Detects whether a remember-me
     * cookie was set, decodes it, and hands it to subclasses for further processing.
     *
     * @throws CookieTheftException
     * @throws \\RuntimeException
     */
    final public function autoLogin(Request \$request): ?TokenInterface
    {
        if (null === \$cookie = \$request->cookies->get(\$this->options['name'])) {
            return null;
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Remember-me cookie detected.');
        }

        \$cookieParts = \$this->decodeCookie(\$cookie);

        try {
            \$user = \$this->processAutoLoginCookie(\$cookieParts, \$request);

            if (!\$user instanceof UserInterface) {
                throw new \\RuntimeException('processAutoLoginCookie() must return a UserInterface implementation.');
            }

            if (null !== \$this->logger) {
                \$this->logger->info('Remember-me cookie accepted.');
            }

            return new RememberMeToken(\$user, \$this->providerKey, \$this->secret);
        } catch (CookieTheftException \$e) {
            \$this->loginFail(\$request, \$e);

            throw \$e;
        } catch (UsernameNotFoundException \$e) {
            if (null !== \$this->logger) {
                \$this->logger->info('User for remember-me cookie not found.', ['exception' => \$e]);
            }

            \$this->loginFail(\$request, \$e);
        } catch (UnsupportedUserException \$e) {
            if (null !== \$this->logger) {
                \$this->logger->warning('User class for remember-me cookie not supported.', ['exception' => \$e]);
            }

            \$this->loginFail(\$request, \$e);
        } catch (AuthenticationException \$e) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Remember-Me authentication failed.', ['exception' => \$e]);
            }

            \$this->loginFail(\$request, \$e);
        } catch (\\Exception \$e) {
            \$this->loginFail(\$request, \$e);

            throw \$e;
        }

        return null;
    }

    /**
     * Implementation for LogoutHandlerInterface. Deletes the cookie.
     */
    public function logout(Request \$request, Response \$response, TokenInterface \$token)
    {
        \$this->cancelCookie(\$request);
    }

    /**
     * Implementation for RememberMeServicesInterface. Deletes the cookie when
     * an attempted authentication fails.
     */
    final public function loginFail(Request \$request, \\Exception \$exception = null)
    {
        \$this->cancelCookie(\$request);
        \$this->onLoginFail(\$request, \$exception);
    }

    /**
     * Implementation for RememberMeServicesInterface. This is called when an
     * authentication is successful.
     */
    final public function loginSuccess(Request \$request, Response \$response, TokenInterface \$token)
    {
        // Make sure any old remember-me cookies are cancelled
        \$this->cancelCookie(\$request);

        if (!\$token->getUser() instanceof UserInterface) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Remember-me ignores token since it does not contain a UserInterface implementation.');
            }

            return;
        }

        if (!\$this->isRememberMeRequested(\$request)) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Remember-me was not requested.');
            }

            return;
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Remember-me was requested; setting cookie.');
        }

        // Remove attribute from request that sets a NULL cookie.
        // It was set by \$this->cancelCookie()
        // (cancelCookie does other things too for some RememberMeServices
        // so we should still call it at the start of this method)
        \$request->attributes->remove(self::COOKIE_ATTR_NAME);

        \$this->onLoginSuccess(\$request, \$response, \$token);
    }

    /**
     * Subclasses should validate the cookie and do any additional processing
     * that is required. This is called from autoLogin().
     *
     * @return UserInterface
     */
    abstract protected function processAutoLoginCookie(array \$cookieParts, Request \$request);

    protected function onLoginFail(Request \$request, \\Exception \$exception = null)
    {
    }

    /**
     * This is called after a user has been logged in successfully, and has
     * requested remember-me capabilities. The implementation usually sets a
     * cookie and possibly stores a persistent record of it.
     */
    abstract protected function onLoginSuccess(Request \$request, Response \$response, TokenInterface \$token);

    final protected function getUserProvider(\$class)
    {
        foreach (\$this->userProviders as \$provider) {
            if (\$provider->supportsClass(\$class)) {
                return \$provider;
            }
        }

        throw new UnsupportedUserException(sprintf('There is no user provider that supports class \"%s\".', \$class));
    }

    /**
     * Decodes the raw cookie value.
     *
     * @param string \$rawCookie
     *
     * @return array
     */
    protected function decodeCookie(\$rawCookie)
    {
        return explode(self::COOKIE_DELIMITER, base64_decode(\$rawCookie));
    }

    /**
     * Encodes the cookie parts.
     *
     * @return string
     *
     * @throws \\InvalidArgumentException When \$cookieParts contain the cookie delimiter. Extending class should either remove or escape it.
     */
    protected function encodeCookie(array \$cookieParts)
    {
        foreach (\$cookieParts as \$cookiePart) {
            if (false !== strpos(\$cookiePart, self::COOKIE_DELIMITER)) {
                throw new \\InvalidArgumentException(sprintf('\$cookieParts should not contain the cookie delimiter \"%s\"', self::COOKIE_DELIMITER));
            }
        }

        return base64_encode(implode(self::COOKIE_DELIMITER, \$cookieParts));
    }

    /**
     * Deletes the remember-me cookie.
     */
    protected function cancelCookie(Request \$request)
    {
        if (null !== \$this->logger) {
            \$this->logger->debug('Clearing remember-me cookie.', ['name' => \$this->options['name']]);
        }

        \$request->attributes->set(self::COOKIE_ATTR_NAME, new Cookie(\$this->options['name'], null, 1, \$this->options['path'], \$this->options['domain'], \$this->options['secure'] ?? \$request->isSecure(), \$this->options['httponly'], false, \$this->options['samesite'] ?? null));
    }

    /**
     * Checks whether remember-me capabilities were requested.
     *
     * @return bool
     */
    protected function isRememberMeRequested(Request \$request)
    {
        if (true === \$this->options['always_remember_me']) {
            return true;
        }

        \$parameter = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['remember_me_parameter']);

        if (null === \$parameter && null !== \$this->logger) {
            \$this->logger->debug('Did not send remember-me cookie.', ['parameter' => \$this->options['remember_me_parameter']]);
        }

        return 'true' === \$parameter || 'on' === \$parameter || '1' === \$parameter || 'yes' === \$parameter || true === \$parameter;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/RememberMe/AbstractRememberMeServices.php";
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

namespace Symfony\\Component\\Security\\Http\\RememberMe;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\CookieTheftException;
use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Http\\Logout\\LogoutHandlerInterface;
use Symfony\\Component\\Security\\Http\\ParameterBagUtils;

/**
 * Base class implementing the RememberMeServicesInterface.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
abstract class AbstractRememberMeServices implements RememberMeServicesInterface, LogoutHandlerInterface
{
    const COOKIE_DELIMITER = ':';

    protected \$logger;
    protected \$options = [
        'secure' => false,
        'httponly' => true,
    ];
    private \$providerKey;
    private \$secret;
    private \$userProviders;

    /**
     * @throws \\InvalidArgumentException
     */
    public function __construct(array \$userProviders, string \$secret, string \$providerKey, array \$options = [], LoggerInterface \$logger = null)
    {
        if (empty(\$secret)) {
            throw new \\InvalidArgumentException('\$secret must not be empty.');
        }
        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }
        if (0 === \\count(\$userProviders)) {
            throw new \\InvalidArgumentException('You must provide at least one user provider.');
        }

        \$this->userProviders = \$userProviders;
        \$this->secret = \$secret;
        \$this->providerKey = \$providerKey;
        \$this->options = array_merge(\$this->options, \$options);
        \$this->logger = \$logger;
    }

    /**
     * Returns the parameter that is used for checking whether remember-me
     * services have been requested.
     *
     * @return string
     */
    public function getRememberMeParameter()
    {
        return \$this->options['remember_me_parameter'];
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return \$this->secret;
    }

    /**
     * Implementation of RememberMeServicesInterface. Detects whether a remember-me
     * cookie was set, decodes it, and hands it to subclasses for further processing.
     *
     * @throws CookieTheftException
     * @throws \\RuntimeException
     */
    final public function autoLogin(Request \$request): ?TokenInterface
    {
        if (null === \$cookie = \$request->cookies->get(\$this->options['name'])) {
            return null;
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Remember-me cookie detected.');
        }

        \$cookieParts = \$this->decodeCookie(\$cookie);

        try {
            \$user = \$this->processAutoLoginCookie(\$cookieParts, \$request);

            if (!\$user instanceof UserInterface) {
                throw new \\RuntimeException('processAutoLoginCookie() must return a UserInterface implementation.');
            }

            if (null !== \$this->logger) {
                \$this->logger->info('Remember-me cookie accepted.');
            }

            return new RememberMeToken(\$user, \$this->providerKey, \$this->secret);
        } catch (CookieTheftException \$e) {
            \$this->loginFail(\$request, \$e);

            throw \$e;
        } catch (UsernameNotFoundException \$e) {
            if (null !== \$this->logger) {
                \$this->logger->info('User for remember-me cookie not found.', ['exception' => \$e]);
            }

            \$this->loginFail(\$request, \$e);
        } catch (UnsupportedUserException \$e) {
            if (null !== \$this->logger) {
                \$this->logger->warning('User class for remember-me cookie not supported.', ['exception' => \$e]);
            }

            \$this->loginFail(\$request, \$e);
        } catch (AuthenticationException \$e) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Remember-Me authentication failed.', ['exception' => \$e]);
            }

            \$this->loginFail(\$request, \$e);
        } catch (\\Exception \$e) {
            \$this->loginFail(\$request, \$e);

            throw \$e;
        }

        return null;
    }

    /**
     * Implementation for LogoutHandlerInterface. Deletes the cookie.
     */
    public function logout(Request \$request, Response \$response, TokenInterface \$token)
    {
        \$this->cancelCookie(\$request);
    }

    /**
     * Implementation for RememberMeServicesInterface. Deletes the cookie when
     * an attempted authentication fails.
     */
    final public function loginFail(Request \$request, \\Exception \$exception = null)
    {
        \$this->cancelCookie(\$request);
        \$this->onLoginFail(\$request, \$exception);
    }

    /**
     * Implementation for RememberMeServicesInterface. This is called when an
     * authentication is successful.
     */
    final public function loginSuccess(Request \$request, Response \$response, TokenInterface \$token)
    {
        // Make sure any old remember-me cookies are cancelled
        \$this->cancelCookie(\$request);

        if (!\$token->getUser() instanceof UserInterface) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Remember-me ignores token since it does not contain a UserInterface implementation.');
            }

            return;
        }

        if (!\$this->isRememberMeRequested(\$request)) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Remember-me was not requested.');
            }

            return;
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Remember-me was requested; setting cookie.');
        }

        // Remove attribute from request that sets a NULL cookie.
        // It was set by \$this->cancelCookie()
        // (cancelCookie does other things too for some RememberMeServices
        // so we should still call it at the start of this method)
        \$request->attributes->remove(self::COOKIE_ATTR_NAME);

        \$this->onLoginSuccess(\$request, \$response, \$token);
    }

    /**
     * Subclasses should validate the cookie and do any additional processing
     * that is required. This is called from autoLogin().
     *
     * @return UserInterface
     */
    abstract protected function processAutoLoginCookie(array \$cookieParts, Request \$request);

    protected function onLoginFail(Request \$request, \\Exception \$exception = null)
    {
    }

    /**
     * This is called after a user has been logged in successfully, and has
     * requested remember-me capabilities. The implementation usually sets a
     * cookie and possibly stores a persistent record of it.
     */
    abstract protected function onLoginSuccess(Request \$request, Response \$response, TokenInterface \$token);

    final protected function getUserProvider(\$class)
    {
        foreach (\$this->userProviders as \$provider) {
            if (\$provider->supportsClass(\$class)) {
                return \$provider;
            }
        }

        throw new UnsupportedUserException(sprintf('There is no user provider that supports class \"%s\".', \$class));
    }

    /**
     * Decodes the raw cookie value.
     *
     * @param string \$rawCookie
     *
     * @return array
     */
    protected function decodeCookie(\$rawCookie)
    {
        return explode(self::COOKIE_DELIMITER, base64_decode(\$rawCookie));
    }

    /**
     * Encodes the cookie parts.
     *
     * @return string
     *
     * @throws \\InvalidArgumentException When \$cookieParts contain the cookie delimiter. Extending class should either remove or escape it.
     */
    protected function encodeCookie(array \$cookieParts)
    {
        foreach (\$cookieParts as \$cookiePart) {
            if (false !== strpos(\$cookiePart, self::COOKIE_DELIMITER)) {
                throw new \\InvalidArgumentException(sprintf('\$cookieParts should not contain the cookie delimiter \"%s\"', self::COOKIE_DELIMITER));
            }
        }

        return base64_encode(implode(self::COOKIE_DELIMITER, \$cookieParts));
    }

    /**
     * Deletes the remember-me cookie.
     */
    protected function cancelCookie(Request \$request)
    {
        if (null !== \$this->logger) {
            \$this->logger->debug('Clearing remember-me cookie.', ['name' => \$this->options['name']]);
        }

        \$request->attributes->set(self::COOKIE_ATTR_NAME, new Cookie(\$this->options['name'], null, 1, \$this->options['path'], \$this->options['domain'], \$this->options['secure'] ?? \$request->isSecure(), \$this->options['httponly'], false, \$this->options['samesite'] ?? null));
    }

    /**
     * Checks whether remember-me capabilities were requested.
     *
     * @return bool
     */
    protected function isRememberMeRequested(Request \$request)
    {
        if (true === \$this->options['always_remember_me']) {
            return true;
        }

        \$parameter = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['remember_me_parameter']);

        if (null === \$parameter && null !== \$this->logger) {
            \$this->logger->debug('Did not send remember-me cookie.', ['parameter' => \$this->options['remember_me_parameter']]);
        }

        return 'true' === \$parameter || 'on' === \$parameter || '1' === \$parameter || 'yes' === \$parameter || true === \$parameter;
    }
}
", "vendor/symfony/security-http/RememberMe/AbstractRememberMeServices.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/RememberMe/AbstractRememberMeServices.php");
    }
}
