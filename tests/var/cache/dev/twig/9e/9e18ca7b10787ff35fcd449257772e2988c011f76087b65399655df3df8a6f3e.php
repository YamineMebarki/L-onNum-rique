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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/RedisCache.php */
class __TwigTemplate_782b55b649c595c147db5cee23006ab9c487e5a98b5062369e27e034aabd6bc6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/RedisCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/RedisCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use Redis;
use function array_combine;
use function defined;
use function extension_loaded;
use function is_bool;

/**
 * Redis cache provider.
 *
 * @link   www.doctrine-project.org
 */
class RedisCache extends CacheProvider
{
    /** @var Redis|null */
    private \$redis;

    /**
     * Sets the redis instance to use.
     *
     * @return void
     */
    public function setRedis(Redis \$redis)
    {
        \$redis->setOption(Redis::OPT_SERIALIZER, \$this->getSerializerValue());
        \$this->redis = \$redis;
    }

    /**
     * Gets the redis instance used by the cache.
     *
     * @return Redis|null
     */
    public function getRedis()
    {
        return \$this->redis;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->redis->get(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        \$fetchedItems = array_combine(\$keys, \$this->redis->mget(\$keys));

        // Redis mget returns false for keys that do not exist. So we need to filter those out unless it's the real data.
        \$foundItems = [];

        foreach (\$fetchedItems as \$key => \$value) {
            if (\$value === false && ! \$this->redis->exists(\$key)) {
                continue;
            }

            \$foundItems[\$key] = \$value;
        }

        return \$foundItems;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        if (\$lifetime) {
            \$success = true;

            // Keys have lifetime, use SETEX for each of them
            foreach (\$keysAndValues as \$key => \$value) {
                if (\$this->redis->setex(\$key, \$lifetime, \$value)) {
                    continue;
                }

                \$success = false;
            }

            return \$success;
        }

        // No lifetime, use MSET
        return (bool) \$this->redis->mset(\$keysAndValues);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        \$exists = \$this->redis->exists(\$id);

        if (is_bool(\$exists)) {
            return \$exists;
        }

        return \$exists > 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 0) {
            return \$this->redis->setex(\$id, \$lifeTime, \$data);
        }

        return \$this->redis->set(\$id, \$data);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return \$this->redis->del(\$id) >= 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        return \$this->redis->del(\$keys) >= 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->redis->flushDB();
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$info = \$this->redis->info();
        return [
            Cache::STATS_HITS   => \$info['keyspace_hits'],
            Cache::STATS_MISSES => \$info['keyspace_misses'],
            Cache::STATS_UPTIME => \$info['uptime_in_seconds'],
            Cache::STATS_MEMORY_USAGE      => \$info['used_memory'],
            Cache::STATS_MEMORY_AVAILABLE  => false,
        ];
    }

    /**
     * Returns the serializer constant to use. If Redis is compiled with
     * igbinary support, that is used. Otherwise the default PHP serializer is
     * used.
     *
     * @return int One of the Redis::SERIALIZER_* constants
     */
    protected function getSerializerValue()
    {
        if (defined('Redis::SERIALIZER_IGBINARY') && extension_loaded('igbinary')) {
            return Redis::SERIALIZER_IGBINARY;
        }

        return Redis::SERIALIZER_PHP;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/RedisCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use Redis;
use function array_combine;
use function defined;
use function extension_loaded;
use function is_bool;

/**
 * Redis cache provider.
 *
 * @link   www.doctrine-project.org
 */
class RedisCache extends CacheProvider
{
    /** @var Redis|null */
    private \$redis;

    /**
     * Sets the redis instance to use.
     *
     * @return void
     */
    public function setRedis(Redis \$redis)
    {
        \$redis->setOption(Redis::OPT_SERIALIZER, \$this->getSerializerValue());
        \$this->redis = \$redis;
    }

    /**
     * Gets the redis instance used by the cache.
     *
     * @return Redis|null
     */
    public function getRedis()
    {
        return \$this->redis;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->redis->get(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        \$fetchedItems = array_combine(\$keys, \$this->redis->mget(\$keys));

        // Redis mget returns false for keys that do not exist. So we need to filter those out unless it's the real data.
        \$foundItems = [];

        foreach (\$fetchedItems as \$key => \$value) {
            if (\$value === false && ! \$this->redis->exists(\$key)) {
                continue;
            }

            \$foundItems[\$key] = \$value;
        }

        return \$foundItems;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        if (\$lifetime) {
            \$success = true;

            // Keys have lifetime, use SETEX for each of them
            foreach (\$keysAndValues as \$key => \$value) {
                if (\$this->redis->setex(\$key, \$lifetime, \$value)) {
                    continue;
                }

                \$success = false;
            }

            return \$success;
        }

        // No lifetime, use MSET
        return (bool) \$this->redis->mset(\$keysAndValues);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        \$exists = \$this->redis->exists(\$id);

        if (is_bool(\$exists)) {
            return \$exists;
        }

        return \$exists > 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 0) {
            return \$this->redis->setex(\$id, \$lifeTime, \$data);
        }

        return \$this->redis->set(\$id, \$data);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return \$this->redis->del(\$id) >= 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        return \$this->redis->del(\$keys) >= 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->redis->flushDB();
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$info = \$this->redis->info();
        return [
            Cache::STATS_HITS   => \$info['keyspace_hits'],
            Cache::STATS_MISSES => \$info['keyspace_misses'],
            Cache::STATS_UPTIME => \$info['uptime_in_seconds'],
            Cache::STATS_MEMORY_USAGE      => \$info['used_memory'],
            Cache::STATS_MEMORY_AVAILABLE  => false,
        ];
    }

    /**
     * Returns the serializer constant to use. If Redis is compiled with
     * igbinary support, that is used. Otherwise the default PHP serializer is
     * used.
     *
     * @return int One of the Redis::SERIALIZER_* constants
     */
    protected function getSerializerValue()
    {
        if (defined('Redis::SERIALIZER_IGBINARY') && extension_loaded('igbinary')) {
            return Redis::SERIALIZER_IGBINARY;
        }

        return Redis::SERIALIZER_PHP;
    }
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/RedisCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/RedisCache.php");
    }
}
