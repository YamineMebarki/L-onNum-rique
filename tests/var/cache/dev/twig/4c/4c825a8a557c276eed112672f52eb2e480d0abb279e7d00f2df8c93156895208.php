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

/* vendor/symfony/security-bundle/Tests/Debug/TraceableFirewallListenerTest.php */
class __TwigTemplate_bee6c99b0f425d5f9999cd8e3dfe6221dac82106e104005be2f7ca62f9e76229 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Debug/TraceableFirewallListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Debug/TraceableFirewallListenerTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\Debug\\TraceableFirewallListener;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator;

/**
 * @group time-sensitive
 */
class TraceableFirewallListenerTest extends TestCase
{
    public function testOnKernelRequestRecordsListeners()
    {
        \$request = new Request();
        \$event = new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
        \$event->setResponse(\$response = new Response());
        \$listener = function (\$e) use (\$event, &\$listenerCalled) {
            \$listenerCalled += \$e === \$event;
        };
        \$firewallMap = \$this
            ->getMockBuilder(FirewallMap::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$firewallMap
            ->expects(\$this->once())
            ->method('getFirewallConfig')
            ->with(\$request)
            ->willReturn(null);
        \$firewallMap
            ->expects(\$this->once())
            ->method('getListeners')
            ->with(\$request)
            ->willReturn([[\$listener], null, null]);

        \$firewall = new TraceableFirewallListener(\$firewallMap, new EventDispatcher(), new LogoutUrlGenerator());
        \$firewall->configureLogoutUrlGenerator(\$event);
        \$firewall->onKernelRequest(\$event);

        \$listeners = \$firewall->getWrappedListeners();
        \$this->assertCount(1, \$listeners);
        \$this->assertSame(\$listener, \$listeners[0]['stub']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Debug/TraceableFirewallListenerTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\Debug\\TraceableFirewallListener;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator;

/**
 * @group time-sensitive
 */
class TraceableFirewallListenerTest extends TestCase
{
    public function testOnKernelRequestRecordsListeners()
    {
        \$request = new Request();
        \$event = new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
        \$event->setResponse(\$response = new Response());
        \$listener = function (\$e) use (\$event, &\$listenerCalled) {
            \$listenerCalled += \$e === \$event;
        };
        \$firewallMap = \$this
            ->getMockBuilder(FirewallMap::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$firewallMap
            ->expects(\$this->once())
            ->method('getFirewallConfig')
            ->with(\$request)
            ->willReturn(null);
        \$firewallMap
            ->expects(\$this->once())
            ->method('getListeners')
            ->with(\$request)
            ->willReturn([[\$listener], null, null]);

        \$firewall = new TraceableFirewallListener(\$firewallMap, new EventDispatcher(), new LogoutUrlGenerator());
        \$firewall->configureLogoutUrlGenerator(\$event);
        \$firewall->onKernelRequest(\$event);

        \$listeners = \$firewall->getWrappedListeners();
        \$this->assertCount(1, \$listeners);
        \$this->assertSame(\$listener, \$listeners[0]['stub']);
    }
}
", "vendor/symfony/security-bundle/Tests/Debug/TraceableFirewallListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Debug/TraceableFirewallListenerTest.php");
    }
}
