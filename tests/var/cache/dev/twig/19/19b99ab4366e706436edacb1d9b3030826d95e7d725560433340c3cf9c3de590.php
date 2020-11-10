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

/* vendor/symfony/framework-bundle/Controller/RedirectController.php */
class __TwigTemplate_8bd85c6c62b8ab8f531f3bbc155d2df99ac2ad8edd766fe8694634767c9b0942 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Controller/RedirectController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Controller/RedirectController.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Controller;

use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

/**
 * Redirects a request to another URL.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class RedirectController
{
    private \$router;
    private \$httpPort;
    private \$httpsPort;

    public function __construct(UrlGeneratorInterface \$router = null, int \$httpPort = null, int \$httpsPort = null)
    {
        \$this->router = \$router;
        \$this->httpPort = \$httpPort;
        \$this->httpsPort = \$httpsPort;
    }

    /**
     * Redirects to another route with the given name.
     *
     * The response status code is 302 if the permanent parameter is false (default),
     * and 301 if the redirection is permanent.
     *
     * In case the route name is empty, the status code will be 404 when permanent is false
     * and 410 otherwise.
     *
     * @param Request    \$request           The request instance
     * @param string     \$route             The route name to redirect to
     * @param bool       \$permanent         Whether the redirection is permanent
     * @param bool|array \$ignoreAttributes  Whether to ignore attributes or an array of attributes to ignore
     * @param bool       \$keepRequestMethod Whether redirect action should keep HTTP request method
     *
     * @throws HttpException In case the route name is empty
     */
    public function redirectAction(Request \$request, string \$route, bool \$permanent = false, \$ignoreAttributes = false, bool \$keepRequestMethod = false, bool \$keepQueryParams = false): Response
    {
        if ('' == \$route) {
            throw new HttpException(\$permanent ? 410 : 404);
        }

        \$attributes = [];
        if (false === \$ignoreAttributes || \\is_array(\$ignoreAttributes)) {
            \$attributes = \$request->attributes->get('_route_params');
            \$attributes = \$keepQueryParams ? array_merge(\$request->query->all(), \$attributes) : \$attributes;
            unset(\$attributes['route'], \$attributes['permanent'], \$attributes['ignoreAttributes'], \$attributes['keepRequestMethod'], \$attributes['keepQueryParams']);
            if (\$ignoreAttributes) {
                \$attributes = array_diff_key(\$attributes, array_flip(\$ignoreAttributes));
            }
        }

        if (\$keepRequestMethod) {
            \$statusCode = \$permanent ? 308 : 307;
        } else {
            \$statusCode = \$permanent ? 301 : 302;
        }

        return new RedirectResponse(\$this->router->generate(\$route, \$attributes, UrlGeneratorInterface::ABSOLUTE_URL), \$statusCode);
    }

    /**
     * Redirects to a URL.
     *
     * The response status code is 302 if the permanent parameter is false (default),
     * and 301 if the redirection is permanent.
     *
     * In case the path is empty, the status code will be 404 when permanent is false
     * and 410 otherwise.
     *
     * @param Request     \$request           The request instance
     * @param string      \$path              The absolute path or URL to redirect to
     * @param bool        \$permanent         Whether the redirect is permanent or not
     * @param string|null \$scheme            The URL scheme (null to keep the current one)
     * @param int|null    \$httpPort          The HTTP port (null to keep the current one for the same scheme or the default configured port)
     * @param int|null    \$httpsPort         The HTTPS port (null to keep the current one for the same scheme or the default configured port)
     * @param bool        \$keepRequestMethod Whether redirect action should keep HTTP request method
     *
     * @throws HttpException In case the path is empty
     */
    public function urlRedirectAction(Request \$request, string \$path, bool \$permanent = false, string \$scheme = null, int \$httpPort = null, int \$httpsPort = null, bool \$keepRequestMethod = false): Response
    {
        if ('' == \$path) {
            throw new HttpException(\$permanent ? 410 : 404);
        }

        if (\$keepRequestMethod) {
            \$statusCode = \$permanent ? 308 : 307;
        } else {
            \$statusCode = \$permanent ? 301 : 302;
        }

        // redirect if the path is a full URL
        if (parse_url(\$path, PHP_URL_SCHEME)) {
            return new RedirectResponse(\$path, \$statusCode);
        }

        if (null === \$scheme) {
            \$scheme = \$request->getScheme();
        }

        \$qs = \$request->getQueryString();
        if (\$qs) {
            if (false === strpos(\$path, '?')) {
                \$qs = '?'.\$qs;
            } else {
                \$qs = '&'.\$qs;
            }
        }

        \$port = '';
        if ('http' === \$scheme) {
            if (null === \$httpPort) {
                if ('http' === \$request->getScheme()) {
                    \$httpPort = \$request->getPort();
                } else {
                    \$httpPort = \$this->httpPort;
                }
            }

            if (null !== \$httpPort && 80 != \$httpPort) {
                \$port = \":\$httpPort\";
            }
        } elseif ('https' === \$scheme) {
            if (null === \$httpsPort) {
                if ('https' === \$request->getScheme()) {
                    \$httpsPort = \$request->getPort();
                } else {
                    \$httpsPort = \$this->httpsPort;
                }
            }

            if (null !== \$httpsPort && 443 != \$httpsPort) {
                \$port = \":\$httpsPort\";
            }
        }

        \$url = \$scheme.'://'.\$request->getHost().\$port.\$request->getBaseUrl().\$path.\$qs;

        return new RedirectResponse(\$url, \$statusCode);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Controller/RedirectController.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Controller;

use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

/**
 * Redirects a request to another URL.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class RedirectController
{
    private \$router;
    private \$httpPort;
    private \$httpsPort;

    public function __construct(UrlGeneratorInterface \$router = null, int \$httpPort = null, int \$httpsPort = null)
    {
        \$this->router = \$router;
        \$this->httpPort = \$httpPort;
        \$this->httpsPort = \$httpsPort;
    }

    /**
     * Redirects to another route with the given name.
     *
     * The response status code is 302 if the permanent parameter is false (default),
     * and 301 if the redirection is permanent.
     *
     * In case the route name is empty, the status code will be 404 when permanent is false
     * and 410 otherwise.
     *
     * @param Request    \$request           The request instance
     * @param string     \$route             The route name to redirect to
     * @param bool       \$permanent         Whether the redirection is permanent
     * @param bool|array \$ignoreAttributes  Whether to ignore attributes or an array of attributes to ignore
     * @param bool       \$keepRequestMethod Whether redirect action should keep HTTP request method
     *
     * @throws HttpException In case the route name is empty
     */
    public function redirectAction(Request \$request, string \$route, bool \$permanent = false, \$ignoreAttributes = false, bool \$keepRequestMethod = false, bool \$keepQueryParams = false): Response
    {
        if ('' == \$route) {
            throw new HttpException(\$permanent ? 410 : 404);
        }

        \$attributes = [];
        if (false === \$ignoreAttributes || \\is_array(\$ignoreAttributes)) {
            \$attributes = \$request->attributes->get('_route_params');
            \$attributes = \$keepQueryParams ? array_merge(\$request->query->all(), \$attributes) : \$attributes;
            unset(\$attributes['route'], \$attributes['permanent'], \$attributes['ignoreAttributes'], \$attributes['keepRequestMethod'], \$attributes['keepQueryParams']);
            if (\$ignoreAttributes) {
                \$attributes = array_diff_key(\$attributes, array_flip(\$ignoreAttributes));
            }
        }

        if (\$keepRequestMethod) {
            \$statusCode = \$permanent ? 308 : 307;
        } else {
            \$statusCode = \$permanent ? 301 : 302;
        }

        return new RedirectResponse(\$this->router->generate(\$route, \$attributes, UrlGeneratorInterface::ABSOLUTE_URL), \$statusCode);
    }

    /**
     * Redirects to a URL.
     *
     * The response status code is 302 if the permanent parameter is false (default),
     * and 301 if the redirection is permanent.
     *
     * In case the path is empty, the status code will be 404 when permanent is false
     * and 410 otherwise.
     *
     * @param Request     \$request           The request instance
     * @param string      \$path              The absolute path or URL to redirect to
     * @param bool        \$permanent         Whether the redirect is permanent or not
     * @param string|null \$scheme            The URL scheme (null to keep the current one)
     * @param int|null    \$httpPort          The HTTP port (null to keep the current one for the same scheme or the default configured port)
     * @param int|null    \$httpsPort         The HTTPS port (null to keep the current one for the same scheme or the default configured port)
     * @param bool        \$keepRequestMethod Whether redirect action should keep HTTP request method
     *
     * @throws HttpException In case the path is empty
     */
    public function urlRedirectAction(Request \$request, string \$path, bool \$permanent = false, string \$scheme = null, int \$httpPort = null, int \$httpsPort = null, bool \$keepRequestMethod = false): Response
    {
        if ('' == \$path) {
            throw new HttpException(\$permanent ? 410 : 404);
        }

        if (\$keepRequestMethod) {
            \$statusCode = \$permanent ? 308 : 307;
        } else {
            \$statusCode = \$permanent ? 301 : 302;
        }

        // redirect if the path is a full URL
        if (parse_url(\$path, PHP_URL_SCHEME)) {
            return new RedirectResponse(\$path, \$statusCode);
        }

        if (null === \$scheme) {
            \$scheme = \$request->getScheme();
        }

        \$qs = \$request->getQueryString();
        if (\$qs) {
            if (false === strpos(\$path, '?')) {
                \$qs = '?'.\$qs;
            } else {
                \$qs = '&'.\$qs;
            }
        }

        \$port = '';
        if ('http' === \$scheme) {
            if (null === \$httpPort) {
                if ('http' === \$request->getScheme()) {
                    \$httpPort = \$request->getPort();
                } else {
                    \$httpPort = \$this->httpPort;
                }
            }

            if (null !== \$httpPort && 80 != \$httpPort) {
                \$port = \":\$httpPort\";
            }
        } elseif ('https' === \$scheme) {
            if (null === \$httpsPort) {
                if ('https' === \$request->getScheme()) {
                    \$httpsPort = \$request->getPort();
                } else {
                    \$httpsPort = \$this->httpsPort;
                }
            }

            if (null !== \$httpsPort && 443 != \$httpsPort) {
                \$port = \":\$httpsPort\";
            }
        }

        \$url = \$scheme.'://'.\$request->getHost().\$port.\$request->getBaseUrl().\$path.\$qs;

        return new RedirectResponse(\$url, \$statusCode);
    }
}
", "vendor/symfony/framework-bundle/Controller/RedirectController.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Controller/RedirectController.php");
    }
}
