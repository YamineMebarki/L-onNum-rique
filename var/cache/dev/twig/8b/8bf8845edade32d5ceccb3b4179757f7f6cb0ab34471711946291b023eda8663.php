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

/* vendor/symfony/framework-bundle/Tests/Command/RouterMatchCommandTest.php */
class __TwigTemplate_41d069805f3f0a05fb7115b6ac289f893d2756a1a353b5f924a33ef6d99efbb8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/RouterMatchCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/RouterMatchCommandTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand;
use Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class RouterMatchCommandTest extends TestCase
{
    public function testWithMatchPath()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['path_info' => '/foo', 'foo'], ['decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('Route Name   | foo', \$tester->getDisplay());
    }

    public function testWithNotMatchPath()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['path_info' => '/test', 'foo'], ['decorated' => false]);

        \$this->assertEquals(1, \$ret, 'Returns 1 in case of failure');
        \$this->assertStringContainsString('None of the routes match the path \"/test\"', \$tester->getDisplay());
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester()
    {
        \$application = new Application(\$this->getKernel());
        \$application->add(new RouterMatchCommand(\$this->getRouter()));
        \$application->add(new RouterDebugCommand(\$this->getRouter()));

        return new CommandTester(\$application->find('router:match'));
    }

    private function getRouter()
    {
        \$routeCollection = new RouteCollection();
        \$routeCollection->add('foo', new Route('foo'));
        \$requestContext = new RequestContext();
        \$router = \$this->getMockBuilder('Symfony\\Component\\Routing\\RouterInterface')->getMock();
        \$router
            ->expects(\$this->any())
            ->method('getRouteCollection')
            ->willReturn(\$routeCollection);
        \$router
            ->expects(\$this->any())
            ->method('getContext')
            ->willReturn(\$requestContext);

        return \$router;
    }

    private function getKernel()
    {
        \$container = \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();
        \$container
            ->expects(\$this->atLeastOnce())
            ->method('has')
            ->willReturnCallback(function (\$id) {
                return 'console.command_loader' !== \$id;
            })
        ;
        \$container
            ->expects(\$this->any())
            ->method('get')
            ->with('router')
            ->willReturn(\$this->getRouter())
        ;

        \$kernel = \$this->getMockBuilder(KernelInterface::class)->getMock();
        \$kernel
            ->expects(\$this->any())
            ->method('getContainer')
            ->willReturn(\$container)
        ;
        \$kernel
            ->expects(\$this->once())
            ->method('getBundles')
            ->willReturn([])
        ;

        return \$kernel;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Command/RouterMatchCommandTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand;
use Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class RouterMatchCommandTest extends TestCase
{
    public function testWithMatchPath()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['path_info' => '/foo', 'foo'], ['decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('Route Name   | foo', \$tester->getDisplay());
    }

    public function testWithNotMatchPath()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['path_info' => '/test', 'foo'], ['decorated' => false]);

        \$this->assertEquals(1, \$ret, 'Returns 1 in case of failure');
        \$this->assertStringContainsString('None of the routes match the path \"/test\"', \$tester->getDisplay());
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester()
    {
        \$application = new Application(\$this->getKernel());
        \$application->add(new RouterMatchCommand(\$this->getRouter()));
        \$application->add(new RouterDebugCommand(\$this->getRouter()));

        return new CommandTester(\$application->find('router:match'));
    }

    private function getRouter()
    {
        \$routeCollection = new RouteCollection();
        \$routeCollection->add('foo', new Route('foo'));
        \$requestContext = new RequestContext();
        \$router = \$this->getMockBuilder('Symfony\\Component\\Routing\\RouterInterface')->getMock();
        \$router
            ->expects(\$this->any())
            ->method('getRouteCollection')
            ->willReturn(\$routeCollection);
        \$router
            ->expects(\$this->any())
            ->method('getContext')
            ->willReturn(\$requestContext);

        return \$router;
    }

    private function getKernel()
    {
        \$container = \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();
        \$container
            ->expects(\$this->atLeastOnce())
            ->method('has')
            ->willReturnCallback(function (\$id) {
                return 'console.command_loader' !== \$id;
            })
        ;
        \$container
            ->expects(\$this->any())
            ->method('get')
            ->with('router')
            ->willReturn(\$this->getRouter())
        ;

        \$kernel = \$this->getMockBuilder(KernelInterface::class)->getMock();
        \$kernel
            ->expects(\$this->any())
            ->method('getContainer')
            ->willReturn(\$container)
        ;
        \$kernel
            ->expects(\$this->once())
            ->method('getBundles')
            ->willReturn([])
        ;

        return \$kernel;
    }
}
", "vendor/symfony/framework-bundle/Tests/Command/RouterMatchCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Command/RouterMatchCommandTest.php");
    }
}
