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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ClassMetadataBuilder.php */
class __TwigTemplate_9667b4a46c971b13183724757177e3928b33e1879865a8f44d538d83074a25cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ClassMetadataBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ClassMetadataBuilder.php"));

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

namespace Doctrine\\ORM\\Mapping\\Builder;

use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;

/**
 * Builder Object for ClassMetadata
 *
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        www.doctrine-project.com
 * @since       2.2
 * @author      Benjamin Eberlei <kontakt@beberlei.de>
 * @author      Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
class ClassMetadataBuilder
{
    /**
     * @var \\Doctrine\\ORM\\Mapping\\ClassMetadataInfo
     */
    private \$cm;

    /**
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadataInfo \$cm
     */
    public function __construct(ClassMetadataInfo \$cm)
    {
        \$this->cm = \$cm;
    }

    /**
     * @return ClassMetadata
     */
    public function getClassMetadata()
    {
        return \$this->cm;
    }

    /**
     * Marks the class as mapped superclass.
     *
     * @return ClassMetadataBuilder
     */
    public function setMappedSuperClass()
    {
        \$this->cm->isMappedSuperclass = true;
        \$this->cm->isEmbeddedClass = false;

        return \$this;
    }

    /**
     * Marks the class as embeddable.
     *
     * @return ClassMetadataBuilder
     */
    public function setEmbeddable()
    {
        \$this->cm->isEmbeddedClass = true;
        \$this->cm->isMappedSuperclass = false;

        return \$this;
    }

    /**
     * Adds and embedded class
     *
     * @param string      \$fieldName
     * @param string      \$class
     * @param string|null \$columnPrefix
     *
     * @return \$this
     */
    public function addEmbedded(\$fieldName, \$class, \$columnPrefix = null)
    {
        \$this->cm->mapEmbedded(
            [
                'fieldName'    => \$fieldName,
                'class'        => \$class,
                'columnPrefix' => \$columnPrefix
            ]
        );

        return \$this;
    }

    /**
     * Sets custom Repository class name.
     *
     * @param string \$repositoryClassName
     *
     * @return ClassMetadataBuilder
     */
    public function setCustomRepositoryClass(\$repositoryClassName)
    {
        \$this->cm->setCustomRepositoryClass(\$repositoryClassName);

        return \$this;
    }

    /**
     * Marks class read only.
     *
     * @return ClassMetadataBuilder
     */
    public function setReadOnly()
    {
        \$this->cm->markReadOnly();

        return \$this;
    }

    /**
     * Sets the table name.
     *
     * @param string \$name
     *
     * @return ClassMetadataBuilder
     */
    public function setTable(\$name)
    {
        \$this->cm->setPrimaryTable(['name' => \$name]);

        return \$this;
    }

    /**
     * Adds Index.
     *
     * @param array  \$columns
     * @param string \$name
     *
     * @return ClassMetadataBuilder
     */
    public function addIndex(array \$columns, \$name)
    {
        if (!isset(\$this->cm->table['indexes'])) {
            \$this->cm->table['indexes'] = [];
        }

        \$this->cm->table['indexes'][\$name] = ['columns' => \$columns];

        return \$this;
    }

    /**
     * Adds Unique Constraint.
     *
     * @param array  \$columns
     * @param string \$name
     *
     * @return ClassMetadataBuilder
     */
    public function addUniqueConstraint(array \$columns, \$name)
    {
        if ( ! isset(\$this->cm->table['uniqueConstraints'])) {
            \$this->cm->table['uniqueConstraints'] = [];
        }

        \$this->cm->table['uniqueConstraints'][\$name] = ['columns' => \$columns];

        return \$this;
    }

    /**
     * Adds named query.
     *
     * @param string \$name
     * @param string \$dqlQuery
     *
     * @return ClassMetadataBuilder
     */
    public function addNamedQuery(\$name, \$dqlQuery)
    {
        \$this->cm->addNamedQuery(
            [
                'name' => \$name,
                'query' => \$dqlQuery,
            ]
        );

        return \$this;
    }

    /**
     * Sets class as root of a joined table inheritance hierarchy.
     *
     * @return ClassMetadataBuilder
     */
    public function setJoinedTableInheritance()
    {
        \$this->cm->setInheritanceType(ClassMetadata::INHERITANCE_TYPE_JOINED);

        return \$this;
    }

    /**
     * Sets class as root of a single table inheritance hierarchy.
     *
     * @return ClassMetadataBuilder
     */
    public function setSingleTableInheritance()
    {
        \$this->cm->setInheritanceType(ClassMetadata::INHERITANCE_TYPE_SINGLE_TABLE);

        return \$this;
    }

    /**
     * Sets the discriminator column details.
     *
     * @param string \$name
     * @param string \$type
     * @param int    \$length
     *
     * @return ClassMetadataBuilder
     */
    public function setDiscriminatorColumn(\$name, \$type = 'string', \$length = 255)
    {
        \$this->cm->setDiscriminatorColumn(
            [
                'name' => \$name,
                'type' => \$type,
                'length' => \$length,
            ]
        );

        return \$this;
    }

    /**
     * Adds a subclass to this inheritance hierarchy.
     *
     * @param string \$name
     * @param string \$class
     *
     * @return ClassMetadataBuilder
     */
    public function addDiscriminatorMapClass(\$name, \$class)
    {
        \$this->cm->addDiscriminatorMapClass(\$name, \$class);

        return \$this;
    }

    /**
     * Sets deferred explicit change tracking policy.
     *
     * @return ClassMetadataBuilder
     */
    public function setChangeTrackingPolicyDeferredExplicit()
    {
        \$this->cm->setChangeTrackingPolicy(ClassMetadata::CHANGETRACKING_DEFERRED_EXPLICIT);

        return \$this;
    }

    /**
     * Sets notify change tracking policy.
     *
     * @return ClassMetadataBuilder
     */
    public function setChangeTrackingPolicyNotify()
    {
        \$this->cm->setChangeTrackingPolicy(ClassMetadata::CHANGETRACKING_NOTIFY);

        return \$this;
    }

    /**
     * Adds lifecycle event.
     *
     * @param string \$methodName
     * @param string \$event
     *
     * @return ClassMetadataBuilder
     */
    public function addLifecycleEvent(\$methodName, \$event)
    {
        \$this->cm->addLifecycleCallback(\$methodName, \$event);

        return \$this;
    }

    /**
     * Adds Field.
     *
     * @param string \$name
     * @param string \$type
     * @param array  \$mapping
     *
     * @return ClassMetadataBuilder
     */
    public function addField(\$name, \$type, array \$mapping = [])
    {
        \$mapping['fieldName'] = \$name;
        \$mapping['type'] = \$type;

        \$this->cm->mapField(\$mapping);

        return \$this;
    }

    /**
     * Creates a field builder.
     *
     * @param string \$name
     * @param string \$type
     *
     * @return FieldBuilder
     */
    public function createField(\$name, \$type)
    {
        return new FieldBuilder(
            \$this,
            [
                'fieldName' => \$name,
                'type'      => \$type
            ]
        );
    }

    /**
     * Creates an embedded builder.
     *
     * @param string \$fieldName
     * @param string \$class
     *
     * @return EmbeddedBuilder
     */
    public function createEmbedded(\$fieldName, \$class)
    {
        return new EmbeddedBuilder(
            \$this,
            [
                'fieldName'    => \$fieldName,
                'class'        => \$class,
                'columnPrefix' => null
            ]
        );
    }

    /**
     * Adds a simple many to one association, optionally with the inversed by field.
     *
     * @param string      \$name
     * @param string      \$targetEntity
     * @param string|null \$inversedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addManyToOne(\$name, \$targetEntity, \$inversedBy = null)
    {
        \$builder = \$this->createManyToOne(\$name, \$targetEntity);

        if (\$inversedBy) {
            \$builder->inversedBy(\$inversedBy);
        }

        return \$builder->build();
    }

    /**
     * Creates a ManyToOne Association Builder.
     *
     * Note: This method does not add the association, you have to call build() on the AssociationBuilder.
     *
     * @param string \$name
     * @param string \$targetEntity
     *
     * @return AssociationBuilder
     */
    public function createManyToOne(\$name, \$targetEntity)
    {
        return new AssociationBuilder(
            \$this,
            [
                'fieldName'    => \$name,
                'targetEntity' => \$targetEntity
            ],
            ClassMetadata::MANY_TO_ONE
        );
    }

    /**
     * Creates a OneToOne Association Builder.
     *
     * @param string \$name
     * @param string \$targetEntity
     *
     * @return AssociationBuilder
     */
    public function createOneToOne(\$name, \$targetEntity)
    {
        return new AssociationBuilder(
            \$this,
            [
                'fieldName'    => \$name,
                'targetEntity' => \$targetEntity
            ],
            ClassMetadata::ONE_TO_ONE
        );
    }

    /**
     * Adds simple inverse one-to-one association.
     *
     * @param string \$name
     * @param string \$targetEntity
     * @param string \$mappedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addInverseOneToOne(\$name, \$targetEntity, \$mappedBy)
    {
        \$builder = \$this->createOneToOne(\$name, \$targetEntity);
        \$builder->mappedBy(\$mappedBy);

        return \$builder->build();
    }

    /**
     * Adds simple owning one-to-one association.
     *
     * @param string      \$name
     * @param string      \$targetEntity
     * @param string|null \$inversedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addOwningOneToOne(\$name, \$targetEntity, \$inversedBy = null)
    {
        \$builder = \$this->createOneToOne(\$name, \$targetEntity);

        if (\$inversedBy) {
            \$builder->inversedBy(\$inversedBy);
        }

        return \$builder->build();
    }

    /**
     * Creates a ManyToMany Association Builder.
     *
     * @param string \$name
     * @param string \$targetEntity
     *
     * @return ManyToManyAssociationBuilder
     */
    public function createManyToMany(\$name, \$targetEntity)
    {
        return new ManyToManyAssociationBuilder(
            \$this,
            [
                'fieldName'    => \$name,
                'targetEntity' => \$targetEntity
            ],
            ClassMetadata::MANY_TO_MANY
        );
    }

    /**
     * Adds a simple owning many to many association.
     *
     * @param string      \$name
     * @param string      \$targetEntity
     * @param string|null \$inversedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addOwningManyToMany(\$name, \$targetEntity, \$inversedBy = null)
    {
        \$builder = \$this->createManyToMany(\$name, \$targetEntity);

        if (\$inversedBy) {
            \$builder->inversedBy(\$inversedBy);
        }

        return \$builder->build();
    }

    /**
     * Adds a simple inverse many to many association.
     *
     * @param string \$name
     * @param string \$targetEntity
     * @param string \$mappedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addInverseManyToMany(\$name, \$targetEntity, \$mappedBy)
    {
        \$builder = \$this->createManyToMany(\$name, \$targetEntity);
        \$builder->mappedBy(\$mappedBy);

        return \$builder->build();
    }

    /**
     * Creates a one to many association builder.
     *
     * @param string \$name
     * @param string \$targetEntity
     *
     * @return OneToManyAssociationBuilder
     */
    public function createOneToMany(\$name, \$targetEntity)
    {
        return new OneToManyAssociationBuilder(
            \$this,
            [
                'fieldName'    => \$name,
                'targetEntity' => \$targetEntity
            ],
            ClassMetadata::ONE_TO_MANY
        );
    }

    /**
     * Adds simple OneToMany association.
     *
     * @param string \$name
     * @param string \$targetEntity
     * @param string \$mappedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addOneToMany(\$name, \$targetEntity, \$mappedBy)
    {
        \$builder = \$this->createOneToMany(\$name, \$targetEntity);
        \$builder->mappedBy(\$mappedBy);

        return \$builder->build();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ClassMetadataBuilder.php";
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

namespace Doctrine\\ORM\\Mapping\\Builder;

use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;

/**
 * Builder Object for ClassMetadata
 *
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        www.doctrine-project.com
 * @since       2.2
 * @author      Benjamin Eberlei <kontakt@beberlei.de>
 * @author      Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
class ClassMetadataBuilder
{
    /**
     * @var \\Doctrine\\ORM\\Mapping\\ClassMetadataInfo
     */
    private \$cm;

    /**
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadataInfo \$cm
     */
    public function __construct(ClassMetadataInfo \$cm)
    {
        \$this->cm = \$cm;
    }

    /**
     * @return ClassMetadata
     */
    public function getClassMetadata()
    {
        return \$this->cm;
    }

    /**
     * Marks the class as mapped superclass.
     *
     * @return ClassMetadataBuilder
     */
    public function setMappedSuperClass()
    {
        \$this->cm->isMappedSuperclass = true;
        \$this->cm->isEmbeddedClass = false;

        return \$this;
    }

    /**
     * Marks the class as embeddable.
     *
     * @return ClassMetadataBuilder
     */
    public function setEmbeddable()
    {
        \$this->cm->isEmbeddedClass = true;
        \$this->cm->isMappedSuperclass = false;

        return \$this;
    }

    /**
     * Adds and embedded class
     *
     * @param string      \$fieldName
     * @param string      \$class
     * @param string|null \$columnPrefix
     *
     * @return \$this
     */
    public function addEmbedded(\$fieldName, \$class, \$columnPrefix = null)
    {
        \$this->cm->mapEmbedded(
            [
                'fieldName'    => \$fieldName,
                'class'        => \$class,
                'columnPrefix' => \$columnPrefix
            ]
        );

        return \$this;
    }

    /**
     * Sets custom Repository class name.
     *
     * @param string \$repositoryClassName
     *
     * @return ClassMetadataBuilder
     */
    public function setCustomRepositoryClass(\$repositoryClassName)
    {
        \$this->cm->setCustomRepositoryClass(\$repositoryClassName);

        return \$this;
    }

    /**
     * Marks class read only.
     *
     * @return ClassMetadataBuilder
     */
    public function setReadOnly()
    {
        \$this->cm->markReadOnly();

        return \$this;
    }

    /**
     * Sets the table name.
     *
     * @param string \$name
     *
     * @return ClassMetadataBuilder
     */
    public function setTable(\$name)
    {
        \$this->cm->setPrimaryTable(['name' => \$name]);

        return \$this;
    }

    /**
     * Adds Index.
     *
     * @param array  \$columns
     * @param string \$name
     *
     * @return ClassMetadataBuilder
     */
    public function addIndex(array \$columns, \$name)
    {
        if (!isset(\$this->cm->table['indexes'])) {
            \$this->cm->table['indexes'] = [];
        }

        \$this->cm->table['indexes'][\$name] = ['columns' => \$columns];

        return \$this;
    }

    /**
     * Adds Unique Constraint.
     *
     * @param array  \$columns
     * @param string \$name
     *
     * @return ClassMetadataBuilder
     */
    public function addUniqueConstraint(array \$columns, \$name)
    {
        if ( ! isset(\$this->cm->table['uniqueConstraints'])) {
            \$this->cm->table['uniqueConstraints'] = [];
        }

        \$this->cm->table['uniqueConstraints'][\$name] = ['columns' => \$columns];

        return \$this;
    }

    /**
     * Adds named query.
     *
     * @param string \$name
     * @param string \$dqlQuery
     *
     * @return ClassMetadataBuilder
     */
    public function addNamedQuery(\$name, \$dqlQuery)
    {
        \$this->cm->addNamedQuery(
            [
                'name' => \$name,
                'query' => \$dqlQuery,
            ]
        );

        return \$this;
    }

    /**
     * Sets class as root of a joined table inheritance hierarchy.
     *
     * @return ClassMetadataBuilder
     */
    public function setJoinedTableInheritance()
    {
        \$this->cm->setInheritanceType(ClassMetadata::INHERITANCE_TYPE_JOINED);

        return \$this;
    }

    /**
     * Sets class as root of a single table inheritance hierarchy.
     *
     * @return ClassMetadataBuilder
     */
    public function setSingleTableInheritance()
    {
        \$this->cm->setInheritanceType(ClassMetadata::INHERITANCE_TYPE_SINGLE_TABLE);

        return \$this;
    }

    /**
     * Sets the discriminator column details.
     *
     * @param string \$name
     * @param string \$type
     * @param int    \$length
     *
     * @return ClassMetadataBuilder
     */
    public function setDiscriminatorColumn(\$name, \$type = 'string', \$length = 255)
    {
        \$this->cm->setDiscriminatorColumn(
            [
                'name' => \$name,
                'type' => \$type,
                'length' => \$length,
            ]
        );

        return \$this;
    }

    /**
     * Adds a subclass to this inheritance hierarchy.
     *
     * @param string \$name
     * @param string \$class
     *
     * @return ClassMetadataBuilder
     */
    public function addDiscriminatorMapClass(\$name, \$class)
    {
        \$this->cm->addDiscriminatorMapClass(\$name, \$class);

        return \$this;
    }

    /**
     * Sets deferred explicit change tracking policy.
     *
     * @return ClassMetadataBuilder
     */
    public function setChangeTrackingPolicyDeferredExplicit()
    {
        \$this->cm->setChangeTrackingPolicy(ClassMetadata::CHANGETRACKING_DEFERRED_EXPLICIT);

        return \$this;
    }

    /**
     * Sets notify change tracking policy.
     *
     * @return ClassMetadataBuilder
     */
    public function setChangeTrackingPolicyNotify()
    {
        \$this->cm->setChangeTrackingPolicy(ClassMetadata::CHANGETRACKING_NOTIFY);

        return \$this;
    }

    /**
     * Adds lifecycle event.
     *
     * @param string \$methodName
     * @param string \$event
     *
     * @return ClassMetadataBuilder
     */
    public function addLifecycleEvent(\$methodName, \$event)
    {
        \$this->cm->addLifecycleCallback(\$methodName, \$event);

        return \$this;
    }

    /**
     * Adds Field.
     *
     * @param string \$name
     * @param string \$type
     * @param array  \$mapping
     *
     * @return ClassMetadataBuilder
     */
    public function addField(\$name, \$type, array \$mapping = [])
    {
        \$mapping['fieldName'] = \$name;
        \$mapping['type'] = \$type;

        \$this->cm->mapField(\$mapping);

        return \$this;
    }

    /**
     * Creates a field builder.
     *
     * @param string \$name
     * @param string \$type
     *
     * @return FieldBuilder
     */
    public function createField(\$name, \$type)
    {
        return new FieldBuilder(
            \$this,
            [
                'fieldName' => \$name,
                'type'      => \$type
            ]
        );
    }

    /**
     * Creates an embedded builder.
     *
     * @param string \$fieldName
     * @param string \$class
     *
     * @return EmbeddedBuilder
     */
    public function createEmbedded(\$fieldName, \$class)
    {
        return new EmbeddedBuilder(
            \$this,
            [
                'fieldName'    => \$fieldName,
                'class'        => \$class,
                'columnPrefix' => null
            ]
        );
    }

    /**
     * Adds a simple many to one association, optionally with the inversed by field.
     *
     * @param string      \$name
     * @param string      \$targetEntity
     * @param string|null \$inversedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addManyToOne(\$name, \$targetEntity, \$inversedBy = null)
    {
        \$builder = \$this->createManyToOne(\$name, \$targetEntity);

        if (\$inversedBy) {
            \$builder->inversedBy(\$inversedBy);
        }

        return \$builder->build();
    }

    /**
     * Creates a ManyToOne Association Builder.
     *
     * Note: This method does not add the association, you have to call build() on the AssociationBuilder.
     *
     * @param string \$name
     * @param string \$targetEntity
     *
     * @return AssociationBuilder
     */
    public function createManyToOne(\$name, \$targetEntity)
    {
        return new AssociationBuilder(
            \$this,
            [
                'fieldName'    => \$name,
                'targetEntity' => \$targetEntity
            ],
            ClassMetadata::MANY_TO_ONE
        );
    }

    /**
     * Creates a OneToOne Association Builder.
     *
     * @param string \$name
     * @param string \$targetEntity
     *
     * @return AssociationBuilder
     */
    public function createOneToOne(\$name, \$targetEntity)
    {
        return new AssociationBuilder(
            \$this,
            [
                'fieldName'    => \$name,
                'targetEntity' => \$targetEntity
            ],
            ClassMetadata::ONE_TO_ONE
        );
    }

    /**
     * Adds simple inverse one-to-one association.
     *
     * @param string \$name
     * @param string \$targetEntity
     * @param string \$mappedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addInverseOneToOne(\$name, \$targetEntity, \$mappedBy)
    {
        \$builder = \$this->createOneToOne(\$name, \$targetEntity);
        \$builder->mappedBy(\$mappedBy);

        return \$builder->build();
    }

    /**
     * Adds simple owning one-to-one association.
     *
     * @param string      \$name
     * @param string      \$targetEntity
     * @param string|null \$inversedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addOwningOneToOne(\$name, \$targetEntity, \$inversedBy = null)
    {
        \$builder = \$this->createOneToOne(\$name, \$targetEntity);

        if (\$inversedBy) {
            \$builder->inversedBy(\$inversedBy);
        }

        return \$builder->build();
    }

    /**
     * Creates a ManyToMany Association Builder.
     *
     * @param string \$name
     * @param string \$targetEntity
     *
     * @return ManyToManyAssociationBuilder
     */
    public function createManyToMany(\$name, \$targetEntity)
    {
        return new ManyToManyAssociationBuilder(
            \$this,
            [
                'fieldName'    => \$name,
                'targetEntity' => \$targetEntity
            ],
            ClassMetadata::MANY_TO_MANY
        );
    }

    /**
     * Adds a simple owning many to many association.
     *
     * @param string      \$name
     * @param string      \$targetEntity
     * @param string|null \$inversedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addOwningManyToMany(\$name, \$targetEntity, \$inversedBy = null)
    {
        \$builder = \$this->createManyToMany(\$name, \$targetEntity);

        if (\$inversedBy) {
            \$builder->inversedBy(\$inversedBy);
        }

        return \$builder->build();
    }

    /**
     * Adds a simple inverse many to many association.
     *
     * @param string \$name
     * @param string \$targetEntity
     * @param string \$mappedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addInverseManyToMany(\$name, \$targetEntity, \$mappedBy)
    {
        \$builder = \$this->createManyToMany(\$name, \$targetEntity);
        \$builder->mappedBy(\$mappedBy);

        return \$builder->build();
    }

    /**
     * Creates a one to many association builder.
     *
     * @param string \$name
     * @param string \$targetEntity
     *
     * @return OneToManyAssociationBuilder
     */
    public function createOneToMany(\$name, \$targetEntity)
    {
        return new OneToManyAssociationBuilder(
            \$this,
            [
                'fieldName'    => \$name,
                'targetEntity' => \$targetEntity
            ],
            ClassMetadata::ONE_TO_MANY
        );
    }

    /**
     * Adds simple OneToMany association.
     *
     * @param string \$name
     * @param string \$targetEntity
     * @param string \$mappedBy
     *
     * @return ClassMetadataBuilder
     */
    public function addOneToMany(\$name, \$targetEntity, \$mappedBy)
    {
        \$builder = \$this->createOneToMany(\$name, \$targetEntity);
        \$builder->mappedBy(\$mappedBy);

        return \$builder->build();
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ClassMetadataBuilder.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ClassMetadataBuilder.php");
    }
}
