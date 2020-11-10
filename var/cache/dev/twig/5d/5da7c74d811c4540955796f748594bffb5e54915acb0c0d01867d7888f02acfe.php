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

/* vendor/symfony/routing/Loader/schema/routing/routing-1.0.xsd */
class __TwigTemplate_5f41d983704918352e4334bf5943808b864540e64a90906d8dac020bfcd453b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/schema/routing/routing-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/schema/routing/routing-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/routing\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/routing\"
    elementFormDefault=\"qualified\">

  <xsd:annotation>
    <xsd:documentation><![CDATA[
      Symfony XML Routing Schema, version 1.0
      Authors: Fabien Potencier, Tobias Schultze

      This scheme defines the elements and attributes that can be used to define
      routes. A route maps an HTTP request to a set of configuration variables.
    ]]></xsd:documentation>
  </xsd:annotation>

  <xsd:element name=\"routes\" type=\"routes\" />

  <xsd:complexType name=\"routes\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xsd:element name=\"import\" type=\"import\" />
      <xsd:element name=\"route\" type=\"route\" />
    </xsd:choice>
  </xsd:complexType>

  <xsd:complexType name=\"localized-path\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:string\">
        <xsd:attribute name=\"locale\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:group name=\"configs\">
    <xsd:choice>
      <xsd:element name=\"default\" nillable=\"true\" type=\"default\" />
      <xsd:element name=\"requirement\" type=\"element\" />
      <xsd:element name=\"option\" type=\"element\" />
      <xsd:element name=\"condition\" type=\"xsd:string\" />
    </xsd:choice>
  </xsd:group>

  <xsd:complexType name=\"route\">
    <xsd:sequence>
      <xsd:group ref=\"configs\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"path\" type=\"localized-path\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
    <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"path\" type=\"xsd:string\" />
    <xsd:attribute name=\"host\" type=\"xsd:string\" />
    <xsd:attribute name=\"schemes\" type=\"xsd:string\" />
    <xsd:attribute name=\"methods\" type=\"xsd:string\" />
    <xsd:attribute name=\"controller\" type=\"xsd:string\" />
    <xsd:attribute name=\"locale\" type=\"xsd:string\" />
    <xsd:attribute name=\"format\" type=\"xsd:string\" />
    <xsd:attribute name=\"utf8\" type=\"xsd:boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"import\">
    <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
      <xsd:group ref=\"configs\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"prefix\" type=\"localized-path\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
    <xsd:attribute name=\"resource\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"type\" type=\"xsd:string\" />
    <xsd:attribute name=\"prefix\" type=\"xsd:string\" />
    <xsd:attribute name=\"name-prefix\" type=\"xsd:string\" />
    <xsd:attribute name=\"host\" type=\"xsd:string\" />
    <xsd:attribute name=\"schemes\" type=\"xsd:string\" />
    <xsd:attribute name=\"methods\" type=\"xsd:string\" />
    <xsd:attribute name=\"controller\" type=\"xsd:string\" />
    <xsd:attribute name=\"locale\" type=\"xsd:string\" />
    <xsd:attribute name=\"format\" type=\"xsd:string\" />
    <xsd:attribute name=\"trailing-slash-on-root\" type=\"xsd:boolean\" />
    <xsd:attribute name=\"utf8\" type=\"xsd:boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"default\" mixed=\"true\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"1\">
      <xsd:element name=\"bool\" type=\"xsd:boolean\" />
      <xsd:element name=\"int\" type=\"xsd:integer\" />
      <xsd:element name=\"float\" type=\"xsd:float\" />
      <xsd:element name=\"string\" type=\"xsd:string\" />
      <xsd:element name=\"list\" type=\"list\" />
      <xsd:element name=\"map\" type=\"map\" />
    </xsd:choice>
    <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
  </xsd:complexType>

  <xsd:complexType name=\"element\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:string\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:complexType name=\"list\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xsd:element name=\"bool\" nillable=\"true\" type=\"xsd:boolean\" />
      <xsd:element name=\"int\" nillable=\"true\" type=\"xsd:integer\" />
      <xsd:element name=\"float\" nillable=\"true\" type=\"xsd:float\" />
      <xsd:element name=\"string\" nillable=\"true\" type=\"xsd:string\" />
      <xsd:element name=\"list\" nillable=\"true\" type=\"list\" />
      <xsd:element name=\"map\" nillable=\"true\" type=\"map\" />
    </xsd:choice>
  </xsd:complexType>

  <xsd:complexType name=\"map\">
      <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
          <xsd:element name=\"bool\" nillable=\"true\" type=\"map-bool-entry\" />
          <xsd:element name=\"int\" nillable=\"true\" type=\"map-int-entry\" />
          <xsd:element name=\"float\" nillable=\"true\" type=\"map-float-entry\" />
          <xsd:element name=\"string\" nillable=\"true\" type=\"map-string-entry\" />
          <xsd:element name=\"list\" nillable=\"true\" type=\"map-list-entry\" />
          <xsd:element name=\"map\" nillable=\"true\" type=\"map-map-entry\" />
      </xsd:choice>
  </xsd:complexType>

  <xsd:complexType name=\"map-bool-entry\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:boolean\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:complexType name=\"map-int-entry\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:integer\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:complexType name=\"map-float-entry\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:float\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:complexType name=\"map-string-entry\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:string\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:complexType name=\"map-list-entry\">
    <xsd:complexContent>
      <xsd:extension base=\"list\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:complexContent>
  </xsd:complexType>

  <xsd:complexType name=\"map-map-entry\">
    <xsd:complexContent>
      <xsd:extension base=\"map\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:complexContent>
  </xsd:complexType>
</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Loader/schema/routing/routing-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/routing\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/routing\"
    elementFormDefault=\"qualified\">

  <xsd:annotation>
    <xsd:documentation><![CDATA[
      Symfony XML Routing Schema, version 1.0
      Authors: Fabien Potencier, Tobias Schultze

      This scheme defines the elements and attributes that can be used to define
      routes. A route maps an HTTP request to a set of configuration variables.
    ]]></xsd:documentation>
  </xsd:annotation>

  <xsd:element name=\"routes\" type=\"routes\" />

  <xsd:complexType name=\"routes\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xsd:element name=\"import\" type=\"import\" />
      <xsd:element name=\"route\" type=\"route\" />
    </xsd:choice>
  </xsd:complexType>

  <xsd:complexType name=\"localized-path\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:string\">
        <xsd:attribute name=\"locale\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:group name=\"configs\">
    <xsd:choice>
      <xsd:element name=\"default\" nillable=\"true\" type=\"default\" />
      <xsd:element name=\"requirement\" type=\"element\" />
      <xsd:element name=\"option\" type=\"element\" />
      <xsd:element name=\"condition\" type=\"xsd:string\" />
    </xsd:choice>
  </xsd:group>

  <xsd:complexType name=\"route\">
    <xsd:sequence>
      <xsd:group ref=\"configs\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"path\" type=\"localized-path\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
    <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"path\" type=\"xsd:string\" />
    <xsd:attribute name=\"host\" type=\"xsd:string\" />
    <xsd:attribute name=\"schemes\" type=\"xsd:string\" />
    <xsd:attribute name=\"methods\" type=\"xsd:string\" />
    <xsd:attribute name=\"controller\" type=\"xsd:string\" />
    <xsd:attribute name=\"locale\" type=\"xsd:string\" />
    <xsd:attribute name=\"format\" type=\"xsd:string\" />
    <xsd:attribute name=\"utf8\" type=\"xsd:boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"import\">
    <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
      <xsd:group ref=\"configs\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"prefix\" type=\"localized-path\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
    </xsd:sequence>
    <xsd:attribute name=\"resource\" type=\"xsd:string\" use=\"required\" />
    <xsd:attribute name=\"type\" type=\"xsd:string\" />
    <xsd:attribute name=\"prefix\" type=\"xsd:string\" />
    <xsd:attribute name=\"name-prefix\" type=\"xsd:string\" />
    <xsd:attribute name=\"host\" type=\"xsd:string\" />
    <xsd:attribute name=\"schemes\" type=\"xsd:string\" />
    <xsd:attribute name=\"methods\" type=\"xsd:string\" />
    <xsd:attribute name=\"controller\" type=\"xsd:string\" />
    <xsd:attribute name=\"locale\" type=\"xsd:string\" />
    <xsd:attribute name=\"format\" type=\"xsd:string\" />
    <xsd:attribute name=\"trailing-slash-on-root\" type=\"xsd:boolean\" />
    <xsd:attribute name=\"utf8\" type=\"xsd:boolean\" />
  </xsd:complexType>

  <xsd:complexType name=\"default\" mixed=\"true\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"1\">
      <xsd:element name=\"bool\" type=\"xsd:boolean\" />
      <xsd:element name=\"int\" type=\"xsd:integer\" />
      <xsd:element name=\"float\" type=\"xsd:float\" />
      <xsd:element name=\"string\" type=\"xsd:string\" />
      <xsd:element name=\"list\" type=\"list\" />
      <xsd:element name=\"map\" type=\"map\" />
    </xsd:choice>
    <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
  </xsd:complexType>

  <xsd:complexType name=\"element\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:string\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:complexType name=\"list\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xsd:element name=\"bool\" nillable=\"true\" type=\"xsd:boolean\" />
      <xsd:element name=\"int\" nillable=\"true\" type=\"xsd:integer\" />
      <xsd:element name=\"float\" nillable=\"true\" type=\"xsd:float\" />
      <xsd:element name=\"string\" nillable=\"true\" type=\"xsd:string\" />
      <xsd:element name=\"list\" nillable=\"true\" type=\"list\" />
      <xsd:element name=\"map\" nillable=\"true\" type=\"map\" />
    </xsd:choice>
  </xsd:complexType>

  <xsd:complexType name=\"map\">
      <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
          <xsd:element name=\"bool\" nillable=\"true\" type=\"map-bool-entry\" />
          <xsd:element name=\"int\" nillable=\"true\" type=\"map-int-entry\" />
          <xsd:element name=\"float\" nillable=\"true\" type=\"map-float-entry\" />
          <xsd:element name=\"string\" nillable=\"true\" type=\"map-string-entry\" />
          <xsd:element name=\"list\" nillable=\"true\" type=\"map-list-entry\" />
          <xsd:element name=\"map\" nillable=\"true\" type=\"map-map-entry\" />
      </xsd:choice>
  </xsd:complexType>

  <xsd:complexType name=\"map-bool-entry\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:boolean\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:complexType name=\"map-int-entry\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:integer\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:complexType name=\"map-float-entry\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:float\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:complexType name=\"map-string-entry\">
    <xsd:simpleContent>
      <xsd:extension base=\"xsd:string\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:simpleContent>
  </xsd:complexType>

  <xsd:complexType name=\"map-list-entry\">
    <xsd:complexContent>
      <xsd:extension base=\"list\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:complexContent>
  </xsd:complexType>

  <xsd:complexType name=\"map-map-entry\">
    <xsd:complexContent>
      <xsd:extension base=\"map\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
      </xsd:extension>
    </xsd:complexContent>
  </xsd:complexType>
</xsd:schema>
", "vendor/symfony/routing/Loader/schema/routing/routing-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Loader/schema/routing/routing-1.0.xsd");
    }
}
