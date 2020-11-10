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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/QueryCacheProfile.php */
class __TwigTemplate_362149dc0aa8b7d4e0fadc34f3c2d3d753079acb08fc136e49e219931a12e927 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/QueryCacheProfile.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/QueryCacheProfile.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Cache;

use Doctrine\\Common\\Cache\\Cache;
use function hash;
use function serialize;
use function sha1;

/**
 * Query Cache Profile handles the data relevant for query caching.
 *
 * It is a value object, setter methods return NEW instances.
 */
class QueryCacheProfile
{
    /** @var Cache|null */
    private \$resultCacheDriver;

    /** @var int */
    private \$lifetime = 0;

    /** @var string|null */
    private \$cacheKey;

    /**
     * @param int         \$lifetime
     * @param string|null \$cacheKey
     */
    public function __construct(\$lifetime = 0, \$cacheKey = null, ?Cache \$resultCache = null)
    {
        \$this->lifetime          = \$lifetime;
        \$this->cacheKey          = \$cacheKey;
        \$this->resultCacheDriver = \$resultCache;
    }

    /**
     * @return Cache|null
     */
    public function getResultCacheDriver()
    {
        return \$this->resultCacheDriver;
    }

    /**
     * @return int
     */
    public function getLifetime()
    {
        return \$this->lifetime;
    }

    /**
     * @return string
     *
     * @throws CacheException
     */
    public function getCacheKey()
    {
        if (\$this->cacheKey === null) {
            throw CacheException::noCacheKey();
        }

        return \$this->cacheKey;
    }

    /**
     * Generates the real cache key from query, params, types and connection parameters.
     *
     * @param string         \$query
     * @param mixed[]        \$params
     * @param int[]|string[] \$types
     * @param mixed[]        \$connectionParams
     *
     * @return string[]
     */
    public function generateCacheKeys(\$query, \$params, \$types, array \$connectionParams = [])
    {
        \$realCacheKey = 'query=' . \$query .
            '&params=' . serialize(\$params) .
            '&types=' . serialize(\$types) .
            '&connectionParams=' . hash('sha256', serialize(\$connectionParams));

        // should the key be automatically generated using the inputs or is the cache key set?
        if (\$this->cacheKey === null) {
            \$cacheKey = sha1(\$realCacheKey);
        } else {
            \$cacheKey = \$this->cacheKey;
        }

        return [\$cacheKey, \$realCacheKey];
    }

    /**
     * @return \\Doctrine\\DBAL\\Cache\\QueryCacheProfile
     */
    public function setResultCacheDriver(Cache \$cache)
    {
        return new QueryCacheProfile(\$this->lifetime, \$this->cacheKey, \$cache);
    }

    /**
     * @param string|null \$cacheKey
     *
     * @return \\Doctrine\\DBAL\\Cache\\QueryCacheProfile
     */
    public function setCacheKey(\$cacheKey)
    {
        return new QueryCacheProfile(\$this->lifetime, \$cacheKey, \$this->resultCacheDriver);
    }

    /**
     * @param int \$lifetime
     *
     * @return \\Doctrine\\DBAL\\Cache\\QueryCacheProfile
     */
    public function setLifetime(\$lifetime)
    {
        return new QueryCacheProfile(\$lifetime, \$this->cacheKey, \$this->resultCacheDriver);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/QueryCacheProfile.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Cache;

use Doctrine\\Common\\Cache\\Cache;
use function hash;
use function serialize;
use function sha1;

/**
 * Query Cache Profile handles the data relevant for query caching.
 *
 * It is a value object, setter methods return NEW instances.
 */
class QueryCacheProfile
{
    /** @var Cache|null */
    private \$resultCacheDriver;

    /** @var int */
    private \$lifetime = 0;

    /** @var string|null */
    private \$cacheKey;

    /**
     * @param int         \$lifetime
     * @param string|null \$cacheKey
     */
    public function __construct(\$lifetime = 0, \$cacheKey = null, ?Cache \$resultCache = null)
    {
        \$this->lifetime          = \$lifetime;
        \$this->cacheKey          = \$cacheKey;
        \$this->resultCacheDriver = \$resultCache;
    }

    /**
     * @return Cache|null
     */
    public function getResultCacheDriver()
    {
        return \$this->resultCacheDriver;
    }

    /**
     * @return int
     */
    public function getLifetime()
    {
        return \$this->lifetime;
    }

    /**
     * @return string
     *
     * @throws CacheException
     */
    public function getCacheKey()
    {
        if (\$this->cacheKey === null) {
            throw CacheException::noCacheKey();
        }

        return \$this->cacheKey;
    }

    /**
     * Generates the real cache key from query, params, types and connection parameters.
     *
     * @param string         \$query
     * @param mixed[]        \$params
     * @param int[]|string[] \$types
     * @param mixed[]        \$connectionParams
     *
     * @return string[]
     */
    public function generateCacheKeys(\$query, \$params, \$types, array \$connectionParams = [])
    {
        \$realCacheKey = 'query=' . \$query .
            '&params=' . serialize(\$params) .
            '&types=' . serialize(\$types) .
            '&connectionParams=' . hash('sha256', serialize(\$connectionParams));

        // should the key be automatically generated using the inputs or is the cache key set?
        if (\$this->cacheKey === null) {
            \$cacheKey = sha1(\$realCacheKey);
        } else {
            \$cacheKey = \$this->cacheKey;
        }

        return [\$cacheKey, \$realCacheKey];
    }

    /**
     * @return \\Doctrine\\DBAL\\Cache\\QueryCacheProfile
     */
    public function setResultCacheDriver(Cache \$cache)
    {
        return new QueryCacheProfile(\$this->lifetime, \$this->cacheKey, \$cache);
    }

    /**
     * @param string|null \$cacheKey
     *
     * @return \\Doctrine\\DBAL\\Cache\\QueryCacheProfile
     */
    public function setCacheKey(\$cacheKey)
    {
        return new QueryCacheProfile(\$this->lifetime, \$cacheKey, \$this->resultCacheDriver);
    }

    /**
     * @param int \$lifetime
     *
     * @return \\Doctrine\\DBAL\\Cache\\QueryCacheProfile
     */
    public function setLifetime(\$lifetime)
    {
        return new QueryCacheProfile(\$lifetime, \$this->cacheKey, \$this->resultCacheDriver);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/QueryCacheProfile.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/QueryCacheProfile.php");
    }
}
