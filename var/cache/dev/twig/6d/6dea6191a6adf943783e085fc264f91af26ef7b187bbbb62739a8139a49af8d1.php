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

/* vendor/symfony/dependency-injection/Tests/Fixtures/xml/services6.xml */
class __TwigTemplate_007b1b347908a9dbfb6e64bcc5bf034f86e05d16a39ddf9f2acf78c145e71bdc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services6.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services6.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <services>
    <service id=\"foo\" class=\"FooClass\" />
    <service id=\"baz\" class=\"BazClass\" />
    <service id=\"not_shared\" class=\"FooClass\" shared=\"false\" />
    <service id=\"file\" class=\"FooClass\">
      <file>%path%/foo.php</file>
    </service>
    <service id=\"arguments\" class=\"FooClass\">
      <argument>foo</argument>
      <argument type=\"service\" id=\"foo\" />
      <argument type=\"collection\">
        <argument>true</argument>
        <argument>false</argument>
      </argument>
    </service>
    <service id=\"configurator1\" class=\"FooClass\">
      <configurator function=\"sc_configure\" />
    </service>
    <service id=\"configurator2\" class=\"FooClass\">
      <configurator service=\"baz\" method=\"configure\" />
    </service>
    <service id=\"configurator3\" class=\"FooClass\">
      <configurator class=\"BazClass\" method=\"configureStatic\" />
    </service>
    <service id=\"method_call1\" class=\"FooClass\">
      <call method=\"setBar\" />
      <call method=\"setBar\">
        <argument type=\"expression\">service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")</argument>
      </call>
    </service>
    <service id=\"method_call2\" class=\"FooClass\">
      <call method=\"setBar\">
        <argument>foo</argument>
        <argument type=\"service\" id=\"foo\" />
        <argument type=\"collection\">
          <argument>true</argument>
          <argument>false</argument>
        </argument>
      </call>
    </service>
    <service id=\"request\" class=\"Request\" synthetic=\"true\" lazy=\"true\"/>
    <service id=\"decorator_service\" decorates=\"decorated\" />
    <service id=\"decorator_service_with_name\" decorates=\"decorated\" decoration-inner-name=\"decorated.pif-pouf\"/>
    <service id=\"decorator_service_with_name_and_priority\" decorates=\"decorated\" decoration-inner-name=\"decorated.pif-pouf\" decoration-priority=\"5\"/>
    <service id=\"new_factory1\" class=\"FooBarClass\">
      <factory function=\"factory\" />
    </service>
    <service id=\"new_factory2\" class=\"FooBarClass\">
      <factory service=\"baz\" method=\"getClass\" />
    </service>
    <service id=\"new_factory3\" class=\"FooBarClass\">
      <factory class=\"BazClass\" method=\"getInstance\" />
    </service>
    <service id=\"new_factory4\" class=\"BazClass\">
      <factory method=\"getInstance\" />
    </service>
    <service id=\"new_factory5\" class=\"FooBarClass\">
      <factory service=\"baz\" />
    </service>
    <service id=\"alias_for_foo\" alias=\"foo\" />
    <service id=\"another_alias_for_foo\" alias=\"foo\" public=\"false\" />
    <service id=\"0\" class=\"FooClass\" />
    <service id=\"1\" class=\"FooClass\">
      <argument type=\"service\" id=\"0\" />
    </service>
  </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services6.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <services>
    <service id=\"foo\" class=\"FooClass\" />
    <service id=\"baz\" class=\"BazClass\" />
    <service id=\"not_shared\" class=\"FooClass\" shared=\"false\" />
    <service id=\"file\" class=\"FooClass\">
      <file>%path%/foo.php</file>
    </service>
    <service id=\"arguments\" class=\"FooClass\">
      <argument>foo</argument>
      <argument type=\"service\" id=\"foo\" />
      <argument type=\"collection\">
        <argument>true</argument>
        <argument>false</argument>
      </argument>
    </service>
    <service id=\"configurator1\" class=\"FooClass\">
      <configurator function=\"sc_configure\" />
    </service>
    <service id=\"configurator2\" class=\"FooClass\">
      <configurator service=\"baz\" method=\"configure\" />
    </service>
    <service id=\"configurator3\" class=\"FooClass\">
      <configurator class=\"BazClass\" method=\"configureStatic\" />
    </service>
    <service id=\"method_call1\" class=\"FooClass\">
      <call method=\"setBar\" />
      <call method=\"setBar\">
        <argument type=\"expression\">service(\"foo\").foo() ~ (container.hasParameter(\"foo\") ? parameter(\"foo\") : \"default\")</argument>
      </call>
    </service>
    <service id=\"method_call2\" class=\"FooClass\">
      <call method=\"setBar\">
        <argument>foo</argument>
        <argument type=\"service\" id=\"foo\" />
        <argument type=\"collection\">
          <argument>true</argument>
          <argument>false</argument>
        </argument>
      </call>
    </service>
    <service id=\"request\" class=\"Request\" synthetic=\"true\" lazy=\"true\"/>
    <service id=\"decorator_service\" decorates=\"decorated\" />
    <service id=\"decorator_service_with_name\" decorates=\"decorated\" decoration-inner-name=\"decorated.pif-pouf\"/>
    <service id=\"decorator_service_with_name_and_priority\" decorates=\"decorated\" decoration-inner-name=\"decorated.pif-pouf\" decoration-priority=\"5\"/>
    <service id=\"new_factory1\" class=\"FooBarClass\">
      <factory function=\"factory\" />
    </service>
    <service id=\"new_factory2\" class=\"FooBarClass\">
      <factory service=\"baz\" method=\"getClass\" />
    </service>
    <service id=\"new_factory3\" class=\"FooBarClass\">
      <factory class=\"BazClass\" method=\"getInstance\" />
    </service>
    <service id=\"new_factory4\" class=\"BazClass\">
      <factory method=\"getInstance\" />
    </service>
    <service id=\"new_factory5\" class=\"FooBarClass\">
      <factory service=\"baz\" />
    </service>
    <service id=\"alias_for_foo\" alias=\"foo\" />
    <service id=\"another_alias_for_foo\" alias=\"foo\" public=\"false\" />
    <service id=\"0\" class=\"FooClass\" />
    <service id=\"1\" class=\"FooClass\">
      <argument type=\"service\" id=\"0\" />
    </service>
  </services>
</container>
", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services6.xml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/xml/services6.xml");
    }
}
