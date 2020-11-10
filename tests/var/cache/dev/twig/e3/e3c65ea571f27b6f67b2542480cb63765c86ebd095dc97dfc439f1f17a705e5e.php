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

/* vendor/symfony/swiftmailer-bundle/Resources/config/schema/swiftmailer-1.0.xsd */
class __TwigTemplate_bb9bfcfcaa0f022ed9eb433654b71559ecec29e54caeb549b04291855bd7308f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Resources/config/schema/swiftmailer-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Resources/config/schema/swiftmailer-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/swiftmailer\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/swiftmailer\"
    elementFormDefault=\"qualified\">

  <xsd:element name=\"config\" type=\"config\" />

  <xsd:complexType name=\"config\">
    <xsd:sequence>
      <xsd:element name=\"mailer\" type=\"mailer\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"stream-options\" type=\"stream-options\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"antiflood\" type=\"antiflood\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"spool\" type=\"spool\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"delivery-whitelist-pattern\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xsd:element name=\"delivery-address\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
    </xsd:sequence>

    <xsd:attribute name=\"default-mailer\" type=\"xsd:string\" />

    <xsd:attributeGroup ref=\"mailer-config\" />
  </xsd:complexType>

  <xsd:complexType name=\"stream-options\">
    <xsd:choice minOccurs=\"1\" maxOccurs=\"unbounded\">
      <xsd:element name=\"stream-option\" type=\"stream-option\" />
    </xsd:choice>
    <xsd:attribute name=\"name\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"stream-option\" mixed=\"true\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xsd:element name=\"stream-option\" type=\"stream-option\" />
    </xsd:choice>
    <xsd:attribute name=\"name\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:attributeGroup name=\"mailer-config\">
      <xsd:attribute name=\"username\" type=\"xsd:string\" />
      <xsd:attribute name=\"password\" type=\"xsd:string\" />
      <xsd:attribute name=\"host\" type=\"xsd:string\" />
      <xsd:attribute name=\"port\" type=\"xsd:string\" />
      <xsd:attribute name=\"encryption\" type=\"encryption\" />
      <xsd:attribute name=\"auth-mode\" type=\"auth_mode\" />
      <xsd:attribute name=\"timeout\" type=\"xsd:string\"/>
      <xsd:attribute name=\"type\" type=\"xsd:string\" />
      <xsd:attribute name=\"source-ip\" type=\"xsd:string\"/>
      <xsd:attribute name=\"local-domain\" type=\"xsd:string\"/>
      <xsd:attribute name=\"transport\" type=\"xsd:string\" />
      <xsd:attribute name=\"logging\" type=\"xsd:string\" />
      <xsd:attribute name=\"disable-delivery\" type=\"xsd:boolean\" />
      <xsd:attribute name=\"sender-address\" type=\"xsd:boolean\" />
      <xsd:attribute name=\"url\" type=\"xsd:string\" />
      <xsd:attribute name=\"command\" type=\"xsd:string\" />
  </xsd:attributeGroup>

  <xsd:complexType name=\"mailer\">
    <xsd:sequence>
      <xsd:element name=\"stream-options\" type=\"stream-options\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"antiflood\" type=\"antiflood\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"spool\" type=\"spool\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"delivery-whitelist-pattern\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xsd:element name=\"delivery-address\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
    </xsd:sequence>

    <xsd:attribute name=\"name\" type=\"xsd:string\" />
    <xsd:attributeGroup ref=\"mailer-config\" />
  </xsd:complexType>

  <xsd:complexType name=\"spool\">
    <xsd:attribute name=\"type\" type=\"xsd:string\" />
    <xsd:attribute name=\"path\" type=\"xsd:string\" />
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"antiflood\">
    <xsd:attribute name=\"threshold\" type=\"xsd:string\" />
    <xsd:attribute name=\"sleep\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:simpleType name=\"encryption\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"tls\" />
      <xsd:enumeration value=\"ssl\" />
    </xsd:restriction>
  </xsd:simpleType>

  <xsd:simpleType name=\"auth_mode\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"plain\" />
      <xsd:enumeration value=\"login\" />
      <xsd:enumeration value=\"cram-md5\" />
      <xsd:enumeration value=\"ntlm\" />
    </xsd:restriction>
  </xsd:simpleType>

  <xsd:simpleType name=\"delivery_strategy\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"realtime\" />
      <xsd:enumeration value=\"spool\" />
      <xsd:enumeration value=\"single-address\" />
      <xsd:enumeration value=\"none\" />
    </xsd:restriction>
  </xsd:simpleType>
</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Resources/config/schema/swiftmailer-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/swiftmailer\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/swiftmailer\"
    elementFormDefault=\"qualified\">

  <xsd:element name=\"config\" type=\"config\" />

  <xsd:complexType name=\"config\">
    <xsd:sequence>
      <xsd:element name=\"mailer\" type=\"mailer\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
      <xsd:element name=\"stream-options\" type=\"stream-options\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"antiflood\" type=\"antiflood\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"spool\" type=\"spool\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"delivery-whitelist-pattern\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xsd:element name=\"delivery-address\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
    </xsd:sequence>

    <xsd:attribute name=\"default-mailer\" type=\"xsd:string\" />

    <xsd:attributeGroup ref=\"mailer-config\" />
  </xsd:complexType>

  <xsd:complexType name=\"stream-options\">
    <xsd:choice minOccurs=\"1\" maxOccurs=\"unbounded\">
      <xsd:element name=\"stream-option\" type=\"stream-option\" />
    </xsd:choice>
    <xsd:attribute name=\"name\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"stream-option\" mixed=\"true\">
    <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
      <xsd:element name=\"stream-option\" type=\"stream-option\" />
    </xsd:choice>
    <xsd:attribute name=\"name\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:attributeGroup name=\"mailer-config\">
      <xsd:attribute name=\"username\" type=\"xsd:string\" />
      <xsd:attribute name=\"password\" type=\"xsd:string\" />
      <xsd:attribute name=\"host\" type=\"xsd:string\" />
      <xsd:attribute name=\"port\" type=\"xsd:string\" />
      <xsd:attribute name=\"encryption\" type=\"encryption\" />
      <xsd:attribute name=\"auth-mode\" type=\"auth_mode\" />
      <xsd:attribute name=\"timeout\" type=\"xsd:string\"/>
      <xsd:attribute name=\"type\" type=\"xsd:string\" />
      <xsd:attribute name=\"source-ip\" type=\"xsd:string\"/>
      <xsd:attribute name=\"local-domain\" type=\"xsd:string\"/>
      <xsd:attribute name=\"transport\" type=\"xsd:string\" />
      <xsd:attribute name=\"logging\" type=\"xsd:string\" />
      <xsd:attribute name=\"disable-delivery\" type=\"xsd:boolean\" />
      <xsd:attribute name=\"sender-address\" type=\"xsd:boolean\" />
      <xsd:attribute name=\"url\" type=\"xsd:string\" />
      <xsd:attribute name=\"command\" type=\"xsd:string\" />
  </xsd:attributeGroup>

  <xsd:complexType name=\"mailer\">
    <xsd:sequence>
      <xsd:element name=\"stream-options\" type=\"stream-options\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"antiflood\" type=\"antiflood\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"spool\" type=\"spool\" minOccurs=\"0\" maxOccurs=\"1\" />
      <xsd:element name=\"delivery-whitelist-pattern\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      <xsd:element name=\"delivery-address\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
    </xsd:sequence>

    <xsd:attribute name=\"name\" type=\"xsd:string\" />
    <xsd:attributeGroup ref=\"mailer-config\" />
  </xsd:complexType>

  <xsd:complexType name=\"spool\">
    <xsd:attribute name=\"type\" type=\"xsd:string\" />
    <xsd:attribute name=\"path\" type=\"xsd:string\" />
    <xsd:attribute name=\"id\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:complexType name=\"antiflood\">
    <xsd:attribute name=\"threshold\" type=\"xsd:string\" />
    <xsd:attribute name=\"sleep\" type=\"xsd:string\" />
  </xsd:complexType>

  <xsd:simpleType name=\"encryption\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"tls\" />
      <xsd:enumeration value=\"ssl\" />
    </xsd:restriction>
  </xsd:simpleType>

  <xsd:simpleType name=\"auth_mode\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"plain\" />
      <xsd:enumeration value=\"login\" />
      <xsd:enumeration value=\"cram-md5\" />
      <xsd:enumeration value=\"ntlm\" />
    </xsd:restriction>
  </xsd:simpleType>

  <xsd:simpleType name=\"delivery_strategy\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"realtime\" />
      <xsd:enumeration value=\"spool\" />
      <xsd:enumeration value=\"single-address\" />
      <xsd:enumeration value=\"none\" />
    </xsd:restriction>
  </xsd:simpleType>
</xsd:schema>
", "vendor/symfony/swiftmailer-bundle/Resources/config/schema/swiftmailer-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Resources/config/schema/swiftmailer-1.0.xsd");
    }
}
