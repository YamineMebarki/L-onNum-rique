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

/* vendor/symfony/monolog-bundle/Resources/config/schema/monolog-1.0.xsd */
class __TwigTemplate_369231b6bf803ddfe60d97308aac1e2a4868860eccc62351f1331d5eccb01b3f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Resources/config/schema/monolog-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Resources/config/schema/monolog-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/monolog\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/monolog\"
    elementFormDefault=\"qualified\">

    <xsd:element name=\"config\" type=\"config\" />

    <xsd:complexType name=\"config\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"handler\" type=\"handler\" />
            <xsd:element name=\"channel\" type=\"xsd:string\" />
        </xsd:choice>
    </xsd:complexType>

    <xsd:complexType name=\"handler\">
        <xsd:sequence>
            <xsd:element name=\"email-prototype\" type=\"email-prototype\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"member\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"channels\" type=\"channels\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"publisher\" type=\"publisher\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"mongo\" type=\"mongo\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"elasticsearch\" type=\"elasticsearch\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"config\" type=\"xsd:anyType\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"excluded-404\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"excluded-http-code\" type=\"excluded-http-code\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"tag\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"accepted-level\" type=\"level\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"to-email\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"header\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"priority\" type=\"xsd:integer\" />
        <xsd:attribute name=\"level\" type=\"level\" />
        <xsd:attribute name=\"bubble\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"process-psr-3-messages\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"use_locking\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"app-name\" type=\"xsd:string\" />
        <xsd:attribute name=\"path\" type=\"xsd:string\" />
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"ident\" type=\"xsd:string\" />
        <xsd:attribute name=\"facility\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
        <xsd:attribute name=\"source\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:integer\" />
        <xsd:attribute name=\"action-level\" type=\"level\" />
        <xsd:attribute name=\"passthru-level\" type=\"level\" />
        <xsd:attribute name=\"min-level\" type=\"level\" />
        <xsd:attribute name=\"max-level\" type=\"level\" />
        <xsd:attribute name=\"buffer-size\" type=\"xsd:integer\" />
        <xsd:attribute name=\"flush-on-overflow\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"max-files\" type=\"xsd:integer\" />
        <xsd:attribute name=\"handler\" type=\"xsd:string\" />
        <xsd:attribute name=\"from-email\" type=\"xsd:string\" />
        <xsd:attribute name=\"to-email\" type=\"xsd:string\" />
        <xsd:attribute name=\"subject\" type=\"xsd:string\" />
        <xsd:attribute name=\"notify\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"room\" type=\"xsd:string\" />
        <xsd:attribute name=\"nickname\" type=\"xsd:string\" />
        <xsd:attribute name=\"release\" type=\"xsd:string\" />
        <xsd:attribute name=\"timeout\" type=\"xsd:string\" />
        <xsd:attribute name=\"time\" type=\"xsd:integer\" />
        <xsd:attribute name=\"store\" type=\"xsd:string\" />
        <xsd:attribute name=\"deduplication-level\" type=\"level\" />
        <xsd:attribute name=\"connection-timeout\" type=\"xsd:string\" />
        <xsd:attribute name=\"persistent\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"dsn\" type=\"xsd:string\" />
        <xsd:attribute name=\"client-id\" type=\"xsd:string\" />
        <xsd:attribute name=\"use-ssl\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"formatter\" type=\"xsd:string\" />
        <xsd:attribute name=\"token\" type=\"xsd:string\" />
        <xsd:attribute name=\"channel\" type=\"xsd:string\" />
        <xsd:attribute name=\"bot-name\" type=\"xsd:string\" />
        <xsd:attribute name=\"use-attachment\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"use-short-attachment\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"include-extra\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"icon-emoji\" type=\"xsd:string\" />
        <xsd:attribute name=\"file-permission\" type=\"xsd:string\" />
        <xsd:attribute name=\"filename-format\" type=\"xsd:string\" />
        <xsd:attribute name=\"date-format\" type=\"xsd:string\" />
        <xsd:attribute name=\"index\" type=\"xsd:string\" />
        <xsd:attribute name=\"document_type\" type=\"xsd:string\" />
        <xsd:attribute name=\"document-type\" type=\"xsd:string\" />
        <xsd:attribute name=\"ignore-error\" type=\"xsd:string\" />
        <xsd:attribute name=\"api_version\" type=\"xsd:string\" />
        <xsd:attribute name=\"include-stacktraces\" type=\"xsd:string\" />
        <xsd:attribute name=\"content-type\" type=\"xsd:string\" />
        <xsd:attribute name=\"webhook-url\" type=\"xsd:string\" />
        <xsd:attribute name=\"slack-team\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:simpleType name=\"level\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"debug\" />
            <xsd:enumeration value=\"info\" />
            <xsd:enumeration value=\"notice\" />
            <xsd:enumeration value=\"warning\" />
            <xsd:enumeration value=\"error\" />
            <xsd:enumeration value=\"critical\" />
            <xsd:enumeration value=\"alert\" />
            <xsd:enumeration value=\"emergency\" />

            <xsd:enumeration value=\"DEBUG\" />
            <xsd:enumeration value=\"INFO\" />
            <xsd:enumeration value=\"NOTICE\" />
            <xsd:enumeration value=\"WARNING\" />
            <xsd:enumeration value=\"ERROR\" />
            <xsd:enumeration value=\"CRITICAL\" />
            <xsd:enumeration value=\"ALERT\" />
            <xsd:enumeration value=\"EMERGENCY\" />

            <xsd:enumeration value=\"100\" />
            <xsd:enumeration value=\"200\" />
            <xsd:enumeration value=\"250\" />
            <xsd:enumeration value=\"300\" />
            <xsd:enumeration value=\"400\" />
            <xsd:enumeration value=\"500\" />
            <xsd:enumeration value=\"550\" />
            <xsd:enumeration value=\"600\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:complexType name=\"publisher\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"hostname\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:integer\" />
        <xsd:attribute name=\"chunk_size\" type=\"xsd:integer\" />
    </xsd:complexType>

    <xsd:complexType name=\"email-prototype\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"method\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"channels\">
        <xsd:sequence>
            <xsd:element name=\"channel\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"type\" type=\"channel_type\" />
    </xsd:complexType>

    <xsd:simpleType name=\"channel_type\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"inclusive\" />
            <xsd:enumeration value=\"exclusive\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:complexType name=\"mongo\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:integer\" />
        <xsd:attribute name=\"user\" type=\"xsd:string\" />
        <xsd:attribute name=\"pass\" type=\"xsd:string\" />
        <xsd:attribute name=\"database\" type=\"xsd:string\" />
        <xsd:attribute name=\"collection\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"redis\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:integer\" />
        <xsd:attribute name=\"database\" type=\"xsd:integer\" />
        <xsd:attribute name=\"key_name\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"predis\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"elasticsearch\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:integer\" />
        <xsd:attribute name=\"transport\" type=\"xsd:string\" />
        <xsd:attribute name=\"user\" type=\"xsd:string\" />
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"excluded-http-code\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"url\" type=\"xsd:string\" />
        </xsd:choice>
        <xsd:attribute name=\"code\" type=\"xsd:integer\" />
    </xsd:complexType>

    <xsd:complexType name=\"headers\">
        <xsd:sequence>
            <xsd:any minOccurs=\"0\" processContents=\"lax\"/>
        </xsd:sequence>
    </xsd:complexType>
</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Resources/config/schema/monolog-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/monolog\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/monolog\"
    elementFormDefault=\"qualified\">

    <xsd:element name=\"config\" type=\"config\" />

    <xsd:complexType name=\"config\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"handler\" type=\"handler\" />
            <xsd:element name=\"channel\" type=\"xsd:string\" />
        </xsd:choice>
    </xsd:complexType>

    <xsd:complexType name=\"handler\">
        <xsd:sequence>
            <xsd:element name=\"email-prototype\" type=\"email-prototype\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"member\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"channels\" type=\"channels\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"publisher\" type=\"publisher\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"mongo\" type=\"mongo\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"elasticsearch\" type=\"elasticsearch\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"config\" type=\"xsd:anyType\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"excluded-404\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"excluded-http-code\" type=\"excluded-http-code\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"tag\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"accepted-level\" type=\"level\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"to-email\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"header\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"priority\" type=\"xsd:integer\" />
        <xsd:attribute name=\"level\" type=\"level\" />
        <xsd:attribute name=\"bubble\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"process-psr-3-messages\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"use_locking\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"app-name\" type=\"xsd:string\" />
        <xsd:attribute name=\"path\" type=\"xsd:string\" />
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"ident\" type=\"xsd:string\" />
        <xsd:attribute name=\"facility\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
        <xsd:attribute name=\"source\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:integer\" />
        <xsd:attribute name=\"action-level\" type=\"level\" />
        <xsd:attribute name=\"passthru-level\" type=\"level\" />
        <xsd:attribute name=\"min-level\" type=\"level\" />
        <xsd:attribute name=\"max-level\" type=\"level\" />
        <xsd:attribute name=\"buffer-size\" type=\"xsd:integer\" />
        <xsd:attribute name=\"flush-on-overflow\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"max-files\" type=\"xsd:integer\" />
        <xsd:attribute name=\"handler\" type=\"xsd:string\" />
        <xsd:attribute name=\"from-email\" type=\"xsd:string\" />
        <xsd:attribute name=\"to-email\" type=\"xsd:string\" />
        <xsd:attribute name=\"subject\" type=\"xsd:string\" />
        <xsd:attribute name=\"notify\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"room\" type=\"xsd:string\" />
        <xsd:attribute name=\"nickname\" type=\"xsd:string\" />
        <xsd:attribute name=\"release\" type=\"xsd:string\" />
        <xsd:attribute name=\"timeout\" type=\"xsd:string\" />
        <xsd:attribute name=\"time\" type=\"xsd:integer\" />
        <xsd:attribute name=\"store\" type=\"xsd:string\" />
        <xsd:attribute name=\"deduplication-level\" type=\"level\" />
        <xsd:attribute name=\"connection-timeout\" type=\"xsd:string\" />
        <xsd:attribute name=\"persistent\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"dsn\" type=\"xsd:string\" />
        <xsd:attribute name=\"client-id\" type=\"xsd:string\" />
        <xsd:attribute name=\"use-ssl\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"formatter\" type=\"xsd:string\" />
        <xsd:attribute name=\"token\" type=\"xsd:string\" />
        <xsd:attribute name=\"channel\" type=\"xsd:string\" />
        <xsd:attribute name=\"bot-name\" type=\"xsd:string\" />
        <xsd:attribute name=\"use-attachment\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"use-short-attachment\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"include-extra\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"icon-emoji\" type=\"xsd:string\" />
        <xsd:attribute name=\"file-permission\" type=\"xsd:string\" />
        <xsd:attribute name=\"filename-format\" type=\"xsd:string\" />
        <xsd:attribute name=\"date-format\" type=\"xsd:string\" />
        <xsd:attribute name=\"index\" type=\"xsd:string\" />
        <xsd:attribute name=\"document_type\" type=\"xsd:string\" />
        <xsd:attribute name=\"document-type\" type=\"xsd:string\" />
        <xsd:attribute name=\"ignore-error\" type=\"xsd:string\" />
        <xsd:attribute name=\"api_version\" type=\"xsd:string\" />
        <xsd:attribute name=\"include-stacktraces\" type=\"xsd:string\" />
        <xsd:attribute name=\"content-type\" type=\"xsd:string\" />
        <xsd:attribute name=\"webhook-url\" type=\"xsd:string\" />
        <xsd:attribute name=\"slack-team\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:simpleType name=\"level\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"debug\" />
            <xsd:enumeration value=\"info\" />
            <xsd:enumeration value=\"notice\" />
            <xsd:enumeration value=\"warning\" />
            <xsd:enumeration value=\"error\" />
            <xsd:enumeration value=\"critical\" />
            <xsd:enumeration value=\"alert\" />
            <xsd:enumeration value=\"emergency\" />

            <xsd:enumeration value=\"DEBUG\" />
            <xsd:enumeration value=\"INFO\" />
            <xsd:enumeration value=\"NOTICE\" />
            <xsd:enumeration value=\"WARNING\" />
            <xsd:enumeration value=\"ERROR\" />
            <xsd:enumeration value=\"CRITICAL\" />
            <xsd:enumeration value=\"ALERT\" />
            <xsd:enumeration value=\"EMERGENCY\" />

            <xsd:enumeration value=\"100\" />
            <xsd:enumeration value=\"200\" />
            <xsd:enumeration value=\"250\" />
            <xsd:enumeration value=\"300\" />
            <xsd:enumeration value=\"400\" />
            <xsd:enumeration value=\"500\" />
            <xsd:enumeration value=\"550\" />
            <xsd:enumeration value=\"600\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:complexType name=\"publisher\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"hostname\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:integer\" />
        <xsd:attribute name=\"chunk_size\" type=\"xsd:integer\" />
    </xsd:complexType>

    <xsd:complexType name=\"email-prototype\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"method\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"channels\">
        <xsd:sequence>
            <xsd:element name=\"channel\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"type\" type=\"channel_type\" />
    </xsd:complexType>

    <xsd:simpleType name=\"channel_type\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"inclusive\" />
            <xsd:enumeration value=\"exclusive\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:complexType name=\"mongo\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:integer\" />
        <xsd:attribute name=\"user\" type=\"xsd:string\" />
        <xsd:attribute name=\"pass\" type=\"xsd:string\" />
        <xsd:attribute name=\"database\" type=\"xsd:string\" />
        <xsd:attribute name=\"collection\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"redis\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:integer\" />
        <xsd:attribute name=\"database\" type=\"xsd:integer\" />
        <xsd:attribute name=\"key_name\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"predis\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"elasticsearch\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:integer\" />
        <xsd:attribute name=\"transport\" type=\"xsd:string\" />
        <xsd:attribute name=\"user\" type=\"xsd:string\" />
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"excluded-http-code\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"url\" type=\"xsd:string\" />
        </xsd:choice>
        <xsd:attribute name=\"code\" type=\"xsd:integer\" />
    </xsd:complexType>

    <xsd:complexType name=\"headers\">
        <xsd:sequence>
            <xsd:any minOccurs=\"0\" processContents=\"lax\"/>
        </xsd:sequence>
    </xsd:complexType>
</xsd:schema>
", "vendor/symfony/monolog-bundle/Resources/config/schema/monolog-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Resources/config/schema/monolog-1.0.xsd");
    }
}
