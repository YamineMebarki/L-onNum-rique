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

/* vendor/doctrine/doctrine-cache-bundle/Resources/config/schema/doctrine_cache-1.0.xsd */
class __TwigTemplate_f5311d377e336964138246370de8d36ad1aae039d94a3b289abebb21f5273a86 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/config/schema/doctrine_cache-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/config/schema/doctrine_cache-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<xsd:schema xmlns=\"http://doctrine-project.org/schemas/symfony-dic/cache\"
            xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
            targetNamespace=\"http://doctrine-project.org/schemas/symfony-dic/cache\"
            elementFormDefault=\"qualified\">

    <xsd:element name=\"doctrine_cache\">
        <xsd:complexType>
            <xsd:sequence>
                <xsd:element name=\"acl_cache\" type=\"acl_cache\" minOccurs=\"0\" maxOccurs=\"1\" />
                <xsd:element name=\"alias\" type=\"alias\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
                <xsd:element name=\"provider\" type=\"provider\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            </xsd:sequence>
        </xsd:complexType>
    </xsd:element>

    <xsd:complexType name=\"acl_cache\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"alias\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"provider\">
        <xsd:sequence>
            <xsd:element name=\"type\" type=\"xsd:string\"/>
            <xsd:element name=\"namespace\" type=\"xsd:string\"/>
            <xsd:element name=\"alias\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:choice minOccurs=\"0\" maxOccurs=\"1\">
                <xsd:element name=\"chain\"       type=\"chain_provider\"/>
                <xsd:element name=\"couchbase\"   type=\"couchbase_provider\"/>
                <xsd:element name=\"file-system\" type=\"filesystem_provider\"/>
                <xsd:element name=\"memcached\"   type=\"memcached_provider\"/>
                <xsd:element name=\"memcache\"    type=\"memcache_provider\"/>
                <xsd:element name=\"mongodb\"     type=\"mongodb_provider\"/>
                <xsd:element name=\"php-file\"    type=\"phpfile_provider\"/>
                <xsd:element name=\"redis\"       type=\"redis_provider\"/>
                <xsd:element name=\"predis\"      type=\"predis_provider\"/>
                <xsd:element name=\"riak\"        type=\"riak_provider\"/>
                <xsd:element name=\"sqlite3\"     type=\"sqlite3_provider\"/>
            </xsd:choice>
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\"/>
        <xsd:attribute name=\"namespace\" type=\"xsd:string\"/>
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
    </xsd:complexType>

    <!-- memcached -->
    <xsd:complexType name=\"memcached_provider\">
        <xsd:sequence>
            <xsd:element name=\"server\" type=\"memcached_server\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"persistent-id\" type=\"xsd:string\"/>
        <xsd:attribute name=\"connection-id\" type=\"xsd:string\"/>
    </xsd:complexType>

    <xsd:complexType name=\"memcached_server\">
         <xsd:sequence>
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"connection-id\" type=\"xsd:string\"/>
        <xsd:attribute name=\"host\" type=\"xsd:string\"/>
        <xsd:attribute name=\"port\" type=\"xsd:string\"/>
    </xsd:complexType>

    <!-- memcache -->
    <xsd:complexType name=\"memcache_provider\">
        <xsd:sequence>
            <xsd:element name=\"server\" type=\"memcached_server\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"connection-id\" type=\"xsd:string\"/>
    </xsd:complexType>

    <xsd:complexType name=\"memcache_server\">
        <xsd:sequence>
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"host\" type=\"xsd:string\"/>
        <xsd:attribute name=\"port\" type=\"xsd:string\"/>
    </xsd:complexType>

    <!-- redis -->
    <xsd:complexType name=\"redis_provider\">
        <xsd:sequence>
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"password\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"timeout\" type=\"xsd:unsignedInt\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"database\" type=\"xsd:unsignedInt\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"host\" type=\"xsd:string\"/>
        <xsd:attribute name=\"port\" type=\"xsd:string\"/>
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
        <xsd:attribute name=\"timeout\" type=\"xsd:unsignedInt\" />
        <xsd:attribute name=\"database\" type=\"xsd:unsignedInt\" />
        <xsd:attribute name=\"persistent\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <!-- predis -->
    <xsd:complexType name=\"predis_provider\">
        <xsd:sequence>
            <xsd:element name=\"scheme\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"password\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"timeout\" type=\"xsd:unsignedInt\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"database\" type=\"xsd:unsignedInt\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"options\" type=\"predis_options\" minOccurs=\"0\" maxOccurs=\"0\" />
        </xsd:sequence>
        <xsd:attribute name=\"scheme\" type=\"xsd:string\"/>
        <xsd:attribute name=\"host\" type=\"xsd:string\"/>
        <xsd:attribute name=\"port\" type=\"xsd:string\"/>
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
        <xsd:attribute name=\"timeout\" type=\"xsd:unsignedInt\" />
        <xsd:attribute name=\"database\" type=\"xsd:unsignedInt\" />
    </xsd:complexType>

    <xsd:complexType name=\"predis_options\">
        <xsd:sequence>
            <xsd:any minOccurs=\"0\"/>
        </xsd:sequence>
    </xsd:complexType>

    <!-- couchbase -->
    <xsd:complexType name=\"couchbase_provider\">
        <xsd:sequence>
            <xsd:element name=\"username\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"password\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"bucket-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"hostname\" type=\"couchbase_hostname\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
        </xsd:sequence>
        <xsd:attribute name=\"username\" type=\"xsd:string\"/>
        <xsd:attribute name=\"password\" type=\"xsd:string\"/>
        <xsd:attribute name=\"bucket-name\" type=\"xsd:string\"/>
    </xsd:complexType>

    <xsd:simpleType name=\"couchbase_hostname\">
        <xsd:restriction base=\"xsd:string\" />
    </xsd:simpleType>

    <!-- riak -->
    <xsd:complexType name=\"riak_provider\">
        <xsd:sequence>
            <xsd:element name=\"bucket-property-list\" type=\"memcache_bucket_property_list\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"bucket-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"bucket-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"connection-id\" type=\"xsd:string\"/>
        <xsd:attribute name=\"bucket-name\" type=\"xsd:string\"/>
        <xsd:attribute name=\"bucket-id\" type=\"xsd:string\"/>
        <xsd:attribute name=\"host\" type=\"xsd:string\"/>
        <xsd:attribute name=\"port\" type=\"xsd:string\"/>
    </xsd:complexType>

    <xsd:complexType name=\"memcache_bucket_property_list\">
        <xsd:sequence>
            <xsd:element name=\"allow-multiple\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"n-value\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"allow-multiple\" type=\"xsd:string\" />
        <xsd:attribute name=\"n-value\" type=\"xsd:string\" />
    </xsd:complexType>

    <!-- mongodb -->
    <xsd:complexType name=\"mongodb_provider\">
        <xsd:sequence>
            <xsd:element name=\"server\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"database-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"collection-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"collection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"server\" type=\"xsd:string\" />
        <xsd:attribute name=\"database-id\" type=\"xsd:string\" />
        <xsd:attribute name=\"collection-id\" type=\"xsd:string\" />
        <xsd:attribute name=\"database-name\" type=\"xsd:string\" />
        <xsd:attribute name=\"collection-name\" type=\"xsd:string\" />
    </xsd:complexType>

    <!-- file-system -->
    <xsd:complexType name=\"filesystem_provider\">
        <xsd:sequence>
            <xsd:element name=\"extension\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"directory\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"umask\" type=\"xsd:integer\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"extension\" type=\"xsd:string\"/>
        <xsd:attribute name=\"directory\" type=\"xsd:string\"/>
        <xsd:attribute name=\"umask\" type=\"xsd:integer\"/>
    </xsd:complexType>

    <!-- php-file -->
    <xsd:complexType name=\"phpfile_provider\">
        <xsd:sequence>
            <xsd:element name=\"extension\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"directory\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"umask\" type=\"xsd:integer\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"extension\" type=\"xsd:string\"/>
        <xsd:attribute name=\"directory\" type=\"xsd:string\"/>
        <xsd:attribute name=\"umask\" type=\"xsd:integer\"/>
    </xsd:complexType>

    <!-- sqlite3 -->
    <xsd:complexType name=\"sqlite3_provider\">
        <xsd:sequence>
            <xsd:element name=\"file-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"table-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"file-name\" type=\"xsd:string\"/>
        <xsd:attribute name=\"table-name\" type=\"xsd:string\"/>
    </xsd:complexType>

    <!-- chain -->
    <xsd:complexType name=\"chain_provider\">
        <xsd:sequence>
            <xsd:element name=\"provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
        </xsd:sequence>
    </xsd:complexType>

</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/Resources/config/schema/doctrine_cache-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<xsd:schema xmlns=\"http://doctrine-project.org/schemas/symfony-dic/cache\"
            xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
            targetNamespace=\"http://doctrine-project.org/schemas/symfony-dic/cache\"
            elementFormDefault=\"qualified\">

    <xsd:element name=\"doctrine_cache\">
        <xsd:complexType>
            <xsd:sequence>
                <xsd:element name=\"acl_cache\" type=\"acl_cache\" minOccurs=\"0\" maxOccurs=\"1\" />
                <xsd:element name=\"alias\" type=\"alias\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
                <xsd:element name=\"provider\" type=\"provider\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            </xsd:sequence>
        </xsd:complexType>
    </xsd:element>

    <xsd:complexType name=\"acl_cache\">
        <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"alias\">
        <xsd:attribute name=\"key\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>

    <xsd:complexType name=\"provider\">
        <xsd:sequence>
            <xsd:element name=\"type\" type=\"xsd:string\"/>
            <xsd:element name=\"namespace\" type=\"xsd:string\"/>
            <xsd:element name=\"alias\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\" />
            <xsd:choice minOccurs=\"0\" maxOccurs=\"1\">
                <xsd:element name=\"chain\"       type=\"chain_provider\"/>
                <xsd:element name=\"couchbase\"   type=\"couchbase_provider\"/>
                <xsd:element name=\"file-system\" type=\"filesystem_provider\"/>
                <xsd:element name=\"memcached\"   type=\"memcached_provider\"/>
                <xsd:element name=\"memcache\"    type=\"memcache_provider\"/>
                <xsd:element name=\"mongodb\"     type=\"mongodb_provider\"/>
                <xsd:element name=\"php-file\"    type=\"phpfile_provider\"/>
                <xsd:element name=\"redis\"       type=\"redis_provider\"/>
                <xsd:element name=\"predis\"      type=\"predis_provider\"/>
                <xsd:element name=\"riak\"        type=\"riak_provider\"/>
                <xsd:element name=\"sqlite3\"     type=\"sqlite3_provider\"/>
            </xsd:choice>
        </xsd:sequence>
        <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\"/>
        <xsd:attribute name=\"namespace\" type=\"xsd:string\"/>
        <xsd:attribute name=\"type\" type=\"xsd:string\" />
    </xsd:complexType>

    <!-- memcached -->
    <xsd:complexType name=\"memcached_provider\">
        <xsd:sequence>
            <xsd:element name=\"server\" type=\"memcached_server\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"persistent-id\" type=\"xsd:string\"/>
        <xsd:attribute name=\"connection-id\" type=\"xsd:string\"/>
    </xsd:complexType>

    <xsd:complexType name=\"memcached_server\">
         <xsd:sequence>
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"connection-id\" type=\"xsd:string\"/>
        <xsd:attribute name=\"host\" type=\"xsd:string\"/>
        <xsd:attribute name=\"port\" type=\"xsd:string\"/>
    </xsd:complexType>

    <!-- memcache -->
    <xsd:complexType name=\"memcache_provider\">
        <xsd:sequence>
            <xsd:element name=\"server\" type=\"memcached_server\" minOccurs=\"1\" maxOccurs=\"unbounded\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"connection-id\" type=\"xsd:string\"/>
    </xsd:complexType>

    <xsd:complexType name=\"memcache_server\">
        <xsd:sequence>
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"host\" type=\"xsd:string\"/>
        <xsd:attribute name=\"port\" type=\"xsd:string\"/>
    </xsd:complexType>

    <!-- redis -->
    <xsd:complexType name=\"redis_provider\">
        <xsd:sequence>
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"password\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"timeout\" type=\"xsd:unsignedInt\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"database\" type=\"xsd:unsignedInt\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"host\" type=\"xsd:string\"/>
        <xsd:attribute name=\"port\" type=\"xsd:string\"/>
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
        <xsd:attribute name=\"timeout\" type=\"xsd:unsignedInt\" />
        <xsd:attribute name=\"database\" type=\"xsd:unsignedInt\" />
        <xsd:attribute name=\"persistent\" type=\"xsd:boolean\" />
    </xsd:complexType>

    <!-- predis -->
    <xsd:complexType name=\"predis_provider\">
        <xsd:sequence>
            <xsd:element name=\"scheme\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"password\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"timeout\" type=\"xsd:unsignedInt\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"database\" type=\"xsd:unsignedInt\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"options\" type=\"predis_options\" minOccurs=\"0\" maxOccurs=\"0\" />
        </xsd:sequence>
        <xsd:attribute name=\"scheme\" type=\"xsd:string\"/>
        <xsd:attribute name=\"host\" type=\"xsd:string\"/>
        <xsd:attribute name=\"port\" type=\"xsd:string\"/>
        <xsd:attribute name=\"password\" type=\"xsd:string\" />
        <xsd:attribute name=\"timeout\" type=\"xsd:unsignedInt\" />
        <xsd:attribute name=\"database\" type=\"xsd:unsignedInt\" />
    </xsd:complexType>

    <xsd:complexType name=\"predis_options\">
        <xsd:sequence>
            <xsd:any minOccurs=\"0\"/>
        </xsd:sequence>
    </xsd:complexType>

    <!-- couchbase -->
    <xsd:complexType name=\"couchbase_provider\">
        <xsd:sequence>
            <xsd:element name=\"username\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"password\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"bucket-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"hostname\" type=\"couchbase_hostname\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
        </xsd:sequence>
        <xsd:attribute name=\"username\" type=\"xsd:string\"/>
        <xsd:attribute name=\"password\" type=\"xsd:string\"/>
        <xsd:attribute name=\"bucket-name\" type=\"xsd:string\"/>
    </xsd:complexType>

    <xsd:simpleType name=\"couchbase_hostname\">
        <xsd:restriction base=\"xsd:string\" />
    </xsd:simpleType>

    <!-- riak -->
    <xsd:complexType name=\"riak_provider\">
        <xsd:sequence>
            <xsd:element name=\"bucket-property-list\" type=\"memcache_bucket_property_list\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"bucket-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"bucket-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"host\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"port\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"connection-id\" type=\"xsd:string\"/>
        <xsd:attribute name=\"bucket-name\" type=\"xsd:string\"/>
        <xsd:attribute name=\"bucket-id\" type=\"xsd:string\"/>
        <xsd:attribute name=\"host\" type=\"xsd:string\"/>
        <xsd:attribute name=\"port\" type=\"xsd:string\"/>
    </xsd:complexType>

    <xsd:complexType name=\"memcache_bucket_property_list\">
        <xsd:sequence>
            <xsd:element name=\"allow-multiple\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"n-value\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"allow-multiple\" type=\"xsd:string\" />
        <xsd:attribute name=\"n-value\" type=\"xsd:string\" />
    </xsd:complexType>

    <!-- mongodb -->
    <xsd:complexType name=\"mongodb_provider\">
        <xsd:sequence>
            <xsd:element name=\"server\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"database-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"collection-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"connection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"collection-id\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"server\" type=\"xsd:string\" />
        <xsd:attribute name=\"database-id\" type=\"xsd:string\" />
        <xsd:attribute name=\"collection-id\" type=\"xsd:string\" />
        <xsd:attribute name=\"database-name\" type=\"xsd:string\" />
        <xsd:attribute name=\"collection-name\" type=\"xsd:string\" />
    </xsd:complexType>

    <!-- file-system -->
    <xsd:complexType name=\"filesystem_provider\">
        <xsd:sequence>
            <xsd:element name=\"extension\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"directory\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"umask\" type=\"xsd:integer\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"extension\" type=\"xsd:string\"/>
        <xsd:attribute name=\"directory\" type=\"xsd:string\"/>
        <xsd:attribute name=\"umask\" type=\"xsd:integer\"/>
    </xsd:complexType>

    <!-- php-file -->
    <xsd:complexType name=\"phpfile_provider\">
        <xsd:sequence>
            <xsd:element name=\"extension\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"directory\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"umask\" type=\"xsd:integer\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"extension\" type=\"xsd:string\"/>
        <xsd:attribute name=\"directory\" type=\"xsd:string\"/>
        <xsd:attribute name=\"umask\" type=\"xsd:integer\"/>
    </xsd:complexType>

    <!-- sqlite3 -->
    <xsd:complexType name=\"sqlite3_provider\">
        <xsd:sequence>
            <xsd:element name=\"file-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
            <xsd:element name=\"table-name\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"1\" />
        </xsd:sequence>
        <xsd:attribute name=\"file-name\" type=\"xsd:string\"/>
        <xsd:attribute name=\"table-name\" type=\"xsd:string\"/>
    </xsd:complexType>

    <!-- chain -->
    <xsd:complexType name=\"chain_provider\">
        <xsd:sequence>
            <xsd:element name=\"provider\" type=\"xsd:string\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
        </xsd:sequence>
    </xsd:complexType>

</xsd:schema>
", "vendor/doctrine/doctrine-cache-bundle/Resources/config/schema/doctrine_cache-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/Resources/config/schema/doctrine_cache-1.0.xsd");
    }
}
