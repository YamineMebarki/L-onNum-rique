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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php */
class __TwigTemplate_b8c53d9528a2f224463d3dcb6073fc837dd5c9ed2492d51d115b0a184dda9533 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php"));

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

use Doctrine\\ORM\\Query;
use Doctrine\\ORM\\PersistentCollection;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;

/**
 * Default hydrator cache for collections
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class DefaultCollectionHydrator implements CollectionHydrator
{
    /**
     * @var \\Doctrine\\ORM\\EntityManagerInterface
     */
    private \$em;

    /**
     * @var \\Doctrine\\ORM\\UnitOfWork
     */
    private \$uow;

    /**
     * @var array
     */
    private static \$hints = [Query::HINT_CACHE_ENABLED => true];

    /**
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em The entity manager.
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->em  = \$em;
        \$this->uow = \$em->getUnitOfWork();
    }

    /**
     * {@inheritdoc}
     */
    public function buildCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, \$collection)
    {
        \$data = [];

        foreach (\$collection as \$index => \$entity) {
            \$data[\$index] = new EntityCacheKey(\$metadata->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        }

        return new CollectionCacheEntry(\$data);
    }

    /**
     * {@inheritdoc}
     */
    public function loadCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, CollectionCacheEntry \$entry, PersistentCollection \$collection)
    {
        \$assoc           = \$metadata->associationMappings[\$key->association];
        /* @var \$targetPersister \\Doctrine\\ORM\\Cache\\Persister\\CachedPersister */
        \$targetPersister = \$this->uow->getEntityPersister(\$assoc['targetEntity']);
        \$targetRegion    = \$targetPersister->getCacheRegion();
        \$list            = [];

        \$entityEntries = \$targetRegion->getMultiple(\$entry);

        if (\$entityEntries === null) {
            return null;
        }

        /* @var \$entityEntries \\Doctrine\\ORM\\Cache\\EntityCacheEntry[] */
        foreach (\$entityEntries as \$index => \$entityEntry) {
            \$list[\$index] = \$this->uow->createEntity(\$entityEntry->class, \$entityEntry->resolveAssociationEntries(\$this->em), self::\$hints);
        }

        array_walk(\$list, function(\$entity, \$index) use (\$collection) {
            \$collection->hydrateSet(\$index, \$entity);
        });

        \$this->uow->hydrationComplete();

        return \$list;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php";
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

use Doctrine\\ORM\\Query;
use Doctrine\\ORM\\PersistentCollection;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;

/**
 * Default hydrator cache for collections
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class DefaultCollectionHydrator implements CollectionHydrator
{
    /**
     * @var \\Doctrine\\ORM\\EntityManagerInterface
     */
    private \$em;

    /**
     * @var \\Doctrine\\ORM\\UnitOfWork
     */
    private \$uow;

    /**
     * @var array
     */
    private static \$hints = [Query::HINT_CACHE_ENABLED => true];

    /**
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em The entity manager.
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->em  = \$em;
        \$this->uow = \$em->getUnitOfWork();
    }

    /**
     * {@inheritdoc}
     */
    public function buildCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, \$collection)
    {
        \$data = [];

        foreach (\$collection as \$index => \$entity) {
            \$data[\$index] = new EntityCacheKey(\$metadata->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        }

        return new CollectionCacheEntry(\$data);
    }

    /**
     * {@inheritdoc}
     */
    public function loadCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, CollectionCacheEntry \$entry, PersistentCollection \$collection)
    {
        \$assoc           = \$metadata->associationMappings[\$key->association];
        /* @var \$targetPersister \\Doctrine\\ORM\\Cache\\Persister\\CachedPersister */
        \$targetPersister = \$this->uow->getEntityPersister(\$assoc['targetEntity']);
        \$targetRegion    = \$targetPersister->getCacheRegion();
        \$list            = [];

        \$entityEntries = \$targetRegion->getMultiple(\$entry);

        if (\$entityEntries === null) {
            return null;
        }

        /* @var \$entityEntries \\Doctrine\\ORM\\Cache\\EntityCacheEntry[] */
        foreach (\$entityEntries as \$index => \$entityEntry) {
            \$list[\$index] = \$this->uow->createEntity(\$entityEntry->class, \$entityEntry->resolveAssociationEntries(\$this->em), self::\$hints);
        }

        array_walk(\$list, function(\$entity, \$index) use (\$collection) {
            \$collection->hydrateSet(\$index, \$entity);
        });

        \$this->uow->hydrationComplete();

        return \$list;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php");
    }
}
