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

/* vendor/symfony/http-client/Tests/Psr18ClientTest.php */
class __TwigTemplate_7876fe29a5d98c908c9c97f4368b22252e24073fba59a147db52175804b6855d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/Psr18ClientTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/Psr18ClientTest.php"));

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

use Nyholm\\Psr7\\Factory\\Psr17Factory;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpClient\\NativeHttpClient;
use Symfony\\Component\\HttpClient\\Psr18Client;
use Symfony\\Component\\HttpClient\\Psr18NetworkException;
use Symfony\\Component\\HttpClient\\Psr18RequestException;
use Symfony\\Contracts\\HttpClient\\Test\\TestHttpServer;

class Psr18ClientTest extends TestCase
{
    private static \$server;

    public static function setUpBeforeClass(): void
    {
        TestHttpServer::start();
    }

    public function testSendRequest()
    {
        \$factory = new Psr17Factory();
        \$client = new Psr18Client(new NativeHttpClient(), \$factory, \$factory);

        \$response = \$client->sendRequest(\$factory->createRequest('GET', 'http://localhost:8057'));

        \$this->assertSame(200, \$response->getStatusCode());
        \$this->assertSame('application/json', \$response->getHeaderLine('content-type'));

        \$body = json_decode((string) \$response->getBody(), true);

        \$this->assertSame('HTTP/1.1', \$body['SERVER_PROTOCOL']);
    }

    public function testPostRequest()
    {
        \$factory = new Psr17Factory();
        \$client = new Psr18Client(new NativeHttpClient(), \$factory, \$factory);

        \$request = \$factory->createRequest('POST', 'http://localhost:8057/post')
            ->withBody(\$factory->createStream('foo=0123456789'));

        \$response = \$client->sendRequest(\$request);
        \$body = json_decode((string) \$response->getBody(), true);

        \$this->assertSame(['foo' => '0123456789', 'REQUEST_METHOD' => 'POST'], \$body);
    }

    public function testNetworkException()
    {
        \$factory = new Psr17Factory();
        \$client = new Psr18Client(new NativeHttpClient(), \$factory, \$factory);

        \$this->expectException(Psr18NetworkException::class);
        \$client->sendRequest(\$factory->createRequest('GET', 'http://localhost:8058'));
    }

    public function testRequestException()
    {
        \$factory = new Psr17Factory();
        \$client = new Psr18Client(new NativeHttpClient(), \$factory, \$factory);

        \$this->expectException(Psr18RequestException::class);
        \$client->sendRequest(\$factory->createRequest('BAD.METHOD', 'http://localhost:8057'));
    }

    public function test404()
    {
        \$factory = new Psr17Factory();
        \$client = new Psr18Client(new NativeHttpClient());

        \$response = \$client->sendRequest(\$factory->createRequest('GET', 'http://localhost:8057/404'));
        \$this->assertSame(404, \$response->getStatusCode());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Tests/Psr18ClientTest.php";
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

use Nyholm\\Psr7\\Factory\\Psr17Factory;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpClient\\NativeHttpClient;
use Symfony\\Component\\HttpClient\\Psr18Client;
use Symfony\\Component\\HttpClient\\Psr18NetworkException;
use Symfony\\Component\\HttpClient\\Psr18RequestException;
use Symfony\\Contracts\\HttpClient\\Test\\TestHttpServer;

class Psr18ClientTest extends TestCase
{
    private static \$server;

    public static function setUpBeforeClass(): void
    {
        TestHttpServer::start();
    }

    public function testSendRequest()
    {
        \$factory = new Psr17Factory();
        \$client = new Psr18Client(new NativeHttpClient(), \$factory, \$factory);

        \$response = \$client->sendRequest(\$factory->createRequest('GET', 'http://localhost:8057'));

        \$this->assertSame(200, \$response->getStatusCode());
        \$this->assertSame('application/json', \$response->getHeaderLine('content-type'));

        \$body = json_decode((string) \$response->getBody(), true);

        \$this->assertSame('HTTP/1.1', \$body['SERVER_PROTOCOL']);
    }

    public function testPostRequest()
    {
        \$factory = new Psr17Factory();
        \$client = new Psr18Client(new NativeHttpClient(), \$factory, \$factory);

        \$request = \$factory->createRequest('POST', 'http://localhost:8057/post')
            ->withBody(\$factory->createStream('foo=0123456789'));

        \$response = \$client->sendRequest(\$request);
        \$body = json_decode((string) \$response->getBody(), true);

        \$this->assertSame(['foo' => '0123456789', 'REQUEST_METHOD' => 'POST'], \$body);
    }

    public function testNetworkException()
    {
        \$factory = new Psr17Factory();
        \$client = new Psr18Client(new NativeHttpClient(), \$factory, \$factory);

        \$this->expectException(Psr18NetworkException::class);
        \$client->sendRequest(\$factory->createRequest('GET', 'http://localhost:8058'));
    }

    public function testRequestException()
    {
        \$factory = new Psr17Factory();
        \$client = new Psr18Client(new NativeHttpClient(), \$factory, \$factory);

        \$this->expectException(Psr18RequestException::class);
        \$client->sendRequest(\$factory->createRequest('BAD.METHOD', 'http://localhost:8057'));
    }

    public function test404()
    {
        \$factory = new Psr17Factory();
        \$client = new Psr18Client(new NativeHttpClient());

        \$response = \$client->sendRequest(\$factory->createRequest('GET', 'http://localhost:8057/404'));
        \$this->assertSame(404, \$response->getStatusCode());
    }
}
", "vendor/symfony/http-client/Tests/Psr18ClientTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Tests/Psr18ClientTest.php");
    }
}
