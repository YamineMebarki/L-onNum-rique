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

/* vendor/symfony/http-kernel/HttpCache/SubRequestHandler.php */
class __TwigTemplate_49cd7925866ff95fc240dc188c9881dd4cfd8deeeec12df3438972c0cbf2d748 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/HttpCache/SubRequestHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/HttpCache/SubRequestHandler.php"));

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

namespace Symfony\\Component\\HttpKernel\\HttpCache;

use Symfony\\Component\\HttpFoundation\\IpUtils;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class SubRequestHandler
{
    public static function handle(HttpKernelInterface \$kernel, Request \$request, \$type, \$catch): Response
    {
        // save global state related to trusted headers and proxies
        \$trustedProxies = Request::getTrustedProxies();
        \$trustedHeaderSet = Request::getTrustedHeaderSet();

        // remove untrusted values
        \$remoteAddr = \$request->server->get('REMOTE_ADDR');
        if (!IpUtils::checkIp(\$remoteAddr, \$trustedProxies)) {
            \$trustedHeaders = [
                'FORWARDED' => \$trustedHeaderSet & Request::HEADER_FORWARDED,
                'X_FORWARDED_FOR' => \$trustedHeaderSet & Request::HEADER_X_FORWARDED_FOR,
                'X_FORWARDED_HOST' => \$trustedHeaderSet & Request::HEADER_X_FORWARDED_HOST,
                'X_FORWARDED_PROTO' => \$trustedHeaderSet & Request::HEADER_X_FORWARDED_PROTO,
                'X_FORWARDED_PORT' => \$trustedHeaderSet & Request::HEADER_X_FORWARDED_PORT,
            ];
            foreach (array_filter(\$trustedHeaders) as \$name => \$key) {
                \$request->headers->remove(\$name);
                \$request->server->remove('HTTP_'.\$name);
            }
        }

        // compute trusted values, taking any trusted proxies into account
        \$trustedIps = [];
        \$trustedValues = [];
        foreach (array_reverse(\$request->getClientIps()) as \$ip) {
            \$trustedIps[] = \$ip;
            \$trustedValues[] = sprintf('for=\"%s\"', \$ip);
        }
        if (\$ip !== \$remoteAddr) {
            \$trustedIps[] = \$remoteAddr;
            \$trustedValues[] = sprintf('for=\"%s\"', \$remoteAddr);
        }

        // set trusted values, reusing as much as possible the global trusted settings
        if (Request::HEADER_FORWARDED & \$trustedHeaderSet) {
            \$trustedValues[0] .= sprintf(';host=\"%s\";proto=%s', \$request->getHttpHost(), \$request->getScheme());
            \$request->headers->set('Forwarded', \$v = implode(', ', \$trustedValues));
            \$request->server->set('HTTP_FORWARDED', \$v);
        }
        if (Request::HEADER_X_FORWARDED_FOR & \$trustedHeaderSet) {
            \$request->headers->set('X-Forwarded-For', \$v = implode(', ', \$trustedIps));
            \$request->server->set('HTTP_X_FORWARDED_FOR', \$v);
        } elseif (!(Request::HEADER_FORWARDED & \$trustedHeaderSet)) {
            Request::setTrustedProxies(\$trustedProxies, \$trustedHeaderSet | Request::HEADER_X_FORWARDED_FOR);
            \$request->headers->set('X-Forwarded-For', \$v = implode(', ', \$trustedIps));
            \$request->server->set('HTTP_X_FORWARDED_FOR', \$v);
        }

        // fix the client IP address by setting it to 127.0.0.1,
        // which is the core responsibility of this method
        \$request->server->set('REMOTE_ADDR', '127.0.0.1');

        // ensure 127.0.0.1 is set as trusted proxy
        if (!IpUtils::checkIp('127.0.0.1', \$trustedProxies)) {
            Request::setTrustedProxies(array_merge(\$trustedProxies, ['127.0.0.1']), Request::getTrustedHeaderSet());
        }

        try {
            return \$kernel->handle(\$request, \$type, \$catch);
        } finally {
            // restore global state
            Request::setTrustedProxies(\$trustedProxies, \$trustedHeaderSet);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/HttpCache/SubRequestHandler.php";
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

namespace Symfony\\Component\\HttpKernel\\HttpCache;

use Symfony\\Component\\HttpFoundation\\IpUtils;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class SubRequestHandler
{
    public static function handle(HttpKernelInterface \$kernel, Request \$request, \$type, \$catch): Response
    {
        // save global state related to trusted headers and proxies
        \$trustedProxies = Request::getTrustedProxies();
        \$trustedHeaderSet = Request::getTrustedHeaderSet();

        // remove untrusted values
        \$remoteAddr = \$request->server->get('REMOTE_ADDR');
        if (!IpUtils::checkIp(\$remoteAddr, \$trustedProxies)) {
            \$trustedHeaders = [
                'FORWARDED' => \$trustedHeaderSet & Request::HEADER_FORWARDED,
                'X_FORWARDED_FOR' => \$trustedHeaderSet & Request::HEADER_X_FORWARDED_FOR,
                'X_FORWARDED_HOST' => \$trustedHeaderSet & Request::HEADER_X_FORWARDED_HOST,
                'X_FORWARDED_PROTO' => \$trustedHeaderSet & Request::HEADER_X_FORWARDED_PROTO,
                'X_FORWARDED_PORT' => \$trustedHeaderSet & Request::HEADER_X_FORWARDED_PORT,
            ];
            foreach (array_filter(\$trustedHeaders) as \$name => \$key) {
                \$request->headers->remove(\$name);
                \$request->server->remove('HTTP_'.\$name);
            }
        }

        // compute trusted values, taking any trusted proxies into account
        \$trustedIps = [];
        \$trustedValues = [];
        foreach (array_reverse(\$request->getClientIps()) as \$ip) {
            \$trustedIps[] = \$ip;
            \$trustedValues[] = sprintf('for=\"%s\"', \$ip);
        }
        if (\$ip !== \$remoteAddr) {
            \$trustedIps[] = \$remoteAddr;
            \$trustedValues[] = sprintf('for=\"%s\"', \$remoteAddr);
        }

        // set trusted values, reusing as much as possible the global trusted settings
        if (Request::HEADER_FORWARDED & \$trustedHeaderSet) {
            \$trustedValues[0] .= sprintf(';host=\"%s\";proto=%s', \$request->getHttpHost(), \$request->getScheme());
            \$request->headers->set('Forwarded', \$v = implode(', ', \$trustedValues));
            \$request->server->set('HTTP_FORWARDED', \$v);
        }
        if (Request::HEADER_X_FORWARDED_FOR & \$trustedHeaderSet) {
            \$request->headers->set('X-Forwarded-For', \$v = implode(', ', \$trustedIps));
            \$request->server->set('HTTP_X_FORWARDED_FOR', \$v);
        } elseif (!(Request::HEADER_FORWARDED & \$trustedHeaderSet)) {
            Request::setTrustedProxies(\$trustedProxies, \$trustedHeaderSet | Request::HEADER_X_FORWARDED_FOR);
            \$request->headers->set('X-Forwarded-For', \$v = implode(', ', \$trustedIps));
            \$request->server->set('HTTP_X_FORWARDED_FOR', \$v);
        }

        // fix the client IP address by setting it to 127.0.0.1,
        // which is the core responsibility of this method
        \$request->server->set('REMOTE_ADDR', '127.0.0.1');

        // ensure 127.0.0.1 is set as trusted proxy
        if (!IpUtils::checkIp('127.0.0.1', \$trustedProxies)) {
            Request::setTrustedProxies(array_merge(\$trustedProxies, ['127.0.0.1']), Request::getTrustedHeaderSet());
        }

        try {
            return \$kernel->handle(\$request, \$type, \$catch);
        } finally {
            // restore global state
            Request::setTrustedProxies(\$trustedProxies, \$trustedHeaderSet);
        }
    }
}
", "vendor/symfony/http-kernel/HttpCache/SubRequestHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/HttpCache/SubRequestHandler.php");
    }
}
