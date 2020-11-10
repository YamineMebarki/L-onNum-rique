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

/* vendor/symfony/dependency-injection/Tests/Fixtures/config/services9.php */
class __TwigTemplate_35ba14c69e77754964a89438a3dbfe9937e1e88f20e892af1cdf534c598d2f4f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/config/services9.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/config/services9.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Bar\\FooClass;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Parameter;

require_once __DIR__.'/../includes/classes.php';
require_once __DIR__.'/../includes/foo.php';

return function (ContainerConfigurator \$c) {
    \$p = \$c->parameters();
    \$p->set('baz_class', 'BazClass');
    \$p->set('foo_class', FooClass::class)
      ->set('foo', 'bar');

    \$s = \$c->services()->defaults()
        ->public();
    \$s->set('foo')
        ->args(['foo', ref('foo.baz'), ['%foo%' => 'foo is %foo%', 'foobar' => '%foo%'], true, ref('service_container')])
        ->class(FooClass::class)
        ->tag('foo', ['foo' => 'foo'])
        ->tag('foo', ['bar' => 'bar', 'baz' => 'baz'])
        ->factory([FooClass::class, 'getInstance'])
        ->property('foo', 'bar')
        ->property('moo', ref('foo.baz'))
        ->property('qux', ['%foo%' => 'foo is %foo%', 'foobar' => '%foo%'])
        ->call('setBar', [ref('bar')])
        ->call('initialize')
        ->configurator('sc_configure');

    \$s->set('foo.baz', '%baz_class%')
        ->factory(['%baz_class%', 'getInstance'])
        ->configurator(['%baz_class%', 'configureStatic1']);

    \$s->set('bar', FooClass::class)
        ->args(['foo', ref('foo.baz'), new Parameter('foo_bar')])
        ->configurator([ref('foo.baz'), 'configure']);

    \$s->set('foo_bar', '%foo_class%')
        ->args([ref('deprecated_service')])
        ->share(false);

    \$s->set('method_call1', 'Bar\\FooClass')
        ->file(realpath(__DIR__.'/../includes/foo.php'))
        ->call('setBar', [ref('foo')])
        ->call('setBar', [ref('foo2')->nullOnInvalid()])
        ->call('setBar', [ref('foo3')->ignoreOnInvalid()])
        ->call('setBar', [ref('foobaz')->ignoreOnInvalid()])
        ->call('setBar', [expr('service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")')]);

    \$s->set('foo_with_inline', 'Foo')
        ->call('setBar', [ref('inlined')]);

    \$s->set('inlined', 'Bar')
        ->property('pub', 'pub')
        ->call('setBaz', [ref('baz')])
        ->private();

    \$s->set('baz', 'Baz')
        ->call('setFoo', [ref('foo_with_inline')]);

    \$s->set('request', 'Request')
        ->synthetic();

    \$s->set('configurator_service', 'ConfClass')
        ->private()
        ->call('setFoo', [ref('baz')]);

    \$s->set('configured_service', 'stdClass')
        ->configurator([ref('configurator_service'), 'configureStdClass']);

    \$s->set('configurator_service_simple', 'ConfClass')
        ->args(['bar'])
        ->private();

    \$s->set('configured_service_simple', 'stdClass')
        ->configurator([ref('configurator_service_simple'), 'configureStdClass']);

    \$s->set('decorated', 'stdClass');

    \$s->set('decorator_service', 'stdClass')
        ->decorate('decorated');

    \$s->set('decorator_service_with_name', 'stdClass')
        ->decorate('decorated', 'decorated.pif-pouf');

    \$s->set('deprecated_service', 'stdClass')
        ->deprecate();

    \$s->set('new_factory', 'FactoryClass')
        ->property('foo', 'bar')
        ->private();

    \$s->set('factory_service', 'Bar')
        ->factory([ref('foo.baz'), 'getInstance']);

    \$s->set('new_factory_service', 'FooBarBaz')
        ->property('foo', 'bar')
        ->factory([ref('new_factory'), 'getInstance']);

    \$s->set('service_from_static_method', 'Bar\\FooClass')
        ->factory(['Bar\\FooClass', 'getInstance']);

    \$s->set('factory_simple', 'SimpleFactoryClass')
        ->deprecate()
        ->args(['foo'])
        ->private();

    \$s->set('factory_service_simple', 'Bar')
        ->factory([ref('factory_simple'), 'getInstance']);

    \$s->set('lazy_context', 'LazyContext')
        ->args([iterator(['k1' => ref('foo.baz'), 'k2' => ref('service_container')]), iterator([])]);

    \$s->set('lazy_context_ignore_invalid_ref', 'LazyContext')
        ->args([iterator([ref('foo.baz'), ref('invalid')->ignoreOnInvalid()]), iterator([])]);

    \$s->set('BAR', 'stdClass')->property('bar', ref('bar'));
    \$s->set('bar2', 'stdClass');
    \$s->set('BAR2', 'stdClass');

    \$s->set('tagged_iterator_foo', 'Bar')
        ->private()
        ->tag('foo');

    \$s->set('tagged_iterator', 'Bar')
        ->public()
        ->args([tagged('foo')]);

    \$s->set('runtime_error', 'stdClass')
        ->args([new Reference('errored_definition', ContainerInterface::RUNTIME_EXCEPTION_ON_INVALID_REFERENCE)])
        ->public();
    \$s->set('errored_definition', 'stdClass')->private();

    \$s->alias('alias_for_foo', 'foo')->private()->public();
    \$s->alias('alias_for_alias', ref('alias_for_foo'));
};
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/config/services9.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Bar\\FooClass;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Parameter;

require_once __DIR__.'/../includes/classes.php';
require_once __DIR__.'/../includes/foo.php';

return function (ContainerConfigurator \$c) {
    \$p = \$c->parameters();
    \$p->set('baz_class', 'BazClass');
    \$p->set('foo_class', FooClass::class)
      ->set('foo', 'bar');

    \$s = \$c->services()->defaults()
        ->public();
    \$s->set('foo')
        ->args(['foo', ref('foo.baz'), ['%foo%' => 'foo is %foo%', 'foobar' => '%foo%'], true, ref('service_container')])
        ->class(FooClass::class)
        ->tag('foo', ['foo' => 'foo'])
        ->tag('foo', ['bar' => 'bar', 'baz' => 'baz'])
        ->factory([FooClass::class, 'getInstance'])
        ->property('foo', 'bar')
        ->property('moo', ref('foo.baz'))
        ->property('qux', ['%foo%' => 'foo is %foo%', 'foobar' => '%foo%'])
        ->call('setBar', [ref('bar')])
        ->call('initialize')
        ->configurator('sc_configure');

    \$s->set('foo.baz', '%baz_class%')
        ->factory(['%baz_class%', 'getInstance'])
        ->configurator(['%baz_class%', 'configureStatic1']);

    \$s->set('bar', FooClass::class)
        ->args(['foo', ref('foo.baz'), new Parameter('foo_bar')])
        ->configurator([ref('foo.baz'), 'configure']);

    \$s->set('foo_bar', '%foo_class%')
        ->args([ref('deprecated_service')])
        ->share(false);

    \$s->set('method_call1', 'Bar\\FooClass')
        ->file(realpath(__DIR__.'/../includes/foo.php'))
        ->call('setBar', [ref('foo')])
        ->call('setBar', [ref('foo2')->nullOnInvalid()])
        ->call('setBar', [ref('foo3')->ignoreOnInvalid()])
        ->call('setBar', [ref('foobaz')->ignoreOnInvalid()])
        ->call('setBar', [expr('service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")')]);

    \$s->set('foo_with_inline', 'Foo')
        ->call('setBar', [ref('inlined')]);

    \$s->set('inlined', 'Bar')
        ->property('pub', 'pub')
        ->call('setBaz', [ref('baz')])
        ->private();

    \$s->set('baz', 'Baz')
        ->call('setFoo', [ref('foo_with_inline')]);

    \$s->set('request', 'Request')
        ->synthetic();

    \$s->set('configurator_service', 'ConfClass')
        ->private()
        ->call('setFoo', [ref('baz')]);

    \$s->set('configured_service', 'stdClass')
        ->configurator([ref('configurator_service'), 'configureStdClass']);

    \$s->set('configurator_service_simple', 'ConfClass')
        ->args(['bar'])
        ->private();

    \$s->set('configured_service_simple', 'stdClass')
        ->configurator([ref('configurator_service_simple'), 'configureStdClass']);

    \$s->set('decorated', 'stdClass');

    \$s->set('decorator_service', 'stdClass')
        ->decorate('decorated');

    \$s->set('decorator_service_with_name', 'stdClass')
        ->decorate('decorated', 'decorated.pif-pouf');

    \$s->set('deprecated_service', 'stdClass')
        ->deprecate();

    \$s->set('new_factory', 'FactoryClass')
        ->property('foo', 'bar')
        ->private();

    \$s->set('factory_service', 'Bar')
        ->factory([ref('foo.baz'), 'getInstance']);

    \$s->set('new_factory_service', 'FooBarBaz')
        ->property('foo', 'bar')
        ->factory([ref('new_factory'), 'getInstance']);

    \$s->set('service_from_static_method', 'Bar\\FooClass')
        ->factory(['Bar\\FooClass', 'getInstance']);

    \$s->set('factory_simple', 'SimpleFactoryClass')
        ->deprecate()
        ->args(['foo'])
        ->private();

    \$s->set('factory_service_simple', 'Bar')
        ->factory([ref('factory_simple'), 'getInstance']);

    \$s->set('lazy_context', 'LazyContext')
        ->args([iterator(['k1' => ref('foo.baz'), 'k2' => ref('service_container')]), iterator([])]);

    \$s->set('lazy_context_ignore_invalid_ref', 'LazyContext')
        ->args([iterator([ref('foo.baz'), ref('invalid')->ignoreOnInvalid()]), iterator([])]);

    \$s->set('BAR', 'stdClass')->property('bar', ref('bar'));
    \$s->set('bar2', 'stdClass');
    \$s->set('BAR2', 'stdClass');

    \$s->set('tagged_iterator_foo', 'Bar')
        ->private()
        ->tag('foo');

    \$s->set('tagged_iterator', 'Bar')
        ->public()
        ->args([tagged('foo')]);

    \$s->set('runtime_error', 'stdClass')
        ->args([new Reference('errored_definition', ContainerInterface::RUNTIME_EXCEPTION_ON_INVALID_REFERENCE)])
        ->public();
    \$s->set('errored_definition', 'stdClass')->private();

    \$s->alias('alias_for_foo', 'foo')->private()->public();
    \$s->alias('alias_for_alias', ref('alias_for_foo'));
};
", "vendor/symfony/dependency-injection/Tests/Fixtures/config/services9.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/config/services9.php");
    }
}
