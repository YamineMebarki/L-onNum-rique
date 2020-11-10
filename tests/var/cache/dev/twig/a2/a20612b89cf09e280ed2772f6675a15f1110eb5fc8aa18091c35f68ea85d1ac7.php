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

/* vendor/doctrine/doctrine-bundle/Resources/config/schema/doctrine-1.0.xsd */
class __TwigTemplate_3a9cfe2037b13024f950987546b0cbf95c040f320a496e5ad7d563c130b2e2a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Resources/config/schema/doctrine-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Resources/config/schema/doctrine-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/doctrine\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/doctrine\"
    elementFormDefault=\"qualified\">

    <xsd:element name=\"config\">
        <xsd:complexType>
            <xsd:all>
                <xsd:element name=\"dbal\" type=\"dbal\" minOccurs=\"0\" maxOccurs=\"1\" />
                <xsd:element name=\"orm\" type=\"orm\" minOccurs=\"0\" maxOccurs=\"1\" />
            </xsd:all>
        </xsd:complexType>
    </xsd:element>

    <xsd:complexType name=\"named_scalar\">
        <xsd:simpleContent>
            <xsd:extension base=\"xsd:string\">
                <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
            </xsd:extension>
        </xsd:simpleContent>
    </xsd:complexType>

    <!-- DBAL configuration -->

    <xsd:attributeGroup name=\"connection-config\">
        <xsd:attribute name=\"driver\" type=\"xsd:string\" />
        <xsd:attribute name=\"driver-class\" type=\"xsd:string\" />
        <xsd:attribute name=\"wrapper-class\" type=\"xsd:string\" />
        <xsd:attribute name=\"keep-slave\" type=\"xsd:string\" />
        <xsd:attribute name=\"platform-service\" type=\"xsd:string\" />
        <xsd:attribute name=\"shard-choser\" type=\"xsd:string\" />
        <xsd:attribute name=\"shard-choser-service\" type=\"xsd:string\" />
        <xsd:attribute name=\"auto-commit\" type=\"xsd:string\" />
        <xsd:attribute name=\"schema-filter\" type=\"xsd:string\" />
        <xsd:attribute name=\"logging\" type=\"xsd:string\" default=\"false\" />
        <xsd:attribute name=\"profiling\" type=\"xsd:string\" default=\"false\" />
        <xsd:attribute name=\"profiling-collect-backtrace\" type=\"xsd:string\" default=\"false\" />
        <xsd:attribute name=\"server-version\" type=\"xsd:string\" />
        <xsd:attribute name=\"use-savepoints\" type=\"xsd:boolean\" />
        <xsd:attributeGroup ref=\"driver-config\" />
    </xsd:attributeGroup>

    <xsd:attributeGroup name=\"driver-config\">
        <xsd:attribute name=\"url\" type=\"xsd:string\" />
        <xsd:attribute name=\"dbname\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:string\" />
        <xsd:attribute name=\"user\" type=\"xsd:string\" />
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
        <xsd:attribute name=\"application-name\" type=\"xsd:string\" />
        <xsd:attribute name=\"path\" type=\"xsd:string\" />
        <xsd:attribute name=\"unix-socket\" type=\"xsd:string\" />
        <xsd:attribute name=\"memory\" type=\"xsd:string\" />
        <xsd:attribute name=\"charset\" type=\"xsd:string\" />
        <xsd:attribute name=\"persistent\" type=\"xsd:string\" />
        <xsd:attribute name=\"protocol\" type=\"xsd:string\" />
        <xsd:attribute name=\"server\" type=\"xsd:string\" />
        <xsd:attribute name=\"service\" type=\"xsd:string\" />
        <xsd:attribute name=\"servicename\" type=\"xsd:string\" />
        <xsd:attribute name=\"session-mode\" type=\"xsd:string\" />
        <xsd:attribute name=\"default_dbname\" type=\"xsd:string\" />
        <xsd:attribute name=\"sslmode\" type=\"xsd:string\" />
        <xsd:attribute name=\"sslrootcert\" type=\"xsd:string\" />
        <xsd:attribute name=\"sslcert\" type=\"xsd:string\" />
        <xsd:attribute name=\"sslkey\" type=\"xsd:string\" />
        <xsd:attribute name=\"sslcrl\" type=\"xsd:string\" />
        <xsd:attribute name=\"pooled\" type=\"xsd:string\" />
        <xsd:attribute name=\"multiple-active-result-sets\" type=\"xsd:string\" />
        <xsd:attribute name=\"connectstring\" type=\"xsd:string\" />
        <xsd:attribute name=\"instancename\" type=\"xsd:string\" />
    </xsd:attributeGroup>

    <xsd:group name=\"connection-child-config\">
        <xsd:choice>
            <xsd:element name=\"option\" type=\"option\" />
            <xsd:element name=\"mapping-type\" type=\"named_scalar\" />
            <xsd:element name=\"slave\" type=\"slave\" />
            <xsd:element name=\"shard\" type=\"shard\" />
            <xsd:element name=\"default-table-option\" type=\"named_scalar\" />
        </xsd:choice>
    </xsd:group>

    <xsd:complexType name=\"dbal\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"connection\" type=\"connection\" />
            <xsd:element name=\"type\" type=\"named_scalar\" />
            <xsd:group ref=\"connection-child-config\" />
        </xsd:choice>

        <xsd:attribute name=\"default-connection\" type=\"xsd:string\" />
        <xsd:attributeGroup ref=\"connection-config\" />
    </xsd:complexType>

    <xsd:complexType name=\"option\">
        <xsd:simpleContent>
            <xsd:extension base=\"xsd:string\">
                <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
            </xsd:extension>
        </xsd:simpleContent>
    </xsd:complexType>

    <xsd:complexType name=\"connection\">
        <xsd:group ref=\"connection-child-config\" minOccurs=\"0\" maxOccurs=\"unbounded\" />

        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attributeGroup ref=\"connection-config\" />
    </xsd:complexType>

    <xsd:complexType name=\"slave\">
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attributeGroup ref=\"driver-config\" />
    </xsd:complexType>

    <xsd:complexType name=\"shard\">
        <xsd:attribute name=\"id\" type=\"xsd:integer\" use=\"required\" />
        <xsd:attributeGroup ref=\"driver-config\" />
    </xsd:complexType>

    <!-- ORM configuration -->

    <xsd:complexType name=\"mapping\">
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"dir\" type=\"xsd:string\" />
        <xsd:attribute name=\"alias\" type=\"xsd:string\" />
        <xsd:attribute name=\"prefix\" type=\"xsd:string\" />
        <xsd:attribute name=\"is-bundle\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"orm\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"entity-manager\" type=\"entity_manager\" />
            <xsd:element name=\"resolve-target-entity\" type=\"resolve_target_entity\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:group ref=\"entity-manager-child-config\" />
        </xsd:choice>

        <xsd:attribute name=\"default-entity-manager\" type=\"xsd:string\" />
        <xsd:attribute name=\"proxy-dir\" type=\"xsd:string\" />
        <xsd:attribute name=\"proxy-namespace\" type=\"xsd:string\" />
        <xsd:attribute name=\"auto-generate-proxy-classes\" type=\"xsd:string\" default=\"false\" />
        <xsd:attributeGroup ref=\"entity-manager-config\" />
    </xsd:complexType>

    <xsd:complexType name=\"resolve_target_entity\">
        <xsd:simpleContent>
            <xsd:extension base=\"xsd:string\">
                <xsd:attribute name=\"interface\" type=\"xsd:string\" use=\"required\" />
            </xsd:extension>
        </xsd:simpleContent>
    </xsd:complexType>

    <xsd:complexType name=\"cache_driver\">
        <!-- This is not consistent with the Symfony config. These string elements should be attributes.
        Todo: change it for 2.0
        -->
        <xsd:all>
            <xsd:element name=\"class\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"database\" type=\"xsd:integer\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"instance-class\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:all>

        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"pool\" type=\"xsd:string\" />
        <xsd:attribute name=\"namespace\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"entity_listeners\">
        <xsd:choice minOccurs=\"1\">
            <xsd:element name=\"entity\" type=\"entity_listeners_entity\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
        </xsd:choice>
    </xsd:complexType>

    <xsd:complexType name=\"entity_listeners_entity\">
        <xsd:choice minOccurs=\"1\">
            <xsd:element name=\"listener\" type=\"entity_listeners_listener\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"class\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"entity_listeners_listener\">
        <xsd:choice minOccurs=\"1\">
            <xsd:element name=\"event\" type=\"entity_listeners_event\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"class\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"entity_listeners_event\">
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"method\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"entity_manager\">
        <xsd:group ref=\"entity-manager-child-config\" minOccurs=\"0\" maxOccurs=\"unbounded\" />

        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attributeGroup ref=\"entity-manager-config\" />
    </xsd:complexType>

    <xsd:group name=\"entity-manager-child-config\">
        <xsd:choice>
            <xsd:element name=\"mapping\" type=\"mapping\" />
            <xsd:element name=\"metadata-cache-driver\" type=\"cache_driver\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"result-cache-driver\" type=\"cache_driver\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"query-cache-driver\" type=\"cache_driver\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"dql\" type=\"dql\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"hydrator\" type=\"named_scalar\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"filter\" type=\"filter\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"entity-listeners\" type=\"entity_listeners\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"second-level-cache\" type=\"second-level-cache\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:choice>
    </xsd:group>

    <xsd:attributeGroup name=\"entity-manager-config\">
        <xsd:attribute name=\"auto-mapping\" type=\"xsd:string\" />
        <xsd:attribute name=\"connection\" type=\"xsd:string\" />
        <xsd:attribute name=\"default-repository-class\" type=\"xsd:string\" />
        <xsd:attribute name=\"class-metadata-factory-name\" type=\"xsd:string\" />
        <xsd:attribute name=\"naming-strategy\" type=\"xsd:string\" />
        <xsd:attribute name=\"quote-strategy\" type=\"xsd:string\" />
        <xsd:attribute name=\"entity-listener-resolver\" type=\"xsd:string\" />
        <xsd:attribute name=\"repository-factory\" type=\"xsd:string\" />
        <!-- deprecated attributes, use the child element instead -->
        <xsd:attribute name=\"result-cache-driver\" type=\"xsd:string\" />
        <xsd:attribute name=\"metadata-cache-driver\" type=\"xsd:string\" />
        <xsd:attribute name=\"query-cache-driver\" type=\"xsd:string\" />
    </xsd:attributeGroup>

    <xsd:complexType name=\"filter\" mixed=\"true\">
        <xsd:choice minOccurs=\"0\">
            <xsd:element name=\"parameter\" type=\"named_scalar\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"class\" type=\"xsd:string\" />
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"second-level-cache-region\" mixed=\"true\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"cache-driver\" type=\"cache_driver\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:choice>
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"service\" type=\"xsd:string\" />
        <xsd:attribute name=\"lifetime\" type=\"xsd:integer\" />
        <xsd:attribute name=\"lock-lifetime\" type=\"xsd:integer\" />
        <xsd:attribute name=\"cache-driver\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"second-level-cache-logger\" mixed=\"true\">
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"service\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"second-level-cache\" mixed=\"true\">
         <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"logger\" type=\"second-level-cache-logger\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"region\" type=\"second-level-cache-region\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"region-cache-driver\" type=\"cache_driver\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:choice>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" default=\"true\"/>
        <xsd:attribute name=\"log-enabled\" type=\"xsd:boolean\" default=\"true\"/>
        <xsd:attribute name=\"factory\" type=\"xsd:string\" />
        <xsd:attribute name=\"query-validator\" type=\"xsd:string\" />
        <xsd:attribute name=\"region-lifetime\" type=\"xsd:integer\" />
        <xsd:attribute name=\"region-lock-lifetime\" type=\"xsd:integer\" />
    </xsd:complexType>

    <xsd:complexType name=\"dql\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"string-function\" type=\"named_scalar\" />
            <xsd:element name=\"numeric-function\" type=\"named_scalar\" />
            <xsd:element name=\"datetime-function\" type=\"named_scalar\" />
        </xsd:choice>
    </xsd:complexType>
</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Resources/config/schema/doctrine-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://symfony.com/schema/dic/doctrine\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/doctrine\"
    elementFormDefault=\"qualified\">

    <xsd:element name=\"config\">
        <xsd:complexType>
            <xsd:all>
                <xsd:element name=\"dbal\" type=\"dbal\" minOccurs=\"0\" maxOccurs=\"1\" />
                <xsd:element name=\"orm\" type=\"orm\" minOccurs=\"0\" maxOccurs=\"1\" />
            </xsd:all>
        </xsd:complexType>
    </xsd:element>

    <xsd:complexType name=\"named_scalar\">
        <xsd:simpleContent>
            <xsd:extension base=\"xsd:string\">
                <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
            </xsd:extension>
        </xsd:simpleContent>
    </xsd:complexType>

    <!-- DBAL configuration -->

    <xsd:attributeGroup name=\"connection-config\">
        <xsd:attribute name=\"driver\" type=\"xsd:string\" />
        <xsd:attribute name=\"driver-class\" type=\"xsd:string\" />
        <xsd:attribute name=\"wrapper-class\" type=\"xsd:string\" />
        <xsd:attribute name=\"keep-slave\" type=\"xsd:string\" />
        <xsd:attribute name=\"platform-service\" type=\"xsd:string\" />
        <xsd:attribute name=\"shard-choser\" type=\"xsd:string\" />
        <xsd:attribute name=\"shard-choser-service\" type=\"xsd:string\" />
        <xsd:attribute name=\"auto-commit\" type=\"xsd:string\" />
        <xsd:attribute name=\"schema-filter\" type=\"xsd:string\" />
        <xsd:attribute name=\"logging\" type=\"xsd:string\" default=\"false\" />
        <xsd:attribute name=\"profiling\" type=\"xsd:string\" default=\"false\" />
        <xsd:attribute name=\"profiling-collect-backtrace\" type=\"xsd:string\" default=\"false\" />
        <xsd:attribute name=\"server-version\" type=\"xsd:string\" />
        <xsd:attribute name=\"use-savepoints\" type=\"xsd:boolean\" />
        <xsd:attributeGroup ref=\"driver-config\" />
    </xsd:attributeGroup>

    <xsd:attributeGroup name=\"driver-config\">
        <xsd:attribute name=\"url\" type=\"xsd:string\" />
        <xsd:attribute name=\"dbname\" type=\"xsd:string\" />
        <xsd:attribute name=\"host\" type=\"xsd:string\" />
        <xsd:attribute name=\"port\" type=\"xsd:string\" />
        <xsd:attribute name=\"user\" type=\"xsd:string\" />
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
        <xsd:attribute name=\"application-name\" type=\"xsd:string\" />
        <xsd:attribute name=\"path\" type=\"xsd:string\" />
        <xsd:attribute name=\"unix-socket\" type=\"xsd:string\" />
        <xsd:attribute name=\"memory\" type=\"xsd:string\" />
        <xsd:attribute name=\"charset\" type=\"xsd:string\" />
        <xsd:attribute name=\"persistent\" type=\"xsd:string\" />
        <xsd:attribute name=\"protocol\" type=\"xsd:string\" />
        <xsd:attribute name=\"server\" type=\"xsd:string\" />
        <xsd:attribute name=\"service\" type=\"xsd:string\" />
        <xsd:attribute name=\"servicename\" type=\"xsd:string\" />
        <xsd:attribute name=\"session-mode\" type=\"xsd:string\" />
        <xsd:attribute name=\"default_dbname\" type=\"xsd:string\" />
        <xsd:attribute name=\"sslmode\" type=\"xsd:string\" />
        <xsd:attribute name=\"sslrootcert\" type=\"xsd:string\" />
        <xsd:attribute name=\"sslcert\" type=\"xsd:string\" />
        <xsd:attribute name=\"sslkey\" type=\"xsd:string\" />
        <xsd:attribute name=\"sslcrl\" type=\"xsd:string\" />
        <xsd:attribute name=\"pooled\" type=\"xsd:string\" />
        <xsd:attribute name=\"multiple-active-result-sets\" type=\"xsd:string\" />
        <xsd:attribute name=\"connectstring\" type=\"xsd:string\" />
        <xsd:attribute name=\"instancename\" type=\"xsd:string\" />
    </xsd:attributeGroup>

    <xsd:group name=\"connection-child-config\">
        <xsd:choice>
            <xsd:element name=\"option\" type=\"option\" />
            <xsd:element name=\"mapping-type\" type=\"named_scalar\" />
            <xsd:element name=\"slave\" type=\"slave\" />
            <xsd:element name=\"shard\" type=\"shard\" />
            <xsd:element name=\"default-table-option\" type=\"named_scalar\" />
        </xsd:choice>
    </xsd:group>

    <xsd:complexType name=\"dbal\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"connection\" type=\"connection\" />
            <xsd:element name=\"type\" type=\"named_scalar\" />
            <xsd:group ref=\"connection-child-config\" />
        </xsd:choice>

        <xsd:attribute name=\"default-connection\" type=\"xsd:string\" />
        <xsd:attributeGroup ref=\"connection-config\" />
    </xsd:complexType>

    <xsd:complexType name=\"option\">
        <xsd:simpleContent>
            <xsd:extension base=\"xsd:string\">
                <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\" />
            </xsd:extension>
        </xsd:simpleContent>
    </xsd:complexType>

    <xsd:complexType name=\"connection\">
        <xsd:group ref=\"connection-child-config\" minOccurs=\"0\" maxOccurs=\"unbounded\" />

        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attributeGroup ref=\"connection-config\" />
    </xsd:complexType>

    <xsd:complexType name=\"slave\">
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attributeGroup ref=\"driver-config\" />
    </xsd:complexType>

    <xsd:complexType name=\"shard\">
        <xsd:attribute name=\"id\" type=\"xsd:integer\" use=\"required\" />
        <xsd:attributeGroup ref=\"driver-config\" />
    </xsd:complexType>

    <!-- ORM configuration -->

    <xsd:complexType name=\"mapping\">
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"dir\" type=\"xsd:string\" />
        <xsd:attribute name=\"alias\" type=\"xsd:string\" />
        <xsd:attribute name=\"prefix\" type=\"xsd:string\" />
        <xsd:attribute name=\"is-bundle\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"orm\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"entity-manager\" type=\"entity_manager\" />
            <xsd:element name=\"resolve-target-entity\" type=\"resolve_target_entity\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:group ref=\"entity-manager-child-config\" />
        </xsd:choice>

        <xsd:attribute name=\"default-entity-manager\" type=\"xsd:string\" />
        <xsd:attribute name=\"proxy-dir\" type=\"xsd:string\" />
        <xsd:attribute name=\"proxy-namespace\" type=\"xsd:string\" />
        <xsd:attribute name=\"auto-generate-proxy-classes\" type=\"xsd:string\" default=\"false\" />
        <xsd:attributeGroup ref=\"entity-manager-config\" />
    </xsd:complexType>

    <xsd:complexType name=\"resolve_target_entity\">
        <xsd:simpleContent>
            <xsd:extension base=\"xsd:string\">
                <xsd:attribute name=\"interface\" type=\"xsd:string\" use=\"required\" />
            </xsd:extension>
        </xsd:simpleContent>
    </xsd:complexType>

    <xsd:complexType name=\"cache_driver\">
        <!-- This is not consistent with the Symfony config. These string elements should be attributes.
        Todo: change it for 2.0
        -->
        <xsd:all>
            <xsd:element name=\"class\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"database\" type=\"xsd:integer\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"instance-class\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:all>

        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"id\" type=\"xsd:string\" />
        <xsd:attribute name=\"pool\" type=\"xsd:string\" />
        <xsd:attribute name=\"namespace\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"entity_listeners\">
        <xsd:choice minOccurs=\"1\">
            <xsd:element name=\"entity\" type=\"entity_listeners_entity\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
        </xsd:choice>
    </xsd:complexType>

    <xsd:complexType name=\"entity_listeners_entity\">
        <xsd:choice minOccurs=\"1\">
            <xsd:element name=\"listener\" type=\"entity_listeners_listener\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"class\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"entity_listeners_listener\">
        <xsd:choice minOccurs=\"1\">
            <xsd:element name=\"event\" type=\"entity_listeners_event\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"class\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"entity_listeners_event\">
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"method\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"entity_manager\">
        <xsd:group ref=\"entity-manager-child-config\" minOccurs=\"0\" maxOccurs=\"unbounded\" />

        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attributeGroup ref=\"entity-manager-config\" />
    </xsd:complexType>

    <xsd:group name=\"entity-manager-child-config\">
        <xsd:choice>
            <xsd:element name=\"mapping\" type=\"mapping\" />
            <xsd:element name=\"metadata-cache-driver\" type=\"cache_driver\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"result-cache-driver\" type=\"cache_driver\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"query-cache-driver\" type=\"cache_driver\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"dql\" type=\"dql\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"hydrator\" type=\"named_scalar\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"filter\" type=\"filter\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"entity-listeners\" type=\"entity_listeners\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"second-level-cache\" type=\"second-level-cache\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:choice>
    </xsd:group>

    <xsd:attributeGroup name=\"entity-manager-config\">
        <xsd:attribute name=\"auto-mapping\" type=\"xsd:string\" />
        <xsd:attribute name=\"connection\" type=\"xsd:string\" />
        <xsd:attribute name=\"default-repository-class\" type=\"xsd:string\" />
        <xsd:attribute name=\"class-metadata-factory-name\" type=\"xsd:string\" />
        <xsd:attribute name=\"naming-strategy\" type=\"xsd:string\" />
        <xsd:attribute name=\"quote-strategy\" type=\"xsd:string\" />
        <xsd:attribute name=\"entity-listener-resolver\" type=\"xsd:string\" />
        <xsd:attribute name=\"repository-factory\" type=\"xsd:string\" />
        <!-- deprecated attributes, use the child element instead -->
        <xsd:attribute name=\"result-cache-driver\" type=\"xsd:string\" />
        <xsd:attribute name=\"metadata-cache-driver\" type=\"xsd:string\" />
        <xsd:attribute name=\"query-cache-driver\" type=\"xsd:string\" />
    </xsd:attributeGroup>

    <xsd:complexType name=\"filter\" mixed=\"true\">
        <xsd:choice minOccurs=\"0\">
            <xsd:element name=\"parameter\" type=\"named_scalar\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
        </xsd:choice>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\" />
        <xsd:attribute name=\"class\" type=\"xsd:string\" />
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <xsd:complexType name=\"second-level-cache-region\" mixed=\"true\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"cache-driver\" type=\"cache_driver\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:choice>
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
        <xsd:attribute name=\"service\" type=\"xsd:string\" />
        <xsd:attribute name=\"lifetime\" type=\"xsd:integer\" />
        <xsd:attribute name=\"lock-lifetime\" type=\"xsd:integer\" />
        <xsd:attribute name=\"cache-driver\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"second-level-cache-logger\" mixed=\"true\">
        <xsd:attribute name=\"name\" type=\"xsd:string\" />
        <xsd:attribute name=\"service\" type=\"xsd:string\" />
    </xsd:complexType>

    <xsd:complexType name=\"second-level-cache\" mixed=\"true\">
         <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"logger\" type=\"second-level-cache-logger\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"region\" type=\"second-level-cache-region\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"region-cache-driver\" type=\"cache_driver\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:choice>
        <xsd:attribute name=\"enabled\" type=\"xsd:boolean\" default=\"true\"/>
        <xsd:attribute name=\"log-enabled\" type=\"xsd:boolean\" default=\"true\"/>
        <xsd:attribute name=\"factory\" type=\"xsd:string\" />
        <xsd:attribute name=\"query-validator\" type=\"xsd:string\" />
        <xsd:attribute name=\"region-lifetime\" type=\"xsd:integer\" />
        <xsd:attribute name=\"region-lock-lifetime\" type=\"xsd:integer\" />
    </xsd:complexType>

    <xsd:complexType name=\"dql\">
        <xsd:choice minOccurs=\"0\" maxOccurs=\"unbounded\">
            <xsd:element name=\"string-function\" type=\"named_scalar\" />
            <xsd:element name=\"numeric-function\" type=\"named_scalar\" />
            <xsd:element name=\"datetime-function\" type=\"named_scalar\" />
        </xsd:choice>
    </xsd:complexType>
</xsd:schema>
", "vendor/doctrine/doctrine-bundle/Resources/config/schema/doctrine-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Resources/config/schema/doctrine-1.0.xsd");
    }
}
