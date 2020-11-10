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

/* vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services9.yml */
class __TwigTemplate_1c5510be1fc16aadb9515e0b2aeabb76892047fca7a0b62e74a8d07978310e05 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services9.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services9.yml"));

        // line 1
        echo "parameters:
    baz_class: BazClass
    foo_class: Bar\\FooClass
    foo: bar

services:
    service_container:
        class: Symfony\\Component\\DependencyInjection\\ContainerInterface
        public: true
        synthetic: true
    foo:
        class: Bar\\FooClass
        tags:
            - { name: foo, foo: foo }
            - { name: foo, bar: bar, baz: baz }
        arguments: [foo, '@foo.baz', { '%foo%': 'foo is %foo%', foobar: '%foo%' }, true, '@service_container']
        properties: { foo: bar, moo: '@foo.baz', qux: { '%foo%': 'foo is %foo%', foobar: '%foo%' } }
        calls:
            - [setBar, ['@bar']]
            - [initialize, {  }]

        factory: [Bar\\FooClass, getInstance]
        configurator: sc_configure
        public: true
    foo.baz:
        class: '%baz_class%'
        factory: ['%baz_class%', getInstance]
        configurator: ['%baz_class%', configureStatic1]
        public: true
    bar:
        class: Bar\\FooClass
        arguments: [foo, '@foo.baz', '%foo_bar%']
        configurator: ['@foo.baz', configure]
        public: true
    foo_bar:
        class: '%foo_class%'
        shared: false
        arguments: ['@deprecated_service']
        public: true
    method_call1:
        class: Bar\\FooClass
        file: '%path%foo.php'
        calls:
            - [setBar, ['@foo']]
            - [setBar, ['@?foo2']]
            - [setBar, ['@?foo3']]
            - [setBar, ['@?foobaz']]
            - [setBar, ['@=service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")']]
        public: true

    foo_with_inline:
        class: Foo
        calls:
            - [setBar, ['@inlined']]
        public: true

    inlined:
        class: Bar
        public: false
        properties: { pub: pub }
        calls:
            - [setBaz, ['@baz']]

    baz:
        class: Baz
        calls:
            - [setFoo, ['@foo_with_inline']]
        public: true

    request:
        class: Request
        synthetic: true
        public: true
    configurator_service:
        class: ConfClass
        public: false
        calls:
            - [setFoo, ['@baz']]

    configured_service:
        class: stdClass
        configurator: ['@configurator_service', configureStdClass]
        public: true
    configurator_service_simple:
        class: ConfClass
        public: false
        arguments: ['bar']
    configured_service_simple:
        class: stdClass
        configurator: ['@configurator_service_simple', configureStdClass]
        public: true
    decorated:
        class: stdClass
        public: true
    decorator_service:
        class: stdClass
        decorates: decorated
        public: true
    decorator_service_with_name:
        class: stdClass
        decorates: decorated
        decoration_inner_name: decorated.pif-pouf
        public: true
    deprecated_service:
        class: stdClass
        deprecated: The \"%service_id%\" service is deprecated. You should stop using it, as it will be removed in the future.
        public: true
    new_factory:
        class: FactoryClass
        public: false
        properties: { foo: bar }
    factory_service:
        class: Bar
        factory: ['@foo.baz', getInstance]
        public: true
    new_factory_service:
        class: FooBarBaz
        properties: { foo: bar }
        factory: ['@new_factory', getInstance]
        public: true
    service_from_static_method:
        class: Bar\\FooClass
        factory: [Bar\\FooClass, getInstance]
        public: true
    factory_simple:
        class: SimpleFactoryClass
        deprecated: The \"%service_id%\" service is deprecated. You should stop using it, as it will be removed in the future.
        public: false
        arguments: ['foo']
    factory_service_simple:
        class: Bar
        factory: ['@factory_simple', getInstance]
        public: true
    lazy_context:
        class: LazyContext
        arguments: [!iterator {'k1': '@foo.baz', 'k2': '@service_container'}, !iterator []]
        public: true
    lazy_context_ignore_invalid_ref:
        class: LazyContext
        arguments: [!iterator ['@foo.baz', '@?invalid'], !iterator []]
        public: true
    BAR:
        class: stdClass
        properties: { bar: '@bar' }
        public: true
    bar2:
        class: stdClass
        public: true
    BAR2:
        class: stdClass
        public: true
    tagged_iterator_foo:
        class: Bar
        tags:
            - { name: foo }
        public: false
    tagged_iterator:
        class: Bar
        arguments:
            - !tagged foo
        public: true
    Psr\\Container\\ContainerInterface:
        alias: service_container
        public: false
    Symfony\\Component\\DependencyInjection\\ContainerInterface:
        alias: service_container
        public: false
    alias_for_foo:
        alias: 'foo'
        public: true
    alias_for_alias:
        alias: 'foo'
        public: true
    runtime_error:
        class: stdClass
        arguments: ['@errored_definition']
        public: true
    errored_definition:
        class: stdClass
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services9.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("parameters:
    baz_class: BazClass
    foo_class: Bar\\FooClass
    foo: bar

services:
    service_container:
        class: Symfony\\Component\\DependencyInjection\\ContainerInterface
        public: true
        synthetic: true
    foo:
        class: Bar\\FooClass
        tags:
            - { name: foo, foo: foo }
            - { name: foo, bar: bar, baz: baz }
        arguments: [foo, '@foo.baz', { '%foo%': 'foo is %foo%', foobar: '%foo%' }, true, '@service_container']
        properties: { foo: bar, moo: '@foo.baz', qux: { '%foo%': 'foo is %foo%', foobar: '%foo%' } }
        calls:
            - [setBar, ['@bar']]
            - [initialize, {  }]

        factory: [Bar\\FooClass, getInstance]
        configurator: sc_configure
        public: true
    foo.baz:
        class: '%baz_class%'
        factory: ['%baz_class%', getInstance]
        configurator: ['%baz_class%', configureStatic1]
        public: true
    bar:
        class: Bar\\FooClass
        arguments: [foo, '@foo.baz', '%foo_bar%']
        configurator: ['@foo.baz', configure]
        public: true
    foo_bar:
        class: '%foo_class%'
        shared: false
        arguments: ['@deprecated_service']
        public: true
    method_call1:
        class: Bar\\FooClass
        file: '%path%foo.php'
        calls:
            - [setBar, ['@foo']]
            - [setBar, ['@?foo2']]
            - [setBar, ['@?foo3']]
            - [setBar, ['@?foobaz']]
            - [setBar, ['@=service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")']]
        public: true

    foo_with_inline:
        class: Foo
        calls:
            - [setBar, ['@inlined']]
        public: true

    inlined:
        class: Bar
        public: false
        properties: { pub: pub }
        calls:
            - [setBaz, ['@baz']]

    baz:
        class: Baz
        calls:
            - [setFoo, ['@foo_with_inline']]
        public: true

    request:
        class: Request
        synthetic: true
        public: true
    configurator_service:
        class: ConfClass
        public: false
        calls:
            - [setFoo, ['@baz']]

    configured_service:
        class: stdClass
        configurator: ['@configurator_service', configureStdClass]
        public: true
    configurator_service_simple:
        class: ConfClass
        public: false
        arguments: ['bar']
    configured_service_simple:
        class: stdClass
        configurator: ['@configurator_service_simple', configureStdClass]
        public: true
    decorated:
        class: stdClass
        public: true
    decorator_service:
        class: stdClass
        decorates: decorated
        public: true
    decorator_service_with_name:
        class: stdClass
        decorates: decorated
        decoration_inner_name: decorated.pif-pouf
        public: true
    deprecated_service:
        class: stdClass
        deprecated: The \"%service_id%\" service is deprecated. You should stop using it, as it will be removed in the future.
        public: true
    new_factory:
        class: FactoryClass
        public: false
        properties: { foo: bar }
    factory_service:
        class: Bar
        factory: ['@foo.baz', getInstance]
        public: true
    new_factory_service:
        class: FooBarBaz
        properties: { foo: bar }
        factory: ['@new_factory', getInstance]
        public: true
    service_from_static_method:
        class: Bar\\FooClass
        factory: [Bar\\FooClass, getInstance]
        public: true
    factory_simple:
        class: SimpleFactoryClass
        deprecated: The \"%service_id%\" service is deprecated. You should stop using it, as it will be removed in the future.
        public: false
        arguments: ['foo']
    factory_service_simple:
        class: Bar
        factory: ['@factory_simple', getInstance]
        public: true
    lazy_context:
        class: LazyContext
        arguments: [!iterator {'k1': '@foo.baz', 'k2': '@service_container'}, !iterator []]
        public: true
    lazy_context_ignore_invalid_ref:
        class: LazyContext
        arguments: [!iterator ['@foo.baz', '@?invalid'], !iterator []]
        public: true
    BAR:
        class: stdClass
        properties: { bar: '@bar' }
        public: true
    bar2:
        class: stdClass
        public: true
    BAR2:
        class: stdClass
        public: true
    tagged_iterator_foo:
        class: Bar
        tags:
            - { name: foo }
        public: false
    tagged_iterator:
        class: Bar
        arguments:
            - !tagged foo
        public: true
    Psr\\Container\\ContainerInterface:
        alias: service_container
        public: false
    Symfony\\Component\\DependencyInjection\\ContainerInterface:
        alias: service_container
        public: false
    alias_for_foo:
        alias: 'foo'
        public: true
    alias_for_alias:
        alias: 'foo'
        public: true
    runtime_error:
        class: stdClass
        arguments: ['@errored_definition']
        public: true
    errored_definition:
        class: stdClass
", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services9.yml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services9.yml");
    }
}
