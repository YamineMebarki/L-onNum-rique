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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XML/configuration.xsd */
class __TwigTemplate_40ac88efb055d37e10e436cd17dbd9e6f47abd2b3b1f7ab130c13ebec1a56914 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XML/configuration.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XML/configuration.xsd"));

        // line 1
        echo "<xs:schema
        attributeFormDefault=\"unqualified\"
        elementFormDefault=\"qualified\"
        targetNamespace=\"http://doctrine-project.org/schemas/migrations/configuration\"
        xmlns:xs=\"http://www.w3.org/2001/XMLSchema\">
    <xs:element name=\"doctrine-migrations\">
        <xs:complexType>
            <xs:all minOccurs=\"0\">
                <xs:element type=\"xs:string\" name=\"name\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:string\" name=\"custom-template\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:string\" name=\"migrations-namespace\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element name=\"table\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:complexType>
                        <xs:attribute type=\"xs:string\" name=\"name\"/>
                        <xs:attribute type=\"xs:string\" name=\"column\"/>
                        <xs:attribute type=\"xs:string\" name=\"column_length\"/>
                        <xs:attribute type=\"xs:string\" name=\"executed_at_column\"/>
                    </xs:complexType>
                </xs:element>
                <xs:element name=\"organize-migrations\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:simpleType>
                        <xs:restriction base=\"xs:string\">
                            <xs:pattern value=\"((y|Y)(e|E)(a|A)(r|R))|((y|Y)(e|E)(a|A)(r|R)_(a|A)(n|N)(d|D)_(m|M)(o|O)(n|N)(t|T)(h|H))\"/>
                        </xs:restriction>
                    </xs:simpleType>
                </xs:element>
                <xs:element type=\"xs:string\" name=\"migrations-directory\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:boolean\" name=\"all-or-nothing\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:boolean\" name=\"check-database-platform\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element name=\"migrations\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:complexType>
                        <xs:sequence minOccurs=\"0\" maxOccurs=\"unbounded\">
                            <xs:element name=\"migration\">
                                <xs:complexType mixed=\"true\">
                                    <xs:attribute name=\"version\" type=\"xs:string\"/>
                                    <xs:attribute name=\"class\" type=\"xs:string\"/>
                                </xs:complexType>
                            </xs:element>
                        </xs:sequence>
                    </xs:complexType>
                </xs:element>
            </xs:all>
        </xs:complexType>
    </xs:element>
</xs:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XML/configuration.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<xs:schema
        attributeFormDefault=\"unqualified\"
        elementFormDefault=\"qualified\"
        targetNamespace=\"http://doctrine-project.org/schemas/migrations/configuration\"
        xmlns:xs=\"http://www.w3.org/2001/XMLSchema\">
    <xs:element name=\"doctrine-migrations\">
        <xs:complexType>
            <xs:all minOccurs=\"0\">
                <xs:element type=\"xs:string\" name=\"name\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:string\" name=\"custom-template\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:string\" name=\"migrations-namespace\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element name=\"table\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:complexType>
                        <xs:attribute type=\"xs:string\" name=\"name\"/>
                        <xs:attribute type=\"xs:string\" name=\"column\"/>
                        <xs:attribute type=\"xs:string\" name=\"column_length\"/>
                        <xs:attribute type=\"xs:string\" name=\"executed_at_column\"/>
                    </xs:complexType>
                </xs:element>
                <xs:element name=\"organize-migrations\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:simpleType>
                        <xs:restriction base=\"xs:string\">
                            <xs:pattern value=\"((y|Y)(e|E)(a|A)(r|R))|((y|Y)(e|E)(a|A)(r|R)_(a|A)(n|N)(d|D)_(m|M)(o|O)(n|N)(t|T)(h|H))\"/>
                        </xs:restriction>
                    </xs:simpleType>
                </xs:element>
                <xs:element type=\"xs:string\" name=\"migrations-directory\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:boolean\" name=\"all-or-nothing\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:boolean\" name=\"check-database-platform\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element name=\"migrations\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:complexType>
                        <xs:sequence minOccurs=\"0\" maxOccurs=\"unbounded\">
                            <xs:element name=\"migration\">
                                <xs:complexType mixed=\"true\">
                                    <xs:attribute name=\"version\" type=\"xs:string\"/>
                                    <xs:attribute name=\"class\" type=\"xs:string\"/>
                                </xs:complexType>
                            </xs:element>
                        </xs:sequence>
                    </xs:complexType>
                </xs:element>
            </xs:all>
        </xs:complexType>
    </xs:element>
</xs:schema>
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XML/configuration.xsd", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XML/configuration.xsd");
    }
}
