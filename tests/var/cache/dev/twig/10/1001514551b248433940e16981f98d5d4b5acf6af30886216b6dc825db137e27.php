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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcuCache.php */
class __TwigTemplate_31c093e06f87024186af2078d35e3325a2776e1750082be39812a885ebfc7b09 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcuCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcuCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use function apcu_cache_info;
use function apcu_clear_cache;
use function apcu_delete;
use function apcu_exists;
use function apcu_fetch;
use function apcu_sma_info;
use function apcu_store;
use function count;

/**
 * APCu cache provider.
 *
 * @link   www.doctrine-project.org
 */
class ApcuCache extends CacheProvider
{
    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return apcu_fetch(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return apcu_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return apcu_store(\$id, \$data, \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        // apcu_delete returns false if the id does not exist
        return apcu_delete(\$id) || ! apcu_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        \$result = apcu_delete(\$keys);

        return \$result !== false && count(\$result) !== count(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return apcu_clear_cache();
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        return apcu_fetch(\$keys) ?: [];
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        \$result = apcu_store(\$keysAndValues, null, \$lifetime);

        return empty(\$result);
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$info = apcu_cache_info(true);
        \$sma  = apcu_sma_info();

        return [
            Cache::STATS_HITS             => \$info['num_hits'],
            Cache::STATS_MISSES           => \$info['num_misses'],
            Cache::STATS_UPTIME           => \$info['start_time'],
            Cache::STATS_MEMORY_USAGE     => \$info['mem_size'],
            Cache::STATS_MEMORY_AVAILABLE => \$sma['avail_mem'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcuCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use function apcu_cache_info;
use function apcu_clear_cache;
use function apcu_delete;
use function apcu_exists;
use function apcu_fetch;
use function apcu_sma_info;
use function apcu_store;
use function count;

/**
 * APCu cache provider.
 *
 * @link   www.doctrine-project.org
 */
class ApcuCache extends CacheProvider
{
    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return apcu_fetch(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return apcu_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return apcu_store(\$id, \$data, \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        // apcu_delete returns false if the id does not exist
        return apcu_delete(\$id) || ! apcu_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        \$result = apcu_delete(\$keys);

        return \$result !== false && count(\$result) !== count(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return apcu_clear_cache();
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        return apcu_fetch(\$keys) ?: [];
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        \$result = apcu_store(\$keysAndValues, null, \$lifetime);

        return empty(\$result);
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$info = apcu_cache_info(true);
        \$sma  = apcu_sma_info();

        return [
            Cache::STATS_HITS             => \$info['num_hits'],
            Cache::STATS_MISSES           => \$info['num_misses'],
            Cache::STATS_UPTIME           => \$info['start_time'],
            Cache::STATS_MEMORY_USAGE     => \$info['mem_size'],
            Cache::STATS_MEMORY_AVAILABLE => \$sma['avail_mem'],
        ];
    }
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcuCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcuCache.php");
    }
}
