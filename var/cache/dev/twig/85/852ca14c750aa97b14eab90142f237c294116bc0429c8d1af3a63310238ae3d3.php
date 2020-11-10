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

/* vendor/symfony/dependency-injection/Tests/Fixtures/containers/container9.php */
class __TwigTemplate_7e45c224bf8fa0447845364a1b086b3f0bc98f1b7218c2909af929474c403e8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container9.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container9.php"));

        // line 1
        echo "<?php

require_once __DIR__.'/../includes/classes.php';
require_once __DIR__.'/../includes/foo.php';

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Parameter;
use Symfony\\Component\\ExpressionLanguage\\Expression;

\$container = new ContainerBuilder();
\$container
    ->register('foo', '\\Bar\\FooClass')
    ->addTag('foo', ['foo' => 'foo'])
    ->addTag('foo', ['bar' => 'bar', 'baz' => 'baz'])
    ->setFactory(['Bar\\\\FooClass', 'getInstance'])
    ->setArguments(['foo', new Reference('foo.baz'), ['%foo%' => 'foo is %foo%', 'foobar' => '%foo%'], true, new Reference('service_container')])
    ->setProperties(['foo' => 'bar', 'moo' => new Reference('foo.baz'), 'qux' => ['%foo%' => 'foo is %foo%', 'foobar' => '%foo%']])
    ->addMethodCall('setBar', [new Reference('bar')])
    ->addMethodCall('initialize')
    ->setConfigurator('sc_configure')
    ->setPublic(true)
;
\$container
    ->register('foo.baz', '%baz_class%')
    ->setFactory(['%baz_class%', 'getInstance'])
    ->setConfigurator(['%baz_class%', 'configureStatic1'])
    ->setPublic(true)
;
\$container
    ->register('bar', 'Bar\\FooClass')
    ->setArguments(['foo', new Reference('foo.baz'), new Parameter('foo_bar')])
    ->setConfigurator([new Reference('foo.baz'), 'configure'])
    ->setPublic(true)
;
\$container
    ->register('foo_bar', '%foo_class%')
    ->addArgument(new Reference('deprecated_service'))
    ->setShared(false)
    ->setPublic(true)
;
\$container->getParameterBag()->clear();
\$container->getParameterBag()->add([
    'baz_class' => 'BazClass',
    'foo_class' => 'Bar\\FooClass',
    'foo' => 'bar',
]);
\$container
    ->register('method_call1', 'Bar\\FooClass')
    ->setFile(realpath(__DIR__.'/../includes/foo.php'))
    ->addMethodCall('setBar', [new Reference('foo')])
    ->addMethodCall('setBar', [new Reference('foo2', ContainerInterface::NULL_ON_INVALID_REFERENCE)])
    ->addMethodCall('setBar', [new Reference('foo3', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)])
    ->addMethodCall('setBar', [new Reference('foobaz', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)])
    ->addMethodCall('setBar', [new Expression('service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")')])
    ->setPublic(true)
;
\$container
    ->register('foo_with_inline', 'Foo')
    ->addMethodCall('setBar', [new Reference('inlined')])
    ->setPublic(true)
;
\$container
    ->register('inlined', 'Bar')
    ->setProperty('pub', 'pub')
    ->addMethodCall('setBaz', [new Reference('baz')])
    ->setPublic(false)
;
\$container
    ->register('baz', 'Baz')
    ->addMethodCall('setFoo', [new Reference('foo_with_inline')])
    ->setPublic(true)
;
\$container
    ->register('request', 'Request')
    ->setSynthetic(true)
    ->setPublic(true)
;
\$container
    ->register('configurator_service', 'ConfClass')
    ->setPublic(false)
    ->addMethodCall('setFoo', [new Reference('baz')])
;
\$container
    ->register('configured_service', 'stdClass')
    ->setConfigurator([new Reference('configurator_service'), 'configureStdClass'])
    ->setPublic(true)
;
\$container
    ->register('configurator_service_simple', 'ConfClass')
    ->addArgument('bar')
    ->setPublic(false)
;
\$container
    ->register('configured_service_simple', 'stdClass')
    ->setConfigurator([new Reference('configurator_service_simple'), 'configureStdClass'])
    ->setPublic(true)
;
\$container
    ->register('decorated', 'stdClass')
    ->setPublic(true)
;
\$container
    ->register('decorator_service', 'stdClass')
    ->setDecoratedService('decorated')
    ->setPublic(true)
;
\$container
    ->register('decorator_service_with_name', 'stdClass')
    ->setDecoratedService('decorated', 'decorated.pif-pouf')
    ->setPublic(true)
;
\$container
    ->register('deprecated_service', 'stdClass')
    ->setDeprecated(true)
    ->setPublic(true)
;
\$container
    ->register('new_factory', 'FactoryClass')
    ->setProperty('foo', 'bar')
    ->setPublic(false)
;
\$container
    ->register('factory_service', 'Bar')
    ->setFactory([new Reference('foo.baz'), 'getInstance'])
    ->setPublic(true)
;
\$container
    ->register('new_factory_service', 'FooBarBaz')
    ->setProperty('foo', 'bar')
    ->setFactory([new Reference('new_factory'), 'getInstance'])
    ->setPublic(true)
;
\$container
    ->register('service_from_static_method', 'Bar\\FooClass')
    ->setFactory(['Bar\\FooClass', 'getInstance'])
    ->setPublic(true)
;
\$container
    ->register('factory_simple', 'SimpleFactoryClass')
    ->addArgument('foo')
    ->setDeprecated(true)
    ->setPublic(false)
;
\$container
    ->register('factory_service_simple', 'Bar')
    ->setFactory([new Reference('factory_simple'), 'getInstance'])
    ->setPublic(true)
;
\$container
    ->register('lazy_context', 'LazyContext')
    ->setArguments([new IteratorArgument(['k1' => new Reference('foo.baz'), 'k2' => new Reference('service_container')]), new IteratorArgument([])])
    ->setPublic(true)
;
\$container
    ->register('lazy_context_ignore_invalid_ref', 'LazyContext')
    ->setArguments([new IteratorArgument([new Reference('foo.baz'), new Reference('invalid', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)]), new IteratorArgument([])])
    ->setPublic(true)
;
\$container
    ->register('BAR', 'stdClass')
    ->setProperty('bar', new Reference('bar'))
    ->setPublic(true)
;
\$container->register('bar2', 'stdClass')->setPublic(true);
\$container->register('BAR2', 'stdClass')->setPublic(true);
\$container
    ->register('tagged_iterator_foo', 'Bar')
    ->addTag('foo')
    ->setPublic(false)
;
\$container
    ->register('tagged_iterator', 'Bar')
    ->addArgument(new TaggedIteratorArgument('foo'))
    ->setPublic(true)
;
\$container->setAlias('alias_for_foo', 'foo')->setPublic(true);
\$container->setAlias('alias_for_alias', 'alias_for_foo')->setPublic(true);

\$container->register('runtime_error', 'stdClass')
    ->addArgument(new Reference('errored_definition', ContainerInterface::RUNTIME_EXCEPTION_ON_INVALID_REFERENCE))
    ->setPublic(true);

\$container->register('errored_definition', 'stdClass')
    ->addError('Service \"errored_definition\" is broken.');

return \$container;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container9.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

require_once __DIR__.'/../includes/classes.php';
require_once __DIR__.'/../includes/foo.php';

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Parameter;
use Symfony\\Component\\ExpressionLanguage\\Expression;

\$container = new ContainerBuilder();
\$container
    ->register('foo', '\\Bar\\FooClass')
    ->addTag('foo', ['foo' => 'foo'])
    ->addTag('foo', ['bar' => 'bar', 'baz' => 'baz'])
    ->setFactory(['Bar\\\\FooClass', 'getInstance'])
    ->setArguments(['foo', new Reference('foo.baz'), ['%foo%' => 'foo is %foo%', 'foobar' => '%foo%'], true, new Reference('service_container')])
    ->setProperties(['foo' => 'bar', 'moo' => new Reference('foo.baz'), 'qux' => ['%foo%' => 'foo is %foo%', 'foobar' => '%foo%']])
    ->addMethodCall('setBar', [new Reference('bar')])
    ->addMethodCall('initialize')
    ->setConfigurator('sc_configure')
    ->setPublic(true)
;
\$container
    ->register('foo.baz', '%baz_class%')
    ->setFactory(['%baz_class%', 'getInstance'])
    ->setConfigurator(['%baz_class%', 'configureStatic1'])
    ->setPublic(true)
;
\$container
    ->register('bar', 'Bar\\FooClass')
    ->setArguments(['foo', new Reference('foo.baz'), new Parameter('foo_bar')])
    ->setConfigurator([new Reference('foo.baz'), 'configure'])
    ->setPublic(true)
;
\$container
    ->register('foo_bar', '%foo_class%')
    ->addArgument(new Reference('deprecated_service'))
    ->setShared(false)
    ->setPublic(true)
;
\$container->getParameterBag()->clear();
\$container->getParameterBag()->add([
    'baz_class' => 'BazClass',
    'foo_class' => 'Bar\\FooClass',
    'foo' => 'bar',
]);
\$container
    ->register('method_call1', 'Bar\\FooClass')
    ->setFile(realpath(__DIR__.'/../includes/foo.php'))
    ->addMethodCall('setBar', [new Reference('foo')])
    ->addMethodCall('setBar', [new Reference('foo2', ContainerInterface::NULL_ON_INVALID_REFERENCE)])
    ->addMethodCall('setBar', [new Reference('foo3', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)])
    ->addMethodCall('setBar', [new Reference('foobaz', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)])
    ->addMethodCall('setBar', [new Expression('service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")')])
    ->setPublic(true)
;
\$container
    ->register('foo_with_inline', 'Foo')
    ->addMethodCall('setBar', [new Reference('inlined')])
    ->setPublic(true)
;
\$container
    ->register('inlined', 'Bar')
    ->setProperty('pub', 'pub')
    ->addMethodCall('setBaz', [new Reference('baz')])
    ->setPublic(false)
;
\$container
    ->register('baz', 'Baz')
    ->addMethodCall('setFoo', [new Reference('foo_with_inline')])
    ->setPublic(true)
;
\$container
    ->register('request', 'Request')
    ->setSynthetic(true)
    ->setPublic(true)
;
\$container
    ->register('configurator_service', 'ConfClass')
    ->setPublic(false)
    ->addMethodCall('setFoo', [new Reference('baz')])
;
\$container
    ->register('configured_service', 'stdClass')
    ->setConfigurator([new Reference('configurator_service'), 'configureStdClass'])
    ->setPublic(true)
;
\$container
    ->register('configurator_service_simple', 'ConfClass')
    ->addArgument('bar')
    ->setPublic(false)
;
\$container
    ->register('configured_service_simple', 'stdClass')
    ->setConfigurator([new Reference('configurator_service_simple'), 'configureStdClass'])
    ->setPublic(true)
;
\$container
    ->register('decorated', 'stdClass')
    ->setPublic(true)
;
\$container
    ->register('decorator_service', 'stdClass')
    ->setDecoratedService('decorated')
    ->setPublic(true)
;
\$container
    ->register('decorator_service_with_name', 'stdClass')
    ->setDecoratedService('decorated', 'decorated.pif-pouf')
    ->setPublic(true)
;
\$container
    ->register('deprecated_service', 'stdClass')
    ->setDeprecated(true)
    ->setPublic(true)
;
\$container
    ->register('new_factory', 'FactoryClass')
    ->setProperty('foo', 'bar')
    ->setPublic(false)
;
\$container
    ->register('factory_service', 'Bar')
    ->setFactory([new Reference('foo.baz'), 'getInstance'])
    ->setPublic(true)
;
\$container
    ->register('new_factory_service', 'FooBarBaz')
    ->setProperty('foo', 'bar')
    ->setFactory([new Reference('new_factory'), 'getInstance'])
    ->setPublic(true)
;
\$container
    ->register('service_from_static_method', 'Bar\\FooClass')
    ->setFactory(['Bar\\FooClass', 'getInstance'])
    ->setPublic(true)
;
\$container
    ->register('factory_simple', 'SimpleFactoryClass')
    ->addArgument('foo')
    ->setDeprecated(true)
    ->setPublic(false)
;
\$container
    ->register('factory_service_simple', 'Bar')
    ->setFactory([new Reference('factory_simple'), 'getInstance'])
    ->setPublic(true)
;
\$container
    ->register('lazy_context', 'LazyContext')
    ->setArguments([new IteratorArgument(['k1' => new Reference('foo.baz'), 'k2' => new Reference('service_container')]), new IteratorArgument([])])
    ->setPublic(true)
;
\$container
    ->register('lazy_context_ignore_invalid_ref', 'LazyContext')
    ->setArguments([new IteratorArgument([new Reference('foo.baz'), new Reference('invalid', ContainerInterface::IGNORE_ON_INVALID_REFERENCE)]), new IteratorArgument([])])
    ->setPublic(true)
;
\$container
    ->register('BAR', 'stdClass')
    ->setProperty('bar', new Reference('bar'))
    ->setPublic(true)
;
\$container->register('bar2', 'stdClass')->setPublic(true);
\$container->register('BAR2', 'stdClass')->setPublic(true);
\$container
    ->register('tagged_iterator_foo', 'Bar')
    ->addTag('foo')
    ->setPublic(false)
;
\$container
    ->register('tagged_iterator', 'Bar')
    ->addArgument(new TaggedIteratorArgument('foo'))
    ->setPublic(true)
;
\$container->setAlias('alias_for_foo', 'foo')->setPublic(true);
\$container->setAlias('alias_for_alias', 'alias_for_foo')->setPublic(true);

\$container->register('runtime_error', 'stdClass')
    ->addArgument(new Reference('errored_definition', ContainerInterface::RUNTIME_EXCEPTION_ON_INVALID_REFERENCE))
    ->setPublic(true);

\$container->register('errored_definition', 'stdClass')
    ->addError('Service \"errored_definition\" is broken.');

return \$container;
", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container9.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/containers/container9.php");
    }
}
