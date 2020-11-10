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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultEntityHydrator.php */
class __TwigTemplate_aa72bff6aa6d8ee2d1c29704492e17b8fef7c51a5ae69e0f054718bc7a789b72 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultEntityHydrator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultEntityHydrator.php"));

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

use Doctrine\\Common\\Util\\ClassUtils;

use Doctrine\\ORM\\Query;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Utility\\IdentifierFlattener;

/**
 * Default hydrator cache for entities
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class DefaultEntityHydrator implements EntityHydrator
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
     * The IdentifierFlattener used for manipulating identifiers
     *
     * @var \\Doctrine\\ORM\\Utility\\IdentifierFlattener
     */
    private \$identifierFlattener;

    /**
     * @var array
     */
    private static \$hints = [Query::HINT_CACHE_ENABLED => true];

    /**
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em The entity manager.
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->em   = \$em;
        \$this->uow  = \$em->getUnitOfWork();
        \$this->identifierFlattener = new IdentifierFlattener(\$em->getUnitOfWork(), \$em->getMetadataFactory());
    }

    /**
     * {@inheritdoc}
     */
    public function buildCacheEntry(ClassMetadata \$metadata, EntityCacheKey \$key, \$entity)
    {
        \$data = \$this->uow->getOriginalEntityData(\$entity);
        \$data = array_merge(\$data, \$metadata->getIdentifierValues(\$entity)); // why update has no identifier values ?

        if (\$metadata->isVersioned) {
            \$data[\$metadata->versionField] = \$metadata->getFieldValue(\$entity, \$metadata->versionField);
        }

        foreach (\$metadata->associationMappings as \$name => \$assoc) {
            if ( ! isset(\$data[\$name])) {
                continue;
            }

            if ( ! (\$assoc['type'] & ClassMetadata::TO_ONE)) {
                unset(\$data[\$name]);

                continue;
            }

            if ( ! isset(\$assoc['cache'])) {
                \$targetClassMetadata = \$this->em->getClassMetadata(\$assoc['targetEntity']);
                \$owningAssociation   = ( ! \$assoc['isOwningSide'])
                    ? \$targetClassMetadata->associationMappings[\$assoc['mappedBy']]
                    : \$assoc;
                \$associationIds      = \$this->identifierFlattener->flattenIdentifier(
                    \$targetClassMetadata,
                    \$targetClassMetadata->getIdentifierValues(\$data[\$name])
                );

                unset(\$data[\$name]);

                foreach (\$associationIds as \$fieldName => \$fieldValue) {
                    if (isset(\$targetClassMetadata->fieldMappings[\$fieldName])) {
                        \$fieldMapping = \$targetClassMetadata->fieldMappings[\$fieldName];

                        \$data[\$owningAssociation['targetToSourceKeyColumns'][\$fieldMapping['columnName']]] = \$fieldValue;

                        continue;
                    }

                    \$targetAssoc = \$targetClassMetadata->associationMappings[\$fieldName];

                    foreach(\$assoc['targetToSourceKeyColumns'] as \$referencedColumn => \$localColumn) {
                        if (isset(\$targetAssoc['sourceToTargetKeyColumns'][\$referencedColumn])) {
                            \$data[\$localColumn] = \$fieldValue;
                        }
                    }
                }

                continue;
            }

            if ( ! isset(\$assoc['id'])) {
                \$targetClass = ClassUtils::getClass(\$data[\$name]);
                \$targetId    = \$this->uow->getEntityIdentifier(\$data[\$name]);
                \$data[\$name] = new AssociationCacheEntry(\$targetClass, \$targetId);

                continue;
            }

            // handle association identifier
            \$targetId = is_object(\$data[\$name]) && \$this->uow->isInIdentityMap(\$data[\$name])
                ? \$this->uow->getEntityIdentifier(\$data[\$name])
                : \$data[\$name];

            // @Todo - fix it !
            // handle UnitOfWork#createEntity hash generation
            if ( ! is_array(\$targetId)) {
                \$data[reset(\$assoc['joinColumnFieldNames'])] = \$targetId;

                \$targetEntity = \$this->em->getClassMetadata(\$assoc['targetEntity']);
                \$targetId     = [\$targetEntity->identifier[0] => \$targetId];
            }

            \$data[\$name] = new AssociationCacheEntry(\$assoc['targetEntity'], \$targetId);
        }

        return new EntityCacheEntry(\$metadata->name, \$data);
    }

    /**
     * {@inheritdoc}
     */
    public function loadCacheEntry(ClassMetadata \$metadata, EntityCacheKey \$key, EntityCacheEntry \$entry, \$entity = null)
    {
        \$data  = \$entry->data;
        \$hints = self::\$hints;

        if (\$entity !== null) {
            \$hints[Query::HINT_REFRESH]         = true;
            \$hints[Query::HINT_REFRESH_ENTITY]  = \$entity;
        }

        foreach (\$metadata->associationMappings as \$name => \$assoc) {
            if ( ! isset(\$assoc['cache']) ||  ! isset(\$data[\$name])) {
                continue;
            }

            \$assocClass     = \$data[\$name]->class;
            \$assocId        = \$data[\$name]->identifier;
            \$isEagerLoad    = (\$assoc['fetch'] === ClassMetadata::FETCH_EAGER || (\$assoc['type'] === ClassMetadata::ONE_TO_ONE && ! \$assoc['isOwningSide']));

            if ( ! \$isEagerLoad) {
                \$data[\$name] = \$this->em->getReference(\$assocClass, \$assocId);

                continue;
            }

            \$assocMetadata  = \$this->em->getClassMetadata(\$assoc['targetEntity']);
            \$assocKey       = new EntityCacheKey(\$assocMetadata->rootEntityName, \$assocId);
            \$assocPersister = \$this->uow->getEntityPersister(\$assoc['targetEntity']);
            \$assocRegion    = \$assocPersister->getCacheRegion();
            \$assocEntry     = \$assocRegion->get(\$assocKey);

            if (\$assocEntry === null) {
                return null;
            }

            \$data[\$name] = \$this->uow->createEntity(\$assocEntry->class, \$assocEntry->resolveAssociationEntries(\$this->em), \$hints);
        }

        if (\$entity !== null) {
            \$this->uow->registerManaged(\$entity, \$key->identifier, \$data);
        }

        \$result = \$this->uow->createEntity(\$entry->class, \$data, \$hints);

        \$this->uow->hydrationComplete();

        return \$result;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultEntityHydrator.php";
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

use Doctrine\\Common\\Util\\ClassUtils;

use Doctrine\\ORM\\Query;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Utility\\IdentifierFlattener;

/**
 * Default hydrator cache for entities
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class DefaultEntityHydrator implements EntityHydrator
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
     * The IdentifierFlattener used for manipulating identifiers
     *
     * @var \\Doctrine\\ORM\\Utility\\IdentifierFlattener
     */
    private \$identifierFlattener;

    /**
     * @var array
     */
    private static \$hints = [Query::HINT_CACHE_ENABLED => true];

    /**
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em The entity manager.
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->em   = \$em;
        \$this->uow  = \$em->getUnitOfWork();
        \$this->identifierFlattener = new IdentifierFlattener(\$em->getUnitOfWork(), \$em->getMetadataFactory());
    }

    /**
     * {@inheritdoc}
     */
    public function buildCacheEntry(ClassMetadata \$metadata, EntityCacheKey \$key, \$entity)
    {
        \$data = \$this->uow->getOriginalEntityData(\$entity);
        \$data = array_merge(\$data, \$metadata->getIdentifierValues(\$entity)); // why update has no identifier values ?

        if (\$metadata->isVersioned) {
            \$data[\$metadata->versionField] = \$metadata->getFieldValue(\$entity, \$metadata->versionField);
        }

        foreach (\$metadata->associationMappings as \$name => \$assoc) {
            if ( ! isset(\$data[\$name])) {
                continue;
            }

            if ( ! (\$assoc['type'] & ClassMetadata::TO_ONE)) {
                unset(\$data[\$name]);

                continue;
            }

            if ( ! isset(\$assoc['cache'])) {
                \$targetClassMetadata = \$this->em->getClassMetadata(\$assoc['targetEntity']);
                \$owningAssociation   = ( ! \$assoc['isOwningSide'])
                    ? \$targetClassMetadata->associationMappings[\$assoc['mappedBy']]
                    : \$assoc;
                \$associationIds      = \$this->identifierFlattener->flattenIdentifier(
                    \$targetClassMetadata,
                    \$targetClassMetadata->getIdentifierValues(\$data[\$name])
                );

                unset(\$data[\$name]);

                foreach (\$associationIds as \$fieldName => \$fieldValue) {
                    if (isset(\$targetClassMetadata->fieldMappings[\$fieldName])) {
                        \$fieldMapping = \$targetClassMetadata->fieldMappings[\$fieldName];

                        \$data[\$owningAssociation['targetToSourceKeyColumns'][\$fieldMapping['columnName']]] = \$fieldValue;

                        continue;
                    }

                    \$targetAssoc = \$targetClassMetadata->associationMappings[\$fieldName];

                    foreach(\$assoc['targetToSourceKeyColumns'] as \$referencedColumn => \$localColumn) {
                        if (isset(\$targetAssoc['sourceToTargetKeyColumns'][\$referencedColumn])) {
                            \$data[\$localColumn] = \$fieldValue;
                        }
                    }
                }

                continue;
            }

            if ( ! isset(\$assoc['id'])) {
                \$targetClass = ClassUtils::getClass(\$data[\$name]);
                \$targetId    = \$this->uow->getEntityIdentifier(\$data[\$name]);
                \$data[\$name] = new AssociationCacheEntry(\$targetClass, \$targetId);

                continue;
            }

            // handle association identifier
            \$targetId = is_object(\$data[\$name]) && \$this->uow->isInIdentityMap(\$data[\$name])
                ? \$this->uow->getEntityIdentifier(\$data[\$name])
                : \$data[\$name];

            // @Todo - fix it !
            // handle UnitOfWork#createEntity hash generation
            if ( ! is_array(\$targetId)) {
                \$data[reset(\$assoc['joinColumnFieldNames'])] = \$targetId;

                \$targetEntity = \$this->em->getClassMetadata(\$assoc['targetEntity']);
                \$targetId     = [\$targetEntity->identifier[0] => \$targetId];
            }

            \$data[\$name] = new AssociationCacheEntry(\$assoc['targetEntity'], \$targetId);
        }

        return new EntityCacheEntry(\$metadata->name, \$data);
    }

    /**
     * {@inheritdoc}
     */
    public function loadCacheEntry(ClassMetadata \$metadata, EntityCacheKey \$key, EntityCacheEntry \$entry, \$entity = null)
    {
        \$data  = \$entry->data;
        \$hints = self::\$hints;

        if (\$entity !== null) {
            \$hints[Query::HINT_REFRESH]         = true;
            \$hints[Query::HINT_REFRESH_ENTITY]  = \$entity;
        }

        foreach (\$metadata->associationMappings as \$name => \$assoc) {
            if ( ! isset(\$assoc['cache']) ||  ! isset(\$data[\$name])) {
                continue;
            }

            \$assocClass     = \$data[\$name]->class;
            \$assocId        = \$data[\$name]->identifier;
            \$isEagerLoad    = (\$assoc['fetch'] === ClassMetadata::FETCH_EAGER || (\$assoc['type'] === ClassMetadata::ONE_TO_ONE && ! \$assoc['isOwningSide']));

            if ( ! \$isEagerLoad) {
                \$data[\$name] = \$this->em->getReference(\$assocClass, \$assocId);

                continue;
            }

            \$assocMetadata  = \$this->em->getClassMetadata(\$assoc['targetEntity']);
            \$assocKey       = new EntityCacheKey(\$assocMetadata->rootEntityName, \$assocId);
            \$assocPersister = \$this->uow->getEntityPersister(\$assoc['targetEntity']);
            \$assocRegion    = \$assocPersister->getCacheRegion();
            \$assocEntry     = \$assocRegion->get(\$assocKey);

            if (\$assocEntry === null) {
                return null;
            }

            \$data[\$name] = \$this->uow->createEntity(\$assocEntry->class, \$assocEntry->resolveAssociationEntries(\$this->em), \$hints);
        }

        if (\$entity !== null) {
            \$this->uow->registerManaged(\$entity, \$key->identifier, \$data);
        }

        \$result = \$this->uow->createEntity(\$entry->class, \$data, \$hints);

        \$this->uow->hydrationComplete();

        return \$result;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultEntityHydrator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultEntityHydrator.php");
    }
}
