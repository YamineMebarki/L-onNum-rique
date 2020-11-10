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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Setup.php */
class __TwigTemplate_205f4a28f53db8895bab07660c2644bc084f9376d619dd68130dc2a51cbc7505 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Setup.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Setup.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools;

use Doctrine\\Common\\ClassLoader;
use Doctrine\\Common\\Cache\\Cache;
use Doctrine\\Common\\Cache\\CacheProvider;
use Doctrine\\Common\\Cache\\ArrayCache;
use Doctrine\\ORM\\Configuration;
use Doctrine\\ORM\\Mapping\\Driver\\XmlDriver;
use Doctrine\\ORM\\Mapping\\Driver\\YamlDriver;

/**
 * Convenience class for setting up Doctrine from different installations and configurations.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class Setup
{
    /**
     * Use this method to register all autoloads for a downloaded Doctrine library.
     * Pick the directory the library was uncompressed into.
     *
     * @param string \$directory
     *
     * @return void
     */
    public static function registerAutoloadDirectory(\$directory)
    {
        if (!class_exists('Doctrine\\Common\\ClassLoader', false)) {
            require_once \$directory . \"/Doctrine/Common/ClassLoader.php\";
        }

        \$loader = new ClassLoader(\"Doctrine\", \$directory);
        \$loader->register();

        \$loader = new ClassLoader(\"Symfony\\Component\", \$directory . \"/Doctrine\");
        \$loader->register();
    }

    /**
     * Creates a configuration with an annotation metadata driver.
     *
     * @param array   \$paths
     * @param boolean \$isDevMode
     * @param string  \$proxyDir
     * @param Cache   \$cache
     * @param bool    \$useSimpleAnnotationReader
     *
     * @return Configuration
     */
    public static function createAnnotationMetadataConfiguration(array \$paths, \$isDevMode = false, \$proxyDir = null, Cache \$cache = null, \$useSimpleAnnotationReader = true)
    {
        \$config = self::createConfiguration(\$isDevMode, \$proxyDir, \$cache);
        \$config->setMetadataDriverImpl(\$config->newDefaultAnnotationDriver(\$paths, \$useSimpleAnnotationReader));

        return \$config;
    }

    /**
     * Creates a configuration with a xml metadata driver.
     *
     * @param array   \$paths
     * @param boolean \$isDevMode
     * @param string  \$proxyDir
     * @param Cache   \$cache
     *
     * @return Configuration
     */
    public static function createXMLMetadataConfiguration(array \$paths, \$isDevMode = false, \$proxyDir = null, Cache \$cache = null)
    {
        \$config = self::createConfiguration(\$isDevMode, \$proxyDir, \$cache);
        \$config->setMetadataDriverImpl(new XmlDriver(\$paths));

        return \$config;
    }

    /**
     * Creates a configuration with a yaml metadata driver.
     *
     * @param array   \$paths
     * @param boolean \$isDevMode
     * @param string  \$proxyDir
     * @param Cache   \$cache
     *
     * @return Configuration
     */
    public static function createYAMLMetadataConfiguration(array \$paths, \$isDevMode = false, \$proxyDir = null, Cache \$cache = null)
    {
        \$config = self::createConfiguration(\$isDevMode, \$proxyDir, \$cache);
        \$config->setMetadataDriverImpl(new YamlDriver(\$paths));

        return \$config;
    }

    /**
     * Creates a configuration without a metadata driver.
     *
     * @param bool   \$isDevMode
     * @param string \$proxyDir
     * @param Cache  \$cache
     *
     * @return Configuration
     */
    public static function createConfiguration(\$isDevMode = false, \$proxyDir = null, Cache \$cache = null)
    {
        \$proxyDir = \$proxyDir ?: sys_get_temp_dir();

        \$cache = self::createCacheConfiguration(\$isDevMode, \$proxyDir, \$cache);

        \$config = new Configuration();
        \$config->setMetadataCacheImpl(\$cache);
        \$config->setQueryCacheImpl(\$cache);
        \$config->setResultCacheImpl(\$cache);
        \$config->setProxyDir(\$proxyDir);
        \$config->setProxyNamespace('DoctrineProxies');
        \$config->setAutoGenerateProxyClasses(\$isDevMode);

        return \$config;
    }

    private static function createCacheConfiguration(bool \$isDevMode, string \$proxyDir, ?Cache \$cache) :  Cache
    {
        \$cache = self::createCacheInstance(\$isDevMode, \$cache);

        if ( ! \$cache instanceof CacheProvider) {
            return \$cache;
        }

        \$namespace = \$cache->getNamespace();

        if (\$namespace !== '') {
            \$namespace .= ':';
        }

        \$cache->setNamespace(\$namespace . 'dc2_' . md5(\$proxyDir) . '_'); // to avoid collisions

        return \$cache;
    }

    private static function createCacheInstance(bool \$isDevMode, ?Cache \$cache) : Cache
    {
        if (\$cache !== null) {
            return \$cache;
        }

        if (\$isDevMode === true) {
            return new ArrayCache();
        }

        if (extension_loaded('apcu')) {
            return new \\Doctrine\\Common\\Cache\\ApcuCache();
        }


        if (extension_loaded('memcached')) {
            \$memcached = new \\Memcached();
            \$memcached->addServer('127.0.0.1', 11211);

            \$cache = new \\Doctrine\\Common\\Cache\\MemcachedCache();
            \$cache->setMemcached(\$memcached);

            return \$cache;
        }

        if (extension_loaded('redis')) {
            \$redis = new \\Redis();
            \$redis->connect('127.0.0.1');

            \$cache = new \\Doctrine\\Common\\Cache\\RedisCache();
            \$cache->setRedis(\$redis);

            return \$cache;
        }

        return new ArrayCache();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Setup.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools;

use Doctrine\\Common\\ClassLoader;
use Doctrine\\Common\\Cache\\Cache;
use Doctrine\\Common\\Cache\\CacheProvider;
use Doctrine\\Common\\Cache\\ArrayCache;
use Doctrine\\ORM\\Configuration;
use Doctrine\\ORM\\Mapping\\Driver\\XmlDriver;
use Doctrine\\ORM\\Mapping\\Driver\\YamlDriver;

/**
 * Convenience class for setting up Doctrine from different installations and configurations.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class Setup
{
    /**
     * Use this method to register all autoloads for a downloaded Doctrine library.
     * Pick the directory the library was uncompressed into.
     *
     * @param string \$directory
     *
     * @return void
     */
    public static function registerAutoloadDirectory(\$directory)
    {
        if (!class_exists('Doctrine\\Common\\ClassLoader', false)) {
            require_once \$directory . \"/Doctrine/Common/ClassLoader.php\";
        }

        \$loader = new ClassLoader(\"Doctrine\", \$directory);
        \$loader->register();

        \$loader = new ClassLoader(\"Symfony\\Component\", \$directory . \"/Doctrine\");
        \$loader->register();
    }

    /**
     * Creates a configuration with an annotation metadata driver.
     *
     * @param array   \$paths
     * @param boolean \$isDevMode
     * @param string  \$proxyDir
     * @param Cache   \$cache
     * @param bool    \$useSimpleAnnotationReader
     *
     * @return Configuration
     */
    public static function createAnnotationMetadataConfiguration(array \$paths, \$isDevMode = false, \$proxyDir = null, Cache \$cache = null, \$useSimpleAnnotationReader = true)
    {
        \$config = self::createConfiguration(\$isDevMode, \$proxyDir, \$cache);
        \$config->setMetadataDriverImpl(\$config->newDefaultAnnotationDriver(\$paths, \$useSimpleAnnotationReader));

        return \$config;
    }

    /**
     * Creates a configuration with a xml metadata driver.
     *
     * @param array   \$paths
     * @param boolean \$isDevMode
     * @param string  \$proxyDir
     * @param Cache   \$cache
     *
     * @return Configuration
     */
    public static function createXMLMetadataConfiguration(array \$paths, \$isDevMode = false, \$proxyDir = null, Cache \$cache = null)
    {
        \$config = self::createConfiguration(\$isDevMode, \$proxyDir, \$cache);
        \$config->setMetadataDriverImpl(new XmlDriver(\$paths));

        return \$config;
    }

    /**
     * Creates a configuration with a yaml metadata driver.
     *
     * @param array   \$paths
     * @param boolean \$isDevMode
     * @param string  \$proxyDir
     * @param Cache   \$cache
     *
     * @return Configuration
     */
    public static function createYAMLMetadataConfiguration(array \$paths, \$isDevMode = false, \$proxyDir = null, Cache \$cache = null)
    {
        \$config = self::createConfiguration(\$isDevMode, \$proxyDir, \$cache);
        \$config->setMetadataDriverImpl(new YamlDriver(\$paths));

        return \$config;
    }

    /**
     * Creates a configuration without a metadata driver.
     *
     * @param bool   \$isDevMode
     * @param string \$proxyDir
     * @param Cache  \$cache
     *
     * @return Configuration
     */
    public static function createConfiguration(\$isDevMode = false, \$proxyDir = null, Cache \$cache = null)
    {
        \$proxyDir = \$proxyDir ?: sys_get_temp_dir();

        \$cache = self::createCacheConfiguration(\$isDevMode, \$proxyDir, \$cache);

        \$config = new Configuration();
        \$config->setMetadataCacheImpl(\$cache);
        \$config->setQueryCacheImpl(\$cache);
        \$config->setResultCacheImpl(\$cache);
        \$config->setProxyDir(\$proxyDir);
        \$config->setProxyNamespace('DoctrineProxies');
        \$config->setAutoGenerateProxyClasses(\$isDevMode);

        return \$config;
    }

    private static function createCacheConfiguration(bool \$isDevMode, string \$proxyDir, ?Cache \$cache) :  Cache
    {
        \$cache = self::createCacheInstance(\$isDevMode, \$cache);

        if ( ! \$cache instanceof CacheProvider) {
            return \$cache;
        }

        \$namespace = \$cache->getNamespace();

        if (\$namespace !== '') {
            \$namespace .= ':';
        }

        \$cache->setNamespace(\$namespace . 'dc2_' . md5(\$proxyDir) . '_'); // to avoid collisions

        return \$cache;
    }

    private static function createCacheInstance(bool \$isDevMode, ?Cache \$cache) : Cache
    {
        if (\$cache !== null) {
            return \$cache;
        }

        if (\$isDevMode === true) {
            return new ArrayCache();
        }

        if (extension_loaded('apcu')) {
            return new \\Doctrine\\Common\\Cache\\ApcuCache();
        }


        if (extension_loaded('memcached')) {
            \$memcached = new \\Memcached();
            \$memcached->addServer('127.0.0.1', 11211);

            \$cache = new \\Doctrine\\Common\\Cache\\MemcachedCache();
            \$cache->setMemcached(\$memcached);

            return \$cache;
        }

        if (extension_loaded('redis')) {
            \$redis = new \\Redis();
            \$redis->connect('127.0.0.1');

            \$cache = new \\Doctrine\\Common\\Cache\\RedisCache();
            \$cache->setRedis(\$redis);

            return \$cache;
        }

        return new ArrayCache();
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Setup.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Setup.php");
    }
}
