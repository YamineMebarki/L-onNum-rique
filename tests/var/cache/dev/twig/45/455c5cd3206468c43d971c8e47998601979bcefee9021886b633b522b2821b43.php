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

/* vendor/symfony/security-http/Tests/Authentication/DefaultAuthenticationFailureHandlerTest.php */
class __TwigTemplate_1a26b7cccd14af8670fc3f240555fb8fb0b21ff9611f2ad5adedfcac30e54b93 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Authentication/DefaultAuthenticationFailureHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Authentication/DefaultAuthenticationFailureHandlerTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\Authentication;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler;

class DefaultAuthenticationFailureHandlerTest extends TestCase
{
    private \$httpKernel;
    private \$httpUtils;
    private \$logger;
    private \$request;
    private \$session;
    private \$exception;

    protected function setUp(): void
    {
        \$this->httpKernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$this->httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$this->logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();

        \$this->session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$this->request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$this->request->expects(\$this->any())->method('getSession')->willReturn(\$this->session);
        \$this->exception = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException')->setMethods(['getMessage'])->getMock();
    }

    public function testForward()
    {
        \$options = ['failure_forward' => true];

        \$subRequest = \$this->getRequest();
        \$subRequest->attributes->expects(\$this->once())
            ->method('set')->with(Security::AUTHENTICATION_ERROR, \$this->exception);
        \$this->httpUtils->expects(\$this->once())
            ->method('createRequest')->with(\$this->request, '/login')
            ->willReturn(\$subRequest);

        \$response = new Response();
        \$this->httpKernel->expects(\$this->once())
            ->method('handle')->with(\$subRequest, HttpKernelInterface::SUB_REQUEST)
            ->willReturn(\$response);

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, \$options, \$this->logger);
        \$result = \$handler->onAuthenticationFailure(\$this->request, \$this->exception);

        \$this->assertSame(\$response, \$result);
    }

    public function testRedirect()
    {
        \$response = new RedirectResponse('/login');
        \$this->httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')->with(\$this->request, '/login')
            ->willReturn(\$response);

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, [], \$this->logger);
        \$result = \$handler->onAuthenticationFailure(\$this->request, \$this->exception);

        \$this->assertSame(\$response, \$result);
    }

    public function testExceptionIsPersistedInSession()
    {
        \$this->session->expects(\$this->once())
            ->method('set')->with(Security::AUTHENTICATION_ERROR, \$this->exception);

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, [], \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testExceptionIsPassedInRequestOnForward()
    {
        \$options = ['failure_forward' => true];

        \$subRequest = \$this->getRequest();
        \$subRequest->attributes->expects(\$this->once())
            ->method('set')->with(Security::AUTHENTICATION_ERROR, \$this->exception);

        \$this->httpUtils->expects(\$this->once())
            ->method('createRequest')->with(\$this->request, '/login')
            ->willReturn(\$subRequest);

        \$this->session->expects(\$this->never())->method('set');

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, \$options, \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testRedirectIsLogged()
    {
        \$this->logger
            ->expects(\$this->once())
            ->method('debug')
            ->with('Authentication failure, redirect triggered.', ['failure_path' => '/login']);

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, [], \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testForwardIsLogged()
    {
        \$options = ['failure_forward' => true];

        \$this->httpUtils->expects(\$this->once())
            ->method('createRequest')->with(\$this->request, '/login')
            ->willReturn(\$this->getRequest());

        \$this->logger
            ->expects(\$this->once())
            ->method('debug')
            ->with('Authentication failure, forward triggered.', ['failure_path' => '/login']);

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, \$options, \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testFailurePathCanBeOverwritten()
    {
        \$options = ['failure_path' => '/auth/login'];

        \$this->httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')->with(\$this->request, '/auth/login');

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, \$options, \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testFailurePathCanBeOverwrittenWithRequest()
    {
        \$this->request->expects(\$this->once())
            ->method('get')->with('_failure_path')
            ->willReturn('/auth/login');

        \$this->httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')->with(\$this->request, '/auth/login');

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, [], \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testFailurePathCanBeOverwrittenWithNestedAttributeInRequest()
    {
        \$this->request->expects(\$this->once())
            ->method('get')->with('_failure_path')
            ->willReturn(['value' => '/auth/login']);

        \$this->httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')->with(\$this->request, '/auth/login');

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, ['failure_path_parameter' => '_failure_path[value]'], \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testFailurePathParameterCanBeOverwritten()
    {
        \$options = ['failure_path_parameter' => '_my_failure_path'];

        \$this->request->expects(\$this->once())
            ->method('get')->with('_my_failure_path')
            ->willReturn('/auth/login');

        \$this->httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')->with(\$this->request, '/auth/login');

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, \$options, \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    private function getRequest()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request->attributes = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\ParameterBag')->getMock();

        return \$request;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Authentication/DefaultAuthenticationFailureHandlerTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\Authentication;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler;

class DefaultAuthenticationFailureHandlerTest extends TestCase
{
    private \$httpKernel;
    private \$httpUtils;
    private \$logger;
    private \$request;
    private \$session;
    private \$exception;

    protected function setUp(): void
    {
        \$this->httpKernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$this->httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$this->logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();

        \$this->session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock();
        \$this->request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$this->request->expects(\$this->any())->method('getSession')->willReturn(\$this->session);
        \$this->exception = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException')->setMethods(['getMessage'])->getMock();
    }

    public function testForward()
    {
        \$options = ['failure_forward' => true];

        \$subRequest = \$this->getRequest();
        \$subRequest->attributes->expects(\$this->once())
            ->method('set')->with(Security::AUTHENTICATION_ERROR, \$this->exception);
        \$this->httpUtils->expects(\$this->once())
            ->method('createRequest')->with(\$this->request, '/login')
            ->willReturn(\$subRequest);

        \$response = new Response();
        \$this->httpKernel->expects(\$this->once())
            ->method('handle')->with(\$subRequest, HttpKernelInterface::SUB_REQUEST)
            ->willReturn(\$response);

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, \$options, \$this->logger);
        \$result = \$handler->onAuthenticationFailure(\$this->request, \$this->exception);

        \$this->assertSame(\$response, \$result);
    }

    public function testRedirect()
    {
        \$response = new RedirectResponse('/login');
        \$this->httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')->with(\$this->request, '/login')
            ->willReturn(\$response);

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, [], \$this->logger);
        \$result = \$handler->onAuthenticationFailure(\$this->request, \$this->exception);

        \$this->assertSame(\$response, \$result);
    }

    public function testExceptionIsPersistedInSession()
    {
        \$this->session->expects(\$this->once())
            ->method('set')->with(Security::AUTHENTICATION_ERROR, \$this->exception);

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, [], \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testExceptionIsPassedInRequestOnForward()
    {
        \$options = ['failure_forward' => true];

        \$subRequest = \$this->getRequest();
        \$subRequest->attributes->expects(\$this->once())
            ->method('set')->with(Security::AUTHENTICATION_ERROR, \$this->exception);

        \$this->httpUtils->expects(\$this->once())
            ->method('createRequest')->with(\$this->request, '/login')
            ->willReturn(\$subRequest);

        \$this->session->expects(\$this->never())->method('set');

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, \$options, \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testRedirectIsLogged()
    {
        \$this->logger
            ->expects(\$this->once())
            ->method('debug')
            ->with('Authentication failure, redirect triggered.', ['failure_path' => '/login']);

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, [], \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testForwardIsLogged()
    {
        \$options = ['failure_forward' => true];

        \$this->httpUtils->expects(\$this->once())
            ->method('createRequest')->with(\$this->request, '/login')
            ->willReturn(\$this->getRequest());

        \$this->logger
            ->expects(\$this->once())
            ->method('debug')
            ->with('Authentication failure, forward triggered.', ['failure_path' => '/login']);

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, \$options, \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testFailurePathCanBeOverwritten()
    {
        \$options = ['failure_path' => '/auth/login'];

        \$this->httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')->with(\$this->request, '/auth/login');

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, \$options, \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testFailurePathCanBeOverwrittenWithRequest()
    {
        \$this->request->expects(\$this->once())
            ->method('get')->with('_failure_path')
            ->willReturn('/auth/login');

        \$this->httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')->with(\$this->request, '/auth/login');

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, [], \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testFailurePathCanBeOverwrittenWithNestedAttributeInRequest()
    {
        \$this->request->expects(\$this->once())
            ->method('get')->with('_failure_path')
            ->willReturn(['value' => '/auth/login']);

        \$this->httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')->with(\$this->request, '/auth/login');

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, ['failure_path_parameter' => '_failure_path[value]'], \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    public function testFailurePathParameterCanBeOverwritten()
    {
        \$options = ['failure_path_parameter' => '_my_failure_path'];

        \$this->request->expects(\$this->once())
            ->method('get')->with('_my_failure_path')
            ->willReturn('/auth/login');

        \$this->httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')->with(\$this->request, '/auth/login');

        \$handler = new DefaultAuthenticationFailureHandler(\$this->httpKernel, \$this->httpUtils, \$options, \$this->logger);
        \$handler->onAuthenticationFailure(\$this->request, \$this->exception);
    }

    private function getRequest()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$request->attributes = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\ParameterBag')->getMock();

        return \$request;
    }
}
", "vendor/symfony/security-http/Tests/Authentication/DefaultAuthenticationFailureHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Authentication/DefaultAuthenticationFailureHandlerTest.php");
    }
}
