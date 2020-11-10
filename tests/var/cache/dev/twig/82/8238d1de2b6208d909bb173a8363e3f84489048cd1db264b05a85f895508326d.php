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

/* vendor/doctrine/doctrine-cache-bundle/Resources/config/services.xml */
class __TwigTemplate_2ab1f69b9e977d5dcd4e9a8c16f10b8fa600f047e23469387f6d42bc67c652b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/config/services.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/config/services.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"doctrine_cache.apc.class\">Doctrine\\Common\\Cache\\ApcCache</parameter>
        <parameter key=\"doctrine_cache.apcu.class\">Doctrine\\Common\\Cache\\ApcuCache</parameter>
        <parameter key=\"doctrine_cache.array.class\">Doctrine\\Common\\Cache\\ArrayCache</parameter>
        <parameter key=\"doctrine_cache.chain.class\">Doctrine\\Common\\Cache\\ChainCache</parameter>
        <parameter key=\"doctrine_cache.couchbase.class\">Doctrine\\Common\\Cache\\CouchbaseCache</parameter>
        <parameter key=\"doctrine_cache.couchbase.connection.class\">Couchbase</parameter>
        <parameter key=\"doctrine_cache.couchbase.hostnames\">localhost:8091</parameter>
        <parameter key=\"doctrine_cache.file_system.class\">Doctrine\\Common\\Cache\\FilesystemCache</parameter>
        <parameter key=\"doctrine_cache.php_file.class\">Doctrine\\Common\\Cache\\PhpFileCache</parameter>
        <parameter key=\"doctrine_cache.memcache.class\">Doctrine\\Common\\Cache\\MemcacheCache</parameter>
        <parameter key=\"doctrine_cache.memcache.connection.class\">Memcache</parameter>
        <parameter key=\"doctrine_cache.memcache.host\">localhost</parameter>
        <parameter key=\"doctrine_cache.memcache.port\">11211</parameter>
        <parameter key=\"doctrine_cache.memcached.class\">Doctrine\\Common\\Cache\\MemcachedCache</parameter>
        <parameter key=\"doctrine_cache.memcached.connection.class\">Memcached</parameter>
        <parameter key=\"doctrine_cache.memcached.host\">localhost</parameter>
        <parameter key=\"doctrine_cache.memcached.port\">11211</parameter>
        <parameter key=\"doctrine_cache.mongodb.class\">Doctrine\\Common\\Cache\\MongoDBCache</parameter>
        <parameter key=\"doctrine_cache.mongodb.collection.class\">MongoCollection</parameter>
        <parameter key=\"doctrine_cache.mongodb.connection.class\">MongoClient</parameter>
        <parameter key=\"doctrine_cache.mongodb.server\">localhost:27017</parameter>
        <parameter key=\"doctrine_cache.predis.client.class\">Predis\\Client</parameter>
        <parameter key=\"doctrine_cache.predis.scheme\">tcp</parameter>
        <parameter key=\"doctrine_cache.predis.host\">localhost</parameter>
        <parameter key=\"doctrine_cache.predis.port\">6379</parameter>
        <parameter key=\"doctrine_cache.redis.class\">Doctrine\\Common\\Cache\\RedisCache</parameter>
        <parameter key=\"doctrine_cache.redis.connection.class\">Redis</parameter>
        <parameter key=\"doctrine_cache.redis.host\">localhost</parameter>
        <parameter key=\"doctrine_cache.redis.port\">6379</parameter>
        <parameter key=\"doctrine_cache.riak.class\">Doctrine\\Common\\Cache\\RiakCache</parameter>
        <parameter key=\"doctrine_cache.riak.bucket.class\">Riak\\Bucket</parameter>
        <parameter key=\"doctrine_cache.riak.connection.class\">Riak\\Connection</parameter>
        <parameter key=\"doctrine_cache.riak.bucket_property_list.class\">Riak\\BucketPropertyList</parameter>
        <parameter key=\"doctrine_cache.riak.host\">localhost</parameter>
        <parameter key=\"doctrine_cache.riak.port\">8087</parameter>
        <parameter key=\"doctrine_cache.sqlite3.class\">Doctrine\\Common\\Cache\\SQLite3Cache</parameter>
        <parameter key=\"doctrine_cache.sqlite3.connection.class\">SQLite3</parameter>
        <parameter key=\"doctrine_cache.void.class\">Doctrine\\Common\\Cache\\VoidCache</parameter>
        <parameter key=\"doctrine_cache.wincache.class\">Doctrine\\Common\\Cache\\WinCacheCache</parameter>
        <parameter key=\"doctrine_cache.xcache.class\">Doctrine\\Common\\Cache\\XcacheCache</parameter>
        <parameter key=\"doctrine_cache.zenddata.class\">Doctrine\\Common\\Cache\\ZendDataCache</parameter>
        <parameter key=\"doctrine_cache.security.acl.cache.class\">Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache</parameter>
    </parameters>

    <services>
        <service id=\"doctrine_cache.abstract.apc\" class=\"%doctrine_cache.apc.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.apcu\" class=\"%doctrine_cache.apcu.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.array\" class=\"%doctrine_cache.array.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.chain\" class=\"%doctrine_cache.chain.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.couchbase\" class=\"%doctrine_cache.couchbase.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.file_system\" class=\"%doctrine_cache.file_system.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.php_file\" class=\"%doctrine_cache.php_file.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.memcache\" class=\"%doctrine_cache.memcache.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.memcached\" class=\"%doctrine_cache.memcached.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.mongodb\" class=\"%doctrine_cache.mongodb.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.redis\" class=\"%doctrine_cache.redis.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.predis\" class=\"Doctrine\\Common\\Cache\\PredisCache\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.riak\" class=\"%doctrine_cache.riak.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.sqlite3\" class=\"%doctrine_cache.sqlite3.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.void\" class=\"%doctrine_cache.void.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.wincache\" class=\"%doctrine_cache.wincache.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.xcache\" class=\"%doctrine_cache.xcache.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.zenddata\" class=\"%doctrine_cache.zenddata.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.contains_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\ContainsCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_cache.delete_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\DeleteCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_cache.flush_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\FlushCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_cache.stats_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\StatsCommand\">
            <tag name=\"console.command\" />
        </service>
    </services>

</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/Resources/config/services.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"doctrine_cache.apc.class\">Doctrine\\Common\\Cache\\ApcCache</parameter>
        <parameter key=\"doctrine_cache.apcu.class\">Doctrine\\Common\\Cache\\ApcuCache</parameter>
        <parameter key=\"doctrine_cache.array.class\">Doctrine\\Common\\Cache\\ArrayCache</parameter>
        <parameter key=\"doctrine_cache.chain.class\">Doctrine\\Common\\Cache\\ChainCache</parameter>
        <parameter key=\"doctrine_cache.couchbase.class\">Doctrine\\Common\\Cache\\CouchbaseCache</parameter>
        <parameter key=\"doctrine_cache.couchbase.connection.class\">Couchbase</parameter>
        <parameter key=\"doctrine_cache.couchbase.hostnames\">localhost:8091</parameter>
        <parameter key=\"doctrine_cache.file_system.class\">Doctrine\\Common\\Cache\\FilesystemCache</parameter>
        <parameter key=\"doctrine_cache.php_file.class\">Doctrine\\Common\\Cache\\PhpFileCache</parameter>
        <parameter key=\"doctrine_cache.memcache.class\">Doctrine\\Common\\Cache\\MemcacheCache</parameter>
        <parameter key=\"doctrine_cache.memcache.connection.class\">Memcache</parameter>
        <parameter key=\"doctrine_cache.memcache.host\">localhost</parameter>
        <parameter key=\"doctrine_cache.memcache.port\">11211</parameter>
        <parameter key=\"doctrine_cache.memcached.class\">Doctrine\\Common\\Cache\\MemcachedCache</parameter>
        <parameter key=\"doctrine_cache.memcached.connection.class\">Memcached</parameter>
        <parameter key=\"doctrine_cache.memcached.host\">localhost</parameter>
        <parameter key=\"doctrine_cache.memcached.port\">11211</parameter>
        <parameter key=\"doctrine_cache.mongodb.class\">Doctrine\\Common\\Cache\\MongoDBCache</parameter>
        <parameter key=\"doctrine_cache.mongodb.collection.class\">MongoCollection</parameter>
        <parameter key=\"doctrine_cache.mongodb.connection.class\">MongoClient</parameter>
        <parameter key=\"doctrine_cache.mongodb.server\">localhost:27017</parameter>
        <parameter key=\"doctrine_cache.predis.client.class\">Predis\\Client</parameter>
        <parameter key=\"doctrine_cache.predis.scheme\">tcp</parameter>
        <parameter key=\"doctrine_cache.predis.host\">localhost</parameter>
        <parameter key=\"doctrine_cache.predis.port\">6379</parameter>
        <parameter key=\"doctrine_cache.redis.class\">Doctrine\\Common\\Cache\\RedisCache</parameter>
        <parameter key=\"doctrine_cache.redis.connection.class\">Redis</parameter>
        <parameter key=\"doctrine_cache.redis.host\">localhost</parameter>
        <parameter key=\"doctrine_cache.redis.port\">6379</parameter>
        <parameter key=\"doctrine_cache.riak.class\">Doctrine\\Common\\Cache\\RiakCache</parameter>
        <parameter key=\"doctrine_cache.riak.bucket.class\">Riak\\Bucket</parameter>
        <parameter key=\"doctrine_cache.riak.connection.class\">Riak\\Connection</parameter>
        <parameter key=\"doctrine_cache.riak.bucket_property_list.class\">Riak\\BucketPropertyList</parameter>
        <parameter key=\"doctrine_cache.riak.host\">localhost</parameter>
        <parameter key=\"doctrine_cache.riak.port\">8087</parameter>
        <parameter key=\"doctrine_cache.sqlite3.class\">Doctrine\\Common\\Cache\\SQLite3Cache</parameter>
        <parameter key=\"doctrine_cache.sqlite3.connection.class\">SQLite3</parameter>
        <parameter key=\"doctrine_cache.void.class\">Doctrine\\Common\\Cache\\VoidCache</parameter>
        <parameter key=\"doctrine_cache.wincache.class\">Doctrine\\Common\\Cache\\WinCacheCache</parameter>
        <parameter key=\"doctrine_cache.xcache.class\">Doctrine\\Common\\Cache\\XcacheCache</parameter>
        <parameter key=\"doctrine_cache.zenddata.class\">Doctrine\\Common\\Cache\\ZendDataCache</parameter>
        <parameter key=\"doctrine_cache.security.acl.cache.class\">Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache</parameter>
    </parameters>

    <services>
        <service id=\"doctrine_cache.abstract.apc\" class=\"%doctrine_cache.apc.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.apcu\" class=\"%doctrine_cache.apcu.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.array\" class=\"%doctrine_cache.array.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.chain\" class=\"%doctrine_cache.chain.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.couchbase\" class=\"%doctrine_cache.couchbase.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.file_system\" class=\"%doctrine_cache.file_system.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.php_file\" class=\"%doctrine_cache.php_file.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.memcache\" class=\"%doctrine_cache.memcache.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.memcached\" class=\"%doctrine_cache.memcached.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.mongodb\" class=\"%doctrine_cache.mongodb.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.redis\" class=\"%doctrine_cache.redis.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.predis\" class=\"Doctrine\\Common\\Cache\\PredisCache\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.riak\" class=\"%doctrine_cache.riak.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.sqlite3\" class=\"%doctrine_cache.sqlite3.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.void\" class=\"%doctrine_cache.void.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.wincache\" class=\"%doctrine_cache.wincache.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.xcache\" class=\"%doctrine_cache.xcache.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.abstract.zenddata\" class=\"%doctrine_cache.zenddata.class%\" abstract=\"true\" />
        <service id=\"doctrine_cache.contains_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\ContainsCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_cache.delete_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\DeleteCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_cache.flush_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\FlushCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_cache.stats_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\StatsCommand\">
            <tag name=\"console.command\" />
        </service>
    </services>

</container>
", "vendor/doctrine/doctrine-cache-bundle/Resources/config/services.xml", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/Resources/config/services.xml");
    }
}
