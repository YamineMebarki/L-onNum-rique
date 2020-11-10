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

/* vendor/symfony/routing/Tests/RequestContextTest.php */
class __TwigTemplate_5cbb232b3a816074df0f5d4b9fcbd828bd8648baf18d7a73daea45a1121af4d1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/RequestContextTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/RequestContextTest.php"));

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

namespace Symfony\\Component\\Routing\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\RequestContext;

class RequestContextTest extends TestCase
{
    public function testConstruct()
    {
        \$requestContext = new RequestContext(
            'foo',
            'post',
            'foo.bar',
            'HTTPS',
            8080,
            444,
            '/baz',
            'bar=foobar'
        );

        \$this->assertEquals('foo', \$requestContext->getBaseUrl());
        \$this->assertEquals('POST', \$requestContext->getMethod());
        \$this->assertEquals('foo.bar', \$requestContext->getHost());
        \$this->assertEquals('https', \$requestContext->getScheme());
        \$this->assertSame(8080, \$requestContext->getHttpPort());
        \$this->assertSame(444, \$requestContext->getHttpsPort());
        \$this->assertEquals('/baz', \$requestContext->getPathInfo());
        \$this->assertEquals('bar=foobar', \$requestContext->getQueryString());
    }

    public function testFromRequest()
    {
        \$request = Request::create('https://test.com:444/foo?bar=baz');
        \$requestContext = new RequestContext();
        \$requestContext->setHttpPort(123);
        \$requestContext->fromRequest(\$request);

        \$this->assertEquals('', \$requestContext->getBaseUrl());
        \$this->assertEquals('GET', \$requestContext->getMethod());
        \$this->assertEquals('test.com', \$requestContext->getHost());
        \$this->assertEquals('https', \$requestContext->getScheme());
        \$this->assertEquals('/foo', \$requestContext->getPathInfo());
        \$this->assertEquals('bar=baz', \$requestContext->getQueryString());
        \$this->assertSame(123, \$requestContext->getHttpPort());
        \$this->assertSame(444, \$requestContext->getHttpsPort());

        \$request = Request::create('http://test.com:8080/foo?bar=baz');
        \$requestContext = new RequestContext();
        \$requestContext->setHttpsPort(567);
        \$requestContext->fromRequest(\$request);

        \$this->assertSame(8080, \$requestContext->getHttpPort());
        \$this->assertSame(567, \$requestContext->getHttpsPort());
    }

    public function testGetParameters()
    {
        \$requestContext = new RequestContext();
        \$this->assertEquals([], \$requestContext->getParameters());

        \$requestContext->setParameters(['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$requestContext->getParameters());
    }

    public function testHasParameter()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setParameters(['foo' => 'bar']);

        \$this->assertTrue(\$requestContext->hasParameter('foo'));
        \$this->assertFalse(\$requestContext->hasParameter('baz'));
    }

    public function testGetParameter()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setParameters(['foo' => 'bar']);

        \$this->assertEquals('bar', \$requestContext->getParameter('foo'));
        \$this->assertNull(\$requestContext->getParameter('baz'));
    }

    public function testSetParameter()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setParameter('foo', 'bar');

        \$this->assertEquals('bar', \$requestContext->getParameter('foo'));
    }

    public function testMethod()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setMethod('post');

        \$this->assertSame('POST', \$requestContext->getMethod());
    }

    public function testScheme()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setScheme('HTTPS');

        \$this->assertSame('https', \$requestContext->getScheme());
    }

    public function testHost()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setHost('eXampLe.com');

        \$this->assertSame('example.com', \$requestContext->getHost());
    }

    public function testQueryString()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setQueryString(null);

        \$this->assertSame('', \$requestContext->getQueryString());
    }

    public function testPort()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setHttpPort('123');
        \$requestContext->setHttpsPort('456');

        \$this->assertSame(123, \$requestContext->getHttpPort());
        \$this->assertSame(456, \$requestContext->getHttpsPort());
    }

    public function testFluentInterface()
    {
        \$requestContext = new RequestContext();

        \$this->assertSame(\$requestContext, \$requestContext->setBaseUrl('/app.php'));
        \$this->assertSame(\$requestContext, \$requestContext->setPathInfo('/index'));
        \$this->assertSame(\$requestContext, \$requestContext->setMethod('POST'));
        \$this->assertSame(\$requestContext, \$requestContext->setScheme('https'));
        \$this->assertSame(\$requestContext, \$requestContext->setHost('example.com'));
        \$this->assertSame(\$requestContext, \$requestContext->setQueryString('foo=bar'));
        \$this->assertSame(\$requestContext, \$requestContext->setHttpPort(80));
        \$this->assertSame(\$requestContext, \$requestContext->setHttpsPort(443));
        \$this->assertSame(\$requestContext, \$requestContext->setParameters([]));
        \$this->assertSame(\$requestContext, \$requestContext->setParameter('foo', 'bar'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/RequestContextTest.php";
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

namespace Symfony\\Component\\Routing\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\RequestContext;

class RequestContextTest extends TestCase
{
    public function testConstruct()
    {
        \$requestContext = new RequestContext(
            'foo',
            'post',
            'foo.bar',
            'HTTPS',
            8080,
            444,
            '/baz',
            'bar=foobar'
        );

        \$this->assertEquals('foo', \$requestContext->getBaseUrl());
        \$this->assertEquals('POST', \$requestContext->getMethod());
        \$this->assertEquals('foo.bar', \$requestContext->getHost());
        \$this->assertEquals('https', \$requestContext->getScheme());
        \$this->assertSame(8080, \$requestContext->getHttpPort());
        \$this->assertSame(444, \$requestContext->getHttpsPort());
        \$this->assertEquals('/baz', \$requestContext->getPathInfo());
        \$this->assertEquals('bar=foobar', \$requestContext->getQueryString());
    }

    public function testFromRequest()
    {
        \$request = Request::create('https://test.com:444/foo?bar=baz');
        \$requestContext = new RequestContext();
        \$requestContext->setHttpPort(123);
        \$requestContext->fromRequest(\$request);

        \$this->assertEquals('', \$requestContext->getBaseUrl());
        \$this->assertEquals('GET', \$requestContext->getMethod());
        \$this->assertEquals('test.com', \$requestContext->getHost());
        \$this->assertEquals('https', \$requestContext->getScheme());
        \$this->assertEquals('/foo', \$requestContext->getPathInfo());
        \$this->assertEquals('bar=baz', \$requestContext->getQueryString());
        \$this->assertSame(123, \$requestContext->getHttpPort());
        \$this->assertSame(444, \$requestContext->getHttpsPort());

        \$request = Request::create('http://test.com:8080/foo?bar=baz');
        \$requestContext = new RequestContext();
        \$requestContext->setHttpsPort(567);
        \$requestContext->fromRequest(\$request);

        \$this->assertSame(8080, \$requestContext->getHttpPort());
        \$this->assertSame(567, \$requestContext->getHttpsPort());
    }

    public function testGetParameters()
    {
        \$requestContext = new RequestContext();
        \$this->assertEquals([], \$requestContext->getParameters());

        \$requestContext->setParameters(['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$requestContext->getParameters());
    }

    public function testHasParameter()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setParameters(['foo' => 'bar']);

        \$this->assertTrue(\$requestContext->hasParameter('foo'));
        \$this->assertFalse(\$requestContext->hasParameter('baz'));
    }

    public function testGetParameter()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setParameters(['foo' => 'bar']);

        \$this->assertEquals('bar', \$requestContext->getParameter('foo'));
        \$this->assertNull(\$requestContext->getParameter('baz'));
    }

    public function testSetParameter()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setParameter('foo', 'bar');

        \$this->assertEquals('bar', \$requestContext->getParameter('foo'));
    }

    public function testMethod()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setMethod('post');

        \$this->assertSame('POST', \$requestContext->getMethod());
    }

    public function testScheme()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setScheme('HTTPS');

        \$this->assertSame('https', \$requestContext->getScheme());
    }

    public function testHost()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setHost('eXampLe.com');

        \$this->assertSame('example.com', \$requestContext->getHost());
    }

    public function testQueryString()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setQueryString(null);

        \$this->assertSame('', \$requestContext->getQueryString());
    }

    public function testPort()
    {
        \$requestContext = new RequestContext();
        \$requestContext->setHttpPort('123');
        \$requestContext->setHttpsPort('456');

        \$this->assertSame(123, \$requestContext->getHttpPort());
        \$this->assertSame(456, \$requestContext->getHttpsPort());
    }

    public function testFluentInterface()
    {
        \$requestContext = new RequestContext();

        \$this->assertSame(\$requestContext, \$requestContext->setBaseUrl('/app.php'));
        \$this->assertSame(\$requestContext, \$requestContext->setPathInfo('/index'));
        \$this->assertSame(\$requestContext, \$requestContext->setMethod('POST'));
        \$this->assertSame(\$requestContext, \$requestContext->setScheme('https'));
        \$this->assertSame(\$requestContext, \$requestContext->setHost('example.com'));
        \$this->assertSame(\$requestContext, \$requestContext->setQueryString('foo=bar'));
        \$this->assertSame(\$requestContext, \$requestContext->setHttpPort(80));
        \$this->assertSame(\$requestContext, \$requestContext->setHttpsPort(443));
        \$this->assertSame(\$requestContext, \$requestContext->setParameters([]));
        \$this->assertSame(\$requestContext, \$requestContext->setParameter('foo', 'bar'));
    }
}
", "vendor/symfony/routing/Tests/RequestContextTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/RequestContextTest.php");
    }
}
