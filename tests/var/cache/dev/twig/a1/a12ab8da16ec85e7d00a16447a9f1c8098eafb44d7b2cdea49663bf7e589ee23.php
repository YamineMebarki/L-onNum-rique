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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountOutputWalker.php */
class __TwigTemplate_3a50e0e5ef17a5cc9ed9cc2db4d47918bee801a9c17af5815d3b86e451844ddd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountOutputWalker.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountOutputWalker.php"));

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

namespace Doctrine\\ORM\\Tools\\Pagination;

use Doctrine\\ORM\\Query\\SqlWalker;
use Doctrine\\ORM\\Query\\AST\\SelectStatement;

/**
 * Wraps the query in order to accurately count the root objects.
 *
 * Given a DQL like `SELECT u FROM User u` it will generate an SQL query like:
 * SELECT COUNT(*) (SELECT DISTINCT <id> FROM (<original SQL>))
 *
 * Works with composite keys but cannot deal with queries that have multiple
 * root entities (e.g. `SELECT f, b from Foo, Bar`)
 *
 * @author Sander Marechal <s.marechal@jejik.com>
 */
class CountOutputWalker extends SqlWalker
{
    /**
     * @var \\Doctrine\\DBAL\\Platforms\\AbstractPlatform
     */
    private \$platform;

    /**
     * @var \\Doctrine\\ORM\\Query\\ResultSetMapping
     */
    private \$rsm;

    /**
     * @var array
     */
    private \$queryComponents;

    /**
     * Constructor.
     *
     * Stores various parameters that are otherwise unavailable
     * because Doctrine\\ORM\\Query\\SqlWalker keeps everything private without
     * accessors.
     *
     * @param \\Doctrine\\ORM\\Query              \$query
     * @param \\Doctrine\\ORM\\Query\\ParserResult \$parserResult
     * @param array                            \$queryComponents
     */
    public function __construct(\$query, \$parserResult, array \$queryComponents)
    {
        \$this->platform = \$query->getEntityManager()->getConnection()->getDatabasePlatform();
        \$this->rsm = \$parserResult->getResultSetMapping();
        \$this->queryComponents = \$queryComponents;

        parent::__construct(\$query, \$parserResult, \$queryComponents);
    }

    /**
     * Walks down a SelectStatement AST node, wrapping it in a COUNT (SELECT DISTINCT).
     *
     * Note that the ORDER BY clause is not removed. Many SQL implementations (e.g. MySQL)
     * are able to cache subqueries. By keeping the ORDER BY clause intact, the limitSubQuery
     * that will most likely be executed next can be read from the native SQL cache.
     *
     * @param SelectStatement \$AST
     *
     * @return string
     *
     * @throws \\RuntimeException
     */
    public function walkSelectStatement(SelectStatement \$AST)
    {
        if (\$this->platform->getName() === \"mssql\") {
            \$AST->orderByClause = null;
        }

        \$sql = parent::walkSelectStatement(\$AST);

        if (\$AST->groupByClause) {
            return sprintf(
                'SELECT %s AS dctrn_count FROM (%s) dctrn_table',
                \$this->platform->getCountExpression('*'),
                \$sql
            );
        }

        // Find out the SQL alias of the identifier column of the root entity
        // It may be possible to make this work with multiple root entities but that
        // would probably require issuing multiple queries or doing a UNION SELECT
        // so for now, It's not supported.

        // Get the root entity and alias from the AST fromClause
        \$from = \$AST->fromClause->identificationVariableDeclarations;
        if (count(\$from) > 1) {
            throw new \\RuntimeException(\"Cannot count query which selects two FROM components, cannot make distinction\");
        }

        \$fromRoot       = reset(\$from);
        \$rootAlias      = \$fromRoot->rangeVariableDeclaration->aliasIdentificationVariable;
        \$rootClass      = \$this->queryComponents[\$rootAlias]['metadata'];
        \$rootIdentifier = \$rootClass->identifier;

        // For every identifier, find out the SQL alias by combing through the ResultSetMapping
        \$sqlIdentifier = [];
        foreach (\$rootIdentifier as \$property) {
            if (isset(\$rootClass->fieldMappings[\$property])) {
                foreach (array_keys(\$this->rsm->fieldMappings, \$property) as \$alias) {
                    if (\$this->rsm->columnOwnerMap[\$alias] == \$rootAlias) {
                        \$sqlIdentifier[\$property] = \$alias;
                    }
                }
            }

            if (isset(\$rootClass->associationMappings[\$property])) {
                \$joinColumn = \$rootClass->associationMappings[\$property]['joinColumns'][0]['name'];

                foreach (array_keys(\$this->rsm->metaMappings, \$joinColumn) as \$alias) {
                    if (\$this->rsm->columnOwnerMap[\$alias] == \$rootAlias) {
                        \$sqlIdentifier[\$property] = \$alias;
                    }
                }
            }
        }

        if (count(\$rootIdentifier) != count(\$sqlIdentifier)) {
            throw new \\RuntimeException(sprintf(
                'Not all identifier properties can be found in the ResultSetMapping: %s',
                implode(', ', array_diff(\$rootIdentifier, array_keys(\$sqlIdentifier)))
            ));
        }

        // Build the counter query
        return sprintf('SELECT %s AS dctrn_count FROM (SELECT DISTINCT %s FROM (%s) dctrn_result) dctrn_table',
            \$this->platform->getCountExpression('*'),
            implode(', ', \$sqlIdentifier),
            \$sql
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountOutputWalker.php";
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

namespace Doctrine\\ORM\\Tools\\Pagination;

use Doctrine\\ORM\\Query\\SqlWalker;
use Doctrine\\ORM\\Query\\AST\\SelectStatement;

/**
 * Wraps the query in order to accurately count the root objects.
 *
 * Given a DQL like `SELECT u FROM User u` it will generate an SQL query like:
 * SELECT COUNT(*) (SELECT DISTINCT <id> FROM (<original SQL>))
 *
 * Works with composite keys but cannot deal with queries that have multiple
 * root entities (e.g. `SELECT f, b from Foo, Bar`)
 *
 * @author Sander Marechal <s.marechal@jejik.com>
 */
class CountOutputWalker extends SqlWalker
{
    /**
     * @var \\Doctrine\\DBAL\\Platforms\\AbstractPlatform
     */
    private \$platform;

    /**
     * @var \\Doctrine\\ORM\\Query\\ResultSetMapping
     */
    private \$rsm;

    /**
     * @var array
     */
    private \$queryComponents;

    /**
     * Constructor.
     *
     * Stores various parameters that are otherwise unavailable
     * because Doctrine\\ORM\\Query\\SqlWalker keeps everything private without
     * accessors.
     *
     * @param \\Doctrine\\ORM\\Query              \$query
     * @param \\Doctrine\\ORM\\Query\\ParserResult \$parserResult
     * @param array                            \$queryComponents
     */
    public function __construct(\$query, \$parserResult, array \$queryComponents)
    {
        \$this->platform = \$query->getEntityManager()->getConnection()->getDatabasePlatform();
        \$this->rsm = \$parserResult->getResultSetMapping();
        \$this->queryComponents = \$queryComponents;

        parent::__construct(\$query, \$parserResult, \$queryComponents);
    }

    /**
     * Walks down a SelectStatement AST node, wrapping it in a COUNT (SELECT DISTINCT).
     *
     * Note that the ORDER BY clause is not removed. Many SQL implementations (e.g. MySQL)
     * are able to cache subqueries. By keeping the ORDER BY clause intact, the limitSubQuery
     * that will most likely be executed next can be read from the native SQL cache.
     *
     * @param SelectStatement \$AST
     *
     * @return string
     *
     * @throws \\RuntimeException
     */
    public function walkSelectStatement(SelectStatement \$AST)
    {
        if (\$this->platform->getName() === \"mssql\") {
            \$AST->orderByClause = null;
        }

        \$sql = parent::walkSelectStatement(\$AST);

        if (\$AST->groupByClause) {
            return sprintf(
                'SELECT %s AS dctrn_count FROM (%s) dctrn_table',
                \$this->platform->getCountExpression('*'),
                \$sql
            );
        }

        // Find out the SQL alias of the identifier column of the root entity
        // It may be possible to make this work with multiple root entities but that
        // would probably require issuing multiple queries or doing a UNION SELECT
        // so for now, It's not supported.

        // Get the root entity and alias from the AST fromClause
        \$from = \$AST->fromClause->identificationVariableDeclarations;
        if (count(\$from) > 1) {
            throw new \\RuntimeException(\"Cannot count query which selects two FROM components, cannot make distinction\");
        }

        \$fromRoot       = reset(\$from);
        \$rootAlias      = \$fromRoot->rangeVariableDeclaration->aliasIdentificationVariable;
        \$rootClass      = \$this->queryComponents[\$rootAlias]['metadata'];
        \$rootIdentifier = \$rootClass->identifier;

        // For every identifier, find out the SQL alias by combing through the ResultSetMapping
        \$sqlIdentifier = [];
        foreach (\$rootIdentifier as \$property) {
            if (isset(\$rootClass->fieldMappings[\$property])) {
                foreach (array_keys(\$this->rsm->fieldMappings, \$property) as \$alias) {
                    if (\$this->rsm->columnOwnerMap[\$alias] == \$rootAlias) {
                        \$sqlIdentifier[\$property] = \$alias;
                    }
                }
            }

            if (isset(\$rootClass->associationMappings[\$property])) {
                \$joinColumn = \$rootClass->associationMappings[\$property]['joinColumns'][0]['name'];

                foreach (array_keys(\$this->rsm->metaMappings, \$joinColumn) as \$alias) {
                    if (\$this->rsm->columnOwnerMap[\$alias] == \$rootAlias) {
                        \$sqlIdentifier[\$property] = \$alias;
                    }
                }
            }
        }

        if (count(\$rootIdentifier) != count(\$sqlIdentifier)) {
            throw new \\RuntimeException(sprintf(
                'Not all identifier properties can be found in the ResultSetMapping: %s',
                implode(', ', array_diff(\$rootIdentifier, array_keys(\$sqlIdentifier)))
            ));
        }

        // Build the counter query
        return sprintf('SELECT %s AS dctrn_count FROM (SELECT DISTINCT %s FROM (%s) dctrn_result) dctrn_table',
            \$this->platform->getCountExpression('*'),
            implode(', ', \$sqlIdentifier),
            \$sql
        );
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountOutputWalker.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountOutputWalker.php");
    }
}
