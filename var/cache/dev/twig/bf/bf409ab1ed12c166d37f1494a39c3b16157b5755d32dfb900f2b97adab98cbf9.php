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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/ReadWriteCachedEntityPersister.php */
class __TwigTemplate_28724652d49e41ab3c670217fc28ed3a31244c72031cee0d1c7bdffb5e5e2d5e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/ReadWriteCachedEntityPersister.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/ReadWriteCachedEntityPersister.php"));

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

namespace Doctrine\\ORM\\Cache\\Persister\\Entity;

use Doctrine\\ORM\\Persisters\\Entity\\EntityPersister;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Cache\\ConcurrentRegion;
use Doctrine\\ORM\\Cache\\EntityCacheKey;

/**
 * Specific read-write entity persister
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @since 2.5
 */
class ReadWriteCachedEntityPersister extends AbstractEntityPersister
{
    /**
     * @param \\Doctrine\\ORM\\Persisters\\Entity\\EntityPersister \$persister The entity persister to cache.
     * @param \\Doctrine\\ORM\\Cache\\ConcurrentRegion            \$region    The entity cache region.
     * @param \\Doctrine\\ORM\\EntityManagerInterface            \$em        The entity manager.
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata             \$class     The entity metadata.
     */
    public function __construct(EntityPersister \$persister, ConcurrentRegion \$region, EntityManagerInterface \$em, ClassMetadata \$class)
    {
        parent::__construct(\$persister, \$region, \$em, \$class);
    }

    /**
     * {@inheritdoc}
     */
    public function afterTransactionComplete()
    {
        \$isChanged = true;

        if (isset(\$this->queuedCache['update'])) {
            foreach (\$this->queuedCache['update'] as \$item) {
                \$this->region->evict(\$item['key']);

                \$isChanged = true;
            }
        }

        if (isset(\$this->queuedCache['delete'])) {
            foreach (\$this->queuedCache['delete'] as \$item) {
                \$this->region->evict(\$item['key']);

                \$isChanged = true;
            }
        }

        if (\$isChanged) {
            \$this->timestampRegion->update(\$this->timestampKey);
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
    public function delete(\$entity)
    {
        \$key     = new EntityCacheKey(\$this->class->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        \$lock    = \$this->region->lock(\$key);
        \$deleted = \$this->persister->delete(\$entity);

        if (\$deleted) {
            \$this->region->evict(\$key);
        }

        if (\$lock === null) {
            return \$deleted;
        }

        \$this->queuedCache['delete'][] = [
            'lock'   => \$lock,
            'key'    => \$key
        ];

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function update(\$entity)
    {
        \$key  = new EntityCacheKey(\$this->class->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        \$lock = \$this->region->lock(\$key);

        \$this->persister->update(\$entity);

        if (\$lock === null) {
            return;
        }

        \$this->queuedCache['update'][] = [
            'lock'   => \$lock,
            'key'    => \$key
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/ReadWriteCachedEntityPersister.php";
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

namespace Doctrine\\ORM\\Cache\\Persister\\Entity;

use Doctrine\\ORM\\Persisters\\Entity\\EntityPersister;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Cache\\ConcurrentRegion;
use Doctrine\\ORM\\Cache\\EntityCacheKey;

/**
 * Specific read-write entity persister
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @since 2.5
 */
class ReadWriteCachedEntityPersister extends AbstractEntityPersister
{
    /**
     * @param \\Doctrine\\ORM\\Persisters\\Entity\\EntityPersister \$persister The entity persister to cache.
     * @param \\Doctrine\\ORM\\Cache\\ConcurrentRegion            \$region    The entity cache region.
     * @param \\Doctrine\\ORM\\EntityManagerInterface            \$em        The entity manager.
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata             \$class     The entity metadata.
     */
    public function __construct(EntityPersister \$persister, ConcurrentRegion \$region, EntityManagerInterface \$em, ClassMetadata \$class)
    {
        parent::__construct(\$persister, \$region, \$em, \$class);
    }

    /**
     * {@inheritdoc}
     */
    public function afterTransactionComplete()
    {
        \$isChanged = true;

        if (isset(\$this->queuedCache['update'])) {
            foreach (\$this->queuedCache['update'] as \$item) {
                \$this->region->evict(\$item['key']);

                \$isChanged = true;
            }
        }

        if (isset(\$this->queuedCache['delete'])) {
            foreach (\$this->queuedCache['delete'] as \$item) {
                \$this->region->evict(\$item['key']);

                \$isChanged = true;
            }
        }

        if (\$isChanged) {
            \$this->timestampRegion->update(\$this->timestampKey);
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
    public function delete(\$entity)
    {
        \$key     = new EntityCacheKey(\$this->class->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        \$lock    = \$this->region->lock(\$key);
        \$deleted = \$this->persister->delete(\$entity);

        if (\$deleted) {
            \$this->region->evict(\$key);
        }

        if (\$lock === null) {
            return \$deleted;
        }

        \$this->queuedCache['delete'][] = [
            'lock'   => \$lock,
            'key'    => \$key
        ];

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function update(\$entity)
    {
        \$key  = new EntityCacheKey(\$this->class->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        \$lock = \$this->region->lock(\$key);

        \$this->persister->update(\$entity);

        if (\$lock === null) {
            return;
        }

        \$this->queuedCache['update'][] = [
            'lock'   => \$lock,
            'key'    => \$key
        ];
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/ReadWriteCachedEntityPersister.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/ReadWriteCachedEntityPersister.php");
    }
}
