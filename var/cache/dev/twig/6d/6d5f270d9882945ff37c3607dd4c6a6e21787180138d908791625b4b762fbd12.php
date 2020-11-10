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

/* vendor/symfony/security-http/Tests/FirewallTest.php */
class __TwigTemplate_40e4fbd1e2f9fcdd0f937084092665b17b6ff04aa25e85efbd0d5d08dc36786b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/FirewallTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/FirewallTest.php"));

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
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Http\\Firewall;
use Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener;
use Symfony\\Component\\Security\\Http\\FirewallMapInterface;

class FirewallTest extends TestCase
{
    public function testOnKernelRequestRegistersExceptionListener()
    {
        \$dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();

        \$listener = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener')->disableOriginalConstructor()->getMock();
        \$listener
            ->expects(\$this->once())
            ->method('register')
            ->with(\$this->equalTo(\$dispatcher))
        ;

        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();

        \$map = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\FirewallMapInterface')->getMock();
        \$map
            ->expects(\$this->once())
            ->method('getListeners')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], \$listener, null])
        ;

        \$event = new RequestEvent(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);

        \$firewall = new Firewall(\$map, \$dispatcher);
        \$firewall->onKernelRequest(\$event);
    }

    public function testOnKernelRequestStopsWhenThereIsAResponse()
    {
        \$response = new Response();

        \$called = [];

        \$first = function () use (&\$called) {
            \$called[] = 1;
        };

        \$second = function () use (&\$called) {
            \$called[] = 2;
        };

        \$map = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\FirewallMapInterface')->getMock();
        \$map
            ->expects(\$this->once())
            ->method('getListeners')
            ->willReturn([[\$first, \$second], null, null])
        ;

        \$event = \$this->getMockBuilder(RequestEvent::class)
            ->setMethods(['hasResponse'])
            ->setConstructorArgs([
                \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(),
                \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock(),
                HttpKernelInterface::MASTER_REQUEST,
            ])
            ->getMock()
        ;
        \$event
            ->expects(\$this->at(0))
            ->method('hasResponse')
            ->willReturn(true)
        ;

        \$firewall = new Firewall(\$map, \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock());
        \$firewall->onKernelRequest(\$event);

        \$this->assertSame([1], \$called);
    }

    public function testOnKernelRequestWithSubRequest()
    {
        \$map = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\FirewallMapInterface')->getMock();
        \$map
            ->expects(\$this->never())
            ->method('getListeners')
        ;

        \$event = new RequestEvent(
            \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(),
            \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock(),
            HttpKernelInterface::SUB_REQUEST
        );

        \$firewall = new Firewall(\$map, \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock());
        \$firewall->onKernelRequest(\$event);

        \$this->assertFalse(\$event->hasResponse());
    }

    /**
     * @group legacy
     * @expectedDeprecation Not returning an array of 3 elements from Symfony\\Component\\Security\\Http\\FirewallMapInterface::getListeners() is deprecated since Symfony 4.2, the 3rd element must be an instance of Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener or null.
     */
    public function testMissingLogoutListener()
    {
        \$dispatcher = \$this->getMockBuilder(EventDispatcherInterface::class)->getMock();

        \$listener = \$this->getMockBuilder(ExceptionListener::class)->disableOriginalConstructor()->getMock();
        \$listener
            ->expects(\$this->once())
            ->method('register')
            ->with(\$this->equalTo(\$dispatcher))
        ;

        \$request = new Request();

        \$map = \$this->getMockBuilder(FirewallMapInterface::class)->getMock();
        \$map
            ->expects(\$this->once())
            ->method('getListeners')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], \$listener])
        ;

        \$firewall = new Firewall(\$map, \$dispatcher);
        \$firewall->onKernelRequest(new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/FirewallTest.php";
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
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Http\\Firewall;
use Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener;
use Symfony\\Component\\Security\\Http\\FirewallMapInterface;

class FirewallTest extends TestCase
{
    public function testOnKernelRequestRegistersExceptionListener()
    {
        \$dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();

        \$listener = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener')->disableOriginalConstructor()->getMock();
        \$listener
            ->expects(\$this->once())
            ->method('register')
            ->with(\$this->equalTo(\$dispatcher))
        ;

        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();

        \$map = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\FirewallMapInterface')->getMock();
        \$map
            ->expects(\$this->once())
            ->method('getListeners')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], \$listener, null])
        ;

        \$event = new RequestEvent(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);

        \$firewall = new Firewall(\$map, \$dispatcher);
        \$firewall->onKernelRequest(\$event);
    }

    public function testOnKernelRequestStopsWhenThereIsAResponse()
    {
        \$response = new Response();

        \$called = [];

        \$first = function () use (&\$called) {
            \$called[] = 1;
        };

        \$second = function () use (&\$called) {
            \$called[] = 2;
        };

        \$map = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\FirewallMapInterface')->getMock();
        \$map
            ->expects(\$this->once())
            ->method('getListeners')
            ->willReturn([[\$first, \$second], null, null])
        ;

        \$event = \$this->getMockBuilder(RequestEvent::class)
            ->setMethods(['hasResponse'])
            ->setConstructorArgs([
                \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(),
                \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock(),
                HttpKernelInterface::MASTER_REQUEST,
            ])
            ->getMock()
        ;
        \$event
            ->expects(\$this->at(0))
            ->method('hasResponse')
            ->willReturn(true)
        ;

        \$firewall = new Firewall(\$map, \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock());
        \$firewall->onKernelRequest(\$event);

        \$this->assertSame([1], \$called);
    }

    public function testOnKernelRequestWithSubRequest()
    {
        \$map = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\FirewallMapInterface')->getMock();
        \$map
            ->expects(\$this->never())
            ->method('getListeners')
        ;

        \$event = new RequestEvent(
            \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(),
            \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock(),
            HttpKernelInterface::SUB_REQUEST
        );

        \$firewall = new Firewall(\$map, \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock());
        \$firewall->onKernelRequest(\$event);

        \$this->assertFalse(\$event->hasResponse());
    }

    /**
     * @group legacy
     * @expectedDeprecation Not returning an array of 3 elements from Symfony\\Component\\Security\\Http\\FirewallMapInterface::getListeners() is deprecated since Symfony 4.2, the 3rd element must be an instance of Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener or null.
     */
    public function testMissingLogoutListener()
    {
        \$dispatcher = \$this->getMockBuilder(EventDispatcherInterface::class)->getMock();

        \$listener = \$this->getMockBuilder(ExceptionListener::class)->disableOriginalConstructor()->getMock();
        \$listener
            ->expects(\$this->once())
            ->method('register')
            ->with(\$this->equalTo(\$dispatcher))
        ;

        \$request = new Request();

        \$map = \$this->getMockBuilder(FirewallMapInterface::class)->getMock();
        \$map
            ->expects(\$this->once())
            ->method('getListeners')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], \$listener])
        ;

        \$firewall = new Firewall(\$map, \$dispatcher);
        \$firewall->onKernelRequest(new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST));
    }
}
", "vendor/symfony/security-http/Tests/FirewallTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/FirewallTest.php");
    }
}
