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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/WinCacheCache.php */
class __TwigTemplate_5a2a9c77cbf9921eed3bc06559f77818db8d09786cff48baca5acaac3f2f5b86 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/WinCacheCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/WinCacheCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use function count;
use function is_array;
use function wincache_ucache_clear;
use function wincache_ucache_delete;
use function wincache_ucache_exists;
use function wincache_ucache_get;
use function wincache_ucache_info;
use function wincache_ucache_meminfo;
use function wincache_ucache_set;

/**
 * WinCache cache provider.
 *
 * @link   www.doctrine-project.org
 */
class WinCacheCache extends CacheProvider
{
    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return wincache_ucache_get(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return wincache_ucache_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return wincache_ucache_set(\$id, \$data, \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return wincache_ucache_delete(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return wincache_ucache_clear();
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        return wincache_ucache_get(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        \$result = wincache_ucache_set(\$keysAndValues, null, \$lifetime);

        return empty(\$result);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        \$result = wincache_ucache_delete(\$keys);

        return is_array(\$result) && count(\$result) !== count(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$info    = wincache_ucache_info();
        \$meminfo = wincache_ucache_meminfo();

        return [
            Cache::STATS_HITS             => \$info['total_hit_count'],
            Cache::STATS_MISSES           => \$info['total_miss_count'],
            Cache::STATS_UPTIME           => \$info['total_cache_uptime'],
            Cache::STATS_MEMORY_USAGE     => \$meminfo['memory_total'],
            Cache::STATS_MEMORY_AVAILABLE => \$meminfo['memory_free'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/WinCacheCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use function count;
use function is_array;
use function wincache_ucache_clear;
use function wincache_ucache_delete;
use function wincache_ucache_exists;
use function wincache_ucache_get;
use function wincache_ucache_info;
use function wincache_ucache_meminfo;
use function wincache_ucache_set;

/**
 * WinCache cache provider.
 *
 * @link   www.doctrine-project.org
 */
class WinCacheCache extends CacheProvider
{
    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return wincache_ucache_get(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return wincache_ucache_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return wincache_ucache_set(\$id, \$data, \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return wincache_ucache_delete(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return wincache_ucache_clear();
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        return wincache_ucache_get(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        \$result = wincache_ucache_set(\$keysAndValues, null, \$lifetime);

        return empty(\$result);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        \$result = wincache_ucache_delete(\$keys);

        return is_array(\$result) && count(\$result) !== count(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$info    = wincache_ucache_info();
        \$meminfo = wincache_ucache_meminfo();

        return [
            Cache::STATS_HITS             => \$info['total_hit_count'],
            Cache::STATS_MISSES           => \$info['total_miss_count'],
            Cache::STATS_UPTIME           => \$info['total_cache_uptime'],
            Cache::STATS_MEMORY_USAGE     => \$meminfo['memory_total'],
            Cache::STATS_MEMORY_AVAILABLE => \$meminfo['memory_free'],
        ];
    }
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/WinCacheCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/WinCacheCache.php");
    }
}
