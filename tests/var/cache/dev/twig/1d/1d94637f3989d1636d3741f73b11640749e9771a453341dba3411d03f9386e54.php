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

/* vendor/symfony/dependency-injection/Tests/Compiler/ServiceLocatorTagPassTest.php */
class __TwigTemplate_de662e805404e9b166d0aff53f9fcef85a648da5b861816b7e91cb19e8a8c63d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ServiceLocatorTagPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ServiceLocatorTagPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition1;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition2;

require_once __DIR__.'/../Fixtures/includes/classes.php';

class ServiceLocatorTagPassTest extends TestCase
{
    public function testNoServices()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid definition for service \"foo\": an array of references is expected as first argument when the \"container.service_locator\" tag is set.');
        \$container = new ContainerBuilder();

        \$container->register('foo', ServiceLocator::class)
            ->addTag('container.service_locator')
        ;

        (new ServiceLocatorTagPass())->process(\$container);
    }

    public function testInvalidServices()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid definition for service \"foo\": an array of references is expected as first argument when the \"container.service_locator\" tag is set, \"string\" found for key \"0\".');
        \$container = new ContainerBuilder();

        \$container->register('foo', ServiceLocator::class)
            ->setArguments([[
                'dummy',
            ]])
            ->addTag('container.service_locator')
        ;

        (new ServiceLocatorTagPass())->process(\$container);
    }

    public function testProcessValue()
    {
        \$container = new ContainerBuilder();

        \$container->register('bar', CustomDefinition::class);
        \$container->register('baz', CustomDefinition::class);

        \$container->register('foo', ServiceLocator::class)
            ->setArguments([[
                new Reference('bar'),
                new Reference('baz'),
                'some.service' => new Reference('bar'),
            ]])
            ->addTag('container.service_locator')
        ;

        (new ServiceLocatorTagPass())->process(\$container);

        /** @var ServiceLocator \$locator */
        \$locator = \$container->get('foo');

        \$this->assertSame(CustomDefinition::class, \\get_class(\$locator('bar')));
        \$this->assertSame(CustomDefinition::class, \\get_class(\$locator('baz')));
        \$this->assertSame(CustomDefinition::class, \\get_class(\$locator('some.service')));
    }

    public function testServiceWithKeyOverwritesPreviousInheritedKey()
    {
        \$container = new ContainerBuilder();

        \$container->register('bar', TestDefinition1::class);
        \$container->register('baz', TestDefinition2::class);

        \$container->register('foo', ServiceLocator::class)
            ->setArguments([[
                new Reference('bar'),
                'bar' => new Reference('baz'),
            ]])
            ->addTag('container.service_locator')
        ;

        (new ServiceLocatorTagPass())->process(\$container);

        /** @var ServiceLocator \$locator */
        \$locator = \$container->get('foo');

        \$this->assertSame(TestDefinition2::class, \\get_class(\$locator('bar')));
    }

    public function testInheritedKeyOverwritesPreviousServiceWithKey()
    {
        \$container = new ContainerBuilder();

        \$container->register('bar', TestDefinition1::class);
        \$container->register('baz', TestDefinition2::class);

        \$container->register('foo', ServiceLocator::class)
            ->setArguments([[
                'bar' => new Reference('baz'),
                new Reference('bar'),
            ]])
            ->addTag('container.service_locator')
        ;

        (new ServiceLocatorTagPass())->process(\$container);

        /** @var ServiceLocator \$locator */
        \$locator = \$container->get('foo');

        \$this->assertSame(TestDefinition1::class, \\get_class(\$locator('bar')));
    }

    public function testBindingsAreCopied()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo')
            ->setBindings(['foo' => 'foo']);

        \$locator = ServiceLocatorTagPass::register(\$container, ['foo' => new Reference('foo')], 'foo');
        \$locator = \$container->getDefinition(\$locator);
        \$locator = \$container->getDefinition(\$locator->getFactory()[0]);

        \$this->assertSame(['foo'], array_keys(\$locator->getBindings()));
        \$this->assertInstanceOf(BoundArgument::class, \$locator->getBindings()['foo']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/ServiceLocatorTagPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition1;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition2;

require_once __DIR__.'/../Fixtures/includes/classes.php';

class ServiceLocatorTagPassTest extends TestCase
{
    public function testNoServices()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid definition for service \"foo\": an array of references is expected as first argument when the \"container.service_locator\" tag is set.');
        \$container = new ContainerBuilder();

        \$container->register('foo', ServiceLocator::class)
            ->addTag('container.service_locator')
        ;

        (new ServiceLocatorTagPass())->process(\$container);
    }

    public function testInvalidServices()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid definition for service \"foo\": an array of references is expected as first argument when the \"container.service_locator\" tag is set, \"string\" found for key \"0\".');
        \$container = new ContainerBuilder();

        \$container->register('foo', ServiceLocator::class)
            ->setArguments([[
                'dummy',
            ]])
            ->addTag('container.service_locator')
        ;

        (new ServiceLocatorTagPass())->process(\$container);
    }

    public function testProcessValue()
    {
        \$container = new ContainerBuilder();

        \$container->register('bar', CustomDefinition::class);
        \$container->register('baz', CustomDefinition::class);

        \$container->register('foo', ServiceLocator::class)
            ->setArguments([[
                new Reference('bar'),
                new Reference('baz'),
                'some.service' => new Reference('bar'),
            ]])
            ->addTag('container.service_locator')
        ;

        (new ServiceLocatorTagPass())->process(\$container);

        /** @var ServiceLocator \$locator */
        \$locator = \$container->get('foo');

        \$this->assertSame(CustomDefinition::class, \\get_class(\$locator('bar')));
        \$this->assertSame(CustomDefinition::class, \\get_class(\$locator('baz')));
        \$this->assertSame(CustomDefinition::class, \\get_class(\$locator('some.service')));
    }

    public function testServiceWithKeyOverwritesPreviousInheritedKey()
    {
        \$container = new ContainerBuilder();

        \$container->register('bar', TestDefinition1::class);
        \$container->register('baz', TestDefinition2::class);

        \$container->register('foo', ServiceLocator::class)
            ->setArguments([[
                new Reference('bar'),
                'bar' => new Reference('baz'),
            ]])
            ->addTag('container.service_locator')
        ;

        (new ServiceLocatorTagPass())->process(\$container);

        /** @var ServiceLocator \$locator */
        \$locator = \$container->get('foo');

        \$this->assertSame(TestDefinition2::class, \\get_class(\$locator('bar')));
    }

    public function testInheritedKeyOverwritesPreviousServiceWithKey()
    {
        \$container = new ContainerBuilder();

        \$container->register('bar', TestDefinition1::class);
        \$container->register('baz', TestDefinition2::class);

        \$container->register('foo', ServiceLocator::class)
            ->setArguments([[
                'bar' => new Reference('baz'),
                new Reference('bar'),
            ]])
            ->addTag('container.service_locator')
        ;

        (new ServiceLocatorTagPass())->process(\$container);

        /** @var ServiceLocator \$locator */
        \$locator = \$container->get('foo');

        \$this->assertSame(TestDefinition1::class, \\get_class(\$locator('bar')));
    }

    public function testBindingsAreCopied()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo')
            ->setBindings(['foo' => 'foo']);

        \$locator = ServiceLocatorTagPass::register(\$container, ['foo' => new Reference('foo')], 'foo');
        \$locator = \$container->getDefinition(\$locator);
        \$locator = \$container->getDefinition(\$locator->getFactory()[0]);

        \$this->assertSame(['foo'], array_keys(\$locator->getBindings()));
        \$this->assertInstanceOf(BoundArgument::class, \$locator->getBindings()['foo']);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/ServiceLocatorTagPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/ServiceLocatorTagPassTest.php");
    }
}
