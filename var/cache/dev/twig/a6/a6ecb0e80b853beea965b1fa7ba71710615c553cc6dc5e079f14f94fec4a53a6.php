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

/* vendor/symfony/validator/Mapping/Loader/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd */
class __TwigTemplate_46f5abe9bab8483918344c44166e3613c2f7858237ccbf6446d5d889b7b7d67c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/constraint-mapping\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/constraint-mapping\"
    elementFormDefault=\"qualified\">

  <xsd:annotation>
    <xsd:documentation><![CDATA[
      Symfony Validator Constraint Mapping Schema, version 1.0
      Authors: Bernhard Schussek

      A constraint mapping connects classes, properties and getters with
      validation constraints.
    ]]></xsd:documentation>
  </xsd:annotation>
  
  <xsd:element name=\"constraint-mapping\" type=\"constraint-mapping\" />
  
  <xsd:complexType name=\"constraint-mapping\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        The root element of the constraint mapping definition.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:sequence>
      <xsd:element name=\"namespace\" type=\"namespace\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"class\" type=\"class\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
  </xsd:complexType>
  
  <xsd:complexType name=\"namespace\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains the abbreviation for a namespace.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:string\">
        <xsd:attribute name=\"prefix\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>
  
  <xsd:complexType name=\"class\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains constraints for a single class.
        
        Nested elements may be class constraints, property and/or getter 
        definitions.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xsd:element name=\"group-sequence-provider\" type=\"group-sequence-provider\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"group-sequence\" type=\"group-sequence\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"constraint\" type=\"constraint\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"property\" type=\"property\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"getter\" type=\"getter\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
  </xsd:complexType>

  <xsd:complexType name=\"group-sequence\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains the group sequence of a class. Each group should be written
        into a \"value\" tag.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:sequence>
      <xsd:element name=\"value\" type=\"value\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
  </xsd:complexType>
  
  <xsd:complexType name=\"group-sequence-provider\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Defines the name of the group sequence provider for a class.
      ]]></xsd:documentation>
    </xsd:annotation>
  </xsd:complexType>
  
  <xsd:complexType name=\"property\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains constraints for a single property. The name of the property
        should be given in the \"name\" option.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:sequence>
      <xsd:element name=\"constraint\" type=\"constraint\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
    <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
  </xsd:complexType>
  
  <xsd:complexType name=\"getter\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains constraints for a getter method. The name of the corresponding
        property should be given in the \"property\" option.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:sequence>
      <xsd:element name=\"constraint\" type=\"constraint\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
    <xsd:attribute name=\"property\" type=\"xsd:string\" use=\"required\" />
  </xsd:complexType>
  
  <xsd:complexType name=\"constraint\" mixed=\"true\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains a constraint definition. The name of the constraint should be
        given in the \"name\" option.
        
        May contain a single value, multiple \"constraint\" elements, 
        multiple \"value\" elements or multiple \"option\" elements.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"constraint\" type=\"constraint\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"option\" type=\"option\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"value\" type=\"value\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />    
  </xsd:complexType>
  
  <xsd:complexType name=\"option\" mixed=\"true\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains a constraint option definition. The name of the option
        should be given in the \"name\" option.
        
        May contain a single value, multiple \"value\" elements or multiple
        \"constraint\" elements.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"constraint\" type=\"constraint\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"value\" type=\"value\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />  
  </xsd:complexType>
  
  <xsd:complexType name=\"value\" mixed=\"true\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        A value of an element.
        
        May contain a single value, multiple \"value\" elements or multiple
        \"constraint\" elements.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"constraint\" type=\"constraint\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"value\" type=\"value\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"optional\" /> 
  </xsd:complexType>
</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Loader/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/constraint-mapping\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/constraint-mapping\"
    elementFormDefault=\"qualified\">

  <xsd:annotation>
    <xsd:documentation><![CDATA[
      Symfony Validator Constraint Mapping Schema, version 1.0
      Authors: Bernhard Schussek

      A constraint mapping connects classes, properties and getters with
      validation constraints.
    ]]></xsd:documentation>
  </xsd:annotation>
  
  <xsd:element name=\"constraint-mapping\" type=\"constraint-mapping\" />
  
  <xsd:complexType name=\"constraint-mapping\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        The root element of the constraint mapping definition.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:sequence>
      <xsd:element name=\"namespace\" type=\"namespace\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"class\" type=\"class\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
  </xsd:complexType>
  
  <xsd:complexType name=\"namespace\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains the abbreviation for a namespace.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:string\">
        <xsd:attribute name=\"prefix\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>
  
  <xsd:complexType name=\"class\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains constraints for a single class.
        
        Nested elements may be class constraints, property and/or getter 
        definitions.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xsd:element name=\"group-sequence-provider\" type=\"group-sequence-provider\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"group-sequence\" type=\"group-sequence\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"constraint\" type=\"constraint\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"property\" type=\"property\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"getter\" type=\"getter\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
  </xsd:complexType>

  <xsd:complexType name=\"group-sequence\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains the group sequence of a class. Each group should be written
        into a \"value\" tag.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:sequence>
      <xsd:element name=\"value\" type=\"value\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
  </xsd:complexType>
  
  <xsd:complexType name=\"group-sequence-provider\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Defines the name of the group sequence provider for a class.
      ]]></xsd:documentation>
    </xsd:annotation>
  </xsd:complexType>
  
  <xsd:complexType name=\"property\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains constraints for a single property. The name of the property
        should be given in the \"name\" option.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:sequence>
      <xsd:element name=\"constraint\" type=\"constraint\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
    <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
  </xsd:complexType>
  
  <xsd:complexType name=\"getter\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains constraints for a getter method. The name of the corresponding
        property should be given in the \"property\" option.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:sequence>
      <xsd:element name=\"constraint\" type=\"constraint\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
    <xsd:attribute name=\"property\" type=\"xsd:string\" use=\"required\" />
  </xsd:complexType>
  
  <xsd:complexType name=\"constraint\" mixed=\"true\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains a constraint definition. The name of the constraint should be
        given in the \"name\" option.
        
        May contain a single value, multiple \"constraint\" elements, 
        multiple \"value\" elements or multiple \"option\" elements.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"constraint\" type=\"constraint\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"option\" type=\"option\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"value\" type=\"value\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />    
  </xsd:complexType>
  
  <xsd:complexType name=\"option\" mixed=\"true\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        Contains a constraint option definition. The name of the option
        should be given in the \"name\" option.
        
        May contain a single value, multiple \"value\" elements or multiple
        \"constraint\" elements.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"constraint\" type=\"constraint\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"value\" type=\"value\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />  
  </xsd:complexType>
  
  <xsd:complexType name=\"value\" mixed=\"true\">
    <xsd:annotation>
      <xsd:documentation><![CDATA[
        A value of an element.
        
        May contain a single value, multiple \"value\" elements or multiple
        \"constraint\" elements.
      ]]></xsd:documentation>
    </xsd:annotation>
    <xsd:choice minOccurs=\"0\">
      <xsd:element name=\"constraint\" type=\"constraint\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"value\" type=\"value\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xsd:choice>
    <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"optional\" /> 
  </xsd:complexType>
</xsd:schema>
", "vendor/symfony/validator/Mapping/Loader/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Loader/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd");
    }
}
