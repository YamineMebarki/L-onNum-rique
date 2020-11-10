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

/* vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php */
class __TwigTemplate_59bff4a49320bc124469252b9498cb3421fcbc9d4ce0cce562d2e0e3438312ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Collections\\Expr;

use RuntimeException;
use function get_class;

/**
 * An Expression visitor walks a graph of expressions and turns them into a
 * query for the underlying implementation.
 */
abstract class ExpressionVisitor
{
    /**
     * Converts a comparison expression into the target query language output.
     *
     * @return mixed
     */
    abstract public function walkComparison(Comparison \$comparison);

    /**
     * Converts a value expression into the target query language part.
     *
     * @return mixed
     */
    abstract public function walkValue(Value \$value);

    /**
     * Converts a composite expression into the target query language output.
     *
     * @return mixed
     */
    abstract public function walkCompositeExpression(CompositeExpression \$expr);

    /**
     * Dispatches walking an expression to the appropriate handler.
     *
     * @return mixed
     *
     * @throws RuntimeException
     */
    public function dispatch(Expression \$expr)
    {
        switch (true) {
            case \$expr instanceof Comparison:
                return \$this->walkComparison(\$expr);
            case \$expr instanceof Value:
                return \$this->walkValue(\$expr);
            case \$expr instanceof CompositeExpression:
                return \$this->walkCompositeExpression(\$expr);
            default:
                throw new RuntimeException('Unknown Expression ' . get_class(\$expr));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php";
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
use function get_class;

/**
 * An Expression visitor walks a graph of expressions and turns them into a
 * query for the underlying implementation.
 */
abstract class ExpressionVisitor
{
    /**
     * Converts a comparison expression into the target query language output.
     *
     * @return mixed
     */
    abstract public function walkComparison(Comparison \$comparison);

    /**
     * Converts a value expression into the target query language part.
     *
     * @return mixed
     */
    abstract public function walkValue(Value \$value);

    /**
     * Converts a composite expression into the target query language output.
     *
     * @return mixed
     */
    abstract public function walkCompositeExpression(CompositeExpression \$expr);

    /**
     * Dispatches walking an expression to the appropriate handler.
     *
     * @return mixed
     *
     * @throws RuntimeException
     */
    public function dispatch(Expression \$expr)
    {
        switch (true) {
            case \$expr instanceof Comparison:
                return \$this->walkComparison(\$expr);
            case \$expr instanceof Value:
                return \$this->walkValue(\$expr);
            case \$expr instanceof CompositeExpression:
                return \$this->walkCompositeExpression(\$expr);
            default:
                throw new RuntimeException('Unknown Expression ' . get_class(\$expr));
        }
    }
}
", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php");
    }
}
