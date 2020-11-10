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

/* var/cache/dev/srcApp_KernelDevDebugContainer.xml */
class __TwigTemplate_899f2ea8f0488360f79773d76dffb3cb369833859b5d807ed402cc41d38c0f87 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/srcApp_KernelDevDebugContainer.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/srcApp_KernelDevDebugContainer.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<container xmlns=\"http://symfony.com/schema/dic/services\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <parameters>
    <parameter key=\"kernel.root_dir\">/var/www/public/DevLaon/src</parameter>
    <parameter key=\"kernel.project_dir\">/var/www/public/DevLaon</parameter>
    <parameter key=\"kernel.environment\">dev</parameter>
    <parameter key=\"kernel.debug\">true</parameter>
    <parameter key=\"kernel.name\">src</parameter>
    <parameter key=\"kernel.cache_dir\">/var/www/public/DevLaon/var/cache/dev</parameter>
    <parameter key=\"kernel.logs_dir\">/var/www/public/DevLaon/var/log</parameter>
    <parameter key=\"kernel.bundles\" type=\"collection\">
      <parameter key=\"FrameworkBundle\">Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle</parameter>
      <parameter key=\"SensioFrameworkExtraBundle\">Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle</parameter>
      <parameter key=\"DoctrineCacheBundle\">Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle</parameter>
      <parameter key=\"DoctrineBundle\">Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle</parameter>
      <parameter key=\"DoctrineMigrationsBundle\">Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle</parameter>
      <parameter key=\"SecurityBundle\">Symfony\\Bundle\\SecurityBundle\\SecurityBundle</parameter>
      <parameter key=\"SwiftmailerBundle\">Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle</parameter>
      <parameter key=\"TwigBundle\">Symfony\\Bundle\\TwigBundle\\TwigBundle</parameter>
      <parameter key=\"WebProfilerBundle\">Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle</parameter>
      <parameter key=\"MonologBundle\">Symfony\\Bundle\\MonologBundle\\MonologBundle</parameter>
      <parameter key=\"DebugBundle\">Symfony\\Bundle\\DebugBundle\\DebugBundle</parameter>
      <parameter key=\"MakerBundle\">Symfony\\Bundle\\MakerBundle\\MakerBundle</parameter>
      <parameter key=\"WebServerBundle\">Symfony\\Bundle\\WebServerBundle\\WebServerBundle</parameter>
      <parameter key=\"DoctrineFixturesBundle\">Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle</parameter>
    </parameter>
    <parameter key=\"kernel.bundles_metadata\" type=\"collection\">
      <parameter key=\"FrameworkBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/framework-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\FrameworkBundle</parameter>
      </parameter>
      <parameter key=\"SensioFrameworkExtraBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/sensio/framework-extra-bundle/src</parameter>
        <parameter key=\"namespace\">Sensio\\Bundle\\FrameworkExtraBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineCacheBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/doctrine/doctrine-cache-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\DoctrineCacheBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/doctrine/doctrine-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\DoctrineBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineMigrationsBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/doctrine/doctrine-migrations-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\MigrationsBundle</parameter>
      </parameter>
      <parameter key=\"SecurityBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/security-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\SecurityBundle</parameter>
      </parameter>
      <parameter key=\"SwiftmailerBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/swiftmailer-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\SwiftmailerBundle</parameter>
      </parameter>
      <parameter key=\"TwigBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/twig-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\TwigBundle</parameter>
      </parameter>
      <parameter key=\"WebProfilerBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\WebProfilerBundle</parameter>
      </parameter>
      <parameter key=\"MonologBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/monolog-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\MonologBundle</parameter>
      </parameter>
      <parameter key=\"DebugBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/debug-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\DebugBundle</parameter>
      </parameter>
      <parameter key=\"MakerBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/maker-bundle/src</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\MakerBundle</parameter>
      </parameter>
      <parameter key=\"WebServerBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/web-server-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\WebServerBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineFixturesBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/doctrine/doctrine-fixtures-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\FixturesBundle</parameter>
      </parameter>
    </parameter>
    <parameter key=\"kernel.charset\">UTF-8</parameter>
    <parameter key=\"kernel.container_class\">srcApp_KernelDevDebugContainer</parameter>
    <parameter key=\"container.dumper.inline_class_loader\">true</parameter>
    <parameter key=\"fragment.renderer.hinclude.global_template\"></parameter>
    <parameter key=\"fragment.path\">/_fragment</parameter>
    <parameter key=\"kernel.secret\">%env(APP_SECRET)%</parameter>
    <parameter key=\"kernel.http_method_override\">true</parameter>
    <parameter key=\"kernel.trusted_hosts\" type=\"collection\"/>
    <parameter key=\"kernel.default_locale\">en</parameter>
    <parameter key=\"templating.helper.code.file_link_format\">null</parameter>
    <parameter key=\"debug.file_link_format\">null</parameter>
    <parameter key=\"session.metadata.storage_key\">_sf2_meta</parameter>
    <parameter key=\"session.storage.options\" type=\"collection\">
      <parameter key=\"cache_limiter\">0</parameter>
      <parameter key=\"cookie_secure\">auto</parameter>
      <parameter key=\"cookie_httponly\">true</parameter>
      <parameter key=\"cookie_samesite\">lax</parameter>
      <parameter key=\"gc_probability\">1</parameter>
    </parameter>
    <parameter key=\"session.save_path\">/var/www/public/DevLaon/var/cache/dev/sessions</parameter>
    <parameter key=\"session.metadata.update_threshold\">0</parameter>
    <parameter key=\"form.type_extension.csrf.enabled\">true</parameter>
    <parameter key=\"form.type_extension.csrf.field_name\">_token</parameter>
    <parameter key=\"asset.request_context.base_path\"></parameter>
    <parameter key=\"asset.request_context.secure\">false</parameter>
    <parameter key=\"validator.mapping.cache.prefix\"></parameter>
    <parameter key=\"validator.mapping.cache.file\">/var/www/public/DevLaon/var/cache/dev/validation.php</parameter>
    <parameter key=\"validator.translation_domain\">validators</parameter>
    <parameter key=\"translator.logging\">false</parameter>
    <parameter key=\"translator.default_path\">/var/www/public/DevLaon/translations</parameter>
    <parameter key=\"profiler_listener.only_exceptions\">false</parameter>
    <parameter key=\"profiler_listener.only_master_requests\">false</parameter>
    <parameter key=\"profiler.storage.dsn\">file:/var/www/public/DevLaon/var/cache/dev/profiler</parameter>
    <parameter key=\"debug.error_handler.throw_at\">-1</parameter>
    <parameter key=\"debug.container.dump\">/var/www/public/DevLaon/var/cache/dev/srcApp_KernelDevDebugContainer.xml</parameter>
    <parameter key=\"router.request_context.host\">localhost</parameter>
    <parameter key=\"router.request_context.scheme\">http</parameter>
    <parameter key=\"router.request_context.base_url\"></parameter>
    <parameter key=\"router.resource\">kernel::loadRoutes</parameter>
    <parameter key=\"router.cache_class_prefix\">srcApp_KernelDevDebugContainer</parameter>
    <parameter key=\"request_listener.http_port\">80</parameter>
    <parameter key=\"request_listener.https_port\">443</parameter>
    <parameter key=\"serializer.mapping.cache.file\">/var/www/public/DevLaon/var/cache/dev/serialization.php</parameter>
    <parameter key=\"serializer.mapping.cache.prefix\"></parameter>
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
    <parameter key=\"doctrine.dbal.logger.chain.class\">Doctrine\\DBAL\\Logging\\LoggerChain</parameter>
    <parameter key=\"doctrine.dbal.logger.profiling.class\">Doctrine\\DBAL\\Logging\\DebugStack</parameter>
    <parameter key=\"doctrine.dbal.logger.class\">Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger</parameter>
    <parameter key=\"doctrine.dbal.configuration.class\">Doctrine\\DBAL\\Configuration</parameter>
    <parameter key=\"doctrine.data_collector.class\">Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector</parameter>
    <parameter key=\"doctrine.dbal.connection.event_manager.class\">Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager</parameter>
    <parameter key=\"doctrine.dbal.connection_factory.class\">Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory</parameter>
    <parameter key=\"doctrine.dbal.events.mysql_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit</parameter>
    <parameter key=\"doctrine.dbal.events.oracle_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit</parameter>
    <parameter key=\"doctrine.class\">Doctrine\\Bundle\\DoctrineBundle\\Registry</parameter>
    <parameter key=\"doctrine.entity_managers\" type=\"collection\">
      <parameter key=\"default\">doctrine.orm.default_entity_manager</parameter>
    </parameter>
    <parameter key=\"doctrine.default_entity_manager\">default</parameter>
    <parameter key=\"doctrine.dbal.connection_factory.types\" type=\"collection\"/>
    <parameter key=\"doctrine.connections\" type=\"collection\">
      <parameter key=\"default\">doctrine.dbal.default_connection</parameter>
    </parameter>
    <parameter key=\"doctrine.default_connection\">default</parameter>
    <parameter key=\"doctrine.orm.configuration.class\">Doctrine\\ORM\\Configuration</parameter>
    <parameter key=\"doctrine.orm.entity_manager.class\">Doctrine\\ORM\\EntityManager</parameter>
    <parameter key=\"doctrine.orm.manager_configurator.class\">Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator</parameter>
    <parameter key=\"doctrine.orm.cache.array.class\">Doctrine\\Common\\Cache\\ArrayCache</parameter>
    <parameter key=\"doctrine.orm.cache.apc.class\">Doctrine\\Common\\Cache\\ApcCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcache.class\">Doctrine\\Common\\Cache\\MemcacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_port\">11211</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_instance.class\">Memcache</parameter>
    <parameter key=\"doctrine.orm.cache.memcached.class\">Doctrine\\Common\\Cache\\MemcachedCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_port\">11211</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_instance.class\">Memcached</parameter>
    <parameter key=\"doctrine.orm.cache.redis.class\">Doctrine\\Common\\Cache\\RedisCache</parameter>
    <parameter key=\"doctrine.orm.cache.redis_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.redis_port\">6379</parameter>
    <parameter key=\"doctrine.orm.cache.redis_instance.class\">Redis</parameter>
    <parameter key=\"doctrine.orm.cache.xcache.class\">Doctrine\\Common\\Cache\\XcacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.wincache.class\">Doctrine\\Common\\Cache\\WinCacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.zenddata.class\">Doctrine\\Common\\Cache\\ZendDataCache</parameter>
    <parameter key=\"doctrine.orm.metadata.driver_chain.class\">Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain</parameter>
    <parameter key=\"doctrine.orm.metadata.annotation.class\">Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.xml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.yml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.php.class\">Doctrine\\ORM\\Mapping\\Driver\\PHPDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.staticphp.class\">Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver</parameter>
    <parameter key=\"doctrine.orm.proxy_cache_warmer.class\">Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer</parameter>
    <parameter key=\"form.type_guesser.doctrine.class\">Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser</parameter>
    <parameter key=\"doctrine.orm.validator.unique.class\">Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator</parameter>
    <parameter key=\"doctrine.orm.validator_initializer.class\">Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer</parameter>
    <parameter key=\"doctrine.orm.security.user.provider.class\">Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider</parameter>
    <parameter key=\"doctrine.orm.listeners.resolve_target_entity.class\">Doctrine\\ORM\\Tools\\ResolveTargetEntityListener</parameter>
    <parameter key=\"doctrine.orm.listeners.attach_entity_listeners.class\">Doctrine\\ORM\\Tools\\AttachEntityListenersListener</parameter>
    <parameter key=\"doctrine.orm.naming_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultNamingStrategy</parameter>
    <parameter key=\"doctrine.orm.naming_strategy.underscore.class\">Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy</parameter>
    <parameter key=\"doctrine.orm.quote_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy</parameter>
    <parameter key=\"doctrine.orm.quote_strategy.ansi.class\">Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy</parameter>
    <parameter key=\"doctrine.orm.entity_listener_resolver.class\">Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.default_cache_factory.class\">Doctrine\\ORM\\Cache\\DefaultCacheFactory</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.default_region.class\">Doctrine\\ORM\\Cache\\Region\\DefaultRegion</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.filelock_region.class\">Doctrine\\ORM\\Cache\\Region\\FileLockRegion</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.logger_chain.class\">Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.logger_statistics.class\">Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.cache_configuration.class\">Doctrine\\ORM\\Cache\\CacheConfiguration</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.regions_configuration.class\">Doctrine\\ORM\\Cache\\RegionsConfiguration</parameter>
    <parameter key=\"doctrine.orm.auto_generate_proxy_classes\">true</parameter>
    <parameter key=\"doctrine.orm.proxy_dir\">/var/www/public/DevLaon/var/cache/dev/doctrine/orm/Proxies</parameter>
    <parameter key=\"doctrine.orm.proxy_namespace\">Proxies</parameter>
    <parameter key=\"doctrine_migrations.dir_name\">/var/www/public/DevLaon/src/Migrations</parameter>
    <parameter key=\"doctrine_migrations.namespace\">DoctrineMigrations</parameter>
    <parameter key=\"doctrine_migrations.table_name\">migration_versions</parameter>
    <parameter key=\"doctrine_migrations.column_name\">version</parameter>
    <parameter key=\"doctrine_migrations.column_length\">14</parameter>
    <parameter key=\"doctrine_migrations.executed_at_column_name\">executed_at</parameter>
    <parameter key=\"doctrine_migrations.all_or_nothing\">false</parameter>
    <parameter key=\"doctrine_migrations.name\">Application Migrations</parameter>
    <parameter key=\"doctrine_migrations.custom_template\">null</parameter>
    <parameter key=\"doctrine_migrations.organize_migrations\">false</parameter>
    <parameter key=\"security.authentication.trust_resolver.anonymous_class\">null</parameter>
    <parameter key=\"security.authentication.trust_resolver.rememberme_class\">null</parameter>
    <parameter key=\"security.role_hierarchy.roles\" type=\"collection\">
      <parameter key=\"ROLE_ADMIN\" type=\"collection\">
        <parameter>ROLE_USER</parameter>
      </parameter>
    </parameter>
    <parameter key=\"security.access.denied_url\">null</parameter>
    <parameter key=\"security.authentication.manager.erase_credentials\">true</parameter>
    <parameter key=\"security.authentication.session_strategy.strategy\">migrate</parameter>
    <parameter key=\"security.access.always_authenticate_before_granting\">false</parameter>
    <parameter key=\"security.authentication.hide_user_not_found\">true</parameter>
    <parameter key=\"swiftmailer.mailer.default.transport.name\">dynamic</parameter>
    <parameter key=\"swiftmailer.spool.default.memory.path\">/var/www/public/DevLaon/var/cache/dev/swiftmailer/spool/default</parameter>
    <parameter key=\"swiftmailer.mailer.default.spool.enabled\">true</parameter>
    <parameter key=\"swiftmailer.mailer.default.plugin.impersonate\">null</parameter>
    <parameter key=\"swiftmailer.mailer.default.single_address\">null</parameter>
    <parameter key=\"swiftmailer.mailer.default.delivery.enabled\">true</parameter>
    <parameter key=\"swiftmailer.spool.enabled\">true</parameter>
    <parameter key=\"swiftmailer.delivery.enabled\">true</parameter>
    <parameter key=\"swiftmailer.single_address\">null</parameter>
    <parameter key=\"swiftmailer.mailers\" type=\"collection\">
      <parameter key=\"default\">swiftmailer.mailer.default</parameter>
    </parameter>
    <parameter key=\"swiftmailer.default_mailer\">default</parameter>
    <parameter key=\"twig.exception_listener.controller\">twig.controller.exception::showAction</parameter>
    <parameter key=\"twig.form.resources\" type=\"collection\">
      <parameter>form_div_layout.html.twig</parameter>
    </parameter>
    <parameter key=\"twig.default_path\">/var/www/public/DevLaon/templates</parameter>
    <parameter key=\"web_profiler.debug_toolbar.intercept_redirects\">false</parameter>
    <parameter key=\"web_profiler.debug_toolbar.mode\">2</parameter>
    <parameter key=\"monolog.use_microseconds\">true</parameter>
    <parameter key=\"monolog.swift_mailer.handlers\" type=\"collection\"/>
    <parameter key=\"monolog.handlers_to_channels\" type=\"collection\">
      <parameter key=\"monolog.handler.console\" type=\"collection\">
        <parameter key=\"type\">exclusive</parameter>
        <parameter key=\"elements\" type=\"collection\">
          <parameter>event</parameter>
          <parameter>doctrine</parameter>
          <parameter>console</parameter>
        </parameter>
      </parameter>
      <parameter key=\"monolog.handler.main\" type=\"collection\">
        <parameter key=\"type\">exclusive</parameter>
        <parameter key=\"elements\" type=\"collection\">
          <parameter>event</parameter>
        </parameter>
      </parameter>
    </parameter>
    <parameter key=\"env(VAR_DUMPER_SERVER)\">127.0.0.1:9912</parameter>
    <parameter key=\"data_collector.templates\" type=\"collection\">
      <parameter key=\"data_collector.request\" type=\"collection\">
        <parameter>request</parameter>
        <parameter>@WebProfiler/Collector/request.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.time\" type=\"collection\">
        <parameter>time</parameter>
        <parameter>@WebProfiler/Collector/time.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.memory\" type=\"collection\">
        <parameter>memory</parameter>
        <parameter>@WebProfiler/Collector/memory.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.validator\" type=\"collection\">
        <parameter>validator</parameter>
        <parameter>@WebProfiler/Collector/validator.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.ajax\" type=\"collection\">
        <parameter>ajax</parameter>
        <parameter>@WebProfiler/Collector/ajax.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.form\" type=\"collection\">
        <parameter>form</parameter>
        <parameter>@WebProfiler/Collector/form.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.exception\" type=\"collection\">
        <parameter>exception</parameter>
        <parameter>@WebProfiler/Collector/exception.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.logger\" type=\"collection\">
        <parameter>logger</parameter>
        <parameter>@WebProfiler/Collector/logger.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.events\" type=\"collection\">
        <parameter>events</parameter>
        <parameter>@WebProfiler/Collector/events.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.router\" type=\"collection\">
        <parameter>router</parameter>
        <parameter>@WebProfiler/Collector/router.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.cache\" type=\"collection\">
        <parameter>cache</parameter>
        <parameter>@WebProfiler/Collector/cache.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.translation\" type=\"collection\">
        <parameter>translation</parameter>
        <parameter>@WebProfiler/Collector/translation.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.security\" type=\"collection\">
        <parameter>security</parameter>
        <parameter>@Security/Collector/security.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.twig\" type=\"collection\">
        <parameter>twig</parameter>
        <parameter>@WebProfiler/Collector/twig.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.doctrine\" type=\"collection\">
        <parameter>db</parameter>
        <parameter>@Doctrine/Collector/db.html.twig</parameter>
      </parameter>
      <parameter key=\"swiftmailer.data_collector\" type=\"collection\">
        <parameter>swiftmailer</parameter>
        <parameter>@Swiftmailer/Collector/swiftmailer.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.dump\" type=\"collection\">
        <parameter>dump</parameter>
        <parameter>@Debug/Profiler/dump.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.config\" type=\"collection\">
        <parameter>config</parameter>
        <parameter>@WebProfiler/Collector/config.html.twig</parameter>
      </parameter>
    </parameter>
    <parameter key=\"console.command.ids\" type=\"collection\">
      <parameter>console.command.public_alias.doctrine_cache.contains_command</parameter>
      <parameter>console.command.public_alias.doctrine_cache.delete_command</parameter>
      <parameter>console.command.public_alias.doctrine_cache.flush_command</parameter>
      <parameter>console.command.public_alias.doctrine_cache.stats_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.diff_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.dump_schema_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.execute_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.generate_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.latest_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.migrate_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.rollup_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.status_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.up_to_date_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.version_command</parameter>
    </parameter>
  </parameters>
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"EasyCorp\\EasyLog\\EasyLogHandler\" class=\"EasyCorp\\EasyLog\\EasyLogHandler\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/log/dev.log</argument>
    </service>
    <service id=\"App\\Controller\\ArticleController\" class=\"App\\Controller\\ArticleController\" public=\"true\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"controller.service_arguments\"/>
      <tag name=\"container.service_subscriber\"/>
      <call method=\"setContainer\">
        <argument type=\"service\" id=\".service_locator.CDOTD6..App\\Controller\\ArticleController\"/>
      </call>
    </service>
    <service id=\"App\\Controller\\SecurityController\" class=\"App\\Controller\\SecurityController\" public=\"true\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"controller.service_arguments\"/>
      <tag name=\"container.service_subscriber\"/>
      <call method=\"setContainer\">
        <argument type=\"service\" id=\".service_locator.CDOTD6..App\\Controller\\SecurityController\"/>
      </call>
    </service>
    <service id=\"App\\DataFixtures\\AppFixtures\" class=\"App\\DataFixtures\\AppFixtures\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.fixture.orm\"/>
      <argument type=\"service\" id=\"security.user_password_encoder.generic\"/>
    </service>
    <service id=\"App\\Form\\ArticleType\" class=\"App\\Form\\ArticleType\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"form.type\"/>
    </service>
    <service id=\"App\\Form\\CommentType\" class=\"App\\Form\\CommentType\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"form.type\"/>
    </service>
    <service id=\"App\\Form\\RegistrationType\" class=\"App\\Form\\RegistrationType\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"form.type\"/>
    </service>
    <service id=\"App\\Repository\\ArticleLikeRepository\" class=\"App\\Repository\\ArticleLikeRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"App\\Repository\\ArticleRepository\" class=\"App\\Repository\\ArticleRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"App\\Repository\\CategoryRepository\" class=\"App\\Repository\\CategoryRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"App\\Repository\\CommentRepository\" class=\"App\\Repository\\CommentRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"App\\Repository\\UserRepository\" class=\"App\\Repository\\UserRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"controller_name_converter\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <argument type=\"service\" id=\"kernel\"/>
    </service>
    <service id=\"argument_metadata_factory\" class=\"Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory\" public=\"false\"/>
    <service id=\"response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument>UTF-8</argument>
    </service>
    <service id=\"streamed_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"locale_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>en</argument>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"validate_request_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"resolve_controller_name_subscriber\" class=\"Symfony\\Bundle\\FrameworkBundle\\EventListener\\ResolveControllerNameSubscriber\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"controller_name_converter\"/>
    </service>
    <service id=\"disallow_search_engine_index_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DisallowRobotsIndexingListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"parameter_bag\" class=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"http_kernel\" class=\"Symfony\\Component\\HttpKernel\\HttpKernel\" public=\"true\">
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <argument type=\"service\" id=\"debug.controller_resolver\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"debug.argument_resolver\"/>
    </service>
    <service id=\"request_stack\" class=\"Symfony\\Component\\HttpFoundation\\RequestStack\" public=\"true\"/>
    <service id=\"url_helper\" class=\"Symfony\\Component\\HttpFoundation\\UrlHelper\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"cache_warmer\" class=\"Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate\" public=\"true\">
      <argument type=\"tagged\" tag=\"kernel.cache_warmer\"/>
      <argument>true</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/srcApp_KernelDevDebugContainerDeprecations.log</argument>
    </service>
    <service id=\"cache_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer\" public=\"true\">
      <argument type=\"tagged\" tag=\"kernel.cache_clearer\"/>
    </service>
    <service id=\"kernel\" public=\"true\" synthetic=\"true\"/>
    <service id=\"filesystem\" class=\"Symfony\\Component\\Filesystem\\Filesystem\" public=\"true\"/>
    <service id=\"file_locator\" class=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\" public=\"false\">
      <argument type=\"service\" id=\"kernel\"/>
      <argument>/var/www/public/DevLaon/src/Resources</argument>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/src</argument>
      </argument>
    </service>
    <service id=\"uri_signer\" class=\"Symfony\\Component\\HttpKernel\\UriSigner\" public=\"false\">
      <argument>%env(APP_SECRET)%</argument>
    </service>
    <service id=\"config_cache_factory\" class=\"Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory\" public=\"false\">
      <argument type=\"tagged\" tag=\"config_cache.resource_checker\"/>
    </service>
    <service id=\"dependency_injection.config.container_parameters_resource_checker\" class=\"Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResourceChecker\" public=\"false\">
      <tag name=\"config_cache.resource_checker\" priority=\"-980\"/>
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"config.resource.self_checking_resource_checker\" class=\"Symfony\\Component\\Config\\Resource\\SelfCheckingResourceChecker\" public=\"false\">
      <tag name=\"config_cache.resource_checker\" priority=\"-990\"/>
    </service>
    <service id=\"services_resetter\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\ServicesResetter\" public=\"true\">
      <argument type=\"iterator\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.messenger.restart_workers_signal\" type=\"service\" id=\"cache.messenger.restart_workers_signal\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"form.choice_list_factory.cached\" type=\"service\" id=\"form.choice_list_factory.cached\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"profiler\" type=\"service\" id=\"profiler\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"debug.validator\" type=\"service\" id=\"debug.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"debug.stopwatch\" type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"debug.event_dispatcher\" type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"form.type.entity\" type=\"service\" id=\"form.type.entity\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"security.token_storage\" type=\"service\" id=\"security.token_storage\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.security_expression_language\" type=\"service\" id=\"cache.security_expression_language\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"swiftmailer.email_sender.listener\" type=\"service\" id=\"swiftmailer.email_sender.listener\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"monolog.handler.main\" type=\"service\" id=\"monolog.handler.main\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"monolog.handler.console\" type=\"service\" id=\"monolog.handler.console\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
      <argument type=\"collection\">
        <argument key=\"cache.app\">reset</argument>
        <argument key=\"cache.system\">reset</argument>
        <argument key=\"cache.validator\">reset</argument>
        <argument key=\"cache.serializer\">reset</argument>
        <argument key=\"cache.annotations\">reset</argument>
        <argument key=\"cache.property_info\">reset</argument>
        <argument key=\"cache.messenger.restart_workers_signal\">reset</argument>
        <argument key=\"form.choice_list_factory.cached\">reset</argument>
        <argument key=\"profiler\">reset</argument>
        <argument key=\"debug.validator\">reset</argument>
        <argument key=\"debug.stopwatch\">reset</argument>
        <argument key=\"debug.event_dispatcher\">reset</argument>
        <argument key=\"form.type.entity\">reset</argument>
        <argument key=\"security.token_storage\">setToken</argument>
        <argument key=\"cache.security_expression_language\">reset</argument>
        <argument key=\"swiftmailer.email_sender.listener\">reset</argument>
        <argument key=\"monolog.handler.main\">reset</argument>
        <argument key=\"monolog.handler.console\">reset</argument>
      </argument>
    </service>
    <service id=\"reverse_container\" class=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"service\" id=\".service_locator.UwRI0uT\"/>
    </service>
    <service id=\"locale_aware_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\LocaleAwareListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"translator.default\"/>
      </argument>
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"fragment.handler\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.gmwRZ3h\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>true</argument>
    </service>
    <service id=\"fragment.renderer.inline\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer\" public=\"false\">
      <tag name=\"kernel.fragment_renderer\" alias=\"inline\"/>
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <call method=\"setFragmentPath\">
        <argument>/_fragment</argument>
      </call>
    </service>
    <service id=\"console.error_listener\" class=\"Symfony\\Component\\Console\\EventListener\\ErrorListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"console\"/>
      <argument type=\"service\" id=\"monolog.logger.console\" on-invalid=\"null\"/>
    </service>
    <service id=\"console.suggest_missing_package_subscriber\" class=\"Symfony\\Bundle\\FrameworkBundle\\EventListener\\SuggestMissingPackageSubscriber\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
    </service>
    <service id=\"console.command.about\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"about\"/>
      <call method=\"setName\">
        <argument>about</argument>
      </call>
    </service>
    <service id=\"console.command.assets_install\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"assets:install\"/>
      <argument type=\"service\" id=\"filesystem\"/>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"setName\">
        <argument>assets:install</argument>
      </call>
    </service>
    <service id=\"console.command.cache_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:clear\"/>
      <argument type=\"service\" id=\"cache_clearer\"/>
      <argument type=\"service\" id=\"filesystem\"/>
      <call method=\"setName\">
        <argument>cache:clear</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:clear\"/>
      <argument type=\"service\" id=\"cache.global_clearer\"/>
      <call method=\"setName\">
        <argument>cache:pool:clear</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_prune\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:prune\"/>
      <argument type=\"iterator\"/>
      <call method=\"setName\">
        <argument>cache:pool:prune</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_delete\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:delete\"/>
      <argument type=\"service\" id=\"cache.global_clearer\"/>
      <call method=\"setName\">
        <argument>cache:pool:delete</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_list\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:list\"/>
      <argument type=\"collection\">
        <argument>cache.app</argument>
        <argument>cache.system</argument>
        <argument>cache.validator</argument>
        <argument>cache.serializer</argument>
        <argument>cache.annotations</argument>
        <argument>cache.property_info</argument>
        <argument>cache.messenger.restart_workers_signal</argument>
        <argument>cache.security_expression_language</argument>
      </argument>
      <call method=\"setName\">
        <argument>cache:pool:list</argument>
      </call>
    </service>
    <service id=\"console.command.cache_warmup\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:warmup\"/>
      <argument type=\"service\" id=\"cache_warmer\"/>
      <call method=\"setName\">
        <argument>cache:warmup</argument>
      </call>
    </service>
    <service id=\"console.command.config_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:config\"/>
      <call method=\"setName\">
        <argument>debug:config</argument>
      </call>
    </service>
    <service id=\"console.command.config_dump_reference\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"config:dump-reference\"/>
      <call method=\"setName\">
        <argument>config:dump-reference</argument>
      </call>
    </service>
    <service id=\"console.command.container_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:container\"/>
      <call method=\"setName\">
        <argument>debug:container</argument>
      </call>
    </service>
    <service id=\"console.command.debug_autowiring\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:autowiring\"/>
      <argument>null</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:autowiring</argument>
      </call>
    </service>
    <service id=\"console.command.event_dispatcher_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:event-dispatcher\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <call method=\"setName\">
        <argument>debug:event-dispatcher</argument>
      </call>
    </service>
    <service id=\"console.command.router_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:router\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:router</argument>
      </call>
    </service>
    <service id=\"console.command.router_match\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"router:match\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <call method=\"setName\">
        <argument>router:match</argument>
      </call>
    </service>
    <service id=\"console.command.translation_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:translation\"/>
      <argument type=\"service\" id=\"translator.data_collector\"/>
      <argument type=\"service\" id=\"translation.reader\"/>
      <argument type=\"service\" id=\"translation.extractor\"/>
      <argument>/var/www/public/DevLaon/translations</argument>
      <argument>/var/www/public/DevLaon/templates</argument>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations</argument>
        <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations</argument>
        <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations</argument>
      </argument>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/vendor/symfony/twig-bridge/Resources/views/Form</argument>
      </argument>
      <call method=\"setName\">
        <argument>debug:translation</argument>
      </call>
    </service>
    <service id=\"console.command.translation_update\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"translation:update\"/>
      <argument type=\"service\" id=\"translation.writer\"/>
      <argument type=\"service\" id=\"translation.reader\"/>
      <argument type=\"service\" id=\"translation.extractor\"/>
      <argument>en</argument>
      <argument>/var/www/public/DevLaon/translations</argument>
      <argument>/var/www/public/DevLaon/templates</argument>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations</argument>
        <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations</argument>
        <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations</argument>
      </argument>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/vendor/symfony/twig-bridge/Resources/views/Form</argument>
      </argument>
      <call method=\"setName\">
        <argument>translation:update</argument>
      </call>
    </service>
    <service id=\"console.command.xliff_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:xliff\"/>
      <call method=\"setName\">
        <argument>lint:xliff</argument>
      </call>
    </service>
    <service id=\"console.command.yaml_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:yaml\"/>
      <call method=\"setName\">
        <argument>lint:yaml</argument>
      </call>
    </service>
    <service id=\"console.command.form_debug\" class=\"Symfony\\Component\\Form\\Command\\DebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:form\"/>
      <argument type=\"service\" id=\"form.registry\"/>
      <argument type=\"collection\">
        <argument>Symfony\\Component\\Form\\Extension\\Core\\Type</argument>
        <argument>App\\Form</argument>
        <argument>Symfony\\Bridge\\Doctrine\\Form\\Type</argument>
      </argument>
      <argument type=\"collection\">
        <argument>App\\Form\\ArticleType</argument>
        <argument>App\\Form\\CommentType</argument>
        <argument>App\\Form\\RegistrationType</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType</argument>
        <argument>Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType</argument>
      </argument>
      <argument type=\"collection\">
        <argument>Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension</argument>
      </argument>
      <argument type=\"collection\">
        <argument>Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser</argument>
        <argument>Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser</argument>
      </argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:form</argument>
      </call>
    </service>
    <service id=\"cache.app\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"true\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.app.recorder_inner\"/>
    </service>
    <service id=\"cache.app.simple\" class=\"Symfony\\Component\\Cache\\Psr16Cache\" public=\"false\">
      <argument type=\"service\" id=\"cache.app\"/>
      <deprecated>The \"Psr\\SimpleCache\\CacheInterface\" / \"%service_id%\" service is deprecated since Symfony 4.3. Use \"Symfony\\Contracts\\Cache\\CacheInterface\" / \"cache.app\" instead.</deprecated>
    </service>
    <service id=\"cache.app.taggable\" class=\"Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter\" public=\"false\">
      <argument type=\"service\" id=\"cache.app\"/>
    </service>
    <service id=\"cache.system\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"true\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.system.recorder_inner\"/>
    </service>
    <service id=\"cache.validator\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.validator.recorder_inner\"/>
    </service>
    <service id=\"cache.serializer\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.serializer.recorder_inner\"/>
    </service>
    <service id=\"cache.annotations\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.annotations.recorder_inner\"/>
    </service>
    <service id=\"cache.property_info\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.property_info.recorder_inner\"/>
    </service>
    <service id=\"cache.messenger.restart_workers_signal\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.messenger.restart_workers_signal.recorder_inner\"/>
    </service>
    <service id=\"cache.adapter.system\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.system_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.adapter.apcu\" class=\"Symfony\\Component\\Cache\\Adapter\\ApcuAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.doctrine\" class=\"Symfony\\Component\\Cache\\Adapter\\DoctrineAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_doctrine_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.filesystem\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.psr6\" class=\"Symfony\\Component\\Cache\\Adapter\\ProxyAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_psr6_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
    </service>
    <service id=\"cache.adapter.redis\" class=\"Symfony\\Component\\Cache\\Adapter\\RedisAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_redis_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.memcached\" class=\"Symfony\\Component\\Cache\\Adapter\\MemcachedAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_memcached_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.pdo\" class=\"Symfony\\Component\\Cache\\Adapter\\PdoAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_pdo_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.array\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument>0</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.default_marshaller\" class=\"Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller\" public=\"false\">
      <argument>null</argument>
    </service>
    <service id=\"cache.default_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"false\">
      <tag name=\"cache.pool.clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.messenger.restart_workers_signal\" type=\"service\" id=\"cache.messenger.restart_workers_signal\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\"cache.system_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"true\">
      <tag name=\"cache.pool.clearer\"/>
      <tag name=\"kernel.cache_clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.security_expression_language\" type=\"service\" id=\"cache.security_expression_language\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\"cache.global_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"true\">
      <tag name=\"cache.pool.clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.messenger.restart_workers_signal\" type=\"service\" id=\"cache.messenger.restart_workers_signal\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.security_expression_language\" type=\"service\" id=\"cache.security_expression_language\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\"identity_translator\" class=\"Symfony\\Component\\Translation\\IdentityTranslator\" public=\"false\"/>
    <service id=\"translator.selector\" class=\"Symfony\\Component\\Translation\\MessageSelector\" public=\"false\">
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2, use \"identity_translator\" instead.</deprecated>
    </service>
    <service id=\".1_NativeFileSessionHandler~3b6zW6I\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/cache/dev/sessions</argument>
    </service>
    <service id=\"session\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Session\" public=\"true\">
      <argument type=\"service\" id=\"session.storage.native\"/>
      <argument type=\"service\" id=\"session.attribute_bag\"/>
      <argument type=\"service\" id=\"session.flash_bag\"/>
    </service>
    <service id=\"session.storage.metadata_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag\" public=\"false\">
      <argument>_sf2_meta</argument>
      <argument>0</argument>
    </service>
    <service id=\"session.storage.native\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage\" public=\"false\">
      <argument>%session.storage.options%</argument>
      <argument>null</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.storage.php_bridge\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage\" public=\"false\">
      <argument>null</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.flash_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag\" public=\"false\"/>
    <service id=\"session.attribute_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag\" public=\"false\"/>
    <service id=\"session.storage.mock_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/cache/dev/sessions</argument>
      <argument>MOCKSESSID</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.handler.native_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler\" public=\"false\">
      <argument type=\"service\" id=\".1_NativeFileSessionHandler~3b6zW6I\"/>
    </service>
    <service id=\"session_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\SessionListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\".service_locator.WPZmidW\"/>
    </service>
    <service id=\"session.save_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener\" public=\"false\">
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.1. Use the \"session_listener\" service instead.</deprecated>
    </service>
    <service id=\"security.csrf.token_generator\" class=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator\" public=\"false\"/>
    <service id=\"security.csrf.token_storage\" class=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage\" public=\"false\">
      <argument type=\"service\" id=\"session\"/>
    </service>
    <service id=\"security.csrf.token_manager\" class=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManager\" public=\"true\">
      <argument type=\"service\" id=\"security.csrf.token_generator\"/>
      <argument type=\"service\" id=\"security.csrf.token_storage\"/>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"twig.runtime.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime\" public=\"false\">
      <tag name=\"twig.runtime\"/>
      <argument type=\"service\" id=\"security.csrf.token_manager\"/>
    </service>
    <service id=\"twig.extension.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"form.resolved_type_factory\" class=\"Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy\" public=\"false\">
      <argument type=\"service\" id=\".1_ResolvedFormTypeFactory~O7oXE4I\"/>
      <argument type=\"service\" id=\"data_collector.form\"/>
    </service>
    <service id=\"form.registry\" class=\"Symfony\\Component\\Form\\FormRegistry\" public=\"false\">
      <argument type=\"collection\">
        <argument type=\"service\" id=\"form.extension\"/>
      </argument>
      <argument type=\"service\" id=\"form.resolved_type_factory\"/>
    </service>
    <service id=\"form.factory\" class=\"Symfony\\Component\\Form\\FormFactory\" public=\"true\">
      <argument type=\"service\" id=\"form.registry\"/>
    </service>
    <service id=\"form.extension\" class=\"Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.cbc17Dc\"/>
      <argument type=\"collection\">
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" type=\"iterator\">
          <argument type=\"service\" id=\"form.type_extension.form.transformation_failure_handling\"/>
          <argument type=\"service\" id=\"form.type_extension.form.http_foundation\"/>
          <argument type=\"service\" id=\"form.type_extension.form.validator\"/>
          <argument type=\"service\" id=\"form.type_extension.upload.validator\"/>
          <argument type=\"service\" id=\"form.type_extension.csrf\"/>
          <argument type=\"service\" id=\"form.type_extension.form.data_collector\"/>
        </argument>
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType\" type=\"iterator\">
          <argument type=\"service\" id=\"form.type_extension.repeated.validator\"/>
        </argument>
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType\" type=\"iterator\">
          <argument type=\"service\" id=\"form.type_extension.submit.validator\"/>
        </argument>
      </argument>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"form.type_guesser.validator\"/>
        <argument type=\"service\" id=\"form.type_guesser.doctrine\"/>
      </argument>
    </service>
    <service id=\"form.type_guesser.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser\" public=\"false\">
      <tag name=\"form.type_guesser\"/>
      <argument type=\"service\" id=\"debug.validator\"/>
    </service>
    <service id=\"form.choice_list_factory.default\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\DefaultChoiceListFactory\" public=\"false\"/>
    <service id=\"form.choice_list_factory.property_access\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\PropertyAccessDecorator\" public=\"false\">
      <argument type=\"service\" id=\"form.choice_list_factory.default\"/>
      <argument type=\"service\" id=\"property_accessor\"/>
    </service>
    <service id=\"form.choice_list_factory.cached\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\CachingFactoryDecorator\" public=\"false\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"form.choice_list_factory.property_access\"/>
    </service>
    <service id=\"form.type.form\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" public=\"false\">
      <tag name=\"form.type\"/>
      <argument type=\"service\" id=\"property_accessor\"/>
    </service>
    <service id=\"form.type.choice\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType\" public=\"false\">
      <tag name=\"form.type\"/>
      <argument type=\"service\" id=\"form.choice_list_factory.cached\"/>
    </service>
    <service id=\"form.type.file\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType\" public=\"true\">
      <tag name=\"form.type\"/>
      <argument type=\"service\" id=\"translator.data_collector\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"form.type_extension.form.transformation_failure_handling\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension\" public=\"false\">
      <tag name=\"form.type_extension\" extended_type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\"/>
      <argument type=\"service\" id=\"translator.data_collector\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"form.type_extension.form.http_foundation\" class=\"Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension\" public=\"false\">
      <tag name=\"form.type_extension\"/>
      <argument type=\"service\" id=\"form.type_extension.form.request_handler\"/>
    </service>
    <service id=\"form.type_extension.form.request_handler\" class=\"Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler\" public=\"false\">
      <argument type=\"service\" id=\"form.server_params\"/>
    </service>
    <service id=\"form.server_params\" class=\"Symfony\\Component\\Form\\Util\\ServerParams\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"form.type_extension.form.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension\" public=\"false\">
      <tag name=\"form.type_extension\" extended_type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\"/>
      <argument type=\"service\" id=\"debug.validator\"/>
    </service>
    <service id=\"form.type_extension.repeated.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension\" public=\"false\">
      <tag name=\"form.type_extension\"/>
    </service>
    <service id=\"form.type_extension.submit.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension\" public=\"false\">
      <tag name=\"form.type_extension\" extended_type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType\"/>
    </service>
    <service id=\"form.type_extension.upload.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension\" public=\"false\">
      <tag name=\"form.type_extension\"/>
      <argument type=\"service\" id=\"translator.data_collector\"/>
      <argument>validators</argument>
    </service>
    <service id=\"form.type_extension.csrf\" class=\"Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension\" public=\"false\">
      <tag name=\"form.type_extension\"/>
      <argument type=\"service\" id=\"security.csrf.token_manager\"/>
      <argument>true</argument>
      <argument>_token</argument>
      <argument type=\"service\" id=\"translator.data_collector\" on-invalid=\"null\"/>
      <argument>validators</argument>
      <argument type=\"service\" id=\"form.server_params\"/>
    </service>
    <service id=\"assets.packages\" class=\"Symfony\\Component\\Asset\\Packages\" public=\"false\">
      <argument type=\"service\" id=\"assets._default_package\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"assets.empty_package\" class=\"Symfony\\Component\\Asset\\Package\" public=\"false\">
      <argument type=\"service\" id=\"assets.empty_version_strategy\"/>
    </service>
    <service id=\"assets.context\" class=\"Symfony\\Component\\Asset\\Context\\RequestStackContext\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument></argument>
      <argument>false</argument>
    </service>
    <service id=\"assets.path_package\" class=\"Symfony\\Component\\Asset\\PathPackage\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\"assets.url_package\" class=\"Symfony\\Component\\Asset\\UrlPackage\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\"assets.static_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"assets.empty_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\EmptyVersionStrategy\" public=\"false\"/>
    <service id=\"assets.json_manifest_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\JsonManifestVersionStrategy\" public=\"false\" abstract=\"true\">
      <argument></argument>
    </service>
    <service id=\"assets._default_package\" class=\"Symfony\\Component\\Asset\\PathPackage\" public=\"false\">
      <argument></argument>
      <argument type=\"service\" id=\"assets.empty_version_strategy\"/>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\".1_PhpArrayAdapter~KuxLmQc\" class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/cache/dev/validation.php</argument>
      <argument type=\"service\" id=\"cache.validator\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\"/>
    </service>
    <service id=\"validator.builder\" class=\"Symfony\\Component\\Validator\\ValidatorBuilderInterface\" public=\"false\">
      <call method=\"setConstraintValidatorFactory\">
        <argument type=\"service\" id=\"validator.validator_factory\"/>
      </call>
      <call method=\"setTranslator\">
        <argument type=\"service\">
          <service class=\"Symfony\\Component\\Validator\\Util\\LegacyTranslatorProxy\">
            <argument type=\"service\" id=\"translator.data_collector\" on-invalid=\"ignore\"/>
          </service>
        </argument>
      </call>
      <call method=\"setTranslationDomain\">
        <argument>validators</argument>
      </call>
      <call method=\"addXmlMappings\">
        <argument type=\"collection\">
          <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/config/validation.xml</argument>
        </argument>
      </call>
      <call method=\"enableAnnotationMapping\">
        <argument type=\"service\" id=\"annotations.cached_reader\"/>
      </call>
      <call method=\"addMethodMapping\">
        <argument>loadValidatorMetadata</argument>
      </call>
      <call method=\"addObjectInitializers\">
        <argument type=\"collection\">
          <argument type=\"service\" id=\"doctrine.orm.validator_initializer\"/>
        </argument>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"doctrine.orm.default_entity_manager.validator_loader\"/>
      </call>
      <factory class=\"Symfony\\Component\\Validator\\Validation\" method=\"createValidatorBuilder\"/>
    </service>
    <service id=\"validator.mapping.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\ValidatorCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\"validator.builder\"/>
      <argument>/var/www/public/DevLaon/var/cache/dev/validation.php</argument>
    </service>
    <service id=\"validator.mapping.cache.symfony\" class=\"Symfony\\Component\\Validator\\Mapping\\Cache\\Psr6Cache\" public=\"false\">
      <argument type=\"service\" id=\".1_PhpArrayAdapter~KuxLmQc\"/>
    </service>
    <service id=\"validator.validator_factory\" class=\"Symfony\\Component\\Validator\\ContainerConstraintValidatorFactory\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.LtnrEkg\"/>
    </service>
    <service id=\"validator.expression\" class=\"Symfony\\Component\\Validator\\Constraints\\ExpressionValidator\" public=\"false\">
      <tag name=\"validator.constraint_validator\" alias=\"validator.expression\"/>
    </service>
    <service id=\"validator.email\" class=\"Symfony\\Component\\Validator\\Constraints\\EmailValidator\" public=\"false\">
      <tag name=\"validator.constraint_validator\" alias=\"Symfony\\Component\\Validator\\Constraints\\EmailValidator\"/>
      <argument>html5</argument>
    </service>
    <service id=\"validator.not_compromised_password\" class=\"Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator\" public=\"false\">
      <tag name=\"validator.constraint_validator\" alias=\"Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator\"/>
      <argument type=\"service\" id=\"http_client\" on-invalid=\"null\"/>
      <argument>UTF-8</argument>
      <argument>true</argument>
      <argument>null</argument>
    </service>
    <service id=\"translator.default\" class=\"Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator\" public=\"false\">
      <tag name=\"kernel.locale_aware\"/>
      <argument type=\"service\" id=\".service_locator.yQVjGlt\"/>
      <argument type=\"service\" id=\"translator.formatter.default\"/>
      <argument>en</argument>
      <argument type=\"collection\">
        <argument key=\"translation.loader.php\" type=\"collection\">
          <argument>php</argument>
        </argument>
        <argument key=\"translation.loader.yml\" type=\"collection\">
          <argument>yaml</argument>
          <argument>yml</argument>
        </argument>
        <argument key=\"translation.loader.xliff\" type=\"collection\">
          <argument>xlf</argument>
          <argument>xliff</argument>
        </argument>
        <argument key=\"translation.loader.po\" type=\"collection\">
          <argument>po</argument>
        </argument>
        <argument key=\"translation.loader.mo\" type=\"collection\">
          <argument>mo</argument>
        </argument>
        <argument key=\"translation.loader.qt\" type=\"collection\">
          <argument>ts</argument>
        </argument>
        <argument key=\"translation.loader.csv\" type=\"collection\">
          <argument>csv</argument>
        </argument>
        <argument key=\"translation.loader.res\" type=\"collection\">
          <argument>res</argument>
        </argument>
        <argument key=\"translation.loader.dat\" type=\"collection\">
          <argument>dat</argument>
        </argument>
        <argument key=\"translation.loader.ini\" type=\"collection\">
          <argument>ini</argument>
        </argument>
        <argument key=\"translation.loader.json\" type=\"collection\">
          <argument>json</argument>
        </argument>
      </argument>
      <argument type=\"collection\">
        <argument key=\"cache_dir\">/var/www/public/DevLaon/var/cache/dev/translations</argument>
        <argument key=\"debug\">true</argument>
        <argument key=\"resource_files\" type=\"collection\">
          <argument key=\"af\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.af.xlf</argument>
          </argument>
          <argument key=\"ar\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.ar.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.ar.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.ar.xlf</argument>
          </argument>
          <argument key=\"az\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.az.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.az.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.az.xlf</argument>
          </argument>
          <argument key=\"be\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.be.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.be.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.be.xlf</argument>
          </argument>
          <argument key=\"bg\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.bg.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.bg.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.bg.xlf</argument>
          </argument>
          <argument key=\"ca\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.ca.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.ca.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.ca.xlf</argument>
          </argument>
          <argument key=\"cs\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.cs.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.cs.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.cs.xlf</argument>
          </argument>
          <argument key=\"cy\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.cy.xlf</argument>
          </argument>
          <argument key=\"da\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.da.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.da.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.da.xlf</argument>
          </argument>
          <argument key=\"de\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.de.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.de.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.de.xlf</argument>
          </argument>
          <argument key=\"el\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.el.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.el.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.el.xlf</argument>
          </argument>
          <argument key=\"en\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.en.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.en.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.en.xlf</argument>
          </argument>
          <argument key=\"es\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.es.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.es.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.es.xlf</argument>
          </argument>
          <argument key=\"et\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.et.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.et.xlf</argument>
          </argument>
          <argument key=\"eu\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.eu.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.eu.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.eu.xlf</argument>
          </argument>
          <argument key=\"fa\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.fa.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.fa.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.fa.xlf</argument>
          </argument>
          <argument key=\"fi\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.fi.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.fi.xlf</argument>
          </argument>
          <argument key=\"fr\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.fr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.fr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.fr.xlf</argument>
          </argument>
          <argument key=\"gl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.gl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.gl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.gl.xlf</argument>
          </argument>
          <argument key=\"he\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.he.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.he.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.he.xlf</argument>
          </argument>
          <argument key=\"hr\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.hr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.hr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.hr.xlf</argument>
          </argument>
          <argument key=\"hu\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.hu.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.hu.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.hu.xlf</argument>
          </argument>
          <argument key=\"hy\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.hy.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.hy.xlf</argument>
          </argument>
          <argument key=\"id\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.id.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.id.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.id.xlf</argument>
          </argument>
          <argument key=\"it\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.it.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.it.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.it.xlf</argument>
          </argument>
          <argument key=\"ja\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.ja.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.ja.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.ja.xlf</argument>
          </argument>
          <argument key=\"lb\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.lb.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.lb.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.lb.xlf</argument>
          </argument>
          <argument key=\"lt\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.lt.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.lt.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.lt.xlf</argument>
          </argument>
          <argument key=\"lv\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.lv.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.lv.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.lv.xlf</argument>
          </argument>
          <argument key=\"mn\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.mn.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.mn.xlf</argument>
          </argument>
          <argument key=\"nb\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.nb.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.nb.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.nb.xlf</argument>
          </argument>
          <argument key=\"nl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.nl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.nl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.nl.xlf</argument>
          </argument>
          <argument key=\"nn\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.nn.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.nn.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.nn.xlf</argument>
          </argument>
          <argument key=\"no\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.no.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.no.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.no.xlf</argument>
          </argument>
          <argument key=\"pl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.pl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.pl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.pl.xlf</argument>
          </argument>
          <argument key=\"pt\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.pt.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.pt.xlf</argument>
          </argument>
          <argument key=\"pt_BR\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf</argument>
          </argument>
          <argument key=\"ro\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.ro.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.ro.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.ro.xlf</argument>
          </argument>
          <argument key=\"ru\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.ru.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.ru.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.ru.xlf</argument>
          </argument>
          <argument key=\"sk\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sk.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.sk.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.sk.xlf</argument>
          </argument>
          <argument key=\"sl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.sl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.sl.xlf</argument>
          </argument>
          <argument key=\"sq\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sq.xlf</argument>
          </argument>
          <argument key=\"sr_Cyrl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf</argument>
          </argument>
          <argument key=\"sr_Latn\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf</argument>
          </argument>
          <argument key=\"sv\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sv.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.sv.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.sv.xlf</argument>
          </argument>
          <argument key=\"th\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.th.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.th.xlf</argument>
          </argument>
          <argument key=\"tl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.tl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.tl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.tl.xlf</argument>
          </argument>
          <argument key=\"tr\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.tr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.tr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.tr.xlf</argument>
          </argument>
          <argument key=\"uk\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.uk.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.uk.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.uk.xlf</argument>
          </argument>
          <argument key=\"vi\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.vi.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.vi.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.vi.xlf</argument>
          </argument>
          <argument key=\"zh_CN\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf</argument>
          </argument>
          <argument key=\"zh_TW\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf</argument>
          </argument>
          <argument key=\"pt_PT\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf</argument>
          </argument>
        </argument>
        <argument key=\"scanned_directories\" type=\"collection\">
          <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/FrameworkBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/sensio/framework-extra-bundle/src/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/SensioFrameworkExtraBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-cache-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/DoctrineCacheBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/DoctrineBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-migrations-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/DoctrineMigrationsBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/security-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/SecurityBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/swiftmailer-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/SwiftmailerBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/TwigBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/WebProfilerBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/monolog-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/MonologBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/debug-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/DebugBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/maker-bundle/src/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/MakerBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/web-server-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/WebServerBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-fixtures-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/DoctrineFixturesBundle/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/translations</argument>
        </argument>
      </argument>
      <call method=\"setConfigCacheFactory\">
        <argument type=\"service\" id=\"config_cache_factory\"/>
      </call>
      <call method=\"setFallbackLocales\">
        <argument type=\"collection\">
          <argument>en</argument>
        </argument>
      </call>
    </service>
    <service id=\"translator.logging\" class=\"Symfony\\Component\\Translation\\LoggingTranslator\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"translation\"/>
      <argument type=\"service\" id=\"translator.logging.inner\"/>
      <argument type=\"service\" id=\"monolog.logger.translation\"/>
    </service>
    <service id=\"translator.formatter.default\" class=\"Symfony\\Component\\Translation\\Formatter\\MessageFormatter\" public=\"false\">
      <argument type=\"service\" id=\"identity_translator\"/>
    </service>
    <service id=\"translation.loader.php\" class=\"Symfony\\Component\\Translation\\Loader\\PhpFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"php\"/>
    </service>
    <service id=\"translation.loader.yml\" class=\"Symfony\\Component\\Translation\\Loader\\YamlFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"yaml\" legacy_alias=\"yml\" legacy-alias=\"yml\"/>
    </service>
    <service id=\"translation.loader.xliff\" class=\"Symfony\\Component\\Translation\\Loader\\XliffFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"xlf\" legacy_alias=\"xliff\" legacy-alias=\"xliff\"/>
    </service>
    <service id=\"translation.loader.po\" class=\"Symfony\\Component\\Translation\\Loader\\PoFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"po\"/>
    </service>
    <service id=\"translation.loader.mo\" class=\"Symfony\\Component\\Translation\\Loader\\MoFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"mo\"/>
    </service>
    <service id=\"translation.loader.qt\" class=\"Symfony\\Component\\Translation\\Loader\\QtFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"ts\"/>
    </service>
    <service id=\"translation.loader.csv\" class=\"Symfony\\Component\\Translation\\Loader\\CsvFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"csv\"/>
    </service>
    <service id=\"translation.loader.res\" class=\"Symfony\\Component\\Translation\\Loader\\IcuResFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"res\"/>
    </service>
    <service id=\"translation.loader.dat\" class=\"Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"dat\"/>
    </service>
    <service id=\"translation.loader.ini\" class=\"Symfony\\Component\\Translation\\Loader\\IniFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"ini\"/>
    </service>
    <service id=\"translation.loader.json\" class=\"Symfony\\Component\\Translation\\Loader\\JsonFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"json\"/>
    </service>
    <service id=\"translation.dumper.php\" class=\"Symfony\\Component\\Translation\\Dumper\\PhpFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"php\"/>
    </service>
    <service id=\"translation.dumper.xliff\" class=\"Symfony\\Component\\Translation\\Dumper\\XliffFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"xlf\"/>
    </service>
    <service id=\"translation.dumper.po\" class=\"Symfony\\Component\\Translation\\Dumper\\PoFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"po\"/>
    </service>
    <service id=\"translation.dumper.mo\" class=\"Symfony\\Component\\Translation\\Dumper\\MoFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"mo\"/>
    </service>
    <service id=\"translation.dumper.yml\" class=\"Symfony\\Component\\Translation\\Dumper\\YamlFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"yml\"/>
    </service>
    <service id=\"translation.dumper.yaml\" class=\"Symfony\\Component\\Translation\\Dumper\\YamlFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"yaml\"/>
      <argument>yaml</argument>
    </service>
    <service id=\"translation.dumper.qt\" class=\"Symfony\\Component\\Translation\\Dumper\\QtFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"ts\"/>
    </service>
    <service id=\"translation.dumper.csv\" class=\"Symfony\\Component\\Translation\\Dumper\\CsvFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"csv\"/>
    </service>
    <service id=\"translation.dumper.ini\" class=\"Symfony\\Component\\Translation\\Dumper\\IniFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"ini\"/>
    </service>
    <service id=\"translation.dumper.json\" class=\"Symfony\\Component\\Translation\\Dumper\\JsonFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"json\"/>
    </service>
    <service id=\"translation.dumper.res\" class=\"Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"res\"/>
    </service>
    <service id=\"translation.extractor.php\" class=\"Symfony\\Component\\Translation\\Extractor\\PhpExtractor\" public=\"false\">
      <tag name=\"translation.extractor\" alias=\"php\"/>
    </service>
    <service id=\"translation.reader\" class=\"Symfony\\Component\\Translation\\Reader\\TranslationReader\" public=\"false\">
      <call method=\"addLoader\">
        <argument>php</argument>
        <argument type=\"service\" id=\"translation.loader.php\"/>
      </call>
      <call method=\"addLoader\">
        <argument>yaml</argument>
        <argument type=\"service\" id=\"translation.loader.yml\"/>
      </call>
      <call method=\"addLoader\">
        <argument>yml</argument>
        <argument type=\"service\" id=\"translation.loader.yml\"/>
      </call>
      <call method=\"addLoader\">
        <argument>xlf</argument>
        <argument type=\"service\" id=\"translation.loader.xliff\"/>
      </call>
      <call method=\"addLoader\">
        <argument>xliff</argument>
        <argument type=\"service\" id=\"translation.loader.xliff\"/>
      </call>
      <call method=\"addLoader\">
        <argument>po</argument>
        <argument type=\"service\" id=\"translation.loader.po\"/>
      </call>
      <call method=\"addLoader\">
        <argument>mo</argument>
        <argument type=\"service\" id=\"translation.loader.mo\"/>
      </call>
      <call method=\"addLoader\">
        <argument>ts</argument>
        <argument type=\"service\" id=\"translation.loader.qt\"/>
      </call>
      <call method=\"addLoader\">
        <argument>csv</argument>
        <argument type=\"service\" id=\"translation.loader.csv\"/>
      </call>
      <call method=\"addLoader\">
        <argument>res</argument>
        <argument type=\"service\" id=\"translation.loader.res\"/>
      </call>
      <call method=\"addLoader\">
        <argument>dat</argument>
        <argument type=\"service\" id=\"translation.loader.dat\"/>
      </call>
      <call method=\"addLoader\">
        <argument>ini</argument>
        <argument type=\"service\" id=\"translation.loader.ini\"/>
      </call>
      <call method=\"addLoader\">
        <argument>json</argument>
        <argument type=\"service\" id=\"translation.loader.json\"/>
      </call>
    </service>
    <service id=\"translation.extractor\" class=\"Symfony\\Component\\Translation\\Extractor\\ChainExtractor\" public=\"false\">
      <call method=\"addExtractor\">
        <argument>php</argument>
        <argument type=\"service\" id=\"translation.extractor.php\"/>
      </call>
      <call method=\"addExtractor\">
        <argument>twig</argument>
        <argument type=\"service\" id=\"twig.translation.extractor\"/>
      </call>
    </service>
    <service id=\"translation.writer\" class=\"Symfony\\Component\\Translation\\Writer\\TranslationWriter\" public=\"false\">
      <call method=\"addDumper\">
        <argument>php</argument>
        <argument type=\"service\" id=\"translation.dumper.php\"/>
      </call>
      <call method=\"addDumper\">
        <argument>xlf</argument>
        <argument type=\"service\" id=\"translation.dumper.xliff\"/>
      </call>
      <call method=\"addDumper\">
        <argument>po</argument>
        <argument type=\"service\" id=\"translation.dumper.po\"/>
      </call>
      <call method=\"addDumper\">
        <argument>mo</argument>
        <argument type=\"service\" id=\"translation.dumper.mo\"/>
      </call>
      <call method=\"addDumper\">
        <argument>yml</argument>
        <argument type=\"service\" id=\"translation.dumper.yml\"/>
      </call>
      <call method=\"addDumper\">
        <argument>yaml</argument>
        <argument type=\"service\" id=\"translation.dumper.yaml\"/>
      </call>
      <call method=\"addDumper\">
        <argument>ts</argument>
        <argument type=\"service\" id=\"translation.dumper.qt\"/>
      </call>
      <call method=\"addDumper\">
        <argument>csv</argument>
        <argument type=\"service\" id=\"translation.dumper.csv\"/>
      </call>
      <call method=\"addDumper\">
        <argument>ini</argument>
        <argument type=\"service\" id=\"translation.dumper.ini\"/>
      </call>
      <call method=\"addDumper\">
        <argument>json</argument>
        <argument type=\"service\" id=\"translation.dumper.json\"/>
      </call>
      <call method=\"addDumper\">
        <argument>res</argument>
        <argument type=\"service\" id=\"translation.dumper.res\"/>
      </call>
    </service>
    <service id=\"translation.warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TranslationsCacheWarmer\" public=\"false\">
      <tag name=\"container.service_subscriber\" id=\"translator\"/>
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\".service_locator._pu.0Tb.translation.warmer\"/>
    </service>
    <service id=\"profiler\" class=\"Symfony\\Component\\HttpKernel\\Profiler\\Profiler\" public=\"true\">
      <tag name=\"monolog.logger\" channel=\"profiler\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"profiler.storage\"/>
      <argument type=\"service\" id=\"monolog.logger.profiler\" on-invalid=\"null\"/>
      <argument>true</argument>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.request\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.time\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.memory\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.validator\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.ajax\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.form\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.exception\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.logger\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.events\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.router\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.cache\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.translation\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.security\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.twig\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.doctrine\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"swiftmailer.data_collector\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.dump\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.config\"/>
      </call>
    </service>
    <service id=\"profiler.storage\" class=\"Symfony\\Component\\HttpKernel\\Profiler\\FileProfilerStorage\" public=\"false\">
      <argument>file:/var/www/public/DevLaon/var/cache/dev/profiler</argument>
    </service>
    <service id=\"profiler_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"profiler\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>null</argument>
      <argument>false</argument>
      <argument>false</argument>
    </service>
    <service id=\"data_collector.config\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/config.html.twig\" id=\"config\" priority=\"-255\"/>
      <call method=\"setKernel\">
        <argument type=\"service\" id=\"kernel\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"data_collector.request\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/request.html.twig\" id=\"request\" priority=\"335\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"data_collector.ajax\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\AjaxDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/ajax.html.twig\" id=\"ajax\" priority=\"315\"/>
    </service>
    <service id=\"data_collector.exception\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/exception.html.twig\" id=\"exception\" priority=\"305\"/>
    </service>
    <service id=\"data_collector.events\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/events.html.twig\" id=\"events\" priority=\"290\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"data_collector.logger\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/logger.html.twig\" id=\"logger\" priority=\"300\"/>
      <tag name=\"monolog.logger\" channel=\"profiler\"/>
      <argument type=\"service\" id=\"monolog.logger.profiler\" on-invalid=\"ignore\"/>
      <argument>/var/www/public/DevLaon/var/cache/dev/srcApp_KernelDevDebugContainer</argument>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"data_collector.time\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/time.html.twig\" id=\"time\" priority=\"330\"/>
      <argument type=\"service\" id=\"kernel\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"data_collector.memory\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/memory.html.twig\" id=\"memory\" priority=\"325\"/>
    </service>
    <service id=\"data_collector.router\" class=\"Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector\" public=\"false\">
      <tag name=\"kernel.event_listener\" event=\"kernel.controller\" method=\"onKernelController\"/>
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/router.html.twig\" id=\"router\" priority=\"285\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"data_collector.cache\" class=\"Symfony\\Component\\Cache\\DataCollector\\CacheDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/cache.html.twig\" id=\"cache\" priority=\"275\"/>
      <call method=\"addInstance\">
        <argument>cache.app</argument>
        <argument type=\"service\" id=\"cache.app\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.system</argument>
        <argument type=\"service\" id=\"cache.system\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.validator</argument>
        <argument type=\"service\" id=\"cache.validator\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.serializer</argument>
        <argument type=\"service\" id=\"cache.serializer\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.annotations</argument>
        <argument type=\"service\" id=\"cache.annotations\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.property_info</argument>
        <argument type=\"service\" id=\"cache.property_info\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.messenger.restart_workers_signal</argument>
        <argument type=\"service\" id=\"cache.messenger.restart_workers_signal\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.security_expression_language</argument>
        <argument type=\"service\" id=\"cache.security_expression_language\"/>
      </call>
    </service>
    <service id=\".1_ResolvedFormTypeFactory~O7oXE4I\" class=\"Symfony\\Component\\Form\\ResolvedFormTypeFactory\" public=\"false\"/>
    <service id=\"form.type_extension.form.data_collector\" class=\"Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension\" public=\"false\">
      <tag name=\"form.type_extension\"/>
      <argument type=\"service\" id=\"data_collector.form\"/>
    </service>
    <service id=\"data_collector.form.extractor\" class=\"Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor\" public=\"false\"/>
    <service id=\"data_collector.form\" class=\"Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/form.html.twig\" id=\"form\" priority=\"310\"/>
      <argument type=\"service\" id=\"data_collector.form.extractor\"/>
    </service>
    <service id=\"debug.validator\" class=\"Symfony\\Component\\Validator\\Validator\\TraceableValidator\" public=\"false\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"debug.validator.inner\"/>
    </service>
    <service id=\"data_collector.validator\" class=\"Symfony\\Component\\Validator\\DataCollector\\ValidatorDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/validator.html.twig\" id=\"validator\" priority=\"320\"/>
      <argument type=\"service\" id=\"debug.validator\"/>
    </service>
    <service id=\"translator.data_collector\" class=\"Symfony\\Component\\Translation\\DataCollectorTranslator\" public=\"false\">
      <argument type=\"service\" id=\"translator.default\"/>
    </service>
    <service id=\"data_collector.translation\" class=\"Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/translation.html.twig\" id=\"translation\" priority=\"275\"/>
      <argument type=\"service\" id=\"translator.data_collector\"/>
    </service>
    <service id=\".cache_connection.GD_MSZC\" class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" public=\"false\">
      <argument>redis://localhost</argument>
      <argument type=\"collection\">
        <argument key=\"lazy\">true</argument>
      </argument>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createConnection\"/>
    </service>
    <service id=\".cache_connection.JKE6keX\" class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" public=\"false\">
      <argument>memcached://localhost</argument>
      <argument type=\"collection\">
        <argument key=\"lazy\">true</argument>
      </argument>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createConnection\"/>
    </service>
    <service id=\"cache.property_access\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\" public=\"false\">
      <argument>0</argument>
      <argument>false</argument>
    </service>
    <service id=\"debug.debug_handlers_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"php\"/>
      <tag name=\"container.hot_path\"/>
      <argument>null</argument>
      <argument type=\"service\" id=\"monolog.logger.php\" on-invalid=\"null\"/>
      <argument>null</argument>
      <argument>-1</argument>
      <argument>true</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\"/>
      <argument>true</argument>
      <argument>UTF-8</argument>
    </service>
    <service id=\"debug.file_link_formatter\" class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" public=\"false\">
      <argument>null</argument>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter.url_format\"/>
    </service>
    <service id=\"debug.stopwatch\" class=\"Symfony\\Component\\Stopwatch\\Stopwatch\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>true</argument>
    </service>
    <service id=\"debug.event_dispatcher\" class=\"Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher\" public=\"false\">
      <tag name=\"container.hot_path\"/>
      <tag name=\"monolog.logger\" channel=\"event\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
      <argument type=\"service\" id=\"monolog.logger.event\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\"/>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"data_collector.router\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"response_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"streamed_response_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-1024</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>setDefaultLocale</argument>
        </argument>
        <argument>100</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>16</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"validate_request_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>256</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"resolve_controller_name_subscriber\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>24</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"disallow_search_engine_index_response_listener\"/>
          <argument>onResponse</argument>
        </argument>
        <argument>-255</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_aware_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>15</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_aware_listener\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>-15</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.error_listener\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.error_listener\"/>
          <argument>onConsoleTerminate</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.suggest_missing_package_subscriber\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>128</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-1000</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"profiler_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-100</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"profiler_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"profiler_listener\"/>
          <argument>onKernelTerminate</argument>
        </argument>
        <argument>-1024</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"data_collector.request\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"data_collector.request\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.debug_handlers_listener\"/>
          <argument>configure</argument>
        </argument>
        <argument>2048</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.command</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.debug_handlers_listener\"/>
          <argument>configure</argument>
        </argument>
        <argument>2048</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.debug_handlers_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>-2048</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>32</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>-64</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"web_link.add_link_header_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.controller.listener\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.converter.listener\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.view.listener\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.view</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.view.listener\"/>
          <argument>onKernelView</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.cache.listener\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.cache.listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller_arguments</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.security.listener\"/>
          <argument>onKernelControllerArguments</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller_arguments</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"framework_extra_bundle.event.is_granted\"/>
          <argument>onKernelControllerArguments</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"security.rememberme.response_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>debug.security.authorization.vote</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.security.voter.vote_listener\"/>
          <argument>onVoterVote</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.security.firewall\"/>
          <argument>configureLogoutUrlGenerator</argument>
        </argument>
        <argument>8</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.security.firewall\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>8</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.security.firewall\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"swiftmailer.email_sender.listener\"/>
          <argument>onException</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"swiftmailer.email_sender.listener\"/>
          <argument>onTerminate</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"swiftmailer.email_sender.listener\"/>
          <argument>onException</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"swiftmailer.email_sender.listener\"/>
          <argument>onTerminate</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"twig.exception_listener\"/>
          <argument>logKernelException</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"twig.exception_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"web_profiler.debug_toolbar\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.command</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"monolog.handler.console\"/>
          <argument>onCommand</argument>
        </argument>
        <argument>255</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"monolog.handler.console\"/>
          <argument>onTerminate</argument>
        </argument>
        <argument>-255</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.command</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.dump_listener\"/>
          <argument>configure</argument>
        </argument>
        <argument>1024</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"maker.console_error_listener\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"maker.console_error_listener\"/>
          <argument>onConsoleTerminate</argument>
        </argument>
        <argument>0</argument>
      </call>
    </service>
    <service id=\"debug.controller_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <argument type=\"service\" id=\"debug.controller_resolver.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableArgumentResolver\" public=\"false\">
      <argument type=\"service\" id=\"debug.argument_resolver.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.log_processor\" class=\"Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"routing.resolver\" class=\"Symfony\\Component\\Config\\Loader\\LoaderResolver\" public=\"false\">
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.xml\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.yml\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.php\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.glob\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.directory\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.service\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation.directory\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation.file\"/>
      </call>
    </service>
    <service id=\"routing.loader.xml\" class=\"Symfony\\Component\\Routing\\Loader\\XmlFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.yml\" class=\"Symfony\\Component\\Routing\\Loader\\YamlFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.php\" class=\"Symfony\\Component\\Routing\\Loader\\PhpFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.glob\" class=\"Symfony\\Component\\Routing\\Loader\\GlobFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.directory\" class=\"Symfony\\Component\\Routing\\Loader\\DirectoryLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.service\" class=\"Symfony\\Component\\Routing\\Loader\\DependencyInjection\\ServiceRouterLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"routing.loader\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader\" public=\"true\">
      <argument type=\"service\" id=\"controller_name_converter\"/>
      <argument type=\"service\" id=\"routing.resolver\"/>
      <argument type=\"collection\">
        <argument key=\"utf8\">true</argument>
      </argument>
    </service>
    <service id=\"router.default\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\Router\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"router\"/>
      <tag name=\"container.service_subscriber\" id=\"routing.loader\"/>
      <argument type=\"service\" id=\".service_locator.kbKiEzc.router.default\"/>
      <argument>kernel::loadRoutes</argument>
      <argument type=\"collection\">
        <argument key=\"cache_dir\">/var/www/public/DevLaon/var/cache/dev</argument>
        <argument key=\"debug\">true</argument>
        <argument key=\"generator_class\">Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator</argument>
        <argument key=\"generator_dumper_class\">Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper</argument>
        <argument key=\"matcher_class\">Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher</argument>
        <argument key=\"matcher_dumper_class\">Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper</argument>
        <argument key=\"strict_requirements\">true</argument>
        <argument key=\"resource_type\">service</argument>
      </argument>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"parameter_bag\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"monolog.logger.router\" on-invalid=\"ignore\"/>
      <argument>en</argument>
      <call method=\"setConfigCacheFactory\">
        <argument type=\"service\" id=\"config_cache_factory\"/>
      </call>
    </service>
    <service id=\"router.request_context\" class=\"Symfony\\Component\\Routing\\RequestContext\" public=\"false\">
      <argument></argument>
      <argument>GET</argument>
      <argument>localhost</argument>
      <argument>http</argument>
      <argument>80</argument>
      <argument>443</argument>
    </service>
    <service id=\"router.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer\" public=\"false\">
      <tag name=\"container.service_subscriber\" id=\"router\"/>
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\".service_locator.m8PwGkX.router.cache_warmer\"/>
    </service>
    <service id=\"router_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\RouterListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"monolog.logger.request\" on-invalid=\"ignore\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument>true</argument>
    </service>
    <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" public=\"true\">
      <argument type=\"service\" id=\"router.default\"/>
      <argument>80</argument>
      <argument>443</argument>
    </service>
    <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController\" public=\"true\">
      <argument type=\"service\" id=\"twig\" on-invalid=\"ignore\"/>
      <argument>null</argument>
    </service>
    <service id=\"routing.loader.annotation\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\AnnotatedRouteControllerLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"annotations.cached_reader\"/>
    </service>
    <service id=\"routing.loader.annotation.directory\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"file_locator\"/>
      <argument type=\"service\" id=\"routing.loader.annotation\"/>
    </service>
    <service id=\"routing.loader.annotation.file\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"file_locator\"/>
      <argument type=\"service\" id=\"routing.loader.annotation\"/>
    </service>
    <service id=\".2_PhpArrayAdapter~IsFa4SE\" class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/cache/dev/annotations.php</argument>
      <argument type=\"service\" id=\"cache.annotations\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\"/>
    </service>
    <service id=\".1_ArrayCache~IsFa4SE\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" public=\"false\"/>
    <service id=\"annotations.reader\" class=\"Doctrine\\Common\\Annotations\\AnnotationReader\" public=\"false\">
      <call method=\"addGlobalIgnoredName\">
        <argument>required</argument>
        <argument type=\"service\" id=\"annotations.dummy_registry\"/>
      </call>
    </service>
    <service id=\"annotations.dummy_registry\" class=\"Doctrine\\Common\\Annotations\\AnnotationRegistry\" public=\"false\">
      <call method=\"registerUniqueLoader\">
        <argument>class_exists</argument>
      </call>
    </service>
    <service id=\"annotations.cached_reader\" class=\"Doctrine\\Common\\Annotations\\CachedReader\" public=\"false\">
      <tag name=\"annotations.cached_reader\"/>
      <argument type=\"service\" id=\"annotations.reader\"/>
      <argument type=\"service\" id=\".1_ArrayCache~IsFa4SE\"/>
      <argument>true</argument>
      <property name=\"cacheProviderBackup\" type=\"service\" id=\"annotations.cache\"/>
    </service>
    <service id=\"annotations.filesystem_cache\" class=\"Doctrine\\Common\\Cache\\FilesystemCache\" public=\"false\">
      <argument></argument>
    </service>
    <service id=\"annotations.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\AnnotationsCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\"annotations.reader\"/>
      <argument>/var/www/public/DevLaon/var/cache/dev/annotations.php</argument>
      <argument>#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller\$))#</argument>
      <argument>true</argument>
    </service>
    <service id=\"annotations.cache\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\" public=\"false\">
      <argument type=\"service\" id=\".2_PhpArrayAdapter~IsFa4SE\"/>
    </service>
    <service id=\"property_accessor\" class=\"Symfony\\Component\\PropertyAccess\\PropertyAccessor\" public=\"false\">
      <argument>false</argument>
      <argument>false</argument>
      <argument type=\"service\" id=\"cache.property_access\" on-invalid=\"ignore\"/>
      <argument>true</argument>
    </service>
    <service id=\"serializer\" class=\"Symfony\\Component\\Serializer\\Serializer\" public=\"true\">
      <argument type=\"collection\">
        <argument type=\"service\" id=\"serializer.normalizer.json_serializable\"/>
        <argument type=\"service\" id=\"serializer.normalizer.datetime\"/>
        <argument type=\"service\" id=\"serializer.normalizer.constraint_violation_list\"/>
        <argument type=\"service\" id=\"serializer.normalizer.dateinterval\"/>
        <argument type=\"service\" id=\"serializer.normalizer.data_uri\"/>
        <argument type=\"service\" id=\"serializer.denormalizer.array\"/>
        <argument type=\"service\" id=\"serializer.normalizer.object\"/>
      </argument>
      <argument type=\"collection\">
        <argument type=\"service\" id=\"serializer.encoder.xml\"/>
        <argument type=\"service\" id=\"serializer.encoder.json\"/>
        <argument type=\"service\" id=\"serializer.encoder.yaml\"/>
        <argument type=\"service\" id=\"serializer.encoder.csv\"/>
      </argument>
    </service>
    <service id=\"serializer.mapping.class_discriminator_resolver\" class=\"Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorFromClassMetadata\" public=\"false\">
      <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\"/>
    </service>
    <service id=\"serializer.normalizer.constraint_violation_list\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ConstraintViolationListNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-915\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"serializer.name_converter.metadata_aware\"/>
    </service>
    <service id=\"serializer.normalizer.dateinterval\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DateIntervalNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-915\"/>
    </service>
    <service id=\"serializer.normalizer.data_uri\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DataUriNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-920\"/>
      <argument type=\"service\" id=\"mime_types\" on-invalid=\"null\"/>
    </service>
    <service id=\"serializer.normalizer.datetime\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DateTimeNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-910\"/>
    </service>
    <service id=\"serializer.normalizer.json_serializable\" class=\"Symfony\\Component\\Serializer\\Normalizer\\JsonSerializableNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-900\"/>
    </service>
    <service id=\"serializer.normalizer.object\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-1000\"/>
      <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\"/>
      <argument type=\"service\" id=\"serializer.name_converter.metadata_aware\"/>
      <argument type=\"service\" id=\"property_accessor\"/>
      <argument type=\"service\" id=\"property_info\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"serializer.mapping.class_discriminator_resolver\" on-invalid=\"ignore\"/>
      <argument>null</argument>
      <argument type=\"collection\"/>
    </service>
    <service id=\"serializer.denormalizer.array\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ArrayDenormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-990\"/>
    </service>
    <service id=\"serializer.mapping.chain_loader\" class=\"Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain\" public=\"false\">
      <argument type=\"collection\">
        <argument type=\"service\">
          <service class=\"Symfony\\Component\\Serializer\\Mapping\\Loader\\AnnotationLoader\" public=\"false\">
            <argument type=\"service\" id=\"annotations.cached_reader\"/>
          </service>
        </argument>
      </argument>
    </service>
    <service id=\"serializer.mapping.class_metadata_factory\" class=\"Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory\" public=\"false\">
      <argument type=\"service\" id=\"serializer.mapping.chain_loader\"/>
      <argument>null</argument>
    </service>
    <service id=\"serializer.mapping.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\SerializerCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"collection\">
        <argument type=\"service\">
          <service class=\"Symfony\\Component\\Serializer\\Mapping\\Loader\\AnnotationLoader\" public=\"false\">
            <argument type=\"service\" id=\"annotations.cached_reader\"/>
          </service>
        </argument>
      </argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/serialization.php</argument>
    </service>
    <service id=\"serializer.mapping.cache.symfony\" class=\"Psr\\Cache\\CacheItemPoolInterface\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/cache/dev/serialization.php</argument>
      <argument type=\"service\" id=\"cache.serializer\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\"/>
    </service>
    <service id=\"serializer.encoder.xml\" class=\"Symfony\\Component\\Serializer\\Encoder\\XmlEncoder\" public=\"false\">
      <tag name=\"serializer.encoder\"/>
    </service>
    <service id=\"serializer.encoder.json\" class=\"Symfony\\Component\\Serializer\\Encoder\\JsonEncoder\" public=\"false\">
      <tag name=\"serializer.encoder\"/>
    </service>
    <service id=\"serializer.encoder.yaml\" class=\"Symfony\\Component\\Serializer\\Encoder\\YamlEncoder\" public=\"false\">
      <tag name=\"serializer.encoder\"/>
    </service>
    <service id=\"serializer.encoder.csv\" class=\"Symfony\\Component\\Serializer\\Encoder\\CsvEncoder\" public=\"false\">
      <tag name=\"serializer.encoder\"/>
    </service>
    <service id=\"serializer.name_converter.camel_case_to_snake_case\" class=\"Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter\" public=\"false\"/>
    <service id=\"serializer.name_converter.metadata_aware\" class=\"Symfony\\Component\\Serializer\\NameConverter\\MetadataAwareNameConverter\" public=\"false\">
      <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\"/>
    </service>
    <service id=\"property_info.serializer_extractor\" class=\"Symfony\\Component\\PropertyInfo\\Extractor\\SerializerExtractor\" public=\"false\">
      <tag name=\"property_info.list_extractor\" priority=\"-999\"/>
      <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\"/>
    </service>
    <service id=\"property_info\" class=\"Symfony\\Component\\PropertyInfo\\PropertyInfoExtractor\" public=\"false\">
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"property_info.serializer_extractor\"/>
        <argument type=\"service\" id=\"property_info.reflection_extractor\"/>
        <argument type=\"service\" id=\"doctrine.orm.default_entity_manager.property_info_extractor\"/>
      </argument>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"doctrine.orm.default_entity_manager.property_info_extractor\"/>
        <argument type=\"service\" id=\"property_info.php_doc_extractor\"/>
        <argument type=\"service\" id=\"property_info.reflection_extractor\"/>
      </argument>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"property_info.php_doc_extractor\"/>
      </argument>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"doctrine.orm.default_entity_manager.property_info_extractor\"/>
        <argument type=\"service\" id=\"property_info.reflection_extractor\"/>
      </argument>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"property_info.reflection_extractor\"/>
      </argument>
    </service>
    <service id=\"property_info.reflection_extractor\" class=\"Symfony\\Component\\PropertyInfo\\Extractor\\ReflectionExtractor\" public=\"false\">
      <tag name=\"property_info.list_extractor\" priority=\"-1000\"/>
      <tag name=\"property_info.type_extractor\" priority=\"-1002\"/>
      <tag name=\"property_info.access_extractor\" priority=\"-1000\"/>
      <tag name=\"property_info.initializable_extractor\" priority=\"-1000\"/>
    </service>
    <service id=\"property_info.php_doc_extractor\" class=\"Symfony\\Component\\PropertyInfo\\Extractor\\PhpDocExtractor\">
      <tag name=\"property_info.description_extractor\" priority=\"-1000\"/>
      <tag name=\"property_info.type_extractor\" priority=\"-1001\"/>
    </service>
    <service id=\"http_client\" class=\"Symfony\\Contracts\\HttpClient\\HttpClientInterface\">
      <tag name=\"monolog.logger\" channel=\"http_client\"/>
      <argument type=\"collection\"/>
      <argument>6</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.http_client\" on-invalid=\"ignore\"/>
      </call>
      <factory class=\"Symfony\\Component\\HttpClient\\HttpClient\" method=\"create\"/>
    </service>
    <service id=\"web_link.add_link_header_listener\" class=\"Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"mime_types\" class=\"Symfony\\Component\\Mime\\MimeTypes\" public=\"false\">
      <call method=\"setDefault\">
        <argument type=\"service\" id=\"mime_types\"/>
      </call>
    </service>
    <service id=\"sensio_framework_extra.controller.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"annotations.cached_reader\"/>
    </service>
    <service id=\"sensio_framework_extra.converter.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"sensio_framework_extra.converter.manager\"/>
      <argument>true</argument>
    </service>
    <service id=\"sensio_framework_extra.converter.manager\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager\">
      <call method=\"add\">
        <argument type=\"service\" id=\"sensio_framework_extra.converter.doctrine.orm\"/>
        <argument>0</argument>
        <argument>doctrine.orm</argument>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"framework_extra_bundle.date_time_param_converter\"/>
        <argument>0</argument>
        <argument>datetime</argument>
      </call>
    </service>
    <service id=\"sensio_framework_extra.converter.doctrine.orm\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter\" public=\"false\">
      <tag name=\"request.param_converter\" converter=\"doctrine.orm\"/>
      <argument type=\"service\" id=\"doctrine\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"sensio_framework_extra.converter.doctrine.orm.expression_language.default\" on-invalid=\"null\"/>
    </service>
    <service id=\"framework_extra_bundle.date_time_param_converter\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter\" public=\"false\">
      <tag name=\"request.param_converter\" converter=\"datetime\"/>
    </service>
    <service id=\"sensio_framework_extra.converter.doctrine.orm.expression_language.default\" class=\"Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage\" public=\"false\"/>
    <service id=\"sensio_framework_extra.view.guesser\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser\" public=\"false\">
      <argument type=\"service\" id=\"kernel\"/>
    </service>
    <service id=\"sensio_framework_extra.view.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"sensio_framework_extra.view.guesser\"/>
      <argument type=\"service\" id=\"twig\" on-invalid=\"null\"/>
    </service>
    <service id=\"sensio_framework_extra.cache.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"sensio_framework_extra.security.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"framework_extra_bundle.argument_name_convertor\"/>
      <argument type=\"service\" id=\"sensio_framework_extra.security.expression_language.default\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.role_hierarchy\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"monolog.logger\" on-invalid=\"null\"/>
    </service>
    <service id=\"sensio_framework_extra.security.expression_language.default\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Security\\ExpressionLanguage\" public=\"false\"/>
    <service id=\"framework_extra_bundle.event.is_granted\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\IsGrantedListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"framework_extra_bundle.argument_name_convertor\"/>
      <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"null\"/>
    </service>
    <service id=\"framework_extra_bundle.argument_name_convertor\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentNameConverter\" public=\"false\">
      <argument type=\"service\" id=\"argument_metadata_factory\"/>
    </service>
    <service id=\"doctrine_cache.abstract.apc\" class=\"Doctrine\\Common\\Cache\\ApcCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.apcu\" class=\"Doctrine\\Common\\Cache\\ApcuCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.array\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.chain\" class=\"Doctrine\\Common\\Cache\\ChainCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.couchbase\" class=\"Doctrine\\Common\\Cache\\CouchbaseCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.file_system\" class=\"Doctrine\\Common\\Cache\\FilesystemCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.php_file\" class=\"Doctrine\\Common\\Cache\\PhpFileCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.memcache\" class=\"Doctrine\\Common\\Cache\\MemcacheCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.memcached\" class=\"Doctrine\\Common\\Cache\\MemcachedCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.mongodb\" class=\"Doctrine\\Common\\Cache\\MongoDBCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.redis\" class=\"Doctrine\\Common\\Cache\\RedisCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.predis\" class=\"Doctrine\\Common\\Cache\\PredisCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.riak\" class=\"Doctrine\\Common\\Cache\\RiakCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.sqlite3\" class=\"Doctrine\\Common\\Cache\\SQLite3Cache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.void\" class=\"Doctrine\\Common\\Cache\\VoidCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.wincache\" class=\"Doctrine\\Common\\Cache\\WinCacheCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.xcache\" class=\"Doctrine\\Common\\Cache\\XcacheCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.zenddata\" class=\"Doctrine\\Common\\Cache\\ZendDataCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.contains_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\ContainsCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_cache.delete_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\DeleteCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_cache.flush_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\FlushCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_cache.stats_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\StatsCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine.dbal.logger.chain\" class=\"Doctrine\\DBAL\\Logging\\LoggerChain\" public=\"false\" abstract=\"true\">
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.logger.profiling\" class=\"Doctrine\\DBAL\\Logging\\DebugStack\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.dbal.logger.backtrace\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\Logging\\BacktraceLogger\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.dbal.logger\" class=\"Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"doctrine\"/>
      <argument type=\"service\" id=\"monolog.logger.doctrine\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\"/>
    </service>
    <service id=\"data_collector.doctrine\" class=\"Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@Doctrine/Collector/db.html.twig\" id=\"db\" priority=\"250\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"addLogger\">
        <argument>default</argument>
        <argument type=\"service\" id=\"doctrine.dbal.logger.profiling.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.connection_factory\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory\">
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.dbal.connection\" class=\"Doctrine\\DBAL\\Connection\" abstract=\"true\">
      <factory service=\"doctrine.dbal.connection_factory\" method=\"createConnection\"/>
    </service>
    <service id=\"doctrine.dbal.connection.event_manager\" class=\"Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"doctrine.dbal.connection.configuration\" class=\"Doctrine\\DBAL\\Configuration\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Registry\" public=\"true\">
      <argument type=\"service\" id=\"service_container\"/>
      <argument>%doctrine.connections%</argument>
      <argument>%doctrine.entity_managers%</argument>
      <argument>default</argument>
      <argument>default</argument>
    </service>
    <service id=\"doctrine.twig.doctrine_extension\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Twig\\DoctrineExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"doctrine.dbal.schema_asset_filter_manager\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\SchemaAssetsFilterManager\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.database_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:create\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:database:create</argument>
      </call>
    </service>
    <service id=\"doctrine.database_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:drop\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:database:drop</argument>
      </call>
    </service>
    <service id=\"doctrine.generate_entities_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\GenerateEntitiesDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:generate:entities\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:generate:entities</argument>
      </call>
    </service>
    <service id=\"doctrine.query_sql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:query:sql\"/>
      <call method=\"setName\">
        <argument>doctrine:query:sql</argument>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection.configuration\" class=\"Doctrine\\DBAL\\Configuration\" public=\"false\">
      <call method=\"setSQLLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger.chain.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.logger.profiling.default\" class=\"Doctrine\\DBAL\\Logging\\DebugStack\" public=\"false\"/>
    <service id=\"doctrine.dbal.logger.chain.default\" class=\"Doctrine\\DBAL\\Logging\\LoggerChain\" public=\"false\">
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger\"/>
      </call>
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger.profiling.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection.event_manager\" class=\"Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.Otd28_S\"/>
      <call method=\"addEventListener\">
        <argument type=\"collection\">
          <argument>loadClassMetadata</argument>
        </argument>
        <argument>doctrine.orm.default_listeners.attach_entity_listeners</argument>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection\" class=\"Doctrine\\DBAL\\Connection\" public=\"true\">
      <argument type=\"collection\">
        <argument key=\"driver\">mysql</argument>
        <argument key=\"charset\">utf8mb4</argument>
        <argument key=\"url\">%env(resolve:DATABASE_URL)%</argument>
        <argument key=\"host\">localhost</argument>
        <argument key=\"port\">null</argument>
        <argument key=\"user\">root</argument>
        <argument key=\"password\">null</argument>
        <argument key=\"driverOptions\" type=\"collection\"/>
        <argument key=\"serverVersion\">5.7</argument>
        <argument key=\"defaultTableOptions\" type=\"collection\">
          <argument key=\"charset\">utf8mb4</argument>
          <argument key=\"collate\">utf8mb4_unicode_ci</argument>
        </argument>
      </argument>
      <argument type=\"service\" id=\"doctrine.dbal.default_connection.configuration\"/>
      <argument type=\"service\" id=\"doctrine.dbal.default_connection.event_manager\"/>
      <argument type=\"collection\"/>
      <factory service=\"doctrine.dbal.connection_factory\" method=\"createConnection\"/>
    </service>
    <service id=\".1_ServiceLocator~4sFtw.I\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.proxy_cache_warmer\" class=\"Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"form.type_guesser.doctrine\" class=\"Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser\">
      <tag name=\"form.type_guesser\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"form.type.entity\" class=\"Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType\">
      <tag name=\"form.type\" alias=\"entity\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.configuration\" class=\"Doctrine\\ORM\\Configuration\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.orm.entity_manager.abstract\" class=\"Doctrine\\ORM\\EntityManager\" lazy=\"true\" abstract=\"true\">
      <factory class=\"Doctrine\\ORM\\EntityManager\" method=\"create\"/>
    </service>
    <service id=\"doctrine.orm.container_repository_factory\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Repository\\ContainerRepositoryFactory\" public=\"false\">
      <argument type=\"service\" id=\".service_locator._ZQxHRQ\"/>
    </service>
    <service id=\"doctrine.orm.manager_configurator.abstract\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator\" abstract=\"true\">
      <argument type=\"collection\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.validator.unique\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator\">
      <tag name=\"validator.constraint_validator\" alias=\"doctrine.orm.validator.unique\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.validator_initializer\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer\">
      <tag name=\"validator.initializer\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.security.user.provider\" class=\"Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.listeners.resolve_target_entity\" class=\"Doctrine\\ORM\\Tools\\ResolveTargetEntityListener\" public=\"false\"/>
    <service id=\"doctrine.orm.naming_strategy.default\" class=\"Doctrine\\ORM\\Mapping\\DefaultNamingStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.naming_strategy.underscore\" class=\"Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.quote_strategy.default\" class=\"Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.quote_strategy.ansi\" class=\"Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy\" public=\"false\"/>
    <service id=\"doctrine.cache_clear_metadata_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-metadata\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-metadata</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_clear_query_cache_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-query\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-query</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_clear_result_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-result\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-result</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_collection_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-collection-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-collection-region</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_convert_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:convert\"/>
      <call method=\"setName\">
        <argument>doctrine:mapping:convert</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:create\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:create</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:drop\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:drop</argument>
      </call>
    </service>
    <service id=\"doctrine.ensure_production_settings_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:ensure-production-settings\"/>
      <call method=\"setName\">
        <argument>doctrine:ensure-production-settings</argument>
      </call>
    </service>
    <service id=\"doctrine.clear_entity_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-entity-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-entity-region</argument>
      </call>
    </service>
    <service id=\"doctrine.database_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:import\"/>
      <call method=\"setName\">
        <argument>doctrine:database:import</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_info_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:info\"/>
      <call method=\"setName\">
        <argument>doctrine:mapping:info</argument>
      </call>
    </service>
    <service id=\"doctrine.clear_query_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-query-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-query-region</argument>
      </call>
    </service>
    <service id=\"doctrine.query_dql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:query:dql\"/>
      <call method=\"setName\">
        <argument>doctrine:query:dql</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_update_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:update\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:update</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_validate_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:validate\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:validate</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:import\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <argument>%kernel.bundles%</argument>
      <call method=\"setName\">
        <argument>doctrine:mapping:import</argument>
      </call>
    </service>
    <service id=\"doctrine.orm.default_configuration\" class=\"Doctrine\\ORM\\Configuration\" public=\"false\">
      <call method=\"setEntityNamespaces\">
        <argument type=\"collection\">
          <argument key=\"App\">App\\Entity</argument>
        </argument>
      </call>
      <call method=\"setMetadataCacheImpl\">
        <argument type=\"service\" id=\"doctrine_cache.providers.doctrine.orm.default_metadata_cache\"/>
      </call>
      <call method=\"setQueryCacheImpl\">
        <argument type=\"service\" id=\"doctrine_cache.providers.doctrine.orm.default_query_cache\"/>
      </call>
      <call method=\"setResultCacheImpl\">
        <argument type=\"service\" id=\"doctrine_cache.providers.doctrine.orm.default_result_cache\"/>
      </call>
      <call method=\"setMetadataDriverImpl\">
        <argument type=\"service\" id=\"doctrine.orm.default_metadata_driver\"/>
      </call>
      <call method=\"setProxyDir\">
        <argument>/var/www/public/DevLaon/var/cache/dev/doctrine/orm/Proxies</argument>
      </call>
      <call method=\"setProxyNamespace\">
        <argument>Proxies</argument>
      </call>
      <call method=\"setAutoGenerateProxyClasses\">
        <argument>true</argument>
      </call>
      <call method=\"setClassMetadataFactoryName\">
        <argument>Doctrine\\ORM\\Mapping\\ClassMetadataFactory</argument>
      </call>
      <call method=\"setDefaultRepositoryClassName\">
        <argument>Doctrine\\ORM\\EntityRepository</argument>
      </call>
      <call method=\"setNamingStrategy\">
        <argument type=\"service\" id=\"doctrine.orm.naming_strategy.underscore\"/>
      </call>
      <call method=\"setQuoteStrategy\">
        <argument type=\"service\" id=\"doctrine.orm.quote_strategy.default\"/>
      </call>
      <call method=\"setEntityListenerResolver\">
        <argument type=\"service\" id=\"doctrine.orm.default_entity_listener_resolver\"/>
      </call>
      <call method=\"setRepositoryFactory\">
        <argument type=\"service\" id=\"doctrine.orm.container_repository_factory\"/>
      </call>
    </service>
    <service id=\"doctrine.orm.default_annotation_metadata_driver\" class=\"Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver\" public=\"false\">
      <argument type=\"service\" id=\"annotations.cached_reader\"/>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/src/Entity</argument>
      </argument>
    </service>
    <service id=\"doctrine.orm.default_metadata_driver\" class=\"Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain\" public=\"false\">
      <call method=\"addDriver\">
        <argument type=\"service\" id=\"doctrine.orm.default_annotation_metadata_driver\"/>
        <argument>App\\Entity</argument>
      </call>
    </service>
    <service id=\"doctrine_cache.providers.doctrine.orm.default_metadata_cache\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" public=\"true\">
      <call method=\"setNamespace\">
        <argument>sf_orm_default_56aff329416a63c6e2aebab90f710ec30e64f735af3b2a36bf63062cb81af9ba</argument>
      </call>
    </service>
    <service id=\"doctrine_cache.providers.doctrine.orm.default_result_cache\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" public=\"true\">
      <call method=\"setNamespace\">
        <argument>sf_orm_default_56aff329416a63c6e2aebab90f710ec30e64f735af3b2a36bf63062cb81af9ba</argument>
      </call>
    </service>
    <service id=\"doctrine_cache.providers.doctrine.orm.default_query_cache\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" public=\"true\">
      <call method=\"setNamespace\">
        <argument>sf_orm_default_56aff329416a63c6e2aebab90f710ec30e64f735af3b2a36bf63062cb81af9ba</argument>
      </call>
    </service>
    <service id=\"doctrine.orm.default_entity_listener_resolver\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"doctrine.orm.default_listeners.attach_entity_listeners\" class=\"Doctrine\\ORM\\Tools\\AttachEntityListenersListener\">
      <tag name=\"doctrine.event_listener\" event=\"loadClassMetadata\"/>
    </service>
    <service id=\"doctrine.orm.default_manager_configurator\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator\">
      <argument type=\"collection\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_manager\" class=\"Doctrine\\ORM\\EntityManager\" public=\"true\" lazy=\"true\">
      <argument type=\"service\" id=\"doctrine.dbal.default_connection\"/>
      <argument type=\"service\" id=\"doctrine.orm.default_configuration\"/>
      <factory class=\"Doctrine\\ORM\\EntityManager\" method=\"create\"/>
      <configurator service=\"doctrine.orm.default_manager_configurator\" method=\"configure\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_manager.property_info_extractor\" class=\"Symfony\\Bridge\\Doctrine\\PropertyInfo\\DoctrineExtractor\">
      <tag name=\"property_info.list_extractor\" priority=\"-1001\"/>
      <tag name=\"property_info.type_extractor\" priority=\"-999\"/>
      <tag name=\"property_info.access_extractor\" priority=\"-999\"/>
      <argument type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_manager.validator_loader\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\DoctrineLoader\">
      <tag name=\"validator.auto_mapper\" priority=\"-100\"/>
      <argument type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      <argument>null</argument>
    </service>
    <service id=\"doctrine_migrations.diff_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.dump_schema_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.execute_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.generate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.latest_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.migrate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.rollup_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.status_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.up_to_date_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.version_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"security.authorization_checker\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationChecker\" public=\"true\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"debug.security.access.decision_manager\"/>
      <argument>false</argument>
    </service>
    <service id=\"security.token_storage\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage\" public=\"true\">
      <tag name=\"kernel.reset\" method=\"setToken\"/>
    </service>
    <service id=\"security.helper\" class=\"Symfony\\Component\\Security\\Core\\Security\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.jD4_ZG7\"/>
    </service>
    <service id=\"security.authentication.manager\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager\" public=\"false\">
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"security.authentication.provider.dao.main\"/>
        <argument type=\"service\" id=\"security.authentication.provider.anonymous.main\"/>
      </argument>
      <argument>true</argument>
      <call method=\"setEventDispatcher\">
        <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      </call>
    </service>
    <service id=\"security.authentication.trust_resolver\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver\" public=\"false\">
      <argument>null</argument>
      <argument>null</argument>
    </service>
    <service id=\"security.authentication.session_strategy\" class=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy\" public=\"false\">
      <argument>migrate</argument>
    </service>
    <service id=\"security.authentication.session_strategy_noop\" class=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy\" public=\"false\">
      <argument>none</argument>
    </service>
    <service id=\"security.encoder_factory.generic\" class=\"Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory\" public=\"false\">
      <argument type=\"collection\">
        <argument key=\"App\\Entity\\User\" type=\"collection\">
          <argument key=\"algorithm\">auto</argument>
          <argument key=\"hash_algorithm\">sha512</argument>
          <argument key=\"key_length\">40</argument>
          <argument key=\"ignore_case\">false</argument>
          <argument key=\"encode_as_base64\">true</argument>
          <argument key=\"iterations\">5000</argument>
          <argument key=\"cost\">null</argument>
          <argument key=\"memory_cost\">null</argument>
          <argument key=\"time_cost\">null</argument>
          <argument key=\"threads\">null</argument>
        </argument>
      </argument>
    </service>
    <service id=\"security.user_password_encoder.generic\" class=\"Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoder\" public=\"false\">
      <argument type=\"service\" id=\"security.encoder_factory.generic\"/>
    </service>
    <service id=\"security.user_checker\" class=\"Symfony\\Component\\Security\\Core\\User\\UserChecker\" public=\"false\"/>
    <service id=\"security.expression_language\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage\" public=\"false\">
      <argument type=\"service\" id=\"cache.security_expression_language\"/>
    </service>
    <service id=\"security.authentication_utils\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils\" public=\"true\">
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"security.role_hierarchy\" class=\"Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy\" public=\"false\">
      <argument>%security.role_hierarchy.roles%</argument>
    </service>
    <service id=\"security.access.authenticated_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter\" public=\"false\">
      <tag name=\"security.voter\" priority=\"250\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
    </service>
    <service id=\"security.access.role_hierarchy_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter\" public=\"false\">
      <tag name=\"security.voter\" priority=\"245\"/>
      <argument type=\"service\" id=\"security.role_hierarchy\"/>
    </service>
    <service id=\"security.access.expression_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter\" public=\"false\">
      <tag name=\"security.voter\" priority=\"245\"/>
      <argument type=\"service\" id=\"security.expression_language\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
      <argument type=\"service\" id=\"security.authorization_checker\"/>
      <argument type=\"service\" id=\"security.role_hierarchy\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.firewall.map\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.h018nLA\"/>
      <argument type=\"iterator\">
        <argument key=\"security.firewall.map.context.main\" type=\"service\" id=\".security.request_matcher.3UEFixr\"/>
      </argument>
    </service>
    <service id=\"security.firewall.context\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext\" public=\"false\" abstract=\"true\">
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"security.exception_listener\"/>
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"security.firewall.config\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument type=\"collection\"/>
      <argument></argument>
    </service>
    <service id=\"security.logout_url_generator\" class=\"Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"null\"/>
      <call method=\"registerListener\">
        <argument>main</argument>
        <argument>security_logout</argument>
        <argument>logout</argument>
        <argument>_csrf_token</argument>
        <argument>null</argument>
        <argument>null</argument>
      </call>
    </service>
    <service id=\"security.user.provider.missing\" class=\"Symfony\\Component\\Security\\Core\\User\\MissingUserProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
    </service>
    <service id=\"security.user.provider.in_memory\" class=\"Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider\" public=\"false\" abstract=\"true\"/>
    <service id=\"security.user.provider.in_memory.user\" class=\"Symfony\\Component\\Security\\Core\\User\\User\" public=\"false\" abstract=\"true\">
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.1.</deprecated>
    </service>
    <service id=\"security.user.provider.ldap\" class=\"Symfony\\Component\\Security\\Core\\User\\LdapUserProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"security.user.provider.chain\" class=\"Symfony\\Component\\Security\\Core\\User\\ChainUserProvider\" public=\"false\" abstract=\"true\"/>
    <service id=\"security.http_utils\" class=\"Symfony\\Component\\Security\\Http\\HttpUtils\" public=\"false\">
      <argument type=\"service\" id=\"router.default\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"null\"/>
      <argument>{^https?://%s\$}i</argument>
      <argument>{^https://%s\$}i</argument>
    </service>
    <service id=\"security.validator.user_password\" class=\"Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator\" public=\"false\">
      <tag name=\"validator.constraint_validator\" alias=\"security.validator.user_password\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.encoder_factory.generic\"/>
    </service>
    <service id=\"cache.security_expression_language\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.security_expression_language.recorder_inner\"/>
    </service>
    <service id=\"security.authentication.listener.anonymous\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
    </service>
    <service id=\"security.authentication.provider.anonymous\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider\" public=\"false\">
      <argument></argument>
    </service>
    <service id=\"security.authentication.retry_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint\" public=\"false\">
      <argument>80</argument>
      <argument>443</argument>
    </service>
    <service id=\"security.authentication.basic_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint\" public=\"false\"/>
    <service id=\"security.channel_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.access_map\"/>
      <argument type=\"service\" id=\"security.authentication.retry_entry_point\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.access_map\" class=\"Symfony\\Component\\Security\\Http\\AccessMap\" public=\"false\">
      <call method=\"add\">
        <argument type=\"service\" id=\".security.request_matcher.5dJADCx\"/>
        <argument type=\"collection\">
          <argument>ROLE_ADMIN</argument>
        </argument>
        <argument>null</argument>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\".security.request_matcher.NDUbcWM\"/>
        <argument type=\"collection\">
          <argument>ROLE_USER</argument>
        </argument>
        <argument>null</argument>
      </call>
    </service>
    <service id=\"security.context_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ContextListener\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"security.user.provider.concrete.our_db_provider\"/>
      </argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
    </service>
    <service id=\"security.logout_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"service\" id=\"security.logout.success_handler\"/>
      <argument></argument>
      <call method=\"addHandler\">
        <argument type=\"service\" id=\"security.logout.handler.csrf_token_clearing\"/>
      </call>
    </service>
    <service id=\"security.logout.handler.session\" class=\"Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler\" public=\"false\"/>
    <service id=\"security.logout.handler.cookie_clearing\" class=\"Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler\" public=\"false\" abstract=\"true\"/>
    <service id=\"security.logout.success_handler\" class=\"Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument>/</argument>
    </service>
    <service id=\"security.authentication.form_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"http_kernel\"/>
    </service>
    <service id=\"security.authentication.listener.abstract\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.success_handler\"/>
      <argument type=\"service\" id=\"security.authentication.failure_handler\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.custom_success_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\CustomAuthenticationSuccessHandler\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument type=\"collection\"/>
      <argument></argument>
    </service>
    <service id=\"security.authentication.success_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"security.authentication.custom_failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\CustomAuthenticationFailureHandler\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument type=\"collection\"/>
    </service>
    <service id=\"security.authentication.failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.listener.form\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.success_handler\"/>
      <argument type=\"service\" id=\"security.authentication.failure_handler\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.listener.simple_form\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.success_handler\"/>
      <argument type=\"service\" id=\"security.authentication.failure_handler\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
    </service>
    <service id=\"security.authentication.simple_success_failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.success_handler\"/>
      <argument type=\"service\" id=\"security.authentication.failure_handler\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
    </service>
    <service id=\"security.authentication.listener.simple_preauth\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
    </service>
    <service id=\"security.authentication.listener.x509\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.listener.json\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordJsonAuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"property_accessor\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.listener.remote_user\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\RemoteUserAuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.listener.basic\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.provider.dao\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"security.encoder_factory.generic\"/>
      <argument>true</argument>
    </service>
    <service id=\"security.authentication.provider.ldap_bind\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\LdapBindAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument>true</argument>
    </service>
    <service id=\"security.authentication.provider.simple\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument>null</argument>
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
    </service>
    <service id=\"security.authentication.provider.pre_authenticated\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"security.exception_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.entry_point\" on-invalid=\"null\"/>
      <argument>null</argument>
      <argument type=\"service\" id=\"security.access.denied_handler\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument>false</argument>
    </service>
    <service id=\"security.authentication.switchuser_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"debug.security.access.decision_manager\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument>_switch_user</argument>
      <argument>ROLE_ALLOWED_TO_SWITCH</argument>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument>false</argument>
    </service>
    <service id=\"security.access_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\AccessListener\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"debug.security.access.decision_manager\"/>
      <argument type=\"service\" id=\"security.access_map\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
    </service>
    <service id=\"security.authentication.listener.rememberme\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.rememberme\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
    </service>
    <service id=\"security.authentication.provider.rememberme\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
    </service>
    <service id=\"security.rememberme.token.provider.in_memory\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider\" public=\"false\"/>
    <service id=\"security.authentication.rememberme.services.abstract\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"collection\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.rememberme.services.persistent\" class=\"Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices\" public=\"false\" abstract=\"true\">
      <argument type=\"collection\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.rememberme.services.simplehash\" class=\"Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices\" public=\"false\" abstract=\"true\">
      <argument type=\"collection\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.rememberme.response_listener\" class=\"Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"twig.extension.logout_url\" class=\"Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"security.logout_url_generator\"/>
    </service>
    <service id=\"twig.extension.security\" class=\"Symfony\\Bridge\\Twig\\Extension\\SecurityExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"data_collector.security\" class=\"Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@Security/Collector/security.html.twig\" id=\"security\" priority=\"270\"/>
      <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"security.role_hierarchy\"/>
      <argument type=\"service\" id=\"security.logout_url_generator\"/>
      <argument type=\"service\" id=\"debug.security.access.decision_manager\"/>
      <argument type=\"service\" id=\"security.firewall.map\"/>
      <argument type=\"service\" id=\"debug.security.firewall\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.guard_handler\" class=\"Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument type=\"collection\"/>
      <call method=\"setSessionAuthenticationStrategy\">
        <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      </call>
    </service>
    <service id=\"security.authentication.provider.guard\" class=\"Symfony\\Component\\Security\\Guard\\Provider\\GuardAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"security.authentication.listener.guard\" class=\"Symfony\\Component\\Security\\Guard\\Firewall\\GuardAuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.authentication.guard_handler\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"debug.security.access.decision_manager\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\TraceableAccessDecisionManager\" public=\"false\">
      <argument type=\"service\" id=\"debug.security.access.decision_manager.inner\"/>
    </service>
    <service id=\"debug.security.voter.vote_listener\" class=\"Symfony\\Bundle\\SecurityBundle\\EventListener\\VoteListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <argument type=\"service\" id=\"debug.security.access.decision_manager\"/>
    </service>
    <service id=\"debug.security.firewall\" class=\"Symfony\\Bundle\\SecurityBundle\\Debug\\TraceableFirewallListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"security.firewall.map\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <argument type=\"service\" id=\"security.logout_url_generator\"/>
    </service>
    <service id=\"security.user.provider.concrete.our_db_provider\" class=\"Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider\" public=\"false\">
      <argument type=\"service\" id=\"doctrine\"/>
      <argument>App\\Entity\\User</argument>
      <argument>email</argument>
      <argument>null</argument>
    </service>
    <service id=\"security.firewall.map.config.main\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig\" public=\"false\">
      <argument>main</argument>
      <argument>security.user_checker</argument>
      <argument>.security.request_matcher.3UEFixr</argument>
      <argument>true</argument>
      <argument>false</argument>
      <argument>security.user.provider.concrete.our_db_provider</argument>
      <argument>main</argument>
      <argument>security.authentication.form_entry_point.main</argument>
      <argument>null</argument>
      <argument>null</argument>
      <argument type=\"collection\">
        <argument>form_login</argument>
        <argument>http_basic</argument>
        <argument>anonymous</argument>
      </argument>
      <argument>null</argument>
    </service>
    <service id=\".security.request_matcher.3UEFixr\" class=\"Symfony\\Component\\HttpFoundation\\RequestMatcher\" public=\"false\">
      <argument>^/</argument>
    </service>
    <service id=\"security.context_listener.0\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ContextListener\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"security.user.provider.concrete.our_db_provider\"/>
      </argument>
      <argument>main</argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
    </service>
    <service id=\"security.logout_listener.main\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"service\" id=\"security.logout.success_handler.main\"/>
      <argument type=\"collection\">
        <argument key=\"csrf_parameter\">_csrf_token</argument>
        <argument key=\"csrf_token_id\">logout</argument>
        <argument key=\"logout_path\">security_logout</argument>
      </argument>
      <call method=\"addHandler\">
        <argument type=\"service\" id=\"security.logout.handler.csrf_token_clearing\"/>
      </call>
      <call method=\"addHandler\">
        <argument type=\"service\" id=\"security.logout.handler.session\"/>
      </call>
    </service>
    <service id=\"security.logout.success_handler.main\" class=\"Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler\" public=\"false\">
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument>home</argument>
    </service>
    <service id=\"security.authentication.provider.dao.main\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider\" public=\"false\">
      <argument type=\"service\" id=\"security.user.provider.concrete.our_db_provider\"/>
      <argument type=\"service\" id=\"security.user_checker\"/>
      <argument>main</argument>
      <argument type=\"service\" id=\"security.encoder_factory.generic\"/>
      <argument>true</argument>
    </service>
    <service id=\"security.authentication.success_handler.main.form_login\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler\" public=\"false\">
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"collection\"/>
      <call method=\"setOptions\">
        <argument type=\"collection\">
          <argument key=\"login_path\">security_login</argument>
          <argument key=\"always_use_default_target_path\">false</argument>
          <argument key=\"default_target_path\">/</argument>
          <argument key=\"target_path_parameter\">_target_path</argument>
          <argument key=\"use_referer\">false</argument>
        </argument>
      </call>
      <call method=\"setProviderKey\">
        <argument>main</argument>
      </call>
    </service>
    <service id=\"security.authentication.failure_handler.main.form_login\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler\" public=\"false\">
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <call method=\"setOptions\">
        <argument type=\"collection\">
          <argument key=\"login_path\">security_login</argument>
          <argument key=\"failure_path\">null</argument>
          <argument key=\"failure_forward\">false</argument>
          <argument key=\"failure_path_parameter\">_failure_path</argument>
        </argument>
      </call>
    </service>
    <service id=\"security.authentication.listener.form.main\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener\" public=\"false\">
      <tag name=\"security.remember_me_aware\" id=\"main\" provider=\"security.user.provider.concrete.our_db_provider\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument>main</argument>
      <argument type=\"service\" id=\"security.authentication.success_handler.main.form_login\"/>
      <argument type=\"service\" id=\"security.authentication.failure_handler.main.form_login\"/>
      <argument type=\"collection\">
        <argument key=\"check_path\">security_login</argument>
        <argument key=\"use_forward\">false</argument>
        <argument key=\"require_previous_session\">false</argument>
        <argument key=\"username_parameter\">_username</argument>
        <argument key=\"password_parameter\">_password</argument>
        <argument key=\"csrf_parameter\">_csrf_token</argument>
        <argument key=\"csrf_token_id\">authenticate</argument>
        <argument key=\"post_only\">true</argument>
      </argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument>null</argument>
    </service>
    <service id=\"security.authentication.form_entry_point.main\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint\" public=\"false\">
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument>security_login</argument>
      <argument>false</argument>
    </service>
    <service id=\"security.authentication.listener.basic.main\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument>main</argument>
      <argument type=\"service\" id=\"security.authentication.form_entry_point.main\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <call method=\"setSessionAuthenticationStrategy\">
        <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      </call>
    </service>
    <service id=\"security.authentication.listener.anonymous.main\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument>%container.build_hash%</argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
    </service>
    <service id=\"security.authentication.provider.anonymous.main\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider\" public=\"false\">
      <argument>%container.build_hash%</argument>
    </service>
    <service id=\"security.exception_listener.main\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument>main</argument>
      <argument type=\"service\" id=\"security.authentication.form_entry_point.main\"/>
      <argument>null</argument>
      <argument>null</argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument>false</argument>
    </service>
    <service id=\"security.firewall.map.context.main\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext\" public=\"false\">
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"security.channel_listener\"/>
        <argument type=\"service\" id=\"security.context_listener.0\"/>
        <argument type=\"service\" id=\"security.authentication.listener.form.main\"/>
        <argument type=\"service\" id=\"security.authentication.listener.basic.main\"/>
        <argument type=\"service\" id=\"security.authentication.listener.anonymous.main\"/>
        <argument type=\"service\" id=\"security.access_listener\"/>
      </argument>
      <argument type=\"service\" id=\"security.exception_listener.main\"/>
      <argument type=\"service\" id=\"security.logout_listener.main\"/>
      <argument type=\"service\" id=\"security.firewall.map.config.main\"/>
    </service>
    <service id=\".service_locator.h018nLA\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"security.firewall.map.context.main\" type=\"service\" id=\"security.firewall.map.context.main\"/>
      </argument>
    </service>
    <service id=\".security.request_matcher.5dJADCx\" class=\"Symfony\\Component\\HttpFoundation\\RequestMatcher\" public=\"false\">
      <argument>^/admin</argument>
    </service>
    <service id=\".security.request_matcher.NDUbcWM\" class=\"Symfony\\Component\\HttpFoundation\\RequestMatcher\" public=\"false\">
      <argument>^/member</argument>
    </service>
    <service id=\"security.command.user_password_encoder\" class=\"Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"security:encode-password\"/>
      <argument type=\"service\" id=\"security.encoder_factory.generic\"/>
      <argument type=\"collection\">
        <argument>App\\Entity\\User</argument>
      </argument>
      <call method=\"setName\">
        <argument>security:encode-password</argument>
      </call>
    </service>
    <service id=\".4_Swift_Transport_Esmtp_Auth_NTLMAuthenticator~Pd9zfs1\" class=\"Swift_Transport_Esmtp_Auth_NTLMAuthenticator\" public=\"false\"/>
    <service id=\".3_Swift_Transport_Esmtp_Auth_PlainAuthenticator~Pd9zfs1\" class=\"Swift_Transport_Esmtp_Auth_PlainAuthenticator\" public=\"false\"/>
    <service id=\".2_Swift_Transport_Esmtp_Auth_LoginAuthenticator~Pd9zfs1\" class=\"Swift_Transport_Esmtp_Auth_LoginAuthenticator\" public=\"false\"/>
    <service id=\".1_Swift_Transport_Esmtp_Auth_CramMd5Authenticator~Pd9zfs1\" class=\"Swift_Transport_Esmtp_Auth_CramMd5Authenticator\" public=\"false\"/>
    <service id=\"swiftmailer.mailer.abstract\" class=\"Swift_Mailer\" public=\"true\" abstract=\"true\">
      <argument type=\"service\" id=\"swiftmailer.mailer.default.transport.spool\"/>
    </service>
    <service id=\"swiftmailer.transport.smtp.configurator.abstract\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\SmtpTransportConfigurator\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.sendmail.abstract\" class=\"Swift_Transport_SendmailTransport\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.null.abstract\" class=\"Swift_Transport_NullTransport\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.failover\" class=\"Swift_Transport_FailoverTransport\" public=\"false\"/>
    <service id=\"swiftmailer.transport.buffer.abstract\" class=\"Swift_Transport_StreamBuffer\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"swiftmailer.transport.replacementfactory\"/>
    </service>
    <service id=\"swiftmailer.transport.authhandler.abstract\" class=\"Swift_Transport_Esmtp_AuthHandler\" public=\"false\" abstract=\"true\">
      <argument type=\"collection\">
        <argument type=\"service\" id=\".1_Swift_Transport_Esmtp_Auth_CramMd5Authenticator~Pd9zfs1\"/>
        <argument type=\"service\" id=\".2_Swift_Transport_Esmtp_Auth_LoginAuthenticator~Pd9zfs1\"/>
        <argument type=\"service\" id=\".3_Swift_Transport_Esmtp_Auth_PlainAuthenticator~Pd9zfs1\"/>
        <argument type=\"service\" id=\".4_Swift_Transport_Esmtp_Auth_NTLMAuthenticator~Pd9zfs1\"/>
      </argument>
    </service>
    <service id=\"swiftmailer.transport.eventdispatcher.abstract\" class=\"Swift_Events_SimpleEventDispatcher\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.replacementfactory\" class=\"Swift_StreamFilters_StringReplacementFilterFactory\" public=\"false\"/>
    <service id=\"swiftmailer.plugin.redirecting.abstract\" class=\"Swift_Plugins_RedirectingPlugin\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.plugin.antiflood.abstract\" class=\"Swift_Plugins_AntiFloodPlugin\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.plugin.impersonate.abstract\" class=\"Swift_Plugins_ImpersonatePlugin\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.plugin.messagelogger.abstract\" class=\"Swift_Plugins_MessageLogger\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.smtp.abstract\" class=\"Swift_Transport_EsmtpTransport\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.spool.abstract\" class=\"Swift_Transport_SpoolTransport\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.spool.file.abstract\" class=\"Swift_FileSpool\" public=\"false\" abstract=\"true\">
      <argument>/var/www/public/DevLaon/src/../data/swiftmailer/spool</argument>
    </service>
    <service id=\"swiftmailer.spool.memory.abstract\" class=\"Swift_MemorySpool\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.email_sender.listener\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"service\" id=\"monolog.logger\" on-invalid=\"null\"/>
    </service>
    <service id=\"swiftmailer.data_collector\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@Swiftmailer/Collector/swiftmailer.html.twig\" id=\"swiftmailer\" priority=\"245\"/>
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"swiftmailer.command.debug\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\Command\\DebugCommand\">
      <tag name=\"console.command\" command=\"debug:swiftmailer\"/>
      <call method=\"setName\">
        <argument>debug:swiftmailer</argument>
      </call>
    </service>
    <service id=\"swiftmailer.command.new_email\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand\">
      <tag name=\"console.command\" command=\"swiftmailer:email:send\"/>
      <call method=\"setName\">
        <argument>swiftmailer:email:send</argument>
      </call>
    </service>
    <service id=\"swiftmailer.command.send_email\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand\">
      <tag name=\"console.command\" command=\"swiftmailer:spool:send\"/>
      <call method=\"setName\">
        <argument>swiftmailer:spool:send</argument>
      </call>
    </service>
    <service id=\"swiftmailer.mailer.default.transport.eventdispatcher\" class=\"Swift_Events_SimpleEventDispatcher\" public=\"false\"/>
    <service id=\"swiftmailer.mailer.default.transport.dynamic\" class=\"Swift_Transport\">
      <argument type=\"collection\">
        <argument key=\"transport\">smtp</argument>
        <argument key=\"url\">%env(MAILER_URL)%</argument>
        <argument key=\"username\">null</argument>
        <argument key=\"password\">null</argument>
        <argument key=\"host\">localhost</argument>
        <argument key=\"port\">null</argument>
        <argument key=\"timeout\">30</argument>
        <argument key=\"source_ip\">null</argument>
        <argument key=\"local_domain\">null</argument>
        <argument key=\"encryption\">null</argument>
        <argument key=\"auth_mode\">null</argument>
        <argument key=\"command\">/usr/sbin/sendmail -bs</argument>
      </argument>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"swiftmailer.mailer.default.transport.eventdispatcher\"/>
      <factory class=\"Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\SwiftmailerTransportFactory\" method=\"createTransport\"/>
    </service>
    <service id=\"swiftmailer.mailer.default\" class=\"Swift_Mailer\" public=\"true\">
      <argument type=\"service\" id=\"swiftmailer.mailer.default.transport.spool\"/>
    </service>
    <service id=\"swiftmailer.mailer.default.spool.memory\" class=\"Swift_MemorySpool\" public=\"false\"/>
    <service id=\"swiftmailer.mailer.default.transport.spool\" class=\"Swift_Transport_SpoolTransport\" public=\"false\">
      <argument type=\"service\" id=\"swiftmailer.mailer.default.transport.eventdispatcher\"/>
      <argument type=\"service\" id=\"swiftmailer.mailer.default.spool.memory\"/>
      <call method=\"registerPlugin\">
        <argument type=\"service\" id=\"swiftmailer.mailer.default.plugin.messagelogger\"/>
      </call>
    </service>
    <service id=\"swiftmailer.mailer.default.plugin.messagelogger\" class=\"Swift_Plugins_MessageLogger\" public=\"true\">
      <tag name=\"swiftmailer.default.plugin\"/>
    </service>
    <service id=\"twig\" class=\"Twig\\Environment\" public=\"true\">
      <argument type=\"service\" id=\"twig.loader.native_filesystem\"/>
      <argument type=\"collection\">
        <argument key=\"debug\">true</argument>
        <argument key=\"strict_variables\">true</argument>
        <argument key=\"autoescape\">name</argument>
        <argument key=\"cache\">/var/www/public/DevLaon/var/cache/dev/twig</argument>
        <argument key=\"charset\">UTF-8</argument>
      </argument>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.security_csrf\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.logout_url\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.security\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.profiler\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.trans\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.assets\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.code\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.routing\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.yaml\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.debug.stopwatch\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.expression\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.httpkernel\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.httpfoundation\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.weblink\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.form\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.dump\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"doctrine.twig.doctrine_extension\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.webprofiler\"/>
      </call>
      <call method=\"addGlobal\">
        <argument>app</argument>
        <argument type=\"service\" id=\"twig.app_variable\"/>
      </call>
      <call method=\"addRuntimeLoader\">
        <argument type=\"service\" id=\"twig.runtime_loader\"/>
      </call>
      <configurator service=\"twig.configurator.environment\" method=\"configure\"/>
    </service>
    <service id=\"twig.app_variable\" class=\"Symfony\\Bridge\\Twig\\AppVariable\" public=\"false\">
      <call method=\"setEnvironment\">
        <argument>dev</argument>
      </call>
      <call method=\"setDebug\">
        <argument>true</argument>
      </call>
      <call method=\"setTokenStorage\">
        <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"ignore\"/>
      </call>
      <call method=\"setRequestStack\">
        <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"twig.cache_warmer\" class=\"Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <tag name=\"container.service_subscriber\" id=\"twig\"/>
      <argument type=\"service\" id=\".service_locator.lSIKWsr.twig.cache_warmer\"/>
      <argument>null</argument>
      <argument type=\"collection\">
        <argument key=\"/var/www/public/DevLaon/vendor/symfony/twig-bridge/Resources/views/Form\">null</argument>
      </argument>
    </service>
    <service id=\"twig.template_iterator\" class=\"Symfony\\Bundle\\TwigBundle\\TemplateIterator\" public=\"false\">
      <argument type=\"service\" id=\"kernel\"/>
      <argument>/var/www/public/DevLaon/src</argument>
      <argument type=\"collection\">
        <argument key=\"/var/www/public/DevLaon/vendor/symfony/twig-bridge/Resources/views/Form\">null</argument>
      </argument>
      <argument>/var/www/public/DevLaon/templates</argument>
    </service>
    <service id=\"twig.template_cache_warmer\" class=\"Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <tag name=\"container.service_subscriber\" id=\"twig\"/>
      <argument type=\"service\" id=\".service_locator.lSIKWsr.twig.template_cache_warmer\"/>
      <argument type=\"service\" id=\"twig.template_iterator\"/>
    </service>
    <service id=\"twig.loader.native_filesystem\" class=\"Symfony\\Bundle\\TwigBundle\\Loader\\NativeFilesystemLoader\" public=\"false\">
      <tag name=\"twig.loader\"/>
      <argument type=\"collection\"/>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views</argument>
        <argument>Framework</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views</argument>
        <argument>!Framework</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-bundle/Resources/views</argument>
        <argument>Doctrine</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-bundle/Resources/views</argument>
        <argument>!Doctrine</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/security-bundle/Resources/views</argument>
        <argument>Security</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/security-bundle/Resources/views</argument>
        <argument>!Security</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/swiftmailer-bundle/Resources/views</argument>
        <argument>Swiftmailer</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/swiftmailer-bundle/Resources/views</argument>
        <argument>!Swiftmailer</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views</argument>
        <argument>Twig</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views</argument>
        <argument>!Twig</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views</argument>
        <argument>WebProfiler</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views</argument>
        <argument>!WebProfiler</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/debug-bundle/Resources/views</argument>
        <argument>Debug</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/debug-bundle/Resources/views</argument>
        <argument>!Debug</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/templates</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/twig-bridge/Resources/views/Form</argument>
      </call>
    </service>
    <service id=\"twig.loader.chain\" class=\"Twig\\Loader\\ChainLoader\" public=\"false\"/>
    <service id=\"twig.extension.profiler\" class=\"Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"twig.profile\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\"/>
    </service>
    <service id=\"twig.profile\" class=\"Twig\\Profiler\\Profile\" public=\"false\"/>
    <service id=\"data_collector.twig\" class=\"Symfony\\Bridge\\Twig\\DataCollector\\TwigDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/twig.html.twig\" id=\"twig\" priority=\"257\"/>
      <argument type=\"service\" id=\"twig.profile\"/>
      <argument type=\"service\" id=\"twig\"/>
    </service>
    <service id=\"twig.extension.trans\" class=\"Symfony\\Bridge\\Twig\\Extension\\TranslationExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"translator.data_collector\" on-invalid=\"null\"/>
    </service>
    <service id=\"twig.extension.assets\" class=\"Symfony\\Bridge\\Twig\\Extension\\AssetExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"assets.packages\"/>
    </service>
    <service id=\"twig.extension.code\" class=\"Symfony\\Bridge\\Twig\\Extension\\CodeExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument>UTF-8</argument>
    </service>
    <service id=\"twig.extension.routing\" class=\"Symfony\\Bridge\\Twig\\Extension\\RoutingExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"router.default\"/>
    </service>
    <service id=\"twig.extension.yaml\" class=\"Symfony\\Bridge\\Twig\\Extension\\YamlExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.extension.debug.stopwatch\" class=\"Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\"/>
      <argument>true</argument>
    </service>
    <service id=\"twig.extension.expression\" class=\"Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.extension.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.runtime.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime\" public=\"false\">
      <tag name=\"twig.runtime\"/>
      <argument type=\"service\" id=\"fragment.handler\"/>
    </service>
    <service id=\"twig.extension.httpfoundation\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpFoundationExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"url_helper\"/>
    </service>
    <service id=\"twig.extension.debug\" class=\"Twig\\Extension\\DebugExtension\" public=\"false\"/>
    <service id=\"twig.extension.weblink\" class=\"Symfony\\Bridge\\Twig\\Extension\\WebLinkExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"twig.translation.extractor\" class=\"Symfony\\Bridge\\Twig\\Translation\\TwigExtractor\" public=\"false\">
      <tag name=\"translation.extractor\" alias=\"twig\"/>
      <argument type=\"service\" id=\"twig\"/>
    </service>
    <service id=\"twig.exception_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <argument>twig.controller.exception::showAction</argument>
      <argument type=\"service\" id=\"monolog.logger.request\" on-invalid=\"null\"/>
      <argument>true</argument>
    </service>
    <service id=\"twig.controller.exception\" class=\"Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController\" public=\"true\">
      <argument type=\"service\" id=\"twig\"/>
      <argument>true</argument>
    </service>
    <service id=\"twig.controller.preview_error\" class=\"Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController\" public=\"true\">
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument>twig.controller.exception::showAction</argument>
    </service>
    <service id=\"twig.configurator.environment\" class=\"Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator\" public=\"false\">
      <argument>F j, Y H:i</argument>
      <argument>%d days</argument>
      <argument>null</argument>
      <argument>0</argument>
      <argument>.</argument>
      <argument>,</argument>
    </service>
    <service id=\"twig.runtime_loader\" class=\"Twig\\RuntimeLoader\\ContainerRuntimeLoader\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.uxa.tru\"/>
    </service>
    <service id=\"twig.extension.form\" class=\"Symfony\\Bridge\\Twig\\Extension\\FormExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"collection\">
        <argument type=\"service\" id=\"service_container\"/>
        <argument>twig.form.renderer</argument>
      </argument>
    </service>
    <service id=\"twig.form.engine\" class=\"Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine\" public=\"false\">
      <argument>%twig.form.resources%</argument>
      <argument type=\"service\" id=\"twig\"/>
    </service>
    <service id=\"twig.form.renderer\" class=\"Symfony\\Component\\Form\\FormRenderer\" public=\"false\">
      <tag name=\"twig.runtime\"/>
      <argument type=\"service\" id=\"twig.form.engine\"/>
      <argument type=\"service\" id=\"security.csrf.token_manager\" on-invalid=\"null\"/>
    </service>
    <service id=\"twig.command.debug\" class=\"Symfony\\Bridge\\Twig\\Command\\DebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:twig\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument>%kernel.bundles_metadata%</argument>
      <argument>/var/www/public/DevLaon/templates</argument>
      <argument>/var/www/public/DevLaon/src</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:twig</argument>
      </call>
    </service>
    <service id=\"twig.command.lint\" class=\"Symfony\\Bundle\\TwigBundle\\Command\\LintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:twig\"/>
      <argument type=\"service\" id=\"twig\"/>
      <call method=\"setName\">
        <argument>lint:twig</argument>
      </call>
    </service>
    <service id=\".2_HtmlDumper~9ucJZUH\" class=\"Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper\" public=\"false\">
      <argument>null</argument>
      <argument>UTF-8</argument>
      <argument>1</argument>
      <call method=\"setDisplayOptions\">
        <argument type=\"collection\">
          <argument key=\"maxStringLength\">4096</argument>
          <argument key=\"fileLinkFormat\" type=\"service\" id=\"debug.file_link_formatter\"/>
        </argument>
      </call>
    </service>
    <service id=\".1_NonceGenerator~9ucJZUH\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Csp\\NonceGenerator\" public=\"false\"/>
    <service id=\"web_profiler.controller.profiler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController\" public=\"true\">
      <argument type=\"service\" id=\"router.default\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"profiler\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument>%data_collector.templates%</argument>
      <argument type=\"service\" id=\"web_profiler.csp.handler\"/>
      <argument>/var/www/public/DevLaon</argument>
    </service>
    <service id=\"web_profiler.controller.router\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController\" public=\"true\">
      <argument type=\"service\" id=\"profiler\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"null\"/>
    </service>
    <service id=\"web_profiler.controller.exception\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController\" public=\"true\">
      <argument type=\"service\" id=\"profiler\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument>true</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\"/>
    </service>
    <service id=\"web_profiler.csp.handler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Csp\\ContentSecurityPolicyHandler\" public=\"false\">
      <argument type=\"service\" id=\".1_NonceGenerator~9ucJZUH\"/>
    </service>
    <service id=\"twig.extension.webprofiler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\".2_HtmlDumper~9ucJZUH\"/>
    </service>
    <service id=\"debug.file_link_formatter.url_format\" class=\"string\" public=\"false\">
      <argument type=\"service\" id=\"router.default\"/>
      <argument>_profiler_open_file</argument>
      <argument>?file=%%f&amp;line=%%l#line%%l</argument>
      <factory class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" method=\"generateUrlFormat\"/>
    </service>
    <service id=\"web_profiler.debug_toolbar\" class=\"Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument>false</argument>
      <argument>2</argument>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"ignore\"/>
      <argument>^/((index|app(_[\\w]+)?)\\.php/)?_wdt</argument>
      <argument type=\"service\" id=\"web_profiler.csp.handler\"/>
    </service>
    <service id=\"monolog.logger\" class=\"Symfony\\Bridge\\Monolog\\Logger\" public=\"false\">
      <argument>app</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"useMicrosecondTimestamps\">
        <argument>true</argument>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger_prototype\" class=\"Symfony\\Bridge\\Monolog\\Logger\" abstract=\"true\">
      <argument></argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.activation_strategy.not_found\" class=\"Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\NotFoundActivationStrategy\" abstract=\"true\"/>
    <service id=\"monolog.handler.fingers_crossed.error_level_activation_strategy\" class=\"Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy\" abstract=\"true\"/>
    <service id=\"monolog.formatter.chrome_php\" class=\"Monolog\\Formatter\\ChromePHPFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.gelf_message\" class=\"Monolog\\Formatter\\GelfMessageFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.html\" class=\"Monolog\\Formatter\\HtmlFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.json\" class=\"Monolog\\Formatter\\JsonFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.line\" class=\"Monolog\\Formatter\\LineFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.loggly\" class=\"Monolog\\Formatter\\LogglyFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.normalizer\" class=\"Monolog\\Formatter\\NormalizerFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.scalar\" class=\"Monolog\\Formatter\\ScalarFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.wildfire\" class=\"Monolog\\Formatter\\WildfireFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.logstash\" class=\"Monolog\\Formatter\\LogstashFormatter\" public=\"false\">
      <argument>app</argument>
    </service>
    <service id=\"monolog.processor.psr_log_message\" class=\"Monolog\\Processor\\PsrLogMessageProcessor\" public=\"false\"/>
    <service id=\"monolog.handler.main\" class=\"Monolog\\Handler\\StreamHandler\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>/var/www/public/DevLaon/var/log/dev.log</argument>
      <argument>100</argument>
      <argument>true</argument>
      <argument>null</argument>
      <argument>false</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"monolog.processor.psr_log_message\"/>
      </call>
    </service>
    <service id=\"monolog.handler.console\" class=\"Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>null</argument>
      <argument>true</argument>
      <argument type=\"collection\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\".5_HtmlDescriptor~w5sUpF9\" class=\"Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor\" public=\"false\">
      <argument type=\"service\" id=\"var_dumper.html_dumper\"/>
    </service>
    <service id=\".4_CliDescriptor~w5sUpF9\" class=\"Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor\" public=\"false\">
      <argument type=\"service\" id=\"var_dumper.cli_dumper\"/>
    </service>
    <service id=\".3_CliContextProvider~w5sUpF9\" class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider\" public=\"false\"/>
    <service id=\".2_RequestContextProvider~w5sUpF9\" class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\".1_SourceContextProvider~w5sUpF9\" class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider\" public=\"false\">
      <argument>UTF-8</argument>
      <argument>/var/www/public/DevLaon</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
    </service>
    <service id=\"twig.extension.dump\" class=\"Symfony\\Bridge\\Twig\\Extension\\DumpExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"var_dumper.cloner\"/>
      <argument type=\"service\" id=\"var_dumper.html_dumper\"/>
    </service>
    <service id=\"data_collector.dump\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector\" public=\"true\">
      <tag name=\"data_collector\" id=\"dump\" template=\"@Debug/Profiler/dump.html.twig\" priority=\"240\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"/>
      <argument>UTF-8</argument>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"var_dumper.server_connection\"/>
    </service>
    <service id=\"debug.dump_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DumpListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <argument type=\"service\" id=\"var_dumper.cloner\"/>
      <argument type=\"service\" id=\"var_dumper.cli_dumper\"/>
      <argument type=\"service\" id=\"var_dumper.server_connection\"/>
    </service>
    <service id=\"var_dumper.cloner\" class=\"Symfony\\Component\\VarDumper\\Cloner\\VarCloner\" public=\"true\">
      <call method=\"setMaxItems\">
        <argument>2500</argument>
      </call>
      <call method=\"setMinDepth\">
        <argument>1</argument>
      </call>
      <call method=\"setMaxString\">
        <argument>-1</argument>
      </call>
      <call method=\"addCasters\">
        <argument type=\"collection\">
          <argument key=\"Closure\">Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster::unsetClosureFileInfo</argument>
        </argument>
      </call>
    </service>
    <service id=\"var_dumper.cli_dumper\" class=\"Symfony\\Component\\VarDumper\\Dumper\\CliDumper\" public=\"false\">
      <argument>null</argument>
      <argument>UTF-8</argument>
      <argument>0</argument>
      <call method=\"setDisplayOptions\">
        <argument type=\"collection\">
          <argument key=\"fileLinkFormat\" type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"/>
        </argument>
      </call>
    </service>
    <service id=\"var_dumper.html_dumper\" class=\"Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper\" public=\"false\">
      <argument>null</argument>
      <argument>UTF-8</argument>
      <argument>0</argument>
      <call method=\"setDisplayOptions\">
        <argument type=\"collection\">
          <argument key=\"fileLinkFormat\" type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"/>
        </argument>
      </call>
    </service>
    <service id=\"var_dumper.server_connection\" class=\"Symfony\\Component\\VarDumper\\Server\\Connection\" public=\"false\">
      <argument>tcp://%env(VAR_DUMPER_SERVER)%</argument>
      <argument type=\"collection\">
        <argument key=\"source\" type=\"service\" id=\".1_SourceContextProvider~w5sUpF9\"/>
        <argument key=\"request\" type=\"service\" id=\".2_RequestContextProvider~w5sUpF9\"/>
        <argument key=\"cli\" type=\"service\" id=\".3_CliContextProvider~w5sUpF9\"/>
      </argument>
    </service>
    <service id=\"var_dumper.dump_server\" class=\"Symfony\\Component\\VarDumper\\Server\\DumpServer\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"debug\"/>
      <argument>tcp://%env(VAR_DUMPER_SERVER)%</argument>
      <argument type=\"service\" id=\"monolog.logger.debug\" on-invalid=\"null\"/>
    </service>
    <service id=\"var_dumper.command.server_dump\" class=\"Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:dump\"/>
      <argument type=\"service\" id=\"var_dumper.dump_server\"/>
      <argument type=\"collection\">
        <argument key=\"cli\" type=\"service\" id=\".4_CliDescriptor~w5sUpF9\"/>
        <argument key=\"html\" type=\"service\" id=\".5_HtmlDescriptor~w5sUpF9\"/>
      </argument>
      <call method=\"setName\">
        <argument>server:dump</argument>
      </call>
    </service>
    <service id=\"maker.file_manager\" class=\"Symfony\\Bundle\\MakerBundle\\FileManager\" public=\"false\">
      <argument type=\"service\" id=\"filesystem\"/>
      <argument type=\"service\" id=\"maker.autoloader_util\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument>/var/www/public/DevLaon/templates</argument>
    </service>
    <service id=\"maker.autoloader_finder\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\ComposerAutoloaderFinder\" public=\"false\">
      <argument>App</argument>
    </service>
    <service id=\"maker.autoloader_util\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\AutoloaderUtil\" public=\"false\">
      <argument type=\"service\" id=\"maker.autoloader_finder\"/>
    </service>
    <service id=\"maker.event_registry\" class=\"Symfony\\Bundle\\MakerBundle\\EventRegistry\" public=\"false\">
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
    </service>
    <service id=\"maker.console_error_listener\" class=\"Symfony\\Bundle\\MakerBundle\\Event\\ConsoleErrorSubscriber\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
    </service>
    <service id=\"maker.doctrine_helper\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\DoctrineHelper\" public=\"false\">
      <argument>App\\Entity</argument>
      <argument type=\"service\" id=\"doctrine\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"maker.auto_command.abstract\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.generator\" class=\"Symfony\\Bundle\\MakerBundle\\Generator\" public=\"false\">
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument>App</argument>
    </service>
    <service id=\"maker.entity_class_generator\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\EntityClassGenerator\" public=\"false\">
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.user_class_builder\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\UserClassBuilder\" public=\"false\"/>
    <service id=\"maker.security_config_updater\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\SecurityConfigUpdater\" public=\"false\"/>
    <service id=\"maker.renderer.form_type_renderer\" class=\"Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer\" public=\"false\">
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.maker.make_authenticator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeAuthenticator\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.security_config_updater\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
    </service>
    <service id=\"maker.maker.make_command\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCommand\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_controller\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeController\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
    </service>
    <service id=\"maker.maker.make_crud\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCrud\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
    </service>
    <service id=\"maker.maker.make_entity\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeEntity\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.maker.make_fixtures\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFixtures\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeForm\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
    </service>
    <service id=\"maker.maker.make_functional_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFunctionalTest\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_registration_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeRegistrationForm\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
      <argument type=\"service\" id=\"router.default\"/>
    </service>
    <service id=\"maker.maker.make_serializer_encoder\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerEncoder\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_serializer_normalizer\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerNormalizer\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_subscriber\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSubscriber\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.event_registry\"/>
    </service>
    <service id=\"maker.maker.make_twig_extension\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeTwigExtension\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_unit_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUnitTest\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_validator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeValidator\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_voter\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeVoter\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_user\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUser\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.user_class_builder\"/>
      <argument type=\"service\" id=\"maker.security_config_updater\"/>
    </service>
    <service id=\"maker.maker.make_migration\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeMigration\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument>/var/www/public/DevLaon</argument>
    </service>
    <service id=\"web_server.command.server_run\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerRunCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:run\"/>
      <argument>/var/www/public/DevLaon/public</argument>
      <argument>dev</argument>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"setName\">
        <argument>server:run</argument>
      </call>
    </service>
    <service id=\"web_server.command.server_start\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStartCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:start\"/>
      <argument>/var/www/public/DevLaon/public</argument>
      <argument>dev</argument>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"setName\">
        <argument>server:start</argument>
      </call>
    </service>
    <service id=\"web_server.command.server_stop\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStopCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:stop\"/>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"setName\">
        <argument>server:stop</argument>
      </call>
    </service>
    <service id=\"web_server.command.server_status\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStatusCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:status\"/>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"setName\">
        <argument>server:status</argument>
      </call>
    </service>
    <service id=\"web_server.command.server_log\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerLogCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:log\"/>
      <call method=\"setName\">
        <argument>server:log</argument>
      </call>
    </service>
    <service id=\"doctrine.fixtures_load_command\" class=\"Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:fixtures:load\"/>
      <argument type=\"service\" id=\"doctrine.fixtures.loader\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:fixtures:load</argument>
      </call>
    </service>
    <service id=\"doctrine.fixtures.loader\" class=\"Doctrine\\Bundle\\FixturesBundle\\Loader\\SymfonyFixturesLoader\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
      <call method=\"addFixtures\">
        <argument type=\"collection\">
          <argument type=\"collection\">
            <argument key=\"fixture\" type=\"service\" id=\"App\\DataFixtures\\AppFixtures\"/>
            <argument key=\"groups\" type=\"collection\"/>
          </argument>
        </argument>
      </call>
    </service>
    <service id=\".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\ArticleController\" class=\"App\\Controller\\ArticleController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\ArticleController\" class=\"App\\Controller\\ArticleController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Controller\\ArticleController\" class=\"App\\Controller\\ArticleController\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\SecurityController\" class=\"App\\Controller\\SecurityController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\SecurityController\" class=\"App\\Controller\\SecurityController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Controller\\SecurityController\" class=\"App\\Controller\\SecurityController\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface.0.App\\DataFixtures\\AppFixtures\" class=\"App\\DataFixtures\\AppFixtures\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\DataFixtures\\AppFixtures\" class=\"App\\DataFixtures\\AppFixtures\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\ArticleType\" class=\"App\\Form\\ArticleType\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Form\\ArticleType\" class=\"App\\Form\\ArticleType\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\CommentType\" class=\"App\\Form\\CommentType\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Form\\CommentType\" class=\"App\\Form\\CommentType\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\RegistrationType\" class=\"App\\Form\\RegistrationType\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Form\\RegistrationType\" class=\"App\\Form\\RegistrationType\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleLikeRepository\" class=\"App\\Repository\\ArticleLikeRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\ArticleLikeRepository\" class=\"App\\Repository\\ArticleLikeRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleRepository\" class=\"App\\Repository\\ArticleRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\ArticleRepository\" class=\"App\\Repository\\ArticleRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CategoryRepository\" class=\"App\\Repository\\CategoryRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\CategoryRepository\" class=\"App\\Repository\\CategoryRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CommentRepository\" class=\"App\\Repository\\CommentRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\CommentRepository\" class=\"App\\Repository\\CommentRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\UserRepository\" class=\"App\\Repository\\UserRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\UserRepository\" class=\"App\\Repository\\UserRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\"maker.auto_command.make_auth\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:auth\"/>
      <argument type=\"service\" id=\"maker.maker.make_authenticator\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:auth</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_command\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:command\"/>
      <argument type=\"service\" id=\"maker.maker.make_command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:command</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_controller\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:controller\"/>
      <argument type=\"service\" id=\"maker.maker.make_controller\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:controller</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_crud\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:crud\"/>
      <argument type=\"service\" id=\"maker.maker.make_crud\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:crud</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_entity\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:entity\"/>
      <argument type=\"service\" id=\"maker.maker.make_entity\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:entity</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_fixtures\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:fixtures\"/>
      <argument type=\"service\" id=\"maker.maker.make_fixtures\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:fixtures</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_form\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:form\"/>
      <argument type=\"service\" id=\"maker.maker.make_form\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:form</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_functional_test\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:functional-test\"/>
      <argument type=\"service\" id=\"maker.maker.make_functional_test\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:functional-test</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_registration_form\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:register-form\"/>
      <argument type=\"service\" id=\"maker.maker.make_registration_form\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:register-form</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_serializer_encoder\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:serializer:encoder\"/>
      <argument type=\"service\" id=\"maker.maker.make_serializer_encoder\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:serializer:encoder</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_serializer_normalizer\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:serializer:normalizer\"/>
      <argument type=\"service\" id=\"maker.maker.make_serializer_normalizer\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:serializer:normalizer</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_subscriber\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:subscriber\"/>
      <argument type=\"service\" id=\"maker.maker.make_subscriber\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:subscriber</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_twig_extension\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:twig-extension\"/>
      <argument type=\"service\" id=\"maker.maker.make_twig_extension\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:twig-extension</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_unit_test\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:unit-test\"/>
      <argument type=\"service\" id=\"maker.maker.make_unit_test\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:unit-test</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_validator\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:validator\"/>
      <argument type=\"service\" id=\"maker.maker.make_validator\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:validator</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_voter\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:voter\"/>
      <argument type=\"service\" id=\"maker.maker.make_voter\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:voter</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_user\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:user\"/>
      <argument type=\"service\" id=\"maker.maker.make_user\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:user</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_migration\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:migration\"/>
      <argument type=\"service\" id=\"maker.maker.make_migration\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:migration</argument>
      </call>
    </service>
    <service id=\".service_locator.hsWoe8a\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"repo\" type=\"service\" id=\"App\\Repository\\ArticleRepository\"/>
      </argument>
    </service>
    <service id=\".service_locator.tUQnhFH\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      </argument>
    </service>
    <service id=\".service_locator.JDL7Y7B\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"repo\" type=\"service\" id=\"App\\Repository\\UserRepository\"/>
        <argument key=\"repoArticle\" type=\"service\" id=\"App\\Repository\\ArticleRepository\"/>
      </argument>
    </service>
    <service id=\".service_locator.LedKf08\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"repo\" type=\"service\" id=\"App\\Repository\\ArticleRepository\"/>
        <argument key=\"repoCategory\" type=\"service\" id=\"App\\Repository\\CategoryRepository\"/>
      </argument>
    </service>
    <service id=\".service_locator.5aciI7K\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"article\" type=\"service\" id=\".errored..service_locator.5aciI7K.App\\Entity\\Article\"/>
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      </argument>
    </service>
    <service id=\".service_locator.uJKazI8\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"article\" type=\"service\" id=\".errored..service_locator.uJKazI8.App\\Entity\\Article\"/>
        <argument key=\"likeRepo\" type=\"service\" id=\"App\\Repository\\ArticleLikeRepository\"/>
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      </argument>
    </service>
    <service id=\".service_locator.MVOlSQQ\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"repo\" type=\"service\" id=\"App\\Repository\\ArticleRepository\"/>
        <argument key=\"repoUser\" type=\"service\" id=\"App\\Repository\\UserRepository\"/>
        <argument key=\"user\" type=\"service\" id=\".errored..service_locator.MVOlSQQ.App\\Entity\\User\"/>
      </argument>
    </service>
    <service id=\".service_locator.Gn3oxQ2\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"comment\" type=\"service\" id=\".errored..service_locator.Gn3oxQ2.App\\Entity\\Comment\"/>
      </argument>
    </service>
    <service id=\".service_locator.wypGnUQ\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"user\" type=\"service\" id=\".errored..service_locator.wypGnUQ.App\\Entity\\User\"/>
      </argument>
    </service>
    <service id=\".service_locator.8y7S3wT\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"repo\" type=\"service\" id=\"App\\Repository\\CategoryRepository\"/>
      </argument>
    </service>
    <service id=\".service_locator..NmEFk5\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
        <argument key=\"user\" type=\"service\" id=\".errored..service_locator..NmEFk5.App\\Entity\\User\"/>
      </argument>
    </service>
    <service id=\".service_locator.Txvqv4R\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      </argument>
    </service>
    <service id=\".service_locator.czKK4py\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"encoder\" type=\"service\" id=\"security.user_password_encoder.generic\"/>
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      </argument>
    </service>
    <service id=\".service_locator._LtMy3o\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"App\\Controller\\ArticleController::articles\" type=\"service\" id=\".service_locator.LedKf08\"/>
        <argument key=\"App\\Controller\\ArticleController::contact\" type=\"service\" id=\".service_locator.Txvqv4R\"/>
        <argument key=\"App\\Controller\\ArticleController::contactUser\" type=\"service\" id=\".service_locator..NmEFk5\"/>
        <argument key=\"App\\Controller\\ArticleController::dashboard\" type=\"service\" id=\".service_locator.JDL7Y7B\"/>
        <argument key=\"App\\Controller\\ArticleController::deleteArticleById\" type=\"service\" id=\".service_locator.uJKazI8\"/>
        <argument key=\"App\\Controller\\ArticleController::deleteCommentUserById\" type=\"service\" id=\".service_locator.Gn3oxQ2\"/>
        <argument key=\"App\\Controller\\ArticleController::form\" type=\"service\" id=\".service_locator.tUQnhFH\"/>
        <argument key=\"App\\Controller\\ArticleController::home\" type=\"service\" id=\".service_locator.hsWoe8a\"/>
        <argument key=\"App\\Controller\\ArticleController::like\" type=\"service\" id=\".service_locator.uJKazI8\"/>
        <argument key=\"App\\Controller\\ArticleController::removeUser\" type=\"service\" id=\".service_locator.wypGnUQ\"/>
        <argument key=\"App\\Controller\\ArticleController::show\" type=\"service\" id=\".service_locator.5aciI7K\"/>
        <argument key=\"App\\Controller\\ArticleController::showArticlesByUser\" type=\"service\" id=\".service_locator.hsWoe8a\"/>
        <argument key=\"App\\Controller\\ArticleController::showCategory\" type=\"service\" id=\".service_locator.8y7S3wT\"/>
        <argument key=\"App\\Controller\\ArticleController::showUser\" type=\"service\" id=\".service_locator.MVOlSQQ\"/>
        <argument key=\"App\\Controller\\SecurityController::register\" type=\"service\" id=\".service_locator.czKK4py\"/>
        <argument key=\"App\\Controller\\ArticleController:articles\" type=\"service\" id=\".service_locator.LedKf08\"/>
        <argument key=\"App\\Controller\\ArticleController:contact\" type=\"service\" id=\".service_locator.Txvqv4R\"/>
        <argument key=\"App\\Controller\\ArticleController:contactUser\" type=\"service\" id=\".service_locator..NmEFk5\"/>
        <argument key=\"App\\Controller\\ArticleController:dashboard\" type=\"service\" id=\".service_locator.JDL7Y7B\"/>
        <argument key=\"App\\Controller\\ArticleController:deleteArticleById\" type=\"service\" id=\".service_locator.uJKazI8\"/>
        <argument key=\"App\\Controller\\ArticleController:deleteCommentUserById\" type=\"service\" id=\".service_locator.Gn3oxQ2\"/>
        <argument key=\"App\\Controller\\ArticleController:form\" type=\"service\" id=\".service_locator.tUQnhFH\"/>
        <argument key=\"App\\Controller\\ArticleController:home\" type=\"service\" id=\".service_locator.hsWoe8a\"/>
        <argument key=\"App\\Controller\\ArticleController:like\" type=\"service\" id=\".service_locator.uJKazI8\"/>
        <argument key=\"App\\Controller\\ArticleController:removeUser\" type=\"service\" id=\".service_locator.wypGnUQ\"/>
        <argument key=\"App\\Controller\\ArticleController:show\" type=\"service\" id=\".service_locator.5aciI7K\"/>
        <argument key=\"App\\Controller\\ArticleController:showArticlesByUser\" type=\"service\" id=\".service_locator.hsWoe8a\"/>
        <argument key=\"App\\Controller\\ArticleController:showCategory\" type=\"service\" id=\".service_locator.8y7S3wT\"/>
        <argument key=\"App\\Controller\\ArticleController:showUser\" type=\"service\" id=\".service_locator.MVOlSQQ\"/>
        <argument key=\"App\\Controller\\SecurityController:register\" type=\"service\" id=\".service_locator.czKK4py\"/>
      </argument>
    </service>
    <service id=\".service_locator.LtnrEkg\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator\" type=\"service\" id=\"doctrine.orm.validator.unique\"/>
        <argument key=\"Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator\" type=\"service\" id=\"security.validator.user_password\"/>
        <argument key=\"Symfony\\Component\\Validator\\Constraints\\EmailValidator\" type=\"service\" id=\"validator.email\"/>
        <argument key=\"Symfony\\Component\\Validator\\Constraints\\ExpressionValidator\" type=\"service\" id=\"validator.expression\"/>
        <argument key=\"Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator\" type=\"service\" id=\"validator.not_compromised_password\"/>
        <argument key=\"doctrine.orm.validator.unique\" type=\"service\" id=\"doctrine.orm.validator.unique\"/>
        <argument key=\"security.validator.user_password\" type=\"service\" id=\"security.validator.user_password\"/>
        <argument key=\"validator.expression\" type=\"service\" id=\"validator.expression\"/>
      </argument>
    </service>
    <service id=\".service_locator.gmwRZ3h\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"inline\" type=\"service\" id=\"fragment.renderer.inline\"/>
      </argument>
    </service>
    <service id=\"debug.argument_resolver.request_attribute\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"100\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.request_attribute.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.request\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.request.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.session\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.session.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.security.user_value_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"40\"/>
      <argument type=\"service\" id=\"debug.security.user_value_resolver.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.service\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.service.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.default\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-100\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.default.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.variadic\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-150\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.variadic.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.not_tagged_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-200\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.not_tagged_controller.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\".service_locator.cbc17Dc\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"App\\Form\\ArticleType\" type=\"service\" id=\"App\\Form\\ArticleType\"/>
        <argument key=\"App\\Form\\CommentType\" type=\"service\" id=\"App\\Form\\CommentType\"/>
        <argument key=\"App\\Form\\RegistrationType\" type=\"service\" id=\"App\\Form\\RegistrationType\"/>
        <argument key=\"Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType\" type=\"service\" id=\"form.type.entity\"/>
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType\" type=\"service\" id=\"form.type.choice\"/>
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType\" type=\"service\" id=\"form.type.file\"/>
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" type=\"service\" id=\"form.type.form\"/>
      </argument>
    </service>
    <service id=\".service_locator.Otd28_S\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"doctrine.orm.default_listeners.attach_entity_listeners\" type=\"service\" id=\"doctrine.orm.default_listeners.attach_entity_listeners\"/>
      </argument>
    </service>
    <service id=\".service_locator._ZQxHRQ\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"App\\Repository\\ArticleLikeRepository\" type=\"service\" id=\"App\\Repository\\ArticleLikeRepository\"/>
        <argument key=\"App\\Repository\\ArticleRepository\" type=\"service\" id=\"App\\Repository\\ArticleRepository\"/>
        <argument key=\"App\\Repository\\CategoryRepository\" type=\"service\" id=\"App\\Repository\\CategoryRepository\"/>
        <argument key=\"App\\Repository\\CommentRepository\" type=\"service\" id=\"App\\Repository\\CommentRepository\"/>
        <argument key=\"App\\Repository\\UserRepository\" type=\"service\" id=\"App\\Repository\\UserRepository\"/>
      </argument>
    </service>
    <service id=\"debug.security.voter.security.access.authenticated_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\TraceableVoter\">
      <argument type=\"service\" id=\"security.access.authenticated_voter\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
    </service>
    <service id=\"debug.security.voter.security.access.role_hierarchy_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\TraceableVoter\">
      <argument type=\"service\" id=\"security.access.role_hierarchy_voter\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
    </service>
    <service id=\"debug.security.voter.security.access.expression_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\TraceableVoter\">
      <argument type=\"service\" id=\"security.access.expression_voter\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
    </service>
    <service id=\"security.logout.handler.csrf_token_clearing\" class=\"Symfony\\Component\\Security\\Http\\Logout\\CsrfTokenClearingLogoutHandler\" public=\"false\">
      <argument type=\"service\" id=\"security.csrf.token_storage\"/>
    </service>
    <service id=\"monolog.logger.request\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>request</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.console\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>console</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.cache\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>cache</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.translation\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>translation</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.profiler\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>profiler</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.php\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>php</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.event\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>event</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.null_internal\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.router\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>router</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.http_client\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>http_client</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.doctrine\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>doctrine</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.security\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>security</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.debug\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>debug</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.handler.null_internal\" class=\"Monolog\\Handler\\NullHandler\"/>
    <service id=\".service_locator.yQVjGlt\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"translation.loader.csv\" type=\"service\" id=\"translation.loader.csv\"/>
        <argument key=\"translation.loader.dat\" type=\"service\" id=\"translation.loader.dat\"/>
        <argument key=\"translation.loader.ini\" type=\"service\" id=\"translation.loader.ini\"/>
        <argument key=\"translation.loader.json\" type=\"service\" id=\"translation.loader.json\"/>
        <argument key=\"translation.loader.mo\" type=\"service\" id=\"translation.loader.mo\"/>
        <argument key=\"translation.loader.php\" type=\"service\" id=\"translation.loader.php\"/>
        <argument key=\"translation.loader.po\" type=\"service\" id=\"translation.loader.po\"/>
        <argument key=\"translation.loader.qt\" type=\"service\" id=\"translation.loader.qt\"/>
        <argument key=\"translation.loader.res\" type=\"service\" id=\"translation.loader.res\"/>
        <argument key=\"translation.loader.xliff\" type=\"service\" id=\"translation.loader.xliff\"/>
        <argument key=\"translation.loader.yml\" type=\"service\" id=\"translation.loader.yml\"/>
      </argument>
    </service>
    <service id=\".service_locator.CDOTD6.\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"doctrine\" type=\"service\" id=\"doctrine\" on-invalid=\"ignore\"/>
        <argument key=\"form.factory\" type=\"service\" id=\"form.factory\" on-invalid=\"ignore\"/>
        <argument key=\"http_kernel\" type=\"service\" id=\"http_kernel\" on-invalid=\"ignore\"/>
        <argument key=\"parameter_bag\" type=\"service\" id=\"parameter_bag\" on-invalid=\"ignore\"/>
        <argument key=\"request_stack\" type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
        <argument key=\"router\" type=\"service\" id=\"router.default\" on-invalid=\"ignore\"/>
        <argument key=\"security.authorization_checker\" type=\"service\" id=\"security.authorization_checker\" on-invalid=\"ignore\"/>
        <argument key=\"security.csrf.token_manager\" type=\"service\" id=\"security.csrf.token_manager\" on-invalid=\"ignore\"/>
        <argument key=\"security.token_storage\" type=\"service\" id=\"security.token_storage\" on-invalid=\"ignore\"/>
        <argument key=\"serializer\" type=\"service\" id=\"serializer\" on-invalid=\"ignore\"/>
        <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\"/>
        <argument key=\"twig\" type=\"service\" id=\"twig\" on-invalid=\"ignore\"/>
      </argument>
    </service>
    <service id=\".service_locator.CDOTD6..App\\Controller\\ArticleController\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"App\\Controller\\ArticleController\"/>
      <argument>App\\Controller\\ArticleController</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.CDOTD6.\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.CDOTD6..App\\Controller\\SecurityController\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"App\\Controller\\SecurityController\"/>
      <argument>App\\Controller\\SecurityController</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.CDOTD6.\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator._pu.0Tb\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"translator\" type=\"service\" id=\"translator.data_collector\"/>
      </argument>
    </service>
    <service id=\".service_locator._pu.0Tb.translation.warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"translation.warmer\"/>
      <argument>translation.warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator._pu.0Tb\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.kbKiEzc\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"routing.loader\" type=\"service\" id=\"routing.loader\"/>
      </argument>
    </service>
    <service id=\".service_locator.kbKiEzc.router.default\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"router.default\"/>
      <argument>router.default</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.kbKiEzc\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.m8PwGkX\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"router\" type=\"service\" id=\"router.default\"/>
      </argument>
    </service>
    <service id=\".service_locator.m8PwGkX.router.cache_warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"router.cache_warmer\"/>
      <argument>router.cache_warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.m8PwGkX\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.lSIKWsr\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"twig\" type=\"service\" id=\"twig\"/>
      </argument>
    </service>
    <service id=\".service_locator.lSIKWsr.twig.cache_warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"twig.cache_warmer\"/>
      <argument>twig.cache_warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.lSIKWsr\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.lSIKWsr.twig.template_cache_warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"twig.template_cache_warmer\"/>
      <argument>twig.template_cache_warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.lSIKWsr\" method=\"withContext\"/>
    </service>
    <service id=\"debug.validator.inner\" class=\"Symfony\\Component\\Validator\\Validator\\ValidatorInterface\" public=\"false\">
      <factory service=\"validator.builder\" method=\"getValidator\"/>
    </service>
    <service id=\"debug.event_dispatcher.inner\" class=\"Symfony\\Component\\EventDispatcher\\EventDispatcher\" public=\"false\"/>
    <service id=\"debug.controller_resolver.inner\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"service\" id=\"controller_name_converter\"/>
      <argument type=\"service\" id=\"monolog.logger.request\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"debug.argument_resolver.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\" public=\"false\">
      <argument type=\"service\" id=\"argument_metadata_factory\"/>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"debug.argument_resolver.request_attribute\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.request\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.session\"/>
        <argument type=\"service\" id=\"debug.security.user_value_resolver\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.service\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.default\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.variadic\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.not_tagged_controller\"/>
      </argument>
    </service>
    <service id=\"debug.security.access.decision_manager.inner\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager\" public=\"false\">
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"debug.security.voter.security.access.authenticated_voter\"/>
        <argument type=\"service\" id=\"debug.security.voter.security.access.role_hierarchy_voter\"/>
        <argument type=\"service\" id=\"debug.security.voter.security.access.expression_voter\"/>
      </argument>
      <argument>affirmative</argument>
      <argument>false</argument>
      <argument>true</argument>
    </service>
    <service id=\"debug.argument_resolver.request_attribute.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.request.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.session.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\SessionValueResolver\" public=\"false\"/>
    <service id=\"debug.security.user_value_resolver.inner\" class=\"Symfony\\Component\\Security\\Http\\Controller\\UserValueResolver\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
    </service>
    <service id=\"debug.argument_resolver.service.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\ServiceValueResolver\" public=\"false\">
      <argument type=\"service\" id=\".service_locator._LtMy3o\"/>
    </service>
    <service id=\"debug.argument_resolver.default.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\DefaultValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.variadic.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\VariadicValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.not_tagged_controller.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver\" public=\"false\">
      <argument type=\"service\" id=\".service_locator._LtMy3o\"/>
    </service>
    <service id=\".service_locator.UwRI0uT\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"reverse_container\" type=\"service\" id=\"reverse_container\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\".service_locator.WPZmidW\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"initialized_session\" type=\"service\" id=\"session\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"request_stack\" type=\"service\" id=\"request_stack\"/>
        <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\"/>
        <argument key=\"session_storage\" type=\"service\" id=\"session.storage.native\" on-invalid=\"ignore\"/>
      </argument>
    </service>
    <service id=\".service_locator.jD4_ZG7\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"security.authorization_checker\" type=\"service\" id=\"security.authorization_checker\"/>
        <argument key=\"security.token_storage\" type=\"service\" id=\"security.token_storage\"/>
      </argument>
    </service>
    <service id=\".errored..service_locator.5aciI7K.App\\Entity\\Article\" class=\"App\\Entity\\Article\"/>
    <service id=\".errored..service_locator.uJKazI8.App\\Entity\\Article\" class=\"App\\Entity\\Article\"/>
    <service id=\".errored..service_locator.MVOlSQQ.App\\Entity\\User\" class=\"App\\Entity\\User\"/>
    <service id=\".errored..service_locator.Gn3oxQ2.App\\Entity\\Comment\" class=\"App\\Entity\\Comment\"/>
    <service id=\".errored..service_locator.wypGnUQ.App\\Entity\\User\" class=\"App\\Entity\\User\"/>
    <service id=\".errored..service_locator..NmEFk5.App\\Entity\\User\" class=\"App\\Entity\\User\"/>
    <service id=\"console.command_loader\" class=\"Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader\" public=\"true\">
      <argument type=\"service\" id=\".service_locator.JgKnBZT\"/>
      <argument type=\"collection\">
        <argument key=\"about\">console.command.about</argument>
        <argument key=\"assets:install\">console.command.assets_install</argument>
        <argument key=\"cache:clear\">console.command.cache_clear</argument>
        <argument key=\"cache:pool:clear\">console.command.cache_pool_clear</argument>
        <argument key=\"cache:pool:prune\">console.command.cache_pool_prune</argument>
        <argument key=\"cache:pool:delete\">console.command.cache_pool_delete</argument>
        <argument key=\"cache:pool:list\">console.command.cache_pool_list</argument>
        <argument key=\"cache:warmup\">console.command.cache_warmup</argument>
        <argument key=\"debug:config\">console.command.config_debug</argument>
        <argument key=\"config:dump-reference\">console.command.config_dump_reference</argument>
        <argument key=\"debug:container\">console.command.container_debug</argument>
        <argument key=\"debug:autowiring\">console.command.debug_autowiring</argument>
        <argument key=\"debug:event-dispatcher\">console.command.event_dispatcher_debug</argument>
        <argument key=\"debug:router\">console.command.router_debug</argument>
        <argument key=\"router:match\">console.command.router_match</argument>
        <argument key=\"debug:translation\">console.command.translation_debug</argument>
        <argument key=\"translation:update\">console.command.translation_update</argument>
        <argument key=\"lint:xliff\">console.command.xliff_lint</argument>
        <argument key=\"lint:yaml\">console.command.yaml_lint</argument>
        <argument key=\"debug:form\">console.command.form_debug</argument>
        <argument key=\"doctrine:database:create\">doctrine.database_create_command</argument>
        <argument key=\"doctrine:database:drop\">doctrine.database_drop_command</argument>
        <argument key=\"doctrine:generate:entities\">doctrine.generate_entities_command</argument>
        <argument key=\"doctrine:query:sql\">doctrine.query_sql_command</argument>
        <argument key=\"doctrine:cache:clear-metadata\">doctrine.cache_clear_metadata_command</argument>
        <argument key=\"doctrine:cache:clear-query\">doctrine.cache_clear_query_cache_command</argument>
        <argument key=\"doctrine:cache:clear-result\">doctrine.cache_clear_result_command</argument>
        <argument key=\"doctrine:cache:clear-collection-region\">doctrine.cache_collection_region_command</argument>
        <argument key=\"doctrine:mapping:convert\">doctrine.mapping_convert_command</argument>
        <argument key=\"doctrine:schema:create\">doctrine.schema_create_command</argument>
        <argument key=\"doctrine:schema:drop\">doctrine.schema_drop_command</argument>
        <argument key=\"doctrine:ensure-production-settings\">doctrine.ensure_production_settings_command</argument>
        <argument key=\"doctrine:cache:clear-entity-region\">doctrine.clear_entity_region_command</argument>
        <argument key=\"doctrine:database:import\">doctrine.database_import_command</argument>
        <argument key=\"doctrine:mapping:info\">doctrine.mapping_info_command</argument>
        <argument key=\"doctrine:cache:clear-query-region\">doctrine.clear_query_region_command</argument>
        <argument key=\"doctrine:query:dql\">doctrine.query_dql_command</argument>
        <argument key=\"doctrine:schema:update\">doctrine.schema_update_command</argument>
        <argument key=\"doctrine:schema:validate\">doctrine.schema_validate_command</argument>
        <argument key=\"doctrine:mapping:import\">doctrine.mapping_import_command</argument>
        <argument key=\"security:encode-password\">security.command.user_password_encoder</argument>
        <argument key=\"debug:swiftmailer\">swiftmailer.command.debug</argument>
        <argument key=\"swiftmailer:email:send\">swiftmailer.command.new_email</argument>
        <argument key=\"swiftmailer:spool:send\">swiftmailer.command.send_email</argument>
        <argument key=\"debug:twig\">twig.command.debug</argument>
        <argument key=\"lint:twig\">twig.command.lint</argument>
        <argument key=\"server:dump\">var_dumper.command.server_dump</argument>
        <argument key=\"server:run\">web_server.command.server_run</argument>
        <argument key=\"server:start\">web_server.command.server_start</argument>
        <argument key=\"server:stop\">web_server.command.server_stop</argument>
        <argument key=\"server:status\">web_server.command.server_status</argument>
        <argument key=\"server:log\">web_server.command.server_log</argument>
        <argument key=\"doctrine:fixtures:load\">doctrine.fixtures_load_command</argument>
        <argument key=\"make:auth\">maker.auto_command.make_auth</argument>
        <argument key=\"make:command\">maker.auto_command.make_command</argument>
        <argument key=\"make:controller\">maker.auto_command.make_controller</argument>
        <argument key=\"make:crud\">maker.auto_command.make_crud</argument>
        <argument key=\"make:entity\">maker.auto_command.make_entity</argument>
        <argument key=\"make:fixtures\">maker.auto_command.make_fixtures</argument>
        <argument key=\"make:form\">maker.auto_command.make_form</argument>
        <argument key=\"make:functional-test\">maker.auto_command.make_functional_test</argument>
        <argument key=\"make:register-form\">maker.auto_command.make_registration_form</argument>
        <argument key=\"make:serializer:encoder\">maker.auto_command.make_serializer_encoder</argument>
        <argument key=\"make:serializer:normalizer\">maker.auto_command.make_serializer_normalizer</argument>
        <argument key=\"make:subscriber\">maker.auto_command.make_subscriber</argument>
        <argument key=\"make:twig-extension\">maker.auto_command.make_twig_extension</argument>
        <argument key=\"make:unit-test\">maker.auto_command.make_unit_test</argument>
        <argument key=\"make:validator\">maker.auto_command.make_validator</argument>
        <argument key=\"make:voter\">maker.auto_command.make_voter</argument>
        <argument key=\"make:user\">maker.auto_command.make_user</argument>
        <argument key=\"make:migration\">maker.auto_command.make_migration</argument>
      </argument>
    </service>
    <service id=\".service_locator.JgKnBZT\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"console.command.about\" type=\"service\" id=\"console.command.about\"/>
        <argument key=\"console.command.assets_install\" type=\"service\" id=\"console.command.assets_install\"/>
        <argument key=\"console.command.cache_clear\" type=\"service\" id=\"console.command.cache_clear\"/>
        <argument key=\"console.command.cache_pool_clear\" type=\"service\" id=\"console.command.cache_pool_clear\"/>
        <argument key=\"console.command.cache_pool_delete\" type=\"service\" id=\"console.command.cache_pool_delete\"/>
        <argument key=\"console.command.cache_pool_list\" type=\"service\" id=\"console.command.cache_pool_list\"/>
        <argument key=\"console.command.cache_pool_prune\" type=\"service\" id=\"console.command.cache_pool_prune\"/>
        <argument key=\"console.command.cache_warmup\" type=\"service\" id=\"console.command.cache_warmup\"/>
        <argument key=\"console.command.config_debug\" type=\"service\" id=\"console.command.config_debug\"/>
        <argument key=\"console.command.config_dump_reference\" type=\"service\" id=\"console.command.config_dump_reference\"/>
        <argument key=\"console.command.container_debug\" type=\"service\" id=\"console.command.container_debug\"/>
        <argument key=\"console.command.debug_autowiring\" type=\"service\" id=\"console.command.debug_autowiring\"/>
        <argument key=\"console.command.event_dispatcher_debug\" type=\"service\" id=\"console.command.event_dispatcher_debug\"/>
        <argument key=\"console.command.form_debug\" type=\"service\" id=\"console.command.form_debug\"/>
        <argument key=\"console.command.router_debug\" type=\"service\" id=\"console.command.router_debug\"/>
        <argument key=\"console.command.router_match\" type=\"service\" id=\"console.command.router_match\"/>
        <argument key=\"console.command.translation_debug\" type=\"service\" id=\"console.command.translation_debug\"/>
        <argument key=\"console.command.translation_update\" type=\"service\" id=\"console.command.translation_update\"/>
        <argument key=\"console.command.xliff_lint\" type=\"service\" id=\"console.command.xliff_lint\"/>
        <argument key=\"console.command.yaml_lint\" type=\"service\" id=\"console.command.yaml_lint\"/>
        <argument key=\"doctrine.cache_clear_metadata_command\" type=\"service\" id=\"doctrine.cache_clear_metadata_command\"/>
        <argument key=\"doctrine.cache_clear_query_cache_command\" type=\"service\" id=\"doctrine.cache_clear_query_cache_command\"/>
        <argument key=\"doctrine.cache_clear_result_command\" type=\"service\" id=\"doctrine.cache_clear_result_command\"/>
        <argument key=\"doctrine.cache_collection_region_command\" type=\"service\" id=\"doctrine.cache_collection_region_command\"/>
        <argument key=\"doctrine.clear_entity_region_command\" type=\"service\" id=\"doctrine.clear_entity_region_command\"/>
        <argument key=\"doctrine.clear_query_region_command\" type=\"service\" id=\"doctrine.clear_query_region_command\"/>
        <argument key=\"doctrine.database_create_command\" type=\"service\" id=\"doctrine.database_create_command\"/>
        <argument key=\"doctrine.database_drop_command\" type=\"service\" id=\"doctrine.database_drop_command\"/>
        <argument key=\"doctrine.database_import_command\" type=\"service\" id=\"doctrine.database_import_command\"/>
        <argument key=\"doctrine.ensure_production_settings_command\" type=\"service\" id=\"doctrine.ensure_production_settings_command\"/>
        <argument key=\"doctrine.fixtures_load_command\" type=\"service\" id=\"doctrine.fixtures_load_command\"/>
        <argument key=\"doctrine.generate_entities_command\" type=\"service\" id=\"doctrine.generate_entities_command\"/>
        <argument key=\"doctrine.mapping_convert_command\" type=\"service\" id=\"doctrine.mapping_convert_command\"/>
        <argument key=\"doctrine.mapping_import_command\" type=\"service\" id=\"doctrine.mapping_import_command\"/>
        <argument key=\"doctrine.mapping_info_command\" type=\"service\" id=\"doctrine.mapping_info_command\"/>
        <argument key=\"doctrine.query_dql_command\" type=\"service\" id=\"doctrine.query_dql_command\"/>
        <argument key=\"doctrine.query_sql_command\" type=\"service\" id=\"doctrine.query_sql_command\"/>
        <argument key=\"doctrine.schema_create_command\" type=\"service\" id=\"doctrine.schema_create_command\"/>
        <argument key=\"doctrine.schema_drop_command\" type=\"service\" id=\"doctrine.schema_drop_command\"/>
        <argument key=\"doctrine.schema_update_command\" type=\"service\" id=\"doctrine.schema_update_command\"/>
        <argument key=\"doctrine.schema_validate_command\" type=\"service\" id=\"doctrine.schema_validate_command\"/>
        <argument key=\"maker.auto_command.make_auth\" type=\"service\" id=\"maker.auto_command.make_auth\"/>
        <argument key=\"maker.auto_command.make_command\" type=\"service\" id=\"maker.auto_command.make_command\"/>
        <argument key=\"maker.auto_command.make_controller\" type=\"service\" id=\"maker.auto_command.make_controller\"/>
        <argument key=\"maker.auto_command.make_crud\" type=\"service\" id=\"maker.auto_command.make_crud\"/>
        <argument key=\"maker.auto_command.make_entity\" type=\"service\" id=\"maker.auto_command.make_entity\"/>
        <argument key=\"maker.auto_command.make_fixtures\" type=\"service\" id=\"maker.auto_command.make_fixtures\"/>
        <argument key=\"maker.auto_command.make_form\" type=\"service\" id=\"maker.auto_command.make_form\"/>
        <argument key=\"maker.auto_command.make_functional_test\" type=\"service\" id=\"maker.auto_command.make_functional_test\"/>
        <argument key=\"maker.auto_command.make_migration\" type=\"service\" id=\"maker.auto_command.make_migration\"/>
        <argument key=\"maker.auto_command.make_registration_form\" type=\"service\" id=\"maker.auto_command.make_registration_form\"/>
        <argument key=\"maker.auto_command.make_serializer_encoder\" type=\"service\" id=\"maker.auto_command.make_serializer_encoder\"/>
        <argument key=\"maker.auto_command.make_serializer_normalizer\" type=\"service\" id=\"maker.auto_command.make_serializer_normalizer\"/>
        <argument key=\"maker.auto_command.make_subscriber\" type=\"service\" id=\"maker.auto_command.make_subscriber\"/>
        <argument key=\"maker.auto_command.make_twig_extension\" type=\"service\" id=\"maker.auto_command.make_twig_extension\"/>
        <argument key=\"maker.auto_command.make_unit_test\" type=\"service\" id=\"maker.auto_command.make_unit_test\"/>
        <argument key=\"maker.auto_command.make_user\" type=\"service\" id=\"maker.auto_command.make_user\"/>
        <argument key=\"maker.auto_command.make_validator\" type=\"service\" id=\"maker.auto_command.make_validator\"/>
        <argument key=\"maker.auto_command.make_voter\" type=\"service\" id=\"maker.auto_command.make_voter\"/>
        <argument key=\"security.command.user_password_encoder\" type=\"service\" id=\"security.command.user_password_encoder\"/>
        <argument key=\"swiftmailer.command.debug\" type=\"service\" id=\"swiftmailer.command.debug\"/>
        <argument key=\"swiftmailer.command.new_email\" type=\"service\" id=\"swiftmailer.command.new_email\"/>
        <argument key=\"swiftmailer.command.send_email\" type=\"service\" id=\"swiftmailer.command.send_email\"/>
        <argument key=\"twig.command.debug\" type=\"service\" id=\"twig.command.debug\"/>
        <argument key=\"twig.command.lint\" type=\"service\" id=\"twig.command.lint\"/>
        <argument key=\"var_dumper.command.server_dump\" type=\"service\" id=\"var_dumper.command.server_dump\"/>
        <argument key=\"web_server.command.server_log\" type=\"service\" id=\"web_server.command.server_log\"/>
        <argument key=\"web_server.command.server_run\" type=\"service\" id=\"web_server.command.server_run\"/>
        <argument key=\"web_server.command.server_start\" type=\"service\" id=\"web_server.command.server_start\"/>
        <argument key=\"web_server.command.server_status\" type=\"service\" id=\"web_server.command.server_status\"/>
        <argument key=\"web_server.command.server_stop\" type=\"service\" id=\"web_server.command.server_stop\"/>
      </argument>
    </service>
    <service id=\"cache.app.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" public=\"false\">
      <argument>mf6+F+Ruz7</argument>
      <argument>0</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.system.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>1uUysY6Dx5</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.validator.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>CIvz3VzgQ8</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.serializer.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>5KFRL44rmy</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.annotations.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>+NAqFLA1FH</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.property_info.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>JJL9bxI6V3</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.messenger.restart_workers_signal.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" public=\"false\">
      <argument>aSn-DjvS3p</argument>
      <argument>0</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.security_expression_language.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>vu+tzd5smL</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\".service_locator.uxa.tru\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime\" type=\"service\" id=\"twig.runtime.security_csrf\"/>
        <argument key=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime\" type=\"service\" id=\"twig.runtime.httpkernel\"/>
        <argument key=\"Symfony\\Component\\Form\\FormRenderer\" type=\"service\" id=\"twig.form.renderer\"/>
      </argument>
    </service>
    <service id=\"Psr\\Container\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface\" alias=\"parameter_bag\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface\" alias=\"parameter_bag\" public=\"false\"/>
    <service id=\"Symfony\\Component\\EventDispatcher\\EventDispatcherInterface\" alias=\"debug.event_dispatcher\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface\" alias=\"debug.event_dispatcher\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\HttpKernelInterface\" alias=\"http_kernel\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\RequestStack\" alias=\"request_stack\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\UrlHelper\" alias=\"url_helper\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\KernelInterface\" alias=\"kernel\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Filesystem\\Filesystem\" alias=\"filesystem\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\" alias=\"file_locator\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\" alias=\"reverse_container\" public=\"false\"/>
    <service id=\"Psr\\Container\\ContainerInterface \$parameterBag\" alias=\"parameter_bag\"/>
    <service id=\"cache.app_clearer\" alias=\"cache.default_clearer\" public=\"true\"/>
    <service id=\"Psr\\Cache\\CacheItemPoolInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Psr\\SimpleCache\\CacheInterface\" alias=\"cache.app.simple\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\Cache\\CacheInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\Cache\\TagAwareCacheInterface\" alias=\"cache.app.taggable\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Translation\\TranslatorInterface\" alias=\"translator.data_collector\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\Translation\\TranslatorInterface\" alias=\"translator.data_collector\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\SessionInterface\" alias=\"session\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface\" alias=\"session.storage.native\" public=\"false\"/>
    <service id=\"SessionHandlerInterface\" alias=\"session.handler\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface\" alias=\"session.flash_bag\" public=\"false\"/>
    <service id=\"session.storage.filesystem\" alias=\"session.storage.mock_file\" public=\"false\"/>
    <service id=\"session.storage\" alias=\"session.storage.native\"/>
    <service id=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface\" alias=\"security.csrf.token_generator\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface\" alias=\"security.csrf.token_storage\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface\" alias=\"security.csrf.token_manager\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface\" alias=\"form.resolved_type_factory\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Form\\FormRegistryInterface\" alias=\"form.registry\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Form\\FormFactoryInterface\" alias=\"form.factory\" public=\"false\"/>
    <service id=\"form.property_accessor\" alias=\"property_accessor\" public=\"false\"/>
    <service id=\"form.choice_list_factory\" alias=\"form.choice_list_factory.cached\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Asset\\Packages\" alias=\"assets.packages\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Validator\\Validator\\ValidatorInterface\" alias=\"debug.validator\" public=\"false\"/>
    <service id=\"validator.mapping.class_metadata_factory\" alias=\"debug.validator\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface\" alias=\"translation.reader\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Translation\\Extractor\\ExtractorInterface\" alias=\"translation.extractor\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface\" alias=\"translation.writer\" public=\"false\"/>
    <service id=\"translator\" alias=\"translator.data_collector\" public=\"true\"/>
    <service id=\"translator.formatter\" alias=\"translator.formatter.default\" public=\"false\"/>
    <service id=\"cache.default_redis_provider\" alias=\".cache_connection.GD_MSZC\" public=\"false\"/>
    <service id=\"cache.default_memcached_provider\" alias=\".cache_connection.JKE6keX\" public=\"false\"/>
    <service id=\"cache.default_pdo_provider\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" alias=\"debug.file_link_formatter\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Stopwatch\\Stopwatch\" alias=\"debug.stopwatch\" public=\"false\"/>
    <service id=\"router\" alias=\"router.default\" public=\"true\"/>
    <service id=\"Symfony\\Component\\Routing\\RouterInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\RequestContextAwareInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\RequestContext\" alias=\"router.request_context\" public=\"false\"/>
    <service id=\"annotation_reader\" alias=\"annotations.cached_reader\"/>
    <service id=\"Doctrine\\Common\\Annotations\\Reader\" alias=\"annotations.cached_reader\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface\" alias=\"property_accessor\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\SerializerInterface\" alias=\"serializer\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface\" alias=\"serializer\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface\" alias=\"serializer\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Encoder\\EncoderInterface\" alias=\"serializer\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Encoder\\DecoderInterface\" alias=\"serializer\" public=\"false\"/>
    <service id=\"serializer.property_accessor\" alias=\"property_accessor\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface\" alias=\"serializer.mapping.class_discriminator_resolver\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer\" alias=\"serializer.normalizer.object\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface\" alias=\"serializer.mapping.class_metadata_factory\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\HttpClient\\HttpClientInterface\" alias=\"http_client\"/>
    <service id=\"sensio_framework_extra.converter.doctrine.orm.expression_language\" alias=\"sensio_framework_extra.converter.doctrine.orm.expression_language.default\" public=\"false\"/>
    <service id=\"sensio_framework_extra.security.expression_language\" alias=\"sensio_framework_extra.security.expression_language.default\" public=\"false\"/>
    <service id=\"Doctrine\\DBAL\\Driver\\Connection\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Doctrine\\DBAL\\Connection\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Doctrine\\Common\\Persistence\\ManagerRegistry\" alias=\"doctrine\" public=\"false\"/>
    <service id=\"Symfony\\Bridge\\Doctrine\\RegistryInterface\" alias=\"doctrine\" public=\"false\"/>
    <service id=\"database_connection\" alias=\"doctrine.dbal.default_connection\" public=\"true\"/>
    <service id=\"doctrine.dbal.event_manager\" alias=\"doctrine.dbal.default_connection.event_manager\" public=\"false\"/>
    <service id=\"Doctrine\\Common\\Persistence\\ObjectManager\" alias=\"doctrine.orm.default_entity_manager\" public=\"false\"/>
    <service id=\"Doctrine\\ORM\\EntityManagerInterface\" alias=\"doctrine.orm.default_entity_manager\" public=\"false\"/>
    <service id=\"doctrine.orm.metadata.annotation_reader\" alias=\"annotations.cached_reader\" public=\"false\"/>
    <service id=\"doctrine.orm.entity_manager\" alias=\"doctrine.orm.default_entity_manager\" public=\"true\"/>
    <service id=\"doctrine.orm.default_metadata_cache\" alias=\"doctrine_cache.providers.doctrine.orm.default_metadata_cache\" public=\"true\"/>
    <service id=\"doctrine.orm.default_result_cache\" alias=\"doctrine_cache.providers.doctrine.orm.default_result_cache\" public=\"true\"/>
    <service id=\"doctrine.orm.default_query_cache\" alias=\"doctrine_cache.providers.doctrine.orm.default_query_cache\" public=\"true\"/>
    <service id=\"doctrine.orm.default_entity_manager.event_manager\" alias=\"doctrine.dbal.default_connection.event_manager\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface\" alias=\"security.authorization_checker\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface\" alias=\"security.token_storage\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Security\" alias=\"security.helper\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface\" alias=\"security.authentication.manager\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface\" alias=\"security.authentication.session_strategy\" public=\"false\"/>
    <service id=\"security.encoder_factory\" alias=\"security.encoder_factory.generic\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface\" alias=\"security.encoder_factory.generic\" public=\"false\"/>
    <service id=\"security.password_encoder\" alias=\"security.user_password_encoder.generic\" public=\"true\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface\" alias=\"security.user_password_encoder.generic\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils\" alias=\"security.authentication_utils\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface\" alias=\"debug.security.access.decision_manager\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface\" alias=\"security.role_hierarchy\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Http\\Firewall\" alias=\"debug.security.firewall\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Http\\HttpUtils\" alias=\"security.http_utils\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler\" alias=\"security.authentication.guard_handler\" public=\"false\"/>
    <service id=\"security.firewall\" alias=\"debug.security.firewall\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\User\\UserProviderInterface\" alias=\"security.user.provider.concrete.our_db_provider\"/>
    <service id=\"security.authentication.session_strategy.main\" alias=\"security.authentication.session_strategy\"/>
    <service id=\"security.user_checker.main\" alias=\"security.user_checker\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface\" alias=\"security.user_checker\" public=\"false\"/>
    <service id=\"swiftmailer.mailer.default.transport\" alias=\"swiftmailer.mailer.default.transport.spool\"/>
    <service id=\"swiftmailer.mailer.default.spool\" alias=\"swiftmailer.mailer.default.spool.memory\"/>
    <service id=\"swiftmailer.mailer.default.transport.real\" alias=\"swiftmailer.mailer.default.transport.dynamic\" public=\"true\"/>
    <service id=\"swiftmailer.spool\" alias=\"swiftmailer.mailer.default.spool.memory\"/>
    <service id=\"swiftmailer.transport.real\" alias=\"swiftmailer.mailer.default.transport.dynamic\"/>
    <service id=\"Swift_Spool\" alias=\"swiftmailer.mailer.default.spool.memory\" public=\"false\"/>
    <service id=\"swiftmailer.plugin.messagelogger\" alias=\"swiftmailer.mailer.default.plugin.messagelogger\"/>
    <service id=\"swiftmailer.mailer\" alias=\"swiftmailer.mailer.default\"/>
    <service id=\"swiftmailer.transport\" alias=\"swiftmailer.mailer.default.transport.spool\" public=\"true\"/>
    <service id=\"Swift_Mailer\" alias=\"swiftmailer.mailer.default\" public=\"false\"/>
    <service id=\"Swift_Transport\" alias=\"swiftmailer.mailer.default.transport.spool\" public=\"false\"/>
    <service id=\"mailer\" alias=\"swiftmailer.mailer.default\" public=\"true\"/>
    <service id=\"Twig_Environment\" alias=\"twig\" public=\"false\"/>
    <service id=\"Twig\\Environment\" alias=\"twig\" public=\"false\"/>
    <service id=\"logger\" alias=\"monolog.logger\"/>
    <service id=\"Psr\\Log\\LoggerInterface\" alias=\"monolog.logger\" public=\"false\"/>
    <service id=\"argument_resolver.controller_locator\" alias=\".service_locator._LtMy3o\"/>
    <service id=\"twig.loader.filesystem\" alias=\"twig.loader.native_filesystem\" public=\"false\"/>
    <service id=\"twig.loader\" alias=\"twig.loader.native_filesystem\"/>
    <service id=\"validator\" alias=\"debug.validator\" public=\"true\"/>
    <service id=\"translator.data_collector.inner\" alias=\"translator.default\" public=\"false\"/>
    <service id=\"event_dispatcher\" alias=\"debug.event_dispatcher\" public=\"true\"/>
    <service id=\"controller_resolver\" alias=\"debug.controller_resolver\" public=\"false\"/>
    <service id=\"argument_resolver\" alias=\"debug.argument_resolver\" public=\"false\"/>
    <service id=\"security.access.decision_manager\" alias=\"debug.security.access.decision_manager\" public=\"false\"/>
    <service id=\"argument_resolver.request_attribute\" alias=\"debug.argument_resolver.request_attribute\" public=\"false\"/>
    <service id=\"argument_resolver.request\" alias=\"debug.argument_resolver.request\" public=\"false\"/>
    <service id=\"argument_resolver.session\" alias=\"debug.argument_resolver.session\" public=\"false\"/>
    <service id=\"security.user_value_resolver\" alias=\"debug.security.user_value_resolver\" public=\"false\"/>
    <service id=\"argument_resolver.service\" alias=\"debug.argument_resolver.service\" public=\"false\"/>
    <service id=\"argument_resolver.default\" alias=\"debug.argument_resolver.default\" public=\"false\"/>
    <service id=\"argument_resolver.variadic\" alias=\"debug.argument_resolver.variadic\" public=\"false\"/>
    <service id=\"argument_resolver.not_tagged_controller\" alias=\"debug.argument_resolver.not_tagged_controller\" public=\"false\"/>
    <service id=\".service_locator.VdFTLMb\" alias=\".service_locator.LtnrEkg\" public=\"false\"/>
    <service id=\"console.command.public_alias.doctrine_cache.contains_command\" alias=\"doctrine_cache.contains_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_cache.delete_command\" alias=\"doctrine_cache.delete_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_cache.flush_command\" alias=\"doctrine_cache.flush_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_cache.stats_command\" alias=\"doctrine_cache.stats_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.diff_command\" alias=\"doctrine_migrations.diff_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.dump_schema_command\" alias=\"doctrine_migrations.dump_schema_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.execute_command\" alias=\"doctrine_migrations.execute_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.generate_command\" alias=\"doctrine_migrations.generate_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.latest_command\" alias=\"doctrine_migrations.latest_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.migrate_command\" alias=\"doctrine_migrations.migrate_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.rollup_command\" alias=\"doctrine_migrations.rollup_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.status_command\" alias=\"doctrine_migrations.status_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.up_to_date_command\" alias=\"doctrine_migrations.up_to_date_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.version_command\" alias=\"doctrine_migrations.version_command\" public=\"true\"/>
  </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/srcApp_KernelDevDebugContainer.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<container xmlns=\"http://symfony.com/schema/dic/services\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <parameters>
    <parameter key=\"kernel.root_dir\">/var/www/public/DevLaon/src</parameter>
    <parameter key=\"kernel.project_dir\">/var/www/public/DevLaon</parameter>
    <parameter key=\"kernel.environment\">dev</parameter>
    <parameter key=\"kernel.debug\">true</parameter>
    <parameter key=\"kernel.name\">src</parameter>
    <parameter key=\"kernel.cache_dir\">/var/www/public/DevLaon/var/cache/dev</parameter>
    <parameter key=\"kernel.logs_dir\">/var/www/public/DevLaon/var/log</parameter>
    <parameter key=\"kernel.bundles\" type=\"collection\">
      <parameter key=\"FrameworkBundle\">Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle</parameter>
      <parameter key=\"SensioFrameworkExtraBundle\">Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle</parameter>
      <parameter key=\"DoctrineCacheBundle\">Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle</parameter>
      <parameter key=\"DoctrineBundle\">Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle</parameter>
      <parameter key=\"DoctrineMigrationsBundle\">Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle</parameter>
      <parameter key=\"SecurityBundle\">Symfony\\Bundle\\SecurityBundle\\SecurityBundle</parameter>
      <parameter key=\"SwiftmailerBundle\">Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle</parameter>
      <parameter key=\"TwigBundle\">Symfony\\Bundle\\TwigBundle\\TwigBundle</parameter>
      <parameter key=\"WebProfilerBundle\">Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle</parameter>
      <parameter key=\"MonologBundle\">Symfony\\Bundle\\MonologBundle\\MonologBundle</parameter>
      <parameter key=\"DebugBundle\">Symfony\\Bundle\\DebugBundle\\DebugBundle</parameter>
      <parameter key=\"MakerBundle\">Symfony\\Bundle\\MakerBundle\\MakerBundle</parameter>
      <parameter key=\"WebServerBundle\">Symfony\\Bundle\\WebServerBundle\\WebServerBundle</parameter>
      <parameter key=\"DoctrineFixturesBundle\">Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle</parameter>
    </parameter>
    <parameter key=\"kernel.bundles_metadata\" type=\"collection\">
      <parameter key=\"FrameworkBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/framework-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\FrameworkBundle</parameter>
      </parameter>
      <parameter key=\"SensioFrameworkExtraBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/sensio/framework-extra-bundle/src</parameter>
        <parameter key=\"namespace\">Sensio\\Bundle\\FrameworkExtraBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineCacheBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/doctrine/doctrine-cache-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\DoctrineCacheBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/doctrine/doctrine-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\DoctrineBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineMigrationsBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/doctrine/doctrine-migrations-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\MigrationsBundle</parameter>
      </parameter>
      <parameter key=\"SecurityBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/security-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\SecurityBundle</parameter>
      </parameter>
      <parameter key=\"SwiftmailerBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/swiftmailer-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\SwiftmailerBundle</parameter>
      </parameter>
      <parameter key=\"TwigBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/twig-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\TwigBundle</parameter>
      </parameter>
      <parameter key=\"WebProfilerBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\WebProfilerBundle</parameter>
      </parameter>
      <parameter key=\"MonologBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/monolog-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\MonologBundle</parameter>
      </parameter>
      <parameter key=\"DebugBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/debug-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\DebugBundle</parameter>
      </parameter>
      <parameter key=\"MakerBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/maker-bundle/src</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\MakerBundle</parameter>
      </parameter>
      <parameter key=\"WebServerBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/symfony/web-server-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\WebServerBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineFixturesBundle\" type=\"collection\">
        <parameter key=\"path\">/var/www/public/DevLaon/vendor/doctrine/doctrine-fixtures-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\FixturesBundle</parameter>
      </parameter>
    </parameter>
    <parameter key=\"kernel.charset\">UTF-8</parameter>
    <parameter key=\"kernel.container_class\">srcApp_KernelDevDebugContainer</parameter>
    <parameter key=\"container.dumper.inline_class_loader\">true</parameter>
    <parameter key=\"fragment.renderer.hinclude.global_template\"></parameter>
    <parameter key=\"fragment.path\">/_fragment</parameter>
    <parameter key=\"kernel.secret\">%env(APP_SECRET)%</parameter>
    <parameter key=\"kernel.http_method_override\">true</parameter>
    <parameter key=\"kernel.trusted_hosts\" type=\"collection\"/>
    <parameter key=\"kernel.default_locale\">en</parameter>
    <parameter key=\"templating.helper.code.file_link_format\">null</parameter>
    <parameter key=\"debug.file_link_format\">null</parameter>
    <parameter key=\"session.metadata.storage_key\">_sf2_meta</parameter>
    <parameter key=\"session.storage.options\" type=\"collection\">
      <parameter key=\"cache_limiter\">0</parameter>
      <parameter key=\"cookie_secure\">auto</parameter>
      <parameter key=\"cookie_httponly\">true</parameter>
      <parameter key=\"cookie_samesite\">lax</parameter>
      <parameter key=\"gc_probability\">1</parameter>
    </parameter>
    <parameter key=\"session.save_path\">/var/www/public/DevLaon/var/cache/dev/sessions</parameter>
    <parameter key=\"session.metadata.update_threshold\">0</parameter>
    <parameter key=\"form.type_extension.csrf.enabled\">true</parameter>
    <parameter key=\"form.type_extension.csrf.field_name\">_token</parameter>
    <parameter key=\"asset.request_context.base_path\"></parameter>
    <parameter key=\"asset.request_context.secure\">false</parameter>
    <parameter key=\"validator.mapping.cache.prefix\"></parameter>
    <parameter key=\"validator.mapping.cache.file\">/var/www/public/DevLaon/var/cache/dev/validation.php</parameter>
    <parameter key=\"validator.translation_domain\">validators</parameter>
    <parameter key=\"translator.logging\">false</parameter>
    <parameter key=\"translator.default_path\">/var/www/public/DevLaon/translations</parameter>
    <parameter key=\"profiler_listener.only_exceptions\">false</parameter>
    <parameter key=\"profiler_listener.only_master_requests\">false</parameter>
    <parameter key=\"profiler.storage.dsn\">file:/var/www/public/DevLaon/var/cache/dev/profiler</parameter>
    <parameter key=\"debug.error_handler.throw_at\">-1</parameter>
    <parameter key=\"debug.container.dump\">/var/www/public/DevLaon/var/cache/dev/srcApp_KernelDevDebugContainer.xml</parameter>
    <parameter key=\"router.request_context.host\">localhost</parameter>
    <parameter key=\"router.request_context.scheme\">http</parameter>
    <parameter key=\"router.request_context.base_url\"></parameter>
    <parameter key=\"router.resource\">kernel::loadRoutes</parameter>
    <parameter key=\"router.cache_class_prefix\">srcApp_KernelDevDebugContainer</parameter>
    <parameter key=\"request_listener.http_port\">80</parameter>
    <parameter key=\"request_listener.https_port\">443</parameter>
    <parameter key=\"serializer.mapping.cache.file\">/var/www/public/DevLaon/var/cache/dev/serialization.php</parameter>
    <parameter key=\"serializer.mapping.cache.prefix\"></parameter>
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
    <parameter key=\"doctrine.dbal.logger.chain.class\">Doctrine\\DBAL\\Logging\\LoggerChain</parameter>
    <parameter key=\"doctrine.dbal.logger.profiling.class\">Doctrine\\DBAL\\Logging\\DebugStack</parameter>
    <parameter key=\"doctrine.dbal.logger.class\">Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger</parameter>
    <parameter key=\"doctrine.dbal.configuration.class\">Doctrine\\DBAL\\Configuration</parameter>
    <parameter key=\"doctrine.data_collector.class\">Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector</parameter>
    <parameter key=\"doctrine.dbal.connection.event_manager.class\">Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager</parameter>
    <parameter key=\"doctrine.dbal.connection_factory.class\">Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory</parameter>
    <parameter key=\"doctrine.dbal.events.mysql_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit</parameter>
    <parameter key=\"doctrine.dbal.events.oracle_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit</parameter>
    <parameter key=\"doctrine.class\">Doctrine\\Bundle\\DoctrineBundle\\Registry</parameter>
    <parameter key=\"doctrine.entity_managers\" type=\"collection\">
      <parameter key=\"default\">doctrine.orm.default_entity_manager</parameter>
    </parameter>
    <parameter key=\"doctrine.default_entity_manager\">default</parameter>
    <parameter key=\"doctrine.dbal.connection_factory.types\" type=\"collection\"/>
    <parameter key=\"doctrine.connections\" type=\"collection\">
      <parameter key=\"default\">doctrine.dbal.default_connection</parameter>
    </parameter>
    <parameter key=\"doctrine.default_connection\">default</parameter>
    <parameter key=\"doctrine.orm.configuration.class\">Doctrine\\ORM\\Configuration</parameter>
    <parameter key=\"doctrine.orm.entity_manager.class\">Doctrine\\ORM\\EntityManager</parameter>
    <parameter key=\"doctrine.orm.manager_configurator.class\">Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator</parameter>
    <parameter key=\"doctrine.orm.cache.array.class\">Doctrine\\Common\\Cache\\ArrayCache</parameter>
    <parameter key=\"doctrine.orm.cache.apc.class\">Doctrine\\Common\\Cache\\ApcCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcache.class\">Doctrine\\Common\\Cache\\MemcacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_port\">11211</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_instance.class\">Memcache</parameter>
    <parameter key=\"doctrine.orm.cache.memcached.class\">Doctrine\\Common\\Cache\\MemcachedCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_port\">11211</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_instance.class\">Memcached</parameter>
    <parameter key=\"doctrine.orm.cache.redis.class\">Doctrine\\Common\\Cache\\RedisCache</parameter>
    <parameter key=\"doctrine.orm.cache.redis_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.redis_port\">6379</parameter>
    <parameter key=\"doctrine.orm.cache.redis_instance.class\">Redis</parameter>
    <parameter key=\"doctrine.orm.cache.xcache.class\">Doctrine\\Common\\Cache\\XcacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.wincache.class\">Doctrine\\Common\\Cache\\WinCacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.zenddata.class\">Doctrine\\Common\\Cache\\ZendDataCache</parameter>
    <parameter key=\"doctrine.orm.metadata.driver_chain.class\">Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain</parameter>
    <parameter key=\"doctrine.orm.metadata.annotation.class\">Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.xml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.yml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.php.class\">Doctrine\\ORM\\Mapping\\Driver\\PHPDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.staticphp.class\">Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver</parameter>
    <parameter key=\"doctrine.orm.proxy_cache_warmer.class\">Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer</parameter>
    <parameter key=\"form.type_guesser.doctrine.class\">Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser</parameter>
    <parameter key=\"doctrine.orm.validator.unique.class\">Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator</parameter>
    <parameter key=\"doctrine.orm.validator_initializer.class\">Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer</parameter>
    <parameter key=\"doctrine.orm.security.user.provider.class\">Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider</parameter>
    <parameter key=\"doctrine.orm.listeners.resolve_target_entity.class\">Doctrine\\ORM\\Tools\\ResolveTargetEntityListener</parameter>
    <parameter key=\"doctrine.orm.listeners.attach_entity_listeners.class\">Doctrine\\ORM\\Tools\\AttachEntityListenersListener</parameter>
    <parameter key=\"doctrine.orm.naming_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultNamingStrategy</parameter>
    <parameter key=\"doctrine.orm.naming_strategy.underscore.class\">Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy</parameter>
    <parameter key=\"doctrine.orm.quote_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy</parameter>
    <parameter key=\"doctrine.orm.quote_strategy.ansi.class\">Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy</parameter>
    <parameter key=\"doctrine.orm.entity_listener_resolver.class\">Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.default_cache_factory.class\">Doctrine\\ORM\\Cache\\DefaultCacheFactory</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.default_region.class\">Doctrine\\ORM\\Cache\\Region\\DefaultRegion</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.filelock_region.class\">Doctrine\\ORM\\Cache\\Region\\FileLockRegion</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.logger_chain.class\">Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.logger_statistics.class\">Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.cache_configuration.class\">Doctrine\\ORM\\Cache\\CacheConfiguration</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.regions_configuration.class\">Doctrine\\ORM\\Cache\\RegionsConfiguration</parameter>
    <parameter key=\"doctrine.orm.auto_generate_proxy_classes\">true</parameter>
    <parameter key=\"doctrine.orm.proxy_dir\">/var/www/public/DevLaon/var/cache/dev/doctrine/orm/Proxies</parameter>
    <parameter key=\"doctrine.orm.proxy_namespace\">Proxies</parameter>
    <parameter key=\"doctrine_migrations.dir_name\">/var/www/public/DevLaon/src/Migrations</parameter>
    <parameter key=\"doctrine_migrations.namespace\">DoctrineMigrations</parameter>
    <parameter key=\"doctrine_migrations.table_name\">migration_versions</parameter>
    <parameter key=\"doctrine_migrations.column_name\">version</parameter>
    <parameter key=\"doctrine_migrations.column_length\">14</parameter>
    <parameter key=\"doctrine_migrations.executed_at_column_name\">executed_at</parameter>
    <parameter key=\"doctrine_migrations.all_or_nothing\">false</parameter>
    <parameter key=\"doctrine_migrations.name\">Application Migrations</parameter>
    <parameter key=\"doctrine_migrations.custom_template\">null</parameter>
    <parameter key=\"doctrine_migrations.organize_migrations\">false</parameter>
    <parameter key=\"security.authentication.trust_resolver.anonymous_class\">null</parameter>
    <parameter key=\"security.authentication.trust_resolver.rememberme_class\">null</parameter>
    <parameter key=\"security.role_hierarchy.roles\" type=\"collection\">
      <parameter key=\"ROLE_ADMIN\" type=\"collection\">
        <parameter>ROLE_USER</parameter>
      </parameter>
    </parameter>
    <parameter key=\"security.access.denied_url\">null</parameter>
    <parameter key=\"security.authentication.manager.erase_credentials\">true</parameter>
    <parameter key=\"security.authentication.session_strategy.strategy\">migrate</parameter>
    <parameter key=\"security.access.always_authenticate_before_granting\">false</parameter>
    <parameter key=\"security.authentication.hide_user_not_found\">true</parameter>
    <parameter key=\"swiftmailer.mailer.default.transport.name\">dynamic</parameter>
    <parameter key=\"swiftmailer.spool.default.memory.path\">/var/www/public/DevLaon/var/cache/dev/swiftmailer/spool/default</parameter>
    <parameter key=\"swiftmailer.mailer.default.spool.enabled\">true</parameter>
    <parameter key=\"swiftmailer.mailer.default.plugin.impersonate\">null</parameter>
    <parameter key=\"swiftmailer.mailer.default.single_address\">null</parameter>
    <parameter key=\"swiftmailer.mailer.default.delivery.enabled\">true</parameter>
    <parameter key=\"swiftmailer.spool.enabled\">true</parameter>
    <parameter key=\"swiftmailer.delivery.enabled\">true</parameter>
    <parameter key=\"swiftmailer.single_address\">null</parameter>
    <parameter key=\"swiftmailer.mailers\" type=\"collection\">
      <parameter key=\"default\">swiftmailer.mailer.default</parameter>
    </parameter>
    <parameter key=\"swiftmailer.default_mailer\">default</parameter>
    <parameter key=\"twig.exception_listener.controller\">twig.controller.exception::showAction</parameter>
    <parameter key=\"twig.form.resources\" type=\"collection\">
      <parameter>form_div_layout.html.twig</parameter>
    </parameter>
    <parameter key=\"twig.default_path\">/var/www/public/DevLaon/templates</parameter>
    <parameter key=\"web_profiler.debug_toolbar.intercept_redirects\">false</parameter>
    <parameter key=\"web_profiler.debug_toolbar.mode\">2</parameter>
    <parameter key=\"monolog.use_microseconds\">true</parameter>
    <parameter key=\"monolog.swift_mailer.handlers\" type=\"collection\"/>
    <parameter key=\"monolog.handlers_to_channels\" type=\"collection\">
      <parameter key=\"monolog.handler.console\" type=\"collection\">
        <parameter key=\"type\">exclusive</parameter>
        <parameter key=\"elements\" type=\"collection\">
          <parameter>event</parameter>
          <parameter>doctrine</parameter>
          <parameter>console</parameter>
        </parameter>
      </parameter>
      <parameter key=\"monolog.handler.main\" type=\"collection\">
        <parameter key=\"type\">exclusive</parameter>
        <parameter key=\"elements\" type=\"collection\">
          <parameter>event</parameter>
        </parameter>
      </parameter>
    </parameter>
    <parameter key=\"env(VAR_DUMPER_SERVER)\">127.0.0.1:9912</parameter>
    <parameter key=\"data_collector.templates\" type=\"collection\">
      <parameter key=\"data_collector.request\" type=\"collection\">
        <parameter>request</parameter>
        <parameter>@WebProfiler/Collector/request.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.time\" type=\"collection\">
        <parameter>time</parameter>
        <parameter>@WebProfiler/Collector/time.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.memory\" type=\"collection\">
        <parameter>memory</parameter>
        <parameter>@WebProfiler/Collector/memory.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.validator\" type=\"collection\">
        <parameter>validator</parameter>
        <parameter>@WebProfiler/Collector/validator.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.ajax\" type=\"collection\">
        <parameter>ajax</parameter>
        <parameter>@WebProfiler/Collector/ajax.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.form\" type=\"collection\">
        <parameter>form</parameter>
        <parameter>@WebProfiler/Collector/form.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.exception\" type=\"collection\">
        <parameter>exception</parameter>
        <parameter>@WebProfiler/Collector/exception.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.logger\" type=\"collection\">
        <parameter>logger</parameter>
        <parameter>@WebProfiler/Collector/logger.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.events\" type=\"collection\">
        <parameter>events</parameter>
        <parameter>@WebProfiler/Collector/events.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.router\" type=\"collection\">
        <parameter>router</parameter>
        <parameter>@WebProfiler/Collector/router.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.cache\" type=\"collection\">
        <parameter>cache</parameter>
        <parameter>@WebProfiler/Collector/cache.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.translation\" type=\"collection\">
        <parameter>translation</parameter>
        <parameter>@WebProfiler/Collector/translation.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.security\" type=\"collection\">
        <parameter>security</parameter>
        <parameter>@Security/Collector/security.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.twig\" type=\"collection\">
        <parameter>twig</parameter>
        <parameter>@WebProfiler/Collector/twig.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.doctrine\" type=\"collection\">
        <parameter>db</parameter>
        <parameter>@Doctrine/Collector/db.html.twig</parameter>
      </parameter>
      <parameter key=\"swiftmailer.data_collector\" type=\"collection\">
        <parameter>swiftmailer</parameter>
        <parameter>@Swiftmailer/Collector/swiftmailer.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.dump\" type=\"collection\">
        <parameter>dump</parameter>
        <parameter>@Debug/Profiler/dump.html.twig</parameter>
      </parameter>
      <parameter key=\"data_collector.config\" type=\"collection\">
        <parameter>config</parameter>
        <parameter>@WebProfiler/Collector/config.html.twig</parameter>
      </parameter>
    </parameter>
    <parameter key=\"console.command.ids\" type=\"collection\">
      <parameter>console.command.public_alias.doctrine_cache.contains_command</parameter>
      <parameter>console.command.public_alias.doctrine_cache.delete_command</parameter>
      <parameter>console.command.public_alias.doctrine_cache.flush_command</parameter>
      <parameter>console.command.public_alias.doctrine_cache.stats_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.diff_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.dump_schema_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.execute_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.generate_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.latest_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.migrate_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.rollup_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.status_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.up_to_date_command</parameter>
      <parameter>console.command.public_alias.doctrine_migrations.version_command</parameter>
    </parameter>
  </parameters>
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"EasyCorp\\EasyLog\\EasyLogHandler\" class=\"EasyCorp\\EasyLog\\EasyLogHandler\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/log/dev.log</argument>
    </service>
    <service id=\"App\\Controller\\ArticleController\" class=\"App\\Controller\\ArticleController\" public=\"true\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"controller.service_arguments\"/>
      <tag name=\"container.service_subscriber\"/>
      <call method=\"setContainer\">
        <argument type=\"service\" id=\".service_locator.CDOTD6..App\\Controller\\ArticleController\"/>
      </call>
    </service>
    <service id=\"App\\Controller\\SecurityController\" class=\"App\\Controller\\SecurityController\" public=\"true\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"controller.service_arguments\"/>
      <tag name=\"container.service_subscriber\"/>
      <call method=\"setContainer\">
        <argument type=\"service\" id=\".service_locator.CDOTD6..App\\Controller\\SecurityController\"/>
      </call>
    </service>
    <service id=\"App\\DataFixtures\\AppFixtures\" class=\"App\\DataFixtures\\AppFixtures\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.fixture.orm\"/>
      <argument type=\"service\" id=\"security.user_password_encoder.generic\"/>
    </service>
    <service id=\"App\\Form\\ArticleType\" class=\"App\\Form\\ArticleType\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"form.type\"/>
    </service>
    <service id=\"App\\Form\\CommentType\" class=\"App\\Form\\CommentType\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"form.type\"/>
    </service>
    <service id=\"App\\Form\\RegistrationType\" class=\"App\\Form\\RegistrationType\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"form.type\"/>
    </service>
    <service id=\"App\\Repository\\ArticleLikeRepository\" class=\"App\\Repository\\ArticleLikeRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"App\\Repository\\ArticleRepository\" class=\"App\\Repository\\ArticleRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"App\\Repository\\CategoryRepository\" class=\"App\\Repository\\CategoryRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"App\\Repository\\CommentRepository\" class=\"App\\Repository\\CommentRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"App\\Repository\\UserRepository\" class=\"App\\Repository\\UserRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"controller_name_converter\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <argument type=\"service\" id=\"kernel\"/>
    </service>
    <service id=\"argument_metadata_factory\" class=\"Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory\" public=\"false\"/>
    <service id=\"response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument>UTF-8</argument>
    </service>
    <service id=\"streamed_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"locale_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>en</argument>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"validate_request_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"resolve_controller_name_subscriber\" class=\"Symfony\\Bundle\\FrameworkBundle\\EventListener\\ResolveControllerNameSubscriber\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"controller_name_converter\"/>
    </service>
    <service id=\"disallow_search_engine_index_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DisallowRobotsIndexingListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"parameter_bag\" class=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"http_kernel\" class=\"Symfony\\Component\\HttpKernel\\HttpKernel\" public=\"true\">
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <argument type=\"service\" id=\"debug.controller_resolver\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"debug.argument_resolver\"/>
    </service>
    <service id=\"request_stack\" class=\"Symfony\\Component\\HttpFoundation\\RequestStack\" public=\"true\"/>
    <service id=\"url_helper\" class=\"Symfony\\Component\\HttpFoundation\\UrlHelper\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"cache_warmer\" class=\"Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate\" public=\"true\">
      <argument type=\"tagged\" tag=\"kernel.cache_warmer\"/>
      <argument>true</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/srcApp_KernelDevDebugContainerDeprecations.log</argument>
    </service>
    <service id=\"cache_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer\" public=\"true\">
      <argument type=\"tagged\" tag=\"kernel.cache_clearer\"/>
    </service>
    <service id=\"kernel\" public=\"true\" synthetic=\"true\"/>
    <service id=\"filesystem\" class=\"Symfony\\Component\\Filesystem\\Filesystem\" public=\"true\"/>
    <service id=\"file_locator\" class=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\" public=\"false\">
      <argument type=\"service\" id=\"kernel\"/>
      <argument>/var/www/public/DevLaon/src/Resources</argument>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/src</argument>
      </argument>
    </service>
    <service id=\"uri_signer\" class=\"Symfony\\Component\\HttpKernel\\UriSigner\" public=\"false\">
      <argument>%env(APP_SECRET)%</argument>
    </service>
    <service id=\"config_cache_factory\" class=\"Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory\" public=\"false\">
      <argument type=\"tagged\" tag=\"config_cache.resource_checker\"/>
    </service>
    <service id=\"dependency_injection.config.container_parameters_resource_checker\" class=\"Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResourceChecker\" public=\"false\">
      <tag name=\"config_cache.resource_checker\" priority=\"-980\"/>
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"config.resource.self_checking_resource_checker\" class=\"Symfony\\Component\\Config\\Resource\\SelfCheckingResourceChecker\" public=\"false\">
      <tag name=\"config_cache.resource_checker\" priority=\"-990\"/>
    </service>
    <service id=\"services_resetter\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\ServicesResetter\" public=\"true\">
      <argument type=\"iterator\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.messenger.restart_workers_signal\" type=\"service\" id=\"cache.messenger.restart_workers_signal\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"form.choice_list_factory.cached\" type=\"service\" id=\"form.choice_list_factory.cached\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"profiler\" type=\"service\" id=\"profiler\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"debug.validator\" type=\"service\" id=\"debug.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"debug.stopwatch\" type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"debug.event_dispatcher\" type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"form.type.entity\" type=\"service\" id=\"form.type.entity\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"security.token_storage\" type=\"service\" id=\"security.token_storage\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.security_expression_language\" type=\"service\" id=\"cache.security_expression_language\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"swiftmailer.email_sender.listener\" type=\"service\" id=\"swiftmailer.email_sender.listener\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"monolog.handler.main\" type=\"service\" id=\"monolog.handler.main\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"monolog.handler.console\" type=\"service\" id=\"monolog.handler.console\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
      <argument type=\"collection\">
        <argument key=\"cache.app\">reset</argument>
        <argument key=\"cache.system\">reset</argument>
        <argument key=\"cache.validator\">reset</argument>
        <argument key=\"cache.serializer\">reset</argument>
        <argument key=\"cache.annotations\">reset</argument>
        <argument key=\"cache.property_info\">reset</argument>
        <argument key=\"cache.messenger.restart_workers_signal\">reset</argument>
        <argument key=\"form.choice_list_factory.cached\">reset</argument>
        <argument key=\"profiler\">reset</argument>
        <argument key=\"debug.validator\">reset</argument>
        <argument key=\"debug.stopwatch\">reset</argument>
        <argument key=\"debug.event_dispatcher\">reset</argument>
        <argument key=\"form.type.entity\">reset</argument>
        <argument key=\"security.token_storage\">setToken</argument>
        <argument key=\"cache.security_expression_language\">reset</argument>
        <argument key=\"swiftmailer.email_sender.listener\">reset</argument>
        <argument key=\"monolog.handler.main\">reset</argument>
        <argument key=\"monolog.handler.console\">reset</argument>
      </argument>
    </service>
    <service id=\"reverse_container\" class=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"service\" id=\".service_locator.UwRI0uT\"/>
    </service>
    <service id=\"locale_aware_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\LocaleAwareListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"translator.default\"/>
      </argument>
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"fragment.handler\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.gmwRZ3h\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>true</argument>
    </service>
    <service id=\"fragment.renderer.inline\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer\" public=\"false\">
      <tag name=\"kernel.fragment_renderer\" alias=\"inline\"/>
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <call method=\"setFragmentPath\">
        <argument>/_fragment</argument>
      </call>
    </service>
    <service id=\"console.error_listener\" class=\"Symfony\\Component\\Console\\EventListener\\ErrorListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"console\"/>
      <argument type=\"service\" id=\"monolog.logger.console\" on-invalid=\"null\"/>
    </service>
    <service id=\"console.suggest_missing_package_subscriber\" class=\"Symfony\\Bundle\\FrameworkBundle\\EventListener\\SuggestMissingPackageSubscriber\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
    </service>
    <service id=\"console.command.about\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"about\"/>
      <call method=\"setName\">
        <argument>about</argument>
      </call>
    </service>
    <service id=\"console.command.assets_install\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"assets:install\"/>
      <argument type=\"service\" id=\"filesystem\"/>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"setName\">
        <argument>assets:install</argument>
      </call>
    </service>
    <service id=\"console.command.cache_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:clear\"/>
      <argument type=\"service\" id=\"cache_clearer\"/>
      <argument type=\"service\" id=\"filesystem\"/>
      <call method=\"setName\">
        <argument>cache:clear</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:clear\"/>
      <argument type=\"service\" id=\"cache.global_clearer\"/>
      <call method=\"setName\">
        <argument>cache:pool:clear</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_prune\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:prune\"/>
      <argument type=\"iterator\"/>
      <call method=\"setName\">
        <argument>cache:pool:prune</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_delete\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:delete\"/>
      <argument type=\"service\" id=\"cache.global_clearer\"/>
      <call method=\"setName\">
        <argument>cache:pool:delete</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_list\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:list\"/>
      <argument type=\"collection\">
        <argument>cache.app</argument>
        <argument>cache.system</argument>
        <argument>cache.validator</argument>
        <argument>cache.serializer</argument>
        <argument>cache.annotations</argument>
        <argument>cache.property_info</argument>
        <argument>cache.messenger.restart_workers_signal</argument>
        <argument>cache.security_expression_language</argument>
      </argument>
      <call method=\"setName\">
        <argument>cache:pool:list</argument>
      </call>
    </service>
    <service id=\"console.command.cache_warmup\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:warmup\"/>
      <argument type=\"service\" id=\"cache_warmer\"/>
      <call method=\"setName\">
        <argument>cache:warmup</argument>
      </call>
    </service>
    <service id=\"console.command.config_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:config\"/>
      <call method=\"setName\">
        <argument>debug:config</argument>
      </call>
    </service>
    <service id=\"console.command.config_dump_reference\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"config:dump-reference\"/>
      <call method=\"setName\">
        <argument>config:dump-reference</argument>
      </call>
    </service>
    <service id=\"console.command.container_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:container\"/>
      <call method=\"setName\">
        <argument>debug:container</argument>
      </call>
    </service>
    <service id=\"console.command.debug_autowiring\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:autowiring\"/>
      <argument>null</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:autowiring</argument>
      </call>
    </service>
    <service id=\"console.command.event_dispatcher_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:event-dispatcher\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <call method=\"setName\">
        <argument>debug:event-dispatcher</argument>
      </call>
    </service>
    <service id=\"console.command.router_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:router\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:router</argument>
      </call>
    </service>
    <service id=\"console.command.router_match\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"router:match\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <call method=\"setName\">
        <argument>router:match</argument>
      </call>
    </service>
    <service id=\"console.command.translation_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:translation\"/>
      <argument type=\"service\" id=\"translator.data_collector\"/>
      <argument type=\"service\" id=\"translation.reader\"/>
      <argument type=\"service\" id=\"translation.extractor\"/>
      <argument>/var/www/public/DevLaon/translations</argument>
      <argument>/var/www/public/DevLaon/templates</argument>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations</argument>
        <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations</argument>
        <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations</argument>
      </argument>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/vendor/symfony/twig-bridge/Resources/views/Form</argument>
      </argument>
      <call method=\"setName\">
        <argument>debug:translation</argument>
      </call>
    </service>
    <service id=\"console.command.translation_update\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"translation:update\"/>
      <argument type=\"service\" id=\"translation.writer\"/>
      <argument type=\"service\" id=\"translation.reader\"/>
      <argument type=\"service\" id=\"translation.extractor\"/>
      <argument>en</argument>
      <argument>/var/www/public/DevLaon/translations</argument>
      <argument>/var/www/public/DevLaon/templates</argument>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations</argument>
        <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations</argument>
        <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations</argument>
      </argument>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/vendor/symfony/twig-bridge/Resources/views/Form</argument>
      </argument>
      <call method=\"setName\">
        <argument>translation:update</argument>
      </call>
    </service>
    <service id=\"console.command.xliff_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:xliff\"/>
      <call method=\"setName\">
        <argument>lint:xliff</argument>
      </call>
    </service>
    <service id=\"console.command.yaml_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:yaml\"/>
      <call method=\"setName\">
        <argument>lint:yaml</argument>
      </call>
    </service>
    <service id=\"console.command.form_debug\" class=\"Symfony\\Component\\Form\\Command\\DebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:form\"/>
      <argument type=\"service\" id=\"form.registry\"/>
      <argument type=\"collection\">
        <argument>Symfony\\Component\\Form\\Extension\\Core\\Type</argument>
        <argument>App\\Form</argument>
        <argument>Symfony\\Bridge\\Doctrine\\Form\\Type</argument>
      </argument>
      <argument type=\"collection\">
        <argument>App\\Form\\ArticleType</argument>
        <argument>App\\Form\\CommentType</argument>
        <argument>App\\Form\\RegistrationType</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType</argument>
        <argument>Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType</argument>
      </argument>
      <argument type=\"collection\">
        <argument>Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension</argument>
        <argument>Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension</argument>
      </argument>
      <argument type=\"collection\">
        <argument>Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser</argument>
        <argument>Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser</argument>
      </argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:form</argument>
      </call>
    </service>
    <service id=\"cache.app\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"true\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.app.recorder_inner\"/>
    </service>
    <service id=\"cache.app.simple\" class=\"Symfony\\Component\\Cache\\Psr16Cache\" public=\"false\">
      <argument type=\"service\" id=\"cache.app\"/>
      <deprecated>The \"Psr\\SimpleCache\\CacheInterface\" / \"%service_id%\" service is deprecated since Symfony 4.3. Use \"Symfony\\Contracts\\Cache\\CacheInterface\" / \"cache.app\" instead.</deprecated>
    </service>
    <service id=\"cache.app.taggable\" class=\"Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter\" public=\"false\">
      <argument type=\"service\" id=\"cache.app\"/>
    </service>
    <service id=\"cache.system\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"true\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.system.recorder_inner\"/>
    </service>
    <service id=\"cache.validator\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.validator.recorder_inner\"/>
    </service>
    <service id=\"cache.serializer\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.serializer.recorder_inner\"/>
    </service>
    <service id=\"cache.annotations\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.annotations.recorder_inner\"/>
    </service>
    <service id=\"cache.property_info\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.property_info.recorder_inner\"/>
    </service>
    <service id=\"cache.messenger.restart_workers_signal\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.messenger.restart_workers_signal.recorder_inner\"/>
    </service>
    <service id=\"cache.adapter.system\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.system_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.adapter.apcu\" class=\"Symfony\\Component\\Cache\\Adapter\\ApcuAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.doctrine\" class=\"Symfony\\Component\\Cache\\Adapter\\DoctrineAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_doctrine_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.filesystem\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.psr6\" class=\"Symfony\\Component\\Cache\\Adapter\\ProxyAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_psr6_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
    </service>
    <service id=\"cache.adapter.redis\" class=\"Symfony\\Component\\Cache\\Adapter\\RedisAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_redis_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.memcached\" class=\"Symfony\\Component\\Cache\\Adapter\\MemcachedAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_memcached_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.pdo\" class=\"Symfony\\Component\\Cache\\Adapter\\PdoAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_pdo_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.array\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument>0</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.default_marshaller\" class=\"Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller\" public=\"false\">
      <argument>null</argument>
    </service>
    <service id=\"cache.default_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"false\">
      <tag name=\"cache.pool.clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.messenger.restart_workers_signal\" type=\"service\" id=\"cache.messenger.restart_workers_signal\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\"cache.system_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"true\">
      <tag name=\"cache.pool.clearer\"/>
      <tag name=\"kernel.cache_clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.security_expression_language\" type=\"service\" id=\"cache.security_expression_language\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\"cache.global_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"true\">
      <tag name=\"cache.pool.clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.messenger.restart_workers_signal\" type=\"service\" id=\"cache.messenger.restart_workers_signal\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.security_expression_language\" type=\"service\" id=\"cache.security_expression_language\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\"identity_translator\" class=\"Symfony\\Component\\Translation\\IdentityTranslator\" public=\"false\"/>
    <service id=\"translator.selector\" class=\"Symfony\\Component\\Translation\\MessageSelector\" public=\"false\">
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2, use \"identity_translator\" instead.</deprecated>
    </service>
    <service id=\".1_NativeFileSessionHandler~3b6zW6I\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/cache/dev/sessions</argument>
    </service>
    <service id=\"session\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Session\" public=\"true\">
      <argument type=\"service\" id=\"session.storage.native\"/>
      <argument type=\"service\" id=\"session.attribute_bag\"/>
      <argument type=\"service\" id=\"session.flash_bag\"/>
    </service>
    <service id=\"session.storage.metadata_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag\" public=\"false\">
      <argument>_sf2_meta</argument>
      <argument>0</argument>
    </service>
    <service id=\"session.storage.native\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage\" public=\"false\">
      <argument>%session.storage.options%</argument>
      <argument>null</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.storage.php_bridge\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage\" public=\"false\">
      <argument>null</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.flash_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag\" public=\"false\"/>
    <service id=\"session.attribute_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag\" public=\"false\"/>
    <service id=\"session.storage.mock_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/cache/dev/sessions</argument>
      <argument>MOCKSESSID</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.handler.native_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler\" public=\"false\">
      <argument type=\"service\" id=\".1_NativeFileSessionHandler~3b6zW6I\"/>
    </service>
    <service id=\"session_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\SessionListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\".service_locator.WPZmidW\"/>
    </service>
    <service id=\"session.save_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener\" public=\"false\">
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.1. Use the \"session_listener\" service instead.</deprecated>
    </service>
    <service id=\"security.csrf.token_generator\" class=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator\" public=\"false\"/>
    <service id=\"security.csrf.token_storage\" class=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage\" public=\"false\">
      <argument type=\"service\" id=\"session\"/>
    </service>
    <service id=\"security.csrf.token_manager\" class=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManager\" public=\"true\">
      <argument type=\"service\" id=\"security.csrf.token_generator\"/>
      <argument type=\"service\" id=\"security.csrf.token_storage\"/>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"twig.runtime.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime\" public=\"false\">
      <tag name=\"twig.runtime\"/>
      <argument type=\"service\" id=\"security.csrf.token_manager\"/>
    </service>
    <service id=\"twig.extension.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"form.resolved_type_factory\" class=\"Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy\" public=\"false\">
      <argument type=\"service\" id=\".1_ResolvedFormTypeFactory~O7oXE4I\"/>
      <argument type=\"service\" id=\"data_collector.form\"/>
    </service>
    <service id=\"form.registry\" class=\"Symfony\\Component\\Form\\FormRegistry\" public=\"false\">
      <argument type=\"collection\">
        <argument type=\"service\" id=\"form.extension\"/>
      </argument>
      <argument type=\"service\" id=\"form.resolved_type_factory\"/>
    </service>
    <service id=\"form.factory\" class=\"Symfony\\Component\\Form\\FormFactory\" public=\"true\">
      <argument type=\"service\" id=\"form.registry\"/>
    </service>
    <service id=\"form.extension\" class=\"Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.cbc17Dc\"/>
      <argument type=\"collection\">
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" type=\"iterator\">
          <argument type=\"service\" id=\"form.type_extension.form.transformation_failure_handling\"/>
          <argument type=\"service\" id=\"form.type_extension.form.http_foundation\"/>
          <argument type=\"service\" id=\"form.type_extension.form.validator\"/>
          <argument type=\"service\" id=\"form.type_extension.upload.validator\"/>
          <argument type=\"service\" id=\"form.type_extension.csrf\"/>
          <argument type=\"service\" id=\"form.type_extension.form.data_collector\"/>
        </argument>
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType\" type=\"iterator\">
          <argument type=\"service\" id=\"form.type_extension.repeated.validator\"/>
        </argument>
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType\" type=\"iterator\">
          <argument type=\"service\" id=\"form.type_extension.submit.validator\"/>
        </argument>
      </argument>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"form.type_guesser.validator\"/>
        <argument type=\"service\" id=\"form.type_guesser.doctrine\"/>
      </argument>
    </service>
    <service id=\"form.type_guesser.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser\" public=\"false\">
      <tag name=\"form.type_guesser\"/>
      <argument type=\"service\" id=\"debug.validator\"/>
    </service>
    <service id=\"form.choice_list_factory.default\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\DefaultChoiceListFactory\" public=\"false\"/>
    <service id=\"form.choice_list_factory.property_access\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\PropertyAccessDecorator\" public=\"false\">
      <argument type=\"service\" id=\"form.choice_list_factory.default\"/>
      <argument type=\"service\" id=\"property_accessor\"/>
    </service>
    <service id=\"form.choice_list_factory.cached\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\CachingFactoryDecorator\" public=\"false\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"form.choice_list_factory.property_access\"/>
    </service>
    <service id=\"form.type.form\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" public=\"false\">
      <tag name=\"form.type\"/>
      <argument type=\"service\" id=\"property_accessor\"/>
    </service>
    <service id=\"form.type.choice\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType\" public=\"false\">
      <tag name=\"form.type\"/>
      <argument type=\"service\" id=\"form.choice_list_factory.cached\"/>
    </service>
    <service id=\"form.type.file\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType\" public=\"true\">
      <tag name=\"form.type\"/>
      <argument type=\"service\" id=\"translator.data_collector\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"form.type_extension.form.transformation_failure_handling\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension\" public=\"false\">
      <tag name=\"form.type_extension\" extended_type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\"/>
      <argument type=\"service\" id=\"translator.data_collector\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"form.type_extension.form.http_foundation\" class=\"Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension\" public=\"false\">
      <tag name=\"form.type_extension\"/>
      <argument type=\"service\" id=\"form.type_extension.form.request_handler\"/>
    </service>
    <service id=\"form.type_extension.form.request_handler\" class=\"Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler\" public=\"false\">
      <argument type=\"service\" id=\"form.server_params\"/>
    </service>
    <service id=\"form.server_params\" class=\"Symfony\\Component\\Form\\Util\\ServerParams\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"form.type_extension.form.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension\" public=\"false\">
      <tag name=\"form.type_extension\" extended_type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\"/>
      <argument type=\"service\" id=\"debug.validator\"/>
    </service>
    <service id=\"form.type_extension.repeated.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension\" public=\"false\">
      <tag name=\"form.type_extension\"/>
    </service>
    <service id=\"form.type_extension.submit.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension\" public=\"false\">
      <tag name=\"form.type_extension\" extended_type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType\"/>
    </service>
    <service id=\"form.type_extension.upload.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension\" public=\"false\">
      <tag name=\"form.type_extension\"/>
      <argument type=\"service\" id=\"translator.data_collector\"/>
      <argument>validators</argument>
    </service>
    <service id=\"form.type_extension.csrf\" class=\"Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension\" public=\"false\">
      <tag name=\"form.type_extension\"/>
      <argument type=\"service\" id=\"security.csrf.token_manager\"/>
      <argument>true</argument>
      <argument>_token</argument>
      <argument type=\"service\" id=\"translator.data_collector\" on-invalid=\"null\"/>
      <argument>validators</argument>
      <argument type=\"service\" id=\"form.server_params\"/>
    </service>
    <service id=\"assets.packages\" class=\"Symfony\\Component\\Asset\\Packages\" public=\"false\">
      <argument type=\"service\" id=\"assets._default_package\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"assets.empty_package\" class=\"Symfony\\Component\\Asset\\Package\" public=\"false\">
      <argument type=\"service\" id=\"assets.empty_version_strategy\"/>
    </service>
    <service id=\"assets.context\" class=\"Symfony\\Component\\Asset\\Context\\RequestStackContext\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument></argument>
      <argument>false</argument>
    </service>
    <service id=\"assets.path_package\" class=\"Symfony\\Component\\Asset\\PathPackage\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\"assets.url_package\" class=\"Symfony\\Component\\Asset\\UrlPackage\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\"assets.static_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"assets.empty_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\EmptyVersionStrategy\" public=\"false\"/>
    <service id=\"assets.json_manifest_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\JsonManifestVersionStrategy\" public=\"false\" abstract=\"true\">
      <argument></argument>
    </service>
    <service id=\"assets._default_package\" class=\"Symfony\\Component\\Asset\\PathPackage\" public=\"false\">
      <argument></argument>
      <argument type=\"service\" id=\"assets.empty_version_strategy\"/>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\".1_PhpArrayAdapter~KuxLmQc\" class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/cache/dev/validation.php</argument>
      <argument type=\"service\" id=\"cache.validator\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\"/>
    </service>
    <service id=\"validator.builder\" class=\"Symfony\\Component\\Validator\\ValidatorBuilderInterface\" public=\"false\">
      <call method=\"setConstraintValidatorFactory\">
        <argument type=\"service\" id=\"validator.validator_factory\"/>
      </call>
      <call method=\"setTranslator\">
        <argument type=\"service\">
          <service class=\"Symfony\\Component\\Validator\\Util\\LegacyTranslatorProxy\">
            <argument type=\"service\" id=\"translator.data_collector\" on-invalid=\"ignore\"/>
          </service>
        </argument>
      </call>
      <call method=\"setTranslationDomain\">
        <argument>validators</argument>
      </call>
      <call method=\"addXmlMappings\">
        <argument type=\"collection\">
          <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/config/validation.xml</argument>
        </argument>
      </call>
      <call method=\"enableAnnotationMapping\">
        <argument type=\"service\" id=\"annotations.cached_reader\"/>
      </call>
      <call method=\"addMethodMapping\">
        <argument>loadValidatorMetadata</argument>
      </call>
      <call method=\"addObjectInitializers\">
        <argument type=\"collection\">
          <argument type=\"service\" id=\"doctrine.orm.validator_initializer\"/>
        </argument>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"doctrine.orm.default_entity_manager.validator_loader\"/>
      </call>
      <factory class=\"Symfony\\Component\\Validator\\Validation\" method=\"createValidatorBuilder\"/>
    </service>
    <service id=\"validator.mapping.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\ValidatorCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\"validator.builder\"/>
      <argument>/var/www/public/DevLaon/var/cache/dev/validation.php</argument>
    </service>
    <service id=\"validator.mapping.cache.symfony\" class=\"Symfony\\Component\\Validator\\Mapping\\Cache\\Psr6Cache\" public=\"false\">
      <argument type=\"service\" id=\".1_PhpArrayAdapter~KuxLmQc\"/>
    </service>
    <service id=\"validator.validator_factory\" class=\"Symfony\\Component\\Validator\\ContainerConstraintValidatorFactory\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.LtnrEkg\"/>
    </service>
    <service id=\"validator.expression\" class=\"Symfony\\Component\\Validator\\Constraints\\ExpressionValidator\" public=\"false\">
      <tag name=\"validator.constraint_validator\" alias=\"validator.expression\"/>
    </service>
    <service id=\"validator.email\" class=\"Symfony\\Component\\Validator\\Constraints\\EmailValidator\" public=\"false\">
      <tag name=\"validator.constraint_validator\" alias=\"Symfony\\Component\\Validator\\Constraints\\EmailValidator\"/>
      <argument>html5</argument>
    </service>
    <service id=\"validator.not_compromised_password\" class=\"Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator\" public=\"false\">
      <tag name=\"validator.constraint_validator\" alias=\"Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator\"/>
      <argument type=\"service\" id=\"http_client\" on-invalid=\"null\"/>
      <argument>UTF-8</argument>
      <argument>true</argument>
      <argument>null</argument>
    </service>
    <service id=\"translator.default\" class=\"Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator\" public=\"false\">
      <tag name=\"kernel.locale_aware\"/>
      <argument type=\"service\" id=\".service_locator.yQVjGlt\"/>
      <argument type=\"service\" id=\"translator.formatter.default\"/>
      <argument>en</argument>
      <argument type=\"collection\">
        <argument key=\"translation.loader.php\" type=\"collection\">
          <argument>php</argument>
        </argument>
        <argument key=\"translation.loader.yml\" type=\"collection\">
          <argument>yaml</argument>
          <argument>yml</argument>
        </argument>
        <argument key=\"translation.loader.xliff\" type=\"collection\">
          <argument>xlf</argument>
          <argument>xliff</argument>
        </argument>
        <argument key=\"translation.loader.po\" type=\"collection\">
          <argument>po</argument>
        </argument>
        <argument key=\"translation.loader.mo\" type=\"collection\">
          <argument>mo</argument>
        </argument>
        <argument key=\"translation.loader.qt\" type=\"collection\">
          <argument>ts</argument>
        </argument>
        <argument key=\"translation.loader.csv\" type=\"collection\">
          <argument>csv</argument>
        </argument>
        <argument key=\"translation.loader.res\" type=\"collection\">
          <argument>res</argument>
        </argument>
        <argument key=\"translation.loader.dat\" type=\"collection\">
          <argument>dat</argument>
        </argument>
        <argument key=\"translation.loader.ini\" type=\"collection\">
          <argument>ini</argument>
        </argument>
        <argument key=\"translation.loader.json\" type=\"collection\">
          <argument>json</argument>
        </argument>
      </argument>
      <argument type=\"collection\">
        <argument key=\"cache_dir\">/var/www/public/DevLaon/var/cache/dev/translations</argument>
        <argument key=\"debug\">true</argument>
        <argument key=\"resource_files\" type=\"collection\">
          <argument key=\"af\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.af.xlf</argument>
          </argument>
          <argument key=\"ar\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.ar.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.ar.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.ar.xlf</argument>
          </argument>
          <argument key=\"az\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.az.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.az.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.az.xlf</argument>
          </argument>
          <argument key=\"be\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.be.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.be.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.be.xlf</argument>
          </argument>
          <argument key=\"bg\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.bg.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.bg.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.bg.xlf</argument>
          </argument>
          <argument key=\"ca\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.ca.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.ca.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.ca.xlf</argument>
          </argument>
          <argument key=\"cs\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.cs.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.cs.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.cs.xlf</argument>
          </argument>
          <argument key=\"cy\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.cy.xlf</argument>
          </argument>
          <argument key=\"da\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.da.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.da.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.da.xlf</argument>
          </argument>
          <argument key=\"de\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.de.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.de.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.de.xlf</argument>
          </argument>
          <argument key=\"el\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.el.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.el.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.el.xlf</argument>
          </argument>
          <argument key=\"en\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.en.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.en.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.en.xlf</argument>
          </argument>
          <argument key=\"es\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.es.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.es.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.es.xlf</argument>
          </argument>
          <argument key=\"et\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.et.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.et.xlf</argument>
          </argument>
          <argument key=\"eu\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.eu.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.eu.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.eu.xlf</argument>
          </argument>
          <argument key=\"fa\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.fa.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.fa.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.fa.xlf</argument>
          </argument>
          <argument key=\"fi\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.fi.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.fi.xlf</argument>
          </argument>
          <argument key=\"fr\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.fr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.fr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.fr.xlf</argument>
          </argument>
          <argument key=\"gl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.gl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.gl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.gl.xlf</argument>
          </argument>
          <argument key=\"he\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.he.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.he.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.he.xlf</argument>
          </argument>
          <argument key=\"hr\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.hr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.hr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.hr.xlf</argument>
          </argument>
          <argument key=\"hu\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.hu.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.hu.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.hu.xlf</argument>
          </argument>
          <argument key=\"hy\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.hy.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.hy.xlf</argument>
          </argument>
          <argument key=\"id\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.id.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.id.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.id.xlf</argument>
          </argument>
          <argument key=\"it\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.it.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.it.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.it.xlf</argument>
          </argument>
          <argument key=\"ja\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.ja.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.ja.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.ja.xlf</argument>
          </argument>
          <argument key=\"lb\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.lb.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.lb.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.lb.xlf</argument>
          </argument>
          <argument key=\"lt\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.lt.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.lt.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.lt.xlf</argument>
          </argument>
          <argument key=\"lv\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.lv.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.lv.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.lv.xlf</argument>
          </argument>
          <argument key=\"mn\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.mn.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.mn.xlf</argument>
          </argument>
          <argument key=\"nb\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.nb.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.nb.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.nb.xlf</argument>
          </argument>
          <argument key=\"nl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.nl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.nl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.nl.xlf</argument>
          </argument>
          <argument key=\"nn\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.nn.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.nn.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.nn.xlf</argument>
          </argument>
          <argument key=\"no\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.no.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.no.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.no.xlf</argument>
          </argument>
          <argument key=\"pl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.pl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.pl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.pl.xlf</argument>
          </argument>
          <argument key=\"pt\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.pt.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.pt.xlf</argument>
          </argument>
          <argument key=\"pt_BR\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf</argument>
          </argument>
          <argument key=\"ro\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.ro.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.ro.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.ro.xlf</argument>
          </argument>
          <argument key=\"ru\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.ru.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.ru.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.ru.xlf</argument>
          </argument>
          <argument key=\"sk\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sk.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.sk.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.sk.xlf</argument>
          </argument>
          <argument key=\"sl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.sl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.sl.xlf</argument>
          </argument>
          <argument key=\"sq\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sq.xlf</argument>
          </argument>
          <argument key=\"sr_Cyrl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf</argument>
          </argument>
          <argument key=\"sr_Latn\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf</argument>
          </argument>
          <argument key=\"sv\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.sv.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.sv.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.sv.xlf</argument>
          </argument>
          <argument key=\"th\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.th.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.th.xlf</argument>
          </argument>
          <argument key=\"tl\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.tl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.tl.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.tl.xlf</argument>
          </argument>
          <argument key=\"tr\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.tr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.tr.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.tr.xlf</argument>
          </argument>
          <argument key=\"uk\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.uk.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.uk.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.uk.xlf</argument>
          </argument>
          <argument key=\"vi\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.vi.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.vi.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.vi.xlf</argument>
          </argument>
          <argument key=\"zh_CN\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf</argument>
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf</argument>
          </argument>
          <argument key=\"zh_TW\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf</argument>
          </argument>
          <argument key=\"pt_PT\" type=\"collection\">
            <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf</argument>
          </argument>
        </argument>
        <argument key=\"scanned_directories\" type=\"collection\">
          <argument>/var/www/public/DevLaon/vendor/symfony/validator/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/form/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/security-core/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/FrameworkBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/sensio/framework-extra-bundle/src/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/SensioFrameworkExtraBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-cache-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/DoctrineCacheBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/DoctrineBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-migrations-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/DoctrineMigrationsBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/security-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/SecurityBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/swiftmailer-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/SwiftmailerBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/TwigBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/WebProfilerBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/monolog-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/MonologBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/debug-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/DebugBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/maker-bundle/src/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/MakerBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/symfony/web-server-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/WebServerBundle/translations</argument>
          <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-fixtures-bundle/Resources/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/DoctrineFixturesBundle/translations</argument>
          <argument>/var/www/public/DevLaon/src/Resources/translations</argument>
        </argument>
      </argument>
      <call method=\"setConfigCacheFactory\">
        <argument type=\"service\" id=\"config_cache_factory\"/>
      </call>
      <call method=\"setFallbackLocales\">
        <argument type=\"collection\">
          <argument>en</argument>
        </argument>
      </call>
    </service>
    <service id=\"translator.logging\" class=\"Symfony\\Component\\Translation\\LoggingTranslator\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"translation\"/>
      <argument type=\"service\" id=\"translator.logging.inner\"/>
      <argument type=\"service\" id=\"monolog.logger.translation\"/>
    </service>
    <service id=\"translator.formatter.default\" class=\"Symfony\\Component\\Translation\\Formatter\\MessageFormatter\" public=\"false\">
      <argument type=\"service\" id=\"identity_translator\"/>
    </service>
    <service id=\"translation.loader.php\" class=\"Symfony\\Component\\Translation\\Loader\\PhpFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"php\"/>
    </service>
    <service id=\"translation.loader.yml\" class=\"Symfony\\Component\\Translation\\Loader\\YamlFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"yaml\" legacy_alias=\"yml\" legacy-alias=\"yml\"/>
    </service>
    <service id=\"translation.loader.xliff\" class=\"Symfony\\Component\\Translation\\Loader\\XliffFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"xlf\" legacy_alias=\"xliff\" legacy-alias=\"xliff\"/>
    </service>
    <service id=\"translation.loader.po\" class=\"Symfony\\Component\\Translation\\Loader\\PoFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"po\"/>
    </service>
    <service id=\"translation.loader.mo\" class=\"Symfony\\Component\\Translation\\Loader\\MoFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"mo\"/>
    </service>
    <service id=\"translation.loader.qt\" class=\"Symfony\\Component\\Translation\\Loader\\QtFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"ts\"/>
    </service>
    <service id=\"translation.loader.csv\" class=\"Symfony\\Component\\Translation\\Loader\\CsvFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"csv\"/>
    </service>
    <service id=\"translation.loader.res\" class=\"Symfony\\Component\\Translation\\Loader\\IcuResFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"res\"/>
    </service>
    <service id=\"translation.loader.dat\" class=\"Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"dat\"/>
    </service>
    <service id=\"translation.loader.ini\" class=\"Symfony\\Component\\Translation\\Loader\\IniFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"ini\"/>
    </service>
    <service id=\"translation.loader.json\" class=\"Symfony\\Component\\Translation\\Loader\\JsonFileLoader\" public=\"false\">
      <tag name=\"translation.loader\" alias=\"json\"/>
    </service>
    <service id=\"translation.dumper.php\" class=\"Symfony\\Component\\Translation\\Dumper\\PhpFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"php\"/>
    </service>
    <service id=\"translation.dumper.xliff\" class=\"Symfony\\Component\\Translation\\Dumper\\XliffFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"xlf\"/>
    </service>
    <service id=\"translation.dumper.po\" class=\"Symfony\\Component\\Translation\\Dumper\\PoFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"po\"/>
    </service>
    <service id=\"translation.dumper.mo\" class=\"Symfony\\Component\\Translation\\Dumper\\MoFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"mo\"/>
    </service>
    <service id=\"translation.dumper.yml\" class=\"Symfony\\Component\\Translation\\Dumper\\YamlFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"yml\"/>
    </service>
    <service id=\"translation.dumper.yaml\" class=\"Symfony\\Component\\Translation\\Dumper\\YamlFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"yaml\"/>
      <argument>yaml</argument>
    </service>
    <service id=\"translation.dumper.qt\" class=\"Symfony\\Component\\Translation\\Dumper\\QtFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"ts\"/>
    </service>
    <service id=\"translation.dumper.csv\" class=\"Symfony\\Component\\Translation\\Dumper\\CsvFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"csv\"/>
    </service>
    <service id=\"translation.dumper.ini\" class=\"Symfony\\Component\\Translation\\Dumper\\IniFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"ini\"/>
    </service>
    <service id=\"translation.dumper.json\" class=\"Symfony\\Component\\Translation\\Dumper\\JsonFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"json\"/>
    </service>
    <service id=\"translation.dumper.res\" class=\"Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper\" public=\"false\">
      <tag name=\"translation.dumper\" alias=\"res\"/>
    </service>
    <service id=\"translation.extractor.php\" class=\"Symfony\\Component\\Translation\\Extractor\\PhpExtractor\" public=\"false\">
      <tag name=\"translation.extractor\" alias=\"php\"/>
    </service>
    <service id=\"translation.reader\" class=\"Symfony\\Component\\Translation\\Reader\\TranslationReader\" public=\"false\">
      <call method=\"addLoader\">
        <argument>php</argument>
        <argument type=\"service\" id=\"translation.loader.php\"/>
      </call>
      <call method=\"addLoader\">
        <argument>yaml</argument>
        <argument type=\"service\" id=\"translation.loader.yml\"/>
      </call>
      <call method=\"addLoader\">
        <argument>yml</argument>
        <argument type=\"service\" id=\"translation.loader.yml\"/>
      </call>
      <call method=\"addLoader\">
        <argument>xlf</argument>
        <argument type=\"service\" id=\"translation.loader.xliff\"/>
      </call>
      <call method=\"addLoader\">
        <argument>xliff</argument>
        <argument type=\"service\" id=\"translation.loader.xliff\"/>
      </call>
      <call method=\"addLoader\">
        <argument>po</argument>
        <argument type=\"service\" id=\"translation.loader.po\"/>
      </call>
      <call method=\"addLoader\">
        <argument>mo</argument>
        <argument type=\"service\" id=\"translation.loader.mo\"/>
      </call>
      <call method=\"addLoader\">
        <argument>ts</argument>
        <argument type=\"service\" id=\"translation.loader.qt\"/>
      </call>
      <call method=\"addLoader\">
        <argument>csv</argument>
        <argument type=\"service\" id=\"translation.loader.csv\"/>
      </call>
      <call method=\"addLoader\">
        <argument>res</argument>
        <argument type=\"service\" id=\"translation.loader.res\"/>
      </call>
      <call method=\"addLoader\">
        <argument>dat</argument>
        <argument type=\"service\" id=\"translation.loader.dat\"/>
      </call>
      <call method=\"addLoader\">
        <argument>ini</argument>
        <argument type=\"service\" id=\"translation.loader.ini\"/>
      </call>
      <call method=\"addLoader\">
        <argument>json</argument>
        <argument type=\"service\" id=\"translation.loader.json\"/>
      </call>
    </service>
    <service id=\"translation.extractor\" class=\"Symfony\\Component\\Translation\\Extractor\\ChainExtractor\" public=\"false\">
      <call method=\"addExtractor\">
        <argument>php</argument>
        <argument type=\"service\" id=\"translation.extractor.php\"/>
      </call>
      <call method=\"addExtractor\">
        <argument>twig</argument>
        <argument type=\"service\" id=\"twig.translation.extractor\"/>
      </call>
    </service>
    <service id=\"translation.writer\" class=\"Symfony\\Component\\Translation\\Writer\\TranslationWriter\" public=\"false\">
      <call method=\"addDumper\">
        <argument>php</argument>
        <argument type=\"service\" id=\"translation.dumper.php\"/>
      </call>
      <call method=\"addDumper\">
        <argument>xlf</argument>
        <argument type=\"service\" id=\"translation.dumper.xliff\"/>
      </call>
      <call method=\"addDumper\">
        <argument>po</argument>
        <argument type=\"service\" id=\"translation.dumper.po\"/>
      </call>
      <call method=\"addDumper\">
        <argument>mo</argument>
        <argument type=\"service\" id=\"translation.dumper.mo\"/>
      </call>
      <call method=\"addDumper\">
        <argument>yml</argument>
        <argument type=\"service\" id=\"translation.dumper.yml\"/>
      </call>
      <call method=\"addDumper\">
        <argument>yaml</argument>
        <argument type=\"service\" id=\"translation.dumper.yaml\"/>
      </call>
      <call method=\"addDumper\">
        <argument>ts</argument>
        <argument type=\"service\" id=\"translation.dumper.qt\"/>
      </call>
      <call method=\"addDumper\">
        <argument>csv</argument>
        <argument type=\"service\" id=\"translation.dumper.csv\"/>
      </call>
      <call method=\"addDumper\">
        <argument>ini</argument>
        <argument type=\"service\" id=\"translation.dumper.ini\"/>
      </call>
      <call method=\"addDumper\">
        <argument>json</argument>
        <argument type=\"service\" id=\"translation.dumper.json\"/>
      </call>
      <call method=\"addDumper\">
        <argument>res</argument>
        <argument type=\"service\" id=\"translation.dumper.res\"/>
      </call>
    </service>
    <service id=\"translation.warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TranslationsCacheWarmer\" public=\"false\">
      <tag name=\"container.service_subscriber\" id=\"translator\"/>
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\".service_locator._pu.0Tb.translation.warmer\"/>
    </service>
    <service id=\"profiler\" class=\"Symfony\\Component\\HttpKernel\\Profiler\\Profiler\" public=\"true\">
      <tag name=\"monolog.logger\" channel=\"profiler\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"profiler.storage\"/>
      <argument type=\"service\" id=\"monolog.logger.profiler\" on-invalid=\"null\"/>
      <argument>true</argument>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.request\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.time\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.memory\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.validator\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.ajax\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.form\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.exception\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.logger\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.events\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.router\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.cache\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.translation\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.security\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.twig\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.doctrine\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"swiftmailer.data_collector\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.dump\"/>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"data_collector.config\"/>
      </call>
    </service>
    <service id=\"profiler.storage\" class=\"Symfony\\Component\\HttpKernel\\Profiler\\FileProfilerStorage\" public=\"false\">
      <argument>file:/var/www/public/DevLaon/var/cache/dev/profiler</argument>
    </service>
    <service id=\"profiler_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"profiler\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>null</argument>
      <argument>false</argument>
      <argument>false</argument>
    </service>
    <service id=\"data_collector.config\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/config.html.twig\" id=\"config\" priority=\"-255\"/>
      <call method=\"setKernel\">
        <argument type=\"service\" id=\"kernel\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"data_collector.request\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/request.html.twig\" id=\"request\" priority=\"335\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"data_collector.ajax\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\AjaxDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/ajax.html.twig\" id=\"ajax\" priority=\"315\"/>
    </service>
    <service id=\"data_collector.exception\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/exception.html.twig\" id=\"exception\" priority=\"305\"/>
    </service>
    <service id=\"data_collector.events\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/events.html.twig\" id=\"events\" priority=\"290\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"data_collector.logger\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/logger.html.twig\" id=\"logger\" priority=\"300\"/>
      <tag name=\"monolog.logger\" channel=\"profiler\"/>
      <argument type=\"service\" id=\"monolog.logger.profiler\" on-invalid=\"ignore\"/>
      <argument>/var/www/public/DevLaon/var/cache/dev/srcApp_KernelDevDebugContainer</argument>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"data_collector.time\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/time.html.twig\" id=\"time\" priority=\"330\"/>
      <argument type=\"service\" id=\"kernel\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"data_collector.memory\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/memory.html.twig\" id=\"memory\" priority=\"325\"/>
    </service>
    <service id=\"data_collector.router\" class=\"Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector\" public=\"false\">
      <tag name=\"kernel.event_listener\" event=\"kernel.controller\" method=\"onKernelController\"/>
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/router.html.twig\" id=\"router\" priority=\"285\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"data_collector.cache\" class=\"Symfony\\Component\\Cache\\DataCollector\\CacheDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/cache.html.twig\" id=\"cache\" priority=\"275\"/>
      <call method=\"addInstance\">
        <argument>cache.app</argument>
        <argument type=\"service\" id=\"cache.app\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.system</argument>
        <argument type=\"service\" id=\"cache.system\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.validator</argument>
        <argument type=\"service\" id=\"cache.validator\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.serializer</argument>
        <argument type=\"service\" id=\"cache.serializer\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.annotations</argument>
        <argument type=\"service\" id=\"cache.annotations\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.property_info</argument>
        <argument type=\"service\" id=\"cache.property_info\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.messenger.restart_workers_signal</argument>
        <argument type=\"service\" id=\"cache.messenger.restart_workers_signal\"/>
      </call>
      <call method=\"addInstance\">
        <argument>cache.security_expression_language</argument>
        <argument type=\"service\" id=\"cache.security_expression_language\"/>
      </call>
    </service>
    <service id=\".1_ResolvedFormTypeFactory~O7oXE4I\" class=\"Symfony\\Component\\Form\\ResolvedFormTypeFactory\" public=\"false\"/>
    <service id=\"form.type_extension.form.data_collector\" class=\"Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension\" public=\"false\">
      <tag name=\"form.type_extension\"/>
      <argument type=\"service\" id=\"data_collector.form\"/>
    </service>
    <service id=\"data_collector.form.extractor\" class=\"Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor\" public=\"false\"/>
    <service id=\"data_collector.form\" class=\"Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/form.html.twig\" id=\"form\" priority=\"310\"/>
      <argument type=\"service\" id=\"data_collector.form.extractor\"/>
    </service>
    <service id=\"debug.validator\" class=\"Symfony\\Component\\Validator\\Validator\\TraceableValidator\" public=\"false\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"debug.validator.inner\"/>
    </service>
    <service id=\"data_collector.validator\" class=\"Symfony\\Component\\Validator\\DataCollector\\ValidatorDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/validator.html.twig\" id=\"validator\" priority=\"320\"/>
      <argument type=\"service\" id=\"debug.validator\"/>
    </service>
    <service id=\"translator.data_collector\" class=\"Symfony\\Component\\Translation\\DataCollectorTranslator\" public=\"false\">
      <argument type=\"service\" id=\"translator.default\"/>
    </service>
    <service id=\"data_collector.translation\" class=\"Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/translation.html.twig\" id=\"translation\" priority=\"275\"/>
      <argument type=\"service\" id=\"translator.data_collector\"/>
    </service>
    <service id=\".cache_connection.GD_MSZC\" class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" public=\"false\">
      <argument>redis://localhost</argument>
      <argument type=\"collection\">
        <argument key=\"lazy\">true</argument>
      </argument>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createConnection\"/>
    </service>
    <service id=\".cache_connection.JKE6keX\" class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" public=\"false\">
      <argument>memcached://localhost</argument>
      <argument type=\"collection\">
        <argument key=\"lazy\">true</argument>
      </argument>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createConnection\"/>
    </service>
    <service id=\"cache.property_access\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\" public=\"false\">
      <argument>0</argument>
      <argument>false</argument>
    </service>
    <service id=\"debug.debug_handlers_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"php\"/>
      <tag name=\"container.hot_path\"/>
      <argument>null</argument>
      <argument type=\"service\" id=\"monolog.logger.php\" on-invalid=\"null\"/>
      <argument>null</argument>
      <argument>-1</argument>
      <argument>true</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\"/>
      <argument>true</argument>
      <argument>UTF-8</argument>
    </service>
    <service id=\"debug.file_link_formatter\" class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" public=\"false\">
      <argument>null</argument>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter.url_format\"/>
    </service>
    <service id=\"debug.stopwatch\" class=\"Symfony\\Component\\Stopwatch\\Stopwatch\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>true</argument>
    </service>
    <service id=\"debug.event_dispatcher\" class=\"Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher\" public=\"false\">
      <tag name=\"container.hot_path\"/>
      <tag name=\"monolog.logger\" channel=\"event\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
      <argument type=\"service\" id=\"monolog.logger.event\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\"/>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"data_collector.router\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"response_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"streamed_response_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-1024</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>setDefaultLocale</argument>
        </argument>
        <argument>100</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>16</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"validate_request_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>256</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"resolve_controller_name_subscriber\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>24</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"disallow_search_engine_index_response_listener\"/>
          <argument>onResponse</argument>
        </argument>
        <argument>-255</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_aware_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>15</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_aware_listener\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>-15</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.error_listener\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.error_listener\"/>
          <argument>onConsoleTerminate</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.suggest_missing_package_subscriber\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>128</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-1000</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"profiler_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-100</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"profiler_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"profiler_listener\"/>
          <argument>onKernelTerminate</argument>
        </argument>
        <argument>-1024</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"data_collector.request\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"data_collector.request\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.debug_handlers_listener\"/>
          <argument>configure</argument>
        </argument>
        <argument>2048</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.command</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.debug_handlers_listener\"/>
          <argument>configure</argument>
        </argument>
        <argument>2048</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.debug_handlers_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>-2048</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>32</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>-64</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"web_link.add_link_header_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.controller.listener\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.converter.listener\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.view.listener\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.view</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.view.listener\"/>
          <argument>onKernelView</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.cache.listener\"/>
          <argument>onKernelController</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.cache.listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller_arguments</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"sensio_framework_extra.security.listener\"/>
          <argument>onKernelControllerArguments</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller_arguments</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"framework_extra_bundle.event.is_granted\"/>
          <argument>onKernelControllerArguments</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"security.rememberme.response_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>debug.security.authorization.vote</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.security.voter.vote_listener\"/>
          <argument>onVoterVote</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.security.firewall\"/>
          <argument>configureLogoutUrlGenerator</argument>
        </argument>
        <argument>8</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.security.firewall\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>8</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.security.firewall\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"swiftmailer.email_sender.listener\"/>
          <argument>onException</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"swiftmailer.email_sender.listener\"/>
          <argument>onTerminate</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"swiftmailer.email_sender.listener\"/>
          <argument>onException</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"swiftmailer.email_sender.listener\"/>
          <argument>onTerminate</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"twig.exception_listener\"/>
          <argument>logKernelException</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"twig.exception_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"web_profiler.debug_toolbar\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.command</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"monolog.handler.console\"/>
          <argument>onCommand</argument>
        </argument>
        <argument>255</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"monolog.handler.console\"/>
          <argument>onTerminate</argument>
        </argument>
        <argument>-255</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.command</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.dump_listener\"/>
          <argument>configure</argument>
        </argument>
        <argument>1024</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"maker.console_error_listener\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"maker.console_error_listener\"/>
          <argument>onConsoleTerminate</argument>
        </argument>
        <argument>0</argument>
      </call>
    </service>
    <service id=\"debug.controller_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <argument type=\"service\" id=\"debug.controller_resolver.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableArgumentResolver\" public=\"false\">
      <argument type=\"service\" id=\"debug.argument_resolver.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.log_processor\" class=\"Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"routing.resolver\" class=\"Symfony\\Component\\Config\\Loader\\LoaderResolver\" public=\"false\">
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.xml\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.yml\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.php\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.glob\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.directory\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.service\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation.directory\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation.file\"/>
      </call>
    </service>
    <service id=\"routing.loader.xml\" class=\"Symfony\\Component\\Routing\\Loader\\XmlFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.yml\" class=\"Symfony\\Component\\Routing\\Loader\\YamlFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.php\" class=\"Symfony\\Component\\Routing\\Loader\\PhpFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.glob\" class=\"Symfony\\Component\\Routing\\Loader\\GlobFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.directory\" class=\"Symfony\\Component\\Routing\\Loader\\DirectoryLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.service\" class=\"Symfony\\Component\\Routing\\Loader\\DependencyInjection\\ServiceRouterLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"routing.loader\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader\" public=\"true\">
      <argument type=\"service\" id=\"controller_name_converter\"/>
      <argument type=\"service\" id=\"routing.resolver\"/>
      <argument type=\"collection\">
        <argument key=\"utf8\">true</argument>
      </argument>
    </service>
    <service id=\"router.default\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\Router\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"router\"/>
      <tag name=\"container.service_subscriber\" id=\"routing.loader\"/>
      <argument type=\"service\" id=\".service_locator.kbKiEzc.router.default\"/>
      <argument>kernel::loadRoutes</argument>
      <argument type=\"collection\">
        <argument key=\"cache_dir\">/var/www/public/DevLaon/var/cache/dev</argument>
        <argument key=\"debug\">true</argument>
        <argument key=\"generator_class\">Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator</argument>
        <argument key=\"generator_dumper_class\">Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper</argument>
        <argument key=\"matcher_class\">Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher</argument>
        <argument key=\"matcher_dumper_class\">Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper</argument>
        <argument key=\"strict_requirements\">true</argument>
        <argument key=\"resource_type\">service</argument>
      </argument>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"parameter_bag\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"monolog.logger.router\" on-invalid=\"ignore\"/>
      <argument>en</argument>
      <call method=\"setConfigCacheFactory\">
        <argument type=\"service\" id=\"config_cache_factory\"/>
      </call>
    </service>
    <service id=\"router.request_context\" class=\"Symfony\\Component\\Routing\\RequestContext\" public=\"false\">
      <argument></argument>
      <argument>GET</argument>
      <argument>localhost</argument>
      <argument>http</argument>
      <argument>80</argument>
      <argument>443</argument>
    </service>
    <service id=\"router.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer\" public=\"false\">
      <tag name=\"container.service_subscriber\" id=\"router\"/>
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\".service_locator.m8PwGkX.router.cache_warmer\"/>
    </service>
    <service id=\"router_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\RouterListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"monolog.logger.request\" on-invalid=\"ignore\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument>true</argument>
    </service>
    <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" public=\"true\">
      <argument type=\"service\" id=\"router.default\"/>
      <argument>80</argument>
      <argument>443</argument>
    </service>
    <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController\" public=\"true\">
      <argument type=\"service\" id=\"twig\" on-invalid=\"ignore\"/>
      <argument>null</argument>
    </service>
    <service id=\"routing.loader.annotation\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\AnnotatedRouteControllerLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"annotations.cached_reader\"/>
    </service>
    <service id=\"routing.loader.annotation.directory\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"file_locator\"/>
      <argument type=\"service\" id=\"routing.loader.annotation\"/>
    </service>
    <service id=\"routing.loader.annotation.file\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"file_locator\"/>
      <argument type=\"service\" id=\"routing.loader.annotation\"/>
    </service>
    <service id=\".2_PhpArrayAdapter~IsFa4SE\" class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/cache/dev/annotations.php</argument>
      <argument type=\"service\" id=\"cache.annotations\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\"/>
    </service>
    <service id=\".1_ArrayCache~IsFa4SE\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" public=\"false\"/>
    <service id=\"annotations.reader\" class=\"Doctrine\\Common\\Annotations\\AnnotationReader\" public=\"false\">
      <call method=\"addGlobalIgnoredName\">
        <argument>required</argument>
        <argument type=\"service\" id=\"annotations.dummy_registry\"/>
      </call>
    </service>
    <service id=\"annotations.dummy_registry\" class=\"Doctrine\\Common\\Annotations\\AnnotationRegistry\" public=\"false\">
      <call method=\"registerUniqueLoader\">
        <argument>class_exists</argument>
      </call>
    </service>
    <service id=\"annotations.cached_reader\" class=\"Doctrine\\Common\\Annotations\\CachedReader\" public=\"false\">
      <tag name=\"annotations.cached_reader\"/>
      <argument type=\"service\" id=\"annotations.reader\"/>
      <argument type=\"service\" id=\".1_ArrayCache~IsFa4SE\"/>
      <argument>true</argument>
      <property name=\"cacheProviderBackup\" type=\"service\" id=\"annotations.cache\"/>
    </service>
    <service id=\"annotations.filesystem_cache\" class=\"Doctrine\\Common\\Cache\\FilesystemCache\" public=\"false\">
      <argument></argument>
    </service>
    <service id=\"annotations.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\AnnotationsCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\"annotations.reader\"/>
      <argument>/var/www/public/DevLaon/var/cache/dev/annotations.php</argument>
      <argument>#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller\$))#</argument>
      <argument>true</argument>
    </service>
    <service id=\"annotations.cache\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\" public=\"false\">
      <argument type=\"service\" id=\".2_PhpArrayAdapter~IsFa4SE\"/>
    </service>
    <service id=\"property_accessor\" class=\"Symfony\\Component\\PropertyAccess\\PropertyAccessor\" public=\"false\">
      <argument>false</argument>
      <argument>false</argument>
      <argument type=\"service\" id=\"cache.property_access\" on-invalid=\"ignore\"/>
      <argument>true</argument>
    </service>
    <service id=\"serializer\" class=\"Symfony\\Component\\Serializer\\Serializer\" public=\"true\">
      <argument type=\"collection\">
        <argument type=\"service\" id=\"serializer.normalizer.json_serializable\"/>
        <argument type=\"service\" id=\"serializer.normalizer.datetime\"/>
        <argument type=\"service\" id=\"serializer.normalizer.constraint_violation_list\"/>
        <argument type=\"service\" id=\"serializer.normalizer.dateinterval\"/>
        <argument type=\"service\" id=\"serializer.normalizer.data_uri\"/>
        <argument type=\"service\" id=\"serializer.denormalizer.array\"/>
        <argument type=\"service\" id=\"serializer.normalizer.object\"/>
      </argument>
      <argument type=\"collection\">
        <argument type=\"service\" id=\"serializer.encoder.xml\"/>
        <argument type=\"service\" id=\"serializer.encoder.json\"/>
        <argument type=\"service\" id=\"serializer.encoder.yaml\"/>
        <argument type=\"service\" id=\"serializer.encoder.csv\"/>
      </argument>
    </service>
    <service id=\"serializer.mapping.class_discriminator_resolver\" class=\"Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorFromClassMetadata\" public=\"false\">
      <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\"/>
    </service>
    <service id=\"serializer.normalizer.constraint_violation_list\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ConstraintViolationListNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-915\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"serializer.name_converter.metadata_aware\"/>
    </service>
    <service id=\"serializer.normalizer.dateinterval\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DateIntervalNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-915\"/>
    </service>
    <service id=\"serializer.normalizer.data_uri\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DataUriNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-920\"/>
      <argument type=\"service\" id=\"mime_types\" on-invalid=\"null\"/>
    </service>
    <service id=\"serializer.normalizer.datetime\" class=\"Symfony\\Component\\Serializer\\Normalizer\\DateTimeNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-910\"/>
    </service>
    <service id=\"serializer.normalizer.json_serializable\" class=\"Symfony\\Component\\Serializer\\Normalizer\\JsonSerializableNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-900\"/>
    </service>
    <service id=\"serializer.normalizer.object\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-1000\"/>
      <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\"/>
      <argument type=\"service\" id=\"serializer.name_converter.metadata_aware\"/>
      <argument type=\"service\" id=\"property_accessor\"/>
      <argument type=\"service\" id=\"property_info\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"serializer.mapping.class_discriminator_resolver\" on-invalid=\"ignore\"/>
      <argument>null</argument>
      <argument type=\"collection\"/>
    </service>
    <service id=\"serializer.denormalizer.array\" class=\"Symfony\\Component\\Serializer\\Normalizer\\ArrayDenormalizer\" public=\"false\">
      <tag name=\"serializer.normalizer\" priority=\"-990\"/>
    </service>
    <service id=\"serializer.mapping.chain_loader\" class=\"Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain\" public=\"false\">
      <argument type=\"collection\">
        <argument type=\"service\">
          <service class=\"Symfony\\Component\\Serializer\\Mapping\\Loader\\AnnotationLoader\" public=\"false\">
            <argument type=\"service\" id=\"annotations.cached_reader\"/>
          </service>
        </argument>
      </argument>
    </service>
    <service id=\"serializer.mapping.class_metadata_factory\" class=\"Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory\" public=\"false\">
      <argument type=\"service\" id=\"serializer.mapping.chain_loader\"/>
      <argument>null</argument>
    </service>
    <service id=\"serializer.mapping.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\SerializerCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"collection\">
        <argument type=\"service\">
          <service class=\"Symfony\\Component\\Serializer\\Mapping\\Loader\\AnnotationLoader\" public=\"false\">
            <argument type=\"service\" id=\"annotations.cached_reader\"/>
          </service>
        </argument>
      </argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/serialization.php</argument>
    </service>
    <service id=\"serializer.mapping.cache.symfony\" class=\"Psr\\Cache\\CacheItemPoolInterface\" public=\"false\">
      <argument>/var/www/public/DevLaon/var/cache/dev/serialization.php</argument>
      <argument type=\"service\" id=\"cache.serializer\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\"/>
    </service>
    <service id=\"serializer.encoder.xml\" class=\"Symfony\\Component\\Serializer\\Encoder\\XmlEncoder\" public=\"false\">
      <tag name=\"serializer.encoder\"/>
    </service>
    <service id=\"serializer.encoder.json\" class=\"Symfony\\Component\\Serializer\\Encoder\\JsonEncoder\" public=\"false\">
      <tag name=\"serializer.encoder\"/>
    </service>
    <service id=\"serializer.encoder.yaml\" class=\"Symfony\\Component\\Serializer\\Encoder\\YamlEncoder\" public=\"false\">
      <tag name=\"serializer.encoder\"/>
    </service>
    <service id=\"serializer.encoder.csv\" class=\"Symfony\\Component\\Serializer\\Encoder\\CsvEncoder\" public=\"false\">
      <tag name=\"serializer.encoder\"/>
    </service>
    <service id=\"serializer.name_converter.camel_case_to_snake_case\" class=\"Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter\" public=\"false\"/>
    <service id=\"serializer.name_converter.metadata_aware\" class=\"Symfony\\Component\\Serializer\\NameConverter\\MetadataAwareNameConverter\" public=\"false\">
      <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\"/>
    </service>
    <service id=\"property_info.serializer_extractor\" class=\"Symfony\\Component\\PropertyInfo\\Extractor\\SerializerExtractor\" public=\"false\">
      <tag name=\"property_info.list_extractor\" priority=\"-999\"/>
      <argument type=\"service\" id=\"serializer.mapping.class_metadata_factory\"/>
    </service>
    <service id=\"property_info\" class=\"Symfony\\Component\\PropertyInfo\\PropertyInfoExtractor\" public=\"false\">
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"property_info.serializer_extractor\"/>
        <argument type=\"service\" id=\"property_info.reflection_extractor\"/>
        <argument type=\"service\" id=\"doctrine.orm.default_entity_manager.property_info_extractor\"/>
      </argument>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"doctrine.orm.default_entity_manager.property_info_extractor\"/>
        <argument type=\"service\" id=\"property_info.php_doc_extractor\"/>
        <argument type=\"service\" id=\"property_info.reflection_extractor\"/>
      </argument>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"property_info.php_doc_extractor\"/>
      </argument>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"doctrine.orm.default_entity_manager.property_info_extractor\"/>
        <argument type=\"service\" id=\"property_info.reflection_extractor\"/>
      </argument>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"property_info.reflection_extractor\"/>
      </argument>
    </service>
    <service id=\"property_info.reflection_extractor\" class=\"Symfony\\Component\\PropertyInfo\\Extractor\\ReflectionExtractor\" public=\"false\">
      <tag name=\"property_info.list_extractor\" priority=\"-1000\"/>
      <tag name=\"property_info.type_extractor\" priority=\"-1002\"/>
      <tag name=\"property_info.access_extractor\" priority=\"-1000\"/>
      <tag name=\"property_info.initializable_extractor\" priority=\"-1000\"/>
    </service>
    <service id=\"property_info.php_doc_extractor\" class=\"Symfony\\Component\\PropertyInfo\\Extractor\\PhpDocExtractor\">
      <tag name=\"property_info.description_extractor\" priority=\"-1000\"/>
      <tag name=\"property_info.type_extractor\" priority=\"-1001\"/>
    </service>
    <service id=\"http_client\" class=\"Symfony\\Contracts\\HttpClient\\HttpClientInterface\">
      <tag name=\"monolog.logger\" channel=\"http_client\"/>
      <argument type=\"collection\"/>
      <argument>6</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.http_client\" on-invalid=\"ignore\"/>
      </call>
      <factory class=\"Symfony\\Component\\HttpClient\\HttpClient\" method=\"create\"/>
    </service>
    <service id=\"web_link.add_link_header_listener\" class=\"Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"mime_types\" class=\"Symfony\\Component\\Mime\\MimeTypes\" public=\"false\">
      <call method=\"setDefault\">
        <argument type=\"service\" id=\"mime_types\"/>
      </call>
    </service>
    <service id=\"sensio_framework_extra.controller.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"annotations.cached_reader\"/>
    </service>
    <service id=\"sensio_framework_extra.converter.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"sensio_framework_extra.converter.manager\"/>
      <argument>true</argument>
    </service>
    <service id=\"sensio_framework_extra.converter.manager\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager\">
      <call method=\"add\">
        <argument type=\"service\" id=\"sensio_framework_extra.converter.doctrine.orm\"/>
        <argument>0</argument>
        <argument>doctrine.orm</argument>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\"framework_extra_bundle.date_time_param_converter\"/>
        <argument>0</argument>
        <argument>datetime</argument>
      </call>
    </service>
    <service id=\"sensio_framework_extra.converter.doctrine.orm\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter\" public=\"false\">
      <tag name=\"request.param_converter\" converter=\"doctrine.orm\"/>
      <argument type=\"service\" id=\"doctrine\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"sensio_framework_extra.converter.doctrine.orm.expression_language.default\" on-invalid=\"null\"/>
    </service>
    <service id=\"framework_extra_bundle.date_time_param_converter\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter\" public=\"false\">
      <tag name=\"request.param_converter\" converter=\"datetime\"/>
    </service>
    <service id=\"sensio_framework_extra.converter.doctrine.orm.expression_language.default\" class=\"Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage\" public=\"false\"/>
    <service id=\"sensio_framework_extra.view.guesser\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser\" public=\"false\">
      <argument type=\"service\" id=\"kernel\"/>
    </service>
    <service id=\"sensio_framework_extra.view.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"sensio_framework_extra.view.guesser\"/>
      <argument type=\"service\" id=\"twig\" on-invalid=\"null\"/>
    </service>
    <service id=\"sensio_framework_extra.cache.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"sensio_framework_extra.security.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"framework_extra_bundle.argument_name_convertor\"/>
      <argument type=\"service\" id=\"sensio_framework_extra.security.expression_language.default\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.role_hierarchy\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"monolog.logger\" on-invalid=\"null\"/>
    </service>
    <service id=\"sensio_framework_extra.security.expression_language.default\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Security\\ExpressionLanguage\" public=\"false\"/>
    <service id=\"framework_extra_bundle.event.is_granted\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\IsGrantedListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"framework_extra_bundle.argument_name_convertor\"/>
      <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"null\"/>
    </service>
    <service id=\"framework_extra_bundle.argument_name_convertor\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentNameConverter\" public=\"false\">
      <argument type=\"service\" id=\"argument_metadata_factory\"/>
    </service>
    <service id=\"doctrine_cache.abstract.apc\" class=\"Doctrine\\Common\\Cache\\ApcCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.apcu\" class=\"Doctrine\\Common\\Cache\\ApcuCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.array\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.chain\" class=\"Doctrine\\Common\\Cache\\ChainCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.couchbase\" class=\"Doctrine\\Common\\Cache\\CouchbaseCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.file_system\" class=\"Doctrine\\Common\\Cache\\FilesystemCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.php_file\" class=\"Doctrine\\Common\\Cache\\PhpFileCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.memcache\" class=\"Doctrine\\Common\\Cache\\MemcacheCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.memcached\" class=\"Doctrine\\Common\\Cache\\MemcachedCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.mongodb\" class=\"Doctrine\\Common\\Cache\\MongoDBCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.redis\" class=\"Doctrine\\Common\\Cache\\RedisCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.predis\" class=\"Doctrine\\Common\\Cache\\PredisCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.riak\" class=\"Doctrine\\Common\\Cache\\RiakCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.sqlite3\" class=\"Doctrine\\Common\\Cache\\SQLite3Cache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.void\" class=\"Doctrine\\Common\\Cache\\VoidCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.wincache\" class=\"Doctrine\\Common\\Cache\\WinCacheCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.xcache\" class=\"Doctrine\\Common\\Cache\\XcacheCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.abstract.zenddata\" class=\"Doctrine\\Common\\Cache\\ZendDataCache\" abstract=\"true\"/>
    <service id=\"doctrine_cache.contains_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\ContainsCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_cache.delete_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\DeleteCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_cache.flush_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\FlushCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_cache.stats_command\" class=\"Doctrine\\Bundle\\DoctrineCacheBundle\\Command\\StatsCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine.dbal.logger.chain\" class=\"Doctrine\\DBAL\\Logging\\LoggerChain\" public=\"false\" abstract=\"true\">
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.logger.profiling\" class=\"Doctrine\\DBAL\\Logging\\DebugStack\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.dbal.logger.backtrace\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\Logging\\BacktraceLogger\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.dbal.logger\" class=\"Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"doctrine\"/>
      <argument type=\"service\" id=\"monolog.logger.doctrine\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\"/>
    </service>
    <service id=\"data_collector.doctrine\" class=\"Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@Doctrine/Collector/db.html.twig\" id=\"db\" priority=\"250\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"addLogger\">
        <argument>default</argument>
        <argument type=\"service\" id=\"doctrine.dbal.logger.profiling.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.connection_factory\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory\">
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.dbal.connection\" class=\"Doctrine\\DBAL\\Connection\" abstract=\"true\">
      <factory service=\"doctrine.dbal.connection_factory\" method=\"createConnection\"/>
    </service>
    <service id=\"doctrine.dbal.connection.event_manager\" class=\"Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"doctrine.dbal.connection.configuration\" class=\"Doctrine\\DBAL\\Configuration\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Registry\" public=\"true\">
      <argument type=\"service\" id=\"service_container\"/>
      <argument>%doctrine.connections%</argument>
      <argument>%doctrine.entity_managers%</argument>
      <argument>default</argument>
      <argument>default</argument>
    </service>
    <service id=\"doctrine.twig.doctrine_extension\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Twig\\DoctrineExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"doctrine.dbal.schema_asset_filter_manager\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\SchemaAssetsFilterManager\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.database_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:create\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:database:create</argument>
      </call>
    </service>
    <service id=\"doctrine.database_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:drop\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:database:drop</argument>
      </call>
    </service>
    <service id=\"doctrine.generate_entities_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\GenerateEntitiesDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:generate:entities\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:generate:entities</argument>
      </call>
    </service>
    <service id=\"doctrine.query_sql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:query:sql\"/>
      <call method=\"setName\">
        <argument>doctrine:query:sql</argument>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection.configuration\" class=\"Doctrine\\DBAL\\Configuration\" public=\"false\">
      <call method=\"setSQLLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger.chain.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.logger.profiling.default\" class=\"Doctrine\\DBAL\\Logging\\DebugStack\" public=\"false\"/>
    <service id=\"doctrine.dbal.logger.chain.default\" class=\"Doctrine\\DBAL\\Logging\\LoggerChain\" public=\"false\">
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger\"/>
      </call>
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger.profiling.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection.event_manager\" class=\"Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.Otd28_S\"/>
      <call method=\"addEventListener\">
        <argument type=\"collection\">
          <argument>loadClassMetadata</argument>
        </argument>
        <argument>doctrine.orm.default_listeners.attach_entity_listeners</argument>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection\" class=\"Doctrine\\DBAL\\Connection\" public=\"true\">
      <argument type=\"collection\">
        <argument key=\"driver\">mysql</argument>
        <argument key=\"charset\">utf8mb4</argument>
        <argument key=\"url\">%env(resolve:DATABASE_URL)%</argument>
        <argument key=\"host\">localhost</argument>
        <argument key=\"port\">null</argument>
        <argument key=\"user\">root</argument>
        <argument key=\"password\">null</argument>
        <argument key=\"driverOptions\" type=\"collection\"/>
        <argument key=\"serverVersion\">5.7</argument>
        <argument key=\"defaultTableOptions\" type=\"collection\">
          <argument key=\"charset\">utf8mb4</argument>
          <argument key=\"collate\">utf8mb4_unicode_ci</argument>
        </argument>
      </argument>
      <argument type=\"service\" id=\"doctrine.dbal.default_connection.configuration\"/>
      <argument type=\"service\" id=\"doctrine.dbal.default_connection.event_manager\"/>
      <argument type=\"collection\"/>
      <factory service=\"doctrine.dbal.connection_factory\" method=\"createConnection\"/>
    </service>
    <service id=\".1_ServiceLocator~4sFtw.I\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.proxy_cache_warmer\" class=\"Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"form.type_guesser.doctrine\" class=\"Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser\">
      <tag name=\"form.type_guesser\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"form.type.entity\" class=\"Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType\">
      <tag name=\"form.type\" alias=\"entity\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.configuration\" class=\"Doctrine\\ORM\\Configuration\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.orm.entity_manager.abstract\" class=\"Doctrine\\ORM\\EntityManager\" lazy=\"true\" abstract=\"true\">
      <factory class=\"Doctrine\\ORM\\EntityManager\" method=\"create\"/>
    </service>
    <service id=\"doctrine.orm.container_repository_factory\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Repository\\ContainerRepositoryFactory\" public=\"false\">
      <argument type=\"service\" id=\".service_locator._ZQxHRQ\"/>
    </service>
    <service id=\"doctrine.orm.manager_configurator.abstract\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator\" abstract=\"true\">
      <argument type=\"collection\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.validator.unique\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator\">
      <tag name=\"validator.constraint_validator\" alias=\"doctrine.orm.validator.unique\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.validator_initializer\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer\">
      <tag name=\"validator.initializer\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.security.user.provider\" class=\"Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.listeners.resolve_target_entity\" class=\"Doctrine\\ORM\\Tools\\ResolveTargetEntityListener\" public=\"false\"/>
    <service id=\"doctrine.orm.naming_strategy.default\" class=\"Doctrine\\ORM\\Mapping\\DefaultNamingStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.naming_strategy.underscore\" class=\"Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.quote_strategy.default\" class=\"Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.quote_strategy.ansi\" class=\"Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy\" public=\"false\"/>
    <service id=\"doctrine.cache_clear_metadata_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-metadata\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-metadata</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_clear_query_cache_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-query\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-query</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_clear_result_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-result\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-result</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_collection_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-collection-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-collection-region</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_convert_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:convert\"/>
      <call method=\"setName\">
        <argument>doctrine:mapping:convert</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:create\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:create</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:drop\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:drop</argument>
      </call>
    </service>
    <service id=\"doctrine.ensure_production_settings_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:ensure-production-settings\"/>
      <call method=\"setName\">
        <argument>doctrine:ensure-production-settings</argument>
      </call>
    </service>
    <service id=\"doctrine.clear_entity_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-entity-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-entity-region</argument>
      </call>
    </service>
    <service id=\"doctrine.database_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:import\"/>
      <call method=\"setName\">
        <argument>doctrine:database:import</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_info_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:info\"/>
      <call method=\"setName\">
        <argument>doctrine:mapping:info</argument>
      </call>
    </service>
    <service id=\"doctrine.clear_query_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-query-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-query-region</argument>
      </call>
    </service>
    <service id=\"doctrine.query_dql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:query:dql\"/>
      <call method=\"setName\">
        <argument>doctrine:query:dql</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_update_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:update\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:update</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_validate_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:validate\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:validate</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:import\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <argument>%kernel.bundles%</argument>
      <call method=\"setName\">
        <argument>doctrine:mapping:import</argument>
      </call>
    </service>
    <service id=\"doctrine.orm.default_configuration\" class=\"Doctrine\\ORM\\Configuration\" public=\"false\">
      <call method=\"setEntityNamespaces\">
        <argument type=\"collection\">
          <argument key=\"App\">App\\Entity</argument>
        </argument>
      </call>
      <call method=\"setMetadataCacheImpl\">
        <argument type=\"service\" id=\"doctrine_cache.providers.doctrine.orm.default_metadata_cache\"/>
      </call>
      <call method=\"setQueryCacheImpl\">
        <argument type=\"service\" id=\"doctrine_cache.providers.doctrine.orm.default_query_cache\"/>
      </call>
      <call method=\"setResultCacheImpl\">
        <argument type=\"service\" id=\"doctrine_cache.providers.doctrine.orm.default_result_cache\"/>
      </call>
      <call method=\"setMetadataDriverImpl\">
        <argument type=\"service\" id=\"doctrine.orm.default_metadata_driver\"/>
      </call>
      <call method=\"setProxyDir\">
        <argument>/var/www/public/DevLaon/var/cache/dev/doctrine/orm/Proxies</argument>
      </call>
      <call method=\"setProxyNamespace\">
        <argument>Proxies</argument>
      </call>
      <call method=\"setAutoGenerateProxyClasses\">
        <argument>true</argument>
      </call>
      <call method=\"setClassMetadataFactoryName\">
        <argument>Doctrine\\ORM\\Mapping\\ClassMetadataFactory</argument>
      </call>
      <call method=\"setDefaultRepositoryClassName\">
        <argument>Doctrine\\ORM\\EntityRepository</argument>
      </call>
      <call method=\"setNamingStrategy\">
        <argument type=\"service\" id=\"doctrine.orm.naming_strategy.underscore\"/>
      </call>
      <call method=\"setQuoteStrategy\">
        <argument type=\"service\" id=\"doctrine.orm.quote_strategy.default\"/>
      </call>
      <call method=\"setEntityListenerResolver\">
        <argument type=\"service\" id=\"doctrine.orm.default_entity_listener_resolver\"/>
      </call>
      <call method=\"setRepositoryFactory\">
        <argument type=\"service\" id=\"doctrine.orm.container_repository_factory\"/>
      </call>
    </service>
    <service id=\"doctrine.orm.default_annotation_metadata_driver\" class=\"Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver\" public=\"false\">
      <argument type=\"service\" id=\"annotations.cached_reader\"/>
      <argument type=\"collection\">
        <argument>/var/www/public/DevLaon/src/Entity</argument>
      </argument>
    </service>
    <service id=\"doctrine.orm.default_metadata_driver\" class=\"Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain\" public=\"false\">
      <call method=\"addDriver\">
        <argument type=\"service\" id=\"doctrine.orm.default_annotation_metadata_driver\"/>
        <argument>App\\Entity</argument>
      </call>
    </service>
    <service id=\"doctrine_cache.providers.doctrine.orm.default_metadata_cache\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" public=\"true\">
      <call method=\"setNamespace\">
        <argument>sf_orm_default_56aff329416a63c6e2aebab90f710ec30e64f735af3b2a36bf63062cb81af9ba</argument>
      </call>
    </service>
    <service id=\"doctrine_cache.providers.doctrine.orm.default_result_cache\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" public=\"true\">
      <call method=\"setNamespace\">
        <argument>sf_orm_default_56aff329416a63c6e2aebab90f710ec30e64f735af3b2a36bf63062cb81af9ba</argument>
      </call>
    </service>
    <service id=\"doctrine_cache.providers.doctrine.orm.default_query_cache\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" public=\"true\">
      <call method=\"setNamespace\">
        <argument>sf_orm_default_56aff329416a63c6e2aebab90f710ec30e64f735af3b2a36bf63062cb81af9ba</argument>
      </call>
    </service>
    <service id=\"doctrine.orm.default_entity_listener_resolver\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"doctrine.orm.default_listeners.attach_entity_listeners\" class=\"Doctrine\\ORM\\Tools\\AttachEntityListenersListener\">
      <tag name=\"doctrine.event_listener\" event=\"loadClassMetadata\"/>
    </service>
    <service id=\"doctrine.orm.default_manager_configurator\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator\">
      <argument type=\"collection\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_manager\" class=\"Doctrine\\ORM\\EntityManager\" public=\"true\" lazy=\"true\">
      <argument type=\"service\" id=\"doctrine.dbal.default_connection\"/>
      <argument type=\"service\" id=\"doctrine.orm.default_configuration\"/>
      <factory class=\"Doctrine\\ORM\\EntityManager\" method=\"create\"/>
      <configurator service=\"doctrine.orm.default_manager_configurator\" method=\"configure\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_manager.property_info_extractor\" class=\"Symfony\\Bridge\\Doctrine\\PropertyInfo\\DoctrineExtractor\">
      <tag name=\"property_info.list_extractor\" priority=\"-1001\"/>
      <tag name=\"property_info.type_extractor\" priority=\"-999\"/>
      <tag name=\"property_info.access_extractor\" priority=\"-999\"/>
      <argument type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_manager.validator_loader\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\DoctrineLoader\">
      <tag name=\"validator.auto_mapper\" priority=\"-100\"/>
      <argument type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      <argument>null</argument>
    </service>
    <service id=\"doctrine_migrations.diff_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.dump_schema_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.execute_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.generate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.latest_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.migrate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.rollup_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.status_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.up_to_date_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"doctrine_migrations.version_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand\">
      <tag name=\"console.command\"/>
    </service>
    <service id=\"security.authorization_checker\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationChecker\" public=\"true\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"debug.security.access.decision_manager\"/>
      <argument>false</argument>
    </service>
    <service id=\"security.token_storage\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage\" public=\"true\">
      <tag name=\"kernel.reset\" method=\"setToken\"/>
    </service>
    <service id=\"security.helper\" class=\"Symfony\\Component\\Security\\Core\\Security\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.jD4_ZG7\"/>
    </service>
    <service id=\"security.authentication.manager\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager\" public=\"false\">
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"security.authentication.provider.dao.main\"/>
        <argument type=\"service\" id=\"security.authentication.provider.anonymous.main\"/>
      </argument>
      <argument>true</argument>
      <call method=\"setEventDispatcher\">
        <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      </call>
    </service>
    <service id=\"security.authentication.trust_resolver\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver\" public=\"false\">
      <argument>null</argument>
      <argument>null</argument>
    </service>
    <service id=\"security.authentication.session_strategy\" class=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy\" public=\"false\">
      <argument>migrate</argument>
    </service>
    <service id=\"security.authentication.session_strategy_noop\" class=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy\" public=\"false\">
      <argument>none</argument>
    </service>
    <service id=\"security.encoder_factory.generic\" class=\"Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory\" public=\"false\">
      <argument type=\"collection\">
        <argument key=\"App\\Entity\\User\" type=\"collection\">
          <argument key=\"algorithm\">auto</argument>
          <argument key=\"hash_algorithm\">sha512</argument>
          <argument key=\"key_length\">40</argument>
          <argument key=\"ignore_case\">false</argument>
          <argument key=\"encode_as_base64\">true</argument>
          <argument key=\"iterations\">5000</argument>
          <argument key=\"cost\">null</argument>
          <argument key=\"memory_cost\">null</argument>
          <argument key=\"time_cost\">null</argument>
          <argument key=\"threads\">null</argument>
        </argument>
      </argument>
    </service>
    <service id=\"security.user_password_encoder.generic\" class=\"Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoder\" public=\"false\">
      <argument type=\"service\" id=\"security.encoder_factory.generic\"/>
    </service>
    <service id=\"security.user_checker\" class=\"Symfony\\Component\\Security\\Core\\User\\UserChecker\" public=\"false\"/>
    <service id=\"security.expression_language\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage\" public=\"false\">
      <argument type=\"service\" id=\"cache.security_expression_language\"/>
    </service>
    <service id=\"security.authentication_utils\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils\" public=\"true\">
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"security.role_hierarchy\" class=\"Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy\" public=\"false\">
      <argument>%security.role_hierarchy.roles%</argument>
    </service>
    <service id=\"security.access.authenticated_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter\" public=\"false\">
      <tag name=\"security.voter\" priority=\"250\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
    </service>
    <service id=\"security.access.role_hierarchy_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter\" public=\"false\">
      <tag name=\"security.voter\" priority=\"245\"/>
      <argument type=\"service\" id=\"security.role_hierarchy\"/>
    </service>
    <service id=\"security.access.expression_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter\" public=\"false\">
      <tag name=\"security.voter\" priority=\"245\"/>
      <argument type=\"service\" id=\"security.expression_language\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
      <argument type=\"service\" id=\"security.authorization_checker\"/>
      <argument type=\"service\" id=\"security.role_hierarchy\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.firewall.map\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.h018nLA\"/>
      <argument type=\"iterator\">
        <argument key=\"security.firewall.map.context.main\" type=\"service\" id=\".security.request_matcher.3UEFixr\"/>
      </argument>
    </service>
    <service id=\"security.firewall.context\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext\" public=\"false\" abstract=\"true\">
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"security.exception_listener\"/>
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"security.firewall.config\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument type=\"collection\"/>
      <argument></argument>
    </service>
    <service id=\"security.logout_url_generator\" class=\"Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"null\"/>
      <call method=\"registerListener\">
        <argument>main</argument>
        <argument>security_logout</argument>
        <argument>logout</argument>
        <argument>_csrf_token</argument>
        <argument>null</argument>
        <argument>null</argument>
      </call>
    </service>
    <service id=\"security.user.provider.missing\" class=\"Symfony\\Component\\Security\\Core\\User\\MissingUserProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
    </service>
    <service id=\"security.user.provider.in_memory\" class=\"Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider\" public=\"false\" abstract=\"true\"/>
    <service id=\"security.user.provider.in_memory.user\" class=\"Symfony\\Component\\Security\\Core\\User\\User\" public=\"false\" abstract=\"true\">
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.1.</deprecated>
    </service>
    <service id=\"security.user.provider.ldap\" class=\"Symfony\\Component\\Security\\Core\\User\\LdapUserProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"security.user.provider.chain\" class=\"Symfony\\Component\\Security\\Core\\User\\ChainUserProvider\" public=\"false\" abstract=\"true\"/>
    <service id=\"security.http_utils\" class=\"Symfony\\Component\\Security\\Http\\HttpUtils\" public=\"false\">
      <argument type=\"service\" id=\"router.default\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"null\"/>
      <argument>{^https?://%s\$}i</argument>
      <argument>{^https://%s\$}i</argument>
    </service>
    <service id=\"security.validator.user_password\" class=\"Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator\" public=\"false\">
      <tag name=\"validator.constraint_validator\" alias=\"security.validator.user_password\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.encoder_factory.generic\"/>
    </service>
    <service id=\"cache.security_expression_language\" class=\"Symfony\\Component\\Cache\\Adapter\\TraceableAdapter\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"cache.security_expression_language.recorder_inner\"/>
    </service>
    <service id=\"security.authentication.listener.anonymous\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
    </service>
    <service id=\"security.authentication.provider.anonymous\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider\" public=\"false\">
      <argument></argument>
    </service>
    <service id=\"security.authentication.retry_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint\" public=\"false\">
      <argument>80</argument>
      <argument>443</argument>
    </service>
    <service id=\"security.authentication.basic_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint\" public=\"false\"/>
    <service id=\"security.channel_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.access_map\"/>
      <argument type=\"service\" id=\"security.authentication.retry_entry_point\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.access_map\" class=\"Symfony\\Component\\Security\\Http\\AccessMap\" public=\"false\">
      <call method=\"add\">
        <argument type=\"service\" id=\".security.request_matcher.5dJADCx\"/>
        <argument type=\"collection\">
          <argument>ROLE_ADMIN</argument>
        </argument>
        <argument>null</argument>
      </call>
      <call method=\"add\">
        <argument type=\"service\" id=\".security.request_matcher.NDUbcWM\"/>
        <argument type=\"collection\">
          <argument>ROLE_USER</argument>
        </argument>
        <argument>null</argument>
      </call>
    </service>
    <service id=\"security.context_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ContextListener\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"security.user.provider.concrete.our_db_provider\"/>
      </argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
    </service>
    <service id=\"security.logout_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"service\" id=\"security.logout.success_handler\"/>
      <argument></argument>
      <call method=\"addHandler\">
        <argument type=\"service\" id=\"security.logout.handler.csrf_token_clearing\"/>
      </call>
    </service>
    <service id=\"security.logout.handler.session\" class=\"Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler\" public=\"false\"/>
    <service id=\"security.logout.handler.cookie_clearing\" class=\"Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler\" public=\"false\" abstract=\"true\"/>
    <service id=\"security.logout.success_handler\" class=\"Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument>/</argument>
    </service>
    <service id=\"security.authentication.form_entry_point\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"http_kernel\"/>
    </service>
    <service id=\"security.authentication.listener.abstract\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.success_handler\"/>
      <argument type=\"service\" id=\"security.authentication.failure_handler\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.custom_success_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\CustomAuthenticationSuccessHandler\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument type=\"collection\"/>
      <argument></argument>
    </service>
    <service id=\"security.authentication.success_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"security.authentication.custom_failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\CustomAuthenticationFailureHandler\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument type=\"collection\"/>
    </service>
    <service id=\"security.authentication.failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.listener.form\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.success_handler\"/>
      <argument type=\"service\" id=\"security.authentication.failure_handler\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.listener.simple_form\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.success_handler\"/>
      <argument type=\"service\" id=\"security.authentication.failure_handler\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
    </service>
    <service id=\"security.authentication.simple_success_failure_handler\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.success_handler\"/>
      <argument type=\"service\" id=\"security.authentication.failure_handler\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
    </service>
    <service id=\"security.authentication.listener.simple_preauth\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
    </service>
    <service id=\"security.authentication.listener.x509\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.listener.json\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordJsonAuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"property_accessor\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.listener.remote_user\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\RemoteUserAuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.listener.basic\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.provider.dao\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"security.encoder_factory.generic\"/>
      <argument>true</argument>
    </service>
    <service id=\"security.authentication.provider.ldap_bind\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\LdapBindAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument>true</argument>
    </service>
    <service id=\"security.authentication.provider.simple\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument>null</argument>
      <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.2.</deprecated>
    </service>
    <service id=\"security.authentication.provider.pre_authenticated\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"security.exception_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.entry_point\" on-invalid=\"null\"/>
      <argument>null</argument>
      <argument type=\"service\" id=\"security.access.denied_handler\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument>false</argument>
    </service>
    <service id=\"security.authentication.switchuser_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"debug.security.access.decision_manager\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument>_switch_user</argument>
      <argument>ROLE_ALLOWED_TO_SWITCH</argument>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument>false</argument>
    </service>
    <service id=\"security.access_listener\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\AccessListener\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"debug.security.access.decision_manager\"/>
      <argument type=\"service\" id=\"security.access_map\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
    </service>
    <service id=\"security.authentication.listener.rememberme\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.rememberme\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument></argument>
      <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
    </service>
    <service id=\"security.authentication.provider.rememberme\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
    </service>
    <service id=\"security.rememberme.token.provider.in_memory\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider\" public=\"false\"/>
    <service id=\"security.authentication.rememberme.services.abstract\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"collection\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.rememberme.services.persistent\" class=\"Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices\" public=\"false\" abstract=\"true\">
      <argument type=\"collection\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.rememberme.services.simplehash\" class=\"Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices\" public=\"false\" abstract=\"true\">
      <argument type=\"collection\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.rememberme.response_listener\" class=\"Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"twig.extension.logout_url\" class=\"Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"security.logout_url_generator\"/>
    </service>
    <service id=\"twig.extension.security\" class=\"Symfony\\Bridge\\Twig\\Extension\\SecurityExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"data_collector.security\" class=\"Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@Security/Collector/security.html.twig\" id=\"security\" priority=\"270\"/>
      <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"security.role_hierarchy\"/>
      <argument type=\"service\" id=\"security.logout_url_generator\"/>
      <argument type=\"service\" id=\"debug.security.access.decision_manager\"/>
      <argument type=\"service\" id=\"security.firewall.map\"/>
      <argument type=\"service\" id=\"debug.security.firewall\" on-invalid=\"null\"/>
    </service>
    <service id=\"security.authentication.guard_handler\" class=\"Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument type=\"collection\"/>
      <call method=\"setSessionAuthenticationStrategy\">
        <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      </call>
    </service>
    <service id=\"security.authentication.provider.guard\" class=\"Symfony\\Component\\Security\\Guard\\Provider\\GuardAuthenticationProvider\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"security.authentication.listener.guard\" class=\"Symfony\\Component\\Security\\Guard\\Firewall\\GuardAuthenticationListener\" public=\"false\" abstract=\"true\">
      <tag name=\"monolog.logger\" channel=\"security\"/>
      <argument type=\"service\" id=\"security.authentication.guard_handler\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
    </service>
    <service id=\"debug.security.access.decision_manager\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\TraceableAccessDecisionManager\" public=\"false\">
      <argument type=\"service\" id=\"debug.security.access.decision_manager.inner\"/>
    </service>
    <service id=\"debug.security.voter.vote_listener\" class=\"Symfony\\Bundle\\SecurityBundle\\EventListener\\VoteListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <argument type=\"service\" id=\"debug.security.access.decision_manager\"/>
    </service>
    <service id=\"debug.security.firewall\" class=\"Symfony\\Bundle\\SecurityBundle\\Debug\\TraceableFirewallListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"security.firewall.map\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <argument type=\"service\" id=\"security.logout_url_generator\"/>
    </service>
    <service id=\"security.user.provider.concrete.our_db_provider\" class=\"Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider\" public=\"false\">
      <argument type=\"service\" id=\"doctrine\"/>
      <argument>App\\Entity\\User</argument>
      <argument>email</argument>
      <argument>null</argument>
    </service>
    <service id=\"security.firewall.map.config.main\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig\" public=\"false\">
      <argument>main</argument>
      <argument>security.user_checker</argument>
      <argument>.security.request_matcher.3UEFixr</argument>
      <argument>true</argument>
      <argument>false</argument>
      <argument>security.user.provider.concrete.our_db_provider</argument>
      <argument>main</argument>
      <argument>security.authentication.form_entry_point.main</argument>
      <argument>null</argument>
      <argument>null</argument>
      <argument type=\"collection\">
        <argument>form_login</argument>
        <argument>http_basic</argument>
        <argument>anonymous</argument>
      </argument>
      <argument>null</argument>
    </service>
    <service id=\".security.request_matcher.3UEFixr\" class=\"Symfony\\Component\\HttpFoundation\\RequestMatcher\" public=\"false\">
      <argument>^/</argument>
    </service>
    <service id=\"security.context_listener.0\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ContextListener\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"security.user.provider.concrete.our_db_provider\"/>
      </argument>
      <argument>main</argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
    </service>
    <service id=\"security.logout_listener.main\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"service\" id=\"security.logout.success_handler.main\"/>
      <argument type=\"collection\">
        <argument key=\"csrf_parameter\">_csrf_token</argument>
        <argument key=\"csrf_token_id\">logout</argument>
        <argument key=\"logout_path\">security_logout</argument>
      </argument>
      <call method=\"addHandler\">
        <argument type=\"service\" id=\"security.logout.handler.csrf_token_clearing\"/>
      </call>
      <call method=\"addHandler\">
        <argument type=\"service\" id=\"security.logout.handler.session\"/>
      </call>
    </service>
    <service id=\"security.logout.success_handler.main\" class=\"Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler\" public=\"false\">
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument>home</argument>
    </service>
    <service id=\"security.authentication.provider.dao.main\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider\" public=\"false\">
      <argument type=\"service\" id=\"security.user.provider.concrete.our_db_provider\"/>
      <argument type=\"service\" id=\"security.user_checker\"/>
      <argument>main</argument>
      <argument type=\"service\" id=\"security.encoder_factory.generic\"/>
      <argument>true</argument>
    </service>
    <service id=\"security.authentication.success_handler.main.form_login\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler\" public=\"false\">
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"collection\"/>
      <call method=\"setOptions\">
        <argument type=\"collection\">
          <argument key=\"login_path\">security_login</argument>
          <argument key=\"always_use_default_target_path\">false</argument>
          <argument key=\"default_target_path\">/</argument>
          <argument key=\"target_path_parameter\">_target_path</argument>
          <argument key=\"use_referer\">false</argument>
        </argument>
      </call>
      <call method=\"setProviderKey\">
        <argument>main</argument>
      </call>
    </service>
    <service id=\"security.authentication.failure_handler.main.form_login\" class=\"Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler\" public=\"false\">
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <call method=\"setOptions\">
        <argument type=\"collection\">
          <argument key=\"login_path\">security_login</argument>
          <argument key=\"failure_path\">null</argument>
          <argument key=\"failure_forward\">false</argument>
          <argument key=\"failure_path_parameter\">_failure_path</argument>
        </argument>
      </call>
    </service>
    <service id=\"security.authentication.listener.form.main\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener\" public=\"false\">
      <tag name=\"security.remember_me_aware\" id=\"main\" provider=\"security.user.provider.concrete.our_db_provider\"/>
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument>main</argument>
      <argument type=\"service\" id=\"security.authentication.success_handler.main.form_login\"/>
      <argument type=\"service\" id=\"security.authentication.failure_handler.main.form_login\"/>
      <argument type=\"collection\">
        <argument key=\"check_path\">security_login</argument>
        <argument key=\"use_forward\">false</argument>
        <argument key=\"require_previous_session\">false</argument>
        <argument key=\"username_parameter\">_username</argument>
        <argument key=\"password_parameter\">_password</argument>
        <argument key=\"csrf_parameter\">_csrf_token</argument>
        <argument key=\"csrf_token_id\">authenticate</argument>
        <argument key=\"post_only\">true</argument>
      </argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"null\"/>
      <argument>null</argument>
    </service>
    <service id=\"security.authentication.form_entry_point.main\" class=\"Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint\" public=\"false\">
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument>security_login</argument>
      <argument>false</argument>
    </service>
    <service id=\"security.authentication.listener.basic.main\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
      <argument>main</argument>
      <argument type=\"service\" id=\"security.authentication.form_entry_point.main\"/>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <call method=\"setSessionAuthenticationStrategy\">
        <argument type=\"service\" id=\"security.authentication.session_strategy\"/>
      </call>
    </service>
    <service id=\"security.authentication.listener.anonymous.main\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument>%container.build_hash%</argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"security.authentication.manager\"/>
    </service>
    <service id=\"security.authentication.provider.anonymous.main\" class=\"Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider\" public=\"false\">
      <argument>%container.build_hash%</argument>
    </service>
    <service id=\"security.exception_listener.main\" class=\"Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
      <argument type=\"service\" id=\"security.authentication.trust_resolver\"/>
      <argument type=\"service\" id=\"security.http_utils\"/>
      <argument>main</argument>
      <argument type=\"service\" id=\"security.authentication.form_entry_point.main\"/>
      <argument>null</argument>
      <argument>null</argument>
      <argument type=\"service\" id=\"monolog.logger.security\" on-invalid=\"null\"/>
      <argument>false</argument>
    </service>
    <service id=\"security.firewall.map.context.main\" class=\"Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext\" public=\"false\">
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"security.channel_listener\"/>
        <argument type=\"service\" id=\"security.context_listener.0\"/>
        <argument type=\"service\" id=\"security.authentication.listener.form.main\"/>
        <argument type=\"service\" id=\"security.authentication.listener.basic.main\"/>
        <argument type=\"service\" id=\"security.authentication.listener.anonymous.main\"/>
        <argument type=\"service\" id=\"security.access_listener\"/>
      </argument>
      <argument type=\"service\" id=\"security.exception_listener.main\"/>
      <argument type=\"service\" id=\"security.logout_listener.main\"/>
      <argument type=\"service\" id=\"security.firewall.map.config.main\"/>
    </service>
    <service id=\".service_locator.h018nLA\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"security.firewall.map.context.main\" type=\"service\" id=\"security.firewall.map.context.main\"/>
      </argument>
    </service>
    <service id=\".security.request_matcher.5dJADCx\" class=\"Symfony\\Component\\HttpFoundation\\RequestMatcher\" public=\"false\">
      <argument>^/admin</argument>
    </service>
    <service id=\".security.request_matcher.NDUbcWM\" class=\"Symfony\\Component\\HttpFoundation\\RequestMatcher\" public=\"false\">
      <argument>^/member</argument>
    </service>
    <service id=\"security.command.user_password_encoder\" class=\"Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"security:encode-password\"/>
      <argument type=\"service\" id=\"security.encoder_factory.generic\"/>
      <argument type=\"collection\">
        <argument>App\\Entity\\User</argument>
      </argument>
      <call method=\"setName\">
        <argument>security:encode-password</argument>
      </call>
    </service>
    <service id=\".4_Swift_Transport_Esmtp_Auth_NTLMAuthenticator~Pd9zfs1\" class=\"Swift_Transport_Esmtp_Auth_NTLMAuthenticator\" public=\"false\"/>
    <service id=\".3_Swift_Transport_Esmtp_Auth_PlainAuthenticator~Pd9zfs1\" class=\"Swift_Transport_Esmtp_Auth_PlainAuthenticator\" public=\"false\"/>
    <service id=\".2_Swift_Transport_Esmtp_Auth_LoginAuthenticator~Pd9zfs1\" class=\"Swift_Transport_Esmtp_Auth_LoginAuthenticator\" public=\"false\"/>
    <service id=\".1_Swift_Transport_Esmtp_Auth_CramMd5Authenticator~Pd9zfs1\" class=\"Swift_Transport_Esmtp_Auth_CramMd5Authenticator\" public=\"false\"/>
    <service id=\"swiftmailer.mailer.abstract\" class=\"Swift_Mailer\" public=\"true\" abstract=\"true\">
      <argument type=\"service\" id=\"swiftmailer.mailer.default.transport.spool\"/>
    </service>
    <service id=\"swiftmailer.transport.smtp.configurator.abstract\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\SmtpTransportConfigurator\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.sendmail.abstract\" class=\"Swift_Transport_SendmailTransport\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.null.abstract\" class=\"Swift_Transport_NullTransport\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.failover\" class=\"Swift_Transport_FailoverTransport\" public=\"false\"/>
    <service id=\"swiftmailer.transport.buffer.abstract\" class=\"Swift_Transport_StreamBuffer\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"swiftmailer.transport.replacementfactory\"/>
    </service>
    <service id=\"swiftmailer.transport.authhandler.abstract\" class=\"Swift_Transport_Esmtp_AuthHandler\" public=\"false\" abstract=\"true\">
      <argument type=\"collection\">
        <argument type=\"service\" id=\".1_Swift_Transport_Esmtp_Auth_CramMd5Authenticator~Pd9zfs1\"/>
        <argument type=\"service\" id=\".2_Swift_Transport_Esmtp_Auth_LoginAuthenticator~Pd9zfs1\"/>
        <argument type=\"service\" id=\".3_Swift_Transport_Esmtp_Auth_PlainAuthenticator~Pd9zfs1\"/>
        <argument type=\"service\" id=\".4_Swift_Transport_Esmtp_Auth_NTLMAuthenticator~Pd9zfs1\"/>
      </argument>
    </service>
    <service id=\"swiftmailer.transport.eventdispatcher.abstract\" class=\"Swift_Events_SimpleEventDispatcher\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.replacementfactory\" class=\"Swift_StreamFilters_StringReplacementFilterFactory\" public=\"false\"/>
    <service id=\"swiftmailer.plugin.redirecting.abstract\" class=\"Swift_Plugins_RedirectingPlugin\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.plugin.antiflood.abstract\" class=\"Swift_Plugins_AntiFloodPlugin\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.plugin.impersonate.abstract\" class=\"Swift_Plugins_ImpersonatePlugin\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.plugin.messagelogger.abstract\" class=\"Swift_Plugins_MessageLogger\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.smtp.abstract\" class=\"Swift_Transport_EsmtpTransport\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.transport.spool.abstract\" class=\"Swift_Transport_SpoolTransport\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.spool.file.abstract\" class=\"Swift_FileSpool\" public=\"false\" abstract=\"true\">
      <argument>/var/www/public/DevLaon/src/../data/swiftmailer/spool</argument>
    </service>
    <service id=\"swiftmailer.spool.memory.abstract\" class=\"Swift_MemorySpool\" public=\"false\" abstract=\"true\"/>
    <service id=\"swiftmailer.email_sender.listener\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"service\" id=\"monolog.logger\" on-invalid=\"null\"/>
    </service>
    <service id=\"swiftmailer.data_collector\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@Swiftmailer/Collector/swiftmailer.html.twig\" id=\"swiftmailer\" priority=\"245\"/>
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"swiftmailer.command.debug\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\Command\\DebugCommand\">
      <tag name=\"console.command\" command=\"debug:swiftmailer\"/>
      <call method=\"setName\">
        <argument>debug:swiftmailer</argument>
      </call>
    </service>
    <service id=\"swiftmailer.command.new_email\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand\">
      <tag name=\"console.command\" command=\"swiftmailer:email:send\"/>
      <call method=\"setName\">
        <argument>swiftmailer:email:send</argument>
      </call>
    </service>
    <service id=\"swiftmailer.command.send_email\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand\">
      <tag name=\"console.command\" command=\"swiftmailer:spool:send\"/>
      <call method=\"setName\">
        <argument>swiftmailer:spool:send</argument>
      </call>
    </service>
    <service id=\"swiftmailer.mailer.default.transport.eventdispatcher\" class=\"Swift_Events_SimpleEventDispatcher\" public=\"false\"/>
    <service id=\"swiftmailer.mailer.default.transport.dynamic\" class=\"Swift_Transport\">
      <argument type=\"collection\">
        <argument key=\"transport\">smtp</argument>
        <argument key=\"url\">%env(MAILER_URL)%</argument>
        <argument key=\"username\">null</argument>
        <argument key=\"password\">null</argument>
        <argument key=\"host\">localhost</argument>
        <argument key=\"port\">null</argument>
        <argument key=\"timeout\">30</argument>
        <argument key=\"source_ip\">null</argument>
        <argument key=\"local_domain\">null</argument>
        <argument key=\"encryption\">null</argument>
        <argument key=\"auth_mode\">null</argument>
        <argument key=\"command\">/usr/sbin/sendmail -bs</argument>
      </argument>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"swiftmailer.mailer.default.transport.eventdispatcher\"/>
      <factory class=\"Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\SwiftmailerTransportFactory\" method=\"createTransport\"/>
    </service>
    <service id=\"swiftmailer.mailer.default\" class=\"Swift_Mailer\" public=\"true\">
      <argument type=\"service\" id=\"swiftmailer.mailer.default.transport.spool\"/>
    </service>
    <service id=\"swiftmailer.mailer.default.spool.memory\" class=\"Swift_MemorySpool\" public=\"false\"/>
    <service id=\"swiftmailer.mailer.default.transport.spool\" class=\"Swift_Transport_SpoolTransport\" public=\"false\">
      <argument type=\"service\" id=\"swiftmailer.mailer.default.transport.eventdispatcher\"/>
      <argument type=\"service\" id=\"swiftmailer.mailer.default.spool.memory\"/>
      <call method=\"registerPlugin\">
        <argument type=\"service\" id=\"swiftmailer.mailer.default.plugin.messagelogger\"/>
      </call>
    </service>
    <service id=\"swiftmailer.mailer.default.plugin.messagelogger\" class=\"Swift_Plugins_MessageLogger\" public=\"true\">
      <tag name=\"swiftmailer.default.plugin\"/>
    </service>
    <service id=\"twig\" class=\"Twig\\Environment\" public=\"true\">
      <argument type=\"service\" id=\"twig.loader.native_filesystem\"/>
      <argument type=\"collection\">
        <argument key=\"debug\">true</argument>
        <argument key=\"strict_variables\">true</argument>
        <argument key=\"autoescape\">name</argument>
        <argument key=\"cache\">/var/www/public/DevLaon/var/cache/dev/twig</argument>
        <argument key=\"charset\">UTF-8</argument>
      </argument>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.security_csrf\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.logout_url\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.security\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.profiler\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.trans\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.assets\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.code\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.routing\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.yaml\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.debug.stopwatch\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.expression\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.httpkernel\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.httpfoundation\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.weblink\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.form\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.dump\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"doctrine.twig.doctrine_extension\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.webprofiler\"/>
      </call>
      <call method=\"addGlobal\">
        <argument>app</argument>
        <argument type=\"service\" id=\"twig.app_variable\"/>
      </call>
      <call method=\"addRuntimeLoader\">
        <argument type=\"service\" id=\"twig.runtime_loader\"/>
      </call>
      <configurator service=\"twig.configurator.environment\" method=\"configure\"/>
    </service>
    <service id=\"twig.app_variable\" class=\"Symfony\\Bridge\\Twig\\AppVariable\" public=\"false\">
      <call method=\"setEnvironment\">
        <argument>dev</argument>
      </call>
      <call method=\"setDebug\">
        <argument>true</argument>
      </call>
      <call method=\"setTokenStorage\">
        <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"ignore\"/>
      </call>
      <call method=\"setRequestStack\">
        <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"twig.cache_warmer\" class=\"Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <tag name=\"container.service_subscriber\" id=\"twig\"/>
      <argument type=\"service\" id=\".service_locator.lSIKWsr.twig.cache_warmer\"/>
      <argument>null</argument>
      <argument type=\"collection\">
        <argument key=\"/var/www/public/DevLaon/vendor/symfony/twig-bridge/Resources/views/Form\">null</argument>
      </argument>
    </service>
    <service id=\"twig.template_iterator\" class=\"Symfony\\Bundle\\TwigBundle\\TemplateIterator\" public=\"false\">
      <argument type=\"service\" id=\"kernel\"/>
      <argument>/var/www/public/DevLaon/src</argument>
      <argument type=\"collection\">
        <argument key=\"/var/www/public/DevLaon/vendor/symfony/twig-bridge/Resources/views/Form\">null</argument>
      </argument>
      <argument>/var/www/public/DevLaon/templates</argument>
    </service>
    <service id=\"twig.template_cache_warmer\" class=\"Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <tag name=\"container.service_subscriber\" id=\"twig\"/>
      <argument type=\"service\" id=\".service_locator.lSIKWsr.twig.template_cache_warmer\"/>
      <argument type=\"service\" id=\"twig.template_iterator\"/>
    </service>
    <service id=\"twig.loader.native_filesystem\" class=\"Symfony\\Bundle\\TwigBundle\\Loader\\NativeFilesystemLoader\" public=\"false\">
      <tag name=\"twig.loader\"/>
      <argument type=\"collection\"/>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views</argument>
        <argument>Framework</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views</argument>
        <argument>!Framework</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-bundle/Resources/views</argument>
        <argument>Doctrine</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/doctrine/doctrine-bundle/Resources/views</argument>
        <argument>!Doctrine</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/security-bundle/Resources/views</argument>
        <argument>Security</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/security-bundle/Resources/views</argument>
        <argument>!Security</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/swiftmailer-bundle/Resources/views</argument>
        <argument>Swiftmailer</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/swiftmailer-bundle/Resources/views</argument>
        <argument>!Swiftmailer</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views</argument>
        <argument>Twig</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views</argument>
        <argument>!Twig</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views</argument>
        <argument>WebProfiler</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/web-profiler-bundle/Resources/views</argument>
        <argument>!WebProfiler</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/debug-bundle/Resources/views</argument>
        <argument>Debug</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/debug-bundle/Resources/views</argument>
        <argument>!Debug</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/templates</argument>
      </call>
      <call method=\"addPath\">
        <argument>/var/www/public/DevLaon/vendor/symfony/twig-bridge/Resources/views/Form</argument>
      </call>
    </service>
    <service id=\"twig.loader.chain\" class=\"Twig\\Loader\\ChainLoader\" public=\"false\"/>
    <service id=\"twig.extension.profiler\" class=\"Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"twig.profile\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\"/>
    </service>
    <service id=\"twig.profile\" class=\"Twig\\Profiler\\Profile\" public=\"false\"/>
    <service id=\"data_collector.twig\" class=\"Symfony\\Bridge\\Twig\\DataCollector\\TwigDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/twig.html.twig\" id=\"twig\" priority=\"257\"/>
      <argument type=\"service\" id=\"twig.profile\"/>
      <argument type=\"service\" id=\"twig\"/>
    </service>
    <service id=\"twig.extension.trans\" class=\"Symfony\\Bridge\\Twig\\Extension\\TranslationExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"translator.data_collector\" on-invalid=\"null\"/>
    </service>
    <service id=\"twig.extension.assets\" class=\"Symfony\\Bridge\\Twig\\Extension\\AssetExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"assets.packages\"/>
    </service>
    <service id=\"twig.extension.code\" class=\"Symfony\\Bridge\\Twig\\Extension\\CodeExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument>UTF-8</argument>
    </service>
    <service id=\"twig.extension.routing\" class=\"Symfony\\Bridge\\Twig\\Extension\\RoutingExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"router.default\"/>
    </service>
    <service id=\"twig.extension.yaml\" class=\"Symfony\\Bridge\\Twig\\Extension\\YamlExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.extension.debug.stopwatch\" class=\"Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\"/>
      <argument>true</argument>
    </service>
    <service id=\"twig.extension.expression\" class=\"Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.extension.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.runtime.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime\" public=\"false\">
      <tag name=\"twig.runtime\"/>
      <argument type=\"service\" id=\"fragment.handler\"/>
    </service>
    <service id=\"twig.extension.httpfoundation\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpFoundationExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"url_helper\"/>
    </service>
    <service id=\"twig.extension.debug\" class=\"Twig\\Extension\\DebugExtension\" public=\"false\"/>
    <service id=\"twig.extension.weblink\" class=\"Symfony\\Bridge\\Twig\\Extension\\WebLinkExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"twig.translation.extractor\" class=\"Symfony\\Bridge\\Twig\\Translation\\TwigExtractor\" public=\"false\">
      <tag name=\"translation.extractor\" alias=\"twig\"/>
      <argument type=\"service\" id=\"twig\"/>
    </service>
    <service id=\"twig.exception_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <argument>twig.controller.exception::showAction</argument>
      <argument type=\"service\" id=\"monolog.logger.request\" on-invalid=\"null\"/>
      <argument>true</argument>
    </service>
    <service id=\"twig.controller.exception\" class=\"Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController\" public=\"true\">
      <argument type=\"service\" id=\"twig\"/>
      <argument>true</argument>
    </service>
    <service id=\"twig.controller.preview_error\" class=\"Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController\" public=\"true\">
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument>twig.controller.exception::showAction</argument>
    </service>
    <service id=\"twig.configurator.environment\" class=\"Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator\" public=\"false\">
      <argument>F j, Y H:i</argument>
      <argument>%d days</argument>
      <argument>null</argument>
      <argument>0</argument>
      <argument>.</argument>
      <argument>,</argument>
    </service>
    <service id=\"twig.runtime_loader\" class=\"Twig\\RuntimeLoader\\ContainerRuntimeLoader\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.uxa.tru\"/>
    </service>
    <service id=\"twig.extension.form\" class=\"Symfony\\Bridge\\Twig\\Extension\\FormExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"collection\">
        <argument type=\"service\" id=\"service_container\"/>
        <argument>twig.form.renderer</argument>
      </argument>
    </service>
    <service id=\"twig.form.engine\" class=\"Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine\" public=\"false\">
      <argument>%twig.form.resources%</argument>
      <argument type=\"service\" id=\"twig\"/>
    </service>
    <service id=\"twig.form.renderer\" class=\"Symfony\\Component\\Form\\FormRenderer\" public=\"false\">
      <tag name=\"twig.runtime\"/>
      <argument type=\"service\" id=\"twig.form.engine\"/>
      <argument type=\"service\" id=\"security.csrf.token_manager\" on-invalid=\"null\"/>
    </service>
    <service id=\"twig.command.debug\" class=\"Symfony\\Bridge\\Twig\\Command\\DebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:twig\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument>%kernel.bundles_metadata%</argument>
      <argument>/var/www/public/DevLaon/templates</argument>
      <argument>/var/www/public/DevLaon/src</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:twig</argument>
      </call>
    </service>
    <service id=\"twig.command.lint\" class=\"Symfony\\Bundle\\TwigBundle\\Command\\LintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:twig\"/>
      <argument type=\"service\" id=\"twig\"/>
      <call method=\"setName\">
        <argument>lint:twig</argument>
      </call>
    </service>
    <service id=\".2_HtmlDumper~9ucJZUH\" class=\"Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper\" public=\"false\">
      <argument>null</argument>
      <argument>UTF-8</argument>
      <argument>1</argument>
      <call method=\"setDisplayOptions\">
        <argument type=\"collection\">
          <argument key=\"maxStringLength\">4096</argument>
          <argument key=\"fileLinkFormat\" type=\"service\" id=\"debug.file_link_formatter\"/>
        </argument>
      </call>
    </service>
    <service id=\".1_NonceGenerator~9ucJZUH\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Csp\\NonceGenerator\" public=\"false\"/>
    <service id=\"web_profiler.controller.profiler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController\" public=\"true\">
      <argument type=\"service\" id=\"router.default\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"profiler\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument>%data_collector.templates%</argument>
      <argument type=\"service\" id=\"web_profiler.csp.handler\"/>
      <argument>/var/www/public/DevLaon</argument>
    </service>
    <service id=\"web_profiler.controller.router\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController\" public=\"true\">
      <argument type=\"service\" id=\"profiler\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"null\"/>
    </service>
    <service id=\"web_profiler.controller.exception\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController\" public=\"true\">
      <argument type=\"service\" id=\"profiler\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument>true</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\"/>
    </service>
    <service id=\"web_profiler.csp.handler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Csp\\ContentSecurityPolicyHandler\" public=\"false\">
      <argument type=\"service\" id=\".1_NonceGenerator~9ucJZUH\"/>
    </service>
    <service id=\"twig.extension.webprofiler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\".2_HtmlDumper~9ucJZUH\"/>
    </service>
    <service id=\"debug.file_link_formatter.url_format\" class=\"string\" public=\"false\">
      <argument type=\"service\" id=\"router.default\"/>
      <argument>_profiler_open_file</argument>
      <argument>?file=%%f&amp;line=%%l#line%%l</argument>
      <factory class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" method=\"generateUrlFormat\"/>
    </service>
    <service id=\"web_profiler.debug_toolbar\" class=\"Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument>false</argument>
      <argument>2</argument>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"ignore\"/>
      <argument>^/((index|app(_[\\w]+)?)\\.php/)?_wdt</argument>
      <argument type=\"service\" id=\"web_profiler.csp.handler\"/>
    </service>
    <service id=\"monolog.logger\" class=\"Symfony\\Bridge\\Monolog\\Logger\" public=\"false\">
      <argument>app</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"useMicrosecondTimestamps\">
        <argument>true</argument>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger_prototype\" class=\"Symfony\\Bridge\\Monolog\\Logger\" abstract=\"true\">
      <argument></argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.activation_strategy.not_found\" class=\"Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\NotFoundActivationStrategy\" abstract=\"true\"/>
    <service id=\"monolog.handler.fingers_crossed.error_level_activation_strategy\" class=\"Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy\" abstract=\"true\"/>
    <service id=\"monolog.formatter.chrome_php\" class=\"Monolog\\Formatter\\ChromePHPFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.gelf_message\" class=\"Monolog\\Formatter\\GelfMessageFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.html\" class=\"Monolog\\Formatter\\HtmlFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.json\" class=\"Monolog\\Formatter\\JsonFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.line\" class=\"Monolog\\Formatter\\LineFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.loggly\" class=\"Monolog\\Formatter\\LogglyFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.normalizer\" class=\"Monolog\\Formatter\\NormalizerFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.scalar\" class=\"Monolog\\Formatter\\ScalarFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.wildfire\" class=\"Monolog\\Formatter\\WildfireFormatter\" public=\"false\"/>
    <service id=\"monolog.formatter.logstash\" class=\"Monolog\\Formatter\\LogstashFormatter\" public=\"false\">
      <argument>app</argument>
    </service>
    <service id=\"monolog.processor.psr_log_message\" class=\"Monolog\\Processor\\PsrLogMessageProcessor\" public=\"false\"/>
    <service id=\"monolog.handler.main\" class=\"Monolog\\Handler\\StreamHandler\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>/var/www/public/DevLaon/var/log/dev.log</argument>
      <argument>100</argument>
      <argument>true</argument>
      <argument>null</argument>
      <argument>false</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"monolog.processor.psr_log_message\"/>
      </call>
    </service>
    <service id=\"monolog.handler.console\" class=\"Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>null</argument>
      <argument>true</argument>
      <argument type=\"collection\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\".5_HtmlDescriptor~w5sUpF9\" class=\"Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor\" public=\"false\">
      <argument type=\"service\" id=\"var_dumper.html_dumper\"/>
    </service>
    <service id=\".4_CliDescriptor~w5sUpF9\" class=\"Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor\" public=\"false\">
      <argument type=\"service\" id=\"var_dumper.cli_dumper\"/>
    </service>
    <service id=\".3_CliContextProvider~w5sUpF9\" class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider\" public=\"false\"/>
    <service id=\".2_RequestContextProvider~w5sUpF9\" class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\".1_SourceContextProvider~w5sUpF9\" class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider\" public=\"false\">
      <argument>UTF-8</argument>
      <argument>/var/www/public/DevLaon</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
    </service>
    <service id=\"twig.extension.dump\" class=\"Symfony\\Bridge\\Twig\\Extension\\DumpExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"var_dumper.cloner\"/>
      <argument type=\"service\" id=\"var_dumper.html_dumper\"/>
    </service>
    <service id=\"data_collector.dump\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector\" public=\"true\">
      <tag name=\"data_collector\" id=\"dump\" template=\"@Debug/Profiler/dump.html.twig\" priority=\"240\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"/>
      <argument>UTF-8</argument>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"var_dumper.server_connection\"/>
    </service>
    <service id=\"debug.dump_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DumpListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <argument type=\"service\" id=\"var_dumper.cloner\"/>
      <argument type=\"service\" id=\"var_dumper.cli_dumper\"/>
      <argument type=\"service\" id=\"var_dumper.server_connection\"/>
    </service>
    <service id=\"var_dumper.cloner\" class=\"Symfony\\Component\\VarDumper\\Cloner\\VarCloner\" public=\"true\">
      <call method=\"setMaxItems\">
        <argument>2500</argument>
      </call>
      <call method=\"setMinDepth\">
        <argument>1</argument>
      </call>
      <call method=\"setMaxString\">
        <argument>-1</argument>
      </call>
      <call method=\"addCasters\">
        <argument type=\"collection\">
          <argument key=\"Closure\">Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster::unsetClosureFileInfo</argument>
        </argument>
      </call>
    </service>
    <service id=\"var_dumper.cli_dumper\" class=\"Symfony\\Component\\VarDumper\\Dumper\\CliDumper\" public=\"false\">
      <argument>null</argument>
      <argument>UTF-8</argument>
      <argument>0</argument>
      <call method=\"setDisplayOptions\">
        <argument type=\"collection\">
          <argument key=\"fileLinkFormat\" type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"/>
        </argument>
      </call>
    </service>
    <service id=\"var_dumper.html_dumper\" class=\"Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper\" public=\"false\">
      <argument>null</argument>
      <argument>UTF-8</argument>
      <argument>0</argument>
      <call method=\"setDisplayOptions\">
        <argument type=\"collection\">
          <argument key=\"fileLinkFormat\" type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"/>
        </argument>
      </call>
    </service>
    <service id=\"var_dumper.server_connection\" class=\"Symfony\\Component\\VarDumper\\Server\\Connection\" public=\"false\">
      <argument>tcp://%env(VAR_DUMPER_SERVER)%</argument>
      <argument type=\"collection\">
        <argument key=\"source\" type=\"service\" id=\".1_SourceContextProvider~w5sUpF9\"/>
        <argument key=\"request\" type=\"service\" id=\".2_RequestContextProvider~w5sUpF9\"/>
        <argument key=\"cli\" type=\"service\" id=\".3_CliContextProvider~w5sUpF9\"/>
      </argument>
    </service>
    <service id=\"var_dumper.dump_server\" class=\"Symfony\\Component\\VarDumper\\Server\\DumpServer\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"debug\"/>
      <argument>tcp://%env(VAR_DUMPER_SERVER)%</argument>
      <argument type=\"service\" id=\"monolog.logger.debug\" on-invalid=\"null\"/>
    </service>
    <service id=\"var_dumper.command.server_dump\" class=\"Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:dump\"/>
      <argument type=\"service\" id=\"var_dumper.dump_server\"/>
      <argument type=\"collection\">
        <argument key=\"cli\" type=\"service\" id=\".4_CliDescriptor~w5sUpF9\"/>
        <argument key=\"html\" type=\"service\" id=\".5_HtmlDescriptor~w5sUpF9\"/>
      </argument>
      <call method=\"setName\">
        <argument>server:dump</argument>
      </call>
    </service>
    <service id=\"maker.file_manager\" class=\"Symfony\\Bundle\\MakerBundle\\FileManager\" public=\"false\">
      <argument type=\"service\" id=\"filesystem\"/>
      <argument type=\"service\" id=\"maker.autoloader_util\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument>/var/www/public/DevLaon/templates</argument>
    </service>
    <service id=\"maker.autoloader_finder\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\ComposerAutoloaderFinder\" public=\"false\">
      <argument>App</argument>
    </service>
    <service id=\"maker.autoloader_util\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\AutoloaderUtil\" public=\"false\">
      <argument type=\"service\" id=\"maker.autoloader_finder\"/>
    </service>
    <service id=\"maker.event_registry\" class=\"Symfony\\Bundle\\MakerBundle\\EventRegistry\" public=\"false\">
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
    </service>
    <service id=\"maker.console_error_listener\" class=\"Symfony\\Bundle\\MakerBundle\\Event\\ConsoleErrorSubscriber\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
    </service>
    <service id=\"maker.doctrine_helper\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\DoctrineHelper\" public=\"false\">
      <argument>App\\Entity</argument>
      <argument type=\"service\" id=\"doctrine\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"maker.auto_command.abstract\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.generator\" class=\"Symfony\\Bundle\\MakerBundle\\Generator\" public=\"false\">
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument>App</argument>
    </service>
    <service id=\"maker.entity_class_generator\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\EntityClassGenerator\" public=\"false\">
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.user_class_builder\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\UserClassBuilder\" public=\"false\"/>
    <service id=\"maker.security_config_updater\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\SecurityConfigUpdater\" public=\"false\"/>
    <service id=\"maker.renderer.form_type_renderer\" class=\"Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer\" public=\"false\">
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.maker.make_authenticator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeAuthenticator\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.security_config_updater\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
    </service>
    <service id=\"maker.maker.make_command\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCommand\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_controller\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeController\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
    </service>
    <service id=\"maker.maker.make_crud\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCrud\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
    </service>
    <service id=\"maker.maker.make_entity\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeEntity\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument>/var/www/public/DevLaon</argument>
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.maker.make_fixtures\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFixtures\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeForm\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
    </service>
    <service id=\"maker.maker.make_functional_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFunctionalTest\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_registration_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeRegistrationForm\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
      <argument type=\"service\" id=\"router.default\"/>
    </service>
    <service id=\"maker.maker.make_serializer_encoder\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerEncoder\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_serializer_normalizer\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerNormalizer\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_subscriber\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSubscriber\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.event_registry\"/>
    </service>
    <service id=\"maker.maker.make_twig_extension\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeTwigExtension\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_unit_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUnitTest\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_validator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeValidator\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_voter\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeVoter\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_user\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUser\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.user_class_builder\"/>
      <argument type=\"service\" id=\"maker.security_config_updater\"/>
    </service>
    <service id=\"maker.maker.make_migration\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeMigration\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument>/var/www/public/DevLaon</argument>
    </service>
    <service id=\"web_server.command.server_run\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerRunCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:run\"/>
      <argument>/var/www/public/DevLaon/public</argument>
      <argument>dev</argument>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"setName\">
        <argument>server:run</argument>
      </call>
    </service>
    <service id=\"web_server.command.server_start\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStartCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:start\"/>
      <argument>/var/www/public/DevLaon/public</argument>
      <argument>dev</argument>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"setName\">
        <argument>server:start</argument>
      </call>
    </service>
    <service id=\"web_server.command.server_stop\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStopCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:stop\"/>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"setName\">
        <argument>server:stop</argument>
      </call>
    </service>
    <service id=\"web_server.command.server_status\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerStatusCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:status\"/>
      <argument>/var/www/public/DevLaon</argument>
      <call method=\"setName\">
        <argument>server:status</argument>
      </call>
    </service>
    <service id=\"web_server.command.server_log\" class=\"Symfony\\Bundle\\WebServerBundle\\Command\\ServerLogCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"server:log\"/>
      <call method=\"setName\">
        <argument>server:log</argument>
      </call>
    </service>
    <service id=\"doctrine.fixtures_load_command\" class=\"Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:fixtures:load\"/>
      <argument type=\"service\" id=\"doctrine.fixtures.loader\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:fixtures:load</argument>
      </call>
    </service>
    <service id=\"doctrine.fixtures.loader\" class=\"Doctrine\\Bundle\\FixturesBundle\\Loader\\SymfonyFixturesLoader\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
      <call method=\"addFixtures\">
        <argument type=\"collection\">
          <argument type=\"collection\">
            <argument key=\"fixture\" type=\"service\" id=\"App\\DataFixtures\\AppFixtures\"/>
            <argument key=\"groups\" type=\"collection\"/>
          </argument>
        </argument>
      </call>
    </service>
    <service id=\".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\ArticleController\" class=\"App\\Controller\\ArticleController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\ArticleController\" class=\"App\\Controller\\ArticleController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Controller\\ArticleController\" class=\"App\\Controller\\ArticleController\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\SecurityController\" class=\"App\\Controller\\SecurityController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\SecurityController\" class=\"App\\Controller\\SecurityController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Controller\\SecurityController\" class=\"App\\Controller\\SecurityController\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface.0.App\\DataFixtures\\AppFixtures\" class=\"App\\DataFixtures\\AppFixtures\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\DataFixtures\\AppFixtures\" class=\"App\\DataFixtures\\AppFixtures\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\ArticleType\" class=\"App\\Form\\ArticleType\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Form\\ArticleType\" class=\"App\\Form\\ArticleType\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\CommentType\" class=\"App\\Form\\CommentType\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Form\\CommentType\" class=\"App\\Form\\CommentType\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\RegistrationType\" class=\"App\\Form\\RegistrationType\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Form\\RegistrationType\" class=\"App\\Form\\RegistrationType\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleLikeRepository\" class=\"App\\Repository\\ArticleLikeRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\ArticleLikeRepository\" class=\"App\\Repository\\ArticleLikeRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleRepository\" class=\"App\\Repository\\ArticleRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\ArticleRepository\" class=\"App\\Repository\\ArticleRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CategoryRepository\" class=\"App\\Repository\\CategoryRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\CategoryRepository\" class=\"App\\Repository\\CategoryRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CommentRepository\" class=\"App\\Repository\\CommentRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\CommentRepository\" class=\"App\\Repository\\CommentRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\UserRepository\" class=\"App\\Repository\\UserRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\UserRepository\" class=\"App\\Repository\\UserRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\"maker.auto_command.make_auth\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:auth\"/>
      <argument type=\"service\" id=\"maker.maker.make_authenticator\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:auth</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_command\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:command\"/>
      <argument type=\"service\" id=\"maker.maker.make_command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:command</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_controller\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:controller\"/>
      <argument type=\"service\" id=\"maker.maker.make_controller\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:controller</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_crud\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:crud\"/>
      <argument type=\"service\" id=\"maker.maker.make_crud\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:crud</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_entity\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:entity\"/>
      <argument type=\"service\" id=\"maker.maker.make_entity\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:entity</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_fixtures\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:fixtures\"/>
      <argument type=\"service\" id=\"maker.maker.make_fixtures\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:fixtures</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_form\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:form\"/>
      <argument type=\"service\" id=\"maker.maker.make_form\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:form</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_functional_test\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:functional-test\"/>
      <argument type=\"service\" id=\"maker.maker.make_functional_test\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:functional-test</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_registration_form\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:register-form\"/>
      <argument type=\"service\" id=\"maker.maker.make_registration_form\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:register-form</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_serializer_encoder\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:serializer:encoder\"/>
      <argument type=\"service\" id=\"maker.maker.make_serializer_encoder\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:serializer:encoder</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_serializer_normalizer\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:serializer:normalizer\"/>
      <argument type=\"service\" id=\"maker.maker.make_serializer_normalizer\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:serializer:normalizer</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_subscriber\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:subscriber\"/>
      <argument type=\"service\" id=\"maker.maker.make_subscriber\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:subscriber</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_twig_extension\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:twig-extension\"/>
      <argument type=\"service\" id=\"maker.maker.make_twig_extension\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:twig-extension</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_unit_test\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:unit-test\"/>
      <argument type=\"service\" id=\"maker.maker.make_unit_test\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:unit-test</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_validator\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:validator\"/>
      <argument type=\"service\" id=\"maker.maker.make_validator\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:validator</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_voter\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:voter\"/>
      <argument type=\"service\" id=\"maker.maker.make_voter\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:voter</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_user\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:user\"/>
      <argument type=\"service\" id=\"maker.maker.make_user\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:user</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_migration\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:migration\"/>
      <argument type=\"service\" id=\"maker.maker.make_migration\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:migration</argument>
      </call>
    </service>
    <service id=\".service_locator.hsWoe8a\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"repo\" type=\"service\" id=\"App\\Repository\\ArticleRepository\"/>
      </argument>
    </service>
    <service id=\".service_locator.tUQnhFH\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      </argument>
    </service>
    <service id=\".service_locator.JDL7Y7B\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"repo\" type=\"service\" id=\"App\\Repository\\UserRepository\"/>
        <argument key=\"repoArticle\" type=\"service\" id=\"App\\Repository\\ArticleRepository\"/>
      </argument>
    </service>
    <service id=\".service_locator.LedKf08\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"repo\" type=\"service\" id=\"App\\Repository\\ArticleRepository\"/>
        <argument key=\"repoCategory\" type=\"service\" id=\"App\\Repository\\CategoryRepository\"/>
      </argument>
    </service>
    <service id=\".service_locator.5aciI7K\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"article\" type=\"service\" id=\".errored..service_locator.5aciI7K.App\\Entity\\Article\"/>
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      </argument>
    </service>
    <service id=\".service_locator.uJKazI8\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"article\" type=\"service\" id=\".errored..service_locator.uJKazI8.App\\Entity\\Article\"/>
        <argument key=\"likeRepo\" type=\"service\" id=\"App\\Repository\\ArticleLikeRepository\"/>
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      </argument>
    </service>
    <service id=\".service_locator.MVOlSQQ\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"repo\" type=\"service\" id=\"App\\Repository\\ArticleRepository\"/>
        <argument key=\"repoUser\" type=\"service\" id=\"App\\Repository\\UserRepository\"/>
        <argument key=\"user\" type=\"service\" id=\".errored..service_locator.MVOlSQQ.App\\Entity\\User\"/>
      </argument>
    </service>
    <service id=\".service_locator.Gn3oxQ2\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"comment\" type=\"service\" id=\".errored..service_locator.Gn3oxQ2.App\\Entity\\Comment\"/>
      </argument>
    </service>
    <service id=\".service_locator.wypGnUQ\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"user\" type=\"service\" id=\".errored..service_locator.wypGnUQ.App\\Entity\\User\"/>
      </argument>
    </service>
    <service id=\".service_locator.8y7S3wT\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"repo\" type=\"service\" id=\"App\\Repository\\CategoryRepository\"/>
      </argument>
    </service>
    <service id=\".service_locator..NmEFk5\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
        <argument key=\"user\" type=\"service\" id=\".errored..service_locator..NmEFk5.App\\Entity\\User\"/>
      </argument>
    </service>
    <service id=\".service_locator.Txvqv4R\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      </argument>
    </service>
    <service id=\".service_locator.czKK4py\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"encoder\" type=\"service\" id=\"security.user_password_encoder.generic\"/>
        <argument key=\"manager\" type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
      </argument>
    </service>
    <service id=\".service_locator._LtMy3o\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"App\\Controller\\ArticleController::articles\" type=\"service\" id=\".service_locator.LedKf08\"/>
        <argument key=\"App\\Controller\\ArticleController::contact\" type=\"service\" id=\".service_locator.Txvqv4R\"/>
        <argument key=\"App\\Controller\\ArticleController::contactUser\" type=\"service\" id=\".service_locator..NmEFk5\"/>
        <argument key=\"App\\Controller\\ArticleController::dashboard\" type=\"service\" id=\".service_locator.JDL7Y7B\"/>
        <argument key=\"App\\Controller\\ArticleController::deleteArticleById\" type=\"service\" id=\".service_locator.uJKazI8\"/>
        <argument key=\"App\\Controller\\ArticleController::deleteCommentUserById\" type=\"service\" id=\".service_locator.Gn3oxQ2\"/>
        <argument key=\"App\\Controller\\ArticleController::form\" type=\"service\" id=\".service_locator.tUQnhFH\"/>
        <argument key=\"App\\Controller\\ArticleController::home\" type=\"service\" id=\".service_locator.hsWoe8a\"/>
        <argument key=\"App\\Controller\\ArticleController::like\" type=\"service\" id=\".service_locator.uJKazI8\"/>
        <argument key=\"App\\Controller\\ArticleController::removeUser\" type=\"service\" id=\".service_locator.wypGnUQ\"/>
        <argument key=\"App\\Controller\\ArticleController::show\" type=\"service\" id=\".service_locator.5aciI7K\"/>
        <argument key=\"App\\Controller\\ArticleController::showArticlesByUser\" type=\"service\" id=\".service_locator.hsWoe8a\"/>
        <argument key=\"App\\Controller\\ArticleController::showCategory\" type=\"service\" id=\".service_locator.8y7S3wT\"/>
        <argument key=\"App\\Controller\\ArticleController::showUser\" type=\"service\" id=\".service_locator.MVOlSQQ\"/>
        <argument key=\"App\\Controller\\SecurityController::register\" type=\"service\" id=\".service_locator.czKK4py\"/>
        <argument key=\"App\\Controller\\ArticleController:articles\" type=\"service\" id=\".service_locator.LedKf08\"/>
        <argument key=\"App\\Controller\\ArticleController:contact\" type=\"service\" id=\".service_locator.Txvqv4R\"/>
        <argument key=\"App\\Controller\\ArticleController:contactUser\" type=\"service\" id=\".service_locator..NmEFk5\"/>
        <argument key=\"App\\Controller\\ArticleController:dashboard\" type=\"service\" id=\".service_locator.JDL7Y7B\"/>
        <argument key=\"App\\Controller\\ArticleController:deleteArticleById\" type=\"service\" id=\".service_locator.uJKazI8\"/>
        <argument key=\"App\\Controller\\ArticleController:deleteCommentUserById\" type=\"service\" id=\".service_locator.Gn3oxQ2\"/>
        <argument key=\"App\\Controller\\ArticleController:form\" type=\"service\" id=\".service_locator.tUQnhFH\"/>
        <argument key=\"App\\Controller\\ArticleController:home\" type=\"service\" id=\".service_locator.hsWoe8a\"/>
        <argument key=\"App\\Controller\\ArticleController:like\" type=\"service\" id=\".service_locator.uJKazI8\"/>
        <argument key=\"App\\Controller\\ArticleController:removeUser\" type=\"service\" id=\".service_locator.wypGnUQ\"/>
        <argument key=\"App\\Controller\\ArticleController:show\" type=\"service\" id=\".service_locator.5aciI7K\"/>
        <argument key=\"App\\Controller\\ArticleController:showArticlesByUser\" type=\"service\" id=\".service_locator.hsWoe8a\"/>
        <argument key=\"App\\Controller\\ArticleController:showCategory\" type=\"service\" id=\".service_locator.8y7S3wT\"/>
        <argument key=\"App\\Controller\\ArticleController:showUser\" type=\"service\" id=\".service_locator.MVOlSQQ\"/>
        <argument key=\"App\\Controller\\SecurityController:register\" type=\"service\" id=\".service_locator.czKK4py\"/>
      </argument>
    </service>
    <service id=\".service_locator.LtnrEkg\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator\" type=\"service\" id=\"doctrine.orm.validator.unique\"/>
        <argument key=\"Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator\" type=\"service\" id=\"security.validator.user_password\"/>
        <argument key=\"Symfony\\Component\\Validator\\Constraints\\EmailValidator\" type=\"service\" id=\"validator.email\"/>
        <argument key=\"Symfony\\Component\\Validator\\Constraints\\ExpressionValidator\" type=\"service\" id=\"validator.expression\"/>
        <argument key=\"Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator\" type=\"service\" id=\"validator.not_compromised_password\"/>
        <argument key=\"doctrine.orm.validator.unique\" type=\"service\" id=\"doctrine.orm.validator.unique\"/>
        <argument key=\"security.validator.user_password\" type=\"service\" id=\"security.validator.user_password\"/>
        <argument key=\"validator.expression\" type=\"service\" id=\"validator.expression\"/>
      </argument>
    </service>
    <service id=\".service_locator.gmwRZ3h\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"inline\" type=\"service\" id=\"fragment.renderer.inline\"/>
      </argument>
    </service>
    <service id=\"debug.argument_resolver.request_attribute\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"100\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.request_attribute.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.request\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.request.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.session\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.session.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.security.user_value_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"40\"/>
      <argument type=\"service\" id=\"debug.security.user_value_resolver.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.service\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.service.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.default\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-100\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.default.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.variadic\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-150\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.variadic.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.not_tagged_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-200\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.not_tagged_controller.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\".service_locator.cbc17Dc\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"App\\Form\\ArticleType\" type=\"service\" id=\"App\\Form\\ArticleType\"/>
        <argument key=\"App\\Form\\CommentType\" type=\"service\" id=\"App\\Form\\CommentType\"/>
        <argument key=\"App\\Form\\RegistrationType\" type=\"service\" id=\"App\\Form\\RegistrationType\"/>
        <argument key=\"Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType\" type=\"service\" id=\"form.type.entity\"/>
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType\" type=\"service\" id=\"form.type.choice\"/>
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType\" type=\"service\" id=\"form.type.file\"/>
        <argument key=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" type=\"service\" id=\"form.type.form\"/>
      </argument>
    </service>
    <service id=\".service_locator.Otd28_S\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"doctrine.orm.default_listeners.attach_entity_listeners\" type=\"service\" id=\"doctrine.orm.default_listeners.attach_entity_listeners\"/>
      </argument>
    </service>
    <service id=\".service_locator._ZQxHRQ\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"App\\Repository\\ArticleLikeRepository\" type=\"service\" id=\"App\\Repository\\ArticleLikeRepository\"/>
        <argument key=\"App\\Repository\\ArticleRepository\" type=\"service\" id=\"App\\Repository\\ArticleRepository\"/>
        <argument key=\"App\\Repository\\CategoryRepository\" type=\"service\" id=\"App\\Repository\\CategoryRepository\"/>
        <argument key=\"App\\Repository\\CommentRepository\" type=\"service\" id=\"App\\Repository\\CommentRepository\"/>
        <argument key=\"App\\Repository\\UserRepository\" type=\"service\" id=\"App\\Repository\\UserRepository\"/>
      </argument>
    </service>
    <service id=\"debug.security.voter.security.access.authenticated_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\TraceableVoter\">
      <argument type=\"service\" id=\"security.access.authenticated_voter\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
    </service>
    <service id=\"debug.security.voter.security.access.role_hierarchy_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\TraceableVoter\">
      <argument type=\"service\" id=\"security.access.role_hierarchy_voter\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
    </service>
    <service id=\"debug.security.voter.security.access.expression_voter\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\Voter\\TraceableVoter\">
      <argument type=\"service\" id=\"security.access.expression_voter\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
    </service>
    <service id=\"security.logout.handler.csrf_token_clearing\" class=\"Symfony\\Component\\Security\\Http\\Logout\\CsrfTokenClearingLogoutHandler\" public=\"false\">
      <argument type=\"service\" id=\"security.csrf.token_storage\"/>
    </service>
    <service id=\"monolog.logger.request\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>request</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.console\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>console</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.cache\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>cache</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.translation\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>translation</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.profiler\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>profiler</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.php\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>php</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.event\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>event</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.null_internal\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.router\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>router</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.http_client\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>http_client</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.doctrine\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>doctrine</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.security\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>security</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.logger.debug\" class=\"Symfony\\Bridge\\Monolog\\Logger\">
      <argument>debug</argument>
      <call method=\"pushProcessor\">
        <argument type=\"service\" id=\"debug.log_processor\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.console\"/>
      </call>
      <call method=\"pushHandler\">
        <argument type=\"service\" id=\"monolog.handler.main\"/>
      </call>
      <configurator class=\"Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass\" method=\"configureLogger\"/>
    </service>
    <service id=\"monolog.handler.null_internal\" class=\"Monolog\\Handler\\NullHandler\"/>
    <service id=\".service_locator.yQVjGlt\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"translation.loader.csv\" type=\"service\" id=\"translation.loader.csv\"/>
        <argument key=\"translation.loader.dat\" type=\"service\" id=\"translation.loader.dat\"/>
        <argument key=\"translation.loader.ini\" type=\"service\" id=\"translation.loader.ini\"/>
        <argument key=\"translation.loader.json\" type=\"service\" id=\"translation.loader.json\"/>
        <argument key=\"translation.loader.mo\" type=\"service\" id=\"translation.loader.mo\"/>
        <argument key=\"translation.loader.php\" type=\"service\" id=\"translation.loader.php\"/>
        <argument key=\"translation.loader.po\" type=\"service\" id=\"translation.loader.po\"/>
        <argument key=\"translation.loader.qt\" type=\"service\" id=\"translation.loader.qt\"/>
        <argument key=\"translation.loader.res\" type=\"service\" id=\"translation.loader.res\"/>
        <argument key=\"translation.loader.xliff\" type=\"service\" id=\"translation.loader.xliff\"/>
        <argument key=\"translation.loader.yml\" type=\"service\" id=\"translation.loader.yml\"/>
      </argument>
    </service>
    <service id=\".service_locator.CDOTD6.\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"doctrine\" type=\"service\" id=\"doctrine\" on-invalid=\"ignore\"/>
        <argument key=\"form.factory\" type=\"service\" id=\"form.factory\" on-invalid=\"ignore\"/>
        <argument key=\"http_kernel\" type=\"service\" id=\"http_kernel\" on-invalid=\"ignore\"/>
        <argument key=\"parameter_bag\" type=\"service\" id=\"parameter_bag\" on-invalid=\"ignore\"/>
        <argument key=\"request_stack\" type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
        <argument key=\"router\" type=\"service\" id=\"router.default\" on-invalid=\"ignore\"/>
        <argument key=\"security.authorization_checker\" type=\"service\" id=\"security.authorization_checker\" on-invalid=\"ignore\"/>
        <argument key=\"security.csrf.token_manager\" type=\"service\" id=\"security.csrf.token_manager\" on-invalid=\"ignore\"/>
        <argument key=\"security.token_storage\" type=\"service\" id=\"security.token_storage\" on-invalid=\"ignore\"/>
        <argument key=\"serializer\" type=\"service\" id=\"serializer\" on-invalid=\"ignore\"/>
        <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\"/>
        <argument key=\"twig\" type=\"service\" id=\"twig\" on-invalid=\"ignore\"/>
      </argument>
    </service>
    <service id=\".service_locator.CDOTD6..App\\Controller\\ArticleController\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"App\\Controller\\ArticleController\"/>
      <argument>App\\Controller\\ArticleController</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.CDOTD6.\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.CDOTD6..App\\Controller\\SecurityController\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"App\\Controller\\SecurityController\"/>
      <argument>App\\Controller\\SecurityController</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.CDOTD6.\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator._pu.0Tb\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"translator\" type=\"service\" id=\"translator.data_collector\"/>
      </argument>
    </service>
    <service id=\".service_locator._pu.0Tb.translation.warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"translation.warmer\"/>
      <argument>translation.warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator._pu.0Tb\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.kbKiEzc\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"routing.loader\" type=\"service\" id=\"routing.loader\"/>
      </argument>
    </service>
    <service id=\".service_locator.kbKiEzc.router.default\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"router.default\"/>
      <argument>router.default</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.kbKiEzc\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.m8PwGkX\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"router\" type=\"service\" id=\"router.default\"/>
      </argument>
    </service>
    <service id=\".service_locator.m8PwGkX.router.cache_warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"router.cache_warmer\"/>
      <argument>router.cache_warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.m8PwGkX\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.lSIKWsr\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"twig\" type=\"service\" id=\"twig\"/>
      </argument>
    </service>
    <service id=\".service_locator.lSIKWsr.twig.cache_warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"twig.cache_warmer\"/>
      <argument>twig.cache_warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.lSIKWsr\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.lSIKWsr.twig.template_cache_warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"twig.template_cache_warmer\"/>
      <argument>twig.template_cache_warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.lSIKWsr\" method=\"withContext\"/>
    </service>
    <service id=\"debug.validator.inner\" class=\"Symfony\\Component\\Validator\\Validator\\ValidatorInterface\" public=\"false\">
      <factory service=\"validator.builder\" method=\"getValidator\"/>
    </service>
    <service id=\"debug.event_dispatcher.inner\" class=\"Symfony\\Component\\EventDispatcher\\EventDispatcher\" public=\"false\"/>
    <service id=\"debug.controller_resolver.inner\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"service\" id=\"controller_name_converter\"/>
      <argument type=\"service\" id=\"monolog.logger.request\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"debug.argument_resolver.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\" public=\"false\">
      <argument type=\"service\" id=\"argument_metadata_factory\"/>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"debug.argument_resolver.request_attribute\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.request\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.session\"/>
        <argument type=\"service\" id=\"debug.security.user_value_resolver\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.service\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.default\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.variadic\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.not_tagged_controller\"/>
      </argument>
    </service>
    <service id=\"debug.security.access.decision_manager.inner\" class=\"Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager\" public=\"false\">
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"debug.security.voter.security.access.authenticated_voter\"/>
        <argument type=\"service\" id=\"debug.security.voter.security.access.role_hierarchy_voter\"/>
        <argument type=\"service\" id=\"debug.security.voter.security.access.expression_voter\"/>
      </argument>
      <argument>affirmative</argument>
      <argument>false</argument>
      <argument>true</argument>
    </service>
    <service id=\"debug.argument_resolver.request_attribute.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.request.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.session.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\SessionValueResolver\" public=\"false\"/>
    <service id=\"debug.security.user_value_resolver.inner\" class=\"Symfony\\Component\\Security\\Http\\Controller\\UserValueResolver\" public=\"false\">
      <argument type=\"service\" id=\"security.token_storage\"/>
    </service>
    <service id=\"debug.argument_resolver.service.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\ServiceValueResolver\" public=\"false\">
      <argument type=\"service\" id=\".service_locator._LtMy3o\"/>
    </service>
    <service id=\"debug.argument_resolver.default.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\DefaultValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.variadic.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\VariadicValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.not_tagged_controller.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver\" public=\"false\">
      <argument type=\"service\" id=\".service_locator._LtMy3o\"/>
    </service>
    <service id=\".service_locator.UwRI0uT\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"reverse_container\" type=\"service\" id=\"reverse_container\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\".service_locator.WPZmidW\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"initialized_session\" type=\"service\" id=\"session\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"request_stack\" type=\"service\" id=\"request_stack\"/>
        <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\"/>
        <argument key=\"session_storage\" type=\"service\" id=\"session.storage.native\" on-invalid=\"ignore\"/>
      </argument>
    </service>
    <service id=\".service_locator.jD4_ZG7\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"security.authorization_checker\" type=\"service\" id=\"security.authorization_checker\"/>
        <argument key=\"security.token_storage\" type=\"service\" id=\"security.token_storage\"/>
      </argument>
    </service>
    <service id=\".errored..service_locator.5aciI7K.App\\Entity\\Article\" class=\"App\\Entity\\Article\"/>
    <service id=\".errored..service_locator.uJKazI8.App\\Entity\\Article\" class=\"App\\Entity\\Article\"/>
    <service id=\".errored..service_locator.MVOlSQQ.App\\Entity\\User\" class=\"App\\Entity\\User\"/>
    <service id=\".errored..service_locator.Gn3oxQ2.App\\Entity\\Comment\" class=\"App\\Entity\\Comment\"/>
    <service id=\".errored..service_locator.wypGnUQ.App\\Entity\\User\" class=\"App\\Entity\\User\"/>
    <service id=\".errored..service_locator..NmEFk5.App\\Entity\\User\" class=\"App\\Entity\\User\"/>
    <service id=\"console.command_loader\" class=\"Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader\" public=\"true\">
      <argument type=\"service\" id=\".service_locator.JgKnBZT\"/>
      <argument type=\"collection\">
        <argument key=\"about\">console.command.about</argument>
        <argument key=\"assets:install\">console.command.assets_install</argument>
        <argument key=\"cache:clear\">console.command.cache_clear</argument>
        <argument key=\"cache:pool:clear\">console.command.cache_pool_clear</argument>
        <argument key=\"cache:pool:prune\">console.command.cache_pool_prune</argument>
        <argument key=\"cache:pool:delete\">console.command.cache_pool_delete</argument>
        <argument key=\"cache:pool:list\">console.command.cache_pool_list</argument>
        <argument key=\"cache:warmup\">console.command.cache_warmup</argument>
        <argument key=\"debug:config\">console.command.config_debug</argument>
        <argument key=\"config:dump-reference\">console.command.config_dump_reference</argument>
        <argument key=\"debug:container\">console.command.container_debug</argument>
        <argument key=\"debug:autowiring\">console.command.debug_autowiring</argument>
        <argument key=\"debug:event-dispatcher\">console.command.event_dispatcher_debug</argument>
        <argument key=\"debug:router\">console.command.router_debug</argument>
        <argument key=\"router:match\">console.command.router_match</argument>
        <argument key=\"debug:translation\">console.command.translation_debug</argument>
        <argument key=\"translation:update\">console.command.translation_update</argument>
        <argument key=\"lint:xliff\">console.command.xliff_lint</argument>
        <argument key=\"lint:yaml\">console.command.yaml_lint</argument>
        <argument key=\"debug:form\">console.command.form_debug</argument>
        <argument key=\"doctrine:database:create\">doctrine.database_create_command</argument>
        <argument key=\"doctrine:database:drop\">doctrine.database_drop_command</argument>
        <argument key=\"doctrine:generate:entities\">doctrine.generate_entities_command</argument>
        <argument key=\"doctrine:query:sql\">doctrine.query_sql_command</argument>
        <argument key=\"doctrine:cache:clear-metadata\">doctrine.cache_clear_metadata_command</argument>
        <argument key=\"doctrine:cache:clear-query\">doctrine.cache_clear_query_cache_command</argument>
        <argument key=\"doctrine:cache:clear-result\">doctrine.cache_clear_result_command</argument>
        <argument key=\"doctrine:cache:clear-collection-region\">doctrine.cache_collection_region_command</argument>
        <argument key=\"doctrine:mapping:convert\">doctrine.mapping_convert_command</argument>
        <argument key=\"doctrine:schema:create\">doctrine.schema_create_command</argument>
        <argument key=\"doctrine:schema:drop\">doctrine.schema_drop_command</argument>
        <argument key=\"doctrine:ensure-production-settings\">doctrine.ensure_production_settings_command</argument>
        <argument key=\"doctrine:cache:clear-entity-region\">doctrine.clear_entity_region_command</argument>
        <argument key=\"doctrine:database:import\">doctrine.database_import_command</argument>
        <argument key=\"doctrine:mapping:info\">doctrine.mapping_info_command</argument>
        <argument key=\"doctrine:cache:clear-query-region\">doctrine.clear_query_region_command</argument>
        <argument key=\"doctrine:query:dql\">doctrine.query_dql_command</argument>
        <argument key=\"doctrine:schema:update\">doctrine.schema_update_command</argument>
        <argument key=\"doctrine:schema:validate\">doctrine.schema_validate_command</argument>
        <argument key=\"doctrine:mapping:import\">doctrine.mapping_import_command</argument>
        <argument key=\"security:encode-password\">security.command.user_password_encoder</argument>
        <argument key=\"debug:swiftmailer\">swiftmailer.command.debug</argument>
        <argument key=\"swiftmailer:email:send\">swiftmailer.command.new_email</argument>
        <argument key=\"swiftmailer:spool:send\">swiftmailer.command.send_email</argument>
        <argument key=\"debug:twig\">twig.command.debug</argument>
        <argument key=\"lint:twig\">twig.command.lint</argument>
        <argument key=\"server:dump\">var_dumper.command.server_dump</argument>
        <argument key=\"server:run\">web_server.command.server_run</argument>
        <argument key=\"server:start\">web_server.command.server_start</argument>
        <argument key=\"server:stop\">web_server.command.server_stop</argument>
        <argument key=\"server:status\">web_server.command.server_status</argument>
        <argument key=\"server:log\">web_server.command.server_log</argument>
        <argument key=\"doctrine:fixtures:load\">doctrine.fixtures_load_command</argument>
        <argument key=\"make:auth\">maker.auto_command.make_auth</argument>
        <argument key=\"make:command\">maker.auto_command.make_command</argument>
        <argument key=\"make:controller\">maker.auto_command.make_controller</argument>
        <argument key=\"make:crud\">maker.auto_command.make_crud</argument>
        <argument key=\"make:entity\">maker.auto_command.make_entity</argument>
        <argument key=\"make:fixtures\">maker.auto_command.make_fixtures</argument>
        <argument key=\"make:form\">maker.auto_command.make_form</argument>
        <argument key=\"make:functional-test\">maker.auto_command.make_functional_test</argument>
        <argument key=\"make:register-form\">maker.auto_command.make_registration_form</argument>
        <argument key=\"make:serializer:encoder\">maker.auto_command.make_serializer_encoder</argument>
        <argument key=\"make:serializer:normalizer\">maker.auto_command.make_serializer_normalizer</argument>
        <argument key=\"make:subscriber\">maker.auto_command.make_subscriber</argument>
        <argument key=\"make:twig-extension\">maker.auto_command.make_twig_extension</argument>
        <argument key=\"make:unit-test\">maker.auto_command.make_unit_test</argument>
        <argument key=\"make:validator\">maker.auto_command.make_validator</argument>
        <argument key=\"make:voter\">maker.auto_command.make_voter</argument>
        <argument key=\"make:user\">maker.auto_command.make_user</argument>
        <argument key=\"make:migration\">maker.auto_command.make_migration</argument>
      </argument>
    </service>
    <service id=\".service_locator.JgKnBZT\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"console.command.about\" type=\"service\" id=\"console.command.about\"/>
        <argument key=\"console.command.assets_install\" type=\"service\" id=\"console.command.assets_install\"/>
        <argument key=\"console.command.cache_clear\" type=\"service\" id=\"console.command.cache_clear\"/>
        <argument key=\"console.command.cache_pool_clear\" type=\"service\" id=\"console.command.cache_pool_clear\"/>
        <argument key=\"console.command.cache_pool_delete\" type=\"service\" id=\"console.command.cache_pool_delete\"/>
        <argument key=\"console.command.cache_pool_list\" type=\"service\" id=\"console.command.cache_pool_list\"/>
        <argument key=\"console.command.cache_pool_prune\" type=\"service\" id=\"console.command.cache_pool_prune\"/>
        <argument key=\"console.command.cache_warmup\" type=\"service\" id=\"console.command.cache_warmup\"/>
        <argument key=\"console.command.config_debug\" type=\"service\" id=\"console.command.config_debug\"/>
        <argument key=\"console.command.config_dump_reference\" type=\"service\" id=\"console.command.config_dump_reference\"/>
        <argument key=\"console.command.container_debug\" type=\"service\" id=\"console.command.container_debug\"/>
        <argument key=\"console.command.debug_autowiring\" type=\"service\" id=\"console.command.debug_autowiring\"/>
        <argument key=\"console.command.event_dispatcher_debug\" type=\"service\" id=\"console.command.event_dispatcher_debug\"/>
        <argument key=\"console.command.form_debug\" type=\"service\" id=\"console.command.form_debug\"/>
        <argument key=\"console.command.router_debug\" type=\"service\" id=\"console.command.router_debug\"/>
        <argument key=\"console.command.router_match\" type=\"service\" id=\"console.command.router_match\"/>
        <argument key=\"console.command.translation_debug\" type=\"service\" id=\"console.command.translation_debug\"/>
        <argument key=\"console.command.translation_update\" type=\"service\" id=\"console.command.translation_update\"/>
        <argument key=\"console.command.xliff_lint\" type=\"service\" id=\"console.command.xliff_lint\"/>
        <argument key=\"console.command.yaml_lint\" type=\"service\" id=\"console.command.yaml_lint\"/>
        <argument key=\"doctrine.cache_clear_metadata_command\" type=\"service\" id=\"doctrine.cache_clear_metadata_command\"/>
        <argument key=\"doctrine.cache_clear_query_cache_command\" type=\"service\" id=\"doctrine.cache_clear_query_cache_command\"/>
        <argument key=\"doctrine.cache_clear_result_command\" type=\"service\" id=\"doctrine.cache_clear_result_command\"/>
        <argument key=\"doctrine.cache_collection_region_command\" type=\"service\" id=\"doctrine.cache_collection_region_command\"/>
        <argument key=\"doctrine.clear_entity_region_command\" type=\"service\" id=\"doctrine.clear_entity_region_command\"/>
        <argument key=\"doctrine.clear_query_region_command\" type=\"service\" id=\"doctrine.clear_query_region_command\"/>
        <argument key=\"doctrine.database_create_command\" type=\"service\" id=\"doctrine.database_create_command\"/>
        <argument key=\"doctrine.database_drop_command\" type=\"service\" id=\"doctrine.database_drop_command\"/>
        <argument key=\"doctrine.database_import_command\" type=\"service\" id=\"doctrine.database_import_command\"/>
        <argument key=\"doctrine.ensure_production_settings_command\" type=\"service\" id=\"doctrine.ensure_production_settings_command\"/>
        <argument key=\"doctrine.fixtures_load_command\" type=\"service\" id=\"doctrine.fixtures_load_command\"/>
        <argument key=\"doctrine.generate_entities_command\" type=\"service\" id=\"doctrine.generate_entities_command\"/>
        <argument key=\"doctrine.mapping_convert_command\" type=\"service\" id=\"doctrine.mapping_convert_command\"/>
        <argument key=\"doctrine.mapping_import_command\" type=\"service\" id=\"doctrine.mapping_import_command\"/>
        <argument key=\"doctrine.mapping_info_command\" type=\"service\" id=\"doctrine.mapping_info_command\"/>
        <argument key=\"doctrine.query_dql_command\" type=\"service\" id=\"doctrine.query_dql_command\"/>
        <argument key=\"doctrine.query_sql_command\" type=\"service\" id=\"doctrine.query_sql_command\"/>
        <argument key=\"doctrine.schema_create_command\" type=\"service\" id=\"doctrine.schema_create_command\"/>
        <argument key=\"doctrine.schema_drop_command\" type=\"service\" id=\"doctrine.schema_drop_command\"/>
        <argument key=\"doctrine.schema_update_command\" type=\"service\" id=\"doctrine.schema_update_command\"/>
        <argument key=\"doctrine.schema_validate_command\" type=\"service\" id=\"doctrine.schema_validate_command\"/>
        <argument key=\"maker.auto_command.make_auth\" type=\"service\" id=\"maker.auto_command.make_auth\"/>
        <argument key=\"maker.auto_command.make_command\" type=\"service\" id=\"maker.auto_command.make_command\"/>
        <argument key=\"maker.auto_command.make_controller\" type=\"service\" id=\"maker.auto_command.make_controller\"/>
        <argument key=\"maker.auto_command.make_crud\" type=\"service\" id=\"maker.auto_command.make_crud\"/>
        <argument key=\"maker.auto_command.make_entity\" type=\"service\" id=\"maker.auto_command.make_entity\"/>
        <argument key=\"maker.auto_command.make_fixtures\" type=\"service\" id=\"maker.auto_command.make_fixtures\"/>
        <argument key=\"maker.auto_command.make_form\" type=\"service\" id=\"maker.auto_command.make_form\"/>
        <argument key=\"maker.auto_command.make_functional_test\" type=\"service\" id=\"maker.auto_command.make_functional_test\"/>
        <argument key=\"maker.auto_command.make_migration\" type=\"service\" id=\"maker.auto_command.make_migration\"/>
        <argument key=\"maker.auto_command.make_registration_form\" type=\"service\" id=\"maker.auto_command.make_registration_form\"/>
        <argument key=\"maker.auto_command.make_serializer_encoder\" type=\"service\" id=\"maker.auto_command.make_serializer_encoder\"/>
        <argument key=\"maker.auto_command.make_serializer_normalizer\" type=\"service\" id=\"maker.auto_command.make_serializer_normalizer\"/>
        <argument key=\"maker.auto_command.make_subscriber\" type=\"service\" id=\"maker.auto_command.make_subscriber\"/>
        <argument key=\"maker.auto_command.make_twig_extension\" type=\"service\" id=\"maker.auto_command.make_twig_extension\"/>
        <argument key=\"maker.auto_command.make_unit_test\" type=\"service\" id=\"maker.auto_command.make_unit_test\"/>
        <argument key=\"maker.auto_command.make_user\" type=\"service\" id=\"maker.auto_command.make_user\"/>
        <argument key=\"maker.auto_command.make_validator\" type=\"service\" id=\"maker.auto_command.make_validator\"/>
        <argument key=\"maker.auto_command.make_voter\" type=\"service\" id=\"maker.auto_command.make_voter\"/>
        <argument key=\"security.command.user_password_encoder\" type=\"service\" id=\"security.command.user_password_encoder\"/>
        <argument key=\"swiftmailer.command.debug\" type=\"service\" id=\"swiftmailer.command.debug\"/>
        <argument key=\"swiftmailer.command.new_email\" type=\"service\" id=\"swiftmailer.command.new_email\"/>
        <argument key=\"swiftmailer.command.send_email\" type=\"service\" id=\"swiftmailer.command.send_email\"/>
        <argument key=\"twig.command.debug\" type=\"service\" id=\"twig.command.debug\"/>
        <argument key=\"twig.command.lint\" type=\"service\" id=\"twig.command.lint\"/>
        <argument key=\"var_dumper.command.server_dump\" type=\"service\" id=\"var_dumper.command.server_dump\"/>
        <argument key=\"web_server.command.server_log\" type=\"service\" id=\"web_server.command.server_log\"/>
        <argument key=\"web_server.command.server_run\" type=\"service\" id=\"web_server.command.server_run\"/>
        <argument key=\"web_server.command.server_start\" type=\"service\" id=\"web_server.command.server_start\"/>
        <argument key=\"web_server.command.server_status\" type=\"service\" id=\"web_server.command.server_status\"/>
        <argument key=\"web_server.command.server_stop\" type=\"service\" id=\"web_server.command.server_stop\"/>
      </argument>
    </service>
    <service id=\"cache.app.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" public=\"false\">
      <argument>mf6+F+Ruz7</argument>
      <argument>0</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.system.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>1uUysY6Dx5</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.validator.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>CIvz3VzgQ8</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.serializer.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>5KFRL44rmy</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.annotations.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>+NAqFLA1FH</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.property_info.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>JJL9bxI6V3</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.messenger.restart_workers_signal.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" public=\"false\">
      <argument>aSn-DjvS3p</argument>
      <argument>0</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.security_expression_language.recorder_inner\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <argument>vu+tzd5smL</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>/var/www/public/DevLaon/var/cache/dev/pools</argument>
      <argument type=\"service\" id=\"monolog.logger.cache\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\".service_locator.uxa.tru\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime\" type=\"service\" id=\"twig.runtime.security_csrf\"/>
        <argument key=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime\" type=\"service\" id=\"twig.runtime.httpkernel\"/>
        <argument key=\"Symfony\\Component\\Form\\FormRenderer\" type=\"service\" id=\"twig.form.renderer\"/>
      </argument>
    </service>
    <service id=\"Psr\\Container\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface\" alias=\"parameter_bag\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface\" alias=\"parameter_bag\" public=\"false\"/>
    <service id=\"Symfony\\Component\\EventDispatcher\\EventDispatcherInterface\" alias=\"debug.event_dispatcher\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface\" alias=\"debug.event_dispatcher\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\HttpKernelInterface\" alias=\"http_kernel\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\RequestStack\" alias=\"request_stack\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\UrlHelper\" alias=\"url_helper\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\KernelInterface\" alias=\"kernel\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Filesystem\\Filesystem\" alias=\"filesystem\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\" alias=\"file_locator\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\" alias=\"reverse_container\" public=\"false\"/>
    <service id=\"Psr\\Container\\ContainerInterface \$parameterBag\" alias=\"parameter_bag\"/>
    <service id=\"cache.app_clearer\" alias=\"cache.default_clearer\" public=\"true\"/>
    <service id=\"Psr\\Cache\\CacheItemPoolInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Psr\\SimpleCache\\CacheInterface\" alias=\"cache.app.simple\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\Cache\\CacheInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\Cache\\TagAwareCacheInterface\" alias=\"cache.app.taggable\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Translation\\TranslatorInterface\" alias=\"translator.data_collector\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\Translation\\TranslatorInterface\" alias=\"translator.data_collector\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\SessionInterface\" alias=\"session\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface\" alias=\"session.storage.native\" public=\"false\"/>
    <service id=\"SessionHandlerInterface\" alias=\"session.handler\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface\" alias=\"session.flash_bag\" public=\"false\"/>
    <service id=\"session.storage.filesystem\" alias=\"session.storage.mock_file\" public=\"false\"/>
    <service id=\"session.storage\" alias=\"session.storage.native\"/>
    <service id=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface\" alias=\"security.csrf.token_generator\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface\" alias=\"security.csrf.token_storage\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface\" alias=\"security.csrf.token_manager\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface\" alias=\"form.resolved_type_factory\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Form\\FormRegistryInterface\" alias=\"form.registry\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Form\\FormFactoryInterface\" alias=\"form.factory\" public=\"false\"/>
    <service id=\"form.property_accessor\" alias=\"property_accessor\" public=\"false\"/>
    <service id=\"form.choice_list_factory\" alias=\"form.choice_list_factory.cached\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Asset\\Packages\" alias=\"assets.packages\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Validator\\Validator\\ValidatorInterface\" alias=\"debug.validator\" public=\"false\"/>
    <service id=\"validator.mapping.class_metadata_factory\" alias=\"debug.validator\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface\" alias=\"translation.reader\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Translation\\Extractor\\ExtractorInterface\" alias=\"translation.extractor\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface\" alias=\"translation.writer\" public=\"false\"/>
    <service id=\"translator\" alias=\"translator.data_collector\" public=\"true\"/>
    <service id=\"translator.formatter\" alias=\"translator.formatter.default\" public=\"false\"/>
    <service id=\"cache.default_redis_provider\" alias=\".cache_connection.GD_MSZC\" public=\"false\"/>
    <service id=\"cache.default_memcached_provider\" alias=\".cache_connection.JKE6keX\" public=\"false\"/>
    <service id=\"cache.default_pdo_provider\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" alias=\"debug.file_link_formatter\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Stopwatch\\Stopwatch\" alias=\"debug.stopwatch\" public=\"false\"/>
    <service id=\"router\" alias=\"router.default\" public=\"true\"/>
    <service id=\"Symfony\\Component\\Routing\\RouterInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\RequestContextAwareInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\RequestContext\" alias=\"router.request_context\" public=\"false\"/>
    <service id=\"annotation_reader\" alias=\"annotations.cached_reader\"/>
    <service id=\"Doctrine\\Common\\Annotations\\Reader\" alias=\"annotations.cached_reader\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface\" alias=\"property_accessor\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\SerializerInterface\" alias=\"serializer\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface\" alias=\"serializer\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface\" alias=\"serializer\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Encoder\\EncoderInterface\" alias=\"serializer\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Encoder\\DecoderInterface\" alias=\"serializer\" public=\"false\"/>
    <service id=\"serializer.property_accessor\" alias=\"property_accessor\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface\" alias=\"serializer.mapping.class_discriminator_resolver\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer\" alias=\"serializer.normalizer.object\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface\" alias=\"serializer.mapping.class_metadata_factory\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface\" alias=\"property_info\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\HttpClient\\HttpClientInterface\" alias=\"http_client\"/>
    <service id=\"sensio_framework_extra.converter.doctrine.orm.expression_language\" alias=\"sensio_framework_extra.converter.doctrine.orm.expression_language.default\" public=\"false\"/>
    <service id=\"sensio_framework_extra.security.expression_language\" alias=\"sensio_framework_extra.security.expression_language.default\" public=\"false\"/>
    <service id=\"Doctrine\\DBAL\\Driver\\Connection\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Doctrine\\DBAL\\Connection\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Doctrine\\Common\\Persistence\\ManagerRegistry\" alias=\"doctrine\" public=\"false\"/>
    <service id=\"Symfony\\Bridge\\Doctrine\\RegistryInterface\" alias=\"doctrine\" public=\"false\"/>
    <service id=\"database_connection\" alias=\"doctrine.dbal.default_connection\" public=\"true\"/>
    <service id=\"doctrine.dbal.event_manager\" alias=\"doctrine.dbal.default_connection.event_manager\" public=\"false\"/>
    <service id=\"Doctrine\\Common\\Persistence\\ObjectManager\" alias=\"doctrine.orm.default_entity_manager\" public=\"false\"/>
    <service id=\"Doctrine\\ORM\\EntityManagerInterface\" alias=\"doctrine.orm.default_entity_manager\" public=\"false\"/>
    <service id=\"doctrine.orm.metadata.annotation_reader\" alias=\"annotations.cached_reader\" public=\"false\"/>
    <service id=\"doctrine.orm.entity_manager\" alias=\"doctrine.orm.default_entity_manager\" public=\"true\"/>
    <service id=\"doctrine.orm.default_metadata_cache\" alias=\"doctrine_cache.providers.doctrine.orm.default_metadata_cache\" public=\"true\"/>
    <service id=\"doctrine.orm.default_result_cache\" alias=\"doctrine_cache.providers.doctrine.orm.default_result_cache\" public=\"true\"/>
    <service id=\"doctrine.orm.default_query_cache\" alias=\"doctrine_cache.providers.doctrine.orm.default_query_cache\" public=\"true\"/>
    <service id=\"doctrine.orm.default_entity_manager.event_manager\" alias=\"doctrine.dbal.default_connection.event_manager\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface\" alias=\"security.authorization_checker\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface\" alias=\"security.token_storage\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Security\" alias=\"security.helper\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface\" alias=\"security.authentication.manager\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface\" alias=\"security.authentication.session_strategy\" public=\"false\"/>
    <service id=\"security.encoder_factory\" alias=\"security.encoder_factory.generic\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface\" alias=\"security.encoder_factory.generic\" public=\"false\"/>
    <service id=\"security.password_encoder\" alias=\"security.user_password_encoder.generic\" public=\"true\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface\" alias=\"security.user_password_encoder.generic\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils\" alias=\"security.authentication_utils\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface\" alias=\"debug.security.access.decision_manager\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface\" alias=\"security.role_hierarchy\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Http\\Firewall\" alias=\"debug.security.firewall\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Http\\HttpUtils\" alias=\"security.http_utils\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler\" alias=\"security.authentication.guard_handler\" public=\"false\"/>
    <service id=\"security.firewall\" alias=\"debug.security.firewall\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\User\\UserProviderInterface\" alias=\"security.user.provider.concrete.our_db_provider\"/>
    <service id=\"security.authentication.session_strategy.main\" alias=\"security.authentication.session_strategy\"/>
    <service id=\"security.user_checker.main\" alias=\"security.user_checker\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface\" alias=\"security.user_checker\" public=\"false\"/>
    <service id=\"swiftmailer.mailer.default.transport\" alias=\"swiftmailer.mailer.default.transport.spool\"/>
    <service id=\"swiftmailer.mailer.default.spool\" alias=\"swiftmailer.mailer.default.spool.memory\"/>
    <service id=\"swiftmailer.mailer.default.transport.real\" alias=\"swiftmailer.mailer.default.transport.dynamic\" public=\"true\"/>
    <service id=\"swiftmailer.spool\" alias=\"swiftmailer.mailer.default.spool.memory\"/>
    <service id=\"swiftmailer.transport.real\" alias=\"swiftmailer.mailer.default.transport.dynamic\"/>
    <service id=\"Swift_Spool\" alias=\"swiftmailer.mailer.default.spool.memory\" public=\"false\"/>
    <service id=\"swiftmailer.plugin.messagelogger\" alias=\"swiftmailer.mailer.default.plugin.messagelogger\"/>
    <service id=\"swiftmailer.mailer\" alias=\"swiftmailer.mailer.default\"/>
    <service id=\"swiftmailer.transport\" alias=\"swiftmailer.mailer.default.transport.spool\" public=\"true\"/>
    <service id=\"Swift_Mailer\" alias=\"swiftmailer.mailer.default\" public=\"false\"/>
    <service id=\"Swift_Transport\" alias=\"swiftmailer.mailer.default.transport.spool\" public=\"false\"/>
    <service id=\"mailer\" alias=\"swiftmailer.mailer.default\" public=\"true\"/>
    <service id=\"Twig_Environment\" alias=\"twig\" public=\"false\"/>
    <service id=\"Twig\\Environment\" alias=\"twig\" public=\"false\"/>
    <service id=\"logger\" alias=\"monolog.logger\"/>
    <service id=\"Psr\\Log\\LoggerInterface\" alias=\"monolog.logger\" public=\"false\"/>
    <service id=\"argument_resolver.controller_locator\" alias=\".service_locator._LtMy3o\"/>
    <service id=\"twig.loader.filesystem\" alias=\"twig.loader.native_filesystem\" public=\"false\"/>
    <service id=\"twig.loader\" alias=\"twig.loader.native_filesystem\"/>
    <service id=\"validator\" alias=\"debug.validator\" public=\"true\"/>
    <service id=\"translator.data_collector.inner\" alias=\"translator.default\" public=\"false\"/>
    <service id=\"event_dispatcher\" alias=\"debug.event_dispatcher\" public=\"true\"/>
    <service id=\"controller_resolver\" alias=\"debug.controller_resolver\" public=\"false\"/>
    <service id=\"argument_resolver\" alias=\"debug.argument_resolver\" public=\"false\"/>
    <service id=\"security.access.decision_manager\" alias=\"debug.security.access.decision_manager\" public=\"false\"/>
    <service id=\"argument_resolver.request_attribute\" alias=\"debug.argument_resolver.request_attribute\" public=\"false\"/>
    <service id=\"argument_resolver.request\" alias=\"debug.argument_resolver.request\" public=\"false\"/>
    <service id=\"argument_resolver.session\" alias=\"debug.argument_resolver.session\" public=\"false\"/>
    <service id=\"security.user_value_resolver\" alias=\"debug.security.user_value_resolver\" public=\"false\"/>
    <service id=\"argument_resolver.service\" alias=\"debug.argument_resolver.service\" public=\"false\"/>
    <service id=\"argument_resolver.default\" alias=\"debug.argument_resolver.default\" public=\"false\"/>
    <service id=\"argument_resolver.variadic\" alias=\"debug.argument_resolver.variadic\" public=\"false\"/>
    <service id=\"argument_resolver.not_tagged_controller\" alias=\"debug.argument_resolver.not_tagged_controller\" public=\"false\"/>
    <service id=\".service_locator.VdFTLMb\" alias=\".service_locator.LtnrEkg\" public=\"false\"/>
    <service id=\"console.command.public_alias.doctrine_cache.contains_command\" alias=\"doctrine_cache.contains_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_cache.delete_command\" alias=\"doctrine_cache.delete_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_cache.flush_command\" alias=\"doctrine_cache.flush_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_cache.stats_command\" alias=\"doctrine_cache.stats_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.diff_command\" alias=\"doctrine_migrations.diff_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.dump_schema_command\" alias=\"doctrine_migrations.dump_schema_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.execute_command\" alias=\"doctrine_migrations.execute_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.generate_command\" alias=\"doctrine_migrations.generate_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.latest_command\" alias=\"doctrine_migrations.latest_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.migrate_command\" alias=\"doctrine_migrations.migrate_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.rollup_command\" alias=\"doctrine_migrations.rollup_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.status_command\" alias=\"doctrine_migrations.status_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.up_to_date_command\" alias=\"doctrine_migrations.up_to_date_command\" public=\"true\"/>
    <service id=\"console.command.public_alias.doctrine_migrations.version_command\" alias=\"doctrine_migrations.version_command\" public=\"true\"/>
  </services>
</container>
", "var/cache/dev/srcApp_KernelDevDebugContainer.xml", "/var/www/public/DevLaon/templates/var/cache/dev/srcApp_KernelDevDebugContainer.xml");
    }
}
