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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/If_.php */
class __TwigTemplate_628487b373280e4cb89db663852c9308b1c8263a1ad4038826a9f07dd26b003b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/If_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/If_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class If_ extends Node\\Stmt
{
    /** @var Node\\Expr Condition expression */
    public \$cond;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;
    /** @var ElseIf_[] Elseif clauses */
    public \$elseifs;
    /** @var null|Else_ Else clause */
    public \$else;

    /**
     * Constructs an if node.
     *
     * @param Node\\Expr \$cond       Condition
     * @param array     \$subNodes   Array of the following optional subnodes:
     *                              'stmts'   => array(): Statements
     *                              'elseifs' => array(): Elseif clauses
     *                              'else'    => null   : Else clause
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Node\\Expr \$cond, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->cond = \$cond;
        \$this->stmts = \$subNodes['stmts'] ?? [];
        \$this->elseifs = \$subNodes['elseifs'] ?? [];
        \$this->else = \$subNodes['else'] ?? null;
    }

    public function getSubNodeNames() : array {
        return ['cond', 'stmts', 'elseifs', 'else'];
    }
    
    public function getType() : string {
        return 'Stmt_If';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/If_.php";
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

class If_ extends Node\\Stmt
{
    /** @var Node\\Expr Condition expression */
    public \$cond;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;
    /** @var ElseIf_[] Elseif clauses */
    public \$elseifs;
    /** @var null|Else_ Else clause */
    public \$else;

    /**
     * Constructs an if node.
     *
     * @param Node\\Expr \$cond       Condition
     * @param array     \$subNodes   Array of the following optional subnodes:
     *                              'stmts'   => array(): Statements
     *                              'elseifs' => array(): Elseif clauses
     *                              'else'    => null   : Else clause
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Node\\Expr \$cond, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->cond = \$cond;
        \$this->stmts = \$subNodes['stmts'] ?? [];
        \$this->elseifs = \$subNodes['elseifs'] ?? [];
        \$this->else = \$subNodes['else'] ?? null;
    }

    public function getSubNodeNames() : array {
        return ['cond', 'stmts', 'elseifs', 'else'];
    }
    
    public function getType() : string {
        return 'Stmt_If';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/If_.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/If_.php");
    }
}
