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

/* vendor/symfony/http-kernel/Tests/HttpCache/SsiTest.php */
class __TwigTemplate_997c3ee2bc92a8789d5642ffe9f5d1688f865159242b487973a3140ba1c6d4af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/HttpCache/SsiTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/HttpCache/SsiTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\HttpCache;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpCache\\Ssi;

class SsiTest extends TestCase
{
    public function testHasSurrogateSsiCapability()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$request->headers->set('Surrogate-Capability', 'abc=\"SSI/1.0\"');
        \$this->assertTrue(\$ssi->hasSurrogateCapability(\$request));

        \$request = Request::create('/');
        \$request->headers->set('Surrogate-Capability', 'foobar');
        \$this->assertFalse(\$ssi->hasSurrogateCapability(\$request));

        \$request = Request::create('/');
        \$this->assertFalse(\$ssi->hasSurrogateCapability(\$request));
    }

    public function testAddSurrogateSsiCapability()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$ssi->addSurrogateCapability(\$request);
        \$this->assertEquals('symfony=\"SSI/1.0\"', \$request->headers->get('Surrogate-Capability'));

        \$ssi->addSurrogateCapability(\$request);
        \$this->assertEquals('symfony=\"SSI/1.0\", symfony=\"SSI/1.0\"', \$request->headers->get('Surrogate-Capability'));
    }

    public function testAddSurrogateControl()
    {
        \$ssi = new Ssi();

        \$response = new Response('foo <!--#include virtual=\"\" -->');
        \$ssi->addSurrogateControl(\$response);
        \$this->assertEquals('content=\"SSI/1.0\"', \$response->headers->get('Surrogate-Control'));

        \$response = new Response('foo');
        \$ssi->addSurrogateControl(\$response);
        \$this->assertEquals('', \$response->headers->get('Surrogate-Control'));
    }

    public function testNeedsSsiParsing()
    {
        \$ssi = new Ssi();

        \$response = new Response();
        \$response->headers->set('Surrogate-Control', 'content=\"SSI/1.0\"');
        \$this->assertTrue(\$ssi->needsParsing(\$response));

        \$response = new Response();
        \$this->assertFalse(\$ssi->needsParsing(\$response));
    }

    public function testRenderIncludeTag()
    {
        \$ssi = new Ssi();

        \$this->assertEquals('<!--#include virtual=\"/\" -->', \$ssi->renderIncludeTag('/', '/alt', true));
        \$this->assertEquals('<!--#include virtual=\"/\" -->', \$ssi->renderIncludeTag('/', '/alt', false));
        \$this->assertEquals('<!--#include virtual=\"/\" -->', \$ssi->renderIncludeTag('/'));
    }

    public function testProcessDoesNothingIfContentTypeIsNotHtml()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$response = new Response();
        \$response->headers->set('Content-Type', 'text/plain');
        \$ssi->process(\$request, \$response);

        \$this->assertFalse(\$response->headers->has('x-body-eval'));
    }

    public function testProcess()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$response = new Response('foo <!--#include virtual=\"...\" -->');
        \$ssi->process(\$request, \$response);

        \$this->assertEquals('foo <?php echo \$this->surrogate->handle(\$this, \\'...\\', \\'\\', false) ?>'.\"\\n\", \$response->getContent());
        \$this->assertEquals('SSI', \$response->headers->get('x-body-eval'));

        \$response = new Response('foo <!--#include virtual=\"foo\\'\" -->');
        \$ssi->process(\$request, \$response);

        \$this->assertEquals(\"foo <?php echo \\\$this->surrogate->handle(\\\$this, 'foo\\\\'', '', false) ?>\".\"\\n\", \$response->getContent());
    }

    public function testProcessEscapesPhpTags()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$response = new Response('<?php <? <% <script language=php>');
        \$ssi->process(\$request, \$response);

        \$this->assertEquals('<?php echo \"<?\"; ?>php <?php echo \"<?\"; ?> <?php echo \"<%\"; ?> <?php echo \"<s\"; ?>cript language=php>', \$response->getContent());
    }

    public function testProcessWhenNoSrcInAnSsi()
    {
        \$this->expectException('RuntimeException');
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$response = new Response('foo <!--#include -->');
        \$ssi->process(\$request, \$response);
    }

    public function testProcessRemoveSurrogateControlHeader()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$response = new Response('foo <!--#include virtual=\"...\" -->');
        \$response->headers->set('Surrogate-Control', 'content=\"SSI/1.0\"');
        \$ssi->process(\$request, \$response);
        \$this->assertEquals('SSI', \$response->headers->get('x-body-eval'));

        \$response->headers->set('Surrogate-Control', 'no-store, content=\"SSI/1.0\"');
        \$ssi->process(\$request, \$response);
        \$this->assertEquals('SSI', \$response->headers->get('x-body-eval'));
        \$this->assertEquals('no-store', \$response->headers->get('surrogate-control'));

        \$response->headers->set('Surrogate-Control', 'content=\"SSI/1.0\", no-store');
        \$ssi->process(\$request, \$response);
        \$this->assertEquals('SSI', \$response->headers->get('x-body-eval'));
        \$this->assertEquals('no-store', \$response->headers->get('surrogate-control'));
    }

    public function testHandle()
    {
        \$ssi = new Ssi();
        \$cache = \$this->getCache(Request::create('/'), new Response('foo'));
        \$this->assertEquals('foo', \$ssi->handle(\$cache, '/', '/alt', true));
    }

    public function testHandleWhenResponseIsNot200()
    {
        \$this->expectException('RuntimeException');
        \$ssi = new Ssi();
        \$response = new Response('foo');
        \$response->setStatusCode(404);
        \$cache = \$this->getCache(Request::create('/'), \$response);
        \$ssi->handle(\$cache, '/', '/alt', false);
    }

    public function testHandleWhenResponseIsNot200AndErrorsAreIgnored()
    {
        \$ssi = new Ssi();
        \$response = new Response('foo');
        \$response->setStatusCode(404);
        \$cache = \$this->getCache(Request::create('/'), \$response);
        \$this->assertEquals('', \$ssi->handle(\$cache, '/', '/alt', true));
    }

    public function testHandleWhenResponseIsNot200AndAltIsPresent()
    {
        \$ssi = new Ssi();
        \$response1 = new Response('foo');
        \$response1->setStatusCode(404);
        \$response2 = new Response('bar');
        \$cache = \$this->getCache(Request::create('/'), [\$response1, \$response2]);
        \$this->assertEquals('bar', \$ssi->handle(\$cache, '/', '/alt', false));
    }

    protected function getCache(\$request, \$response)
    {
        \$cache = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache')->setMethods(['getRequest', 'handle'])->disableOriginalConstructor()->getMock();
        \$cache->expects(\$this->any())
              ->method('getRequest')
              ->willReturn(\$request)
        ;
        if (\\is_array(\$response)) {
            \$cache->expects(\$this->any())
                  ->method('handle')
                  ->will(\$this->onConsecutiveCalls(...\$response))
            ;
        } else {
            \$cache->expects(\$this->any())
                  ->method('handle')
                  ->willReturn(\$response)
            ;
        }

        return \$cache;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/HttpCache/SsiTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\HttpCache;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpCache\\Ssi;

class SsiTest extends TestCase
{
    public function testHasSurrogateSsiCapability()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$request->headers->set('Surrogate-Capability', 'abc=\"SSI/1.0\"');
        \$this->assertTrue(\$ssi->hasSurrogateCapability(\$request));

        \$request = Request::create('/');
        \$request->headers->set('Surrogate-Capability', 'foobar');
        \$this->assertFalse(\$ssi->hasSurrogateCapability(\$request));

        \$request = Request::create('/');
        \$this->assertFalse(\$ssi->hasSurrogateCapability(\$request));
    }

    public function testAddSurrogateSsiCapability()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$ssi->addSurrogateCapability(\$request);
        \$this->assertEquals('symfony=\"SSI/1.0\"', \$request->headers->get('Surrogate-Capability'));

        \$ssi->addSurrogateCapability(\$request);
        \$this->assertEquals('symfony=\"SSI/1.0\", symfony=\"SSI/1.0\"', \$request->headers->get('Surrogate-Capability'));
    }

    public function testAddSurrogateControl()
    {
        \$ssi = new Ssi();

        \$response = new Response('foo <!--#include virtual=\"\" -->');
        \$ssi->addSurrogateControl(\$response);
        \$this->assertEquals('content=\"SSI/1.0\"', \$response->headers->get('Surrogate-Control'));

        \$response = new Response('foo');
        \$ssi->addSurrogateControl(\$response);
        \$this->assertEquals('', \$response->headers->get('Surrogate-Control'));
    }

    public function testNeedsSsiParsing()
    {
        \$ssi = new Ssi();

        \$response = new Response();
        \$response->headers->set('Surrogate-Control', 'content=\"SSI/1.0\"');
        \$this->assertTrue(\$ssi->needsParsing(\$response));

        \$response = new Response();
        \$this->assertFalse(\$ssi->needsParsing(\$response));
    }

    public function testRenderIncludeTag()
    {
        \$ssi = new Ssi();

        \$this->assertEquals('<!--#include virtual=\"/\" -->', \$ssi->renderIncludeTag('/', '/alt', true));
        \$this->assertEquals('<!--#include virtual=\"/\" -->', \$ssi->renderIncludeTag('/', '/alt', false));
        \$this->assertEquals('<!--#include virtual=\"/\" -->', \$ssi->renderIncludeTag('/'));
    }

    public function testProcessDoesNothingIfContentTypeIsNotHtml()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$response = new Response();
        \$response->headers->set('Content-Type', 'text/plain');
        \$ssi->process(\$request, \$response);

        \$this->assertFalse(\$response->headers->has('x-body-eval'));
    }

    public function testProcess()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$response = new Response('foo <!--#include virtual=\"...\" -->');
        \$ssi->process(\$request, \$response);

        \$this->assertEquals('foo <?php echo \$this->surrogate->handle(\$this, \\'...\\', \\'\\', false) ?>'.\"\\n\", \$response->getContent());
        \$this->assertEquals('SSI', \$response->headers->get('x-body-eval'));

        \$response = new Response('foo <!--#include virtual=\"foo\\'\" -->');
        \$ssi->process(\$request, \$response);

        \$this->assertEquals(\"foo <?php echo \\\$this->surrogate->handle(\\\$this, 'foo\\\\'', '', false) ?>\".\"\\n\", \$response->getContent());
    }

    public function testProcessEscapesPhpTags()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$response = new Response('<?php <? <% <script language=php>');
        \$ssi->process(\$request, \$response);

        \$this->assertEquals('<?php echo \"<?\"; ?>php <?php echo \"<?\"; ?> <?php echo \"<%\"; ?> <?php echo \"<s\"; ?>cript language=php>', \$response->getContent());
    }

    public function testProcessWhenNoSrcInAnSsi()
    {
        \$this->expectException('RuntimeException');
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$response = new Response('foo <!--#include -->');
        \$ssi->process(\$request, \$response);
    }

    public function testProcessRemoveSurrogateControlHeader()
    {
        \$ssi = new Ssi();

        \$request = Request::create('/');
        \$response = new Response('foo <!--#include virtual=\"...\" -->');
        \$response->headers->set('Surrogate-Control', 'content=\"SSI/1.0\"');
        \$ssi->process(\$request, \$response);
        \$this->assertEquals('SSI', \$response->headers->get('x-body-eval'));

        \$response->headers->set('Surrogate-Control', 'no-store, content=\"SSI/1.0\"');
        \$ssi->process(\$request, \$response);
        \$this->assertEquals('SSI', \$response->headers->get('x-body-eval'));
        \$this->assertEquals('no-store', \$response->headers->get('surrogate-control'));

        \$response->headers->set('Surrogate-Control', 'content=\"SSI/1.0\", no-store');
        \$ssi->process(\$request, \$response);
        \$this->assertEquals('SSI', \$response->headers->get('x-body-eval'));
        \$this->assertEquals('no-store', \$response->headers->get('surrogate-control'));
    }

    public function testHandle()
    {
        \$ssi = new Ssi();
        \$cache = \$this->getCache(Request::create('/'), new Response('foo'));
        \$this->assertEquals('foo', \$ssi->handle(\$cache, '/', '/alt', true));
    }

    public function testHandleWhenResponseIsNot200()
    {
        \$this->expectException('RuntimeException');
        \$ssi = new Ssi();
        \$response = new Response('foo');
        \$response->setStatusCode(404);
        \$cache = \$this->getCache(Request::create('/'), \$response);
        \$ssi->handle(\$cache, '/', '/alt', false);
    }

    public function testHandleWhenResponseIsNot200AndErrorsAreIgnored()
    {
        \$ssi = new Ssi();
        \$response = new Response('foo');
        \$response->setStatusCode(404);
        \$cache = \$this->getCache(Request::create('/'), \$response);
        \$this->assertEquals('', \$ssi->handle(\$cache, '/', '/alt', true));
    }

    public function testHandleWhenResponseIsNot200AndAltIsPresent()
    {
        \$ssi = new Ssi();
        \$response1 = new Response('foo');
        \$response1->setStatusCode(404);
        \$response2 = new Response('bar');
        \$cache = \$this->getCache(Request::create('/'), [\$response1, \$response2]);
        \$this->assertEquals('bar', \$ssi->handle(\$cache, '/', '/alt', false));
    }

    protected function getCache(\$request, \$response)
    {
        \$cache = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache')->setMethods(['getRequest', 'handle'])->disableOriginalConstructor()->getMock();
        \$cache->expects(\$this->any())
              ->method('getRequest')
              ->willReturn(\$request)
        ;
        if (\\is_array(\$response)) {
            \$cache->expects(\$this->any())
                  ->method('handle')
                  ->will(\$this->onConsecutiveCalls(...\$response))
            ;
        } else {
            \$cache->expects(\$this->any())
                  ->method('handle')
                  ->willReturn(\$response)
            ;
        }

        return \$cache;
    }
}
", "vendor/symfony/http-kernel/Tests/HttpCache/SsiTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/HttpCache/SsiTest.php");
    }
}
