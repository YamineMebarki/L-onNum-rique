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

/* vendor/symfony/http-client/Tests/ScopingHttpClientTest.php */
class __TwigTemplate_b7cced769a755f650b18c05c4686802e94eb5da7c6c73ba8669beae1d97ddd8c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/ScopingHttpClientTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/ScopingHttpClientTest.php"));

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
use Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException;
use Symfony\\Component\\HttpClient\\MockHttpClient;
use Symfony\\Component\\HttpClient\\ScopingHttpClient;

class ScopingHttpClientTest extends TestCase
{
    public function testRelativeUrl()
    {
        \$mockClient = new MockHttpClient();
        \$client = new ScopingHttpClient(\$mockClient, []);

        \$this->expectException(InvalidArgumentException::class);
        \$client->request('GET', '/foo');
    }

    public function testRelativeUrlWithDefaultRegexp()
    {
        \$mockClient = new MockHttpClient();
        \$client = new ScopingHttpClient(\$mockClient, ['.*' => ['base_uri' => 'http://example.com']], '.*');

        \$this->assertSame('http://example.com/foo', \$client->request('GET', '/foo')->getInfo('url'));
    }

    /**
     * @dataProvider provideMatchingUrls
     */
    public function testMatchingUrls(string \$regexp, string \$url, array \$options)
    {
        \$mockClient = new MockHttpClient();
        \$client = new ScopingHttpClient(\$mockClient, \$options);

        \$response = \$client->request('GET', \$url);
        \$requestedOptions = \$response->getRequestOptions();

        \$this->assertSame(\$options[\$regexp]['case'], \$requestedOptions['case']);
    }

    public function provideMatchingUrls()
    {
        \$defaultOptions = [
            '.*/foo-bar' => ['case' => 1],
            '.*' => ['case' => 2],
        ];

        yield ['regexp' => '.*/foo-bar', 'url' => 'http://example.com/foo-bar', 'default_options' => \$defaultOptions];
        yield ['regexp' => '.*', 'url' => 'http://example.com/bar-foo', 'default_options' => \$defaultOptions];
        yield ['regexp' => '.*', 'url' => 'http://example.com/foobar', 'default_options' => \$defaultOptions];
    }

    public function testMatchingUrlsAndOptions()
    {
        \$defaultOptions = [
            '.*/foo-bar' => ['headers' => ['X-FooBar' => 'unit-test-foo-bar']],
            '.*' => ['headers' => ['Content-Type' => 'text/html']],
        ];

        \$mockClient = new MockHttpClient();
        \$client = new ScopingHttpClient(\$mockClient, \$defaultOptions);

        \$response = \$client->request('GET', 'http://example.com/foo-bar', ['json' => ['url' => 'http://example.com']]);
        \$requestOptions = \$response->getRequestOptions();
        \$this->assertSame('Content-Type: application/json', \$requestOptions['headers'][1]);
        \$requestJson = json_decode(\$requestOptions['body'], true);
        \$this->assertSame('http://example.com', \$requestJson['url']);
        \$this->assertSame('X-FooBar: '.\$defaultOptions['.*/foo-bar']['headers']['X-FooBar'], \$requestOptions['headers'][0]);

        \$response = \$client->request('GET', 'http://example.com/bar-foo', ['headers' => ['X-FooBar' => 'unit-test']]);
        \$requestOptions = \$response->getRequestOptions();
        \$this->assertSame('X-FooBar: unit-test', \$requestOptions['headers'][0]);
        \$this->assertSame('Content-Type: text/html', \$requestOptions['headers'][1]);

        \$response = \$client->request('GET', 'http://example.com/foobar-foo', ['headers' => ['X-FooBar' => 'unit-test']]);
        \$requestOptions = \$response->getRequestOptions();
        \$this->assertSame('X-FooBar: unit-test', \$requestOptions['headers'][0]);
        \$this->assertSame('Content-Type: text/html', \$requestOptions['headers'][1]);
    }

    public function testForBaseUri()
    {
        \$client = ScopingHttpClient::forBaseUri(new MockHttpClient(), 'http://example.com/foo');

        \$response = \$client->request('GET', '/bar');
        \$this->assertSame('http://example.com/foo', implode('', \$response->getRequestOptions()['base_uri']));
        \$this->assertSame('http://example.com/bar', \$response->getInfo('url'));

        \$response = \$client->request('GET', 'http://foo.bar/');
        \$this->assertNull(\$response->getRequestOptions()['base_uri']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Tests/ScopingHttpClientTest.php";
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
use Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException;
use Symfony\\Component\\HttpClient\\MockHttpClient;
use Symfony\\Component\\HttpClient\\ScopingHttpClient;

class ScopingHttpClientTest extends TestCase
{
    public function testRelativeUrl()
    {
        \$mockClient = new MockHttpClient();
        \$client = new ScopingHttpClient(\$mockClient, []);

        \$this->expectException(InvalidArgumentException::class);
        \$client->request('GET', '/foo');
    }

    public function testRelativeUrlWithDefaultRegexp()
    {
        \$mockClient = new MockHttpClient();
        \$client = new ScopingHttpClient(\$mockClient, ['.*' => ['base_uri' => 'http://example.com']], '.*');

        \$this->assertSame('http://example.com/foo', \$client->request('GET', '/foo')->getInfo('url'));
    }

    /**
     * @dataProvider provideMatchingUrls
     */
    public function testMatchingUrls(string \$regexp, string \$url, array \$options)
    {
        \$mockClient = new MockHttpClient();
        \$client = new ScopingHttpClient(\$mockClient, \$options);

        \$response = \$client->request('GET', \$url);
        \$requestedOptions = \$response->getRequestOptions();

        \$this->assertSame(\$options[\$regexp]['case'], \$requestedOptions['case']);
    }

    public function provideMatchingUrls()
    {
        \$defaultOptions = [
            '.*/foo-bar' => ['case' => 1],
            '.*' => ['case' => 2],
        ];

        yield ['regexp' => '.*/foo-bar', 'url' => 'http://example.com/foo-bar', 'default_options' => \$defaultOptions];
        yield ['regexp' => '.*', 'url' => 'http://example.com/bar-foo', 'default_options' => \$defaultOptions];
        yield ['regexp' => '.*', 'url' => 'http://example.com/foobar', 'default_options' => \$defaultOptions];
    }

    public function testMatchingUrlsAndOptions()
    {
        \$defaultOptions = [
            '.*/foo-bar' => ['headers' => ['X-FooBar' => 'unit-test-foo-bar']],
            '.*' => ['headers' => ['Content-Type' => 'text/html']],
        ];

        \$mockClient = new MockHttpClient();
        \$client = new ScopingHttpClient(\$mockClient, \$defaultOptions);

        \$response = \$client->request('GET', 'http://example.com/foo-bar', ['json' => ['url' => 'http://example.com']]);
        \$requestOptions = \$response->getRequestOptions();
        \$this->assertSame('Content-Type: application/json', \$requestOptions['headers'][1]);
        \$requestJson = json_decode(\$requestOptions['body'], true);
        \$this->assertSame('http://example.com', \$requestJson['url']);
        \$this->assertSame('X-FooBar: '.\$defaultOptions['.*/foo-bar']['headers']['X-FooBar'], \$requestOptions['headers'][0]);

        \$response = \$client->request('GET', 'http://example.com/bar-foo', ['headers' => ['X-FooBar' => 'unit-test']]);
        \$requestOptions = \$response->getRequestOptions();
        \$this->assertSame('X-FooBar: unit-test', \$requestOptions['headers'][0]);
        \$this->assertSame('Content-Type: text/html', \$requestOptions['headers'][1]);

        \$response = \$client->request('GET', 'http://example.com/foobar-foo', ['headers' => ['X-FooBar' => 'unit-test']]);
        \$requestOptions = \$response->getRequestOptions();
        \$this->assertSame('X-FooBar: unit-test', \$requestOptions['headers'][0]);
        \$this->assertSame('Content-Type: text/html', \$requestOptions['headers'][1]);
    }

    public function testForBaseUri()
    {
        \$client = ScopingHttpClient::forBaseUri(new MockHttpClient(), 'http://example.com/foo');

        \$response = \$client->request('GET', '/bar');
        \$this->assertSame('http://example.com/foo', implode('', \$response->getRequestOptions()['base_uri']));
        \$this->assertSame('http://example.com/bar', \$response->getInfo('url'));

        \$response = \$client->request('GET', 'http://foo.bar/');
        \$this->assertNull(\$response->getRequestOptions()['base_uri']);
    }
}
", "vendor/symfony/http-client/Tests/ScopingHttpClientTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Tests/ScopingHttpClientTest.php");
    }
}
