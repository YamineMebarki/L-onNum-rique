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

/* vendor/symfony/browser-kit/Tests/ResponseTest.php */
class __TwigTemplate_2d3d8434648f49c6f7aa3bafa1cfcdd4853f981ade9854c1145df9deb7a40456 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/ResponseTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/ResponseTest.php"));

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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\BrowserKit\\Response;

class ResponseTest extends TestCase
{
    public function testGetUri()
    {
        \$response = new Response('foo');
        \$this->assertEquals('foo', \$response->getContent(), '->getContent() returns the content of the response');
    }

    /**
     * @group legacy
     */
    public function testGetStatus()
    {
        \$response = new Response('foo', 304);
        \$this->assertEquals('304', \$response->getStatus(), '->getStatus() returns the status of the response');
    }

    public function testGetStatusCode()
    {
        \$response = new Response('foo', 304);
        \$this->assertEquals('304', \$response->getStatusCode(), '->getStatusCode() returns the status of the response');
    }

    public function testGetHeaders()
    {
        \$response = new Response('foo', 200, ['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$response->getHeaders(), '->getHeaders() returns the headers of the response');
    }

    public function testGetHeader()
    {
        \$response = new Response('foo', 200, [
            'Content-Type' => 'text/html',
            'Set-Cookie' => ['foo=bar', 'bar=foo'],
        ]);

        \$this->assertEquals('text/html', \$response->getHeader('Content-Type'), '->getHeader() returns a header of the response');
        \$this->assertEquals('text/html', \$response->getHeader('content-type'), '->getHeader() returns a header of the response');
        \$this->assertEquals('text/html', \$response->getHeader('content_type'), '->getHeader() returns a header of the response');
        \$this->assertEquals('foo=bar', \$response->getHeader('Set-Cookie'), '->getHeader() returns the first header value');
        \$this->assertEquals(['foo=bar', 'bar=foo'], \$response->getHeader('Set-Cookie', false), '->getHeader() returns all header values if first is false');

        \$this->assertNull(\$response->getHeader('foo'), '->getHeader() returns null if the header is not defined');
        \$this->assertEquals([], \$response->getHeader('foo', false), '->getHeader() returns an empty array if the header is not defined and first is set to false');
    }

    public function testMagicToString()
    {
        \$response = new Response('foo', 304, ['foo' => 'bar']);

        \$this->assertEquals(\"foo: bar\\n\\nfoo\", \$response->__toString(), '->__toString() returns the headers and the content as a string');
    }

    public function testMagicToStringWithMultipleSetCookieHeader()
    {
        \$headers = [
            'content-type' => 'text/html; charset=utf-8',
            'set-cookie' => ['foo=bar', 'bar=foo'],
        ];

        \$expected = 'content-type: text/html; charset=utf-8'.\"\\n\";
        \$expected .= 'set-cookie: foo=bar'.\"\\n\";
        \$expected .= 'set-cookie: bar=foo'.\"\\n\\n\";
        \$expected .= 'foo';

        \$response = new Response('foo', 304, \$headers);

        \$this->assertEquals(\$expected, \$response->__toString(), '->__toString() returns the headers and the content as a string');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/Tests/ResponseTest.php";
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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\BrowserKit\\Response;

class ResponseTest extends TestCase
{
    public function testGetUri()
    {
        \$response = new Response('foo');
        \$this->assertEquals('foo', \$response->getContent(), '->getContent() returns the content of the response');
    }

    /**
     * @group legacy
     */
    public function testGetStatus()
    {
        \$response = new Response('foo', 304);
        \$this->assertEquals('304', \$response->getStatus(), '->getStatus() returns the status of the response');
    }

    public function testGetStatusCode()
    {
        \$response = new Response('foo', 304);
        \$this->assertEquals('304', \$response->getStatusCode(), '->getStatusCode() returns the status of the response');
    }

    public function testGetHeaders()
    {
        \$response = new Response('foo', 200, ['foo' => 'bar']);
        \$this->assertEquals(['foo' => 'bar'], \$response->getHeaders(), '->getHeaders() returns the headers of the response');
    }

    public function testGetHeader()
    {
        \$response = new Response('foo', 200, [
            'Content-Type' => 'text/html',
            'Set-Cookie' => ['foo=bar', 'bar=foo'],
        ]);

        \$this->assertEquals('text/html', \$response->getHeader('Content-Type'), '->getHeader() returns a header of the response');
        \$this->assertEquals('text/html', \$response->getHeader('content-type'), '->getHeader() returns a header of the response');
        \$this->assertEquals('text/html', \$response->getHeader('content_type'), '->getHeader() returns a header of the response');
        \$this->assertEquals('foo=bar', \$response->getHeader('Set-Cookie'), '->getHeader() returns the first header value');
        \$this->assertEquals(['foo=bar', 'bar=foo'], \$response->getHeader('Set-Cookie', false), '->getHeader() returns all header values if first is false');

        \$this->assertNull(\$response->getHeader('foo'), '->getHeader() returns null if the header is not defined');
        \$this->assertEquals([], \$response->getHeader('foo', false), '->getHeader() returns an empty array if the header is not defined and first is set to false');
    }

    public function testMagicToString()
    {
        \$response = new Response('foo', 304, ['foo' => 'bar']);

        \$this->assertEquals(\"foo: bar\\n\\nfoo\", \$response->__toString(), '->__toString() returns the headers and the content as a string');
    }

    public function testMagicToStringWithMultipleSetCookieHeader()
    {
        \$headers = [
            'content-type' => 'text/html; charset=utf-8',
            'set-cookie' => ['foo=bar', 'bar=foo'],
        ];

        \$expected = 'content-type: text/html; charset=utf-8'.\"\\n\";
        \$expected .= 'set-cookie: foo=bar'.\"\\n\";
        \$expected .= 'set-cookie: bar=foo'.\"\\n\\n\";
        \$expected .= 'foo';

        \$response = new Response('foo', 304, \$headers);

        \$this->assertEquals(\$expected, \$response->__toString(), '->__toString() returns the headers and the content as a string');
    }
}
", "vendor/symfony/browser-kit/Tests/ResponseTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/Tests/ResponseTest.php");
    }
}
