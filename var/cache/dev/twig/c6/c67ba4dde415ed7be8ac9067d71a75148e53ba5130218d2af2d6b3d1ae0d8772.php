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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/XcacheCache.php */
class __TwigTemplate_8f643d9900a9cf8fae84ca7d57413f27e0ccd904cd3dc3bcaa238eed84471433 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/XcacheCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/XcacheCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use const XC_TYPE_VAR;
use function ini_get;
use function serialize;
use function unserialize;
use function xcache_clear_cache;
use function xcache_get;
use function xcache_info;
use function xcache_isset;
use function xcache_set;
use function xcache_unset;

/**
 * Xcache cache driver.
 *
 * @link   www.doctrine-project.org
 *
 * @deprecated
 */
class XcacheCache extends CacheProvider
{
    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->doContains(\$id) ? unserialize(xcache_get(\$id)) : false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return xcache_isset(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return xcache_set(\$id, serialize(\$data), (int) \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return xcache_unset(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        \$this->checkAuthorization();

        xcache_clear_cache(XC_TYPE_VAR);

        return true;
    }

    /**
     * Checks that xcache.admin.enable_auth is Off.
     *
     * @return void
     *
     * @throws \\BadMethodCallException When xcache.admin.enable_auth is On.
     */
    protected function checkAuthorization()
    {
        if (ini_get('xcache.admin.enable_auth')) {
            throw new \\BadMethodCallException(
                'To use all features of \\Doctrine\\Common\\Cache\\XcacheCache, '
                . 'you must set \"xcache.admin.enable_auth\" to \"Off\" in your php.ini.'
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$this->checkAuthorization();

        \$info = xcache_info(XC_TYPE_VAR, 0);
        return [
            Cache::STATS_HITS   => \$info['hits'],
            Cache::STATS_MISSES => \$info['misses'],
            Cache::STATS_UPTIME => null,
            Cache::STATS_MEMORY_USAGE      => \$info['size'],
            Cache::STATS_MEMORY_AVAILABLE  => \$info['avail'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/XcacheCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use const XC_TYPE_VAR;
use function ini_get;
use function serialize;
use function unserialize;
use function xcache_clear_cache;
use function xcache_get;
use function xcache_info;
use function xcache_isset;
use function xcache_set;
use function xcache_unset;

/**
 * Xcache cache driver.
 *
 * @link   www.doctrine-project.org
 *
 * @deprecated
 */
class XcacheCache extends CacheProvider
{
    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->doContains(\$id) ? unserialize(xcache_get(\$id)) : false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return xcache_isset(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return xcache_set(\$id, serialize(\$data), (int) \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return xcache_unset(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        \$this->checkAuthorization();

        xcache_clear_cache(XC_TYPE_VAR);

        return true;
    }

    /**
     * Checks that xcache.admin.enable_auth is Off.
     *
     * @return void
     *
     * @throws \\BadMethodCallException When xcache.admin.enable_auth is On.
     */
    protected function checkAuthorization()
    {
        if (ini_get('xcache.admin.enable_auth')) {
            throw new \\BadMethodCallException(
                'To use all features of \\Doctrine\\Common\\Cache\\XcacheCache, '
                . 'you must set \"xcache.admin.enable_auth\" to \"Off\" in your php.ini.'
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$this->checkAuthorization();

        \$info = xcache_info(XC_TYPE_VAR, 0);
        return [
            Cache::STATS_HITS   => \$info['hits'],
            Cache::STATS_MISSES => \$info['misses'],
            Cache::STATS_UPTIME => null,
            Cache::STATS_MEMORY_USAGE      => \$info['size'],
            Cache::STATS_MEMORY_AVAILABLE  => \$info['avail'],
        ];
    }
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/XcacheCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/XcacheCache.php");
    }
}
