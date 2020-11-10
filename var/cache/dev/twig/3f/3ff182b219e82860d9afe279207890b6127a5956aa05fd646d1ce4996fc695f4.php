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

/* vendor/symfony/dependency-injection/Tests/Compiler/RegisterServiceSubscribersPassTest.php */
class __TwigTemplate_eae2fc2a71c5e3d162ea8a2f814c8d0778e4b3ec5acfb08a75d344a86332d18b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/RegisterServiceSubscribersPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/RegisterServiceSubscribersPassTest.php"));

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
use Psr\\Container\\ContainerInterface as PsrContainerInterface;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\AutowirePass;
use Symfony\\Component\\DependencyInjection\\Compiler\\RegisterServiceSubscribersPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveServiceSubscribersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition1;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition2;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition3;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriberChild;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriberParent;
use Symfony\\Component\\DependencyInjection\\TypedReference;
use Symfony\\Contracts\\Service\\ServiceSubscriberTrait;

require_once __DIR__.'/../Fixtures/includes/classes.php';

class RegisterServiceSubscribersPassTest extends TestCase
{
    public function testInvalidClass()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Service \"foo\" must implement interface \"Symfony\\Contracts\\Service\\ServiceSubscriberInterface\".');
        \$container = new ContainerBuilder();

        \$container->register('foo', CustomDefinition::class)
            ->addTag('container.service_subscriber')
        ;

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);
    }

    public function testInvalidAttributes()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"container.service_subscriber\" tag accepts only the \"key\" and \"id\" attributes, \"bar\" given for service \"foo\".');
        \$container = new ContainerBuilder();

        \$container->register('foo', TestServiceSubscriber::class)
            ->addTag('container.service_subscriber', ['bar' => '123'])
        ;

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);
    }

    public function testNoAttributes()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', TestServiceSubscriber::class)
            ->addArgument(new Reference(PsrContainerInterface::class))
            ->addTag('container.service_subscriber')
        ;

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);

        \$foo = \$container->getDefinition('foo');
        \$locator = \$container->getDefinition((string) \$foo->getArgument(0));

        \$this->assertFalse(\$locator->isPublic());
        \$this->assertSame(ServiceLocator::class, \$locator->getClass());

        \$expected = [
            TestServiceSubscriber::class => new ServiceClosureArgument(new TypedReference(TestServiceSubscriber::class, TestServiceSubscriber::class)),
            CustomDefinition::class => new ServiceClosureArgument(new TypedReference(CustomDefinition::class, CustomDefinition::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
            'bar' => new ServiceClosureArgument(new TypedReference(CustomDefinition::class, CustomDefinition::class, ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, 'bar')),
            'baz' => new ServiceClosureArgument(new TypedReference(CustomDefinition::class, CustomDefinition::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE, 'baz')),
        ];

        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));
    }

    public function testWithAttributes()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', TestServiceSubscriber::class)
            ->setAutowired(true)
            ->addArgument(new Reference(PsrContainerInterface::class))
            ->addTag('container.service_subscriber', ['key' => 'bar', 'id' => 'bar'])
            ->addTag('container.service_subscriber', ['key' => 'bar', 'id' => 'baz']) // should be ignored: the first wins
        ;

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);

        \$foo = \$container->getDefinition('foo');
        \$locator = \$container->getDefinition((string) \$foo->getArgument(0));

        \$this->assertFalse(\$locator->isPublic());
        \$this->assertSame(ServiceLocator::class, \$locator->getClass());

        \$expected = [
            TestServiceSubscriber::class => new ServiceClosureArgument(new TypedReference(TestServiceSubscriber::class, TestServiceSubscriber::class)),
            CustomDefinition::class => new ServiceClosureArgument(new TypedReference(CustomDefinition::class, CustomDefinition::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
            'bar' => new ServiceClosureArgument(new TypedReference('bar', CustomDefinition::class, ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, 'bar')),
            'baz' => new ServiceClosureArgument(new TypedReference(CustomDefinition::class, CustomDefinition::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE, 'baz')),
        ];

        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));
    }

    public function testExtraServiceSubscriber()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Service key \"test\" does not exist in the map returned by \"Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber::getSubscribedServices()\" for service \"foo_service\".');
        \$container = new ContainerBuilder();
        \$container->register('foo_service', TestServiceSubscriber::class)
            ->setAutowired(true)
            ->addArgument(new Reference(PsrContainerInterface::class))
            ->addTag('container.service_subscriber', [
                'key' => 'test',
                'id' => TestServiceSubscriber::class,
            ])
        ;
        \$container->register(TestServiceSubscriber::class, TestServiceSubscriber::class);
        \$container->compile();
    }

    public function testServiceSubscriberTrait()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', TestServiceSubscriberChild::class)
            ->addMethodCall('setContainer', [new Reference(PsrContainerInterface::class)])
            ->addTag('container.service_subscriber')
        ;

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);

        \$foo = \$container->getDefinition('foo');
        \$locator = \$container->getDefinition((string) \$foo->getMethodCalls()[0][1][0]);

        \$expected = [
            TestServiceSubscriberChild::class.'::invalidDefinition' => new ServiceClosureArgument(new TypedReference('Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\InvalidDefinition', 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\InvalidDefinition', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
            TestServiceSubscriberChild::class.'::testDefinition2' => new ServiceClosureArgument(new TypedReference(TestDefinition2::class, TestDefinition2::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
            TestServiceSubscriberChild::class.'::testDefinition3' => new ServiceClosureArgument(new TypedReference(TestDefinition3::class, TestDefinition3::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
            TestServiceSubscriberParent::class.'::testDefinition1' => new ServiceClosureArgument(new TypedReference(TestDefinition1::class, TestDefinition1::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
        ];

        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));
    }

    public function testServiceSubscriberTraitWithGetter()
    {
        \$container = new ContainerBuilder();

        \$subscriber = new class() implements ServiceSubscriberInterface {
            use ServiceSubscriberTrait;

            public function getFoo(): \\stdClass
            {
            }
        };
        \$container->register('foo', \\get_class(\$subscriber))
            ->addMethodCall('setContainer', [new Reference(PsrContainerInterface::class)])
            ->addTag('container.service_subscriber');

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);

        \$foo = \$container->getDefinition('foo');
        \$locator = \$container->getDefinition((string) \$foo->getMethodCalls()[0][1][0]);

        \$expected = [
            \\get_class(\$subscriber).'::getFoo' => new ServiceClosureArgument(new TypedReference('stdClass', 'stdClass', ContainerInterface::IGNORE_ON_INVALID_REFERENCE, 'foo')),
        ];
        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));
    }

    public function testServiceSubscriberWithSemanticId()
    {
        \$container = new ContainerBuilder();

        \$subscriber = new class() implements ServiceSubscriberInterface {
            public static function getSubscribedServices()
            {
                return [
                    'some.service' => 'stdClass',
                    'some_service' => 'stdClass',
                    'another_service' => 'stdClass',
                ];
            }
        };
        \$container->register('some.service', 'stdClass');
        \$container->setAlias('stdClass \$someService', 'some.service');
        \$container->setAlias('stdClass \$some_service', 'some.service');
        \$container->setAlias('stdClass \$anotherService', 'some.service');
        \$container->register('foo', \\get_class(\$subscriber))
            ->addMethodCall('setContainer', [new Reference(PsrContainerInterface::class)])
            ->addTag('container.service_subscriber');

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);

        \$foo = \$container->getDefinition('foo');
        \$locator = \$container->getDefinition((string) \$foo->getMethodCalls()[0][1][0]);

        \$expected = [
            'some.service' => new ServiceClosureArgument(new TypedReference('stdClass', 'stdClass', ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, 'some.service')),
            'some_service' => new ServiceClosureArgument(new TypedReference('stdClass', 'stdClass', ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, 'some_service')),
            'another_service' => new ServiceClosureArgument(new TypedReference('stdClass', 'stdClass', ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, 'anotherService')),
        ];
        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));

        (new AutowirePass())->process(\$container);

        \$expected = [
            'some.service' => new ServiceClosureArgument(new TypedReference('some.service', 'stdClass')),
            'some_service' => new ServiceClosureArgument(new TypedReference('stdClass \$some_service', 'stdClass')),
            'another_service' => new ServiceClosureArgument(new TypedReference('stdClass \$anotherService', 'stdClass')),
        ];
        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/RegisterServiceSubscribersPassTest.php";
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
use Psr\\Container\\ContainerInterface as PsrContainerInterface;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\AutowirePass;
use Symfony\\Component\\DependencyInjection\\Compiler\\RegisterServiceSubscribersPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveServiceSubscribersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition1;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition2;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition3;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriberChild;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriberParent;
use Symfony\\Component\\DependencyInjection\\TypedReference;
use Symfony\\Contracts\\Service\\ServiceSubscriberTrait;

require_once __DIR__.'/../Fixtures/includes/classes.php';

class RegisterServiceSubscribersPassTest extends TestCase
{
    public function testInvalidClass()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Service \"foo\" must implement interface \"Symfony\\Contracts\\Service\\ServiceSubscriberInterface\".');
        \$container = new ContainerBuilder();

        \$container->register('foo', CustomDefinition::class)
            ->addTag('container.service_subscriber')
        ;

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);
    }

    public function testInvalidAttributes()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"container.service_subscriber\" tag accepts only the \"key\" and \"id\" attributes, \"bar\" given for service \"foo\".');
        \$container = new ContainerBuilder();

        \$container->register('foo', TestServiceSubscriber::class)
            ->addTag('container.service_subscriber', ['bar' => '123'])
        ;

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);
    }

    public function testNoAttributes()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', TestServiceSubscriber::class)
            ->addArgument(new Reference(PsrContainerInterface::class))
            ->addTag('container.service_subscriber')
        ;

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);

        \$foo = \$container->getDefinition('foo');
        \$locator = \$container->getDefinition((string) \$foo->getArgument(0));

        \$this->assertFalse(\$locator->isPublic());
        \$this->assertSame(ServiceLocator::class, \$locator->getClass());

        \$expected = [
            TestServiceSubscriber::class => new ServiceClosureArgument(new TypedReference(TestServiceSubscriber::class, TestServiceSubscriber::class)),
            CustomDefinition::class => new ServiceClosureArgument(new TypedReference(CustomDefinition::class, CustomDefinition::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
            'bar' => new ServiceClosureArgument(new TypedReference(CustomDefinition::class, CustomDefinition::class, ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, 'bar')),
            'baz' => new ServiceClosureArgument(new TypedReference(CustomDefinition::class, CustomDefinition::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE, 'baz')),
        ];

        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));
    }

    public function testWithAttributes()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', TestServiceSubscriber::class)
            ->setAutowired(true)
            ->addArgument(new Reference(PsrContainerInterface::class))
            ->addTag('container.service_subscriber', ['key' => 'bar', 'id' => 'bar'])
            ->addTag('container.service_subscriber', ['key' => 'bar', 'id' => 'baz']) // should be ignored: the first wins
        ;

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);

        \$foo = \$container->getDefinition('foo');
        \$locator = \$container->getDefinition((string) \$foo->getArgument(0));

        \$this->assertFalse(\$locator->isPublic());
        \$this->assertSame(ServiceLocator::class, \$locator->getClass());

        \$expected = [
            TestServiceSubscriber::class => new ServiceClosureArgument(new TypedReference(TestServiceSubscriber::class, TestServiceSubscriber::class)),
            CustomDefinition::class => new ServiceClosureArgument(new TypedReference(CustomDefinition::class, CustomDefinition::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
            'bar' => new ServiceClosureArgument(new TypedReference('bar', CustomDefinition::class, ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, 'bar')),
            'baz' => new ServiceClosureArgument(new TypedReference(CustomDefinition::class, CustomDefinition::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE, 'baz')),
        ];

        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));
    }

    public function testExtraServiceSubscriber()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Service key \"test\" does not exist in the map returned by \"Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber::getSubscribedServices()\" for service \"foo_service\".');
        \$container = new ContainerBuilder();
        \$container->register('foo_service', TestServiceSubscriber::class)
            ->setAutowired(true)
            ->addArgument(new Reference(PsrContainerInterface::class))
            ->addTag('container.service_subscriber', [
                'key' => 'test',
                'id' => TestServiceSubscriber::class,
            ])
        ;
        \$container->register(TestServiceSubscriber::class, TestServiceSubscriber::class);
        \$container->compile();
    }

    public function testServiceSubscriberTrait()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', TestServiceSubscriberChild::class)
            ->addMethodCall('setContainer', [new Reference(PsrContainerInterface::class)])
            ->addTag('container.service_subscriber')
        ;

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);

        \$foo = \$container->getDefinition('foo');
        \$locator = \$container->getDefinition((string) \$foo->getMethodCalls()[0][1][0]);

        \$expected = [
            TestServiceSubscriberChild::class.'::invalidDefinition' => new ServiceClosureArgument(new TypedReference('Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\InvalidDefinition', 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\InvalidDefinition', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
            TestServiceSubscriberChild::class.'::testDefinition2' => new ServiceClosureArgument(new TypedReference(TestDefinition2::class, TestDefinition2::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
            TestServiceSubscriberChild::class.'::testDefinition3' => new ServiceClosureArgument(new TypedReference(TestDefinition3::class, TestDefinition3::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
            TestServiceSubscriberParent::class.'::testDefinition1' => new ServiceClosureArgument(new TypedReference(TestDefinition1::class, TestDefinition1::class, ContainerInterface::IGNORE_ON_INVALID_REFERENCE)),
        ];

        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));
    }

    public function testServiceSubscriberTraitWithGetter()
    {
        \$container = new ContainerBuilder();

        \$subscriber = new class() implements ServiceSubscriberInterface {
            use ServiceSubscriberTrait;

            public function getFoo(): \\stdClass
            {
            }
        };
        \$container->register('foo', \\get_class(\$subscriber))
            ->addMethodCall('setContainer', [new Reference(PsrContainerInterface::class)])
            ->addTag('container.service_subscriber');

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);

        \$foo = \$container->getDefinition('foo');
        \$locator = \$container->getDefinition((string) \$foo->getMethodCalls()[0][1][0]);

        \$expected = [
            \\get_class(\$subscriber).'::getFoo' => new ServiceClosureArgument(new TypedReference('stdClass', 'stdClass', ContainerInterface::IGNORE_ON_INVALID_REFERENCE, 'foo')),
        ];
        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));
    }

    public function testServiceSubscriberWithSemanticId()
    {
        \$container = new ContainerBuilder();

        \$subscriber = new class() implements ServiceSubscriberInterface {
            public static function getSubscribedServices()
            {
                return [
                    'some.service' => 'stdClass',
                    'some_service' => 'stdClass',
                    'another_service' => 'stdClass',
                ];
            }
        };
        \$container->register('some.service', 'stdClass');
        \$container->setAlias('stdClass \$someService', 'some.service');
        \$container->setAlias('stdClass \$some_service', 'some.service');
        \$container->setAlias('stdClass \$anotherService', 'some.service');
        \$container->register('foo', \\get_class(\$subscriber))
            ->addMethodCall('setContainer', [new Reference(PsrContainerInterface::class)])
            ->addTag('container.service_subscriber');

        (new RegisterServiceSubscribersPass())->process(\$container);
        (new ResolveServiceSubscribersPass())->process(\$container);

        \$foo = \$container->getDefinition('foo');
        \$locator = \$container->getDefinition((string) \$foo->getMethodCalls()[0][1][0]);

        \$expected = [
            'some.service' => new ServiceClosureArgument(new TypedReference('stdClass', 'stdClass', ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, 'some.service')),
            'some_service' => new ServiceClosureArgument(new TypedReference('stdClass', 'stdClass', ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, 'some_service')),
            'another_service' => new ServiceClosureArgument(new TypedReference('stdClass', 'stdClass', ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, 'anotherService')),
        ];
        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));

        (new AutowirePass())->process(\$container);

        \$expected = [
            'some.service' => new ServiceClosureArgument(new TypedReference('some.service', 'stdClass')),
            'some_service' => new ServiceClosureArgument(new TypedReference('stdClass \$some_service', 'stdClass')),
            'another_service' => new ServiceClosureArgument(new TypedReference('stdClass \$anotherService', 'stdClass')),
        ];
        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$locator->getFactory()[0])->getArgument(0));
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/RegisterServiceSubscribersPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/RegisterServiceSubscribersPassTest.php");
    }
}
