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

/* vendor/symfony/security-http/Tests/Firewall/LogoutListenerTest.php */
class __TwigTemplate_313cc31f6bc64a68eabad75dc9b5935c8d98f28cb637c8b8a4b296eeee251f5b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/LogoutListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/LogoutListenerTest.php"));

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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener;

class LogoutListenerTest extends TestCase
{
    public function testHandleUnmatchedPath()
    {
        list(\$listener, \$tokenStorage, \$httpUtils, \$options) = \$this->getListener();

        list(\$event, \$request) = \$this->getGetResponseEvent();

        \$event->expects(\$this->never())
            ->method('setResponse');

        \$httpUtils->expects(\$this->once())
            ->method('checkRequestPath')
            ->with(\$request, \$options['logout_path'])
            ->willReturn(false);

        \$listener(\$event);
    }

    public function testHandleMatchedPathWithSuccessHandlerAndCsrfValidation()
    {
        \$successHandler = \$this->getSuccessHandler();
        \$tokenManager = \$this->getTokenManager();

        list(\$listener, \$tokenStorage, \$httpUtils, \$options) = \$this->getListener(\$successHandler, \$tokenManager);

        list(\$event, \$request) = \$this->getGetResponseEvent();

        \$request->query->set('_csrf_token', 'token');

        \$httpUtils->expects(\$this->once())
            ->method('checkRequestPath')
            ->with(\$request, \$options['logout_path'])
            ->willReturn(true);

        \$tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->willReturn(true);

        \$successHandler->expects(\$this->once())
            ->method('onLogoutSuccess')
            ->with(\$request)
            ->willReturn(\$response = new Response());

        \$tokenStorage->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token = \$this->getToken());

        \$handler = \$this->getHandler();
        \$handler->expects(\$this->once())
            ->method('logout')
            ->with(\$request, \$response, \$token);

        \$tokenStorage->expects(\$this->once())
            ->method('setToken')
            ->with(null);

        \$event->expects(\$this->once())
            ->method('setResponse')
            ->with(\$response);

        \$listener->addHandler(\$handler);

        \$listener(\$event);
    }

    public function testHandleMatchedPathWithoutSuccessHandlerAndCsrfValidation()
    {
        \$successHandler = \$this->getSuccessHandler();

        list(\$listener, \$tokenStorage, \$httpUtils, \$options) = \$this->getListener(\$successHandler);

        list(\$event, \$request) = \$this->getGetResponseEvent();

        \$httpUtils->expects(\$this->once())
            ->method('checkRequestPath')
            ->with(\$request, \$options['logout_path'])
            ->willReturn(true);

        \$successHandler->expects(\$this->once())
            ->method('onLogoutSuccess')
            ->with(\$request)
            ->willReturn(\$response = new Response());

        \$tokenStorage->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token = \$this->getToken());

        \$handler = \$this->getHandler();
        \$handler->expects(\$this->once())
            ->method('logout')
            ->with(\$request, \$response, \$token);

        \$tokenStorage->expects(\$this->once())
            ->method('setToken')
            ->with(null);

        \$event->expects(\$this->once())
            ->method('setResponse')
            ->with(\$response);

        \$listener->addHandler(\$handler);

        \$listener(\$event);
    }

    /**
     * @group legacy
     */
    public function testSuccessHandlerReturnsNonResponse()
    {
        \$this->expectException('RuntimeException');
        \$successHandler = \$this->getSuccessHandler();

        list(\$listener, \$tokenStorage, \$httpUtils, \$options) = \$this->getListener(\$successHandler);

        list(\$event, \$request) = \$this->getGetResponseEvent();

        \$httpUtils->expects(\$this->once())
            ->method('checkRequestPath')
            ->with(\$request, \$options['logout_path'])
            ->willReturn(true);

        \$successHandler->expects(\$this->once())
            ->method('onLogoutSuccess')
            ->with(\$request)
            ->willReturn(null);

        \$listener(\$event);
    }

    public function testCsrfValidationFails()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\LogoutException');
        \$tokenManager = \$this->getTokenManager();

        list(\$listener, \$tokenStorage, \$httpUtils, \$options) = \$this->getListener(null, \$tokenManager);

        list(\$event, \$request) = \$this->getGetResponseEvent();

        \$request->query->set('_csrf_token', 'token');

        \$httpUtils->expects(\$this->once())
            ->method('checkRequestPath')
            ->with(\$request, \$options['logout_path'])
            ->willReturn(true);

        \$tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->willReturn(false);

        \$listener(\$event);
    }

    private function getTokenManager()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface')->getMock();
    }

    private function getTokenStorage()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
    }

    private function getGetResponseEvent()
    {
        \$event = \$this->getMockBuilder(RequestEvent::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$event->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request = new Request());

        return [\$event, \$request];
    }

    private function getHandler()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Logout\\LogoutHandlerInterface')->getMock();
    }

    private function getHttpUtils()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')
            ->disableOriginalConstructor()
            ->getMock();
    }

    private function getListener(\$successHandler = null, \$tokenManager = null)
    {
        \$listener = new LogoutListener(
            \$tokenStorage = \$this->getTokenStorage(),
            \$httpUtils = \$this->getHttpUtils(),
            \$successHandler ?: \$this->getSuccessHandler(),
            \$options = [
                'csrf_parameter' => '_csrf_token',
                'csrf_token_id' => 'logout',
                'logout_path' => '/logout',
                'target_url' => '/',
            ],
            \$tokenManager
        );

        return [\$listener, \$tokenStorage, \$httpUtils, \$options];
    }

    private function getSuccessHandler()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Logout\\LogoutSuccessHandlerInterface')->getMock();
    }

    private function getToken()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Firewall/LogoutListenerTest.php";
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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener;

class LogoutListenerTest extends TestCase
{
    public function testHandleUnmatchedPath()
    {
        list(\$listener, \$tokenStorage, \$httpUtils, \$options) = \$this->getListener();

        list(\$event, \$request) = \$this->getGetResponseEvent();

        \$event->expects(\$this->never())
            ->method('setResponse');

        \$httpUtils->expects(\$this->once())
            ->method('checkRequestPath')
            ->with(\$request, \$options['logout_path'])
            ->willReturn(false);

        \$listener(\$event);
    }

    public function testHandleMatchedPathWithSuccessHandlerAndCsrfValidation()
    {
        \$successHandler = \$this->getSuccessHandler();
        \$tokenManager = \$this->getTokenManager();

        list(\$listener, \$tokenStorage, \$httpUtils, \$options) = \$this->getListener(\$successHandler, \$tokenManager);

        list(\$event, \$request) = \$this->getGetResponseEvent();

        \$request->query->set('_csrf_token', 'token');

        \$httpUtils->expects(\$this->once())
            ->method('checkRequestPath')
            ->with(\$request, \$options['logout_path'])
            ->willReturn(true);

        \$tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->willReturn(true);

        \$successHandler->expects(\$this->once())
            ->method('onLogoutSuccess')
            ->with(\$request)
            ->willReturn(\$response = new Response());

        \$tokenStorage->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token = \$this->getToken());

        \$handler = \$this->getHandler();
        \$handler->expects(\$this->once())
            ->method('logout')
            ->with(\$request, \$response, \$token);

        \$tokenStorage->expects(\$this->once())
            ->method('setToken')
            ->with(null);

        \$event->expects(\$this->once())
            ->method('setResponse')
            ->with(\$response);

        \$listener->addHandler(\$handler);

        \$listener(\$event);
    }

    public function testHandleMatchedPathWithoutSuccessHandlerAndCsrfValidation()
    {
        \$successHandler = \$this->getSuccessHandler();

        list(\$listener, \$tokenStorage, \$httpUtils, \$options) = \$this->getListener(\$successHandler);

        list(\$event, \$request) = \$this->getGetResponseEvent();

        \$httpUtils->expects(\$this->once())
            ->method('checkRequestPath')
            ->with(\$request, \$options['logout_path'])
            ->willReturn(true);

        \$successHandler->expects(\$this->once())
            ->method('onLogoutSuccess')
            ->with(\$request)
            ->willReturn(\$response = new Response());

        \$tokenStorage->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token = \$this->getToken());

        \$handler = \$this->getHandler();
        \$handler->expects(\$this->once())
            ->method('logout')
            ->with(\$request, \$response, \$token);

        \$tokenStorage->expects(\$this->once())
            ->method('setToken')
            ->with(null);

        \$event->expects(\$this->once())
            ->method('setResponse')
            ->with(\$response);

        \$listener->addHandler(\$handler);

        \$listener(\$event);
    }

    /**
     * @group legacy
     */
    public function testSuccessHandlerReturnsNonResponse()
    {
        \$this->expectException('RuntimeException');
        \$successHandler = \$this->getSuccessHandler();

        list(\$listener, \$tokenStorage, \$httpUtils, \$options) = \$this->getListener(\$successHandler);

        list(\$event, \$request) = \$this->getGetResponseEvent();

        \$httpUtils->expects(\$this->once())
            ->method('checkRequestPath')
            ->with(\$request, \$options['logout_path'])
            ->willReturn(true);

        \$successHandler->expects(\$this->once())
            ->method('onLogoutSuccess')
            ->with(\$request)
            ->willReturn(null);

        \$listener(\$event);
    }

    public function testCsrfValidationFails()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\LogoutException');
        \$tokenManager = \$this->getTokenManager();

        list(\$listener, \$tokenStorage, \$httpUtils, \$options) = \$this->getListener(null, \$tokenManager);

        list(\$event, \$request) = \$this->getGetResponseEvent();

        \$request->query->set('_csrf_token', 'token');

        \$httpUtils->expects(\$this->once())
            ->method('checkRequestPath')
            ->with(\$request, \$options['logout_path'])
            ->willReturn(true);

        \$tokenManager->expects(\$this->once())
            ->method('isTokenValid')
            ->willReturn(false);

        \$listener(\$event);
    }

    private function getTokenManager()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface')->getMock();
    }

    private function getTokenStorage()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
    }

    private function getGetResponseEvent()
    {
        \$event = \$this->getMockBuilder(RequestEvent::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$event->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request = new Request());

        return [\$event, \$request];
    }

    private function getHandler()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Logout\\LogoutHandlerInterface')->getMock();
    }

    private function getHttpUtils()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')
            ->disableOriginalConstructor()
            ->getMock();
    }

    private function getListener(\$successHandler = null, \$tokenManager = null)
    {
        \$listener = new LogoutListener(
            \$tokenStorage = \$this->getTokenStorage(),
            \$httpUtils = \$this->getHttpUtils(),
            \$successHandler ?: \$this->getSuccessHandler(),
            \$options = [
                'csrf_parameter' => '_csrf_token',
                'csrf_token_id' => 'logout',
                'logout_path' => '/logout',
                'target_url' => '/',
            ],
            \$tokenManager
        );

        return [\$listener, \$tokenStorage, \$httpUtils, \$options];
    }

    private function getSuccessHandler()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Logout\\LogoutSuccessHandlerInterface')->getMock();
    }

    private function getToken()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
    }
}
", "vendor/symfony/security-http/Tests/Firewall/LogoutListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Firewall/LogoutListenerTest.php");
    }
}
