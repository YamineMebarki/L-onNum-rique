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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Expr/AssignOp.php */
class __TwigTemplate_a788ad3ffc0f98555f36249165c3795166706a7d7ba15a0cc6c4f489d4dad5e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/AssignOp.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/AssignOp.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

abstract class AssignOp extends Expr
{
    /** @var Expr Variable */
    public \$var;
    /** @var Expr Expression */
    public \$expr;

    /**
     * Constructs a compound assignment operation node.
     *
     * @param Expr  \$var        Variable
     * @param Expr  \$expr       Expression
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$var, Expr \$expr, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->expr = \$expr;
    }

    public function getSubNodeNames() : array {
        return ['var', 'expr'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/AssignOp.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

abstract class AssignOp extends Expr
{
    /** @var Expr Variable */
    public \$var;
    /** @var Expr Expression */
    public \$expr;

    /**
     * Constructs a compound assignment operation node.
     *
     * @param Expr  \$var        Variable
     * @param Expr  \$expr       Expression
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$var, Expr \$expr, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->expr = \$expr;
    }

    public function getSubNodeNames() : array {
        return ['var', 'expr'];
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/AssignOp.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/AssignOp.php");
    }
}
