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

/* vendor/doctrine/doctrine-migrations-bundle/Resources/config/schema/doctrine_migrations-1.0.xsd */
class __TwigTemplate_c8a7b3e05d548a6530feac8ca5c15ef8372cef0ae33c0c99dd094eb6ce6a9262 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Resources/config/schema/doctrine_migrations-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Resources/config/schema/doctrine_migrations-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<xsd:schema xmlns=\"http://symfony.com/schema/dic/doctrine/migrations\"
            xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
            targetNamespace=\"http://symfony.com/schema/dic/doctrine/migrations\"
            elementFormDefault=\"qualified\">

    <xsd:element name=\"config\">
        <xsd:complexType>
            <xsd:attribute name=\"dir_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"namespace\" type=\"xsd:string\" />
            <xsd:attribute name=\"table_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"column_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"column_length\" type=\"xsd:integer\" />
            <xsd:attribute name=\"executed_at_column_name\" type=\"xsd:integer\" />
            <xsd:attribute name=\"all_or_nothing\" type=\"xsd:boolean\" />
            <xsd:attribute name=\"name\" type=\"xsd:string\" />
            <xsd:attribute name=\"custom_template\" type=\"xsd:string\" />
            <xsd:attribute name=\"organize-migrations\">
                <xsd:simpleType>
                    <xsd:restriction base=\"xsd:string\">
                        <xsd:enumeration value=\"BY_YEAR\" />
                        <xsd:enumeration value=\"BY_YEAR_AND_MONTH\" />
                        <xsd:enumeration value=\"false\" />
                    </xsd:restriction>
                </xsd:simpleType>
            </xsd:attribute>
        </xsd:complexType>
    </xsd:element>
</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-migrations-bundle/Resources/config/schema/doctrine_migrations-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<xsd:schema xmlns=\"http://symfony.com/schema/dic/doctrine/migrations\"
            xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
            targetNamespace=\"http://symfony.com/schema/dic/doctrine/migrations\"
            elementFormDefault=\"qualified\">

    <xsd:element name=\"config\">
        <xsd:complexType>
            <xsd:attribute name=\"dir_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"namespace\" type=\"xsd:string\" />
            <xsd:attribute name=\"table_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"column_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"column_length\" type=\"xsd:integer\" />
            <xsd:attribute name=\"executed_at_column_name\" type=\"xsd:integer\" />
            <xsd:attribute name=\"all_or_nothing\" type=\"xsd:boolean\" />
            <xsd:attribute name=\"name\" type=\"xsd:string\" />
            <xsd:attribute name=\"custom_template\" type=\"xsd:string\" />
            <xsd:attribute name=\"organize-migrations\">
                <xsd:simpleType>
                    <xsd:restriction base=\"xsd:string\">
                        <xsd:enumeration value=\"BY_YEAR\" />
                        <xsd:enumeration value=\"BY_YEAR_AND_MONTH\" />
                        <xsd:enumeration value=\"false\" />
                    </xsd:restriction>
                </xsd:simpleType>
            </xsd:attribute>
        </xsd:complexType>
    </xsd:element>
</xsd:schema>
", "vendor/doctrine/doctrine-migrations-bundle/Resources/config/schema/doctrine_migrations-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-migrations-bundle/Resources/config/schema/doctrine_migrations-1.0.xsd");
    }
}
