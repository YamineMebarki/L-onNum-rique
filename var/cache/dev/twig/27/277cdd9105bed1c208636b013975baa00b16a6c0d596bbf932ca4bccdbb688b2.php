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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SizeFunction.php */
class __TwigTemplate_8e5b6c99423fdd9de6f595ca4e7c2887ad816d41da86c38d8144a9e9e3ba54c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SizeFunction.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SizeFunction.php"));

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

namespace Doctrine\\ORM\\Query\\AST\\Functions;

use Doctrine\\ORM\\Query\\Lexer;

/**
 * \"SIZE\" \"(\" CollectionValuedPathExpression \")\"
 *
 * 
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 */
class SizeFunction extends FunctionNode
{
    /**
     * @var \\Doctrine\\ORM\\Query\\AST\\PathExpression
     */
    public \$collectionPathExpression;

    /**
     * @override
     * @inheritdoc
     * @todo If the collection being counted is already joined, the SQL can be simpler (more efficient).
     */
    public function getSql(\\Doctrine\\ORM\\Query\\SqlWalker \$sqlWalker)
    {
        \$platform       = \$sqlWalker->getEntityManager()->getConnection()->getDatabasePlatform();
        \$quoteStrategy  = \$sqlWalker->getEntityManager()->getConfiguration()->getQuoteStrategy();
        \$dqlAlias       = \$this->collectionPathExpression->identificationVariable;
        \$assocField     = \$this->collectionPathExpression->field;

        \$qComp  = \$sqlWalker->getQueryComponent(\$dqlAlias);
        \$class  = \$qComp['metadata'];
        \$assoc  = \$class->associationMappings[\$assocField];
        \$sql    = 'SELECT COUNT(*) FROM ';

        if (\$assoc['type'] == \\Doctrine\\ORM\\Mapping\\ClassMetadata::ONE_TO_MANY) {
            \$targetClass        = \$sqlWalker->getEntityManager()->getClassMetadata(\$assoc['targetEntity']);
            \$targetTableAlias   = \$sqlWalker->getSQLTableAlias(\$targetClass->getTableName());
            \$sourceTableAlias   = \$sqlWalker->getSQLTableAlias(\$class->getTableName(), \$dqlAlias);

            \$sql .= \$quoteStrategy->getTableName(\$targetClass, \$platform) . ' ' . \$targetTableAlias . ' WHERE ';

            \$owningAssoc = \$targetClass->associationMappings[\$assoc['mappedBy']];

            \$first = true;

            foreach (\$owningAssoc['targetToSourceKeyColumns'] as \$targetColumn => \$sourceColumn) {
                if (\$first) \$first = false; else \$sql .= ' AND ';

                \$sql .= \$targetTableAlias . '.' . \$sourceColumn
                      . ' = '
                      . \$sourceTableAlias . '.' . \$quoteStrategy->getColumnName(\$class->fieldNames[\$targetColumn], \$class, \$platform);
            }
        } else { // many-to-many
            \$targetClass = \$sqlWalker->getEntityManager()->getClassMetadata(\$assoc['targetEntity']);

            \$owningAssoc = \$assoc['isOwningSide'] ? \$assoc : \$targetClass->associationMappings[\$assoc['mappedBy']];
            \$joinTable = \$owningAssoc['joinTable'];

            // SQL table aliases
            \$joinTableAlias = \$sqlWalker->getSQLTableAlias(\$joinTable['name']);
            \$sourceTableAlias = \$sqlWalker->getSQLTableAlias(\$class->getTableName(), \$dqlAlias);

            // join to target table
            \$sql .= \$quoteStrategy->getJoinTableName(\$owningAssoc, \$targetClass, \$platform) . ' ' . \$joinTableAlias . ' WHERE ';

            \$joinColumns = \$assoc['isOwningSide']
                ? \$joinTable['joinColumns']
                : \$joinTable['inverseJoinColumns'];

            \$first = true;

            foreach (\$joinColumns as \$joinColumn) {
                if (\$first) \$first = false; else \$sql .= ' AND ';

                \$sourceColumnName = \$quoteStrategy->getColumnName(
                    \$class->fieldNames[\$joinColumn['referencedColumnName']], \$class, \$platform
                );

                \$sql .= \$joinTableAlias . '.' . \$joinColumn['name']
                      . ' = '
                      . \$sourceTableAlias . '.' . \$sourceColumnName;
            }
        }

        return '(' . \$sql . ')';
    }

    /**
     * @override
     * @inheritdoc
     */
    public function parse(\\Doctrine\\ORM\\Query\\Parser \$parser)
    {
        \$parser->match(Lexer::T_IDENTIFIER);
        \$parser->match(Lexer::T_OPEN_PARENTHESIS);

        \$this->collectionPathExpression = \$parser->CollectionValuedPathExpression();

        \$parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SizeFunction.php";
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

namespace Doctrine\\ORM\\Query\\AST\\Functions;

use Doctrine\\ORM\\Query\\Lexer;

/**
 * \"SIZE\" \"(\" CollectionValuedPathExpression \")\"
 *
 * 
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 */
class SizeFunction extends FunctionNode
{
    /**
     * @var \\Doctrine\\ORM\\Query\\AST\\PathExpression
     */
    public \$collectionPathExpression;

    /**
     * @override
     * @inheritdoc
     * @todo If the collection being counted is already joined, the SQL can be simpler (more efficient).
     */
    public function getSql(\\Doctrine\\ORM\\Query\\SqlWalker \$sqlWalker)
    {
        \$platform       = \$sqlWalker->getEntityManager()->getConnection()->getDatabasePlatform();
        \$quoteStrategy  = \$sqlWalker->getEntityManager()->getConfiguration()->getQuoteStrategy();
        \$dqlAlias       = \$this->collectionPathExpression->identificationVariable;
        \$assocField     = \$this->collectionPathExpression->field;

        \$qComp  = \$sqlWalker->getQueryComponent(\$dqlAlias);
        \$class  = \$qComp['metadata'];
        \$assoc  = \$class->associationMappings[\$assocField];
        \$sql    = 'SELECT COUNT(*) FROM ';

        if (\$assoc['type'] == \\Doctrine\\ORM\\Mapping\\ClassMetadata::ONE_TO_MANY) {
            \$targetClass        = \$sqlWalker->getEntityManager()->getClassMetadata(\$assoc['targetEntity']);
            \$targetTableAlias   = \$sqlWalker->getSQLTableAlias(\$targetClass->getTableName());
            \$sourceTableAlias   = \$sqlWalker->getSQLTableAlias(\$class->getTableName(), \$dqlAlias);

            \$sql .= \$quoteStrategy->getTableName(\$targetClass, \$platform) . ' ' . \$targetTableAlias . ' WHERE ';

            \$owningAssoc = \$targetClass->associationMappings[\$assoc['mappedBy']];

            \$first = true;

            foreach (\$owningAssoc['targetToSourceKeyColumns'] as \$targetColumn => \$sourceColumn) {
                if (\$first) \$first = false; else \$sql .= ' AND ';

                \$sql .= \$targetTableAlias . '.' . \$sourceColumn
                      . ' = '
                      . \$sourceTableAlias . '.' . \$quoteStrategy->getColumnName(\$class->fieldNames[\$targetColumn], \$class, \$platform);
            }
        } else { // many-to-many
            \$targetClass = \$sqlWalker->getEntityManager()->getClassMetadata(\$assoc['targetEntity']);

            \$owningAssoc = \$assoc['isOwningSide'] ? \$assoc : \$targetClass->associationMappings[\$assoc['mappedBy']];
            \$joinTable = \$owningAssoc['joinTable'];

            // SQL table aliases
            \$joinTableAlias = \$sqlWalker->getSQLTableAlias(\$joinTable['name']);
            \$sourceTableAlias = \$sqlWalker->getSQLTableAlias(\$class->getTableName(), \$dqlAlias);

            // join to target table
            \$sql .= \$quoteStrategy->getJoinTableName(\$owningAssoc, \$targetClass, \$platform) . ' ' . \$joinTableAlias . ' WHERE ';

            \$joinColumns = \$assoc['isOwningSide']
                ? \$joinTable['joinColumns']
                : \$joinTable['inverseJoinColumns'];

            \$first = true;

            foreach (\$joinColumns as \$joinColumn) {
                if (\$first) \$first = false; else \$sql .= ' AND ';

                \$sourceColumnName = \$quoteStrategy->getColumnName(
                    \$class->fieldNames[\$joinColumn['referencedColumnName']], \$class, \$platform
                );

                \$sql .= \$joinTableAlias . '.' . \$joinColumn['name']
                      . ' = '
                      . \$sourceTableAlias . '.' . \$sourceColumnName;
            }
        }

        return '(' . \$sql . ')';
    }

    /**
     * @override
     * @inheritdoc
     */
    public function parse(\\Doctrine\\ORM\\Query\\Parser \$parser)
    {
        \$parser->match(Lexer::T_IDENTIFIER);
        \$parser->match(Lexer::T_OPEN_PARENTHESIS);

        \$this->collectionPathExpression = \$parser->CollectionValuedPathExpression();

        \$parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SizeFunction.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SizeFunction.php");
    }
}
