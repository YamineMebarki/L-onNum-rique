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

/* vendor/symfony/security-http/Tests/RememberMe/ResponseListenerTest.php */
class __TwigTemplate_36718e9b4876b7b3de947570f363cde49b6ba1496935e775a39996443028cfee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/RememberMe/ResponseListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/RememberMe/ResponseListenerTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\RememberMe;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface;
use Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener;

class ResponseListenerTest extends TestCase
{
    public function testRememberMeCookieIsSentWithResponse()
    {
        \$cookie = new Cookie('rememberme', null, 0, '/', null, false, true, false, null);

        \$request = \$this->getRequest([
            RememberMeServicesInterface::COOKIE_ATTR_NAME => \$cookie,
        ]);

        \$response = \$this->getResponse();
        \$response->headers->expects(\$this->once())->method('setCookie')->with(\$cookie);

        \$listener = new ResponseListener();
        \$listener->onKernelResponse(\$this->getEvent(\$request, \$response));
    }

    public function testRememberMeCookieIsNotSendWithResponseForSubRequests()
    {
        \$cookie = new Cookie('rememberme', null, 0, '/', null, false, true, false, null);

        \$request = \$this->getRequest([
            RememberMeServicesInterface::COOKIE_ATTR_NAME => \$cookie,
        ]);

        \$response = \$this->getResponse();
        \$response->headers->expects(\$this->never())->method('setCookie');

        \$listener = new ResponseListener();
        \$listener->onKernelResponse(\$this->getEvent(\$request, \$response, HttpKernelInterface::SUB_REQUEST));
    }

    public function testRememberMeCookieIsNotSendWithResponse()
    {
        \$request = \$this->getRequest();

        \$response = \$this->getResponse();
        \$response->headers->expects(\$this->never())->method('setCookie');

        \$listener = new ResponseListener();
        \$listener->onKernelResponse(\$this->getEvent(\$request, \$response));
    }

    public function testItSubscribesToTheOnKernelResponseEvent()
    {
        \$listener = new ResponseListener();

        \$this->assertSame([KernelEvents::RESPONSE => 'onKernelResponse'], ResponseListener::getSubscribedEvents());
    }

    private function getRequest(array \$attributes = [])
    {
        \$request = new Request();

        foreach (\$attributes as \$name => \$value) {
            \$request->attributes->set(\$name, \$value);
        }

        return \$request;
    }

    private function getResponse()
    {
        \$response = new Response();
        \$response->headers = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\ResponseHeaderBag')->getMock();

        return \$response;
    }

    private function getEvent(\$request, \$response, \$type = HttpKernelInterface::MASTER_REQUEST)
    {
        \$event = \$this->getMockBuilder(ResponseEvent::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$event->expects(\$this->any())->method('getRequest')->willReturn(\$request);
        \$event->expects(\$this->any())->method('isMasterRequest')->willReturn(HttpKernelInterface::MASTER_REQUEST === \$type);
        \$event->expects(\$this->any())->method('getResponse')->willReturn(\$response);

        return \$event;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/RememberMe/ResponseListenerTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\RememberMe;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface;
use Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener;

class ResponseListenerTest extends TestCase
{
    public function testRememberMeCookieIsSentWithResponse()
    {
        \$cookie = new Cookie('rememberme', null, 0, '/', null, false, true, false, null);

        \$request = \$this->getRequest([
            RememberMeServicesInterface::COOKIE_ATTR_NAME => \$cookie,
        ]);

        \$response = \$this->getResponse();
        \$response->headers->expects(\$this->once())->method('setCookie')->with(\$cookie);

        \$listener = new ResponseListener();
        \$listener->onKernelResponse(\$this->getEvent(\$request, \$response));
    }

    public function testRememberMeCookieIsNotSendWithResponseForSubRequests()
    {
        \$cookie = new Cookie('rememberme', null, 0, '/', null, false, true, false, null);

        \$request = \$this->getRequest([
            RememberMeServicesInterface::COOKIE_ATTR_NAME => \$cookie,
        ]);

        \$response = \$this->getResponse();
        \$response->headers->expects(\$this->never())->method('setCookie');

        \$listener = new ResponseListener();
        \$listener->onKernelResponse(\$this->getEvent(\$request, \$response, HttpKernelInterface::SUB_REQUEST));
    }

    public function testRememberMeCookieIsNotSendWithResponse()
    {
        \$request = \$this->getRequest();

        \$response = \$this->getResponse();
        \$response->headers->expects(\$this->never())->method('setCookie');

        \$listener = new ResponseListener();
        \$listener->onKernelResponse(\$this->getEvent(\$request, \$response));
    }

    public function testItSubscribesToTheOnKernelResponseEvent()
    {
        \$listener = new ResponseListener();

        \$this->assertSame([KernelEvents::RESPONSE => 'onKernelResponse'], ResponseListener::getSubscribedEvents());
    }

    private function getRequest(array \$attributes = [])
    {
        \$request = new Request();

        foreach (\$attributes as \$name => \$value) {
            \$request->attributes->set(\$name, \$value);
        }

        return \$request;
    }

    private function getResponse()
    {
        \$response = new Response();
        \$response->headers = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\ResponseHeaderBag')->getMock();

        return \$response;
    }

    private function getEvent(\$request, \$response, \$type = HttpKernelInterface::MASTER_REQUEST)
    {
        \$event = \$this->getMockBuilder(ResponseEvent::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$event->expects(\$this->any())->method('getRequest')->willReturn(\$request);
        \$event->expects(\$this->any())->method('isMasterRequest')->willReturn(HttpKernelInterface::MASTER_REQUEST === \$type);
        \$event->expects(\$this->any())->method('getResponse')->willReturn(\$response);

        return \$event;
    }
}
", "vendor/symfony/security-http/Tests/RememberMe/ResponseListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/RememberMe/ResponseListenerTest.php");
    }
}
