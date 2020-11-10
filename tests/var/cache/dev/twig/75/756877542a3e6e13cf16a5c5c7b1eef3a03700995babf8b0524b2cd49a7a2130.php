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

/* vendor/symfony/dependency-injection/Tests/Fixtures/xml/services9.xml */
class __TwigTemplate_4141456736b3df827368b044b090103f09d9e043b23e63f4219465dde71a8b86 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services9.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services9.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<container xmlns=\"http://symfony.com/schema/dic/services\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <parameters>
    <parameter key=\"baz_class\">BazClass</parameter>
    <parameter key=\"foo_class\">Bar\\FooClass</parameter>
    <parameter key=\"foo\">bar</parameter>
  </parameters>
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"foo\" class=\"Bar\\FooClass\" public=\"true\">
      <tag name=\"foo\" foo=\"foo\"/>
      <tag name=\"foo\" bar=\"bar\" baz=\"baz\"/>
      <argument>foo</argument>
      <argument type=\"service\" id=\"foo.baz\"/>
      <argument type=\"collection\">
        <argument key=\"%foo%\">foo is %foo%</argument>
        <argument key=\"foobar\">%foo%</argument>
      </argument>
      <argument>true</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <property name=\"foo\">bar</property>
      <property name=\"moo\" type=\"service\" id=\"foo.baz\"/>
      <property name=\"qux\" type=\"collection\">
        <property key=\"%foo%\">foo is %foo%</property>
        <property key=\"foobar\">%foo%</property>
      </property>
      <call method=\"setBar\">
        <argument type=\"service\" id=\"bar\"/>
      </call>
      <call method=\"initialize\"/>
      <factory class=\"Bar\\FooClass\" method=\"getInstance\"/>
      <configurator function=\"sc_configure\"/>
    </service>
    <service id=\"foo.baz\" class=\"%baz_class%\" public=\"true\">
      <factory class=\"%baz_class%\" method=\"getInstance\"/>
      <configurator class=\"%baz_class%\" method=\"configureStatic1\"/>
    </service>
    <service id=\"bar\" class=\"Bar\\FooClass\" public=\"true\">
      <argument>foo</argument>
      <argument type=\"service\" id=\"foo.baz\"/>
      <argument>%foo_bar%</argument>
      <configurator service=\"foo.baz\" method=\"configure\"/>
    </service>
    <service id=\"foo_bar\" class=\"%foo_class%\" shared=\"false\" public=\"true\">
      <argument type=\"service\" id=\"deprecated_service\"/>
    </service>
    <service id=\"method_call1\" class=\"Bar\\FooClass\" public=\"true\">
      <file>%path%foo.php</file>
      <call method=\"setBar\">
        <argument type=\"service\" id=\"foo\"/>
      </call>
      <call method=\"setBar\">
        <argument type=\"service\" id=\"foo2\" on-invalid=\"null\"/>
      </call>
      <call method=\"setBar\">
        <argument type=\"service\" id=\"foo3\" on-invalid=\"ignore\"/>
      </call>
      <call method=\"setBar\">
        <argument type=\"service\" id=\"foobaz\" on-invalid=\"ignore\"/>
      </call>
      <call method=\"setBar\">
        <argument type=\"expression\">service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")</argument>
      </call>
    </service>
    <service id=\"foo_with_inline\" class=\"Foo\" public=\"true\">
      <call method=\"setBar\">
        <argument type=\"service\" id=\"inlined\"/>
      </call>
    </service>
    <service id=\"inlined\" class=\"Bar\" public=\"false\">
      <property name=\"pub\">pub</property>
      <call method=\"setBaz\">
        <argument type=\"service\" id=\"baz\"/>
      </call>
    </service>
    <service id=\"baz\" class=\"Baz\" public=\"true\">
      <call method=\"setFoo\">
        <argument type=\"service\" id=\"foo_with_inline\"/>
      </call>
    </service>
    <service id=\"request\" class=\"Request\" public=\"true\" synthetic=\"true\"/>
    <service id=\"configurator_service\" class=\"ConfClass\" public=\"false\">
      <call method=\"setFoo\">
        <argument type=\"service\" id=\"baz\"/>
      </call>
    </service>
    <service id=\"configured_service\" class=\"stdClass\" public=\"true\">
      <configurator service=\"configurator_service\" method=\"configureStdClass\"/>
    </service>
    <service id=\"configurator_service_simple\" class=\"ConfClass\" public=\"false\">
      <argument>bar</argument>
    </service>
    <service id=\"configured_service_simple\" class=\"stdClass\" public=\"true\">
      <configurator service=\"configurator_service_simple\" method=\"configureStdClass\"/>
    </service>
    <service id=\"decorated\" class=\"stdClass\" public=\"true\"/>
    <service id=\"decorator_service\" class=\"stdClass\" public=\"true\" decorates=\"decorated\"/>
    <service id=\"decorator_service_with_name\" class=\"stdClass\" public=\"true\" decorates=\"decorated\" decoration-inner-name=\"decorated.pif-pouf\"/>
    <service id=\"deprecated_service\" class=\"stdClass\" public=\"true\">
      <deprecated>The \"%service_id%\" service is deprecated. You should stop using it, as it will be removed in the future.</deprecated>
    </service>
    <service id=\"new_factory\" class=\"FactoryClass\" public=\"false\">
      <property name=\"foo\">bar</property>
    </service>
    <service id=\"factory_service\" class=\"Bar\" public=\"true\">
      <factory service=\"foo.baz\" method=\"getInstance\"/>
    </service>
    <service id=\"new_factory_service\" class=\"FooBarBaz\" public=\"true\">
      <property name=\"foo\">bar</property>
      <factory service=\"new_factory\" method=\"getInstance\"/>
    </service>
    <service id=\"service_from_static_method\" class=\"Bar\\FooClass\" public=\"true\">
      <factory class=\"Bar\\FooClass\" method=\"getInstance\"/>
    </service>
    <service id=\"factory_simple\" class=\"SimpleFactoryClass\" public=\"false\">
      <argument>foo</argument>
      <deprecated>The \"%service_id%\" service is deprecated. You should stop using it, as it will be removed in the future.</deprecated>
    </service>
    <service id=\"factory_service_simple\" class=\"Bar\" public=\"true\">
      <factory service=\"factory_simple\" method=\"getInstance\"/>
    </service>
    <service id=\"lazy_context\" class=\"LazyContext\" public=\"true\">
      <argument type=\"iterator\">
        <argument key=\"k1\" type=\"service\" id=\"foo.baz\"/>
        <argument key=\"k2\" type=\"service\" id=\"service_container\"/>
      </argument>
      <argument type=\"iterator\"/>
    </service>
    <service id=\"lazy_context_ignore_invalid_ref\" class=\"LazyContext\" public=\"true\">
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"foo.baz\"/>
        <argument type=\"service\" id=\"invalid\" on-invalid=\"ignore\"/>
      </argument>
      <argument type=\"iterator\"/>
    </service>
    <service id=\"BAR\" class=\"stdClass\" public=\"true\">
      <property name=\"bar\" type=\"service\" id=\"bar\"/>
    </service>
    <service id=\"bar2\" class=\"stdClass\" public=\"true\"/>
    <service id=\"BAR2\" class=\"stdClass\" public=\"true\"/>
    <service id=\"tagged_iterator_foo\" class=\"Bar\" public=\"false\">
      <tag name=\"foo\"/>
    </service>
    <service id=\"tagged_iterator\" class=\"Bar\" public=\"true\">
      <argument type=\"tagged\" tag=\"foo\"/>
    </service>
    <service id=\"runtime_error\" class=\"stdClass\" public=\"true\">
      <argument type=\"service\" id=\"errored_definition\"/>
    </service>
    <service id=\"errored_definition\" class=\"stdClass\"/>
    <service id=\"Psr\\Container\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"alias_for_foo\" alias=\"foo\" public=\"true\"/>
    <service id=\"alias_for_alias\" alias=\"foo\" public=\"true\"/>
  </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services9.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<container xmlns=\"http://symfony.com/schema/dic/services\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <parameters>
    <parameter key=\"baz_class\">BazClass</parameter>
    <parameter key=\"foo_class\">Bar\\FooClass</parameter>
    <parameter key=\"foo\">bar</parameter>
  </parameters>
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"foo\" class=\"Bar\\FooClass\" public=\"true\">
      <tag name=\"foo\" foo=\"foo\"/>
      <tag name=\"foo\" bar=\"bar\" baz=\"baz\"/>
      <argument>foo</argument>
      <argument type=\"service\" id=\"foo.baz\"/>
      <argument type=\"collection\">
        <argument key=\"%foo%\">foo is %foo%</argument>
        <argument key=\"foobar\">%foo%</argument>
      </argument>
      <argument>true</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <property name=\"foo\">bar</property>
      <property name=\"moo\" type=\"service\" id=\"foo.baz\"/>
      <property name=\"qux\" type=\"collection\">
        <property key=\"%foo%\">foo is %foo%</property>
        <property key=\"foobar\">%foo%</property>
      </property>
      <call method=\"setBar\">
        <argument type=\"service\" id=\"bar\"/>
      </call>
      <call method=\"initialize\"/>
      <factory class=\"Bar\\FooClass\" method=\"getInstance\"/>
      <configurator function=\"sc_configure\"/>
    </service>
    <service id=\"foo.baz\" class=\"%baz_class%\" public=\"true\">
      <factory class=\"%baz_class%\" method=\"getInstance\"/>
      <configurator class=\"%baz_class%\" method=\"configureStatic1\"/>
    </service>
    <service id=\"bar\" class=\"Bar\\FooClass\" public=\"true\">
      <argument>foo</argument>
      <argument type=\"service\" id=\"foo.baz\"/>
      <argument>%foo_bar%</argument>
      <configurator service=\"foo.baz\" method=\"configure\"/>
    </service>
    <service id=\"foo_bar\" class=\"%foo_class%\" shared=\"false\" public=\"true\">
      <argument type=\"service\" id=\"deprecated_service\"/>
    </service>
    <service id=\"method_call1\" class=\"Bar\\FooClass\" public=\"true\">
      <file>%path%foo.php</file>
      <call method=\"setBar\">
        <argument type=\"service\" id=\"foo\"/>
      </call>
      <call method=\"setBar\">
        <argument type=\"service\" id=\"foo2\" on-invalid=\"null\"/>
      </call>
      <call method=\"setBar\">
        <argument type=\"service\" id=\"foo3\" on-invalid=\"ignore\"/>
      </call>
      <call method=\"setBar\">
        <argument type=\"service\" id=\"foobaz\" on-invalid=\"ignore\"/>
      </call>
      <call method=\"setBar\">
        <argument type=\"expression\">service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")</argument>
      </call>
    </service>
    <service id=\"foo_with_inline\" class=\"Foo\" public=\"true\">
      <call method=\"setBar\">
        <argument type=\"service\" id=\"inlined\"/>
      </call>
    </service>
    <service id=\"inlined\" class=\"Bar\" public=\"false\">
      <property name=\"pub\">pub</property>
      <call method=\"setBaz\">
        <argument type=\"service\" id=\"baz\"/>
      </call>
    </service>
    <service id=\"baz\" class=\"Baz\" public=\"true\">
      <call method=\"setFoo\">
        <argument type=\"service\" id=\"foo_with_inline\"/>
      </call>
    </service>
    <service id=\"request\" class=\"Request\" public=\"true\" synthetic=\"true\"/>
    <service id=\"configurator_service\" class=\"ConfClass\" public=\"false\">
      <call method=\"setFoo\">
        <argument type=\"service\" id=\"baz\"/>
      </call>
    </service>
    <service id=\"configured_service\" class=\"stdClass\" public=\"true\">
      <configurator service=\"configurator_service\" method=\"configureStdClass\"/>
    </service>
    <service id=\"configurator_service_simple\" class=\"ConfClass\" public=\"false\">
      <argument>bar</argument>
    </service>
    <service id=\"configured_service_simple\" class=\"stdClass\" public=\"true\">
      <configurator service=\"configurator_service_simple\" method=\"configureStdClass\"/>
    </service>
    <service id=\"decorated\" class=\"stdClass\" public=\"true\"/>
    <service id=\"decorator_service\" class=\"stdClass\" public=\"true\" decorates=\"decorated\"/>
    <service id=\"decorator_service_with_name\" class=\"stdClass\" public=\"true\" decorates=\"decorated\" decoration-inner-name=\"decorated.pif-pouf\"/>
    <service id=\"deprecated_service\" class=\"stdClass\" public=\"true\">
      <deprecated>The \"%service_id%\" service is deprecated. You should stop using it, as it will be removed in the future.</deprecated>
    </service>
    <service id=\"new_factory\" class=\"FactoryClass\" public=\"false\">
      <property name=\"foo\">bar</property>
    </service>
    <service id=\"factory_service\" class=\"Bar\" public=\"true\">
      <factory service=\"foo.baz\" method=\"getInstance\"/>
    </service>
    <service id=\"new_factory_service\" class=\"FooBarBaz\" public=\"true\">
      <property name=\"foo\">bar</property>
      <factory service=\"new_factory\" method=\"getInstance\"/>
    </service>
    <service id=\"service_from_static_method\" class=\"Bar\\FooClass\" public=\"true\">
      <factory class=\"Bar\\FooClass\" method=\"getInstance\"/>
    </service>
    <service id=\"factory_simple\" class=\"SimpleFactoryClass\" public=\"false\">
      <argument>foo</argument>
      <deprecated>The \"%service_id%\" service is deprecated. You should stop using it, as it will be removed in the future.</deprecated>
    </service>
    <service id=\"factory_service_simple\" class=\"Bar\" public=\"true\">
      <factory service=\"factory_simple\" method=\"getInstance\"/>
    </service>
    <service id=\"lazy_context\" class=\"LazyContext\" public=\"true\">
      <argument type=\"iterator\">
        <argument key=\"k1\" type=\"service\" id=\"foo.baz\"/>
        <argument key=\"k2\" type=\"service\" id=\"service_container\"/>
      </argument>
      <argument type=\"iterator\"/>
    </service>
    <service id=\"lazy_context_ignore_invalid_ref\" class=\"LazyContext\" public=\"true\">
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"foo.baz\"/>
        <argument type=\"service\" id=\"invalid\" on-invalid=\"ignore\"/>
      </argument>
      <argument type=\"iterator\"/>
    </service>
    <service id=\"BAR\" class=\"stdClass\" public=\"true\">
      <property name=\"bar\" type=\"service\" id=\"bar\"/>
    </service>
    <service id=\"bar2\" class=\"stdClass\" public=\"true\"/>
    <service id=\"BAR2\" class=\"stdClass\" public=\"true\"/>
    <service id=\"tagged_iterator_foo\" class=\"Bar\" public=\"false\">
      <tag name=\"foo\"/>
    </service>
    <service id=\"tagged_iterator\" class=\"Bar\" public=\"true\">
      <argument type=\"tagged\" tag=\"foo\"/>
    </service>
    <service id=\"runtime_error\" class=\"stdClass\" public=\"true\">
      <argument type=\"service\" id=\"errored_definition\"/>
    </service>
    <service id=\"errored_definition\" class=\"stdClass\"/>
    <service id=\"Psr\\Container\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"alias_for_foo\" alias=\"foo\" public=\"true\"/>
    <service id=\"alias_for_alias\" alias=\"foo\" public=\"true\"/>
  </services>
</container>
", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services9.xml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/xml/services9.xml");
    }
}
