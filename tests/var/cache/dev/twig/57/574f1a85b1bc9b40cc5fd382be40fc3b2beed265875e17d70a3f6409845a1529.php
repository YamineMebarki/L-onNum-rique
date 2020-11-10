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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/WhereInWalker.php */
class __TwigTemplate_f09ac33e62b7c32b0852ac2ec76cc104e079af37e8ca42257aca5e11bc5ddb61 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/WhereInWalker.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/WhereInWalker.php"));

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

use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Query\\AST\\ArithmeticExpression;
use Doctrine\\ORM\\Query\\AST\\ConditionalExpression;
use Doctrine\\ORM\\Query\\AST\\ConditionalFactor;
use Doctrine\\ORM\\Query\\AST\\ConditionalPrimary;
use Doctrine\\ORM\\Query\\AST\\ConditionalTerm;
use Doctrine\\ORM\\Query\\AST\\InExpression;
use Doctrine\\ORM\\Query\\AST\\InputParameter;
use Doctrine\\ORM\\Query\\AST\\NullComparisonExpression;
use Doctrine\\ORM\\Query\\AST\\PathExpression;
use Doctrine\\ORM\\Query\\AST\\SelectStatement;
use Doctrine\\ORM\\Query\\AST\\SimpleArithmeticExpression;
use Doctrine\\ORM\\Query\\AST\\WhereClause;
use Doctrine\\ORM\\Query\\TreeWalkerAdapter;
use Doctrine\\ORM\\Utility\\PersisterHelper;
use function array_map;
use function assert;
use function is_array;

/**
 * Replaces the whereClause of the AST with a WHERE id IN (:foo_1, :foo_2) equivalent.
 *
 * @category    DoctrineExtensions
 * @package     DoctrineExtensions\\Paginate
 * @author      David Abdemoulaie <dave@hobodave.com>
 * @copyright   Copyright (c) 2010 David Abdemoulaie (http://hobodave.com/)
 * @license     http://hobodave.com/license.txt New BSD License
 */
class WhereInWalker extends TreeWalkerAdapter
{
    /**
     * ID Count hint name.
     */
    const HINT_PAGINATOR_ID_COUNT = 'doctrine.id.count';

    /**
     * Primary key alias for query.
     */
    const PAGINATOR_ID_ALIAS = 'dpid';

    /**
     * Replaces the whereClause in the AST.
     *
     * Generates a clause equivalent to WHERE IN (:dpid_1, :dpid_2, ...)
     *
     * The parameter namespace (dpid) is defined by
     * the PAGINATOR_ID_ALIAS
     *
     * The total number of parameters is retrieved from
     * the HINT_PAGINATOR_ID_COUNT query hint.
     *
     * @param SelectStatement \$AST
     *
     * @return void
     *
     * @throws \\RuntimeException
     */
    public function walkSelectStatement(SelectStatement \$AST)
    {
        \$queryComponents = \$this->_getQueryComponents();
        // Get the root entity and alias from the AST fromClause
        \$from = \$AST->fromClause->identificationVariableDeclarations;

        if (count(\$from) > 1) {
            throw new \\RuntimeException(\"Cannot count query which selects two FROM components, cannot make distinction\");
        }

        \$fromRoot            = reset(\$from);
        \$rootAlias           = \$fromRoot->rangeVariableDeclaration->aliasIdentificationVariable;
        /** @var ClassMetadata \$rootClass */
        \$rootClass           = \$queryComponents[\$rootAlias]['metadata'];
        \$identifierFieldName = \$rootClass->getSingleIdentifierFieldName();

        \$pathType = PathExpression::TYPE_STATE_FIELD;
        if (isset(\$rootClass->associationMappings[\$identifierFieldName])) {
            \$pathType = PathExpression::TYPE_SINGLE_VALUED_ASSOCIATION;
        }

        \$pathExpression       = new PathExpression(PathExpression::TYPE_STATE_FIELD | PathExpression::TYPE_SINGLE_VALUED_ASSOCIATION, \$rootAlias, \$identifierFieldName);
        \$pathExpression->type = \$pathType;

        \$count = \$this->_getQuery()->getHint(self::HINT_PAGINATOR_ID_COUNT);

        if (\$count > 0) {
            \$arithmeticExpression = new ArithmeticExpression();
            \$arithmeticExpression->simpleArithmeticExpression = new SimpleArithmeticExpression(
                [\$pathExpression]
            );
            \$expression = new InExpression(\$arithmeticExpression);
            \$expression->literals[] = new InputParameter(\":\" . self::PAGINATOR_ID_ALIAS);

            \$this->convertWhereInIdentifiersToDatabaseValue(
                PersisterHelper::getTypeOfField(
                    \$identifierFieldName,
                    \$rootClass,
                    \$this->_getQuery()
                        ->getEntityManager()
                )[0]
            );
        } else {
            \$expression = new NullComparisonExpression(\$pathExpression);
            \$expression->not = false;
        }

        \$conditionalPrimary = new ConditionalPrimary;
        \$conditionalPrimary->simpleConditionalExpression = \$expression;
        if (\$AST->whereClause) {
            if (\$AST->whereClause->conditionalExpression instanceof ConditionalTerm) {
                \$AST->whereClause->conditionalExpression->conditionalFactors[] = \$conditionalPrimary;
            } elseif (\$AST->whereClause->conditionalExpression instanceof ConditionalPrimary) {
                \$AST->whereClause->conditionalExpression = new ConditionalExpression(
                    [
                        new ConditionalTerm(
                            [
                                \$AST->whereClause->conditionalExpression,
                                \$conditionalPrimary
                            ]
                        )
                    ]
                );
            } elseif (\$AST->whereClause->conditionalExpression instanceof ConditionalExpression
                || \$AST->whereClause->conditionalExpression instanceof ConditionalFactor
            ) {
                \$tmpPrimary = new ConditionalPrimary;
                \$tmpPrimary->conditionalExpression = \$AST->whereClause->conditionalExpression;
                \$AST->whereClause->conditionalExpression = new ConditionalTerm(
                    [
                        \$tmpPrimary,
                        \$conditionalPrimary
                    ]
                );
            }
        } else {
            \$AST->whereClause = new WhereClause(
                new ConditionalExpression(
                    [
                        new ConditionalTerm([\$conditionalPrimary])
                    ]
                )
            );
        }
    }

    private function convertWhereInIdentifiersToDatabaseValue(string \$type) : void
    {
        \$query                = \$this->_getQuery();
        \$identifiersParameter = \$query->getParameter(self::PAGINATOR_ID_ALIAS);

        assert(\$identifiersParameter !== null);

        \$identifiers = \$identifiersParameter->getValue();

        assert(is_array(\$identifiers));

        \$connection = \$this->_getQuery()
            ->getEntityManager()
            ->getConnection();

        \$query->setParameter(self::PAGINATOR_ID_ALIAS, array_map(static function (\$id) use (\$connection, \$type) {
            return \$connection->convertToDatabaseValue(\$id, \$type);
        }, \$identifiers));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/WhereInWalker.php";
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

use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Query\\AST\\ArithmeticExpression;
use Doctrine\\ORM\\Query\\AST\\ConditionalExpression;
use Doctrine\\ORM\\Query\\AST\\ConditionalFactor;
use Doctrine\\ORM\\Query\\AST\\ConditionalPrimary;
use Doctrine\\ORM\\Query\\AST\\ConditionalTerm;
use Doctrine\\ORM\\Query\\AST\\InExpression;
use Doctrine\\ORM\\Query\\AST\\InputParameter;
use Doctrine\\ORM\\Query\\AST\\NullComparisonExpression;
use Doctrine\\ORM\\Query\\AST\\PathExpression;
use Doctrine\\ORM\\Query\\AST\\SelectStatement;
use Doctrine\\ORM\\Query\\AST\\SimpleArithmeticExpression;
use Doctrine\\ORM\\Query\\AST\\WhereClause;
use Doctrine\\ORM\\Query\\TreeWalkerAdapter;
use Doctrine\\ORM\\Utility\\PersisterHelper;
use function array_map;
use function assert;
use function is_array;

/**
 * Replaces the whereClause of the AST with a WHERE id IN (:foo_1, :foo_2) equivalent.
 *
 * @category    DoctrineExtensions
 * @package     DoctrineExtensions\\Paginate
 * @author      David Abdemoulaie <dave@hobodave.com>
 * @copyright   Copyright (c) 2010 David Abdemoulaie (http://hobodave.com/)
 * @license     http://hobodave.com/license.txt New BSD License
 */
class WhereInWalker extends TreeWalkerAdapter
{
    /**
     * ID Count hint name.
     */
    const HINT_PAGINATOR_ID_COUNT = 'doctrine.id.count';

    /**
     * Primary key alias for query.
     */
    const PAGINATOR_ID_ALIAS = 'dpid';

    /**
     * Replaces the whereClause in the AST.
     *
     * Generates a clause equivalent to WHERE IN (:dpid_1, :dpid_2, ...)
     *
     * The parameter namespace (dpid) is defined by
     * the PAGINATOR_ID_ALIAS
     *
     * The total number of parameters is retrieved from
     * the HINT_PAGINATOR_ID_COUNT query hint.
     *
     * @param SelectStatement \$AST
     *
     * @return void
     *
     * @throws \\RuntimeException
     */
    public function walkSelectStatement(SelectStatement \$AST)
    {
        \$queryComponents = \$this->_getQueryComponents();
        // Get the root entity and alias from the AST fromClause
        \$from = \$AST->fromClause->identificationVariableDeclarations;

        if (count(\$from) > 1) {
            throw new \\RuntimeException(\"Cannot count query which selects two FROM components, cannot make distinction\");
        }

        \$fromRoot            = reset(\$from);
        \$rootAlias           = \$fromRoot->rangeVariableDeclaration->aliasIdentificationVariable;
        /** @var ClassMetadata \$rootClass */
        \$rootClass           = \$queryComponents[\$rootAlias]['metadata'];
        \$identifierFieldName = \$rootClass->getSingleIdentifierFieldName();

        \$pathType = PathExpression::TYPE_STATE_FIELD;
        if (isset(\$rootClass->associationMappings[\$identifierFieldName])) {
            \$pathType = PathExpression::TYPE_SINGLE_VALUED_ASSOCIATION;
        }

        \$pathExpression       = new PathExpression(PathExpression::TYPE_STATE_FIELD | PathExpression::TYPE_SINGLE_VALUED_ASSOCIATION, \$rootAlias, \$identifierFieldName);
        \$pathExpression->type = \$pathType;

        \$count = \$this->_getQuery()->getHint(self::HINT_PAGINATOR_ID_COUNT);

        if (\$count > 0) {
            \$arithmeticExpression = new ArithmeticExpression();
            \$arithmeticExpression->simpleArithmeticExpression = new SimpleArithmeticExpression(
                [\$pathExpression]
            );
            \$expression = new InExpression(\$arithmeticExpression);
            \$expression->literals[] = new InputParameter(\":\" . self::PAGINATOR_ID_ALIAS);

            \$this->convertWhereInIdentifiersToDatabaseValue(
                PersisterHelper::getTypeOfField(
                    \$identifierFieldName,
                    \$rootClass,
                    \$this->_getQuery()
                        ->getEntityManager()
                )[0]
            );
        } else {
            \$expression = new NullComparisonExpression(\$pathExpression);
            \$expression->not = false;
        }

        \$conditionalPrimary = new ConditionalPrimary;
        \$conditionalPrimary->simpleConditionalExpression = \$expression;
        if (\$AST->whereClause) {
            if (\$AST->whereClause->conditionalExpression instanceof ConditionalTerm) {
                \$AST->whereClause->conditionalExpression->conditionalFactors[] = \$conditionalPrimary;
            } elseif (\$AST->whereClause->conditionalExpression instanceof ConditionalPrimary) {
                \$AST->whereClause->conditionalExpression = new ConditionalExpression(
                    [
                        new ConditionalTerm(
                            [
                                \$AST->whereClause->conditionalExpression,
                                \$conditionalPrimary
                            ]
                        )
                    ]
                );
            } elseif (\$AST->whereClause->conditionalExpression instanceof ConditionalExpression
                || \$AST->whereClause->conditionalExpression instanceof ConditionalFactor
            ) {
                \$tmpPrimary = new ConditionalPrimary;
                \$tmpPrimary->conditionalExpression = \$AST->whereClause->conditionalExpression;
                \$AST->whereClause->conditionalExpression = new ConditionalTerm(
                    [
                        \$tmpPrimary,
                        \$conditionalPrimary
                    ]
                );
            }
        } else {
            \$AST->whereClause = new WhereClause(
                new ConditionalExpression(
                    [
                        new ConditionalTerm([\$conditionalPrimary])
                    ]
                )
            );
        }
    }

    private function convertWhereInIdentifiersToDatabaseValue(string \$type) : void
    {
        \$query                = \$this->_getQuery();
        \$identifiersParameter = \$query->getParameter(self::PAGINATOR_ID_ALIAS);

        assert(\$identifiersParameter !== null);

        \$identifiers = \$identifiersParameter->getValue();

        assert(is_array(\$identifiers));

        \$connection = \$this->_getQuery()
            ->getEntityManager()
            ->getConnection();

        \$query->setParameter(self::PAGINATOR_ID_ALIAS, array_map(static function (\$id) use (\$connection, \$type) {
            return \$connection->convertToDatabaseValue(\$id, \$type);
        }, \$identifiers));
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/WhereInWalker.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/WhereInWalker.php");
    }
}
