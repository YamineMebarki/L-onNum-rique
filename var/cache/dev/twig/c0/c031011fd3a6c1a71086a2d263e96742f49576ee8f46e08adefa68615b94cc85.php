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

/* vendor/symfony/http-kernel/Tests/DependencyInjection/RemoveEmptyControllerArgumentLocatorsPassTest.php */
class __TwigTemplate_80756ab8c802f840619d83e91b9de774e60d177d3569a11df3d32918bcca86e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/RemoveEmptyControllerArgumentLocatorsPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/RemoveEmptyControllerArgumentLocatorsPassTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveInvalidReferencesPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterControllerArgumentLocatorsPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RemoveEmptyControllerArgumentLocatorsPass;

class RemoveEmptyControllerArgumentLocatorsPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$resolver = \$container->register('argument_resolver.service')->addArgument([]);

        \$container->register('stdClass', 'stdClass');
        \$container->register(TestCase::class, 'stdClass');
        \$container->register('c1', RemoveTestController1::class)->addTag('controller.service_arguments');
        \$container->register('c2', RemoveTestController2::class)->addTag('controller.service_arguments')
            ->addMethodCall('setTestCase', [new Reference('c1')]);

        \$pass = new RegisterControllerArgumentLocatorsPass();
        \$pass->process(\$container);

        \$controllers = \$container->getDefinition((string) \$resolver->getArgument(0))->getArgument(0);

        \$this->assertCount(2, \$container->getDefinition((string) \$controllers['c1::fooAction']->getValues()[0])->getArgument(0));
        \$this->assertCount(1, \$container->getDefinition((string) \$controllers['c2::setTestCase']->getValues()[0])->getArgument(0));
        \$this->assertCount(1, \$container->getDefinition((string) \$controllers['c2::fooAction']->getValues()[0])->getArgument(0));

        (new ResolveInvalidReferencesPass())->process(\$container);

        \$this->assertCount(1, \$container->getDefinition((string) \$controllers['c2::setTestCase']->getValues()[0])->getArgument(0));
        \$this->assertSame([], \$container->getDefinition((string) \$controllers['c2::fooAction']->getValues()[0])->getArgument(0));

        (new RemoveEmptyControllerArgumentLocatorsPass())->process(\$container);

        \$controllers = \$container->getDefinition((string) \$resolver->getArgument(0))->getArgument(0);

        \$this->assertSame(['c1::fooAction', 'c1:fooAction'], array_keys(\$controllers));
        \$this->assertSame(['bar'], array_keys(\$container->getDefinition((string) \$controllers['c1::fooAction']->getValues()[0])->getArgument(0)));

        \$expectedLog = [
            'Symfony\\Component\\HttpKernel\\DependencyInjection\\RemoveEmptyControllerArgumentLocatorsPass: Removing service-argument resolver for controller \"c2::fooAction\": no corresponding services exist for the referenced types.',
            'Symfony\\Component\\HttpKernel\\DependencyInjection\\RemoveEmptyControllerArgumentLocatorsPass: Removing method \"setTestCase\" of service \"c2\" from controller candidates: the method is called at instantiation, thus cannot be an action.',
        ];

        \$this->assertSame(\$expectedLog, \$container->getCompiler()->getLog());
    }

    public function testInvoke()
    {
        \$container = new ContainerBuilder();
        \$resolver = \$container->register('argument_resolver.service')->addArgument([]);

        \$container->register('invokable', InvokableRegisterTestController::class)
            ->addTag('controller.service_arguments')
        ;

        (new RegisterControllerArgumentLocatorsPass())->process(\$container);
        (new RemoveEmptyControllerArgumentLocatorsPass())->process(\$container);

        \$this->assertEquals(
            ['invokable::__invoke', 'invokable:__invoke', 'invokable'],
            array_keys(\$container->getDefinition((string) \$resolver->getArgument(0))->getArgument(0))
        );
    }
}

class RemoveTestController1
{
    public function fooAction(\\stdClass \$bar, ClassNotInContainer \$baz = null)
    {
    }
}

class RemoveTestController2
{
    public function setTestCase(TestCase \$test)
    {
    }

    public function fooAction(ClassNotInContainer \$bar = null)
    {
    }
}

class InvokableRegisterTestController
{
    public function __invoke(\\stdClass \$bar)
    {
    }
}

class ClassNotInContainer
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DependencyInjection/RemoveEmptyControllerArgumentLocatorsPassTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveInvalidReferencesPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterControllerArgumentLocatorsPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RemoveEmptyControllerArgumentLocatorsPass;

class RemoveEmptyControllerArgumentLocatorsPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$resolver = \$container->register('argument_resolver.service')->addArgument([]);

        \$container->register('stdClass', 'stdClass');
        \$container->register(TestCase::class, 'stdClass');
        \$container->register('c1', RemoveTestController1::class)->addTag('controller.service_arguments');
        \$container->register('c2', RemoveTestController2::class)->addTag('controller.service_arguments')
            ->addMethodCall('setTestCase', [new Reference('c1')]);

        \$pass = new RegisterControllerArgumentLocatorsPass();
        \$pass->process(\$container);

        \$controllers = \$container->getDefinition((string) \$resolver->getArgument(0))->getArgument(0);

        \$this->assertCount(2, \$container->getDefinition((string) \$controllers['c1::fooAction']->getValues()[0])->getArgument(0));
        \$this->assertCount(1, \$container->getDefinition((string) \$controllers['c2::setTestCase']->getValues()[0])->getArgument(0));
        \$this->assertCount(1, \$container->getDefinition((string) \$controllers['c2::fooAction']->getValues()[0])->getArgument(0));

        (new ResolveInvalidReferencesPass())->process(\$container);

        \$this->assertCount(1, \$container->getDefinition((string) \$controllers['c2::setTestCase']->getValues()[0])->getArgument(0));
        \$this->assertSame([], \$container->getDefinition((string) \$controllers['c2::fooAction']->getValues()[0])->getArgument(0));

        (new RemoveEmptyControllerArgumentLocatorsPass())->process(\$container);

        \$controllers = \$container->getDefinition((string) \$resolver->getArgument(0))->getArgument(0);

        \$this->assertSame(['c1::fooAction', 'c1:fooAction'], array_keys(\$controllers));
        \$this->assertSame(['bar'], array_keys(\$container->getDefinition((string) \$controllers['c1::fooAction']->getValues()[0])->getArgument(0)));

        \$expectedLog = [
            'Symfony\\Component\\HttpKernel\\DependencyInjection\\RemoveEmptyControllerArgumentLocatorsPass: Removing service-argument resolver for controller \"c2::fooAction\": no corresponding services exist for the referenced types.',
            'Symfony\\Component\\HttpKernel\\DependencyInjection\\RemoveEmptyControllerArgumentLocatorsPass: Removing method \"setTestCase\" of service \"c2\" from controller candidates: the method is called at instantiation, thus cannot be an action.',
        ];

        \$this->assertSame(\$expectedLog, \$container->getCompiler()->getLog());
    }

    public function testInvoke()
    {
        \$container = new ContainerBuilder();
        \$resolver = \$container->register('argument_resolver.service')->addArgument([]);

        \$container->register('invokable', InvokableRegisterTestController::class)
            ->addTag('controller.service_arguments')
        ;

        (new RegisterControllerArgumentLocatorsPass())->process(\$container);
        (new RemoveEmptyControllerArgumentLocatorsPass())->process(\$container);

        \$this->assertEquals(
            ['invokable::__invoke', 'invokable:__invoke', 'invokable'],
            array_keys(\$container->getDefinition((string) \$resolver->getArgument(0))->getArgument(0))
        );
    }
}

class RemoveTestController1
{
    public function fooAction(\\stdClass \$bar, ClassNotInContainer \$baz = null)
    {
    }
}

class RemoveTestController2
{
    public function setTestCase(TestCase \$test)
    {
    }

    public function fooAction(ClassNotInContainer \$bar = null)
    {
    }
}

class InvokableRegisterTestController
{
    public function __invoke(\\stdClass \$bar)
    {
    }
}

class ClassNotInContainer
{
}
", "vendor/symfony/http-kernel/Tests/DependencyInjection/RemoveEmptyControllerArgumentLocatorsPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DependencyInjection/RemoveEmptyControllerArgumentLocatorsPassTest.php");
    }
}
