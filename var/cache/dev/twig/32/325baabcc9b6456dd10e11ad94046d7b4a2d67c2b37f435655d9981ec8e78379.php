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

/* vendor/symfony/security-http/Tests/Authentication/SimpleAuthenticationHandlerTest.php */
class __TwigTemplate_a4099aa5bf01fa0c9e99376cc541b9d7c6a81218b6b05e7d65ea4b8996e69481 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Authentication/SimpleAuthenticationHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Authentication/SimpleAuthenticationHandlerTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler;

/**
 * @group legacy
 */
class SimpleAuthenticationHandlerTest extends TestCase
{
    private \$successHandler;

    private \$failureHandler;

    private \$request;

    private \$token;

    private \$authenticationException;

    private \$response;

    protected function setUp(): void
    {
        \$this->successHandler = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface')->getMock();
        \$this->failureHandler = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface')->getMock();

        \$this->request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$this->token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        // No methods are invoked on the exception; we just assert on its class
        \$this->authenticationException = new AuthenticationException();

        \$this->response = new Response();
    }

    public function testOnAuthenticationSuccessFallsBackToDefaultHandlerIfSimpleIsNotASuccessHandler()
    {
        \$authenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();

        \$this->successHandler->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token)
            ->willReturn(\$this->response);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationSuccess(\$this->request, \$this->token);

        \$this->assertSame(\$this->response, \$result);
    }

    public function testOnAuthenticationSuccessCallsSimpleAuthenticator()
    {
        \$this->successHandler->expects(\$this->never())
            ->method('onAuthenticationSuccess');

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestSuccessHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token)
            ->willReturn(\$this->response);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationSuccess(\$this->request, \$this->token);

        \$this->assertSame(\$this->response, \$result);
    }

    public function testOnAuthenticationSuccessThrowsAnExceptionIfNonResponseIsReturned()
    {
        \$this->expectException('UnexpectedValueException');
        \$this->expectExceptionMessage('onAuthenticationSuccess method must return null to use the default success handler, or a Response object');
        \$this->successHandler->expects(\$this->never())
            ->method('onAuthenticationSuccess');

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestSuccessHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token)
            ->willReturn(new \\stdClass());

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$handler->onAuthenticationSuccess(\$this->request, \$this->token);
    }

    public function testOnAuthenticationSuccessFallsBackToDefaultHandlerIfNullIsReturned()
    {
        \$this->successHandler->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token)
            ->willReturn(\$this->response);

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestSuccessHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token)
            ->willReturn(null);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationSuccess(\$this->request, \$this->token);

        \$this->assertSame(\$this->response, \$result);
    }

    public function testOnAuthenticationFailureFallsBackToDefaultHandlerIfSimpleIsNotAFailureHandler()
    {
        \$authenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();

        \$this->failureHandler->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$this->authenticationException)
            ->willReturn(\$this->response);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationFailure(\$this->request, \$this->authenticationException);

        \$this->assertSame(\$this->response, \$result);
    }

    public function testOnAuthenticationFailureCallsSimpleAuthenticator()
    {
        \$this->failureHandler->expects(\$this->never())
            ->method('onAuthenticationFailure');

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestFailureHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$this->authenticationException)
            ->willReturn(\$this->response);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationFailure(\$this->request, \$this->authenticationException);

        \$this->assertSame(\$this->response, \$result);
    }

    public function testOnAuthenticationFailureThrowsAnExceptionIfNonResponseIsReturned()
    {
        \$this->expectException('UnexpectedValueException');
        \$this->expectExceptionMessage('onAuthenticationFailure method must return null to use the default failure handler, or a Response object');
        \$this->failureHandler->expects(\$this->never())
            ->method('onAuthenticationFailure');

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestFailureHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$this->authenticationException)
            ->willReturn(new \\stdClass());

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$handler->onAuthenticationFailure(\$this->request, \$this->authenticationException);
    }

    public function testOnAuthenticationFailureFallsBackToDefaultHandlerIfNullIsReturned()
    {
        \$this->failureHandler->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$this->authenticationException)
            ->willReturn(\$this->response);

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestFailureHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$this->authenticationException)
            ->willReturn(null);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationFailure(\$this->request, \$this->authenticationException);

        \$this->assertSame(\$this->response, \$result);
    }
}

interface TestSuccessHandlerInterface extends AuthenticationSuccessHandlerInterface, SimpleAuthenticatorInterface
{
}

interface TestFailureHandlerInterface extends AuthenticationFailureHandlerInterface, SimpleAuthenticatorInterface
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Authentication/SimpleAuthenticationHandlerTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler;

/**
 * @group legacy
 */
class SimpleAuthenticationHandlerTest extends TestCase
{
    private \$successHandler;

    private \$failureHandler;

    private \$request;

    private \$token;

    private \$authenticationException;

    private \$response;

    protected function setUp(): void
    {
        \$this->successHandler = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface')->getMock();
        \$this->failureHandler = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface')->getMock();

        \$this->request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$this->token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        // No methods are invoked on the exception; we just assert on its class
        \$this->authenticationException = new AuthenticationException();

        \$this->response = new Response();
    }

    public function testOnAuthenticationSuccessFallsBackToDefaultHandlerIfSimpleIsNotASuccessHandler()
    {
        \$authenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();

        \$this->successHandler->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token)
            ->willReturn(\$this->response);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationSuccess(\$this->request, \$this->token);

        \$this->assertSame(\$this->response, \$result);
    }

    public function testOnAuthenticationSuccessCallsSimpleAuthenticator()
    {
        \$this->successHandler->expects(\$this->never())
            ->method('onAuthenticationSuccess');

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestSuccessHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token)
            ->willReturn(\$this->response);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationSuccess(\$this->request, \$this->token);

        \$this->assertSame(\$this->response, \$result);
    }

    public function testOnAuthenticationSuccessThrowsAnExceptionIfNonResponseIsReturned()
    {
        \$this->expectException('UnexpectedValueException');
        \$this->expectExceptionMessage('onAuthenticationSuccess method must return null to use the default success handler, or a Response object');
        \$this->successHandler->expects(\$this->never())
            ->method('onAuthenticationSuccess');

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestSuccessHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token)
            ->willReturn(new \\stdClass());

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$handler->onAuthenticationSuccess(\$this->request, \$this->token);
    }

    public function testOnAuthenticationSuccessFallsBackToDefaultHandlerIfNullIsReturned()
    {
        \$this->successHandler->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token)
            ->willReturn(\$this->response);

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestSuccessHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationSuccess')
            ->with(\$this->request, \$this->token)
            ->willReturn(null);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationSuccess(\$this->request, \$this->token);

        \$this->assertSame(\$this->response, \$result);
    }

    public function testOnAuthenticationFailureFallsBackToDefaultHandlerIfSimpleIsNotAFailureHandler()
    {
        \$authenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();

        \$this->failureHandler->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$this->authenticationException)
            ->willReturn(\$this->response);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationFailure(\$this->request, \$this->authenticationException);

        \$this->assertSame(\$this->response, \$result);
    }

    public function testOnAuthenticationFailureCallsSimpleAuthenticator()
    {
        \$this->failureHandler->expects(\$this->never())
            ->method('onAuthenticationFailure');

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestFailureHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$this->authenticationException)
            ->willReturn(\$this->response);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationFailure(\$this->request, \$this->authenticationException);

        \$this->assertSame(\$this->response, \$result);
    }

    public function testOnAuthenticationFailureThrowsAnExceptionIfNonResponseIsReturned()
    {
        \$this->expectException('UnexpectedValueException');
        \$this->expectExceptionMessage('onAuthenticationFailure method must return null to use the default failure handler, or a Response object');
        \$this->failureHandler->expects(\$this->never())
            ->method('onAuthenticationFailure');

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestFailureHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$this->authenticationException)
            ->willReturn(new \\stdClass());

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$handler->onAuthenticationFailure(\$this->request, \$this->authenticationException);
    }

    public function testOnAuthenticationFailureFallsBackToDefaultHandlerIfNullIsReturned()
    {
        \$this->failureHandler->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$this->authenticationException)
            ->willReturn(\$this->response);

        \$authenticator = \$this->getMockForAbstractClass('Symfony\\Component\\Security\\Http\\Tests\\TestFailureHandlerInterface');
        \$authenticator->expects(\$this->once())
            ->method('onAuthenticationFailure')
            ->with(\$this->request, \$this->authenticationException)
            ->willReturn(null);

        \$handler = new SimpleAuthenticationHandler(\$authenticator, \$this->successHandler, \$this->failureHandler);
        \$result = \$handler->onAuthenticationFailure(\$this->request, \$this->authenticationException);

        \$this->assertSame(\$this->response, \$result);
    }
}

interface TestSuccessHandlerInterface extends AuthenticationSuccessHandlerInterface, SimpleAuthenticatorInterface
{
}

interface TestFailureHandlerInterface extends AuthenticationFailureHandlerInterface, SimpleAuthenticatorInterface
{
}
", "vendor/symfony/security-http/Tests/Authentication/SimpleAuthenticationHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Authentication/SimpleAuthenticationHandlerTest.php");
    }
}
