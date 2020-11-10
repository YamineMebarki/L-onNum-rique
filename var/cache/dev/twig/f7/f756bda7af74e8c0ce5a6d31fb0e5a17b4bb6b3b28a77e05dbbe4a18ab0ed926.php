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

/* vendor/symfony/http-client/Tests/CachingHttpClientTest.php */
class __TwigTemplate_39792cc892d91276febf0091f904bcd8e2e1f042935d265e0f9bcd3dbcf8fa08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/CachingHttpClientTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/CachingHttpClientTest.php"));

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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpClient\\CachingHttpClient;
use Symfony\\Component\\HttpClient\\MockHttpClient;
use Symfony\\Component\\HttpClient\\Response\\MockResponse;
use Symfony\\Component\\HttpKernel\\HttpCache\\Store;

class CachingHttpClientTest extends TestCase
{
    public function testRequestHeaders()
    {
        \$options = [
            'headers' => [
                'Application-Name' => 'test1234',
                'DevLaon-Name-Header' => 'test12345',
            ],
        ];

        \$mockClient = new MockHttpClient();
        \$store = new Store(sys_get_temp_dir().'/sf_http_cache');
        \$client = new CachingHttpClient(\$mockClient, \$store, \$options);

        \$response = \$client->request('GET', 'http://example.com/foo-bar');

        rmdir(sys_get_temp_dir().'/sf_http_cache');
        self::assertInstanceOf(MockResponse::class, \$response);
        self::assertSame(\$response->getRequestOptions()['normalized_headers']['application-name'][0], 'Application-Name: test1234');
        self::assertSame(\$response->getRequestOptions()['normalized_headers']['test-name-header'][0], 'DevLaon-Name-Header: test12345');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Tests/CachingHttpClientTest.php";
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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpClient\\CachingHttpClient;
use Symfony\\Component\\HttpClient\\MockHttpClient;
use Symfony\\Component\\HttpClient\\Response\\MockResponse;
use Symfony\\Component\\HttpKernel\\HttpCache\\Store;

class CachingHttpClientTest extends TestCase
{
    public function testRequestHeaders()
    {
        \$options = [
            'headers' => [
                'Application-Name' => 'test1234',
                'DevLaon-Name-Header' => 'test12345',
            ],
        ];

        \$mockClient = new MockHttpClient();
        \$store = new Store(sys_get_temp_dir().'/sf_http_cache');
        \$client = new CachingHttpClient(\$mockClient, \$store, \$options);

        \$response = \$client->request('GET', 'http://example.com/foo-bar');

        rmdir(sys_get_temp_dir().'/sf_http_cache');
        self::assertInstanceOf(MockResponse::class, \$response);
        self::assertSame(\$response->getRequestOptions()['normalized_headers']['application-name'][0], 'Application-Name: test1234');
        self::assertSame(\$response->getRequestOptions()['normalized_headers']['test-name-header'][0], 'DevLaon-Name-Header: test12345');
    }
}
", "vendor/symfony/http-client/Tests/CachingHttpClientTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Tests/CachingHttpClientTest.php");
    }
}
