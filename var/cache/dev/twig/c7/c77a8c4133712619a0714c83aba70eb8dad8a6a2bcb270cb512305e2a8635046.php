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

/* vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/ServiceValueResolverTest.php */
class __TwigTemplate_fe36c05a071dc3a6bf5a4cc7ae8807f0321ab253bbd0809a9d54417ee9bdb961 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/ServiceValueResolverTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/ServiceValueResolverTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\Controller\\ArgumentResolver;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\ServiceValueResolver;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterControllerArgumentLocatorsPass;

class ServiceValueResolverTest extends TestCase
{
    public function testDoNotSupportWhenControllerDoNotExists()
    {
        \$resolver = new ServiceValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => 'my_controller']);

        \$this->assertFalse(\$resolver->supports(\$request, \$argument));
    }

    public function testExistingController()
    {
        \$resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\\\Controller\\\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        \$request = \$this->requestWithAttributes(['_controller' => 'App\\\\Controller\\\\Mine::method']);
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$this->assertYieldEquals([new DummyService()], \$resolver->resolve(\$request, \$argument));
    }

    public function testExistingControllerWithATrailingBackSlash()
    {
        \$resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\\\Controller\\\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        \$request = \$this->requestWithAttributes(['_controller' => '\\\\App\\\\Controller\\\\Mine::method']);
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$this->assertYieldEquals([new DummyService()], \$resolver->resolve(\$request, \$argument));
    }

    public function testExistingControllerWithMethodNameStartUppercase()
    {
        \$resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\\\Controller\\\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));
        \$request = \$this->requestWithAttributes(['_controller' => 'App\\\\Controller\\\\Mine::Method']);
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$this->assertYieldEquals([new DummyService()], \$resolver->resolve(\$request, \$argument));
    }

    public function testControllerNameIsAnArray()
    {
        \$resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\\\Controller\\\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        \$request = \$this->requestWithAttributes(['_controller' => ['App\\\\Controller\\\\Mine', 'method']]);
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$this->assertYieldEquals([new DummyService()], \$resolver->resolve(\$request, \$argument));
    }

    public function testErrorIsTruncated()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Cannot autowire argument \$dummy of \"Symfony\\Component\\HttpKernel\\Tests\\Controller\\ArgumentResolver\\DummyController::index()\": it references class \"Symfony\\Component\\HttpKernel\\Tests\\Controller\\ArgumentResolver\\DummyService\" but no such service exists.');
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new RegisterControllerArgumentLocatorsPass());

        \$container->register('argument_resolver.service', ServiceValueResolver::class)->addArgument(null)->setPublic(true);
        \$container->register(DummyController::class)->addTag('controller.service_arguments')->setPublic(true);

        \$container->compile();

        \$request = \$this->requestWithAttributes(['_controller' => [DummyController::class, 'index']]);
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);
        \$container->get('argument_resolver.service')->resolve(\$request, \$argument)->current();
    }

    private function requestWithAttributes(array \$attributes)
    {
        \$request = Request::create('/');

        foreach (\$attributes as \$name => \$value) {
            \$request->attributes->set(\$name, \$value);
        }

        return \$request;
    }

    private function assertYieldEquals(array \$expected, \\Generator \$generator)
    {
        \$args = [];
        foreach (\$generator as \$arg) {
            \$args[] = \$arg;
        }

        \$this->assertEquals(\$expected, \$args);
    }
}

class DummyService
{
}

class DummyController
{
    public function index(DummyService \$dummy)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/ServiceValueResolverTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\Controller\\ArgumentResolver;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\ServiceValueResolver;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterControllerArgumentLocatorsPass;

class ServiceValueResolverTest extends TestCase
{
    public function testDoNotSupportWhenControllerDoNotExists()
    {
        \$resolver = new ServiceValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => 'my_controller']);

        \$this->assertFalse(\$resolver->supports(\$request, \$argument));
    }

    public function testExistingController()
    {
        \$resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\\\Controller\\\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        \$request = \$this->requestWithAttributes(['_controller' => 'App\\\\Controller\\\\Mine::method']);
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$this->assertYieldEquals([new DummyService()], \$resolver->resolve(\$request, \$argument));
    }

    public function testExistingControllerWithATrailingBackSlash()
    {
        \$resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\\\Controller\\\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        \$request = \$this->requestWithAttributes(['_controller' => '\\\\App\\\\Controller\\\\Mine::method']);
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$this->assertYieldEquals([new DummyService()], \$resolver->resolve(\$request, \$argument));
    }

    public function testExistingControllerWithMethodNameStartUppercase()
    {
        \$resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\\\Controller\\\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));
        \$request = \$this->requestWithAttributes(['_controller' => 'App\\\\Controller\\\\Mine::Method']);
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$this->assertYieldEquals([new DummyService()], \$resolver->resolve(\$request, \$argument));
    }

    public function testControllerNameIsAnArray()
    {
        \$resolver = new ServiceValueResolver(new ServiceLocator([
            'App\\\\Controller\\\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new DummyService();
                    },
                ]);
            },
        ]));

        \$request = \$this->requestWithAttributes(['_controller' => ['App\\\\Controller\\\\Mine', 'method']]);
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$this->assertYieldEquals([new DummyService()], \$resolver->resolve(\$request, \$argument));
    }

    public function testErrorIsTruncated()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Cannot autowire argument \$dummy of \"Symfony\\Component\\HttpKernel\\Tests\\Controller\\ArgumentResolver\\DummyController::index()\": it references class \"Symfony\\Component\\HttpKernel\\Tests\\Controller\\ArgumentResolver\\DummyService\" but no such service exists.');
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new RegisterControllerArgumentLocatorsPass());

        \$container->register('argument_resolver.service', ServiceValueResolver::class)->addArgument(null)->setPublic(true);
        \$container->register(DummyController::class)->addTag('controller.service_arguments')->setPublic(true);

        \$container->compile();

        \$request = \$this->requestWithAttributes(['_controller' => [DummyController::class, 'index']]);
        \$argument = new ArgumentMetadata('dummy', DummyService::class, false, false, null);
        \$container->get('argument_resolver.service')->resolve(\$request, \$argument)->current();
    }

    private function requestWithAttributes(array \$attributes)
    {
        \$request = Request::create('/');

        foreach (\$attributes as \$name => \$value) {
            \$request->attributes->set(\$name, \$value);
        }

        return \$request;
    }

    private function assertYieldEquals(array \$expected, \\Generator \$generator)
    {
        \$args = [];
        foreach (\$generator as \$arg) {
            \$args[] = \$arg;
        }

        \$this->assertEquals(\$expected, \$args);
    }
}

class DummyService
{
}

class DummyController
{
    public function index(DummyService \$dummy)
    {
    }
}
", "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/ServiceValueResolverTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/ServiceValueResolverTest.php");
    }
}
