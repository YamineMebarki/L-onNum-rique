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

/* vendor/symfony/dependency-injection/Tests/Compiler/AutowireRequiredMethodsPassTest.php */
class __TwigTemplate_af7cfd75c8ee68ecd630cd4f5711aa808b81ff0fd385c0e9f0013981aee6f3f9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/AutowireRequiredMethodsPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/AutowireRequiredMethodsPassTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\AutowireRequiredMethodsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveClassPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

require_once __DIR__.'/../Fixtures/includes/autowiring_classes.php';

class AutowireRequiredMethodsPassTest extends TestCase
{
    public function testSetterInjection()
    {
        \$container = new ContainerBuilder();
        \$container->register(Foo::class);
        \$container->register(A::class);
        \$container->register(CollisionA::class);
        \$container->register(CollisionB::class);

        // manually configure *one* call, to override autowiring
        \$container
            ->register('setter_injection', SetterInjection::class)
            ->setAutowired(true)
            ->addMethodCall('setWithCallsConfigured', ['manual_arg1', 'manual_arg2']);

        (new ResolveClassPass())->process(\$container);
        (new AutowireRequiredMethodsPass())->process(\$container);

        \$methodCalls = \$container->getDefinition('setter_injection')->getMethodCalls();

        \$this->assertEquals(
            ['setWithCallsConfigured', 'setFoo', 'setDependencies', 'setChildMethodWithoutDocBlock'],
            array_column(\$methodCalls, 0)
        );

        // test setWithCallsConfigured args
        \$this->assertEquals(
            ['manual_arg1', 'manual_arg2'],
            \$methodCalls[0][1]
        );
        // test setFoo args
        \$this->assertEquals([], \$methodCalls[1][1]);
    }

    public function testExplicitMethodInjection()
    {
        \$container = new ContainerBuilder();
        \$container->register(Foo::class);
        \$container->register(A::class);
        \$container->register(CollisionA::class);
        \$container->register(CollisionB::class);

        \$container
            ->register('setter_injection', SetterInjection::class)
            ->setAutowired(true)
            ->addMethodCall('notASetter', []);

        (new ResolveClassPass())->process(\$container);
        (new AutowireRequiredMethodsPass())->process(\$container);

        \$methodCalls = \$container->getDefinition('setter_injection')->getMethodCalls();

        \$this->assertEquals(
            ['notASetter', 'setFoo', 'setDependencies', 'setWithCallsConfigured', 'setChildMethodWithoutDocBlock'],
            array_column(\$methodCalls, 0)
        );
        \$this->assertEquals([], \$methodCalls[0][1]);
    }

    public function testWitherInjection()
    {
        \$container = new ContainerBuilder();
        \$container->register(Foo::class);

        \$container
            ->register('wither', Wither::class)
            ->setAutowired(true);

        (new ResolveClassPass())->process(\$container);
        (new AutowireRequiredMethodsPass())->process(\$container);

        \$methodCalls = \$container->getDefinition('wither')->getMethodCalls();

        \$expected = [
            ['withFoo1', [], true],
            ['withFoo2', [], true],
            ['setFoo', []],
        ];
        \$this->assertSame(\$expected, \$methodCalls);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/AutowireRequiredMethodsPassTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\AutowireRequiredMethodsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveClassPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

require_once __DIR__.'/../Fixtures/includes/autowiring_classes.php';

class AutowireRequiredMethodsPassTest extends TestCase
{
    public function testSetterInjection()
    {
        \$container = new ContainerBuilder();
        \$container->register(Foo::class);
        \$container->register(A::class);
        \$container->register(CollisionA::class);
        \$container->register(CollisionB::class);

        // manually configure *one* call, to override autowiring
        \$container
            ->register('setter_injection', SetterInjection::class)
            ->setAutowired(true)
            ->addMethodCall('setWithCallsConfigured', ['manual_arg1', 'manual_arg2']);

        (new ResolveClassPass())->process(\$container);
        (new AutowireRequiredMethodsPass())->process(\$container);

        \$methodCalls = \$container->getDefinition('setter_injection')->getMethodCalls();

        \$this->assertEquals(
            ['setWithCallsConfigured', 'setFoo', 'setDependencies', 'setChildMethodWithoutDocBlock'],
            array_column(\$methodCalls, 0)
        );

        // test setWithCallsConfigured args
        \$this->assertEquals(
            ['manual_arg1', 'manual_arg2'],
            \$methodCalls[0][1]
        );
        // test setFoo args
        \$this->assertEquals([], \$methodCalls[1][1]);
    }

    public function testExplicitMethodInjection()
    {
        \$container = new ContainerBuilder();
        \$container->register(Foo::class);
        \$container->register(A::class);
        \$container->register(CollisionA::class);
        \$container->register(CollisionB::class);

        \$container
            ->register('setter_injection', SetterInjection::class)
            ->setAutowired(true)
            ->addMethodCall('notASetter', []);

        (new ResolveClassPass())->process(\$container);
        (new AutowireRequiredMethodsPass())->process(\$container);

        \$methodCalls = \$container->getDefinition('setter_injection')->getMethodCalls();

        \$this->assertEquals(
            ['notASetter', 'setFoo', 'setDependencies', 'setWithCallsConfigured', 'setChildMethodWithoutDocBlock'],
            array_column(\$methodCalls, 0)
        );
        \$this->assertEquals([], \$methodCalls[0][1]);
    }

    public function testWitherInjection()
    {
        \$container = new ContainerBuilder();
        \$container->register(Foo::class);

        \$container
            ->register('wither', Wither::class)
            ->setAutowired(true);

        (new ResolveClassPass())->process(\$container);
        (new AutowireRequiredMethodsPass())->process(\$container);

        \$methodCalls = \$container->getDefinition('wither')->getMethodCalls();

        \$expected = [
            ['withFoo1', [], true],
            ['withFoo2', [], true],
            ['setFoo', []],
        ];
        \$this->assertSame(\$expected, \$methodCalls);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/AutowireRequiredMethodsPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/AutowireRequiredMethodsPassTest.php");
    }
}
