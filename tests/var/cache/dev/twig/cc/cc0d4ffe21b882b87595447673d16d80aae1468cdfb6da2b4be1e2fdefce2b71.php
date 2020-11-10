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

/* vendor/symfony/twig-bundle/Resources/config/schema/twig-1.0.xsd */
class __TwigTemplate_b4a925bd038f9ac84ef5443bf51314c0d8b6353e1a0b335505920bb147af4df0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Resources/config/schema/twig-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Resources/config/schema/twig-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/twig\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/twig\"
    elementFormDefault=\"qualified\">

    <xsd:element name=\"config\" type=\"config\" />

    <xsd:complexType name=\"config\">
        <xsd:sequence>
            <xsd:element name=\"date\" type=\"date\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"number-format\" type=\"number_format\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"form-theme\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"global\" type=\"global\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"path\" type=\"path\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>

        <xsd:attribute name=\"auto-reload\" type=\"xsd:string\" />
        <xsd:attribute name=\"autoescape\" type=\"xsd:string\" />
        <xsd:attribute name=\"autoescape-service\" type=\"xsd:string\" />
        <xsd:attribute name=\"autoescape-service-method\" type=\"xsd:string\" />
        <xsd:attribute name=\"base-template-class\" type=\"xsd:string\" />
        <xsd:attribute name=\"cache\" type=\"xsd:string\" />
        <xsd:attribute name=\"charset\" type=\"xsd:string\" />
        <xsd:attribute name=\"debug\" type=\"xsd:string\" />
        <xsd:attribute name=\"strict-variables\" type=\"xsd:string\" />
        <xsd:attribute name=\"exception-controller\" type=\"xsd:string\" />
        <xsd:attribute name=\"default-path\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"date\">
        <xsd:attribute name=\"format\" type=\"xsd:string\" />
        <xsd:attribute name=\"interval-format\" type=\"xsd:string\" />
        <xsd:attribute name=\"timezone\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"number_format\">
        <xsd:attribute name=\"decimals\" type=\"xsd:integer\" />
        <xsd:attribute name=\"decimal-point\" type=\"xsd:string\" />
        <xsd:attribute name=\"thousands-separator\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"path\" mixed=\"true\">
        <xsd:attribute name=\"namespace\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"global\" mixed=\"true\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"type\" type=\"global_type\" />
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:simpleType name=\"global_type\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"service\" />
        </xsd:restriction>
    </xsd:simpleType>
</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Resources/config/schema/twig-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/twig\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/twig\"
    elementFormDefault=\"qualified\">

    <xsd:element name=\"config\" type=\"config\" />

    <xsd:complexType name=\"config\">
        <xsd:sequence>
            <xsd:element name=\"date\" type=\"date\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"number-format\" type=\"number_format\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"form-theme\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"global\" type=\"global\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"path\" type=\"path\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>

        <xsd:attribute name=\"auto-reload\" type=\"xsd:string\" />
        <xsd:attribute name=\"autoescape\" type=\"xsd:string\" />
        <xsd:attribute name=\"autoescape-service\" type=\"xsd:string\" />
        <xsd:attribute name=\"autoescape-service-method\" type=\"xsd:string\" />
        <xsd:attribute name=\"base-template-class\" type=\"xsd:string\" />
        <xsd:attribute name=\"cache\" type=\"xsd:string\" />
        <xsd:attribute name=\"charset\" type=\"xsd:string\" />
        <xsd:attribute name=\"debug\" type=\"xsd:string\" />
        <xsd:attribute name=\"strict-variables\" type=\"xsd:string\" />
        <xsd:attribute name=\"exception-controller\" type=\"xsd:string\" />
        <xsd:attribute name=\"default-path\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"date\">
        <xsd:attribute name=\"format\" type=\"xsd:string\" />
        <xsd:attribute name=\"interval-format\" type=\"xsd:string\" />
        <xsd:attribute name=\"timezone\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"number_format\">
        <xsd:attribute name=\"decimals\" type=\"xsd:integer\" />
        <xsd:attribute name=\"decimal-point\" type=\"xsd:string\" />
        <xsd:attribute name=\"thousands-separator\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"path\" mixed=\"true\">
        <xsd:attribute name=\"namespace\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"global\" mixed=\"true\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"type\" type=\"global_type\" />
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:simpleType name=\"global_type\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"service\" />
        </xsd:restriction>
    </xsd:simpleType>
</xsd:schema>
", "vendor/symfony/twig-bundle/Resources/config/schema/twig-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Resources/config/schema/twig-1.0.xsd");
    }
}
