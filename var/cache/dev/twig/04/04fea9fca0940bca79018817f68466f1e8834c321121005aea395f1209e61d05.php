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

/* vendor/symfony/web-profiler-bundle/Tests/EventListener/WebDebugToolbarListenerTest.php */
class __TwigTemplate_74797ee75cf862b63a891d88320f2fd994b358e57866ec7b38666da791a8544b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/EventListener/WebDebugToolbarListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/EventListener/WebDebugToolbarListenerTest.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener;
use Symfony\\Component\\HttpFoundation\\HeaderBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

class WebDebugToolbarListenerTest extends TestCase
{
    /**
     * @dataProvider getInjectToolbarTests
     */
    public function testInjectToolbar(\$content, \$expected)
    {
        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$m = new \\ReflectionMethod(\$listener, 'injectToolbar');
        \$m->setAccessible(true);

        \$response = new Response(\$content);

        \$m->invoke(\$listener, \$response, Request::create('/'), ['csp_script_nonce' => 'scripto', 'csp_style_nonce' => 'stylo']);
        \$this->assertEquals(\$expected, \$response->getContent());
    }

    public function getInjectToolbarTests()
    {
        return [
            ['<html><head></head><body></body></html>', \"<html><head></head><body>\\nWDT\\n</body></html>\"],
            ['<html>
            <head></head>
            <body>
            <textarea><html><head></head><body></body></html></textarea>
            </body>
            </html>', \"<html>
            <head></head>
            <body>
            <textarea><html><head></head><body></body></html></textarea>
            \\nWDT\\n</body>
            </html>\"],
        ];
    }

    /**
     * @dataProvider provideRedirects
     */
    public function testHtmlRedirectionIsIntercepted(\$statusCode, \$hasSession)
    {
        \$response = new Response('Some content', \$statusCode);
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');
        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(false, 'html', \$hasSession), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock('Redirection'), true);
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals(200, \$response->getStatusCode());
        \$this->assertEquals('Redirection', \$response->getContent());
    }

    public function testNonHtmlRedirectionIsNotIntercepted()
    {
        \$response = new Response('Some content', '301');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');
        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(false, 'json', true), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock('Redirection'), true);
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals(301, \$response->getStatusCode());
        \$this->assertEquals('Some content', \$response->getContent());
    }

    public function testToolbarIsInjected()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals(\"<html><head></head><body>\\nWDT\\n</body></html>\", \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedOnNonHtmlContentType()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');
        \$response->headers->set('Content-Type', 'text/xml');
        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedOnContentDispositionAttachment()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');
        \$response->headers->set('Content-Disposition', 'attachment; filename=test.html');
        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(false, 'html'), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     * @dataProvider provideRedirects
     */
    public function testToolbarIsNotInjectedOnRedirection(\$statusCode, \$hasSession)
    {
        \$response = new Response('<html><head></head><body></body></html>', \$statusCode);
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');
        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(false, 'html', \$hasSession), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    public function provideRedirects()
    {
        return [
            [301, true],
            [302, true],
            [301, false],
            [302, false],
        ];
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedWhenThereIsNoNoXDebugTokenResponseHeader()
    {
        \$response = new Response('<html><head></head><body></body></html>');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedWhenOnSubRequest()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::SUB_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedOnIncompleteHtmlResponses()
    {
        \$response = new Response('<div>Some content</div>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<div>Some content</div>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedOnXmlHttpRequests()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(true), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedOnNonHtmlRequests()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(false, 'json'), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    public function testXDebugUrlHeader()
    {
        \$response = new Response();
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$urlGenerator = \$this->getUrlGeneratorMock();
        \$urlGenerator
            ->expects(\$this->once())
            ->method('generate')
            ->with('_profiler', ['token' => 'xxxxxxxx'], UrlGeneratorInterface::ABSOLUTE_URL)
            ->willReturn('http://mydomain.com/_profiler/xxxxxxxx')
        ;

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock(), false, WebDebugToolbarListener::ENABLED, \$urlGenerator);
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('http://mydomain.com/_profiler/xxxxxxxx', \$response->headers->get('X-Debug-Token-Link'));
    }

    public function testThrowingUrlGenerator()
    {
        \$response = new Response();
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$urlGenerator = \$this->getUrlGeneratorMock();
        \$urlGenerator
            ->expects(\$this->once())
            ->method('generate')
            ->with('_profiler', ['token' => 'xxxxxxxx'])
            ->willThrowException(new \\Exception('foo'))
        ;

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock(), false, WebDebugToolbarListener::ENABLED, \$urlGenerator);
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('Exception: foo', \$response->headers->get('X-Debug-Error'));
    }

    public function testThrowingErrorCleanup()
    {
        \$response = new Response();
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$urlGenerator = \$this->getUrlGeneratorMock();
        \$urlGenerator
            ->expects(\$this->once())
            ->method('generate')
            ->with('_profiler', ['token' => 'xxxxxxxx'])
            ->willThrowException(new \\Exception(\"This\\nmultiline\\r\\ntabbed text should\\tcome out\\r on\\n \\ta single plain\\r\\nline\"))
        ;

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock(), false, WebDebugToolbarListener::ENABLED, \$urlGenerator);
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('Exception: This multiline tabbed text should come out on a single plain line', \$response->headers->get('X-Debug-Error'));
    }

    protected function getRequestMock(\$isXmlHttpRequest = false, \$requestFormat = 'html', \$hasSession = true)
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->setMethods(['getSession', 'isXmlHttpRequest', 'getRequestFormat'])->disableOriginalConstructor()->getMock();
        \$request->expects(\$this->any())
            ->method('isXmlHttpRequest')
            ->willReturn(\$isXmlHttpRequest);
        \$request->expects(\$this->any())
            ->method('getRequestFormat')
            ->willReturn(\$requestFormat);

        \$request->headers = new HeaderBag();

        if (\$hasSession) {
            \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\Session')->disableOriginalConstructor()->getMock();
            \$request->expects(\$this->any())
                ->method('getSession')
                ->willReturn(\$session);
        }

        return \$request;
    }

    protected function getTwigMock(\$render = 'WDT')
    {
        \$templating = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$templating->expects(\$this->any())
            ->method('render')
            ->willReturn(\$render);

        return \$templating;
    }

    protected function getUrlGeneratorMock()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')->getMock();
    }

    protected function getKernelMock()
    {
        return \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Kernel')->disableOriginalConstructor()->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Tests/EventListener/WebDebugToolbarListenerTest.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener;
use Symfony\\Component\\HttpFoundation\\HeaderBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

class WebDebugToolbarListenerTest extends TestCase
{
    /**
     * @dataProvider getInjectToolbarTests
     */
    public function testInjectToolbar(\$content, \$expected)
    {
        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$m = new \\ReflectionMethod(\$listener, 'injectToolbar');
        \$m->setAccessible(true);

        \$response = new Response(\$content);

        \$m->invoke(\$listener, \$response, Request::create('/'), ['csp_script_nonce' => 'scripto', 'csp_style_nonce' => 'stylo']);
        \$this->assertEquals(\$expected, \$response->getContent());
    }

    public function getInjectToolbarTests()
    {
        return [
            ['<html><head></head><body></body></html>', \"<html><head></head><body>\\nWDT\\n</body></html>\"],
            ['<html>
            <head></head>
            <body>
            <textarea><html><head></head><body></body></html></textarea>
            </body>
            </html>', \"<html>
            <head></head>
            <body>
            <textarea><html><head></head><body></body></html></textarea>
            \\nWDT\\n</body>
            </html>\"],
        ];
    }

    /**
     * @dataProvider provideRedirects
     */
    public function testHtmlRedirectionIsIntercepted(\$statusCode, \$hasSession)
    {
        \$response = new Response('Some content', \$statusCode);
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');
        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(false, 'html', \$hasSession), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock('Redirection'), true);
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals(200, \$response->getStatusCode());
        \$this->assertEquals('Redirection', \$response->getContent());
    }

    public function testNonHtmlRedirectionIsNotIntercepted()
    {
        \$response = new Response('Some content', '301');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');
        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(false, 'json', true), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock('Redirection'), true);
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals(301, \$response->getStatusCode());
        \$this->assertEquals('Some content', \$response->getContent());
    }

    public function testToolbarIsInjected()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals(\"<html><head></head><body>\\nWDT\\n</body></html>\", \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedOnNonHtmlContentType()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');
        \$response->headers->set('Content-Type', 'text/xml');
        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedOnContentDispositionAttachment()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');
        \$response->headers->set('Content-Disposition', 'attachment; filename=test.html');
        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(false, 'html'), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     * @dataProvider provideRedirects
     */
    public function testToolbarIsNotInjectedOnRedirection(\$statusCode, \$hasSession)
    {
        \$response = new Response('<html><head></head><body></body></html>', \$statusCode);
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');
        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(false, 'html', \$hasSession), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    public function provideRedirects()
    {
        return [
            [301, true],
            [302, true],
            [301, false],
            [302, false],
        ];
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedWhenThereIsNoNoXDebugTokenResponseHeader()
    {
        \$response = new Response('<html><head></head><body></body></html>');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedWhenOnSubRequest()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::SUB_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedOnIncompleteHtmlResponses()
    {
        \$response = new Response('<div>Some content</div>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<div>Some content</div>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedOnXmlHttpRequests()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(true), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    /**
     * @depends testToolbarIsInjected
     */
    public function testToolbarIsNotInjectedOnNonHtmlRequests()
    {
        \$response = new Response('<html><head></head><body></body></html>');
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(false, 'json'), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock());
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('<html><head></head><body></body></html>', \$response->getContent());
    }

    public function testXDebugUrlHeader()
    {
        \$response = new Response();
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$urlGenerator = \$this->getUrlGeneratorMock();
        \$urlGenerator
            ->expects(\$this->once())
            ->method('generate')
            ->with('_profiler', ['token' => 'xxxxxxxx'], UrlGeneratorInterface::ABSOLUTE_URL)
            ->willReturn('http://mydomain.com/_profiler/xxxxxxxx')
        ;

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock(), false, WebDebugToolbarListener::ENABLED, \$urlGenerator);
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('http://mydomain.com/_profiler/xxxxxxxx', \$response->headers->get('X-Debug-Token-Link'));
    }

    public function testThrowingUrlGenerator()
    {
        \$response = new Response();
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$urlGenerator = \$this->getUrlGeneratorMock();
        \$urlGenerator
            ->expects(\$this->once())
            ->method('generate')
            ->with('_profiler', ['token' => 'xxxxxxxx'])
            ->willThrowException(new \\Exception('foo'))
        ;

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock(), false, WebDebugToolbarListener::ENABLED, \$urlGenerator);
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('Exception: foo', \$response->headers->get('X-Debug-Error'));
    }

    public function testThrowingErrorCleanup()
    {
        \$response = new Response();
        \$response->headers->set('X-Debug-Token', 'xxxxxxxx');

        \$urlGenerator = \$this->getUrlGeneratorMock();
        \$urlGenerator
            ->expects(\$this->once())
            ->method('generate')
            ->with('_profiler', ['token' => 'xxxxxxxx'])
            ->willThrowException(new \\Exception(\"This\\nmultiline\\r\\ntabbed text should\\tcome out\\r on\\n \\ta single plain\\r\\nline\"))
        ;

        \$event = new ResponseEvent(\$this->getKernelMock(), \$this->getRequestMock(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$listener = new WebDebugToolbarListener(\$this->getTwigMock(), false, WebDebugToolbarListener::ENABLED, \$urlGenerator);
        \$listener->onKernelResponse(\$event);

        \$this->assertEquals('Exception: This multiline tabbed text should come out on a single plain line', \$response->headers->get('X-Debug-Error'));
    }

    protected function getRequestMock(\$isXmlHttpRequest = false, \$requestFormat = 'html', \$hasSession = true)
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->setMethods(['getSession', 'isXmlHttpRequest', 'getRequestFormat'])->disableOriginalConstructor()->getMock();
        \$request->expects(\$this->any())
            ->method('isXmlHttpRequest')
            ->willReturn(\$isXmlHttpRequest);
        \$request->expects(\$this->any())
            ->method('getRequestFormat')
            ->willReturn(\$requestFormat);

        \$request->headers = new HeaderBag();

        if (\$hasSession) {
            \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\Session')->disableOriginalConstructor()->getMock();
            \$request->expects(\$this->any())
                ->method('getSession')
                ->willReturn(\$session);
        }

        return \$request;
    }

    protected function getTwigMock(\$render = 'WDT')
    {
        \$templating = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$templating->expects(\$this->any())
            ->method('render')
            ->willReturn(\$render);

        return \$templating;
    }

    protected function getUrlGeneratorMock()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')->getMock();
    }

    protected function getKernelMock()
    {
        return \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Kernel')->disableOriginalConstructor()->getMock();
    }
}
", "vendor/symfony/web-profiler-bundle/Tests/EventListener/WebDebugToolbarListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Tests/EventListener/WebDebugToolbarListenerTest.php");
    }
}
