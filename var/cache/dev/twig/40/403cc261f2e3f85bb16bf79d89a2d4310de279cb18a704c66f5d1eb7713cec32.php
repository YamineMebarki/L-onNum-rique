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

/* vendor/symfony/security-http/RememberMe/TokenBasedRememberMeServices.php */
class __TwigTemplate_ecde563d41fffb5d60ff6c948bd43b8151edc6be41ffe22e06c07bb1a1aa694d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/RememberMe/TokenBasedRememberMeServices.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/RememberMe/TokenBasedRememberMeServices.php"));

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
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Concrete implementation of the RememberMeServicesInterface providing
 * remember-me capabilities without requiring a TokenProvider.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class TokenBasedRememberMeServices extends AbstractRememberMeServices
{
    /**
     * {@inheritdoc}
     */
    protected function processAutoLoginCookie(array \$cookieParts, Request \$request)
    {
        if (4 !== \\count(\$cookieParts)) {
            throw new AuthenticationException('The cookie is invalid.');
        }

        list(\$class, \$username, \$expires, \$hash) = \$cookieParts;
        if (false === \$username = base64_decode(\$username, true)) {
            throw new AuthenticationException('\$username contains a character from outside the base64 alphabet.');
        }
        try {
            \$user = \$this->getUserProvider(\$class)->loadUserByUsername(\$username);
        } catch (\\Exception \$e) {
            if (!\$e instanceof AuthenticationException) {
                \$e = new AuthenticationException(\$e->getMessage(), \$e->getCode(), \$e);
            }

            throw \$e;
        }

        if (!\$user instanceof UserInterface) {
            throw new \\RuntimeException(sprintf('The UserProviderInterface implementation must return an instance of UserInterface, but returned \"%s\".', \\get_class(\$user)));
        }

        if (true !== hash_equals(\$this->generateCookieHash(\$class, \$username, \$expires, \$user->getPassword()), \$hash)) {
            throw new AuthenticationException('The cookie\\'s hash is invalid.');
        }

        if (\$expires < time()) {
            throw new AuthenticationException('The cookie has expired.');
        }

        return \$user;
    }

    /**
     * {@inheritdoc}
     */
    protected function onLoginSuccess(Request \$request, Response \$response, TokenInterface \$token)
    {
        \$user = \$token->getUser();
        \$expires = time() + \$this->options['lifetime'];
        \$value = \$this->generateCookieValue(\\get_class(\$user), \$user->getUsername(), \$expires, \$user->getPassword());

        \$response->headers->setCookie(
            new Cookie(
                \$this->options['name'],
                \$value,
                \$expires,
                \$this->options['path'],
                \$this->options['domain'],
                \$this->options['secure'] ?? \$request->isSecure(),
                \$this->options['httponly'],
                false,
                \$this->options['samesite'] ?? null
            )
        );
    }

    /**
     * Generates the cookie value.
     *
     * @param string \$class
     * @param string \$username The username
     * @param int    \$expires  The Unix timestamp when the cookie expires
     * @param string \$password The encoded password
     *
     * @return string
     */
    protected function generateCookieValue(\$class, \$username, \$expires, \$password)
    {
        // \$username is encoded because it might contain COOKIE_DELIMITER,
        // we assume other values don't
        return \$this->encodeCookie([
            \$class,
            base64_encode(\$username),
            \$expires,
            \$this->generateCookieHash(\$class, \$username, \$expires, \$password),
        ]);
    }

    /**
     * Generates a hash for the cookie to ensure it is not being tampered with.
     *
     * @param string \$class
     * @param string \$username The username
     * @param int    \$expires  The Unix timestamp when the cookie expires
     * @param string \$password The encoded password
     *
     * @return string
     */
    protected function generateCookieHash(\$class, \$username, \$expires, \$password)
    {
        return hash_hmac('sha256', \$class.self::COOKIE_DELIMITER.\$username.self::COOKIE_DELIMITER.\$expires.self::COOKIE_DELIMITER.\$password, \$this->getSecret());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/RememberMe/TokenBasedRememberMeServices.php";
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
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Concrete implementation of the RememberMeServicesInterface providing
 * remember-me capabilities without requiring a TokenProvider.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class TokenBasedRememberMeServices extends AbstractRememberMeServices
{
    /**
     * {@inheritdoc}
     */
    protected function processAutoLoginCookie(array \$cookieParts, Request \$request)
    {
        if (4 !== \\count(\$cookieParts)) {
            throw new AuthenticationException('The cookie is invalid.');
        }

        list(\$class, \$username, \$expires, \$hash) = \$cookieParts;
        if (false === \$username = base64_decode(\$username, true)) {
            throw new AuthenticationException('\$username contains a character from outside the base64 alphabet.');
        }
        try {
            \$user = \$this->getUserProvider(\$class)->loadUserByUsername(\$username);
        } catch (\\Exception \$e) {
            if (!\$e instanceof AuthenticationException) {
                \$e = new AuthenticationException(\$e->getMessage(), \$e->getCode(), \$e);
            }

            throw \$e;
        }

        if (!\$user instanceof UserInterface) {
            throw new \\RuntimeException(sprintf('The UserProviderInterface implementation must return an instance of UserInterface, but returned \"%s\".', \\get_class(\$user)));
        }

        if (true !== hash_equals(\$this->generateCookieHash(\$class, \$username, \$expires, \$user->getPassword()), \$hash)) {
            throw new AuthenticationException('The cookie\\'s hash is invalid.');
        }

        if (\$expires < time()) {
            throw new AuthenticationException('The cookie has expired.');
        }

        return \$user;
    }

    /**
     * {@inheritdoc}
     */
    protected function onLoginSuccess(Request \$request, Response \$response, TokenInterface \$token)
    {
        \$user = \$token->getUser();
        \$expires = time() + \$this->options['lifetime'];
        \$value = \$this->generateCookieValue(\\get_class(\$user), \$user->getUsername(), \$expires, \$user->getPassword());

        \$response->headers->setCookie(
            new Cookie(
                \$this->options['name'],
                \$value,
                \$expires,
                \$this->options['path'],
                \$this->options['domain'],
                \$this->options['secure'] ?? \$request->isSecure(),
                \$this->options['httponly'],
                false,
                \$this->options['samesite'] ?? null
            )
        );
    }

    /**
     * Generates the cookie value.
     *
     * @param string \$class
     * @param string \$username The username
     * @param int    \$expires  The Unix timestamp when the cookie expires
     * @param string \$password The encoded password
     *
     * @return string
     */
    protected function generateCookieValue(\$class, \$username, \$expires, \$password)
    {
        // \$username is encoded because it might contain COOKIE_DELIMITER,
        // we assume other values don't
        return \$this->encodeCookie([
            \$class,
            base64_encode(\$username),
            \$expires,
            \$this->generateCookieHash(\$class, \$username, \$expires, \$password),
        ]);
    }

    /**
     * Generates a hash for the cookie to ensure it is not being tampered with.
     *
     * @param string \$class
     * @param string \$username The username
     * @param int    \$expires  The Unix timestamp when the cookie expires
     * @param string \$password The encoded password
     *
     * @return string
     */
    protected function generateCookieHash(\$class, \$username, \$expires, \$password)
    {
        return hash_hmac('sha256', \$class.self::COOKIE_DELIMITER.\$username.self::COOKIE_DELIMITER.\$expires.self::COOKIE_DELIMITER.\$password, \$this->getSecret());
    }
}
", "vendor/symfony/security-http/RememberMe/TokenBasedRememberMeServices.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/RememberMe/TokenBasedRememberMeServices.php");
    }
}
