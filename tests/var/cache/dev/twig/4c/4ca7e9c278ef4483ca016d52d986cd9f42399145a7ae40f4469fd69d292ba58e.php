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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region.php */
class __TwigTemplate_927c4aaadd9b7e536effd89c5949f273ef33c1efeb935e4f0b9b77eac0764e73 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region.php"));

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

namespace Doctrine\\ORM\\Cache;

/**
 * Defines a contract for accessing a particular named region.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface Region extends MultiGetRegion
{
    /**
     * Retrieve the name of this region.
     *
     * @return string The region name
     */
    public function getName();

    /**
     * Determine whether this region contains data for the given key.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey \$key The cache key
     *
     * @return boolean TRUE if the underlying cache contains corresponding data; FALSE otherwise.
     */
    public function contains(CacheKey \$key);

    /**
     * Get an item from the cache.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey \$key The key of the item to be retrieved.
     *
     * @return \\Doctrine\\ORM\\Cache\\CacheEntry|null The cached entry or NULL
     *
     * @throws \\Doctrine\\ORM\\Cache\\CacheException Indicates a problem accessing the item or region.
     */
    public function get(CacheKey \$key);

    /**
     * Put an item into the cache.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey   \$key   The key under which to cache the item.
     * @param \\Doctrine\\ORM\\Cache\\CacheEntry \$entry The entry to cache.
     * @param \\Doctrine\\ORM\\Cache\\Lock       \$lock  The lock previously obtained.
     *
     * @throws \\Doctrine\\ORM\\Cache\\CacheException Indicates a problem accessing the region.
     */
    public function put(CacheKey \$key, CacheEntry \$entry, Lock \$lock = null);

    /**
     * Remove an item from the cache.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey \$key The key under which to cache the item.
     *
     * @throws \\Doctrine\\ORM\\Cache\\CacheException Indicates a problem accessing the region.
     */
    public function evict(CacheKey \$key);

    /**
     * Remove all contents of this particular cache region.
     *
     * @throws \\Doctrine\\ORM\\Cache\\CacheException Indicates problem accessing the region.
     */
    public function evictAll();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region.php";
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

namespace Doctrine\\ORM\\Cache;

/**
 * Defines a contract for accessing a particular named region.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface Region extends MultiGetRegion
{
    /**
     * Retrieve the name of this region.
     *
     * @return string The region name
     */
    public function getName();

    /**
     * Determine whether this region contains data for the given key.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey \$key The cache key
     *
     * @return boolean TRUE if the underlying cache contains corresponding data; FALSE otherwise.
     */
    public function contains(CacheKey \$key);

    /**
     * Get an item from the cache.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey \$key The key of the item to be retrieved.
     *
     * @return \\Doctrine\\ORM\\Cache\\CacheEntry|null The cached entry or NULL
     *
     * @throws \\Doctrine\\ORM\\Cache\\CacheException Indicates a problem accessing the item or region.
     */
    public function get(CacheKey \$key);

    /**
     * Put an item into the cache.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey   \$key   The key under which to cache the item.
     * @param \\Doctrine\\ORM\\Cache\\CacheEntry \$entry The entry to cache.
     * @param \\Doctrine\\ORM\\Cache\\Lock       \$lock  The lock previously obtained.
     *
     * @throws \\Doctrine\\ORM\\Cache\\CacheException Indicates a problem accessing the region.
     */
    public function put(CacheKey \$key, CacheEntry \$entry, Lock \$lock = null);

    /**
     * Remove an item from the cache.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey \$key The key under which to cache the item.
     *
     * @throws \\Doctrine\\ORM\\Cache\\CacheException Indicates a problem accessing the region.
     */
    public function evict(CacheKey \$key);

    /**
     * Remove all contents of this particular cache region.
     *
     * @throws \\Doctrine\\ORM\\Cache\\CacheException Indicates problem accessing the region.
     */
    public function evictAll();
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region.php");
    }
}
