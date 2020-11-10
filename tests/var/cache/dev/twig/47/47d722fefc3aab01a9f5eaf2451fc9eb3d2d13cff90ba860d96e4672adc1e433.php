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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/CouchbaseCache.php */
class __TwigTemplate_a55e41526c09b47824deac508f61a2c1e8e33f2ffe41c765b63d889f0032b772 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/CouchbaseCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/CouchbaseCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use Couchbase;
use function explode;
use function time;

/**
 * Couchbase cache provider.
 *
 * @link   www.doctrine-project.org
 * @deprecated Couchbase SDK 1.x is now deprecated. Use \\Doctrine\\Common\\Cache\\CouchbaseBucketCache instead.
 * https://developer.couchbase.com/documentation/server/current/sdk/php/compatibility-versions-features.html
 */
class CouchbaseCache extends CacheProvider
{
    /** @var Couchbase|null */
    private \$couchbase;

    /**
     * Sets the Couchbase instance to use.
     *
     * @return void
     */
    public function setCouchbase(Couchbase \$couchbase)
    {
        \$this->couchbase = \$couchbase;
    }

    /**
     * Gets the Couchbase instance used by the cache.
     *
     * @return Couchbase|null
     */
    public function getCouchbase()
    {
        return \$this->couchbase;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->couchbase->get(\$id) ?: false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return \$this->couchbase->get(\$id) !== null;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 30 * 24 * 3600) {
            \$lifeTime = time() + \$lifeTime;
        }
        return \$this->couchbase->set(\$id, \$data, (int) \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return \$this->couchbase->delete(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->couchbase->flush();
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$stats   = \$this->couchbase->getStats();
        \$servers = \$this->couchbase->getServers();
        \$server  = explode(':', \$servers[0]);
        \$key     = \$server[0] . ':11210';
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
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/CouchbaseCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use Couchbase;
use function explode;
use function time;

/**
 * Couchbase cache provider.
 *
 * @link   www.doctrine-project.org
 * @deprecated Couchbase SDK 1.x is now deprecated. Use \\Doctrine\\Common\\Cache\\CouchbaseBucketCache instead.
 * https://developer.couchbase.com/documentation/server/current/sdk/php/compatibility-versions-features.html
 */
class CouchbaseCache extends CacheProvider
{
    /** @var Couchbase|null */
    private \$couchbase;

    /**
     * Sets the Couchbase instance to use.
     *
     * @return void
     */
    public function setCouchbase(Couchbase \$couchbase)
    {
        \$this->couchbase = \$couchbase;
    }

    /**
     * Gets the Couchbase instance used by the cache.
     *
     * @return Couchbase|null
     */
    public function getCouchbase()
    {
        return \$this->couchbase;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->couchbase->get(\$id) ?: false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return \$this->couchbase->get(\$id) !== null;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        if (\$lifeTime > 30 * 24 * 3600) {
            \$lifeTime = time() + \$lifeTime;
        }
        return \$this->couchbase->set(\$id, \$data, (int) \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return \$this->couchbase->delete(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->couchbase->flush();
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$stats   = \$this->couchbase->getStats();
        \$servers = \$this->couchbase->getServers();
        \$server  = explode(':', \$servers[0]);
        \$key     = \$server[0] . ':11210';
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
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/CouchbaseCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CouchbaseCache.php");
    }
}
