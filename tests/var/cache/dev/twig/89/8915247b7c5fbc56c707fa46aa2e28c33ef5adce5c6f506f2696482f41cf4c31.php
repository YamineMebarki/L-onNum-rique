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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/SingleTablePersister.php */
class __TwigTemplate_c8dbb66f7ba48ad5ba38eec9fa5655e36fb68a912a8c6d5089f8203a67fba4d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/SingleTablePersister.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/SingleTablePersister.php"));

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

namespace Doctrine\\ORM\\Persisters\\Entity;

use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Collections\\Criteria;
use Doctrine\\ORM\\Utility\\PersisterHelper;

/**
 * Persister for entities that participate in a hierarchy mapped with the
 * SINGLE_TABLE strategy.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Alexander <iam.asm89@gmail.com>
 * @since 2.0
 * @link http://martinfowler.com/eaaCatalog/singleTableInheritance.html
 */
class SingleTablePersister extends AbstractEntityInheritancePersister
{
    /**
     * {@inheritdoc}
     */
    protected function getDiscriminatorColumnTableName()
    {
        return \$this->class->getTableName();
    }

    /**
     * {@inheritdoc}
     */
    protected function getSelectColumnsSQL()
    {
        if (\$this->currentPersisterContext->selectColumnListSql !== null) {
            return \$this->currentPersisterContext->selectColumnListSql;
        }

        \$columnList[] = parent::getSelectColumnsSQL();

        \$rootClass  = \$this->em->getClassMetadata(\$this->class->rootEntityName);
        \$tableAlias = \$this->getSQLTableAlias(\$rootClass->name);

         // Append discriminator column
        \$discrColumn     = \$this->class->discriminatorColumn['name'];
        \$discrColumnType = \$this->class->discriminatorColumn['type'];

        \$columnList[]   = \$tableAlias . '.' . \$discrColumn;

        \$resultColumnName = \$this->platform->getSQLResultCasing(\$discrColumn);

        \$this->currentPersisterContext->rsm->setDiscriminatorColumn('r', \$resultColumnName);
        \$this->currentPersisterContext->rsm->addMetaResult('r', \$resultColumnName, \$discrColumn, false, \$discrColumnType);

        // Append subclass columns
        foreach (\$this->class->subClasses as \$subClassName) {
            \$subClass = \$this->em->getClassMetadata(\$subClassName);

            // Regular columns
            foreach (\$subClass->fieldMappings as \$fieldName => \$mapping) {
                if (isset(\$mapping['inherited'])) {
                    continue;
                }

                \$columnList[] = \$this->getSelectColumnSQL(\$fieldName, \$subClass);
            }

            // Foreign key columns
            foreach (\$subClass->associationMappings as \$assoc) {
                if ( ! \$assoc['isOwningSide'] || ! (\$assoc['type'] & ClassMetadata::TO_ONE) || isset(\$assoc['inherited'])) {
                    continue;
                }

                \$targetClass = \$this->em->getClassMetadata(\$assoc['targetEntity']);

                foreach (\$assoc['joinColumns'] as \$joinColumn) {
                    \$columnList[] = \$this->getSelectJoinColumnSQL(
                        \$tableAlias,
                        \$joinColumn['name'],
                        \$this->quoteStrategy->getJoinColumnName(\$joinColumn, \$subClass, \$this->platform),
                        PersisterHelper::getTypeOfColumn(\$joinColumn['referencedColumnName'], \$targetClass, \$this->em)
                    );
                }
            }
        }

        \$this->currentPersisterContext->selectColumnListSql = implode(', ', \$columnList);

        return \$this->currentPersisterContext->selectColumnListSql;
    }

    /**
     * {@inheritdoc}
     */
    protected function getInsertColumnList()
    {
        \$columns = parent::getInsertColumnList();

        // Add discriminator column to the INSERT SQL
        \$columns[] = \$this->class->discriminatorColumn['name'];

        return \$columns;
    }

    /**
     * {@inheritdoc}
     */
    protected function getSQLTableAlias(\$className, \$assocName = '')
    {
        return parent::getSQLTableAlias(\$this->class->rootEntityName, \$assocName);
    }

    /**
     * {@inheritdoc}
     */
    protected function getSelectConditionSQL(array \$criteria, \$assoc = null)
    {
        \$conditionSql = parent::getSelectConditionSQL(\$criteria, \$assoc);

        if (\$conditionSql) {
            \$conditionSql .= ' AND ';
        }

        return \$conditionSql . \$this->getSelectConditionDiscriminatorValueSQL();
    }

    /**
     * {@inheritdoc}
     */
    protected function getSelectConditionCriteriaSQL(Criteria \$criteria)
    {
        \$conditionSql = parent::getSelectConditionCriteriaSQL(\$criteria);

        if (\$conditionSql) {
            \$conditionSql .= ' AND ';
        }

        return \$conditionSql . \$this->getSelectConditionDiscriminatorValueSQL();
    }

    /**
     * @return string
     */
    protected function getSelectConditionDiscriminatorValueSQL()
    {
        \$values = [];

        if (\$this->class->discriminatorValue !== null) { // discriminators can be 0
            \$values[] = \$this->conn->quote(\$this->class->discriminatorValue);
        }

        \$discrValues = array_flip(\$this->class->discriminatorMap);

        foreach (\$this->class->subClasses as \$subclassName) {
            \$values[] = \$this->conn->quote(\$discrValues[\$subclassName]);
        }

        \$values     = implode(', ', \$values);
        \$discColumn = \$this->class->discriminatorColumn['name'];
        \$tableAlias = \$this->getSQLTableAlias(\$this->class->name);

        return \$tableAlias . '.' . \$discColumn . ' IN (' . \$values . ')';
    }

    /**
     * {@inheritdoc}
     */
    protected function generateFilterConditionSQL(ClassMetadata \$targetEntity, \$targetTableAlias)
    {
        // Ensure that the filters are applied to the root entity of the inheritance tree
        \$targetEntity = \$this->em->getClassMetadata(\$targetEntity->rootEntityName);
        // we don't care about the \$targetTableAlias, in a STI there is only one table.

        return parent::generateFilterConditionSQL(\$targetEntity, \$targetTableAlias);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/SingleTablePersister.php";
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

namespace Doctrine\\ORM\\Persisters\\Entity;

use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Collections\\Criteria;
use Doctrine\\ORM\\Utility\\PersisterHelper;

/**
 * Persister for entities that participate in a hierarchy mapped with the
 * SINGLE_TABLE strategy.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Alexander <iam.asm89@gmail.com>
 * @since 2.0
 * @link http://martinfowler.com/eaaCatalog/singleTableInheritance.html
 */
class SingleTablePersister extends AbstractEntityInheritancePersister
{
    /**
     * {@inheritdoc}
     */
    protected function getDiscriminatorColumnTableName()
    {
        return \$this->class->getTableName();
    }

    /**
     * {@inheritdoc}
     */
    protected function getSelectColumnsSQL()
    {
        if (\$this->currentPersisterContext->selectColumnListSql !== null) {
            return \$this->currentPersisterContext->selectColumnListSql;
        }

        \$columnList[] = parent::getSelectColumnsSQL();

        \$rootClass  = \$this->em->getClassMetadata(\$this->class->rootEntityName);
        \$tableAlias = \$this->getSQLTableAlias(\$rootClass->name);

         // Append discriminator column
        \$discrColumn     = \$this->class->discriminatorColumn['name'];
        \$discrColumnType = \$this->class->discriminatorColumn['type'];

        \$columnList[]   = \$tableAlias . '.' . \$discrColumn;

        \$resultColumnName = \$this->platform->getSQLResultCasing(\$discrColumn);

        \$this->currentPersisterContext->rsm->setDiscriminatorColumn('r', \$resultColumnName);
        \$this->currentPersisterContext->rsm->addMetaResult('r', \$resultColumnName, \$discrColumn, false, \$discrColumnType);

        // Append subclass columns
        foreach (\$this->class->subClasses as \$subClassName) {
            \$subClass = \$this->em->getClassMetadata(\$subClassName);

            // Regular columns
            foreach (\$subClass->fieldMappings as \$fieldName => \$mapping) {
                if (isset(\$mapping['inherited'])) {
                    continue;
                }

                \$columnList[] = \$this->getSelectColumnSQL(\$fieldName, \$subClass);
            }

            // Foreign key columns
            foreach (\$subClass->associationMappings as \$assoc) {
                if ( ! \$assoc['isOwningSide'] || ! (\$assoc['type'] & ClassMetadata::TO_ONE) || isset(\$assoc['inherited'])) {
                    continue;
                }

                \$targetClass = \$this->em->getClassMetadata(\$assoc['targetEntity']);

                foreach (\$assoc['joinColumns'] as \$joinColumn) {
                    \$columnList[] = \$this->getSelectJoinColumnSQL(
                        \$tableAlias,
                        \$joinColumn['name'],
                        \$this->quoteStrategy->getJoinColumnName(\$joinColumn, \$subClass, \$this->platform),
                        PersisterHelper::getTypeOfColumn(\$joinColumn['referencedColumnName'], \$targetClass, \$this->em)
                    );
                }
            }
        }

        \$this->currentPersisterContext->selectColumnListSql = implode(', ', \$columnList);

        return \$this->currentPersisterContext->selectColumnListSql;
    }

    /**
     * {@inheritdoc}
     */
    protected function getInsertColumnList()
    {
        \$columns = parent::getInsertColumnList();

        // Add discriminator column to the INSERT SQL
        \$columns[] = \$this->class->discriminatorColumn['name'];

        return \$columns;
    }

    /**
     * {@inheritdoc}
     */
    protected function getSQLTableAlias(\$className, \$assocName = '')
    {
        return parent::getSQLTableAlias(\$this->class->rootEntityName, \$assocName);
    }

    /**
     * {@inheritdoc}
     */
    protected function getSelectConditionSQL(array \$criteria, \$assoc = null)
    {
        \$conditionSql = parent::getSelectConditionSQL(\$criteria, \$assoc);

        if (\$conditionSql) {
            \$conditionSql .= ' AND ';
        }

        return \$conditionSql . \$this->getSelectConditionDiscriminatorValueSQL();
    }

    /**
     * {@inheritdoc}
     */
    protected function getSelectConditionCriteriaSQL(Criteria \$criteria)
    {
        \$conditionSql = parent::getSelectConditionCriteriaSQL(\$criteria);

        if (\$conditionSql) {
            \$conditionSql .= ' AND ';
        }

        return \$conditionSql . \$this->getSelectConditionDiscriminatorValueSQL();
    }

    /**
     * @return string
     */
    protected function getSelectConditionDiscriminatorValueSQL()
    {
        \$values = [];

        if (\$this->class->discriminatorValue !== null) { // discriminators can be 0
            \$values[] = \$this->conn->quote(\$this->class->discriminatorValue);
        }

        \$discrValues = array_flip(\$this->class->discriminatorMap);

        foreach (\$this->class->subClasses as \$subclassName) {
            \$values[] = \$this->conn->quote(\$discrValues[\$subclassName]);
        }

        \$values     = implode(', ', \$values);
        \$discColumn = \$this->class->discriminatorColumn['name'];
        \$tableAlias = \$this->getSQLTableAlias(\$this->class->name);

        return \$tableAlias . '.' . \$discColumn . ' IN (' . \$values . ')';
    }

    /**
     * {@inheritdoc}
     */
    protected function generateFilterConditionSQL(ClassMetadata \$targetEntity, \$targetTableAlias)
    {
        // Ensure that the filters are applied to the root entity of the inheritance tree
        \$targetEntity = \$this->em->getClassMetadata(\$targetEntity->rootEntityName);
        // we don't care about the \$targetTableAlias, in a STI there is only one table.

        return parent::generateFilterConditionSQL(\$targetEntity, \$targetTableAlias);
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/SingleTablePersister.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/SingleTablePersister.php");
    }
}
