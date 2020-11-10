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

/* vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPassTest.php */
class __TwigTemplate_ae8af672a3c3b59d050ab9d574760f3ee91d2657c246c49d6eed04cc34118bdc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPassTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\DependencyInjection\\CompilerPass;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass\\RegisterEventListenersAndSubscribersPass;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;

class RegisterEventListenersAndSubscribersPassTest extends TestCase
{
    public function testExceptionOnAbstractTaggedSubscriber()
    {
        \$this->expectException('InvalidArgumentException');
        \$container = \$this->createBuilder();

        \$abstractDefinition = new Definition('stdClass');
        \$abstractDefinition->setAbstract(true);
        \$abstractDefinition->addTag('doctrine.event_subscriber');

        \$container->setDefinition('a', \$abstractDefinition);

        \$this->process(\$container);
    }

    public function testExceptionOnAbstractTaggedListener()
    {
        \$this->expectException('InvalidArgumentException');
        \$container = \$this->createBuilder();

        \$abstractDefinition = new Definition('stdClass');
        \$abstractDefinition->setAbstract(true);
        \$abstractDefinition->addTag('doctrine.event_listener', ['event' => 'test']);

        \$container->setDefinition('a', \$abstractDefinition);

        \$this->process(\$container);
    }

    public function testProcessEventListenersWithPriorities()
    {
        \$container = \$this->createBuilder();

        \$container
            ->register('a', 'stdClass')
            ->setPublic(false)
            ->addTag('doctrine.event_listener', [
                'event' => 'bar',
            ])
            ->addTag('doctrine.event_listener', [
                'event' => 'foo',
                'priority' => -5,
            ])
            ->addTag('doctrine.event_listener', [
                'event' => 'foo_bar',
                'priority' => 3,
            ])
        ;
        \$container
            ->register('b', 'stdClass')
            ->addTag('doctrine.event_listener', [
                'event' => 'foo',
            ])
        ;
        \$container
            ->register('c', 'stdClass')
            ->addTag('doctrine.event_listener', [
                'event' => 'foo_bar',
                'priority' => 4,
            ])
        ;

        \$this->process(\$container);
        \$eventManagerDef = \$container->getDefinition('doctrine.dbal.default_connection.event_manager');
        \$methodCalls = \$eventManagerDef->getMethodCalls();

        \$this->assertEquals(
            [
                ['addEventListener', [['foo_bar'], 'c']],
                ['addEventListener', [['foo_bar'], 'a']],
                ['addEventListener', [['bar'], 'a']],
                ['addEventListener', [['foo'], 'b']],
                ['addEventListener', [['foo'], 'a']],
            ],
            \$methodCalls
        );

        \$serviceLocatorDef = \$container->getDefinition((string) \$eventManagerDef->getArgument(0));
        \$this->assertSame(ServiceLocator::class, \$serviceLocatorDef->getClass());
        \$this->assertEquals(
            [
                'c' => new ServiceClosureArgument(new Reference('c')),
                'a' => new ServiceClosureArgument(new Reference('a')),
                'b' => new ServiceClosureArgument(new Reference('b')),
            ],
            \$serviceLocatorDef->getArgument(0)
        );
    }

    public function testProcessEventListenersWithMultipleConnections()
    {
        \$container = \$this->createBuilder(true);

        \$container
            ->register('a', 'stdClass')
            ->addTag('doctrine.event_listener', [
                'event' => 'onFlush',
            ])
        ;

        \$container
            ->register('b', 'stdClass')
            ->addTag('doctrine.event_listener', [
                'event' => 'onFlush',
                'connection' => 'default',
            ])
        ;

        \$container
            ->register('c', 'stdClass')
            ->addTag('doctrine.event_listener', [
                'event' => 'onFlush',
                'connection' => 'second',
            ])
        ;

        \$this->process(\$container);

        \$eventManagerDef = \$container->getDefinition('doctrine.dbal.default_connection.event_manager');

        // first connection
        \$this->assertEquals(
            [
                ['addEventListener', [['onFlush'], 'a']],
                ['addEventListener', [['onFlush'], 'b']],
            ],
            \$eventManagerDef->getMethodCalls()
        );

        \$serviceLocatorDef = \$container->getDefinition((string) \$eventManagerDef->getArgument(0));
        \$this->assertSame(ServiceLocator::class, \$serviceLocatorDef->getClass());
        \$this->assertEquals(
            [
                'a' => new ServiceClosureArgument(new Reference('a')),
                'b' => new ServiceClosureArgument(new Reference('b')),
            ],
            \$serviceLocatorDef->getArgument(0)
        );

        // second connection
        \$secondEventManagerDef = \$container->getDefinition('doctrine.dbal.second_connection.event_manager');
        \$this->assertEquals(
            [
                ['addEventListener', [['onFlush'], 'a']],
                ['addEventListener', [['onFlush'], 'c']],
            ],
            \$secondEventManagerDef->getMethodCalls()
        );

        \$serviceLocatorDef = \$container->getDefinition((string) \$secondEventManagerDef->getArgument(0));
        \$this->assertSame(ServiceLocator::class, \$serviceLocatorDef->getClass());
        \$this->assertEquals(
            [
                'a' => new ServiceClosureArgument(new Reference('a')),
                'c' => new ServiceClosureArgument(new Reference('c')),
            ],
            \$serviceLocatorDef->getArgument(0)
        );
    }

    public function testProcessEventSubscribersWithMultipleConnections()
    {
        \$container = \$this->createBuilder(true);

        \$container
            ->register('a', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'event' => 'onFlush',
            ])
        ;

        \$container
            ->register('b', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'event' => 'onFlush',
                'connection' => 'default',
            ])
        ;

        \$container
            ->register('c', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'event' => 'onFlush',
                'connection' => 'second',
            ])
        ;

        \$this->process(\$container);

        \$this->assertEquals(
            [
                ['addEventSubscriber', [new Reference('a')]],
                ['addEventSubscriber', [new Reference('b')]],
            ],
            \$container->getDefinition('doctrine.dbal.default_connection.event_manager')->getMethodCalls()
        );

        \$this->assertEquals(
            [
                ['addEventSubscriber', [new Reference('a')]],
                ['addEventSubscriber', [new Reference('c')]],
            ],
            \$container->getDefinition('doctrine.dbal.second_connection.event_manager')->getMethodCalls()
        );
    }

    public function testProcessEventSubscribersWithPriorities()
    {
        \$container = \$this->createBuilder();

        \$container
            ->register('a', 'stdClass')
            ->addTag('doctrine.event_subscriber')
        ;
        \$container
            ->register('b', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'priority' => 5,
            ])
        ;
        \$container
            ->register('c', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'priority' => 10,
            ])
        ;
        \$container
            ->register('d', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'priority' => 10,
            ])
        ;
        \$container
            ->register('e', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'priority' => 10,
            ])
        ;

        \$this->process(\$container);

        \$this->assertEquals(
            [
                ['addEventSubscriber', [new Reference('c')]],
                ['addEventSubscriber', [new Reference('d')]],
                ['addEventSubscriber', [new Reference('e')]],
                ['addEventSubscriber', [new Reference('b')]],
                ['addEventSubscriber', [new Reference('a')]],
            ],
            \$container->getDefinition('doctrine.dbal.default_connection.event_manager')->getMethodCalls()
        );
    }

    public function testProcessNoTaggedServices()
    {
        \$container = \$this->createBuilder(true);

        \$this->process(\$container);

        \$this->assertEquals([], \$container->getDefinition('doctrine.dbal.default_connection.event_manager')->getMethodCalls());

        \$this->assertEquals([], \$container->getDefinition('doctrine.dbal.second_connection.event_manager')->getMethodCalls());
    }

    private function process(ContainerBuilder \$container)
    {
        \$pass = new RegisterEventListenersAndSubscribersPass('doctrine.connections', 'doctrine.dbal.%s_connection.event_manager', 'doctrine');
        \$pass->process(\$container);
    }

    private function createBuilder(\$multipleConnections = false)
    {
        \$container = new ContainerBuilder();

        \$connections = ['default' => 'doctrine.dbal.default_connection'];

        \$container->register('doctrine.dbal.default_connection.event_manager', 'stdClass')
            ->addArgument(new Reference('service_container'));
        \$container->register('doctrine.dbal.default_connection', 'stdClass');

        if (\$multipleConnections) {
            \$container->register('doctrine.dbal.second_connection.event_manager', 'stdClass')
                ->addArgument(new Reference('service_container'));
            \$container->register('doctrine.dbal.second_connection', 'stdClass');
            \$connections['second'] = 'doctrine.dbal.second_connection';
        }

        \$container->setParameter('doctrine.connections', \$connections);

        return \$container;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPassTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\DependencyInjection\\CompilerPass;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass\\RegisterEventListenersAndSubscribersPass;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;

class RegisterEventListenersAndSubscribersPassTest extends TestCase
{
    public function testExceptionOnAbstractTaggedSubscriber()
    {
        \$this->expectException('InvalidArgumentException');
        \$container = \$this->createBuilder();

        \$abstractDefinition = new Definition('stdClass');
        \$abstractDefinition->setAbstract(true);
        \$abstractDefinition->addTag('doctrine.event_subscriber');

        \$container->setDefinition('a', \$abstractDefinition);

        \$this->process(\$container);
    }

    public function testExceptionOnAbstractTaggedListener()
    {
        \$this->expectException('InvalidArgumentException');
        \$container = \$this->createBuilder();

        \$abstractDefinition = new Definition('stdClass');
        \$abstractDefinition->setAbstract(true);
        \$abstractDefinition->addTag('doctrine.event_listener', ['event' => 'test']);

        \$container->setDefinition('a', \$abstractDefinition);

        \$this->process(\$container);
    }

    public function testProcessEventListenersWithPriorities()
    {
        \$container = \$this->createBuilder();

        \$container
            ->register('a', 'stdClass')
            ->setPublic(false)
            ->addTag('doctrine.event_listener', [
                'event' => 'bar',
            ])
            ->addTag('doctrine.event_listener', [
                'event' => 'foo',
                'priority' => -5,
            ])
            ->addTag('doctrine.event_listener', [
                'event' => 'foo_bar',
                'priority' => 3,
            ])
        ;
        \$container
            ->register('b', 'stdClass')
            ->addTag('doctrine.event_listener', [
                'event' => 'foo',
            ])
        ;
        \$container
            ->register('c', 'stdClass')
            ->addTag('doctrine.event_listener', [
                'event' => 'foo_bar',
                'priority' => 4,
            ])
        ;

        \$this->process(\$container);
        \$eventManagerDef = \$container->getDefinition('doctrine.dbal.default_connection.event_manager');
        \$methodCalls = \$eventManagerDef->getMethodCalls();

        \$this->assertEquals(
            [
                ['addEventListener', [['foo_bar'], 'c']],
                ['addEventListener', [['foo_bar'], 'a']],
                ['addEventListener', [['bar'], 'a']],
                ['addEventListener', [['foo'], 'b']],
                ['addEventListener', [['foo'], 'a']],
            ],
            \$methodCalls
        );

        \$serviceLocatorDef = \$container->getDefinition((string) \$eventManagerDef->getArgument(0));
        \$this->assertSame(ServiceLocator::class, \$serviceLocatorDef->getClass());
        \$this->assertEquals(
            [
                'c' => new ServiceClosureArgument(new Reference('c')),
                'a' => new ServiceClosureArgument(new Reference('a')),
                'b' => new ServiceClosureArgument(new Reference('b')),
            ],
            \$serviceLocatorDef->getArgument(0)
        );
    }

    public function testProcessEventListenersWithMultipleConnections()
    {
        \$container = \$this->createBuilder(true);

        \$container
            ->register('a', 'stdClass')
            ->addTag('doctrine.event_listener', [
                'event' => 'onFlush',
            ])
        ;

        \$container
            ->register('b', 'stdClass')
            ->addTag('doctrine.event_listener', [
                'event' => 'onFlush',
                'connection' => 'default',
            ])
        ;

        \$container
            ->register('c', 'stdClass')
            ->addTag('doctrine.event_listener', [
                'event' => 'onFlush',
                'connection' => 'second',
            ])
        ;

        \$this->process(\$container);

        \$eventManagerDef = \$container->getDefinition('doctrine.dbal.default_connection.event_manager');

        // first connection
        \$this->assertEquals(
            [
                ['addEventListener', [['onFlush'], 'a']],
                ['addEventListener', [['onFlush'], 'b']],
            ],
            \$eventManagerDef->getMethodCalls()
        );

        \$serviceLocatorDef = \$container->getDefinition((string) \$eventManagerDef->getArgument(0));
        \$this->assertSame(ServiceLocator::class, \$serviceLocatorDef->getClass());
        \$this->assertEquals(
            [
                'a' => new ServiceClosureArgument(new Reference('a')),
                'b' => new ServiceClosureArgument(new Reference('b')),
            ],
            \$serviceLocatorDef->getArgument(0)
        );

        // second connection
        \$secondEventManagerDef = \$container->getDefinition('doctrine.dbal.second_connection.event_manager');
        \$this->assertEquals(
            [
                ['addEventListener', [['onFlush'], 'a']],
                ['addEventListener', [['onFlush'], 'c']],
            ],
            \$secondEventManagerDef->getMethodCalls()
        );

        \$serviceLocatorDef = \$container->getDefinition((string) \$secondEventManagerDef->getArgument(0));
        \$this->assertSame(ServiceLocator::class, \$serviceLocatorDef->getClass());
        \$this->assertEquals(
            [
                'a' => new ServiceClosureArgument(new Reference('a')),
                'c' => new ServiceClosureArgument(new Reference('c')),
            ],
            \$serviceLocatorDef->getArgument(0)
        );
    }

    public function testProcessEventSubscribersWithMultipleConnections()
    {
        \$container = \$this->createBuilder(true);

        \$container
            ->register('a', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'event' => 'onFlush',
            ])
        ;

        \$container
            ->register('b', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'event' => 'onFlush',
                'connection' => 'default',
            ])
        ;

        \$container
            ->register('c', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'event' => 'onFlush',
                'connection' => 'second',
            ])
        ;

        \$this->process(\$container);

        \$this->assertEquals(
            [
                ['addEventSubscriber', [new Reference('a')]],
                ['addEventSubscriber', [new Reference('b')]],
            ],
            \$container->getDefinition('doctrine.dbal.default_connection.event_manager')->getMethodCalls()
        );

        \$this->assertEquals(
            [
                ['addEventSubscriber', [new Reference('a')]],
                ['addEventSubscriber', [new Reference('c')]],
            ],
            \$container->getDefinition('doctrine.dbal.second_connection.event_manager')->getMethodCalls()
        );
    }

    public function testProcessEventSubscribersWithPriorities()
    {
        \$container = \$this->createBuilder();

        \$container
            ->register('a', 'stdClass')
            ->addTag('doctrine.event_subscriber')
        ;
        \$container
            ->register('b', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'priority' => 5,
            ])
        ;
        \$container
            ->register('c', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'priority' => 10,
            ])
        ;
        \$container
            ->register('d', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'priority' => 10,
            ])
        ;
        \$container
            ->register('e', 'stdClass')
            ->addTag('doctrine.event_subscriber', [
                'priority' => 10,
            ])
        ;

        \$this->process(\$container);

        \$this->assertEquals(
            [
                ['addEventSubscriber', [new Reference('c')]],
                ['addEventSubscriber', [new Reference('d')]],
                ['addEventSubscriber', [new Reference('e')]],
                ['addEventSubscriber', [new Reference('b')]],
                ['addEventSubscriber', [new Reference('a')]],
            ],
            \$container->getDefinition('doctrine.dbal.default_connection.event_manager')->getMethodCalls()
        );
    }

    public function testProcessNoTaggedServices()
    {
        \$container = \$this->createBuilder(true);

        \$this->process(\$container);

        \$this->assertEquals([], \$container->getDefinition('doctrine.dbal.default_connection.event_manager')->getMethodCalls());

        \$this->assertEquals([], \$container->getDefinition('doctrine.dbal.second_connection.event_manager')->getMethodCalls());
    }

    private function process(ContainerBuilder \$container)
    {
        \$pass = new RegisterEventListenersAndSubscribersPass('doctrine.connections', 'doctrine.dbal.%s_connection.event_manager', 'doctrine');
        \$pass->process(\$container);
    }

    private function createBuilder(\$multipleConnections = false)
    {
        \$container = new ContainerBuilder();

        \$connections = ['default' => 'doctrine.dbal.default_connection'];

        \$container->register('doctrine.dbal.default_connection.event_manager', 'stdClass')
            ->addArgument(new Reference('service_container'));
        \$container->register('doctrine.dbal.default_connection', 'stdClass');

        if (\$multipleConnections) {
            \$container->register('doctrine.dbal.second_connection.event_manager', 'stdClass')
                ->addArgument(new Reference('service_container'));
            \$container->register('doctrine.dbal.second_connection', 'stdClass');
            \$connections['second'] = 'doctrine.dbal.second_connection';
        }

        \$container->setParameter('doctrine.connections', \$connections);

        return \$container;
    }
}
", "vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPassTest.php");
    }
}
