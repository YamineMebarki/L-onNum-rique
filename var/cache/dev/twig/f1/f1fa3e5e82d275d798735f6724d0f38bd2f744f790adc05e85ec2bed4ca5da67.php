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

/* vendor/symfony/browser-kit/Tests/HttpBrowserTest.php */
class __TwigTemplate_ce015c5aa97a791c14c6a62f73dbfd5e181175d6b52f338bc5b53e2480bf8836 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/HttpBrowserTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/HttpBrowserTest.php"));

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

namespace Symfony\\Component\\BrowserKit\\Tests;

use Symfony\\Component\\BrowserKit\\CookieJar;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\BrowserKit\\HttpBrowser;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;
use Symfony\\Contracts\\HttpClient\\ResponseInterface;

class HttpBrowserTest extends AbstractBrowserTest
{
    public function getBrowser(array \$server = [], History \$history = null, CookieJar \$cookieJar = null)
    {
        return new TestHttpClient(\$server, \$history, \$cookieJar);
    }

    /**
     * @dataProvider validContentTypes
     */
    public function testRequestHeaders(array \$request, array \$exepectedCall)
    {
        \$client = \$this->createMock(HttpClientInterface::class);
        \$client
            ->expects(\$this->once())
            ->method('request')
            ->with(...\$exepectedCall)
            ->willReturn(\$this->createMock(ResponseInterface::class));

        \$browser = new HttpBrowser(\$client);
        \$browser->request(...\$request);
    }

    public function validContentTypes()
    {
        \$defaultHeaders = ['user-agent' => 'Symfony BrowserKit', 'host' => 'example.com'];
        yield 'GET/HEAD' => [
            ['GET', 'http://example.com/', ['key' => 'value']],
            ['GET', 'http://example.com/', ['headers' => \$defaultHeaders, 'body' => '', 'max_redirects' => 0]],
        ];
        yield 'empty form' => [
            ['POST', 'http://example.com/'],
            ['POST', 'http://example.com/', ['headers' => \$defaultHeaders, 'body' => '', 'max_redirects' => 0]],
        ];
        yield 'form' => [
            ['POST', 'http://example.com/', ['key' => 'value', 'key2' => 'value']],
            ['POST', 'http://example.com/', ['headers' => \$defaultHeaders + ['Content-Type' => 'application/x-www-form-urlencoded'], 'body' => 'key=value&key2=value', 'max_redirects' => 0]],
        ];
        yield 'content' => [
            ['POST', 'http://example.com/', [], [], [], 'content'],
            ['POST', 'http://example.com/', ['headers' => \$defaultHeaders + ['Content-Type: text/plain; charset=utf-8', 'Content-Transfer-Encoding: 8bit'], 'body' => 'content', 'max_redirects' => 0]],
        ];
    }

    public function testMultiPartRequest()
    {
        \$client = \$this->createMock(HttpClientInterface::class);
        \$client
            ->expects(\$this->once())
            ->method('request')
            ->with('POST', 'http://example.com/', \$this->callback(function (\$options) {
                \$this->assertStringContainsString('Content-Type: multipart/form-data', implode('', \$options['headers']));
                \$this->assertInstanceOf('\\Generator', \$options['body']);
                \$this->assertStringContainsString('my_file', implode('', iterator_to_array(\$options['body'])));

                return true;
            }))
            ->willReturn(\$this->createMock(ResponseInterface::class));

        \$browser = new HttpBrowser(\$client);
        \$path = tempnam(sys_get_temp_dir(), 'http');
        file_put_contents(\$path, 'my_file');
        \$browser->request('POST', 'http://example.com/', [], ['file' => ['tmp_name' => \$path, 'name' => 'foo']]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/Tests/HttpBrowserTest.php";
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

namespace Symfony\\Component\\BrowserKit\\Tests;

use Symfony\\Component\\BrowserKit\\CookieJar;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\BrowserKit\\HttpBrowser;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;
use Symfony\\Contracts\\HttpClient\\ResponseInterface;

class HttpBrowserTest extends AbstractBrowserTest
{
    public function getBrowser(array \$server = [], History \$history = null, CookieJar \$cookieJar = null)
    {
        return new TestHttpClient(\$server, \$history, \$cookieJar);
    }

    /**
     * @dataProvider validContentTypes
     */
    public function testRequestHeaders(array \$request, array \$exepectedCall)
    {
        \$client = \$this->createMock(HttpClientInterface::class);
        \$client
            ->expects(\$this->once())
            ->method('request')
            ->with(...\$exepectedCall)
            ->willReturn(\$this->createMock(ResponseInterface::class));

        \$browser = new HttpBrowser(\$client);
        \$browser->request(...\$request);
    }

    public function validContentTypes()
    {
        \$defaultHeaders = ['user-agent' => 'Symfony BrowserKit', 'host' => 'example.com'];
        yield 'GET/HEAD' => [
            ['GET', 'http://example.com/', ['key' => 'value']],
            ['GET', 'http://example.com/', ['headers' => \$defaultHeaders, 'body' => '', 'max_redirects' => 0]],
        ];
        yield 'empty form' => [
            ['POST', 'http://example.com/'],
            ['POST', 'http://example.com/', ['headers' => \$defaultHeaders, 'body' => '', 'max_redirects' => 0]],
        ];
        yield 'form' => [
            ['POST', 'http://example.com/', ['key' => 'value', 'key2' => 'value']],
            ['POST', 'http://example.com/', ['headers' => \$defaultHeaders + ['Content-Type' => 'application/x-www-form-urlencoded'], 'body' => 'key=value&key2=value', 'max_redirects' => 0]],
        ];
        yield 'content' => [
            ['POST', 'http://example.com/', [], [], [], 'content'],
            ['POST', 'http://example.com/', ['headers' => \$defaultHeaders + ['Content-Type: text/plain; charset=utf-8', 'Content-Transfer-Encoding: 8bit'], 'body' => 'content', 'max_redirects' => 0]],
        ];
    }

    public function testMultiPartRequest()
    {
        \$client = \$this->createMock(HttpClientInterface::class);
        \$client
            ->expects(\$this->once())
            ->method('request')
            ->with('POST', 'http://example.com/', \$this->callback(function (\$options) {
                \$this->assertStringContainsString('Content-Type: multipart/form-data', implode('', \$options['headers']));
                \$this->assertInstanceOf('\\Generator', \$options['body']);
                \$this->assertStringContainsString('my_file', implode('', iterator_to_array(\$options['body'])));

                return true;
            }))
            ->willReturn(\$this->createMock(ResponseInterface::class));

        \$browser = new HttpBrowser(\$client);
        \$path = tempnam(sys_get_temp_dir(), 'http');
        file_put_contents(\$path, 'my_file');
        \$browser->request('POST', 'http://example.com/', [], ['file' => ['tmp_name' => \$path, 'name' => 'foo']]);
    }
}
", "vendor/symfony/browser-kit/Tests/HttpBrowserTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/Tests/HttpBrowserTest.php");
    }
}
