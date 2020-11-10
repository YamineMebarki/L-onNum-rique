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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheFactory.php */
class __TwigTemplate_0e6c1e427fe38f09ff4b7f41081bda931123e3a593a5beed89a8f3058f5ab10b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheFactory.php"));

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

use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Persisters\\Collection\\CollectionPersister;
use Doctrine\\ORM\\Persisters\\Entity\\EntityPersister;

/**
 * Contract for building second level cache regions components.
 * 
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface CacheFactory
{
    /**
     * Build an entity persister for the given entity metadata.
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface            \$em        The entity manager.
     * @param \\Doctrine\\ORM\\Persisters\\Entity\\EntityPersister \$persister The entity persister that will be cached.
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata             \$metadata  The entity metadata.
     *
     * @return \\Doctrine\\ORM\\Cache\\Persister\\Entity\\CachedEntityPersister
     */
    public function buildCachedEntityPersister(EntityManagerInterface \$em, EntityPersister \$persister, ClassMetadata \$metadata);

    /**
     * Build a collection persister for the given relation mapping.
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface                    \$em        The entity manager.
     * @param \\Doctrine\\ORM\\Persisters\\Collection\\CollectionPersister \$persister The collection persister that will be cached.
     * @param array                                                   \$mapping   The association mapping.
     *
     * @return \\Doctrine\\ORM\\Cache\\Persister\\Collection\\CachedCollectionPersister
     */
    public function buildCachedCollectionPersister(EntityManagerInterface \$em, CollectionPersister \$persister, array \$mapping);

    /**
     * Build a query cache based on the given region name
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em         The Entity manager.
     * @param string                               \$regionName The region name.
     *
     * @return \\Doctrine\\ORM\\Cache\\QueryCache The built query cache.
     */
    public function buildQueryCache(EntityManagerInterface \$em, \$regionName = null);

    /**
     * Build an entity hydrator
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em       The Entity manager.
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata  \$metadata The entity metadata.
     *
     * @return \\Doctrine\\ORM\\Cache\\EntityHydrator The built entity hydrator.
     */
    public function buildEntityHydrator(EntityManagerInterface \$em, ClassMetadata \$metadata);

    /**
     * Build a collection hydrator
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em      The Entity manager.
     * @param array                                \$mapping The association mapping.
     *
     * @return \\Doctrine\\ORM\\Cache\\CollectionHydrator The built collection hydrator.
     */
    public function buildCollectionHydrator(EntityManagerInterface \$em, array \$mapping);

    /**
     * Build a cache region
     *
     * @param array \$cache The cache configuration.
     *
     * @return \\Doctrine\\ORM\\Cache\\Region The cache region.
     */
    public function getRegion(array \$cache);

    /**
     * Build timestamp cache region
     *
     * @return \\Doctrine\\ORM\\Cache\\TimestampRegion The timestamp region.
     */
    public function getTimestampRegion();

    /**
     * Build \\Doctrine\\ORM\\Cache
     *
     * @param EntityManagerInterface \$entityManager
     *
     * @return \\Doctrine\\ORM\\Cache
     */
    public function createCache(EntityManagerInterface \$entityManager);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheFactory.php";
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

use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Persisters\\Collection\\CollectionPersister;
use Doctrine\\ORM\\Persisters\\Entity\\EntityPersister;

/**
 * Contract for building second level cache regions components.
 * 
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface CacheFactory
{
    /**
     * Build an entity persister for the given entity metadata.
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface            \$em        The entity manager.
     * @param \\Doctrine\\ORM\\Persisters\\Entity\\EntityPersister \$persister The entity persister that will be cached.
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata             \$metadata  The entity metadata.
     *
     * @return \\Doctrine\\ORM\\Cache\\Persister\\Entity\\CachedEntityPersister
     */
    public function buildCachedEntityPersister(EntityManagerInterface \$em, EntityPersister \$persister, ClassMetadata \$metadata);

    /**
     * Build a collection persister for the given relation mapping.
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface                    \$em        The entity manager.
     * @param \\Doctrine\\ORM\\Persisters\\Collection\\CollectionPersister \$persister The collection persister that will be cached.
     * @param array                                                   \$mapping   The association mapping.
     *
     * @return \\Doctrine\\ORM\\Cache\\Persister\\Collection\\CachedCollectionPersister
     */
    public function buildCachedCollectionPersister(EntityManagerInterface \$em, CollectionPersister \$persister, array \$mapping);

    /**
     * Build a query cache based on the given region name
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em         The Entity manager.
     * @param string                               \$regionName The region name.
     *
     * @return \\Doctrine\\ORM\\Cache\\QueryCache The built query cache.
     */
    public function buildQueryCache(EntityManagerInterface \$em, \$regionName = null);

    /**
     * Build an entity hydrator
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em       The Entity manager.
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata  \$metadata The entity metadata.
     *
     * @return \\Doctrine\\ORM\\Cache\\EntityHydrator The built entity hydrator.
     */
    public function buildEntityHydrator(EntityManagerInterface \$em, ClassMetadata \$metadata);

    /**
     * Build a collection hydrator
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em      The Entity manager.
     * @param array                                \$mapping The association mapping.
     *
     * @return \\Doctrine\\ORM\\Cache\\CollectionHydrator The built collection hydrator.
     */
    public function buildCollectionHydrator(EntityManagerInterface \$em, array \$mapping);

    /**
     * Build a cache region
     *
     * @param array \$cache The cache configuration.
     *
     * @return \\Doctrine\\ORM\\Cache\\Region The cache region.
     */
    public function getRegion(array \$cache);

    /**
     * Build timestamp cache region
     *
     * @return \\Doctrine\\ORM\\Cache\\TimestampRegion The timestamp region.
     */
    public function getTimestampRegion();

    /**
     * Build \\Doctrine\\ORM\\Cache
     *
     * @param EntityManagerInterface \$entityManager
     *
     * @return \\Doctrine\\ORM\\Cache
     */
    public function createCache(EntityManagerInterface \$entityManager);
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheFactory.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheFactory.php");
    }
}
