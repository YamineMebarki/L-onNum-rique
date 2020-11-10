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

/* vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/CompositeExpression.php */
class __TwigTemplate_f3c4b370ca333a9e36236f4aaaca7dd31d2fef6c5704bfc9f66fd8eced814d12 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/CompositeExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/CompositeExpression.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Collections\\Expr;

use RuntimeException;

/**
 * Expression of Expressions combined by AND or OR operation.
 */
class CompositeExpression implements Expression
{
    public const TYPE_AND = 'AND';
    public const TYPE_OR  = 'OR';

    /** @var string */
    private \$type;

    /** @var Expression[] */
    private \$expressions = [];

    /**
     * @param string \$type
     * @param array  \$expressions
     *
     * @throws RuntimeException
     */
    public function __construct(\$type, array \$expressions)
    {
        \$this->type = \$type;

        foreach (\$expressions as \$expr) {
            if (\$expr instanceof Value) {
                throw new RuntimeException('Values are not supported expressions as children of and/or expressions.');
            }
            if (! (\$expr instanceof Expression)) {
                throw new RuntimeException('No expression given to CompositeExpression.');
            }

            \$this->expressions[] = \$expr;
        }
    }

    /**
     * Returns the list of expressions nested in this composite.
     *
     * @return Expression[]
     */
    public function getExpressionList()
    {
        return \$this->expressions;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * {@inheritDoc}
     */
    public function visit(ExpressionVisitor \$visitor)
    {
        return \$visitor->walkCompositeExpression(\$this);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/CompositeExpression.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Collections\\Expr;

use RuntimeException;

/**
 * Expression of Expressions combined by AND or OR operation.
 */
class CompositeExpression implements Expression
{
    public const TYPE_AND = 'AND';
    public const TYPE_OR  = 'OR';

    /** @var string */
    private \$type;

    /** @var Expression[] */
    private \$expressions = [];

    /**
     * @param string \$type
     * @param array  \$expressions
     *
     * @throws RuntimeException
     */
    public function __construct(\$type, array \$expressions)
    {
        \$this->type = \$type;

        foreach (\$expressions as \$expr) {
            if (\$expr instanceof Value) {
                throw new RuntimeException('Values are not supported expressions as children of and/or expressions.');
            }
            if (! (\$expr instanceof Expression)) {
                throw new RuntimeException('No expression given to CompositeExpression.');
            }

            \$this->expressions[] = \$expr;
        }
    }

    /**
     * Returns the list of expressions nested in this composite.
     *
     * @return Expression[]
     */
    public function getExpressionList()
    {
        return \$this->expressions;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * {@inheritDoc}
     */
    public function visit(ExpressionVisitor \$visitor)
    {
        return \$visitor->walkCompositeExpression(\$this);
    }
}
", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/CompositeExpression.php", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/CompositeExpression.php");
    }
}
