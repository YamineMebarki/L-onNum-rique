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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlExpressionVisitor.php */
class __TwigTemplate_17976f4af781984b75779ab3e6d9c572ee97a8f5c1493be51389198555e3389d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlExpressionVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlExpressionVisitor.php"));

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

namespace Doctrine\\ORM\\Persisters;

use Doctrine\\ORM\\Mapping\\ClassMetadata;

use Doctrine\\Common\\Collections\\Expr\\ExpressionVisitor;
use Doctrine\\Common\\Collections\\Expr\\Comparison;
use Doctrine\\Common\\Collections\\Expr\\Value;
use Doctrine\\Common\\Collections\\Expr\\CompositeExpression;
use Doctrine\\ORM\\Persisters\\Entity\\BasicEntityPersister;

/**
 * Visit Expressions and generate SQL WHERE conditions from them.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since 2.3
 */
class SqlExpressionVisitor extends ExpressionVisitor
{
    /**
     * @var \\Doctrine\\ORM\\Persisters\\Entity\\BasicEntityPersister
     */
    private \$persister;

    /**
     * @var \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    private \$classMetadata;

    /**
     * @param \\Doctrine\\ORM\\Persisters\\Entity\\BasicEntityPersister \$persister
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata                  \$classMetadata
     */
    public function __construct(BasicEntityPersister \$persister, ClassMetadata \$classMetadata)
    {
        \$this->persister = \$persister;
        \$this->classMetadata = \$classMetadata;
    }

    /**
     * Converts a comparison expression into the target query language output.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\Comparison \$comparison
     *
     * @return mixed
     */
    public function walkComparison(Comparison \$comparison)
    {
        \$field = \$comparison->getField();
        \$value = \$comparison->getValue()->getValue(); // shortcut for walkValue()

        if (isset(\$this->classMetadata->associationMappings[\$field]) &&
            \$value !== null &&
            ! is_object(\$value) &&
            ! in_array(\$comparison->getOperator(), [Comparison::IN, Comparison::NIN])) {

            throw PersisterException::matchingAssocationFieldRequiresObject(\$this->classMetadata->name, \$field);
        }

        return \$this->persister->getSelectConditionStatementSQL(\$field, \$value, null, \$comparison->getOperator());
    }

    /**
     * Converts a composite expression into the target query language output.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\CompositeExpression \$expr
     *
     * @return mixed
     *
     * @throws \\RuntimeException
     */
    public function walkCompositeExpression(CompositeExpression \$expr)
    {
        \$expressionList = [];

        foreach (\$expr->getExpressionList() as \$child) {
            \$expressionList[] = \$this->dispatch(\$child);
        }

        switch(\$expr->getType()) {
            case CompositeExpression::TYPE_AND:
                return '(' . implode(' AND ', \$expressionList) . ')';

            case CompositeExpression::TYPE_OR:
                return '(' . implode(' OR ', \$expressionList) . ')';

            default:
                throw new \\RuntimeException(\"Unknown composite \" . \$expr->getType());
        }
    }

    /**
     * Converts a value expression into the target query language part.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\Value \$value
     *
     * @return mixed
     */
    public function walkValue(Value \$value)
    {
        return '?';
    }
}

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlExpressionVisitor.php";
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

namespace Doctrine\\ORM\\Persisters;

use Doctrine\\ORM\\Mapping\\ClassMetadata;

use Doctrine\\Common\\Collections\\Expr\\ExpressionVisitor;
use Doctrine\\Common\\Collections\\Expr\\Comparison;
use Doctrine\\Common\\Collections\\Expr\\Value;
use Doctrine\\Common\\Collections\\Expr\\CompositeExpression;
use Doctrine\\ORM\\Persisters\\Entity\\BasicEntityPersister;

/**
 * Visit Expressions and generate SQL WHERE conditions from them.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since 2.3
 */
class SqlExpressionVisitor extends ExpressionVisitor
{
    /**
     * @var \\Doctrine\\ORM\\Persisters\\Entity\\BasicEntityPersister
     */
    private \$persister;

    /**
     * @var \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    private \$classMetadata;

    /**
     * @param \\Doctrine\\ORM\\Persisters\\Entity\\BasicEntityPersister \$persister
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata                  \$classMetadata
     */
    public function __construct(BasicEntityPersister \$persister, ClassMetadata \$classMetadata)
    {
        \$this->persister = \$persister;
        \$this->classMetadata = \$classMetadata;
    }

    /**
     * Converts a comparison expression into the target query language output.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\Comparison \$comparison
     *
     * @return mixed
     */
    public function walkComparison(Comparison \$comparison)
    {
        \$field = \$comparison->getField();
        \$value = \$comparison->getValue()->getValue(); // shortcut for walkValue()

        if (isset(\$this->classMetadata->associationMappings[\$field]) &&
            \$value !== null &&
            ! is_object(\$value) &&
            ! in_array(\$comparison->getOperator(), [Comparison::IN, Comparison::NIN])) {

            throw PersisterException::matchingAssocationFieldRequiresObject(\$this->classMetadata->name, \$field);
        }

        return \$this->persister->getSelectConditionStatementSQL(\$field, \$value, null, \$comparison->getOperator());
    }

    /**
     * Converts a composite expression into the target query language output.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\CompositeExpression \$expr
     *
     * @return mixed
     *
     * @throws \\RuntimeException
     */
    public function walkCompositeExpression(CompositeExpression \$expr)
    {
        \$expressionList = [];

        foreach (\$expr->getExpressionList() as \$child) {
            \$expressionList[] = \$this->dispatch(\$child);
        }

        switch(\$expr->getType()) {
            case CompositeExpression::TYPE_AND:
                return '(' . implode(' AND ', \$expressionList) . ')';

            case CompositeExpression::TYPE_OR:
                return '(' . implode(' OR ', \$expressionList) . ')';

            default:
                throw new \\RuntimeException(\"Unknown composite \" . \$expr->getType());
        }
    }

    /**
     * Converts a value expression into the target query language part.
     *
     * @param \\Doctrine\\Common\\Collections\\Expr\\Value \$value
     *
     * @return mixed
     */
    public function walkValue(Value \$value)
    {
        return '?';
    }
}

", "vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlExpressionVisitor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlExpressionVisitor.php");
    }
}
