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

/* vendor/symfony/serializer/Mapping/Loader/schema/dic/serializer-mapping/serializer-mapping-1.0.xsd */
class __TwigTemplate_9dc06092e101fd1772558a6f63acc6d636ae78546403d524d396c3de781efaaf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Loader/schema/dic/serializer-mapping/serializer-mapping-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Loader/schema/dic/serializer-mapping/serializer-mapping-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/serializer-mapping\"
            xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
            targetNamespace=\"http://symfony.com/schema/dic/serializer-mapping\"
            elementFormDefault=\"qualified\">

    <xsd:annotation>
        <xsd:documentation><![CDATA[
      Symfony Serializer Mapping Schema, version 1.0
      Authors: Kévin Dunglas, Samuel Roze

      A serializer mapping connects attributes with serialization groups.
    ]]></xsd:documentation>
    </xsd:annotation>

    <xsd:element name=\"serializer\" type=\"serializer\" />

    <xsd:complexType name=\"serializer\">
        <xsd:annotation>
            <xsd:documentation><![CDATA[
        The root element of the serializer mapping definition.
      ]]></xsd:documentation>
        </xsd:annotation>
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"class\" type=\"class\" />
        </xsd:choice>
    </xsd:complexType>

    <xsd:complexType name=\"class\">
        <xsd:annotation>
            <xsd:documentation><![CDATA[
        Contains serialization groups for a single class.

        Nested elements may be class property and/or getter definitions.
      ]]></xsd:documentation>
        </xsd:annotation>
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"attribute\" type=\"attribute\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"discriminator-map\" type=\"discriminator-map\" />
        </xsd:choice>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
    </xsd:complexType>

    <xsd:complexType name=\"discriminator-map\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"mapping\" type=\"discriminator-map-mapping\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"type-property\" type=\"xsd:string\" use=\"required\" />
    </xsd:complexType>
    
    <xsd:complexType name=\"discriminator-map-mapping\">
        <xsd:attribute name=\"type\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"class\" type=\"xsd:string\" use=\"required\" />
    </xsd:complexType>

    <xsd:complexType name=\"attribute\">
        <xsd:annotation>
            <xsd:documentation><![CDATA[
        Contains serialization groups and max depth for attributes. The name of the attribute should be given in the \"name\" option.
      ]]></xsd:documentation>
        </xsd:annotation>
        <xsd:sequence minOccurs=\"0\">
            <xsd:element name=\"group\" type=\"xsd:string\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"max-depth\">
            <xsd:simpleType>
                <xsd:restriction base=\"xsd:integer\">
                    <xsd:minInclusive value=\"0\" />
                </xsd:restriction>
            </xsd:simpleType>
        </xsd:attribute>
        <xsd:attribute name=\"serialized-name\">
            <xsd:simpleType>
                <xsd:restriction base=\"xsd:string\">
                    <xsd:minLength value=\"1\" />
                </xsd:restriction>
            </xsd:simpleType>
        </xsd:attribute>
    </xsd:complexType>

</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Mapping/Loader/schema/dic/serializer-mapping/serializer-mapping-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/serializer-mapping\"
            xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
            targetNamespace=\"http://symfony.com/schema/dic/serializer-mapping\"
            elementFormDefault=\"qualified\">

    <xsd:annotation>
        <xsd:documentation><![CDATA[
      Symfony Serializer Mapping Schema, version 1.0
      Authors: Kévin Dunglas, Samuel Roze

      A serializer mapping connects attributes with serialization groups.
    ]]></xsd:documentation>
    </xsd:annotation>

    <xsd:element name=\"serializer\" type=\"serializer\" />

    <xsd:complexType name=\"serializer\">
        <xsd:annotation>
            <xsd:documentation><![CDATA[
        The root element of the serializer mapping definition.
      ]]></xsd:documentation>
        </xsd:annotation>
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"class\" type=\"class\" />
        </xsd:choice>
    </xsd:complexType>

    <xsd:complexType name=\"class\">
        <xsd:annotation>
            <xsd:documentation><![CDATA[
        Contains serialization groups for a single class.

        Nested elements may be class property and/or getter definitions.
      ]]></xsd:documentation>
        </xsd:annotation>
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"attribute\" type=\"attribute\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"discriminator-map\" type=\"discriminator-map\" />
        </xsd:choice>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
    </xsd:complexType>

    <xsd:complexType name=\"discriminator-map\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"mapping\" type=\"discriminator-map-mapping\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"type-property\" type=\"xsd:string\" use=\"required\" />
    </xsd:complexType>
    
    <xsd:complexType name=\"discriminator-map-mapping\">
        <xsd:attribute name=\"type\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"class\" type=\"xsd:string\" use=\"required\" />
    </xsd:complexType>

    <xsd:complexType name=\"attribute\">
        <xsd:annotation>
            <xsd:documentation><![CDATA[
        Contains serialization groups and max depth for attributes. The name of the attribute should be given in the \"name\" option.
      ]]></xsd:documentation>
        </xsd:annotation>
        <xsd:sequence minOccurs=\"0\">
            <xsd:element name=\"group\" type=\"xsd:string\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"max-depth\">
            <xsd:simpleType>
                <xsd:restriction base=\"xsd:integer\">
                    <xsd:minInclusive value=\"0\" />
                </xsd:restriction>
            </xsd:simpleType>
        </xsd:attribute>
        <xsd:attribute name=\"serialized-name\">
            <xsd:simpleType>
                <xsd:restriction base=\"xsd:string\">
                    <xsd:minLength value=\"1\" />
                </xsd:restriction>
            </xsd:simpleType>
        </xsd:attribute>
    </xsd:complexType>

</xsd:schema>
", "vendor/symfony/serializer/Mapping/Loader/schema/dic/serializer-mapping/serializer-mapping-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/Loader/schema/dic/serializer-mapping/serializer-mapping-1.0.xsd");
    }
}
