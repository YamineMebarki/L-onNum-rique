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

/* vendor/doctrine/collections/lib/Doctrine/Common/Collections/Criteria.php */
class __TwigTemplate_160c65e67186b57ed96d73853e433ae1ce46159f27bff16b544c36c43bf468ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Criteria.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Criteria.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Collections;

use Doctrine\\Common\\Collections\\Expr\\CompositeExpression;
use Doctrine\\Common\\Collections\\Expr\\Expression;
use function array_map;
use function strtoupper;

/**
 * Criteria for filtering Selectable collections.
 */
class Criteria
{
    public const ASC = 'ASC';

    public const DESC = 'DESC';

    /** @var ExpressionBuilder|null */
    private static \$expressionBuilder;

    /** @var Expression|null */
    private \$expression;

    /** @var string[] */
    private \$orderings = [];

    /** @var int|null */
    private \$firstResult;

    /** @var int|null */
    private \$maxResults;

    /**
     * Creates an instance of the class.
     *
     * @return Criteria
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Returns the expression builder.
     *
     * @return ExpressionBuilder
     */
    public static function expr()
    {
        if (self::\$expressionBuilder === null) {
            self::\$expressionBuilder = new ExpressionBuilder();
        }

        return self::\$expressionBuilder;
    }

    /**
     * Construct a new Criteria.
     *
     * @param string[]|null \$orderings
     * @param int|null      \$firstResult
     * @param int|null      \$maxResults
     */
    public function __construct(?Expression \$expression = null, ?array \$orderings = null, \$firstResult = null, \$maxResults = null)
    {
        \$this->expression = \$expression;

        \$this->setFirstResult(\$firstResult);
        \$this->setMaxResults(\$maxResults);

        if (\$orderings === null) {
            return;
        }

        \$this->orderBy(\$orderings);
    }

    /**
     * Sets the where expression to evaluate when this Criteria is searched for.
     *
     * @return Criteria
     */
    public function where(Expression \$expression)
    {
        \$this->expression = \$expression;

        return \$this;
    }

    /**
     * Appends the where expression to evaluate when this Criteria is searched for
     * using an AND with previous expression.
     *
     * @return Criteria
     */
    public function andWhere(Expression \$expression)
    {
        if (\$this->expression === null) {
            return \$this->where(\$expression);
        }

        \$this->expression = new CompositeExpression(
            CompositeExpression::TYPE_AND,
            [\$this->expression, \$expression]
        );

        return \$this;
    }

    /**
     * Appends the where expression to evaluate when this Criteria is searched for
     * using an OR with previous expression.
     *
     * @return Criteria
     */
    public function orWhere(Expression \$expression)
    {
        if (\$this->expression === null) {
            return \$this->where(\$expression);
        }

        \$this->expression = new CompositeExpression(
            CompositeExpression::TYPE_OR,
            [\$this->expression, \$expression]
        );

        return \$this;
    }

    /**
     * Gets the expression attached to this Criteria.
     *
     * @return Expression|null
     */
    public function getWhereExpression()
    {
        return \$this->expression;
    }

    /**
     * Gets the current orderings of this Criteria.
     *
     * @return string[]
     */
    public function getOrderings()
    {
        return \$this->orderings;
    }

    /**
     * Sets the ordering of the result of this Criteria.
     *
     * Keys are field and values are the order, being either ASC or DESC.
     *
     * @see Criteria::ASC
     * @see Criteria::DESC
     *
     * @param string[] \$orderings
     *
     * @return Criteria
     */
    public function orderBy(array \$orderings)
    {
        \$this->orderings = array_map(
            static function (string \$ordering) : string {
                return strtoupper(\$ordering) === Criteria::ASC ? Criteria::ASC : Criteria::DESC;
            },
            \$orderings
        );

        return \$this;
    }

    /**
     * Gets the current first result option of this Criteria.
     *
     * @return int|null
     */
    public function getFirstResult()
    {
        return \$this->firstResult;
    }

    /**
     * Set the number of first result that this Criteria should return.
     *
     * @param int|null \$firstResult The value to set.
     *
     * @return Criteria
     */
    public function setFirstResult(\$firstResult)
    {
        \$this->firstResult = \$firstResult === null ? null : (int) \$firstResult;

        return \$this;
    }

    /**
     * Gets maxResults.
     *
     * @return int|null
     */
    public function getMaxResults()
    {
        return \$this->maxResults;
    }

    /**
     * Sets maxResults.
     *
     * @param int|null \$maxResults The value to set.
     *
     * @return Criteria
     */
    public function setMaxResults(\$maxResults)
    {
        \$this->maxResults = \$maxResults === null ? null : (int) \$maxResults;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Criteria.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Collections;

use Doctrine\\Common\\Collections\\Expr\\CompositeExpression;
use Doctrine\\Common\\Collections\\Expr\\Expression;
use function array_map;
use function strtoupper;

/**
 * Criteria for filtering Selectable collections.
 */
class Criteria
{
    public const ASC = 'ASC';

    public const DESC = 'DESC';

    /** @var ExpressionBuilder|null */
    private static \$expressionBuilder;

    /** @var Expression|null */
    private \$expression;

    /** @var string[] */
    private \$orderings = [];

    /** @var int|null */
    private \$firstResult;

    /** @var int|null */
    private \$maxResults;

    /**
     * Creates an instance of the class.
     *
     * @return Criteria
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Returns the expression builder.
     *
     * @return ExpressionBuilder
     */
    public static function expr()
    {
        if (self::\$expressionBuilder === null) {
            self::\$expressionBuilder = new ExpressionBuilder();
        }

        return self::\$expressionBuilder;
    }

    /**
     * Construct a new Criteria.
     *
     * @param string[]|null \$orderings
     * @param int|null      \$firstResult
     * @param int|null      \$maxResults
     */
    public function __construct(?Expression \$expression = null, ?array \$orderings = null, \$firstResult = null, \$maxResults = null)
    {
        \$this->expression = \$expression;

        \$this->setFirstResult(\$firstResult);
        \$this->setMaxResults(\$maxResults);

        if (\$orderings === null) {
            return;
        }

        \$this->orderBy(\$orderings);
    }

    /**
     * Sets the where expression to evaluate when this Criteria is searched for.
     *
     * @return Criteria
     */
    public function where(Expression \$expression)
    {
        \$this->expression = \$expression;

        return \$this;
    }

    /**
     * Appends the where expression to evaluate when this Criteria is searched for
     * using an AND with previous expression.
     *
     * @return Criteria
     */
    public function andWhere(Expression \$expression)
    {
        if (\$this->expression === null) {
            return \$this->where(\$expression);
        }

        \$this->expression = new CompositeExpression(
            CompositeExpression::TYPE_AND,
            [\$this->expression, \$expression]
        );

        return \$this;
    }

    /**
     * Appends the where expression to evaluate when this Criteria is searched for
     * using an OR with previous expression.
     *
     * @return Criteria
     */
    public function orWhere(Expression \$expression)
    {
        if (\$this->expression === null) {
            return \$this->where(\$expression);
        }

        \$this->expression = new CompositeExpression(
            CompositeExpression::TYPE_OR,
            [\$this->expression, \$expression]
        );

        return \$this;
    }

    /**
     * Gets the expression attached to this Criteria.
     *
     * @return Expression|null
     */
    public function getWhereExpression()
    {
        return \$this->expression;
    }

    /**
     * Gets the current orderings of this Criteria.
     *
     * @return string[]
     */
    public function getOrderings()
    {
        return \$this->orderings;
    }

    /**
     * Sets the ordering of the result of this Criteria.
     *
     * Keys are field and values are the order, being either ASC or DESC.
     *
     * @see Criteria::ASC
     * @see Criteria::DESC
     *
     * @param string[] \$orderings
     *
     * @return Criteria
     */
    public function orderBy(array \$orderings)
    {
        \$this->orderings = array_map(
            static function (string \$ordering) : string {
                return strtoupper(\$ordering) === Criteria::ASC ? Criteria::ASC : Criteria::DESC;
            },
            \$orderings
        );

        return \$this;
    }

    /**
     * Gets the current first result option of this Criteria.
     *
     * @return int|null
     */
    public function getFirstResult()
    {
        return \$this->firstResult;
    }

    /**
     * Set the number of first result that this Criteria should return.
     *
     * @param int|null \$firstResult The value to set.
     *
     * @return Criteria
     */
    public function setFirstResult(\$firstResult)
    {
        \$this->firstResult = \$firstResult === null ? null : (int) \$firstResult;

        return \$this;
    }

    /**
     * Gets maxResults.
     *
     * @return int|null
     */
    public function getMaxResults()
    {
        return \$this->maxResults;
    }

    /**
     * Sets maxResults.
     *
     * @param int|null \$maxResults The value to set.
     *
     * @return Criteria
     */
    public function setMaxResults(\$maxResults)
    {
        \$this->maxResults = \$maxResults === null ? null : (int) \$maxResults;

        return \$this;
    }
}
", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Criteria.php", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Criteria.php");
    }
}
