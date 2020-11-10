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

/* vendor/symfony/dependency-injection/Tests/Compiler/ResolveBindingsPassTest.php */
class __TwigTemplate_31431e3643c3794525b371c70626f9d5fd6fca4986ecbdfd8a2bf6f7acdb56ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveBindingsPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveBindingsPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Argument\\BoundArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\AutowireRequiredMethodsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\DefinitionErrorExceptionPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveBindingsPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CaseSensitiveClass;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\NamedArgumentsDummy;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\ParentNotExists;
use Symfony\\Component\\DependencyInjection\\TypedReference;

require_once __DIR__.'/../Fixtures/includes/autowiring_classes.php';

class ResolveBindingsPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$bindings = [CaseSensitiveClass::class => new BoundArgument(new Reference('foo'))];

        \$definition = \$container->register(NamedArgumentsDummy::class, NamedArgumentsDummy::class);
        \$definition->setArguments([1 => '123']);
        \$definition->addMethodCall('setSensitiveClass');
        \$definition->setBindings(\$bindings);

        \$container->register('foo', CaseSensitiveClass::class)
            ->setBindings(\$bindings);

        \$pass = new ResolveBindingsPass();
        \$pass->process(\$container);

        \$this->assertEquals([new Reference('foo'), '123'], \$definition->getArguments());
        \$this->assertEquals([['setSensitiveClass', [new Reference('foo')]]], \$definition->getMethodCalls());
    }

    public function testUnusedBinding()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('A binding is configured for an argument named \"\$quz\" for service \"Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\NamedArgumentsDummy\", but no corresponding argument has been found. It may be unused and should be removed, or it may have a typo.');
        \$container = new ContainerBuilder();

        \$definition = \$container->register(NamedArgumentsDummy::class, NamedArgumentsDummy::class);
        \$definition->setBindings(['\$quz' => '123']);

        \$pass = new ResolveBindingsPass();
        \$pass->process(\$container);
    }

    public function testMissingParent()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('A binding is configured for an argument named \"\$quz\" for service \"Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\ParentNotExists\", but no corresponding argument has been found. It may be unused and should be removed, or it may have a typo.');

        \$container = new ContainerBuilder();

        \$definition = \$container->register(ParentNotExists::class, ParentNotExists::class);
        \$definition->setBindings(['\$quz' => '123']);

        \$pass = new ResolveBindingsPass();
        \$pass->process(\$container);
    }

    public function testTypedReferenceSupport()
    {
        \$container = new ContainerBuilder();

        \$bindings = [CaseSensitiveClass::class => new BoundArgument(new Reference('foo'))];

        // Explicit service id
        \$definition1 = \$container->register('def1', NamedArgumentsDummy::class);
        \$definition1->addArgument(\$typedRef = new TypedReference('bar', CaseSensitiveClass::class));
        \$definition1->setBindings(\$bindings);

        \$definition2 = \$container->register('def2', NamedArgumentsDummy::class);
        \$definition2->addArgument(new TypedReference(CaseSensitiveClass::class, CaseSensitiveClass::class));
        \$definition2->setBindings(\$bindings);

        \$pass = new ResolveBindingsPass();
        \$pass->process(\$container);

        \$this->assertEquals([\$typedRef], \$container->getDefinition('def1')->getArguments());
        \$this->assertEquals([new Reference('foo')], \$container->getDefinition('def2')->getArguments());
    }

    public function testScalarSetter()
    {
        \$container = new ContainerBuilder();

        \$definition = \$container->autowire('foo', ScalarSetter::class);
        \$definition->setBindings(['\$defaultLocale' => 'fr']);

        (new AutowireRequiredMethodsPass())->process(\$container);
        (new ResolveBindingsPass())->process(\$container);

        \$this->assertEquals([['setDefaultLocale', ['fr']]], \$definition->getMethodCalls());
    }

    public function testWithNonExistingSetterAndBinding()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Invalid service \"Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\NamedArgumentsDummy\": method \"setLogger()\" does not exist.');
        \$container = new ContainerBuilder();

        \$bindings = [
            '\$c' => (new Definition('logger'))->setFactory('logger'),
        ];

        \$definition = \$container->register(NamedArgumentsDummy::class, NamedArgumentsDummy::class);
        \$definition->addMethodCall('setLogger');
        \$definition->setBindings(\$bindings);

        \$pass = new ResolveBindingsPass();
        \$pass->process(\$container);
    }

    public function testSyntheticServiceWithBind()
    {
        \$container = new ContainerBuilder();
        \$argument = new BoundArgument('bar');

        \$container->register('foo', 'stdClass')
            ->addArgument(new Reference('synthetic.service'));

        \$container->register('synthetic.service')
            ->setSynthetic(true)
            ->setBindings(['\$apiKey' => \$argument]);

        \$container->register(NamedArgumentsDummy::class, NamedArgumentsDummy::class)
            ->setBindings(['\$apiKey' => \$argument]);

        (new ResolveBindingsPass())->process(\$container);
        (new DefinitionErrorExceptionPass())->process(\$container);

        \$this->assertSame([1 => 'bar'], \$container->getDefinition(NamedArgumentsDummy::class)->getArguments());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/ResolveBindingsPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Argument\\BoundArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\AutowireRequiredMethodsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\DefinitionErrorExceptionPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveBindingsPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CaseSensitiveClass;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\NamedArgumentsDummy;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\ParentNotExists;
use Symfony\\Component\\DependencyInjection\\TypedReference;

require_once __DIR__.'/../Fixtures/includes/autowiring_classes.php';

class ResolveBindingsPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$bindings = [CaseSensitiveClass::class => new BoundArgument(new Reference('foo'))];

        \$definition = \$container->register(NamedArgumentsDummy::class, NamedArgumentsDummy::class);
        \$definition->setArguments([1 => '123']);
        \$definition->addMethodCall('setSensitiveClass');
        \$definition->setBindings(\$bindings);

        \$container->register('foo', CaseSensitiveClass::class)
            ->setBindings(\$bindings);

        \$pass = new ResolveBindingsPass();
        \$pass->process(\$container);

        \$this->assertEquals([new Reference('foo'), '123'], \$definition->getArguments());
        \$this->assertEquals([['setSensitiveClass', [new Reference('foo')]]], \$definition->getMethodCalls());
    }

    public function testUnusedBinding()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('A binding is configured for an argument named \"\$quz\" for service \"Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\NamedArgumentsDummy\", but no corresponding argument has been found. It may be unused and should be removed, or it may have a typo.');
        \$container = new ContainerBuilder();

        \$definition = \$container->register(NamedArgumentsDummy::class, NamedArgumentsDummy::class);
        \$definition->setBindings(['\$quz' => '123']);

        \$pass = new ResolveBindingsPass();
        \$pass->process(\$container);
    }

    public function testMissingParent()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('A binding is configured for an argument named \"\$quz\" for service \"Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\ParentNotExists\", but no corresponding argument has been found. It may be unused and should be removed, or it may have a typo.');

        \$container = new ContainerBuilder();

        \$definition = \$container->register(ParentNotExists::class, ParentNotExists::class);
        \$definition->setBindings(['\$quz' => '123']);

        \$pass = new ResolveBindingsPass();
        \$pass->process(\$container);
    }

    public function testTypedReferenceSupport()
    {
        \$container = new ContainerBuilder();

        \$bindings = [CaseSensitiveClass::class => new BoundArgument(new Reference('foo'))];

        // Explicit service id
        \$definition1 = \$container->register('def1', NamedArgumentsDummy::class);
        \$definition1->addArgument(\$typedRef = new TypedReference('bar', CaseSensitiveClass::class));
        \$definition1->setBindings(\$bindings);

        \$definition2 = \$container->register('def2', NamedArgumentsDummy::class);
        \$definition2->addArgument(new TypedReference(CaseSensitiveClass::class, CaseSensitiveClass::class));
        \$definition2->setBindings(\$bindings);

        \$pass = new ResolveBindingsPass();
        \$pass->process(\$container);

        \$this->assertEquals([\$typedRef], \$container->getDefinition('def1')->getArguments());
        \$this->assertEquals([new Reference('foo')], \$container->getDefinition('def2')->getArguments());
    }

    public function testScalarSetter()
    {
        \$container = new ContainerBuilder();

        \$definition = \$container->autowire('foo', ScalarSetter::class);
        \$definition->setBindings(['\$defaultLocale' => 'fr']);

        (new AutowireRequiredMethodsPass())->process(\$container);
        (new ResolveBindingsPass())->process(\$container);

        \$this->assertEquals([['setDefaultLocale', ['fr']]], \$definition->getMethodCalls());
    }

    public function testWithNonExistingSetterAndBinding()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Invalid service \"Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\NamedArgumentsDummy\": method \"setLogger()\" does not exist.');
        \$container = new ContainerBuilder();

        \$bindings = [
            '\$c' => (new Definition('logger'))->setFactory('logger'),
        ];

        \$definition = \$container->register(NamedArgumentsDummy::class, NamedArgumentsDummy::class);
        \$definition->addMethodCall('setLogger');
        \$definition->setBindings(\$bindings);

        \$pass = new ResolveBindingsPass();
        \$pass->process(\$container);
    }

    public function testSyntheticServiceWithBind()
    {
        \$container = new ContainerBuilder();
        \$argument = new BoundArgument('bar');

        \$container->register('foo', 'stdClass')
            ->addArgument(new Reference('synthetic.service'));

        \$container->register('synthetic.service')
            ->setSynthetic(true)
            ->setBindings(['\$apiKey' => \$argument]);

        \$container->register(NamedArgumentsDummy::class, NamedArgumentsDummy::class)
            ->setBindings(['\$apiKey' => \$argument]);

        (new ResolveBindingsPass())->process(\$container);
        (new DefinitionErrorExceptionPass())->process(\$container);

        \$this->assertSame([1 => 'bar'], \$container->getDefinition(NamedArgumentsDummy::class)->getArguments());
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveBindingsPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/ResolveBindingsPassTest.php");
    }
}
