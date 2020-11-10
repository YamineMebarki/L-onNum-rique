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

/* vendor/symfony/framework-bundle/Resources/config/cache.xml */
class __TwigTemplate_77a77ac2f1101c02a546e828f644863041af276dc23f28483041417195ccc393 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/cache.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/cache.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"cache.app\" parent=\"cache.adapter.filesystem\" public=\"true\">
            <tag name=\"cache.pool\" clearer=\"cache.app_clearer\" />
        </service>

        <service id=\"cache.app.simple\" class=\"Symfony\\Component\\Cache\\Psr16Cache\">
            <deprecated>The \"Psr\\SimpleCache\\CacheInterface\" / \"%service_id%\" service is deprecated since Symfony 4.3. Use \"Symfony\\Contracts\\Cache\\CacheInterface\" / \"cache.app\" instead.</deprecated>
            <argument type=\"service\" id=\"cache.app\" />
        </service>

        <service id=\"cache.app.taggable\" class=\"Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter\">
            <argument type=\"service\" id=\"cache.app\" />
        </service>

        <service id=\"cache.system\" parent=\"cache.adapter.system\" public=\"true\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.validator\" parent=\"cache.system\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.serializer\" parent=\"cache.system\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.annotations\" parent=\"cache.system\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.property_info\" parent=\"cache.system\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.messenger.restart_workers_signal\" parent=\"cache.app\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.adapter.system\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" abstract=\"true\">
            <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\" />
            <tag name=\"cache.pool\" clearer=\"cache.system_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument /> <!-- version -->
            <argument>%kernel.cache_dir%/pools</argument>
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"cache.adapter.apcu\" class=\"Symfony\\Component\\Cache\\Adapter\\ApcuAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument /> <!-- version -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.doctrine\" class=\"Symfony\\Component\\Cache\\Adapter\\DoctrineAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" provider=\"cache.default_doctrine_provider\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- Doctrine provider service -->
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.filesystem\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument>%kernel.cache_dir%/pools</argument>
            <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\" />
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.psr6\" class=\"Symfony\\Component\\Cache\\Adapter\\ProxyAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" provider=\"cache.default_psr6_provider\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <argument /> <!-- PSR-6 provider service -->
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
        </service>

        <service id=\"cache.adapter.redis\" class=\"Symfony\\Component\\Cache\\Adapter\\RedisAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" provider=\"cache.default_redis_provider\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- Redis connection service -->
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\" />
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.memcached\" class=\"Symfony\\Component\\Cache\\Adapter\\MemcachedAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" provider=\"cache.default_memcached_provider\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- Memcached connection service -->
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\" />
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.pdo\" class=\"Symfony\\Component\\Cache\\Adapter\\PdoAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" provider=\"cache.default_pdo_provider\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- PDO connection service -->
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument type=\"collection\" /> <!-- table options -->
            <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\" />
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.array\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument>0</argument> <!-- default lifetime -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.default_marshaller\" class=\"Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller\">
            <argument>null</argument> <!-- use igbinary_serialize() when available -->
        </service>

        <service id=\"cache.default_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\">
            <argument type=\"collection\" />
        </service>

        <service id=\"cache.system_clearer\" parent=\"cache.default_clearer\" public=\"true\" />

        <service id=\"cache.global_clearer\" parent=\"cache.default_clearer\" public=\"true\" />
        <service id=\"cache.app_clearer\" alias=\"cache.default_clearer\" public=\"true\" />
        <service id=\"Psr\\Cache\\CacheItemPoolInterface\" alias=\"cache.app\" />
        <service id=\"Psr\\SimpleCache\\CacheInterface\" alias=\"cache.app.simple\" />
        <service id=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" alias=\"cache.app\" />
        <service id=\"Symfony\\Contracts\\Cache\\CacheInterface\" alias=\"cache.app\" />
        <service id=\"Symfony\\Contracts\\Cache\\TagAwareCacheInterface\" alias=\"cache.app.taggable\" />
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/cache.xml";
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
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"cache.app\" parent=\"cache.adapter.filesystem\" public=\"true\">
            <tag name=\"cache.pool\" clearer=\"cache.app_clearer\" />
        </service>

        <service id=\"cache.app.simple\" class=\"Symfony\\Component\\Cache\\Psr16Cache\">
            <deprecated>The \"Psr\\SimpleCache\\CacheInterface\" / \"%service_id%\" service is deprecated since Symfony 4.3. Use \"Symfony\\Contracts\\Cache\\CacheInterface\" / \"cache.app\" instead.</deprecated>
            <argument type=\"service\" id=\"cache.app\" />
        </service>

        <service id=\"cache.app.taggable\" class=\"Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter\">
            <argument type=\"service\" id=\"cache.app\" />
        </service>

        <service id=\"cache.system\" parent=\"cache.adapter.system\" public=\"true\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.validator\" parent=\"cache.system\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.serializer\" parent=\"cache.system\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.annotations\" parent=\"cache.system\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.property_info\" parent=\"cache.system\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.messenger.restart_workers_signal\" parent=\"cache.app\" public=\"false\">
            <tag name=\"cache.pool\" />
        </service>

        <service id=\"cache.adapter.system\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" abstract=\"true\">
            <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\" />
            <tag name=\"cache.pool\" clearer=\"cache.system_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument /> <!-- version -->
            <argument>%kernel.cache_dir%/pools</argument>
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"cache.adapter.apcu\" class=\"Symfony\\Component\\Cache\\Adapter\\ApcuAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument /> <!-- version -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.doctrine\" class=\"Symfony\\Component\\Cache\\Adapter\\DoctrineAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" provider=\"cache.default_doctrine_provider\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- Doctrine provider service -->
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.filesystem\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument>%kernel.cache_dir%/pools</argument>
            <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\" />
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.psr6\" class=\"Symfony\\Component\\Cache\\Adapter\\ProxyAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" provider=\"cache.default_psr6_provider\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <argument /> <!-- PSR-6 provider service -->
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
        </service>

        <service id=\"cache.adapter.redis\" class=\"Symfony\\Component\\Cache\\Adapter\\RedisAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" provider=\"cache.default_redis_provider\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- Redis connection service -->
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\" />
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.memcached\" class=\"Symfony\\Component\\Cache\\Adapter\\MemcachedAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" provider=\"cache.default_memcached_provider\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- Memcached connection service -->
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\" />
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.pdo\" class=\"Symfony\\Component\\Cache\\Adapter\\PdoAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" provider=\"cache.default_pdo_provider\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument /> <!-- PDO connection service -->
            <argument /> <!-- namespace -->
            <argument>0</argument> <!-- default lifetime -->
            <argument type=\"collection\" /> <!-- table options -->
            <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\" />
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.adapter.array\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\" abstract=\"true\">
            <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\" />
            <tag name=\"monolog.logger\" channel=\"cache\" />
            <argument>0</argument> <!-- default lifetime -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"cache.default_marshaller\" class=\"Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller\">
            <argument>null</argument> <!-- use igbinary_serialize() when available -->
        </service>

        <service id=\"cache.default_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\">
            <argument type=\"collection\" />
        </service>

        <service id=\"cache.system_clearer\" parent=\"cache.default_clearer\" public=\"true\" />

        <service id=\"cache.global_clearer\" parent=\"cache.default_clearer\" public=\"true\" />
        <service id=\"cache.app_clearer\" alias=\"cache.default_clearer\" public=\"true\" />
        <service id=\"Psr\\Cache\\CacheItemPoolInterface\" alias=\"cache.app\" />
        <service id=\"Psr\\SimpleCache\\CacheInterface\" alias=\"cache.app.simple\" />
        <service id=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" alias=\"cache.app\" />
        <service id=\"Symfony\\Contracts\\Cache\\CacheInterface\" alias=\"cache.app\" />
        <service id=\"Symfony\\Contracts\\Cache\\TagAwareCacheInterface\" alias=\"cache.app.taggable\" />
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/cache.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/cache.xml");
    }
}
