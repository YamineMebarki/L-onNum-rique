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

/* vendor/doctrine/doctrine-bundle/Resources/config/orm.xml */
class __TwigTemplate_cb7d0009f46e54d946bd0a4ca58192e074b4d263d43f74bf3ec1eab9c2069a84 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Resources/config/orm.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Resources/config/orm.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"doctrine.orm.configuration.class\">Doctrine\\ORM\\Configuration</parameter>
        <parameter key=\"doctrine.orm.entity_manager.class\">Doctrine\\ORM\\EntityManager</parameter>
        <parameter key=\"doctrine.orm.manager_configurator.class\">Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator</parameter>

        <!-- cache -->
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

        <!-- metadata -->
        <parameter key=\"doctrine.orm.metadata.driver_chain.class\">Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain</parameter>
        <parameter key=\"doctrine.orm.metadata.annotation.class\">Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver</parameter>
        <parameter key=\"doctrine.orm.metadata.xml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver</parameter>
        <parameter key=\"doctrine.orm.metadata.yml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver</parameter>
        <parameter key=\"doctrine.orm.metadata.php.class\">Doctrine\\ORM\\Mapping\\Driver\\PHPDriver</parameter>
        <parameter key=\"doctrine.orm.metadata.staticphp.class\">Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver</parameter>

        <!-- cache warmer -->
        <parameter key=\"doctrine.orm.proxy_cache_warmer.class\">Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer</parameter>

        <!-- form field factory guesser -->
        <parameter key=\"form.type_guesser.doctrine.class\">Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser</parameter>

        <!-- validator -->
        <parameter key=\"doctrine.orm.validator.unique.class\">Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator</parameter>
        <parameter key=\"doctrine.orm.validator_initializer.class\">Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer</parameter>

        <!-- security -->
        <parameter key=\"doctrine.orm.security.user.provider.class\">Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider</parameter>

        <!-- listeners -->
        <parameter key=\"doctrine.orm.listeners.resolve_target_entity.class\">Doctrine\\ORM\\Tools\\ResolveTargetEntityListener</parameter>
        <parameter key=\"doctrine.orm.listeners.attach_entity_listeners.class\">Doctrine\\ORM\\Tools\\AttachEntityListenersListener</parameter>

        <!-- naming strategy -->
        <parameter key=\"doctrine.orm.naming_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultNamingStrategy</parameter>
        <parameter key=\"doctrine.orm.naming_strategy.underscore.class\">Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy</parameter>

        <!-- quote strategy -->
        <parameter key=\"doctrine.orm.quote_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy</parameter>
        <parameter key=\"doctrine.orm.quote_strategy.ansi.class\">Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy</parameter>

        <!-- entity listener resolver -->
        <parameter key=\"doctrine.orm.entity_listener_resolver.class\">Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver</parameter>

        <!-- second level cache -->
        <parameter key=\"doctrine.orm.second_level_cache.default_cache_factory.class\">Doctrine\\ORM\\Cache\\DefaultCacheFactory</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.default_region.class\">Doctrine\\ORM\\Cache\\Region\\DefaultRegion</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.filelock_region.class\">Doctrine\\ORM\\Cache\\Region\\FileLockRegion</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.logger_chain.class\">Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.logger_statistics.class\">Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.cache_configuration.class\">Doctrine\\ORM\\Cache\\CacheConfiguration</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.regions_configuration.class\">Doctrine\\ORM\\Cache\\RegionsConfiguration</parameter>
    </parameters>

    <services>
        <service id=\"Doctrine\\Common\\Persistence\\ObjectManager\" alias=\"doctrine.orm.entity_manager\" public=\"false\" />
        <service id=\"Doctrine\\ORM\\EntityManagerInterface\" alias=\"doctrine.orm.entity_manager\" public=\"false\" />

        <!--- Deprecated Annotation Metadata Reader Service alias, use annotation_reader service -->
        <service id=\"doctrine.orm.metadata.annotation_reader\" alias=\"annotation_reader\" public=\"false\" />

        <service id=\"doctrine.orm.proxy_cache_warmer\" class=\"%doctrine.orm.proxy_cache_warmer.class%\" public=\"false\">
            <tag name=\"kernel.cache_warmer\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"form.type_guesser.doctrine\" class=\"%form.type_guesser.doctrine.class%\">
            <tag name=\"form.type_guesser\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"form.type.entity\" class=\"Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType\">
            <tag name=\"form.type\" alias=\"entity\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"doctrine.orm.configuration\" class=\"%doctrine.orm.configuration.class%\" abstract=\"true\" public=\"false\" />

        <service id=\"doctrine.orm.entity_manager.abstract\" class=\"%doctrine.orm.entity_manager.class%\" abstract=\"true\" lazy=\"true\">
            <factory class=\"%doctrine.orm.entity_manager.class%\" method=\"create\" />
        </service>

        <service id=\"doctrine.orm.container_repository_factory\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Repository\\ContainerRepositoryFactory\" public=\"false\">
            <argument type=\"service\">
                <service class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\">
                    <argument type=\"collection\" />
                </service>
            </argument>
        </service>

        <!-- The configurator cannot be a private service -->
        <service id=\"doctrine.orm.manager_configurator.abstract\" class=\"%doctrine.orm.manager_configurator.class%\" abstract=\"true\">
            <argument type=\"collection\" />
            <argument type=\"collection\" />
        </service>

        <!-- validator -->
        <service id=\"doctrine.orm.validator.unique\" class=\"%doctrine.orm.validator.unique.class%\">
            <tag name=\"validator.constraint_validator\" alias=\"doctrine.orm.validator.unique\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"doctrine.orm.validator_initializer\" class=\"%doctrine.orm.validator_initializer.class%\">
            <tag name=\"validator.initializer\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!-- security -->
        <service id=\"doctrine.orm.security.user.provider\" class=\"%doctrine.orm.security.user.provider.class%\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!-- listeners -->
        <service id=\"doctrine.orm.listeners.resolve_target_entity\" class=\"%doctrine.orm.listeners.resolve_target_entity.class%\" public=\"false\" />

        <!-- naming strategy -->
        <service id=\"doctrine.orm.naming_strategy.default\" class=\"%doctrine.orm.naming_strategy.default.class%\" public=\"false\" />
        <service id=\"doctrine.orm.naming_strategy.underscore\" class=\"%doctrine.orm.naming_strategy.underscore.class%\" public=\"false\" />

        <!-- quote strategy -->
        <service id=\"doctrine.orm.quote_strategy.default\" class=\"%doctrine.orm.quote_strategy.default.class%\" public=\"false\" />
        <service id=\"doctrine.orm.quote_strategy.ansi\" class=\"%doctrine.orm.quote_strategy.ansi.class%\" public=\"false\" />

        <!-- commands -->
        <service id=\"doctrine.cache_clear_metadata_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-metadata\" />
        </service>

        <service id=\"doctrine.cache_clear_query_cache_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-query\" />
        </service>

        <service id=\"doctrine.cache_clear_result_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-result\" />
        </service>

        <service id=\"doctrine.cache_collection_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-collection-region\" />
        </service>

        <service id=\"doctrine.mapping_convert_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:mapping:convert\" />
        </service>

        <service id=\"doctrine.schema_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:schema:create\" />
        </service>

        <service id=\"doctrine.schema_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:schema:drop\" />
        </service>

        <service id=\"doctrine.ensure_production_settings_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:ensure-production-settings\" />
        </service>

        <service id=\"doctrine.clear_entity_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-entity-region\" />
        </service>

        <service id=\"doctrine.database_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:database:import\" />
        </service>

        <service id=\"doctrine.mapping_info_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:mapping:info\" />
        </service>

        <service id=\"doctrine.clear_query_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-query-region\" />
        </service>

        <service id=\"doctrine.query_dql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:query:dql\" />
        </service>

        <service id=\"doctrine.schema_update_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:schema:update\" />
        </service>

        <service id=\"doctrine.schema_validate_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand\">
            <tag name=\"console.command\" command=\"doctrine:schema:validate\" />
        </service>

        <service id=\"doctrine.mapping_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand\">
            <argument type=\"service\" id=\"doctrine\" />
            <argument>%kernel.bundles%</argument>

            <tag name=\"console.command\" command=\"doctrine:mapping:import\" />
        </service>

        <service id=\"doctrine.generate_entities_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\GenerateEntitiesDoctrineCommand\">
            <argument type=\"service\" id=\"doctrine\" />

            <tag name=\"console.command\" command=\"doctrine:generate:entities\" />
        </service>

    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Resources/config/orm.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"doctrine.orm.configuration.class\">Doctrine\\ORM\\Configuration</parameter>
        <parameter key=\"doctrine.orm.entity_manager.class\">Doctrine\\ORM\\EntityManager</parameter>
        <parameter key=\"doctrine.orm.manager_configurator.class\">Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator</parameter>

        <!-- cache -->
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

        <!-- metadata -->
        <parameter key=\"doctrine.orm.metadata.driver_chain.class\">Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain</parameter>
        <parameter key=\"doctrine.orm.metadata.annotation.class\">Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver</parameter>
        <parameter key=\"doctrine.orm.metadata.xml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver</parameter>
        <parameter key=\"doctrine.orm.metadata.yml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver</parameter>
        <parameter key=\"doctrine.orm.metadata.php.class\">Doctrine\\ORM\\Mapping\\Driver\\PHPDriver</parameter>
        <parameter key=\"doctrine.orm.metadata.staticphp.class\">Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver</parameter>

        <!-- cache warmer -->
        <parameter key=\"doctrine.orm.proxy_cache_warmer.class\">Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer</parameter>

        <!-- form field factory guesser -->
        <parameter key=\"form.type_guesser.doctrine.class\">Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser</parameter>

        <!-- validator -->
        <parameter key=\"doctrine.orm.validator.unique.class\">Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator</parameter>
        <parameter key=\"doctrine.orm.validator_initializer.class\">Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer</parameter>

        <!-- security -->
        <parameter key=\"doctrine.orm.security.user.provider.class\">Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider</parameter>

        <!-- listeners -->
        <parameter key=\"doctrine.orm.listeners.resolve_target_entity.class\">Doctrine\\ORM\\Tools\\ResolveTargetEntityListener</parameter>
        <parameter key=\"doctrine.orm.listeners.attach_entity_listeners.class\">Doctrine\\ORM\\Tools\\AttachEntityListenersListener</parameter>

        <!-- naming strategy -->
        <parameter key=\"doctrine.orm.naming_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultNamingStrategy</parameter>
        <parameter key=\"doctrine.orm.naming_strategy.underscore.class\">Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy</parameter>

        <!-- quote strategy -->
        <parameter key=\"doctrine.orm.quote_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy</parameter>
        <parameter key=\"doctrine.orm.quote_strategy.ansi.class\">Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy</parameter>

        <!-- entity listener resolver -->
        <parameter key=\"doctrine.orm.entity_listener_resolver.class\">Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver</parameter>

        <!-- second level cache -->
        <parameter key=\"doctrine.orm.second_level_cache.default_cache_factory.class\">Doctrine\\ORM\\Cache\\DefaultCacheFactory</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.default_region.class\">Doctrine\\ORM\\Cache\\Region\\DefaultRegion</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.filelock_region.class\">Doctrine\\ORM\\Cache\\Region\\FileLockRegion</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.logger_chain.class\">Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.logger_statistics.class\">Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.cache_configuration.class\">Doctrine\\ORM\\Cache\\CacheConfiguration</parameter>
        <parameter key=\"doctrine.orm.second_level_cache.regions_configuration.class\">Doctrine\\ORM\\Cache\\RegionsConfiguration</parameter>
    </parameters>

    <services>
        <service id=\"Doctrine\\Common\\Persistence\\ObjectManager\" alias=\"doctrine.orm.entity_manager\" public=\"false\" />
        <service id=\"Doctrine\\ORM\\EntityManagerInterface\" alias=\"doctrine.orm.entity_manager\" public=\"false\" />

        <!--- Deprecated Annotation Metadata Reader Service alias, use annotation_reader service -->
        <service id=\"doctrine.orm.metadata.annotation_reader\" alias=\"annotation_reader\" public=\"false\" />

        <service id=\"doctrine.orm.proxy_cache_warmer\" class=\"%doctrine.orm.proxy_cache_warmer.class%\" public=\"false\">
            <tag name=\"kernel.cache_warmer\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"form.type_guesser.doctrine\" class=\"%form.type_guesser.doctrine.class%\">
            <tag name=\"form.type_guesser\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"form.type.entity\" class=\"Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType\">
            <tag name=\"form.type\" alias=\"entity\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"doctrine.orm.configuration\" class=\"%doctrine.orm.configuration.class%\" abstract=\"true\" public=\"false\" />

        <service id=\"doctrine.orm.entity_manager.abstract\" class=\"%doctrine.orm.entity_manager.class%\" abstract=\"true\" lazy=\"true\">
            <factory class=\"%doctrine.orm.entity_manager.class%\" method=\"create\" />
        </service>

        <service id=\"doctrine.orm.container_repository_factory\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Repository\\ContainerRepositoryFactory\" public=\"false\">
            <argument type=\"service\">
                <service class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\">
                    <argument type=\"collection\" />
                </service>
            </argument>
        </service>

        <!-- The configurator cannot be a private service -->
        <service id=\"doctrine.orm.manager_configurator.abstract\" class=\"%doctrine.orm.manager_configurator.class%\" abstract=\"true\">
            <argument type=\"collection\" />
            <argument type=\"collection\" />
        </service>

        <!-- validator -->
        <service id=\"doctrine.orm.validator.unique\" class=\"%doctrine.orm.validator.unique.class%\">
            <tag name=\"validator.constraint_validator\" alias=\"doctrine.orm.validator.unique\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"doctrine.orm.validator_initializer\" class=\"%doctrine.orm.validator_initializer.class%\">
            <tag name=\"validator.initializer\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!-- security -->
        <service id=\"doctrine.orm.security.user.provider\" class=\"%doctrine.orm.security.user.provider.class%\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!-- listeners -->
        <service id=\"doctrine.orm.listeners.resolve_target_entity\" class=\"%doctrine.orm.listeners.resolve_target_entity.class%\" public=\"false\" />

        <!-- naming strategy -->
        <service id=\"doctrine.orm.naming_strategy.default\" class=\"%doctrine.orm.naming_strategy.default.class%\" public=\"false\" />
        <service id=\"doctrine.orm.naming_strategy.underscore\" class=\"%doctrine.orm.naming_strategy.underscore.class%\" public=\"false\" />

        <!-- quote strategy -->
        <service id=\"doctrine.orm.quote_strategy.default\" class=\"%doctrine.orm.quote_strategy.default.class%\" public=\"false\" />
        <service id=\"doctrine.orm.quote_strategy.ansi\" class=\"%doctrine.orm.quote_strategy.ansi.class%\" public=\"false\" />

        <!-- commands -->
        <service id=\"doctrine.cache_clear_metadata_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-metadata\" />
        </service>

        <service id=\"doctrine.cache_clear_query_cache_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-query\" />
        </service>

        <service id=\"doctrine.cache_clear_result_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-result\" />
        </service>

        <service id=\"doctrine.cache_collection_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-collection-region\" />
        </service>

        <service id=\"doctrine.mapping_convert_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:mapping:convert\" />
        </service>

        <service id=\"doctrine.schema_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:schema:create\" />
        </service>

        <service id=\"doctrine.schema_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:schema:drop\" />
        </service>

        <service id=\"doctrine.ensure_production_settings_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:ensure-production-settings\" />
        </service>

        <service id=\"doctrine.clear_entity_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-entity-region\" />
        </service>

        <service id=\"doctrine.database_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:database:import\" />
        </service>

        <service id=\"doctrine.mapping_info_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:mapping:info\" />
        </service>

        <service id=\"doctrine.clear_query_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:cache:clear-query-region\" />
        </service>

        <service id=\"doctrine.query_dql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:query:dql\" />
        </service>

        <service id=\"doctrine.schema_update_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:schema:update\" />
        </service>

        <service id=\"doctrine.schema_validate_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand\">
            <tag name=\"console.command\" command=\"doctrine:schema:validate\" />
        </service>

        <service id=\"doctrine.mapping_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand\">
            <argument type=\"service\" id=\"doctrine\" />
            <argument>%kernel.bundles%</argument>

            <tag name=\"console.command\" command=\"doctrine:mapping:import\" />
        </service>

        <service id=\"doctrine.generate_entities_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\GenerateEntitiesDoctrineCommand\">
            <argument type=\"service\" id=\"doctrine\" />

            <tag name=\"console.command\" command=\"doctrine:generate:entities\" />
        </service>

    </services>
</container>
", "vendor/doctrine/doctrine-bundle/Resources/config/orm.xml", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Resources/config/orm.xml");
    }
}
