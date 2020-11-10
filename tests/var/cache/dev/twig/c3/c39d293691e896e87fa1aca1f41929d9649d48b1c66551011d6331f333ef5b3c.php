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

/* vendor/symfony/framework-bundle/Tests/Console/Descriptor/ObjectsProvider.php */
class __TwigTemplate_797edc7c0798d830ec570b7286ece273e8273ec3fe395d5d0682cbd2f3865649 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Console/Descriptor/ObjectsProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Console/Descriptor/ObjectsProvider.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Console\\Descriptor;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Routing\\CompiledRoute;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class ObjectsProvider
{
    public static function getRouteCollections()
    {
        \$collection1 = new RouteCollection();
        foreach (self::getRoutes() as \$name => \$route) {
            \$collection1->add(\$name, \$route);
        }

        return ['route_collection_1' => \$collection1];
    }

    public static function getRoutes()
    {
        return [
            'route_1' => new RouteStub(
                '/hello/{name}',
                ['name' => 'Joseph'],
                ['name' => '[a-z]+'],
                ['opt1' => 'val1', 'opt2' => 'val2'],
                'localhost',
                ['http', 'https'],
                ['get', 'head']
            ),
            'route_2' => new RouteStub(
                '/name/add',
                [],
                [],
                ['opt1' => 'val1', 'opt2' => 'val2'],
                'localhost',
                ['http', 'https'],
                ['put', 'post'],
                \"context.getMethod() in ['GET', 'HEAD', 'POST']\"
            ),
        ];
    }

    public static function getContainerParameters()
    {
        return [
            'parameters_1' => new ParameterBag([
                'integer' => 12,
                'string' => 'Hello world!',
                'boolean' => true,
                'array' => [12, 'Hello world!', true],
            ]),
        ];
    }

    public static function getContainerParameter()
    {
        \$builder = new ContainerBuilder();
        \$builder->setParameter('database_name', 'symfony');
        \$builder->setParameter('twig.form.resources', [
            'bootstrap_3_horizontal_layout.html.twig',
            'bootstrap_3_layout.html.twig',
            'form_div_layout.html.twig',
            'form_table_layout.html.twig',
        ]);

        return [
            'parameter' => \$builder,
            'array_parameter' => \$builder,
        ];
    }

    public static function getContainerBuilders()
    {
        \$builder1 = new ContainerBuilder();
        \$builder1->setDefinitions(self::getContainerDefinitions());
        \$builder1->setAliases(self::getContainerAliases());

        return ['builder_1' => \$builder1];
    }

    public static function getContainerDefinitionsWithExistingClasses()
    {
        return [
            'existing_class_def_1' => new Definition(ClassWithDocComment::class),
            'existing_class_def_2' => new Definition(ClassWithoutDocComment::class),
        ];
    }

    public static function getContainerDefinitions()
    {
        \$definition1 = new Definition('Full\\\\Qualified\\\\Class1');
        \$definition2 = new Definition('Full\\\\Qualified\\\\Class2');

        return [
            'definition_1' => \$definition1
                ->setPublic(true)
                ->setSynthetic(false)
                ->setLazy(true)
                ->setAbstract(true)
                ->addArgument(new Reference('.definition_2'))
                ->addArgument('%parameter%')
                ->addArgument(new Definition('inline_service', ['arg1', 'arg2']))
                ->addArgument([
                    'foo',
                    new Reference('.definition_2'),
                    new Definition('inline_service'),
                ])
                ->addArgument(new IteratorArgument([
                    new Reference('definition_1'),
                    new Reference('.definition_2'),
                ]))
                ->setFactory(['Full\\\\Qualified\\\\FactoryClass', 'get']),
            '.definition_2' => \$definition2
                ->setPublic(false)
                ->setSynthetic(true)
                ->setFile('/path/to/file')
                ->setLazy(false)
                ->setAbstract(false)
                ->addTag('tag1', ['attr1' => 'val1', 'attr2' => 'val2'])
                ->addTag('tag1', ['attr3' => 'val3'])
                ->addTag('tag2')
                ->addMethodCall('setMailer', [new Reference('mailer')])
                ->setFactory([new Reference('factory.service'), 'get']),
            'definition_without_class' => new Definition(),
        ];
    }

    public static function getContainerAliases()
    {
        return [
            'alias_1' => new Alias('service_1', true),
            '.alias_2' => new Alias('.service_2', false),
        ];
    }

    public static function getEventDispatchers()
    {
        \$eventDispatcher = new EventDispatcher();

        \$eventDispatcher->addListener('event1', 'global_function', 255);
        \$eventDispatcher->addListener('event1', function () { return 'Closure'; }, -1);
        \$eventDispatcher->addListener('event2', new CallableClass());

        return ['event_dispatcher_1' => \$eventDispatcher];
    }

    public static function getCallables()
    {
        return [
            'callable_1' => 'array_key_exists',
            'callable_2' => ['Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Console\\\\Descriptor\\\\CallableClass', 'staticMethod'],
            'callable_3' => [new CallableClass(), 'method'],
            'callable_4' => 'Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Console\\\\Descriptor\\\\CallableClass::staticMethod',
            'callable_5' => ['Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Console\\\\Descriptor\\\\ExtendedCallableClass', 'parent::staticMethod'],
            'callable_6' => function () { return 'Closure'; },
            'callable_7' => new CallableClass(),
            'callable_from_callable' => \\Closure::fromCallable(new CallableClass()),
        ];
    }
}

class CallableClass
{
    public function __invoke()
    {
    }

    public static function staticMethod()
    {
    }

    public function method()
    {
    }
}

class ExtendedCallableClass extends CallableClass
{
    public static function staticMethod()
    {
    }
}

class RouteStub extends Route
{
    public function compile()
    {
        return new CompiledRoute('', '#PATH_REGEX#', [], [], '#HOST_REGEX#');
    }
}

class ClassWithoutDocComment
{
}

/**
 * This is a class with a doc comment.
 */
class ClassWithDocComment
{
}

/**
 * This is the first line of the description.
 * This is the second line.
 *
 * This is the third and shouldn't be shown.
 *
 * @annot should not be parsed
 */
class ClassWithDocCommentOnMultipleLines
{
}

/**
 *Foo.
 *
 * @annot should not be parsed
 */
class ClassWithDocCommentWithoutInitialSpace
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Console/Descriptor/ObjectsProvider.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Console\\Descriptor;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Routing\\CompiledRoute;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

class ObjectsProvider
{
    public static function getRouteCollections()
    {
        \$collection1 = new RouteCollection();
        foreach (self::getRoutes() as \$name => \$route) {
            \$collection1->add(\$name, \$route);
        }

        return ['route_collection_1' => \$collection1];
    }

    public static function getRoutes()
    {
        return [
            'route_1' => new RouteStub(
                '/hello/{name}',
                ['name' => 'Joseph'],
                ['name' => '[a-z]+'],
                ['opt1' => 'val1', 'opt2' => 'val2'],
                'localhost',
                ['http', 'https'],
                ['get', 'head']
            ),
            'route_2' => new RouteStub(
                '/name/add',
                [],
                [],
                ['opt1' => 'val1', 'opt2' => 'val2'],
                'localhost',
                ['http', 'https'],
                ['put', 'post'],
                \"context.getMethod() in ['GET', 'HEAD', 'POST']\"
            ),
        ];
    }

    public static function getContainerParameters()
    {
        return [
            'parameters_1' => new ParameterBag([
                'integer' => 12,
                'string' => 'Hello world!',
                'boolean' => true,
                'array' => [12, 'Hello world!', true],
            ]),
        ];
    }

    public static function getContainerParameter()
    {
        \$builder = new ContainerBuilder();
        \$builder->setParameter('database_name', 'symfony');
        \$builder->setParameter('twig.form.resources', [
            'bootstrap_3_horizontal_layout.html.twig',
            'bootstrap_3_layout.html.twig',
            'form_div_layout.html.twig',
            'form_table_layout.html.twig',
        ]);

        return [
            'parameter' => \$builder,
            'array_parameter' => \$builder,
        ];
    }

    public static function getContainerBuilders()
    {
        \$builder1 = new ContainerBuilder();
        \$builder1->setDefinitions(self::getContainerDefinitions());
        \$builder1->setAliases(self::getContainerAliases());

        return ['builder_1' => \$builder1];
    }

    public static function getContainerDefinitionsWithExistingClasses()
    {
        return [
            'existing_class_def_1' => new Definition(ClassWithDocComment::class),
            'existing_class_def_2' => new Definition(ClassWithoutDocComment::class),
        ];
    }

    public static function getContainerDefinitions()
    {
        \$definition1 = new Definition('Full\\\\Qualified\\\\Class1');
        \$definition2 = new Definition('Full\\\\Qualified\\\\Class2');

        return [
            'definition_1' => \$definition1
                ->setPublic(true)
                ->setSynthetic(false)
                ->setLazy(true)
                ->setAbstract(true)
                ->addArgument(new Reference('.definition_2'))
                ->addArgument('%parameter%')
                ->addArgument(new Definition('inline_service', ['arg1', 'arg2']))
                ->addArgument([
                    'foo',
                    new Reference('.definition_2'),
                    new Definition('inline_service'),
                ])
                ->addArgument(new IteratorArgument([
                    new Reference('definition_1'),
                    new Reference('.definition_2'),
                ]))
                ->setFactory(['Full\\\\Qualified\\\\FactoryClass', 'get']),
            '.definition_2' => \$definition2
                ->setPublic(false)
                ->setSynthetic(true)
                ->setFile('/path/to/file')
                ->setLazy(false)
                ->setAbstract(false)
                ->addTag('tag1', ['attr1' => 'val1', 'attr2' => 'val2'])
                ->addTag('tag1', ['attr3' => 'val3'])
                ->addTag('tag2')
                ->addMethodCall('setMailer', [new Reference('mailer')])
                ->setFactory([new Reference('factory.service'), 'get']),
            'definition_without_class' => new Definition(),
        ];
    }

    public static function getContainerAliases()
    {
        return [
            'alias_1' => new Alias('service_1', true),
            '.alias_2' => new Alias('.service_2', false),
        ];
    }

    public static function getEventDispatchers()
    {
        \$eventDispatcher = new EventDispatcher();

        \$eventDispatcher->addListener('event1', 'global_function', 255);
        \$eventDispatcher->addListener('event1', function () { return 'Closure'; }, -1);
        \$eventDispatcher->addListener('event2', new CallableClass());

        return ['event_dispatcher_1' => \$eventDispatcher];
    }

    public static function getCallables()
    {
        return [
            'callable_1' => 'array_key_exists',
            'callable_2' => ['Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Console\\\\Descriptor\\\\CallableClass', 'staticMethod'],
            'callable_3' => [new CallableClass(), 'method'],
            'callable_4' => 'Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Console\\\\Descriptor\\\\CallableClass::staticMethod',
            'callable_5' => ['Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Console\\\\Descriptor\\\\ExtendedCallableClass', 'parent::staticMethod'],
            'callable_6' => function () { return 'Closure'; },
            'callable_7' => new CallableClass(),
            'callable_from_callable' => \\Closure::fromCallable(new CallableClass()),
        ];
    }
}

class CallableClass
{
    public function __invoke()
    {
    }

    public static function staticMethod()
    {
    }

    public function method()
    {
    }
}

class ExtendedCallableClass extends CallableClass
{
    public static function staticMethod()
    {
    }
}

class RouteStub extends Route
{
    public function compile()
    {
        return new CompiledRoute('', '#PATH_REGEX#', [], [], '#HOST_REGEX#');
    }
}

class ClassWithoutDocComment
{
}

/**
 * This is a class with a doc comment.
 */
class ClassWithDocComment
{
}

/**
 * This is the first line of the description.
 * This is the second line.
 *
 * This is the third and shouldn't be shown.
 *
 * @annot should not be parsed
 */
class ClassWithDocCommentOnMultipleLines
{
}

/**
 *Foo.
 *
 * @annot should not be parsed
 */
class ClassWithDocCommentWithoutInitialSpace
{
}
", "vendor/symfony/framework-bundle/Tests/Console/Descriptor/ObjectsProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Console/Descriptor/ObjectsProvider.php");
    }
}
