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

/* vendor/symfony/security-http/RememberMe/PersistentTokenBasedRememberMeServices.php */
class __TwigTemplate_f42fd16f525078b86d4ea75f2dbf84c3babe65a730d12df60371a2a87b110c17 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/RememberMe/PersistentTokenBasedRememberMeServices.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/RememberMe/PersistentTokenBasedRememberMeServices.php"));

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

use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\PersistentToken;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\CookieTheftException;

/**
 * Concrete implementation of the RememberMeServicesInterface which needs
 * an implementation of TokenProviderInterface for providing remember-me
 * capabilities.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class PersistentTokenBasedRememberMeServices extends AbstractRememberMeServices
{
    /** @var TokenProviderInterface */
    private \$tokenProvider;

    public function setTokenProvider(TokenProviderInterface \$tokenProvider)
    {
        \$this->tokenProvider = \$tokenProvider;
    }

    /**
     * {@inheritdoc}
     */
    protected function cancelCookie(Request \$request)
    {
        // Delete cookie on the client
        parent::cancelCookie(\$request);

        // Delete cookie from the tokenProvider
        if (null !== (\$cookie = \$request->cookies->get(\$this->options['name']))
            && 2 === \\count(\$parts = \$this->decodeCookie(\$cookie))
        ) {
            list(\$series) = \$parts;
            \$this->tokenProvider->deleteTokenBySeries(\$series);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processAutoLoginCookie(array \$cookieParts, Request \$request)
    {
        if (2 !== \\count(\$cookieParts)) {
            throw new AuthenticationException('The cookie is invalid.');
        }

        list(\$series, \$tokenValue) = \$cookieParts;
        \$persistentToken = \$this->tokenProvider->loadTokenBySeries(\$series);

        if (!hash_equals(\$persistentToken->getTokenValue(), \$tokenValue)) {
            throw new CookieTheftException('This token was already used. The account is possibly compromised.');
        }

        if (\$persistentToken->getLastUsed()->getTimestamp() + \$this->options['lifetime'] < time()) {
            throw new AuthenticationException('The cookie has expired.');
        }

        \$tokenValue = base64_encode(random_bytes(64));
        \$this->tokenProvider->updateToken(\$series, \$tokenValue, new \\DateTime());
        \$request->attributes->set(self::COOKIE_ATTR_NAME,
            new Cookie(
                \$this->options['name'],
                \$this->encodeCookie([\$series, \$tokenValue]),
                time() + \$this->options['lifetime'],
                \$this->options['path'],
                \$this->options['domain'],
                \$this->options['secure'] ?? \$request->isSecure(),
                \$this->options['httponly'],
                false,
                \$this->options['samesite'] ?? null
            )
        );

        return \$this->getUserProvider(\$persistentToken->getClass())->loadUserByUsername(\$persistentToken->getUsername());
    }

    /**
     * {@inheritdoc}
     */
    protected function onLoginSuccess(Request \$request, Response \$response, TokenInterface \$token)
    {
        \$series = base64_encode(random_bytes(64));
        \$tokenValue = base64_encode(random_bytes(64));

        \$this->tokenProvider->createNewToken(
            new PersistentToken(
                \\get_class(\$user = \$token->getUser()),
                \$user->getUsername(),
                \$series,
                \$tokenValue,
                new \\DateTime()
            )
        );

        \$response->headers->setCookie(
            new Cookie(
                \$this->options['name'],
                \$this->encodeCookie([\$series, \$tokenValue]),
                time() + \$this->options['lifetime'],
                \$this->options['path'],
                \$this->options['domain'],
                \$this->options['secure'] ?? \$request->isSecure(),
                \$this->options['httponly'],
                false,
                \$this->options['samesite'] ?? null
            )
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/RememberMe/PersistentTokenBasedRememberMeServices.php";
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

use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\PersistentToken;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\CookieTheftException;

/**
 * Concrete implementation of the RememberMeServicesInterface which needs
 * an implementation of TokenProviderInterface for providing remember-me
 * capabilities.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class PersistentTokenBasedRememberMeServices extends AbstractRememberMeServices
{
    /** @var TokenProviderInterface */
    private \$tokenProvider;

    public function setTokenProvider(TokenProviderInterface \$tokenProvider)
    {
        \$this->tokenProvider = \$tokenProvider;
    }

    /**
     * {@inheritdoc}
     */
    protected function cancelCookie(Request \$request)
    {
        // Delete cookie on the client
        parent::cancelCookie(\$request);

        // Delete cookie from the tokenProvider
        if (null !== (\$cookie = \$request->cookies->get(\$this->options['name']))
            && 2 === \\count(\$parts = \$this->decodeCookie(\$cookie))
        ) {
            list(\$series) = \$parts;
            \$this->tokenProvider->deleteTokenBySeries(\$series);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processAutoLoginCookie(array \$cookieParts, Request \$request)
    {
        if (2 !== \\count(\$cookieParts)) {
            throw new AuthenticationException('The cookie is invalid.');
        }

        list(\$series, \$tokenValue) = \$cookieParts;
        \$persistentToken = \$this->tokenProvider->loadTokenBySeries(\$series);

        if (!hash_equals(\$persistentToken->getTokenValue(), \$tokenValue)) {
            throw new CookieTheftException('This token was already used. The account is possibly compromised.');
        }

        if (\$persistentToken->getLastUsed()->getTimestamp() + \$this->options['lifetime'] < time()) {
            throw new AuthenticationException('The cookie has expired.');
        }

        \$tokenValue = base64_encode(random_bytes(64));
        \$this->tokenProvider->updateToken(\$series, \$tokenValue, new \\DateTime());
        \$request->attributes->set(self::COOKIE_ATTR_NAME,
            new Cookie(
                \$this->options['name'],
                \$this->encodeCookie([\$series, \$tokenValue]),
                time() + \$this->options['lifetime'],
                \$this->options['path'],
                \$this->options['domain'],
                \$this->options['secure'] ?? \$request->isSecure(),
                \$this->options['httponly'],
                false,
                \$this->options['samesite'] ?? null
            )
        );

        return \$this->getUserProvider(\$persistentToken->getClass())->loadUserByUsername(\$persistentToken->getUsername());
    }

    /**
     * {@inheritdoc}
     */
    protected function onLoginSuccess(Request \$request, Response \$response, TokenInterface \$token)
    {
        \$series = base64_encode(random_bytes(64));
        \$tokenValue = base64_encode(random_bytes(64));

        \$this->tokenProvider->createNewToken(
            new PersistentToken(
                \\get_class(\$user = \$token->getUser()),
                \$user->getUsername(),
                \$series,
                \$tokenValue,
                new \\DateTime()
            )
        );

        \$response->headers->setCookie(
            new Cookie(
                \$this->options['name'],
                \$this->encodeCookie([\$series, \$tokenValue]),
                time() + \$this->options['lifetime'],
                \$this->options['path'],
                \$this->options['domain'],
                \$this->options['secure'] ?? \$request->isSecure(),
                \$this->options['httponly'],
                false,
                \$this->options['samesite'] ?? null
            )
        );
    }
}
", "vendor/symfony/security-http/RememberMe/PersistentTokenBasedRememberMeServices.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/RememberMe/PersistentTokenBasedRememberMeServices.php");
    }
}
