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

/* vendor/symfony/security-http/Tests/Firewall/ExceptionListenerTest.php */
class __TwigTemplate_6a5cc73e9b8502d950e98cde40681bb7e2ad6132d70b034741fe3fbd2f8adb82 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/ExceptionListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/ExceptionListenerTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\Firewall;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Authorization\\AccessDeniedHandlerInterface;
use Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface;
use Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener;
use Symfony\\Component\\Security\\Http\\HttpUtils;

class ExceptionListenerTest extends TestCase
{
    /**
     * @dataProvider getAuthenticationExceptionProvider
     */
    public function testAuthenticationExceptionWithoutEntryPoint(\\Exception \$exception, \\Exception \$eventException)
    {
        \$event = \$this->createEvent(\$exception);

        \$listener = \$this->createExceptionListener();
        \$listener->onKernelException(\$event);

        \$this->assertNull(\$event->getResponse());
        \$this->assertEquals(\$eventException, \$event->getException());
    }

    /**
     * @dataProvider getAuthenticationExceptionProvider
     */
    public function testAuthenticationExceptionWithEntryPoint(\\Exception \$exception)
    {
        \$event = \$this->createEvent(\$exception);

        \$response = new Response('Forbidden', 403);

        \$listener = \$this->createExceptionListener(null, null, null, \$this->createEntryPoint(\$response));
        \$listener->onKernelException(\$event);

        \$this->assertTrue(\$event->isAllowingCustomResponseCode());

        \$this->assertEquals('Forbidden', \$event->getResponse()->getContent());
        \$this->assertEquals(403, \$event->getResponse()->getStatusCode());
        \$this->assertSame(\$exception, \$event->getException());
    }

    public function getAuthenticationExceptionProvider()
    {
        return [
            [\$e = new AuthenticationException(), new HttpException(Response::HTTP_UNAUTHORIZED, '', \$e, [], 0)],
            [new \\LogicException('random', 0, \$e = new AuthenticationException()), new HttpException(Response::HTTP_UNAUTHORIZED, '', \$e, [], 0)],
            [new \\LogicException('random', 0, \$e = new AuthenticationException('embed', 0, new AuthenticationException())), new HttpException(Response::HTTP_UNAUTHORIZED, 'embed', \$e, [], 0)],
            [new \\LogicException('random', 0, \$e = new AuthenticationException('embed', 0, new AccessDeniedException())), new HttpException(Response::HTTP_UNAUTHORIZED, 'embed', \$e, [], 0)],
            [\$e = new AuthenticationException('random', 0, new \\LogicException()), new HttpException(Response::HTTP_UNAUTHORIZED, 'random', \$e, [], 0)],
        ];
    }

    /**
     * @group legacy
     */
    public function testExceptionWhenEntryPointReturnsBadValue()
    {
        \$event = \$this->createEvent(new AuthenticationException());

        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint->expects(\$this->once())->method('start')->willReturn('NOT A RESPONSE');

        \$listener = \$this->createExceptionListener(null, null, null, \$entryPoint);
        \$listener->onKernelException(\$event);
        // the exception has been replaced by our LogicException
        \$this->assertInstanceOf('LogicException', \$event->getException());
        \$this->assertStringEndsWith('start() method must return a Response object (string returned)', \$event->getException()->getMessage());
    }

    /**
     * @dataProvider getAccessDeniedExceptionProvider
     */
    public function testAccessDeniedExceptionFullFledgedAndWithoutAccessDeniedHandlerAndWithoutErrorPage(\\Exception \$exception, \\Exception \$eventException = null)
    {
        \$event = \$this->createEvent(\$exception);

        \$listener = \$this->createExceptionListener(null, \$this->createTrustResolver(true));
        \$listener->onKernelException(\$event);

        \$this->assertNull(\$event->getResponse());
        \$this->assertSame(null === \$eventException ? \$exception : \$eventException, \$event->getException()->getPrevious());
    }

    /**
     * @dataProvider getAccessDeniedExceptionProvider
     */
    public function testAccessDeniedExceptionFullFledgedAndWithoutAccessDeniedHandlerAndWithErrorPage(\\Exception \$exception, \\Exception \$eventException = null)
    {
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$kernel->expects(\$this->once())->method('handle')->willReturn(new Response('Unauthorized', 401));

        \$event = \$this->createEvent(\$exception, \$kernel);

        \$httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$httpUtils->expects(\$this->once())->method('createRequest')->willReturn(Request::create('/error'));

        \$listener = \$this->createExceptionListener(null, \$this->createTrustResolver(true), \$httpUtils, null, '/error');
        \$listener->onKernelException(\$event);

        \$this->assertTrue(\$event->isAllowingCustomResponseCode());

        \$this->assertEquals('Unauthorized', \$event->getResponse()->getContent());
        \$this->assertEquals(401, \$event->getResponse()->getStatusCode());
        \$this->assertSame(null === \$eventException ? \$exception : \$eventException, \$event->getException()->getPrevious());
    }

    /**
     * @dataProvider getAccessDeniedExceptionProvider
     */
    public function testAccessDeniedExceptionFullFledgedAndWithAccessDeniedHandlerAndWithoutErrorPage(\\Exception \$exception, \\Exception \$eventException = null)
    {
        \$event = \$this->createEvent(\$exception);

        \$accessDeniedHandler = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authorization\\AccessDeniedHandlerInterface')->getMock();
        \$accessDeniedHandler->expects(\$this->once())->method('handle')->willReturn(new Response('error'));

        \$listener = \$this->createExceptionListener(null, \$this->createTrustResolver(true), null, null, null, \$accessDeniedHandler);
        \$listener->onKernelException(\$event);

        \$this->assertEquals('error', \$event->getResponse()->getContent());
        \$this->assertSame(null === \$eventException ? \$exception : \$eventException, \$event->getException()->getPrevious());
    }

    /**
     * @dataProvider getAccessDeniedExceptionProvider
     */
    public function testAccessDeniedExceptionNotFullFledged(\\Exception \$exception, \\Exception \$eventException = null)
    {
        \$event = \$this->createEvent(\$exception);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage->expects(\$this->once())->method('getToken')->willReturn(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());

        \$listener = \$this->createExceptionListener(\$tokenStorage, \$this->createTrustResolver(false), null, \$this->createEntryPoint());
        \$listener->onKernelException(\$event);

        \$this->assertEquals('OK', \$event->getResponse()->getContent());
        \$this->assertSame(null === \$eventException ? \$exception : \$eventException, \$event->getException()->getPrevious());
    }

    public function getAccessDeniedExceptionProvider()
    {
        return [
            [new AccessDeniedException()],
            [new \\LogicException('random', 0, \$e = new AccessDeniedException()), \$e],
            [new \\LogicException('random', 0, \$e = new AccessDeniedException('embed', new AccessDeniedException())), \$e],
            [new \\LogicException('random', 0, \$e = new AccessDeniedException('embed', new AuthenticationException())), \$e],
            [new AccessDeniedException('random', new \\LogicException())],
        ];
    }

    private function createEntryPoint(Response \$response = null)
    {
        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint->expects(\$this->once())->method('start')->willReturn(\$response ?: new Response('OK'));

        return \$entryPoint;
    }

    private function createTrustResolver(\$fullFledged)
    {
        \$trustResolver = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface')->getMock();
        \$trustResolver->expects(\$this->once())->method('isFullFledged')->willReturn(\$fullFledged);

        return \$trustResolver;
    }

    private function createEvent(\\Exception \$exception, \$kernel = null)
    {
        if (null === \$kernel) {
            \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        }

        if (class_exists(ExceptionEvent::class)) {
            return new ExceptionEvent(\$kernel, Request::create('/'), HttpKernelInterface::MASTER_REQUEST, \$exception);
        }

        return new GetResponseForExceptionEvent(\$kernel, Request::create('/'), HttpKernelInterface::MASTER_REQUEST, \$exception);
    }

    private function createExceptionListener(TokenStorageInterface \$tokenStorage = null, AuthenticationTrustResolverInterface \$trustResolver = null, HttpUtils \$httpUtils = null, AuthenticationEntryPointInterface \$authenticationEntryPoint = null, \$errorPage = null, AccessDeniedHandlerInterface \$accessDeniedHandler = null)
    {
        return new ExceptionListener(
            \$tokenStorage ?: \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock(),
            \$trustResolver ?: \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface')->getMock(),
            \$httpUtils ?: \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock(),
            'key',
            \$authenticationEntryPoint,
            \$errorPage,
            \$accessDeniedHandler
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Firewall/ExceptionListenerTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\Firewall;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Authorization\\AccessDeniedHandlerInterface;
use Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface;
use Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener;
use Symfony\\Component\\Security\\Http\\HttpUtils;

class ExceptionListenerTest extends TestCase
{
    /**
     * @dataProvider getAuthenticationExceptionProvider
     */
    public function testAuthenticationExceptionWithoutEntryPoint(\\Exception \$exception, \\Exception \$eventException)
    {
        \$event = \$this->createEvent(\$exception);

        \$listener = \$this->createExceptionListener();
        \$listener->onKernelException(\$event);

        \$this->assertNull(\$event->getResponse());
        \$this->assertEquals(\$eventException, \$event->getException());
    }

    /**
     * @dataProvider getAuthenticationExceptionProvider
     */
    public function testAuthenticationExceptionWithEntryPoint(\\Exception \$exception)
    {
        \$event = \$this->createEvent(\$exception);

        \$response = new Response('Forbidden', 403);

        \$listener = \$this->createExceptionListener(null, null, null, \$this->createEntryPoint(\$response));
        \$listener->onKernelException(\$event);

        \$this->assertTrue(\$event->isAllowingCustomResponseCode());

        \$this->assertEquals('Forbidden', \$event->getResponse()->getContent());
        \$this->assertEquals(403, \$event->getResponse()->getStatusCode());
        \$this->assertSame(\$exception, \$event->getException());
    }

    public function getAuthenticationExceptionProvider()
    {
        return [
            [\$e = new AuthenticationException(), new HttpException(Response::HTTP_UNAUTHORIZED, '', \$e, [], 0)],
            [new \\LogicException('random', 0, \$e = new AuthenticationException()), new HttpException(Response::HTTP_UNAUTHORIZED, '', \$e, [], 0)],
            [new \\LogicException('random', 0, \$e = new AuthenticationException('embed', 0, new AuthenticationException())), new HttpException(Response::HTTP_UNAUTHORIZED, 'embed', \$e, [], 0)],
            [new \\LogicException('random', 0, \$e = new AuthenticationException('embed', 0, new AccessDeniedException())), new HttpException(Response::HTTP_UNAUTHORIZED, 'embed', \$e, [], 0)],
            [\$e = new AuthenticationException('random', 0, new \\LogicException()), new HttpException(Response::HTTP_UNAUTHORIZED, 'random', \$e, [], 0)],
        ];
    }

    /**
     * @group legacy
     */
    public function testExceptionWhenEntryPointReturnsBadValue()
    {
        \$event = \$this->createEvent(new AuthenticationException());

        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint->expects(\$this->once())->method('start')->willReturn('NOT A RESPONSE');

        \$listener = \$this->createExceptionListener(null, null, null, \$entryPoint);
        \$listener->onKernelException(\$event);
        // the exception has been replaced by our LogicException
        \$this->assertInstanceOf('LogicException', \$event->getException());
        \$this->assertStringEndsWith('start() method must return a Response object (string returned)', \$event->getException()->getMessage());
    }

    /**
     * @dataProvider getAccessDeniedExceptionProvider
     */
    public function testAccessDeniedExceptionFullFledgedAndWithoutAccessDeniedHandlerAndWithoutErrorPage(\\Exception \$exception, \\Exception \$eventException = null)
    {
        \$event = \$this->createEvent(\$exception);

        \$listener = \$this->createExceptionListener(null, \$this->createTrustResolver(true));
        \$listener->onKernelException(\$event);

        \$this->assertNull(\$event->getResponse());
        \$this->assertSame(null === \$eventException ? \$exception : \$eventException, \$event->getException()->getPrevious());
    }

    /**
     * @dataProvider getAccessDeniedExceptionProvider
     */
    public function testAccessDeniedExceptionFullFledgedAndWithoutAccessDeniedHandlerAndWithErrorPage(\\Exception \$exception, \\Exception \$eventException = null)
    {
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$kernel->expects(\$this->once())->method('handle')->willReturn(new Response('Unauthorized', 401));

        \$event = \$this->createEvent(\$exception, \$kernel);

        \$httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$httpUtils->expects(\$this->once())->method('createRequest')->willReturn(Request::create('/error'));

        \$listener = \$this->createExceptionListener(null, \$this->createTrustResolver(true), \$httpUtils, null, '/error');
        \$listener->onKernelException(\$event);

        \$this->assertTrue(\$event->isAllowingCustomResponseCode());

        \$this->assertEquals('Unauthorized', \$event->getResponse()->getContent());
        \$this->assertEquals(401, \$event->getResponse()->getStatusCode());
        \$this->assertSame(null === \$eventException ? \$exception : \$eventException, \$event->getException()->getPrevious());
    }

    /**
     * @dataProvider getAccessDeniedExceptionProvider
     */
    public function testAccessDeniedExceptionFullFledgedAndWithAccessDeniedHandlerAndWithoutErrorPage(\\Exception \$exception, \\Exception \$eventException = null)
    {
        \$event = \$this->createEvent(\$exception);

        \$accessDeniedHandler = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authorization\\AccessDeniedHandlerInterface')->getMock();
        \$accessDeniedHandler->expects(\$this->once())->method('handle')->willReturn(new Response('error'));

        \$listener = \$this->createExceptionListener(null, \$this->createTrustResolver(true), null, null, null, \$accessDeniedHandler);
        \$listener->onKernelException(\$event);

        \$this->assertEquals('error', \$event->getResponse()->getContent());
        \$this->assertSame(null === \$eventException ? \$exception : \$eventException, \$event->getException()->getPrevious());
    }

    /**
     * @dataProvider getAccessDeniedExceptionProvider
     */
    public function testAccessDeniedExceptionNotFullFledged(\\Exception \$exception, \\Exception \$eventException = null)
    {
        \$event = \$this->createEvent(\$exception);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage->expects(\$this->once())->method('getToken')->willReturn(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());

        \$listener = \$this->createExceptionListener(\$tokenStorage, \$this->createTrustResolver(false), null, \$this->createEntryPoint());
        \$listener->onKernelException(\$event);

        \$this->assertEquals('OK', \$event->getResponse()->getContent());
        \$this->assertSame(null === \$eventException ? \$exception : \$eventException, \$event->getException()->getPrevious());
    }

    public function getAccessDeniedExceptionProvider()
    {
        return [
            [new AccessDeniedException()],
            [new \\LogicException('random', 0, \$e = new AccessDeniedException()), \$e],
            [new \\LogicException('random', 0, \$e = new AccessDeniedException('embed', new AccessDeniedException())), \$e],
            [new \\LogicException('random', 0, \$e = new AccessDeniedException('embed', new AuthenticationException())), \$e],
            [new AccessDeniedException('random', new \\LogicException())],
        ];
    }

    private function createEntryPoint(Response \$response = null)
    {
        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint->expects(\$this->once())->method('start')->willReturn(\$response ?: new Response('OK'));

        return \$entryPoint;
    }

    private function createTrustResolver(\$fullFledged)
    {
        \$trustResolver = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface')->getMock();
        \$trustResolver->expects(\$this->once())->method('isFullFledged')->willReturn(\$fullFledged);

        return \$trustResolver;
    }

    private function createEvent(\\Exception \$exception, \$kernel = null)
    {
        if (null === \$kernel) {
            \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        }

        if (class_exists(ExceptionEvent::class)) {
            return new ExceptionEvent(\$kernel, Request::create('/'), HttpKernelInterface::MASTER_REQUEST, \$exception);
        }

        return new GetResponseForExceptionEvent(\$kernel, Request::create('/'), HttpKernelInterface::MASTER_REQUEST, \$exception);
    }

    private function createExceptionListener(TokenStorageInterface \$tokenStorage = null, AuthenticationTrustResolverInterface \$trustResolver = null, HttpUtils \$httpUtils = null, AuthenticationEntryPointInterface \$authenticationEntryPoint = null, \$errorPage = null, AccessDeniedHandlerInterface \$accessDeniedHandler = null)
    {
        return new ExceptionListener(
            \$tokenStorage ?: \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock(),
            \$trustResolver ?: \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface')->getMock(),
            \$httpUtils ?: \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock(),
            'key',
            \$authenticationEntryPoint,
            \$errorPage,
            \$accessDeniedHandler
        );
    }
}
", "vendor/symfony/security-http/Tests/Firewall/ExceptionListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Firewall/ExceptionListenerTest.php");
    }
}
