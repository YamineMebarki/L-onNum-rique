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

/* vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/NotTaggedControllerValueResolverTest.php */
class __TwigTemplate_fa15e6f1f5522508073cf5aacd1bed518fbd97f4e25c12d1aa3bdc5ea58bfe1b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/NotTaggedControllerValueResolverTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/NotTaggedControllerValueResolverTest.php"));

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
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

class NotTaggedControllerValueResolverTest extends TestCase
{
    public function testDoSupportWhenControllerDoNotExists()
    {
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => 'my_controller']);

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
    }

    public function testDoNotSupportWhenControllerExists()
    {
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([
            'App\\\\Controller\\\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new \\stdClass();
                    },
                ]);
            },
        ]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => 'App\\\\Controller\\\\Mine::method']);

        \$this->assertFalse(\$resolver->supports(\$request, \$argument));
    }

    public function testDoNotSupportEmptyController()
    {
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => '']);
        \$this->assertFalse(\$resolver->supports(\$request, \$argument));
    }

    public function testController()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Could not resolve argument \$dummy of \"App\\Controller\\Mine::method()\", maybe you forgot to register the controller as a service or missed tagging it with the \"controller.service_arguments\"?');
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => 'App\\\\Controller\\\\Mine::method']);
        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$resolver->resolve(\$request, \$argument);
    }

    public function testControllerWithATrailingBackSlash()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Could not resolve argument \$dummy of \"App\\Controller\\Mine::method()\", maybe you forgot to register the controller as a service or missed tagging it with the \"controller.service_arguments\"?');
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => '\\\\App\\\\Controller\\\\Mine::method']);
        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$resolver->resolve(\$request, \$argument);
    }

    public function testControllerWithMethodNameStartUppercase()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Could not resolve argument \$dummy of \"App\\Controller\\Mine::method()\", maybe you forgot to register the controller as a service or missed tagging it with the \"controller.service_arguments\"?');
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => 'App\\\\Controller\\\\Mine::Method']);
        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$resolver->resolve(\$request, \$argument);
    }

    public function testControllerNameIsAnArray()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Could not resolve argument \$dummy of \"App\\Controller\\Mine::method()\", maybe you forgot to register the controller as a service or missed tagging it with the \"controller.service_arguments\"?');
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => ['App\\\\Controller\\\\Mine', 'method']]);
        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$resolver->resolve(\$request, \$argument);
    }

    private function requestWithAttributes(array \$attributes)
    {
        \$request = Request::create('/');
        foreach (\$attributes as \$name => \$value) {
            \$request->attributes->set(\$name, \$value);
        }

        return \$request;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/NotTaggedControllerValueResolverTest.php";
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
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

class NotTaggedControllerValueResolverTest extends TestCase
{
    public function testDoSupportWhenControllerDoNotExists()
    {
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => 'my_controller']);

        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
    }

    public function testDoNotSupportWhenControllerExists()
    {
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([
            'App\\\\Controller\\\\Mine::method' => function () {
                return new ServiceLocator([
                    'dummy' => function () {
                        return new \\stdClass();
                    },
                ]);
            },
        ]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => 'App\\\\Controller\\\\Mine::method']);

        \$this->assertFalse(\$resolver->supports(\$request, \$argument));
    }

    public function testDoNotSupportEmptyController()
    {
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => '']);
        \$this->assertFalse(\$resolver->supports(\$request, \$argument));
    }

    public function testController()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Could not resolve argument \$dummy of \"App\\Controller\\Mine::method()\", maybe you forgot to register the controller as a service or missed tagging it with the \"controller.service_arguments\"?');
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => 'App\\\\Controller\\\\Mine::method']);
        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$resolver->resolve(\$request, \$argument);
    }

    public function testControllerWithATrailingBackSlash()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Could not resolve argument \$dummy of \"App\\Controller\\Mine::method()\", maybe you forgot to register the controller as a service or missed tagging it with the \"controller.service_arguments\"?');
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => '\\\\App\\\\Controller\\\\Mine::method']);
        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$resolver->resolve(\$request, \$argument);
    }

    public function testControllerWithMethodNameStartUppercase()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Could not resolve argument \$dummy of \"App\\Controller\\Mine::method()\", maybe you forgot to register the controller as a service or missed tagging it with the \"controller.service_arguments\"?');
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => 'App\\\\Controller\\\\Mine::Method']);
        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$resolver->resolve(\$request, \$argument);
    }

    public function testControllerNameIsAnArray()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Could not resolve argument \$dummy of \"App\\Controller\\Mine::method()\", maybe you forgot to register the controller as a service or missed tagging it with the \"controller.service_arguments\"?');
        \$resolver = new NotTaggedControllerValueResolver(new ServiceLocator([]));
        \$argument = new ArgumentMetadata('dummy', \\stdClass::class, false, false, null);
        \$request = \$this->requestWithAttributes(['_controller' => ['App\\\\Controller\\\\Mine', 'method']]);
        \$this->assertTrue(\$resolver->supports(\$request, \$argument));
        \$resolver->resolve(\$request, \$argument);
    }

    private function requestWithAttributes(array \$attributes)
    {
        \$request = Request::create('/');
        foreach (\$attributes as \$name => \$value) {
            \$request->attributes->set(\$name, \$value);
        }

        return \$request;
    }
}
", "vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/NotTaggedControllerValueResolverTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Controller/ArgumentResolver/NotTaggedControllerValueResolverTest.php");
    }
}
