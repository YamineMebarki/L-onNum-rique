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

/* vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services6.yml */
class __TwigTemplate_e7d85cc03757661b681105ee5408fcad3afa8a2e208cfe3a00e55c93ff23e58b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services6.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services6.yml"));

        // line 1
        echo "services:
    foo: { class: FooClass }
    baz: { class: BazClass }
    not_shared: { class: FooClass, shared: false }
    file: { class: FooClass, file: '%path%/foo.php' }
    arguments: { class: FooClass, arguments: [foo, '@foo', [true, false]] }
    configurator1: { class: FooClass, configurator: sc_configure }
    configurator2: { class: FooClass, configurator: ['@baz', configure] }
    configurator3: { class: FooClass, configurator: [BazClass, configureStatic] }
    method_call1:
        class: FooClass
        calls:
            - [ setBar, [] ]
            - [ setBar ]
            - [ setBar, ['@=service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")'] ]
    method_call2:
        class: FooClass
        calls:
            - [ setBar, [ foo, '@foo', [true, false] ] ]
    request:
        class: Request
        synthetic: true
        lazy: true
    decorator_service:
        decorates: decorated
    decorator_service_with_name:
        decorates: decorated
        decoration_inner_name: decorated.pif-pouf
    decorator_service_with_name_and_priority:
        decorates: decorated
        decoration_inner_name: decorated.pif-pouf
        decoration_priority: 5
    new_factory1: { class: FooBarClass, factory: factory}
    new_factory2: { class: FooBarClass, factory: ['@baz', getClass]}
    new_factory3: { class: FooBarClass, factory: [BazClass, getInstance]}
    new_factory4: { class: BazClass, factory: [~, getInstance]}
    new_factory5: { class: FooBarClass, factory: '@baz' }
    Acme\\WithShortCutArgs: [foo, '@baz']
    alias_for_foo: '@foo'
    another_alias_for_foo:
        alias: foo
        public: false
    another_third_alias_for_foo:
        alias: foo
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services6.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("services:
    foo: { class: FooClass }
    baz: { class: BazClass }
    not_shared: { class: FooClass, shared: false }
    file: { class: FooClass, file: '%path%/foo.php' }
    arguments: { class: FooClass, arguments: [foo, '@foo', [true, false]] }
    configurator1: { class: FooClass, configurator: sc_configure }
    configurator2: { class: FooClass, configurator: ['@baz', configure] }
    configurator3: { class: FooClass, configurator: [BazClass, configureStatic] }
    method_call1:
        class: FooClass
        calls:
            - [ setBar, [] ]
            - [ setBar ]
            - [ setBar, ['@=service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")'] ]
    method_call2:
        class: FooClass
        calls:
            - [ setBar, [ foo, '@foo', [true, false] ] ]
    request:
        class: Request
        synthetic: true
        lazy: true
    decorator_service:
        decorates: decorated
    decorator_service_with_name:
        decorates: decorated
        decoration_inner_name: decorated.pif-pouf
    decorator_service_with_name_and_priority:
        decorates: decorated
        decoration_inner_name: decorated.pif-pouf
        decoration_priority: 5
    new_factory1: { class: FooBarClass, factory: factory}
    new_factory2: { class: FooBarClass, factory: ['@baz', getClass]}
    new_factory3: { class: FooBarClass, factory: [BazClass, getInstance]}
    new_factory4: { class: BazClass, factory: [~, getInstance]}
    new_factory5: { class: FooBarClass, factory: '@baz' }
    Acme\\WithShortCutArgs: [foo, '@baz']
    alias_for_foo: '@foo'
    another_alias_for_foo:
        alias: foo
        public: false
    another_third_alias_for_foo:
        alias: foo
", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services6.yml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/yaml/services6.yml");
    }
}
