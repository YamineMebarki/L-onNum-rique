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

/* vendor/doctrine/cache/docs/en/index.rst */
class __TwigTemplate_17336e418b7455bc5e64ed60952bb46d871c8618a701679af102b19eb2a726ff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/docs/en/index.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/docs/en/index.rst"));

        // line 1
        echo "Introduction
============

Doctrine Cache is a library that provides an interface for caching data.
It comes with implementations for some of the most popular caching data
stores. Here is what the ``Cache`` interface looks like.

.. code-block:: php
    namespace Doctrine\\Common\\Cache;

    interface Cache
    {
        public function fetch(\$id);
        public function contains(\$id);
        public function save(\$id, \$data, \$lifeTime = 0);
        public function delete(\$id);
        public function getStats();
    }

Here is an example that uses Memcache.

.. code-block:: php
    use Doctrine\\Common\\Cache\\MemcacheCache;

    \$memcache = new Memcache();
    \$cache = new MemcacheCache();
    \$cache->setMemcache(\$memcache);

    \$cache->set('key', 'value');

    echo \$cache->get('key') // prints \"value\"

Drivers
=======

Doctrine ships with several common drivers that you can easily use.
Below you can find information about all the available drivers.

ApcCache
--------

The ``ApcCache`` driver uses the ``apc_fetch``, ``apc_exists``, etc. functions that come
with PHP so no additional setup is required in order to use it.

.. code-block:: php
    \$cache = new ApcCache();

ApcuCache
---------

The ``ApcuCache`` driver uses the ``apcu_fetch``, ``apcu_exists``, etc. functions that come
with PHP so no additional setup is required in order to use it.

.. code-block:: php
    \$cache = new ApcuCache();

ArrayCache
----------

The ``ArrayCache`` driver stores the cache data in PHPs memory and is not persisted anywhere.
This can be useful for caching things in memory for a single process when you don't need
the cache to be persistent across processes.

.. code-block:: php
    \$cache = new ArrayCache();

ChainCache
----------

The ``ChainCache`` driver lets you chain multiple other drivers together easily.

.. code-block:: php
    \$arrayCache = new ArrayCache();
    \$apcuCache = new ApcuCache();

    \$cache = new ChainCache([\$arrayCache, \$apcuCache]);

CouchbaseBucketCache
--------------------

The ``CouchbaseBucketCache`` driver uses Couchbase to store the cache data.

.. code-block:: php
    \$bucketName = 'bucket-name';

    \$authenticator = new Couchbase\\PasswordAuthenticator();
    \$authenticator->username('username')->password('password');

    \$cluster = new CouchbaseCluster('couchbase://127.0.0.1');

    \$cluster->authenticate(\$authenticator);
    \$bucket = \$cluster->openBucket(\$bucketName);

    \$cache = new CouchbaseBucketCache(\$bucket);

FilesystemCache
---------------

The ``FilesystemCache`` driver stores the cache data on the local filesystem.

.. code-block:: php
    \$cache = new FilesystemCache('/path/to/cache/directory');

MemecacheCache
--------------

The ``MemcacheCache`` drivers stores the cache data in Memcache.

.. code-block:: php
    \$memcache = new Memcache();
    \$memcache->connect('localhost', 11211);

    \$cache = new MemcacheCache();
    \$cache->setMemcache(\$memcache);

MemcachedCache
--------------

The ``MemcachedCache`` drivers stores the cache data in Memcached.

.. code-block:: php
    \$memcached = new Memcached();

    \$cache = new MemcachedCache();
    \$cache->setMemcached(\$memcached);

MongoDBCache
------------

The ``MongoDBCache`` drivers stores the cache data in a MongoDB collection.

.. code-block:: php
    \$manager = new MongoDB\\Driver\\Manager(\"mongodb://localhost:27017\");

    \$collection = new MongoDB\\Collection(\$manager, 'database_name', 'collection_name');

    \$cache = new MongoDBCache(\$collection);

PhpFileCache
------------

The ``PhpFileCache`` driver stores the cache data on the local filesystem like the
``FilesystemCache`` driver except the data is serialized using the ``serialize()``
and ``unserialize()`` functions available in PHP. The files are included so this means
that the data can be cached in PHPs opcache.

.. code-block:: php
    \$cache = new PhpFileCache('/path/to/cache/directory');

PredisCache
-----------

The ``PredisCache`` driver stores the cache data in Redis
and depends on the ``predis/predis`` package which can be installed with composer.

.. code-block:: bash
    \$ composer require predis/predis

Then you can use the ``Predis\\Client`` class to pass to the ``PredisCache`` class.

.. code-block:: php
    \$client = new Predis\\Client();

    \$cache = new PredisCache(\$client);

RedisCache
----------

The ``RedisCache`` driver stores the cache data in Redis and depends on the
``phpredis`` extension which can be found `here <https://github.com/phpredis/phpredis>`_.

.. code-block:: php
    \$redis = new Redis();

    \$cache = new RedisCache(\$redis);

RiakCache
---------

The ``RiakCache`` driver stores the cache data in Riak and depends on the
``riak`` extension which can be found `here <https://github.com/php-riak/php_riak>`_.

.. code-block:: php
    \$connection = new Riak\\Connection('localhost', 8087);

    \$bucket = new Riak\\Bucket(\$connection, 'bucket_name');

    \$cache = new RiakCache(\$bucket);

SQLite3Cache
------------

The ``SQLite3Cache`` driver stores the cache data in a SQLite database and depends on the
``sqlite3`` extension which can be found `here <http://php.net/manual/en/book.sqlite3.php>`_.

.. code-block:: php
    \$db = new SQLite3('mydatabase.db');

    \$cache = new SQLite3Cache(\$db, 'table_name');

VoidCache
---------

The ``VoidCache`` driver does not store the cache data anywhere. This can
be useful for test environments where you don't want to cache the data
anywhere but need to satisfy the dependency for the ``Doctrine\\Common\\Cache\\Cache``
interface.

.. code-block:: php
    \$cache = new VoidCache();

WinCacheCache
-------------

The ``WinCacheCache`` driver uses the ``wincache_ucache_get``, ``wincache_ucache_exists``, etc. functions that come
with the ``wincache`` extension which can be found `here <http://php.net/manual/en/book.wincache.php>`_.

.. code-block:: php
    \$cache = new WinCacheCache();

XcacheCache
-----------

The ``XcacheCache`` driver uses functions that come with the ``xcache``
extension which can be found `here <https://xcache.lighttpd.net/>`_.

.. code-block:: php
    \$cache = new XcacheCache();

ZendDataCache
-------------

The ``ZendDataCache`` driver uses the Zend Data Cache API available in the Zend Platform.

.. code-block:: php
    \$cache = new ZendDataCache();

Custom Drivers
==============

If you want to implement your own cache driver, you just need to implement
the ``Doctrine\\Common\\Cache\\Cache`` interface. Here is an example implementation
skeleton.

.. code-block:: php
    use Doctrine\\Common\\Cache\\Cache;

    class MyCacheDriver implements Cache
    {
        public function fetch(\$id)
        {
            // fetch \$id from the cache
        }

        public function contains(\$id)
        {
            // check if \$id exists in the cache
        }

        public function save(\$id, \$data, \$lifeTime = 0)
        {
            // save \$data under \$id in the cache for \$lifetime
        }

        public function delete(\$id)
        {
            // delete \$id from the cache
        }

        public function getStats()
        {
            // get cache stats
        }
    }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/docs/en/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Introduction
============

Doctrine Cache is a library that provides an interface for caching data.
It comes with implementations for some of the most popular caching data
stores. Here is what the ``Cache`` interface looks like.

.. code-block:: php
    namespace Doctrine\\Common\\Cache;

    interface Cache
    {
        public function fetch(\$id);
        public function contains(\$id);
        public function save(\$id, \$data, \$lifeTime = 0);
        public function delete(\$id);
        public function getStats();
    }

Here is an example that uses Memcache.

.. code-block:: php
    use Doctrine\\Common\\Cache\\MemcacheCache;

    \$memcache = new Memcache();
    \$cache = new MemcacheCache();
    \$cache->setMemcache(\$memcache);

    \$cache->set('key', 'value');

    echo \$cache->get('key') // prints \"value\"

Drivers
=======

Doctrine ships with several common drivers that you can easily use.
Below you can find information about all the available drivers.

ApcCache
--------

The ``ApcCache`` driver uses the ``apc_fetch``, ``apc_exists``, etc. functions that come
with PHP so no additional setup is required in order to use it.

.. code-block:: php
    \$cache = new ApcCache();

ApcuCache
---------

The ``ApcuCache`` driver uses the ``apcu_fetch``, ``apcu_exists``, etc. functions that come
with PHP so no additional setup is required in order to use it.

.. code-block:: php
    \$cache = new ApcuCache();

ArrayCache
----------

The ``ArrayCache`` driver stores the cache data in PHPs memory and is not persisted anywhere.
This can be useful for caching things in memory for a single process when you don't need
the cache to be persistent across processes.

.. code-block:: php
    \$cache = new ArrayCache();

ChainCache
----------

The ``ChainCache`` driver lets you chain multiple other drivers together easily.

.. code-block:: php
    \$arrayCache = new ArrayCache();
    \$apcuCache = new ApcuCache();

    \$cache = new ChainCache([\$arrayCache, \$apcuCache]);

CouchbaseBucketCache
--------------------

The ``CouchbaseBucketCache`` driver uses Couchbase to store the cache data.

.. code-block:: php
    \$bucketName = 'bucket-name';

    \$authenticator = new Couchbase\\PasswordAuthenticator();
    \$authenticator->username('username')->password('password');

    \$cluster = new CouchbaseCluster('couchbase://127.0.0.1');

    \$cluster->authenticate(\$authenticator);
    \$bucket = \$cluster->openBucket(\$bucketName);

    \$cache = new CouchbaseBucketCache(\$bucket);

FilesystemCache
---------------

The ``FilesystemCache`` driver stores the cache data on the local filesystem.

.. code-block:: php
    \$cache = new FilesystemCache('/path/to/cache/directory');

MemecacheCache
--------------

The ``MemcacheCache`` drivers stores the cache data in Memcache.

.. code-block:: php
    \$memcache = new Memcache();
    \$memcache->connect('localhost', 11211);

    \$cache = new MemcacheCache();
    \$cache->setMemcache(\$memcache);

MemcachedCache
--------------

The ``MemcachedCache`` drivers stores the cache data in Memcached.

.. code-block:: php
    \$memcached = new Memcached();

    \$cache = new MemcachedCache();
    \$cache->setMemcached(\$memcached);

MongoDBCache
------------

The ``MongoDBCache`` drivers stores the cache data in a MongoDB collection.

.. code-block:: php
    \$manager = new MongoDB\\Driver\\Manager(\"mongodb://localhost:27017\");

    \$collection = new MongoDB\\Collection(\$manager, 'database_name', 'collection_name');

    \$cache = new MongoDBCache(\$collection);

PhpFileCache
------------

The ``PhpFileCache`` driver stores the cache data on the local filesystem like the
``FilesystemCache`` driver except the data is serialized using the ``serialize()``
and ``unserialize()`` functions available in PHP. The files are included so this means
that the data can be cached in PHPs opcache.

.. code-block:: php
    \$cache = new PhpFileCache('/path/to/cache/directory');

PredisCache
-----------

The ``PredisCache`` driver stores the cache data in Redis
and depends on the ``predis/predis`` package which can be installed with composer.

.. code-block:: bash
    \$ composer require predis/predis

Then you can use the ``Predis\\Client`` class to pass to the ``PredisCache`` class.

.. code-block:: php
    \$client = new Predis\\Client();

    \$cache = new PredisCache(\$client);

RedisCache
----------

The ``RedisCache`` driver stores the cache data in Redis and depends on the
``phpredis`` extension which can be found `here <https://github.com/phpredis/phpredis>`_.

.. code-block:: php
    \$redis = new Redis();

    \$cache = new RedisCache(\$redis);

RiakCache
---------

The ``RiakCache`` driver stores the cache data in Riak and depends on the
``riak`` extension which can be found `here <https://github.com/php-riak/php_riak>`_.

.. code-block:: php
    \$connection = new Riak\\Connection('localhost', 8087);

    \$bucket = new Riak\\Bucket(\$connection, 'bucket_name');

    \$cache = new RiakCache(\$bucket);

SQLite3Cache
------------

The ``SQLite3Cache`` driver stores the cache data in a SQLite database and depends on the
``sqlite3`` extension which can be found `here <http://php.net/manual/en/book.sqlite3.php>`_.

.. code-block:: php
    \$db = new SQLite3('mydatabase.db');

    \$cache = new SQLite3Cache(\$db, 'table_name');

VoidCache
---------

The ``VoidCache`` driver does not store the cache data anywhere. This can
be useful for test environments where you don't want to cache the data
anywhere but need to satisfy the dependency for the ``Doctrine\\Common\\Cache\\Cache``
interface.

.. code-block:: php
    \$cache = new VoidCache();

WinCacheCache
-------------

The ``WinCacheCache`` driver uses the ``wincache_ucache_get``, ``wincache_ucache_exists``, etc. functions that come
with the ``wincache`` extension which can be found `here <http://php.net/manual/en/book.wincache.php>`_.

.. code-block:: php
    \$cache = new WinCacheCache();

XcacheCache
-----------

The ``XcacheCache`` driver uses functions that come with the ``xcache``
extension which can be found `here <https://xcache.lighttpd.net/>`_.

.. code-block:: php
    \$cache = new XcacheCache();

ZendDataCache
-------------

The ``ZendDataCache`` driver uses the Zend Data Cache API available in the Zend Platform.

.. code-block:: php
    \$cache = new ZendDataCache();

Custom Drivers
==============

If you want to implement your own cache driver, you just need to implement
the ``Doctrine\\Common\\Cache\\Cache`` interface. Here is an example implementation
skeleton.

.. code-block:: php
    use Doctrine\\Common\\Cache\\Cache;

    class MyCacheDriver implements Cache
    {
        public function fetch(\$id)
        {
            // fetch \$id from the cache
        }

        public function contains(\$id)
        {
            // check if \$id exists in the cache
        }

        public function save(\$id, \$data, \$lifeTime = 0)
        {
            // save \$data under \$id in the cache for \$lifetime
        }

        public function delete(\$id)
        {
            // delete \$id from the cache
        }

        public function getStats()
        {
            // get cache stats
        }
    }
", "vendor/doctrine/cache/docs/en/index.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/docs/en/index.rst");
    }
}
