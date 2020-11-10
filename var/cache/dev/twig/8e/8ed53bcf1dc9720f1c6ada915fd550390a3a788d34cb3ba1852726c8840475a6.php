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

/* vendor/symfony/security-bundle/Tests/Security/FirewallMapTest.php */
class __TwigTemplate_6b64390784d38cc222acfec61c2fef900601d8e9cda2543d357781620a5c4ff4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Security/FirewallMapTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Security/FirewallMapTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Security;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestMatcherInterface;
use Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener;
use Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener;

class FirewallMapTest extends TestCase
{
    const ATTRIBUTE_FIREWALL_CONTEXT = '_firewall_context';

    public function testGetListenersWithEmptyMap()
    {
        \$request = new Request();

        \$map = [];
        \$container = \$this->getMockBuilder(Container::class)->getMock();
        \$container->expects(\$this->never())->method('get');

        \$firewallMap = new FirewallMap(\$container, \$map);

        \$this->assertEquals([[], null, null], \$firewallMap->getListeners(\$request));
        \$this->assertNull(\$firewallMap->getFirewallConfig(\$request));
        \$this->assertFalse(\$request->attributes->has(self::ATTRIBUTE_FIREWALL_CONTEXT));
    }

    public function testGetListenersWithInvalidParameter()
    {
        \$request = new Request();
        \$request->attributes->set(self::ATTRIBUTE_FIREWALL_CONTEXT, 'foo');

        \$map = [];
        \$container = \$this->getMockBuilder(Container::class)->getMock();
        \$container->expects(\$this->never())->method('get');

        \$firewallMap = new FirewallMap(\$container, \$map);

        \$this->assertEquals([[], null, null], \$firewallMap->getListeners(\$request));
        \$this->assertNull(\$firewallMap->getFirewallConfig(\$request));
        \$this->assertFalse(\$request->attributes->has(self::ATTRIBUTE_FIREWALL_CONTEXT));
    }

    public function testGetListeners()
    {
        \$request = new Request();

        \$firewallContext = \$this->getMockBuilder(FirewallContext::class)->disableOriginalConstructor()->getMock();

        \$firewallConfig = new FirewallConfig('main', 'user_checker');
        \$firewallContext->expects(\$this->once())->method('getConfig')->willReturn(\$firewallConfig);

        \$listener = function () {};
        \$firewallContext->expects(\$this->once())->method('getListeners')->willReturn([\$listener]);

        \$exceptionListener = \$this->getMockBuilder(ExceptionListener::class)->disableOriginalConstructor()->getMock();
        \$firewallContext->expects(\$this->once())->method('getExceptionListener')->willReturn(\$exceptionListener);

        \$logoutListener = \$this->getMockBuilder(LogoutListener::class)->disableOriginalConstructor()->getMock();
        \$firewallContext->expects(\$this->once())->method('getLogoutListener')->willReturn(\$logoutListener);

        \$matcher = \$this->getMockBuilder(RequestMatcherInterface::class)->getMock();
        \$matcher->expects(\$this->once())
            ->method('matches')
            ->with(\$request)
            ->willReturn(true);

        \$container = \$this->getMockBuilder(Container::class)->getMock();
        \$container->expects(\$this->exactly(2))->method('get')->willReturn(\$firewallContext);

        \$firewallMap = new FirewallMap(\$container, ['security.firewall.map.context.foo' => \$matcher]);

        \$this->assertEquals([[\$listener], \$exceptionListener, \$logoutListener], \$firewallMap->getListeners(\$request));
        \$this->assertEquals(\$firewallConfig, \$firewallMap->getFirewallConfig(\$request));
        \$this->assertEquals('security.firewall.map.context.foo', \$request->attributes->get(self::ATTRIBUTE_FIREWALL_CONTEXT));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Security/FirewallMapTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Security;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext;
use Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestMatcherInterface;
use Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener;
use Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener;

class FirewallMapTest extends TestCase
{
    const ATTRIBUTE_FIREWALL_CONTEXT = '_firewall_context';

    public function testGetListenersWithEmptyMap()
    {
        \$request = new Request();

        \$map = [];
        \$container = \$this->getMockBuilder(Container::class)->getMock();
        \$container->expects(\$this->never())->method('get');

        \$firewallMap = new FirewallMap(\$container, \$map);

        \$this->assertEquals([[], null, null], \$firewallMap->getListeners(\$request));
        \$this->assertNull(\$firewallMap->getFirewallConfig(\$request));
        \$this->assertFalse(\$request->attributes->has(self::ATTRIBUTE_FIREWALL_CONTEXT));
    }

    public function testGetListenersWithInvalidParameter()
    {
        \$request = new Request();
        \$request->attributes->set(self::ATTRIBUTE_FIREWALL_CONTEXT, 'foo');

        \$map = [];
        \$container = \$this->getMockBuilder(Container::class)->getMock();
        \$container->expects(\$this->never())->method('get');

        \$firewallMap = new FirewallMap(\$container, \$map);

        \$this->assertEquals([[], null, null], \$firewallMap->getListeners(\$request));
        \$this->assertNull(\$firewallMap->getFirewallConfig(\$request));
        \$this->assertFalse(\$request->attributes->has(self::ATTRIBUTE_FIREWALL_CONTEXT));
    }

    public function testGetListeners()
    {
        \$request = new Request();

        \$firewallContext = \$this->getMockBuilder(FirewallContext::class)->disableOriginalConstructor()->getMock();

        \$firewallConfig = new FirewallConfig('main', 'user_checker');
        \$firewallContext->expects(\$this->once())->method('getConfig')->willReturn(\$firewallConfig);

        \$listener = function () {};
        \$firewallContext->expects(\$this->once())->method('getListeners')->willReturn([\$listener]);

        \$exceptionListener = \$this->getMockBuilder(ExceptionListener::class)->disableOriginalConstructor()->getMock();
        \$firewallContext->expects(\$this->once())->method('getExceptionListener')->willReturn(\$exceptionListener);

        \$logoutListener = \$this->getMockBuilder(LogoutListener::class)->disableOriginalConstructor()->getMock();
        \$firewallContext->expects(\$this->once())->method('getLogoutListener')->willReturn(\$logoutListener);

        \$matcher = \$this->getMockBuilder(RequestMatcherInterface::class)->getMock();
        \$matcher->expects(\$this->once())
            ->method('matches')
            ->with(\$request)
            ->willReturn(true);

        \$container = \$this->getMockBuilder(Container::class)->getMock();
        \$container->expects(\$this->exactly(2))->method('get')->willReturn(\$firewallContext);

        \$firewallMap = new FirewallMap(\$container, ['security.firewall.map.context.foo' => \$matcher]);

        \$this->assertEquals([[\$listener], \$exceptionListener, \$logoutListener], \$firewallMap->getListeners(\$request));
        \$this->assertEquals(\$firewallConfig, \$firewallMap->getFirewallConfig(\$request));
        \$this->assertEquals('security.firewall.map.context.foo', \$request->attributes->get(self::ATTRIBUTE_FIREWALL_CONTEXT));
    }
}
", "vendor/symfony/security-bundle/Tests/Security/FirewallMapTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Security/FirewallMapTest.php");
    }
}
