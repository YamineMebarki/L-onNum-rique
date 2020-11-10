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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcacheCache.php */
class __TwigTemplate_d88f57d622b648a283202b9aafaa525f75cb82831b2fb8ff84f5430065ee5364 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcacheCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcacheCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use Memcache;
use function time;

/**
 * Memcache cache provider.
 *
 * @link   www.doctrine-project.org
 *
 * @deprecated
 */
class MemcacheCache extends CacheProvider
{
    /** @var Memcache|null */
    private \$memcache;

    /**
     * Sets the memcache instance to use.
     *
     * @return void
     */
    public function setMemcache(Memcache \$memcache)
    {
        \$this->memcache = \$memcache;
    }

    /**
     * Gets the memcache instance used by the cache.
     *
     * @return Memcache|null
     */
    public function getMemcache()
    {
        return \$this->memcache;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->memcache->get(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        \$flags = null;
        \$this->memcache->get(\$id, \$flags);

        //if memcache has changed the value of \"flags\", it means the value exists
        return \$flags !== null;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 30 * 24 * 3600) {
            \$lifeTime = time() + \$lifeTime;
        }
        return \$this->memcache->set(\$id, \$data, 0, (int) \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        // Memcache::delete() returns false if entry does not exist
        return \$this->memcache->delete(\$id) || ! \$this->doContains(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->memcache->flush();
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$stats = \$this->memcache->getStats();
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
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcacheCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use Memcache;
use function time;

/**
 * Memcache cache provider.
 *
 * @link   www.doctrine-project.org
 *
 * @deprecated
 */
class MemcacheCache extends CacheProvider
{
    /** @var Memcache|null */
    private \$memcache;

    /**
     * Sets the memcache instance to use.
     *
     * @return void
     */
    public function setMemcache(Memcache \$memcache)
    {
        \$this->memcache = \$memcache;
    }

    /**
     * Gets the memcache instance used by the cache.
     *
     * @return Memcache|null
     */
    public function getMemcache()
    {
        return \$this->memcache;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->memcache->get(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        \$flags = null;
        \$this->memcache->get(\$id, \$flags);

        //if memcache has changed the value of \"flags\", it means the value exists
        return \$flags !== null;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 30 * 24 * 3600) {
            \$lifeTime = time() + \$lifeTime;
        }
        return \$this->memcache->set(\$id, \$data, 0, (int) \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        // Memcache::delete() returns false if entry does not exist
        return \$this->memcache->delete(\$id) || ! \$this->doContains(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->memcache->flush();
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$stats = \$this->memcache->getStats();
        return [
            Cache::STATS_HITS   => \$stats['get_hits'],
            Cache::STATS_MISSES => \$stats['get_misses'],
            Cache::STATS_UPTIME => \$stats['uptime'],
            Cache::STATS_MEMORY_USAGE     => \$stats['bytes'],
            Cache::STATS_MEMORY_AVAILABLE => \$stats['limit_maxbytes'],
        ];
    }
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcacheCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcacheCache.php");
    }
}
