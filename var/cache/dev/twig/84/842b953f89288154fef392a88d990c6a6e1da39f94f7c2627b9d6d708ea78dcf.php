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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountWalker.php */
class __TwigTemplate_951b03403596bd0f7a79baee644e68f0d60a7805e5e64fc328541df96d0efae5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountWalker.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountWalker.php"));

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

use Doctrine\\ORM\\Query\\TreeWalkerAdapter;
use Doctrine\\ORM\\Query\\AST\\SelectStatement;
use Doctrine\\ORM\\Query\\AST\\SelectExpression;
use Doctrine\\ORM\\Query\\AST\\PathExpression;
use Doctrine\\ORM\\Query\\AST\\AggregateExpression;

/**
 * Replaces the selectClause of the AST with a COUNT statement.
 *
 * @category    DoctrineExtensions
 * @package     DoctrineExtensions\\Paginate
 * @author      David Abdemoulaie <dave@hobodave.com>
 * @copyright   Copyright (c) 2010 David Abdemoulaie (http://hobodave.com/)
 * @license     http://hobodave.com/license.txt New BSD License
 */
class CountWalker extends TreeWalkerAdapter
{
    /**
     * Distinct mode hint name.
     */
    const HINT_DISTINCT = 'doctrine_paginator.distinct';

    /**
     * Walks down a SelectStatement AST node, modifying it to retrieve a COUNT.
     *
     * @param SelectStatement \$AST
     *
     * @return void
     *
     * @throws \\RuntimeException
     */
    public function walkSelectStatement(SelectStatement \$AST)
    {
        if (\$AST->havingClause) {
            throw new \\RuntimeException('Cannot count query that uses a HAVING clause. Use the output walkers for pagination');
        }

        \$queryComponents = \$this->_getQueryComponents();
        // Get the root entity and alias from the AST fromClause
        \$from = \$AST->fromClause->identificationVariableDeclarations;

        if (count(\$from) > 1) {
            throw new \\RuntimeException(\"Cannot count query which selects two FROM components, cannot make distinction\");
        }

        \$fromRoot            = reset(\$from);
        \$rootAlias           = \$fromRoot->rangeVariableDeclaration->aliasIdentificationVariable;
        \$rootClass           = \$queryComponents[\$rootAlias]['metadata'];
        \$identifierFieldName = \$rootClass->getSingleIdentifierFieldName();

        \$pathType = PathExpression::TYPE_STATE_FIELD;
        if (isset(\$rootClass->associationMappings[\$identifierFieldName])) {
            \$pathType = PathExpression::TYPE_SINGLE_VALUED_ASSOCIATION;
        }

        \$pathExpression = new PathExpression(
            PathExpression::TYPE_STATE_FIELD | PathExpression::TYPE_SINGLE_VALUED_ASSOCIATION, \$rootAlias,
            \$identifierFieldName
        );
        \$pathExpression->type = \$pathType;

        \$distinct = \$this->_getQuery()->getHint(self::HINT_DISTINCT);
        \$AST->selectClause->selectExpressions = [
            new SelectExpression(
                new AggregateExpression('count', \$pathExpression, \$distinct), null
            )
        ];

        // ORDER BY is not needed, only increases query execution through unnecessary sorting.
        \$AST->orderByClause = null;
    }
}

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountWalker.php";
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

use Doctrine\\ORM\\Query\\TreeWalkerAdapter;
use Doctrine\\ORM\\Query\\AST\\SelectStatement;
use Doctrine\\ORM\\Query\\AST\\SelectExpression;
use Doctrine\\ORM\\Query\\AST\\PathExpression;
use Doctrine\\ORM\\Query\\AST\\AggregateExpression;

/**
 * Replaces the selectClause of the AST with a COUNT statement.
 *
 * @category    DoctrineExtensions
 * @package     DoctrineExtensions\\Paginate
 * @author      David Abdemoulaie <dave@hobodave.com>
 * @copyright   Copyright (c) 2010 David Abdemoulaie (http://hobodave.com/)
 * @license     http://hobodave.com/license.txt New BSD License
 */
class CountWalker extends TreeWalkerAdapter
{
    /**
     * Distinct mode hint name.
     */
    const HINT_DISTINCT = 'doctrine_paginator.distinct';

    /**
     * Walks down a SelectStatement AST node, modifying it to retrieve a COUNT.
     *
     * @param SelectStatement \$AST
     *
     * @return void
     *
     * @throws \\RuntimeException
     */
    public function walkSelectStatement(SelectStatement \$AST)
    {
        if (\$AST->havingClause) {
            throw new \\RuntimeException('Cannot count query that uses a HAVING clause. Use the output walkers for pagination');
        }

        \$queryComponents = \$this->_getQueryComponents();
        // Get the root entity and alias from the AST fromClause
        \$from = \$AST->fromClause->identificationVariableDeclarations;

        if (count(\$from) > 1) {
            throw new \\RuntimeException(\"Cannot count query which selects two FROM components, cannot make distinction\");
        }

        \$fromRoot            = reset(\$from);
        \$rootAlias           = \$fromRoot->rangeVariableDeclaration->aliasIdentificationVariable;
        \$rootClass           = \$queryComponents[\$rootAlias]['metadata'];
        \$identifierFieldName = \$rootClass->getSingleIdentifierFieldName();

        \$pathType = PathExpression::TYPE_STATE_FIELD;
        if (isset(\$rootClass->associationMappings[\$identifierFieldName])) {
            \$pathType = PathExpression::TYPE_SINGLE_VALUED_ASSOCIATION;
        }

        \$pathExpression = new PathExpression(
            PathExpression::TYPE_STATE_FIELD | PathExpression::TYPE_SINGLE_VALUED_ASSOCIATION, \$rootAlias,
            \$identifierFieldName
        );
        \$pathExpression->type = \$pathType;

        \$distinct = \$this->_getQuery()->getHint(self::HINT_DISTINCT);
        \$AST->selectClause->selectExpressions = [
            new SelectExpression(
                new AggregateExpression('count', \$pathExpression, \$distinct), null
            )
        ];

        // ORDER BY is not needed, only increases query execution through unnecessary sorting.
        \$AST->orderByClause = null;
    }
}

", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountWalker.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountWalker.php");
    }
}
