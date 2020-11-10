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

/* vendor/symfony/http-client/Tests/CurlHttpClientTest.php */
class __TwigTemplate_157daf276209015536b957d4ab5d194d7ee4ccd93ddb320893a373229276ffbd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/CurlHttpClientTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/CurlHttpClientTest.php"));

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

namespace Symfony\\Component\\HttpClient\\Tests;

use Psr\\Log\\AbstractLogger;
use Symfony\\Component\\HttpClient\\CurlHttpClient;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;

/**
 * @requires extension curl
 */
class CurlHttpClientTest extends HttpClientTestCase
{
    protected function getHttpClient(string \$testCase): HttpClientInterface
    {
        return new CurlHttpClient();
    }

    /**
     * @requires PHP 7.2.17
     */
    public function testHttp2Push()
    {
        if (\\PHP_VERSION_ID >= 70300 && \\PHP_VERSION_ID < 70304) {
            \$this->markTestSkipped('PHP 7.3.0 to 7.3.3 don\\'t support HTTP/2 PUSH');
        }

        if (!\\defined('CURLMOPT_PUSHFUNCTION') || 0x073d00 > (\$v = curl_version())['version_number'] || !(CURL_VERSION_HTTP2 & \$v['features'])) {
            \$this->markTestSkipped('curl <7.61 is used or it is not compiled with support for HTTP/2 PUSH');
        }

        \$logger = new class() extends AbstractLogger {
            public \$log = [];

            public function log(\$level, \$message, array \$context = [])
            {
                \$this->log[] = \$message;
            }
        };

        \$client = new CurlHttpClient([], 6, 2);
        \$client->setLogger(\$logger);

        \$index = \$client->request('GET', 'https://http2.akamai.com/');
        \$index->getContent();

        \$css = \$client->request('GET', 'https://http2.akamai.com/resources/push.css');

        \$css->getHeaders();

        \$expected = [
            'Request: \"GET https://http2.akamai.com/\"',
            'Queueing pushed response: \"https://http2.akamai.com/resources/push.css\"',
            'Response: \"200 https://http2.akamai.com/\"',
            'Accepting pushed response: \"GET https://http2.akamai.com/resources/push.css\"',
            'Response: \"200 https://http2.akamai.com/resources/push.css\"',
        ];
        \$this->assertSame(\$expected, \$logger->log);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Tests/CurlHttpClientTest.php";
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

namespace Symfony\\Component\\HttpClient\\Tests;

use Psr\\Log\\AbstractLogger;
use Symfony\\Component\\HttpClient\\CurlHttpClient;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;

/**
 * @requires extension curl
 */
class CurlHttpClientTest extends HttpClientTestCase
{
    protected function getHttpClient(string \$testCase): HttpClientInterface
    {
        return new CurlHttpClient();
    }

    /**
     * @requires PHP 7.2.17
     */
    public function testHttp2Push()
    {
        if (\\PHP_VERSION_ID >= 70300 && \\PHP_VERSION_ID < 70304) {
            \$this->markTestSkipped('PHP 7.3.0 to 7.3.3 don\\'t support HTTP/2 PUSH');
        }

        if (!\\defined('CURLMOPT_PUSHFUNCTION') || 0x073d00 > (\$v = curl_version())['version_number'] || !(CURL_VERSION_HTTP2 & \$v['features'])) {
            \$this->markTestSkipped('curl <7.61 is used or it is not compiled with support for HTTP/2 PUSH');
        }

        \$logger = new class() extends AbstractLogger {
            public \$log = [];

            public function log(\$level, \$message, array \$context = [])
            {
                \$this->log[] = \$message;
            }
        };

        \$client = new CurlHttpClient([], 6, 2);
        \$client->setLogger(\$logger);

        \$index = \$client->request('GET', 'https://http2.akamai.com/');
        \$index->getContent();

        \$css = \$client->request('GET', 'https://http2.akamai.com/resources/push.css');

        \$css->getHeaders();

        \$expected = [
            'Request: \"GET https://http2.akamai.com/\"',
            'Queueing pushed response: \"https://http2.akamai.com/resources/push.css\"',
            'Response: \"200 https://http2.akamai.com/\"',
            'Accepting pushed response: \"GET https://http2.akamai.com/resources/push.css\"',
            'Response: \"200 https://http2.akamai.com/resources/push.css\"',
        ];
        \$this->assertSame(\$expected, \$logger->log);
    }
}
", "vendor/symfony/http-client/Tests/CurlHttpClientTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Tests/CurlHttpClientTest.php");
    }
}
