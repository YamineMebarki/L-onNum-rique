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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/ReadWriteCachedCollectionPersister.php */
class __TwigTemplate_64379c771459ac2b71ace4cb0af2f2b91c2f429f3b3f9d0e3c5717774d86c638 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/ReadWriteCachedCollectionPersister.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/ReadWriteCachedCollectionPersister.php"));

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

namespace Doctrine\\ORM\\Cache\\Persister\\Collection;

use Doctrine\\ORM\\Persisters\\Collection\\CollectionPersister;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Cache\\CollectionCacheKey;
use Doctrine\\ORM\\Cache\\ConcurrentRegion;
use Doctrine\\ORM\\PersistentCollection;

/**
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @since 2.5
 */
class ReadWriteCachedCollectionPersister extends AbstractCollectionPersister
{
    /**
     * @param \\Doctrine\\ORM\\Persisters\\Collection\\CollectionPersister \$persister   The collection persister that will be cached.
     * @param \\Doctrine\\ORM\\Cache\\ConcurrentRegion                    \$region      The collection region.
     * @param \\Doctrine\\ORM\\EntityManagerInterface                    \$em          The entity manager.
     * @param array                                                   \$association The association mapping.
     */
    public function __construct(CollectionPersister \$persister, ConcurrentRegion \$region, EntityManagerInterface \$em, array \$association)
    {
        parent::__construct(\$persister, \$region, \$em, \$association);
    }

    /**
     * {@inheritdoc}
     */
    public function afterTransactionComplete()
    {
        if (isset(\$this->queuedCache['update'])) {
            foreach (\$this->queuedCache['update'] as \$item) {
                \$this->region->evict(\$item['key']);
            }
        }

        if (isset(\$this->queuedCache['delete'])) {
            foreach (\$this->queuedCache['delete'] as \$item) {
                \$this->region->evict(\$item['key']);
            }
        }

        \$this->queuedCache = [];
    }

    /**
     * {@inheritdoc}
     */
    public function afterTransactionRolledBack()
    {
        if (isset(\$this->queuedCache['update'])) {
            foreach (\$this->queuedCache['update'] as \$item) {
                \$this->region->evict(\$item['key']);
            }
        }

        if (isset(\$this->queuedCache['delete'])) {
            foreach (\$this->queuedCache['delete'] as \$item) {
                \$this->region->evict(\$item['key']);
            }
        }

        \$this->queuedCache = [];
    }

    /**
     * {@inheritdoc}
     */
    public function delete(PersistentCollection \$collection)
    {
        \$ownerId = \$this->uow->getEntityIdentifier(\$collection->getOwner());
        \$key     = new CollectionCacheKey(\$this->sourceEntity->rootEntityName, \$this->association['fieldName'], \$ownerId);
        \$lock    = \$this->region->lock(\$key);

        \$this->persister->delete(\$collection);

        if (\$lock === null) {
            return;
        }

        \$this->queuedCache['delete'][spl_object_hash(\$collection)] = [
            'key'   => \$key,
            'lock'  => \$lock
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function update(PersistentCollection \$collection)
    {
        \$isInitialized = \$collection->isInitialized();
        \$isDirty       = \$collection->isDirty();

        if ( ! \$isInitialized && ! \$isDirty) {
            return;
        }

        \$this->persister->update(\$collection);

        \$ownerId = \$this->uow->getEntityIdentifier(\$collection->getOwner());
        \$key     = new CollectionCacheKey(\$this->sourceEntity->rootEntityName, \$this->association['fieldName'], \$ownerId);
        \$lock    = \$this->region->lock(\$key);

        if (\$lock === null) {
            return;
        }

        \$this->queuedCache['update'][spl_object_hash(\$collection)] = [
            'key'   => \$key,
            'lock'  => \$lock
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/ReadWriteCachedCollectionPersister.php";
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

namespace Doctrine\\ORM\\Cache\\Persister\\Collection;

use Doctrine\\ORM\\Persisters\\Collection\\CollectionPersister;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Cache\\CollectionCacheKey;
use Doctrine\\ORM\\Cache\\ConcurrentRegion;
use Doctrine\\ORM\\PersistentCollection;

/**
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @since 2.5
 */
class ReadWriteCachedCollectionPersister extends AbstractCollectionPersister
{
    /**
     * @param \\Doctrine\\ORM\\Persisters\\Collection\\CollectionPersister \$persister   The collection persister that will be cached.
     * @param \\Doctrine\\ORM\\Cache\\ConcurrentRegion                    \$region      The collection region.
     * @param \\Doctrine\\ORM\\EntityManagerInterface                    \$em          The entity manager.
     * @param array                                                   \$association The association mapping.
     */
    public function __construct(CollectionPersister \$persister, ConcurrentRegion \$region, EntityManagerInterface \$em, array \$association)
    {
        parent::__construct(\$persister, \$region, \$em, \$association);
    }

    /**
     * {@inheritdoc}
     */
    public function afterTransactionComplete()
    {
        if (isset(\$this->queuedCache['update'])) {
            foreach (\$this->queuedCache['update'] as \$item) {
                \$this->region->evict(\$item['key']);
            }
        }

        if (isset(\$this->queuedCache['delete'])) {
            foreach (\$this->queuedCache['delete'] as \$item) {
                \$this->region->evict(\$item['key']);
            }
        }

        \$this->queuedCache = [];
    }

    /**
     * {@inheritdoc}
     */
    public function afterTransactionRolledBack()
    {
        if (isset(\$this->queuedCache['update'])) {
            foreach (\$this->queuedCache['update'] as \$item) {
                \$this->region->evict(\$item['key']);
            }
        }

        if (isset(\$this->queuedCache['delete'])) {
            foreach (\$this->queuedCache['delete'] as \$item) {
                \$this->region->evict(\$item['key']);
            }
        }

        \$this->queuedCache = [];
    }

    /**
     * {@inheritdoc}
     */
    public function delete(PersistentCollection \$collection)
    {
        \$ownerId = \$this->uow->getEntityIdentifier(\$collection->getOwner());
        \$key     = new CollectionCacheKey(\$this->sourceEntity->rootEntityName, \$this->association['fieldName'], \$ownerId);
        \$lock    = \$this->region->lock(\$key);

        \$this->persister->delete(\$collection);

        if (\$lock === null) {
            return;
        }

        \$this->queuedCache['delete'][spl_object_hash(\$collection)] = [
            'key'   => \$key,
            'lock'  => \$lock
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function update(PersistentCollection \$collection)
    {
        \$isInitialized = \$collection->isInitialized();
        \$isDirty       = \$collection->isDirty();

        if ( ! \$isInitialized && ! \$isDirty) {
            return;
        }

        \$this->persister->update(\$collection);

        \$ownerId = \$this->uow->getEntityIdentifier(\$collection->getOwner());
        \$key     = new CollectionCacheKey(\$this->sourceEntity->rootEntityName, \$this->association['fieldName'], \$ownerId);
        \$lock    = \$this->region->lock(\$key);

        if (\$lock === null) {
            return;
        }

        \$this->queuedCache['update'][spl_object_hash(\$collection)] = [
            'key'   => \$key,
            'lock'  => \$lock
        ];
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/ReadWriteCachedCollectionPersister.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/ReadWriteCachedCollectionPersister.php");
    }
}
