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

/* vendor/symfony/http-foundation/UrlHelper.php */
class __TwigTemplate_505ab89b8df36239daa609513262f1b5ea880d1f8a6a18f18218270d2fbb741c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/UrlHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/UrlHelper.php"));

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

namespace Symfony\\Component\\HttpFoundation;

use Symfony\\Component\\Routing\\RequestContext;

/**
 * A helper service for manipulating URLs within and outside the request scope.
 *
 * @author Valentin Udaltsov <udaltsov.valentin@gmail.com>
 */
final class UrlHelper
{
    private \$requestStack;
    private \$requestContext;

    public function __construct(RequestStack \$requestStack, RequestContext \$requestContext = null)
    {
        \$this->requestStack = \$requestStack;
        \$this->requestContext = \$requestContext;
    }

    public function getAbsoluteUrl(string \$path): string
    {
        if (false !== strpos(\$path, '://') || '//' === substr(\$path, 0, 2)) {
            return \$path;
        }

        if (null === \$request = \$this->requestStack->getMasterRequest()) {
            return \$this->getAbsoluteUrlFromContext(\$path);
        }

        if ('#' === \$path[0]) {
            \$path = \$request->getRequestUri().\$path;
        } elseif ('?' === \$path[0]) {
            \$path = \$request->getPathInfo().\$path;
        }

        if (!\$path || '/' !== \$path[0]) {
            \$prefix = \$request->getPathInfo();
            \$last = \\strlen(\$prefix) - 1;
            if (\$last !== \$pos = strrpos(\$prefix, '/')) {
                \$prefix = substr(\$prefix, 0, \$pos).'/';
            }

            return \$request->getUriForPath(\$prefix.\$path);
        }

        return \$request->getSchemeAndHttpHost().\$path;
    }

    public function getRelativePath(string \$path): string
    {
        if (false !== strpos(\$path, '://') || '//' === substr(\$path, 0, 2)) {
            return \$path;
        }

        if (null === \$request = \$this->requestStack->getMasterRequest()) {
            return \$path;
        }

        return \$request->getRelativeUriForPath(\$path);
    }

    private function getAbsoluteUrlFromContext(string \$path): string
    {
        if (null === \$this->requestContext || '' === \$host = \$this->requestContext->getHost()) {
            return \$path;
        }

        \$scheme = \$this->requestContext->getScheme();
        \$port = '';

        if ('http' === \$scheme && 80 !== \$this->requestContext->getHttpPort()) {
            \$port = ':'.\$this->requestContext->getHttpPort();
        } elseif ('https' === \$scheme && 443 !== \$this->requestContext->getHttpsPort()) {
            \$port = ':'.\$this->requestContext->getHttpsPort();
        }

        if ('#' === \$path[0]) {
            \$queryString = \$this->requestContext->getQueryString();
            \$path = \$this->requestContext->getPathInfo().(\$queryString ? '?'.\$queryString : '').\$path;
        } elseif ('?' === \$path[0]) {
            \$path = \$this->requestContext->getPathInfo().\$path;
        }

        if ('/' !== \$path[0]) {
            \$path = rtrim(\$this->requestContext->getBaseUrl(), '/').'/'.\$path;
        }

        return \$scheme.'://'.\$host.\$port.\$path;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/UrlHelper.php";
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

namespace Symfony\\Component\\HttpFoundation;

use Symfony\\Component\\Routing\\RequestContext;

/**
 * A helper service for manipulating URLs within and outside the request scope.
 *
 * @author Valentin Udaltsov <udaltsov.valentin@gmail.com>
 */
final class UrlHelper
{
    private \$requestStack;
    private \$requestContext;

    public function __construct(RequestStack \$requestStack, RequestContext \$requestContext = null)
    {
        \$this->requestStack = \$requestStack;
        \$this->requestContext = \$requestContext;
    }

    public function getAbsoluteUrl(string \$path): string
    {
        if (false !== strpos(\$path, '://') || '//' === substr(\$path, 0, 2)) {
            return \$path;
        }

        if (null === \$request = \$this->requestStack->getMasterRequest()) {
            return \$this->getAbsoluteUrlFromContext(\$path);
        }

        if ('#' === \$path[0]) {
            \$path = \$request->getRequestUri().\$path;
        } elseif ('?' === \$path[0]) {
            \$path = \$request->getPathInfo().\$path;
        }

        if (!\$path || '/' !== \$path[0]) {
            \$prefix = \$request->getPathInfo();
            \$last = \\strlen(\$prefix) - 1;
            if (\$last !== \$pos = strrpos(\$prefix, '/')) {
                \$prefix = substr(\$prefix, 0, \$pos).'/';
            }

            return \$request->getUriForPath(\$prefix.\$path);
        }

        return \$request->getSchemeAndHttpHost().\$path;
    }

    public function getRelativePath(string \$path): string
    {
        if (false !== strpos(\$path, '://') || '//' === substr(\$path, 0, 2)) {
            return \$path;
        }

        if (null === \$request = \$this->requestStack->getMasterRequest()) {
            return \$path;
        }

        return \$request->getRelativeUriForPath(\$path);
    }

    private function getAbsoluteUrlFromContext(string \$path): string
    {
        if (null === \$this->requestContext || '' === \$host = \$this->requestContext->getHost()) {
            return \$path;
        }

        \$scheme = \$this->requestContext->getScheme();
        \$port = '';

        if ('http' === \$scheme && 80 !== \$this->requestContext->getHttpPort()) {
            \$port = ':'.\$this->requestContext->getHttpPort();
        } elseif ('https' === \$scheme && 443 !== \$this->requestContext->getHttpsPort()) {
            \$port = ':'.\$this->requestContext->getHttpsPort();
        }

        if ('#' === \$path[0]) {
            \$queryString = \$this->requestContext->getQueryString();
            \$path = \$this->requestContext->getPathInfo().(\$queryString ? '?'.\$queryString : '').\$path;
        } elseif ('?' === \$path[0]) {
            \$path = \$this->requestContext->getPathInfo().\$path;
        }

        if ('/' !== \$path[0]) {
            \$path = rtrim(\$this->requestContext->getBaseUrl(), '/').'/'.\$path;
        }

        return \$scheme.'://'.\$host.\$port.\$path;
    }
}
", "vendor/symfony/http-foundation/UrlHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/UrlHelper.php");
    }
}
