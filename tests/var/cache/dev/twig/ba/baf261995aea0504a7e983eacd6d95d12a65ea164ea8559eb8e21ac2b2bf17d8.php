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

/* vendor/symfony/framework-bundle/Resources/config/schema/symfony-1.0.xsd */
class __TwigTemplate_e60229fbe512871ad8f69320e2128092d9b648fd5231b4116b8bc012f2d6aa1d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/schema/symfony-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/schema/symfony-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/symfony\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/symfony\"
    elementFormDefault=\"qualified\">

    <xsd:element name=\"config\" type=\"config\" />

    <xsd:complexType name=\"config\">
        <xsd:choice maxOccurs=\"unbounded\">
            <xsd:element name=\"assets\" type=\"assets\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"form\" type=\"form\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"csrf-protection\" type=\"csrf_protection\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"esi\" type=\"esi\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"ssi\" type=\"ssi\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"fragments\" type=\"fragments\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"web-link\" type=\"web_link\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"profiler\" type=\"profiler\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"router\" type=\"router\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"session\" type=\"session\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"request\" type=\"request\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"templating\" type=\"templating\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"translator\" type=\"translator\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"validation\" type=\"validation\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"annotations\" type=\"annotations\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"property-access\" type=\"property_access\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"serializer\" type=\"serializer\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"property-info\" type=\"property_info\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"cache\" type=\"cache\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"workflow\" type=\"workflow\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"php-errors\" type=\"php-errors\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"lock\" type=\"lock\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"messenger\" type=\"messenger\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"http-client\" type=\"http_client\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"mailer\" type=\"mailer\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:choice>

        <xsd:attribute name=\"http-method-override\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"ide\" type=\"xsd:string\" />
        <xsd:attribute name=\"secret\" type=\"xsd:string\" />
        <xsd:attribute name=\"default-locale\" type=\"xsd:string\" />
        <xsd:attribute name=\"test\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"form\">
        <xsd:all>
            <xsd:element name=\"csrf-protection\" type=\"form_csrf_protection\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:all>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"form_csrf_protection\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"field-name\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"csrf_protection\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"esi\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"ssi\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"fragments\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"path\" type=\"xsd:string\" />
        <xsd:attribute name=\"hinclude-default-template\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"web_link\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"profiler\">
        <xsd:attribute name=\"collect\" type=\"xsd:string\" />
        <xsd:attribute name=\"only-exceptions\" type=\"xsd:string\" />
        <xsd:attribute name=\"only-master-requests\" type=\"xsd:string\" />
        <xsd:attribute name=\"enabled\" type=\"xsd:string\" />
        <xsd:attribute name=\"dsn\" type=\"xsd:string\" />
        <xsd:attribute name=\"username\" type=\"xsd:string\" />
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
        <xsd:attribute name=\"lifetime\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"router\">
        <xsd:attribute name=\"resource\" type=\"xsd:string\" />
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"http-port\" type=\"xsd:string\" />
        <xsd:attribute name=\"https-port\" type=\"xsd:string\" />
        <xsd:attribute name=\"strict-requirements\" type=\"xsd:string\" />
        <xsd:attribute name=\"utf8\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"session\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"storage-id\" type=\"xsd:string\" />
        <xsd:attribute name=\"handler-id\" type=\"xsd:string\" />
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"cookie-lifetime\" type=\"xsd:string\" />
        <xsd:attribute name=\"cookie-path\" type=\"xsd:string\" />
        <xsd:attribute name=\"cookie-domain\" type=\"xsd:string\" />
        <xsd:attribute name=\"cookie-secure\" type=\"cookie_secure\" />
        <xsd:attribute name=\"cookie-httponly\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cookie-samesite\" type=\"cookie_samesite\" />
        <xsd:attribute name=\"use-cookies\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cache-limiter\" type=\"xsd:string\" />
        <xsd:attribute name=\"gc-maxlifetime\" type=\"xsd:string\" />
        <xsd:attribute name=\"gc-divisor\" type=\"xsd:string\" />
        <xsd:attribute name=\"gc-probability\" type=\"xsd:string\" />
        <xsd:attribute name=\"save-path\" type=\"xsd:string\" />
        <xsd:attribute name=\"metadata-update-threshold\" type=\"xsd:nonNegativeInteger\" />
        <xsd:attribute name=\"sid-length\" type=\"sid_length\" />
        <xsd:attribute name=\"sid-bits-per-character\" type=\"sid_bits_per_character\" />
    </xsd:complexType>

    <xsd:complexType name=\"request\">
        <xsd:sequence>
            <xsd:element name=\"format\" type=\"format\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
    </xsd:complexType>

    <xsd:complexType name=\"format\">
        <xsd:choice minOccurs=\"1\" maxOccurs=\"unbounded\">
            <xsd:element name=\"mime-type\" type=\"xsd:string\" />
        </xsd:choice>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"assets\">
        <xsd:sequence>
            <xsd:element name=\"base-url\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"package\" type=\"package\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>

        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"base-path\" type=\"xsd:string\" />
        <xsd:attribute name=\"version-strategy\" type=\"xsd:string\" />
        <xsd:attribute name=\"version\" type=\"xsd:string\" />
        <xsd:attribute name=\"version-format\" type=\"xsd:string\" />
        <xsd:attribute name=\"json-manifest-path\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"package\">
        <xsd:sequence>
            <xsd:element name=\"base-url\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>

        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"base-path\" type=\"xsd:string\" />
        <xsd:attribute name=\"version-strategy\" type=\"xsd:string\" />
        <xsd:attribute name=\"version\" type=\"xsd:string\" />
        <xsd:attribute name=\"version-format\" type=\"xsd:string\" />
        <xsd:attribute name=\"json-manifest-path\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"templating\">
        <xsd:sequence>
            <xsd:element name=\"loader\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"engine\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"form\" type=\"form-resources\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>

        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cache\" type=\"xsd:string\" />
        <xsd:attribute name=\"hinclude-default-template\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"form-resources\">
        <xsd:choice minOccurs=\"1\" maxOccurs=\"unbounded\">
            <xsd:element name=\"resource\" type=\"xsd:string\" />
        </xsd:choice>
    </xsd:complexType>

    <xsd:complexType name=\"translator\">
        <xsd:sequence>
            <xsd:element name=\"fallback\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"path\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"fallback\" type=\"xsd:string\" />
        <xsd:attribute name=\"logging\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"formatter\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"validation\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"static-method\" type=\"xsd:string\" />
            <xsd:element name=\"mapping\" type=\"file_mapping\" />
            <xsd:element name=\"auto-mapping\" type=\"auto_mapping\" />
        </xsd:choice>

        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cache\" type=\"xsd:string\" />
        <xsd:attribute name=\"enable-annotations\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"static-method\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"translation-domain\" type=\"xsd:string\" />
        <xsd:attribute name=\"strict-email\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"email-validation-mode\" type=\"email-validation-mode\" />
    </xsd:complexType>

    <xsd:complexType name=\"file_mapping\">
        <xsd:sequence>
            <xsd:element name=\"path\" type=\"xsd:string\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
    </xsd:complexType>

    <xsd:complexType name=\"auto_mapping\">
        <xsd:sequence>
            <xsd:element name=\"service\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"namespace\" type=\"xsd:string\" use=\"required\" />
    </xsd:complexType>

    <xsd:simpleType name=\"email-validation-mode\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"html5\" />
            <xsd:enumeration value=\"loose\" />
            <xsd:enumeration value=\"strict\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:complexType name=\"annotations\">
        <xsd:attribute name=\"cache\" type=\"xsd:string\" />
        <xsd:attribute name=\"debug\" type=\"xsd:string\" />
        <xsd:attribute name=\"file-cache-dir\" type=\"xsd:string\" />
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"property_access\">
        <xsd:attribute name=\"magic-call\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"throw-exception-on-invalid-index\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"throw-exception-on-invalid-property-path\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"serializer\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"mapping\" type=\"file_mapping\" />
        </xsd:choice>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"enable-annotations\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"name-converter\" type=\"xsd:string\" />
        <xsd:attribute name=\"circular-reference-handler\" type=\"xsd:string\" />
        <xsd:attribute name=\"max-depth-handler\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"property_info\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"cache\">
        <xsd:sequence>
            <xsd:element name=\"app\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"system\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"directory\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"default-doctrine-provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"default-psr6-provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"default-redis-provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"default-memcached-provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"default-pdo-provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"pool\" type=\"cache_pool\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>

        <xsd:attribute name=\"prefix-seed\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"cache_pool\">
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"adapter\" type=\"xsd:string\" />
        <xsd:attribute name=\"tags\" type=\"xsd:string\" />
        <xsd:attribute name=\"public\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"default-lifetime\" type=\"xsd:integer\" />
        <xsd:attribute name=\"provider\" type=\"xsd:string\" />
        <xsd:attribute name=\"clearer\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"workflow\">
        <xsd:sequence>
            <xsd:element name=\"initial-marking\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"marking-store\" type=\"marking_store\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"support\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"place\" type=\"place\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"transition\" type=\"transition\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"metadata\" type=\"metadata\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"type\" type=\"workflow_type\" />
        <xsd:attribute name=\"initial-place\" type=\"xsd:string\" />
        <xsd:attribute name=\"initial-marking\" type=\"xsd:string\" />
        <xsd:attribute name=\"support-strategy\" type=\"xsd:string\" />
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"php-errors\">
        <xsd:attribute name=\"log\" type=\"xsd:string\" />
        <xsd:attribute name=\"throw\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"marking_store\">
        <xsd:sequence>
            <xsd:element name=\"argument\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"type\" type=\"marking_store_type\" />
        <xsd:attribute name=\"service\" type=\"xsd:string\" />
        <xsd:attribute name=\"property\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:simpleType name=\"marking_store_type\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"multiple_state\" />
            <xsd:enumeration value=\"single_state\" />
            <xsd:enumeration value=\"method\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:complexType name=\"transition\">
        <xsd:sequence>
            <xsd:element name=\"from\" type=\"xsd:string\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"to\" type=\"xsd:string\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"metadata\" type=\"metadata\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"guard\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
    </xsd:complexType>

    <xsd:complexType name=\"place\" mixed=\"true\">
        <xsd:sequence>
            <xsd:element name=\"metadata\" type=\"metadata\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"metadata\">
        <xsd:sequence>
            <xsd:any minOccurs=\"0\" processContents=\"lax\"/>
        </xsd:sequence>
    </xsd:complexType>

    <xsd:simpleType name=\"default_middleware\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"true\" />
            <xsd:enumeration value=\"false\" />
            <xsd:enumeration value=\"1\" />
            <xsd:enumeration value=\"0\" />
            <xsd:enumeration value=\"allow_no_handlers\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:simpleType name=\"cookie_secure\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"true\" />
            <xsd:enumeration value=\"false\" />
            <xsd:enumeration value=\"1\" />
            <xsd:enumeration value=\"0\" />
            <xsd:enumeration value=\"auto\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:simpleType name=\"cookie_samesite\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"\" />
            <xsd:enumeration value=\"lax\" />
            <xsd:enumeration value=\"strict\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:simpleType name=\"sid_bits_per_character\">
        <xsd:restriction base=\"xsd:positiveInteger\">
            <xsd:enumeration value=\"4\" />
            <xsd:enumeration value=\"5\" />
            <xsd:enumeration value=\"6\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:simpleType name=\"sid_length\">
        <xsd:restriction base=\"xsd:positiveInteger\">
            <xsd:minInclusive value=\"22\" />
            <xsd:maxInclusive value=\"256\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:simpleType name=\"workflow_type\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"state_machine\" />
            <xsd:enumeration value=\"workflow\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:complexType name=\"lock\">
        <xsd:sequence>
            <xsd:element name=\"resource\" type=\"lock_resource\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"lock_resource\">
        <xsd:simpleContent>
            <xsd:extension base=\"xsd:string\">
                <xsd:attribute name=\"name\" type=\"xsd:string\" />
            </xsd:extension>
        </xsd:simpleContent>
    </xsd:complexType>

    <xsd:complexType name=\"messenger\">
        <xsd:sequence>
            <xsd:element name=\"serializer\" type=\"messenger_serializer\" minOccurs=\"0\" />
            <xsd:element name=\"routing\" type=\"messenger_routing\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"transport\" type=\"messenger_transport\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"bus\" type=\"messenger_bus\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"default-bus\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"messenger_serializer\">
        <xsd:sequence>
            <xsd:element name=\"symfony-serializer\" type=\"messenger_symfony_serializer\" minOccurs=\"0\" />
        </xsd:sequence>
        <xsd:attribute name=\"default-serializer\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"messenger_symfony_serializer\">
        <xsd:sequence>
            <xsd:element name=\"context\" type=\"metadata\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"format\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"messenger_routing\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"sender\" type=\"messenger_routing_sender\" />
        </xsd:choice>
        <xsd:attribute name=\"message-class\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"messenger_routing_sender\">
        <xsd:attribute name=\"service\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"messenger_transport\">
        <xsd:sequence>
            <xsd:element name=\"options\" type=\"metadata\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"serializer\" type=\"xsd:string\" />
        <xsd:attribute name=\"dsn\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"messenger_bus\">
        <xsd:sequence>
            <xsd:element name=\"middleware\" type=\"messenger_middleware\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\"/>
        <xsd:attribute name=\"default-middleware\" type=\"default_middleware\"/>
    </xsd:complexType>

    <xsd:complexType name=\"messenger_middleware\">
        <xsd:sequence>
            <xsd:element name=\"argument\" type=\"xsd:anyType\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"http_client\">
        <xsd:sequence>
            <xsd:element name=\"default-options\" type=\"http_client_default_options\" minOccurs=\"0\" />
            <xsd:element name=\"scoped-client\" type=\"http_client_scope_options\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"max-host-connections\" type=\"xsd:integer\" />
    </xsd:complexType>

    <xsd:complexType name=\"http_client_default_options\" mixed=\"true\">
        <xsd:choice maxOccurs=\"unbounded\">
            <xsd:element name=\"resolve\" type=\"http_resolve\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"header\" type=\"http_header\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"peer-fingerprint\" type=\"fingerprint\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"max-redirects\" type=\"xsd:integer\" />
        <xsd:attribute name=\"http-version\" type=\"xsd:string\" />
        <xsd:attribute name=\"proxy\" type=\"xsd:string\" />
        <xsd:attribute name=\"no-proxy\" type=\"xsd:string\" />
        <xsd:attribute name=\"timeout\" type=\"xsd:float\" />
        <xsd:attribute name=\"bindto\" type=\"xsd:string\" />
        <xsd:attribute name=\"verify-peer\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"verify-host\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cafile\" type=\"xsd:string\" />
        <xsd:attribute name=\"capath\" type=\"xsd:string\" />
        <xsd:attribute name=\"local-cert\" type=\"xsd:string\" />
        <xsd:attribute name=\"local-pk\" type=\"xsd:string\" />
        <xsd:attribute name=\"passphrase\" type=\"xsd:string\" />
        <xsd:attribute name=\"ciphers\" type=\"xsd:string\" />

    </xsd:complexType>

    <xsd:complexType name=\"http_client_scope_options\" mixed=\"true\">
        <xsd:choice maxOccurs=\"unbounded\">
            <xsd:element name=\"query\" type=\"http_query\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"resolve\" type=\"http_resolve\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"header\" type=\"http_header\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"peer-fingerprint\" type=\"fingerprint\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"scope\" type=\"xsd:string\" />
        <xsd:attribute name=\"base-uri\" type=\"xsd:string\" />
        <xsd:attribute name=\"auth-basic\" type=\"xsd:string\" />
        <xsd:attribute name=\"auth-bearer\" type=\"xsd:string\" />
        <xsd:attribute name=\"max-redirects\" type=\"xsd:integer\" />
        <xsd:attribute name=\"http-version\" type=\"xsd:string\" />
        <xsd:attribute name=\"proxy\" type=\"xsd:string\" />
        <xsd:attribute name=\"no-proxy\" type=\"xsd:string\" />
        <xsd:attribute name=\"timeout\" type=\"xsd:float\" />
        <xsd:attribute name=\"bindto\" type=\"xsd:string\" />
        <xsd:attribute name=\"verify-peer\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"verify-host\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cafile\" type=\"xsd:string\" />
        <xsd:attribute name=\"capath\" type=\"xsd:string\" />
        <xsd:attribute name=\"local-cert\" type=\"xsd:string\" />
        <xsd:attribute name=\"local-pk\" type=\"xsd:string\" />
        <xsd:attribute name=\"passphrase\" type=\"xsd:string\" />
        <xsd:attribute name=\"ciphers\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"fingerprint\">
        <xsd:choice maxOccurs=\"unbounded\">
            <xsd:element name=\"pin-sha256\" type=\"xsd:string\" minOccurs=\"0\" />
            <xsd:element name=\"sha1\" type=\"xsd:string\" minOccurs=\"0\" />
            <xsd:element name=\"md5\" type=\"xsd:string\" minOccurs=\"0\" />
        </xsd:choice>
    </xsd:complexType>

    <xsd:complexType name=\"http_query\" mixed=\"true\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"http_resolve\" mixed=\"true\">
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"http_header\" mixed=\"true\">
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"mailer\">
        <xsd:attribute name=\"dsn\" type=\"xsd:string\" />
    </xsd:complexType>
</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/schema/symfony-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/symfony\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/symfony\"
    elementFormDefault=\"qualified\">

    <xsd:element name=\"config\" type=\"config\" />

    <xsd:complexType name=\"config\">
        <xsd:choice maxOccurs=\"unbounded\">
            <xsd:element name=\"assets\" type=\"assets\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"form\" type=\"form\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"csrf-protection\" type=\"csrf_protection\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"esi\" type=\"esi\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"ssi\" type=\"ssi\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"fragments\" type=\"fragments\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"web-link\" type=\"web_link\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"profiler\" type=\"profiler\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"router\" type=\"router\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"session\" type=\"session\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"request\" type=\"request\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"templating\" type=\"templating\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"translator\" type=\"translator\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"validation\" type=\"validation\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"annotations\" type=\"annotations\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"property-access\" type=\"property_access\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"serializer\" type=\"serializer\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"property-info\" type=\"property_info\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"cache\" type=\"cache\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"workflow\" type=\"workflow\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"php-errors\" type=\"php-errors\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"lock\" type=\"lock\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"messenger\" type=\"messenger\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"http-client\" type=\"http_client\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"mailer\" type=\"mailer\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:choice>

        <xsd:attribute name=\"http-method-override\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"ide\" type=\"xsd:string\" />
        <xsd:attribute name=\"secret\" type=\"xsd:string\" />
        <xsd:attribute name=\"default-locale\" type=\"xsd:string\" />
        <xsd:attribute name=\"test\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"form\">
        <xsd:all>
            <xsd:element name=\"csrf-protection\" type=\"form_csrf_protection\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:all>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"form_csrf_protection\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"field-name\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"csrf_protection\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"esi\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"ssi\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"fragments\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"path\" type=\"xsd:string\" />
        <xsd:attribute name=\"hinclude-default-template\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"web_link\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"profiler\">
        <xsd:attribute name=\"collect\" type=\"xsd:string\" />
        <xsd:attribute name=\"only-exceptions\" type=\"xsd:string\" />
        <xsd:attribute name=\"only-master-requests\" type=\"xsd:string\" />
        <xsd:attribute name=\"enabled\" type=\"xsd:string\" />
        <xsd:attribute name=\"dsn\" type=\"xsd:string\" />
        <xsd:attribute name=\"username\" type=\"xsd:string\" />
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
        <xsd:attribute name=\"lifetime\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"router\">
        <xsd:attribute name=\"resource\" type=\"xsd:string\" />
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"http-port\" type=\"xsd:string\" />
        <xsd:attribute name=\"https-port\" type=\"xsd:string\" />
        <xsd:attribute name=\"strict-requirements\" type=\"xsd:string\" />
        <xsd:attribute name=\"utf8\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"session\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"storage-id\" type=\"xsd:string\" />
        <xsd:attribute name=\"handler-id\" type=\"xsd:string\" />
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"cookie-lifetime\" type=\"xsd:string\" />
        <xsd:attribute name=\"cookie-path\" type=\"xsd:string\" />
        <xsd:attribute name=\"cookie-domain\" type=\"xsd:string\" />
        <xsd:attribute name=\"cookie-secure\" type=\"cookie_secure\" />
        <xsd:attribute name=\"cookie-httponly\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cookie-samesite\" type=\"cookie_samesite\" />
        <xsd:attribute name=\"use-cookies\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cache-limiter\" type=\"xsd:string\" />
        <xsd:attribute name=\"gc-maxlifetime\" type=\"xsd:string\" />
        <xsd:attribute name=\"gc-divisor\" type=\"xsd:string\" />
        <xsd:attribute name=\"gc-probability\" type=\"xsd:string\" />
        <xsd:attribute name=\"save-path\" type=\"xsd:string\" />
        <xsd:attribute name=\"metadata-update-threshold\" type=\"xsd:nonNegativeInteger\" />
        <xsd:attribute name=\"sid-length\" type=\"sid_length\" />
        <xsd:attribute name=\"sid-bits-per-character\" type=\"sid_bits_per_character\" />
    </xsd:complexType>

    <xsd:complexType name=\"request\">
        <xsd:sequence>
            <xsd:element name=\"format\" type=\"format\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
    </xsd:complexType>

    <xsd:complexType name=\"format\">
        <xsd:choice minOccurs=\"1\" maxOccurs=\"unbounded\">
            <xsd:element name=\"mime-type\" type=\"xsd:string\" />
        </xsd:choice>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"assets\">
        <xsd:sequence>
            <xsd:element name=\"base-url\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"package\" type=\"package\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>

        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"base-path\" type=\"xsd:string\" />
        <xsd:attribute name=\"version-strategy\" type=\"xsd:string\" />
        <xsd:attribute name=\"version\" type=\"xsd:string\" />
        <xsd:attribute name=\"version-format\" type=\"xsd:string\" />
        <xsd:attribute name=\"json-manifest-path\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"package\">
        <xsd:sequence>
            <xsd:element name=\"base-url\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>

        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"base-path\" type=\"xsd:string\" />
        <xsd:attribute name=\"version-strategy\" type=\"xsd:string\" />
        <xsd:attribute name=\"version\" type=\"xsd:string\" />
        <xsd:attribute name=\"version-format\" type=\"xsd:string\" />
        <xsd:attribute name=\"json-manifest-path\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"templating\">
        <xsd:sequence>
            <xsd:element name=\"loader\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"engine\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"form\" type=\"form-resources\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>

        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cache\" type=\"xsd:string\" />
        <xsd:attribute name=\"hinclude-default-template\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"form-resources\">
        <xsd:choice minOccurs=\"1\" maxOccurs=\"unbounded\">
            <xsd:element name=\"resource\" type=\"xsd:string\" />
        </xsd:choice>
    </xsd:complexType>

    <xsd:complexType name=\"translator\">
        <xsd:sequence>
            <xsd:element name=\"fallback\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"path\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"fallback\" type=\"xsd:string\" />
        <xsd:attribute name=\"logging\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"formatter\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"validation\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"static-method\" type=\"xsd:string\" />
            <xsd:element name=\"mapping\" type=\"file_mapping\" />
            <xsd:element name=\"auto-mapping\" type=\"auto_mapping\" />
        </xsd:choice>

        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cache\" type=\"xsd:string\" />
        <xsd:attribute name=\"enable-annotations\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"static-method\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"translation-domain\" type=\"xsd:string\" />
        <xsd:attribute name=\"strict-email\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"email-validation-mode\" type=\"email-validation-mode\" />
    </xsd:complexType>

    <xsd:complexType name=\"file_mapping\">
        <xsd:sequence>
            <xsd:element name=\"path\" type=\"xsd:string\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
    </xsd:complexType>

    <xsd:complexType name=\"auto_mapping\">
        <xsd:sequence>
            <xsd:element name=\"service\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"namespace\" type=\"xsd:string\" use=\"required\" />
    </xsd:complexType>

    <xsd:simpleType name=\"email-validation-mode\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"html5\" />
            <xsd:enumeration value=\"loose\" />
            <xsd:enumeration value=\"strict\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:complexType name=\"annotations\">
        <xsd:attribute name=\"cache\" type=\"xsd:string\" />
        <xsd:attribute name=\"debug\" type=\"xsd:string\" />
        <xsd:attribute name=\"file-cache-dir\" type=\"xsd:string\" />
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"property_access\">
        <xsd:attribute name=\"magic-call\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"throw-exception-on-invalid-index\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"throw-exception-on-invalid-property-path\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"serializer\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"mapping\" type=\"file_mapping\" />
        </xsd:choice>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"enable-annotations\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"name-converter\" type=\"xsd:string\" />
        <xsd:attribute name=\"circular-reference-handler\" type=\"xsd:string\" />
        <xsd:attribute name=\"max-depth-handler\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"property_info\">
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"cache\">
        <xsd:sequence>
            <xsd:element name=\"app\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"system\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"directory\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"default-doctrine-provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"default-psr6-provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"default-redis-provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"default-memcached-provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"default-pdo-provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"pool\" type=\"cache_pool\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>

        <xsd:attribute name=\"prefix-seed\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"cache_pool\">
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"adapter\" type=\"xsd:string\" />
        <xsd:attribute name=\"tags\" type=\"xsd:string\" />
        <xsd:attribute name=\"public\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"default-lifetime\" type=\"xsd:integer\" />
        <xsd:attribute name=\"provider\" type=\"xsd:string\" />
        <xsd:attribute name=\"clearer\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"workflow\">
        <xsd:sequence>
            <xsd:element name=\"initial-marking\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"marking-store\" type=\"marking_store\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"support\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"place\" type=\"place\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"transition\" type=\"transition\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"metadata\" type=\"metadata\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"type\" type=\"workflow_type\" />
        <xsd:attribute name=\"initial-place\" type=\"xsd:string\" />
        <xsd:attribute name=\"initial-marking\" type=\"xsd:string\" />
        <xsd:attribute name=\"support-strategy\" type=\"xsd:string\" />
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"php-errors\">
        <xsd:attribute name=\"log\" type=\"xsd:string\" />
        <xsd:attribute name=\"throw\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"marking_store\">
        <xsd:sequence>
            <xsd:element name=\"argument\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"type\" type=\"marking_store_type\" />
        <xsd:attribute name=\"service\" type=\"xsd:string\" />
        <xsd:attribute name=\"property\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:simpleType name=\"marking_store_type\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"multiple_state\" />
            <xsd:enumeration value=\"single_state\" />
            <xsd:enumeration value=\"method\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:complexType name=\"transition\">
        <xsd:sequence>
            <xsd:element name=\"from\" type=\"xsd:string\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"to\" type=\"xsd:string\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"metadata\" type=\"metadata\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"guard\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
    </xsd:complexType>

    <xsd:complexType name=\"place\" mixed=\"true\">
        <xsd:sequence>
            <xsd:element name=\"metadata\" type=\"metadata\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"metadata\">
        <xsd:sequence>
            <xsd:any minOccurs=\"0\" processContents=\"lax\"/>
        </xsd:sequence>
    </xsd:complexType>

    <xsd:simpleType name=\"default_middleware\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"true\" />
            <xsd:enumeration value=\"false\" />
            <xsd:enumeration value=\"1\" />
            <xsd:enumeration value=\"0\" />
            <xsd:enumeration value=\"allow_no_handlers\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:simpleType name=\"cookie_secure\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"true\" />
            <xsd:enumeration value=\"false\" />
            <xsd:enumeration value=\"1\" />
            <xsd:enumeration value=\"0\" />
            <xsd:enumeration value=\"auto\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:simpleType name=\"cookie_samesite\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"\" />
            <xsd:enumeration value=\"lax\" />
            <xsd:enumeration value=\"strict\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:simpleType name=\"sid_bits_per_character\">
        <xsd:restriction base=\"xsd:positiveInteger\">
            <xsd:enumeration value=\"4\" />
            <xsd:enumeration value=\"5\" />
            <xsd:enumeration value=\"6\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:simpleType name=\"sid_length\">
        <xsd:restriction base=\"xsd:positiveInteger\">
            <xsd:minInclusive value=\"22\" />
            <xsd:maxInclusive value=\"256\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:simpleType name=\"workflow_type\">
        <xsd:restriction base=\"xsd:string\">
            <xsd:enumeration value=\"state_machine\" />
            <xsd:enumeration value=\"workflow\" />
        </xsd:restriction>
    </xsd:simpleType>

    <xsd:complexType name=\"lock\">
        <xsd:sequence>
            <xsd:element name=\"resource\" type=\"lock_resource\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"lock_resource\">
        <xsd:simpleContent>
            <xsd:extension base=\"xsd:string\">
                <xsd:attribute name=\"name\" type=\"xsd:string\" />
            </xsd:extension>
        </xsd:simpleContent>
    </xsd:complexType>

    <xsd:complexType name=\"messenger\">
        <xsd:sequence>
            <xsd:element name=\"serializer\" type=\"messenger_serializer\" minOccurs=\"0\" />
            <xsd:element name=\"routing\" type=\"messenger_routing\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"transport\" type=\"messenger_transport\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"bus\" type=\"messenger_bus\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"default-bus\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"messenger_serializer\">
        <xsd:sequence>
            <xsd:element name=\"symfony-serializer\" type=\"messenger_symfony_serializer\" minOccurs=\"0\" />
        </xsd:sequence>
        <xsd:attribute name=\"default-serializer\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"messenger_symfony_serializer\">
        <xsd:sequence>
            <xsd:element name=\"context\" type=\"metadata\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"format\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"messenger_routing\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"sender\" type=\"messenger_routing_sender\" />
        </xsd:choice>
        <xsd:attribute name=\"message-class\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"messenger_routing_sender\">
        <xsd:attribute name=\"service\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"messenger_transport\">
        <xsd:sequence>
            <xsd:element name=\"options\" type=\"metadata\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"serializer\" type=\"xsd:string\" />
        <xsd:attribute name=\"dsn\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"messenger_bus\">
        <xsd:sequence>
            <xsd:element name=\"middleware\" type=\"messenger_middleware\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\"/>
        <xsd:attribute name=\"default-middleware\" type=\"default_middleware\"/>
    </xsd:complexType>

    <xsd:complexType name=\"messenger_middleware\">
        <xsd:sequence>
            <xsd:element name=\"argument\" type=\"xsd:anyType\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"http_client\">
        <xsd:sequence>
            <xsd:element name=\"default-options\" type=\"http_client_default_options\" minOccurs=\"0\" />
            <xsd:element name=\"scoped-client\" type=\"http_client_scope_options\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:sequence>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"max-host-connections\" type=\"xsd:integer\" />
    </xsd:complexType>

    <xsd:complexType name=\"http_client_default_options\" mixed=\"true\">
        <xsd:choice maxOccurs=\"unbounded\">
            <xsd:element name=\"resolve\" type=\"http_resolve\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"header\" type=\"http_header\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"peer-fingerprint\" type=\"fingerprint\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"max-redirects\" type=\"xsd:integer\" />
        <xsd:attribute name=\"http-version\" type=\"xsd:string\" />
        <xsd:attribute name=\"proxy\" type=\"xsd:string\" />
        <xsd:attribute name=\"no-proxy\" type=\"xsd:string\" />
        <xsd:attribute name=\"timeout\" type=\"xsd:float\" />
        <xsd:attribute name=\"bindto\" type=\"xsd:string\" />
        <xsd:attribute name=\"verify-peer\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"verify-host\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cafile\" type=\"xsd:string\" />
        <xsd:attribute name=\"capath\" type=\"xsd:string\" />
        <xsd:attribute name=\"local-cert\" type=\"xsd:string\" />
        <xsd:attribute name=\"local-pk\" type=\"xsd:string\" />
        <xsd:attribute name=\"passphrase\" type=\"xsd:string\" />
        <xsd:attribute name=\"ciphers\" type=\"xsd:string\" />

    </xsd:complexType>

    <xsd:complexType name=\"http_client_scope_options\" mixed=\"true\">
        <xsd:choice maxOccurs=\"unbounded\">
            <xsd:element name=\"query\" type=\"http_query\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"resolve\" type=\"http_resolve\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"header\" type=\"http_header\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"peer-fingerprint\" type=\"fingerprint\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"scope\" type=\"xsd:string\" />
        <xsd:attribute name=\"base-uri\" type=\"xsd:string\" />
        <xsd:attribute name=\"auth-basic\" type=\"xsd:string\" />
        <xsd:attribute name=\"auth-bearer\" type=\"xsd:string\" />
        <xsd:attribute name=\"max-redirects\" type=\"xsd:integer\" />
        <xsd:attribute name=\"http-version\" type=\"xsd:string\" />
        <xsd:attribute name=\"proxy\" type=\"xsd:string\" />
        <xsd:attribute name=\"no-proxy\" type=\"xsd:string\" />
        <xsd:attribute name=\"timeout\" type=\"xsd:float\" />
        <xsd:attribute name=\"bindto\" type=\"xsd:string\" />
        <xsd:attribute name=\"verify-peer\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"verify-host\" type=\"xsd:boolean\" />
        <xsd:attribute name=\"cafile\" type=\"xsd:string\" />
        <xsd:attribute name=\"capath\" type=\"xsd:string\" />
        <xsd:attribute name=\"local-cert\" type=\"xsd:string\" />
        <xsd:attribute name=\"local-pk\" type=\"xsd:string\" />
        <xsd:attribute name=\"passphrase\" type=\"xsd:string\" />
        <xsd:attribute name=\"ciphers\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"fingerprint\">
        <xsd:choice maxOccurs=\"unbounded\">
            <xsd:element name=\"pin-sha256\" type=\"xsd:string\" minOccurs=\"0\" />
            <xsd:element name=\"sha1\" type=\"xsd:string\" minOccurs=\"0\" />
            <xsd:element name=\"md5\" type=\"xsd:string\" minOccurs=\"0\" />
        </xsd:choice>
    </xsd:complexType>

    <xsd:complexType name=\"http_query\" mixed=\"true\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"http_resolve\" mixed=\"true\">
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"http_header\" mixed=\"true\">
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"mailer\">
        <xsd:attribute name=\"dsn\" type=\"xsd:string\" />
    </xsd:complexType>
</xsd:schema>
", "vendor/symfony/framework-bundle/Resources/config/schema/symfony-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/schema/symfony-1.0.xsd");
    }
}
