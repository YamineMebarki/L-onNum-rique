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

/* vendor/doctrine/collections/lib/Doctrine/Common/Collections/ExpressionBuilder.php */
class __TwigTemplate_830cbc6122f873e7909ebac63370c00467eafbef8a5c09e36035b9fffc8feef4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/ExpressionBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/ExpressionBuilder.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Collections;

use Doctrine\\Common\\Collections\\Expr\\Comparison;
use Doctrine\\Common\\Collections\\Expr\\CompositeExpression;
use Doctrine\\Common\\Collections\\Expr\\Value;
use function func_get_args;

/**
 * Builder for Expressions in the {@link Selectable} interface.
 *
 * Important Notice for interoperable code: You have to use scalar
 * values only for comparisons, otherwise the behavior of the comparison
 * may be different between implementations (Array vs ORM vs ODM).
 */
class ExpressionBuilder
{
    /**
     * @param mixed \$x
     *
     * @return CompositeExpression
     */
    public function andX(\$x = null)
    {
        return new CompositeExpression(CompositeExpression::TYPE_AND, func_get_args());
    }

    /**
     * @param mixed \$x
     *
     * @return CompositeExpression
     */
    public function orX(\$x = null)
    {
        return new CompositeExpression(CompositeExpression::TYPE_OR, func_get_args());
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function eq(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::EQ, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function gt(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::GT, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function lt(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::LT, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function gte(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::GTE, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function lte(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::LTE, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function neq(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::NEQ, new Value(\$value));
    }

    /**
     * @param string \$field
     *
     * @return Comparison
     */
    public function isNull(\$field)
    {
        return new Comparison(\$field, Comparison::EQ, new Value(null));
    }

    /**
     * @param string \$field
     * @param array  \$values
     *
     * @return Comparison
     */
    public function in(\$field, array \$values)
    {
        return new Comparison(\$field, Comparison::IN, new Value(\$values));
    }

    /**
     * @param string \$field
     * @param array  \$values
     *
     * @return Comparison
     */
    public function notIn(\$field, array \$values)
    {
        return new Comparison(\$field, Comparison::NIN, new Value(\$values));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function contains(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::CONTAINS, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function memberOf(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::MEMBER_OF, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function startsWith(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::STARTS_WITH, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function endsWith(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::ENDS_WITH, new Value(\$value));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/lib/Doctrine/Common/Collections/ExpressionBuilder.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Collections;

use Doctrine\\Common\\Collections\\Expr\\Comparison;
use Doctrine\\Common\\Collections\\Expr\\CompositeExpression;
use Doctrine\\Common\\Collections\\Expr\\Value;
use function func_get_args;

/**
 * Builder for Expressions in the {@link Selectable} interface.
 *
 * Important Notice for interoperable code: You have to use scalar
 * values only for comparisons, otherwise the behavior of the comparison
 * may be different between implementations (Array vs ORM vs ODM).
 */
class ExpressionBuilder
{
    /**
     * @param mixed \$x
     *
     * @return CompositeExpression
     */
    public function andX(\$x = null)
    {
        return new CompositeExpression(CompositeExpression::TYPE_AND, func_get_args());
    }

    /**
     * @param mixed \$x
     *
     * @return CompositeExpression
     */
    public function orX(\$x = null)
    {
        return new CompositeExpression(CompositeExpression::TYPE_OR, func_get_args());
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function eq(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::EQ, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function gt(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::GT, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function lt(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::LT, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function gte(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::GTE, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function lte(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::LTE, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function neq(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::NEQ, new Value(\$value));
    }

    /**
     * @param string \$field
     *
     * @return Comparison
     */
    public function isNull(\$field)
    {
        return new Comparison(\$field, Comparison::EQ, new Value(null));
    }

    /**
     * @param string \$field
     * @param array  \$values
     *
     * @return Comparison
     */
    public function in(\$field, array \$values)
    {
        return new Comparison(\$field, Comparison::IN, new Value(\$values));
    }

    /**
     * @param string \$field
     * @param array  \$values
     *
     * @return Comparison
     */
    public function notIn(\$field, array \$values)
    {
        return new Comparison(\$field, Comparison::NIN, new Value(\$values));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function contains(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::CONTAINS, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function memberOf(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::MEMBER_OF, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function startsWith(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::STARTS_WITH, new Value(\$value));
    }

    /**
     * @param string \$field
     * @param mixed  \$value
     *
     * @return Comparison
     */
    public function endsWith(\$field, \$value)
    {
        return new Comparison(\$field, Comparison::ENDS_WITH, new Value(\$value));
    }
}
", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/ExpressionBuilder.php", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ExpressionBuilder.php");
    }
}
