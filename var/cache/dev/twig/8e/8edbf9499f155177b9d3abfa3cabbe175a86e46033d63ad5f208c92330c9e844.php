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

/* vendor/symfony/framework-bundle/Tests/Controller/ControllerResolverTest.php */
class __TwigTemplate_a63bb6e2b2eb5f2797b7dbbd483920519f9bdcdfa1e3508f67ac28dac3240f99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Controller/ControllerResolverTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Controller/ControllerResolverTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller;

use Psr\\Container\\ContainerInterface as Psr11ContainerInterface;
use Psr\\Log\\LoggerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Tests\\Controller\\ContainerControllerResolverTest;

class ControllerResolverTest extends ContainerControllerResolverTest
{
    public function testGetControllerOnContainerAware()
    {
        \$resolver = \$this->createControllerResolver();
        \$request = Request::create('/');
        \$request->attributes->set('_controller', 'Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController::testAction');

        \$controller = \$resolver->getController(\$request);

        \$this->assertInstanceOf('Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController', \$controller[0]);
        \$this->assertInstanceOf('Symfony\\Component\\DependencyInjection\\ContainerInterface', \$controller[0]->getContainer());
        \$this->assertSame('testAction', \$controller[1]);
    }

    public function testGetControllerOnContainerAwareInvokable()
    {
        \$resolver = \$this->createControllerResolver();
        \$request = Request::create('/');
        \$request->attributes->set('_controller', 'Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController');

        \$controller = \$resolver->getController(\$request);

        \$this->assertInstanceOf('Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController', \$controller);
        \$this->assertInstanceOf('Symfony\\Component\\DependencyInjection\\ContainerInterface', \$controller->getContainer());
    }

    /**
     * @group legacy
     * @expectedDeprecation Referencing controllers with FooBundle:Default:test is deprecated since Symfony 4.1. Use Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController::testAction instead.
     */
    public function testGetControllerWithBundleNotation()
    {
        \$shortName = 'FooBundle:Default:test';
        \$parser = \$this->createMockParser();
        \$parser->expects(\$this->once())
            ->method('parse')
            ->with(\$shortName)
            ->willReturn('Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController::testAction')
        ;

        \$resolver = \$this->createControllerResolver(null, null, \$parser);
        \$request = Request::create('/');
        \$request->attributes->set('_controller', \$shortName);

        \$controller = \$resolver->getController(\$request);

        \$this->assertInstanceOf('Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController', \$controller[0]);
        \$this->assertInstanceOf('Symfony\\Component\\DependencyInjection\\ContainerInterface', \$controller[0]->getContainer());
        \$this->assertSame('testAction', \$controller[1]);
    }

    public function testContainerAwareControllerGetsContainerWhenNotSet()
    {
        class_exists(AbstractControllerTest::class);

        \$controller = new ContainerAwareController();

        \$container = new Container();
        \$container->set(TestAbstractController::class, \$controller);

        \$resolver = \$this->createControllerResolver(null, \$container);

        \$request = Request::create('/');
        \$request->attributes->set('_controller', TestAbstractController::class.'::testAction');

        \$this->assertSame([\$controller, 'testAction'], \$resolver->getController(\$request));
        \$this->assertSame(\$container, \$controller->getContainer());
    }

    /**
     * @group legacy
     * @expectedDeprecation Auto-injection of the container for \"Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\TestAbstractController\" is deprecated since Symfony 4.2. Configure it as a service instead.
     */
    public function testAbstractControllerGetsContainerWhenNotSet()
    {
        class_exists(AbstractControllerTest::class);

        \$controller = new TestAbstractController(false);

        \$container = new Container();
        \$container->set(TestAbstractController::class, \$controller);

        \$resolver = \$this->createControllerResolver(null, \$container);

        \$request = Request::create('/');
        \$request->attributes->set('_controller', TestAbstractController::class.'::fooAction');

        \$this->assertSame([\$controller, 'fooAction'], \$resolver->getController(\$request));
        \$this->assertSame(\$container, \$controller->setContainer(\$container));
    }

    /**
     * @group legacy
     * @expectedDeprecation Auto-injection of the container for \"Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\DummyController\" is deprecated since Symfony 4.2. Configure it as a service instead.
     */
    public function testAbstractControllerServiceWithFcqnIdGetsContainerWhenNotSet()
    {
        class_exists(AbstractControllerTest::class);

        \$controller = new DummyController();

        \$container = new Container();
        \$container->set(DummyController::class, \$controller);

        \$resolver = \$this->createControllerResolver(null, \$container);

        \$request = Request::create('/');
        \$request->attributes->set('_controller', DummyController::class.'::fooAction');

        \$this->assertSame([\$controller, 'fooAction'], \$resolver->getController(\$request));
        \$this->assertSame(\$container, \$controller->getContainer());
    }

    public function testAbstractControllerGetsNoContainerWhenSet()
    {
        class_exists(AbstractControllerTest::class);

        \$controller = new TestAbstractController(false);
        \$controllerContainer = new Container();
        \$controller->setContainer(\$controllerContainer);

        \$container = new Container();
        \$container->set(TestAbstractController::class, \$controller);

        \$resolver = \$this->createControllerResolver(null, \$container);

        \$request = Request::create('/');
        \$request->attributes->set('_controller', TestAbstractController::class.'::fooAction');

        \$this->assertSame([\$controller, 'fooAction'], \$resolver->getController(\$request));
        \$this->assertSame(\$controllerContainer, \$controller->setContainer(\$container));
    }

    public function testAbstractControllerServiceWithFcqnIdGetsNoContainerWhenSet()
    {
        class_exists(AbstractControllerTest::class);

        \$controller = new DummyController();
        \$controllerContainer = new Container();
        \$controller->setContainer(\$controllerContainer);

        \$container = new Container();
        \$container->set(DummyController::class, \$controller);

        \$resolver = \$this->createControllerResolver(null, \$container);

        \$request = Request::create('/');
        \$request->attributes->set('_controller', DummyController::class.'::fooAction');

        \$this->assertSame([\$controller, 'fooAction'], \$resolver->getController(\$request));
        \$this->assertSame(\$controllerContainer, \$controller->getContainer());
    }

    protected function createControllerResolver(LoggerInterface \$logger = null, Psr11ContainerInterface \$container = null, ControllerNameParser \$parser = null)
    {
        if (!\$parser) {
            \$parser = \$this->createMockParser();
        }

        if (!\$container) {
            \$container = \$this->createMockContainer();
        }

        return new ControllerResolver(\$container, \$parser, \$logger);
    }

    protected function createMockParser()
    {
        return \$this->getMockBuilder('Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser')->disableOriginalConstructor()->getMock();
    }

    protected function createMockContainer()
    {
        return \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();
    }
}

class ContainerAwareController implements ContainerAwareInterface
{
    private \$container;

    public function setContainer(ContainerInterface \$container = null)
    {
        \$this->container = \$container;
    }

    public function getContainer()
    {
        return \$this->container;
    }

    public function testAction()
    {
    }

    public function __invoke()
    {
    }
}

class DummyController extends AbstractController
{
    public function getContainer()
    {
        return \$this->container;
    }

    public function fooAction()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Controller/ControllerResolverTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller;

use Psr\\Container\\ContainerInterface as Psr11ContainerInterface;
use Psr\\Log\\LoggerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Tests\\Controller\\ContainerControllerResolverTest;

class ControllerResolverTest extends ContainerControllerResolverTest
{
    public function testGetControllerOnContainerAware()
    {
        \$resolver = \$this->createControllerResolver();
        \$request = Request::create('/');
        \$request->attributes->set('_controller', 'Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController::testAction');

        \$controller = \$resolver->getController(\$request);

        \$this->assertInstanceOf('Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController', \$controller[0]);
        \$this->assertInstanceOf('Symfony\\Component\\DependencyInjection\\ContainerInterface', \$controller[0]->getContainer());
        \$this->assertSame('testAction', \$controller[1]);
    }

    public function testGetControllerOnContainerAwareInvokable()
    {
        \$resolver = \$this->createControllerResolver();
        \$request = Request::create('/');
        \$request->attributes->set('_controller', 'Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController');

        \$controller = \$resolver->getController(\$request);

        \$this->assertInstanceOf('Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController', \$controller);
        \$this->assertInstanceOf('Symfony\\Component\\DependencyInjection\\ContainerInterface', \$controller->getContainer());
    }

    /**
     * @group legacy
     * @expectedDeprecation Referencing controllers with FooBundle:Default:test is deprecated since Symfony 4.1. Use Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController::testAction instead.
     */
    public function testGetControllerWithBundleNotation()
    {
        \$shortName = 'FooBundle:Default:test';
        \$parser = \$this->createMockParser();
        \$parser->expects(\$this->once())
            ->method('parse')
            ->with(\$shortName)
            ->willReturn('Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController::testAction')
        ;

        \$resolver = \$this->createControllerResolver(null, null, \$parser);
        \$request = Request::create('/');
        \$request->attributes->set('_controller', \$shortName);

        \$controller = \$resolver->getController(\$request);

        \$this->assertInstanceOf('Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\ContainerAwareController', \$controller[0]);
        \$this->assertInstanceOf('Symfony\\Component\\DependencyInjection\\ContainerInterface', \$controller[0]->getContainer());
        \$this->assertSame('testAction', \$controller[1]);
    }

    public function testContainerAwareControllerGetsContainerWhenNotSet()
    {
        class_exists(AbstractControllerTest::class);

        \$controller = new ContainerAwareController();

        \$container = new Container();
        \$container->set(TestAbstractController::class, \$controller);

        \$resolver = \$this->createControllerResolver(null, \$container);

        \$request = Request::create('/');
        \$request->attributes->set('_controller', TestAbstractController::class.'::testAction');

        \$this->assertSame([\$controller, 'testAction'], \$resolver->getController(\$request));
        \$this->assertSame(\$container, \$controller->getContainer());
    }

    /**
     * @group legacy
     * @expectedDeprecation Auto-injection of the container for \"Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\TestAbstractController\" is deprecated since Symfony 4.2. Configure it as a service instead.
     */
    public function testAbstractControllerGetsContainerWhenNotSet()
    {
        class_exists(AbstractControllerTest::class);

        \$controller = new TestAbstractController(false);

        \$container = new Container();
        \$container->set(TestAbstractController::class, \$controller);

        \$resolver = \$this->createControllerResolver(null, \$container);

        \$request = Request::create('/');
        \$request->attributes->set('_controller', TestAbstractController::class.'::fooAction');

        \$this->assertSame([\$controller, 'fooAction'], \$resolver->getController(\$request));
        \$this->assertSame(\$container, \$controller->setContainer(\$container));
    }

    /**
     * @group legacy
     * @expectedDeprecation Auto-injection of the container for \"Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller\\DummyController\" is deprecated since Symfony 4.2. Configure it as a service instead.
     */
    public function testAbstractControllerServiceWithFcqnIdGetsContainerWhenNotSet()
    {
        class_exists(AbstractControllerTest::class);

        \$controller = new DummyController();

        \$container = new Container();
        \$container->set(DummyController::class, \$controller);

        \$resolver = \$this->createControllerResolver(null, \$container);

        \$request = Request::create('/');
        \$request->attributes->set('_controller', DummyController::class.'::fooAction');

        \$this->assertSame([\$controller, 'fooAction'], \$resolver->getController(\$request));
        \$this->assertSame(\$container, \$controller->getContainer());
    }

    public function testAbstractControllerGetsNoContainerWhenSet()
    {
        class_exists(AbstractControllerTest::class);

        \$controller = new TestAbstractController(false);
        \$controllerContainer = new Container();
        \$controller->setContainer(\$controllerContainer);

        \$container = new Container();
        \$container->set(TestAbstractController::class, \$controller);

        \$resolver = \$this->createControllerResolver(null, \$container);

        \$request = Request::create('/');
        \$request->attributes->set('_controller', TestAbstractController::class.'::fooAction');

        \$this->assertSame([\$controller, 'fooAction'], \$resolver->getController(\$request));
        \$this->assertSame(\$controllerContainer, \$controller->setContainer(\$container));
    }

    public function testAbstractControllerServiceWithFcqnIdGetsNoContainerWhenSet()
    {
        class_exists(AbstractControllerTest::class);

        \$controller = new DummyController();
        \$controllerContainer = new Container();
        \$controller->setContainer(\$controllerContainer);

        \$container = new Container();
        \$container->set(DummyController::class, \$controller);

        \$resolver = \$this->createControllerResolver(null, \$container);

        \$request = Request::create('/');
        \$request->attributes->set('_controller', DummyController::class.'::fooAction');

        \$this->assertSame([\$controller, 'fooAction'], \$resolver->getController(\$request));
        \$this->assertSame(\$controllerContainer, \$controller->getContainer());
    }

    protected function createControllerResolver(LoggerInterface \$logger = null, Psr11ContainerInterface \$container = null, ControllerNameParser \$parser = null)
    {
        if (!\$parser) {
            \$parser = \$this->createMockParser();
        }

        if (!\$container) {
            \$container = \$this->createMockContainer();
        }

        return new ControllerResolver(\$container, \$parser, \$logger);
    }

    protected function createMockParser()
    {
        return \$this->getMockBuilder('Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser')->disableOriginalConstructor()->getMock();
    }

    protected function createMockContainer()
    {
        return \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();
    }
}

class ContainerAwareController implements ContainerAwareInterface
{
    private \$container;

    public function setContainer(ContainerInterface \$container = null)
    {
        \$this->container = \$container;
    }

    public function getContainer()
    {
        return \$this->container;
    }

    public function testAction()
    {
    }

    public function __invoke()
    {
    }
}

class DummyController extends AbstractController
{
    public function getContainer()
    {
        return \$this->container;
    }

    public function fooAction()
    {
    }
}
", "vendor/symfony/framework-bundle/Tests/Controller/ControllerResolverTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Controller/ControllerResolverTest.php");
    }
}