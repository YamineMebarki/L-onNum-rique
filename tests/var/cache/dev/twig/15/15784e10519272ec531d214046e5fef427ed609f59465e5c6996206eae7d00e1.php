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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/MultiTableUpdateExecutor.php */
class __TwigTemplate_62e3f3252f494ab23604e57c0b0bb59128fecb32cf0f8769a774b3cc926705f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/MultiTableUpdateExecutor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/MultiTableUpdateExecutor.php"));

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

namespace Doctrine\\ORM\\Query\\Exec;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Types\\Type;
use Doctrine\\ORM\\Query\\ParameterTypeInferer;
use Doctrine\\ORM\\Query\\AST;
use Doctrine\\ORM\\Utility\\PersisterHelper;
use Throwable;

/**
 * Executes the SQL statements for bulk DQL UPDATE statements on classes in
 * Class Table Inheritance (JOINED).
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @since 2.0
 */
class MultiTableUpdateExecutor extends AbstractSqlExecutor
{
    /**
     * @var string
     */
    private \$_createTempTableSql;

    /**
     * @var string
     */
    private \$_dropTempTableSql;

    /**
     * @var string
     */
    private \$_insertSql;

    /**
     * @var array
     */
    private \$_sqlParameters = [];

    /**
     * @var int
     */
    private \$_numParametersInUpdateClause = 0;

    /**
     * Initializes a new <tt>MultiTableUpdateExecutor</tt>.
     *
     * Internal note: Any SQL construction and preparation takes place in the constructor for
     *                best performance. With a query cache the executor will be cached.
     *
     * @param \\Doctrine\\ORM\\Query\\AST\\Node  \$AST The root AST node of the DQL query.
     * @param \\Doctrine\\ORM\\Query\\SqlWalker \$sqlWalker The walker used for SQL generation from the AST.
     */
    public function __construct(AST\\Node \$AST, \$sqlWalker)
    {
        \$em             = \$sqlWalker->getEntityManager();
        \$conn           = \$em->getConnection();
        \$platform       = \$conn->getDatabasePlatform();
        \$quoteStrategy  = \$em->getConfiguration()->getQuoteStrategy();

        \$updateClause   = \$AST->updateClause;
        \$primaryClass   = \$sqlWalker->getEntityManager()->getClassMetadata(\$updateClause->abstractSchemaName);
        \$rootClass      = \$em->getClassMetadata(\$primaryClass->rootEntityName);

        \$updateItems    = \$updateClause->updateItems;

        \$tempTable      = \$platform->getTemporaryTableName(\$rootClass->getTemporaryIdTableName());
        \$idColumnNames  = \$rootClass->getIdentifierColumnNames();
        \$idColumnList   = implode(', ', \$idColumnNames);

        // 1. Create an INSERT INTO temptable ... SELECT identifiers WHERE \$AST->getWhereClause()
        \$sqlWalker->setSQLTableAlias(\$primaryClass->getTableName(), 't0', \$updateClause->aliasIdentificationVariable);

        \$this->_insertSql = 'INSERT INTO ' . \$tempTable . ' (' . \$idColumnList . ')'
                . ' SELECT t0.' . implode(', t0.', \$idColumnNames);

        \$rangeDecl = new AST\\RangeVariableDeclaration(\$primaryClass->name, \$updateClause->aliasIdentificationVariable);
        \$fromClause = new AST\\FromClause([new AST\\IdentificationVariableDeclaration(\$rangeDecl, null, [])]);

        \$this->_insertSql .= \$sqlWalker->walkFromClause(\$fromClause);

        // 2. Create ID subselect statement used in UPDATE ... WHERE ... IN (subselect)
        \$idSubselect = 'SELECT ' . \$idColumnList . ' FROM ' . \$tempTable;

        // 3. Create and store UPDATE statements
        \$classNames = array_merge(\$primaryClass->parentClasses, [\$primaryClass->name], \$primaryClass->subClasses);
        \$i = -1;

        foreach (array_reverse(\$classNames) as \$className) {
            \$affected = false;
            \$class = \$em->getClassMetadata(\$className);
            \$updateSql = 'UPDATE ' . \$quoteStrategy->getTableName(\$class, \$platform) . ' SET ';

            foreach (\$updateItems as \$updateItem) {
                \$field = \$updateItem->pathExpression->field;

                if ((isset(\$class->fieldMappings[\$field]) && ! isset(\$class->fieldMappings[\$field]['inherited'])) ||
                    (isset(\$class->associationMappings[\$field]) && ! isset(\$class->associationMappings[\$field]['inherited']))) {
                    \$newValue = \$updateItem->newValue;

                    if ( ! \$affected) {
                        \$affected = true;
                        ++\$i;
                    } else {
                        \$updateSql .= ', ';
                    }

                    \$updateSql .= \$sqlWalker->walkUpdateItem(\$updateItem);

                    if (\$newValue instanceof AST\\InputParameter) {
                        \$this->_sqlParameters[\$i][] = \$newValue->name;

                        ++\$this->_numParametersInUpdateClause;
                    }
                }
            }

            if (\$affected) {
                \$this->_sqlStatements[\$i] = \$updateSql . ' WHERE (' . \$idColumnList . ') IN (' . \$idSubselect . ')';
            }
        }

        // Append WHERE clause to insertSql, if there is one.
        if (\$AST->whereClause) {
            \$this->_insertSql .= \$sqlWalker->walkWhereClause(\$AST->whereClause);
        }

        // 4. Store DDL for temporary identifier table.
        \$columnDefinitions = [];

        foreach (\$idColumnNames as \$idColumnName) {
            \$columnDefinitions[\$idColumnName] = [
                'notnull' => true,
                'type'    => Type::getType(PersisterHelper::getTypeOfColumn(\$idColumnName, \$rootClass, \$em)),
            ];
        }

        \$this->_createTempTableSql = \$platform->getCreateTemporaryTableSnippetSQL() . ' ' . \$tempTable . ' ('
                . \$platform->getColumnDeclarationListSQL(\$columnDefinitions) . ')';

        \$this->_dropTempTableSql = \$platform->getDropTemporaryTableSQL(\$tempTable);
    }

    /**
     * {@inheritDoc}
     */
    public function execute(Connection \$conn, array \$params, array \$types)
    {
        // Create temporary id table
        \$conn->executeUpdate(\$this->_createTempTableSql);

        try {
            // Insert identifiers. Parameters from the update clause are cut off.
            \$numUpdated = \$conn->executeUpdate(
                \$this->_insertSql,
                array_slice(\$params, \$this->_numParametersInUpdateClause),
                array_slice(\$types, \$this->_numParametersInUpdateClause)
            );

            // Execute UPDATE statements
            foreach (\$this->_sqlStatements as \$key => \$statement) {
                \$paramValues = [];
                \$paramTypes  = [];

                if (isset(\$this->_sqlParameters[\$key])) {
                    foreach (\$this->_sqlParameters[\$key] as \$parameterKey => \$parameterName) {
                        \$paramValues[] = \$params[\$parameterKey];
                        \$paramTypes[]  = \$types[\$parameterKey] ?? ParameterTypeInferer::inferType(\$params[\$parameterKey]);
                    }
                }

                \$conn->executeUpdate(\$statement, \$paramValues, \$paramTypes);
            }
        } catch (Throwable \$exception) {
            // FAILURE! Drop temporary table to avoid possible collisions
            \$conn->executeUpdate(\$this->_dropTempTableSql);

            // Re-throw exception
            throw \$exception;
        }

        // Drop temporary table
        \$conn->executeUpdate(\$this->_dropTempTableSql);

        return \$numUpdated;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/MultiTableUpdateExecutor.php";
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

namespace Doctrine\\ORM\\Query\\Exec;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Types\\Type;
use Doctrine\\ORM\\Query\\ParameterTypeInferer;
use Doctrine\\ORM\\Query\\AST;
use Doctrine\\ORM\\Utility\\PersisterHelper;
use Throwable;

/**
 * Executes the SQL statements for bulk DQL UPDATE statements on classes in
 * Class Table Inheritance (JOINED).
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @since 2.0
 */
class MultiTableUpdateExecutor extends AbstractSqlExecutor
{
    /**
     * @var string
     */
    private \$_createTempTableSql;

    /**
     * @var string
     */
    private \$_dropTempTableSql;

    /**
     * @var string
     */
    private \$_insertSql;

    /**
     * @var array
     */
    private \$_sqlParameters = [];

    /**
     * @var int
     */
    private \$_numParametersInUpdateClause = 0;

    /**
     * Initializes a new <tt>MultiTableUpdateExecutor</tt>.
     *
     * Internal note: Any SQL construction and preparation takes place in the constructor for
     *                best performance. With a query cache the executor will be cached.
     *
     * @param \\Doctrine\\ORM\\Query\\AST\\Node  \$AST The root AST node of the DQL query.
     * @param \\Doctrine\\ORM\\Query\\SqlWalker \$sqlWalker The walker used for SQL generation from the AST.
     */
    public function __construct(AST\\Node \$AST, \$sqlWalker)
    {
        \$em             = \$sqlWalker->getEntityManager();
        \$conn           = \$em->getConnection();
        \$platform       = \$conn->getDatabasePlatform();
        \$quoteStrategy  = \$em->getConfiguration()->getQuoteStrategy();

        \$updateClause   = \$AST->updateClause;
        \$primaryClass   = \$sqlWalker->getEntityManager()->getClassMetadata(\$updateClause->abstractSchemaName);
        \$rootClass      = \$em->getClassMetadata(\$primaryClass->rootEntityName);

        \$updateItems    = \$updateClause->updateItems;

        \$tempTable      = \$platform->getTemporaryTableName(\$rootClass->getTemporaryIdTableName());
        \$idColumnNames  = \$rootClass->getIdentifierColumnNames();
        \$idColumnList   = implode(', ', \$idColumnNames);

        // 1. Create an INSERT INTO temptable ... SELECT identifiers WHERE \$AST->getWhereClause()
        \$sqlWalker->setSQLTableAlias(\$primaryClass->getTableName(), 't0', \$updateClause->aliasIdentificationVariable);

        \$this->_insertSql = 'INSERT INTO ' . \$tempTable . ' (' . \$idColumnList . ')'
                . ' SELECT t0.' . implode(', t0.', \$idColumnNames);

        \$rangeDecl = new AST\\RangeVariableDeclaration(\$primaryClass->name, \$updateClause->aliasIdentificationVariable);
        \$fromClause = new AST\\FromClause([new AST\\IdentificationVariableDeclaration(\$rangeDecl, null, [])]);

        \$this->_insertSql .= \$sqlWalker->walkFromClause(\$fromClause);

        // 2. Create ID subselect statement used in UPDATE ... WHERE ... IN (subselect)
        \$idSubselect = 'SELECT ' . \$idColumnList . ' FROM ' . \$tempTable;

        // 3. Create and store UPDATE statements
        \$classNames = array_merge(\$primaryClass->parentClasses, [\$primaryClass->name], \$primaryClass->subClasses);
        \$i = -1;

        foreach (array_reverse(\$classNames) as \$className) {
            \$affected = false;
            \$class = \$em->getClassMetadata(\$className);
            \$updateSql = 'UPDATE ' . \$quoteStrategy->getTableName(\$class, \$platform) . ' SET ';

            foreach (\$updateItems as \$updateItem) {
                \$field = \$updateItem->pathExpression->field;

                if ((isset(\$class->fieldMappings[\$field]) && ! isset(\$class->fieldMappings[\$field]['inherited'])) ||
                    (isset(\$class->associationMappings[\$field]) && ! isset(\$class->associationMappings[\$field]['inherited']))) {
                    \$newValue = \$updateItem->newValue;

                    if ( ! \$affected) {
                        \$affected = true;
                        ++\$i;
                    } else {
                        \$updateSql .= ', ';
                    }

                    \$updateSql .= \$sqlWalker->walkUpdateItem(\$updateItem);

                    if (\$newValue instanceof AST\\InputParameter) {
                        \$this->_sqlParameters[\$i][] = \$newValue->name;

                        ++\$this->_numParametersInUpdateClause;
                    }
                }
            }

            if (\$affected) {
                \$this->_sqlStatements[\$i] = \$updateSql . ' WHERE (' . \$idColumnList . ') IN (' . \$idSubselect . ')';
            }
        }

        // Append WHERE clause to insertSql, if there is one.
        if (\$AST->whereClause) {
            \$this->_insertSql .= \$sqlWalker->walkWhereClause(\$AST->whereClause);
        }

        // 4. Store DDL for temporary identifier table.
        \$columnDefinitions = [];

        foreach (\$idColumnNames as \$idColumnName) {
            \$columnDefinitions[\$idColumnName] = [
                'notnull' => true,
                'type'    => Type::getType(PersisterHelper::getTypeOfColumn(\$idColumnName, \$rootClass, \$em)),
            ];
        }

        \$this->_createTempTableSql = \$platform->getCreateTemporaryTableSnippetSQL() . ' ' . \$tempTable . ' ('
                . \$platform->getColumnDeclarationListSQL(\$columnDefinitions) . ')';

        \$this->_dropTempTableSql = \$platform->getDropTemporaryTableSQL(\$tempTable);
    }

    /**
     * {@inheritDoc}
     */
    public function execute(Connection \$conn, array \$params, array \$types)
    {
        // Create temporary id table
        \$conn->executeUpdate(\$this->_createTempTableSql);

        try {
            // Insert identifiers. Parameters from the update clause are cut off.
            \$numUpdated = \$conn->executeUpdate(
                \$this->_insertSql,
                array_slice(\$params, \$this->_numParametersInUpdateClause),
                array_slice(\$types, \$this->_numParametersInUpdateClause)
            );

            // Execute UPDATE statements
            foreach (\$this->_sqlStatements as \$key => \$statement) {
                \$paramValues = [];
                \$paramTypes  = [];

                if (isset(\$this->_sqlParameters[\$key])) {
                    foreach (\$this->_sqlParameters[\$key] as \$parameterKey => \$parameterName) {
                        \$paramValues[] = \$params[\$parameterKey];
                        \$paramTypes[]  = \$types[\$parameterKey] ?? ParameterTypeInferer::inferType(\$params[\$parameterKey]);
                    }
                }

                \$conn->executeUpdate(\$statement, \$paramValues, \$paramTypes);
            }
        } catch (Throwable \$exception) {
            // FAILURE! Drop temporary table to avoid possible collisions
            \$conn->executeUpdate(\$this->_dropTempTableSql);

            // Re-throw exception
            throw \$exception;
        }

        // Drop temporary table
        \$conn->executeUpdate(\$this->_dropTempTableSql);

        return \$numUpdated;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/MultiTableUpdateExecutor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/MultiTableUpdateExecutor.php");
    }
}
