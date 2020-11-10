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

/* vendor/symfony/http-kernel/UriSigner.php */
class __TwigTemplate_0b07ea7fa92d28200f9e57ff9b97f62edac6216412c7f46570df185dad6d4428 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/UriSigner.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/UriSigner.php"));

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

namespace Symfony\\Component\\HttpKernel;

/**
 * Signs URIs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UriSigner
{
    private \$secret;
    private \$parameter;

    /**
     * @param string \$secret    A secret
     * @param string \$parameter Query string parameter to use
     */
    public function __construct(string \$secret, string \$parameter = '_hash')
    {
        \$this->secret = \$secret;
        \$this->parameter = \$parameter;
    }

    /**
     * Signs a URI.
     *
     * The given URI is signed by adding the query string parameter
     * which value depends on the URI and the secret.
     *
     * @param string \$uri A URI to sign
     *
     * @return string The signed URI
     */
    public function sign(\$uri)
    {
        \$url = parse_url(\$uri);
        if (isset(\$url['query'])) {
            parse_str(\$url['query'], \$params);
        } else {
            \$params = [];
        }

        \$uri = \$this->buildUrl(\$url, \$params);
        \$params[\$this->parameter] = \$this->computeHash(\$uri);

        return \$this->buildUrl(\$url, \$params);
    }

    /**
     * Checks that a URI contains the correct hash.
     *
     * @param string \$uri A signed URI
     *
     * @return bool True if the URI is signed correctly, false otherwise
     */
    public function check(\$uri)
    {
        \$url = parse_url(\$uri);
        if (isset(\$url['query'])) {
            parse_str(\$url['query'], \$params);
        } else {
            \$params = [];
        }

        if (empty(\$params[\$this->parameter])) {
            return false;
        }

        \$hash = \$params[\$this->parameter];
        unset(\$params[\$this->parameter]);

        return \$this->computeHash(\$this->buildUrl(\$url, \$params)) === \$hash;
    }

    private function computeHash(\$uri)
    {
        return base64_encode(hash_hmac('sha256', \$uri, \$this->secret, true));
    }

    private function buildUrl(array \$url, array \$params = [])
    {
        ksort(\$params, SORT_STRING);
        \$url['query'] = http_build_query(\$params, '', '&');

        \$scheme = isset(\$url['scheme']) ? \$url['scheme'].'://' : '';
        \$host = isset(\$url['host']) ? \$url['host'] : '';
        \$port = isset(\$url['port']) ? ':'.\$url['port'] : '';
        \$user = isset(\$url['user']) ? \$url['user'] : '';
        \$pass = isset(\$url['pass']) ? ':'.\$url['pass'] : '';
        \$pass = (\$user || \$pass) ? \"\$pass@\" : '';
        \$path = isset(\$url['path']) ? \$url['path'] : '';
        \$query = isset(\$url['query']) && \$url['query'] ? '?'.\$url['query'] : '';
        \$fragment = isset(\$url['fragment']) ? '#'.\$url['fragment'] : '';

        return \$scheme.\$user.\$pass.\$host.\$port.\$path.\$query.\$fragment;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/UriSigner.php";
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

namespace Symfony\\Component\\HttpKernel;

/**
 * Signs URIs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UriSigner
{
    private \$secret;
    private \$parameter;

    /**
     * @param string \$secret    A secret
     * @param string \$parameter Query string parameter to use
     */
    public function __construct(string \$secret, string \$parameter = '_hash')
    {
        \$this->secret = \$secret;
        \$this->parameter = \$parameter;
    }

    /**
     * Signs a URI.
     *
     * The given URI is signed by adding the query string parameter
     * which value depends on the URI and the secret.
     *
     * @param string \$uri A URI to sign
     *
     * @return string The signed URI
     */
    public function sign(\$uri)
    {
        \$url = parse_url(\$uri);
        if (isset(\$url['query'])) {
            parse_str(\$url['query'], \$params);
        } else {
            \$params = [];
        }

        \$uri = \$this->buildUrl(\$url, \$params);
        \$params[\$this->parameter] = \$this->computeHash(\$uri);

        return \$this->buildUrl(\$url, \$params);
    }

    /**
     * Checks that a URI contains the correct hash.
     *
     * @param string \$uri A signed URI
     *
     * @return bool True if the URI is signed correctly, false otherwise
     */
    public function check(\$uri)
    {
        \$url = parse_url(\$uri);
        if (isset(\$url['query'])) {
            parse_str(\$url['query'], \$params);
        } else {
            \$params = [];
        }

        if (empty(\$params[\$this->parameter])) {
            return false;
        }

        \$hash = \$params[\$this->parameter];
        unset(\$params[\$this->parameter]);

        return \$this->computeHash(\$this->buildUrl(\$url, \$params)) === \$hash;
    }

    private function computeHash(\$uri)
    {
        return base64_encode(hash_hmac('sha256', \$uri, \$this->secret, true));
    }

    private function buildUrl(array \$url, array \$params = [])
    {
        ksort(\$params, SORT_STRING);
        \$url['query'] = http_build_query(\$params, '', '&');

        \$scheme = isset(\$url['scheme']) ? \$url['scheme'].'://' : '';
        \$host = isset(\$url['host']) ? \$url['host'] : '';
        \$port = isset(\$url['port']) ? ':'.\$url['port'] : '';
        \$user = isset(\$url['user']) ? \$url['user'] : '';
        \$pass = isset(\$url['pass']) ? ':'.\$url['pass'] : '';
        \$pass = (\$user || \$pass) ? \"\$pass@\" : '';
        \$path = isset(\$url['path']) ? \$url['path'] : '';
        \$query = isset(\$url['query']) && \$url['query'] ? '?'.\$url['query'] : '';
        \$fragment = isset(\$url['fragment']) ? '#'.\$url['fragment'] : '';

        return \$scheme.\$user.\$pass.\$host.\$port.\$path.\$query.\$fragment;
    }
}
", "vendor/symfony/http-kernel/UriSigner.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/UriSigner.php");
    }
}
