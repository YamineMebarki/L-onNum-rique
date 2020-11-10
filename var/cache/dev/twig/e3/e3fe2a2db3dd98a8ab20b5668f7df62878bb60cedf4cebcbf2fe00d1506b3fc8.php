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

/* vendor/symfony/http-client/HttpClient.php */
class __TwigTemplate_e4d696666414048900b8646a3b2231babd17b1bd6c6ccb61c08b23354fa0c792 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/HttpClient.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/HttpClient.php"));

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

namespace Symfony\\Component\\HttpClient;

use Symfony\\Contracts\\HttpClient\\HttpClientInterface;

/**
 * A factory to instantiate the best possible HTTP client for the runtime.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @experimental in 4.3
 */
final class HttpClient
{
    /**
     * @param array \$defaultOptions     Default requests' options
     * @param int   \$maxHostConnections The maximum number of connections to a single host
     * @param int   \$maxPendingPushes   The maximum number of pushed responses to accept in the queue
     *
     * @see HttpClientInterface::OPTIONS_DEFAULTS for available options
     */
    public static function create(array \$defaultOptions = [], int \$maxHostConnections = 6, int \$maxPendingPushes = 50): HttpClientInterface
    {
        if (\\extension_loaded('curl')) {
            if ('\\\\' !== \\DIRECTORY_SEPARATOR || ini_get('curl.cainfo') || ini_get('openssl.cafile') || ini_get('openssl.capath')) {
                return new CurlHttpClient(\$defaultOptions, \$maxHostConnections, \$maxPendingPushes);
            }

            @trigger_error('Configure the \"curl.cainfo\", \"openssl.cafile\" or \"openssl.capath\" php.ini setting to enable the CurlHttpClient', E_USER_WARNING);
        }

        return new NativeHttpClient(\$defaultOptions, \$maxHostConnections);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/HttpClient.php";
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

namespace Symfony\\Component\\HttpClient;

use Symfony\\Contracts\\HttpClient\\HttpClientInterface;

/**
 * A factory to instantiate the best possible HTTP client for the runtime.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @experimental in 4.3
 */
final class HttpClient
{
    /**
     * @param array \$defaultOptions     Default requests' options
     * @param int   \$maxHostConnections The maximum number of connections to a single host
     * @param int   \$maxPendingPushes   The maximum number of pushed responses to accept in the queue
     *
     * @see HttpClientInterface::OPTIONS_DEFAULTS for available options
     */
    public static function create(array \$defaultOptions = [], int \$maxHostConnections = 6, int \$maxPendingPushes = 50): HttpClientInterface
    {
        if (\\extension_loaded('curl')) {
            if ('\\\\' !== \\DIRECTORY_SEPARATOR || ini_get('curl.cainfo') || ini_get('openssl.cafile') || ini_get('openssl.capath')) {
                return new CurlHttpClient(\$defaultOptions, \$maxHostConnections, \$maxPendingPushes);
            }

            @trigger_error('Configure the \"curl.cainfo\", \"openssl.cafile\" or \"openssl.capath\" php.ini setting to enable the CurlHttpClient', E_USER_WARNING);
        }

        return new NativeHttpClient(\$defaultOptions, \$maxHostConnections);
    }
}
", "vendor/symfony/http-client/HttpClient.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/HttpClient.php");
    }
}
