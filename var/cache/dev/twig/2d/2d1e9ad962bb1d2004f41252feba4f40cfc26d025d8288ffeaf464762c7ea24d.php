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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcachedCache.php */
class __TwigTemplate_66dc3a35b8ad24157b3787d0d771d903cca1ede913f357cb271ad133c7947465 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcachedCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcachedCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use Memcached;
use function time;

/**
 * Memcached cache provider.
 *
 * @link   www.doctrine-project.org
 */
class MemcachedCache extends CacheProvider
{
    /** @var Memcached|null */
    private \$memcached;

    /**
     * Sets the memcache instance to use.
     *
     * @return void
     */
    public function setMemcached(Memcached \$memcached)
    {
        \$this->memcached = \$memcached;
    }

    /**
     * Gets the memcached instance used by the cache.
     *
     * @return Memcached|null
     */
    public function getMemcached()
    {
        return \$this->memcached;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->memcached->get(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        return \$this->memcached->getMulti(\$keys) ?: [];
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        if (\$lifetime > 30 * 24 * 3600) {
            \$lifetime = time() + \$lifetime;
        }

        return \$this->memcached->setMulti(\$keysAndValues, \$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        \$this->memcached->get(\$id);

        return \$this->memcached->getResultCode() === Memcached::RES_SUCCESS;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 30 * 24 * 3600) {
            \$lifeTime = time() + \$lifeTime;
        }
        return \$this->memcached->set(\$id, \$data, (int) \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        return \$this->memcached->deleteMulti(\$keys)
            || \$this->memcached->getResultCode() === Memcached::RES_NOTFOUND;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return \$this->memcached->delete(\$id)
            || \$this->memcached->getResultCode() === Memcached::RES_NOTFOUND;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->memcached->flush();
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$stats   = \$this->memcached->getStats();
        \$servers = \$this->memcached->getServerList();
        \$key     = \$servers[0]['host'] . ':' . \$servers[0]['port'];
        \$stats   = \$stats[\$key];
        return [
            Cache::STATS_HITS   => \$stats['get_hits'],
            Cache::STATS_MISSES => \$stats['get_misses'],
            Cache::STATS_UPTIME => \$stats['uptime'],
            Cache::STATS_MEMORY_USAGE     => \$stats['bytes'],
            Cache::STATS_MEMORY_AVAILABLE => \$stats['limit_maxbytes'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcachedCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use Memcached;
use function time;

/**
 * Memcached cache provider.
 *
 * @link   www.doctrine-project.org
 */
class MemcachedCache extends CacheProvider
{
    /** @var Memcached|null */
    private \$memcached;

    /**
     * Sets the memcache instance to use.
     *
     * @return void
     */
    public function setMemcached(Memcached \$memcached)
    {
        \$this->memcached = \$memcached;
    }

    /**
     * Gets the memcached instance used by the cache.
     *
     * @return Memcached|null
     */
    public function getMemcached()
    {
        return \$this->memcached;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->memcached->get(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        return \$this->memcached->getMulti(\$keys) ?: [];
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        if (\$lifetime > 30 * 24 * 3600) {
            \$lifetime = time() + \$lifetime;
        }

        return \$this->memcached->setMulti(\$keysAndValues, \$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        \$this->memcached->get(\$id);

        return \$this->memcached->getResultCode() === Memcached::RES_SUCCESS;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 30 * 24 * 3600) {
            \$lifeTime = time() + \$lifeTime;
        }
        return \$this->memcached->set(\$id, \$data, (int) \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        return \$this->memcached->deleteMulti(\$keys)
            || \$this->memcached->getResultCode() === Memcached::RES_NOTFOUND;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return \$this->memcached->delete(\$id)
            || \$this->memcached->getResultCode() === Memcached::RES_NOTFOUND;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->memcached->flush();
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$stats   = \$this->memcached->getStats();
        \$servers = \$this->memcached->getServerList();
        \$key     = \$servers[0]['host'] . ':' . \$servers[0]['port'];
        \$stats   = \$stats[\$key];
        return [
            Cache::STATS_HITS   => \$stats['get_hits'],
            Cache::STATS_MISSES => \$stats['get_misses'],
            Cache::STATS_UPTIME => \$stats['uptime'],
            Cache::STATS_MEMORY_USAGE     => \$stats['bytes'],
            Cache::STATS_MEMORY_AVAILABLE => \$stats['limit_maxbytes'],
        ];
    }
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcachedCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcachedCache.php");
    }
}
