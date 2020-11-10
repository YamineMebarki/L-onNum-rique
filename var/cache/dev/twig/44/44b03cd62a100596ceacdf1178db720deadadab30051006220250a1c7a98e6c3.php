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

/* vendor/symfony/dependency-injection/Loader/schema/dic/services/services-1.0.xsd */
class __TwigTemplate_fa54134d07aadf5da8d08a53967ac66e9d88efb723d125b8d916c46de593a46d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/schema/dic/services/services-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/schema/dic/services/services-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/services\"
     xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
     targetNamespace=\"http://symfony.com/schema/dic/services\"
     elementFormDefault=\"qualified\">

  <xsd:annotation>
    <xsd:documentation><![CDATA[
      Symfony XML Services Schema, version 1.0
      Authors: Fabien Potencier

      This defines a way to describe PHP objects (services) and their
      dependencies.
    ]]></xsd:documentation>
  </xsd:annotation>

  <xsd:element name=\"container\" type=\"container\" />

  <xsd:complexType name=\"container\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        The root element of a service file.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:sequence>
      <xsd:group ref=\"foreign\" />
      <xsd:sequence minOccurs=\"0\">
        <xsd:element name=\"imports\" type=\"imports\" />
        <xsd:group ref=\"foreign\" />
      </xsd:sequence>
      <xsd:sequence minOccurs=\"0\">
        <xsd:element name=\"parameters\" type=\"parameters\" />
        <xsd:group ref=\"foreign\" />
      </xsd:sequence>
      <xsd:sequence minOccurs=\"0\">
        <xsd:element name=\"services\" type=\"services\" />
        <xsd:group ref=\"foreign\" />
      </xsd:sequence>
    </xsd:sequence>
  </xsd:complexType>

  <xsd:group name=\"foreign\">
    <xsd:sequence>
      <xsd:any namespace=\"##other\" processContents=\"lax\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
  </xsd:group>

  <xsd:complexType name=\"services\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Enclosing element for the definition of all services
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"service\" type=\"service\" minOccurs=\"1\" />
      <xsd:element name=\"prototype\" type=\"prototype\" minOccurs=\"0\" />
      <xsd:element name=\"defaults\" type=\"defaults\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"instanceof\" type=\"instanceof\" minOccurs=\"0\" />
    </xsd:choice>
  </xsd:complexType>

  <xsd:complexType name=\"imports\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Enclosing element for the import elements
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice minOccurs=\"1\" maxOccurs=\"unbounded\">
      <xsd:element name=\"import\" type=\"import\" />
    </xsd:choice>
  </xsd:complexType>

  <xsd:complexType name=\"import\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Import an external resource defining other services or parameters
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:attribute name=\"resource\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"ignore-errors\" type=\"boolean\" />
    <xsd:attribute name=\"type\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"callable\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"1\">
      <xsd:element name=\"service\" type=\"service\" minOccurs=\"0\" maxOccurs=\"1\" />
    </xsd:choice>
    <xsd:attribute name=\"service\" type=\"xsd:string\" />
    <xsd:attribute name=\"class\" type=\"xsd:string\" />
    <xsd:attribute name=\"method\" type=\"xsd:string\" />
    <xsd:attribute name=\"function\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"defaults\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Enclosing element for the service definitions' defaults for the current file
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"tag\" type=\"tag\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"bind\" type=\"bind\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"public\" type=\"boolean\" />
    <xsd:attribute name=\"autowire\" type=\"boolean\" />
    <xsd:attribute name=\"autoconfigure\" type=\"boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"service\">
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"file\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"argument\" type=\"argument\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"configurator\" type=\"callable\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"factory\" type=\"callable\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"deprecated\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"call\" type=\"call\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"tag\" type=\"tag\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"property\" type=\"property\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"bind\" type=\"bind\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
    <xsd:attribute name=\"class\" type=\"xsd:string\" />
    <xsd:attribute name=\"shared\" type=\"boolean\" />
    <xsd:attribute name=\"public\" type=\"boolean\" />
    <xsd:attribute name=\"synthetic\" type=\"boolean\" />
    <xsd:attribute name=\"lazy\" type=\"xsd:string\" />
    <xsd:attribute name=\"abstract\" type=\"boolean\" />
    <xsd:attribute name=\"alias\" type=\"xsd:string\" />
    <xsd:attribute name=\"parent\" type=\"xsd:string\" />
    <xsd:attribute name=\"decorates\" type=\"xsd:string\" />
    <xsd:attribute name=\"decoration-inner-name\" type=\"xsd:string\" />
    <xsd:attribute name=\"decoration-priority\" type=\"xsd:integer\" />
    <xsd:attribute name=\"autowire\" type=\"boolean\" />
    <xsd:attribute name=\"autoconfigure\" type=\"boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"instanceof\">
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"configurator\" type=\"callable\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"call\" type=\"call\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"tag\" type=\"tag\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"property\" type=\"property\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"bind\" type=\"bind\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"shared\" type=\"boolean\" />
    <xsd:attribute name=\"public\" type=\"boolean\" />
    <xsd:attribute name=\"lazy\" type=\"xsd:string\" />
    <xsd:attribute name=\"autowire\" type=\"boolean\" />
    <xsd:attribute name=\"autoconfigure\" type=\"boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"prototype\">
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"argument\" type=\"argument\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"configurator\" type=\"callable\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"factory\" type=\"callable\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"deprecated\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"call\" type=\"call\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"tag\" type=\"tag\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"property\" type=\"property\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"bind\" type=\"bind\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"exclude\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"namespace\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"resource\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"exclude\" type=\"xsd:string\" />
    <xsd:attribute name=\"shared\" type=\"boolean\" />
    <xsd:attribute name=\"public\" type=\"boolean\" />
    <xsd:attribute name=\"lazy\" type=\"xsd:string\" />
    <xsd:attribute name=\"abstract\" type=\"boolean\" />
    <xsd:attribute name=\"parent\" type=\"xsd:string\" />
    <xsd:attribute name=\"autowire\" type=\"boolean\" />
    <xsd:attribute name=\"autoconfigure\" type=\"boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"tag\">
    <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
    <xsd:anyAttribute namespace=\"##any\" processContents=\"lax\" />
  </xsd:complexType>

  <xsd:complexType name=\"parameters\">
    <xsd:choice minOccurs=\"1\" maxOccurs=\"unbounded\">
      <xsd:element name=\"parameter\" type=\"parameter\" />
    </xsd:choice>
    <xsd:attribute name=\"type\" type=\"parameter_type\" />
    <xsd:attribute name=\"key\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"parameter\" mixed=\"true\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xsd:element name=\"parameter\" type=\"parameter\" />
    </xsd:choice>
    <xsd:attribute name=\"type\" type=\"parameter_type\" />
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
    <xsd:attribute name=\"key\" type=\"xsd:string\" />
    <xsd:attribute name=\"on-invalid\" type=\"invalid_sequence\" />
  </xsd:complexType>

  <xsd:complexType name=\"property\" mixed=\"true\">
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"property\" type=\"property\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"service\" type=\"service\" />
    </xsd:choice>
    <xsd:attribute name=\"type\" type=\"argument_type\" />
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
    <xsd:attribute name=\"key\" type=\"xsd:string\" />
    <xsd:attribute name=\"name\" type=\"xsd:string\" />
    <xsd:attribute name=\"on-invalid\" type=\"invalid_sequence\" />
    <xsd:attribute name=\"tag\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"bind\" mixed=\"true\">
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"bind\" type=\"argument\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"service\" type=\"service\" />
    </xsd:choice>
    <xsd:attribute name=\"type\" type=\"argument_type\" />
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
    <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"on-invalid\" type=\"invalid_sequence\" />
    <xsd:attribute name=\"method\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"argument\" mixed=\"true\">
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"argument\" type=\"argument\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"service\" type=\"service\" />
    </xsd:choice>
    <xsd:attribute name=\"type\" type=\"argument_type\" />
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
    <xsd:attribute name=\"key\" type=\"xsd:string\" />
    <xsd:attribute name=\"index\" type=\"xsd:integer\" />
    <xsd:attribute name=\"on-invalid\" type=\"invalid_sequence\" />
    <xsd:attribute name=\"tag\" type=\"xsd:string\" />
    <xsd:attribute name=\"index-by\" type=\"xsd:string\" />
    <xsd:attribute name=\"default-index-method\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"call\">
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"argument\" type=\"argument\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"method\" type=\"xsd:string\" />
    <xsd:attribute name=\"returns-clone\" type=\"boolean\" />
  </xsd:complexType>

  <xsd:simpleType name=\"parameter_type\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"collection\" />
      <xsd:enumeration value=\"string\" />
      <xsd:enumeration value=\"constant\" />
      <xsd:enumeration value=\"binary\" />
    </xsd:restriction>
  </xsd:simpleType>

  <xsd:simpleType name=\"argument_type\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"collection\" />
      <xsd:enumeration value=\"service\" />
      <xsd:enumeration value=\"expression\" />
      <xsd:enumeration value=\"string\" />
      <xsd:enumeration value=\"constant\" />
      <xsd:enumeration value=\"iterator\" />
      <xsd:enumeration value=\"service_locator\" />
      <xsd:enumeration value=\"tagged\" />
      <xsd:enumeration value=\"tagged_locator\" />
    </xsd:restriction>
  </xsd:simpleType>

  <xsd:simpleType name=\"invalid_sequence\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"null\" />
      <xsd:enumeration value=\"ignore\" />
      <xsd:enumeration value=\"exception\" />
      <xsd:enumeration value=\"ignore_uninitialized\" />
    </xsd:restriction>
  </xsd:simpleType>

  <xsd:simpleType name=\"boolean\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:pattern value=\"(%.+%|true|false)\" />
    </xsd:restriction>
  </xsd:simpleType>
</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Loader/schema/dic/services/services-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/services\"
     xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
     targetNamespace=\"http://symfony.com/schema/dic/services\"
     elementFormDefault=\"qualified\">

  <xsd:annotation>
    <xsd:documentation><![CDATA[
      Symfony XML Services Schema, version 1.0
      Authors: Fabien Potencier

      This defines a way to describe PHP objects (services) and their
      dependencies.
    ]]></xsd:documentation>
  </xsd:annotation>

  <xsd:element name=\"container\" type=\"container\" />

  <xsd:complexType name=\"container\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        The root element of a service file.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:sequence>
      <xsd:group ref=\"foreign\" />
      <xsd:sequence minOccurs=\"0\">
        <xsd:element name=\"imports\" type=\"imports\" />
        <xsd:group ref=\"foreign\" />
      </xsd:sequence>
      <xsd:sequence minOccurs=\"0\">
        <xsd:element name=\"parameters\" type=\"parameters\" />
        <xsd:group ref=\"foreign\" />
      </xsd:sequence>
      <xsd:sequence minOccurs=\"0\">
        <xsd:element name=\"services\" type=\"services\" />
        <xsd:group ref=\"foreign\" />
      </xsd:sequence>
    </xsd:sequence>
  </xsd:complexType>

  <xsd:group name=\"foreign\">
    <xsd:sequence>
      <xsd:any namespace=\"##other\" processContents=\"lax\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
  </xsd:group>

  <xsd:complexType name=\"services\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Enclosing element for the definition of all services
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"service\" type=\"service\" minOccurs=\"1\" />
      <xsd:element name=\"prototype\" type=\"prototype\" minOccurs=\"0\" />
      <xsd:element name=\"defaults\" type=\"defaults\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"instanceof\" type=\"instanceof\" minOccurs=\"0\" />
    </xsd:choice>
  </xsd:complexType>

  <xsd:complexType name=\"imports\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Enclosing element for the import elements
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice minOccurs=\"1\" maxOccurs=\"unbounded\">
      <xsd:element name=\"import\" type=\"import\" />
    </xsd:choice>
  </xsd:complexType>

  <xsd:complexType name=\"import\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Import an external resource defining other services or parameters
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:attribute name=\"resource\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"ignore-errors\" type=\"boolean\" />
    <xsd:attribute name=\"type\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"callable\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"1\">
      <xsd:element name=\"service\" type=\"service\" minOccurs=\"0\" maxOccurs=\"1\" />
    </xsd:choice>
    <xsd:attribute name=\"service\" type=\"xsd:string\" />
    <xsd:attribute name=\"class\" type=\"xsd:string\" />
    <xsd:attribute name=\"method\" type=\"xsd:string\" />
    <xsd:attribute name=\"function\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"defaults\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Enclosing element for the service definitions' defaults for the current file
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"tag\" type=\"tag\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"bind\" type=\"bind\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"public\" type=\"boolean\" />
    <xsd:attribute name=\"autowire\" type=\"boolean\" />
    <xsd:attribute name=\"autoconfigure\" type=\"boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"service\">
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"file\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"argument\" type=\"argument\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"configurator\" type=\"callable\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"factory\" type=\"callable\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"deprecated\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"call\" type=\"call\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"tag\" type=\"tag\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"property\" type=\"property\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"bind\" type=\"bind\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
    <xsd:attribute name=\"class\" type=\"xsd:string\" />
    <xsd:attribute name=\"shared\" type=\"boolean\" />
    <xsd:attribute name=\"public\" type=\"boolean\" />
    <xsd:attribute name=\"synthetic\" type=\"boolean\" />
    <xsd:attribute name=\"lazy\" type=\"xsd:string\" />
    <xsd:attribute name=\"abstract\" type=\"boolean\" />
    <xsd:attribute name=\"alias\" type=\"xsd:string\" />
    <xsd:attribute name=\"parent\" type=\"xsd:string\" />
    <xsd:attribute name=\"decorates\" type=\"xsd:string\" />
    <xsd:attribute name=\"decoration-inner-name\" type=\"xsd:string\" />
    <xsd:attribute name=\"decoration-priority\" type=\"xsd:integer\" />
    <xsd:attribute name=\"autowire\" type=\"boolean\" />
    <xsd:attribute name=\"autoconfigure\" type=\"boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"instanceof\">
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"configurator\" type=\"callable\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"call\" type=\"call\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"tag\" type=\"tag\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"property\" type=\"property\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"bind\" type=\"bind\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"shared\" type=\"boolean\" />
    <xsd:attribute name=\"public\" type=\"boolean\" />
    <xsd:attribute name=\"lazy\" type=\"xsd:string\" />
    <xsd:attribute name=\"autowire\" type=\"boolean\" />
    <xsd:attribute name=\"autoconfigure\" type=\"boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"prototype\">
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"argument\" type=\"argument\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"configurator\" type=\"callable\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"factory\" type=\"callable\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"deprecated\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"call\" type=\"call\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"tag\" type=\"tag\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"property\" type=\"property\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"bind\" type=\"bind\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"exclude\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"namespace\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"resource\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"exclude\" type=\"xsd:string\" />
    <xsd:attribute name=\"shared\" type=\"boolean\" />
    <xsd:attribute name=\"public\" type=\"boolean\" />
    <xsd:attribute name=\"lazy\" type=\"xsd:string\" />
    <xsd:attribute name=\"abstract\" type=\"boolean\" />
    <xsd:attribute name=\"parent\" type=\"xsd:string\" />
    <xsd:attribute name=\"autowire\" type=\"boolean\" />
    <xsd:attribute name=\"autoconfigure\" type=\"boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"tag\">
    <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
    <xsd:anyAttribute namespace=\"##any\" processContents=\"lax\" />
  </xsd:complexType>

  <xsd:complexType name=\"parameters\">
    <xsd:choice minOccurs=\"1\" maxOccurs=\"unbounded\">
      <xsd:element name=\"parameter\" type=\"parameter\" />
    </xsd:choice>
    <xsd:attribute name=\"type\" type=\"parameter_type\" />
    <xsd:attribute name=\"key\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"parameter\" mixed=\"true\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xsd:element name=\"parameter\" type=\"parameter\" />
    </xsd:choice>
    <xsd:attribute name=\"type\" type=\"parameter_type\" />
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
    <xsd:attribute name=\"key\" type=\"xsd:string\" />
    <xsd:attribute name=\"on-invalid\" type=\"invalid_sequence\" />
  </xsd:complexType>

  <xsd:complexType name=\"property\" mixed=\"true\">
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"property\" type=\"property\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"service\" type=\"service\" />
    </xsd:choice>
    <xsd:attribute name=\"type\" type=\"argument_type\" />
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
    <xsd:attribute name=\"key\" type=\"xsd:string\" />
    <xsd:attribute name=\"name\" type=\"xsd:string\" />
    <xsd:attribute name=\"on-invalid\" type=\"invalid_sequence\" />
    <xsd:attribute name=\"tag\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"bind\" mixed=\"true\">
    <xsd:choice maxOccurs=\"unbounded\">
      <xsd:element name=\"bind\" type=\"argument\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"service\" type=\"service\" />
    </xsd:choice>
    <xsd:attribute name=\"type\" type=\"argument_type\" />
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
    <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"on-invalid\" type=\"invalid_sequence\" />
    <xsd:attribute name=\"method\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"argument\" mixed=\"true\">
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"argument\" type=\"argument\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"service\" type=\"service\" />
    </xsd:choice>
    <xsd:attribute name=\"type\" type=\"argument_type\" />
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
    <xsd:attribute name=\"key\" type=\"xsd:string\" />
    <xsd:attribute name=\"index\" type=\"xsd:integer\" />
    <xsd:attribute name=\"on-invalid\" type=\"invalid_sequence\" />
    <xsd:attribute name=\"tag\" type=\"xsd:string\" />
    <xsd:attribute name=\"index-by\" type=\"xsd:string\" />
    <xsd:attribute name=\"default-index-method\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"call\">
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"argument\" type=\"argument\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"method\" type=\"xsd:string\" />
    <xsd:attribute name=\"returns-clone\" type=\"boolean\" />
  </xsd:complexType>

  <xsd:simpleType name=\"parameter_type\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"collection\" />
      <xsd:enumeration value=\"string\" />
      <xsd:enumeration value=\"constant\" />
      <xsd:enumeration value=\"binary\" />
    </xsd:restriction>
  </xsd:simpleType>

  <xsd:simpleType name=\"argument_type\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"collection\" />
      <xsd:enumeration value=\"service\" />
      <xsd:enumeration value=\"expression\" />
      <xsd:enumeration value=\"string\" />
      <xsd:enumeration value=\"constant\" />
      <xsd:enumeration value=\"iterator\" />
      <xsd:enumeration value=\"service_locator\" />
      <xsd:enumeration value=\"tagged\" />
      <xsd:enumeration value=\"tagged_locator\" />
    </xsd:restriction>
  </xsd:simpleType>

  <xsd:simpleType name=\"invalid_sequence\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"null\" />
      <xsd:enumeration value=\"ignore\" />
      <xsd:enumeration value=\"exception\" />
      <xsd:enumeration value=\"ignore_uninitialized\" />
    </xsd:restriction>
  </xsd:simpleType>

  <xsd:simpleType name=\"boolean\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:pattern value=\"(%.+%|true|false)\" />
    </xsd:restriction>
  </xsd:simpleType>
</xsd:schema>
", "vendor/symfony/dependency-injection/Loader/schema/dic/services/services-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Loader/schema/dic/services/services-1.0.xsd");
    }
}
