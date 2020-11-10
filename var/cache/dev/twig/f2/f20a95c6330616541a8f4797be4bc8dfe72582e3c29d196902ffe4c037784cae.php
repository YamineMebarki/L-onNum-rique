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

/* vendor/doctrine/doctrine-cache-bundle/Resources/doc/reference.rst */
class __TwigTemplate_e99fc94ea29237831190ee733e28146e6dfb16f8e66e0faf22fa9f137b82d3f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/reference.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/reference.rst"));

        // line 1
        echo "Built-in Cache Providers Reference
----------------------------------

This is the reference of all the built-in cache providers and their configuration
options:

``apc``
~~~~~~~

This provider defines no configuration options.

``array``
~~~~~~~~~

This provider defines no configuration options.

``chain``
~~~~~~~~~

``providers``
    The list of service ids of Doctrine Cache Providers to use. Put the fastest
    providers first (e.g. ``array`` cache) and you can skip
    ``doctrine_cache.providers``.

``couchbase``
~~~~~~~~~~~~~

``connection_id``
    Couchbase connection service id
``hostnames``
    Couchbase hostname list
``bucket_name``
    Couchbase bucket name
``username``
    Couchbase username
``password``
    Couchbase password

``file_system``
~~~~~~~~~~~~~~~

``extension``
    File extension
``directory``
    Cache directory
``umask``
    Umask to revoke permissions

``mongodb``
~~~~~~~~~~~

``connection_id``
    MongoClient service id
``collection_id``
    MongoCollection service id
``server``
    mongodb server uri
``database_name``
    mongodb database name
``collection_name``
    mongodb collection name

``memcache``
~~~~~~~~~~~~

``connection_id``
    Memcache connection service id
``servers``
    Server list

    * ``server``

      * ``host``, Memcache host
      * ``port``, Memcache port

``memcached``
~~~~~~~~~~~~~

``connection_id``
    Memcache connection service id
``servers``
    Server list

    * ``server``

      * ``host``, Memcached host
      * ``port``, Memcached port

``php_file``
~~~~~~~~~~~~

``extension``
    File extension
``directory``
    Cache directory
``umask``
    Umask to revoke permissions

``redis``
~~~~~~~~~

``connection_id``
    Redis connection service id
``host``
    Redis host
``port``
    Redis port
``password``
    Redis password
``timeout``
    Redis connection timeout
``database``
    Redis database selection (integer)
``persistent``
    Whether to use persistent connection or not (bool)

``predis``
~~~~~~~~~~

``client_id``
    Provide a client service id to skip the client creation by the bundle
    (optional, should be used for advanced configuration)
``scheme``
    Connection scheme (tcp)
``host``
    Redis host
``port``
    Redis port
``password``
    Redis password
``timeout``
    Redis connection timeout
``database``
    Redis database selection (integer)
``options``
    Array of predis client options

``riak``
~~~~~~~~

``connection_id``
    Riak\\Connection service id
``bucket_id``
    Riak\\Bucket service id
``host``
    Riak host
``port``
    Riak port
``bucket_name``
    Riak bucket name
``bucket_property_list``
    Riak bucket configuration (property list)

    * ``allow_multiple: false``, riak bucket allow multiple configuration
    * ``n_value: 1``, riak bucket n-value configuration

``sqlite3``
~~~~~~~~~~~

``connection_id``
    SQLite3 connection service id
``file_name``
    SQLite3 database file name
``table_name``
    Cache table name

``void``
~~~~~~~~

This provider defines no configuration options.

``xcache``
~~~~~~~~~~

This provider defines no configuration options.

``wincache``
~~~~~~~~~~~~

This provider defines no configuration options.

``zenddata``
~~~~~~~~~~~~

This provider defines no configuration options.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/Resources/doc/reference.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Built-in Cache Providers Reference
----------------------------------

This is the reference of all the built-in cache providers and their configuration
options:

``apc``
~~~~~~~

This provider defines no configuration options.

``array``
~~~~~~~~~

This provider defines no configuration options.

``chain``
~~~~~~~~~

``providers``
    The list of service ids of Doctrine Cache Providers to use. Put the fastest
    providers first (e.g. ``array`` cache) and you can skip
    ``doctrine_cache.providers``.

``couchbase``
~~~~~~~~~~~~~

``connection_id``
    Couchbase connection service id
``hostnames``
    Couchbase hostname list
``bucket_name``
    Couchbase bucket name
``username``
    Couchbase username
``password``
    Couchbase password

``file_system``
~~~~~~~~~~~~~~~

``extension``
    File extension
``directory``
    Cache directory
``umask``
    Umask to revoke permissions

``mongodb``
~~~~~~~~~~~

``connection_id``
    MongoClient service id
``collection_id``
    MongoCollection service id
``server``
    mongodb server uri
``database_name``
    mongodb database name
``collection_name``
    mongodb collection name

``memcache``
~~~~~~~~~~~~

``connection_id``
    Memcache connection service id
``servers``
    Server list

    * ``server``

      * ``host``, Memcache host
      * ``port``, Memcache port

``memcached``
~~~~~~~~~~~~~

``connection_id``
    Memcache connection service id
``servers``
    Server list

    * ``server``

      * ``host``, Memcached host
      * ``port``, Memcached port

``php_file``
~~~~~~~~~~~~

``extension``
    File extension
``directory``
    Cache directory
``umask``
    Umask to revoke permissions

``redis``
~~~~~~~~~

``connection_id``
    Redis connection service id
``host``
    Redis host
``port``
    Redis port
``password``
    Redis password
``timeout``
    Redis connection timeout
``database``
    Redis database selection (integer)
``persistent``
    Whether to use persistent connection or not (bool)

``predis``
~~~~~~~~~~

``client_id``
    Provide a client service id to skip the client creation by the bundle
    (optional, should be used for advanced configuration)
``scheme``
    Connection scheme (tcp)
``host``
    Redis host
``port``
    Redis port
``password``
    Redis password
``timeout``
    Redis connection timeout
``database``
    Redis database selection (integer)
``options``
    Array of predis client options

``riak``
~~~~~~~~

``connection_id``
    Riak\\Connection service id
``bucket_id``
    Riak\\Bucket service id
``host``
    Riak host
``port``
    Riak port
``bucket_name``
    Riak bucket name
``bucket_property_list``
    Riak bucket configuration (property list)

    * ``allow_multiple: false``, riak bucket allow multiple configuration
    * ``n_value: 1``, riak bucket n-value configuration

``sqlite3``
~~~~~~~~~~~

``connection_id``
    SQLite3 connection service id
``file_name``
    SQLite3 database file name
``table_name``
    Cache table name

``void``
~~~~~~~~

This provider defines no configuration options.

``xcache``
~~~~~~~~~~

This provider defines no configuration options.

``wincache``
~~~~~~~~~~~~

This provider defines no configuration options.

``zenddata``
~~~~~~~~~~~~

This provider defines no configuration options.
", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/reference.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/Resources/doc/reference.rst");
    }
}
