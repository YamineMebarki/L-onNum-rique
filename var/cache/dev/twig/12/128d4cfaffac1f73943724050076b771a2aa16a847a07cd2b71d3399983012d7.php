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

/* vendor/symfony/browser-kit/CookieJar.php */
class __TwigTemplate_d1de3b28e6a28248a7888d8dc9af55a7160e619fd26f670307cd8df9bb01b735 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/CookieJar.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/CookieJar.php"));

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

namespace Symfony\\Component\\BrowserKit;

/**
 * CookieJar.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CookieJar
{
    protected \$cookieJar = [];

    public function set(Cookie \$cookie)
    {
        \$this->cookieJar[\$cookie->getDomain()][\$cookie->getPath()][\$cookie->getName()] = \$cookie;
    }

    /**
     * Gets a cookie by name.
     *
     * You should never use an empty domain, but if you do so,
     * this method returns the first cookie for the given name/path
     * (this behavior ensures a BC behavior with previous versions of
     * Symfony).
     *
     * @param string \$name   The cookie name
     * @param string \$path   The cookie path
     * @param string \$domain The cookie domain
     *
     * @return Cookie|null A Cookie instance or null if the cookie does not exist
     */
    public function get(\$name, \$path = '/', \$domain = null)
    {
        \$this->flushExpiredCookies();

        foreach (\$this->cookieJar as \$cookieDomain => \$pathCookies) {
            if (\$cookieDomain && \$domain) {
                \$cookieDomain = '.'.ltrim(\$cookieDomain, '.');
                if (\$cookieDomain !== substr('.'.\$domain, -\\strlen(\$cookieDomain))) {
                    continue;
                }
            }

            foreach (\$pathCookies as \$cookiePath => \$namedCookies) {
                if (0 !== strpos(\$path, \$cookiePath)) {
                    continue;
                }
                if (isset(\$namedCookies[\$name])) {
                    return \$namedCookies[\$name];
                }
            }
        }

        return null;
    }

    /**
     * Removes a cookie by name.
     *
     * You should never use an empty domain, but if you do so,
     * all cookies for the given name/path expire (this behavior
     * ensures a BC behavior with previous versions of Symfony).
     *
     * @param string \$name   The cookie name
     * @param string \$path   The cookie path
     * @param string \$domain The cookie domain
     */
    public function expire(\$name, \$path = '/', \$domain = null)
    {
        if (null === \$path) {
            \$path = '/';
        }

        if (empty(\$domain)) {
            // an empty domain means any domain
            // this should never happen but it allows for a better BC
            \$domains = array_keys(\$this->cookieJar);
        } else {
            \$domains = [\$domain];
        }

        foreach (\$domains as \$domain) {
            unset(\$this->cookieJar[\$domain][\$path][\$name]);

            if (empty(\$this->cookieJar[\$domain][\$path])) {
                unset(\$this->cookieJar[\$domain][\$path]);

                if (empty(\$this->cookieJar[\$domain])) {
                    unset(\$this->cookieJar[\$domain]);
                }
            }
        }
    }

    /**
     * Removes all the cookies from the jar.
     */
    public function clear()
    {
        \$this->cookieJar = [];
    }

    /**
     * Updates the cookie jar from a response Set-Cookie headers.
     *
     * @param string[] \$setCookies Set-Cookie headers from an HTTP response
     * @param string   \$uri        The base URL
     */
    public function updateFromSetCookie(array \$setCookies, \$uri = null)
    {
        \$cookies = [];

        foreach (\$setCookies as \$cookie) {
            foreach (explode(',', \$cookie) as \$i => \$part) {
                if (0 === \$i || preg_match('/^(?P<token>\\s*[0-9A-Za-z!#\\\$%\\&\\'\\*\\+\\-\\.^_`\\|~]+)=/', \$part)) {
                    \$cookies[] = ltrim(\$part);
                } else {
                    \$cookies[\\count(\$cookies) - 1] .= ','.\$part;
                }
            }
        }

        foreach (\$cookies as \$cookie) {
            try {
                \$this->set(Cookie::fromString(\$cookie, \$uri));
            } catch (\\InvalidArgumentException \$e) {
                // invalid cookies are just ignored
            }
        }
    }

    /**
     * Updates the cookie jar from a Response object.
     *
     * @param Response \$response A Response object
     * @param string   \$uri      The base URL
     */
    public function updateFromResponse(Response \$response, \$uri = null)
    {
        \$this->updateFromSetCookie(\$response->getHeader('Set-Cookie', false), \$uri);
    }

    /**
     * Returns not yet expired cookies.
     *
     * @return Cookie[] An array of cookies
     */
    public function all()
    {
        \$this->flushExpiredCookies();

        \$flattenedCookies = [];
        foreach (\$this->cookieJar as \$path) {
            foreach (\$path as \$cookies) {
                foreach (\$cookies as \$cookie) {
                    \$flattenedCookies[] = \$cookie;
                }
            }
        }

        return \$flattenedCookies;
    }

    /**
     * Returns not yet expired cookie values for the given URI.
     *
     * @param string \$uri             A URI
     * @param bool   \$returnsRawValue Returns raw value or urldecoded value
     *
     * @return array An array of cookie values
     */
    public function allValues(\$uri, \$returnsRawValue = false)
    {
        \$this->flushExpiredCookies();

        \$parts = array_replace(['path' => '/'], parse_url(\$uri));
        \$cookies = [];
        foreach (\$this->cookieJar as \$domain => \$pathCookies) {
            if (\$domain) {
                \$domain = '.'.ltrim(\$domain, '.');
                if (\$domain != substr('.'.\$parts['host'], -\\strlen(\$domain))) {
                    continue;
                }
            }

            foreach (\$pathCookies as \$path => \$namedCookies) {
                if (\$path != substr(\$parts['path'], 0, \\strlen(\$path))) {
                    continue;
                }

                foreach (\$namedCookies as \$cookie) {
                    if (\$cookie->isSecure() && 'https' != \$parts['scheme']) {
                        continue;
                    }

                    \$cookies[\$cookie->getName()] = \$returnsRawValue ? \$cookie->getRawValue() : \$cookie->getValue();
                }
            }
        }

        return \$cookies;
    }

    /**
     * Returns not yet expired raw cookie values for the given URI.
     *
     * @param string \$uri A URI
     *
     * @return array An array of cookie values
     */
    public function allRawValues(\$uri)
    {
        return \$this->allValues(\$uri, true);
    }

    /**
     * Removes all expired cookies.
     */
    public function flushExpiredCookies()
    {
        foreach (\$this->cookieJar as \$domain => \$pathCookies) {
            foreach (\$pathCookies as \$path => \$namedCookies) {
                foreach (\$namedCookies as \$name => \$cookie) {
                    if (\$cookie->isExpired()) {
                        unset(\$this->cookieJar[\$domain][\$path][\$name]);
                    }
                }
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
        return "vendor/symfony/browser-kit/CookieJar.php";
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

namespace Symfony\\Component\\BrowserKit;

/**
 * CookieJar.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CookieJar
{
    protected \$cookieJar = [];

    public function set(Cookie \$cookie)
    {
        \$this->cookieJar[\$cookie->getDomain()][\$cookie->getPath()][\$cookie->getName()] = \$cookie;
    }

    /**
     * Gets a cookie by name.
     *
     * You should never use an empty domain, but if you do so,
     * this method returns the first cookie for the given name/path
     * (this behavior ensures a BC behavior with previous versions of
     * Symfony).
     *
     * @param string \$name   The cookie name
     * @param string \$path   The cookie path
     * @param string \$domain The cookie domain
     *
     * @return Cookie|null A Cookie instance or null if the cookie does not exist
     */
    public function get(\$name, \$path = '/', \$domain = null)
    {
        \$this->flushExpiredCookies();

        foreach (\$this->cookieJar as \$cookieDomain => \$pathCookies) {
            if (\$cookieDomain && \$domain) {
                \$cookieDomain = '.'.ltrim(\$cookieDomain, '.');
                if (\$cookieDomain !== substr('.'.\$domain, -\\strlen(\$cookieDomain))) {
                    continue;
                }
            }

            foreach (\$pathCookies as \$cookiePath => \$namedCookies) {
                if (0 !== strpos(\$path, \$cookiePath)) {
                    continue;
                }
                if (isset(\$namedCookies[\$name])) {
                    return \$namedCookies[\$name];
                }
            }
        }

        return null;
    }

    /**
     * Removes a cookie by name.
     *
     * You should never use an empty domain, but if you do so,
     * all cookies for the given name/path expire (this behavior
     * ensures a BC behavior with previous versions of Symfony).
     *
     * @param string \$name   The cookie name
     * @param string \$path   The cookie path
     * @param string \$domain The cookie domain
     */
    public function expire(\$name, \$path = '/', \$domain = null)
    {
        if (null === \$path) {
            \$path = '/';
        }

        if (empty(\$domain)) {
            // an empty domain means any domain
            // this should never happen but it allows for a better BC
            \$domains = array_keys(\$this->cookieJar);
        } else {
            \$domains = [\$domain];
        }

        foreach (\$domains as \$domain) {
            unset(\$this->cookieJar[\$domain][\$path][\$name]);

            if (empty(\$this->cookieJar[\$domain][\$path])) {
                unset(\$this->cookieJar[\$domain][\$path]);

                if (empty(\$this->cookieJar[\$domain])) {
                    unset(\$this->cookieJar[\$domain]);
                }
            }
        }
    }

    /**
     * Removes all the cookies from the jar.
     */
    public function clear()
    {
        \$this->cookieJar = [];
    }

    /**
     * Updates the cookie jar from a response Set-Cookie headers.
     *
     * @param string[] \$setCookies Set-Cookie headers from an HTTP response
     * @param string   \$uri        The base URL
     */
    public function updateFromSetCookie(array \$setCookies, \$uri = null)
    {
        \$cookies = [];

        foreach (\$setCookies as \$cookie) {
            foreach (explode(',', \$cookie) as \$i => \$part) {
                if (0 === \$i || preg_match('/^(?P<token>\\s*[0-9A-Za-z!#\\\$%\\&\\'\\*\\+\\-\\.^_`\\|~]+)=/', \$part)) {
                    \$cookies[] = ltrim(\$part);
                } else {
                    \$cookies[\\count(\$cookies) - 1] .= ','.\$part;
                }
            }
        }

        foreach (\$cookies as \$cookie) {
            try {
                \$this->set(Cookie::fromString(\$cookie, \$uri));
            } catch (\\InvalidArgumentException \$e) {
                // invalid cookies are just ignored
            }
        }
    }

    /**
     * Updates the cookie jar from a Response object.
     *
     * @param Response \$response A Response object
     * @param string   \$uri      The base URL
     */
    public function updateFromResponse(Response \$response, \$uri = null)
    {
        \$this->updateFromSetCookie(\$response->getHeader('Set-Cookie', false), \$uri);
    }

    /**
     * Returns not yet expired cookies.
     *
     * @return Cookie[] An array of cookies
     */
    public function all()
    {
        \$this->flushExpiredCookies();

        \$flattenedCookies = [];
        foreach (\$this->cookieJar as \$path) {
            foreach (\$path as \$cookies) {
                foreach (\$cookies as \$cookie) {
                    \$flattenedCookies[] = \$cookie;
                }
            }
        }

        return \$flattenedCookies;
    }

    /**
     * Returns not yet expired cookie values for the given URI.
     *
     * @param string \$uri             A URI
     * @param bool   \$returnsRawValue Returns raw value or urldecoded value
     *
     * @return array An array of cookie values
     */
    public function allValues(\$uri, \$returnsRawValue = false)
    {
        \$this->flushExpiredCookies();

        \$parts = array_replace(['path' => '/'], parse_url(\$uri));
        \$cookies = [];
        foreach (\$this->cookieJar as \$domain => \$pathCookies) {
            if (\$domain) {
                \$domain = '.'.ltrim(\$domain, '.');
                if (\$domain != substr('.'.\$parts['host'], -\\strlen(\$domain))) {
                    continue;
                }
            }

            foreach (\$pathCookies as \$path => \$namedCookies) {
                if (\$path != substr(\$parts['path'], 0, \\strlen(\$path))) {
                    continue;
                }

                foreach (\$namedCookies as \$cookie) {
                    if (\$cookie->isSecure() && 'https' != \$parts['scheme']) {
                        continue;
                    }

                    \$cookies[\$cookie->getName()] = \$returnsRawValue ? \$cookie->getRawValue() : \$cookie->getValue();
                }
            }
        }

        return \$cookies;
    }

    /**
     * Returns not yet expired raw cookie values for the given URI.
     *
     * @param string \$uri A URI
     *
     * @return array An array of cookie values
     */
    public function allRawValues(\$uri)
    {
        return \$this->allValues(\$uri, true);
    }

    /**
     * Removes all expired cookies.
     */
    public function flushExpiredCookies()
    {
        foreach (\$this->cookieJar as \$domain => \$pathCookies) {
            foreach (\$pathCookies as \$path => \$namedCookies) {
                foreach (\$namedCookies as \$name => \$cookie) {
                    if (\$cookie->isExpired()) {
                        unset(\$this->cookieJar[\$domain][\$path][\$name]);
                    }
                }
            }
        }
    }
}
", "vendor/symfony/browser-kit/CookieJar.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/CookieJar.php");
    }
}
