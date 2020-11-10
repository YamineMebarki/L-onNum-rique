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

/* vendor/symfony/http-foundation/Tests/StreamedResponseTest.php */
class __TwigTemplate_0ef217685aabce4db4556fd34178e66997d612a3e503e210f46f59806db796d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/StreamedResponseTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/StreamedResponseTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\StreamedResponse;

class StreamedResponseTest extends TestCase
{
    public function testConstructor()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; }, 404, ['Content-Type' => 'text/plain']);

        \$this->assertEquals(404, \$response->getStatusCode());
        \$this->assertEquals('text/plain', \$response->headers->get('Content-Type'));
    }

    public function testPrepareWith11Protocol()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; });
        \$request = Request::create('/');
        \$request->server->set('SERVER_PROTOCOL', 'HTTP/1.1');

        \$response->prepare(\$request);

        \$this->assertEquals('1.1', \$response->getProtocolVersion());
        \$this->assertNotEquals('chunked', \$response->headers->get('Transfer-Encoding'), 'Apache assumes responses with a Transfer-Encoding header set to chunked to already be encoded.');
    }

    public function testPrepareWith10Protocol()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; });
        \$request = Request::create('/');
        \$request->server->set('SERVER_PROTOCOL', 'HTTP/1.0');

        \$response->prepare(\$request);

        \$this->assertEquals('1.0', \$response->getProtocolVersion());
        \$this->assertNull(\$response->headers->get('Transfer-Encoding'));
    }

    public function testPrepareWithHeadRequest()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; }, 200, ['Content-Length' => '123']);
        \$request = Request::create('/', 'HEAD');

        \$response->prepare(\$request);

        \$this->assertSame('123', \$response->headers->get('Content-Length'));
    }

    public function testPrepareWithCacheHeaders()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; }, 200, ['Cache-Control' => 'max-age=600, public']);
        \$request = Request::create('/', 'GET');

        \$response->prepare(\$request);
        \$this->assertEquals('max-age=600, public', \$response->headers->get('Cache-Control'));
    }

    public function testSendContent()
    {
        \$called = 0;

        \$response = new StreamedResponse(function () use (&\$called) { ++\$called; });

        \$response->sendContent();
        \$this->assertEquals(1, \$called);

        \$response->sendContent();
        \$this->assertEquals(1, \$called);
    }

    public function testSendContentWithNonCallable()
    {
        \$this->expectException('LogicException');
        \$response = new StreamedResponse(null);
        \$response->sendContent();
    }

    public function testSetContent()
    {
        \$this->expectException('LogicException');
        \$response = new StreamedResponse(function () { echo 'foo'; });
        \$response->setContent('foo');
    }

    public function testGetContent()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; });
        \$this->assertFalse(\$response->getContent());
    }

    public function testCreate()
    {
        \$response = StreamedResponse::create(function () {}, 204);

        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\StreamedResponse', \$response);
        \$this->assertEquals(204, \$response->getStatusCode());
    }

    public function testReturnThis()
    {
        \$response = new StreamedResponse(function () {});
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\StreamedResponse', \$response->sendContent());
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\StreamedResponse', \$response->sendContent());

        \$response = new StreamedResponse(function () {});
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\StreamedResponse', \$response->sendHeaders());
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\StreamedResponse', \$response->sendHeaders());
    }

    public function testSetNotModified()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; });
        \$modified = \$response->setNotModified();
        \$this->assertObjectHasAttribute('headers', \$modified);
        \$this->assertObjectHasAttribute('content', \$modified);
        \$this->assertObjectHasAttribute('version', \$modified);
        \$this->assertObjectHasAttribute('statusCode', \$modified);
        \$this->assertObjectHasAttribute('statusText', \$modified);
        \$this->assertObjectHasAttribute('charset', \$modified);
        \$this->assertEquals(304, \$modified->getStatusCode());

        ob_start();
        \$modified->sendContent();
        \$string = ob_get_clean();
        \$this->assertEmpty(\$string);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/StreamedResponseTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\StreamedResponse;

class StreamedResponseTest extends TestCase
{
    public function testConstructor()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; }, 404, ['Content-Type' => 'text/plain']);

        \$this->assertEquals(404, \$response->getStatusCode());
        \$this->assertEquals('text/plain', \$response->headers->get('Content-Type'));
    }

    public function testPrepareWith11Protocol()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; });
        \$request = Request::create('/');
        \$request->server->set('SERVER_PROTOCOL', 'HTTP/1.1');

        \$response->prepare(\$request);

        \$this->assertEquals('1.1', \$response->getProtocolVersion());
        \$this->assertNotEquals('chunked', \$response->headers->get('Transfer-Encoding'), 'Apache assumes responses with a Transfer-Encoding header set to chunked to already be encoded.');
    }

    public function testPrepareWith10Protocol()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; });
        \$request = Request::create('/');
        \$request->server->set('SERVER_PROTOCOL', 'HTTP/1.0');

        \$response->prepare(\$request);

        \$this->assertEquals('1.0', \$response->getProtocolVersion());
        \$this->assertNull(\$response->headers->get('Transfer-Encoding'));
    }

    public function testPrepareWithHeadRequest()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; }, 200, ['Content-Length' => '123']);
        \$request = Request::create('/', 'HEAD');

        \$response->prepare(\$request);

        \$this->assertSame('123', \$response->headers->get('Content-Length'));
    }

    public function testPrepareWithCacheHeaders()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; }, 200, ['Cache-Control' => 'max-age=600, public']);
        \$request = Request::create('/', 'GET');

        \$response->prepare(\$request);
        \$this->assertEquals('max-age=600, public', \$response->headers->get('Cache-Control'));
    }

    public function testSendContent()
    {
        \$called = 0;

        \$response = new StreamedResponse(function () use (&\$called) { ++\$called; });

        \$response->sendContent();
        \$this->assertEquals(1, \$called);

        \$response->sendContent();
        \$this->assertEquals(1, \$called);
    }

    public function testSendContentWithNonCallable()
    {
        \$this->expectException('LogicException');
        \$response = new StreamedResponse(null);
        \$response->sendContent();
    }

    public function testSetContent()
    {
        \$this->expectException('LogicException');
        \$response = new StreamedResponse(function () { echo 'foo'; });
        \$response->setContent('foo');
    }

    public function testGetContent()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; });
        \$this->assertFalse(\$response->getContent());
    }

    public function testCreate()
    {
        \$response = StreamedResponse::create(function () {}, 204);

        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\StreamedResponse', \$response);
        \$this->assertEquals(204, \$response->getStatusCode());
    }

    public function testReturnThis()
    {
        \$response = new StreamedResponse(function () {});
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\StreamedResponse', \$response->sendContent());
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\StreamedResponse', \$response->sendContent());

        \$response = new StreamedResponse(function () {});
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\StreamedResponse', \$response->sendHeaders());
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\StreamedResponse', \$response->sendHeaders());
    }

    public function testSetNotModified()
    {
        \$response = new StreamedResponse(function () { echo 'foo'; });
        \$modified = \$response->setNotModified();
        \$this->assertObjectHasAttribute('headers', \$modified);
        \$this->assertObjectHasAttribute('content', \$modified);
        \$this->assertObjectHasAttribute('version', \$modified);
        \$this->assertObjectHasAttribute('statusCode', \$modified);
        \$this->assertObjectHasAttribute('statusText', \$modified);
        \$this->assertObjectHasAttribute('charset', \$modified);
        \$this->assertEquals(304, \$modified->getStatusCode());

        ob_start();
        \$modified->sendContent();
        \$string = ob_get_clean();
        \$this->assertEmpty(\$string);
    }
}
", "vendor/symfony/http-foundation/Tests/StreamedResponseTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/StreamedResponseTest.php");
    }
}
