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

/* vendor/doctrine/orm/doctrine-mapping.xsd */
class __TwigTemplate_94454d6d78b88aa2a01f919ce71debf81b7437b94b8ebb7e03960e105f8dd2eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/doctrine-mapping.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/doctrine-mapping.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<xs:schema xmlns:xs=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://doctrine-project.org/schemas/orm/doctrine-mapping\"
    xmlns:orm=\"http://doctrine-project.org/schemas/orm/doctrine-mapping\"
    elementFormDefault=\"qualified\">

  <xs:annotation>
    <xs:documentation><![CDATA[
       This is the XML Schema for the object/relational
       mapping file used by the Doctrine ORM.
     ]]></xs:documentation>
  </xs:annotation>

  <xs:element name=\"doctrine-mapping\">
    <xs:complexType>
      <xs:sequence>
        <xs:element name=\"mapped-superclass\" type=\"orm:mapped-superclass\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        <xs:element name=\"entity\" type=\"orm:entity\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        <xs:element name=\"embeddable\" type=\"orm:embeddable\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
      </xs:sequence>
      <xs:anyAttribute namespace=\"##other\"/>
    </xs:complexType>
  </xs:element>

  <xs:complexType name=\"emptyType\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"cascade-type\">
    <xs:sequence>
      <xs:element name=\"cascade-all\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:element name=\"cascade-persist\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:element name=\"cascade-merge\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:element name=\"cascade-remove\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:element name=\"cascade-refresh\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:element name=\"cascade-detach\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:simpleType name=\"lifecycle-callback-type\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"prePersist\"/>
      <xs:enumeration value=\"postPersist\"/>
      <xs:enumeration value=\"preUpdate\"/>
      <xs:enumeration value=\"postUpdate\"/>
      <xs:enumeration value=\"preRemove\"/>
      <xs:enumeration value=\"postRemove\"/>
      <xs:enumeration value=\"postLoad\"/>
      <xs:enumeration value=\"preFlush\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:simpleType name=\"cache-usage-type\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"READ_ONLY\"/>
      <xs:enumeration value=\"READ_WRITE\"/>
      <xs:enumeration value=\"NONSTRICT_READ_WRITE\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:complexType name=\"lifecycle-callback\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"type\" type=\"orm:lifecycle-callback-type\" use=\"required\" />
    <xs:attribute name=\"method\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"lifecycle-callbacks\">
    <xs:sequence>
      <xs:element name=\"lifecycle-callback\" type=\"orm:lifecycle-callback\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"named-query\">
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"query\" type=\"xs:string\" use=\"required\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"named-queries\">
    <xs:sequence>
      <xs:element name=\"named-query\" type=\"orm:named-query\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"named-native-query\">
    <xs:sequence>
      <xs:element name=\"query\" type=\"xs:string\" minOccurs=\"1\" maxOccurs=\"1\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"result-class\" type=\"orm:fqcn\" />
    <xs:attribute name=\"result-set-mapping\" type=\"xs:string\" />
  </xs:complexType>

  <xs:complexType name=\"named-native-queries\">
    <xs:sequence>
      <xs:element name=\"named-native-query\" type=\"orm:named-native-query\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"entity-listener\">
    <xs:sequence>
      <xs:element name=\"lifecycle-callback\" type=\"orm:lifecycle-callback\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"class\" type=\"orm:fqcn\"/>
  </xs:complexType>

  <xs:complexType name=\"entity-listeners\">
    <xs:sequence>
      <xs:element name=\"entity-listener\" type=\"orm:entity-listener\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"column-result\">
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
  </xs:complexType>

  <xs:complexType name=\"field-result\">
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"column\" type=\"xs:string\" />
  </xs:complexType>

  <xs:complexType name=\"entity-result\">
    <xs:sequence>
      <xs:element name=\"field-result\" type=\"orm:field-result\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xs:sequence>
    <xs:attribute name=\"entity-class\" type=\"orm:fqcn\" use=\"required\" />
    <xs:attribute name=\"discriminator-column\" type=\"xs:string\" use=\"optional\" />
  </xs:complexType>

  <xs:complexType name=\"sql-result-set-mapping\">
    <xs:sequence>
        <xs:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xs:element name=\"entity-result\" type=\"orm:entity-result\"/>
            <xs:element name=\"column-result\" type=\"orm:column-result\"/>
            <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
        </xs:choice>
        <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
  </xs:complexType>

  <xs:complexType name=\"sql-result-set-mappings\">
    <xs:sequence>
      <xs:element name=\"sql-result-set-mapping\" type=\"orm:sql-result-set-mapping\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"cache\">
    <xs:attribute name=\"usage\" type=\"orm:cache-usage-type\" />
    <xs:attribute name=\"region\" type=\"xs:string\" />
  </xs:complexType>

  <xs:complexType name=\"entity\">
    <xs:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xs:element name=\"cache\" type=\"orm:cache\" minOccurs=\"0\" maxOccurs=\"1\"/>
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:element name=\"indexes\" type=\"orm:indexes\" minOccurs=\"0\"/>
      <xs:element name=\"unique-constraints\" type=\"orm:unique-constraints\" minOccurs=\"0\"/>
      <xs:element name=\"discriminator-column\" type=\"orm:discriminator-column\" minOccurs=\"0\"/>
      <xs:element name=\"discriminator-map\" type=\"orm:discriminator-map\" minOccurs=\"0\"/>
      <xs:element name=\"lifecycle-callbacks\" type=\"orm:lifecycle-callbacks\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"entity-listeners\" type=\"orm:entity-listeners\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"named-queries\" type=\"orm:named-queries\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"named-native-queries\" type=\"orm:named-native-queries\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"sql-result-set-mappings\" type=\"orm:sql-result-set-mappings\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"id\" type=\"orm:id\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"field\" type=\"orm:field\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xs:element name=\"embedded\" type=\"orm:embedded\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xs:element name=\"one-to-one\" type=\"orm:one-to-one\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xs:element name=\"one-to-many\" type=\"orm:one-to-many\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"many-to-one\" type=\"orm:many-to-one\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"many-to-many\" type=\"orm:many-to-many\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"association-overrides\" type=\"orm:association-overrides\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"attribute-overrides\" type=\"orm:attribute-overrides\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:choice>
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"table\" type=\"orm:tablename\" />
    <xs:attribute name=\"schema\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"repository-class\" type=\"orm:fqcn\"/>
    <xs:attribute name=\"inheritance-type\" type=\"orm:inheritance-type\"/>
    <xs:attribute name=\"change-tracking-policy\" type=\"orm:change-tracking-policy\" />
    <xs:attribute name=\"read-only\" type=\"xs:boolean\" default=\"false\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:simpleType name=\"tablename\" id=\"tablename\">
    <xs:restriction base=\"xs:token\">
      <xs:pattern value=\"[a-zA-Z_u01-uff.]+\" id=\"tablename.pattern\">
      </xs:pattern>
    </xs:restriction>
  </xs:simpleType>

  <xs:complexType name=\"option\" mixed=\"true\">
    <xs:sequence minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xs:element name=\"option\" type=\"orm:option\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\"/>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"options\">
    <xs:sequence>
      <xs:element name=\"option\" type=\"orm:option\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"mapped-superclass\" >
    <xs:complexContent>
      <xs:extension base=\"orm:entity\">
        <xs:sequence>
          <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
        </xs:sequence>
        <xs:anyAttribute namespace=\"##other\"/>
      </xs:extension>
    </xs:complexContent>
  </xs:complexType>

  <xs:complexType name=\"embeddable\">
    <xs:complexContent>
      <xs:extension base=\"orm:entity\">
        <xs:sequence>
          <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
        </xs:sequence>
      </xs:extension>
    </xs:complexContent>
  </xs:complexType>

  <xs:simpleType name=\"change-tracking-policy\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"DEFERRED_IMPLICIT\"/>
      <xs:enumeration value=\"DEFERRED_EXPLICIT\"/>
      <xs:enumeration value=\"NOTIFY\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:simpleType name=\"inheritance-type\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"SINGLE_TABLE\"/>
      <xs:enumeration value=\"JOINED\"/>
      <xs:enumeration value=\"TABLE_PER_CLASS\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:simpleType name=\"generator-strategy\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"NONE\"/>
      <xs:enumeration value=\"TABLE\"/>
      <xs:enumeration value=\"SEQUENCE\"/>
      <xs:enumeration value=\"IDENTITY\"/>
      <xs:enumeration value=\"AUTO\"/>
      <xs:enumeration value=\"UUID\"/>
      <xs:enumeration value=\"CUSTOM\" />
    </xs:restriction>
  </xs:simpleType>

  <xs:simpleType name=\"fk-action\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"CASCADE\"/>
      <xs:enumeration value=\"RESTRICT\"/>
      <xs:enumeration value=\"SET NULL\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:simpleType name=\"fetch-type\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"EAGER\"/>
      <xs:enumeration value=\"LAZY\"/>
      <xs:enumeration value=\"EXTRA_LAZY\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:complexType name=\"field\">
    <xs:sequence>
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"type\" type=\"xs:NMTOKEN\" default=\"string\" />
    <xs:attribute name=\"column\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"length\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"unique\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"nullable\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"version\" type=\"xs:boolean\" />
    <xs:attribute name=\"column-definition\" type=\"xs:string\" />
    <xs:attribute name=\"precision\" type=\"xs:integer\" use=\"optional\" />
    <xs:attribute name=\"scale\" type=\"xs:integer\" use=\"optional\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"embedded\">
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"class\" type=\"orm:fqcn\" use=\"required\" />
    <xs:attribute name=\"column-prefix\" type=\"xs:string\" use=\"optional\" />
    <xs:attribute name=\"use-column-prefix\" type=\"xs:boolean\" default=\"true\" use=\"optional\" />
  </xs:complexType>

  <xs:complexType name=\"discriminator-column\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"type\" type=\"xs:NMTOKEN\"/>
    <xs:attribute name=\"field-name\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"length\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"column-definition\" type=\"xs:string\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"unique-constraint\">
    <xs:sequence>
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"optional\"/>
    <xs:attribute name=\"columns\" type=\"xs:string\" use=\"required\"/>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"unique-constraints\">
    <xs:sequence>
      <xs:element name=\"unique-constraint\" type=\"orm:unique-constraint\" minOccurs=\"1\" maxOccurs=\"unbounded\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"index\">
    <xs:sequence>
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"optional\"/>
    <xs:attribute name=\"columns\" type=\"xs:string\" use=\"required\"/>
    <xs:attribute name=\"flags\" type=\"xs:string\" use=\"optional\"/>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"indexes\">
    <xs:sequence>
      <xs:element name=\"index\" type=\"orm:index\" minOccurs=\"1\" maxOccurs=\"unbounded\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"discriminator-mapping\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"value\" type=\"xs:NMTOKEN\" use=\"required\"/>
    <xs:attribute name=\"class\" type=\"orm:fqcn\" use=\"required\"/>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"discriminator-map\">
    <xs:sequence>
      <xs:element name=\"discriminator-mapping\" type=\"orm:discriminator-mapping\" minOccurs=\"1\" maxOccurs=\"unbounded\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"generator\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"strategy\" type=\"orm:generator-strategy\" use=\"optional\" default=\"AUTO\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"id\">
    <xs:sequence>
      <xs:element name=\"generator\" type=\"orm:generator\" minOccurs=\"0\" />
      <xs:element name=\"sequence-generator\" type=\"orm:sequence-generator\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"custom-id-generator\" type=\"orm:custom-id-generator\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"type\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"column\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"length\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"association-key\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"column-definition\" type=\"xs:string\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"sequence-generator\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
      <xs:attribute name=\"sequence-name\" type=\"xs:NMTOKEN\" use=\"required\" />
      <xs:attribute name=\"allocation-size\" type=\"xs:integer\" use=\"optional\" default=\"1\" />
      <xs:attribute name=\"initial-value\" type=\"xs:integer\" use=\"optional\" default=\"1\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"custom-id-generator\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"class\" type=\"orm:fqcn\" use=\"required\" />
  </xs:complexType>

  <xs:simpleType name=\"fqcn\" id=\"fqcn\">
    <xs:restriction base=\"xs:token\">
      <xs:pattern value=\"[a-zA-Z_u01-uff][a-zA-Z0-9_u01-uff]+\" id=\"fqcn.pattern\">
      </xs:pattern>
    </xs:restriction>
  </xs:simpleType>

  <xs:complexType name=\"inverse-join-columns\">
    <xs:sequence>
      <xs:element name=\"join-column\" type=\"orm:join-column\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"join-column\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"optional\" />
    <xs:attribute name=\"referenced-column-name\" type=\"xs:NMTOKEN\" use=\"optional\" default=\"id\" />
    <xs:attribute name=\"unique\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"nullable\" type=\"xs:boolean\" default=\"true\" />
    <xs:attribute name=\"on-delete\" type=\"orm:fk-action\" />
    <xs:attribute name=\"column-definition\" type=\"xs:string\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"join-columns\">
    <xs:sequence>
      <xs:element name=\"join-column\" type=\"orm:join-column\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"join-table\">
    <xs:sequence>
      <xs:element name=\"join-columns\" type=\"orm:join-columns\" />
      <xs:element name=\"inverse-join-columns\" type=\"orm:join-columns\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"schema\" type=\"xs:NMTOKEN\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"order-by\">
      <xs:sequence>
          <xs:element name=\"order-by-field\" type=\"orm:order-by-field\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
          <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
      </xs:sequence>
      <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"order-by-field\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"direction\" type=\"orm:order-by-direction\" default=\"ASC\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:simpleType name=\"order-by-direction\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"ASC\"/>
      <xs:enumeration value=\"DESC\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:complexType name=\"many-to-many\">
    <xs:sequence>
       <xs:element name=\"cache\" type=\"orm:cache\" minOccurs=\"0\" maxOccurs=\"1\"/>
      <xs:element name=\"cascade\" type=\"orm:cascade-type\" minOccurs=\"0\" />
      <xs:element name=\"join-table\" type=\"orm:join-table\" minOccurs=\"0\" />
      <xs:element name=\"order-by\" type=\"orm:order-by\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"field\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"target-entity\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"mapped-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"inversed-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"index-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"fetch\" type=\"orm:fetch-type\" default=\"LAZY\" />
    <xs:attribute name=\"orphan-removal\" type=\"xs:boolean\" default=\"false\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"one-to-many\">
    <xs:sequence>
       <xs:element name=\"cache\" type=\"orm:cache\" minOccurs=\"0\" maxOccurs=\"1\"/>
      <xs:element name=\"cascade\" type=\"orm:cascade-type\" minOccurs=\"0\" />
      <xs:element name=\"order-by\" type=\"orm:order-by\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"field\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"target-entity\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"mapped-by\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"index-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"fetch\" type=\"orm:fetch-type\" default=\"LAZY\" />
    <xs:attribute name=\"orphan-removal\" type=\"xs:boolean\" default=\"false\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"many-to-one\">
    <xs:sequence>
       <xs:element name=\"cache\" type=\"orm:cache\" minOccurs=\"0\" maxOccurs=\"1\"/>
      <xs:element name=\"cascade\" type=\"orm:cascade-type\" minOccurs=\"0\" />
      <xs:choice minOccurs=\"0\" maxOccurs=\"1\">
        <xs:element name=\"join-column\" type=\"orm:join-column\"/>
        <xs:element name=\"join-columns\" type=\"orm:join-columns\"/>
        <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
      </xs:choice>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"field\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"target-entity\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"inversed-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"fetch\" type=\"orm:fetch-type\" default=\"LAZY\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"one-to-one\">
    <xs:sequence>
       <xs:element name=\"cache\" type=\"orm:cache\" minOccurs=\"0\" maxOccurs=\"1\"/>
      <xs:element name=\"cascade\" type=\"orm:cascade-type\" minOccurs=\"0\" />
      <xs:choice minOccurs=\"0\" maxOccurs=\"1\">
        <xs:element name=\"join-column\" type=\"orm:join-column\"/>
        <xs:element name=\"join-columns\" type=\"orm:join-columns\"/>
        <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
      </xs:choice>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"field\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"target-entity\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"mapped-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"inversed-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"fetch\" type=\"orm:fetch-type\" default=\"LAZY\" />
    <xs:attribute name=\"orphan-removal\" type=\"xs:boolean\" default=\"false\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"association-overrides\">
    <xs:sequence>
      <xs:element name=\"association-override\" type=\"orm:association-override\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"association-override\">
    <xs:sequence>
      <xs:element name=\"join-table\" type=\"orm:join-table\" minOccurs=\"0\" />
      <xs:element name=\"join-columns\" type=\"orm:join-columns\" minOccurs=\"0\" />
      <xs:element name=\"inversed-by\" type=\"orm:inversed-by-override\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"fetch\" type=\"orm:fetch-type\" use=\"optional\" />
  </xs:complexType>

  <xs:complexType name=\"inversed-by-override\">
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
  </xs:complexType>

  <xs:complexType name=\"attribute-overrides\">
    <xs:sequence>
      <xs:element name=\"attribute-override\" type=\"orm:attribute-override\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"attribute-override\">
    <xs:sequence>
      <xs:element name=\"field\" type=\"orm:attribute-override-field\" minOccurs=\"1\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
  </xs:complexType>

  <xs:complexType name=\"attribute-override-field\">
    <xs:sequence>
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"type\" type=\"xs:NMTOKEN\" default=\"string\" />
    <xs:attribute name=\"column\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"length\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"unique\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"nullable\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"version\" type=\"xs:boolean\" />
    <xs:attribute name=\"column-definition\" type=\"xs:string\" />
    <xs:attribute name=\"precision\" type=\"xs:integer\" use=\"optional\" />
    <xs:attribute name=\"scale\" type=\"xs:integer\" use=\"optional\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

</xs:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/doctrine-mapping.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<xs:schema xmlns:xs=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://doctrine-project.org/schemas/orm/doctrine-mapping\"
    xmlns:orm=\"http://doctrine-project.org/schemas/orm/doctrine-mapping\"
    elementFormDefault=\"qualified\">

  <xs:annotation>
    <xs:documentation><![CDATA[
       This is the XML Schema for the object/relational
       mapping file used by the Doctrine ORM.
     ]]></xs:documentation>
  </xs:annotation>

  <xs:element name=\"doctrine-mapping\">
    <xs:complexType>
      <xs:sequence>
        <xs:element name=\"mapped-superclass\" type=\"orm:mapped-superclass\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        <xs:element name=\"entity\" type=\"orm:entity\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        <xs:element name=\"embeddable\" type=\"orm:embeddable\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
      </xs:sequence>
      <xs:anyAttribute namespace=\"##other\"/>
    </xs:complexType>
  </xs:element>

  <xs:complexType name=\"emptyType\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"cascade-type\">
    <xs:sequence>
      <xs:element name=\"cascade-all\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:element name=\"cascade-persist\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:element name=\"cascade-merge\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:element name=\"cascade-remove\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:element name=\"cascade-refresh\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:element name=\"cascade-detach\" type=\"orm:emptyType\" minOccurs=\"0\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:simpleType name=\"lifecycle-callback-type\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"prePersist\"/>
      <xs:enumeration value=\"postPersist\"/>
      <xs:enumeration value=\"preUpdate\"/>
      <xs:enumeration value=\"postUpdate\"/>
      <xs:enumeration value=\"preRemove\"/>
      <xs:enumeration value=\"postRemove\"/>
      <xs:enumeration value=\"postLoad\"/>
      <xs:enumeration value=\"preFlush\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:simpleType name=\"cache-usage-type\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"READ_ONLY\"/>
      <xs:enumeration value=\"READ_WRITE\"/>
      <xs:enumeration value=\"NONSTRICT_READ_WRITE\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:complexType name=\"lifecycle-callback\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"type\" type=\"orm:lifecycle-callback-type\" use=\"required\" />
    <xs:attribute name=\"method\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"lifecycle-callbacks\">
    <xs:sequence>
      <xs:element name=\"lifecycle-callback\" type=\"orm:lifecycle-callback\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"named-query\">
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"query\" type=\"xs:string\" use=\"required\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"named-queries\">
    <xs:sequence>
      <xs:element name=\"named-query\" type=\"orm:named-query\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"named-native-query\">
    <xs:sequence>
      <xs:element name=\"query\" type=\"xs:string\" minOccurs=\"1\" maxOccurs=\"1\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"result-class\" type=\"orm:fqcn\" />
    <xs:attribute name=\"result-set-mapping\" type=\"xs:string\" />
  </xs:complexType>

  <xs:complexType name=\"named-native-queries\">
    <xs:sequence>
      <xs:element name=\"named-native-query\" type=\"orm:named-native-query\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"entity-listener\">
    <xs:sequence>
      <xs:element name=\"lifecycle-callback\" type=\"orm:lifecycle-callback\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"class\" type=\"orm:fqcn\"/>
  </xs:complexType>

  <xs:complexType name=\"entity-listeners\">
    <xs:sequence>
      <xs:element name=\"entity-listener\" type=\"orm:entity-listener\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"column-result\">
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
  </xs:complexType>

  <xs:complexType name=\"field-result\">
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"column\" type=\"xs:string\" />
  </xs:complexType>

  <xs:complexType name=\"entity-result\">
    <xs:sequence>
      <xs:element name=\"field-result\" type=\"orm:field-result\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xs:sequence>
    <xs:attribute name=\"entity-class\" type=\"orm:fqcn\" use=\"required\" />
    <xs:attribute name=\"discriminator-column\" type=\"xs:string\" use=\"optional\" />
  </xs:complexType>

  <xs:complexType name=\"sql-result-set-mapping\">
    <xs:sequence>
        <xs:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xs:element name=\"entity-result\" type=\"orm:entity-result\"/>
            <xs:element name=\"column-result\" type=\"orm:column-result\"/>
            <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
        </xs:choice>
        <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
  </xs:complexType>

  <xs:complexType name=\"sql-result-set-mappings\">
    <xs:sequence>
      <xs:element name=\"sql-result-set-mapping\" type=\"orm:sql-result-set-mapping\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"cache\">
    <xs:attribute name=\"usage\" type=\"orm:cache-usage-type\" />
    <xs:attribute name=\"region\" type=\"xs:string\" />
  </xs:complexType>

  <xs:complexType name=\"entity\">
    <xs:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xs:element name=\"cache\" type=\"orm:cache\" minOccurs=\"0\" maxOccurs=\"1\"/>
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:element name=\"indexes\" type=\"orm:indexes\" minOccurs=\"0\"/>
      <xs:element name=\"unique-constraints\" type=\"orm:unique-constraints\" minOccurs=\"0\"/>
      <xs:element name=\"discriminator-column\" type=\"orm:discriminator-column\" minOccurs=\"0\"/>
      <xs:element name=\"discriminator-map\" type=\"orm:discriminator-map\" minOccurs=\"0\"/>
      <xs:element name=\"lifecycle-callbacks\" type=\"orm:lifecycle-callbacks\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"entity-listeners\" type=\"orm:entity-listeners\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"named-queries\" type=\"orm:named-queries\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"named-native-queries\" type=\"orm:named-native-queries\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"sql-result-set-mappings\" type=\"orm:sql-result-set-mappings\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"id\" type=\"orm:id\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"field\" type=\"orm:field\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xs:element name=\"embedded\" type=\"orm:embedded\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xs:element name=\"one-to-one\" type=\"orm:one-to-one\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xs:element name=\"one-to-many\" type=\"orm:one-to-many\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"many-to-one\" type=\"orm:many-to-one\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"many-to-many\" type=\"orm:many-to-many\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"association-overrides\" type=\"orm:association-overrides\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:element name=\"attribute-overrides\" type=\"orm:attribute-overrides\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:choice>
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"table\" type=\"orm:tablename\" />
    <xs:attribute name=\"schema\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"repository-class\" type=\"orm:fqcn\"/>
    <xs:attribute name=\"inheritance-type\" type=\"orm:inheritance-type\"/>
    <xs:attribute name=\"change-tracking-policy\" type=\"orm:change-tracking-policy\" />
    <xs:attribute name=\"read-only\" type=\"xs:boolean\" default=\"false\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:simpleType name=\"tablename\" id=\"tablename\">
    <xs:restriction base=\"xs:token\">
      <xs:pattern value=\"[a-zA-Z_u01-uff.]+\" id=\"tablename.pattern\">
      </xs:pattern>
    </xs:restriction>
  </xs:simpleType>

  <xs:complexType name=\"option\" mixed=\"true\">
    <xs:sequence minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xs:element name=\"option\" type=\"orm:option\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\"/>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"options\">
    <xs:sequence>
      <xs:element name=\"option\" type=\"orm:option\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"mapped-superclass\" >
    <xs:complexContent>
      <xs:extension base=\"orm:entity\">
        <xs:sequence>
          <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
        </xs:sequence>
        <xs:anyAttribute namespace=\"##other\"/>
      </xs:extension>
    </xs:complexContent>
  </xs:complexType>

  <xs:complexType name=\"embeddable\">
    <xs:complexContent>
      <xs:extension base=\"orm:entity\">
        <xs:sequence>
          <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
        </xs:sequence>
      </xs:extension>
    </xs:complexContent>
  </xs:complexType>

  <xs:simpleType name=\"change-tracking-policy\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"DEFERRED_IMPLICIT\"/>
      <xs:enumeration value=\"DEFERRED_EXPLICIT\"/>
      <xs:enumeration value=\"NOTIFY\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:simpleType name=\"inheritance-type\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"SINGLE_TABLE\"/>
      <xs:enumeration value=\"JOINED\"/>
      <xs:enumeration value=\"TABLE_PER_CLASS\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:simpleType name=\"generator-strategy\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"NONE\"/>
      <xs:enumeration value=\"TABLE\"/>
      <xs:enumeration value=\"SEQUENCE\"/>
      <xs:enumeration value=\"IDENTITY\"/>
      <xs:enumeration value=\"AUTO\"/>
      <xs:enumeration value=\"UUID\"/>
      <xs:enumeration value=\"CUSTOM\" />
    </xs:restriction>
  </xs:simpleType>

  <xs:simpleType name=\"fk-action\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"CASCADE\"/>
      <xs:enumeration value=\"RESTRICT\"/>
      <xs:enumeration value=\"SET NULL\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:simpleType name=\"fetch-type\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"EAGER\"/>
      <xs:enumeration value=\"LAZY\"/>
      <xs:enumeration value=\"EXTRA_LAZY\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:complexType name=\"field\">
    <xs:sequence>
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"type\" type=\"xs:NMTOKEN\" default=\"string\" />
    <xs:attribute name=\"column\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"length\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"unique\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"nullable\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"version\" type=\"xs:boolean\" />
    <xs:attribute name=\"column-definition\" type=\"xs:string\" />
    <xs:attribute name=\"precision\" type=\"xs:integer\" use=\"optional\" />
    <xs:attribute name=\"scale\" type=\"xs:integer\" use=\"optional\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"embedded\">
    <xs:attribute name=\"name\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"class\" type=\"orm:fqcn\" use=\"required\" />
    <xs:attribute name=\"column-prefix\" type=\"xs:string\" use=\"optional\" />
    <xs:attribute name=\"use-column-prefix\" type=\"xs:boolean\" default=\"true\" use=\"optional\" />
  </xs:complexType>

  <xs:complexType name=\"discriminator-column\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"type\" type=\"xs:NMTOKEN\"/>
    <xs:attribute name=\"field-name\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"length\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"column-definition\" type=\"xs:string\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"unique-constraint\">
    <xs:sequence>
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"optional\"/>
    <xs:attribute name=\"columns\" type=\"xs:string\" use=\"required\"/>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"unique-constraints\">
    <xs:sequence>
      <xs:element name=\"unique-constraint\" type=\"orm:unique-constraint\" minOccurs=\"1\" maxOccurs=\"unbounded\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"index\">
    <xs:sequence>
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"optional\"/>
    <xs:attribute name=\"columns\" type=\"xs:string\" use=\"required\"/>
    <xs:attribute name=\"flags\" type=\"xs:string\" use=\"optional\"/>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"indexes\">
    <xs:sequence>
      <xs:element name=\"index\" type=\"orm:index\" minOccurs=\"1\" maxOccurs=\"unbounded\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"discriminator-mapping\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"value\" type=\"xs:NMTOKEN\" use=\"required\"/>
    <xs:attribute name=\"class\" type=\"orm:fqcn\" use=\"required\"/>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"discriminator-map\">
    <xs:sequence>
      <xs:element name=\"discriminator-mapping\" type=\"orm:discriminator-mapping\" minOccurs=\"1\" maxOccurs=\"unbounded\"/>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"generator\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"strategy\" type=\"orm:generator-strategy\" use=\"optional\" default=\"AUTO\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"id\">
    <xs:sequence>
      <xs:element name=\"generator\" type=\"orm:generator\" minOccurs=\"0\" />
      <xs:element name=\"sequence-generator\" type=\"orm:sequence-generator\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"custom-id-generator\" type=\"orm:custom-id-generator\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"type\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"column\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"length\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"association-key\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"column-definition\" type=\"xs:string\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"sequence-generator\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
      <xs:attribute name=\"sequence-name\" type=\"xs:NMTOKEN\" use=\"required\" />
      <xs:attribute name=\"allocation-size\" type=\"xs:integer\" use=\"optional\" default=\"1\" />
      <xs:attribute name=\"initial-value\" type=\"xs:integer\" use=\"optional\" default=\"1\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"custom-id-generator\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"class\" type=\"orm:fqcn\" use=\"required\" />
  </xs:complexType>

  <xs:simpleType name=\"fqcn\" id=\"fqcn\">
    <xs:restriction base=\"xs:token\">
      <xs:pattern value=\"[a-zA-Z_u01-uff][a-zA-Z0-9_u01-uff]+\" id=\"fqcn.pattern\">
      </xs:pattern>
    </xs:restriction>
  </xs:simpleType>

  <xs:complexType name=\"inverse-join-columns\">
    <xs:sequence>
      <xs:element name=\"join-column\" type=\"orm:join-column\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"join-column\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"optional\" />
    <xs:attribute name=\"referenced-column-name\" type=\"xs:NMTOKEN\" use=\"optional\" default=\"id\" />
    <xs:attribute name=\"unique\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"nullable\" type=\"xs:boolean\" default=\"true\" />
    <xs:attribute name=\"on-delete\" type=\"orm:fk-action\" />
    <xs:attribute name=\"column-definition\" type=\"xs:string\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"join-columns\">
    <xs:sequence>
      <xs:element name=\"join-column\" type=\"orm:join-column\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"join-table\">
    <xs:sequence>
      <xs:element name=\"join-columns\" type=\"orm:join-columns\" />
      <xs:element name=\"inverse-join-columns\" type=\"orm:join-columns\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"schema\" type=\"xs:NMTOKEN\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"order-by\">
      <xs:sequence>
          <xs:element name=\"order-by-field\" type=\"orm:order-by-field\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
          <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
      </xs:sequence>
      <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"order-by-field\">
    <xs:sequence>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"direction\" type=\"orm:order-by-direction\" default=\"ASC\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:simpleType name=\"order-by-direction\">
    <xs:restriction base=\"xs:token\">
      <xs:enumeration value=\"ASC\"/>
      <xs:enumeration value=\"DESC\"/>
    </xs:restriction>
  </xs:simpleType>

  <xs:complexType name=\"many-to-many\">
    <xs:sequence>
       <xs:element name=\"cache\" type=\"orm:cache\" minOccurs=\"0\" maxOccurs=\"1\"/>
      <xs:element name=\"cascade\" type=\"orm:cascade-type\" minOccurs=\"0\" />
      <xs:element name=\"join-table\" type=\"orm:join-table\" minOccurs=\"0\" />
      <xs:element name=\"order-by\" type=\"orm:order-by\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"field\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"target-entity\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"mapped-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"inversed-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"index-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"fetch\" type=\"orm:fetch-type\" default=\"LAZY\" />
    <xs:attribute name=\"orphan-removal\" type=\"xs:boolean\" default=\"false\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"one-to-many\">
    <xs:sequence>
       <xs:element name=\"cache\" type=\"orm:cache\" minOccurs=\"0\" maxOccurs=\"1\"/>
      <xs:element name=\"cascade\" type=\"orm:cascade-type\" minOccurs=\"0\" />
      <xs:element name=\"order-by\" type=\"orm:order-by\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"field\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"target-entity\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"mapped-by\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"index-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"fetch\" type=\"orm:fetch-type\" default=\"LAZY\" />
    <xs:attribute name=\"orphan-removal\" type=\"xs:boolean\" default=\"false\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"many-to-one\">
    <xs:sequence>
       <xs:element name=\"cache\" type=\"orm:cache\" minOccurs=\"0\" maxOccurs=\"1\"/>
      <xs:element name=\"cascade\" type=\"orm:cascade-type\" minOccurs=\"0\" />
      <xs:choice minOccurs=\"0\" maxOccurs=\"1\">
        <xs:element name=\"join-column\" type=\"orm:join-column\"/>
        <xs:element name=\"join-columns\" type=\"orm:join-columns\"/>
        <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
      </xs:choice>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"field\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"target-entity\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"inversed-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"fetch\" type=\"orm:fetch-type\" default=\"LAZY\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"one-to-one\">
    <xs:sequence>
       <xs:element name=\"cache\" type=\"orm:cache\" minOccurs=\"0\" maxOccurs=\"1\"/>
      <xs:element name=\"cascade\" type=\"orm:cascade-type\" minOccurs=\"0\" />
      <xs:choice minOccurs=\"0\" maxOccurs=\"1\">
        <xs:element name=\"join-column\" type=\"orm:join-column\"/>
        <xs:element name=\"join-columns\" type=\"orm:join-columns\"/>
        <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
      </xs:choice>
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"field\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"target-entity\" type=\"xs:string\" use=\"required\" />
    <xs:attribute name=\"mapped-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"inversed-by\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"fetch\" type=\"orm:fetch-type\" default=\"LAZY\" />
    <xs:attribute name=\"orphan-removal\" type=\"xs:boolean\" default=\"false\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

  <xs:complexType name=\"association-overrides\">
    <xs:sequence>
      <xs:element name=\"association-override\" type=\"orm:association-override\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"association-override\">
    <xs:sequence>
      <xs:element name=\"join-table\" type=\"orm:join-table\" minOccurs=\"0\" />
      <xs:element name=\"join-columns\" type=\"orm:join-columns\" minOccurs=\"0\" />
      <xs:element name=\"inversed-by\" type=\"orm:inversed-by-override\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
    <xs:attribute name=\"fetch\" type=\"orm:fetch-type\" use=\"optional\" />
  </xs:complexType>

  <xs:complexType name=\"inversed-by-override\">
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
  </xs:complexType>

  <xs:complexType name=\"attribute-overrides\">
    <xs:sequence>
      <xs:element name=\"attribute-override\" type=\"orm:attribute-override\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
  </xs:complexType>

  <xs:complexType name=\"attribute-override\">
    <xs:sequence>
      <xs:element name=\"field\" type=\"orm:attribute-override-field\" minOccurs=\"1\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"name\" type=\"xs:NMTOKEN\" use=\"required\" />
  </xs:complexType>

  <xs:complexType name=\"attribute-override-field\">
    <xs:sequence>
      <xs:element name=\"options\" type=\"orm:options\" minOccurs=\"0\" />
      <xs:any minOccurs=\"0\" maxOccurs=\"unbounded\" namespace=\"##other\"/>
    </xs:sequence>
    <xs:attribute name=\"type\" type=\"xs:NMTOKEN\" default=\"string\" />
    <xs:attribute name=\"column\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"length\" type=\"xs:NMTOKEN\" />
    <xs:attribute name=\"unique\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"nullable\" type=\"xs:boolean\" default=\"false\" />
    <xs:attribute name=\"version\" type=\"xs:boolean\" />
    <xs:attribute name=\"column-definition\" type=\"xs:string\" />
    <xs:attribute name=\"precision\" type=\"xs:integer\" use=\"optional\" />
    <xs:attribute name=\"scale\" type=\"xs:integer\" use=\"optional\" />
    <xs:anyAttribute namespace=\"##other\"/>
  </xs:complexType>

</xs:schema>
", "vendor/doctrine/orm/doctrine-mapping.xsd", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/doctrine-mapping.xsd");
    }
}
