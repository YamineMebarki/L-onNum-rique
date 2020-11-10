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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Foreach_.php */
class __TwigTemplate_ed91f23536af6a6cc3400e58e58a8fc2b608dec735dc6b07c89e4e09c4252893 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Foreach_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Foreach_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class Foreach_ extends Node\\Stmt
{
    /** @var Node\\Expr Expression to iterate */
    public \$expr;
    /** @var null|Node\\Expr Variable to assign key to */
    public \$keyVar;
    /** @var bool Whether to assign value by reference */
    public \$byRef;
    /** @var Node\\Expr Variable to assign value to */
    public \$valueVar;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a foreach node.
     *
     * @param Node\\Expr \$expr       Expression to iterate
     * @param Node\\Expr \$valueVar   Variable to assign value to
     * @param array     \$subNodes   Array of the following optional subnodes:
     *                              'keyVar' => null   : Variable to assign key to
     *                              'byRef'  => false  : Whether to assign value by reference
     *                              'stmts'  => array(): Statements
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Node\\Expr \$expr, Node\\Expr \$valueVar, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->expr = \$expr;
        \$this->keyVar = \$subNodes['keyVar'] ?? null;
        \$this->byRef = \$subNodes['byRef'] ?? false;
        \$this->valueVar = \$valueVar;
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['expr', 'keyVar', 'byRef', 'valueVar', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Foreach';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Foreach_.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class Foreach_ extends Node\\Stmt
{
    /** @var Node\\Expr Expression to iterate */
    public \$expr;
    /** @var null|Node\\Expr Variable to assign key to */
    public \$keyVar;
    /** @var bool Whether to assign value by reference */
    public \$byRef;
    /** @var Node\\Expr Variable to assign value to */
    public \$valueVar;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a foreach node.
     *
     * @param Node\\Expr \$expr       Expression to iterate
     * @param Node\\Expr \$valueVar   Variable to assign value to
     * @param array     \$subNodes   Array of the following optional subnodes:
     *                              'keyVar' => null   : Variable to assign key to
     *                              'byRef'  => false  : Whether to assign value by reference
     *                              'stmts'  => array(): Statements
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Node\\Expr \$expr, Node\\Expr \$valueVar, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->expr = \$expr;
        \$this->keyVar = \$subNodes['keyVar'] ?? null;
        \$this->byRef = \$subNodes['byRef'] ?? false;
        \$this->valueVar = \$valueVar;
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['expr', 'keyVar', 'byRef', 'valueVar', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Foreach';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Foreach_.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Foreach_.php");
    }
}
