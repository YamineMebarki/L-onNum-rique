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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache.php */
class __TwigTemplate_4600f95f33ed47eec9c0668c49680118d80b8c68e226c54b2ae4e5410f351be7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache.php"));

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

namespace Doctrine\\ORM;

/**
 * Provides an API for querying/managing the second level cache regions.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface Cache
{
    const DEFAULT_QUERY_REGION_NAME = 'query_cache_region';

    const DEFAULT_TIMESTAMP_REGION_NAME = 'timestamp_cache_region';

    /**
     * May read items from the cache, but will not add items.
     */
    const MODE_GET = 1;

    /**
     * Will never read items from the cache,
     * but will add items to the cache as it reads them from the database.
     */
    const MODE_PUT = 2;

    /**
     * May read items from the cache, and add items to the cache.
     */
    const MODE_NORMAL = 3;

    /**
     * The query will never read items from the cache,
     * but will refresh items to the cache as it reads them from the database.
     */
    const MODE_REFRESH = 4;

    /**
     * @param string \$className The entity class.
     *
     * @return \\Doctrine\\ORM\\Cache\\Region|null
     */
    public function getEntityCacheRegion(\$className);

    /**
     * @param string \$className   The entity class.
     * @param string \$association The field name that represents the association.
     *
     * @return \\Doctrine\\ORM\\Cache\\Region|null
     */
    public function getCollectionCacheRegion(\$className, \$association);

    /**
     * Determine whether the cache contains data for the given entity \"instance\".
     *
     * @param string \$className  The entity class.
     * @param mixed  \$identifier The entity identifier
     *
     * @return boolean true if the underlying cache contains corresponding data; false otherwise.
     */
    public function containsEntity(\$className, \$identifier);

    /**
     * Evicts the entity data for a particular entity \"instance\".
     *
     * @param string \$className  The entity class.
     * @param mixed  \$identifier The entity identifier.
     *
     * @return void
     */
    public function evictEntity(\$className, \$identifier);

    /**
     * Evicts all entity data from the given region.
     *
     * @param string \$className The entity metadata.
     *
     * @return void
     */
    public function evictEntityRegion(\$className);

    /**
     * Evict data from all entity regions.
     *
     * @return void
     */
    public function evictEntityRegions();

    /**
     * Determine whether the cache contains data for the given collection.
     *
     * @param string \$className       The entity class.
     * @param string \$association     The field name that represents the association.
     * @param mixed  \$ownerIdentifier The identifier of the owning entity.
     *
     * @return boolean true if the underlying cache contains corresponding data; false otherwise.
     */
    public function containsCollection(\$className, \$association, \$ownerIdentifier);

    /**
     * Evicts the cache data for the given identified collection instance.
     *
     * @param string \$className       The entity class.
     * @param string \$association     The field name that represents the association.
     * @param mixed  \$ownerIdentifier The identifier of the owning entity.
     *
     * @return void
     */
    public function evictCollection(\$className, \$association, \$ownerIdentifier);

    /**
     * Evicts all entity data from the given region.
     *
     * @param string \$className   The entity class.
     * @param string \$association The field name that represents the association.
     *
     * @return void
     */
    public function evictCollectionRegion(\$className, \$association);

    /**
     * Evict data from all collection regions.
     *
     * @return void
     */
    public function evictCollectionRegions();

    /**
     * Determine whether the cache contains data for the given query.
     *
     * @param string \$regionName The cache name given to the query.
     *
     * @return boolean true if the underlying cache contains corresponding data; false otherwise.
     */
    public function containsQuery(\$regionName);

    /**
     * Evicts all cached query results under the given name, or default query cache if the region name is NULL.
     *
     * @param string|null \$regionName The cache name associated to the queries being cached.
     */
    public function evictQueryRegion(\$regionName = null);

    /**
     * Evict data from all query regions.
     *
     * @return void
     */
    public function evictQueryRegions();

    /**
     * Get query cache by region name or create a new one if none exist.
     *
     * @param string|null \$regionName Query cache region name, or default query cache if the region name is NULL.
     *
     * @return \\Doctrine\\ORM\\Cache\\QueryCache The Query Cache associated with the region name.
     */
    public function getQueryCache(\$regionName = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache.php";
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

namespace Doctrine\\ORM;

/**
 * Provides an API for querying/managing the second level cache regions.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface Cache
{
    const DEFAULT_QUERY_REGION_NAME = 'query_cache_region';

    const DEFAULT_TIMESTAMP_REGION_NAME = 'timestamp_cache_region';

    /**
     * May read items from the cache, but will not add items.
     */
    const MODE_GET = 1;

    /**
     * Will never read items from the cache,
     * but will add items to the cache as it reads them from the database.
     */
    const MODE_PUT = 2;

    /**
     * May read items from the cache, and add items to the cache.
     */
    const MODE_NORMAL = 3;

    /**
     * The query will never read items from the cache,
     * but will refresh items to the cache as it reads them from the database.
     */
    const MODE_REFRESH = 4;

    /**
     * @param string \$className The entity class.
     *
     * @return \\Doctrine\\ORM\\Cache\\Region|null
     */
    public function getEntityCacheRegion(\$className);

    /**
     * @param string \$className   The entity class.
     * @param string \$association The field name that represents the association.
     *
     * @return \\Doctrine\\ORM\\Cache\\Region|null
     */
    public function getCollectionCacheRegion(\$className, \$association);

    /**
     * Determine whether the cache contains data for the given entity \"instance\".
     *
     * @param string \$className  The entity class.
     * @param mixed  \$identifier The entity identifier
     *
     * @return boolean true if the underlying cache contains corresponding data; false otherwise.
     */
    public function containsEntity(\$className, \$identifier);

    /**
     * Evicts the entity data for a particular entity \"instance\".
     *
     * @param string \$className  The entity class.
     * @param mixed  \$identifier The entity identifier.
     *
     * @return void
     */
    public function evictEntity(\$className, \$identifier);

    /**
     * Evicts all entity data from the given region.
     *
     * @param string \$className The entity metadata.
     *
     * @return void
     */
    public function evictEntityRegion(\$className);

    /**
     * Evict data from all entity regions.
     *
     * @return void
     */
    public function evictEntityRegions();

    /**
     * Determine whether the cache contains data for the given collection.
     *
     * @param string \$className       The entity class.
     * @param string \$association     The field name that represents the association.
     * @param mixed  \$ownerIdentifier The identifier of the owning entity.
     *
     * @return boolean true if the underlying cache contains corresponding data; false otherwise.
     */
    public function containsCollection(\$className, \$association, \$ownerIdentifier);

    /**
     * Evicts the cache data for the given identified collection instance.
     *
     * @param string \$className       The entity class.
     * @param string \$association     The field name that represents the association.
     * @param mixed  \$ownerIdentifier The identifier of the owning entity.
     *
     * @return void
     */
    public function evictCollection(\$className, \$association, \$ownerIdentifier);

    /**
     * Evicts all entity data from the given region.
     *
     * @param string \$className   The entity class.
     * @param string \$association The field name that represents the association.
     *
     * @return void
     */
    public function evictCollectionRegion(\$className, \$association);

    /**
     * Evict data from all collection regions.
     *
     * @return void
     */
    public function evictCollectionRegions();

    /**
     * Determine whether the cache contains data for the given query.
     *
     * @param string \$regionName The cache name given to the query.
     *
     * @return boolean true if the underlying cache contains corresponding data; false otherwise.
     */
    public function containsQuery(\$regionName);

    /**
     * Evicts all cached query results under the given name, or default query cache if the region name is NULL.
     *
     * @param string|null \$regionName The cache name associated to the queries being cached.
     */
    public function evictQueryRegion(\$regionName = null);

    /**
     * Evict data from all query regions.
     *
     * @return void
     */
    public function evictQueryRegions();

    /**
     * Get query cache by region name or create a new one if none exist.
     *
     * @param string|null \$regionName Query cache region name, or default query cache if the region name is NULL.
     *
     * @return \\Doctrine\\ORM\\Cache\\QueryCache The Query Cache associated with the region name.
     */
    public function getQueryCache(\$regionName = null);
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache.php");
    }
}
