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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/ExpressionBuilder.php */
class __TwigTemplate_17a4246761d7c010d51e11709867f4624a7ba9128e675b53ec9fa5fb8592c344 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/ExpressionBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/ExpressionBuilder.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Query\\Expression;

use Doctrine\\DBAL\\Connection;
use function func_get_arg;
use function func_get_args;
use function func_num_args;
use function implode;
use function sprintf;

/**
 * ExpressionBuilder class is responsible to dynamically create SQL query parts.
 */
class ExpressionBuilder
{
    public const EQ  = '=';
    public const NEQ = '<>';
    public const LT  = '<';
    public const LTE = '<=';
    public const GT  = '>';
    public const GTE = '>=';

    /**
     * The DBAL Connection.
     *
     * @var Connection
     */
    private \$connection;

    /**
     * Initializes a new <tt>ExpressionBuilder</tt>.
     *
     * @param Connection \$connection The DBAL Connection.
     */
    public function __construct(Connection \$connection)
    {
        \$this->connection = \$connection;
    }

    /**
     * Creates a conjunction of the given boolean expressions.
     *
     * Example:
     *
     *     [php]
     *     // (u.type = ?) AND (u.role = ?)
     *     \$expr->andX('u.type = ?', 'u.role = ?'));
     *
     * @param mixed \$x Optional clause. Defaults = null, but requires
     *                 at least one defined when converting to string.
     *
     * @return CompositeExpression
     */
    public function andX(\$x = null)
    {
        return new CompositeExpression(CompositeExpression::TYPE_AND, func_get_args());
    }

    /**
     * Creates a disjunction of the given boolean expressions.
     *
     * Example:
     *
     *     [php]
     *     // (u.type = ?) OR (u.role = ?)
     *     \$qb->where(\$qb->expr()->orX('u.type = ?', 'u.role = ?'));
     *
     * @param mixed \$x Optional clause. Defaults = null, but requires
     *                 at least one defined when converting to string.
     *
     * @return CompositeExpression
     */
    public function orX(\$x = null)
    {
        return new CompositeExpression(CompositeExpression::TYPE_OR, func_get_args());
    }

    /**
     * Creates a comparison expression.
     *
     * @param mixed  \$x        The left expression.
     * @param string \$operator One of the ExpressionBuilder::* constants.
     * @param mixed  \$y        The right expression.
     *
     * @return string
     */
    public function comparison(\$x, \$operator, \$y)
    {
        return \$x . ' ' . \$operator . ' ' . \$y;
    }

    /**
     * Creates an equality comparison expression with the given arguments.
     *
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> = <right expr>. Example:
     *
     *     [php]
     *     // u.id = ?
     *     \$expr->eq('u.id', '?');
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function eq(\$x, \$y)
    {
        return \$this->comparison(\$x, self::EQ, \$y);
    }

    /**
     * Creates a non equality comparison expression with the given arguments.
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> <> <right expr>. Example:
     *
     *     [php]
     *     // u.id <> 1
     *     \$q->where(\$q->expr()->neq('u.id', '1'));
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function neq(\$x, \$y)
    {
        return \$this->comparison(\$x, self::NEQ, \$y);
    }

    /**
     * Creates a lower-than comparison expression with the given arguments.
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> < <right expr>. Example:
     *
     *     [php]
     *     // u.id < ?
     *     \$q->where(\$q->expr()->lt('u.id', '?'));
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function lt(\$x, \$y)
    {
        return \$this->comparison(\$x, self::LT, \$y);
    }

    /**
     * Creates a lower-than-equal comparison expression with the given arguments.
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> <= <right expr>. Example:
     *
     *     [php]
     *     // u.id <= ?
     *     \$q->where(\$q->expr()->lte('u.id', '?'));
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function lte(\$x, \$y)
    {
        return \$this->comparison(\$x, self::LTE, \$y);
    }

    /**
     * Creates a greater-than comparison expression with the given arguments.
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> > <right expr>. Example:
     *
     *     [php]
     *     // u.id > ?
     *     \$q->where(\$q->expr()->gt('u.id', '?'));
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function gt(\$x, \$y)
    {
        return \$this->comparison(\$x, self::GT, \$y);
    }

    /**
     * Creates a greater-than-equal comparison expression with the given arguments.
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> >= <right expr>. Example:
     *
     *     [php]
     *     // u.id >= ?
     *     \$q->where(\$q->expr()->gte('u.id', '?'));
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function gte(\$x, \$y)
    {
        return \$this->comparison(\$x, self::GTE, \$y);
    }

    /**
     * Creates an IS NULL expression with the given arguments.
     *
     * @param string \$x The field in string format to be restricted by IS NULL.
     *
     * @return string
     */
    public function isNull(\$x)
    {
        return \$x . ' IS NULL';
    }

    /**
     * Creates an IS NOT NULL expression with the given arguments.
     *
     * @param string \$x The field in string format to be restricted by IS NOT NULL.
     *
     * @return string
     */
    public function isNotNull(\$x)
    {
        return \$x . ' IS NOT NULL';
    }

    /**
     * Creates a LIKE() comparison expression with the given arguments.
     *
     * @param string \$x Field in string format to be inspected by LIKE() comparison.
     * @param mixed  \$y Argument to be used in LIKE() comparison.
     *
     * @return string
     */
    public function like(\$x, \$y/*, ?string \$escapeChar = null */)
    {
        return \$this->comparison(\$x, 'LIKE', \$y) .
            (func_num_args() >= 3 ? sprintf(' ESCAPE %s', func_get_arg(2)) : '');
    }

    /**
     * Creates a NOT LIKE() comparison expression with the given arguments.
     *
     * @param string \$x Field in string format to be inspected by NOT LIKE() comparison.
     * @param mixed  \$y Argument to be used in NOT LIKE() comparison.
     *
     * @return string
     */
    public function notLike(\$x, \$y/*, ?string \$escapeChar = null */)
    {
        return \$this->comparison(\$x, 'NOT LIKE', \$y) .
            (func_num_args() >= 3 ? sprintf(' ESCAPE %s', func_get_arg(2)) : '');
    }

    /**
     * Creates a IN () comparison expression with the given arguments.
     *
     * @param string          \$x The field in string format to be inspected by IN() comparison.
     * @param string|string[] \$y The placeholder or the array of values to be used by IN() comparison.
     *
     * @return string
     */
    public function in(\$x, \$y)
    {
        return \$this->comparison(\$x, 'IN', '(' . implode(', ', (array) \$y) . ')');
    }

    /**
     * Creates a NOT IN () comparison expression with the given arguments.
     *
     * @param string          \$x The field in string format to be inspected by NOT IN() comparison.
     * @param string|string[] \$y The placeholder or the array of values to be used by NOT IN() comparison.
     *
     * @return string
     */
    public function notIn(\$x, \$y)
    {
        return \$this->comparison(\$x, 'NOT IN', '(' . implode(', ', (array) \$y) . ')');
    }

    /**
     * Quotes a given input parameter.
     *
     * @param mixed       \$input The parameter to be quoted.
     * @param string|null \$type  The type of the parameter.
     *
     * @return string
     */
    public function literal(\$input, \$type = null)
    {
        return \$this->connection->quote(\$input, \$type);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/ExpressionBuilder.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Query\\Expression;

use Doctrine\\DBAL\\Connection;
use function func_get_arg;
use function func_get_args;
use function func_num_args;
use function implode;
use function sprintf;

/**
 * ExpressionBuilder class is responsible to dynamically create SQL query parts.
 */
class ExpressionBuilder
{
    public const EQ  = '=';
    public const NEQ = '<>';
    public const LT  = '<';
    public const LTE = '<=';
    public const GT  = '>';
    public const GTE = '>=';

    /**
     * The DBAL Connection.
     *
     * @var Connection
     */
    private \$connection;

    /**
     * Initializes a new <tt>ExpressionBuilder</tt>.
     *
     * @param Connection \$connection The DBAL Connection.
     */
    public function __construct(Connection \$connection)
    {
        \$this->connection = \$connection;
    }

    /**
     * Creates a conjunction of the given boolean expressions.
     *
     * Example:
     *
     *     [php]
     *     // (u.type = ?) AND (u.role = ?)
     *     \$expr->andX('u.type = ?', 'u.role = ?'));
     *
     * @param mixed \$x Optional clause. Defaults = null, but requires
     *                 at least one defined when converting to string.
     *
     * @return CompositeExpression
     */
    public function andX(\$x = null)
    {
        return new CompositeExpression(CompositeExpression::TYPE_AND, func_get_args());
    }

    /**
     * Creates a disjunction of the given boolean expressions.
     *
     * Example:
     *
     *     [php]
     *     // (u.type = ?) OR (u.role = ?)
     *     \$qb->where(\$qb->expr()->orX('u.type = ?', 'u.role = ?'));
     *
     * @param mixed \$x Optional clause. Defaults = null, but requires
     *                 at least one defined when converting to string.
     *
     * @return CompositeExpression
     */
    public function orX(\$x = null)
    {
        return new CompositeExpression(CompositeExpression::TYPE_OR, func_get_args());
    }

    /**
     * Creates a comparison expression.
     *
     * @param mixed  \$x        The left expression.
     * @param string \$operator One of the ExpressionBuilder::* constants.
     * @param mixed  \$y        The right expression.
     *
     * @return string
     */
    public function comparison(\$x, \$operator, \$y)
    {
        return \$x . ' ' . \$operator . ' ' . \$y;
    }

    /**
     * Creates an equality comparison expression with the given arguments.
     *
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> = <right expr>. Example:
     *
     *     [php]
     *     // u.id = ?
     *     \$expr->eq('u.id', '?');
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function eq(\$x, \$y)
    {
        return \$this->comparison(\$x, self::EQ, \$y);
    }

    /**
     * Creates a non equality comparison expression with the given arguments.
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> <> <right expr>. Example:
     *
     *     [php]
     *     // u.id <> 1
     *     \$q->where(\$q->expr()->neq('u.id', '1'));
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function neq(\$x, \$y)
    {
        return \$this->comparison(\$x, self::NEQ, \$y);
    }

    /**
     * Creates a lower-than comparison expression with the given arguments.
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> < <right expr>. Example:
     *
     *     [php]
     *     // u.id < ?
     *     \$q->where(\$q->expr()->lt('u.id', '?'));
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function lt(\$x, \$y)
    {
        return \$this->comparison(\$x, self::LT, \$y);
    }

    /**
     * Creates a lower-than-equal comparison expression with the given arguments.
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> <= <right expr>. Example:
     *
     *     [php]
     *     // u.id <= ?
     *     \$q->where(\$q->expr()->lte('u.id', '?'));
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function lte(\$x, \$y)
    {
        return \$this->comparison(\$x, self::LTE, \$y);
    }

    /**
     * Creates a greater-than comparison expression with the given arguments.
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> > <right expr>. Example:
     *
     *     [php]
     *     // u.id > ?
     *     \$q->where(\$q->expr()->gt('u.id', '?'));
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function gt(\$x, \$y)
    {
        return \$this->comparison(\$x, self::GT, \$y);
    }

    /**
     * Creates a greater-than-equal comparison expression with the given arguments.
     * First argument is considered the left expression and the second is the right expression.
     * When converted to string, it will generated a <left expr> >= <right expr>. Example:
     *
     *     [php]
     *     // u.id >= ?
     *     \$q->where(\$q->expr()->gte('u.id', '?'));
     *
     * @param mixed \$x The left expression.
     * @param mixed \$y The right expression.
     *
     * @return string
     */
    public function gte(\$x, \$y)
    {
        return \$this->comparison(\$x, self::GTE, \$y);
    }

    /**
     * Creates an IS NULL expression with the given arguments.
     *
     * @param string \$x The field in string format to be restricted by IS NULL.
     *
     * @return string
     */
    public function isNull(\$x)
    {
        return \$x . ' IS NULL';
    }

    /**
     * Creates an IS NOT NULL expression with the given arguments.
     *
     * @param string \$x The field in string format to be restricted by IS NOT NULL.
     *
     * @return string
     */
    public function isNotNull(\$x)
    {
        return \$x . ' IS NOT NULL';
    }

    /**
     * Creates a LIKE() comparison expression with the given arguments.
     *
     * @param string \$x Field in string format to be inspected by LIKE() comparison.
     * @param mixed  \$y Argument to be used in LIKE() comparison.
     *
     * @return string
     */
    public function like(\$x, \$y/*, ?string \$escapeChar = null */)
    {
        return \$this->comparison(\$x, 'LIKE', \$y) .
            (func_num_args() >= 3 ? sprintf(' ESCAPE %s', func_get_arg(2)) : '');
    }

    /**
     * Creates a NOT LIKE() comparison expression with the given arguments.
     *
     * @param string \$x Field in string format to be inspected by NOT LIKE() comparison.
     * @param mixed  \$y Argument to be used in NOT LIKE() comparison.
     *
     * @return string
     */
    public function notLike(\$x, \$y/*, ?string \$escapeChar = null */)
    {
        return \$this->comparison(\$x, 'NOT LIKE', \$y) .
            (func_num_args() >= 3 ? sprintf(' ESCAPE %s', func_get_arg(2)) : '');
    }

    /**
     * Creates a IN () comparison expression with the given arguments.
     *
     * @param string          \$x The field in string format to be inspected by IN() comparison.
     * @param string|string[] \$y The placeholder or the array of values to be used by IN() comparison.
     *
     * @return string
     */
    public function in(\$x, \$y)
    {
        return \$this->comparison(\$x, 'IN', '(' . implode(', ', (array) \$y) . ')');
    }

    /**
     * Creates a NOT IN () comparison expression with the given arguments.
     *
     * @param string          \$x The field in string format to be inspected by NOT IN() comparison.
     * @param string|string[] \$y The placeholder or the array of values to be used by NOT IN() comparison.
     *
     * @return string
     */
    public function notIn(\$x, \$y)
    {
        return \$this->comparison(\$x, 'NOT IN', '(' . implode(', ', (array) \$y) . ')');
    }

    /**
     * Quotes a given input parameter.
     *
     * @param mixed       \$input The parameter to be quoted.
     * @param string|null \$type  The type of the parameter.
     *
     * @return string
     */
    public function literal(\$input, \$type = null)
    {
        return \$this->connection->quote(\$input, \$type);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/ExpressionBuilder.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/ExpressionBuilder.php");
    }
}
