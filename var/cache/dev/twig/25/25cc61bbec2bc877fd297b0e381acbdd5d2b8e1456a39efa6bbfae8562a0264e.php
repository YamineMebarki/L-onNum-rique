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

/* vendor/symfony/http-foundation/RedirectResponse.php */
class __TwigTemplate_2c713c35392ae8deffdd9c8caf91cdc118b7ec824577d417eda46f3ebd886427 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/RedirectResponse.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/RedirectResponse.php"));

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

/**
 * RedirectResponse represents an HTTP response doing a redirect.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RedirectResponse extends Response
{
    protected \$targetUrl;

    /**
     * Creates a redirect response so that it conforms to the rules defined for a redirect status code.
     *
     * @param string \$url     The URL to redirect to. The URL should be a full URL, with schema etc.,
     *                        but practically every browser redirects on paths only as well
     * @param int    \$status  The status code (302 by default)
     * @param array  \$headers The headers (Location is always set to the given URL)
     *
     * @throws \\InvalidArgumentException
     *
     * @see https://tools.ietf.org/html/rfc2616#section-10.3
     */
    public function __construct(?string \$url, int \$status = 302, array \$headers = [])
    {
        parent::__construct('', \$status, \$headers);

        \$this->setTargetUrl(\$url);

        if (!\$this->isRedirect()) {
            throw new \\InvalidArgumentException(sprintf('The HTTP status code is not a redirect (\"%s\" given).', \$status));
        }

        if (301 == \$status && !\\array_key_exists('cache-control', array_change_key_case(\$headers, \\CASE_LOWER))) {
            \$this->headers->remove('cache-control');
        }
    }

    /**
     * Factory method for chainability.
     *
     * @param string \$url     The url to redirect to
     * @param int    \$status  The response status code
     * @param array  \$headers An array of response headers
     *
     * @return static
     */
    public static function create(\$url = '', \$status = 302, \$headers = [])
    {
        return new static(\$url, \$status, \$headers);
    }

    /**
     * Returns the target URL.
     *
     * @return string target URL
     */
    public function getTargetUrl()
    {
        return \$this->targetUrl;
    }

    /**
     * Sets the redirect target of this response.
     *
     * @param string \$url The URL to redirect to
     *
     * @return \$this
     *
     * @throws \\InvalidArgumentException
     */
    public function setTargetUrl(\$url)
    {
        if (empty(\$url)) {
            throw new \\InvalidArgumentException('Cannot redirect to an empty URL.');
        }

        \$this->targetUrl = \$url;

        \$this->setContent(
            sprintf('<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"refresh\" content=\"0;url=%1\$s\" />

        <title>Redirecting to %1\$s</title>
    </head>
    <body>
        Redirecting to <a href=\"%1\$s\">%1\$s</a>.
    </body>
</html>', htmlspecialchars(\$url, ENT_QUOTES, 'UTF-8')));

        \$this->headers->set('Location', \$url);

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/RedirectResponse.php";
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

/**
 * RedirectResponse represents an HTTP response doing a redirect.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RedirectResponse extends Response
{
    protected \$targetUrl;

    /**
     * Creates a redirect response so that it conforms to the rules defined for a redirect status code.
     *
     * @param string \$url     The URL to redirect to. The URL should be a full URL, with schema etc.,
     *                        but practically every browser redirects on paths only as well
     * @param int    \$status  The status code (302 by default)
     * @param array  \$headers The headers (Location is always set to the given URL)
     *
     * @throws \\InvalidArgumentException
     *
     * @see https://tools.ietf.org/html/rfc2616#section-10.3
     */
    public function __construct(?string \$url, int \$status = 302, array \$headers = [])
    {
        parent::__construct('', \$status, \$headers);

        \$this->setTargetUrl(\$url);

        if (!\$this->isRedirect()) {
            throw new \\InvalidArgumentException(sprintf('The HTTP status code is not a redirect (\"%s\" given).', \$status));
        }

        if (301 == \$status && !\\array_key_exists('cache-control', array_change_key_case(\$headers, \\CASE_LOWER))) {
            \$this->headers->remove('cache-control');
        }
    }

    /**
     * Factory method for chainability.
     *
     * @param string \$url     The url to redirect to
     * @param int    \$status  The response status code
     * @param array  \$headers An array of response headers
     *
     * @return static
     */
    public static function create(\$url = '', \$status = 302, \$headers = [])
    {
        return new static(\$url, \$status, \$headers);
    }

    /**
     * Returns the target URL.
     *
     * @return string target URL
     */
    public function getTargetUrl()
    {
        return \$this->targetUrl;
    }

    /**
     * Sets the redirect target of this response.
     *
     * @param string \$url The URL to redirect to
     *
     * @return \$this
     *
     * @throws \\InvalidArgumentException
     */
    public function setTargetUrl(\$url)
    {
        if (empty(\$url)) {
            throw new \\InvalidArgumentException('Cannot redirect to an empty URL.');
        }

        \$this->targetUrl = \$url;

        \$this->setContent(
            sprintf('<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"refresh\" content=\"0;url=%1\$s\" />

        <title>Redirecting to %1\$s</title>
    </head>
    <body>
        Redirecting to <a href=\"%1\$s\">%1\$s</a>.
    </body>
</html>', htmlspecialchars(\$url, ENT_QUOTES, 'UTF-8')));

        \$this->headers->set('Location', \$url);

        return \$this;
    }
}
", "vendor/symfony/http-foundation/RedirectResponse.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/RedirectResponse.php");
    }
}
