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

/* vendor/symfony/http-foundation/RequestMatcher.php */
class __TwigTemplate_8a45ddb2be89336c96b81a5d41512271493ae21b682632ad62e1f1a8790530b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/RequestMatcher.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/RequestMatcher.php"));

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
 * RequestMatcher compares a pre-defined set of checks against a Request instance.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RequestMatcher implements RequestMatcherInterface
{
    /**
     * @var string|null
     */
    private \$path;

    /**
     * @var string|null
     */
    private \$host;

    /**
     * @var int|null
     */
    private \$port;

    /**
     * @var string[]
     */
    private \$methods = [];

    /**
     * @var string[]
     */
    private \$ips = [];

    /**
     * @var array
     */
    private \$attributes = [];

    /**
     * @var string[]
     */
    private \$schemes = [];

    /**
     * @param string|string[]|null \$methods
     * @param string|string[]|null \$ips
     * @param string|string[]|null \$schemes
     */
    public function __construct(string \$path = null, string \$host = null, \$methods = null, \$ips = null, array \$attributes = [], \$schemes = null, int \$port = null)
    {
        \$this->matchPath(\$path);
        \$this->matchHost(\$host);
        \$this->matchMethod(\$methods);
        \$this->matchIps(\$ips);
        \$this->matchScheme(\$schemes);
        \$this->matchPort(\$port);

        foreach (\$attributes as \$k => \$v) {
            \$this->matchAttribute(\$k, \$v);
        }
    }

    /**
     * Adds a check for the HTTP scheme.
     *
     * @param string|string[]|null \$scheme An HTTP scheme or an array of HTTP schemes
     */
    public function matchScheme(\$scheme)
    {
        \$this->schemes = null !== \$scheme ? array_map('strtolower', (array) \$scheme) : [];
    }

    /**
     * Adds a check for the URL host name.
     *
     * @param string|null \$regexp A Regexp
     */
    public function matchHost(\$regexp)
    {
        \$this->host = \$regexp;
    }

    /**
     * Adds a check for the the URL port.
     *
     * @param int|null \$port The port number to connect to
     */
    public function matchPort(?int \$port)
    {
        \$this->port = \$port;
    }

    /**
     * Adds a check for the URL path info.
     *
     * @param string|null \$regexp A Regexp
     */
    public function matchPath(\$regexp)
    {
        \$this->path = \$regexp;
    }

    /**
     * Adds a check for the client IP.
     *
     * @param string \$ip A specific IP address or a range specified using IP/netmask like 192.168.1.0/24
     */
    public function matchIp(\$ip)
    {
        \$this->matchIps(\$ip);
    }

    /**
     * Adds a check for the client IP.
     *
     * @param string|string[]|null \$ips A specific IP address or a range specified using IP/netmask like 192.168.1.0/24
     */
    public function matchIps(\$ips)
    {
        \$this->ips = null !== \$ips ? (array) \$ips : [];
    }

    /**
     * Adds a check for the HTTP method.
     *
     * @param string|string[]|null \$method An HTTP method or an array of HTTP methods
     */
    public function matchMethod(\$method)
    {
        \$this->methods = null !== \$method ? array_map('strtoupper', (array) \$method) : [];
    }

    /**
     * Adds a check for request attribute.
     *
     * @param string \$key    The request attribute name
     * @param string \$regexp A Regexp
     */
    public function matchAttribute(\$key, \$regexp)
    {
        \$this->attributes[\$key] = \$regexp;
    }

    /**
     * {@inheritdoc}
     */
    public function matches(Request \$request)
    {
        if (\$this->schemes && !\\in_array(\$request->getScheme(), \$this->schemes, true)) {
            return false;
        }

        if (\$this->methods && !\\in_array(\$request->getMethod(), \$this->methods, true)) {
            return false;
        }

        foreach (\$this->attributes as \$key => \$pattern) {
            if (!preg_match('{'.\$pattern.'}', \$request->attributes->get(\$key))) {
                return false;
            }
        }

        if (null !== \$this->path && !preg_match('{'.\$this->path.'}', rawurldecode(\$request->getPathInfo()))) {
            return false;
        }

        if (null !== \$this->host && !preg_match('{'.\$this->host.'}i', \$request->getHost())) {
            return false;
        }

        if (null !== \$this->port && 0 < \$this->port && \$request->getPort() !== \$this->port) {
            return false;
        }

        if (IpUtils::checkIp(\$request->getClientIp(), \$this->ips)) {
            return true;
        }

        // Note to future implementors: add additional checks above the
        // foreach above or else your check might not be run!
        return 0 === \\count(\$this->ips);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/RequestMatcher.php";
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
 * RequestMatcher compares a pre-defined set of checks against a Request instance.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RequestMatcher implements RequestMatcherInterface
{
    /**
     * @var string|null
     */
    private \$path;

    /**
     * @var string|null
     */
    private \$host;

    /**
     * @var int|null
     */
    private \$port;

    /**
     * @var string[]
     */
    private \$methods = [];

    /**
     * @var string[]
     */
    private \$ips = [];

    /**
     * @var array
     */
    private \$attributes = [];

    /**
     * @var string[]
     */
    private \$schemes = [];

    /**
     * @param string|string[]|null \$methods
     * @param string|string[]|null \$ips
     * @param string|string[]|null \$schemes
     */
    public function __construct(string \$path = null, string \$host = null, \$methods = null, \$ips = null, array \$attributes = [], \$schemes = null, int \$port = null)
    {
        \$this->matchPath(\$path);
        \$this->matchHost(\$host);
        \$this->matchMethod(\$methods);
        \$this->matchIps(\$ips);
        \$this->matchScheme(\$schemes);
        \$this->matchPort(\$port);

        foreach (\$attributes as \$k => \$v) {
            \$this->matchAttribute(\$k, \$v);
        }
    }

    /**
     * Adds a check for the HTTP scheme.
     *
     * @param string|string[]|null \$scheme An HTTP scheme or an array of HTTP schemes
     */
    public function matchScheme(\$scheme)
    {
        \$this->schemes = null !== \$scheme ? array_map('strtolower', (array) \$scheme) : [];
    }

    /**
     * Adds a check for the URL host name.
     *
     * @param string|null \$regexp A Regexp
     */
    public function matchHost(\$regexp)
    {
        \$this->host = \$regexp;
    }

    /**
     * Adds a check for the the URL port.
     *
     * @param int|null \$port The port number to connect to
     */
    public function matchPort(?int \$port)
    {
        \$this->port = \$port;
    }

    /**
     * Adds a check for the URL path info.
     *
     * @param string|null \$regexp A Regexp
     */
    public function matchPath(\$regexp)
    {
        \$this->path = \$regexp;
    }

    /**
     * Adds a check for the client IP.
     *
     * @param string \$ip A specific IP address or a range specified using IP/netmask like 192.168.1.0/24
     */
    public function matchIp(\$ip)
    {
        \$this->matchIps(\$ip);
    }

    /**
     * Adds a check for the client IP.
     *
     * @param string|string[]|null \$ips A specific IP address or a range specified using IP/netmask like 192.168.1.0/24
     */
    public function matchIps(\$ips)
    {
        \$this->ips = null !== \$ips ? (array) \$ips : [];
    }

    /**
     * Adds a check for the HTTP method.
     *
     * @param string|string[]|null \$method An HTTP method or an array of HTTP methods
     */
    public function matchMethod(\$method)
    {
        \$this->methods = null !== \$method ? array_map('strtoupper', (array) \$method) : [];
    }

    /**
     * Adds a check for request attribute.
     *
     * @param string \$key    The request attribute name
     * @param string \$regexp A Regexp
     */
    public function matchAttribute(\$key, \$regexp)
    {
        \$this->attributes[\$key] = \$regexp;
    }

    /**
     * {@inheritdoc}
     */
    public function matches(Request \$request)
    {
        if (\$this->schemes && !\\in_array(\$request->getScheme(), \$this->schemes, true)) {
            return false;
        }

        if (\$this->methods && !\\in_array(\$request->getMethod(), \$this->methods, true)) {
            return false;
        }

        foreach (\$this->attributes as \$key => \$pattern) {
            if (!preg_match('{'.\$pattern.'}', \$request->attributes->get(\$key))) {
                return false;
            }
        }

        if (null !== \$this->path && !preg_match('{'.\$this->path.'}', rawurldecode(\$request->getPathInfo()))) {
            return false;
        }

        if (null !== \$this->host && !preg_match('{'.\$this->host.'}i', \$request->getHost())) {
            return false;
        }

        if (null !== \$this->port && 0 < \$this->port && \$request->getPort() !== \$this->port) {
            return false;
        }

        if (IpUtils::checkIp(\$request->getClientIp(), \$this->ips)) {
            return true;
        }

        // Note to future implementors: add additional checks above the
        // foreach above or else your check might not be run!
        return 0 === \\count(\$this->ips);
    }
}
", "vendor/symfony/http-foundation/RequestMatcher.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/RequestMatcher.php");
    }
}
