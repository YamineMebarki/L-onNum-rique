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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/CompositeExpression.php */
class __TwigTemplate_7c628a4041ae8c29b5bbf45e86425ca0cec1ef3691eed5766afac9202dc4bdb1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/CompositeExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/CompositeExpression.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Query\\Expression;

use Countable;
use function count;
use function implode;

/**
 * Composite expression is responsible to build a group of similar expression.
 */
class CompositeExpression implements Countable
{
    /**
     * Constant that represents an AND composite expression.
     */
    public const TYPE_AND = 'AND';

    /**
     * Constant that represents an OR composite expression.
     */
    public const TYPE_OR = 'OR';

    /**
     * The instance type of composite expression.
     *
     * @var string
     */
    private \$type;

    /**
     * Each expression part of the composite expression.
     *
     * @var self[]|string[]
     */
    private \$parts = [];

    /**
     * @param string          \$type  Instance type of composite expression.
     * @param self[]|string[] \$parts Composition of expressions to be joined on composite expression.
     */
    public function __construct(\$type, array \$parts = [])
    {
        \$this->type = \$type;

        \$this->addMultiple(\$parts);
    }

    /**
     * Adds multiple parts to composite expression.
     *
     * @param self[]|string[] \$parts
     *
     * @return \\Doctrine\\DBAL\\Query\\Expression\\CompositeExpression
     */
    public function addMultiple(array \$parts = [])
    {
        foreach (\$parts as \$part) {
            \$this->add(\$part);
        }

        return \$this;
    }

    /**
     * Adds an expression to composite expression.
     *
     * @param mixed \$part
     *
     * @return \\Doctrine\\DBAL\\Query\\Expression\\CompositeExpression
     */
    public function add(\$part)
    {
        if (empty(\$part)) {
            return \$this;
        }

        if (\$part instanceof self && count(\$part) === 0) {
            return \$this;
        }

        \$this->parts[] = \$part;

        return \$this;
    }

    /**
     * Retrieves the amount of expressions on composite expression.
     *
     * @return int
     */
    public function count()
    {
        return count(\$this->parts);
    }

    /**
     * Retrieves the string representation of this composite expression.
     *
     * @return string
     */
    public function __toString()
    {
        if (\$this->count() === 1) {
            return (string) \$this->parts[0];
        }

        return '(' . implode(') ' . \$this->type . ' (', \$this->parts) . ')';
    }

    /**
     * Returns the type of this composite expression (AND/OR).
     *
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/CompositeExpression.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Query\\Expression;

use Countable;
use function count;
use function implode;

/**
 * Composite expression is responsible to build a group of similar expression.
 */
class CompositeExpression implements Countable
{
    /**
     * Constant that represents an AND composite expression.
     */
    public const TYPE_AND = 'AND';

    /**
     * Constant that represents an OR composite expression.
     */
    public const TYPE_OR = 'OR';

    /**
     * The instance type of composite expression.
     *
     * @var string
     */
    private \$type;

    /**
     * Each expression part of the composite expression.
     *
     * @var self[]|string[]
     */
    private \$parts = [];

    /**
     * @param string          \$type  Instance type of composite expression.
     * @param self[]|string[] \$parts Composition of expressions to be joined on composite expression.
     */
    public function __construct(\$type, array \$parts = [])
    {
        \$this->type = \$type;

        \$this->addMultiple(\$parts);
    }

    /**
     * Adds multiple parts to composite expression.
     *
     * @param self[]|string[] \$parts
     *
     * @return \\Doctrine\\DBAL\\Query\\Expression\\CompositeExpression
     */
    public function addMultiple(array \$parts = [])
    {
        foreach (\$parts as \$part) {
            \$this->add(\$part);
        }

        return \$this;
    }

    /**
     * Adds an expression to composite expression.
     *
     * @param mixed \$part
     *
     * @return \\Doctrine\\DBAL\\Query\\Expression\\CompositeExpression
     */
    public function add(\$part)
    {
        if (empty(\$part)) {
            return \$this;
        }

        if (\$part instanceof self && count(\$part) === 0) {
            return \$this;
        }

        \$this->parts[] = \$part;

        return \$this;
    }

    /**
     * Retrieves the amount of expressions on composite expression.
     *
     * @return int
     */
    public function count()
    {
        return count(\$this->parts);
    }

    /**
     * Retrieves the string representation of this composite expression.
     *
     * @return string
     */
    public function __toString()
    {
        if (\$this->count() === 1) {
            return (string) \$this->parts[0];
        }

        return '(' . implode(') ' . \$this->type . ' (', \$this->parts) . ')';
    }

    /**
     * Returns the type of this composite expression (AND/OR).
     *
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/CompositeExpression.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/CompositeExpression.php");
    }
}
