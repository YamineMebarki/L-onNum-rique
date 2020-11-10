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

/* vendor/symfony/framework-bundle/Tests/Controller/AbstractControllerTest.php */
class __TwigTemplate_619f220a0148448fe1931899c32b62700582890e94f78a05146421383f4449d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Controller/AbstractControllerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Controller/AbstractControllerTest.php"));

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

use Psr\\Container\\ContainerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag;

class AbstractControllerTest extends ControllerTraitTest
{
    protected function createController()
    {
        return new TestAbstractController();
    }

    /**
     * This test protects the default subscribed core services against accidental modification.
     */
    public function testSubscribedServices()
    {
        \$subscribed = AbstractController::getSubscribedServices();
        \$expectedServices = [
            'router' => '?Symfony\\\\Component\\\\Routing\\\\RouterInterface',
            'request_stack' => '?Symfony\\\\Component\\\\HttpFoundation\\\\RequestStack',
            'http_kernel' => '?Symfony\\\\Component\\\\HttpKernel\\\\HttpKernelInterface',
            'serializer' => '?Symfony\\\\Component\\\\Serializer\\\\SerializerInterface',
            'session' => '?Symfony\\\\Component\\\\HttpFoundation\\\\Session\\\\SessionInterface',
            'security.authorization_checker' => '?Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\AuthorizationCheckerInterface',
            'templating' => '?Symfony\\\\Component\\\\Templating\\\\EngineInterface',
            'twig' => '?Twig\\\\Environment',
            'doctrine' => '?Doctrine\\\\Common\\\\Persistence\\\\ManagerRegistry',
            'form.factory' => '?Symfony\\\\Component\\\\Form\\\\FormFactoryInterface',
            'parameter_bag' => '?Symfony\\\\Component\\\\DependencyInjection\\\\ParameterBag\\\\ContainerBagInterface',
            'message_bus' => '?Symfony\\\\Component\\\\Messenger\\\\MessageBusInterface',
            'messenger.default_bus' => '?Symfony\\\\Component\\\\Messenger\\\\MessageBusInterface',
            'security.token_storage' => '?Symfony\\\\Component\\\\Security\\\\Core\\\\Authentication\\\\Token\\\\Storage\\\\TokenStorageInterface',
            'security.csrf.token_manager' => '?Symfony\\\\Component\\\\Security\\\\Csrf\\\\CsrfTokenManagerInterface',
        ];

        \$this->assertEquals(\$expectedServices, \$subscribed, 'Subscribed core services in AbstractController have changed');
    }

    public function testGetParameter()
    {
        if (!class_exists(ContainerBag::class)) {
            \$this->markTestSkipped('ContainerBag class does not exist');
        }

        \$container = new Container(new FrozenParameterBag(['foo' => 'bar']));
        \$container->set('parameter_bag', new ContainerBag(\$container));

        \$controller = \$this->createController();
        \$controller->setContainer(\$container);

        \$this->assertSame('bar', \$controller->getParameter('foo'));
    }

    public function testMissingParameterBag()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$this->expectExceptionMessage('TestAbstractController::getParameter()\" method is missing a parameter bag');
        \$container = new Container();

        \$controller = \$this->createController();
        \$controller->setContainer(\$container);

        \$controller->getParameter('foo');
    }
}

class TestAbstractController extends AbstractController
{
    private \$throwOnUnexpectedService;

    public function __construct(\$throwOnUnexpectedService = true)
    {
        \$this->throwOnUnexpectedService = \$throwOnUnexpectedService;
    }

    public function __call(string \$method, array \$arguments)
    {
        return \$this->\$method(...\$arguments);
    }

    public function setContainer(ContainerInterface \$container)
    {
        if (!\$this->throwOnUnexpectedService) {
            return parent::setContainer(\$container);
        }

        \$expected = self::getSubscribedServices();

        foreach (\$container->getServiceIds() as \$id) {
            if ('service_container' === \$id) {
                continue;
            }
            if (!isset(\$expected[\$id])) {
                throw new \\UnexpectedValueException(sprintf('Service \"%s\" is not expected, as declared by %s::getSubscribedServices()', \$id, AbstractController::class));
            }
            \$type = substr(\$expected[\$id], 1);
            if (!\$container->get(\$id) instanceof \$type) {
                throw new \\UnexpectedValueException(sprintf('Service \"%s\" is expected to be an instance of \"%s\", as declared by %s::getSubscribedServices()', \$id, \$type, AbstractController::class));
            }
        }

        return parent::setContainer(\$container);
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
        return "vendor/symfony/framework-bundle/Tests/Controller/AbstractControllerTest.php";
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

use Psr\\Container\\ContainerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag;

class AbstractControllerTest extends ControllerTraitTest
{
    protected function createController()
    {
        return new TestAbstractController();
    }

    /**
     * This test protects the default subscribed core services against accidental modification.
     */
    public function testSubscribedServices()
    {
        \$subscribed = AbstractController::getSubscribedServices();
        \$expectedServices = [
            'router' => '?Symfony\\\\Component\\\\Routing\\\\RouterInterface',
            'request_stack' => '?Symfony\\\\Component\\\\HttpFoundation\\\\RequestStack',
            'http_kernel' => '?Symfony\\\\Component\\\\HttpKernel\\\\HttpKernelInterface',
            'serializer' => '?Symfony\\\\Component\\\\Serializer\\\\SerializerInterface',
            'session' => '?Symfony\\\\Component\\\\HttpFoundation\\\\Session\\\\SessionInterface',
            'security.authorization_checker' => '?Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\AuthorizationCheckerInterface',
            'templating' => '?Symfony\\\\Component\\\\Templating\\\\EngineInterface',
            'twig' => '?Twig\\\\Environment',
            'doctrine' => '?Doctrine\\\\Common\\\\Persistence\\\\ManagerRegistry',
            'form.factory' => '?Symfony\\\\Component\\\\Form\\\\FormFactoryInterface',
            'parameter_bag' => '?Symfony\\\\Component\\\\DependencyInjection\\\\ParameterBag\\\\ContainerBagInterface',
            'message_bus' => '?Symfony\\\\Component\\\\Messenger\\\\MessageBusInterface',
            'messenger.default_bus' => '?Symfony\\\\Component\\\\Messenger\\\\MessageBusInterface',
            'security.token_storage' => '?Symfony\\\\Component\\\\Security\\\\Core\\\\Authentication\\\\Token\\\\Storage\\\\TokenStorageInterface',
            'security.csrf.token_manager' => '?Symfony\\\\Component\\\\Security\\\\Csrf\\\\CsrfTokenManagerInterface',
        ];

        \$this->assertEquals(\$expectedServices, \$subscribed, 'Subscribed core services in AbstractController have changed');
    }

    public function testGetParameter()
    {
        if (!class_exists(ContainerBag::class)) {
            \$this->markTestSkipped('ContainerBag class does not exist');
        }

        \$container = new Container(new FrozenParameterBag(['foo' => 'bar']));
        \$container->set('parameter_bag', new ContainerBag(\$container));

        \$controller = \$this->createController();
        \$controller->setContainer(\$container);

        \$this->assertSame('bar', \$controller->getParameter('foo'));
    }

    public function testMissingParameterBag()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException');
        \$this->expectExceptionMessage('TestAbstractController::getParameter()\" method is missing a parameter bag');
        \$container = new Container();

        \$controller = \$this->createController();
        \$controller->setContainer(\$container);

        \$controller->getParameter('foo');
    }
}

class TestAbstractController extends AbstractController
{
    private \$throwOnUnexpectedService;

    public function __construct(\$throwOnUnexpectedService = true)
    {
        \$this->throwOnUnexpectedService = \$throwOnUnexpectedService;
    }

    public function __call(string \$method, array \$arguments)
    {
        return \$this->\$method(...\$arguments);
    }

    public function setContainer(ContainerInterface \$container)
    {
        if (!\$this->throwOnUnexpectedService) {
            return parent::setContainer(\$container);
        }

        \$expected = self::getSubscribedServices();

        foreach (\$container->getServiceIds() as \$id) {
            if ('service_container' === \$id) {
                continue;
            }
            if (!isset(\$expected[\$id])) {
                throw new \\UnexpectedValueException(sprintf('Service \"%s\" is not expected, as declared by %s::getSubscribedServices()', \$id, AbstractController::class));
            }
            \$type = substr(\$expected[\$id], 1);
            if (!\$container->get(\$id) instanceof \$type) {
                throw new \\UnexpectedValueException(sprintf('Service \"%s\" is expected to be an instance of \"%s\", as declared by %s::getSubscribedServices()', \$id, \$type, AbstractController::class));
            }
        }

        return parent::setContainer(\$container);
    }

    public function fooAction()
    {
    }
}
", "vendor/symfony/framework-bundle/Tests/Controller/AbstractControllerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Controller/AbstractControllerTest.php");
    }
}
